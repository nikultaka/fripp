<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Image;

class NewsController extends Controller {

    public function __construct() {
        $this->middleware('admin');
    }

    public function index() {

        return view('Admin.news.add');
    }

    public function news_list() {
        return view('Admin.news.list');
    }

    public function add(Request $request) {
        $data = array();
        $result = array();
        $result['status'] = 0;
       

        if ($request->hasFile('news_image')) {
             $this->validate($request, [
                    'news_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                ]);
            $image = $request->file('news_image');
            $filename = basename($image->getClientOriginalName());
            $extension = pathinfo($filename, PATHINFO_EXTENSION);
            if (!file_exists(public_path() . '/upload/news/thumbnail/')) {
                mkdir(public_path() . '/upload/news/thumbnail/', 0777, true);
            }
            $destinationPath = public_path() . '/upload/news/thumbnail/';
            $uniquesavename = time() . uniqid(rand());
            $destFile = $uniquesavename . '.' . $extension;
            $input['media_name'] = $destFile;
            $img = Image::make($image->getRealPath())->resize(500, 500);
            $img->save($destinationPath . '/' . $input['media_name']);

            if (!file_exists(public_path() . '/upload/news/')) {
                mkdir(public_path() . '/upload/news/', 0777, true);
            }
            $destinationPath = public_path() . '/upload/news/';

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
            $data['image'] = "No-Image-Basic.png";
            $upload_result = 1;
        }
        $post = $request->input();
        if (!empty($post) && $upload_result = 1) {
            if (isset($post['id'])) {
                $id = $post['id'];
            }

            $data['title'] = isset($post['title']) ? $post['title'] : '';
            $data['short_desc'] = isset($post['short_desc']) ? $post['short_desc'] : '';
            $data['description'] = isset($post['description']) ? $post['description'] : '';
            $data['publish_date'] = isset($post['publish_date']) ? $post['publish_date'] : '';
            $data['status'] = isset($post['status']) ? $post['status'] : '';
            
            if (isset($post['id']) && $post['id'] != '') {

                $data['updated_at'] = date("Y-m-d h:i:s");

                $returnresult = DB::table('news')
                        ->where('id', $id)
                        ->update($data);

                if ($returnresult) {
                    $result['status'] = 1;
                    $result['msg'] = 'Record updated successfully.!';
                }
            } else {
                $data['created_at'] = date("Y-m-d h:i:s");
                if (DB::table('news')->insert($data)) {
                    $result['status'] = 1;
                    $result['msg'] = "Record add sucessfully..!";
                }
            }
        }


        echo json_encode($result);
        exit;
    }

    public function edit($id) {

        $data = array();
        if ($id != "") {

            $news = DB::table('news')
                    ->where('id', '=', $id)
                    ->where('status', '=', 1)
                    ->first();

            $data['news'] = $news;
        }
        return view("Admin.news.add")->with($data);
    }

    public function check_slug(Request $request) {

        $post = $request->input();

        $id = $post['id'];
        $slug_url = $post['slug'];

        $slug = DB::table('brand')
                ->select('*')
                ->where('id', '!=', $id)
                ->where('status', '!=', -1)
                ->where('slug_url', '=', $slug_url)
                ->get();

        $valid = TRUE;
        $slug_all = count($slug);

        if ($slug_all > 0) {
            $valid = FALSE;
        } else {
            $valid = TRUE;
        }
        return json_encode(array('valid' => $valid));
        exit;
    }

    public function delete(Request $request) {

        $post = $request->input();
        $data_result = array();
        $data_result['status'] = 0;

        if (!empty($post)) {
            $id = isset($post['id']) ? $post['id'] : '';
            if ($id != "") {

                DB::table('news')
                        ->where('id', $id)
                        ->update(array('status' => -1));

                $data_result['status'] = 1;
                $data_result['msg'] = "Record deleted successfully.";
            }
        }
        echo json_encode($data_result);
        exit;
    }

    public function news_data_table() {

        $requestData = $_REQUEST;

        $data = array();

        //This is for order 
        $columns = array(
            0. => 'id',
            1 => 'title',
            2 => 'short_desc',
//            3 => 'description',
            3 => 'publish_date',
            4 => 'image',
            5 => 'status',
            6 => 'created_at',
        );

        $select_query = DB::table('news')
                ->where('status', '!=', -1);

        $select_query->select('*', DB::raw("IF(status = 1,'Active','Inactive') as status"));
        if (isset($requestData['search']['value']) && $requestData['search']['value'] != '') {
            $select_query->where("title", "like", '%' . $requestData['search']['value'] . '%')
                    ->oRwhere("short_desc", "like", '%' . $requestData['search']['value'] . '%')
//                    ->oRwhere("description", "like", '%' . $requestData['search']['value'] . '%')
                    ->oRwhere("publish_date", "like", '%' . $requestData['search']['value'] . '%');
        }

        if (isset($requestData['order'][0]['column']) && $requestData['order'][0]['column'] != '' && isset($requestData['order'][0]['dir']) && $requestData['order'][0]['dir'] != '') {
            $order_by = $columns[$requestData['order'][0]['column']];
            $select_query->orderBy($order_by, $requestData['order'][0]['dir']);
        } else {
            $select_query->orderBy("created_at", "DESC");
        }

        //This is for count
        $totalData = $select_query->count();

        //This is for pagination
        if (isset($requestData['start']) && $requestData['start'] != '' && isset($requestData['length']) && $requestData['length'] != '') {
            $select_query->offset($requestData['start']);
            $select_query->limit($requestData['length']);
        }

        $news_list = $select_query->get();
        foreach ($news_list as $row) {

            $temp['id'] = $row->id;
            $temp['title'] = $row->title;
            $temp['short_desc'] = $row->short_desc;
//            $temp['description'] = $row->description;
            $temp['publish_date'] = $row->publish_date;
            $temp['created_at'] = $row->created_at;
            $temp['status'] = $row->status;
            if(isset($row->image) && $row->image != '' ){ 
                $url =   ASSET.'upload/news/thumbnail/'.$row->image;
              }else{
                  $url =   ASSET.'upload/logo.png';
              } 
            $temp['news_image'] = '<div class="datatable_btn"><img style="width: 50px;" src="'.url($url).'"></div>';
            $id = $row->id;

            $action = '<div class="datatable_btn" style="display:flex;"><a href="edit/' . $id . '" data-id="' . $id . '" class="btn btn-xs btn-info"> Edit</a>  	&nbsp;';
            $action .= '<a href="javascript:void(0);" data-id="' . $id . '" type="button" class="btn btn-xs btn-danger btnDelete_news"> Delete</a></div>';


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
