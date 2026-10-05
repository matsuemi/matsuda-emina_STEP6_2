<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $companyName = $_POST["companyName"];
    $email = $_POST["email"];
    $age = $_POST["age"];
    $message = $_POST["message"];
} else {
    header("Location: contact.php");
}
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>お問い合わせフォーム - 確認画面</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="header">
    <h2 class="title">お問い合わせフォーム - 確認画面</h2>
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
        <table border="3" id ="table_confirm">
          <tr>
            <th>お名前</th>  
            <td class="table-data"><?php echo htmlspecialchars($name, ENT_QUOTES, 'UTF-8'); ?></td>
          </tr>
          <tr>
            <th>会社名</th>
            <td class="table-data"><?php echo htmlspecialchars($companyName, ENT_QUOTES, 'UTF-8'); ?></td>
          </tr>
          <tr>
            <th>メールアドレス</th>
            <td class="table-data"><?php echo htmlspecialchars($email, ENT_QUOTES, 'UTF-8'); ?></td>
          </tr>
          <tr>
            <th>年齢</th>
            <td class="table-data"><?php echo htmlspecialchars($age, ENT_QUOTES, 'UTF-8'); ?></td>
          </tr>
          <tr>
            <th>お問い合わせ内容</th>
            <td class="table-data"><?php echo htmlspecialchars($message, ENT_QUOTES, 'UTF-8'); ?></td>
          </tr>
        </table>
        <form method="post" action="send.php">
          <input type="hidden" name="name" value="<?php echo $name; ?>">
          <input type="hidden" name="companyName" value="<?php echo $companyName; ?>">
          <input type="hidden" name="email" value="<?php echo $email; ?>">
          <input type="hidden" name="age" value="<?php echo $age; ?>">
          <input type="hidden" name="message" value="<?php echo $message; ?>">
          <div id="submit">
            <input type="submit" value="送信">
            <div class="back-bnt">
              <input type="button" name="submit" onclick="history.back()" value="戻る">
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>

  <div id="footer"></div>
</body>
</html>