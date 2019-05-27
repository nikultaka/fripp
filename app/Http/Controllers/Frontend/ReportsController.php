<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Image;

class ReportsController extends Controller {

        
    public function __construct() {
//        $this->middleware('admin');
    }

    public function index(Request $request) {

        $sub_category = DB::table('sub_category')
                    ->select('*')
                    ->where('category_id',REPORTS)
                    ->where('status',1)
                    ->get();
        
        $reports = DB::table('reports as r')
                        ->leftJoin('sub_category as sc', 'sc.id', '=', 'r.sub_category_id')
                        ->leftJoin('category as c', 'c.id', '=', 'sc.category_id')
                        ->select('r.*','sc.name','sc.description as sub_desc')
                        ->where('r.status',1)
//                        ->groupBy('r.sub_category_id')
                        ->get();

        $data['sub_category'] = $sub_category;
        $data['reports'] = $reports;
        
        return view('Frontend.reports.index')->with($data);
    }


}
