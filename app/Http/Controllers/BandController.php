<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CommentRequest;
use App\Profile;
use App\Comment;
use App\User;


class BandController extends Controller
{
    //

    public function index()
    {
      

    }

    

    public function show($id)
    {
        $user = Profile::find($id);
        $comments = $user->comment()->orderBy('created_at', 'desc')->paginate(5);
        return view('band.show')->with(['user'=>$user,'comments'=>$comments]);
    }

    public function create()
    {

        return view('band.create');
    }
    
   

    
  
}
