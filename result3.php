<?php
// define variables and set to empty values
$name = $brith = $age = $gender = $phone = $email = $size = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = test_input($_POST["name"]);
  $brith = test_input($_POST["brith"]);
  $age = test_input($_POST["age"]);
  $gender = test_input($_POST["gender"]);
  $phone = test_input($_POST["phone"]);
  $email = test_input($_POST["email"]);
  $size = test_input($_POST["size"]);
  
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $brith;
echo "<br>";
echo $age;
echo "<br>";
echo $gender;
echo "<br>";
echo $phone;
echo "<br>";
echo $email;
echo "<br>";
echo $size;
?>