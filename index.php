<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="style2.css">
	
</head>
<body>

     

	 <div class="next">

        <div class="container">
		<form action="login.php" method="post" class="login-email">
			<p class="login-text" style="font-size: 2rem; font-weight: 800;">Login</p>
			<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
			<div class="input-group">
				<input type="text" placeholder="Username" name="uname" class="form-control"  required>
			</div>
			<div class="input-group">
				<input type="password" placeholder="Password" name="password" class="form-control" required>
			</div>
			<div class="input-group">
				<button name="submit" class="btn btn-primary" value="Login">Login</button>
			</div>
			<a href="logout.php" class="ca"></a><br/><br>
			<p class="login-register-text"><a href="signup.php">Create Account</a>.</p>
			<p class="login-register-text"><a href="changpass.php">Forgot Password</a>.</p>

		</form>
	</div>

</body>
</html>