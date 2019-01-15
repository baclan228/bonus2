<?php

if (isset($_POST['payeer'])) { $payeer = $_POST['payeer']; if ($payeer == '') { unset($payeer);} }
if (isset($_POST['email'])) { $email = $_POST['email']; if ($email == '') { unset($email);} }
if (isset($_POST['password'])) { $password=$_POST['password']; if ($password =='') { unset($password);} }

if (empty($payeer) or empty($email) or empty($password)){
	exit ("Вы ввели не всю информацию, вернитесь назад и заполните все поля!");
}

$payeer = stripslashes($payeer);
$payeer = htmlspecialchars($payeer);
$email = stripslashes($email);
$email = htmlspecialchars($email);
$password = stripslashes($password);
$password = htmlspecialchars($password);

$payeer = trim($payeer);
$email = trim($email);
$password = trim($password);
$date = date("d.m.Y");

include 'block/config.php';

$result = mysqli_query($bd, "SELECT id FROM user WHERE email='$email'");
$myrow = mysqli_fetch_array($result);
$result1 = mysqli_query($bd, "SELECT id FROM user WHERE payeer='$payeer'");
$myrow1 = mysqli_fetch_array($result1);
if (!empty($myrow['id'])) {
    exit ("Извините, введённый вами email уже зарегистрирован. Введите другой Email.");
}
if (!empty($myrow1['id'])) {
    exit ("Извините, введённый вами Payeer уже зарегистрирован. Введите другой Payeer.");
    }

$result2 = mysqli_query ($bd, "INSERT INTO user (payeer, email, password) VALUES('$payeer', '$email', '$password')");

if ($result2=='TRUE')
    {
    echo "Вы успешно зарегистрированы! Теперь вы можете зайти на сайт. <a href='index.php'>Главная страница</a>";
	/*$result8 = mysqli_query($bd, "SELECT id FROM user WHERE email='$email'");
    $myrow8 = mysqli_fetch_array($result8);
	$id_us = $myrow8['id'];*/
    }
 else {
    echo "Ошибка! Вы не зарегистрированы.";
    }
?>