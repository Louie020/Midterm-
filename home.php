<html>
<title>Home page</title>
<head>

<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['username'])) {

 ?>


	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    
    <title>Time Lapse </title>
    
    <link href="css/bootstrap.css" rel="stylesheet" />
	<link href="css/coming-sssoon.css" rel="stylesheet" />  
    
    <!--     Fonts     -->
    <link href="http://netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Grand+Hotel' rel='stylesheet' type='text/css'>
  
</head>

<body>


<div class="main" style="background-image: url()">
        <video id="video_background" preload="auto" autoplay="true" loop="loop" muted="muted" volume="0"> 
            <source src="http://coming-sssoon.paperplane.io/video/time.webm" type="video/webm"> 
            <source src="2.mp4" type="video/mp4"> 
            Video not supported 
        </video>
<!--    Change the image source '/images/video_bg.jpg')" with your favourite image.     -->
    
    <div class="cover black" data-color="black"></div>
     
<!--   You can change the black color for the filter with those colors: blue, green, red, orange       -->

    <div class="container">
        <h1 class="logo cursive">
            Time Lapse
        </h1>
<!--  H1 can have 2 designs: "logo" and "logo cursive"           -->
        
        <div class="content">
            <h4 class="motto">Really awesome time lapse of a beautiful city.</h4>
            <div class="subscribe">
                <h5 class="info-text">
                Welcome, <?php echo $_SESSION['username']; ?>
                </h5>
                <div class="row">
                    
                          <center>
                          <button type="submit" class="btn btn-warning btn-fill"> <a href="display.php" >View Activity</a> </button>
						  </center>
                        

                </div>
            </div>
        </div>
    </div>
    <div class="footer">
      <div class="container">
      <a href= "logout.php"><button>Logout</button></a>
      </div>
    </div>
 </div>
</body>
  
</html>
<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>  
