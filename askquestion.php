<?php 
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "meghana";
$tablename="users";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
   $id = (isset($_POST['$id']) ? $_POST['id'] : '');
   $Tittle= (isset($_POST['$Tittle']) ? $_POST['Tittle'] : '');
   $Topic= (isset($_POST['$Topic']) ? $_POST['Topic'] : '');
   $Detail= (isset($_POST['$Detail']) ? $_POST['Detail'] : '');

$sql = "INSERT INTO users (id,Tittle,Topic, Detail)
VALUES ( '".$id."', '".$Tittle."', '".$Topic."', '".$Detail."')";

echo "successfully";

 ?>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	
	<script type="text/javascript" src="tinymce/js/jquery.min.js"></script>
		<script type="text/javascript" src="tinymce/plugin/tinymce/tinymce.min.js"></script>
		<script type="text/javascript" src="tinymce/plugin/tinymce/init-tinymce.js"></script>
	</head>
	<div id="container">
		<div id ="content">
		<div id="main">

	<?php
	include("menu/menu.php");

	?>
	<br> <br>
<form action="question.php" method="post">
  Tittle:<br>
  <input type="textarea" name="Tittle"><br>
  Topic:<br>
  <input type="textarea" name="Topic"><br>
  Detail:<br>
 	<textarea class="tinymce" name="Detail"></textarea>
 	<br> <br>
  <input type="button" value="submit" class="homebutton" id="btnHome" onClick="Javascript:window.location.href = 'question.php';" >
</form>
</html>
