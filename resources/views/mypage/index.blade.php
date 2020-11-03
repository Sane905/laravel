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
      <a href="message" class="btn mypage-btn" role="button" aria-pressed="true"><button type="button" class="btn btn-primary btn-lg active">オト仲間掲示板</button></a>

      
      <div id="app" class="card mt-4">
        <ul class="nav nav-tabs">
          <li class="nav-item w-33">
            <a href="#receive" class="nav-link active" data-toggle="tab">コメント受信</a>
          </li>
          <li class="nav-item">
            <a href="#send" class="nav-link" data-toggle="tab">コメント送信</a>
          </li>
          <li class="nav-item">
            <a href="#favorite" class="nav-link" data-toggle="tab">あなたを気にしてる人</a>
          </li>
          <li class="nav-item">
            <a href="#good" class="nav-link" data-toggle="tab">あなたが気にした人</a>
          </li>
          <li class="nav-item">
            <a href="#follow" class="nav-link" data-toggle="tab">相互気になる人</a>
          </li>
        </ul>

      <div class="tab-content">
        <div id="receive" class="tab-pane active">
        　  @forelse($receives as $comment)
              <a href="band/{{$comment->user->profile->id}}">
                <div class="border-top p-4">
                    <div class="d-flex">
                    <img class="mw-10 rounded-circle" src="storage/image/{{$comment->user->profile->image}}" width=50 height=50>
                      <p class="ml-3 mt-3">{{$comment->user->name}}</p>
                      <time class="text-secondary ml-3 mt-3">
                          {{ $comment->created_at->format('Y.m.d H:i') }}
                      </time>
                      
                    </div>
                    
                    <p class="mt-2">
                        {!! nl2br(e($comment->body)) !!}
                    </p>
                </div>
              </a>
            @empty
                <p>コメントはまだありません。</p>
            @endforelse
              
        </div>
        <div id="send" class="tab-pane">
        　  @forelse($sends as $send)
                  <a href="band/{{$send->profile->id}}">
                  <div class="border-top p-4">
                      <div class="d-flex">
                        <img class="mw-10 rounded-circle" src="storage/image/{{$send->profile->image}}" width=50 height=50>
                        <p class="ml-3 mt-3">{{$send->profile->user->name}}</p>
                        <time class="text-secondary ml-3 mt-3">
                            {{ $send->created_at->format('Y.m.d H:i') }}
                        </time>
                        
                      </div>
                      
                      <p class="mt-2">
                          {!! nl2br(e($send->body)) !!}
                      </p>
                  </div>
                  </a>
                
            @empty
                <p>コメントはまだありません。</p>
            @endforelse
            
            

        </div>
        
        <div id="favorite" class="tab-pane">
        　　 @forelse($favorites as $favorite)
                  <a href="band/{{$favorite->profile->id}}">
                  <div class="border-top p-4">
                      <div class="d-flex">
                        <img class="mw-10 rounded-circle" src="storage/image/{{$favorite->profile->image}}" width=50 height=50>
                        <p class="ml-3">{{$favorite->name}}</p>
                        <p class="mr-3 ml-3">{{$favorite->profile->age}}</p>
                        <p>{{$favorite->profile->gender}}</p>
                      </div>

                      <good-component
                      :user="{{json_encode($favorite)}}">
                      </good-component>
                      
                      
                  </div>
                  
                  
                  </a>
                
                
              @empty
                  <p>気にしてる人はまだいません。</p>
              @endforelse
      
            
        </div>

        
        <div id="good" class="tab-pane">
        　　 @forelse($goods as $good)
                  <a href="band/{{$good->id}}">
                  <div class="border-top p-4">
                      <div class="d-flex">
                        <img class="mw-10 rounded-circle" src="storage/image/{{$good->image}}" width=50 height=50>
                        
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

        <div id="follow" class="tab-pane">
        　　 @forelse($follows as $follow)
                  <a href="band/{{$follow->profile->id}}">
                  <div class="border-top p-4">
                      <div class="d-flex">
                        <img class="mw-10 rounded-circle" src="storage/image/{{$follow->profile->image}}" width=50 height=50>
                        <p class="ml-3">{{$follow->name}}</p>
                        <p class="mr-3 ml-3">{{$follow->profile->age}}</p>
                        <p>{{$follow->profile->gender}}</p>
                      </div>
                      
                      <div class="d-flex align-self-center justify-content-end">
                        <a href="chat/{{$follow->id}}"><button type="button" class="btn btn-primary btn-block">チャットする</button></a>
                      </div>

                  </div>
                  </a>
                
                
            @empty
                <p>相互気にした人はまだいません。</p>
            @endforelse
        </div>
      </div> 
        
        </div>

      
      </div>
      

    </div>
  
  
</div>
@endsection