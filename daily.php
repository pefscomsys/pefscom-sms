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
$query="select CAST(year as text) as year from rushs where roll='1'";
$result=mssql_query($query);
		 while ($row = mssql_fetch_array($result)) {
		 
		 
 
?>
<b>
<?php $take=$row['year'];
?>
<?php }?>
 
 


<br>
Daily Account for the Academic  Year: <?php echo $take;
?>

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
$result = mssql_query("SELECT CAST(date as text) AS date, SUM(CAST(folk as float))  AS total_sales
FROM balancesheet where db1='$take' 
GROUP BY date "); 
$num_rows = mssql_num_rows($result);



print "<table width=809 border=0 align='center' height='30px'  cellpadding='5px'><tr></tr>\n";
while ($get_info = mssql_fetch_row($result)){
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
$qry = mssql_query("select   SUM(CAST(folk as float))    as total
from balancesheet where db1='$take'  "); 
$row = mssql_fetch_assoc($qry); 
echo number_format($row['total']); 
?></div>
<div class="t6"></div>