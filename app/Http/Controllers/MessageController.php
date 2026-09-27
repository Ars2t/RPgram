<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMessageRequest;
use App\Http\Requests\StoreRoomRequest;
use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class MessageController extends Controller
{
    public function index()
    {
        $rooms = Message::all();
        return view('pages.home', compact('rooms'));
    }
    public function create()
    {
        return view('pages.addRoom');
    }
    public function show($id)
    {
        $message = Message::find($id);
        $content = $message->content;
        return view('pages.room', ["content" => $content, "message" => $message]);
    }
    public function roomStore(StoreRoomRequest $request)
    {
        $validated = $request->validated();
        $message = Message::create($validated);
        return redirect(route('index'));
    }
    public function messageStore(StoreMessageRequest $request, $id)
    {
        $validated = $request->validated();
        $message = Message::find($id);
        $messages = $message->content;
        $messages[] = $validated;
        $message->content = $messages;
        $message->save();
        return redirect()->route('show', ["id" => $id]);
    }
}
