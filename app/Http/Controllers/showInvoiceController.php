<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class showInvoiceController extends Controller
{
    public function show(Request $request) {
        if(isset($_GET['query'])){
            $search_text = $_GET['query'];
            $provides = DB::table('provides')->where('id', 'is not NULL');
            $import_bills = DB::table('import_bills' )->where('created_at','LIKE',$search_text.'%')
                ->paginate(20);

            $import_bills->appends($request->all());
            return view('function.show',['import_bills'=>$import_bills, 'provides'=>$provides]);
        }else {
            return view('function.show');
        }
    }
    public function show1(Request $request) {
        if(isset($_GET['query'])){
            $search_text = $_GET['query'];
            $export_bills = DB::table('exportbills')->where('DateExport','LIKE',$search_text.'%')
                ->paginate(20);
            $export_bills->appends($request->all());
            return view('function.show1',['exportbills'=>$export_bills]);
        }else {
            return view('function.show1');
        }
    }
}
