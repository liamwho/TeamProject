<?php include 'tools/header.php';?>

<section id="breadcrumb">
      <div class="container">
        <ol class="breadcrumb">
          <li><a href="index.php">Dashboard</a></li>
          <li class="active">Employees</li>
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
				<h3 class="panel-title">Employees</h3>
				</div>	                
					<div class="panel-body">
					
					<div class="form-group">
					  <label for="sel1">Filter list:</label>
					  <select class="form-control" id="filter" onchange="if (this.value) window.location.href=this.value">
					    <option value=''>Please Select</option>
					    <option value=employees.php?id=EmployeeID>Employee ID</option>
					    <option value=employees.php?id=FirstName>First Name</option>
					    <option value=employees.php?id=LastName>Last Name</option>
					  </select>
					</div>
					
					<?php
					if (isset($_GET["id"])) {
					    $sort = $_GET["id"];
					}
					if (empty($sort)) $sort = 'employeeID';
					?>
					
					<div class="table-responsive"><?php
					  $connection = mysqli_connect("localhost","link192_admin","*192*");
					  mysqli_select_db($connection,"link192_hairsalon");
					  $result=mysqli_query($connection,"select * from employee order by $sort");
					  echo "<table class='table table-bordered table-striped'>
					  <thead class='thead-inverse'>
					  <tr>
					  <th>#</th>
					  <th>FirstName</th>
					  <th>LastName</th>
					  <th>Phone</th>
					  <th>eMail</th>
					  <th>Edit</th>
					  <th>Remove</th>
					  </tr>
					  </thead>
					  <tbody>";
					  while($row=mysqli_fetch_array($result))
					  {
					    $id = $row['employeeID'];
					    echo "<tr>
					    <th scope='row'>" . $row['employeeID'] . "</th>
					    <td>" . $row['firstName'] . "</td>
					    <td>" . $row['lastName'] . "</td>
					    <td>" . $row['phoneNo'] . "</td>
					    <td>" . $row['email'] . "</td>
					    <td align='center'> <a class='btn btn-warning' href='view_edit_employee.php?employeeID=$id'>Edit</a></td>
					    <td align='center'> <a class='btn btn btn-danger' href ='tools/del_employee.php?employeeID=$id'><center>Delete</center></a></td>
					    </tr>";
					  }
					  
					echo "</tbody></table>";
					  mysqli_close($connection);
					?>
					</div>
					
					<a id="" href="add_Employee.php" class="btn btn-info btn-block" role="button">Add Another</a>
					<a id="" href="javascript:history.go(0)" class="btn btn-info btn-block" role="button">Refresh List</a>
									
					</div>
				</div> <!-- Latest Users end -->
				
			</div> <!-- Right Side end -->
		</div> <!-- Row End -->
	</div> <!-- Container End -->
</section> <!-- Mian End -->


<?php include 'tools/footer.php';?>