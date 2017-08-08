<?php include 'tools/header.php';?>

<section id="main">

	
	<div class="container">
	<div class="contentbg">
			<?php include 'tools/sidebar.php';?>
		          
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
						
						
						<?php 
						if (isset($_SESSION['clientName'])) { 
							 
						} else { 
							echo '<script type="text/javascript">
							           window.location = "http://www.link192.com/login.php"
							      </script>'; 
						} 
						?>
						
						<h2>Welcome back, <?php echo $who; ?></h2>
						
						<div class="panel-group" id="accordion">
						  <div class="panel panel-default">
						    <div class="panel-heading">
						      <h4 class="panel-title">   <!-- ===============   PROFILE   =============== -->
						        <a data-toggle="collapse" data-parent="#accordion" href="#collapse1"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Profile</a>
						      </h4>
						    </div>
						    <div id="collapse1" class="panel-collapse collapse in">
						      <div class="panel-body">
						      
						      <h3>Profile</h3>
						      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
						      	      <?php
								$id = $whoID;
								
								$connection = mysqli_connect("localhost","link192_admin","*192*");
								mysqli_select_db($connection,"link192_hairsalon");
								
								$result = mysqli_query($connection,"SELECT * FROM client WHERE clientID  = '$id'");
								$print = mysqli_fetch_array($result);
								if (!$result) 
								{
									die("Error: Data not found..");
								}
									$FirstName=$print['clientFName'] ;
									$LastName=$print['clientLName'] ;					
									$ContactNo=$print['clientPhoneNo'] ;
									$eMail=$print['clientEmail'] ;
								
								if(isset($_POST['save']))
								{	
									$FirstName= $_POST['FirstName'];
									$LastName= $_POST['LastName'];
									$ContactNo= $_POST['ContactNo'];
									$eMail= $_POST['eMail'];
								
									mysqli_query($connection, "UPDATE client SET clientFName ='$FirstName', clientLName ='$LastName', clientPhoneNo = $ContactNo, clientEmail ='$eMail' WHERE clientID = '$id'")or die("Cant Connect"); 
												
									echo '<div class="alert alert-success alert-dismissable">
									<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
									<strong>Success!</strong> Record has been updated.
									</div>';									
									
									header("Location: index.php");			
								}
								mysqli_close($connection);
								?>
							
						      <div class="table-responsive">
							<form method="post">
							<table class='table table-bordered table-striped'>
								<tr>
									<td>First Name:</td>
									<td><?php echo $FirstName ?></td>
								</tr>
								<tr>
									<td>Last Name</td>
									<td><?php echo $LastName ?></td>
								</tr>
								<tr>
									<td>Contact No</td>
									<td>0<?php echo $ContactNo ?></td>
								</tr>
								<tr>
									<td>eMail</td>
									<td><?php echo $eMail ?></td>
								</tr>
								
							</table>
							</div>
						      
						      </div>
						    </div>
						  </div>
						  <div class="panel panel-default">
						    <div class="panel-heading">
						      <h4 class="panel-title">   <!-- ===============   EDIT PROFILE   =============== -->
						        <a data-toggle="collapse" data-parent="#accordion" href="#collapse2"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span> Edit Profile</a>
						      </h4>
						    </div>
						    <div id="collapse2" class="panel-collapse collapse">
						      <div class="panel-body">
						      
						      <h3>Edit Profile</h3>
						      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
							      <?php
								$id = $whoID;
								
								$connection = mysqli_connect("localhost","link192_admin","*192*");
								mysqli_select_db($connection,"link192_hairsalon");
								
								$result = mysqli_query($connection,"SELECT * FROM client WHERE clientID  = '$id'");
								$print = mysqli_fetch_array($result);
								if (!$result) 
								{
									die("Error: Data not found..");
								}
									$FirstName=$print['clientFName'] ;
									$LastName=$print['clientLName'] ;					
									$ContactNo=$print['clientPhoneNo'] ;
									$eMail=$print['clientEmail'] ;
								
								if(isset($_POST['save']))
								{	
									$FirstName= $_POST['FirstName'];
									$LastName= $_POST['LastName'];
									$ContactNo= $_POST['ContactNo'];
									$eMail= $_POST['eMail'];
								
									mysqli_query($connection, "UPDATE client SET clientFName ='$FirstName', clientLName ='$LastName', clientPhoneNo = $ContactNo, clientEmail ='$eMail' WHERE clientID = '$id'")or die("Cant Connect"); 
																					
									
									header("Location: index.php");			
								}
								mysqli_close($connection);
								?>
						      <div class="table-responsive">
							<form method="post">
							<table class='table table-bordered table-striped'>
								<tr>
									<td>First Name:</td>
									<td><input type="text" name="FirstName" value="<?php echo $FirstName ?>"/></td>
								</tr>
								<tr>
									<td>Last Name</td>
									<td><input type="text" name="LastName" value="<?php echo $LastName ?>"/></td>
								</tr>
								<tr>
									<td>Contact No</td>
									<td><input type="number" maxlength="10" name="ContactNo" value="<?php echo $ContactNo ?>"/></td>
								</tr>
								<tr>
									<td>eMail</td>
									<td><input type="email" name="eMail" value="<?php echo $eMail ?>"/></td>
								</tr>
								<tr>
									<td>&nbsp;</td>
									<td><input type="submit" name="save" value="Update" /></td>
								</tr>
							</table>
							</div>
						      
						      </div>
						    </div>
						  </div>
						  <div class="panel panel-default">
						    <div class="panel-heading">
						      <h4 class="panel-title">   <!-- ===============   My Appointments   =============== -->
						        <a data-toggle="collapse" data-parent="#accordion" href="#collapse3"><span class="glyphicon glyphicon-tasks" aria-hidden="true"></span> My Appointments</a>
						      </h4>
						    </div>
						    <div id="collapse3" class="panel-collapse collapse">
						      <div class="panel-body">
						      
						      <h3>My Appointments</h3>
						      <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
						      <div class="table-responsive">
						      <?php
								$id = $whoID;
								
								$connection = mysqli_connect("localhost","link192_admin","*192*");
								mysqli_select_db($connection,"link192_hairsalon");
								
								$result = mysqli_query($connection,"SELECT * FROM appointment WHERE appointment_clientID = '$id'");
								
								
								echo "<table class='table table-bordered table-striped'>
								  <thead class='thead-inverse'>
								  <tr>
								  <th>ID #</th>
								  <th>Date</th>
								  <th>Start</th>
								  <th>End</th>
								  <th>Employee</th>
								  <th>Service</th>
								  <th>Cancel</th>
								  </tr>
								  </thead>
								  <tbody>";
								  while($row=mysqli_fetch_array($result))
								  {
								    $id = $row['appointmentID'];
								    echo "<tr>
								    <th scope='row'>" . $row['appointmentID'] . "</th>
								    <td>" . $row['appointmentDate'] . "</td>
								    <td>" . $row['appointmentTime'] . "</td>
								    <td>" . $row['appointmentEndTime'] . "</td>
								    <td>" . $row['appointment_employeeID'] . "</td>
								    <td>" . $row['appointment_serviceID'] . "</td>
								    <td align='center'> <a class='btn btn-danger' href ='tools/cancel_appointment.php?appointmentID=$id'><center>Cancel</center></a></td>
								    </tr>";
								  }
								  
								echo "</tbody></table>";
								
								
								mysqli_close($connection);
								?>
								</div> <!-- table End -->
								
								<a id="" href="RequestAnAppointment.php" class="btn btn-info btn-block" role="button">Request An Appointment</a>
								<a id="" href="javascript:history.go(0)" class="btn btn-info btn-block" role="button">Refresh List</a>
						      
						      </div>
						    </div>
						  </div>
						</div>
												

												
										
					</div><!-- Panel Body End -->
				</div> <!-- Latest Users End -->
				
			</div> <!-- Right Side End -->
			
		</div> <!-- Row End -->
		
		<?php include 'tools/service.php';?>
		<?php include 'tools/team.php';?>
		
		
	</div> <!-- Content BG End -->
	</div> <!-- Container End -->
	
</section> <!-- Mian End -->


<?php include 'tools/footer.php';?>