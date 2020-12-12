<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname= "mydatabase";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql="INSERT INTO user VALUES(null,'$_POST[name]','$_POST[username]','$_POST[password]','$_POST[phone]','$_POST[email]','$_POST[address]','$_POST[gender]')";
if ($conn->query($sql) === TRUE){
    header("location: loginpage.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>