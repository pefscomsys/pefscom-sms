<?php
include 'dbcs.php';
page_protect();

 $notes=$_SESSION['user_name'];
require'function.php';
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
<body  onload='window.print();'>
<?php
 $mats=$_GET['mat'];
$date=$_GET["date"];$folk=$_GET["afolk"];$fname=$_GET["fname"];$db1=$_GET["db1"]; $db1s=$_GET["db1"];
?>
<div style="margin-left:100px; margin-top:50px; float:left; width:700px; height:480px;">





<?php
 $mats=$_GET['mat'];
$date=$_GET["date"];$folk=$_GET["afolk"];$fname=$_GET["fname"];$db1=$_GET["db1"]; $db1s=$_GET["db1"];
$query="select CAST(student_name AS text) as student_name,CAST(classs as text) as classs,CAST(levels as text) as levels,CAST(amount_paid as float) as paid
,CAST(expected_amount as float) as exp


 from historic where matricule='$mats' and oldb='$db1'";
$result=mssql_query($query);
		 while ($row = mssql_fetch_array($result)) {
		 
		 
 
?>


<?php $nast=$row['student_name'];
$classy=$row['classs'];
$timm=$row['paid'];

$qry = mssql_query("select  CAST(deptf as text) as id
from [cg2015].[dbo].[classes] where classs='$classy' "); 
$row = mssql_fetch_assoc($qry);
 $id=$row['id'];

$qry = mssql_query("select  CAST(school as text) as school, CAST(town as text) as town, CAST(code as text) as code,
 CAST(contact as text) as contact, CAST(website as text) as website, CAST(email as text) as email
from [cg2015].[dbo].[school] where ids='$id' "); 
$row = mssql_fetch_assoc($qry); 




 $school=$row['school'];  $code=$row['code']; $address=$row['town']; 
 $website=$row['website'];  $email=$row['email']; $contact=$row['contact']; 
 
?>
<?php
}
?>


<div style=" float:left; width:650px; height:80px;text-transform:uppercase;text-align:center; font-size:16px; font-family:
verdana;  border-radius:25px 25px 25px 25px; border:1px solid #000; padding-top: 15px;">
	<h4 style='margin-top:-3px;'><?php echo $school;?></h4>

<div style="float:left;margin-top:-10px;">
	<span style="text-align: center;">
	<?php echo $website;?><?php echo $email;?>
		<?php echo $contact;?></b><br>
		</span>
	
</div>

</div>
<div style=" float:left; width:700px;margin-top:0px;  height:34px; text-align:left;
font-size:18px; ">

<?

$take=$db1;

$qry = mssql_query("select count(*) as total FROM  balancesheet where db1='$db1s'  and fname='$mats' and date='$date' "); 
$row = mssql_fetch_assoc($qry); 
  $nm=$row['total']; 

?>
<?php
 $query="select CAST(fname as text) as fname,

 CAST(name as text) as name, CAST(amount as float) as amount, CAST(amount2 as float) as amount2, CAST(tmk as float) as folk

, CAST(balance as float) as balance, CAST(sunion as float) as sunion

, CAST(date as text) as date
, receiptno
 from balancesheet where  db1='$db1s'  and fname='$mats' and date='$date' and folk='$folk' ";
$result=mssql_query($query);
		 while ($row = mssql_fetch_array($result)) {
		 
		 
 
?>

<div style=" float:left; width:700px; margin-top:17px;TEXT-ALIGN:CENTER;  height:34px; 
font-size:28px; ">
<div style=" float:left; width:500px; margin-top:17px;TEXT-ALIGN:CENTER;  height:34px; 
font-size:28px; ">
CASH RECEIPT 


</div>

<div style=" float:left; width:200px; margin-top:17px;TEXT-ALIGN:CENTER;  height:34px; 
font-size:18px; background-color: #aaa;">
N<SUP>0</SUP> 00<?php echo  $mxc11UI;?><?PHP echo $b= $row['receiptno'];


?>


</div>




<div style=" float:left; width:700px; margin-top:17px;TEXT-ALIGN:CENTER; font-family:arial; height:300px; 
font-size:13px; ">

<div style=" float:left; width:170px; height:25px;font-size:17px;"> Received From M.</div>


<div style=" float:left; width:500px;border-bottom:1px solid #000;font-weight:normal; height:25px;font-size:17px;"> 


<div style=" float:left; width:400px;margin-top:3px;">
<?php    $mats=$row['fname'];
$status=$row['status'];
$dates=$row['date'];
$dates=$row['date'];
$a1=$row['amount'];$a2=$row['amount2'];$a3=$row['folk'];;$a4=$row['sunion'];
 $tol=($a1+$a2+$a3+$a4+$a5);




?><?php 
 $mxc11=$mats;
if(empty($mxc11)){

 echo $statusfbio=$status;}
elseif($mxc11>"" ){
	echo  $ms=$row['name'];
 }
 
 ?>
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
<?php echo number_format($tol);?> <i>frs C. F. A</i>
</div>
<div style=" float:left; width:100px;margin-top:3px;">
DATE
</div>
<div style=" float:left; width:200px;border-bottom:1px solid #000;margin-top:3px;">
<?php //$dates;
$day = substr($dates, 0, 2);
$month = substr($dates, 2, 2);
$year = substr($dates, 4, 4);

echo $day . '/' . $month . '/' . $year;
?>
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
require 'functions.php';



 echo convert_number_to_wordss($tol);


?> Francs C.F.A
</div>
 <i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

</div>
</div>

</div>
<?php }?>



<div style=" float:left; margin-top:10px;margin-left:10px;width:660px;TEXT-ALIGN:CENTER; font-family:arial; height:30px; 
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
 $query="select CAST(fname as text) as fname,

 CAST(name as text) as name, CAST(amount as float) as amount, CAST(amount2 as float) as amount2, CAST(tmk as float) as folk

, CAST(balance as float) as balance, CAST(sunion as float) as sunion

 from balancesheet where  db1='$db1s'  and fname='$mats' and date='$date'  and folk='$folk'";
$result=mssql_query($query);
		 while ($row = mssql_fetch_array($result)) {
		 $flag=1;
		 ?>
		 
		 
<?php 
$balance=$row["balance"];
$db1=$row["db1"];
$mxc11=$row['amount']; 
if(empty($mxc11)){
 $statusht="0px";
  $statusbr="0px";
    $statuscol="#fff";
 }
elseif($mxc11>'' ){
 $statusht="25px";
  $statusbr="1px";
    $statuscol="#000";
}?>

<?php $mxc112=$row['amount2']; 
if(empty($mxc112)){
 $statusht2="0px";
  $statusbr2="0px";
    $statuscol2="#fff";
 }
elseif($mxc112>'' ){
 $statusht2="25px";
  $statusbr2="1px";
    $statuscol2="#000";
}?><?php $mxc113=$row['sunion']; 
if(empty($mxc113)){
 $statusht3="0px";
  $statusbr3="0px";
    $statuscol3="#fff";
 }
elseif($mxc113>'' ){
 $statusht3="25px";
  $statusbr3="1px";
    $statuscol3="#000";
}?>


<?php $mxc114=$row['folk']; 
if(empty($mxc114)){
 $statusht4="0px";
  $statusbr4="0px";
    $statuscol4="#fff";
 }
elseif($mxc114>'' ){
 $statusht4="25px";
  $statusbr4="1px";
    $statuscol4="#000";
}?>
		 <div  style='float:left; width:660px;color:<?php echo $statuscol;?>;border-top:<?php echo $statusbr;?> solid <?php echo $statuscol;?>;
		 border-right:<?php echo $statusbr;?> solid <?php echo $statuscol;?>;border-left:<?php echo $statusbr;?> solid <?php echo $statuscol;?>; 
		 height:<?php echo $statusht;?> ; font-family:arial;
		 font-size:13px;'>
<div  style='float:left; width:150px;border-right:<?php echo $statusbr;?> solid <?php echo $statuscol;?>;  height:<?php echo $statusht;?> ;'>1</div>
<div  style='float:left; width:280px; height:<?php echo $statusht;?> ;border-right:<?php echo $statusbr;?> solid <?php echo $statuscol;?>; '>


FORM</div><div  style='float:left; width:100px; height:<?php echo $statusht;?> ;'><?php echo $mxc11;?></div>

</div>



	 <div  style='float:left; width:660px;color:<?php echo $statuscol2;?>;border-top:<?php echo $statusbr2;?> solid <?php echo $statuscol2;?>;
		 border-right:<?php echo $statusbr2;?> solid <?php echo $statuscol2;?>;border-left:<?php echo $statusbr2;?> solid <?php echo $statuscol2;?>; 
		 height:<?php echo $statusht2;?> ; font-family:arial;
		 font-size:13px;'>
<div  style='float:left; width:150px;border-right:<?php echo $statusbr2;?> solid <?php echo $statuscol2;?>;  height:<?php echo $statusht2;?> ;'>2</div>
<div  style='float:left; width:280px; height:<?php echo $statusht2;?> ;border-right:<?php echo $statusbr2;?> solid <?php echo $statuscol2;?>; '>


REGISTRATION FEE</div><div  style='float:left; width:100px; height:<?php echo $statusht2;?> ;'><?php echo $mxc112;?></div>

</div>
	 <div  style='float:left; width:660px;color:<?php echo $statuscol3;?>;border-top:<?php echo $statusbr3;?> solid <?php echo $statuscol3;?>;
		 border-right:<?php echo $statusbr3;?> solid <?php echo $statuscol3;?>;border-left:<?php echo $statusbr3;?> solid <?php echo $statuscol3;?>; 
		 height:<?php echo $statusht3;?> ; font-family:arial;
		 font-size:13px;'>
<div  style='float:left; width:150px;border-right:<?php echo $statusbr3;?> solid <?php echo $statuscol3;?>;  height:<?php echo $statusht3;?> ;'>3</div>
<div  style='float:left; width:280px; height:<?php echo $statusht3;?> ;border-right:<?php echo $statusbr3;?> solid <?php echo $statuscol3;?>; '>


STUDENT UNION</div><div  style='float:left; width:100px; height:<?php echo $statusht2;?> ;'><?php echo $mxc113;?></div>

</div>


	 <div  style='float:left; width:660px;color:<?php echo $statuscol4;?>;border-top:<?php echo $statusbr4;?> solid <?php echo $statuscol4;?>;
		 border-right:<?php echo $statusbr4;?> solid <?php echo $statuscol4;?>;border-left:<?php echo $statusbr4;?> solid <?php echo $statuscol4;?>; 
		 height:<?php echo $statusht4;?> ; font-family:arial;
		 font-size:13px;'>
<div  style='float:left; width:150px;border-right:<?php echo $statusbr4;?> solid <?php echo $statuscol4;?>;  height:<?php echo $statusht4;?> ;'>1B</div>
<div  style='float:left; width:280px; height:<?php echo $statusht4;?> ;border-right:<?php echo $statusbr4;?> solid <?php echo $statuscol4;?>; '>


FEES</div><div  style='float:left; width:100px; height:<?php echo $statusht4;?> ;'><?php echo number_format($mxc114);?></div>

</div>




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

echo number_format($tol); 
?> #</div>

</div>
</div>

<div  style='float:left; width:760px;margin-top:20px; height:25px; font-family:arial;
		 font-size:13px;'>

		 

<div  style='float:left; width:150px;  height:25px; '><B><i>Signature</i></b></div>
		 

</div>
</div>

</div>



<br>



<br>

<br>

<br>







