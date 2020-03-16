<?php
session_start();

?>



<!DOCTYPE html>
<html>
<head>
<title>USER</title>
<link rel="stylesheet" type="text/css" href="style.css">
<Style>
header {
  background-color: #777;
  padding: 20px;
  text-align: Left;
  font-size: 20px;
  color: white;
}
.asas {
  background-color: #777;
  padding: 5px;
  text-align: right;
  font-size: 15px;
  color: black;
}

nav {
  float: left;
  width: 30%;
  height: 300px; /* only for demonstration, should be removed */
  background: #ccc;
  padding: 5px;
}

/* Style the list inside the menu */
nav ul {
  list-style-type: none;
  padding: 0;
}

article {
  float: center;
  padding: 5px;
  text-align: center;
  width: 80%;
  background-color: #f1f1f1
  
  height: 300px; /* only for demonstration, should be removed */
}

/* Clear floats after the columns */
section:after {
  content: "";
  display: table;
  clear: both;
}

/* Style the footer */
footer {
  background-color: #777;
  padding: 10px;
  margin:10px;
  text-align: center;
  color: white;
}

</Style>
</head>
<body>

<header>
  <h2>Xcompany</h2>
  <div class="asas">
  <a href="Main.php">Home</a>
  <a href="REGISTRATION.php">Registration</a>
</div>
</header>



<section>
 
  <article>
  
    <br>
	<br>
    <form action="<?= htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
<div class="input-group">
<label>Username:</label> 
<input type="text" name="username" >

<br>
<label>Password:</label>
<input type="text" name="password">
</div>
<br><br>

<input type="submit" class=btn  name="login" value="Login"> <a href="forgot.php">Forgotten Password?</a>
 
</form> 
	<br>
	<br>
	<br><br>
	<br>

    </article>
</section>


<footer>
  <p>Copyright@2020</p>
</footer>

<form>

 
</form>  


</body>
</html>


<?php
if(isset($_POST['login']))
{
	$con=mysqli_connect("localhost","root","","web");
	if(!$con)
	{
		die("Connection Error: ".mysqli_connect_error()."<br/>");
	}
	//Retrieve Data

	$password=$_POST['password'];
	$username=$_POST['username'];
	$sql="SELECT * FROM info WHERE email='$username' AND password='$password'";
	
	$result=mysqli_query($con,$sql);
	
	if(mysqli_num_rows($result)>0)
	{
		$row=mysqli_fetch_array($result);
		$_SESSION['name']=$row['Name'];
		$_SESSION['email']=$row['Email'];
		$_SESSION['ge']=$row['Gender'];
		$_SESSION['password']=$row['Password'];
		
		echo $_SESSION['password'];
		header("Location:user.php");
	}
	else
	{
		echo "No data found.<br/>";
	}

	
mysqli_close($con);		
}

?>