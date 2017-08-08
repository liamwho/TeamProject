 <?php
    session_start();
?>
<?php
  $who = $_SESSION['clientName'];
  $whoID = $_SESSION['clientID'];
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <base href="http://www.link192.com/hair/">
    <title>Hair Studio | Welcome</title>    
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body>
  
    <nav class="navbar navbar-default">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="mailto:hairsalon@link192.com?subject=Hair Studio Information Request">info@hairstudio.com </a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li><a href="index.php">Home</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="services.php">Services</a></li>
            <li><a href="stylists.php">Stylists</a></li>
            <li><a href="gallery.php">Gallery</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li><a href="RequestAnAppointment.php">Appointment</a></li>
            
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><?php if (isset($_SESSION['clientName'])) { echo "Welcome, ".$_SESSION['clientName']; } else { echo '<a href="login.php">Log In</a>'; } ?></li>
            <li><?php if (isset($_SESSION['clientName'])) { echo '<a href="tools/logout.php">Log Out</a>'; } else { echo '<a href="createAccount.php">Register</a>'; } ?></li>
          </ul>
          
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <header id="header">
      <div class="container">
        <div class="row">
          <div class="col-lg-9 col-md-5">
            <h1><span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Hair Studio <small><a href="tel:074 91 22000">Telephone: 074 91 22000</a></small></h1>
          </div>
          <div class="col-lg-3 col-md-5">
          	<div class="social">
            	<?php if (isset($_SESSION['clientName'])) { 
            		echo '
            		<!--Facebook-->
			<a href="http://www.facebook.com" target="_blank"><i class="fa fa-facebook-official" style="font-size:48px;color:white"></i></a>
			<!--Twitter-->
			<a href="http://www.twitter.com" target="_blank"><i class="fa fa-twitter-square" style="font-size:48px;color:white"></i></a>
			<!--Youtube-->
			<a href="http://www.youtube.com" target="_blank"><i class="fa fa-youtube-square" style="font-size:48px;color:white"></i></a>
			<!--Skype-->
			<a href="skype:liam_who?call" ><i class="fa fa-skype" style="font-size:48px;color:white"></i></a>
			<!--Profile-->
			<a href="profile.php" target="_self"><i class="fa fa-user" style="font-size:48px;color:white"></i></a>
            		'; 
            	} else { 
            		echo '
            		<!--Facebook-->
			<a href="http://www.facebook.com" target="_blank"><i class="fa fa-facebook-official" style="font-size:48px;color:white"></i></a>
			<!--Twitter-->
			<a href="http://www.twitter.com" target="_blank"><i class="fa fa-twitter-square" style="font-size:48px;color:white"></i></a>
			<!--Youtube-->
			<a href="http://www.youtube.com" target="_blank"><i class="fa fa-youtube-square" style="font-size:48px;color:white"></i></a>
			<!--Skype-->
			<a href="skype:liam_who?call" ><i class="fa fa-skype" style="font-size:48px;color:white"></i></a>
            		'; 
            	}
            	?>

		
		
		</div>
          </div>
        </div>
      </div>
    </header>
    <?php include tools.php ?>
    
