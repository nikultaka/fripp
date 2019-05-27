<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class UserController extends Controller
{
    public function __construct() {
        
    }
    public function register(){
        if (Auth::check()) {
            return redirect('/');
        }
         return view('Frontend.user.register');  
    }
    public function login(){
        if (Auth::check()) {
            return redirect('/');
        }
         return view('Frontend.user.login');  
    }
    public function add_user(Request $request){
        $post = $request->input();
        $data_result = array();
        $data_result['status'] = 0;
        if($post){
            $insert_id=DB::table('users')->insertGetId([
            'name' => $request->input('username'),
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('pass')),
            'role_id'=>0,
            'status'=>1,
            'created_at' => date('Y-m-d h:i:s'),
        ]);
            if($insert_id > 0){
                $data_result['status'] = 1;
                $data_result['msg'] = "Register Completed please Login now.!";
            }
        }
        echo json_encode($data_result);
        exit;
    }
    public function user(Request $request)
    {
        $username = $request->input('email');
        $password = $request->input('password');

        if (Auth::attempt(['email' => $username, 'password' => $password, 'role_id' => 0,'status' => 1]))
        {
                return Redirect::intended('/');
        }
        return Redirect::back()
                    ->withInput()
                    ->withErrors('That username/password combo does not exist.');
    }
    public function profile(){
        if (Auth::check()) {
           return view('Frontend.user.profile'); 
        }
         return redirect('/');
          
    }
}
