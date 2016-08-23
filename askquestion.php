
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
<form action="main.php" method="post" name="askqns">
  Tittle:<br>
  <input type="textarea" name="title"><br>
  Topic:<br>
  <input type="textarea" name="topic"><br>
  Detail:<br>
 	<textarea class="tinymce" name="detail"></textarea>
 	<br> <br>
  <input type="submit" value="submit" name="submit">
</form>
</html>