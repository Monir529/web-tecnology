<?php 
session_start();
   $name=$_SESSION['name'];
   $email=$_SESSION['email'];
   $ge=$_SESSION['ge'];
?>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "web";

try {
    
	$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    
	// set the PDO error mode to exception

    var_dump ($_SESSION);
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
	$sql = "Update info SET Name='".$_POST['name']."' ,Email='".$_POST['email']."', Gender='".$_POST['gender']."' where Email='".$email."' ";
    
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
