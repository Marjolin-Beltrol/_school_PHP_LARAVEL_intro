<?php

namespace App\Http\Controllers;

use App\Models\Message;

class MessagesController extends Controller
{


    function messages(): string
    {
        $messages = Message::all(); // Récupérer tous les messages depuis la base de données
        return view('messages-list', compact('messages')); // Passer les messages à la vue
    }

}


