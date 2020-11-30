

## オトLABO

__音楽好きで同じ音楽の趣味を持つ人が繋がれるマッチングアプリです。__

__URL::__ <https://otolabo.net/>

## アプリ概要

こちらのアプリのコンセプトは、以下の２点です。

1. 音楽のジャンルに関わらず同じ音楽の趣味を持つ仲間を見つける。
2. 仲間と音楽の話のやり取りができる。

オトLABOには以下のような特徴のあるアプリです。

* 会員登録とは別にユーザーの音楽に関する情報をのせたアカウントを作成して「音楽のジャンル、所在地、年齢、性別」といった幅広い条件で他ユーザーに検索してもらうことができる。
* アカウントに対しコメントをつけてもらうことでユーザーはマイページでコメントを確認して同じ音楽の趣味を持つ仲間を認知できる
* いいね機能がありお互いにいいねをするとマイページ上の「相互いいね」欄にチャットボタンが表示し、密なやり取りが可能になる。
* 掲示板機能によりいいねに関わらず登録している全ユーザーとも匿名でやりとりできる

## 開発した背景

私は音楽が好きで特に洋楽が好きなのですが自分の周りの友人・知人は邦楽を聞いておりどうしても自分と音楽の趣味が合う仲間が見つかりませんでした。

しかし、中学の同窓会で余り関わりのなかったクラスメートと話すと実は自分と同じバンドが好きだったことが判明し、周りの音楽の趣味に合わせ
あえて自分が本当に好きな音楽について話さない人が多いことに気付きました。

こういった潜在的な音楽好きがより同じ音楽の趣向をもつ仲間と繋がって欲しいという思いから開発にいたりました。

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## 使用技術

* __フロントエンド__
  - __Vue.js 2.6.12__
  - __Jquery 3.5.1__
  - __HTML/Css /Sass/Bootstrap 4.5.2__

* __バックエンド__
  - __PHP 7.3.23__
  - __Laravel 6.18.36__
  - __PHPUnit 8.5.8__
  - __Pusher__

* __インフラ__
  - __AWS__(EC2, ALB, ACM, S3, RDS, Route53, VPC, IAM )
  - __mysql 5.7.31__
  - __Apache 2.4.46__

* __その他使用ツール__
  - Visual Studio Code
  - Photoshop



## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## 機能一覧

* __ユーザー登録関連__
  - 新規登録、プロフィール編集機能
  - アカウント登録　アカウント編集機能
  - ログイン、ログアウト機能
  - 画像登録の際のリアルタイム表示(Vue.js)

* __Pusher連携__
  - 相互フォロー同士によるチャット機能
  - 登録したユーザーによる掲示板機能

* __ユーザー検索機能__
  - キーワードによる検索
  - アカウント登録で入力した「年齢、居住地、音楽ジャンル」などの複数条件検索

* __いいね機能__(Vue.js / ajax)

* __コメント機能__
  - マイページに自分がコメントした内容とユーザー、自分にコメントしたユーザーと内容も表示する。

* __相互いいねユーザー、ログインユーザーがいいねしたユーザー、いいねされたユーザーの表示__
  - リレーションを使用してマイページに表示させている。

* __画像アップロード機能__ (AWS S3バケット)

* __PHPUnitテスト__(全て終わっていない)

* __レスポンシブWebデザイン__
  
## ER図


  <table class="table">
  <thead>
    <tr>
      <th>テーブル名</th>
      <th>説明</th>
    </tr>
  </thead>
  <tbody>
    <tr class="table-active">
      <td>users</td>
      <td>profiles</td>
      <td>comments</td>
      <td>messages</td>
      <td>chats</td>
      <td>profile_user</td>
    </tr>
    <tr>
      <td>登録ユーザー情報</td>
      <td>アカウント情報</td>
      <td>ユーザーアカウントへの、コメントの情報</td>
      <td>掲示板でのユーザーのメッセージ情報</td>
      <td>受信者、送信者によるメッセージ情報</td>
      <td>profileとuserの中間テーブル</td>
    </tr>
  </tbody>
</table>