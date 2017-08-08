<?php
  include ("db.php");  

	$id =$_REQUEST['appointmentID'];
	
	
	// sending query
	mysql_query("DELETE FROM appointment WHERE appointmentID= '$id'")
	or die("error");  	
	
	header("Location: http://www.link192.com/profile.php");
?> 