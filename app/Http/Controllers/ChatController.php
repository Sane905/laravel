<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Events\ChatMessageRecieved;
use App\Chat;
use Auth;
use App\User;
class ChatController extends Controller
{
    

    public function index(Request $request,$recieve){
         // チャットの画面
         $user=User::find($recieve);
         return view('chat.index')->with('user',$user);
    }

    public function store(Request $request)
    {
         

    }

}
