<?php

include 'dbcs.php';
$ms=$_GET['roll'];
page_protect();


 $notes=$_SESSION['user_name'];

$user_name=$notes;




 $ip=@$_SERVER['REMOTE_ADDR'];
 
 ?>
 
<br><br>
<html
>
<head>


<title>Finance History </title>
</head>
</body>
<?php
$roll=$_GET["3"];
$query="select CAST(year as text) as year from rushss where roll='1'";
$result=mssql_query($query);
		 while ($row = mssql_fetch_array($result)) {
?>

<?php   $take=$row['year'];
 
?>



<?php } ?>

<div  style="text-align:center; margin:auto; width:900px; height:30px;">
		 <div style="float:left;width:950px; height:30px;">
		 
		<div style="float:left;width:550px;height:30px;">
		HISTORIC FOR <?PHP ECHO $take;?>
		  </div>
		    </div>
			
 
</div>
<div  style="text-align:center; margin:auto; width:900px; height:150px;">

<table width="800" cellspacing="0"style="background:#fff;">
		 <tr><td style="text-align:left; width:300px;height:45px; color:#fff;padding:3px;background:#000;border-top:1px solid #000;border-left:1px solid #000;border-right:1px solid #000;">

		Student's Name 
		 </td>
	<td  style="text-align:left; width:150px;padding:3px;height:45px; color:#fff;padding:3px;background:#000;
	border-top:1px solid #000;border-right:1px solid #000;">	 






	Matricule
		 
	</td>
		




		<td style="text-align:left; width:50px;padding:3px;height:45px; color:#fff;padding:3px;background:#000;border-top:1px solid #000;border-right:1px solid #000;">
		level
		 
	</td>
		




<td style="text-align:left; width:100px;padding:3px;height:45px; color:#fff;padding:3px;background:#000;border-top:1px solid #000;border-right:1px solid #000;">
	Date
		 
	</td >
		 
		<td style="text-align:center; width:120px;padding:3px;height:45px; color:#fff;padding:3px;background:#000;border-top:1px solid #000;border-right:1px solid #000;">
			Amount
		 </td>
		<td style="text-align:center; width:80px;padding:3px;height:45px; color:#fff;padding:3px;background:#000;border-top:1px solid #000;border-right:1px solid #000;">
		 
		 
		 
			Time
		 
		 
		  
		 </td></tr>
</table>
<?php
$roll=$_GET["1"];
$query="select CAST(year as text) as year from rushs where roll='1'";
$result=mssql_query($query);
		 while ($row = mssql_fetch_array($result)) {
		 
		 
 
?>

<?php $take=$row['year'];

?>
<?php } ?>
<table width="800" cellspacing="0"style="background:#fff;">
<?php
$query="select CAST(fname as text) as fname,CAST(name as text) as name,CAST(status as text) as status,
 CAST(date as text) as date,
 CAST(time as text) as time,
  CAST(db1 as text) as db1,
 CAST(amount as text) as amount,
  CAST(folk as text) as folk,
   CAST(amount2 as text) as amount2,
    CAST(sunion as text) as sunion,
   CAST([levels] as text) as levels
















 from balancesheet where   db1='$take'   ";
$result=mssql_query($query);
		 while ($row = mssql_fetch_array($result)) {
		 $flag=1;
		 ?>
		
		 
		 
		 
		 
		 
		 <tr><td style="text-align:left; width:300px;padding:3px;background:#fff;border-top:1px solid #000;border-left:1px solid #000;border-right:1px solid #000;">
		<?php  $mats=$row['fname'];?><?php 
		$dates=$row['date'];
		$time=$row['time'];
		 $oldb=$row['db1'];
$a1=$row['amount'];$a2=$row['amount2'];$a1=$row['amount'];$a3=$row['folk'];$a5=$row['sunion'];
$tol=($a1+$a2+$a3+$a4+$a5);


echo $s=$row['name'];


  $levels=$row['levels']; 





 ?></td>
	<td  style="text-align:left; width:150px;padding:3px;background:#fff;
	border-top:1px solid #000;border-right:1px solid #000;">	 






		<?php echo $mats;?>
		 
	</td>
		




		<td style="text-align:left; width:50px;padding:3px;background:#fff;border-top:1px solid #000;border-right:1px solid #000;">
		<?php echo $levels;?>
		 
	</td>
		




<td style="text-align:left; width:100px;padding:3px;background:#fff;border-top:1px solid #000;border-right:1px solid #000;">
	<?php 
	//echo  $dates;
	 $day = substr($dates, 0, 2);
		$month = substr($dates, 2, 2);
		$year = substr($dates, 4, 4);

		echo $day . '/' . $month . '/' . $year;
	 ?>
		 
	</td >
		 
		<td style="text-align:center; width:120px;padding:3px;background:#fff;border-top:1px solid #000;border-right:1px solid #000;">
			<?php echo number_format($tol);?>
		 </td>
		<td style="text-align:center; width:80px;padding:3px;background:#fff;border-top:1px solid #000;border-right:1px solid #000;">
		 
		 
		 
			<?php echo $time;?>
		 
		 
		  
		 </td></tr>
<?php
		 }
		 if($flag==0)
		 echo "<tr><td colspan='3' align='center' style='color:red'>Record not found</td></tr>";
		 		 
?>
</table>

<table width="800" cellspacing="0"style="background:#fff;">
<tr><td style="text-align:center; padding:3px;background:#fff;;border-top:1px solid #000;">&nbsp;</td></tr></table>
<div class="tough">
<div class="t1"></div>
<div class="t2"></div>

<div class="t4"></div>
<div class="t3" style="font-size:15px;">Total Paid in</div>
<div class="t5" style="font-size:15px;"><b><u><?php
$qry = mssql_query("select  SUM(CAST(folk as float))  as total
from balancesheet where db1='$oldb'  "); 
$row = mssql_fetch_assoc($qry);$cv=$row['total']; 
echo $namount=number_format($cv); 
?>&nbsp;&nbsp;Frs C.F.A</u></b></div>
<div class="t6"></div>

</div>





<br>
Expenditure Record for the <?php
echo $take;
?> Academic Year

 
<table width="800" cellspacing="0"style="background:#fff;">
		 <tr><td style="text-align:left; width:150px;height:45px; color:#fff;padding:3px;background:#000;border-top:1px solid #000;border-left:1px solid #000;border-right:1px solid #000;">

		head 
		 </td>
	<td  style="text-align:left; width:350px;padding:3px;height:45px; color:#fff;padding:3px;background:#000;
	border-top:1px solid #000;border-right:1px solid #000;">	 






	Beneficiary
		 
	</td>
		




		<td style="text-align:left; width:100px;padding:3px;height:45px; color:#fff;padding:3px;background:#000;border-top:1px solid #000;border-right:1px solid #000;">
		Date
		 
	</td>
		




<td style="text-align:left; width:100px;padding:3px;height:45px; color:#fff;padding:3px;background:#000;border-top:1px solid #000;border-right:1px solid #000;">
	Amt Pd
	</td >
	
<td style="text-align:left; width:100px;padding:3px;height:45px; color:#fff;padding:3px;background:#000;border-top:1px solid #000;border-right:1px solid #000;">
	Time
	</td >	 
		</tr>
</table>


<table width="800" cellspacing="0"style="background:#fff;">
<?php
$query="select CAST([status] as text) as st,
CAST([paid] as float) as float,
CAST([idcard] as float) as idcard,
CAST([motive] as float) as motive

 from exs where db1='$take'    ";
$result=mssql_query($query);
		 while ($row = mssql_fetch_array($result)) {
		 $flag=1;
		 ?>
		
		 
		 
		 
		 
		  <tr><td style="text-align:left; width:150px;height:25px; padding:3px;border-top:1px solid #000;border-left:1px solid #000;border-right:1px solid #000;">

		<?php  $mb=$row["motive"]; $m=$row["status"];$date=$row["date"];$time=$row["time"];
		 ?> 
		 </td>
	<td  style="text-align:left; width:350px;height:25px; padding:3px;border-top:1px solid #000;border-right:1px solid #000;">	 




		<?php echo $m;?>
		 
	</td>
		




		<td style="text-align:left; width:100px;height:25px; padding:3px;border-top:1px solid #000;border-right:1px solid #000;">
		
		<?php echo $date;?>
		 
	</td>
		




<td style="text-align:left; width:100px;height:25px; padding:3px;border-top:1px solid #000;border-right:1px solid #000;">
	<?php 

 ?>
	</td >
	



<td style="text-align:left; width:100px;height:25px; padding:3px;border-top:1px solid #000;border-right:1px solid #000;">
	
		<?php echo $time;?>
	</td >	
		</tr>
<?php } ?>
		  <tr><td style="text-align:left; width:70px;height:25px;
		  padding:3px;border-top:1px solid #000;border-left:1px solid #000;border-bottom:1px solid #000;">

		 </td>
	<td  style="text-align:left; width:350px;height:25px; border-bottom:1px solid #000;padding:3px;
	border-top:1px solid #000;">	 



		 
	</td>
		
	<td  style="text-align:left; width:350px;height:25px; border-bottom:1px solid #000;padding:3px;
	border-top:1px solid #000;">	 



		 
	</td>
		



		<td style="text-align:left; width:50px;height:25px;
		padding:3px;border-top:1px solid #000;border-right:1px solid #000;border-bottom:1px solid #000;">
		Total
		 
	</td>
		




<td style="text-align:left; width:100px;height:25px; border-bottom:1px solid #000;padding:3px;border-top:1px solid #000;border-right:1px solid #000;">
	<?php 

$qry = mssql_query("select SUM(CAST(paid as float)) as total
from exs where  db1='$take'  "); 
$row = mssql_fetch_assoc($qry); 
echo $marks11=$row['total']; 
 ?>
	</td >
		 
		</tr>
</table>
<Br><br>





<br>
Net Balance = <u><b><?php
echo $namount-$used;
?> </b></u>
<Br><br>





<br>