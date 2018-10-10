<html>
<head>

  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>
<body>  
<?php
include 'dbcs.php';

		   $level=$_GET['level'];$code=$_GET['ko'];$page=$_GET['dd'];
  

	  
  $query="delete from [cg2015].[dbo].[menu] where  page='$page'  and [level]='$level'

";



mssql_query($query);


	  


echo "<script>alert('Record Deleted'); </script>";

 echo "<meta http-equiv='refresh' content='0; url=tablesdu.php?levels=$level'>";
	  
	  
	  
	
  
  ?>
    