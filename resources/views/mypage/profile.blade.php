@extends('layouts.page')
@section('content')
<div class="container profile-edit">
  <div class="row justify-content-center">
    <div class="col-lg-8">
      <div class="card">
        <div class="card-header text-center">プロフィール登録内容の変更</div>
        <div class="card-body">

        <form class="mt-4" action="{{action('MypageController@ProfileUpdate')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <label for="formGroupExampleInput">好きな音楽ジャンルを選んでください（複数選択可）</label>
    <div class="form-group d-flex justify-content-around">
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="checkbox" name="music[]" id="music" value="J-POP">
        <label class="form-check-label profile-edit-label" for="inlineCheckbox1">J-POP</label>
      </div>
      
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="checkbox" name="music[]" id="music" value="邦楽ヒップホップ/R&B/レゲエ">
        <label class="form-check-label profile-edit-label" for="inlineCheckbox2">邦楽ヒップホップ/R&B/レゲエ</label>
      </div>

      <div class="form-check form-check-inline">
        <input class="form-check-input" type="checkbox" name="music[]" id="music" value="邦楽ロック">
        <label class="form-check-label profile-edit-label" for="inlineCheckbox1">邦楽ロック</label>
      </div>
      
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="checkbox" name="music[]" id="music" value="邦楽ダンス/エレクトロニカ">
        <label class="form-check-label profile-edit-label" for="inlineCheckbox2">邦楽ダンス/エレクトロニカ</label>
      </div>

      <div class="form-check form-check-inline">
        <input class="form-check-input" type="checkbox" name="music[]" id="music" value="K-POP/ワールドミュージック">
        <label class="form-check-label profile-edit-label" for="inlineCheckbox1">K-POP/ワールドミュージック</label>
      </div>
      
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="checkbox" name="music[]" id="music" value="洋楽ポップス">
        <label class="form-check-label profile-edit-label" for="inlineCheckbox2">洋楽ポップス</label>
      </div>
    </div>

    <div class="form-group d-flex justify-content-around">
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="checkbox" name="music[]" id="music" value="洋楽ヒップホップ/R&B/レゲエ">
        <label class="form-check-label profile-edit-label" for="inlineCheckbox1">洋楽ヒップホップ/R&B/レゲエ</label>
      </div>
      
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="checkbox" name="music[]" id="music" value="洋楽ロック">
        <label class="form-check-label profile-edit-label" for="inlineCheckbox2">洋楽ロック</label>
      </div>

      <div class="form-check form-check-inline">
        <input class="form-check-input" type="checkbox" name="music[]" id="music" value="洋楽ダンス/エレクトロニカ">
        <label class="form-check-label profile-edit-label" for="inlineCheckbox1">洋楽ダンス/エレクトロニカ</label>
      </div>
      
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="checkbox" name="music[]" id="music" value="歌謡曲/演歌">
        <label class="form-check-label profile-edit-label" for="inlineCheckbox2">歌謡曲/演歌</label>
      </div>

      <div class="form-check form-check-inline">
        <input class="form-check-input" type="checkbox" name="music[]" id="music" value="ジャズ">
        <label class="form-check-label profile-edit-label" for="inlineCheckbox1">ジャズ</label>
      </div>
      
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="checkbox" name="music[]" id="music" value="クラシック">
        <label class="form-check-label profile-edit-label" for="inlineCheckbox2">クラシック</label>
      </div>

     
    </div>
    @error('music')
      <span class="text-danger">{{ $message }}</span>
      @enderror
   
    <div class="form-group mt-4">
      <label for="formGroupExampleInput">好きなアーティスト</label>
      <input name="artist" type="text" class="form-control" id="formGroupExampleInput" placeholder="例　テイラースイフト RadWimps etc" value="{{$profiles->artist}}">
      @error('artist')
  <span class="text-danger">{{ $message }}</span>
  @enderror
      
    
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
      @error('gender')
      <span class="text-danger">{{ $message }}</span>
      @enderror

      
      
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
    @error('age')
  <span class="text-danger">{{ $message }}</span>
  @enderror
   
  </div>

  

   
    

    <div class="form-group mt-4">
      <label for="formGroupExampleInput">あなたについて自由に書いてください。</label>
      <textarea name="introduce" type="text" class="form-control" id="formGroupExampleInput" placeholder="140字以内で書いてください">{{$profiles->introduce}}
      </textarea>
     @error('introduce')
  <span class="text-danger">{{ $message }}</span>
  @enderror
      
    </div>

    
   <div class="form-group mt-4">
      <label for="formGroupExampleInput">プロフィール画像をのせてください。</label>
      <image-component></image-component>
      @error('image')
      <span class="text-danger">{{ $message }}</span>
      @enderror
    </div>
    <div class="form-group mt-4">
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
    @error('place')
  <span class="text-danger">{{ $message }}</span>
  @enderror
 
    </div>
    
     
    

      <div class="pt-6 text-center mr-3">
        <button type="submit" class="btn btn-primary btn-lg mt-6 w-100">上記の内容で変更する</button>
      </div>

  


   

</form>

        </div>
      </div>
    </div>
  </div>
</div>
@endsection