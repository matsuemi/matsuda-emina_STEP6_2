<?php
$errors = [];

$name = "";
$companyName = "";
$email = "";
$age = "";
$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"] ?? "";
    $companyName = $_POST["companyName"] ?? "";
    $email = $_POST["email"] ?? "";
    $age = $_POST["age"] ?? "";
    $message = $_POST["message"] ?? "";

    if ($name === "") {
        $errors["name"] = "お名前を入力してください。";
    }

    if ($companyName === "") {
        $errors["companyName"] = "会社名を入力してください。";
    }

    if ($email === "") {
        $errors["email"] = "メールアドレスを入力してください。";
    }

    if ($age === "") {
        $errors["age"] = "年齢を入力してください。";
    }

    if ($message === "") {
        $errors["message"] = "お問い合わせ内容を入力してください。";
    }

    if (empty($errors)) {
        ?>
        <form method="post" action="confirm.php" id="confirmForm">
            <input type="hidden" name="name" value="<?php echo htmlspecialchars($name, ENT_QUOTES, 'UTF-8'); ?>">
            <input type="hidden" name="companyName" value="<?php echo htmlspecialchars($companyName, ENT_QUOTES, 'UTF-8'); ?>">
            <input type="hidden" name="email" value="<?php echo htmlspecialchars($email, ENT_QUOTES, 'UTF-8'); ?>">
            <input type="hidden" name="age" value="<?php echo htmlspecialchars($age, ENT_QUOTES, 'UTF-8'); ?>">
            <input type="hidden" name="message" value="<?php echo htmlspecialchars($message, ENT_QUOTES, 'UTF-8'); ?>">
        </form>

        <script>
            document.getElementById("confirmForm").submit();
        </script>
        <?php
        exit;
    }
}
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>お問い合わせフォーム</title>
  <link rel="stylesheet" href="style.css">
  <script src="style.js"></script>
</head>
<body>
  <div class="header">
    <h2 class="title">お問い合わせフォーム</h2>
  </div>
  <div class="container">
    <div class="position">
      <div id="sidebar">
        <div class="sidebar-position">
          <nav>
            <ul>
              <li><a href="https://www.san-x.co.jp/ja/characters/rilakkuma/">トップページ</a></li>
              <li><a href="https://www.san-x.co.jp/ja/characters/ishiyowachan/">人気投稿</a></li>
              <li><a href="https://www.san-x.co.jp/ja/characters/tarepanda/">エンジニアおすすめ商品</a></li>
              <li><a href="https://www.san-x.co.jp/ja/characters/mamegoma/">エンジニアおすすめ記事</a></li>
              <li><a href="https://www.san-x.co.jp/ja/characters/nyan-nyan-nyanko/">投稿ページ</a></li>
            </ul>
          </nav>
        </div>
      </div>

      <div id="main">
        <form method="post" action="contact.php">
          <table border="3" id="table">
            <tr>
              <th>お名前</th>
              <td>
                <input type="text" id="name" name="name" size="40"value="<?php echo htmlspecialchars($name, ENT_QUOTES, 'UTF-8'); ?>">

                <?php if (isset($errors["name"])): ?>
                  <p><?php echo htmlspecialchars($errors["name"], ENT_QUOTES, 'UTF-8'); ?></p>
                <?php endif; ?>
              </td>
            </tr>

            <tr>
              <th>会社名</th>
              <td>
                <input type="text" id="companyName" name="companyName" size="40" value="<?php echo htmlspecialchars($companyName, ENT_QUOTES, 'UTF-8'); ?>">

                <?php if (isset($errors["companyName"])): ?>
                  <p><?php echo htmlspecialchars($errors["companyName"], ENT_QUOTES, 'UTF-8'); ?></p>
                <?php endif; ?>
              </td>
            </tr>

            <tr>
              <th>メールアドレス</th>
              <td>
                <input type="email" id="email" name="email" size="40"  value="<?php echo htmlspecialchars($email, ENT_QUOTES, 'UTF-8'); ?>">

                <?php if (isset($errors["email"])): ?>
                  <p><?php echo htmlspecialchars($errors["email"], ENT_QUOTES, 'UTF-8'); ?></p>
                <?php endif; ?>
              </td>
            </tr>

            <tr>
              <th>年齢</th>
              <td>
                <input id="age" type="text" name="age" size="40" value="<?php echo htmlspecialchars($age, ENT_QUOTES, 'UTF-8'); ?>">

                <?php if (isset($errors["age"])): ?>
                  <p><?php echo htmlspecialchars($errors["age"], ENT_QUOTES, 'UTF-8'); ?></p>
                <?php endif; ?>
              </td>
            </tr>

            <tr>
              <th>お問い合わせ内容</th>
              <td>
                <textarea id="message" name="message" cols="40" rows="5" placeholder="お問い合わせ内容"><?php echo htmlspecialchars($message, ENT_QUOTES, 'UTF-8'); ?></textarea>

                <?php if (isset($errors["message"])): ?>
                  <p><?php echo htmlspecialchars($errors["message"], ENT_QUOTES, 'UTF-8'); ?></p>
                <?php endif; ?>
              </td>
            </tr>
            
          </table>
          <div id="submit">
          <input type="submit" name="submit" value="送信" onclick="return confirmSubmit()">
          </div>
        </form>
      </div>
    </div>
  </div>

  <div id="footer">
    <div class="info">
      <p>横のボタンを押すとfooterの背景色が変わります。</p>
    </div>

    <form>
      <div id="background_btn">
        <input type="button" value="押してみてね！">
      </div>
    </form>
  </div>

</body>
</html>