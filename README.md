

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



## AWS構成図
<mxfile modified="2020-11-30T10:10:30.116Z" host="app.diagrams.net" agent="5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/86.0.4240.198 Safari/537.36" etag="UHcy71qumyaTsCQPkcV7" version="13.10.4" type="github">
  <diagram id="Ht1M8jgEwFfnCIfOTk4-" name="Page-1">
    <mxGraphModel dx="870" dy="595" grid="1" gridSize="10" guides="1" tooltips="1" connect="1" arrows="1" fold="1" page="1" pageScale="1" pageWidth="1169" pageHeight="827" math="0" shadow="0">
      <root>
        <mxCell id="0" />
        <mxCell id="1" parent="0" />
        <mxCell id="UEzPUAAOIrF-is8g5C7q-107" value="" style="rounded=0;whiteSpace=wrap;html=1;labelBackgroundColor=none;fillColor=none;dashed=1;" parent="1" vertex="1">
          <mxGeometry x="340" y="290" width="480" height="430" as="geometry" />
        </mxCell>
        <mxCell id="UEzPUAAOIrF-is8g5C7q-74" value="AWS Cloud" style="points=[[0,0],[0.25,0],[0.5,0],[0.75,0],[1,0],[1,0.25],[1,0.5],[1,0.75],[1,1],[0.75,1],[0.5,1],[0.25,1],[0,1],[0,0.75],[0,0.5],[0,0.25]];outlineConnect=0;gradientColor=none;html=1;whiteSpace=wrap;fontSize=12;fontStyle=0;shape=mxgraph.aws4.group;grIcon=mxgraph.aws4.group_aws_cloud_alt;strokeColor=#232F3E;fillColor=none;verticalAlign=top;align=left;spacingLeft=30;fontColor=#232F3E;dashed=0;labelBackgroundColor=#ffffff;" parent="1" vertex="1">
          <mxGeometry x="50" y="80" width="780" height="650" as="geometry" />
        </mxCell>
        <mxCell id="UEzPUAAOIrF-is8g5C7q-75" value="AWS Cloud" style="points=[[0,0],[0.25,0],[0.5,0],[0.75,0],[1,0],[1,0.25],[1,0.5],[1,0.75],[1,1],[0.75,1],[0.5,1],[0.25,1],[0,1],[0,0.75],[0,0.5],[0,0.25]];outlineConnect=0;gradientColor=none;html=1;whiteSpace=wrap;fontSize=12;fontStyle=0;shape=mxgraph.aws4.group;grIcon=mxgraph.aws4.group_aws_cloud_alt;strokeColor=#232F3E;fillColor=none;verticalAlign=top;align=left;spacingLeft=30;fontColor=#232F3E;dashed=0;labelBackgroundColor=#ffffff;" parent="1" vertex="1">
          <mxGeometry x="850" y="80" width="270" height="650" as="geometry" />
        </mxCell>
        <mxCell id="UEzPUAAOIrF-is8g5C7q-88" value="" style="edgeStyle=orthogonalEdgeStyle;rounded=0;orthogonalLoop=1;jettySize=auto;html=1;endArrow=open;endFill=0;strokeWidth=2;" parent="1" source="UEzPUAAOIrF-is8g5C7q-76" target="UEzPUAAOIrF-is8g5C7q-77" edge="1">
          <mxGeometry relative="1" as="geometry" />
        </mxCell>
        <mxCell id="UEzPUAAOIrF-is8g5C7q-89" value="" style="edgeStyle=orthogonalEdgeStyle;rounded=0;orthogonalLoop=1;jettySize=auto;html=1;endArrow=open;endFill=0;strokeWidth=2;" parent="1" source="UEzPUAAOIrF-is8g5C7q-77" target="UEzPUAAOIrF-is8g5C7q-79" edge="1">
          <mxGeometry relative="1" as="geometry">
            <Array as="points">
              <mxPoint x="248" y="350" />
            </Array>
          </mxGeometry>
        </mxCell>
        <mxCell id="UEzPUAAOIrF-is8g5C7q-106" style="edgeStyle=orthogonalEdgeStyle;rounded=0;orthogonalLoop=1;jettySize=auto;html=1;endArrow=open;endFill=0;strokeWidth=2;" parent="1" source="UEzPUAAOIrF-is8g5C7q-77" target="UEzPUAAOIrF-is8g5C7q-78" edge="1">
          <mxGeometry relative="1" as="geometry" />
        </mxCell>
        <mxCell id="UEzPUAAOIrF-is8g5C7q-104" style="edgeStyle=orthogonalEdgeStyle;rounded=0;orthogonalLoop=1;jettySize=auto;html=1;endArrow=open;endFill=0;strokeWidth=2;" parent="1" source="UEzPUAAOIrF-is8g5C7q-78" target="UEzPUAAOIrF-is8g5C7q-84" edge="1">
          <mxGeometry relative="1" as="geometry" />
        </mxCell>
        <mxCell id="UEzPUAAOIrF-is8g5C7q-90" value="" style="edgeStyle=orthogonalEdgeStyle;rounded=0;orthogonalLoop=1;jettySize=auto;html=1;endArrow=open;endFill=0;strokeWidth=2;" parent="1" source="UEzPUAAOIrF-is8g5C7q-79" target="UEzPUAAOIrF-is8g5C7q-80" edge="1">
          <mxGeometry relative="1" as="geometry" />
        </mxCell>
        <mxCell id="UEzPUAAOIrF-is8g5C7q-91" value="" style="edgeStyle=orthogonalEdgeStyle;rounded=0;orthogonalLoop=1;jettySize=auto;html=1;endArrow=open;endFill=0;strokeWidth=2;" parent="1" source="UEzPUAAOIrF-is8g5C7q-80" target="UEzPUAAOIrF-is8g5C7q-81" edge="1">
          <mxGeometry relative="1" as="geometry" />
        </mxCell>
        <mxCell id="UEzPUAAOIrF-is8g5C7q-92" value="" style="edgeStyle=orthogonalEdgeStyle;rounded=0;orthogonalLoop=1;jettySize=auto;html=1;endArrow=open;endFill=0;strokeWidth=2;" parent="1" source="UEzPUAAOIrF-is8g5C7q-81" target="UEzPUAAOIrF-is8g5C7q-82" edge="1">
          <mxGeometry relative="1" as="geometry" />
        </mxCell>
        <mxCell id="UEzPUAAOIrF-is8g5C7q-93" style="edgeStyle=orthogonalEdgeStyle;rounded=0;orthogonalLoop=1;jettySize=auto;html=1;endArrow=open;endFill=0;strokeWidth=2;" parent="1" source="UEzPUAAOIrF-is8g5C7q-82" target="UEzPUAAOIrF-is8g5C7q-85" edge="1">
          <mxGeometry relative="1" as="geometry">
            <Array as="points">
              <mxPoint x="762" y="480" />
            </Array>
          </mxGeometry>
        </mxCell>
        <mxCell id="UEzPUAAOIrF-is8g5C7q-105" value="Monitor template" style="edgeStyle=orthogonalEdgeStyle;rounded=0;orthogonalLoop=1;jettySize=auto;html=1;endArrow=open;endFill=0;strokeWidth=2;" parent="1" source="UEzPUAAOIrF-is8g5C7q-83" target="UEzPUAAOIrF-is8g5C7q-80" edge="1">
          <mxGeometry x="0.1208" y="-10" relative="1" as="geometry">
            <Array as="points">
              <mxPoint x="919" y="270" />
              <mxPoint x="519" y="270" />
            </Array>
            <mxPoint as="offset" />
          </mxGeometry>
        </mxCell>
        <mxCell id="UEzPUAAOIrF-is8g5C7q-101" value="" style="edgeStyle=orthogonalEdgeStyle;rounded=0;orthogonalLoop=1;jettySize=auto;html=1;endArrow=open;endFill=0;strokeWidth=2;" parent="1" source="UEzPUAAOIrF-is8g5C7q-84" target="UEzPUAAOIrF-is8g5C7q-83" edge="1">
          <mxGeometry relative="1" as="geometry" />
        </mxCell>
        <mxCell id="UEzPUAAOIrF-is8g5C7q-96" style="edgeStyle=orthogonalEdgeStyle;rounded=0;orthogonalLoop=1;jettySize=auto;html=1;endArrow=open;endFill=0;strokeWidth=2;startArrow=open;startFill=0;" parent="1" source="UEzPUAAOIrF-is8g5C7q-85" target="UEzPUAAOIrF-is8g5C7q-86" edge="1">
          <mxGeometry relative="1" as="geometry">
            <Array as="points">
              <mxPoint x="638" y="560" />
              <mxPoint x="528" y="560" />
            </Array>
          </mxGeometry>
        </mxCell>
        <mxCell id="UEzPUAAOIrF-is8g5C7q-97" style="edgeStyle=orthogonalEdgeStyle;rounded=0;orthogonalLoop=1;jettySize=auto;html=1;endArrow=open;endFill=0;strokeWidth=2;startArrow=open;startFill=0;" parent="1" source="UEzPUAAOIrF-is8g5C7q-85" target="UEzPUAAOIrF-is8g5C7q-87" edge="1">
          <mxGeometry relative="1" as="geometry">
            <Array as="points">
              <mxPoint x="684" y="560" />
              <mxPoint x="859" y="560" />
            </Array>
          </mxGeometry>
        </mxCell>
        <mxCell id="UEzPUAAOIrF-is8g5C7q-100" style="edgeStyle=orthogonalEdgeStyle;rounded=0;orthogonalLoop=1;jettySize=auto;html=1;endArrow=open;endFill=0;strokeWidth=2;" parent="1" source="UEzPUAAOIrF-is8g5C7q-86" target="UEzPUAAOIrF-is8g5C7q-98" edge="1">
          <mxGeometry relative="1" as="geometry" />
        </mxCell>
        <mxCell id="UEzPUAAOIrF-is8g5C7q-76" value="Object" style="outlineConnect=0;fontColor=#232F3E;gradientColor=none;fillColor=#277116;strokeColor=none;dashed=0;verticalLabelPosition=bottom;verticalAlign=top;align=center;html=1;fontSize=12;fontStyle=0;aspect=fixed;pointerEvents=1;shape=mxgraph.aws4.object;labelBackgroundColor=#ffffff;" parent="1" vertex="1">
          <mxGeometry x="90" y="140" width="78" height="78" as="geometry" />
        </mxCell>
        <mxCell id="UEzPUAAOIrF-is8g5C7q-77" value="Bucket" style="outlineConnect=0;fontColor=#232F3E;gradientColor=none;fillColor=#277116;strokeColor=none;dashed=0;verticalLabelPosition=bottom;verticalAlign=top;align=center;html=1;fontSize=12;fontStyle=0;aspect=fixed;pointerEvents=1;shape=mxgraph.aws4.bucket_with_objects;labelBackgroundColor=#ffffff;" parent="1" vertex="1">
          <mxGeometry x="210" y="140" width="75" height="78" as="geometry" />
        </mxCell>
        <mxCell id="UEzPUAAOIrF-is8g5C7q-78" value="Bucket" style="outlineConnect=0;fontColor=#232F3E;gradientColor=none;fillColor=#277116;strokeColor=none;dashed=0;verticalLabelPosition=bottom;verticalAlign=top;align=center;html=1;fontSize=12;fontStyle=0;aspect=fixed;pointerEvents=1;shape=mxgraph.aws4.bucket_with_objects;labelBackgroundColor=#ffffff;" parent="1" vertex="1">
          <mxGeometry x="1020" y="140" width="75" height="78" as="geometry" />
        </mxCell>
        <mxCell id="UEzPUAAOIrF-is8g5C7q-79" value="AWS&lt;br&gt;CloudTrail" style="outlineConnect=0;fontColor=#232F3E;gradientColor=#F34482;gradientDirection=north;fillColor=#BC1356;strokeColor=#ffffff;dashed=0;verticalLabelPosition=bottom;verticalAlign=top;align=center;html=1;fontSize=12;fontStyle=0;aspect=fixed;shape=mxgraph.aws4.resourceIcon;resIcon=mxgraph.aws4.cloudtrail;labelBackgroundColor=#ffffff;" parent="1" vertex="1">
          <mxGeometry x="370" y="310" width="78" height="78" as="geometry" />
        </mxCell>
        <mxCell id="UEzPUAAOIrF-is8g5C7q-80" value="Amazon&lt;br&gt;CloudWatch" style="outlineConnect=0;fontColor=#232F3E;gradientColor=#F34482;gradientDirection=north;fillColor=#BC1356;strokeColor=#ffffff;dashed=0;verticalLabelPosition=bottom;verticalAlign=top;align=center;html=1;fontSize=12;fontStyle=0;aspect=fixed;shape=mxgraph.aws4.resourceIcon;resIcon=mxgraph.aws4.cloudwatch;labelBackgroundColor=#ffffff;" parent="1" vertex="1">
          <mxGeometry x="480" y="310" width="78" height="78" as="geometry" />
        </mxCell>
        <mxCell id="UEzPUAAOIrF-is8g5C7q-81" value="Amazon Simple&lt;br&gt;Notification Service&lt;br&gt;" style="outlineConnect=0;fontColor=#232F3E;gradientColor=#F34482;gradientDirection=north;fillColor=#BC1356;strokeColor=#ffffff;dashed=0;verticalLabelPosition=bottom;verticalAlign=top;align=center;html=1;fontSize=12;fontStyle=0;aspect=fixed;shape=mxgraph.aws4.resourceIcon;resIcon=mxgraph.aws4.sns;labelBackgroundColor=#ffffff;" parent="1" vertex="1">
          <mxGeometry x="600" y="310" width="78" height="78" as="geometry" />
        </mxCell>
        <mxCell id="UEzPUAAOIrF-is8g5C7q-82" value="Amazon Simple&lt;br&gt;Queue Service&lt;br&gt;" style="outlineConnect=0;fontColor=#232F3E;gradientColor=#F34482;gradientDirection=north;fillColor=#BC1356;strokeColor=#ffffff;dashed=0;verticalLabelPosition=bottom;verticalAlign=top;align=center;html=1;fontSize=12;fontStyle=0;aspect=fixed;shape=mxgraph.aws4.resourceIcon;resIcon=mxgraph.aws4.sqs;labelBackgroundColor=#ffffff;" parent="1" vertex="1">
          <mxGeometry x="723" y="310" width="78" height="78" as="geometry" />
        </mxCell>
        <mxCell id="UEzPUAAOIrF-is8g5C7q-83" value="Amazon&lt;br&gt;CloudWatch&lt;br&gt;" style="outlineConnect=0;fontColor=#232F3E;gradientColor=#F34482;gradientDirection=north;fillColor=#BC1356;strokeColor=#ffffff;dashed=0;verticalLabelPosition=bottom;verticalAlign=top;align=center;html=1;fontSize=12;fontStyle=0;aspect=fixed;shape=mxgraph.aws4.resourceIcon;resIcon=mxgraph.aws4.cloudwatch;labelBackgroundColor=#ffffff;" parent="1" vertex="1">
          <mxGeometry x="880" y="310" width="78" height="78" as="geometry" />
        </mxCell>
        <mxCell id="UEzPUAAOIrF-is8g5C7q-84" value="AWS&lt;br&gt;CloudTrail" style="outlineConnect=0;fontColor=#232F3E;gradientColor=#F34482;gradientDirection=north;fillColor=#BC1356;strokeColor=#ffffff;dashed=0;verticalLabelPosition=bottom;verticalAlign=top;align=center;html=1;fontSize=12;fontStyle=0;aspect=fixed;shape=mxgraph.aws4.resourceIcon;resIcon=mxgraph.aws4.cloudtrail;labelBackgroundColor=#ffffff;" parent="1" vertex="1">
          <mxGeometry x="1018.5" y="310" width="78" height="78" as="geometry" />
        </mxCell>
        <mxCell id="UEzPUAAOIrF-is8g5C7q-85" value="AWS Lambda" style="outlineConnect=0;fontColor=#232F3E;gradientColor=#F78E04;gradientDirection=north;fillColor=#D05C17;strokeColor=#ffffff;dashed=0;verticalLabelPosition=bottom;verticalAlign=top;align=center;html=1;fontSize=12;fontStyle=0;aspect=fixed;shape=mxgraph.aws4.resourceIcon;resIcon=mxgraph.aws4.lambda;labelBackgroundColor=#ffffff;spacingTop=6;" parent="1" vertex="1">
          <mxGeometry x="600" y="450" width="78" height="78" as="geometry" />
        </mxCell>
        <mxCell id="UEzPUAAOIrF-is8g5C7q-86" value="Amazon Kinesis&lt;br&gt;Data&amp;nbsp;Firehose" style="outlineConnect=0;fontColor=#232F3E;gradientColor=#945DF2;gradientDirection=north;fillColor=#5A30B5;strokeColor=#ffffff;dashed=0;verticalLabelPosition=bottom;verticalAlign=top;align=center;html=1;fontSize=12;fontStyle=0;aspect=fixed;shape=mxgraph.aws4.resourceIcon;resIcon=mxgraph.aws4.kinesis_data_firehose;labelBackgroundColor=#ffffff;" parent="1" vertex="1">
          <mxGeometry x="489" y="590" width="78" height="78" as="geometry" />
        </mxCell>
        <mxCell id="UEzPUAAOIrF-is8g5C7q-87" value="Amazon&lt;br&gt;DynamoDB" style="outlineConnect=0;fontColor=#232F3E;gradientColor=#4D72F3;gradientDirection=north;fillColor=#3334B9;strokeColor=#ffffff;dashed=0;verticalLabelPosition=bottom;verticalAlign=top;align=center;html=1;fontSize=12;fontStyle=0;aspect=fixed;shape=mxgraph.aws4.resourceIcon;resIcon=mxgraph.aws4.dynamodb;labelBackgroundColor=#ffffff;" parent="1" vertex="1">
          <mxGeometry x="710" y="590" width="78" height="78" as="geometry" />
        </mxCell>
        <mxCell id="UEzPUAAOIrF-is8g5C7q-98" value="Bucket" style="outlineConnect=0;fontColor=#232F3E;gradientColor=none;fillColor=#277116;strokeColor=none;dashed=0;verticalLabelPosition=bottom;verticalAlign=top;align=center;html=1;fontSize=12;fontStyle=0;aspect=fixed;pointerEvents=1;shape=mxgraph.aws4.bucket;labelBackgroundColor=#ffffff;" parent="1" vertex="1">
          <mxGeometry x="120" y="590" width="75" height="78" as="geometry" />
        </mxCell>
        <mxCell id="UEzPUAAOIrF-is8g5C7q-108" value="" style="rounded=0;whiteSpace=wrap;html=1;labelBackgroundColor=none;fillColor=none;dashed=1;" parent="1" vertex="1">
          <mxGeometry x="860" y="290" width="250" height="430" as="geometry" />
        </mxCell>
      </root>
    </mxGraphModel>
  </diagram>
</mxfile>

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
      <td>登録ユーザー情報</td>
    </tr>
    <tr>
      <td>profiles</td>
      <td>アカウント情報</td>
    </tr>
    <tr>
      <td>comments</td>
      <td>ユーザーアカウントへの、コメントの情報</td>
    </tr>
    <tr>
      <td>messages</td>
      <td>掲示板でのユーザーのメッセージ情報</td>
    </tr>
    <tr>
      <td>chats</td>
      <td>受信者、送信者によるメッセージ情報</td>
    </tr>
    <tr>
      <td>profile_user</td>
       <td>profileとuserの中間テーブル</td>
    </tr>
  </tbody>
</table>