<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MainController extends Controller
{
    //
    public function index() 
    {
        return view('frontEnd/index');
    }

    // public function test() 
    // {
    //     return view('test');
    // }
}
