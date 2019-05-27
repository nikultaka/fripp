<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Models\Cms;
use App\Models\SiteSetting as site;
use App\Helper\CommonHelper;
use Illuminate\Support\Facades\URL;

class ReportsController extends Controller {

    public function __construct() {
        $this->middleware('admin');
    }

    public function index() {
        
        $sub_category = DB::table('sub_category')
                    ->select('*')
                    ->where('category_id',REPORTS)
                    ->where('status',1)
                    ->get();

        $data['sub_category'] = $sub_category;
        
        return view('Admin.reports.add')->with($data);
    }

    public function reports_list() {
        return view('Admin.reports.reports_list');
    }

    public function add(Request $request) {
        $data = array();
        $result = array();
        $result['status'] = 0;

        $post = $request->input();

        if (!empty($post)) {
            if (isset($post['id'])) {
                $id = $post['id'];
            }

            $data['sub_category_id'] = isset($post['sub_category_id']) ? $post['sub_category_id'] : '';
            $data['title'] = isset($post['title']) ? $post['title'] : '';
            $data['short_desc'] = isset($post['short_desc']) ? $post['short_desc'] : '';
            $data['description'] = isset($post['description']) ? $post['description'] : '';
            $data['price'] = isset($post['price']) ? $post['price'] : '';
            $data['pages'] = isset($post['pages']) ? $post['pages'] : '';
            $data['language'] = isset($post['language']) ? $post['language'] : '';
            $data['release_date'] = isset($post['release_date']) ? $post['release_date'] : '';
            $data['status'] = isset($post['status']) ? $post['status'] : '';

            if (isset($post['id']) && $post['id'] != '') {

                $data['updated_at'] = date("Y-m-d h:i:s");

                $returnresult = DB::table('reports')
                        ->where('id', $id)
                        ->update($data);

                if ($returnresult) {
                    $result['status'] = 1;
                    $result['msg'] = 'Record updated successfully.!';
                }
            } else {
                $data['created_at'] = date("Y-m-d h:i:s");
                if (DB::table('reports')->insert($data)) {
                    $result['status'] = 1;
                    $result['msg'] = "Record add sucessfully..!";
                }
            }
        }
        echo json_encode($result);
        exit;
    }

    public function edit($id) {
        $data=array();
        if ($id != "") {

            $sub_category = DB::table('sub_category')
                    ->select('*')
                    ->where('category_id',4)
                    ->where('status',1)
                    ->get();

            $data['sub_category'] = $sub_category;
        
            $reports = DB::table('reports')
                        ->where('id', '=', $id)->first();
            $data['reports']=$reports;
        }
        return view("Admin.reports.add")->with($data);
    }

    public function delete(Request $request) {

        $post = $request->input();
        $data_result = array();
        $data_result['status'] = 0;

        if (!empty($post)) {
            $id = isset($post['id']) ? $post['id'] : '';
            if ($id != "") {

                DB::table('reports')
                        ->where('id', $id)
                        ->update(array('status' => -1));

                $data_result['status'] = 1;
                $data_result['msg'] = "Record deleted successfully.";
            }
        }
        echo json_encode($data_result);
        exit;
    }

    public function reports_data_table() {

        $requestData = $_REQUEST;

        $data = array();

        //This is for order 
        $columns = array(
            0. => 'r.title',
            1 => 'sc.name',
            2 => 'r.short_desc',
            3 => 'r.price',
            4 => 'r.pages',
            5 => 'r.language',
            6 => 'r.release_date',
            7 => 'r.status',
            8 => 'r.created_at',
            9 => 'r.updated_at',
        );

        
        $select_query = DB::table('reports as r')
                        ->leftJoin('sub_category as sc', 'sc.id', '=', 'r.sub_category_id')
                        ->leftJoin('category as c', 'c.id', '=', 'sc.category_id')
                        ->where('r.status', '!=', -1);

        $select_query->select('r.*','sc.name as cat_name', DB::raw("IF(r.status = 1,'Active','Inactive') as status"));
        if (isset($requestData['search']['value']) && $requestData['search']['value'] != '') {
            $select_query->where("r.title", "like", '%' . $requestData['search']['value'] . '%')
                    ->oRwhere("r.short_desc", "like", '%' . $requestData['search']['value'] . '%')
                    ->oRwhere("r.price", "like", '%' . $requestData['search']['value'] . '%')
                    ->oRwhere("r.pages", "like", '%' . $requestData['search']['value'] . '%')
                    ->oRwhere("r.language", "like", '%' . $requestData['search']['value'] . '%')
                    ->oRwhere("r.release_date", "like", '%' . $requestData['search']['value'] . '%');
        }

        if (isset($requestData['order'][0]['column']) && $requestData['order'][0]['column'] != '' && isset($requestData['order'][0]['dir']) && $requestData['order'][0]['dir'] != '') {
            $order_by = $columns[$requestData['order'][0]['column']];
            $select_query->orderBy($order_by, $requestData['order'][0]['dir']);
        } else {
            $select_query->orderBy("r.created_at", "DESC");
        }

        //This is for count
        $totalData = $select_query->count();

        //This is for pagination
        if (isset($requestData['start']) && $requestData['start'] != '' && isset($requestData['length']) && $requestData['length'] != '') {
            $select_query->offset($requestData['start']);
            $select_query->limit($requestData['length']);
        }
        
        $reports_list = $select_query->get();
        
        foreach ($reports_list as $row) {

            $temp['id'] = $row->id;
            $temp['cat_name'] = $row->cat_name;
            $temp['title'] = $row->title;
            $temp['short_desc'] = $row->short_desc;
            $temp['price'] = $row->price;
            $temp['pages'] = $row->pages;
            $temp['language'] = $row->language;
            $temp['release_date'] = $row->release_date;
            $temp['status'] = $row->status;
            $id = $row->id;

            $action = '<div class="datatable_btn"><a href="edit/' . $id . '" data-id="' . $id . '" class="btn btn-xs btn-info btnEdit_reports"> Edit</a>  	&nbsp;';
            $action .= '<a href="javascript:void(0);" data-id="' . $id . '" type="button" class="btn btn-xs btn-danger btnDelete_reports"> Delete</a></div>';


            $temp['action'] = $action;
            $data[] = $temp;
            $id = "";
        }


        $json_data = array(
            "draw" => intval($requestData['draw']),
            "recordsTotal" => intval($totalData),
            "recordsFiltered" => intval($totalData),
            "data" => $data
        );
        echo json_encode($json_data);
        exit(0);
    }

}
