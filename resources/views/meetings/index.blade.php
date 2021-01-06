@extends('layouts.search')
@section('content')

<div class="container mt-4">

    <div class="row">
      <div class="mx-auto col-md-7">
          @include('meetings.list', compact('meetings'))

      </div>
    </div>

    @include('meetings.new_post_btn')

  </div>

@endsection