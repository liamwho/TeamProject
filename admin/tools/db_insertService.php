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

$ServiceName=$_POST["ServiceName"];
$ServicePrice=$_POST["ServicePrice"];
$ServiceDuration=$_POST["ServiceDuration"];

$sql = "INSERT INTO service (serviceName, servicePrice, serviceDuration) 
VALUES ('$ServiceName', '$ServicePrice', $ServiceDuration)";

if ($conn->query($sql) === TRUE) {
    echo "success";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();

echo '<script type="text/javascript">
           window.location = "http://www.link192.com/admin/clients.php"
      </script>';
?>


