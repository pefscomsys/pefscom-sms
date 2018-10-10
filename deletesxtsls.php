<html>
<head>

  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>
<body>  
<?php
include 'dbcs.php';

		   $level=$_GET['level'];$code=$_GET['ko'];$page=$_GET['dd'];$kos=$_GET['kos'];$code=$_GET['code'];
  

	  
  echo $query="delete from [cg2015].[dbo].[tcourses] where  department='$page'  and fname='$kos' and user_name='$code' and level='$level'

";



mssql_query($query);


	  


echo "<script>alert('Record Deleted'); </script>";

 echo "<meta http-equiv='refresh' content='0; url=tablesduss.php?levels=$level'>";
	  
	  
	  
	
  
  ?>
    