<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

class LanguageController extends Controller
{
    public function change(Request $request){
        
        $post = $request->input();
        
        $data_result = array();
        $data_result['status'] = 0;
         if (!empty($post)) {
             $languages =  DB::table('language')
                ->select('*')
                ->where('id', $post['language_id'])
                ->first();
            
             $data['user']['language'] = $post['language_id'];
             $data['user']['name'] = $languages->name;
             $data['user']['sort_name'] = $languages->sort_name;
             
             session()->put($data);
            // $data_result['status'] = 1;
         }
        
         
    }
   
}
