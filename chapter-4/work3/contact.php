<?php
// ここに処理を記載
?>
<!-- お問合せ入力画面 -->
<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="style.css" type="text/css">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>お問合せ入力画面</title>
</head>

<body>
  <div class="container">
    <h1>お問合せ入力画面</h1>
  </div>
  <div class="box_con02 container">
    <form method="" action="">
      <table class="formTable">
        <th>お名前<span>必須</span></th>
        <td><input size="20" type="text" class="wide" />
        </td>
        </tr>
        <tr>
          <th>電話番号（半角）<span>必須</span></th>
          <td><input size="30" type="text" class="wide" />
          </td>
        </tr>
        <tr>
          <th>Mail（半角）<span>必須</span></th>
          <td><input size="30" type="text" class="wide" />
          </td>
        </tr>
        <tr>
          <th>お問い合わせ内容<span>必須</span><br /></th>
          <td><textarea cols="50" rows="5"></textarea>
          </td>
        </tr>
      </table>
      <div class="box_check">
        <p class="btn">
          <span><input /></span>
        </p>
      </div>
    </form>
  </div>
</body>

</html>