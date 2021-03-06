<div class="hidden-md hidden-lg">
<?php
	if (isset($_POST["submit"])) {
		$name = $_POST['name'];
		$email = $_POST['email'];
		$message = $_POST['message'];
		$human = intval($_POST['human']);
		$from = 'Hair Studio Callback Form'; 
		$to = 'hairstudio@link192.com'; 
		$subject = 'Callback Request from website';
		
		$body ="From: $name\n\nE-Mail: $email\n\nCallback Number: $message";
		// Check if name has been entered
		if (!$_POST['name']) {
			$errName = 'Please enter your name';
		}
		
		// Check if email has been entered and is valid
		if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
			$errEmail = 'Please enter a valid email';
		}
		
		//Check if message has been entered
		if (!$_POST['message']) {
			$errMessage = 'Please enter information';
		}
		//Check if simple anti-bot test is correct
		if ($human !== 5) {
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
			
			<div class="row">
			<!-- Sub Footer Start 
			===================== -->        
			<div class="col-sm-12">
							
				<div class="panel panel-info">
				<div class="panel-heading">
				<h3 class="panel-title"><span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Call Back Request</h3>
				</div>
				<div class="panel-body" align="center">
				
				<form class="form-horizontal" role="form" method="post" action="index.php">
					<div class="form-group">
						<label for="name" class="col-sm-12 text-left">Name</label>
						<div class="col-sm-12">
							<input type="text" class="form-control" id="name" name="name" placeholder="First & Last Name" value="<?php echo htmlspecialchars($_POST['name']); ?>">
							<?php echo "<p class='text-danger'>$errName</p>";?>
						</div>
					</div>
					<div class="form-group">
						<label for="email" class="col-sm-12 text-left">Email</label>
						<div class="col-sm-12">
							<input type="email" class="form-control" id="email" name="email" placeholder="example@domain.com" value="<?php echo htmlspecialchars($_POST['email']); ?>">
							<?php echo "<p class='text-danger'>$errEmail</p>";?>
						</div>
					</div>
					<div class="form-group">
						<label for="message" class="col-sm-12 text-left">Mobile Number</label>
						<div class="col-sm-12">
							<textarea class="form-control" rows="1" name="message"><?php echo htmlspecialchars($_POST['message']);?></textarea>
							<?php echo "<p class='text-danger'>$errMessage</p>";?>
						</div>
					</div>
					<div class="form-group">
						<label for="human" class="col-sm-12 text-left">2 + 3 = ?</label>
						<div class="col-sm-12">
							<input type="text" class="form-control" id="human" name="human" placeholder="Your Answer">
							<?php echo "<p class='text-danger'>$errHuman</p>";?>
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-12">
							<input id="submit" name="submit" type="submit" value="Request Call" class="btn btn-primary">
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-12">
							<?php echo $result; ?>	
						</div>
					</div>
				</form> 
				
				</div>
				</div>
				
				
			</div> <!-- Col 12 end -->
</div>