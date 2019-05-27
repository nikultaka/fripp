<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Image;

class NewsController extends Controller {

        
    public function __construct() {
//        $this->middleware('admin');
    }

    public function index(Request $request) {

        $news = DB::table('news')
                ->select('*')
                ->where('status',1)
                ->paginate(12);

        $data['news'] = $news;
        
        if($request->ajax()) {
            return view('Frontend.news.load')->with($data);  
        }
        
        return view('Frontend.news.index')->with($data);
    }
    
    public function news_info($id) {


        $news = DB::table('news')
                ->select('*')
                ->where('id',$id)
                ->get();

        $data['news'] = $news;
        
        return view('Frontend.news.news_info')->with($data);
    }


}
