<html>
<head>
<title>Signup</title>
<link rel="stylesheet" type="text/css" href="staffstyle.css">	
</head>	
<body>
	<div class="sign-up-form">
		<center>
	<img src="logo.jpg">
	<h1>Sign Up Now</h1>
	<form action="staffconnection.php" method="post">
 		Name: <input type="text" name="name" required/><br><br>
 		Username: <input type="text" name="uname" required/><br><br>
 		Password: <input type="password" name="password" required/><br><br>
		Phone: <input type="text" name="phone" required/><br><br>
		Shift: <input type="radio" name="shift" value="8 am-2 pm" required> 8 am-2 pm<br><br>
        	   <input type="radio" name="shift" value="2 pm-10 pm" required> 2 pm-10 pm<br><br>
        Address: <input type="text" name="address" required/><br><br>	   
		Gender: <input type="radio" name="gender" value="male" required> Male<br><br>
        		<input type="radio" name="gender" value="female" required> Female<br><br>
        		<input type="radio" name="gender" value="other" required>Other<br><br>

        
		<input type="submit" />
		
		</form>
		<button><a href="signup.php">Back</button>
			</center>>
	</div>
</body>
</html>