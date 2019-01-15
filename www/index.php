<!--
Version 1.0
-->
<?php
include 'block/config.php';
//include 'cookie/cookie.php';
if ($_COOKIE['id']){
	echo "<script language='JavaScript'>
                document.location.href='../auth/index.php'
                </script>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Главная страница</title>
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<div class="wrapper">
		<?php include 'block/header.php'; ?><!--Site header-->
		<div class="center">
			<div class="left">
				<form action="add_login.php" method="POST" id="form_avtoriz">
					<h3>Авторизация</h3>
					<input type="email" name="email" placeholder="Email" id="input"><br><br>
					<input type="password" name="password" placeholder="Password" id="input"><br><br>
					<i style="display: none;">Не прикреплять к IP(не безопасно) <input type="checkbox" name="not_attach_ip"  checked></i><br>
					<input type="submit" name="submit" value="Войти" id="submit"><br>
					<a href="reg.php">Нет аккаунта?</a>
				</form>
			</div>
			<div class="right">
				<div class="banner_right">
					<a href="http://socpublic.com/?i=1515410" target="_blank"><img src="http://socpublic.com/storage/banners/banner_7_200x300.gif" width="200" height="300" border="0" alt="SOCPUBLIC.COM - заработок в интернете!"></a>
				</div>
			</div>
		</div>
		<footer>123</footer>
	</div>
</body>
</html>