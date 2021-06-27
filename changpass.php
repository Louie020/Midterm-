<!DOCTYPE html>
<html>
<head>
	<title>Change Password</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="style2.css">
</head>
<body>
<div class="next">

<div class="container">
     <form action="foxcheck.php" method="post" class="login-email">
     	<center><p><h2>FORGOT PASSWORD</h2></p></center><br>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>

          <?php if (isset($_GET['success'])) { ?>
               <p class="success"><?php echo $_GET['success']; ?></p>
          <?php } ?>


          <?php if (isset($_GET['uname'])) { ?>
			<div class="input-group">
               <input type="text" 
                      name="username" 
                      placeholder="Username"
					  class="form-control"
                      value="<?php echo $_GET['uname']; ?>"><br>
					  </div>
          <?php }else{ ?>
			<div class="input-group">
               <input type="text" 
                      name="uname" 
					  class="form-control"
                      placeholder="Username"><br>
					  
					  </div>
          <?php }?>


		  <div class="input-group">
     	<input type="password" 
                 name="password" 
				 class="form-control"
                 placeholder="Password"><br>
				 </div>
				 <div class="input-group">
          <input type="password" 
                 name="re_password" 
				 class="form-control"
                 placeholder=" Confirm Password"><br>
				 </div>

<div class="input-group">
     	<input type="submit" class="btn btn-primary" value="Update Password">
		 </div> 
	<center>	<a href="index.php" class="ca">Already have an account?</a><br><br></center>
     </form>
	 </div> 
</body>
</html>