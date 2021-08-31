<!DOCTYPE html>
<html>
<head>
	<title>SIGN UP</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
     <form action="signup-check.php" method="post">
     	<h2>アカウント作成</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>

          <?php if (isset($_GET['success'])) { ?>
               <p class="success"><?php echo $_GET['success']; ?></p>
          <?php } ?>

          <label></label>
          <?php if (isset($_GET['name'])) { ?>
               <input type="text" 
                    name="name" 
                    placeholder="Name"
                    value="<?php echo $_GET['name']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                    name="name" 
                    placeholder="名前"><br>
          <?php }?>

          <label></label>
          <?php if (isset($_GET['uname'])) { ?>
               <input type="text" 
                    name="uname" 
                    placeholder="User Name"
                    value="<?php echo $_GET['uname']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                    name="uname" 
                    placeholder="ユーザー名"><br>
          <?php }?>


     	<label></label>
     	<input type="password" 
               name="password" 
               placeholder="パスワード"><br>

          <label></label>
          <input type="password" 
               name="re_password" 
               placeholder="パスワードの再設定"><br>

     	<button type="submit">サインアップ</button>
          <a href="index.php" class="ca">すでにアカウントはお持ちですか?</a>
     </form>
</body>
</html>