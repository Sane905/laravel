@extends('layouts.app')
@section('content')
<div class="container py-4 mypage">

    <div class="row">
      <div class="col-lg-4">

        <div class="card">
          <img class="card-img-top" src="{{$users->image}}" height=240 alt="Card image cap">
          <div class="card-body">
            <h4 class="card-title text-center">{{Auth::user()->name}}</h4>
            <p>{{Auth::user()->email}}</p>
            <p class="card-text">
              {{$users->introduce}}
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

      
      <div id="app" class="card mt-4">
        <ul class="nav nav-tabs">
          <li class="nav-item w-33">
            <a href="{{route('mypage.index')}}" class="nav-link">コメント受信</a>
          </li>
          <li class="nav-item">
            <a href="{{route('mypage.send')}}" class="nav-link">コメント送信</a>
          </li>
          <li class="nav-item">
            <a href="{{route('mypage.favorite')}}" class="nav-link">あなたを気にしてる人</a>
          </li>
          <li class="nav-item">
            <a href="{{route('mypage.good')}}" class="nav-link">あなたが気にした人</a>
          </li>
          <li class="nav-item">
            <a href="{{route('mypage.follow')}}" class="nav-link">相互気になる人</a>
          </li>
        </ul>

      <div class="tab-content">
        <div id="good" class="tab-pane active">
        　　 @forelse($goods as $good)
                  <a href="../band/{{$good->id}}">
                  <div class="border-top p-4">
                      <div class="d-flex">
                        <img class="mw-10 rounded-circle" src="{{$good->image}}" width=50 height=50>
                        
                        <div class="d-flex">
                          <p class="ml-3">{{$good->user->name}}</p>
                          <p class="mr-3 ml-3">{{$good->age}}</p>
                          <p>{{$good->gender}}</p>

                        </div>

                        
                      </div>
                      
                  </div>
                  
                  
                  </a>
                
              @empty
                  <p>気にした人はまだいません。</p>
              @endforelse
      
            
        </div>

        
      </div> 
        
        </div>

      
      </div>
      

    </div>
  
  
</div>
@endsection