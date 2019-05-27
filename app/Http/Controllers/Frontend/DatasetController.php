<?php

namespace App\Http\Controllers\Frontend;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DatasetController extends Controller
{
    public function index(){
        echo 'sncsc';
    }
    public function datasetdetails($id){
        $dataset = DB::table('tbl_dataset')
                ->select('*')
                ->where('fld_dataset_id',$id)
                ->first();
        $data['datasets']=$dataset;
        return view('Frontend.dataset.index')->with($data);
    }
}
