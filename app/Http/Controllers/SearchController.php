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

      if($request->has('music')&&$music!=('error')&&$request->has('place')&&$place!=('error')&&$request->has('age')&&$age!=('error')&&empty($gender)){
            /**バグ */
            $profiles = Profile::placemusicage($place,$music,$age)->paginate(6);
      }else{
            $profiles = Profile::open()->paginate(6);

        }
        
        return view('band.index')->with(['keyword'=>$keyword,'profiles'=>$profiles]);

    }
}
