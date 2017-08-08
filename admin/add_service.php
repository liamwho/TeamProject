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
				<h3 class="panel-title">Add Client</h3>
				</div>	                
					<div class="panel-body">
										
					
					<div class="container">
					    <form class="form-horizontal" role="form" method="POST" action="tools/db_insertService.php">
					  
					    
					    <div class="form-group">
					      <label class="control-label col-sm-2" for="name">Service Name:</label>
					      <div class="col-sm-6">
					        <input type="text" required="required" class="form-control" id="name" name="ServiceName" placeholder="Enter Service Name">
					      </div>
					    </div>
					    
					    <div class="form-group">
					      <label class="control-label col-sm-2" for="name">Service Price:</label>
					      <div class="col-sm-6">
					        <input type="text" required="required" class="form-control" id="name" name="ServicePrice" placeholder="Enter Price">
					      </div>
					    </div>
					    
					    <div class="form-group">
					      <label class="control-label col-sm-2" for="name">Service Duration:</label>
					      <div class="col-sm-6">
					        <input type="number" required="required" class="form-control" id="name" name="ServiceDuration" placeholder="Enter Duration">
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