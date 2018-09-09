<!DOCTYPE html>
<html lang="th">
<head>
  <title>BIB ตุ๊ดตู่</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>
<body>
<?php
include("conn/mycon.php");
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