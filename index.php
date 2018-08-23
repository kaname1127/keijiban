<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>掲示板</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
  <?php
  mb_internal_encoding("utf8");
  $pdo = new PDO("mysql:dbname=php_keijiban;host=localhost;","root","mysql");
  $stmt = $pdo->query("select * from keijiban");
   ?>

<img src="###" class="logo" width="350px">
<header>
  <ul class="menu">
    <li>トップ</li>
    <li>プロフィール</li>
    <li>4eachについて</li>
    <li>登録フォーム</li>
    <li>問い合わせ</li>
    <li>その他</li>
  </ul>
 </header>

<main>
  <div class="main-container">
      <div class="left">
          <h1>プログラミングに役立つ掲示板</h1>
          <div class="left_side">
            <h2>入力フォーム</h2>
            <form method="post" action="insert.php">
                <div>
                  <label>ハンドルネーム</label>
                  <br>
                  <input type="text" class="text" size="35" name="handlename">
                </div>
                <div>
                  <label>タイトル</label>
                  <br>
                  <input type="text" class="text" size="35" name="title">
                </div>
                <div>
                  <label>コメント</label>
                  <br>
                  <textarea cols="35" rows="7" name="comments"></textarea>
                </div>

                <div>
                  <input type="submit" class="submit" value="投稿する">
                </div>
            </form>
          </div>

          <?php
            while ($row = $stmt->fetch()) {
            echo "<div class='kiji'>";
            echo "<h3>".$row['title']."</h3>";
            echo "<div class='contents'>";
            echo $row['comments'];
            echo "<div class='handlename'>posted by".$row['handlename']."</div>"; echo "</div>";
            echo "</div>";
          }
          ?>
      </div>
  </div>

      <div class="right">
          <h3>人気の記事</h3>
             <ul>
              <li>PHPオススメ本</li>
              <li>PHP　MyAdminの使い方</li>
              <li>いま人気のエディタTop5</li>
              <li>HTMLの基礎</li>
         　  </ul>
          <h3>オススメリンク</h3>
             <ul>
              <li>インターノウス株式会社</li>
              <li>XAMPPのダウンロード</li>
              <li>Eclipseのダウンロード</li>
              <li>Bracketsのダウンロード</li>
             </ul>
          <h3>カテゴリ</h3>
            <ul>
              <li>HTML</li>
              <li>PHP</li>
              <li>MySQL</li>
              <li>JavaScript</li>
         　  </ul>
      </div>
 　</div>
 </main>

 <footer>
  copyright © phpstudt |  A to Z about programing.
 </footer>

</body>
</html>
