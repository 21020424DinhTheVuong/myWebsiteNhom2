<?php

namespace App\Http\Controllers;

use App\Models\employee;
use App\Models\import_bills;
use App\Models\mobile_type;
use App\Models\provide;
use Illuminate\Http\Request;
use App\Models\mobile;
use DB;


class addProductController extends Controller
{
    public function insertProduct(Request $request){
        $mb = new mobile;
        $import_bill = new import_bills;
        $provides = new provide;
        $inputProductName = $request->productName;
        $provideMame = explode($inputProductName, ' ');
        $provides->id =$request->provideID;
        $provides->name = $provideMame[0];
        $provides->address = $request->address;
        $provides->phone = $request->phone;
        $provides->email = $request->email;
        $mb->id = $request->id;
        $mb->provide_id =  $provides->id ;
        $mb->productName = $request->productName;
        $mb->color	= $request->color;
        $mb->quantity = $request->quantity;
        $mb->priceImport = $request->priceImport;
        $mb->DateImport = $request->dateImport;
        $mb->expirationDate = $request->dateDie;
        $import_bill->provideID = $request->provideID ;
        $import_bill->Mobile_ID = $request->id;
        $import_bill->color = $request->color;
        $import_bill->quantity = $request->quantity;
        $provides->save();
        $mb->save();
        $import_bill->save();
        return redirect()->back()->with('thong bao', 'Thêm sản phẩm thành công');
       // return redirect()->name('admin');
    }



    public function insertEmployee(Request $request){
        $EMPLOYEE = new employee;
        $EMPLOYEE->epl_birthDate = $request->birthDate;
        $EMPLOYEE->sex = $request->sex;
        $EMPLOYEE->jobTitle = $request->jobTitle;
        $EMPLOYEE->phone = $request->phone;
        //$EMPLOYEE->identifine_ID = $request->identity;
        $EMPLOYEE->	address = $request->address;
        $EMPLOYEE->save();
        return redirect()->back()->with('thong bao', 'Thêm nhân viên thành công');
    }
}
