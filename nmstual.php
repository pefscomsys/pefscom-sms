<?php

include 'dbcs.php';
$ms=$_GET['roll'];
$dept=$_GET['dept'];
$id=$_GET['id'];
$db1=$_GET['db1'];$levels=$_GET['levels'];




 $qy="update [cg2015].[dbo].[courses]

set [c110]='$id' where [cg2015].[dbo].[courses].levels='$levels'  and [cg2015].[dbo].[courses].db1='$db1'

and [cg2015].[dbo].[courses].departmet='$dept'



";

mssql_query ($qy) or die ('could not updated:');
 Echo '<script> alert("Update Successful"); </script>';
 
echo  $statusf="<meta http-equiv='refresh' content='0; url=nmsst1.php?roll=$mats'>";
 
 
 


?>