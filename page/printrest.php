<?php
include 'dbcs.php';
page_protect();

 $notes=$_SESSION['user_name'];
require'function.php';
?>
<?php
$roll=$_GET["1"];
$query="select * from users where  full_name='$notes'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>
<?php  $ids=$row['fax'];


?><?php } 
$nki=$_GET['roll'];


?>
<?php
$query="select * from users where full_name='$notes'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
?>

<?php   $teacher=$row['fax'];
?>
<?php }

$qry = mysql_query("select  name as total
from logo where id='$teacher'  "); 
$row = mysql_fetch_assoc($qry); 
$img=$row['total'];


$qry = mysql_query("select  school as total
from school where id='$teacher'  and tt='1' "); 
$row = mysql_fetch_assoc($qry); 
$f1name=$row['total'];


$qry = mysql_query("select  txts as total
from school where id='$teacher'  and tt='1' "); 
$row = mysql_fetch_assoc($qry); 
$tts=$row['total'];

$qry = mysql_query("select  trts as total
from school where id='$teacher'  and tt='1' "); 
$row = mysql_fetch_assoc($qry); 
$trts=$row['total'];



$qry = mysql_query("select  twon as total
from school where id='$teacher'  and tt='1' "); 
$row = mysql_fetch_assoc($qry); 
$town=$row['total'];




$qry = mysql_query("select  pobox as total
from school where id='$teacher'  and tt='1' "); 
$row = mysql_fetch_assoc($qry); 
$pobox=$row['total'];


$qry = mysql_query("select  pobox as total
from school where id='$teacher'  and tt='1' "); 
$row = mysql_fetch_assoc($qry); 
$pobox=$row['total'];



$qry = mysql_query("select  contact as total
from school where id='$teacher'  and tt='1' "); 
$row = mysql_fetch_assoc($qry); 
$contact=$row['total'];






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
<div style="margin-left:100px; margin-top:50px; float:left; width:700px; height:480px;BACKGROUND:URL('fm.png');">


<div style=" float:left; width:150px; height:70px;">
		 <img src="<?php echo $img;?>" width="100px" height="100px" >
</div>

<div style=" float:left; width:550px; height:30px;text-transform:uppercase;text-align:center; font-size:19px; font-family:
verdana; text-shadow:1px 1px 1px #000; background:#ccc;">
<?php echo $f1name;?>  <?php echo $trts;?><br>




<?php
$roll=$_GET["roll"];
$query="select * from historic where roll='roll'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>


<?php $nast=$row['student_name'];
$classy=$row['class'];

?>
<?php
}
?>
<?php
$roll=$_GET["roll"];
$qry = mysql_query("select  SUM(amount_paid) as total
from historic  where student_name='$nast' and class='$classy'"); 
$row = mysql_fetch_assoc($qry); 
$timm=$row['total']; 

?>
</div>

<div style=" float:left; width:550px; height:69px;text-transform:uppercase;text-align:center; font-size:14px; font-family:
verdana; color:#fff;text-shadow:1px 1px 1px #000; background:#000;">


<div style=" float:left; width:450px; height:20px;">
<?php echo $pobox;?><br>
		<?php echo $contact;?>

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




$qry = mysql_query("select * FROM  balancesheet where db1='$take'  "); 
$num_rows=mysql_num_rows($qry);
  $nn=$num_rows; 

?>
		 

<?php } ?><?php
$roll=$_GET["roll"];
$query="select * from balancesheet where recid='$roll' ";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
 $mat=$row['fname'];$qry = mysql_query("select  levels as total
from courses where matricule='$mat'  and db1='$take'"); 
$row = mysql_fetch_assoc($qry); 
  $mxc11UI=$row['total'];
?>



<?php } ?>
<?php
$roll=$_GET["roll"];
$query="select * from balancesheet where recid='$roll' ";
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
<?php  $mats=$row['fname'];
$status=$row['status'];
$dates=$row['date'];$take=$row['db1'];
$dates=$row['date'];
$a1=$row['amount'];$a2=$row['amount2'];$a1=$row['amount'];$a3=$row['folk'];;$a5=$row['sunion'];
$tol=($a1+$a2+$a3+$a4+$a5);




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
from courses where matricule='$mats' and db1='$take'   "); 
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
require 'functions.php';



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
$query="select * from balancesheet where  recid='$roll' ";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 $flag=1;
		 ?>
		 
		 
<?php 

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


FEES</div><div  style='float:left; width:100px; height:<?php echo $statusht4;?> ;'><?php echo $mxc114;?></div>

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

echo $tol; 
?> #</div>

</div>
</div>

<div  style='float:left; width:760px;margin-top:20px; height:25px; font-family:arial;
		 font-size:13px;'>

<div  style='float:left; width:150px;  height:25px;'><B>Balance</b></div>
		 
		 
		 
<div  style='float:left; width:250px;  height:25px; border-bottom:1px solid #000;'><B>= <?php

$mmmg=$mxc11;

if(empty($mmmg)){
		
$qry = mysql_query("select  (expected_amount-amount_paid) as total
from historic where matricule='$mats' and oldb='$db1'"); 
$row = mysql_fetch_assoc($qry); 
echo $row['total'];
}

elseif($mmmg>''){
echo "0.0";
}
	 
?></b> frs C.F.A</div>
		 

<div  style='float:left; width:150px;  height:25px; '><B><i>Signature</i></b></div>
		 

</div>
</div>

</div>



<br>



<br>

<br>

<br>












<div style=" margin-top:50px; float:left; width:700px; height:480px;BACKGROUND:URL('fm.png');">



<div style=" float:left; width:700px; height:10px;margin-top:80px;">



<div style=" float:left; width:150px; height:70px;">
		 <img src="<?php echo $img;?>" width="100px" height="100px" >
</div>

<div style=" float:left; width:550px; height:30px;text-transform:uppercase;text-align:center; font-size:19px; font-family:
verdana; text-shadow:1px 1px 1px #000; background:#ccc;">
<?php echo $f1name;?>  <?php echo $trts;?><br>




<?php
$roll=$_GET["roll"];
$query="select * from historic where roll='roll'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>


<?php $nast=$row['student_name'];
$classy=$row['class'];

?>
<?php
}
?>
<?php
$roll=$_GET["roll"];
$qry = mysql_query("select  SUM(amount_paid) as total
from historic  where student_name='$nast' and class='$classy'"); 
$row = mysql_fetch_assoc($qry); 
$timm=$row['total']; 

?>
</div>

<div style=" float:left; width:550px; height:69px;text-transform:uppercase;text-align:center; font-size:14px; font-family:
verdana; color:#fff;text-shadow:1px 1px 1px #000; background:#000;">


<div style=" float:left; width:450px; height:20px;">
<?php echo $pobox;?><br>
		<?php echo $contact;?>

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
$query="select * from balancesheet where recid='$roll' ";
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
<?php  $mats=$row['fname'];
$status=$row['status'];
$dates=$row['date'];$take=$row['db1'];
$dates=$row['date'];
$a1=$row['amount'];$a2=$row['amount2'];$a1=$row['amount'];$a3=$row['folk'];$a5=$row['sunion'];
$tol=($a1+$a2+$a3+$a4+$a5);
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
from courses where matricule='$mats' and db1='$take'   "); 
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
require 'functiony.php';



 echo convert_number_to_wordsy($tol);


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
$query="select * from balancesheet where  recid='$roll' ";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 $flag=1;
		 ?>
		 
		 
<?php $mxc11=$row['amount']; 
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


FEES</div><div  style='float:left; width:100px; height:<?php echo $statusht4;?> ;'><?php echo $mxc114;?></div>

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

echo $tol; 
?> #</div>

</div>
</div>

<div  style='float:left; width:760px;margin-top:20px; height:25px; font-family:arial;
		 font-size:13px;'>

<div  style='float:left; width:150px;  height:25px;'><B>Balance</b></div>
		 
		 
		 
<div  style='float:left; width:250px;  height:25px; border-bottom:1px solid #000;'><B>= <?php

$mmmg=$mxc11;

if(empty($mmmg)){
		
$qry = mysql_query("select  (expected_amount-amount_paid) as total
from historic where matricule='$mats' and oldb='$db1'"); 
$row = mysql_fetch_assoc($qry); 
echo $row['total'];
}

elseif($mmmg>''){
echo "0.0";
}
?></b> frs C.F.A</div>
		 
		 

<div  style='float:left; width:150px;  height:25px; '><B><i>Signature</i></b></div>
		 

</div>
</div>

</div>
