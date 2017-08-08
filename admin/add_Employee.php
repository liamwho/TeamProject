<?php include 'tools/header.php';?>

<section id="main">
	<div class="container">
	
		<?php include 'tools/sidebar.php';?>
		          
			<!-- Main Content 
			===================== -->
			<div class="col-md-9">
			          
				<?php include 'tools/overview.php';?>
				
				<!-- Latest Users
				================= -->
				<div class="panel panel-default">
				<div class="panel-heading main-color-bg">
				<h3 class="panel-title">Add Employee</h3>
				</div>	                
					<div class="panel-body">
					
					
					<div class="container">
					    <form class="form-horizontal" role="form" method="POST" action="tools/db_insertEmployee.php">
					  
					    <div class="form-group">
					      <label class="control-label col-sm-2" for="name">First Name:</label>
					      <div class="col-sm-6">
					        <input type="text" required="required" class="form-control" id="name" name="FirstName" placeholder="Enter First Name">
					      </div>
					    </div>
					    
					    <div class="form-group">
					      <label class="control-label col-sm-2" for="name">Last Name:</label>
					      <div class="col-sm-6">
					        <input type="text" required="required" class="form-control" id="name" name="LastName" placeholder="Enter Surname">
					      </div>
					    </div>
					    					       
					    <div class="form-group">
					      <label class="control-label col-sm-2" for="name">Mobile:</label>
					      <div class="col-sm-6">
					        <input type="number" required="required" class="form-control" id="name" name="Phone" placeholder="Enter Mobile Number">
					      </div>
					    </div>
					    
					    <div class="form-group">
					      <label class="control-label col-sm-2" for="name">eMail:</label>
					      <div class="col-sm-6">
					        <input type="email" required="required" class="form-control" id="name" name="eMail" placeholder="Enter eMail">
					      </div>
					    </div>
					
					    <div class="form-group">        
					      <div class="col-sm-offset-2 col-sm-6">
					        <button type="submit" class="btn btn-default">Submit</button>
					      </div>
					    </div>
					  </form>
					</div>
					
					
					
					
					</div>
				</div> <!-- Latest Users end -->
				
			</div> <!-- Right Side end -->
		</div> <!-- Row End -->
		
	</div> <!-- Container End -->
</section> <!-- Mian End -->

<?php include 'tools/footer.php';?>