<?php 

session_start();
session_destroy();
// $_COOKIE['logged_in'] = 0;
$_SESSION[''] = " ";
header("Location: ../index.php");
?>