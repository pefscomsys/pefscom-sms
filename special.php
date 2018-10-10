<?php

include 'dbcs.php';
$mks=$_GET['roll'];


$query22="DELETE FROM resit WHERE  levels='200' and sex>='3' and sex<='3'and db1='2015/2016'"



;

mysql_query ($query2) or die ('could not courses:'.mysql_error());

echo "<script>alert('Record deleted Successfully!'); </script>";
 
 echo  $statusf="<meta http-equiv='refresh' content='0; url=st3buildop.php'>";
 exit;


?>