<?php
$link = mysqli_connect("localhost","root","");
mysqli_select_db($link,"test_db");

?>

<!DOCTYPE html>
<html>
<head>
	<title>Create an Account</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="style2.css">

</head>
<body>

<!-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->
<div class="container">
<!-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->
		
<!-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->
				
<!-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->
				
<!-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->

		<form action="#" method="post" class="login-email">
            <p class="login-text" style="font-size: 2rem; font-weight: 800;">Register</p>
			<div class="input-group">
				<input type="text" type="text" placeholder="Username" name="username"  required>
			</div>
			<div class="input-group">
				<input type="email"  placeholder="Email" name="email"  required>
			</div>
			<div class="input-group">
				<input type="password" placeholder="Password" name="password" id="password"  pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"  required>
            </div>
            <div class="input-group">
				<input type="password" id="password1" placeholder="Confirm Password" name="password" value="" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
			</div>
			<div class="input-group">
				<button name="submit" class="btn" value="Sign Up" name = "submit" type="submit">Register</button>
			</div>
			<p class="login-register-text">Have an account? <a href="login.php">Login Here</a>.</p>
		</form>
	
					</div>
					
					
					
					
					
					
					
				
			
<!-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->
	
<!-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->
<?php

if(isset($_POST['submit'])){
	

$n1=$_POST['username'];
$n2=$_POST['password'];
$n3=$_POST['email'];

$stmt="INSERT INTO users (username,password,email)VALUES('$n1','$n2','$n3')";

if(mysqli_query($link,$stmt)){
	header("Location: login.php");
}
else{
	echo "fail";
}
}
?>

</body>
</html>