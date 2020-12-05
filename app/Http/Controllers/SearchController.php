<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Profile;
use Auth;
class SearchController extends Controller
{
    public function index(Request $request)
    {
        $profiles = Profile::open()->paginate(6);
        $place = $request->place;
        $age = $request->age;
        $keyword = $request->keyword;
        $gender = $request->gender;
        $music = $request->music;

        
        return view('band.index')->with(['keyword'=>$keyword,'profiles'=>$profiles]);

    }

    public function show(Request $request)
    {
    $query = Profile::open()->where('user_id','<>',Auth::id());
    $place = $request->place;
    $age = $request->age;
    $keyword = $request->keyword;
    $gender = $request->gender;
    $music = $request->music;

        return view('band.index')->with(['keyword'=>$keyword,'profiles'=>$profiles]);

    }
}
