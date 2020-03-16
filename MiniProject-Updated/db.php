<?php 
session_start();
	$name=$_POST['name'];
	$email=$_POST['email'];
	$pass=$_POST['password'];
	$gen=$_POST['gender'];
?>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "web";

try {
    
	$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    
	// set the PDO error mode to exception

  
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
	$sql = "INSERT INTO info (Name,Email,Gender,Password) VALUES ('$name','$email','$gen','$pass')";
    
	// use exec() because no results are returned
    
	$conn->exec($sql);
    echo "New record created successfully";
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;
?>





