<?php

namespace App\Http\Controllers;



class MeowController extends Controller
{
    function meow(int $id): string
    {
        return view('meow-details', ['id' => $id]);
    }
}
