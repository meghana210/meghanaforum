<?php session_start();?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/style.css"/>
</head>
<div id="container">
	<?php
			include "header/header.php";
			include "link.php";



	 ?>


	 Welcome <?php echo $_SESSION['login_user'];?>

<br>

<?php
	include"menu/menu.php";
?>
<br>
<?php
		
?>


          
       </div>

</html>