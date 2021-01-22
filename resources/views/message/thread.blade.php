@extends('layouts.app')
@section('content')

<div class="container py-4">

   <form class="chart-form mb-3" method="post" action="{{route('thread.store')}}">
      @csrf
      <div class="input-group">
        <input type="text" class="form-control" name="title" placeholder="新規スレを入力">

        <div class="input-group-append">
          <button class="btn btn-primary" type="submit">作成</button>

        </div>
      </div>
   </form>

   @if (session('msg_success'))
        <div class="card mt-3 mb-3 text-center">
          <div class="card-body">
          {{ session('msg_success') }}
          </div>
        </div>

  @endif


  @foreach ($threads as $thread)
  <section class="card mt-4">
  <a href="{{ url('thread/'.$thread->id) }}">

    <div class="card-header d-flex flex-row align-items-center blue-gradient text-white">
    <div class="text-white">
    <strong>{{ $thread->title }}</strong>
    </div>
    @if( Auth::id() === $thread->user_id )
      <!-- dropdown -->
      <div class="ml-auto card-text">
        <div class="dropdown">
          <a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-ellipsis-v fa-lg"></i>
          </a>
          <div class="dropdown-menu dropdown-menu-right">
            <a class="dropdown-item" href="{{ route('thread.edit', ['thread' => $thread]) }}">
              <i class="fas fa-pen mr-1"></i>スレッドを編集する
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item text-danger" data-toggle="modal" data-target="#modal-delete-{{$thread->id}}">
              <i class="fas fa-trash-alt mr-1"></i>スレッドを削除する
            </a>
          </div>
        </div>
      </div>
      <!-- dropdown -->

      <!-- modal -->
      <div id="modal-delete-{{$thread->id}}" class="modal fade" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="閉じる">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form method="POST" action="{{route('thread.destroy', ['thread' => $thread])}}">
              @csrf
              @method('DELETE')
              <div class="modal-body text-center text-dark">
                {{$thread->title}}を削除します。よろしいですか？
              </div>
              <div class="modal-footer justify-content-between">
                <a class="btn btn-outline-grey" data-dismiss="modal">キャンセル</a>
                <button type="submit" class="btn btn-danger">削除する</button>
              </div>
            </form>
          </div>
        </div>
      </div>
      <!-- modal -->
    @endif
    </div>



    <div class="card-body">

        <div class="card-text">



        <span class="mr-2">
            投稿日時: {{ $thread->updated_at->format('Y/m/d H:i:s') }}

        </span>

        <span class="badge badge-primary">
            投稿:{{ count($thread->post_list) }}件
        </span>



        </div>











    </div>
    </a>
  </section>
  @endforeach




  </div>



@endsection

