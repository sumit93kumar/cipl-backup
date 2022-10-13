<?php
session_start();
$_SESSION['un']=''; 
$_SESSION['uid']=''; 
$_SESSION['uemail']=''; 
$_SESSION['utype']=''; 
$_SESSION['branch']=''; 
header('location: index.php');

?>