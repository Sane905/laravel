<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Profile;
use Auth;
class SearchController extends Controller
{
    public function index(Request $request)
    {
        $profiles = Profile::where('user_id' ,'=' , 1)->paginate(6);
        $place = $request->place;
        $age = $request->age;
        $keyword = $request->keyword;
        $gender = $request->gender;
        $music = $request->music;

        
        return view('band.index')->with(['keyword'=>$keyword,'profiles'=>$profiles]);

    }
}
