<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;

class MessageController extends Controller
{
    public function store(Request $request)
    {
        //dd($request->all());
        $message  = Message::create($request->all());
        return ("Message Created Succesfuly");

    }
}
