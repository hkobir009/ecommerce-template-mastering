<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;

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

//                        Fontend Route

Route::get('login',[homeController::class,'login'])->name('login');
Route::get('register',[homeController::class,'register'])->name('register');

Route::get('/',[homeController::class,'index']);
Route::get('womans_product',[homeController::class,'w_product'])->name('womans_product');
Route::get('mans_product',[homeController::class,'m_product'])->name('mans_product');
Route::get('mail_us',[homeController::class,'mail_us'])->name('mail_us');
Route::get('single',[homeController::class,'single'])->name('single');
Route::get('web_code',[homeController::class,'web_code'])->name('web_code');
Route::get('checkout',[homeController::class,'checkout'])->name('checkout');

