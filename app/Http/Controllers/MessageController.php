<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function index(){

        $message = Message::all();

        return view('message.index',compact('message'));
    }

    public function create(){
        return view('message.create');
    }

    public function storeDevice(){

        $message = new Message();

        $message->name = request('name');
        $message->description = request('description');

        $message->save();

        return redirect('/contact');

    }
}
