<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ProfileRequest;
use App\Profile;
use App\User;
use Auth;
use Illuminate\Support\Facades\Storage;



class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    
  

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('profile.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProfileRequest $request)
    {

        if($request->hasFile('image')){
            $url = $request->file('image');
            $disk = Storage::disk('s3');
            $path = $disk->putFile('/profile',$url,'public');
            $image = $disk->url($path);
        }else{
            $image = 'https://localdocker.s3-ap-northeast-1.amazonaws.com/image/default.jpeg';

        }
        
        Profile::create([
            'artist'=>$request->artist,
            'introduce'=>$request->introduce,
            'user_id'=>$request->user()->id,
            'age'=>$request->age,
            'place'=>$request->place,
            'music'=>implode(",", $request->music),
            'gender'=>$request->gender,
            'image'=>$image,
        ]);
            
        return view('profile.index');

    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('mypage.edit',['user'=>Auth::user()]);    
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


}
