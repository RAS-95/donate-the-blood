<?php 

session_start();
session_destroy();
setcookie("logged_in", "", time()-3600, "/");
$_SESSION[''] = " ";
header("Location: ../index.php");
?>