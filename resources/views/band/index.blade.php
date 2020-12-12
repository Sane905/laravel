@extends('layouts.app')
@section('content')
<div class="container py-4 band">

   <div class="d-flex">
   @if(!empty($keyword))
      <h2>「{{ $keyword }}」のオト仲間を探す</h2>
  @elseif(empty($keyword))
   <h2>全てのオト仲間を探す</h2>
   @endif
   </div>
  
  <div class="row">
  <div class="col-lg-3">


<div class="card mt-5">
  <p class="card-header text-center">絞り込み</p>
  <div class="card-body">
    <form action="{{action('SearchController@index')}}" method="GET" enctype="multipart/form-data">
      @csrf

      <div class="form-group">
        <label for="formGroupExampleInput">音楽カテゴリ</label>
       
          <select name="music" type="text" class="custom-select">
              <option value="error">選択してください</option>
              <option value="J-POP">J-POP</option>
              <option value="邦楽ヒップホップ/R&B/レゲエ">邦楽ヒップホップ/R&B/レゲエ</option>
              <option value="邦楽ロック">邦楽ロック</option>
              <option value="邦楽ダンス/エレクトロニカ">邦楽ダンス/エレクトロニカ</option>
              <option value="K-POP/ワールドミュージック">K-POP/ワールドミュージック</option>
              <option value="洋楽ポップス">洋楽ポップス</option>
              <option value="洋楽ヒップホップ/R&B/レゲエ">洋楽ヒップホップ/R&B/レゲエ</option>
              <option value="洋楽ロック">洋楽ロック</option>
              <option value="洋楽ダンス/エレクトロニカ">洋楽ダンス/エレクトロニカ</option>
              <option value="歌謡曲/演歌">歌謡曲/演歌</option>
              <option value="ジャズ">ジャズ</option>
              <option value="クラシック">クラシック</option>
            </select>
      </div>
      
      <div class="form-group">
          <label for="formGroupExampleInput">居住地</label>
        　　<select name="place" type="text" class="custom-select">
              <option value="error">選択してください</option>
            　<option value="北海道">北海道</option>
              <option value="青森県">青森県</option>
              <option value="岩手県">岩手県</option>
              <option value="宮城県">宮城県</option>
              <option value="秋田県">秋田県</option>
              <option value="山形県">山形県</option>
              <option value="福島県">福島県</option>
              <option value="茨城県">茨城県</option>
              <option value="栃木県">栃木県</option>
              <option value="群馬県">群馬県</option>
              <option value="埼玉県">埼玉県</option>
              <option value="千葉県">千葉県</option>
              <option value="東京都">東京都</option>
              <option value="神奈川県">神奈川県</option>
              <option value="新潟県">新潟県</option>
              <option value="富山県">富山県</option>
              <option value="石川県">石川県</option>
              <option value="福井県">福井県</option>
              <option value="山梨県">山梨県</option>
              <option value="長野県">長野県</option>
              <option value="岐阜県">岐阜県</option>
              <option value="静岡県">静岡県</option>
              <option value="愛知県">愛知県</option>
              <option value="三重県">三重県</option>
              <option value="滋賀県">滋賀県</option>
              <option value="京都府">京都府</option>
              <option value="大阪府">大阪府</option>
              <option value="兵庫県">兵庫県</option>
              <option value="奈良県">奈良県</option>
              <option value="和歌山県">和歌山県</option>
              <option value="鳥取県">鳥取県</option>
              <option value="島根県">島根県</option>
              <option value="岡山県">岡山県</option>
              <option value="広島県">広島県</option>
              <option value="山口県">山口県</option>
              <option value="徳島県">徳島県</option>
              <option value="香川県">香川県</option>
              <option value="愛媛県">愛媛県</option>
              <option value="高知県">高知県</option>
              <option value="福岡県">福岡県</option>
              <option value="佐賀県">佐賀県</option>
              <option value="長崎県">長崎県</option>
              <option value="熊本県">熊本県</option>
              <option value="大分県">大分県</option>
              <option value="宮崎県">宮崎県</option>
              <option value="鹿児島県">鹿児島県</option>
              <option value="沖縄県">沖縄県</option>
            </select>
      
        </div>

        <div class="form-group mt-4">
      <label for="formGroupExampleInput">性別</label>
      <div class="custom-control custom-radio">
        <input type="radio" id="customRadio1" name="gender" class="custom-control-input" value="男性">
        <label class="custom-control-label" for="customRadio1">男性</label>
      </div>
      <div class="custom-control custom-radio mt-2">
        <input type="radio" id="customRadio2" name="gender" class="custom-control-input" value="女性">
        <label class="custom-control-label" for="customRadio2">女性</label>
      </div>
     

      
      
    </div>


        <div class="form-group mt-4">
          <label for="formGroupExampleInput">年齢</label>
          <select name="age" type="text" class="custom-select">
            <option value="error">選択してください</option>
            <option value="10代">10代</option>
            <option value="20代">20代</option>
            <option value="30代">30代</option>
            <option value="40代">40代</option>
            <option value="50代">50代</option>
            <option value="60代">60代</option>
            <option value="70代">70代</option>
            <option value="80代">80代</option>
        
          </select>
    
        </div>
        <button class="btn btn-primary btn-block mt-4" type="submit">絞り込む</button>


    
    </form>

    
   
  </div>
</div>
     
    
    </div>
    <div class="col-lg-1">
    
    </div>
    <div class="col-lg-8 pt-2">
      
    
    <form class="band-form">
　　<div class="input-group">
      <form action="{{action('SearchController@index')}}" method="GET" enctype="multipart/form-data">
        @csrf
        <input type="text" class="form-control" name="keyword" value="{{ $keyword }}" placeholder="キーワードで検索" aria-label="" aria-describedby="basic-addon1">
        <div class="input-group-append">
          <button class="btn btn-primary" type="submit">検索</button>
        </div>
      </form>
     
    </div>
    </form>
@if(!isset($profiles))
    <div class="d-flex flex-wrap list">
   
      @foreach($profiles as $profile)
      <div class="card mt-5">
        <a href="band/{{$profile->id}}">

        <img class="card-img-top" src="{{$profile->image}}" height=240 alt="Card image cap">
        <div class="card-body">
          <h4 class="card-title text-center">{{$profile->user->name}}</h4>
          <p class="card-text">
            年齢:{{$profile->age}}
          </p>
          <p class="card-text">
            性別:{{$profile->gender}}
          </p>
      
          <p class="card-text">
            {{\Illuminate\Support\Str::limit($profile->introduce, 20)}}
          </p>
        </a>

        @if ($profile->comment->count())
            <span class="badge badge-pill badge-primary">
                コメント {{ $profile->comment->count() }}件
            </span>
        @endif
        <favorite-component
        :profile="{{ json_encode($profile)}}"
        ></favorite-component>
      

        </div>
      </div>
      @endforeach

      
    </div>


@else
<div class="card mt-4">
  <div class="card-body">
  指定した条件に当てはまるオト仲間がみつかりませんでした。検索条件を変えて再度お試しください。
  </div>
</div>
@endif
      
    </div>

   
  
  </div>
</div>

@endsection