<?php
$name = $email =$bday=$gender=$degree=$blg= "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = test_input($_POST["name"]);
   $email = test_input($_POST["email"]);
  $bday =test_input($_POST["bday"]);
  $gender=test_input($_POST["gender"]);
  $degree =test_input($_POST["degree"]);
  $blg =test_input($_POST["blg"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
  echo $name;
  echo "<br>";
  echo $email;
  echo "<br>";
  echo $bday;
  echo "<br>";
  echo $gender;
  echo "<br>";
  echo $degree;
  echo "<br>";
  echo $blg;


?>