<?php
/*
    # アルゴリズム課題の注意点
    アルゴリズムではこれまでのように調べる力ではなく物事を論理的に考える力が必要です。
    検索して答えを探して解いても考える力には繋がりません。
    まずは検索に頼らずに自分で処理手順を考えてみましょう。


    # 課題
    以下は3人でじゃんけんをした際の勝敗を判定するプログラムです。
    関数「janken」に3人が出した手を渡すと勝敗を返すプログラムを記載してください。
*/

function janken($a, $b, $c) {
  // ここに処理を記載

$a = 'グー';
$b = 'チョキ';
$c = 'パー';

if ($a == 'グー' && $b == 'チョキ' && $c == 'パー' ) {
    echo "あいこです。";
} else if ($a == 'グー' && $b == 'チョキ' && $c == 'チョキ') {
    echo "aさんが勝ちです。";
} else if ($a == 'グー' && $b == 'パー' && $c == 'パー') {
    echo "aさんの負けです。";
} else if ($a == 'チョキ' && $b == 'チョキ' && $c == 'チョキ') {
    echo "あいこです。";
} else if ($a == 'チョキ' && $b == 'パー' && $c == 'パー') {
    echo "aさんが勝ちです。";
} else if ($a == 'チョキ' && $b == 'グー' && $c == 'グー') {
    echo "aさんの負けです。";
} else if ($a == 'パー' && $b == 'パー' && $c == 'パー') {
    echo "あいこです。";
} else if ($a == 'パー' && $b == 'グー' && $c == 'グー') {
    echo "aさんが勝ちです。";
} else if ($a == 'パー' && $b == 'チョキ' && $c == 'チョキ') {
    echo "aさんの負けです。"; 
}
}

?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <title>じゃんけんプログラム</title>
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
        <h1>じゃんけんぽん！</h1>
        <!-- ここから表示する処理を記載 -->
    <?php
    $a = 'グー';
    $b = 'チョキ';
    $c = 'パー';

    janken($a,$b,$c);
    
    ?>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>