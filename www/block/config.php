<?php
$bd = mysqli_connect("localhost", "root", "", "bonus");
if ($bd){
	
}else{
	header("Location: error.php");
}
?>