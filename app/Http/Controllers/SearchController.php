<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Profile;
use Auth;
class SearchController extends Controller
{
    public function index(Request $request)
    {
        $place = $request->place;
        $age = $request->age;
        $keyword = $request->keyword;
        $gender = $request->gender;
        $music = $request->music;

        $profiles = Profile::open();

        if($request->has('keyword')){
            $profiles = Profile::keyword($keyword);
        }elseif($request->has('age')&&$age!=('error')&&$request->has('place')&&$place!=('error')&&$request->has('gender')&&$request->has('music')&&$music!=('error')){

        $profiles = Profile::ageplacemusicgender($age,$place,$music,$gender);
        }elseif($request->has('age')&&$age!=('error')&&$request->has('place')&&$place!=('error')&&$request->has('gender')){
            $profiles = Profile::ageplacegender($age,$place,$gender);
        }elseif($request->has('music')&&$music!=('error')&&$request->has('age')&&$age!=('error')&&$request->has('gender')&&$place=('error')){
            $profiles = Profile::agemusicgender($age,$music,$gender);
        }elseif($request->has('music')&&$music!=('error')&&$request->has('place')&&$place!=('error')&&$request->has('age')&&$age!=('error')&&empty($gender)){

            $profiles = Profile::placemusicage($place,$music,$age);
        }elseif($request->has('music')&&$music!=('error')&&$request->has('place')&&$place!=('error')&&$age=('error')&&$request->has('gender')){
            $profiles = Profile::placemusicgender($place,$music,$gender);
        }elseif($request->has('place')&&$place!=('error')&&$request->has('music')&&$music!=('error')&&empty($gender)&&$age=('error')){
    
            $profiles = Profile::placemusic($place,$music);
        }elseif($request->has('age')&&$age!=('error')&&$request->has('music')&&$music!=('error')&&$place=('error')&&empty($gender)){
            
            $profiles = Profile::agemusic($age,$music);
        }elseif($request->has('gender')&&$request->has('music')&&$music!=('error')&&$place=('error')&&$age=('error')){
                
                $profiles = Profile::gendermusic($gender,$music);
        }elseif($request->has('age')&&$age!=('error')&&$request->has('gender')&&$place=('error')&&$music==('error')){
        
                $profiles = Profile::genderage($gender,$age);
        }elseif($request->has('age')&&$age!=('error')&&$request->has('place')&&$place!=('error')&&empty($gender)&&$music==('error')){

            $profiles = Profile::ageplace($age,$place);
        }elseif($request->has('place')&&$place!=('error')&&$request->has('gender')&&$age=('error')&&$music==('error')){
        
            $profiles = Profile::genderplace($gender,$place);
        }elseif($request->has('age')&&$age!=('error')&&empty($gender)&&$place=('error')&&$music==('error')){
        
            $profiles = Profile::age($age);
        }elseif($request->has('place')&&$place!=('error')&&empty($gender)&&$age=('error')&&$music==('error')){
        
            $profiles = Profile::place($place);
        }elseif($request->has('gender')&&$age=('error')&&$place=('error')&&$music==('error')){
            
            $profiles = Profile::gender($gender);
        }elseif($request->has('music')&&$music!=('error')&&$age=('error')&&$place=('error')&&empty($gender)){

            $profiles = Profile::music($music);
        }else{
            $profiles = Profile::open();

        }

        foreach($profiles as $profile)
        {
            if($profile->user_id!=Auth::id())
            {
                $results = $profiles
            }

        }
        
        return view('band.index')->with(['keyword'=>$keyword,'profiles'=>$profiles, 'profiles'=>$results]);

    }
}
