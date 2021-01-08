<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\MypageRequest;
use App\Http\Requests\ProfileRequest;
use Illuminate\Support\Facades\Storage;
use Auth;
use App\Profile;
use App\User;



class MypageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::id();
        $users = Profile::where('user_id',$user)->first();
        $receives = $users->comment()->orderBy('created_at','desc')->paginate(5);
        

        return view('mypage.index')->with(['users'=>$users,'receives'=>$receives]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $user = Auth::id();
        $users = Profile::find($user);

        
      
        return view('mypage.member')->with('users',$users);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    //userデータの編集
    public function edit()
    {
        $auth = Auth::user();
        return view('mypage.edit',['auth'=>$auth]);          

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(MypageRequest $request)
    {   
       
        
      
      $user = Auth::user();
        

        unset($request->all()['_token']);

        
        $user->fill($request->all())->save();

        $user->password = bcrypt($request->get('new-password'));
        $user->save();

        session()->flash('flash_message', 'ログイン情報の変更が完了しました');


        return redirect('/mypage');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
    }
    //profilesデータの編集
    public function ProfileEdit(){

        $profile = Auth::id();
        $profiles = Profile::find($profile);
        return view('mypage.profile',['profiles'=>$profiles]);
    }

    public function ProfileUpdate(ProfileRequest $request) {
        $profile = Auth::id();
        $profiles = Profile::find($profile);
        
        unset($request->all()['_token']);

        $profiles->age = $request->age;
        $profiles->place = $request->place;
        $profiles->introduce = $request->introduce;
        $profiles->music = implode("/", $request->music);
        $profiles->gender = $request->gender;


        if($request->hasFile('image')){
            Storage::disk('s3')->delete('profile',$profiles->image,'public');
            $url = $request->file('image');
            $path = Storage::disk('s3')->putFile('profile',$url,'public');
            $profiles->image = Storage::disk('s3')->url($path);
            $profiles->save();
        }

        if($request->hasFile('image')){
            $url = $request->file('image');
            $disk = Storage::disk('s3');
            $path = $disk->putFile('/profile',$url,'public');
            $image = $disk->url($path);
            $profiles->image = $image;
        }else{
            $image = 'https://localdocker.s3-ap-northeast-1.amazonaws.com/image/default.jpeg';
            $profiles->image = $image;

        }

        $profiles->save();

        $user = Auth::id();
        $users = Profile::find($user);

        session()->flash('flash_message', 'プロフィールの変更が完了しました');

        return redirect('/mypage')->with('users',$users);;
    }

    public function send()
    {
        $user = Auth::id();
        $users = Profile::where('user_id',$user)->first();
        $sends = User::find($user)->comment()->orderBy('created_at','desc')->get();
        return view('mypage.send')->with(['users'=>$users,'sends'=>$sends]);
    }

    public function favorite()
    {
        $user = Auth::id();
        $users = Profile::where('user_id',$user)->first();
        $favorites = $users->users()->orderBy('created_at','desc')->get();
        return view('mypage.favorite')->with(['users'=>$users,'favorites'=>$favorites]);
    }

    public function good()
    {
        $user = Auth::id();
        $users = Profile::where('user_id',$user)->first();
        $goods = User::find($user)->favorites()->orderBy('created_at','desc')->get();

        return view('mypage.good')->with(['users'=>$users,'goods'=>$goods]);
    }

    public function follow()
    {
        $user = Auth::id();
        $users = Profile::where('user_id',$user)->first();
        $receives = $users->comment()->orderBy('created_at','desc')->paginate(5);
        $favorite = User::find($user)->favorites();
        $goods = User::find($user)->favorites()->orderBy('created_at','desc')->get();
        $relative = $favorite->pluck('profiles.user_id')->toArray();
        $follows = $users->users()->whereIn('users.id',$relative)->orderBy('created_at','desc')->get();

        return view('mypage.follow')->with(['users'=>$users,'follows'=>$follows]);
    }





}
