<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Helper\CommonHelper;
use Illuminate\Support\Facades\DB;

class GalleryController extends Controller
{
    public function index(){
        $media_category = DB::table('media_category')
                 ->leftjoin("media", "media.media_category", "=", "media_category.id")
                ->select('media_category.*',DB::raw('GROUP_CONCAT(media.media_name) as media_name'))
                ->where('media_category.status',1)
                ->groupBy('media_category.id')
                ->get()->toarray();
    
        $data = array();
        $data['media_category'] = $media_category;
        
        return view('Frontend.gallery.index')->with($data);
    }
}
