<?php
include 'dbc.php';
 $mkm=$_GET["roll"];


$mkm=$_GET["mats"];
$dates=$_GET["dates"];
 $take=$_GET["db1"];
 $fname=$_GET["usr_name"];






require'function.php';

require'functions.php';
?>
<?php 
		
		$qry = mysql_query("select  * from resit 
 where c109!='1' and matricule='$mkm' and sex>='1' and sex<='2'  group by fname  "); 
 $num_rows = mysql_num_rows($qry);

		
$qry = mysql_query("select levels as total
from courses where matricule='$mkm' and db1='$take'  "); 
$row = mysql_fetch_assoc($qry); 
 $levelsp=$row['total'];


 $mxc11=$levelsp;
if(empty($mxc11)){
$price="0";
 }
elseif($mxc11>="200" && $mxc11<="200" ){
$price="2500";
}
	elseif($mxc11>="300" && $mxc11<="300" ){
$price="2500";
}
		elseif($mxc11>="400" && $mxc11<="400"  ){
$price="3000";
}

		?>
		<?php   echo $totalpp=($price*$num_rows);
		
		?>
<?php
$matricule=$mkm;
if($matricule!="")
{


$acost=$_POST["acost"];
$cost=$_POST["cost"];
$fax=$_POST["fax"];



$qry = mysql_query("select fname as total
from courses where matricule='$mkm'  "); 
$row = mysql_fetch_assoc($qry); 
$fnames=$row['total']; 
 
 
 
 
 
 
 
 
$qry = mysql_query("select names as total
from sourd where heads='111'   "); 
$row = mysql_fetch_assoc($qry); 
$names=$row['total']; 
 

$qry = mysql_query("select ids as total
from sourd where heads='111'   "); 
$row = mysql_fetch_assoc($qry); 
$ids=$row['total'];

$qry = mysql_query("select typess as total
from sourd where heads='111'   "); 
$row = mysql_fetch_assoc($qry); 
$types=$row['total'];

$qry = mysql_query("select extra as total
from sourd where heads='111'   "); 
$row = mysql_fetch_assoc($qry); 
$extras=$row['total'];
$mxc11UIS=$total;
if(empty($mxc11UIS)){ 
 $extra=$extras;}
elseif($mxc11UIS>'' )
{  $extra=$acost;}


if(get_magic_quotes_gpc()){
$fnames=stripslashes($fnames);
}else{
$fnames=$fnames;

}


$dbi=$take;

$balance=$extra-$cost;
$day=date("j");
$year=date("Y");
$month=date("m");
$date=date("j/m/Y");

$rs_duplicate = mysql_query("select count(*) as total from balancesheet2   where fname='$mkm' ") or die(mysql_error());
list($total) = mysql_fetch_row($rs_duplicate);

if ($total > 0)
{
$err[] = "ERROR - The student already exists. Please try again with different student .";
$qry = mysql_query("select time as total
from balancesheet2 where fname='$mkm' and db1='$dbi'  "); 
$row = mysql_fetch_assoc($qry); 
$oldc=$row['total'];

		

$qry = mysql_query("select recid as total
from balancesheet2 where fname='$mkm' and db1='$dbi'  "); 
$row = mysql_fetch_assoc($qry); 
 $recid=$row['total'];

$qry = mysql_query("select folk as total
from balancesheet2 where fname='$mkm' and db1='$dbi'  "); 
$row = mysql_fetch_assoc($qry); 
$ricec=$row['total'];

$tmi=$num_rows;

if(empty($tmi)){
 
 $statusfbio=($oldc-$tmi);
 $totalppp=($statusfbio*$price);
 }
elseif($mxc11>$oldc){
 $statusfbio=($tmi-$oldc);
  $totalppp=($statusfbio*$price);
}
elseif($mxc11<$oldc){
 $statusfbio=($oldc-$tmi);
 
 $totalppp=($statusfbio*$price);
}


$query33="update balancesheet2  set  time='$num_rows',folk='$totalpp' where recid='$recid'";






mysql_query ($query33) or die ('could not updated:'.mysql_error());

}
$db1=$take;

if(empty($err)) {
$query2="insert into asourd  set  names='$fax',heads='$fax',
fname='$fname',ids='$ids',typess='$types',balance='$balance',date='$date',
matricule='$matricule',cost='$total',db1='$db1'";


$query3="insert into balancesheet  set  name='$names',status='$fname',folk='$totalpp',db1='$db1',
fname='$matricule',id='$ids',date='$date',
month='$month',day='$day',year='$year'";



$query33="insert into balancesheet2  set  name='$names',time='$num_rows',status='$fname',folk='$totalpp',db1='$db1',
fname='$matricule',id='$ids',date='$date',
month='$month',day='$day',year='$year'";






mysql_query ($query33) or die ('could not updated:'.mysql_error());
 }
}





?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="description" content="Php Code for View, Search, Edit and Delete Record" />
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Search Student  Record</title>
<style>
</style>
<link href="styles.css" rel="stylesheet" type="text/css">
<style>
input[type=submit]{
    cursor: pointer;
    font-size: 16px;
    height: 24px;
    padding: 3px;
}
input[type=text], input[type=password], input[type=submit] {
    -moz-border-radius: 2px;
    -ms-border-radius: 2px;
    -o-border-radius: 2px;
    -webkit-border-radius: 2px;
    border-radius: 2px;
	background-color: rgb(246, 254, 231);
}
.rotate {


-webkit-transform: rotate(-50deg);


-moz-transform: rotate(-50deg);


-ms-transform: rotate(-50deg);


-o-transform: rotate(-50deg);


filter: progid:DXImageTransform.Microsoft.BasicImage(rotation=3);

color:#989898;}
  
</style>
</head>
<body onload="window.print();" style="background:url('nn.png');">
<div style="margin-left:100px; margin-top:50px; float:left; width:700px; height:480px; BACKGROUND:URL('fm.png');">


<div style=" float:left; width:150px; height:70px;">
<img src="logo.png" width="150px" height="100px">
</div>

<div style=" float:left; width:550px; height:30px;text-transform:uppercase;text-align:center; font-size:19px; font-family:
verdana; text-shadow:1px 1px 1px #000; background:#ccc;">

<?php
$roll=$_GET["1"];
$query="select * from school where roll='1'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>

<?php echo $row[1];?>
<?php
}
?><br>
<?php
$roll=$_GET["1"];
$query="select * from school where roll='1'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>


<?php $into=$row[2];



?>
<?php
}
?>

<?php
$roll=$_GET["1"];
$query="select * from school where roll='2'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>


<?php $outof=$row[1];


$outofin=$row[2];
?>
<?php
}
?>

<?php
$roll=$_GET["1"];
$query="select * from school where roll='3'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>


<?php $inside=$row[1];


$inside2=$row[2];
?>
<?php
}
?>

<?php
$roll=$_GET["roll"];
$query="select * from balancesheet2 where fname='mkm'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>


<?php $nast=$fname;
$classy=$levelsp;

?>
<?php
}
?>
<?php

$timm=$row['folk']; 

?>
</div>

<div style=" float:left; width:550px; height:69px;text-transform:uppercase;text-align:center; font-size:14px; font-family:
verdana; color:#fff;text-shadow:1px 1px 1px #000; background:#000;">


<div style=" float:left; width:450px; height:20px;">
<b><?php echo $outof;?></b>

</div>


<div style=" float:left; width:600px; height:20px;font-size:11px; text-align:text-align:center;">
P.O. BOX 462 MOLYKO - BUEA<br>
CONTACT: +237 67982 1672/ 69636 8834

</div>
<div style=" float:left; width:400px; height:20px;font-size:11px; text-align:center;">
<?php echo $inside2;?>

</div>





</div>
<div style=" float:left; width:700px;margin-top:17px;  height:34px; text-align:left;
font-size:18px; ">

<?php
$roll=$_GET["1"];
$query="select * from rushs where roll='1'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>
<?php $take=$row[1];





$qry = mysql_query("select * FROM  balancesheet where db1='$take'  "); 
$num_rows=mysql_num_rows($qry);
  echo $nn=$num_rows; 
?>
		 

<?php } ?><?php
$roll=$_GET["roll"];
$query="select * from balancesheet where fname='$mkm'  and date='$dates' and db1='$take'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
 
 $mat=$row['fname'];$qry = mysql_query("select  levels as total
from courses where matricule='$mat'  and db1='$take'"); 
$row = mysql_fetch_assoc($qry); 
  $mxc11UI=$row['total'];
?><?php } ?>
<?php
$roll=$_GET["roll"];
$query="select * from balancesheet where fname='$mkm'  and date='$dates' and db1='$take'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>

<div style=" float:left; width:700px; margin-top:17px;TEXT-ALIGN:CENTER;  height:34px; 
font-size:28px; ">
<div style=" float:left; width:500px; margin-top:17px;TEXT-ALIGN:CENTER;  height:34px; 
font-size:28px; ">
CASH RECEIPT 


</div>

<div style=" float:left; width:200px; margin-top:17px;TEXT-ALIGN:CENTER;  height:34px; 
font-size:18px; ">
N<SUP>0</SUP> 00<?php echo  $mxc11UI;?><?PHP ECHO $row['recid'];?>


</div>




<div style=" float:left; width:700px; margin-top:37px;TEXT-ALIGN:CENTER; font-family:arial; height:300px; 
font-size:13px; ">

<div style=" float:left; width:170px; height:25px;font-size:17px;"> Received From M.</div>


<div style=" float:left; width:500px;border-bottom:1px solid #000;font-weight:normal; height:25px;font-size:17px;"> 


<div style=" float:left; width:300px;margin-top:3px;">
<?php   $mats=$mkm;
$status=$row['status'];
$dates=$row['date'];
$dates=$row['date'];
$a1=$row['amount'];$a2=$row['amount2'];$a1=$row['amount'];$a3=$row['folk'];$a4=$row['scholarship'];
$tol=$row['tmk'];
?><?php 
 $mxc11=$mats;
if(empty($mxc11)){

 echo $statusfbio=$status;}
elseif($mxc11>"" ){
$qry = mysql_query("select fname as total
from courses where matricule='$mats'   "); 
$row = mysql_fetch_assoc($qry); 
 echo $savee4=$row['total'];  
 
 }
 
 ?>
 <?php
 
 
 
$qry = mysql_query("select levels as total
from courses where matricule='$mats'   "); 
$row = mysql_fetch_assoc($qry); 
 $levels=$row['total'];  ?>
</div>

<div style=" float:left; width:200px;  height:25px;margin-top:3px;"></div></div>
<div style=" float:left; width:700px;TEXT-ALIGN:CENTER; font-family:arial; height:300px; 
font-size:13px; ">
<div style=" float:left; width:170px; height:25px;font-size:17px;"> <i>Matricule No.</i></div>


<div style=" float:left; width:500px;border-bottom:1px solid #000; height:25px;font-size:17px;"> 


<div style=" float:left; width:300px;margin-top:3px;">
<?php echo $mats;?>
</div>


</div>



<div style=" float:left; width:700px;margin-top:3px;TEXT-ALIGN:CENTER; font-family:arial; height:300px; 
font-size:13px; ">
<div style=" float:left; width:170px; height:25px;font-size:17px;"> <i>Amount in Figure</i></div>


<div style=" float:left; width:500px height:25px;font-size:17px;"> 


<div style=" float:left; width:200px;border:1px solid #000;margin-top:3px;">
<?php echo $tol;?> <i>frs C. F. A</i>
</div>
<div style=" float:left; width:100px;margin-top:3px;">
DATE
</div>
<div style=" float:left; width:200px;border-bottom:1px solid #000;margin-top:3px;">
<?php echo $dates;?>
</div>

</div>



<div style=" float:left; width:700px;margin-top:3px;TEXT-ALIGN:CENTER; font-family:arial; height:30px; 
font-size:13px; ">
<div style=" float:left; width:170px; height:25px;font-size:17px;"> <i>Amount in Words</i></div>


<div style=" float:left; width:500px;border-bottom:1px solid #000; height:25px;font-size:13px;"> 

<div style=" float:left; width:500px;margin-top:3px;">

<?php 
 $mmm=$tol;

		 $depppt=$row['amountpaid'];
		 
		$mmm=$row['amount_paid'];
	if(empty($mmm)){
		
$mmm="";
 $statusssmmm="$depppt";
}

elseif($mmm<=0){
 $colorf1chem="#FF0000";
 $statusssmmm="$mmm";
}
	

elseif($mmm>=0){
 $colorf1chem="#FF0000";
 $statusssmmm="$mmm";
}
		 
		 
 $mxc10=$statusssmmm;



?>
<div style="float:left;text-transform:uppercase;">
<?php




 echo convert_number_to_words($tol);


?> Francs C.F.A
</div>
 <i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

</div>
</div>

</div>
<div style=" float:left; margin-left:10px;width:660px;border-bottom:1px solid #000;TEXT-ALIGN:CENTER; font-family:arial; height:30px; 
font-size:13px; ">
<?php echo $statusfecon;?>
</div>
<?php }?>
<div style=" float:left; margin-top:20px;margin-left:10px;width:660px;TEXT-ALIGN:CENTER; font-family:arial; height:30px; 
font-size:13px; ">
DETAILS
</div>
<div style=" float:left; margin-left:10px;width:660px;border-bottom:1px solid #000;TEXT-ALIGN:CENTER; 
font-family:arial; height:auto; 
font-size:13px; ">
<div  style='float:left; width:660px;border-top:1px solid #000;
		 border-right:1px solid #000;border-left:1px solid #000; height:25px; font-family:arial;
		 font-size:13px;'>
<div  style='float:left; width:150px;border-right:1px solid #000;height:25px;'><b>N <sup>o</sup></b></div>
<div  style='float:left; width:280px; height:25px; border-right:1px solid #000;'>
<b>Purpose</b>

</div><div  style='float:left; width:160px; height:25px;'>Amount</div>

</div>
<?php
$search=$_POST["search"];
$flag=0;
$query="select * from balancesheet where  fname='$mkm' ";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 $flag=1;
		?>
		 <?php $mom=$row["tmk"];
		 
		 
		  $mxc11=$mom;
if(empty($mxc11)){}
elseif($mxc11>='30000' && $mxc11<='30000' ){
echo "<div  style='float:left; width:660px;border-top:1px solid #000;
		 border-right:1px solid #000;border-left:1px solid #000; height:25px; font-family:arial;
		 font-size:13px;'>
<div  style='float:left; width:150px; border-right:1px solid #000; height:25px;'>1</div>
<div  style='float:left; width:280px; height:25px; border-right:1px solid #000;'>


Registration Fee</div><div  style='float:left; width:100px; height:25px;'>25000</div>

</div>

<div  style='float:left; width:660px;border-top:1px solid #000;
		 border-right:1px solid #000;border-left:1px solid #000; height:25px; font-family:arial;
		 font-size:13px;'>
<div  style='float:left; width:150px; border-right:1px solid #000; height:25px;'>2</div>
<div  style='float:left; width:280px; height:25px; border-right:1px solid #000;'>


Application Form</div><div  style='float:left; width:100px; height:25px;'>5000</div>

</div>



";

}elseif($mxc11>='27500' && $mxc11<='27500' ){
echo "<div  style='float:left; width:660px;border-top:1px solid #000;
		 border-right:1px solid #000;border-left:1px solid #000; height:25px; font-family:arial;
		 font-size:13px;'>
<div  style='float:left; width:150px; border-right:1px solid #000; height:25px;'>1</div>
<div  style='float:left; width:280px; height:25px; border-right:1px solid #000;'>


Registration Fee</div><div  style='float:left; width:100px; height:25px;'>22500</div>

</div>

<div  style='float:left; width:660px;border-top:1px solid #000;
		 border-right:1px solid #000;border-left:1px solid #000; height:25px; font-family:arial;
		 font-size:13px;'>
<div  style='float:left; width:150px; border-right:1px solid #000; height:25px;'>2</div>
<div  style='float:left; width:280px; height:25px; border-right:1px solid #000;'>


Application Form</div><div  style='float:left; width:100px; height:25px;'>5000</div>

</div>


<div  style='float:left; width:660px;border-top:1px solid #000;
		 border-right:1px solid #000;border-left:1px solid #000; height:25px; font-family:arial;
		 font-size:13px;'>
<div  style='float:left; width:150px; border-right:1px solid #000; height:25px;'>3</div>
<div  style='float:left; width:280px; height:25px; border-right:1px solid #000;'>

Student Union</div><div  style='float:left; width:100px; height:25px;'>2500</div>

</div>















";

}
		 
		 
		 
		 
		 
		 
		 
		 ?>
	
	
	
	
<?php
		 }
		 if($flag==0)
		 echo "<tr><td colspan='3' align='center' style='color:red'>Record not found</td></tr>";
		 		 
?>

<div  style='float:left; width:660px;border-top:1px solid #000;
		 border-right:1px solid #000;border-left:1px solid #000; height:25px; font-family:arial;
		 font-size:13px;'>
<div  style='float:left; width:150px;  height:25px;'><B>TOTAL</div>
<div  style='float:left; width:281px; height:25px; border-right:1px solid #000;'>


</div><div  style='float:left; width:160px; height:25px;'># <?php

echo $tol; 
?> #</div>

</div>
</div>

<div  style='float:left; width:760px;margin-top:20px; height:25px; font-family:arial;
		 font-size:13px;'>

<div  style='float:left; width:150px;  height:25px;'><B>Balance</b></div>
		 
		 
		 
<div  style='float:left; width:250px;  height:25px; border-bottom:1px solid #000;'><B>= 0.0 frs C.F.A</div>
		 
		 

<div  style='float:left; width:150px;  height:25px; '><B><i>Signature</i></b></div>
		 

</div>
</div>


<br>


<br>

<br>

<br>

























<div style="margin-left:100px; margin-top:50px; float:left; width:700px; height:480px;BACKGROUND:URL('fm.png');">


<div style=" float:left; width:150px; height:70px;">
<img src="logo.png" width="150px" height="100px">
</div>

<div style=" float:left; width:550px; height:30px;text-transform:uppercase;text-align:center; font-size:19px; font-family:
verdana; text-shadow:1px 1px 1px #000; background:#ccc;">

<?php
$roll=$_GET["1"];
$query="select * from school where roll='1'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>

<?php echo $row[1];?>
<?php
}
?><br>
<?php
$roll=$_GET["1"];
$query="select * from school where roll='1'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>


<?php $into=$row[2];



?>
<?php
}
?>

<?php
$roll=$_GET["1"];
$query="select * from school where roll='2'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>


<?php $outof=$row[1];


$outofin=$row[2];
?>
<?php
}
?>

<?php
$roll=$_GET["1"];
$query="select * from school where roll='3'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>


<?php $inside=$row[1];


$inside2=$row[2];
?>
<?php
}
?>

<?php
$roll=$_GET["roll"];
$query="select * from balancesheet2 where fname='mkm'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>


<?php $nast=$fname;
$classy=$levelsp;

?>
<?php
}
?>
<?php

$timm=$row['folk']; 
?>
</div>

<div style=" float:left; width:550px; height:69px;text-transform:uppercase;text-align:center; font-size:14px; font-family:
verdana; color:#fff;text-shadow:1px 1px 1px #000; background:#000;">


<div style=" float:left; width:450px; height:20px;">
<b><?php echo $outof;?></b>

</div>


<div style=" float:left; width:600px; height:20px;font-size:11px; text-align:text-align:center;">
P.O. BOX 462 MOLYKO - BUEA<br>
CONTACT: +237 67982 1672/ 69636 8834

</div>
<div style=" float:left; width:400px; height:20px;font-size:11px; text-align:center;">
<?php echo $inside2;?>

</div>





</div>
<div style=" float:left; width:700px;margin-top:17px;  height:34px; text-align:left;
font-size:18px; ">

<?php
$roll=$_GET["1"];
$query="select * from rushs where roll='1'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>
<b>
<?php $take=$row[1];



?>
		 

<?php } ?>
<?php
$roll=$_GET["roll"];
$query="select * from balancesheet where fname='$mkm'  and date='$dates' and db1='$take'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>

<div style=" float:left; width:700px; margin-top:17px;TEXT-ALIGN:CENTER;  height:34px; 
font-size:28px; ">
<div style=" float:left; width:500px; margin-top:17px;TEXT-ALIGN:CENTER;  height:34px; 
font-size:28px; ">
CASH RECEIPT 


</div>

<div style=" float:left; width:200px; margin-top:17px;TEXT-ALIGN:CENTER;  height:34px; 
font-size:18px; ">
N<SUP>0</SUP> 00<?php echo  $mxc11UI;?><?PHP ECHO $row['recid'];?>


</div>




<div style=" float:left; width:700px; margin-top:37px;TEXT-ALIGN:CENTER; font-family:arial; height:300px; 
font-size:13px; ">

<div style=" float:left; width:170px; height:25px;font-size:17px;"> Received From M.</div>


<div style=" float:left; width:500px;border-bottom:1px solid #000;font-weight:normal; height:25px;font-size:17px;"> 


<div style=" float:left; width:300px;margin-top:3px;">
<?php   $mats=$mkm;
$status=$row['status'];
$dates=$row['date'];
$dates=$row['date'];
$a1=$row['amount'];$a2=$row['amount2'];$a1=$row['amount'];$a3=$row['folk'];$a4=$row['scholarship'];
$tol=$row['tmk'];
?><?php 
 $mxc11=$mats;
if(empty($mxc11)){

 echo $statusfbio=$status;}
elseif($mxc11>"" ){
$qry = mysql_query("select fname as total
from courses where matricule='$mats'   "); 
$row = mysql_fetch_assoc($qry); 
 echo $savee4=$row['total'];  
 
 }
 
 ?>
 <?php
 
 
 
$qry = mysql_query("select levels as total
from courses where matricule='$mats'   "); 
$row = mysql_fetch_assoc($qry); 
 $levels=$row['total'];  ?>
</div>

<div style=" float:left; width:200px;  height:25px;margin-top:3px;"></div></div>
<div style=" float:left; width:700px;TEXT-ALIGN:CENTER; font-family:arial; height:300px; 
font-size:13px; ">
<div style=" float:left; width:170px; height:25px;font-size:17px;"> <i>Matricule No.</i></div>


<div style=" float:left; width:500px;border-bottom:1px solid #000; height:25px;font-size:17px;"> 


<div style=" float:left; width:300px;margin-top:3px;">
<?php echo $mats;?>
</div>


</div>



<div style=" float:left; width:700px;margin-top:3px;TEXT-ALIGN:CENTER; font-family:arial; height:300px; 
font-size:13px; ">
<div style=" float:left; width:170px; height:25px;font-size:17px;"> <i>Amount in Figure</i></div>


<div style=" float:left; width:500px height:25px;font-size:17px;"> 


<div style=" float:left; width:200px;border:1px solid #000;margin-top:3px;">
<?php echo $tol;?> <i>frs C. F. A</i>
</div>
<div style=" float:left; width:100px;margin-top:3px;">
DATE
</div>
<div style=" float:left; width:200px;border-bottom:1px solid #000;margin-top:3px;">
<?php echo $dates;?>
</div>

</div>



<div style=" float:left; width:700px;margin-top:3px;TEXT-ALIGN:CENTER; font-family:arial; height:30px; 
font-size:13px; ">
<div style=" float:left; width:170px; height:25px;font-size:17px;"> <i>Amount in Words</i></div>


<div style=" float:left; width:500px;border-bottom:1px solid #000; height:25px;font-size:13px;"> 

<div style=" float:left; width:500px;margin-top:3px;">

<?php 
 $mmm=$tol;

		 $depppt=$row['amountpaid'];
		 
		$mmm=$row['amount_paid'];
	if(empty($mmm)){
		
$mmm="";
 $statusssmmm="$depppt";
}

elseif($mmm<=0){
 $colorf1chem="#FF0000";
 $statusssmmm="$mmm";
}
	

elseif($mmm>=0){
 $colorf1chem="#FF0000";
 $statusssmmm="$mmm";
}
		 
		 
 $mxc10=$statusssmmm;



?>
<div style="float:left;text-transform:uppercase;">
<?php




 echo convert_number_to_wordss($tol);


?> Francs C.F.A
</div>
 <i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

</div>
</div>

</div>
<div style=" float:left; margin-left:10px;width:660px;border-bottom:1px solid #000;TEXT-ALIGN:CENTER; font-family:arial; height:30px; 
font-size:13px; ">
<?php echo $statusfecon;?>
</div>
<?php }?>
<div style=" float:left; margin-top:20px;margin-left:10px;width:660px;TEXT-ALIGN:CENTER; font-family:arial; height:30px; 
font-size:13px; ">
DETAILS
</div>
<div style=" float:left; margin-left:10px;width:660px;border-bottom:1px solid #000;TEXT-ALIGN:CENTER; 
font-family:arial; height:auto; 
font-size:13px; ">
<div  style='float:left; width:660px;border-top:1px solid #000;
		 border-right:1px solid #000;border-left:1px solid #000; height:25px; font-family:arial;
		 font-size:13px;'>
<div  style='float:left; width:150px;border-right:1px solid #000;height:25px;'><b>N <sup>o</sup></b></div>
<div  style='float:left; width:280px; height:25px; border-right:1px solid #000;'>
<b>Purpose</b>

</div><div  style='float:left; width:160px; height:25px;'>Amount</div>

</div>
<?php
$search=$_POST["search"];
$flag=0;
$query="select * from balancesheet where  fname='$mkm' ";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 $flag=1;
		?>
		 <?php $mom=$row["tmk"];
		 
		 
		  $mxc11=$mom;
if(empty($mxc11)){}
elseif($mxc11>='30000' && $mxc11<='30000' ){
echo "<div  style='float:left; width:660px;border-top:1px solid #000;
		 border-right:1px solid #000;border-left:1px solid #000; height:25px; font-family:arial;
		 font-size:13px;'>
<div  style='float:left; width:150px; border-right:1px solid #000; height:25px;'>1</div>
<div  style='float:left; width:280px; height:25px; border-right:1px solid #000;'>


Registration Fee</div><div  style='float:left; width:100px; height:25px;'>25000</div>

</div>

<div  style='float:left; width:660px;border-top:1px solid #000;
		 border-right:1px solid #000;border-left:1px solid #000; height:25px; font-family:arial;
		 font-size:13px;'>
<div  style='float:left; width:150px; border-right:1px solid #000; height:25px;'>2</div>
<div  style='float:left; width:280px; height:25px; border-right:1px solid #000;'>


Application Form</div><div  style='float:left; width:100px; height:25px;'>5000</div>

</div>



";

}elseif($mxc11>='27500' && $mxc11<='27500' ){
echo "<div  style='float:left; width:660px;border-top:1px solid #000;
		 border-right:1px solid #000;border-left:1px solid #000; height:25px; font-family:arial;
		 font-size:13px;'>
<div  style='float:left; width:150px; border-right:1px solid #000; height:25px;'>1</div>
<div  style='float:left; width:280px; height:25px; border-right:1px solid #000;'>


Registration Fee</div><div  style='float:left; width:100px; height:25px;'>22500</div>

</div>

<div  style='float:left; width:660px;border-top:1px solid #000;
		 border-right:1px solid #000;border-left:1px solid #000; height:25px; font-family:arial;
		 font-size:13px;'>
<div  style='float:left; width:150px; border-right:1px solid #000; height:25px;'>2</div>
<div  style='float:left; width:280px; height:25px; border-right:1px solid #000;'>


Application Form</div><div  style='float:left; width:100px; height:25px;'>5000</div>

</div>


<div  style='float:left; width:660px;border-top:1px solid #000;
		 border-right:1px solid #000;border-left:1px solid #000; height:25px; font-family:arial;
		 font-size:13px;'>
<div  style='float:left; width:150px; border-right:1px solid #000; height:25px;'>3</div>
<div  style='float:left; width:280px; height:25px; border-right:1px solid #000;'>

Student Union</div><div  style='float:left; width:100px; height:25px;'>2500</div>

</div>















";

}
		 
		 
		 
		 
		 
		 
		 
		 ?>
	
	
	
	
<?php
		 }
		 if($flag==0)
		 echo "<tr><td colspan='3' align='center' style='color:red'>Record not found</td></tr>";
		 		 
?>

<div  style='float:left; width:660px;border-top:1px solid #000;
		 border-right:1px solid #000;border-left:1px solid #000; height:25px; font-family:arial;
		 font-size:13px;'>
<div  style='float:left; width:150px;  height:25px;'><B>TOTAL</div>
<div  style='float:left; width:281px; height:25px; border-right:1px solid #000;'>


</div><div  style='float:left; width:160px; height:25px;'># <?php

echo $tol; 
?> #</div>

</div>
</div>

<div  style='float:left; width:760px;margin-top:20px; height:25px; font-family:arial;
		 font-size:13px;'>

<div  style='float:left; width:150px;  height:25px;'><B>Balance</b></div>
		 
		 
		 
<div  style='float:left; width:250px;  height:25px; border-bottom:1px solid #000;'><B>= 0.0 </b> frs C.F.A</div>
		 
		 

<div  style='float:left; width:150px;  height:25px; '><B><i>Signature</i></b></div>
		 

</div>
</div>

</div>
