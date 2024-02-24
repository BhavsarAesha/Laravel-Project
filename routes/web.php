<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SignUpController;
use App\Http\Controllers\UploadImageController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PDFController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\AdminSignInController;

use App\Models\Food;
use App\Models\Cart;
use App\Models\Signup;
use App\Models\Contact;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


// ********************************************* ADMIN PANEL CODE STARTS HERE ***************************************
Route::get('/admin_index', [AdminSignInController::class, 'login_in_admin_fun'])->name('admin_index');
Route::post('/admin_login', [AdminSignInController::class, 'admin_login_fun'])->name('admin_login');
Route::get('/admin_dashboard',[AdminSignInController::class, 'admin_dashboard_fun'])->name('admin_dashboard');

Route::get('/logout_admin',[AdminSignInController::class,'logout_fun'])->name('logout_admin');

// Upload New Food & View Gallery
Route::get('upload_image',[UploadImageController::class,'index'])->name('upload_image');
Route::post('save_image',[UploadImageController::class,'save'])->name('save_image');
Route::get('gallery',[UploadImageController::class,'gallery'])->name('gallery');

// CRUD - Authorized USERS [for editing those who had SIGNED UP]
Route::get('/view',[SignUpController::class,'view']);
Route::get('/edit/{id}',[SignUpcontroller::class,'edit']);
Route::post('/update/{id}',[SignUpcontroller::class,'update']);
Route::get('/del/{id}',[SignUpcontroller::class,'del']);

//User feedbacks
Route::get('/view_contact',[ContactController::class,'con'])->name('view_contact');

// ********************************************* ADMIN PANEL CODR ENDS HERE ***************************************


Route::get('/',[SignUpController::class,'index']);


Route::get('/signup',function(){
    return view('signup');
});
Route::post('/index',[SignUpController::class,'store'])->name('store_aesha');
Route::post('/signup',[SignUpController::class,'store'])->name('signup');


Route::get('/login2',function(){
    return view('login3');
});
Route::post('/login2',[SignUpController::class,'login']);
Route::get('/logout',[SignUpcontroller::class,'logout'])->name('logout');


Route::get('detail/{id}',[UploadImageController::class,'detail']);


Route::get('/menu',[UploadImageController::class,'show_gallery'])->name('menu');

Route::get('a_chinese', [UploadImageController::class, 'a_chinese_fun'])->name('a_chinese');
Route::get('a_italian', [UploadImageController::class, 'a_italian_fun'])->name('a_italian');
Route::get('a_fastfood', [UploadImageController::class, 'a_fastfood_fun'])->name('a_fastfood');
Route::get('a_southindian', [UploadImageController::class, 'a_southindian_fun'])->name('a_southindian');
Route::get('a_punjabi', [UploadImageController::class, 'a_punjabi_fun'])->name('a_punjabi');
Route::get('a_desserts', [UploadImageController::class, 'a_desserts_fun'])->name('a_desserts');
Route::get('a_drinks', [UploadImageController::class, 'a_drinks_fun'])->name('a_drinks');


Route::get('/contact',function(){
    return view('contact');
});
Route::post('/contact',[ContactController::class,'contact'])->name('c_aesha');
Route::post('/',[ContactController::class,'contact'])->name('contacts');


Route::post('/addcart',[CartController::class,'add_cart']);
Route::get('/cart',[CartController::class,'cartList']);
Route::get('/removecart/{id}',[CartController::class,'remove_cart']);

Route::get('/order',[CartController::class,'order']);
Route::post('/orderplace',[CartController::class,'order_place']);
Route::get('/myorder',[CartController::class,'my_order']);

Route::get('/pdf', [PDFController::class,'pdf_fun']);

Route::get('/mail',[MailController::class,'index']);

