<?php

namespace App\Http\Controllers;

use App\Models\Messages;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    //index
    public function index()
    {
        $messages = Messages::with(['users'])->get();

        return response()->json($messages);
    }

    //store
    public function store(Request $request)
    {
        $message = $request->user()->messages()->create([
            'body' => $request->body
        ]);

        return response()->json($message);
    }


    
}
