@extends('layouts.app')
@section('content')
<div class="container py-4 mypage">

    <div class="row">
      <div class="col-lg-4">

        <div class="card">
          <img class="card-img-top" src="" height=240 alt="Card image cap">
          <div class="card-body">
            <h4 class="card-title text-center">{{Auth::user()->name}}</h4>
            <p>{{Auth::user()->email}}</p>
            <p class="card-text">
    
            </p>
            <a href="mypage/member" class="btn btn-primary btn-lg btn-block">詳しく見る</a>
          </div>
        </div>

        @if (session('flash_message'))
      <div class="card mt-3">
        <div class="card-body">
        {{ session('flash_message') }}
        </div>
      </div>

        @endif

      </div>
      <div class="col-lg-8 mt-3">
      <a href="mypage/edit" class="btn mypage-btn" role="button" aria-pressed="true"><button type="button" class="btn btn-primary btn-lg active mr-4 text-center">ログイン情報を編集</button></a>
      <a href="mypage/profile" class="btn mypage-btn" role="button" aria-pressed="true"><button type="button" class="btn btn-primary btn-lg active mr-4 text-center">プロフィールを編集</button></a>
      <a href="message" class="btn mypage-btn" role="button" aria-pressed="true"><button type="button" class="btn btn-primary btn-lg active">オト仲間掲示板</button></a>

      

      
      </div>
      

    </div>
  
  
</div>
@endsection