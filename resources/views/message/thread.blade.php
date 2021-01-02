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
    
  @foreach ($threads as $thread)
  <section class="card mt-4">
  <a href="{{ url('thread/'.$thread->id) }}">

    <div class="card-header">
    {{ $thread->title }}
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


    
  </div>



@endsection

