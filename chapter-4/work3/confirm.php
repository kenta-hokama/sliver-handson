<?php
// ここに処理を記載

  //セッションを開始
  session_start();

  //入力データ確認
  if (isset($_SESSION['input_data'])) {
    $data = $_SESSION['input_data'];
  }

  //セッション破棄
  session_destroy();

  if (!empty($_POST)) {

  //名前チェック
  if (empty($_POST['fullname'])) {
    $error_message['fullname'] = '名前を入力して下さい';
  }

  //電話番号チェック
  if (empty($_POST['tel'])) {
    $error_message['tel'] = '電話番号を入力して下さい';
  } elseif (!is_numeric($_POST['tel'])) {
    $error_message['tel'] = '数値を入れて下さい';
  }

  //メールアドレスチェック
  if (empty($_POST['email'])) {
    $error_message['email'] = 'メールアドレスを入力して下さい';
  } elseif (!preg_match('/^[a-z0-9._+^~-]+@[a-z0-9.-]+$/i', $_POST['email'])) {
    $error_message['email'] = '不正な形式のメールアドレスです。';
  }

  //お問合せ内容チェック
  if (empty($_POST['content'])) {
    $error_message['content'] = 'お問合せ内容を入力して下さい';
  }

  //エラー内容チェック -- エラーの場合はcontact.phpへリダイレクト
  if (!empty($error_message)) {
    $_SESSION['input_data'] = $_POST;
    $_SESSION['error_message'] = $error_message;
    header('Location:./contact.php');
    exit();
  }
}
?>
<!-- お問合せ内容確認画面 -->
<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="style.css" type="text/css">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <div class="container">
    <h1>お問合せ内容確認</h1>
  </div>
  <div class="box_con02 container">
    <form method="" action="">
      <table class="formTable">
        <tr>
          <th>お名前</th>
          <td></td>
        </tr>
        <tr>
          <th>電話番号（半角）</th>
          <td></td>
        </tr>
        <tr>
          <th>Mail（半角）</th>
          <td></td>
        </tr>
        <tr>
          <th>お問い合わせ内容<br /></th>
          <td></td>
        </tr>
      </table>

      <div class="container">
        <div class="box_check">
          <p class="btn">
            <span> <input></span>
          </p>
    </form>
    <form method="" action="">
      <div class="box_check">
        <p class="btn">
          <span>
            <input>
          </span>
        </p>
      </div>
    </form>
  </div>
  </div>
  </div>
</body>

</html>