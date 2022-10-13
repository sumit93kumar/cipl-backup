<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$options = array(PDO::ATTR_PERSISTENT => true);
try {
	
   $conn = new PDO("mysql:host=$servername;dbname=cipl", $username, $password, $options);

  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   //echo "Connection Successfull";
    }
catch(PDOException $e)
    {
    echo "Connection failed: ";
    }
 $created_at= date('Y-m-d H:i:s');

?>


