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

if (mb_send_mail($email, $title, $message)) {
    echo '送信完了';
} else {
    echo '送信失敗';
}
?>