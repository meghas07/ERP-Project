<?php
   $servername = "localhost";
$username = "root";
$password = "";
$dbname = "erp";

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully <br>";


$email=$_POST["email"]; 
$pass=$_POST["password"];

$sql = "SELECT * from user where user.password='$pass'  and user.email='$email'";
$result = $conn->query($sql); 

if($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
    	header("location: dashboard.php");
    	
    }
} else {
    echo "0 results";
}


?>
