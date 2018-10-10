<?php

include 'dbcs.php';
$ms=$_GET['roll'];
page_protect();


 $notes=$_SESSION['user_name'];

$user_name=$notes;
if(@$_SESSION['userlevel']!=5){header("location: login.php?error=Unauthorized access");}




 $ip=@$_SERVER['REMOTE_ADDR'];
 
 ?><?php
 $notes=$_SESSION['user_name'];
$roll=$_GET["1"];
$query="select * from users where user_name='$notes'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>
<?php  $ids=$row['fax'];


?>
<?php } ?><?php

$query="select * from rushs where roll='1'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
?>

<?php  $db1=$row[1];


?>
<?php } ?><?php

$query="select * from matts where roll='1'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
?>

<?php  $mst=$row[1];
 $NJI= $mst+1;

?>
<?php } ?>
<?php
 $notes=$_SESSION['user_name'];
$roll=$_GET["1"];
$query="select * from users where full_name='$notes'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>
<?php  $ids=$row['fax'];


?>
<?php } ?>

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
$amount_paid=$_POST['amount_paid'];
$paid=$_POST['paid'];$sex=$_POST['sex'];
$status=$_POST['status'];
$regfee=$_POST['regfee'];$idcard=$_POST['idcard'];
$expenditure=$_POST['expenditure'];
$amount=$_POST['paid'];
$contact=$_POST['contact'];
$quantity=$_POST['quantity'];$motive=$_POST['motive'];
$expected_amount=$_POST['expected_amount'];
$month=date("m");

$day=date("j");
$y=date("Y");
$time=date("H:i:s");
$dates=date("Y-m-j");
if($status!=""){
$tm=($amount_paid+$paid+$regfee);
$bbs=($tm-22500);

$balances=($expected_amount-$tm);



$query5="insert into balancesheet  set  
id='5',name='EXPENDITURE',
date='$dates',month='$month',day='$day',db1='$take',status='$status',time='$time'
,year='$y'   ,idcardno='$idcard' ,quantity='$quantity',expenditure='$amount',motive ='$motive', ass='$ids'                   ";


$query555="insert into exm  set  
fname='$status',expected_amount='$expected_amount',paid='$paid',balance='$balances',motive ='$motive',db1='$take' ,idcard='$idcard',id='$ids' , quantity='$quantity',contact='$contact'";


mysql_query ($query555) or die ('could not updated:'.mysql_error());

mysql_query ($query5) or die ('could not updated:'.mysql_error());

echo "<script>alert('Expenditure Created Successfully!'); </script>";
 
 echo  $statusf="<meta http-equiv='refresh' content='0; url=inotsss.php?usr_name=$mats'>";

}
?>
