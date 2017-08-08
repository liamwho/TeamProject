<?php include 'tools/header.php';?>

<section id="breadcrumb">
      <div class="container">
        <ol class="breadcrumb">
          <li><a href="index.php">Dashboard</a></li>
          <li class="active">Clients</li>
        </ol>
      </div>
    </section>

<section id="main">
	<div class="container">

			<?php include 'tools/sidebar.php';?>
		          
			<!-- Main Content 
			===================== -->
			<div class="col-md-9">
			          
				
				
				<!-- Latest Users
				================= -->
				<div class="panel panel-default">
				<div class="panel-heading main-color-bg">
				<h3 class="panel-title">Clients</h3>				
				</div>	                
					<div class="panel-body">
					
					<div class="form-group">
					  <label for="sel1">Filter list:</label>
					  <select class="form-control" sort="filter" onchange="if (this.value) window.location.href=this.value">
					    <option value=''>Please Select</option>
					    <option value=clients.php?sort=clientID>Client ID</option>
					    <option value=clients.php?sort=clientFName>First Name</option>
					    <option value=clients.php?sort=clientLName>Last Name</option>
					  </select>
					</div>
					
					<?php
					if (isset($_GET["sort"])) {
					    $sort = $_GET["sort"];
					}
					if (empty($sort)) $sort = 'clientID';
					?>
					
					<div class="table-responsive"><?php
					  $connection = mysqli_connect("localhost","link192_admin","*192*");
					  mysqli_select_db($connection,"link192_hairsalon");
					  $result=mysqli_query($connection,"select * from client order by $sort");
					  echo "<table class='table table-bordered table-striped'>
					  <thead class='thead-inverse'>
					  <tr>
					  <th>ID #</th>
					  <th>First Name</th>
					  <th>Last Name</th>
					  <th>Contact Number</th>
					  <th>eMail</th>
					  <th>Edit</th>
					  <th>Remove</th>
					  </tr>
					  </thead>
					  <tbody>";
					  while($row=mysqli_fetch_array($result))
					  {
					    $id = $row['clientID'];
					    echo "<tr>
					    <th scope='row'>" . $row['clientID'] . "</th>
					    <td>" . $row['clientFName'] . "</td>
					    <td>" . $row['clientLName'] . "</td>
					    <td>0" . $row['clientPhoneNo'] . "</td>
					    <td>" . $row['clientEmail'] . "</td>
					    <td align='center'> <a class='btn btn-warning' href='view_edit_client.php?clientID=$id'>Edit</a></td>
					    <td align='center'> <a class='btn btn btn-danger' href ='tools/del_Client.php?clientID=$id'><center>Delete</center></a></td>
					    </tr>";
					  }
					  
					echo "</tbody></table>";
					  mysqli_close($connection);
					?>
					</div>
					
					<a id="" href="add_Client.php" class="btn btn-info btn-block" role="button">Enter New Client Details</a>
					<a id="" href="javascript:history.go(0)" class="btn btn-info btn-block" role="button">Refresh List</a>
									
					</div>
				</div> <!-- Latest Users end -->
				
			</div> <!-- Right Side end -->
		</div> <!-- Row End -->
	</div> <!-- Container End -->
</section> <!-- Mian End -->


<?php include 'tools/footer.php';?>