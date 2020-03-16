<?php 
session_start();
   $name=$_SESSION['name'];
   $email=$_SESSION['email'];
   $ge=$_SESSION['ge'];
   $cp1=$_SESSION['password'];
?>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "web";

try {
	
	if ($cp1==$_POST['cup'] && $_POST['np']==$_POST['rp'])
	{ 
	$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    
	// set the PDO error mode to exception

    var_dump ($_SESSION);
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
	$sql = "Update info SET Password='".$_POST['np']."' where Email='".$email."' ";
    
	// use exec() because no results are returned
    
	$conn->exec($sql);
    echo "New record created successfully";
	}
	else {
		
		 
		
		echo "Password Miss Match"; 
		
	
		
	}
	
	
	
	
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;
?>
