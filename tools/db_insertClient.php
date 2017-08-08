<div align="center"><img src="http://www.link192.com/admin/images/loading.gif" alt="Chania" width="200px" height="200px"></div>

<?php
$servername = "localhost";
$username = "link192_admin";
$password = "*192*";
$dbname = "link192_hairsalon";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$FirstName=$_POST["FirstName"];
$LastName=$_POST["LastName"];
$ContactNo=$_POST["ContactNo"];
$eMail=$_POST["eMail"];

if (empty($FirstName)) {
	header("Location: ../createAccount.php?error=empty");
	exit();
}
if (empty($LastName)) {
	header("Location: ../createAccount.php?error=empty");
	exit();
}
if (empty($ContactNo)) {
	header("Location: ../createAccount.php?error=empty");
	exit();
}
if (empty($eMail)) {
	header("Location: ../createAccount.php?error=empty");
	exit();
}
else {
	$sql = "SELECT clientEmail FROM client WHERE clientEmail='$eMail'";
	$result = $conn->query($sql);
	$emailcheck = mysqli_num_rows($result);
	if ($emailcheck > 0) {
		header("Location: ../createAccount.php?error=eMail");
		exit();
	} else {
		$sql = "INSERT INTO client (clientFName, clientLName, clientPhoneNo, clientEmail) 
		VALUES ('$FirstName', '$LastName', $ContactNo, '$eMail')";
		
		if ($conn->query($sql) === TRUE) {
		    echo "success";
		} else {
		    echo "Error: " . $sql . "<br>" . $conn->error;
		}
		$conn->close();
		
		echo '<script type="text/javascript">
		           window.location = "http://www.link192.com/createAccount.php"
		      </script>';
	}
}


?>


