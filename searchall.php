<?php

include 'dbcs.php';
page_protect();


 $notes=$_SESSION['user_name'];



 
 ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Home</title>
<link rel="stylesheet" type="text/css" href="casesxs.css" />
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
<style>


</style>
</head>
<body>
<br><br><div  style="text-align:center; margin:auto; width:900px; height:150px;">
 <?php
$rolls=$_GET["roll"];
$query="select CAST(year as text) as year from rushs where roll='1'";
$result=mssql_query($query);
		 while ($row = mssql_fetch_array($result)) {
		 
		 
 
?>
<b>
<?php $take=$row['year'];
?>
<?php }?>
 
<br>
Daily Receipt for <?php echo $rolls;
?> of Academic  Year: <?php echo $take;
?>
</b>
 <br> <br> <br> <br>  <div class="col-md-3"><div class="list-group">
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  <a href="#" class="list-group-item active">
 Select Level of Interest
  </a></div></div> <div class="col-md-8">
              <table id="mytable" class="table table-bordred table-striped" style='width:700px;'>
 <thead class="active">
                   
        
<tr><td style="width:100px;background:#ccc;border-bottom:1px solid #ccc;">id</td>
<td style="width:150px;background:#ccc;border-bottom:1px solid #ccc;">Level</td>
 </thead>


 <?php

$query="select CAST(folk as float) as folk,CAST(fname as text) as fname,CAST(date as text) as text,CAST(time as text) as time  from balancesheet where date='$rolls' and db1='$take' ";
$result=mssql_query($query);
		 while ($row = mssql_fetch_array($result)) {
		 
		 
$mat=$row['fname'];
 
 $qry = mssql_query("select  CAST(levels as text) as total
from courses where matricule='$mat'  and db1='$take'"); 
$row = mssql_fetch_assoc($qry); 
 $mxc11UI=$row['total'];
  
  
$query5="update balancesheet  set  levels='$mxc11UI' where fname='$mat'";

mssql_query ($query5) or die ('could not updated:'.mssql_error());
  
?>
		 <?php } ?>

 <?php

$query="select  CAST(levels as text) as levels from levels  ";
$result=mssql_query($query);$k=1;
		 while ($row = mssql_fetch_array($result)) {
			 
			 
			 ?>
			 
			 
			 
			
<tr><td style="width:100px;background:#ccc;border-bottom:1px solid #ccc;"><?php echo $k++;?></td>
<td style="width:150px;background:#ccc;border-bottom:1px solid #ccc;"><a href='searchalls.php?rolls=<?php echo $rolls;?>&x=<?php echo $row['levels'];?>'><?php echo $row['levels'];?></td>
</tr> 
			 
			 
			  <?php } ?>
			 
			 
			 
			 