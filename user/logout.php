<?php 

session_start();
session_destroy();
setcookie("logged_in", 0, time()+3600, "/");
$_SESSION[''] = " ";
header("Location: ../index.php");
?>