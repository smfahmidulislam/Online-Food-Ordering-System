<html>
<head>
<title>Signup</title>
<link rel="stylesheet" type="text/css" href="style.css">	
</head>	
<body>
	<div class="sign-up-form">
		<center>
	<img src="logo.jpg">
	<h1>Sign Up Now</h1>
	<form action="signupConnection.php" method="post">
 		Name: <input type="text" name="name" required/><br><br>
 		Username: <input type="text" name="uname" required/><br><br>
 		Password: <input type="password" name="password" required/><br><br>
		Phone: <input type="text" name="phone" required/><br><br>
		Email: <input type="text" name="email" required/><br><br>
		Address: <input type="text" name="address" required/><br><br>
		Gender: <input type="radio" name="gender" value="male" required> Male<br><br>
        		<input type="radio" name="gender" value="female" required> Female<br><br>
        		<input type="radio" name="gender" value="other" required>Other<br><br>
		
		<input type="submit" />
		<h1>Are you a staff?</h1>
    	<button><a href="staff.php">Staff</button>
		</form>
		</center>>
	</div>
</body>
</html>