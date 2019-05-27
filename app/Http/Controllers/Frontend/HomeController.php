<?php

namespace App\Http\Controllers\Frontend;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

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

        // return view('Frontend.home.index')->with($data);
          return view('Frontend.layouts.main');
    }
}
