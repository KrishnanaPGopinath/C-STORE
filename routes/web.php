<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\adminController;
use App\Http\Controllers\indexController;
use App\Http\Controllers\userController;

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

Route::get('/adminindex',[adminController::class,'index']);
Route::get('/adminlogin',[adminController::class,'adminlogin']);
Route::post('/adminloginaction',[adminController::class,'adminloginaction']);
Route::get('/addabout',[adminController::class,'addabout']);
Route::post('/addaboutaction',[adminController::class,'addaboutaction']);
Route::get('/editabout/{id}',[adminController::class,'editabout']);
Route::post('/editaboutaction/{id}',[adminController::class,'editaboutaction']);
Route::get('/deleteabout/{id}',[adminController::class,'deleteabout']);


Route::get('/addproducts',[adminController::class,'addproducts']);
Route::post('/addproductsaction',[adminController::class,'addproductsaction']);
Route::get('/viewproducts',[adminController::class,'viewproducts']);
Route::get('/editproduct/{id}',[adminController::class,'editproduct']);
Route::post('/editproductaction/{id}',[adminController::class,'editproductaction']);
Route::get('/deleteproduct/{id}',[adminController::class,'deleteproduct']);


Route::get('/addgallery',[adminController::class,'addgallery']);
Route::post('/addgalleryaction',[adminController::class,'addgalleryaction']);
Route::get('/viewgallery',[adminController::class,'viewgallery']);
Route::get('/editgallery/{id}',[adminController::class,'editgallery']);
Route::post('/editgalleryaction/{id}',[adminController::class,'editgalleryaction']);
Route::get('/deletegallery/{id}',[adminController::class,'deletegallery']);


Route::get('/viewabout',[adminController::class,'viewabout']);
Route::get('/vieworders',[adminController::class,'vieworders']);
Route::get('/viewusers',[adminController::class,'viewusers']);
Route::get('/viewenquiry',[adminController::class,'viewenquiry']);
Route::get('/logout',[adminController::class,'logout']);
Route::get('/adminmyprofile',[adminController::class,'adminmyprofile']);
Route::post('/adminmyprofileaction/{id}',[adminController::class,'adminmyprofileaction']);









Route::get('/',[indexController::class,'index']);
Route::get('/products',[indexController::class,'products']);
Route::get('/about',[indexController::class,'about']);
Route::get('/gallery',[indexController::class,'gallery']);

Route::get('/contactus',[indexController::class,'contactus']);
Route::post('/contactusaction',[indexController::class,'contactusaction']);

Route::get('/login',[indexController::class,'login']);
Route::post('/loginaction',[indexController::class,'loginaction']);
Route::get('/register',[indexController::class,'register']);
Route::post('/registeraction',[indexController::class,'registeraction']);



Route::get('/userindex',[userController::class,'index']);
Route::get('/products',[userController::class,'products']);
Route::get('/viewcart',[userController::class,'viewcart']);
Route::get('/addtocart/{id}',[userController::class,'addtocart']);
Route::post('/addtocartaction/{id}',[userController::class,'addtocartaction']);
Route::get('/myprofile',[userController::class,'myprofile']);
Route::post('/myprofileaction/{id}',[userController::class,'myprofileaction']);
Route::get('/delete/{id}',[userController::class,'delete']);
Route::get('/sum',[userController::class,'sum']);
Route::get('/updatecart',[userController::class,'updatecart']);
Route::get('/buynow',[userController::class,'buynow']);
Route::post('/buynowaction',[userController::class,'buynowaction']);
Route::get('/cardpayment',[userController::class,'cardpayment']);
Route::post('/cardpaymentaction',[userController::class,'cardpaymentaction']);
Route::get('/vieworder',[userController::class,'vieworder']);
Route::get('/placeorder',[userController::class,'placeorder']);
Route::get('/logout',[userController::class,'logout']);