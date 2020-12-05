<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Profile;
use Auth;
class SearchController extends Controller
{
    public function index(Request $request)
    {
        $profiles = Profile::all();
        $place = $request->place;
        $age = $request->age;
        $keyword = $request->keyword;
        $gender = $request->gender;
        $music = $request->music;

        $query = Profile::query();

        if($request->has('keyword')){
            $query->Where('introduce','LIKE',"%{$keyword}%")
            ->orWhere('artist','LIKE',"%{$keyword}%")
            ->orWhere('gender','LIKE',"%{$keyword}%")
            ->orWhere('age','LIKE',"%{$keyword}%")
            ->orWhere('place','LIKE',"%{$keyword}%")
            ->orWhere('music','LIKE',"%{$keyword}%")
            ->orWhereHas('user',function($query)use($keyword){
                $query->where('name',$keyword);
            });
            $profiles = $query;
        }else{
                $query->all();
                $profiles = $query->get();
        }
        return view('band.index')->with(['keyword'=>$keyword,'profiles'=>$profiles]);

    }
}
