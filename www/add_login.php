<?php
function generateCode($length=6) {
    $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHI JKLMNOPRQSTUVWXYZ0123456789";
    $code = "";
    $clen = strlen($chars) - 1;
    while (strlen($code) < $length) {
            $code .= $chars[mt_rand(0,$clen)];
    }
    return $code;
}

// Соединямся с БД
include 'block/config.php';

if(isset($_POST['submit'])){
    // Вытаскиваем из БД запись, у которой логин равняеться введенному
    $query = mysqli_query($bd,"SELECT id, password, email FROM user WHERE email='".mysqli_real_escape_string($bd,$_POST['email'])."' LIMIT 1");
    $data = mysqli_fetch_assoc($query);

    // Сравниваем пароли
    if($data['password'] === $_POST['password']){
        // Генерируем случайное число и шифруем его
        $hash = md5(generateCode(10));

        if(!empty($_POST['not_attach_ip'])){
            // Если пользователя выбрал привязку к IP
            // Переводим IP в строку
            $insip = ", user_ip=INET_ATON('".$_SERVER['REMOTE_ADDR']."')";
        }

        // Записываем в БД новый хеш авторизации и IP
        mysqli_query($bd, "UPDATE user SET user_hash='".$hash."' ".$insip." WHERE id='".$data['id']."'");

        // Ставим куки
setcookie("id", $data['id'], time()+60*60*24*30);
setcookie("hash", $hash, time()+60*60*24*30,null,null,null,true);// httponly !!!

        // Переадресовываем браузер на страницу проверки нашего скрипта
        header("Location: auth/index.php"); exit();
		/*echo "<script language='JavaScript'>
				document.location.href='auth/index.php'
				</script>";*/
    }
    else
    {
        exit("Вы ввели неправильный логин/пароль");
    }
}
?>