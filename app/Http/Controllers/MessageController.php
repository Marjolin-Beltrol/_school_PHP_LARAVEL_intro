<?php

namespace App\Http\Controllers;



use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    function message(string $id): string
    {
        $message = Message::findOrFail($id); // Récupérer le message par son ID
        return view('message-details', compact('message')); // Passer le message à la vue
    }
    public function show($id)
    {
        $message = Message::findOrFail($id);
        return view('message-details', compact('message'));
    }
    public function create()
    {
        return view('message-create');
    }
    public function store(Request $request)
    {
        $message = new Message();
        $message->text = $request->text;
        $message->user_id = $request->user_id;
        $message->save();
        return redirect()->route('message.show', ['id' => $message->id]);
    }
    public function edit($id)
    {
        $message = Message::findOrFail($id);
        return view('message-edit', compact('message'));
    }
    public function update(Request $request, $id)
    {
        $message = Message::findOrFail($id);
        $message->text = $request->text;
        $message->user_id = $request->user_id;
        $message->save();
        return redirect()->route('message.show', ['id' => $message->id]);
    }
}
