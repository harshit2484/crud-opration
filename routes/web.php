<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userscontroller;
use App\Http\Controllers\usercontroller;
use App\Http\Controllers\user1controller;
use App\Http\Controllers\membercontroller;
use App\Http\Controllers\member1controller;
use App\Http\Controllers\CustomAuthController;
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

Route::get('/', function () {
    return view('welcome');
});


Route::view("add","welcome2");
Route::view("add1","response");
Route::post("add",[membercontroller::class,'adddata']);
Route::view("history","list");
Route::get("history",[member1controller::class,'list']);
Route::get("delete/{id}",[member1controller::class,'delete']);
Route::get("update/{id}",[member1controller::class,'showData']);
Route::post("update/{id}",[member1controller::class,'update']);
Route::view("add2","login");




