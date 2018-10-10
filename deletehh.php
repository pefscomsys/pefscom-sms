<?php

include 'dbcs.php';
$mks=$_GET['roll'];


$query2="DELETE FROM balancesheet2 WHERE recid='$mks'"



;




mysql_query ($query2) or die ('could not updated:'.mysql_error());

echo "<script>alert('Record deleted Successfully!'); </script>";
 
 echo  $statusf="<meta http-equiv='refresh' content='0; url=pinttrs.php'>";
 exit;


?>