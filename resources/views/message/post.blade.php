@extends('layouts.app')
@section('content')
<div class="container mt-4">
  <div class="border p-4">
  <a class="btn btn-danger" href="../message">スレッド一覧に戻る</a>
<h1 class="h5 mb-4 mt-4">{{$thread->title}}</h1>
 
{{-- 新規投稿 --}}
<form class="mb-4" method="post" action="{{route('post.store')}}">
    @csrf
    <input type="hidden" name="thread_id" value="{{$thread->id}}"></input>
    <div class="form-group">
        <label for="content">
            投稿内容
        </label>

        <textarea
            id="content"
            name="content"
            class="form-control"
            rows="4"
        ></textarea>
        
    </div>

    <div class="mt-4">
        <button type="submit" class="btn btn-primary">
            投稿する
        </button>
    </div>
    
</form>
 
{{-- 投稿一覧 --}}
@forelse ($thread->post_list as $key=>$post)
    <div class="border-top p-4">
        <p id="{{$key+1}}" class="mr-3 mt-3">{{$key+1}}</p>
            <div class="d-flex">
                <img class="mw-10 rounded-circle" src="{{$post->post_user->profile->image}}" width=50 height=50>
                <p class="ml-3 mt-3">
                {{$post->post_user->name}}
                </p>
            </div>
        
        <p class="mt-2">
            {{-- HTMLタグ無効化してから、改行を<br>変換  --}}
            {!! nl2br(htmlspecialchars($post->content)) !!}
        </p>

        <time class="text-secondary">
        {{ $post->created_at->format('Y/m/d H:i:s') }}
        </time>
        
    </div>  
    @empty
    <p>まずはあなたの一言を投稿してみましょう。</p>
    @endforelse
  
  </div>
</div>


    


@endsection

