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

if(isset($_GET['indata'])==false || $_GET['indata'] == ""){
  die("何か入力してください");
}else if(preg_match('/\D/', $_GET['indata'])){
  die("数字のみを入力してください。");
}

echo "入力された数字は： " . $_GET['indata'];
?>
    </h2>
    </div>
  </body>
</html>
