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

$LastName=$_POST["LastName"];
$FirstName=$_POST["FirstName"];
$Phone=$_POST["Phone"];
$eMail=$_POST["eMail"];

$sql = "INSERT INTO employee (firstName, lastName, phoneNo, email)
VALUES ('$FirstName', '$LastName', $Phone, '$eMail')";

if ($conn->query($sql) === TRUE) {
    echo " ";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();

echo '<script type="text/javascript">
           window.location = "http://www.link192.com/admin/employees.php"
      </script>';
?>


