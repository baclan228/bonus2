<?php
include('/cookie/cookie.php'); # Подключение cookie
setcookie("id", "", time() - 3600*24*30*12, "/");
setcookie("hash", "", time() - 3600*24*30*12, "/");

	echo "<script language='JavaScript'>
                document.location.href='../index.php'
                </script>";

?>