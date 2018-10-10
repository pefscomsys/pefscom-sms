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
$rolls=$_GET["rolls"];$xss=$_GET["x"];
$query="select CAST(year as text) as year from rushs where roll='1'";
$result=mssql_query($query);
		 while ($row = mssql_fetch_array($result)) {
		 
		 
 
?>
<b>
<?php $take=$row['year'];
?>
<?php }?>
 
 
</b>

<br>
Daily Receipt for <?php echo $rolls;
?> of Academic  Year: <?php echo $take;
?>

</b>
 <br> <br> <br> <br>
<table cellspacing="0" cellpadding="5" width="900px">

<tr><td style="width:100px;background:#ccc;border-bottom:1px solid #ccc;">Receipt</td>
<td style="width:100px;background:#ccc;border-bottom:1px solid #ccc;">Receipt  ID</td>
<td style="width:400px;background:#ccc;border-bottom:1px solid #ccc;">Name</td>
<td style="width:100px;background:#ccc;border-bottom:1px solid #ccc;">Level</td>


<td style="width:100px;background:#ccc;border-bottom:1px solid #ccc;">Fees</td>



<td style="width:100px;background:#ccc;border-bottom:1px solid #ccc;">Registration</td>

<td style="width:100px;background:#ccc;border-bottom:1px solid #ccc;">pack/Form</td>

<td style="width:100px;background:#ccc;border-bottom:1px solid #ccc;">s.union</td>

<td style="width:100px;background:#ccc;border-bottom:1px solid #ccc;">Tution</td>

<td style="width:100px;background:#ccc;border-bottom:1px solid #ccc;">Total</td>
</tr>

 <?php
$rolls;
 $query="select receiptno,CAST(name as text) as name,CAST (fname as text) as fname, CAST(status as text) as status,CAST(levels as text) as levels,CAST(ids as text) as ids,
 CAST(amount as float) as amount,
 CAST(amount2 as float) as amount2, CAST(tmk as float) as tmk, CAST(folk as float) as folks


 from balancesheet where date='$rolls' and levels='$xss' and db1='$take' ";
$result=mssql_query($query);
		 while ($row = mssql_fetch_array($result)) {
		 
		 
 
?>


<tr><td style="width:200px;border-bottom:1px solid #ccc;"><?php echo $row['receiptno'];?></td><td style="width:200px;border-bottom:1px solid #ccc;"><?php echo $row['ids'];?></td>
<td style="width:400px;text-align:left;border-bottom:1px solid #ccc;"><?php echo $row['name'];$folk=$row['tmk'];$mat=$row['fname'];?></td>
<td style="width:200px;border-bottom:1px solid #ccc;"><?php 
 echo $row['levels']; ?></td>


<td style="width:100px;border-bottom:1px solid #ccc;"><?php echo $folk;?></td>






<td style="width:100px;border-bottom:1px solid #ccc;"><?php echo $row['amount2'];?></td>

<td style="width:100px;border-bottom:1px solid #ccc;"><?php echo $row['amount'];?></td>

<td style="width:100px;border-bottom:1px solid #ccc;"><?php echo $row['sunion'];?></td>


<td style="width:100px;border-bottom:1px solid #ccc;"><?php echo $row['tmk'];?></td>


<td style="width:100px;border-bottom:1px solid #ccc;"><?php echo $row['folks'];?></td>

</tr>	 <?php } ?>

<tr><td style="width:100px;background:#ccc;border-bottom:1px solid #ccc;"></td><td style="width:100px;background:#ccc;border-bottom:1px solid #ccc;"></td>
<td style="width:450px;background:#ccc;border-bottom:1px solid #ccc;"></td>
<td style="width:100px;background:#ccc;border-bottom:1px solid #ccc;"></td>
<td style="width:100px;background:#ccc;border-bottom:1px solid #ccc;"></td>
<td style="width:100px;background:#ccc;border-bottom:1px solid #ccc;"></td>
<td style="width:100px;background:#ccc;border-bottom:1px solid #ccc;"></td>
<td style="width:100px;background:#ccc;border-bottom:1px solid #ccc;"></td>
<td style="width:100px;background:#ccc;border-bottom:1px solid #ccc;">Total</td>


<td style="width:150px;background:#ccc;border-bottom:1px solid #ccc;"><?php 
$qry = mssql_query("select sum(CAST(folk as float)) as total
from balancesheet where date='$rolls' and levels='$xss' and db1='$take'"); 
$row = mssql_fetch_assoc($qry); 
 echo $mxc11UI=$row['total'];
?></td>

</tr>