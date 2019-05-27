<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator;
use Illuminate\Support\Facades\DB;
use yajra\Datatables\Facades\Datatables;
use App\Helper\CommonHelper;
use Illuminate\Support\Facades\URL;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMailable;

class ContactController extends Controller {

    use Queueable,
        SerializesModels;

    public function __construct() {
        $this->middleware('admin');
    }

    public function index() {
        return view("Admin.contact.list");
    }

    public function editcontact_us(Request $request) {

        $post = $request->input();
        $data_result = array();
        $data_result['status'] = 0;

        if (!empty($post)) {
            $id = isset($post['id']) ? $post['id'] : '';
            if ($id != "") {

                $contact_us = DB::table('contact_us')
                                ->where('id', '=', $id)->first();

                $data_result['status'] = 1;
                $data_result['content'] = $contact_us;
            }
        }
        echo json_encode($data_result);
        exit;
    }

    public function email_reply(Request $request) {

        $post = $request->input();
        $data_result = array();
        $data_result['status'] = 0;

        if (!empty($post)) {
            $id = isset($post['id']) ? $post['id'] : '';
            if ($id != "") {

                $email_reply = DB::table('contact')
                                ->select('email')
                                ->where('id', '=', $id)->first();

                $data_result['status'] = 1;
                $data_result['content'] = $email_reply;
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
            $id = isset($post['id']) ? $post['id'] : '';
            if ($id != "") {

                DB::table('contact')
                        ->where('id', $id)
                        ->update(array('status' => -1));

                $data_result['status'] = 1;
                $data_result['msg'] = "Record deleted successfully.";
            }
        }
    }

    public function anyData() {

        $requestData = $_REQUEST;

        $data = array();

        //This is for order 
        $columns = array(
            0. => 'id',
            1 => 'name',
            2 => 'email',
            3 => 'phone_no',
            4 => 'description',
        );

        $select_query = DB::table('contact')
                ->where('status', '!=', -1);
        $select_query->select('*', DB::raw("IF(status = 1,'Active','Inactive') as status"));
        if (isset($requestData['search']['value']) && $requestData['search']['value'] != '') {
            $select_query->where("name", "like", '%' . $requestData['search']['value'] . '%');
            $select_query->where("email", "like", '%' . $requestData['search']['value'] . '%');
            $select_query->where("phone_no", "like", '%' . $requestData['search']['value'] . '%');
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

        $contact_us_list = $select_query->get();
        foreach ($contact_us_list as $row) {
            $temp['id'] = $row->id;
            $temp['name'] = $row->name;
            $temp['email'] = $row->email;
            $temp['phone_no'] = $row->phone_no;
            $temp['description'] = $row->description;
            $temp['reply'] = '<i class="fa fa-mail-reply em_reply" data-id="' . $row->id . '"></i>';
            $temp['status'] = $row->status;
            $id = $row->id;

            $action = '<div class="datatable_btn"><a href="javascript:void(0);" data-id="' . $id . '" class="btn btn-xs btn-info btnEdit_contact_us"> Edit</a>  	&nbsp;';
            $action .= '<a href="javascript:void(0);" data-id="' . $id . '" type="button" class="btn btn-xs btn-danger btnDelete_contact_us"> Delete</a></div>';


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

    public function email(Request $request) {
        $post = $request->input();
        $data_result = array();
        $data_result['status'] = 0;

        if (!empty($post)) {
            $post = $request->input();
            $subject = $post['subject'];
            $email = $post['em_name'];
            $msg = $post['reply'];
            $data = array('msg' => $msg);

            if (Mail::send('email.admin_to_user_replay', $data, function($message) use ($email, $subject) {
                        $message->to($email)->subject
                                ($subject);
                        $message->from(USER_EMAIL, USER_NAME);
                    })) {
                $data_result['status'] = 1;
                $data_result['msg'] = "Email Sent.!";
            } else {
                $data_result['status'] = 0;
                $data_result['msg'] = "Please Try after some time.";
            }
        }
        echo json_encode($json_data);
        exit(0);
    }

}
