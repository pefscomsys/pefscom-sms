<?php

include 'dbcs.php';
 $mks=$_GET['roll'];

 $uio=$_GET['uio'];

 $db1=$_GET['db1'];

$query2="DELETE FROM balancesheet WHERE recid='$mks'"


;




mysql_query ($query2) or die ('could not updated:'.mysql_error());



$query22y="DELETE FROM historic WHERE matricule='$uio' and oldb='$db1'"


;




mysql_query ($query22y) or die ('could not updated:'.mysql_error());


$query22C="DELETE FROM admission WHERE matricule='$uio' and status='$db1'"


;




mysql_query ($query22C) or die ('could not updated:'.mysql_error());





$query222="DELETE FROM courses WHERE matricule='$uio' and db1='$db1'"


;




mysql_query ($query222) or die ('could not updated:'.mysql_error());

echo "<script>alert('Record deleted Successfully!'); </script>";
 
 echo  $statusf="<meta http-equiv='refresh' content='0; url=receipts.php?usr_name=$user_name'>";
 exit;


?>