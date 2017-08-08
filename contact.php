<?php include 'tools/header.php';?>

<?php
	if (isset($_POST["submit"])) {
		$name = $_POST['name'];
		$email = $_POST['email'];
		$message = $_POST['message'];
		$human = intval($_POST['human']);
		$from = 'Hair Studio Contact Form'; 
		$to = 'hairstudio@link192.com'; 
		$subject = 'Message from Hair Studio ';
		
		$body ="From: $name\n\nE-Mail: $email\n\nMessage:\n $message";
		// Check if name has been entered
		if (!$_POST['name']) {
			$errName = 'Please enter your name';
		}
		
		// Check if email has been entered and is valid
		if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
			$errEmail = 'Please enter a valid email address';
		}
		
		//Check if message has been entered
		if (!$_POST['message']) {
			$errMessage = 'Please enter your message';
		}
		//Check if simple anti-bot test is correct
		if ($human !== 12) {
			$errHuman = 'Your anti-spam is incorrect';
		}
// If there are no errors, send the email
if (!$errName && !$errEmail && !$errMessage && !$errHuman) {
	if (mail ($to, $subject, $body, $from)) {
		$result='<div class="alert alert-success">Thank You! We will be in touch</div>';
	} else {
		$result='<div class="alert alert-danger">Sorry there was an error sending your message. Please try again later.</div>';
	}
}
	}
?>


<section id="main">

	
	<div class="container">
	<div class="contentbg">
			<img src="images/banner_contact.jpg" class="img-responsive" alt="Contact"><br>
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
				<h3 class="panel-title">Our Location @ Hair Studio</h3>
				</div>	                
					<div class="panel-body">
															
						<div>
						
						<div class="row-fluid">
						        <div class="col-sm-12">
						        <h2>Map & Directions</h2>
						        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2291.0338703168823!2d-7.7367792837393035!3d54.95496648034745!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x485feb34e6fbc799%3A0x8a6e7197e663ea57!2sHigh+Rd%2C+Letterkenny%2C+Co.+Donegal%2C+Ireland!5e0!3m2!1sen!2sus!4v1492866215589" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
						    	</div>
							</div>
						</div>
						
						<div class="row-fluid">
						        <div class="col-sm-4">
						    		<h2>Address</h2>
						    		<address>
						    			<strong>Hair Studio</strong><br>
						    			15 High Road<br>
						    			Letterkenny<br>
						    			Donegal<br>
						    			Ireland<br>
						    			F92 A111<br>
						    			Phone: 074 91 22000
						    		</address>
						    	</div>
						    	<div class="col-sm-8">
						    		<h1>Contact Us</h1>
								<form class="form-horizontal" role="form" method="post" action="contact.php">
									<div class="form-group">
										<label for="name" class="col-sm-2 control-label">Name</label>
										<div class="col-sm-10">
											<input type="text" class="form-control" id="name" name="name" placeholder="First & Last Name" value="<?php echo htmlspecialchars($_POST['name']); ?>">
											<?php echo "<p class='text-danger'>$errName</p>";?>
										</div>
									</div>
									<div class="form-group">
										<label for="email" class="col-sm-2 control-label">Email</label>
										<div class="col-sm-10">
											<input type="email" class="form-control" id="email" name="email" placeholder="example@domain.com" value="<?php echo htmlspecialchars($_POST['email']); ?>">
											<?php echo "<p class='text-danger'>$errEmail</p>";?>
										</div>
									</div>
									<div class="form-group">
										<label for="message" class="col-sm-2 control-label">Message</label>
										<div class="col-sm-10">
											<textarea class="form-control" rows="4" name="message"><?php echo htmlspecialchars($_POST['message']);?></textarea>
											<?php echo "<p class='text-danger'>$errMessage</p>";?>
										</div>
									</div>
									<div class="form-group">
										<label for="human" class="col-sm-2 control-label">5 + 7 = ?</label>
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
						</div>
						</div>
								
					</div><!-- Panel Body End -->
				</div> <!-- Latest Users End -->
				
				
				
			</div> <!-- Right Side End -->
			<?php include 'tools/team.php';?>
		</div> <!-- Row End -->
		

		
	</div> <!-- Content BG End -->
	</div> <!-- Container End -->
	
</section> <!-- Mian End -->


<?php include 'tools/footer.php';?>