<?php include 'tools/header.php';?>


<section id="main">

	
	<div class="container">
	<div class="contentbg">
			
			<img src="images/banner_user.jpg" class="img-responsive" alt="Create Account"><br>
			<?php include 'tools/sidebar.php';?>
			
		          
			<!-- Main Content 
			===================== -->
			<div class="col-sm-9">
			          
				<!-- Latest Users
				================= -->
				<div class="panel panel-default">
				<div class="panel-heading main-color-bg">
				<h3 class="panel-title">Create Account</h3>
				</div>	                
					<div class="panel-body">
					<div class="container">
					
						<?php
						$url = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
						if (strpos($url, 'error=empty') !== false){
							echo '<h3><strong style="color: red;">Information!</strong> Please complete all fileds. <a href="createAccount.php"><button>Clear</button></a></h3><br>';
						}
						elseif (strpos($url, 'error=eMail') !== false){
							echo '<h3><strong style="color: red;">Information!</strong> This email is already registered. <a href="createAccount.php"><button>Clear</button></a></h3><br>';
						}
						?>
						<br>
						<?php 
						if (isset($_SESSION['clientName'])) { 
							echo '
							Hi there, '.$_SESSION['clientName'].'<br><br><a href="tools/logout.php"><strong>Not You Log Out!</strong></a>
							<br><br><a href="profile.php"><strong>Go To My Profile</strong>
							'; 
						} else { 
							echo '
							<form class="form-horizontal" role="form" method="POST" action="tools/db_insertClient.php">
					    
							    <div class="form-group">
							      <label class="control-label col-sm-2" for="name">First Name:</label>
							      <div class="col-sm-6">
							        <input type="text" class="form-control" id="name" name="FirstName" placeholder="Enter First Name">
							      </div>
							    </div>
							    
							    <div class="form-group">
							      <label class="control-label col-sm-2" for="name">Last Name:</label>
							      <div class="col-sm-6">
							        <input type="text" class="form-control" id="name" name="LastName" placeholder="Enter Surname">
							      </div>
							    </div>
							    
							    <div class="form-group">
							      <label class="control-label col-sm-2" for="name">Mobile:</label>
							      <div class="col-sm-6">
							        <input type="number" maxlength="10" class="form-control" id="name" name="ContactNo" placeholder="Enter Mobile Number">
							        <span class="help-block">ie. 086 456 2252</span>
							      </div>
							    </div>
							    
							    <div class="form-group">
							      <label class="control-label col-sm-2" for="name">eMail:</label>
							      <div class="col-sm-6">
							        <input type="email" class="form-control" id="name" name="eMail" placeholder="Enter eMail">
							      </div>
							    </div>
							
							    <div class="form-group">        
							      <div class="col-sm-offset-2 col-sm-6">
							        <button type="submit" class="btn btn-default">Submit</button>
							      </div>
							    </div>
							  </form>
							  
							  </div>
					
							<div class="col-sm-offset-2 col-sm-6 text-center"><hr><strong>----- OR -----</strong><hr><br></div>
							
							<a href="login.php" class="btn btn-warning" role="button" style="width: 100%"><span class="glyphicon glyphicon-user"></span> <strong>Login Now</strong></a>
							
							
							
							
							</div>
							  
							'; 
						} 
						?>

					
				</div> <!-- Latest Users end -->
				
			</div> <!-- Right Side End -->
			
		</div> <!-- Row End -->
		
		<?php include 'tools/footer_sub.php';?>
		
				
	</div> <!-- Content BG End -->
	</div> <!-- Container End -->
	
</section> <!-- Mian End -->


<?php include 'tools/footer.php';?>