<?php
error_reporting(0);
$servername = "localhost";
$username = "root";
$password = "password";
$dbname = "ecommerceweb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$productname=$_POST['productname'];  $price=$_POST['price'];  $description=$_POST['description'];  $imagename=$_POST['imagename'];  $specialoffer=$_POST['specialoffer']; 

$sql = "INSERT INTO products (productname, price, description, imagename, specialoffer)
VALUES ('$productname', '$price', '$description', '$imagename',	'$specialoffer')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>