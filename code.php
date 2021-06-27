<html>
	<head>
				<style>
		body{
			background-image: url('http://getwallpapers.com/wallpaper/full/a/5/d/544750.jpg');
 			background-size: cover;
			background-repeat: no-repeat;
			height: 100%;
			font-family: 'Poppins', sans-serif;
		}
		.boxer{
			width: 320px;
			height: 400px;
		
			color: dimgray;
			top: 50%;
			left: 50%;
			position: absolute;
			transform: translate(-50%, -50%);
			box-sizing: border-box;
			padding: 30px 30px;
		}
		.pik{
			width: 100px;
			height: 100px;
			border-radius: 50%;
			position: absolute;
			top: -50px;
			left: calc(50% - 50px);
		}
		.h1{
			margin: 0;
			padding: 0 0 20px;
			text-align: center;
			font-size: 22px;
		}
		.boxer p {
			margin: 0;
			padding: 0;
			font-weight: bold;
		}
		.boxer input{
			width: 100%;
			margin-bottom: 20px;
		}
		.boxer input[type="text"], input[type="password"]{
			border: none;
			border-bottom: 1px solid #fff;
			background: transparent;
			outline: none;
			height: 40px;
			color: black;
			font-size: 16px;	
		}
		.boxer input[type="submit"]{
			border: none;
			outline: none;
			height: 40px;
			background: #161240;
			color: #fff;
			font-size: 18px;
			border border-radius: 20px;
		}
</style>
		<title>
			
			</title>
		</head>
	<body>
		<form action="codex.php" method="post">
			<div class="boxer">
		
		<center><p><h2>Enter your Username</h2></p></center>
		<br><br><br>
			
          <?php if (isset($_GET['uname'])) { ?>
               <input type="text" 
                      name="username" 
                      placeholder="Username"
                      value="<?php echo $_GET['uname']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="uname" 
                      placeholder="Username"><br>
          <?php }?>
			<input type="submit" value="Send">
		</form>
	<?php 
?> </div>
		</body>
	</html>

