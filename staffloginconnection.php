<?php
   include("connection.php");
   session_start();
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      $myusername = mysqli_real_escape_string($conn,$_POST['Username']);
      $mypassword = mysqli_real_escape_string($conn,$_POST['Password']); 
      $sql = "SELECT * FROM staff WHERE C_username = '$myusername' and C_password = '$mypassword'";
      $result = mysqli_query($conn,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $count = mysqli_num_rows($result);
      if($count == 1) {
         $_SESSION['login_staff'] = $myusername;
        header("location: staffhome.php");
      }else {
         $error = "Your Login Name or Password is invalid";
      }
   }
?>