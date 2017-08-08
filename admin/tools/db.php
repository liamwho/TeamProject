<?php  
	$connection = mysql_connect('localhost', 'link192_admin', '*192*');
	 if (!$connection)
    {
	 die('Could not connect: ' . mysql_error());
	}
	mysql_select_db("link192_hairsalon", $connection);
?>