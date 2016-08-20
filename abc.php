<?php 
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "meghana";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if ($conn) {
    
    $id = $_POST['id'] ;
	$tittle = $_POST['tittle'];
	$topic = $_POST['topic'] ;
	$detail= $_POST['detail'] ;

$sqli = "INSERT INTO users (id,Tittle,Topic, Detail)
VALUES ('$id', '$tittle', '$topic','$detail')";
}  else{
	die("Connection failed: " . mysqli_connect_error());
}




 ?>