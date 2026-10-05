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
    <dic class="position">
      <div id="sidebar">
        <div class="sidebar-position">
          <nav>
            <li><a href="https://www.san-x.co.jp/ja/characters/rilakkuma/">トップページ</a></li>
            <li><a href="https://www.san-x.co.jp/ja/characters/ishiyowachan/">人気投稿</a></li>
            <li><a href="https://www.san-x.co.jp/ja/characters/tarepanda/">エンジニアおすすめ商品</a></li>
            <li><a href="https://www.san-x.co.jp/ja/characters/mamegoma/">エンジニアおすすめ記事</a></li>
            <li><a href="https://www.san-x.co.jp/ja/characters/nyan-nyan-nyanko/">投稿ページ</a></li>
          </nav>
        </div>
      </div>
      <div id="main">
        <form method="post" action="confirm.php">
          <table border="3" id ="table">
            <tr>
              <th>お名前</th>
              <td>
                <input type="text" id="name" name="name" size="40">
              </td>
            </tr>
            <tr>
              <th>会社名</th>
              <td>
                <input type="text" id="companyName" name="companyName" size="40">
              </td>
            </tr>
            <tr>
              <th>メールアドレス</th>
              <td>
                <input type="email" id="email" name="email" size="40">
              </td>
            </tr>
            <tr>
              <th>年齢</th>
              <td>
                <input id="age" type="text" name="age" size="40">
              </td>
            </tr>
            <tr>
              <th>お問い合わせ内容</th>
              <td>
                <textarea id="message" name="message" cols="40" rows="5" placeholder="お問い合わせ内容"></textarea>
              </td>
            </tr>
          </table>
          <div id="submit">
          <input type="submit" value="送信" onclick="return confirmSubmit()">
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