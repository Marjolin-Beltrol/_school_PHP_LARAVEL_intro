<?php

namespace App\Http\Controllers;



class MessageController extends Controller
{
    function message(int $id): string
    {
        return view('message-details', ['id' => $id]);
    }
}
