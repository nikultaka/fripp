<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Helper\CommonHelper;

class BlogController extends Controller
{
    public function index(){
         $lang_id = CommonHelper::user_selected_language();
        $blogs = DB::table('blog as b')
                ->leftjoin('sub_category as c', 'b.cat_id', '=', 'c.id')
                ->select('b.*','c.name as category')
                ->where('b.status', '!=', -1)
                ->where('b.language_id', $lang_id)
                ->get()->toarray();
        $data['blogs'] = $blogs;
        
        return view('Frontend.blog.index')->with($data);
    }
    public function single_blog($slug = null){
         $lang_id = CommonHelper::user_selected_language();
        $blogs = DB::table('blog as b')
                ->leftjoin('sub_category as c', 'b.cat_id', '=', 'c.id')
                ->where('b.slug_url','=', $slug)
                ->select('b.*','c.name as category')
                ->where('b.status', '!=', -1)
                ->where('b.language_id', $lang_id)
                ->first();
        $latest_post = DB::table('blog as b')
                ->leftjoin('sub_category as c', 'b.cat_id', '=', 'c.id')
                ->select('b.*','c.name as category')
                ->where('b.status', '!=', -1)
                ->where('b.language_id', $lang_id)
                ->orderBy('id', 'desc')->take(3)
                ->get()->toarray();
        $categorys = DB::table('sub_category as sc')
                    ->join('category as c', 'sc.category_id', '=', 'c.id')
                    ->join('blog as b', 'b.cat_id', '=', 'sc.id')
                    ->select('sc.*',DB::raw('COUNT(b.id) as total_post'))
                    ->where('c.name', 'blog')
                    ->where('sc.language_id', $lang_id)
                    ->where('c.status', '!=', -1)
                    ->get()->toarray();
        
        $data['blog'] = $blogs;
        $data['latest_posts'] = $latest_post;
         $data['categorys'] = $categorys;
        return view('Frontend.blog.single')->with($data);
    }
    public function cat_blog($slug = null){
        $lang_id = CommonHelper::user_selected_language();
        $blogs = DB::table('blog as b')
                ->leftjoin('sub_category as c', 'b.cat_id', '=', 'c.id')
                ->select('b.*','c.name as category')
                ->where('b.status', '!=', -1)
                ->where('b.language_id', $lang_id)
                ->where('c.name', $slug)
                ->get()->toarray();
        $data['blogs'] = $blogs;
        
        return view('Frontend.blog.index')->with($data);
    }
}
