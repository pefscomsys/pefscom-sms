<?php

include 'dbcs.php';
$mks=$_GET['rolx'];


$query2="DELETE FROM subject WHERE roll='$mks'"



;




mysql_query ($query2) or die ('could not updated:'.mysql_error());

echo "<script>alert('Record deleted Successfully!'); </script>";
 
 echo  $statusf="<meta http-equiv='refresh' content='0; url=ncourses.php?usr_name=$user_name'>";
 exit;


?>