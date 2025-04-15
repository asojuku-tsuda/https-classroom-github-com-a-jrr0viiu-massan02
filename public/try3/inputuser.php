<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Login Page</title>
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body class="cyberpunk-bg">
    <div class="login-box">
      <h2>
<?php
// 必須チェック
if (!isset($_GET['username']) || $_GET['username'] === "") {
  die("名前を入力してください。");
}
if (!isset($_GET['useraddress']) || $_GET['useraddress'] === "") {
  die("住所を入力してください。");
}
if (!isset($_GET['usermail']) || $_GET['usermail'] === "") {
  die("メールアドレスを入力してください。");
}

$username    = $_GET['username'];
$useraddress = $_GET['useraddress'];
$usermail    = $_GET['usermail'];

// 名前: 20文字以内、日本語のみ
if (mb_strlen($username) > 20) {
  die("名前は20文字以内で入力してください。");
}
if (!preg_match('/\A[\p{Hiragana}\p{Katakana}\p{Han}ー～々〆〤\s]+\z/u', $username)) {
  die("名前は日本語で入力してください。");
}

// 住所: 50文字以内、日本語のみ
if (mb_strlen($useraddress) > 50) {
  die("住所は50文字以内で入力してください。");
}
if (!preg_match('/\A[\p{Hiragana}\p{Katakana}\p{Han}ー～々〆〤0-9０-９\s\-、。]+\z/u', $useraddress)) {
  die("住所は日本語で入力してください。");
}

// メール: 100文字以内、-_@が利用可能
if (mb_strlen($usermail) > 100) {
  die("メールアドレスは100文字以内で入力してください。");
}
if (!preg_match('/\A[a-zA-Z0-9_\-\.]+@[a-zA-Z0-9_\-\.]+\z/', $usermail)) {
  die("メールアドレスの形式が正しくありません。");
}

// 入力表示
echo "あなたが入力した値<br>";
echo "名前：" . htmlspecialchars($username, ENT_QUOTES, 'UTF-8') . "<br>";
echo "住所：" . htmlspecialchars($useraddress, ENT_QUOTES, 'UTF-8') . "<br>";
echo "メールアドレス：" . htmlspecialchars($usermail, ENT_QUOTES, 'UTF-8');

?>
      </h2>
    </div>
  </body>
</html>