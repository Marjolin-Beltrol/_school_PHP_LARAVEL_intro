<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MeowController extends Controller
{
    function meow($id): string
    {
        return 'miaou' . $id;
    }
}
