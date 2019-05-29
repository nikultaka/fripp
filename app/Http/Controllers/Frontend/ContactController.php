<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

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


class ContactController extends Controller
{
    public function __construct() {
        
       // \App::setLocale($languages);
    }

    public function index(Request $request) {
        $languages = CommonHelper::user_selected_language_details();
        
       \App::setLocale($languages['sort_name']);
       $data['slug'] = 'contact';
        return view('Frontend.contact.index')->with($data);
    }
    public function contact(Request $request){
        $post = $request->input();
        $data_result = array();
        $data_result['status'] = 0;

        if (!empty($post)) {
            $post = $request->input();
            $insert_data['name'] = $post['your-name'];
            $insert_data['email'] = $post['your-email'];
            $insert_data['phone_no'] = $post['tel-8'];
            $insert_data['description'] = $post['your-message'];
            $insert_data['date'] = $post['date-971'];
            $insert_data['subject'] = $post['your-subject'];
            $insert_data['status'] = 1;
            $insert_data['created_at'] = date("Y-m-d h:i:s");
            
            if (DB::table('contact')->insert($insert_data)) {
                Mail::send('email.contact', $insert_data, function($message){
                            $message->to(USER_EMAIL)->subject
                                    (USER_SUBJECT);
                            $message->from(USER_EMAIL, USER_NAME);
                        });
                    $data_result['status'] = 1;
                    $data_result['msg'] = "Email Sent.!";
                } 
            }

            
            
        
        echo json_encode($data_result);
        exit(0);
    }
}
