<?php

namespace App\Http\Controllers\Frontend;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Helper\CommonHelper;

class CmsController extends Controller
{
    public function index($slug = null){
       if($slug == ''){
         $slug =  \Request::path();
       }
       
       
        $languages = CommonHelper::user_selected_language_details();
        
       \App::setLocale($languages['sort_name']);
        $lang_id = CommonHelper::user_selected_language();
        $cmsDetails = DB::table('cms')
                ->select('*')
                ->where('slug_url','=', $slug)
                ->where('language_id',$lang_id)
                ->get()->toarray();
        $data = array();
        $data['cmsDetails'] = $cmsDetails;
        
        return view('Frontend.cms.index')->with($data);
    }
    public function test(){
        return view('Frontend_back.home.test');
    }
}
