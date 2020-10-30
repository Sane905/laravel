@extends('layouts.app')
@section('content')

<div class="container py-4">
<h2 class="text-center">コメント投稿</h2>
<form method="POST" action="{{ action('BandController@store')}}">
@csrf
  <div class="form-group">
    <label for="formGroupExampleInput">ユーザー名</label>
    <input type="text" class="form-control" id="formGroupExampleInput" value="{{Auth::user()->name}}" readonly>
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">コメント文</label>
    <textarea type="text" name="body" class="form-control" id="formGroupExampleInput2" placeholder="140字以内で入力してください。">
    </textarea>
    @error('body')
  <span class="text-danger">{{ $message }}</span>
  @enderror
  </div>

  <button type="submit" class="btn btn-primary btn-lg btn-block w-50">投稿する</button>
  <a href="{{ url()->previous() }}" class="btn btn-primary btn-lg btn-block mt-4 w-50">戻る</a>


</form>
</div>

@endsection

