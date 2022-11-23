<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SearchController extends Controller
{
    function search(Request $request){
        if(isset($_GET['query'])){
            $search_text = $_GET['query'];

            $mobiles = DB::table('mobiles')->where('productName', 'LIKE', '%' . $search_text . '%')
                ->paginate(5);
            $mobiles->appends($request->all());
            return view('function.search',['mobiles'=>$mobiles]);
        }else {
            $mobiles = DB::table('mobiles')->paginate(5);
            return view('function.search',['mobiles'=>$mobiles]);
        }
    }
}
