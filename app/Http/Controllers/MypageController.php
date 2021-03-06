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
        $users = Profile::with('user')->where('user_id',$user)->first();
        $receives = $users->comment()->latest()->get();

        return view('mypage.index', compact('users','receives'));
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



        return view('mypage.member', compact('users'));
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
        return view('mypage.edit', compact('auth'));

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


        return redirect()->to('mypage');
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
        return view('mypage.profile', compact('profiles'));
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
        $users = Profile::with('user')->where('user_id',$user)->first();
        $sends = User::find($user)->comment()->latest()->get();
        return view('mypage.send', compact('users', 'sends'));
    }

    public function favorite()
    {
        $user = Auth::id();
        $users = Profile::with('user')->where('user_id',$user)->first();
        $favorites = $users->users()->latest()->get();
        return view('mypage.favorite', compact('users', 'favorites'));
    }

    public function good()
    {
        $user = Auth::id();
        $users = Profile::with('user')->where('user_id',$user)->first();
        $goods = User::find($user)->favorites()->latest()->get();

        return view('mypage.good', compact('users', 'goods'));
    }

    public function follow()
    {
        $user = Auth::id();
        $users = Profile::where('user_id',$user)->first();
        $favorite = User::find($user)->favorites();
        $goods = User::find($user)->favorites()->latest()->get();
        $relative = $favorite->pluck('profiles.user_id')->toArray();
        $follows = $users->users()->whereIn('users.id',$relative)->latest()->get();

        return view('mypage.follow', compact('users', 'follows'));
    }





}
