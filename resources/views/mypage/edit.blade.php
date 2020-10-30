@extends('layouts.page')
@section('content')

<div class="container">
  <div class="row justify-content-center">
    <div class="col-lg-8">
      <div class="card">
        <div class="card-header text-center">ユーザー登録内容の変更</div>
        <div class="card-body">
          <form method="POST" action="{{action('MypageController@update')}}">
            @csrf
            <div class="form-group">
              <label for="name">
                名前
              </label>
              <div>
                <input type="text" name="name" class="form-control" value="{{$auth->name}}">
              </div>

              @error('name')
                <span class="text-danger">{{ $message }}</span>
              @enderror
            </div>
            <div class="form-group">
              <label for="email">
                      E-mail
              </label>
              <div> 
                <input type="text" name="email" class="form-control" value="{{$auth->email}}">
              </div>
            @error('email')
            <span class="text-danger">{{ $message }}</span>
            @enderror

            <div class="form-group mt-3">
                <label for="password">新しいパスワード</label>
                <div>
                    <input id="password" type="password" class="form-control" name="new-password" required>
                </div>
            </div>
            <div class="form-group mt-3">
                <label for="confirm">新しいパスワード（確認用）</label>
                <div>
                    <input id="confirm" type="password" class="form-control" name="new-password_confirmation" required>
                </div>
            </div>
            @error('new-password')
                <span class="text-danger">{{ $message }}</span>
              @enderror


              <div class="pt-3 text-center">
                <button type="submit" class="btn btn-primary btn-lg mt-6 w-100">変更する</button>

              </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection