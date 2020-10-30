@extends('layouts.sub')
@section('content')
<div class="container py-4">
<div class="card text-center">
  <h3 class="card-header">オトLABOを使いはじめる準備が完了しました。</h3>
  <div class="card-body">
    <h4 class="card-title">{{Auth::user()->name}}さんにとってよいオトLIFEを!</h4>
    <p class="card-text">まずは検索してあなたの趣味に合う仲間を探してみましょう</p>
    <a href="{{ route('mypage.index') }}" class="btn btn-primary btn-lg">さっそくはじめる</a>
  </div>
</div>
@endsection