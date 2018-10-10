<?php

include 'dbcs.php';
 $ca=$_GET['ca'];
 $exam=$_GET['exam']; $levels=$_GET['levels']; $facid=$_GET['facid']; $deptf=$_GET['ids'];

 $query2="DELETE FROM [cg2015].[dbo].[resultslip] WHERE ca='$ca' and exam='$exam'  and levels='$levels' and deptf='$facid' and ids='$deptf'"


;




mssql_query ($query2) ;

echo "<script>alert('Record deleted Successfully!'); </script>";
 
 echo  $statusf="<meta http-equiv='refresh' content='0; url=tablesdsx.php?usr_name=$user_name'>";
 exit;


?>