<?php

namespace App\Http\Controllers;

use App\Http\Requests\CommentRequest;   
use App\Comment; 
use App\Profile;
use App\User;
use Auth;


class CommentController extends Controller
{
    public function store(CommentRequest $request)
    {
       Comment::create([
           'body'=>$request->body,
           'user_id'=>Auth::id(),
           'profile_id'=>$request->profile_id
       ]);

    $id = $request->profile_id;
    $user = Profile::find($id);
    $comments = $user->comment()->orderBy('created_at', 'desc')->paginate(5);
    session()->flash('complete_message', 'コメントの投稿が完了しました');

     

       return view('band.show',['user'=>$user,'comments'=>$comments]);        

    }

    public function delete()
    {

        
    }
}
