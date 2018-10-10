<?php

include 'dbcs.php';
page_protect();


 $notes=$_SESSION['user_name'];



 
 ?><?php
 $notes=$_SESSION['user_name'];
$roll=$_GET["1"];
$query="select * from users where user_name='$notes'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>
<?php $ids=$row['fax'];


?>
<?php } ?>
 
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Home</title>
<link rel="stylesheet" type="text/css" href="casesxs.css" />
<style>


.tough{width:803px;  margin:auto;height:45px; background:#000; color:#fff; }
.t1{float:left; height:40px; width:201px;text-align:center; margin-top:5px; }
.t2{float:left; height:40px; width:120px;text-align:center;margin-top:5px; }
.t3{float:left; height:40px; width:120px;text-align:center;margin-top:5px; }
.t4{float:left; height:40px; width:122px;text-align:center;margin-top:5px; }
.t5{float:left; height:40px; width:160px;text-align:center;margin-top:5px; }
.t6{float:left; height:40px; width:80px;text-align:center;margin-top:5px; }

</style>
</head>
<body>
<br><br><div  style="text-align:center; margin:auto; width:900px; height:150px;">
 <?php
$roll=$_GET["1"];
$query="select * from rushss where roll='1'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>
<b>
<?php $take=$row[1];
?>
<?php }?>
 
 
 <?php
$roll=$_GET["1"];
$query="select * from school where roll='1'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>
<b>
<?php echo $row[1];?><br>

<?php echo $row[2];?>
</b>

<br>
Daily Account for the Academic  Year: <?php echo $take;
?>
<?php } ?>
</b>
 
</div><br>
<div class="tough">
<div class="t1">Date of Transaction</div>
<div class="t2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>

<div class="t4"></div>
<div class="t3">#  per day</div>
<div class="t5"></div>
<div class="t6"></div>
</div><?php
$result = mysql_query("SELECT DATE(date) AS date, SUM(amount+amount2+folk+sunion)  AS total_sales
FROM balancesheet where db1='$take'  and ass='$ids'and cash=''
GROUP BY month"); 
$num_rows = mysql_num_rows($result);



print "<table width=809 border=0 align='center' height='30px'  cellpadding='5px'><tr></tr>\n";
while ($get_info = mysql_fetch_row($result)){
print "<tr  >\n";
foreach ($get_info as $field)
print "\t<td bgcolor='#f4f4f4'><font face=arial size=1/>$field</font></td>\n";
print "</tr bgcolor='#000'>\n";
}
print "</table>\n";


?>

<div class="tough">
<div class="t1"></div>
<div class="t2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>

<div class="t4"></div>
<div class="t3">Grand Total</div>
<div class="t5"><?php
$qry = mysql_query("select  SUM(amount+amount2+folk+sunion)  as total
from balancesheet where db1='$take' and cash='' "); 
$row = mysql_fetch_assoc($qry); 
echo $row['total']; 
?></div>
<div class="t6"></div>