<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class functionController extends Controller
{
    public function create()
    {
        return view('function.create', [
            'title' => 'Thêm sản phẩm'
        ]);
    }

    public function createEmployee(){
        return view('function.addEmployee',[
            'title' => 'Them nhan vien'
        ]);
    }
}
