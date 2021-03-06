<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Models\SiteSetting as site;
use App\Helper\CommonHelper;
use Illuminate\Support\Facades\URL;
use Image;
class MediaController extends Controller {

    public function __construct() {
//        $this->middleware('admin');
    }

    public function index() {

        //This is for breadcrumb
        CommonHelper::add_breadcrumb("Media", URL::to('/admin/media'));
        //This is for breadcrumb

        return view('Admin.media.category_list');
    }

    public function add() {
        return view('Admin.media.add_category');
    }

    public function addrecord(Request $request) {
        $data = array();
        $result = array();
        $result['status'] = 0;
        if ($request->hasFile('banner_image')) {
             $this->validate($request, [
                    'banner_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                ]);
            $image = $request->file('banner_image');
            $filename = basename($image->getClientOriginalName());
            $extension = pathinfo($filename, PATHINFO_EXTENSION);
            if (!file_exists(public_path() . '/upload/image/gallery/resize/')) {
                mkdir(public_path() . '/upload/image/gallery/resize/', 0777, true);
            }
            $destinationPath = public_path() . '/upload/image/gallery/resize/';
            $uniquesavename = time() . uniqid(rand());
            $destFile = $uniquesavename . '.' . $extension;
            $input['media_name'] = $destFile;
            $img = Image::make($image->getRealPath())->resize(500, 500);
            $img->save($destinationPath . '/' . $input['media_name']);

            if (!file_exists(public_path() . '/upload/image/gallery/')) {
                mkdir(public_path() . '/upload/image/gallery/', 0777, true);
            }
            $destinationPath = public_path() . '/upload/image/gallery/';

            $destFile = $uniquesavename . '.' . $extension;

            // $upload_success = $image->move(public_path('upload/image'),$imageName);

            if ($image->move($destinationPath, $destFile)) {
               $upload_result = 1; 
               $data['image'] = $destFile;
            }
            // Else, return error 400
            else {
                $result['status'] = 0;
                 $result['msg'] = "Image Uploading fail";
            }
        }else{
            $upload_result = 1;
        }
        $post = $request->input();

        if (!empty($post) && $upload_result = 1) {
            if (isset($post['id_media'])) {
                $id_media = $post['id_media'];
            }

            $data['category_name'] = isset($post['category_name']) ? $post['category_name'] : '';
            $data['status'] = isset($post['status']) ? $post['status'] : '';

            if (isset($post['id_media']) && $post['id_media'] != '') {

                $data['updated_at'] = date("Y-m-d h:i:s");

                $returnresult = DB::table('media_category')
                        ->where('id', $id_media)
                        ->update($data);

                if ($returnresult) {
                    $result['status'] = 1;
                    $result['msg'] = 'Record updated successfully.!';
                }
            } else {
                $data['created_at'] = date("Y-m-d h:i:s");
                if (DB::table('media_category')->insert($data)) {
                    $result['status'] = 1;
                    $result['msg'] = "Record add sucessfully..!";
                }
            }
        }
        echo json_encode($result);
        exit;
    }

    public function editmedia(Request $request) {

        $post = $request->input();
        $data_result = array();
        $data_result['status'] = 0;

        if (!empty($post)) {
            $id = isset($post['id_media']) ? $post['id_media'] : '';
            if ($id != "") {

                $media = DB::table('media_category')
                                ->where('id', '=', $id)->first();

                $data_result['status'] = 1;
                $data_result['content'] = $media;
            }
        }
        echo json_encode($data_result);
        exit;
    }

    public function deleterecord(Request $request) {

        $post = $request->input();
        $data_result = array();
        $data_result['status'] = 0;

        if (!empty($post)) {
            $id = isset($post['id_media']) ? $post['id_media'] : '';
            if ($id != "") {
                DB::table('media_category')
                        ->where('id', $id)
                        ->update(array('status' => -1));

                $data_result['status'] = 1;
                $data_result['msg'] = "Record deleted successfully.";
            }
        }
        echo json_encode($data_result);
        exit;
    }

    public function get_category_data() {

        $requestData = $_REQUEST;

        $data = array();

        //This is for order 
        $columns = array(
            0. => 'id',
            1 => 'category_name',
            2 => 'status',
            3 => 'created_at',
            4 => 'updated_at',
        );

        $select_query = DB::table('media_category')->where('status', '!=', -1);
        $select_query->select('*', DB::raw("IF(status = 1,'Active','Inactive') as status"));
        if (isset($requestData['search']['value']) && $requestData['search']['value'] != '') {
            $select_query->where("category_name", "like", '%' . $requestData['search']['value'] . '%');
        }

        if (isset($requestData['order'][0]['column']) && $requestData['order'][0]['column'] != '' && isset($requestData['order'][0]['dir']) && $requestData['order'][0]['dir'] != '') {
            $order_by = $columns[$requestData['order'][0]['column']];
            $select_query->orderBy($order_by, $requestData['order'][0]['dir']);
        } else {
            $select_query->orderBy("id", "DESC");
        }

        //This is for count
        $totalData = $select_query->count();

        //This is for pagination
        if (isset($requestData['start']) && $requestData['start'] != '' && isset($requestData['length']) && $requestData['length'] != '') {
            $select_query->offset($requestData['start']);
            $select_query->limit($requestData['length']);
        }

        $media_category_list = $select_query->get();
        foreach ($media_category_list as $row) {
            $temp['id'] = $row->id;
            $temp['category_name'] = $row->category_name;
            $temp['created_at'] = $row->created_at;
            $temp['updated_at'] = $row->updated_at;
            $temp['status'] = $row->status;
            $id = $row->id;

            $action = '<div class="datatable_btn"><a href="javascript:void(0);" data-id="' . $id . '" class="btn btn-xs btn-info btnEdit_media"> Edit</a>  	&nbsp;';
            $action .= '<a href="javascript:void(0);" data-id="' . $id . '" type="button" class="btn btn-xs btn-danger btnDelete_media"> Delete</a></div>';

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
