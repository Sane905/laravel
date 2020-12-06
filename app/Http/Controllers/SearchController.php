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

       if($place==('error')&&empty($keyword)&&$age==('error')&&empty($gender)&&$music==('error')){
            $profiles = Profile::open()->paginate(6);
       }elseif($request->has('keyword')){
            
            $profiles = Profile::keyword($keyword)->paginate(6);
        }elseif($request->has('age')&&$age!=('error')&&$request->has('place')&&$place!=('error')&&$request->has('gender')&&$request->has('music')&&$music!=('error')){
        $query->Where('age',$age)
        ->Where('place',$place)
        ->Where('music','LIKE',"%{$music}%")
        ->Where('gender',$gender);

        $profiles = $query->paginate(6);
        }elseif($request->has('age')&&$age!=('error')&&$request->has('place')&&$place!=('error')&&$request->has('gender')){

                $profiles = Profile::ageplacegender($age,$place,$gender)->paginate(6);
            

            
        }elseif($request->has('music')&&$music!=('error')&&$request->has('age')&&$age!=('error')&&$request->has('gender')&&$place=('error')){
            $profiles = Profile::agemusicgender($age,$music,$gender)->paginate(6);
        }elseif($request->has('music')&&$music!=('error')&&$request->has('place')&&$place!=('error')&&$age=('error')&&$request->has('gender')){
            $profiles = Profile::placemusicgender($place,$music,$gender)->paginate(6);
        }elseif($request->has('music')&&$music!=('error')&&$request->has('place')&&$place!=('error')&&$request->has('age')&&$age!=('error')&&empty($gender)){
            $profiles = Profile::placemusicage($place,$music,$age)->paginate(6);
        }elseif($request->has('music')&&$music!=('error')&&$request->has('place')&&$place!=('error')&&empty($gender)&&$age=('error')){
            /**バグ */
            $profiles = Profile::placemusic($place,$music)->paginate(6);
        }elseif($request->has('age')&&$age!=('error')&&$request->has('music')&&$music!=('error')&&$place=('error')&&empty($gender)){
            
            $profiles = Profile::agemusic($age,$music)->paginate(6);
        }elseif($request->has('gender')&&$request->has('music')&&$music!=('error')&&$place=('error')&&$age=('error')){
                
                $profiles = Profile::gendermusic($gender,$music)->paginate(6);
        }elseif($request->has('age')&&$age!=('error')&&$request->has('gender')&&$place=('error')&&$music==('error')){
        
                $profiles = Profile::genderage($gender,$age)->paginate(6);
        }elseif($request->has('age')&&$age!=('error')&&$request->has('place')&&$place!=('error')&&empty($gender)&&$music==('error')){

            $profiles = Profile::ageplace($age,$place)->paginate(6);
        }elseif($request->has('place')&&$place!=('error')&&$request->has('gender')&&$age=('error')&&$music==('error')){
        
            $profiles = Profile::genderplace($gender,$place)->paginate(6);
        }elseif($request->has('age')&&$age!=('error')&&empty($gender)&&$place=('error')&&$music==('error')){
        
            $profiles = Profile::age($age)->paginate(6);
        }elseif($request->has('place')&&$place!=('error')&&empty($gender)&&$age=('error')&&$music==('error')){
        
            $profiles = Profile::place($place)->paginate(6);
        }elseif($request->has('gender')&&$age=('error')&&$place=('error')&&$music==('error')){
            
            $profiles = Profile::gender($gender)->paginate(6);
        }elseif($request->has('music')&&$music!=('error')&&$age=('error')&&$place=('error')&&empty($gender)){

            $profiles = Profile::music($music)->paginate(6);
        }else{
            $profiles = Profile::open()->paginate(6);

        }
        
        return view('band.index')->with(['keyword'=>$keyword,'profiles'=>$profiles]);

    }
}
