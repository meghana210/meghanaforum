<?php 
include 'config.php';

if($conn){
	$title =  $_REQUEST['title'];
    $topic =  $_REQUEST['topic'];
    $detail=  $_REQUEST['detail'];

   $sqli= "INSERT INTO users (title,topic, detail)
 VALUES ('$title', '$topic', '$detail')";
if (mysqli_query( $conn,$sqli)) {
     echo "New record created successfully";
   header("location: question.php");
 } else {
 	echo "error";
 	  }



}else{


}
// 	$id = isset($_POST['id']) ? $_POST['id'] : '';
// $title= isset($_POST['title']) ? $_POST['title'] : '';
// $topic = isset($_POST['topic']) ? $_POST['topic'] : '';
// $detail = isset($_POST['detail']) ? $_POST['detail'] : '';

// $sqli= "INSERT INTO users (title,topic, detail)
// VALUES ('$title', '$topic', '$detail')";
// } if (mysqli_query( $conn,$sqli)) {
//      echo "New record created successfully";
//  } else {
//  	echo "error";
//  }


//$Tittle = $_POST['Tittle'];
//$Topic=$_POST['Topic'];
//$Detail=$_POST['Detail'];
// $title = isset($_POST['title']);
// $topic= isset($_POST['topic']);
// $detail = isset($_POST['detail']);


 
//('".$id."' '".$tittle."', '".$topic."', '".$detail."')

 

 mysqli_close($conn);
?>




