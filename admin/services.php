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
				<h3 class="panel-title">Latest Registered</h3>
				</div>	                
					<div class="panel-body">
					
					<div class="table-responsive" >
					
					<?php
					  $connection = mysqli_connect("localhost","link192_admin","*192*");
					  mysqli_select_db($connection,"link192_hairsalon");
					  $result=mysqli_query($connection,"select * from service order by serviceID");
					  echo "<table class='table table-bordered table-striped'>
					  <thead class='thead-inverse'>
					  <tr>
					  <th>ID #</th>
					  <th>Service</th>
					  <th>Price</th>
					  <th>Duration</th>
					  <th>Description</th>
					  <th>Edit</th>
					  <th>Delete</th>
					  <th>Appointment</th>
					  </tr>
					  </thead>
					  <tbody>";
					  while($row=mysqli_fetch_array($result))
					  {
					    $id = $row['serviceID'];
					    echo "<tr>
					    <th scope='row'>" . $row['serviceID'] . "</th>
					    <td>" . $row['serviceName'] . "</td>
					    <td>" . $row['servicePrice'] . "</td>
					    <td>0" . $row['serviceDuration'] . "</td>
					    <td>" . $row['clientEmail'] . "</td>
					    <td align='center'> <a class='btn btn-warning' href='view_edit_service.php?serviceID=$id'>Edit</a></td>
					    <td align='center'> <a class='btn btn-danger' href ='tools/del_service.php?serviceID=$id'>Delete</center></a></td>
					    <td align='center'> <a class='btn btn-success' href ='#'><center>Book Now</center></a></td>
					    </tr>";
					  }
					  
					echo "</tbody></table>";
					  mysqli_close($connection);
					?>
					</div>
					
					<a id="" href="add_service.php" class="btn btn-info btn-block" role="button">Enter New Service Details</a>
					<a id="" href="javascript:history.go(0)" class="btn btn-info btn-block" role="button">Refresh List</a>
									
					</div>
				</div> <!-- Latest Users end -->
				
			</div> <!-- Right Side end -->
		</div> <!-- Row End -->
		
		
	</div> <!-- Container End -->
</section> <!-- Mian End -->


<?php include 'tools/footer.php';?>