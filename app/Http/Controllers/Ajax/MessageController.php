<?php

namespace App\Http\Controllers\Ajax;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Message;
use App\Events\MessageCreated;
use Auth;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $user=Auth::id();

        $query=Message::orderBy('id','desc');
    
        return $query->get();
    }

    /**
     * Show the form for creating a new resource.
     *  
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $message=Message::create([
            'body'=>$request->message,
            'user_id'=>Auth::id()
        ]);
        event(new MessageCreated($message));
    }
}
