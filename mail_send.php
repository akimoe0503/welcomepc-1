<?php
// 入力項目のチェック
// 全て入力されてなかったら、前の画面に戻る
// isset（変数）…変数が存在しているかチェックができる
// 存在しているとtrue
// 存在してないとfalse
// !関数名　falseだったらという意味になる

if (!isset($_POST["onamae"])){
  header('Location: index.php?error=-1');
}

?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>XAMPPテスト</title>
</head>
<body>
  <h1>お問い合わせ内容確認</h1>
  <h4>お名前</h4>
  <!-- POST送信された中の、onamaeに格納された情報を表示 -->
  <!-- キー部分はinputタグのname要素に指定されたもの -->
  <p><?php echo $_POST["onamae"]; ?></p>
  <!-- 練習問題 入力されたemail,お問い合わせ内容も表示してみましょう -->
  <!-- index.html側も変える必要があります。 -->
  <h4>Eメール</h4>
  <p><?php echo $_POST["email"]; ?></p>
  <h4>お問い合わせ内容</h4>
  <p><?php echo $_POST["inquiry"]; ?></p>
  <form method="POST" action="mail_function.php">
    <input name="onamae" type="hidden" value="<?php echo $_POST["onamae"]; ?>" >
    <input name="email" type="hidden" value="<?php echo $_POST["email"]; ?>" >
    <input name="inquiry" type="hidden" value="<?php echo $_POST["inquiry"]; ?>" >

    <button>メール送信</button>
    <button type="button" onclick="history.back();">戻る</button>
  </form>
</body>
</html>