<?php
session_start();
$name=$_SESSION['name'];
$email=$_SESSION['email'];
$ge=$_SESSION['ge'];

?>



<!DOCTYPE html>
<html>
<head>
<title>USER</title>
<Style>
header {
  background-color: #777;
  padding: 15px;
  text-align: Left;
  font-size: 20px;
  color: black;
}
pl {
  border: 1px solid powderblue;
}
#asas {
  background-color: #777;
  padding: 5px;
  text-align: right;
  font-size: 15px;
  color: white;
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
  text-align: left;
  width: 70%;
  background-color: #f1f1f1
  
  height: 300px; /* only for demonstration, should be removed */
}

#a {
  float: center;
  padding: 5px;
  text-align: center;
  width: 90%;
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
  text-align: center;
  color: black;
}

</Style>
</head>
<body>

<header>
  <h2>Xcompany</h2>
  <h5 id='asas'><a href="Main.php">LOGOUT</a></h5>
</header>




  
 
  
  <article id='a' style="border:thin">
  
    <br>
	<br>
    

		<div id='a' style="border:thin">
		
    <form action="dbc.php" method="post">
<h3>Change Password</h3>
		
		Current Password: <input type="text" name="cup">
		<br>
		<br>
		New Password: <input type="text" name="np">
		<br>
		Retype Password: <input type="text" name="rp">
		
		<br>
		<br>
		
		
		
        
		<input type="submit" name="submit" value="Edit">
		<br>
		
		</form>
		
		</div> 
		
	

<br><br>


 
	<br>
	<br>
	<br><br>
	<br>
	
	
	
	
	
	
    </article>



<footer>
  <p>Copyright@2020</p>
</footer>

<form>

 
</form>  


</body>
</html>
