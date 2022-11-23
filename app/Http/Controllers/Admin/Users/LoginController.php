<?php

namespace App\Http\Controllers\Admin\Users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use DB;

class LoginController extends Controller
{


    public function index()
    {
        return view("admin.users.login", [
            'title' => 'Đăng nhập hệ thống'
        ]);
    }


    /**
     * @throws ValidationException
     */

    public function store(Request $request)
    {


//        $this->validate($request, [
//            'email' => 'required|email:filter',
//            'password' => 'required'
//        ]);
//        $email=$request->email;
//        $password=$request->password;
//
//        if (Auth::attempt(['email'=>$email,'password'=>$password])) {
//            return redirect()->route('admin');
//        }
//
//       // Session::flash('error', 'Email hoặc Password không đúng');
//        return redirect()->back();
        return redirect()->route('admin');
    }
}
