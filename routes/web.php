<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('hello' , function (){
    return "Hello world";
});

// run optimize after write new router

Route::get('home' , function (){
    return "Home Page";
});

// route with parameter 
Route::get('about/{title}' , function ($title) {
    return $title;
});

// router access with view
Route::get('test1' , function () {
    return view('test1');
});
