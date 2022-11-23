<?php

use App\Http\Controllers\showInvoiceController;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\Admin\Users\LoginController;

use \App\Http\Controllers\Admin\MainController;
use \App\Http\Controllers\functionController;
use App\Http\Controllers\SearchController;

use App\Http\Controllers\addProductController;


Route::redirect('/', '/login');
Route::get('login', [LoginController::class, 'index'] )->name('login');
Route::post('myWebsite/login/store', [LoginController::class, 'store'] );
Route::get('main',[MainController::class, 'index'] )->name('admin');

Route::prefix('functions')->group(function(){
    Route::get("add", [functionController::class,'create']);
    Route::get('search',[SearchController::class,'search'])->name('f.search');
    Route::get("addEmployee", [functionController::class,'createEmployee']);

    Route::get("show", [showInvoiceController::class, 'show'])->name('show');
    Route::get("show1", [showInvoiceController::class, "show1"])->name("show1");
});

Route::post('add_product',['as'=>'nhap','uses'=>'addProductController@insertProduct']);


Route::post('add_employee',['as'=>'nhapNhanvien','uses'=>'addProductController@insertEmployee']);
