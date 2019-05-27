<?php

namespace App\Http\Controllers\Frontend;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Helper\CommonHelper;


class HomeController extends Controller
{
    public function index(){
        
//        $brands = DB::table('brand')
//                ->select('*')
//                ->where('status', '!=', -1)
//
//                ->where('is_consultancy', '!=', 1)
//                ->get();
//        $dataset = DB::table('tbl_dataset')
//                ->select('*')
//                ->get();
//        $data['brands']=$brands;
//        $data['datasets']=$dataset;
//        
//        
        $languages = CommonHelper::user_selected_language_details();
        
       \App::setLocale($languages['sort_name']);
        $lang_id = CommonHelper::user_selected_language();
        $cmsDetails = DB::table('cms')
                ->select('*')
                ->where('slug_url','=', 'home')
                ->where('language_id',$lang_id)
                ->limit(1)
                ->get()->toarray();
        $home_welcome = DB::table('cms')
                ->select('*')
                ->where('slug_url','=', 'home-welcome')
                ->where('language_id',$lang_id)
                ->limit(1)
                ->get()->toarray();
        $data = array();
        $data['cmsDetails'] = $cmsDetails;
        $data['home_welcome'] = $home_welcome;

        return view('Frontend.home.index')->with($data);
       //   return view('Frontend.home.index');
    }
}
