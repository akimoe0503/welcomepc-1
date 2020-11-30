<?php
// メールの送信処理
// $email = "ei17ringo@yahoo.co.jp";
// $title = "test";
// $message = "test message";
$email = $_POST["email"];
$title = "お問い合わせありがとうございました";
$message = "お問い合わせ内容の確認\n";
// 文字列連結にはPHPは.(ドット)を使う
// $message = $message . $_POST["onamae"];
$message .= "お名前：".$_POST["onamae"]."\n";
$message .= "Email：".$_POST["email"]."\n";
$message .= "お問い合わせ内容：".$_POST["inquiry"]."\n";

// echo $_POST["onamae"];
// echo '<br>';
// echo $_POST["email"];
// echo '<br>';
// echo $_POST["inquiry"];
echo $email;
echo '<br>';
echo $title;
echo '<br>';
echo $message;

// DBに接続し、データを保存
// 1.DBに接続
// 同じサーバーのcontact_formというDBに接続して、そこのテーブルsurveysにデータを貯める
// db_connect.phpを読み込み
require_once('db_connect.php');

// ２.INSERT文を作成
// $dbhは、db_connect.phpでDB接続の力を得ているので使えている
$stmt = $dbh->prepare('INSERT INTO surveys (nickname, email, content) VALUES (?, ?, ?)');

// 3.INSERT文を実行
$nickname = $_POST["onamae"];
$email = $_POST["email"];
$content = $_POST["inquiry"];
$stmt->execute([$nickname, $email, $content]);//?を変数に置き換えてSQLを実行


if (mb_send_mail($email, $title, $message)) {
    // echo '送信完了';
    header('Location: thanks.html');
} else {
    echo '送信失敗';
}
?>