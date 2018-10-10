<html>
<head>

  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>
<body>  
<?php
include 'dbcs.php';

		   $level=$_GET['level'];$code=$_GET['ko'];$page=$_GET['dd'];
  

	  
  echo $query="delete from [cg2015].[dbo].[users] where  full_name='$page'  and user_level='$level'

";



mssql_query($query);


	  


echo "<script>alert('Record Deleted'); </script>";

 echo "<meta http-equiv='refresh' content='0; url=tablesdus.php?levels=$level'>";
	  
	  
	  
	
  
  ?>
    