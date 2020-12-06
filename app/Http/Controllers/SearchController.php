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

        
        $query = Profile::query()->where('user_id','<>',Auth::id());

        if($request->has('keyword')){
            $profiles = Profile::keyword($keyword)->paginate(6);
        }elseif($request->has('place')&&$place!=('error')&&$request->has('music')&&$music!=('error')&&empty($gender)&&$age=('error')){
            /**バグ */
            $profiles = Profile::placemusic($place,$music)->paginate(6);
        }else{
            $profiles = Profile::open()->paginate(6);

        }
        
        return view('band.index')->with(['keyword'=>$keyword,'profiles'=>$profiles]);

    }
}
