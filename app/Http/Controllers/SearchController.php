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
        }elseif($request->has('place')&&$place!=('error')&&empty($gender)&&$age=('error')&&$music==('error')){
        
            $profiles = Profile::place($place);
        }elseif($request->has('gender')&&$age=('error')&&$place=('error')&&$music==('error')){
            
            $profiles = Profile::gender($gender);
        }elseif($request->has('music')&&$music!=('error')&&$age=('error')&&$place=('error')&&empty($gender)){

            $profiles = Profile::music($music);
        }else{
            $profiles = Profile::open();

        }
        
        return view('band.index')->with(['keyword'=>$keyword,'profiles'=>$profiles]);

    }
}
