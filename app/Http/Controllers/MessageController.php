<?php

namespace App\Http\Controllers;

use App\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MessageController extends Controller
{

    /**
     * @param Request $request
     * @return Message[]|\Illuminate\Database\Eloquent\Collection
     */

    public function store(Request $request)
    {
        $message = new Message();
        $message->text = $request->input('text');
        Auth::user()->messages()->save($message);

        return Message::all()->map(function($m){
            return ['text' => $m->text, 'author' => $m->user->name];
        });
    }

}
