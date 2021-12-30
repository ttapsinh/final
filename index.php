<!DOCTYPE html>
<html>
<head>
	<title>Đăng nhập</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
     <form action="login.php" method="post">
     	<h2>Đăng nhập</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
     	<label>Tên đăng nhập</label>
     	<input type="text" name="uname" placeholder="User Name"><br>

     	<label>Mật khẩu</label>
     	<input type="password" name="password" placeholder="Password"><br>

     	<button type="submit">Đăng nhập</button>
          <a href="signup.php" class="ca">Đăng ký tài khoản mới</a>
     </form>
</body>
</html>