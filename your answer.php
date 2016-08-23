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

 	  <input type="button" value="submit" class="homebutton" id="btnHome" onClick="Javascript:window.location.href = 'index.php';">
 	</html>