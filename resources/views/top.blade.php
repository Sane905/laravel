@extends('layouts.app')

@section('content')
<div class="top">
    

    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="carousel-img d-block w-100" src="https://musicwebservice.s3.ap-northeast-1.amazonaws.com/top/wes-hicks-MEL-jJnm7RQ-unsplash.jpg"  alt="First slide">
      <div class="carousel-heading">
        <h2 class="carousel-sentence">日常では巡り合えないようなオト仲間を作ろう!</h2>
        <h2 class="carousel-sentence">キミと繋がれる音楽を持つオト仲間はすぐそこにいる</h2>
        <a class="d-flex justify-content-center" href="{{action('SearchController@index')}}"><button type="button" class="btn btn-outline-secondary btn-lg mt-3">オト仲間を探す</button></a>

      </div>
      
    </div>
    <div class="carousel-item">
      <img class="carousel-img d-block w-100" src="https://musicwebservice.s3.ap-northeast-1.amazonaws.com/top/hanny-naibaho-aWXVxy8BSzc-unsplash.jpg" alt="Second slide">
      <div class="carousel-heading">
        <h2 class="carousel-sentence">日常では巡り合えないようなオト仲間を作ろう!</h2>
        <h2 class="carousel-sentence">キミと繋がれる音楽を持つオト仲間はすぐそこにいる</h2>
        <a class="d-flex justify-content-center" href="{{action('SearchController@index')}}"><button type="button" class="btn btn-outline-secondary btn-lg mt-3">オト仲間を探す</button></a>

      </div>
    </div>
    <div class="carousel-item">
      <img class="carousel-img d-block w-100" src="https://musicwebservice.s3.ap-northeast-1.amazonaws.com/top/hans-vivek-By96LAr-34o-unsplash.jpg" alt="Third slide">
      <div class="carousel-heading">
        <h2 class="carousel-sentence">日常では巡り合えないようなオト仲間を作ろう!</h2>
        <h2 class="carousel-sentence">キミと繋がれる音楽を持つオト仲間はすぐそこにいる</h2>
        <a class="d-flex justify-content-center" href="{{action('SearchController@index')}}"><button type="button" class="btn btn-outline-secondary btn-lg mt-3">オト仲間を探す</button></a>
       </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
    <!-- Content here -->
   
   

    <div class="py-5">
        <div class="container d-flex justify-content-center">
        　　<a href="{{ route('register') }}" class="btn btn-primary btn-lg">まずは新規登録</a>

        </div>
    </div>

    <div class="top-introduction py-5">
        <div class="container">
            <h2 class="text-center">オトLABOの魅力</h2>
        
            <div class="media mt-5 row">
            <div class="media-body col-lg-6 col-sm-12">
                <h5 class="mt-0 text-center">音楽好きな人をジャンルを問わずに見つけられる</h5>
                <p>オトLABOではあなたが探したい音楽の趣味・志向に合う方を様々な条件でピンポイントに検索することが可能です。</p>
                <p class="mb-0">身近にいなかったあなたの音楽の趣味・志向を共有出来る仲間をオトLABOでは即座に探せます。</p>
            </div>
            <img class="d-flex align-self-center mr-3 col-lg-6 col-sm-12 rounded-lg" src="https://musicwebservice.s3.ap-northeast-1.amazonaws.com/top/markus-winkler-afW1hht0NSs-unsplash.jpg" alt="Generic placeholder image">

            </div>

            <div class="media mt-5 row">
            <img class="d-flex align-self-center mr-3 col-lg-6 col-sm-12 rounded-lg" src="https://musicwebservice.s3.ap-northeast-1.amazonaws.com/top/jo-szczepanska-5aiRb5f464A-unsplash.jpg" alt="Generic placeholder image">
            <div class="media-body col-lg-6 col-sm-12">
                <h5 class="mt-0 text-center">コメントや掲示板機能が充実</h5>
　　　　　　　　　<p>オトLABOでは検索するだけでなく気に入ったユーザーにコメントすることが可能です。</p>
                <p class="mb-0">さらに掲示板機能により登録している全ユーザー間で音楽の話題を自ら発信し、コミュニケーションを取ることが可能です。</p>
            </div>
            </div>

            <div class="media mt-5 row">
            <div class="media-body col-lg-6 col-sm-12">
                <h5 class="mt-0 text-center">個人間でチャットが可能</h5>
　　　　　
                <p>オトLABOではいいね機能が実装されておりユーザー間でお互いにいいねしているとプライベートチャットが可能になります。</ｐ>
                <p class="mb-0">あなたの音楽の趣味・志向に合う仲間とより密接なコミュニケーションを取ることが出来ます。</p>
            </div>
            <img class="d-flex align-self-center mr-3 col-lg-6 col-sm-12 rounded-lg" src="https://musicwebservice.s3.ap-northeast-1.amazonaws.com/top/joshua-ness--bEZ_OfWu3Y-unsplash.jpg" alt="Generic placeholder image">
            </div>
        
        </div>
    </div>

    <div class="py-5">
        <div class="container d-flex justify-content-center">
            
        　　<a href="{{ route('register') }}" class="btn btn-primary btn-lg">まずは新規登録</a>

        </div>
    </div>

    

    <div class="top-question py-5">
        <div class="container">
        <h2 class="text-center">よくある質問</h2>

        <div id="accordion" role="tablist">
            <div class="card mt-5">
                <div class="card-header" role="tab" id="headingOne">
                <h5 class="mb-0">
                    <a data-toggle="collapse" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    Q:お金かかったりしませんか？
                    </a>
                </h5>
                </div>

                <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne">
                <div class="card-body">
                音楽仲間を増やすためのソーシャルネットワークサービスなので金銭がかかることはありません。
                </div>
                </div>
            </div>
    
            <div class="card mt-5">
                <div class="card-header" role="tab" id="headingTwo">
                <h5 class="mb-0">
                    <a class="collapsed" data-toggle="collapse" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    Q:個人情報が漏れるかどうか心配です...
                    </a>
                </h5>
                </div>
                <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo">
                    <div class="card-body">
                        プロフィールは音楽に関する情報を登録していただくだけなのでユーザーの情報を開示することはありません。
                    </div>
                </div>
            </div>

            <div class="card mt-5">
                <div class="card-header" role="tab" id="headingThree">
                <h5 class="mb-0">
                    <a class="collapsed" data-toggle="collapse" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    Q:マイナーな音楽でも仲間が見つかりますかね？
                    </a>
                </h5>
                </div>
                <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree">
                    <div class="card-body">
                        年齢、音楽ジャンル、性別など様々な条件で仲間を探すことが出来るので可能です。
　　                </div>
                </div>
            </div>
        </div>

        
        </div>

    </div>

  

    <div class="bg-primary text-white text-center py-2">
        <div class="container">
            <p>
            Copyright (C) 2020 オトLABO.Ltd All Rights Reserved.
            </p>
        </div>

    </div>


</div>


@endsection
