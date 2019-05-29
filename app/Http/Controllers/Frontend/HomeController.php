<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Helper\CommonHelper;

class HomeController extends Controller {

    public function index() {

        $languages = CommonHelper::user_selected_language_details();

        \App::setLocale($languages['sort_name']);
        $lang_id = CommonHelper::user_selected_language();
        $cmsDetails = DB::table('cms')
                        ->select('*')
                        ->where('slug_url', '=', 'home')
                        ->where('language_id', $lang_id)
                        ->limit(1)
                        ->get()->toarray();
        $home_welcome = DB::table('cms')
                        ->select('*')
                        ->where('slug_url', '=', 'home-welcome')
                        ->where('language_id', $lang_id)
                        ->limit(1)
                        ->get()->toarray();
        $media_category = DB::table('media_category')
                        ->select('media_category.*')
                        ->where('media_category.status', 1)
                        ->where('media_category.is_set_home', 1)
                        ->get()->toarray();
        $blogs = DB::table('blog as b')
                        ->leftjoin('sub_category as c', 'b.cat_id', '=', 'c.id')
                        ->select('b.*', 'c.name as category')
                        ->where('b.status', '!=', -1)
                        ->where('b.language_id', $lang_id);
                        //->limit(9)
                       // ->get()->toarray();

        $showRecordPerPage = 9;
        if (isset($_GET['page']) && !empty($_GET['page'])) {
            $currentPage = $_GET['page'];
        } else {
            $currentPage = 1;
        }
        $startFrom = ($currentPage * $showRecordPerPage) - $showRecordPerPage;
        
        $totalEmployee = $blogs->count();
        $lastPage = ceil($totalEmployee / $showRecordPerPage);
        $firstPage = 1;
        $nextPage = $currentPage + 1;
        $previousPage = $currentPage - 1;
        
        $blogs->offset($startFrom);
        $blogs->limit($showRecordPerPage);
        $blogsResult = $blogs->get()->toarray();
        
        $data = array();
        $data['slug'] = '';
        $data['media_category'] = $media_category;
        $data['cmsDetails'] = $cmsDetails;
        $data['home_welcome'] = $home_welcome;
        $data['blogs'] = $blogsResult;
        $data['currentPage'] = $currentPage;
        $data['previousPage'] = $previousPage;
        $data['lastPage'] = $lastPage;
        $data['nextPage'] = $nextPage;
        $data['firstPage'] = $firstPage;
        return view('Frontend.home.index')->with($data);
        //   return view('Frontend.home.index');
    }
    

}
