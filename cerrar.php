<?php
session_start();
if($_SESSION['Usuario']){
session_destroy();
header("Location: ../index.php");
}
else {
	header("location:index.php");
}
?>