@extends('layouts.sub')

@section('content')
<div class="container py-4">
    <div class="justify-content-center">
       
            <div class="card">

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h2 class="text-center">{{Auth::user()->name}}さん！会員登録ありがとうございます。</h2>
                    <p class="text-center">オト仲間を見つけるためにあなたのアカウントを作成しましょう</p>
                    　<div class="d-flex justify-content-center">
                    <a href="{{ route('profile.create') }}" class="btn btn-primary btn-lg">アカウントを作成</a>

                       </div>

                </div>
      
            </div>
       
      
    </div>

    
</div>
@endsection
