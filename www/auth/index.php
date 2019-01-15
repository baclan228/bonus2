<?php
include '../block/config.php';
include 'cookie/cookie.php';
$query = mysqli_query($bd, "SELECT payeer, money, time FROM `user` WHERE id = '$id_cook'");
$res = mysqli_fetch_array($query);
$payeer_name = $res['payeer'];
$payeer_money = $res['money'];

$time = $res['time'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Главная страница</title>
	<link rel="stylesheet" href="../css/style.css">
	<script type="text/javascript" src="../js/jquery-3.2.1.min.js"></script>
</head>
<body onload="refresh();">
	<div class="wrapper">
		<?php include 'block/header.php'; ?><!--Site header-->
		<div class="center">
		

			<div class="left">
				<div id="timer">
					<table border="0" cellpadding="0" cellspacing="0" bordercolor="#00000">
						<tr>
							<td>
								<div class="st" id="tm"></div>
							</td>
						</tr> 
					<!--<input type="button" value="mail" onclick="main()" >-->
					</table>
					<span id="inf">Чтобы забрать бонус нажмите на банеры внизу</span>
					<div id="baner1"><a href="http://socpublic.com/?i=1515410" target="_blank"><img src="http://socpublic.com/storage/banners/banner_7_468x60.gif" width="468" height="60" border="0" alt="SOCPUBLIC.COM - заработок в интернете!"onclick="main()"></a></div>
					<div id="baner2"><a href="http://socpublic.com/?i=1515410" target="_blank"><img src="http://socpublic.com/storage/banners/banner_7_468x60.gif" width="468" height="60" border="0" alt="SOCPUBLIC.COM - заработок в интернете!"onclick="main()"></a></div>
					<div id="baner3"><a href="http://socpublic.com/?i=1515410" target="_blank"><img src="http://socpublic.com/storage/banners/banner_7_468x60.gif" width="468" height="60" border="0" alt="SOCPUBLIC.COM - заработок в интернете!"onclick="main()"></a></div>
					<div id="baner4"><a href="http://socpublic.com/?i=1515410" target="_blank"><img src="http://socpublic.com/storage/banners/banner_7_468x60.gif" width="468" height="60" border="0" alt="SOCPUBLIC.COM - заработок в интернете!"onclick="main()"></a></div>
					<div id="baner5"><a href="http://socpublic.com/?i=1515410" target="_blank"><img src="http://socpublic.com/storage/banners/banner_7_468x60.gif" width="468" height="60" border="0" alt="SOCPUBLIC.COM - заработок в интернете!"onclick="main()"></a></div>
				</div>
			</div>
<script language="JavaScript" type="text/javascript" src="../js/timer.js"></script>




			<div class="right">
				<div class="profile">
					<div class="avatar">
						<img src="../avatar/avatar.png">
					</div>
					<div class="payeer">
						<p><?php echo $payeer_name; ?></p>
					</div>
					<div class="balance">
						<p><?php echo $payeer_money; ?> &#8381</p>
					</div>
					<div class="experience">
						<p>0/22121</p>
					</div>
				</div>
				<div class="banner_right">
					<a href="http://socpublic.com/?i=1515410" target="_blank"><img src="http://socpublic.com/storage/banners/banner_7_200x300.gif" width="200" height="300" border="0" alt="SOCPUBLIC.COM - заработок в интернете!"></a>
				</div>
			</div>
		</div>
		<footer>123</footer>
	</div>
</body>
</html>