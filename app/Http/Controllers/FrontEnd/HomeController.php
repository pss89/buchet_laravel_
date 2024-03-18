<?php
// controller 생성 한 명령어 : php artisan make:controller FrontEnd/HomeController

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index() 
    {
        return view('frontEnd.home');
    }
}
