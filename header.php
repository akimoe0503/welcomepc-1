<!DOCTYPE html>
<html lang="ja">
<head>
  <title>Welcome to NexSeed Okinawa</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/reset.css">
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
 
</head>
<body>
  <!-- header -->
  <header class="fixed">
    <!-- header left -->
    <div class="icon">
      <img src="<?php echo get_template_directory_uri(); ?>/img/seedkun.png">
      <span class="name"><strong>Seed</strong>Kun</span>
    </div>
    <!-- header right -->
    <ul class="header-right">
      <li>新規登録</li>
      <li>ログイン</li>
    </ul>
    <!-- ハンバーガーメニュー -->
    <div id="toggle" class="js-hamburger hamburger">
      <span></span>
    </div>
    <!-- ドロワー -->
    <div id="drower-bg"></div>
    <ul class="drower js-drower">
      <li class="js-register">新規登録</li>
      <li class="js-login">ログイン</li>
    </ul>
  </header>

    <!-- header ここまで -->