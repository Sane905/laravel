@extends('layouts.page')
@section('content')
<div class="container py-4">
  <div class="row justify-content-center">
    <div class="col-lg-6">
      <div class="card">
        <img class="card-img-top" src="{{$users->image}}" height=300>
          <div class="card-body">
          <h4 class="card-title text-center">{{Auth::user()->name}}</h4>

            　　
                <h5 class="card-text mb-5">
                メールアドレス:{{Auth::user()->email}}
                </h5>

              
                <h5 class="card-text mb-5">
                性別:{{$users->gender}}
                </h5>
            　　　
                　
                <h5 class="card-text mb-5">
                年齢:{{$users->age}}
                </h5>

                
                <h5 class="card-text mb-5">
                居住地:{{$users->place}}
                </h5>

                
                <h5 class="card-text mb-5">
                好きな音楽ジャンル:<br><br>{{$users->music}}
                </h5>
                
                
                <h5 class="card-text mb-5">
                好きなアーティスト:{{$users->artist}}
                </h5>
                
                
                <h5 class="card-text mb-5">
                自己紹介:{{$users->introduce}}
                </h5>
                <a href="{{ url()->previous() }}" class="btn btn-primary btn-lg btn-block">戻る</a>
          </div>
      </div>    
    </div>
  </div>
</div>



@endsection