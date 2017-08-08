<?php
  include ("db.php");  

	$id =$_REQUEST['employeeID'];
	
	
	// sending query
	mysql_query("DELETE FROM employee WHERE employeeID = '$id'")
	or die(mysql_error());  	
	
	header("Location: /admin/employees.php");
?> 