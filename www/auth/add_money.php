<?php 
include '../block/config.php';
include 'cookie/cookie.php';
$query = mysqli_query($bd, "SELECT money FROM `user` WHERE id = '$id_cook'");
$res = mysqli_fetch_array($query);
$money_bd = $res['money'];/// Баланс в базе данных!
$rand = mt_rand(0,100);

if($rand == 0){
	echo "<br>0";
	echo "<script language='JavaScript'>document.location.href='index.php'</script>";
}elseif($rand <= 10){
	echo "<br>0.05";
	$win = $money_bd+0.05;
	$query1 = mysqli_query($bd, "UPDATE user SET money='$win' WHERE id = '$id_cook'");
	if ($query1){
		echo "<script language='JavaScript'>document.location.href='index.php'</script>";
	}
}elseif($rand <= 20){
	echo "<br>0.10";
	$win = $money_bd+0.10;
	$query1 = mysqli_query($bd, "UPDATE user SET money='$win' WHERE id = '$id_cook'");
	if ($query1){
		echo "<script language='JavaScript'>document.location.href='index.php'</script>";
	}
}elseif($rand <= 50){
	echo "<br>0.15";
	$win = $money_bd+0.15;
	$query1 = mysqli_query($bd, "UPDATE user SET money='$win' WHERE id = '$id_cook'");
	if ($query1){
		echo "<script language='JavaScript'>document.location.href='index.php'</script>";
	}
}elseif($rand <= 70){
	echo "<br>0.25";
	$win = $money_bd+0.25;
	$query1 = mysqli_query($bd, "UPDATE user SET money='$win' WHERE id = '$id_cook'");
	if ($query1){
		echo "<script language='JavaScript'>document.location.href='index.php'</script>";
	}
}elseif($rand <= 99){
	echo "<br>0.30";
	$win = $money_bd+0.30;
	$query1 = mysqli_query($bd, "UPDATE user SET money='$win' WHERE id = '$id_cook'");
	if ($query1){
		echo "<script language='JavaScript'>document.location.href='index.php'</script>";
	}
}elseif($rand == 100){
	echo "<br>5";
	$win = $money_bd+5;
	$query1 = mysqli_query($bd, "UPDATE user SET money='$win' WHERE id = '$id_cook'");
	if ($query1){
		echo "<script language='JavaScript'>document.location.href='index.php'</script>";
	}
}

?>