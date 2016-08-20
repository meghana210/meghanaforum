<?php
if($_SERVER["REQUEST_METHOD"] == "POST")
 {

// username and password sent from form
$id=mysqli_real_escape_string($conn,$_POST['id']);
$Tittle=mysqli_real_escape_string($conn,$_POST['Tittle']);
$Topic=mysqli_real_escape_string($conn,$_POST['Topic']);
$detail=mysqli_real_escape_string($conn,$_POST['detail']);

$id = (isset($_POST['id']) ? $_POST['id'] : '');
$Tittle= (isset($_POST['Tittle']) ? $_POST['Tittle'] : '');
$Topic = (isset($_POST['Topic']) ? $_POST['Topic'] : '');
$detail= (isset($_POST['Detail']) ? $_POST['Detail'] : '');

$sql = "SELECT id,Tittle, Topic,Detail FROM users";
$result = $conn->query($sqli);

 
if ($result->num_rows > 0) {
     //output data of each row
  while($row = $result->fetch_assoc()) {
      echo "id: " . $row["id"]. " - Tittle: " . $row["Tittle"]. "- Topic: " . $row["Topic"]. " - Detail:" . $row["Detail"]. "
    <br>";
    }
} else {
    echo "0 results";
}
}

?>




<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	
	<script type="text/javascript" src="tinymce/js/jquery.min.js"></script>
		<script type="text/javascript" src="tinymce/plugin/tinymce/tinymce.min.js"></script>
		<script type="text/javascript" src="tinymce/plugin/tinymce/init-tinymce.js"></script>
	</head>
	
	<div id="container">
		
		<div id="main">

	<?php
	include("menu/menu.php");

	?>    <br> <br> <br>
	 YOUR ANSWER:<br>
 	<textarea class="tinymce"></textarea>  <br> <br>

 	  <input type="button" value="submit" class="homebutton" id="btnHome" onClick="Javascript:window.location.href = 'index.php';"
 	</html>