<!DOCTYPE html>
<html lang="ja">
<head>
  <title>Welcome to NexSeed Okinawa</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" type="text/css" href="css/reset.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
 
</head>
<body>
  <!-- header -->
  <header class="fixed">
    <!-- header left -->
    <div class="icon">
      <img src="img/seedkun.png">
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
  <!-- welcome -->
  <main class="welcome" id="margin-for-fixed">
    <h1 class="title">Welcome to NexSeed Okinawa</h1>
    <ul class="guideline">
      <li>Be Athlete</li>
      <li>Go World</li>
      <li>Enjoy Everything</li>
    </ul>
    <div class="btn-group">
      <button class="btn register">新規登録</button>
      <button class="btn login">ログイン</button>
    </div>
  </main>
  <!-- welcome ここまで -->

<!-- カリキュラム -->
<main class="curriculum">
  <h2 class="subtitle">NexSeed Life</h2>
  <ul class="img-box">
    <li>
      <img src="img/programming.jpg">
      <span>Programing</span>
    </li>
    <li>
      <img src="img/english.jpg">
      <span>English</span>
    </li>
    <li>
      <img src="img/enjoy.jpg">
      <span>Enjoy</span>
    </li>
  </ul>
</main>
<!-- カリキュラム　ここまで -->

<!-- contact us -->
<aside class="contact">
  <h2 class="subtitle">Contact Us</h2>
  <?php if (isset($_GET["error"])){ ?>
  <p style="color:red;">不正なアクセスがあったので、もう一度入力してください</p>
  <?php } ?>

  <?php
  // こっちの書き方だと、HTMLタグが一つの文字列のように見えて書きづらい 
  // if (isset($_GET["error"])){
  // echo '<p style="color:red;">不正なアクセスがあったので、もう一度入力してください</p>';
  // } 
  ?>
  <!-- form -->
  <!-- POST送信で、mail_send.phpに情報を送ります -->
  <form method="POST" action="mail_send.php">
      <div class="form">
        <!-- 左側 -->
         <div class="form-left">
           <fieldset>
             <input name="onamae" type="text" class="name" placeholder="お名前" required>
           </fieldset>
           <fieldset>
             <input name="email" type="email" class="email" placeholder="メールアドレス" required>
           </fieldset>
         </div>
        <!-- 右側 -->
        <div class="form-right">
          <fieldset>
            <textarea name="inquiry" class="inquiry" placeholder="お問い合わせ内容" required></textarea>
          </fieldset>
        </div>
      </div>
      
      <button>submit</button>
  </form>

</aside>
<!-- contact us ここまで -->

<!-- footer -->
<footer>
  <!-- footer 左側 -->
  <div class="icon">
      <img src="img/seedkun.png">
      <span class="name"><strong>Seed</strong>Kun</span>
  </div>
  <!-- footer 右側 -->
  <p class="footer-right">Copyright (C) SeedKun inc</p>
</footer>
<!-- footer ここまで -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="js/app.js"></script>
<?php if (isset($_GET["error"])){ ?>
<script>
  alert('不正なアクセスがあったのでもう一度入力してください');
</script>
 <?php } ?>

</body>
</html>