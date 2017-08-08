			
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
				
				
			</div> <!-- Col 3 end -->