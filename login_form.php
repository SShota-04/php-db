<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ログインページ</title>
</head>
<body>
<h1>ログインページ</h1>
    <form action="login.php" method="post">
    <div>
        <label>メールアドレス：<label>
        <input type="text" name="mail" required>
    </div>
    <div>
        <label>パスワード：<label>
        <input type="password" name="pass" required>
    </div>
    <input type="submit" value="ログイン">
    </form>
</body>
</html>