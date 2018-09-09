<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "MyDB1";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Set Charset
mysqli_set_charset($conn, "utf8");

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// define variables and set to empty values
$name = $brith = $age = $gender = $address = $phone = $email = $size = $com = $why ="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = test_input($_POST["name"]);
  $brith = test_input($_POST["brith"]);
  $age = test_input($_POST["age"]);
  $gender = test_input($_POST["gender"]);
  $address = test_input($_POST["address"]);
  $phone = test_input($_POST["phone"]);
  $email = test_input($_POST["email"]);
  $size = test_input($_POST["size"]);
  $com = test_input($_POST["com"]);
  $why = test_input($_POST["why"]);
  
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
echo $address;
echo "<br>";
echo $phone;
echo "<br>";
echo $email;
echo "<br>";
echo $size;
echo "<br>";
echo $com;
echo "<br>";
echo $why;
echo "<br>";

//insert data
$sql = "INSERT INTO userprofile (name, brith, age, gender, address, phone, email, size, com, why) 
VALUES ('$name', '$brith', '$age', '$gender', '$address', '$phone', '$email', '$size', '$com', '$why')";

//echo $sql."<br>";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>