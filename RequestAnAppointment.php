<?php include 'tools/header.php';?>

<?php
	if (isset($_POST["submit"])) {
		$id = $_SESSION['clientID'];
		$name = $_POST['name'];
		$service = $_POST['service'];
		$time = $_POST['time'];
		$human = intval($_POST['human']);
		$from = 'Hair Studio AppointmentForm'; 
		$to = 'hairstudio@link192.com'; 
		$subject = 'Appointment Requestfrom Hair Studio ';
		
		$body ="Client ID: $id\n\nStylist: $name\n\nService: $service\n\nDate & Time: $time";
		// Check if name has been entered
		if (!$_POST['name']) {
			$errName = 'Please enter the stylist name';
		}
		
		// Check if name has been entered and is valid
		if (!$_POST['service']) {
			$errService = 'Please enter your chosen service';
		}
		
		//Check if time has been entered
		if (!$_POST['time']) {
			$errTime = 'Please enter your preferred date and time';
		}
		//Check if simple anti-bot test is correct
		if ($human !== 15) {
			$errHuman = 'Your anti-spam is incorrect';
		}
	// If there are no errors, send the email
	if (!$errName && !$errService && !$errTime && !$errHuman) {
	if (mail ($to, $subject, $body, $from)) {
		$result='<div class="alert alert-success">Thank You! We will be in touch to confirm your appointment</div>';
	} else {
		$result='<div class="alert alert-danger">Sorry there was an error sending your message. Please try again later.</div>';
	}
}
	}
?>

<?php
if (isset($_GET['Service'])) {
$Service = $_GET['Service'];
} else {
$Service = '';
}
?>
<?php
if (isset($_GET['Stylist'])) {
$Stylist= $_GET['Stylist'];
} else {
$Stylist = 'Any';
}
?>

<section id="main">

	
	<div class="container">
	<div class="contentbg">
			<div class="row">
			<!-- SideBar Start 
			===================== -->        
			<div class="col-sm-3">
				<div class="list-group">
				<div class="list-group-item active main-color-bg">
				<span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Main Menu
				</div>
				<a href="index.php" class="list-group-item"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Home </a>
				<a href="about.php" class="list-group-item"><span class="glyphicon glyphicon-info-sign" aria-hidden="true"></span> About </a>
				<a href="services.php" class="list-group-item"><span class="glyphicon glyphicon-th-list" aria-hidden="true"></span> Services </span></a>
				<a href="stylists.php" class="list-group-item"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Stylists </span></a>
				<a href="gallery.php" class="list-group-item"><span class="glyphicon glyphicon-camera" aria-hidden="true"></span> Gallery </span></a>
				<a href="contact.php" class="list-group-item"><span class="glyphicon glyphicon-phone-alt" aria-hidden="true"></span> Contact </a>
				
				</div>
			

				
				<div class="panel panel-info">
				<div class="panel-heading">
				<h3 class="panel-title"><span class="glyphicon glyphicon-calendar" aria-hidden="true"></span> Book Now</h3>
				</div>
				<div class="panel-body" align="center">
				
				<a href="RequestAnAppointment.php" title=""><img src="images/appointment.jpg" class="img-responsive" alt="Contact"><br></a>
				
				</div>
				</div>
				
				
			</div> <!-- Col 3 end -->
		          
			<!-- Main Content 
			===================== -->
			<div class="col-sm-9">
			          
				<!-- Latest Users
				================= -->
				<div class="panel panel-default">
				<div class="panel-heading main-color-bg">
				<h3 class="panel-title">Welcome to Hair Studio</h3>
				</div>	                
					<div class="panel-body">
						<div class="col-sm-12">
						<h1>Request An Appointment</h1>
						
						<?php if (isset($_SESSION['clientName'])) { 
							
						} else { 
							echo '
							<script type="text/javascript">
						           window.location = "login.php"
						        </script>
							'; 
						} 
						?>
						
						
						
						<h3>Hello, <?php echo $who; ?></h3><br>Please complete the form below and one of our team members will contact you to confirm the date and time.<br><br><br>
						
						<form class="form-horizontal" role="form" method="post" action="RequestAnAppointment.php">
							<div class="form-group">
							<label for="name" class="col-sm-2 control-label">Stylist</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" id="name" name="name" placeholder="Stylist Name" value="<?php echo $Stylist; ?>">
								<span class="help-block">ie. Barbara, Christine, Brian or Carsten</span>
								<?php echo "<p class='text-danger'>$errName</p>";?>
							</div>
						</div>
						<div class="form-group">
							<label for="service" class="col-sm-2 control-label">Service</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" id="service" name="service" placeholder="Service Name" value="<?php echo $Service; ?>">
								<span class="help-block">ie. Wash & Blowdry, Colour</span>
								<?php echo "<p class='text-danger'>$errService </p>";?>
							</div>
						</div>
						<div class="form-group">
							<label for="service" class="col-sm-2 control-label">Date & Time</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" id="time" name="time" placeholder="Date & Time" >
								<span class="help-block">ie. April 22 at 3pm</span>
								<?php echo "<p class='text-danger'>$errTime </p>";?>
							</div>
						</div>
						<div class="form-group">
							<label for="human" class="col-sm-2 control-label">11 + 4 = ?</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" id="human" name="human" placeholder="Your Answer">
								<?php echo "<p class='text-danger'>$errHuman</p>";?>
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-10 col-sm-offset-2">
								<input id="submit" name="submit" type="submit" value="Send" class="btn btn-primary">
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-10 col-sm-offset-2">
								<?php echo $result; ?>	
							</div>
						</div>
						</form> 

						</div>
						
										
					</div><!-- Panel Body End -->
				</div> <!-- Latest Users End -->
				
			</div> <!-- Right Side End -->
			
		</div> <!-- Row End -->
		
		
	</div> <!-- Content BG End -->
	</div> <!-- Container End -->
	
</section> <!-- Mian End -->


<?php include 'tools/footer.php';?>