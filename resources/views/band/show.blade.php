@extends('layouts.app')
@section('content')
<div class="container py-4">

<div class="row justify-content-center">
    <div class="col-lg-6">
                        
    @if (session('complete_message'))
                <div class="card mt-3 mb-3">
                  <div class="card-body">
                  {{ session('complete_message') }}
                  </div>
                </div>

        @endif
      <div class="card">
        <img class="card-img-top" src="{{$user->image}}" height=300>
          <div class="card-body">
          <h4 class="card-title text-center">{{$user->user->name}}</h4>


                
                <h5 class="card-text mb-5">
                  性別:{{$user->gender}}
                </h5>
            　　　
          
                <h5 class="card-text mb-5">
                  年齢:{{$user->age}}
                </h5>

              
                <h5 class="card-text mb-5">
                  居住地:{{$user->place}}
                </h5>

                
                <h5 class="card-text mb-5">
                好きな音楽ジャンル:<br><br>{{$user->music}}
                </h5>
                
                
                <h5 class="card-text mb-5">
                好きなアーティスト:{{$user->artist}}
                </h5>
                
                
                <h5 class="card-text mb-5">
                自己紹介:{{$user->introduce}}
                </h5>
                

                <like-component
                :profile="{{json_encode($user)}}">
                </like-component>
                


                <a class="btn btn-primary btn-lg btn-block w-50 mb-3" href="{{action('SearchController@index')}}">トップに戻る</a>

                <form method="POST" action="{{$user->id}}" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="profile_id" value="{{ $user->id }}">
              
                  <div class="form-group">
                    <label for="formGroupExampleInput2">コメント文</label>
                    <textarea type="text" name="body" class="form-control" id="formGroupExampleInput2" placeholder="140字以内で入力してください。">
                    </textarea>
                    @error('body')
                  <span class="text-danger">{{ $message }}</span>
                  @enderror
                  </div>
                  <button type="submit" class="btn btn-primary btn-lg btn-block w-50">コメントする</button>
              
                </form>
               
          </div>
      </div>    

      <div class="card mt-4">
      <h2 class="mt-3 text-center">コメント一覧</h2>
      @forelse($comments as $comment)
      <a href="{{$comment->user->id}}">
      <div class="border-top p-4">
      <div class="d-flex">
      <time class="text-secondary mr-4">
          {{ $comment->created_at->format('Y.m.d H:i') }}
      </time>
      <p class="mr-3">{{$comment->user->name}}</p>
      <p class="mr-3">{{$comment->user->profile->age}}</p>
      <p>{{$comment->user->profile->gender}}</p>
      
      
      </div>
      
      <img class="rounded-circle" src="{{$comment->user->profile->image}}" width=50 height=50>
      
      <p class="mt-2">
          {!! nl2br(e($comment->body)) !!}
      </p>
      
      </div>
      </a>
      @empty
            <p>コメントはまだありません。</p>
        @endforelse
        <div class="paginate mt-5 d-flex justify-content-center">
        {{ $comments->links() }}
        </div>
</div>
    </div>
  </div>
</div>


@endsection