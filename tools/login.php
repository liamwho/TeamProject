<?php
    session_start();
?>

<div align="center"><img src="http://www.link192.com/admin/images/loading.gif" alt="Loading" width="200px" height="200px"></div>

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

$ContactNo=$_POST["ContactNo"];
$eMail=$_POST["eMail"];

if (empty($ContactNo)) {
	header("Location: ../login.php?error=empty");
	exit();
}
if (empty($eMail)) {
	header("Location: ../login.php?error=empty");
	exit();
}
else {
	$sql = "SELECT clientPhoneNo FROM client WHERE clientPhoneNo='$ContactNo'";
	$result = $conn->query($sql);
	$contactcheck = mysqli_num_rows($result);
	
	$sql = "SELECT clientEmail FROM client WHERE clientEmail='$eMail'";
	$result = $conn->query($sql);
	$emailcheck = mysqli_num_rows($result);
	
	if ($contactcheck < 1) {
		header("Location: ../login.php?error=ContactNo");
		exit();
	}
	if ($emailcheck < 1) {
		header("Location: ../login.php?error=eMail");
		exit();
	} else {
		$sql = "SELECT * FROM client WHERE clientPhoneNo='$ContactNo' AND clientEmail='$eMail'";
		$result = $conn->query($sql);
		
		if (!$row = mysqli_fetch_assoc($result)) {
		    echo "Your Username or Password is incorrect!";
		    echo "Error: " . $sql . "<br>" . $conn->error;
		} else {
		    $_SESSION['clientName'] = $row['clientFName'];
		    $_SESSION['clientID'] = $row['clientID'];
		}
		
		$conn->close();
		
		echo '<script type="text/javascript">
		           window.location = "http://www.link192.com/profile.php"
		      </script>';
	}
}

?>


