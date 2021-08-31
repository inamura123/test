<!DOCTYPE html>
<html>
<head>
	<title>ログイン</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <form action="login.php" method="post">
    <h2>ログイン</h2>
    <?php if (isset($_GET['error'])) { ?>
    <p class="error"><?php echo $_GET['error']; ?></p>
    <?php } ?>
    <label></label>
    <input type="text" name="uname" placeholder="ユーザー名"><br>

    <label></label>
    <input type="password" name="password" placeholder="パスワード"><br>

    <button type="submit">ログイン</button>
    <a href="signup.php" class="ca">新規ユーザー登録</a>
    </form>
</body>
</html>