<?PHP INCLUDE 'dbcs.PHP';

 $notes=$_SESSION['user_name'];
ini_set('max_execution_time', 3250000); //300 seconds = 5 minutes


$follows=$_POST['follows'];

$bookss=$_POST['bookss'];

$stetsub=$_POST['stetsub'];

$fname=$_POST["fname"];

?>

<?php
$roll=$_GET["1"];
$query="select * from gradeb where roll='1'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
?>

<?php  $rangx1=$row['from1'];
$rangx2=$row['from2'];
$c1=$row['comments'];
$gpa1=$row['gpa'];

?>
<?php } ?>




<?php
$roll=$_GET["1"];
$query="select * from gradeb where roll='2'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
?>

<?php  $rangx3=$row['from1'];
$rangx4=$row['from2'];
$c2=$row['comments'];
$gpa2=$row['gpa'];
?>
<?php } ?>









<?php
$roll=$_GET["1"];
$query="select * from gradeb where roll='3'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
?>

<?php  $rangx5=$row['from1'];
$rangx6=$row['from2'];

$c3=$row['comments'];
$gpa3=$row['gpa'];
?>
<?php } ?>







<?php
$roll=$_GET["1"];
$query="select * from gradeb where roll='4'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
?>

<?php  $rangx7=$row['from1'];
$rangx8=$row['from2'];

$c4=$row['comments'];
$gpa4=$row['gpa'];
?>
<?php } ?>








<?php
$roll=$_GET["1"];
$query="select * from gradeb where roll='5'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
?>

<?php     $rangx9=$row['from1'];
 $rangx10=$row['from2'];
 
$c5=$row['comments'];
$gpa5=$row['gpa'];
?>
<?php } ?>

<?php
$roll=$_GET["1"];
$query="select * from gradeb where roll='6'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
?>

<?php     $rangx11=$row['from1'];
 $rangx12=$row['from2'];
 
$c6=$row['comments'];
$gpa6=$row['gpa'];
?>
<?php } ?>

<?php
$roll=$_GET["1"];
$query="select * from gradeb where roll='7'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
?>

<?php     $rangx13=$row['from1'];
 $rangx14=$row['from2'];
 
$c7=$row['comments'];
$gpa7=$row['gpa'];
?>
<?php } ?>
<?php
$roll=$_GET["1"];
$query="select * from gradeb where roll='8'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
?>

<?php     $rangx15=$row['from1'];
 $rangx16=$row['from2'];
 
$c8=$row['comments'];
$gpa8=$row['gpa'];
?>
<?php } ?>
<?php
$roll=$_GET["1"];
$query="select * from gradeb where roll='9'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
?>

<?php     $rangx17=$row['from1'];
 $rangx18=$row['from2'];
 
$c9=$row['comments'];
$gpa9=$row['gpa'];
?>
<?php } ?><style type="text/Css">
<!--
.test1
{
    border: solid 1px #FF0000;
    background: #FFFFFF;
    border-collapse: collapse;
}
-->
</style>
<page style="font-size: 14px">
  <table width="700px" cellspacing="0" cellpadding="0" style="float:left; margin-left:-50px;">
  <tr>
  <td style="width:100px;height:100px;"><img src="logo.png" height="100px" width="100px"></td>
  
  <td style="width:300px;height:200px;">
  <div style="font-size:20px;margin-top:-10px;text-shadow:3px 3px 3px #ccc;margin-left:-20px;height:40px;color:#1188aa;letter-spacing:2px;">
  <b>Higher Institute of Management Studies (HIMS Buea)</b></div>
  <div style="font-size:18px;color:#000;font-family:arial;margin-top:10px;margin-left:-20px;">
 Website: http://www.himsbuea.org<br>
 P.O.Box 496 molyko Buea</div>
  
  
  </td>
 <td style="width:300px;height:200px;">
 
   <div style="width:250px;float:left;text-align:center;padding:5px;margin-top:-40px; height:25px;background:#ccc;font-size:18px;color:#000;font-family:arial;">
 INDIVIDUAL RESULT SLIP</div>
 
 </td></tr>
  </table>
<?php
$roll=$_GET["1"];
$query="select * from rush where roll='1'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>
<?php $take=$row[1];
$table="courses";
?>
<?php } ?>
 <?php
 $deptt="MARKETING";
 
 $levels="300";
$query="select * from courses 
where db1='$take' 
and 
departmet='$deptt' 
and 
levels='$levels' 
and matricule='HIMS/05/14/0549' ";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
 
		 ?>
 <?php $mats=$row["matricule"];?>
<table width="700px" cellspacing="0" cellpadding="0" style="float:left; margin-left:0px;">
 

  <tr><td style="width:100px; height:20px;">Matricule</td>
  <td style="width:400px; height:20px;"><b><?php echo $mats;?></b></td>
  
  <td style="width:200px; height:20px;"></td>
  </tr>
   <tr><td style="width:100px; height:20px;">Field Of Study </td>
  <td style="width:400px; height:20px;"><b>Business</b></td>
  
  <td style="width:200px; height:20px;"></td>
  </tr></table>
  
 
<table width="700px" cellspacing="0" cellpadding="0" style="float:left; margin-left:-50px;">
 

  <tr><td style="width:550px; height:20px;"></td>
  <td style="width:100px; height:20px;padding:3px;border-bottom:1px solid #ccc;border-left:1px solid #ccc;
  border-top:1px solid #ccc;">Academic</td>
   <td style="width:100px; height:20px;padding:3px;border-right:1px solid #ccc;border-bottom:1px solid #ccc;
   border-left:1px solid #ccc;border-top:1px solid #ccc;"><?php echo $db1=$row["db1"];?></td>
  
  </tr>
  
  
  
  </table>
  <table width="700px" cellspacing="0" cellpadding="0" style="float:left; margin-left:0px;">
 
   <tr>
  <td style="width:100px; height:20px;padding:3px;border-bottom:1px solid #ccc;
  border-left:1px solid #ccc;border-top:1px solid #ccc;">Full Name(s)</td>
  
  <td style="width:376px; height:20px;padding:3px;border-bottom:1px solid #ccc;
  border-left:1px solid #ccc;border-top:1px solid #ccc;"><?php echo $fname=$row["fname"];?></td>
   <td style="width:100px;
   height:20px;padding:3px;border-right:1px solid #ccc;
   border-bottom:1px solid #ccc;border-left:1px solid #ccc;border-top:1px solid #ccc;">Level</td>
  
  
  <td style="width:99px;
   height:20px;padding:3px;border-right:1px solid #ccc;
   border-bottom:1px solid #ccc;border-left:1px solid #ccc;border-top:1px solid #ccc;"><?php echo $levels=$row["levels"];?></td>
  
  </tr>
  
  
  
  
  
  <tr>
  <td style="width:100px; height:20px;padding:3px;border-bottom:1px solid #ccc;
  border-left:1px solid #ccc;border-top:1px solid #ccc;">Department</td>
  
  <td style="width:376px; height:20px;padding:3px;border-bottom:1px solid #ccc;
  border-left:1px solid #ccc;border-top:1px solid #ccc;"><?php echo $deptt=$row["departmet"];?></td>
   <td style="width:100px;
   height:20px;padding:3px;border-right:1px solid #ccc;
   border-bottom:1px solid #ccc;border-left:1px solid #ccc;border-top:1px solid #ccc;">Sex</td>
  
  
  <td style="width:99px;
   height:20px;padding:3px;border-right:1px solid #ccc;
   border-bottom:1px solid #ccc;border-left:1px solid #ccc;border-top:1px solid #ccc;"><?php echo $s=$row["sex"];?></td>
  
  </tr>
  
  
  
  </table>
  
  <div style="float:left; width:700px;font-size:20px;line-spacing:2px;margin-top:20px;font-weight:bold;
  height:30px;TEXT-ALIGN:CENTER;">FIRST SEMESTER RESULT</div>
  
  
  
<div style="width:700px; height:auto;background:url(bg.png);">
   <table width="700px" cellspacing="0" cellpadding="0" style="float:left; margin-left:0px;">
 
   <tr>
  <td style="width:40px; height:20px;padding:3px;background:#ccc;border-bottom:1px solid #ccc;text-transform:uppercase;
  border-left:1px solid #ccc;border-top:1px solid #ccc;text-align:center;">SN</td>
  
  <td style="width:79px; height:20px;padding:3px;border-bottom:1px solid #ccc;text-transform:uppercase;
  border-left:1px solid #ccc;border-top:1px solid #ccc;background:#ccc;">Course Code</td>
   <td style="width:219px;
   height:20px;padding:3px;border-right:1px solid #ccc;background:#ccc;
   border-bottom:1px solid #ccc;border-left:1px solid #ccc;border-top:1px solid #ccc;text-transform:uppercase;">Description</td>
  
  
  <td style="width:49px;background:#ccc; height:20px;padding:3px;border-bottom:1px solid #ccc;text-transform:uppercase;
  border-left:1px solid #ccc;border-top:1px solid #ccc;">Credit</td>
  
  <td style="width:49px;background:#ccc; height:20px;padding:3px;border-bottom:1px solid #ccc;border-right:1px solid #ccc;text-transform:uppercase;
  border-left:1px solid #ccc;border-top:1px solid #ccc;">Status</td>
  <td style="width:49px;background:#ccc;
   height:20px;padding:3px;border-right:1px solid #ccc;
   border-bottom:1px solid #ccc;border-top:1px solid #ccc;text-transform:uppercase;">Ca/30</td>
  
  <td style="width:49px;background:#ccc;
   height:20px;padding:3px;border-right:1px solid #ccc;
   border-bottom:1px solid #ccc;border-top:1px solid #ccc;text-transform:uppercase;">Exam/70</td>
   
   
  <td style="width:49px;background:#ccc;
   height:20px;padding:3px;border-right:1px solid #ccc;
   border-bottom:1px solid #ccc;border-top:1px solid #ccc;text-transform:uppercase;">Total</td>
  
  
  <td style="width:49px;
   height:20px;padding:3px;border-right:1px solid #ccc;background:#ccc;
   border-bottom:1px solid #ccc;border-top:1px solid #ccc;text-transform:uppercase;">Grade</td>
  
  </tr> <?php 


$query = mysql_query("select  * from resit where db1='$take' and matricule='$mats' and departmet='$deptt' and sex='1' and levels='$levels'order by fname ASC"); 
$io=1;
		 while ($row = mysql_fetch_array($query)) {
		 
		 
		 
		 
		 
		 ?>
		 
		    <tr>
  <td style="width:40px; height:20px;padding:2px;border-bottom:1px solid #ccc;
  border-left:1px solid #ccc;text-align:center;"><?php echo $io++;?></td>
  
  <td style="width:79px; height:20px;padding:2px;border-bottom:1px solid #ccc;
  border-left:1px solid #ccc;"><?php echo $fname=$row["fname"];$courseps=$fname;$ca=$row["c101"];$exam=$row["c102"];?></td>
   <td style="width:219px;
   height:20px;padding:2px;border-right:1px solid #ccc;
   border-bottom:1px solid #ccc;border-left:1px solid #ccc;"><?php
   
   
   
$qry = mysql_query("select  db1 as total
from subject where subject='$fname' and  department='$deptt' "); 
$row = mysql_fetch_assoc($qry); 
echo $richooTTT=$row['total']; 


?></td>
  
  <td style="width:49px; height:20px;padding:2px;border-bottom:1px solid #ccc;text-align:center;
  border-right:1px solid #ccc;"><?php
  
$qry = mysql_query("select  credit as total
from credits where subject='$courseps' "); 
$row = mysql_fetch_assoc($qry); 

echo $richooTTTy=$row['total']; ?></td>
  
  <td style="width:49px; height:20px;padding:2px;border-bottom:1px solid #ccc;text-align:center;
  border-right:1px solid #ccc;"><?php
  
$qry = mysql_query("select  status as total
from credits where subject='$courseps' "); 
$row = mysql_fetch_assoc($qry); 

echo $richooTTTy=$row['total']; ?></td>
  
  <td style="width:49px;
   height:20px;padding:2px;border-right:1px solid #ccc;text-align:center;
   border-bottom:1px solid #ccc;"><?php echo $ca;?></td>
  
  <td style="width:49px;
   height:20px;padding:2px;border-right:1px solid #ccc;text-align:center;
   border-bottom:1px solid #ccc;"><?php echo $exam;?></td>
   
   
  <td style="width:49px;
   height:20px;padding:2px;border-right:1px solid #ccc;text-align:center;
   border-bottom:1px solid #ccc;"><?php echo ($ca+$exam);?></td>
  
  
  <td style="width:49px;
   height:20px;padding:2px;border-right:1px solid #ccc;
   border-bottom:1px solid #ccc;">&nbsp;&nbsp;<?php $ns=
($exam+$ca); 


 $mxc11=$ns;
 
 
if(empty($mxc11)){
 $colorf1bio="yellow";
 $statusfbio="";}
elseif($mxc11>=$rangx1 && $mxc11<=$rangx2 ){
 $colorf1bio="#FF0000";
 $statusfbio="F";
 echo'<div style=" color:'. $colorf1bio.';">'.$statusfbio.'</div>';
}else if(($mxc11 >=$rangx3) && ($mxc11<=$rangx4)){
 $colorf1bio="blue";
 $statusfbio="D";
 echo'<div style=" color:'. $colorf1bio.';">'.$statusfbio.'</div>';}else if(($mxc11 >=$rangx5) && ($mxc11<=$rangx6)){
 $colorf1bio="blue";
 $statusfbio="C";
 echo'<div style=" color:'. $colorf1bio.';">'.$statusfbio.'</div>';}
 
 
else if(($mxc11 >=$rangx7) && ($mxc11<=$rangx8)){
 $colorf1bio="blue";
 $statusfbio="B";
 echo'<div style=" color:'. $colorf1bio.';">'.$statusfbio.'</div>';}
 
 
 else if(($mxc11 >=$rangx9) && ($mxc11<=$rangx10)){
 $colorf1bio="blue"; $statusfbio="A"; echo'<div style=" color:'. $colorf1bio.';">'.$statusfbio.'</div>';
} 
 
 
 
 
  $mxc11=$ns;
if(empty($mxc11)){
 $colorf1bio="yellow";
 $statusfbio="";}
elseif($mxc11>=$rangx1 && $mxc11<=$rangx2 ){
 $colorf1bio="#FF0000";
 $statusfbio=$gpa1; ;
}else if(($mxc11 >=$rangx3) && ($mxc11<=$rangx4)){
 $colorf1bio="blue";
 $statusfbio=$gpa2; ;}
 
 else if(($mxc11 >=$rangx5) && ($mxc11<=$rangx6)){
 $colorf1bio="blue";
 $statusfbio=$gpa3; }
 
 
else if(($mxc11 >=$rangx7) && ($mxc11<=$rangx8)){
 $colorf1bio="blue";
 $statusfbio=$gpa4; }
 
 
 else if(($mxc11 >=$rangx9) && ($mxc11<=$rangx10)){
 $colorf1bio="blue"; $statusfbio=$gpa5; 
} 
 
 
 
 else if(($mxc11 >=$rangx11) && ($mxc11<=$rangx12)){
 $colorf1bio="blue"; $statusfbio=$gpa6; 
} 
 
  else if(($mxc11 >=$rangx10) && ($mxc11<=$rangx14)){
 $colorf1bio="blue"; $statusfbio=$gpa7; 
} 
 
 
  else if(($mxc11 >=$rangx15) && ($mxc11<=$rangx16)){
 $colorf1bio="blue"; $statusfbio=$gpa8; 
} 

$manS=($exam+$ca);
$man=($exam+$ca)/5;
$ftsS=($manS*$tm);

$fts=($man*$tm);
$query3="update resit set c103='$fts',c104='$tm'
 where matricule='$mats' and departmet='$deptt'and levels='$level' and sex='1' and db1='$take' and fname='$courseps'";







mysql_query ($query3) or die ('could not updated:'.mysql_error());



 ?>
</td>
  
  </tr>
		 
		 <?php } ?>
  </table>
  
 <?php } ?> 
  
  
  </page>