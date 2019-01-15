<?php
include '../block/config.php';
$id_cook = $_COOKIE['id'];  


if (isset($_COOKIE['id']) and isset($_COOKIE['hash']))
{
    $query = mysqli_query($bd, "SELECT *,INET_NTOA(user_ip) AS user_ip FROM user WHERE id = '".intval($_COOKIE['id'])."' LIMIT 1");
    $userdata = mysqli_fetch_assoc($query);


    if(($userdata['user_hash'] !== $_COOKIE['hash']) or ($userdata['id'] !== $_COOKIE['id'])
 or (($userdata['user_ip'] !== $_SERVER['REMOTE_ADDR'])  and ($userdata['user_ip'] !== "0")))
    {
        setcookie("id", "", time() - 3600*24*30*12, "/");
        setcookie("hash", "", time() - 3600*24*30*12, "/");
        /*echo "Хм, что-то не получилось";*/
    }
    else
    {
       /* print "Привет, ".$userdata['name'].". Всё работает!";*/
    }
}
else
{
    echo "<script language='JavaScript'>
                document.location.href='../index.php'
                </script>";
    exit();
}
?>