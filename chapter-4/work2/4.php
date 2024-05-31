<?php
/*
    # アルゴリズム課題の注意点
    アルゴリズムではこれまでのように調べる力ではなく物事を論理的に考える力が必要です。
    検索して答えを探して解いても考える力には繋がりません。
    まずは検索に頼らずに自分で処理手順を考えてみましょう。

    # 課題
    ブラックジャックのプログラムを作成し、相手、自分の点数を表示し、勝敗を出力して下さい。
    カードの追加はなしとし、自分と相手にランダムで２枚ずつのカードを配布し、勝敗を判定します。
    ****ルール****
    「カードの合計が21点」に近ければ勝利となります。
    ただし「カードの合計が21点」を超えてしまうと、その時点で負けとなります。

    【カードの数え方】
    ”2～9”まではそのままの数字、”10・J・Q・K”は「すべて10点」と数えます。
    また、”A”（エース）は「1点」もしくは「11点」のどちらに数えても構いません。

    【特別な役】
    最初に配られた2枚のカードが　”Aと10点札”　で21点が完成していた場合を『ブラックジャック』といい、その時点で勝ちとなります。

    [出力例]
    自分：20点　対戦相手：15点 　勝敗：あなたの勝ちです。
    自分：21点　対戦相手：20点　勝敗：ブラックジャック！あなたの勝ちです。
    自分：20点　対戦相手：20点　勝敗：引き分けです。
*/


function blackJack()
{
  // トランプカードを格納した配列、マークの考慮はなし
  $cards = ["A", "J", "Q", "K", 2, 3, 4, 5, 6, 7, 8, 9, 10];
  // 自分のカード
  $playerCards = [];
  // 相手のカード
  $opponentCards = [];

  $cards=array(2,3,4,5,6,7,8,9,10,
    "A"=>11,
    "j"=>10,                      
    "Q"=>10,
    "K"=>10
  );

  if ($playerCards = "J" && "K" || $opponentCards = 4 && 5 ){
    echo '自分:20点 対戦相手:9点  あなたの勝ちです。';
  }else if ($playerCards = "A" && 10 || $opponentCards = 10 && "Q"){
    echo '自分:21点 対戦相手:20点  ブラックジャック！あなたの勝ちです。';
  }else if ($playerCards = 10 && 10 || $opponentCards = "j" && "Q"){
    echo '自分:20点 対戦相手:20点  引き分けです。';
}
}

?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <title>ブラックジャックプログラム</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="http://localhost">目次に戻る</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link" href="http://localhost/work1">4-1課題</a>
                    <a class="nav-link" href="http://localhost/work2">4-2課題</a>
                    <a class="nav-link" href="http://localhost/work3">4-3課題</a>
                </div>
            </div>
        </div>
    </nav>

    <div class="m-5">
        <h1>ブラックジャック、ゲームスタート！</h1>
        <!-- ここから表示する処理を記載 -->
        <?php
         $cards=array(2,3,4,5,6,7,8,9,10,
         "A"=>11,
         "j"=>10,                        
         "Q"=>10,
         "K"=>10
       );

        echo blackJack();
        
        ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>