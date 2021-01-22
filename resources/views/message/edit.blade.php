@extends('layouts.app')
@section('content')
　　<div class="container my-5">
    <div class="row">
      <div class="mx-auto col-md-7">
        <div class="card">
          <h2 class="h4 card-header text-center blue-gradient text-white">スレッドを編集</h2>
          <div class="card-body pt-3">


            <div class="my-4">
              <form method="POST" class="w-75 mx-auto" action="{{ route('thread.update', ['thread' => $thread]) }}">
                @csrf
                @method('PATCH')
                <input type="hidden" name="thread_id" value="{{$thread->id}}"></input>
                <div class="form-group">
                    <label for="content">
                        スレッド
                    </label>

                    <textarea
                        id="content"
                        name="title"
                        class="form-control"
                        rows="4"
                    >{{ $thread->title ?? old('title') }}</textarea>

                </div>

                <div class="mt-4">
                  <button class="btn btn-block blue-gradient mt-2 mb-2" type="submit" text-while>
                    <span class="h5">更新する</span>
                  </button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection