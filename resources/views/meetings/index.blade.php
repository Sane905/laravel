@extends('layouts.app')
@section('content')

<div class="container mt-4">
  @if (session('msg_success'))
        <div class="card mt-3 mb-3 text-center">
          <div class="card-body">
          {{ session('msg_success') }}
          </div>
        </div>

  @endif

    <div class="row">
      <div class="mx-auto col-md-7">
          @include('meetings.list', compact('meetings'))

      </div>
    </div>

    @include('meetings.new_post_btn')

  </div>

@endsection