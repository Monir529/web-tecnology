<!DOCTYPE html>
<html>
<head>
<title>Log In</title>
</head>
<body>

<style>
*{
    box-sizing: border-box;
}
    header{
background-color:#777;
padding:5px;
color:white;
    }
.city{
  
    text-align:right;
    font-size:20px;
}
article{
    text-align:center;
    padding:20px;
    
    border-style:solid;
    border-width:1px;
}
footer{
    background-color:#777;
    text-align:center;
    padding:10px;
    border-style:solid;
    border-width:1px;
}
</style>    
 <header>

    <h1>Xcompany</h1>
    
<div class="city">
    <a href="login.php">Login</a>
    <a href="hello.html">Home</a>
    <a href="registration.php">Registration</a>
</div>

</header>

 <article>
<form action="<?= htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
UserName <br>
<input type="text" name="username" >
<br>
Password <br>
<input type="text" name="password">
 
<br><br>
 
<input type="submit" name="login" value="Login">
 
</form>  
</article>
 <footer>
     <h3>copyright@2020</h3>
</footer>
</body>
</html>
 
<?php
if(isset($_POST['login']))
{
    $con=mysqli_connect("localhost","root","","xcompany");
    if(!$con)
    {
        die("Connection Error: ".mysqli_connect_error()."<br/>");
    }
    //Retrieve Data
 
    $password=$_POST['password'];
    $username=$_POST['username'];
    $sql="SELECT * FROM login WHERE username='$username' AND password='$password'";
   
    $result=mysqli_query($con,$sql);
   
    if(mysqli_num_rows($result)>0)
    {
        $row=mysqli_fetch_array($result);
       
        header("Location:bob.php");
    }
    else
    {
        echo "No data found.<br/>";
    }
 
   
mysqli_close($con);    
}
 
?>