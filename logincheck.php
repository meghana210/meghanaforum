<?php
 include("config.php");
 
 session_start();
 if($_SERVER["REQUEST_METHOD"] == "POST")
 {
// username and password sent from form

$username=mysqli_real_escape_string($conn,$_POST['username']);
$password=mysqli_real_escape_string($conn,$_POST['password']);
$selectsqli="SELECT id FROM details WHERE username='$username' and password='$password'";
$result=mysqli_query($conn,$selectsqli);
$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
$count=mysqli_num_rows($result);

// If result matched $username and $password, table row must be 1 row
if($count==1) {
	
    $_SESSION['login_user']=$username;
// echo $_SESSION['login_user'];
header("location: desk.php");
} else {
echo "error";
}
}
?>