<?php
include 'config.php';


	//$title =  $_GET['title'];
    //$topic =  $_GET['topic'];
    //$detail=  $_GET['detail'];


$sqli = "SELECT  id, title, topic,detail FROM users";
$result=mysqli_query($conn,$sqli);
echo "<table border='1'>
<tr>
<th>id</th>
<th>Title</th>
<th>Topic</th>
<th>Detail</th>

</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['id'] . "</td>";
echo "<td>" . $row['title'] . "</td>";
echo "<td>" . $row['topic'] . "</td>";
echo "<td>" . $row['detail'] . "</td>";
echo "</tr>";
}
echo "</table>";

mysqli_close($conn);

?>




