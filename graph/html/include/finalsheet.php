<?php
header("Content-type: application/vnd.ms-excel");
header("Content-Disposition: attachment;Filename=document_name.xls");
?><?php

include 'dbcs.php';
ini_set('max_execution_time', 300250000); //300 seconds = 5 minutes
$ms=$_GET['roll'];
page_protect();


 $notes=$_SESSION['user_name'];

$user_name=$notes;
if(@$_SESSION['userlevel']!=11){header("location: login.php?error=Unauthorized access");}




 $ip=@$_SERVER['REMOTE_ADDR'];
 $department=$_POST["department"];
 $levels=$_POST["levels"];
 
 $semester=$_POST["semester"];
 ?>

<?php
$roll=$_GET["$semester"];
$query="select * from rush where roll='$semester'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>
<?php $take=$row[$semester];
$table="courses";
?>
<?php } ?>
<?php
$roll=$_GET["1"];
$query="select * from gradebb where roll='1'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
?>

<?php  $rangx1=$row['from1'];
$rangx2=$row['from2'];
$c1=$row['comments'];
$gpa1=$row['comments'];

?>
<?php } ?>




<?php
$roll=$_GET["1"];
$query="select * from gradebb where roll='2'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
?>

<?php  $rangx3=$row['from1'];
$rangx4=$row['from2'];
$c2=$row['comments'];
$gpa2=$row['comments'];
?>
<?php } ?>









<?php
$roll=$_GET["1"];
$query="select * from gradebb where roll='3'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
?>

<?php  $rangx5=$row['from1'];
$rangx6=$row['from2'];

$c3=$row['comments'];
$gpa3=$row['comments'];
?>
<?php } ?>







<?php
$roll=$_GET["1"];
$query="select * from gradebb where roll='4'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
?>

<?php  $rangx7=$row['from1'];
$rangx8=$row['from2'];

$c4=$row['comments'];
$gpa4=$row['comments'];
?>
<?php } ?>








<?php
$roll=$_GET["1"];
$query="select * from gradebb where roll='5'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
?>

<?php     $rangx9=$row['from1'];
 $rangx10=$row['from2'];
 
$c5=$row['comments'];
$gpa5=$row['comments'];
?>
<?php } ?>

<?php
$roll=$_GET["1"];
$query="select * from gradebb where roll='6'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
?>

<?php     $rangx11=$row['from1'];
 $rangx12=$row['from2'];
 
$c6=$row['comments'];
$gpa6=$row['comments'];
?>
<?php } ?>

<?php
$roll=$_GET["1"];
$query="select * from gradebb where roll='7'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
?>

<?php     $rangx13=$row['from1'];
 $rangx14=$row['from2'];
 
$c7=$row['comments'];
$gpa7=$row['comments'];
?>
<?php } ?>
<?php
$roll=$_GET["1"];
$query="select * from gradebb where roll='8'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
?>

<?php     $rangx15=$row['from1'];
 $rangx16=$row['from2'];
 
$c8=$row['comments'];
$gpa8=$row['comments'];
?>
<?php } ?>
<?php
$roll=$_GET["1"];
$query="select * from gradebb where roll='9'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
?>

<?php     $rangx17=$row['from1'];
 $rangx18=$row['from2'];
 
$c9=$row['comments'];
$gpa9=$row['comments'];
?>
<?php } ?>
 <html>
 <head>
 
<style type="text/css">
.ExcelTableFormationCol {
                 
                  text-align: center;
                  font-family: Arial Narrow;
                  font-size: 14px;
                }

.ExcelTableFormationRow {
                  background-color: WHEAT;
                  text-align: center;
              font-family: Calibri;
            }
</style>
</head>
<body>
<div style="margin:auto; width:10px; height:500px;">
<div style="float:left; width:900px; height:250px;">

<div style="float:left; width:227px; height:250px;">
<div style="float:left; width:207px; height:191px;">

<img src="bamenda.png">



</div>

</div>


<div style="float:left; width:250px; height:250px;">

<div style="float:left; width:250px; height:25px;">
<b>The University of Bamenda</b>
</div>
<div style="float:left; width:250px; height:25px;">
<b>P.o. Box 492</b>
</div>



</div>

<div style="float:left; width:250px; height:250px;">




</div>


</div>
 
 
 
<table cellspacing="0" cellpadding="0"class="gridtable" style="width:1000px;border-collapse: collapse; border-bottom-width: 0px; border-right-width: 0px;color:#000;"><tr style="background-color: 
#EEEEEE;">
<tr><td style="background:#ccc;border-bottom:1px solid #000;border-left:1px solid #000;border-top:1px solid #000;padding:10px;">Student Details
</td>

<td  style="background:#ccc;border-right:1px solid #000;border-bottom:1px solid #000;border-left:1px solid #000;padding:10px;border-top:1px solid #000;">First Semester</td>
<td  style="background:#fff;border-right:1px solid #000;border-bottom:1px solid #000;border-left:1px solid #000;padding:10px;border-top:1px solid #000;">Second Semester</td>

<td  style="background:#ccc;border-right:1px solid #000;border-bottom:1px solid #000;border-left:1px solid #000;padding:10px;border-top:1px solid #000;">Resit Semester</td>



</tr>




<tr><td><table cellspacing="0" cellpadding="0" style="margin-top:0px;"><tr>
 <td style="border-bottom:1px solid #000;border-left:1px solid #000;width:180px;
 padding:10px;height:70px;"></td><td 
style="border-bottom:1px solid #000;border-left:1px solid #000;border-right:1px solid #000;width:303px;padding:10px;height:70px;">Full Names</td></tr></table>
 </td><td>
 
 <table   cellspacing="0" cellpadding="0" style="margin-top:0px;"><tr><td>
 
 <?php 
$dept=$_POST["department"];
$levels=$_POST["levels"];
$db1=$_POST["db1"];
$query = mysql_query("select  * from subject where department='$dept' and year1='$levels' and year2='1' and db1>''  and acc='$db1' order by subject ASC"); 

		 while ($row = mysql_fetch_array($query)) {
		 
		 
		 
		 
		 
		 ?>
 <td style="border-bottom:1px solid #000;font-size:13px;border-right:1px solid #000;'
 width:70px;padding:10px;height:70px;"><?php echo $row["db1"];?></td ">
<?php } ?></tr></table>



</td>



<td><table   cellspacing="0" cellpadding="0" style="margin-top:0px;"><tr><td>
 
 <?php 


$query = mysql_query("select  * from subject where department='$dept' and year1='$levels' and year2='2' and db1>''  and acc='$db1'order by subject ASC"); 

		 while ($row = mysql_fetch_array($query)) {
		 
		 
		 
		 
		 
		 ?>
 <td style="border-bottom:1px solid #000;font-size:13px;border-right:1px solid #000;
 width:70px;padding:10px;height:70px;"><?php echo $row["db1"];?></td>
<?php } ?></tr></table></td>




<td><table   cellspacing="0" cellpadding="0" style="margin-top:0px;"><tr><td>
 
 <?php 


$query = mysql_query("select  * from subject where department='$dept' and year1='$levels' and year2>='1' and  year2<='2'and db1>'' and acc='$db1'order by subject ASC"); 

		 while ($row = mysql_fetch_array($query)) {
		 
		 
		 
		 
		 
		 ?>
 <td style="border-bottom:1px solid #000;font-size:13px;border-right:1px solid #000;width:70px;
 padding:10px;height:70px;"><?php echo $row["db1"];?></td>
<?php } ?></tr></table></td>



</tr>
















<tr><td><table cellspacing="0" cellpadding="0" style="margin-top:0px;"><tr>
 <td style="border-bottom:1px solid #000;border-left:1px solid #000;width:180px;
 padding:10px;height:70px;"></td><td 
style="border-bottom:1px solid #000;border-left:1px solid #000;border-right:1px solid #000;width:303px;padding:10px;height:70px;">Full Names</td></tr></table>
 </td><td>
 
 <table   cellspacing="0" cellpadding="0" style="margin-top:0px;"><tr><td>
 
 <?php 
$dept=$_POST["department"];
$levels=$_POST["levels"];
$db1=$_POST["db1"];
$query = mysql_query("select  * from subject where department='$dept' and year1='$levels' and year2='1' and db1>''  and acc='$db1' order by subject ASC"); 

		 while ($row = mysql_fetch_array($query)) {
		 
		 
		 
		 
		 
		 ?>
 <td style="border-bottom:1px solid #000;font-size:13px;border-right:1px solid #000;'
 width:70px;padding:10px;height:70px;"><?php echo $row["credit"];?></td ">
<?php } ?></tr></table>



</td>



<td><table   cellspacing="0" cellpadding="0" style="margin-top:0px;"><tr><td>
 
 <?php 


$query = mysql_query("select  * from subject where department='$dept' and year1='$levels' and year2='2' and db1>''  and acc='$db1'order by subject ASC"); 

		 while ($row = mysql_fetch_array($query)) {
		 
		 
		 
		 
		 
		 ?>
 <td style="border-bottom:1px solid #000;font-size:13px;border-right:1px solid #000;
 width:70px;padding:10px;height:70px;"><?php echo $row["credit"];?></td>
<?php } ?></tr></table></td>




<td><table   cellspacing="0" cellpadding="0" style="margin-top:0px;"><tr><td>
 
 <?php 


$query = mysql_query("select  * from subject where department='$dept' and year1='$levels' and year2>='1' and  year2<='2'and db1>'' and acc='$db1'order by subject ASC"); 

		 while ($row = mysql_fetch_array($query)) {
		 
		 
		 
		 
		 
		 ?>
 <td style="border-bottom:1px solid #000;font-size:13px;border-right:1px solid #000;width:70px;
 padding:10px;height:70px;"><?php echo $row["credit"];?></td>
<?php } ?></tr></table></td>



</tr>

























	
<tr><td><table cellspacing="0" cellpadding="0" style="margin-top:0px;"><tr>
 <td style="border-bottom:1px solid #000;border-left:1px solid #000;width:180px;
 padding:10px;height:70px;">Full Names</td><td 
style="border-bottom:1px solid #000;border-left:1px solid #000;border-right:1px solid #000;width:303px;padding:10px;height:70px;">Matricule</td></tr></table>
 </td><td>
 
 <table   cellspacing="0" cellpadding="0" style="margin-top:0px;"><tr><td>
 
 <?php 
$dept=$_POST["department"];
$levels=$_POST["levels"];
$db1=$_POST["db1"];
$query = mysql_query("select  * from subject where department='$dept' and year1='$levels' and year2='1' and db1>''  and acc='$db1' order by subject ASC"); 

		 while ($row = mysql_fetch_array($query)) {
		 
		 
		 
		 
		 
		 ?>
 <td style="border-bottom:1px solid #000;font-size:13px;border-right:1px solid #000;'
 width:70px;padding:10px;height:70px;"><?php echo $row["subject"];?></td ">
<?php } ?></tr></table>



</td>



<td><table   cellspacing="0" cellpadding="0" style="margin-top:0px;"><tr><td>
 
 <?php 


$query = mysql_query("select  * from subject where department='$dept' and year1='$levels' and year2='2' and db1>''  and acc='$db1'order by subject ASC"); 

		 while ($row = mysql_fetch_array($query)) {
		 
		 
		 
		 
		 
		 ?>
 <td style="border-bottom:1px solid #000;font-size:13px;border-right:1px solid #000;
 width:70px;padding:10px;height:70px;"><?php echo $row["subject"];?></td>
<?php } ?></tr></table></td>




<td><table   cellspacing="0" cellpadding="0" style="margin-top:0px;"><tr><td>
 
 <?php 


$query = mysql_query("select  * from subject where department='$dept' and year1='$levels' and year2>='1' and  year2<='2'and db1>'' and acc='$db1'order by subject ASC"); 

		 while ($row = mysql_fetch_array($query)) {
		 
		 
		 
		 
		 
		 ?>
 <td style="border-bottom:1px solid #000;font-size:13px;border-right:1px solid #000;width:70px;
 padding:10px;height:70px;"><?php echo $row["subject"];?></td>
<?php } ?></tr></table></td>
































	<?php
		 
		 
$query="select * from courses where db1='$db1' and levels='$levels' and departmet='$dept'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		//selecting matricule numbers 
 
		 ?>
<tr><td><table cellspacing="0" cellpadding="0" style="margin-top:0px;"><tr>
 <td style="border-bottom:1px solid #000;border-left:1px solid #000;width:200px;height:70px;"><?php echo $fname=$row["fname"];
 $pt=$row["db1"];
 
 
 $richooTTTy=$row["credit"];;
 
 
 ?>&nbsp;</td><td 
style="border-bottom:1px solid #000;border-left:1px solid #000;border-right:1px solid #000;width:303px;height:70px;"><?php echo $mg=$row["matricule"];?>&nbsp;</td></tr></table>
 </td><td><table   cellspacing="0" cellpadding="0" style="margin-top:0px;"><tr><td>
 
 <?php 


$query = mysql_query("select  * from subject where department='$dept' and year1='$levels' and year2='1' and db1>'' and acc='$db1' order by subject ASC"); 

		 while ($row = mysql_fetch_array($query)) {
		 
		 
		 
		 
		 
		 ?>
 <td style="border-bottom:1px solid #000;font-size:13px;border-right:1px solid #000;
 width:70px;padding:10px;height:70px;"><?php $ri= $row["subject"];

 
 
 
$qry = mysql_query("select credit as total
from credits where subject='$ri' "); 
$row = mysql_fetch_assoc($qry); 
$credit=$row['total']; 
 
$qry = mysql_query("select  (c101+c102) as total
from resit where fname='$ri' and  departmet='$dept' and matricule='$mg'and levels='$levels' and sex='1'"); 
$row = mysql_fetch_assoc($qry); 
 $s1=$row['total']; 
 
 
$qry = mysql_query("select  (c101+c102) as total
from resit where fname='$ri' and  departmet='$dept' and matricule='$mg'and levels='$levels' and sex='1' and db1='$db1'"); 
$row = mysql_fetch_assoc($qry); 
 $ss1=$row['total']; 
 
 
 
 
$qry = mysql_query("select  (c101+c102) as total
from resit where fname='$ri' and  departmet='$dept' and matricule='$mg'and levels='$levels' and sex='1' and db1!='$db1'  "); 
$row = mysql_fetch_assoc($qry); 
 $ss2=$row['total']; 
 
 
 
  $mx1=$ss1;
    
if(empty($mx1)){
 $statusfbio="";
 }
elseif($mx1>$ss2 ){
echo $ss1;
}
elseif($mx1<$ss2 ){
echo $ss2;
}
 
 elseif($mx1=$ss2 ){
echo $ss2;

}
 
 
 
 
 
$qry = mysql_query("select  (c101+c102) as total
from resit where fname='$ri' and  departmet='$dept'  and matricule='$mg'and levels='$levels' and sex='3'"); 
$row = mysql_fetch_assoc($qry); 
 $s2=$row['total'];
 
 
 



$qry = mysql_query("select  (c101+c102) as total
from resit where fname='$ri' and  departmet='$dept' and matricule='$mg'and levels='$levels' and sex='1'"); 
$row = mysql_fetch_assoc($qry); 
 $ns=$row['total'];

 $savepsts=$ns; 

 
 
 
 $richooTTTy=$credit;
$courseps=$ri;
$deptt=$dept;
$level=$levels;
$mats=$mg;

		 
		
 
$qry = mysql_query("select  SUM(c101+c102) as total
from 
resit where matricule='$mats' and departmet='$deptt'and levels='$level' and sex='1' and db1='$pt'  and fname='$courseps'  
"); 
$row = mysql_fetch_assoc($qry); 

$ns=$row['total']; 

 
$qry = mysql_query("select  SUM(c101+c102) as total
from 
resit where matricule='$mats'and fname>='$courseps' and fname<='$courseps'  and db1!='$pt'  and (c101+c102)>'' and sex>='1'  and sex<='1'
"); 
$row = mysql_fetch_assoc($qry); 

  $xs=$row['total']; 

 
 


 //grading first semester 
 
 

 

 
 
 
 
 
 
 
 
 
 
 

 $mxoo=$ns;
 if(empty($mxoo)){

 
 
 }elseif($mxoo<50){
 
 //if exam mark is less than 50 for normal section
 $mxop=$xs;
 if(empty($mxop)){
$tks=$ns;
 // checking if there is no marks present
 
 }elseif($mxop<50 ){

  // checking if  marks present is <50
 
 
 
 $mxopp=$xs;
 if(empty($mxopp)){
// checking if the second time for the course exist
$tks=$ns;
 
 }elseif($mxopp<$xs  ){
$tks=$xs;
 
 }elseif($mxopp>$xs  ){
$tks=$ns;
 
 }
 elseif($mxopp=$xs  ){
$tks=$xs;
 
 }
 
 
 
 
 
 
 
 
 }elseif($mxop>=50    && $mxop<=100 ){
 
  $bm=(($xs+$ns)/2);
 

 
 
 
 
 
 $mxxp=$bm;
if(empty($mxxp)){}
elseif($mxxp>=50  &&  $mxxp<=100 ){
  $tks=($bm);
  }elseif($mxxp<50 ){
  $tks=50;
  }
  
 
 
 
 }
 
 
 
 
 
 }elseif($mxoo>=50   && $mxoo<=100){
 
$tks=$ns;
 
 
 }
 // this is the result of repeat
 
 
 
$mxxpp=$tks;
if(empty($mxxpp)){}
elseif($mxxpp>=50  &&  $mxxpp<=100 ){
  $tkss=$tks;
  }elseif($mxxpp<50 ){
  
  
  
  
  
 
 
$qry = mysql_query("select  SUM(c101+c102) as total
from 
resit where matricule='$mats' and departmet='$deptt'and levels='$level' and sex='3' and db1='$pt'  and fname='$courseps'  
"); 
$row = mysql_fetch_assoc($qry); 

$nss=$row['total']; 

 
$qry = mysql_query("select  SUM(c101+c102) as total
from 
resit where matricule='$mats'and fname>='$courseps' and fname<='$courseps'  and db1!='$pt'  and (c101+c102)>'' and sex>='3'  and sex<='3'
"); 
$row = mysql_fetch_assoc($qry); 

   $xss=$row['total']; 

  
  
   $mpp=$nss;
if(empty($mpp)){}
elseif($mpp>$xss ){
  $tkp=$nss;
  }elseif($mpp<$xss ){
   $tkp=$xss;
  }
 
 elseif($mpp=$xss ){
   $tkp=$xss;
  }
  
 $tkp;
  
  
   $mxxpps=$tkp;
if(empty($mxxpps)){}
elseif($mxxpps>=50  &&  $mxxpps<=100 ){
  $tksp=(($tkp+$tks)/2);
  
    $mpps=$tksp;
if(empty($mpps)){}
elseif($mpps>49.99 ){
  $tks=$tksp;
  }elseif($mpps<50 ){
   $tks=50;
  }
  
  }
  
  
  
  
  
  
  
  
  
  
  
 
 
 

 
 }
 
 
 
  $mxc11f=$tks;
 
 if(empty($mxc11f)){

 $statusfbiogff="";}
elseif($mxc11f>=$rangx1 && $mxc11f<=$rangx2 ){

 $statusfbiogff=$gpa1; $ee="0";
}else if(($mxc11f >=$rangx3) && ($mxc11f<=$rangx4)){
 $colorf1bio="blue";
 $statusfbiogff=$gpa2; $ee="0";}
 
 else if(($mxc11f >=$rangx5) && ($mxc11f<=$rangx6)){
 $colorf1bio="blue";
 $statusfbiogff=$gpa3;

$ee="0";

 }
 
 
else if(($mxc11f >=$rangx7) && ($mxc11f<=$rangx8)){
 $colorf1bio="blue";
 $statusfbiogff=$gpa4;
$ee=$richooTTTy;
 }
 
 
 else if(($mxc11f >=$rangx9) && ($mxc11f<=$rangx10)){
 $colorf1bio="blue"; $statusfbiogff=$gpa5; 
$ee=$richooTTTy;

} 
 
 
 
 else if(($mxc11f >=$rangx11) && ($mxc11f<=$rangx12)){
 $colorf1bio="blue"; $statusfbiogff=$gpa6; 
$ee=$richooTTTy;

} 
 
  else if(($mxc11f >=$rangx10) && ($mxc11f<=$rangx14)){
 $colorf1bio="blue"; $statusfbiogff=$gpa7; 
$ee=$richooTTTy;

} 
 
 
  else if(($mxc11f >=$rangx15) && ($mxc11f<=$rangx16)){
 $colorf1bio="blue"; $statusfbiogff=$gpa8;
$ee=$richooTTTy;
 
} 

 
 
 $xaf=($tm*$statusfbiogff);
 

 $cc=($statusfbiogff*$richooTTTy);
 
 
 

 
$query4="insert into gpa  set  matricule='$mats',credit='$richooTTTy',levels='$level',db1='$pt'
 ,gpav='$statusfbiogff',code='$courseps',sex='1' ,cc='$tks' ,tm='$cc',mark='$ns'";







mysql_query ($query4) or die ('could not updated:'.mysql_error());
 
 
 
 
 
		 
 
 



 ?>&nbsp;</td>
<?php } ?></tr></table></td>



<td><table   cellspacing="0" cellpadding="0" style="margin-top:0px;"><tr><td>
 
 <?php 


$query = mysql_query("select  * from subject where department='$dept' and year1='$levels' and year2='2' and db1>'' and acc='$db1' order by subject ASC"); 

		 while ($row = mysql_fetch_array($query)) {
		 
		 
		 
		 
		 
		 ?>
 <td style="border-bottom:1px solid #000;font-size:13px;border-right:1px solid #000;width:70px;
 padding:10px;height:70px;"><?php $ri=$row["subject"];
 $richooTTTy=$row["credit"];;
 
 
 


 
 
 
 
$qry = mysql_query("select credit as total
from credits where subject='$ri' "); 
$row = mysql_fetch_assoc($qry); 
$credit=$row['total']; 
 
$qry = mysql_query("select  (c101+c102) as total
from resit where fname='$ri' and  departmet='$dept' and matricule='$mg'and levels='$levels' and sex='2'"); 
$row = mysql_fetch_assoc($qry); 
 $s1=$row['total']; 
 
$qry = mysql_query("select  (c101+c102) as total
from resit where fname='$ri' and  departmet='$dept' and matricule='$mg'and levels='$levels' and sex='3'"); 
$row = mysql_fetch_assoc($qry); 
 $s2=$row['total'];
 
 $qry = mysql_query("select  (c101+c102) as total
from resit where fname='$ri' and  departmet='$dept' and matricule='$mg'and levels='$levels' and sex='2' and db1='$db1'"); 
$row = mysql_fetch_assoc($qry); 
 $ss1=$row['total']; 
 
 
 
 
$qry = mysql_query("select  (c101+c102) as total
from resit where fname='$ri' and  departmet='$dept' and matricule='$mg'and levels='$levels' and sex='2' and db1!='$db1'  "); 
$row = mysql_fetch_assoc($qry); 
 $ss2=$row['total']; 
 
 
 
  $mx1=$ss1;
    
if(empty($mx1)){
 $statusfbio="";
 }
elseif($mx1>$ss2 ){
echo $ss1;
}
elseif($mx1<$ss2 ){
echo $ss2;
}
 
 elseif($mx1=$ss2 ){
echo $ss2;

}
 
 
 
 $qry = mysql_query("select  (c101+c102) as total
from resit where fname='$ri' and  departmet='$dept' and matricule='$mg'and levels='$levels' and sex='2'"); 
$row = mysql_fetch_assoc($qry); 
 $ns=$row['total'];

 $savepsts=$ns; 

 
 
 
 
$courseps=$ri;
$deptt=$dept;
$level=$levels;
$mats=$mg;

		 
		
 
 
$qry = mysql_query("select  SUM(c101+c102) as total
from 
resit where matricule='$mats' and departmet='$deptt'and levels='$level' and sex='2' and db1='$pt'  and fname='$courseps'  
"); 
$row = mysql_fetch_assoc($qry); 

$ns=$row['total']; 

 
$qry = mysql_query("select  SUM(c101+c102) as total
from 
resit where matricule='$mats'and fname>='$courseps' and fname<='$courseps'  and db1!='$pt'  and (c101+c102)>'' and sex>='2'  and sex<='2'
"); 
$row = mysql_fetch_assoc($qry); 

  $xs=$row['total']; 

 
 


 //grading first semester 
 
 

 

 
 
 
 
 
 
 
 
 
 
 

 $mxoo=$ns;
 if(empty($mxoo)){

 
 
 }elseif($mxoo<50){
 
 //if exam mark is less than 50 for normal section
 $mxop=$xs;
 if(empty($mxop)){
$tks=$ns;
 // checking if there is no marks present
 
 }elseif($mxop<50 ){

  // checking if  marks present is <50
 
 
 
 $mxopp=$xs;
 if(empty($mxopp)){
// checking if the second time for the course exist
$tks=$ns;
 
 }elseif($mxopp<$xs  ){
$tks=$xs;
 
 }elseif($mxopp>$xs  ){
$tks=$ns;
 
 }
 elseif($mxopp=$xs  ){
$tks=$xs;
 
 }
 
 
 
 
 
 
 
 
 }elseif($mxop>=50    && $mxop<=100 ){
 
  $bm=(($xs+$ns)/2);
 

 
 
 
 
 
 $mxxp=$bm;
if(empty($mxxp)){}
elseif($mxxp>=50  &&  $mxxp<=100 ){
  $tks=($bm);
  }elseif($mxxp<50 ){
  $tks=50;
  }
  
 
 
 
 }
 
 
 
 
 
 }elseif($mxoo>=50   && $mxoo<=100){
 
$tks=$ns;
 
 
 }
 

 $mxxpp=$tks;
if(empty($mxxpp)){}
elseif($mxxpp>=50  &&  $mxxpp<=100 ){
  $tks=$tks;
  
  
  }
  elseif($mxxpp<50){
  
  
  
  
  
 
 
$qry = mysql_query("select  SUM(c101+c102) as total
from 
resit where matricule='$mats' and departmet='$deptt'and levels='$level' and sex='3' and db1='$pt'  and fname='$courseps'  
"); 
$row = mysql_fetch_assoc($qry); 

$nss=$row['total']; 

 
$qry = mysql_query("select  SUM(c101+c102) as total
from 
resit where matricule='$mats'and fname>='$courseps' and fname<='$courseps'  and db1!='$pt'  and (c101+c102)>'' and sex>='3'  and sex<='3'
"); 
$row = mysql_fetch_assoc($qry); 

   $xss=$row['total']; 

   
   
   
   
   
   
  
  
   $mpp=$nss;
if(empty($mpp)){}
elseif($mpp>$xss ){
  $tkp=$nss;
  }elseif($mpp<$xss ){
   $tkp=$xss;
  }
 
 elseif($mpp=$xss ){
   $tkp=$xss;
  }
  
  
  
  
  $mxxpps=$tkp;
if(empty($mxxpps)){}
elseif($mxxpps>=50  &&  $mxxpps<=100 ){
$tksp=(($tkp+$tks)/2);
  
  
  
 

    $mpps=$tksp;
if(empty($mpps)){}
elseif($mpps>50 ){
 $tks=$tksp;
  
  
  
  
  
  
  
  
  



  }elseif($mpps<50 ){
   $tks=50;
   
   
   
   
   
   

  }
  
  }
  

 
 }
 
 
  $mxc11f=$tks;
 
 if(empty($mxc11f)){

 $statusfbiogff="";}
elseif($mxc11f>=$rangx1 && $mxc11f<=$rangx2 ){

 $statusfbiogff=$gpa1; $ee="0";
}else if(($mxc11f >=$rangx3) && ($mxc11f<=$rangx4)){
 $colorf1bio="blue";
 $statusfbiogff=$gpa2; $ee="0";}
 
 else if(($mxc11f >=$rangx5) && ($mxc11f<=$rangx6)){
 $colorf1bio="blue";
 $statusfbiogff=$gpa3;

$ee="0";

 }
 
 
else if(($mxc11f >=$rangx7) && ($mxc11f<=$rangx8)){
 $colorf1bio="blue";
 $statusfbiogff=$gpa4;
$ee=$richooTTTy;
 }
 
 
 else if(($mxc11f >=$rangx9) && ($mxc11f<=$rangx10)){
 $colorf1bio="blue"; $statusfbiogff=$gpa5; 
$ee=$richooTTTy;

} 
 
 
 
 else if(($mxc11f >=$rangx11) && ($mxc11f<=$rangx12)){
 $colorf1bio="blue"; $statusfbiogff=$gpa6; 
$ee=$richooTTTy;

} 
 
  else if(($mxc11f >=$rangx10) && ($mxc11f<=$rangx14)){
 $colorf1bio="blue"; $statusfbiogff=$gpa7; 
$ee=$richooTTTy;

} 
 
 
  else if(($mxc11f >=$rangx15) && ($mxc11f<=$rangx16)){
 $colorf1bio="blue"; $statusfbiogff=$gpa8;
$ee=$richooTTTy;
 
} 

 
 $xaf=($tm*$statusfbiogff);
 

 $cc=($statusfbiogff*$richooTTTy);
 
 
 
 


 
$query4="insert into gpa  set  matricule='$mats',credit='$richooTTTy',levels='$level',db1='$pt'
 ,gpav='$statusfbiogff',code='$courseps',sex='2' ,cc='$tks' ,tm='$cc',mark='$ns'";







mysql_query ($query4) or die ('could not updated:'.mysql_error());
 
 

 ?>&nbsp;</td>
<?php } ?></tr></table></td>




<td><table   cellspacing="0" cellpadding="0" style="margin-top:0px;"><tr><td>
 
 <?php 


$query = mysql_query("select  * from subject where department='$dept' and year1='$levels' and year2>='1' and  year2<='2'and db1>''  and acc='$db1' order by subject ASC"); 

		 while ($row = mysql_fetch_array($query)) {
		 
		 
		 
		 
		 
		 ?>
 <td style="border-bottom:1px solid #000;font-size:13px;border-right:1px solid #000;
 width:70px;padding:10px;height:70px;"><?php  $ri=$row["subject"];
 $richooTTTy=$row["credit"];;
 $sex=$row["year2"];
 
 
 
$qry = mysql_query("select  (c101+c102) as total
from resit where fname='$ri' and  departmet='$dept'  and matricule='$mg'and levels='$levels' and sex='1'"); 
$row = mysql_fetch_assoc($qry); 
 $s1=$row['total']; 

 
  $qry = mysql_query("select  (c101+c102) as total
from resit where fname='$ri' and  departmet='$dept' and matricule='$mg'and levels='$levels' and sex='3' and db1='$db1'"); 
$row = mysql_fetch_assoc($qry); 
 $ss1=$row['total']; 
 
 
 
 
$qry = mysql_query("select  (c101+c102) as total
from resit where fname='$ri' and  departmet='$dept' and matricule='$mg'and levels='$levels' and sex='3' and db1!='$db1'  "); 
$row = mysql_fetch_assoc($qry); 
 $ss2=$row['total']; 
 
 
 
  $mx1=$ss1;
    
if(empty($mx1)){
 $statusfbio="";
 }
elseif($mx1>$ss2 ){
echo $ss1;
}
elseif($mx1<$ss2 ){
echo $ss2;

}
 
 elseif($mx1=$ss2 ){
echo $ss2;

}
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$qry = mysql_query("select credit as total
from credits where subject='$ri' "); 
$row = mysql_fetch_assoc($qry); 
$creditss=$row['total']; 
$qry = mysql_query("select  (c101+c102) as total
from resit where fname='$ri' and  departmet='$dept' and matricule='$mg'and levels='$levels' and sex='1'"); 
$row = mysql_fetch_assoc($qry); 
 $s1=$row['total']; 
 
$qry = mysql_query("select  (c101+c102) as total
from resit where fname='$ri' and  departmet='$dept'  and matricule='$mg'and levels='$levels' and sex='2'"); 
$row = mysql_fetch_assoc($qry); 
 $s2=$row['total'];
 
 $qry = mysql_query("select  (c101+c102) as total
from resit where fname='$ri' and  departmet='$dept'  and matricule='$mg'and levels='$levels' and sex='3'"); 
$row = mysql_fetch_assoc($qry); 
 $s3=$row['total']; 
 
 

 $qry = mysql_query("select  (c101+c102) as total
from resit where fname='$ri' and  departmet='$dept' and matricule='$mg'and levels='$levels' and sex='$sex'"); 
$row = mysql_fetch_assoc($qry); 
 $ns=$row['total'];

 $savepsts=$ns; 

 
 
 
 
$courseps=$ri;
$deptt=$dept;
$level=$levels;
$mats=$mg;

		 
		
		 
 
 

 
 
 
 
 ?>&nbsp;</td>
<?php } 
?></tr></table></td>

<td  style="border-bottom:1px solid #000;font-size:13px;border-right:1px solid #000;
 width:70px;padding:10px;height:70px;">
<?php

$qry = mysql_query("select  SUM(credit) as total
from gpa where   matricule='$mg'and levels='$levels'"); 
$row = mysql_fetch_assoc($qry); 
 echo $ts1=$row['total']; 
?>

</td>





<td  style="border-bottom:1px solid #000;font-size:13px;border-right:1px solid #000;
 width:70px;padding:10px;height:70px;">

<?php

$qry = mysql_query("select  SUM(credit) as total
from gpa where   matricule='$mg'and levels='$levels'and gpav>='2'  and gpav<='4'"); 
$row = mysql_fetch_assoc($qry); 
 echo $ts2=$row['total']; 
?>


</td>

<td style="border-bottom:1px solid #000;font-size:13px;border-right:1px solid #000;
 width:70px;padding:10px;height:70px;">

<?php 


$qry = mysql_query("select ( SUM(tm)/SUM(credit)) as total
from gpa where   matricule='$mg'and levels='$levels'"); 
$row = mysql_fetch_assoc($qry); 
 echo $tsh=$row['total']; 

?>
</td>


<td style="border-bottom:1px solid #000;font-size:13px;border-right:1px solid #000;
 width:70px;padding:10px;height:70px;">

<?php 




 
 
 

 $myyyyyuK=$tsh; 
  
if(empty($myyyyyuK)){
  $statmyyyyyuK="";
  }
  elseif($myyyyyuK>=3.6 ){
  $statmyyyyyufgS="FIRST CLASS";
  
  $myyyyyu=$ts2;
if(empty($myyyyyu)){
  $statmyyyyyu="";
  }
  elseif($myyyyyu>=$ts1 && $myyyyyu<=$ts1){
  $statmyyyyyufg="Graduated";
  echo $statmyyyyyufgS="FIRST CLASS";
}

  elseif($myyyyyu<$ts1 ){
  $statmyyyyyufg="REPEAT";
  echo $statmyyyyyufgS="FIRST CLASS";
}
  
  
  
  
  
  
  
  
  
  
  
}

  elseif($myyyyyuK>=3.0 &&  $myyyyyuK<=3.59 ){
  $statmyyyyyufgS="SECOND CLASS UPPER";
  
  
  
  
  
  
  $myyyyyu=$ts2;
if(empty($myyyyyu)){
  $statmyyyyyu="";
  }
  elseif($myyyyyu>=$ts1 && $myyyyyu<=$ts1){
  $statmyyyyyufg="Graduated";
  echo $statmyyyyyufgS="SECOND CLASS UPPER";
}

  elseif($myyyyyu<$ts1 ){
  $statmyyyyyufg="REPEAT";
  echo $statmyyyyyufgS="SECOND CLASS UPPER";
}
  
  
  
  
  
  
  
  
  
  
  
}
elseif($myyyyyuK>=2.5 &&  $myyyyyuK<=2.99 ){
  $statmyyyyyufgS="SECOND CLASS LOWER";
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  $myyyyyu=$ts2;
if(empty($myyyyyu)){
  $statmyyyyyu="";
  }
  elseif($myyyyyu>=$ts1 && $myyyyyu<=$ts1){
  $statmyyyyyufg="Graduated";
  echo $statmyyyyyufgS="SECOND CLASS LOWER";
}

  elseif($myyyyyu<$ts1 ){
  $statmyyyyyufg="REPEAT";
  echo $statmyyyyyufgS="SECOND CLASS LOWER";
}
  
  
  
  
  
}
 elseif($myyyyyuK>=2.25 &&  $myyyyyuK<=2.49 ){
  $statmyyyyyufgS="THIRD CLASS";
  
  
  
    $myyyyyu=$ts2;
if(empty($myyyyyu)){
  $statmyyyyyu="";
  }
  elseif($myyyyyu>=$ts1 && $myyyyyu<=$ts1){
  $statmyyyyyufg="Graduated";
  echo $statmyyyyyufgS="THIRD CLASS";
}

  elseif($myyyyyu<$ts1 ){
  $statmyyyyyufg="REPEAT";
  echo $statmyyyyyufgS="THIRD CLASS";
}
  
  
  
  
  
  
  
  
  
  
  
  
}
 elseif($myyyyyuK>=2.00 &&  $myyyyyuK<=2.24 ){
  $statmyyyyyufgS="PASS DEGREE";
  
  
  
    $myyyyyu=$ts2;
if(empty($myyyyyu)){
  $statmyyyyyu="";
  }
  elseif($myyyyyu>=$ts1 && $myyyyyu<=$ts1){
  $statmyyyyyufg="Graduated";
  echo $statmyyyyyufgS="PASS DEGREE";
}

  elseif($myyyyyu<$ts1 ){
  $statmyyyyyufg="REPEAT";
  echo $statmyyyyyufgS="PASS DEGREE";
}
  
}
  
 


?>
</td>


<td style="border-bottom:1px solid #000;font-size:13px;border-right:1px solid #000;
 width:70px;padding:10px;height:70px;">

<?php 

echo $statmyyyyyufg;?>


</td>






































 </tr>
 <?php } ?>
  </table>
  
  
