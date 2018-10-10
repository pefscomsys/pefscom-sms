<?php
include 'dbcs.php';?>

<?php
$roll=$_GET["3"];
$query="select * from rushss where roll='1'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
?>

<?php   $take=$row[1];
 
?>



<?php } ?>



<?php
$matricule=$_POST['matricule'];
$scholarship=$_POST['scholarship'];$scholarships=$_POST['scholarships'];
$amount_paid=$_POST['amount_paid'];
$paid=$_POST['paid'];$sex=$_POST['sex'];
$fname=$_POST['fname'];
$famount=$_POST['famount'];
$regfee=$_POST['regfee'];
$c110=$_POST['c110'];$take=$_POST['take'];
 $sex=$_POST['sex'];
 $levels=$_POST['levels'];
$department=$_POST['department'];
$expected_amount=$_POST['expected_amount'];
$barcode=$_POST['barcode'];
$levels=$_POST['levels'];$period=$_POST['period'];
$fmms="3";
$trans="Fees";

$month=date("m");

$day=date("j");
$y=date("Y");
$mmi=($expected_amount+$famount);
$dates=date("Y-m-j");
$time=date("H:i:s");
$tm=($paid);
$balances=(($mmi)-$tm);
 
 
 
 
 
 
 
 
 $qry = mysql_query("select guardian2 as total
from admission where matricule='$matricule' and extra='$levels' 
and status='$take'  "); 
$row = mysql_fetch_assoc($qry); 
$contact=$row['total']; 
 


$qry = mysql_query("select idcard as total
from admission where matricule='$matricule' and extra='$levels' 
and status='$take'  "); 
$row = mysql_fetch_assoc($qry); 
$idcard=$row['total']; 
 


$qry = mysql_query("select extra as total
from rushss where roll='1' 
 "); 
$row = mysql_fetch_assoc($qry); 
$yy1=$row['total']; 


$qry = mysql_query("select extra2 as total
from rushss where roll='1' 
 "); 
$row = mysql_fetch_assoc($qry); 
$yy1x=$row['total'];
$mxc11yuy=$period;
if(empty($mxc11yuy)){

 

 
 }
elseif($mxc11yuy>='2' && $mxc11yuy<='2' ){
	$status='1';
}
elseif($mxc11yuy>='1' && $mxc11yuy<='1' ){
	$status='0';
}


$y1=$yy1+$status;

 $mtts=$yy1x+$status;
 $mtt="$y1/$mtts";
 

 
 
 
 
 
 
$mxc11yuys=$scholarship;
if(empty($mxc11yuys)){

 
$schol=$scholarships;
 
$statusfbioy87="update scholarship  set  
db1='$take' where fname='$matricule' and 
cact='$take'";
mysql_query ($statusfbioy87) or die ('could not updated scholarship:'.mysql_error());
 }
elseif($mxc11yuys>'' ){
	
$schol=$scholarship;


$statusfbioy87="insert into scholarship  set  
fname='$matricule',motive='Scholarship',paid='$schol',db1='$takes',date='$dates',time='$time',
contact='$contact',idcard='$idcard',id='2',period='$period',cact='$mtt'
"
;

mysql_query ($statusfbioy87) or die ('could not inser into scholarship:'.mysql_error());
}


























$query5="insert into balancesheet  set  
id='3',name='FEES',amount='0',amount2='0',folk='$paid',
date='$dates',fname='$matricule',month='$month',day='$day',db1='$take',scholarship='$schol',status='$fname',time='$time'
,year='$y',ass='16',tmk='$expected_amount'";



$query55="insert into courses  set  

fname='$fname',matricule='$matricule',departmet='$department',levels='$levels',c110='16',db1='$take'
,barcode='$barcode'";


$query555="insert into historic set  student_name='$fname',class='$levels',amountpaid='$department',expected_amount='$mmi',amount_paid='$tm',balance='$balances',year='$Y',month='$month',xxx='$day' ,date='$dates',matricule='$matricule' ,oldb='$take'  ";


mysql_query ($query555) or die ('could not updated:'.mysql_error());
mysql_query ($query55) or die ('could not updated:'.mysql_error());
mysql_query ($query5) or die ('could not updated:'.mysql_error());

echo "<script>alert('Update Recorded Successfully!'); </script>";
 
 echo  $statusf="<meta http-equiv='refresh' content='0; url=receipts.php?roll=$matricule' target='blank'>";
?>

