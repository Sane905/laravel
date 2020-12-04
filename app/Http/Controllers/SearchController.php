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

        
        $profiles = Profile::where('user_id' ,'=' , 1)->paginate(6);
        return view('band.index')->with(['profiles'=>$profiles]);

    }
}
