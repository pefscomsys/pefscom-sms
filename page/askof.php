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

$ids=$_POST['ids'];
$roll=$_POST['roll'];
$matricule=$_POST['matricule'];
$scholarship=$_POST['scholarship'];
$amount_paid=$_POST['amount_paid'];
$paids=$_POST['paid'];$sex=$_POST['sex'];
$fname=$_POST['fname'];$takes=$_POST['takes'];$period=$_POST['period'];
$regfee=$_POST['regfee'];
$department=$_POST['department'];$expected_amount=$_POST['expected_amount'];
$barcode=$_POST['barcode'];$levels=$_POST['levels'];
$fmms="3";
$trans="Fees";
$dates=date("Y-m-j");
$time=date("H:i:s");




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
from rushs where roll='1' 
 "); 
$row = mysql_fetch_assoc($qry); 
$yy1=$row['total']; 


$qry = mysql_query("select extra2 as total
from rushs where roll='1' 
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
 






$poll=$paids;
if(empty($poll)){


 $tmss=($amount_paid+$scholarship);
$balancess=$expected_amount-$tmss;
 }
elseif($poll>""){
	
	$paid=$paids;
 $tmss=($amount_paid+$paids+$scholarship);
$balancess=($expected_amount-$tmss);
}

elseif($poll>""  &&  $scholarship="" && $period=""){
$paid=$paids;
 $tmss=($amount_paid+$paids+$scholarship);
$balancess=($expected_amount-$tmss);
}
elseif($poll>""  &&  $scholarship>"" && $period>""){
$paid=$paids;
 $tmss=($amount_paid+$paids+$scholarship);
$balancess=($expected_amount-$tmss);

}

elseif($poll>""  &&  $scholarship="" && $period>""){
$paid=$paids;
 $tmss=($amount_paid+$paids+$scholarship);
$balancess=($expected_amount-$tmss);
}











 
 
 
$mxc11y=$scholarship;
if(empty($mxc11y)){

 

 
 }
elseif($mxc11y>'' ){
$statusfbioy87="insert into scholarship  set  
fname='$matricule',motive='Scholarship',paid='$scholarship',db1='$takes',date='$dates',time='$time',
contact='$contact',idcard='$idcard',id='2',period='$period',cact='$mtt'
"
;


$statusfbioyr="insert into exm  set  
fname='$fname',motive='106',expected_amount='$scholarship',paid='$scholarship',quantity='Scholarship',db1='$takes',id='16'
"
;mysql_query ($statusfbioyr) ;

}








$month=date("m");

$day=date("j");
$y=date("Y");

$query5="insert into balancesheet  set  
id='3',name='FEES',amount='0',amount2='0',folk='$paid',
date='$dates',fname='$matricule',month='$month',day='$day',db1='$takes',scholarship='$scholarship',status='$fname',time='$time',tmk='$tmk',ass='$ids'
,year='$y'";

$query55="update historic set  amount_paid='$tmss',balance='$balances' where  roll='$roll' and matricule='$matricule' and class='$levels'  and oldb='$takes'  ";
mysql_query ($query55) or die ('could not updated  historic:'.mysql_error());
mysql_query ($query5) or die ('could not updated balancesheet:'.mysql_error());
mysql_query ($statusfbioy87) ;
echo "<script>alert('Update Recorded Successfully!'); </script>";
 
 
 echo  $statusf="<meta http-equiv='refresh' content='0; url=receiptss.php?usr_name=$matricule'>";


?>

