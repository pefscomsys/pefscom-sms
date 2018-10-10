<?php

include 'dbcs.php';

page_protect();


 $notes=$_SESSION['user_name'];

$user_name=$notes;
$mmp=$_GET['roll'];



 $ip=@$_SERVER['REMOTE_ADDR'];
 

$result = mysql_query("SELECT * FROM courses where fname>'' order by fname ASC");
?><?php

$query="select * from rushss where roll='1'";
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



<html>
<head>
<title>Users List</title>

    <link rel="stylesheet" type="text/css" href="w2ui-1.4.2.min.css" />
    <script src="jquery.min.js"></script>
    <script type="text/javascript" src="w2ui-1.4.2.min.js"></script>
<link rel="stylesheet" type="text/css" href="styles.css" />
</head>
<body><?php
$matricule=$_POST['matricule'];$ids=$_POST['ids'];
$amount_paid=$_POST['amount_paid'];
$paid=$_POST['paid'];$sex=$_POST['sex'];$mop=$_POST['mop'];
$fname=$_POST['fname'];$mops=$_POST['mops'];
$regfee=$_POST['regfee'];
$department=$_POST['department'];$expected_amount=$_POST['expected_amount'];
$barcode=$_POST['barcode'];$levels=$_POST['levels'];
$fmms="3";
$trans="Fees";

$month=date("m");

$day=date("j");
$y=date("Y");
$time=date("H:i:s");
$dates=date("Y-m-j");
if($fname!=""){
$tm=($amount_paid+$paid+$regfee);
$bbs=($tm-22500);


$mxc11i=$bbs;
if(empty($mxc11i)){
 $statusfbioRT="REGISTRATION FEE";
}

elseif($mxc11i>='0' && $mxc11i<='0'){

 $statusfbioRT="REGISTRATION FEE";

}


elseif($mxc11i>='22500' && $mxc11i<='22500' && $levels>='200' && $levels<='200'){

 $statusfbioRT="REGISTRATION FEE";
$amount2="20000"; 

$sunion="2500"; 

}
elseif($mxc11i>='22500' && $mxc11i<='22500' && $levels>='300' && $levels<='300'){

 $statusfbioRT="REGISTRATION FEE";
$amount2="20000"; 

$sunion="2500"; 

}



elseif($mxc11i>='25000' && $mxc11i<='25000' && $levels>='400' && $levels<='400'){

 $statusfbioRT="REGISTRATION FEE";
$amount2="22500"; 

$sunion="2500"; 

}


elseif($mxc11i>'25000'  && $levels>='400' && $levels<='400'){

 $statusfbioRT="REGISTRATION FEE & PART TUTION";
$amount2="22500"; 

$sunion="2500"; 

}

elseif($mxc11i>'22500'  && $levels>='300' && $levels<='300'){

 $statusfbioRT="REGISTRATION FEE & PART TUTION";
$amount2="20000"; 

$sunion="2500"; 

}


elseif($mxc11i>'22500'  && $levels>='200' && $levels<='200'){

 $statusfbioRT="REGISTRATION FEE & PART TUTION";
$amount2="20000"; 

$sunion="2500"; 

}

$balances=($expected_amount-$tm);

$tms=($amount_paid+$paid);
$tmk=$tms;
$query4="insert into barcode set  
barcode='$barcode',db1='$db1',
matricule='$matricule',extra='1'";


$query4y="update admission set  

matricule='$matricule',country='2',barcode='$barocde'";


$query55="insert into historic  set  
matricule='$matricule',student_name='$fname',
class='$levels',amountpaid='$department',amount_paid='$tm',expected_amount='$expected_amount',balance='$balances',year='$Y',month='$month',xxx='$day',date='$dates' ,oldb='$db1'  ";



$query565="update $mops set  matt='$NJI' where roll='1'";



$query5g="update balancesheet  set  name='$matricule' where status='$fname' and db1='$db1'";


$query5="insert into balancesheet  set  
id='$ids',name='$statusfbioRT',amount='0',amount2='$amount2',folk='$bbs',
date='$dates',fname='$matricule',month='$month',day='$day',db1='$db1',status='$fname',time='$time',cash='$mop',sunion='$suinon',tmk='$tmk'
,year='$y'";

$query555="insert into courses  set  
matricule='$matricule',fname='$fname',
levels='$levels',departmet='$department',sex='$sex',db1='$db1',c110='$ids'  ";



mysql_query ($query5g) or die ('could not updated:'.mysql_error());
mysql_query ($query555) or die ('could not updated:'.mysql_error());
mysql_query ($query4y) or die ('could not updated:'.mysql_error());


mysql_query ($query4) or die ('could not updated:'.mysql_error());
mysql_query ($query565) or die ('could not updated:'.mysql_error());
mysql_query ($query55) or die ('could not updated:'.mysql_error());

mysql_query ($query5) or die ('could not updated:'.mysql_error());


echo "<script>alert('Update Created Successfully!'); </script>";
 
 echo  $statusf="<meta http-equiv='refresh' content='0; url=updatebb.php?usr_name=$mats'>";

}
?>
<?php
$search=$_POST["search"];
$flag=0;
$query="select * from admission where recid='$mmp' and country='' ";
$result=mysql_query($query);
$i=0;
 while ($row = mysql_fetch_array($result)) {

?>
<form name="frmUser" method="post" action="inotss.php">
<fieldset>
<legend>Add Student Financial Record -</legend>
    <div class="w2ui-page page-0" style="float:left;width:560px;">
<?php
if($i%2==0)
$classname="evenRow";
else
$classname="oddRow";
?>
				
                <div class="w2ui-field w2ui-span4">
                    <label style="float:left;width:200px;">Student Full Names:</label>
 




 <div> <input type="text" name="fname" value="<?php echo $names=$row['fname'];
 
 $levels=$row['extra'];
 
 $mxc118k=$row['department'];
 
 if(empty($mxc118k)){
 }
elseif($mxc118ku>='01' && $mxc118k<='01'  ){
$content='01';
$statusfbiomxc118k="ACCOUNTANCY"; 
}elseif($mxc118k>='011' && $mxc118k<='011'  ){
$content='01';
$statusfbiomxc118k="ACCOUNTANCY"; 
$statusfbiomxc118k1yy='27';
}
elseif($mxc118k>='02' && $mxc118k<='02'  ){
$content='02';
$statusfbiomxc118k="BANKING AND FINANCE"; 
}elseif($mxc118k>='022' && $mxc118k<='022'  ){
$statusfbiomxc118k1yy='27';$content='02';
$statusfbiomxc118k="BANKING AND FINANCE"; 
}
elseif($mxc118k>='03' && $mxc118k<='03'  ){
$statusfbiomxc118k1yy='27';$content='03';
$statusfbiomxc118k="INSURANCE"; 
}
elseif($mxc118k>='033' && $mxc118k<='033'  ){
$statusfbiomxc118k1yy='27';$content='03';
$statusfbiomxc118k="INSURANCE"; 
}
elseif($mxc118k>='04' && $mxc118k<='04'  ){
$content='04';
$statusfbiomxc118k="MANAGEMENT"; 
}elseif($mxc118k>='044' && $mxc118k<='044'  ){
$statusfbiomxc118k1yy='27';$content='04';
$statusfbiomxc118k="MANAGEMENT"; 
}
elseif($mxc118k>='05' && $mxc118k<='05'  ){
$content='05';
$statusfbiomxc118k="MARKETING"; 
}
elseif($mxc118k>='055' && $mxc118k<='055'  ){
$statusfbiomxc118k1yy='27';$content='05';
$statusfbiomxc118k="MARKETING"; 
}
 
 ?>" size="35">



</div>


</div>


		
                <div class="w2ui-field w2ui-span4">
                    <label style="float:left;width:200px;">Matricule:</label>
 




 <div> <input type="text" name="matricule" value="<?php  $levels=$row['extra'];
 
 
 $sex=$row['sex'];
 
 $mms=$row['codes'];
 
 
 $mm=$row['department'];
 $cc=$mm;


 
 
$mxc11UI=$levels;
if(empty($mxc11UI)){

 $statusfbiomxc11UI="X";}
elseif($mxc11UI>='200' && $mxc11UI<='200'&& $cc>='01' && $cc<='01'){

$statusfbiomxc11UI="HIMS/"; 
}elseif($mxc11UI>='200' && $mxc11UI<='200'&& $cc>='011' && $cc<='011'){

$statusfbiomxc11UI="HIMS/P"; 
}


elseif($mxc11UI>='200' && $mxc11UI<='200'&& $cc>='02' && $cc<='02'){

$statusfbiomxc11UI="HIMS/"; 
}elseif($mxc11UI>='200' && $mxc11UI<='200'&& $cc>='022' && $cc<='022'){

$statusfbiomxc11UI="HIMS/P"; 
}
elseif($mxc11UI>='200' && $mxc11UI<='200'&& $cc>='03' && $cc<='03'){

$statusfbiomxc11UI="HIMS/"; 
}elseif($mxc11UI>='200' && $mxc11UI<='200'&& $cc>='033' && $cc<='033'){

$statusfbiomxc11UI="HIMS/P"; 
}


elseif($mxc11UI>='200' && $mxc11UI<='200'&& $cc>='04' && $cc<='04'){

$statusfbiomxc11UI="HIMS/"; 
}elseif($mxc11UI>='200' && $mxc11UI<='200'&& $cc>='044' && $cc<='044'){

$statusfbiomxc11UI="HIMS/P"; 
}

elseif($mxc11UI>='200' && $mxc11UI<='200'&& $cc>='05' && $cc<='05'){

$statusfbiomxc11UI="HIMS/"; 
}elseif($mxc11UI>='200' && $mxc11UI<='200'&& $cc>='055' && $cc<='055'){

$statusfbiomxc11UI="HIMS/P"; 
}


elseif($mxc11UI>='300' && $mxc11UI<='300'&& $cc>='01' && $cc<='01'){

$statusfbiomxc11UI="HIMS/"; 
}elseif($mxc11UI>='300' && $mxc11UI<='300'&& $cc>='011' && $cc<='011'){

$statusfbiomxc11UI="HIMS/P"; 
}


elseif($mxc11UI>='300' && $mxc11UI<='300'&& $cc>='02' && $cc<='02'){

$statusfbiomxc11UI="HIMS/"; 
}elseif($mxc11UI>='300' && $mxc11UI<='300'&& $cc>='022' && $cc<='022'){

$statusfbiomxc11UI="HIMS/P"; 
}
elseif($mxc11UI>='300' && $mxc11UI<='300'&& $cc>='03' && $cc<='03'){

$statusfbiomxc11UI="HIMS/"; 
}elseif($mxc11UI>='300' && $mxc11UI<='300'&& $cc>='033' && $cc<='033'){

$statusfbiomxc11UI="HIMS/P"; 
}


elseif($mxc11UI>='300' && $mxc11UI<='300'&& $cc>='04' && $cc<='04'){

$statusfbiomxc11UI="HIMS/"; 
}elseif($mxc11UI>='300' && $mxc11UI<='300'&& $cc>='044' && $cc<='044'){

$statusfbiomxc11UI="HIMS/P"; 
}

elseif($mxc11UI>='300' && $mxc11UI<='300'&& $cc>='05' && $cc<='05'){

$statusfbiomxc11UI="HIMS/"; 
}elseif($mxc11UI>='300' && $mxc11UI<='300'&& $cc>='055' && $cc<='055'){

$statusfbiomxc11UI="HIMS/P"; 
}




elseif($mxc11UI>='400' && $mxc11UI<='400'  ){

$statusfbiomxc11UI="UBa/HIMS/"; 
}

 echo $statusfbiomxc11UI;
 
 
 
 
 ?><?php 
 echo $content;?>/<?php 
 echo $mu=date("y");?>/<?php

  $mxc11pop=$mm;
if(empty($mxc11pop)){

 $statusfbiomxc11pop="X";}
elseif($mxc11pop>='01' && $mxc11pop<='01'  ){
$content='01';$mops='matts';

}elseif($mxc11pop>='011' && $mxc11pop<='011'  ){
$content='01';$mops='mattsy';
$statusfbiomxc11pop1yy='27';
}
elseif($mxc11pop>='02' && $mxc11pop<='02'  ){
$content='02';$mops='matts';
}elseif($mxc11pop>='022' && $mxc11pop<='022'  ){
$statusfbiomxc11pop1yy='27';$content='02';$mops='mattsy';

}
elseif($mxc11pop>='03' && $mxc11pop<='03'  ){
$statusfbiomxc11pop1yy='27';$content='03';$mops='matts';

}
elseif($mxc11pop>='033' && $mxc11pop<='033'  ){
$statusfbiomxc11pop1yy='27';$content='03';$mops='mattsy';

}
elseif($mxc11pop>='04' && $mxc11pop<='04'  ){
$content='04';$mops='matts';
}elseif($mxc11pop>='044' && $mxc11pop<='044'  ){
$statusfbiomxc11pop1yy='27';$content='04';$mops='mattsy';

}
elseif($mxc11pop>='05' && $mxc11pop<='05'  ){
$content='05';$mops='matts';

}
elseif($mxc11pop>='055' && $mxc11pop<='055'  ){
$statusfbiomxc111yy='27';$content='05';$mops='mattsy';

}
 $mops;
$query="select * from $mops where roll='1'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
?>

<?php  $mst=$row[1];
 $NJI= $mst+1;
 $mxc161=$NJI;
if(empty($mxc161)){

 $statusfbiomxc161="X";}
elseif($mxc161>='0' && $mxc161<='10'  ){

$statusfbiomxc161="000$mxc161"; 
}
elseif($mxc161>='10' && $mxc161<='99'  ){

$statusfbiomxc161="00$mxc161"; 
}
elseif($mxc161>='100' && $mxc161<='1000'  ){

$statusfbiomxc161="0$mxc161"; 
}

elseif($mxc161>='1000' && $mxc161<='9999'  ){

$statusfbiomxc161="$mxc161"; 
}


elseif($mxc161>='10000' && $mxc161<='99999'  ){

$statusfbiomxc161="$mxc1610"; 
}

echo $statusfbiomxc161;
?>
<?php } ?><?php  $deptt=$row['codes'];
 
 
 
 $mxc11=$mm;

if(empty($mxc11)){

 $statusfbiomxc11="X";}
elseif($mxc11>='01' && $mxc11<='01'  ){
$content='01';
$statusfbiomxc11="ACCOUNTANCY"; 
}elseif($mxc11>='011' && $mxc11<='011'  ){
$content='01';
$statusfbiomxc11="ACCOUNTANCY"; 
$statusfbiomxc111yy='27';
}
elseif($mxc11>='02' && $mxc11<='02'  ){
$content='02';
$statusfbiomxc11="BANKING AND FINANCE"; 
}elseif($mxc11>='022' && $mxc11<='022'  ){
$statusfbiomxc111yy='27';$content='02';
$statusfbiomxc11="BANKING AND FINANCE"; 
}
elseif($mxc11>='03' && $mxc11<='03'  ){
$statusfbiomxc111yy='27';$content='03';
$statusfbiomxc11="INSURANCE"; 
}
elseif($mxc11>='033' && $mxc11<='033'  ){
$statusfbiomxc111yy='27';$content='03';
$statusfbiomxc11="INSURANCE"; 
}
elseif($mxc11>='04' && $mxc11<='04'  ){
$content='04';
$statusfbiomxc11="MANAGEMENT"; 
}elseif($mxc11>='044' && $mxc11<='044'  ){
$statusfbiomxc111yy='27';$content='04';
$statusfbiomxc11="MANAGEMENT"; 
}
elseif($mxc11>='05' && $mxc11<='05'  ){
$content='05';
$statusfbiomxc11="MARKETING"; 
}
elseif($mxc11>='055' && $mxc11<='055'  ){
$statusfbiomxc111yy='27';$content='05';
$statusfbiomxc11="MARKETING"; 
}


$mxc111=$statusfbiomxc11;


if(empty($mxc111)){

 $statusfbiomxc111x="X";}
elseif(($mxc111>='ACCOUNTANCY' && $mxc111<='ACCOUNTANCY')  && $levels>='200' && $levels<='200' ){

$statusfbiomxc111x="352500"; 
}
elseif($mxc111>='BANKING AND FINANCE' && $mxc111<='BANKING AND FINANCE'  && $levels>='200' && $levels<='200' ){

$statusfbiomxc111x="352500"; 
}

elseif($mxc111>='INSURANCE' && $mxc111<='INSURANCE'  && $levels>='200' && $levels<='200' ){

$statusfbiomxc111x="367500"; 
}

elseif($mxc111>='MANAGEMENT' && $mxc111<='MANAGEMENT'  && $levels>='200' && $levels<='200' ){

$statusfbiomxc111x="342500"; 
}


elseif($mxc111>='MARKETING' && $mxc111<='MARKETING'  && $levels>='200' && $levels<='200' ){

$statusfbiomxc111x="342500"; 
}



 
 
 
 ?>" size="35">



</div>

</div>

                <div class="w2ui-field w2ui-span4">
                    <label style="float:left;width:200px;">Department:</label>
 

<input type="hidden" name="levels" value="<?php echo $levels;?>">

<input type="hidden" name="sex" value="<?php echo $sex;?>">

<input type="hidden" name="barcode" value="<?php echo "$mm$mu$statusfbiomxc161";?>">
 <div> <input type="text" name="department" value="<?php echo $mms;
 
 
 
 
 
 
 
 
 
 
 
 
 ?>" size="35">



</div>

</div>







                <div class="w2ui-field w2ui-span4">
                    <label style="float:left;width:200px;">Registration Fees</label>
 




 <div> <input type="text" name="regfee" value="<?php 

$qry = mysql_query("select sum(amount+amount2) as total
from balancesheet where fname='$ms' and status='$names'and  db1='$take'  "); 
$row = mysql_fetch_assoc($qry); 
echo $savet=$row['total']; ?>" size="35">



</div>

</div>

                <div class="w2ui-field w2ui-span4">
                    <label style="float:left;width:200px;">Expecteed Amount</label>
 




 <div> <input type="text" name="expected_amount" value="<?php 
echo $statusfbiomxc111x;
?>">



</div>

</div>






                <div class="w2ui-field w2ui-span4">
                    <label style="float:left;width:200px;">Amount Paid</label>
 




 <div> <input type="text" name="amount_paid" value="<?php 

$qry = mysql_query("select sum(amount_paid) as total
from historic where matricule='$mats' and amountpaid='$deptt' and  oldb='$take'  "); 
$row = mysql_fetch_assoc($qry); 
echo $save=$row['total']; ?>" size="35">



</div>

</div>

                <div class="w2ui-field w2ui-span4">
                    <label style="float:left;width:200px;">Balance</label>
 




 <div> <input type="text" name="balance" value="<?php 

$qry = mysql_query("select sum(balance) as total
from historic where matricule='$mats' and amountpaid='$deptt' and  oldb='$take'  "); 
$row = mysql_fetch_assoc($qry); 
 $saveuiii=$row['total'];

echo ($statusfbiomxc111x-$saveuiii);


 ?>" size="35">



</div>

</div>
                <div class="w2ui-field w2ui-span4">
                    <label style="float:left;width:200px;">New Installment</label>
 


<input type="hidden" name="ids" value="<?php 

$mxc111y=$mm;
if(empty($mxc111y)){

 echo $statusfbiomxc111y="X";
 }
elseif($levels>='200' && $levels<='200' && $mm>='01' && $mm<='01' ){

echo $statusfbiomxc111y="3"; 
$trans="FORMS"; 
$transp=""; 
$mots2="0"; 
$mots1="5000";




$myy1=""; 

$myyy1="";

$mark=""; 
}
elseif($levels>='200' && $levels<='200' && $mm>='011' && $mm<='011' ){

echo $statusfbiomxc111y="29"; $statusfbiomxc111yuj="29";
$trans="FORMS"; 
$transp=""; 
$mots2="0"; 
$mots1="5000";




$myy1=""; 

$myyy1="";

$mark=""; 
}




elseif($levels>='200' && $levels<='200' && $mm>='02' && $mm<='02' ){

echo $statusfbiomxc111y="3"; $statusfbiomxc111yuj="";
$trans="FORMS"; 
$transp=""; 
$mots2="0"; 
$mots1="5000";




$myy1=""; 

$myyy1="";

$mark=""; 
}
elseif($levels>='200' && $levels<='200' && $mm>='022' && $mm<='022' ){

echo $statusfbiomxc111y="29"; $statusfbiomxc111yuj="29";
$trans="FORMS"; 
$transp=""; 
$mots2="0"; 
$mots1="5000";




$myy1=""; 

$myyy1="";

$mark=""; 
}






elseif($levels>='200' && $levels<='200' && $mm>='03' && $mm<='03' ){

echo $statusfbiomxc111y="3"; $statusfbiomxc111yuj="";
$trans="FORMS"; 
$transp=""; 
$mots2="0"; 
$mots1="5000";




$myy1=""; 

$myyy1="";

$mark=""; 
}
elseif($levels>='200' && $levels<='200' && $mm>='033' && $mm<='033' ){

echo $statusfbiomxc111y="29"; $statusfbiomxc111yuj="29";
$trans="FORMS"; 
$transp=""; 
$mots2="0"; 
$mots1="5000";




$myy1=""; 

$myyy1="";

$mark=""; 
}




elseif($levels>='200' && $levels<='200' && $mm>='04' && $mm<='04' ){

echo $statusfbiomxc111y="3"; $statusfbiomxc111yuj="";
$trans="FORMS"; 
$transp=""; 
$mots2="0"; 
$mots1="5000";




$myy1=""; 

$myyy1="";

$mark=""; 
}
elseif($levels>='200' && $levels<='200' && $mm>='044' && $mm<='044' ){

echo $statusfbiomxc111y="29"; $statusfbiomxc111yuj="29";
$trans="FORMS"; 
$transp=""; 
$mots2="0"; 
$mots1="5000";




$myy1=""; 

$myyy1="";

$mark=""; 
}




elseif($levels>='200' && $levels<='200' && $mm>='05' && $mm<='05' ){

echo $statusfbiomxc111y="3"; $statusfbiomxc111yuj="";
$trans="FORMS"; 
$transp=""; 
$mots2="0"; 
$mots1="5000";




$myy1=""; 

$myyy1="";

$mark=""; 
}
elseif($levels>='200' && $levels<='200' && $mm>='055' && $mm<='055' ){

echo $statusfbiomxc111y="29"; $statusfbiomxc111yuj="29";
$trans="FORMS"; 
$transp=""; 
$mots2="0"; 
$mots1="5000";




$myy1=""; 

$myyy1="";

$mark=""; 
}













elseif($levels>='200' && $levels<='200' && $mm>='01' && $mm<='01' ){

echo $statusfbiomxc111y="2"; $statusfbiomxc111yuj="";
$trans="REGISTRATION FEE"; 
$transp="historic";$transpp="courses";
$mots2="20000"; 
$mots1="5000"; 
$sunion="2500"; 
$myy1="$statusfbiomxc11UI$content/$constants/$statusfbiomxc161"; 

$myyy1="$mm$constants$statusfbiomxc161";

$okp="barcode";

$mark="query6";
}





elseif($levels>='200' && $levels<='200' && $mm>='011' && $mm<='011' ){

echo $statusfbiomxc111y="29"; $statusfbiomxc111yuj="29";
$trans="REGISTRATION FEE"; 
$transp="historic";$transpp="courses";
$mots2="20000"; 
$mots1="5000"; 
$sunion="2500"; 
$myy1="$statusfbiomxc11UI$content/$constants/$statusfbiomxc161"; 

$myyy1="$mm$constants$statusfbiomxc161";

$okp="barcode";

$mark="query6";
}


elseif($levels>='200' && $levels<='200' && $mm>='02' && $mm<='02' ){

echo $statusfbiomxc111y="2"; $statusfbiomxc111yuj="";
$trans="REGISTRATION FEE"; 
$transp="historic";$transpp="courses";
$mots2="20000"; 
$mots1="5000"; 
$sunion="2500"; 
$myy1="$statusfbiomxc11UI$content/$constants/$statusfbiomxc161"; 

$myyy1="$mm$constants$statusfbiomxc161";

$okp="barcode";

$mark="query6";
}





elseif($levels>='200' && $levels<='200' && $mm>='022' && $mm<='022' ){

echo $statusfbiomxc111y="29"; $statusfbiomxc111yuj="29";
$trans="REGISTRATION FEE"; 
$transp="historic";$transpp="courses";
$mots2="20000"; 
$mots1="5000"; 
$sunion="2500"; 
$myy1="$statusfbiomxc11UI$content/$constants/$statusfbiomxc161"; 

$myyy1="$mm$constants$statusfbiomxc161";

$okp="barcode";

$mark="query6";
}








elseif($levels>='200' && $levels<='200' && $mm>='03' && $mm<='03' ){

echo $statusfbiomxc111y="2"; $statusfbiomxc111yuj="";
$trans="REGISTRATION FEE"; 
$transp="historic";$transpp="courses";
$mots2="20000"; 
$mots1="5000"; 
$sunion="2500"; 
$myy1="$statusfbiomxc11UI$content/$constants/$statusfbiomxc161"; 

$myyy1="$mm$constants$statusfbiomxc161";

$okp="barcode";

$mark="query6";
}





elseif($levels>='200' && $levels<='200' && $mm>='033' && $mm<='033' ){

echo $statusfbiomxc111y="29"; $statusfbiomxc111yuj="29";
$trans="REGISTRATION FEE"; 
$transp="historic";$transpp="courses";
$mots2="20000"; 
$mots1="5000"; 
$sunion="2500"; 
$myy1="$statusfbiomxc11UI$content/$constants/$statusfbiomxc161"; 

$myyy1="$mm$constants$statusfbiomxc161";

$okp="barcode";

$mark="query6";
}





elseif($levels>='200' && $levels<='200' && $mm>='04' && $mm<='04' ){

echo $statusfbiomxc111y="2"; $statusfbiomxc111yuj="";
$trans="REGISTRATION FEE"; 
$transp="historic";$transpp="courses";
$mots2="20000"; 
$mots1="5000"; 
$sunion="2500"; 
$myy1="$statusfbiomxc11UI$content/$constants/$statusfbiomxc161"; 

$myyy1="$mm$constants$statusfbiomxc161";

$okp="barcode";

$mark="query6";
}





elseif($levels>='200' && $levels<='200' && $mm>='044' && $mm<='044' ){

echo $statusfbiomxc111y="29"; $statusfbiomxc111yuj="29";
$trans="REGISTRATION FEE"; 
$transp="historic";$transpp="courses";
$mots2="20000"; 
$mots1="5000"; 
$sunion="2500"; 
$myy1="$statusfbiomxc11UI$content/$constants/$statusfbiomxc161"; 

$myyy1="$mm$constants$statusfbiomxc161";

$okp="barcode";

$mark="query6";
}




elseif($levels>='200' && $levels<='200' && $mm>='05' && $mm<='05' ){

echo $statusfbiomxc111y="2"; $statusfbiomxc111yuj="";
$trans="REGISTRATION FEE"; 
$transp="historic";$transpp="courses";
$mots2="20000"; 
$mots1="5000"; 
$sunion="2500"; 
$myy1="$statusfbiomxc11UI$content/$constants/$statusfbiomxc161"; 

$myyy1="$mm$constants$statusfbiomxc161";

$okp="barcode";

$mark="query6";
}





elseif($levels>='200' && $levels<='200' && $mm>='055' && $mm<='055' ){

echo $statusfbiomxc111y="29"; $statusfbiomxc111yuj="29";
$trans="REGISTRATION FEE"; 
$transp="historic";$transpp="courses";
$mots2="20000"; 
$mots1="5000"; 
$sunion="2500"; 
$myy1="$statusfbiomxc11UI$content/$constants/$statusfbiomxc161"; 

$myyy1="$mm$constants$statusfbiomxc161";

$okp="barcode";

$mark="query6";
}















elseif($levels>='300' && $levels<='300' && $mm>='01' && $mm<='01' ){

echo $statusfbiomxc111y="3"; $statusfbiomxc111yuj="";
$trans="FORMS"; 
$transp=""; 
$mots2="0"; 
$mots1="5000";




$myy1=""; 

$myyy1="";

$mark=""; 
}
elseif($levels>='300' && $levels<='300' && $mm>='011' && $mm<='011' ){

echo $statusfbiomxc111y="29"; $statusfbiomxc111yuj="29";
$trans="FORMS"; 
$transp=""; 
$mots2="0"; 
$mots1="5000";




$myy1=""; 

$myyy1="";

$mark=""; 
}




elseif($levels>='300' && $levels<='300' && $mm>='02' && $mm<='02' ){

echo $statusfbiomxc111y="3"; $statusfbiomxc111yuj="";
$trans="FORMS"; 
$transp=""; 
$mots2="0"; 
$mots1="5000";




$myy1=""; 

$myyy1="";

$mark=""; 
}
elseif($levels>='300' && $levels<='300' && $mm>='022' && $mm<='022' ){

echo $statusfbiomxc111y="29"; $statusfbiomxc111yuj="29";
$trans="FORMS"; 
$transp=""; 
$mots2="0"; 
$mots1="5000";




$myy1=""; 

$myyy1="";

$mark=""; 
}






elseif($levels>='300' && $levels<='300' && $mm>='03' && $mm<='03' ){

echo $statusfbiomxc111y="3"; $statusfbiomxc111yuj="";
$trans="FORMS"; 
$transp=""; 
$mots2="0"; 
$mots1="5000";




$myy1=""; 

$myyy1="";

$mark=""; 
}
elseif($levels>='300' && $levels<='300' && $mm>='033' && $mm<='033' ){

echo $statusfbiomxc111y="29"; $statusfbiomxc111yuj="29";
$trans="FORMS"; 
$transp=""; 
$mots2="0"; 
$mots1="5000";




$myy1=""; 

$myyy1="";

$mark=""; 
}




elseif($levels>='300' && $levels<='300' && $mm>='04' && $mm<='04' ){

echo $statusfbiomxc111y="3"; $statusfbiomxc111yuj="";
$trans="FORMS"; 
$transp=""; 
$mots2="0"; 
$mots1="5000";




$myy1=""; 

$myyy1="";

$mark=""; 
}
elseif($levels>='300' && $levels<='300' && $mm>='044' && $mm<='044' ){

echo $statusfbiomxc111y="29"; $statusfbiomxc111yuj="29";
$trans="FORMS"; 
$transp=""; 
$mots2="0"; 
$mots1="5000";




$myy1=""; 

$myyy1="";

$mark=""; 
}




elseif($levels>='300' && $levels<='300' && $mm>='05' && $mm<='05' ){

echo $statusfbiomxc111y="3"; $statusfbiomxc111yuj="";
$trans="FORMS"; 
$transp=""; 
$mots2="0"; 
$mots1="5000";




$myy1=""; 

$myyy1="";

$mark=""; 
}
elseif($levels>='300' && $levels<='300' && $mm>='055' && $mm<='055' ){

echo $statusfbiomxc111y="29"; $statusfbiomxc111yuj="29";
$trans="FORMS"; 
$transp=""; 
$mots2="0"; 
$mots1="5000";




$myy1=""; 

$myyy1="";

$mark=""; 
}













elseif($levels>='300' && $levels<='300' && $mm>='01' && $mm<='01' ){

echo $statusfbiomxc111y="2"; $statusfbiomxc111yuj="";
$trans="REGISTRATION FEE"; 
$transp="historic";$transpp="courses";
$mots2="30000"; 
$mots1="5000"; 
$sunion="2500"; 
$myy1="$statusfbiomxc11UI$content/$constants/$statusfbiomxc161"; 

$myyy1="$mm$constants$statusfbiomxc161";

$okp="barcode";

$mark="query6";
}





elseif($levels>='300' && $levels<='300' && $mm>='011' && $mm<='011' ){

echo $statusfbiomxc111y="29"; $statusfbiomxc111yuj="29";
$trans="REGISTRATION FEE"; 
$transp="historic";$transpp="courses";
$mots2="30000"; 
$mots1="5000"; 
$sunion="2500"; 
$myy1="$statusfbiomxc11UI$content/$constants/$statusfbiomxc161"; 

$myyy1="$mm$constants$statusfbiomxc161";

$okp="barcode";

$mark="query6";
}


elseif($levels>='300' && $levels<='300' && $mm>='02' && $mm<='02' ){

echo $statusfbiomxc111y="2"; $statusfbiomxc111yuj="";
$trans="REGISTRATION FEE"; 
$transp="historic";$transpp="courses";
$mots2="30000"; 
$mots1="5000"; 
$sunion="2500"; 
$myy1="$statusfbiomxc11UI$content/$constants/$statusfbiomxc161"; 

$myyy1="$mm$constants$statusfbiomxc161";

$okp="barcode";

$mark="query6";
}





elseif($levels>='300' && $levels<='300' && $mm>='022' && $mm<='022' ){

echo $statusfbiomxc111y="29"; $statusfbiomxc111yuj="29";
$trans="REGISTRATION FEE"; 
$transp="historic";$transpp="courses";
$mots2="30000"; 
$mots1="5000"; 
$sunion="2500"; 
$myy1="$statusfbiomxc11UI$content/$constants/$statusfbiomxc161"; 

$myyy1="$mm$constants$statusfbiomxc161";

$okp="barcode";

$mark="query6";
}








elseif($levels>='300' && $levels<='300' && $mm>='03' && $mm<='03' ){

echo $statusfbiomxc111y="2"; $statusfbiomxc111yuj="";
$trans="REGISTRATION FEE"; 
$transp="historic";$transpp="courses";
$mots2="30000"; 
$mots1="5000"; 
$sunion="2500"; 
$myy1="$statusfbiomxc11UI$content/$constants/$statusfbiomxc161"; 

$myyy1="$mm$constants$statusfbiomxc161";

$okp="barcode";

$mark="query6";
}





elseif($levels>='300' && $levels<='300' && $mm>='033' && $mm<='033' ){

echo $statusfbiomxc111y="29"; $statusfbiomxc111yuj="29";
$trans="REGISTRATION FEE"; 
$transp="historic";$transpp="courses";
$mots2="30000"; 
$mots1="5000"; 
$sunion="2500"; 
$myy1="$statusfbiomxc11UI$content/$constants/$statusfbiomxc161"; 

$myyy1="$mm$constants$statusfbiomxc161";

$okp="barcode";

$mark="query6";
}





elseif($levels>='300' && $levels<='300' && $mm>='04' && $mm<='04' ){

echo $statusfbiomxc111y="2"; $statusfbiomxc111yuj="";
$trans="REGISTRATION FEE"; 
$transp="historic";$transpp="courses";
$mots2="30000"; 
$mots1="5000"; 
$sunion="2500"; 
$myy1="$statusfbiomxc11UI$content/$constants/$statusfbiomxc161"; 

$myyy1="$mm$constants$statusfbiomxc161";

$okp="barcode";

$mark="query6";
}





elseif($levels>='300' && $levels<='300' && $mm>='044' && $mm<='044' ){

echo $statusfbiomxc111y="29"; $statusfbiomxc111yuj="29";
$trans="REGISTRATION FEE"; 
$transp="historic";$transpp="courses";
$mots2="30000"; 
$mots1="5000"; 
$sunion="2500"; 
$myy1="$statusfbiomxc11UI$content/$constants/$statusfbiomxc161"; 

$myyy1="$mm$constants$statusfbiomxc161";

$okp="barcode";

$mark="query6";
}




elseif($levels>='300' && $levels<='300' && $mm>='05' && $mm<='05' ){

echo $statusfbiomxc111y="2"; $statusfbiomxc111yuj="";
$trans="REGISTRATION FEE"; 
$transp="historic";$transpp="courses";
$mots2="30000"; 
$mots1="5000"; 
$sunion="2500"; 
$myy1="$statusfbiomxc11UI$content/$constants/$statusfbiomxc161"; 

$myyy1="$mm$constants$statusfbiomxc161";

$okp="barcode";

$mark="query6";
}





elseif($levels>='300' && $levels<='300' && $mm>='055' && $mm<='055' ){

echo $statusfbiomxc111y="29"; $statusfbiomxc111yuj="29";
$trans="REGISTRATION FEE"; 
$transp="historic";$transpp="courses";
$mots2="30000"; 
$mots1="5000"; 
$sunion="2500"; 
$myy1="$statusfbiomxc11UI$content/$constants/$statusfbiomxc161"; 

$myyy1="$mm$constants$statusfbiomxc161";

$okp="barcode";

$mark="query6";
}































elseif($levels>='400' && $levels<='400' ){

echo $statusfbiomxc111y="3"; $statusfbiomxc111yuj="";
$transp="";
$trans="FORMS"; 

$mots2="5000"; 
$mots1="0"; 


$myy1=""; 

$myyy1="";

$okp="";

$mark="";

}

elseif(($mxc111y>='30000' && $mxc111y<='30000')  && $levels>='400' && $levels<='400' ){

echo $statusfbiomxc111y="3";$statusfbiomxc111yuj="";
 $transp="historic";$transpp="courses";
$trans="REGISTRATION FEE"; 

$mots2="22500"; 
$mots1="5000"; 

$sunion="2500"; 

$myy1="$statusfbiomxc11UI$content/$constants/$statusfbiomxc161"; 

$myyy1="$mm$constants$NJI";
 
$okp="barcode";

$mark="query6";
}


$mxc111yx=$statusfbiomxc111y;
if(empty($mxc111yx)){

 $statusfbiomxc111yx=$statusfbiomxc111yy;
 }
elseif($mxc111yx>'' ){
 $statusfbiomxc111yx=$statusfbiomxc111y;
}
?>">

<input type="hidden" name="mops" value="<?php echo $mops;?>" size="35">
<input type="hidden" name="mop" value="<?php echo $statusfbiomxc111yuj;?>" size="35">
 <div> <input type="text" name="paid" value="" size="35">



</div>

</div>

    <div class="w2ui-buttons">
        <button class="w2ui-btn" name="save" size="250px" style="flot:left; width:200px; height:30px;">Save</button>
    </div>
</div>
</fieldset>






















</table>
</form>
</div>
    <div class="w2ui-page page-0" style="float:left;width:200px; margin-left:650px;margin-top:-350px;">
 <?php 
				 $mxx=$mats;
				$qry = mysql_query("select id as total
from employees where empname='$mxx'  "); 
$row = mysql_fetch_assoc($qry); 
 $savep4=$row['total']; 
				?>
										<img src="load_image.php?pic_id=<?php echo $savep4;?>" width="200px" height="125p" style="border:1px solid #000;box-shadow:1px 1px 1px #fff;">
</div>

        <div style="clear: both; padding-top: 15px;">
           
                </div> 
<?php } ?>

       
</form>
<script type="text/javascript">
$(function () {
    $('#form').w2form({ 
        name   : 'form',
       
        url    : 'server/post',
        fields : [
            { field: 'first_name', type: 'text', required: true },
            { field: 'last_name',  type: 'text', required: true },
            { field: 'comments',   type: 'text'},
            { field: 'address1', type: 'text', required: true },
            { field: 'address2', type: 'text' },
            { field: 'city', type: 'text', required: true },
            { field: 'state', type: 'text', required: true },
            { field: 'zip', type: 'int', required: true },
            { field: 'short_bio', type: 'text' },
            { field: 'talk_name', type: 'text', required: true },
            { field: 'description', type: 'text' }
        ],
        actions: {
            reset: function () {
                this.clear();
            },
            save: function () {
                this.save();
            }
        }
    });
});
</script>
</div>
</body></html>