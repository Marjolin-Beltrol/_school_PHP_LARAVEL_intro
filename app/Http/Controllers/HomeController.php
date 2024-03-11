<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    function home(): string
    {
        return view('homepage');
    }
}
