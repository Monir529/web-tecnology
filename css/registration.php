<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="style.css">
	<title>registration</title>
</head>
<body>
<style>
header{

background-color: #777;
padding:5px;
font-size:20px;
margin:auto;

color:white;
border-style:solid;
border-width:1px;
}
.hd{
  text-align: right;
  color:white;

}
article{
 text-align: center;
  padding: 20px;
  border:1px solid black;
}
footer{
   background-color: #777;
  padding: 10px;
  text-align: center;
  color: white;
  border-style:solid;
  border-width:1px;
}
</style>

<header>
  <h1>Xcompany</h1>
  <div class="hd">
  <a href="login.php">Login</a>
  <a href="hello.html">Home</a></li>
  <a href="registration.php">registration</a>
</div>
</header>
<article>
<form action="<?= htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
  Name    :
  <input type="text" name="name"><br>
   Email    :
   <input type="text" name="email"><br>
  User  Name:
  <input type="text" name="username"><br>
   password:
  <input type="password" name="password"><br>
  Confirm password:
     <input type="password" name="cpassword"><br>
  Gender:
   <input type="radio"  name="gender" value="male"> Male
  <input type="radio" name="gender" value="female">
  Female
  <input type="radio"  name="gender" value="other">
Other<br>
Date OF Birth:
  <input type="date" name="bday"><br><br>
<input type="submit" value="submit">
<input type="button" value="reset">
</form>
</article>
<footer>
<p>copyright @ 2020<p>
</footer>
</body>
</html>
<?php
if(isset($_POST['submit']))
{
    $con=mysqli_connect("localhost","root","","xcompany");
    if(!$con)
    {
        die("Connection Error: ".mysqli_connect_error()."<br/>");
    }
    $name=$_POST['name'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $username=$_POST['username'];
    $cpassword=$_POST['cpassword'];
    $gender=$_POST['gender'];
    $bday=$_POST['bday'];
   
    
$sql = "INSERT INTO info ($name,$email,$password,$username,$cpassword,$gender,$bday)";
   
    $result=mysqli_query($con,$sql);
   
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
 
   
mysqli_close($con);    
}
 
?>