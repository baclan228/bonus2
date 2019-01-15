<?php
if($_COOKIE['id']){
    echo "<script language='JavaScript'>
                document.location.href='../auth/index.php'
                </script>";
}
if(!$_COOKIE['id']){
	echo "<script language='JavaScript'>
                document.location.href='../index.php'
                </script>";
}
?>