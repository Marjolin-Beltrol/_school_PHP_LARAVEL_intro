<?php

namespace App\Http\Controllers;

class MessagesController extends Controller
{


    function messages(): string
    {
        return view('messages-list');
    }

}


