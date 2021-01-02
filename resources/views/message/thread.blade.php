@extends('layouts.search')
@section('content')

<div class="container py-4">
  <div class="page">
  <section>
   <form class="chart-form mb-3" method="post" action="{{route('thread.store')}}">
      @csrf
      <div class="input-group">
        <input type="text" class="form-control" name="title" placeholder="新規スレを入力">

        <div class="input-group-append">
          <button class="btn btn-primary" type="submit">作成</button>

        </div>
      </div>
    </form>
  </section>
    
    
  <section class="card">
    <div class="card-header">
      スレッド一覧
    </div>
    
    <div class="card-body">
      <div class="media">
       
      

        <div class="media-body">
        @foreach ($threads as $thread)
        <a href="{{ url('thread/'.$thread->id) }}">


          <p class="media-heading">{{ $thread->title }}</p>
          <p>({{ count($thread->post_list) }})</p>
          <time class="text-secondary mr-4">
            {{ $thread->updated_at->format('Y/m/d H:i:s') }}
          </time>
        </a>
        @endforeach


        </div>

      </div>
    </div>
  </section>
  </div>


    
  </div>



@endsection