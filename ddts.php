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
<style>


</style>
</head>
<body>
<br><br><div  style="text-align:center; margin:auto; width:900px; height:150px;">
 <?php
$roll=$_GET["1"];
$query="select CAST(year as text) as year from rushs where roll='1'";
$result=mssql_query($query);
		 while ($row = mssql_fetch_array($result)) {
		 
		 
 
?>
<b>
<?php $take=$row['year'];
?>
<?php }?>
 
 <div  style="float:left;  width:900px; height:30px;">

Daily Receipt for Academic  Year: <?php echo $take;
?>

</b>
</div>
<table cellspacing="0" cellpadding="5" width="700px">

<tr><td style="width:400px;background:#ccc;">Date</td><td style="width:400px;background:#ccc;">Receipt Id</td></tr>

 <?php
$roll=$_GET["1"];
 $query="select CAST(date as nvarchar(400)) as date,CAST(ids as nvarchar(400)) as ids from balancesheet where db1='$take'   group by date,ids order by date ASC ";
$result=mssql_query($query);
		 while ($row = mssql_fetch_array($result)) {
		 
		 
 
?>


<tr><td style="width:400px;background:#efefef;border-bottom:1px solid #fff;"><a href='searchall.php?roll=<?php echo $row["date"];?>'><?php echo $row["date"];?></a></td><td style="width:400px;border-bottom:1px solid #fff;background:#efefef;"><?php echo $row["ids"];?></td></tr>
		 <?php } ?>