<?php
include 'block/config.php';
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
				<form action="add_reg.php" method="POST" id="form_avtoriz">
					<h3>Регистрация</h3>
					<input type="text" name="payeer" value="P" id="input"><br><br>
					<input type="email" name="email" placeholder="Email" id="input"><br><br>
					<input type="password" name="password" placeholder="Password" id="input"><br><br>
					<input type="submit" name="submit" value="Зарегестрироваться" id="submit"><br>
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