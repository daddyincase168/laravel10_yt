<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    // create function
    public function show1() {
        return "This statement from TestController in function show1";
    }

    public function show2() {
        return "This statement from TestController in function show2";
    }

    public function index(){
        return view('index');
    }
}
