<?php

namespace App\Http\Controllers;

class MeowsController extends Controller
{
    function home(): string
    {
        return 'home miaou';
    }

    function meows(): string
    {
        return 'miaou';
    }
    function meow($id): string
    {
        return 'miaou' . $id;
    }
}


