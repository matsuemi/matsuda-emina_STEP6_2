<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $companyName = $_POST["companyName"];
    $email = $_POST["email"];
    $age = $_POST["age"];
    $message = $_POST["message"];

    $to = "your_email@example.com";
    $subject = "お問い合わせありがとうございます。";
    $header = "From: your_email@example.com";
    $body = "名前: $name\n会社名: $companyName\nメールアドレス: $email\n年齢: $age\n\nお問い合わせ内容: $message";

    if (mail($to, $subject, $body, $header)) {
        $message = "お問い合わせが送信されました。ありがとうございます！";
    } else {
        $message = "送信に失敗しました。";
    }

} else {
    header("Location: contact.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>お問い合わせフォーム - 送信完了画面</title>
  </head>
  <body>
    <h1>お問い合わせフォーム - 送信完了画面</h1>
    <p><?php echo $message; ?></p>
    <p><a href="contact.php">お問い合わせフォームに戻る</a></p>
  </body>
</html>