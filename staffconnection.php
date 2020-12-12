<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname= "mydatabase";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql="INSERT INTO staff VALUES(null,'$_POST[name]','$_POST[uname]','$_POST[password]','$_POST[phone]','$_POST[shift]','$_POST[address]','$_POST[gender]')";
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>