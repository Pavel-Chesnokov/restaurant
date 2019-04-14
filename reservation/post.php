<?php
$name = $_POST['name'];
$date = $_POST['date'];
$email = $_POST['email'];
$number =$_POST['number'];

$servername = "localhost";
$database = "restaurant";
$nametable = "reservations";
$username = "root";
$password = "";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
}
 
echo "Connected successfully";


$sql = "INSERT INTO reservations (name,email,number,date) VALUES ('$name','$email','$number','$date')";


if (mysqli_query($conn, $sql)) {
      echo "New record created successfully";
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);



?>