<?php 
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "meghana";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

$id = (isset($_POST['id']) ? $_POST['id'] : '');
$username = (isset($_POST['$username']) ? $_POST['username'] : '');
$password = (isset($_POST['$password']) ? $_POST['password'] : '');

$sql = "INSERT INTO details ( id,username, password)
 VALUES ( '$id', '$username', '$password', )";

// if (mysqli_query($conn, $sqli)) {
//     echo "New record created successfully";
// } 


 //mysqli_close($conn);
?>