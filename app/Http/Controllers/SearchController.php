<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Profile;
use Auth;
class SearchController extends Controller
{
    public function index(Request $request)
    {
        
        $keyword = $request->keyword;

        
        $profiles = Profile::where('user_id' ,'<>' , Auth::id())->paginate(6);
        
        return view('band.index')->with(['keyword'=>$keyword,'profiles'=>$profiles]);

    }
}
