<?php
header("Content-type: application/vnd.ms-excel");
header("Content-Disposition: attachment;Filename=document_name.xls");
?><?php 
ini_set('max_execution_time', 1200000000); 
include 'dbcs.php';

page_protect();

 $notes=$_SESSION['user_name'];

if(@$_SESSION['userlevel']==3){header("location: login.php?msg=Unauthorized access");}
$department=$_POST["department"];
echo $levels=$_POST["levels"];
 $sex=$_POST["sex"];
 $take=$_POST["take"];
 
 
  $mxc11=$sex;
if(empty($mxc11)){

 $statusfbio="";
 }
elseif($mxc11>='1' && $mxc11<='1' && $levels>='200' && $levels<='200' ){

 $statusfbio='subjectn'; 
}
elseif($mxc11>='1' && $mxc11<='1' && $levels>='300' && $levels<='300' ){

 $statusfbio='subjectn'; 
}
elseif($mxc11>='2' && $mxc11<='2' && $levels>='300' && $levels<='300' ){

 $statusfbio='subjectn2'; 
}elseif($mxc11>='2' && $mxc11<='2' && $levels>='200' && $levels<='200' ){

 $statusfbio='subjectn2'; 
}
elseif($mxc11>='1' && $mxc11<='1' && $levels>='400' && $levels<='400' ){
 $folk='1';  $sex='1'; 
 $statusfbio='subjectn'; 
}


   elseif($mxc11>='2' && $mxc11<='2' && $levels>='400' && $levels<='400' ){

 $folk='2';  $sex='2'; 
 $statusfbio='subjectn2';  
}

   elseif($mxc11>='3' && $mxc11<='3' && $levels>='400' && $levels<='400' ){
 $folk='1';  $sex='3'; 
 $statusfbio='subjectn'; 
}
  elseif($mxc11>='4' && $mxc11<='4' && $levels>='400' && $levels<='400' ){
 $folk='2';  $sex='3'; 
 $statusfbio='subjectn2'; 
}

  echo $statusfbio;
  $mxc111=$levels;
if(empty($mxc111)){

 $statusfbio="";}
elseif($mxc111>='200' && $mxc111<='200' ){

 $mm1='gradeb'; 
}elseif($mxc111>='300' && $mxc111<='300' ){

 $mm1='gradeb'; 
}elseif($mxc111>='400' && $mxc111<='400' ){

 $mm1='gradebb'; 
}
 
?><?php
 $notes=$_SESSION['user_name'];
$roll=$_GET["1"];
$query="select * from users where  full_name='$notes'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>
<?php  $ids=$row['fax'];


?><?php } ?><?php
$roll=$_GET["1"];
$query="select * from $mm1 where roll='1'";
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
$query="select * from $mm1 where roll='2'";
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
$query="select * from $mm1 where roll='3'";
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
$query="select * from $mm1 where roll='4'";
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
$query="select * from $mm1 where roll='5'";
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
$query="select * from $mm1 where roll='6'";
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
$query="select * from $mm1 where roll='7'";
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
$query="select * from $mm1 where roll='8'";
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
$query="select * from $mm1 where roll='9'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
?>

<?php     $rangx17=$row['from1'];
 $rangx18=$row['from2'];
 
$c9=$row['comments'];
$gpa9=$row['gpa'];
?>
<?php } ?>
<?php
$roll=$_GET["1"];
$query="select * from $statusfbio where   extra='1'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>
<?php  echo $nm1=$row['code'];?>

<?php } ?>




<?php
$roll=$_GET["1"];
$query="select * from $statusfbio where   extra='2'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>
<?php  $nm2=$row['code'];?>

<?php } ?>
<?php
$roll=$_GET["1"];
$query="select * from $statusfbio where   extra='3'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>
<?php  $nm3=$row['code'];?>

<?php } ?>
<?php
$roll=$_GET["1"];
$query="select * from $statusfbio where   extra='4'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>
<?php  $nm4=$row['code'];?>

<?php } ?>

<?php
$roll=$_GET["1"];
$query="select * from $statusfbio where   extra='5'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>
<?php  $nm5=$row['code'];?>

<?php } ?>
<?php
$roll=$_GET["1"];
$query="select * from $statusfbio where   extra='6'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>
<?php  $nm6=$row['code'];?>

<?php } ?>
<?php
$roll=$_GET["1"];
$query="select * from $statusfbio where   extra='7'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>
<?php  $nm7=$row['code'];?>

<?php } ?>
<?php
$roll=$_GET["1"];
$query="select * from $statusfbio where   extra='8'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>
<?php  $nm8=$row['code'];?>

<?php } ?>
<?php
$roll=$_GET["1"];
$query="select * from $statusfbio where   extra='9'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>
<?php  $nm9=$row['code'];?>

<?php } ?>
<?php
$roll=$_GET["1"];
$query="select * from $statusfbio where   extra='10'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>
<?php  $nm10=$row['code'];?>

<?php } ?>
<?php
$roll=$_GET["1"];
$query="select * from $statusfbio where   extra='11'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>
<?php  $nm11=$row['code'];?>

<?php } ?>










<?php

$query="select * from subject where year1='$levels' and year2='$folk' and department='$department' and extra='$nm1'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>
<?php echo $course1=$row['subject'];?>

<?php } ?>


<?php
$roll=$_GET["1"];
$query="select * from subject where year1='$levels' and year2='$folk' and department='$department' and extra='$nm2'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>
<?php echo $course2=$row['subject'];?>

<?php } ?>

<?php
$roll=$_GET["1"];
$query="select * from subject where year1='$levels' and year2='$folk' and department='$department' and extra='$nm3'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>
<?php  echo $course3=$row['subject'];?>

<?php } ?><?php
$roll=$_GET["1"];
$query="select * from subject where year1='$levels' and year2='$folk' and department='$department' and extra='$nm4'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>
<?php  echo $course4=$row['subject'];?>

<?php } ?>

<?php
$roll=$_GET["1"];
$query="select * from subject where year1='$levels' and year2='$folk' and department='$department' and extra='$nm5'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>
<?php echo $course5=$row['subject'];?>

<?php } ?>
<?php
$roll=$_GET["1"];
$query="select * from subject where year1='$levels' and year2='$folk' and department='$department' and extra='$nm6'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>
<?php echo $course6=$row['subject'];?>

<?php } ?>

<?php
$roll=$_GET["1"];
$query="select * from subject where year1='$levels' and year2='$folk' and department='$department' and extra='$nm7'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>
<?php echo $course7=$row['subject'];?>

<?php } ?>

<?php
$roll=$_GET["1"];
$query="select * from subject where year1='$levels' and year2='$folk' and department='$department' and extra='$nm8'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>
<?php echo $course8=$row['subject'];?>

<?php } ?>
<?php
$roll=$_GET["1"];
$query="select * from subject where year1='$levels' and year2='$folk' and department='$department' and extra='$nm9'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>
<?php  echo $course9=$row['subject'];?>

<?php } ?>

<?php
$roll=$_GET["1"];
$query="select * from subject where year1='$levels' and year2='$folk' and department='$department' and extra='$nm10'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>
<?php echo $course10=$row['subject'];?>

<?php } ?><?php
$roll=$_GET["1"];
$query="select * from subject where year1='$levels' and year2='$folk' and department='$department' and extra='$nm11'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>
<?php  echo $course11=$row['subject'];?>

<?php } ?>















<?php
$roll=$_GET["1"];
$query="select * from subject2 where full_name='$notes'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>
<b>
Department: - <?php echo  $class=$row['country'];
$course=$row['tel'];
 echo  $clasx=$row['website'];
?>
		 

<?php } ?>






-
<?php
$roll=$_GET["1"];
$query="select * from subject where extra='1' and department='$class'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>
<?php echo  $classy=$row['subject'];
?>
		 

<?php } ?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<html lang="en">
<head>
<title><?php echo $school;?></title>
        <link rel="shortcut icon" href="pef.png"> 
	<style>
	table,td,tr{font-family:arial; font-size:12px;}
	</style>
	
<script src="jquery.min.js"></script>
<script src="jquery.preimage.js"></script>

<script>

$(document).ready(function()
{
	$('.file').preimage();
});

</script>

<style>
.prev_container{
	overflow: auto;
	width: 300px;
	height: 200px;
}

.prev_thumb{
	margin: 10px;
	height: 200px;
}
</style>
	</head>
	<body>
	











	
	
	
	
	
	
	
	
	
	
	
	
	

		 <table width="1900px" cellpadding="0" cellspacing="0" style="border:1px solid #000; height:30px;" >
  <tr><td style="width:40px;">S/N</td>
  <td style="width:300px;border:1px solid #000; height:30px;">	FULL names</td>
    <td style="width:140px;border:1px solid #000; height:30px;">Matricule </td>
	  <td style="width:50px;border:1px solid #000; height:30px;">Course code </td>
	    <td style="width:50px;border:1px solid #000; height:30px;">Ca </td>
	<td style="width:50px;border:1px solid #000; height:30px;">Exam </td>
		<td style="width:50px;border:1px solid #000; height:30px;"> Total</td>
		
		<td style="width:50px;border:1px solid #000; height:30px;"> Grade</td>
		
		
		  <td style="width:50px;border:1px solid #000; height:30px;">Course code </td>
		    <td style="width:50px;border:1px solid #000; height:30px;">Ca </td>
	<td style="width:50px;border:1px solid #000; height:30px;">Exam </td>
		<td style="width:50px;border:1px solid #000; height:30px;"> Total</td>
		
		<td style="width:50px;border:1px solid #000; height:30px;"> Grade</td>
		
		  <td style="width:50px;border:1px solid #000; height:30px;">Course code </td>
		    <td style="width:50px;border:1px solid #000; height:30px;">Ca </td>
	<td style="width:50px;border:1px solid #000; height:30px;">Exam </td>
		<td style="width:50px;border:1px solid #000; height:30px;"> Total</td>
		
		<td style="width:50px;border:1px solid #000; height:30px;"> Grade</td>
		
		  <td style="width:50px;border:1px solid #000; height:30px;">Course code </td>
		
		    <td style="width:50px;border:1px solid #000; height:30px;">Ca </td>
	<td style="width:50px;border:1px solid #000; height:30px;">Exam </td>
		<td style="width:50px;border:1px solid #000; height:30px;"> Total</td>
		
		<td style="width:50px;border:1px solid #000; height:30px;"> Grade</td>
		
		
		
		
		  <td style="width:50px;border:1px solid #000; height:30px;">Course code </td>
		    <td style="width:50px;border:1px solid #000; height:30px;">Ca </td>
	<td style="width:50px;border:1px solid #000; height:30px;">Exam </td>
		<td style="width:50px;border:1px solid #000; height:30px;"> Total</td>
		
		<td style="width:50px;border:1px solid #000; height:30px;"> Grade</td>
		
		  <td style="width:50px;border:1px solid #000; height:30px;">Course code </td>
		    <td style="width:50px;border:1px solid #000; height:30px;">Ca </td>
	<td style="width:50px;border:1px solid #000; height:30px;">Exam </td>
		<td style="width:50px;border:1px solid #000; height:30px;"> Total</td>
		
		<td style="width:50px;border:1px solid #000; height:30px;"> Grade</td>
</tr>
</table>

		 
<?php
 $sql = "SELECT * FROM courses where db1='$take' and departmet='$department' and levels='$levels'   order by matricule ASC";
$results = mysql_query($sql);$j=1;
while($row = mysql_fetch_assoc($results))
{
 $id_array[] = $row["roll"];
 $fname_array[] = $row["fname"];
 $matricule_array[] = $row["matricule"];
 $levels_array[] = $row["levels"];
 
 
 $departmet_array[] = $row["departmet"];
 }
 echo "<form action='hg.php' method='post'>
       ";
for($i=0;$i<count($id_array);$i++)
{
 $roll = $id_array[$i];
 $fname = $fname_array[$i];
 $matricule = $matricule_array[$i]; 
 $levels = $levels_array[$i];
  $departmet = $departmet_array[$i];
?>

		 <table width="1900px" cellpadding="0" cellspacing="0" style="border:1px solid #000; height:30px;" >

  <tr><td style="width:40px;"><?php echo $j++;?></td>
  <td style="width:300px;border:1px solid #000; height:30px;"><?php echo $fname;?></td>
    <td style="width:140px;border:1px solid #000; height:30px;"><?php echo $matricule;?> </td>
	
	
	
	  <td style="width:50px;border:1px solid #000; height:30px;"><?php echo $course1;?> </td>
	    <td style="width:50px;border:1px solid #000; height:30px;">
	
<?php

$qry = mysql_query("select  c101 as total
from resit where matricule='$matricule' and db1='$take' and sex='$sex' and  fname='$course1'"); 
$row = mysql_fetch_assoc($qry); 
 echo $acy1=$row['total']; 
 		


?></td>
	<td style="width:50px;border:1px solid #000; height:30px;"><?php

$qry = mysql_query("select  c102 as total
from resit where matricule='$matricule' and db1='$take' and sex='$sex' and  fname='$course1'"); 
$row = mysql_fetch_assoc($qry); 
 echo  $acy2=$row['total']; 
 		


?></td>
		<td style="width:50px;border:1px solid #000; height:30px;"> <?php
echo ($acy2+$acy1);


?></td>
		
		<td style="width:50px;border:1px solid #000; height:30px;"> <?php

$ns= ($acy2+$acy1);


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
 $statusfbio="D+";
 echo'<div style=" color:'. $colorf1bio.';">'.$statusfbio.'</div>';}
 
 
else if(($mxc11 >=$rangx7) && ($mxc11<=$rangx8)){
 $colorf1bio="blue";
 $statusfbio="C";
 echo'<div style=" color:'. $colorf1bio.';">'.$statusfbio.'</div>';}
 
 
 else if(($mxc11 >=$rangx9) && ($mxc11<=$rangx10)){
 $colorf1bio="blue"; $statusfbio="C+"; echo'<div style=" color:'. $colorf1bio.';">'.$statusfbio.'</div>';
} 
 
  else if(($mxc11 >=$rangx11) && ($mxc11<=$rangx12)){
 $colorf1bio="blue"; $statusfbio="B"; echo'<div style=" color:'. $colorf1bio.';">'.$statusfbio.'</div>';
} 
  else if(($mxc11 >=$rangx13) && ($mxc11<=$rangx14)){
 $colorf1bio="blue"; $statusfbio="B+"; echo'<div style=" color:'. $colorf1bio.';">'.$statusfbio.'</div>';
} 
  else if(($mxc11 >=$rangx15) && ($mxc11<=$rangx16)){
 $colorf1bio="blue"; $statusfbio="A"; echo'<div style=" color:'. $colorf1bio.';">'.$statusfbio.'</div>';
} 
 
 
 

?></td>
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
	  <td style="width:50px;border:1px solid #000; height:30px;"><?php echo $course2;?> </td>
	    <td style="width:50px;border:1px solid #000; height:30px;">
	
<?php

$qry = mysql_query("select  c101 as total
from resit where matricule='$matricule' and db1='$take' and sex='$sex' and  fname='$course2'"); 
$row = mysql_fetch_assoc($qry); 
 echo $acy3=$row['total']; 
 		


?></td>
	<td style="width:50px;border:1px solid #000; height:30px;"><?php

$qry = mysql_query("select  c102 as total
from resit where matricule='$matricule' and db1='$take' and sex='$sex' and  fname='$course2'"); 
$row = mysql_fetch_assoc($qry); 
 echo  $acy4=$row['total']; 
 		


?></td>
		<td style="width:50px;border:1px solid #000; height:30px;"> <?php
echo ($acy3+$acy4);


?></td>
		
		<td style="width:50px;border:1px solid #000; height:30px;"> <?php

$ns= ($acy3+$acy4);


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
 $statusfbio="D+";
 echo'<div style=" color:'. $colorf1bio.';">'.$statusfbio.'</div>';}
 
 
else if(($mxc11 >=$rangx7) && ($mxc11<=$rangx8)){
 $colorf1bio="blue";
 $statusfbio="C";
 echo'<div style=" color:'. $colorf1bio.';">'.$statusfbio.'</div>';}
 
 
 else if(($mxc11 >=$rangx9) && ($mxc11<=$rangx10)){
 $colorf1bio="blue"; $statusfbio="C+"; echo'<div style=" color:'. $colorf1bio.';">'.$statusfbio.'</div>';
} 
 
  else if(($mxc11 >=$rangx11) && ($mxc11<=$rangx12)){
 $colorf1bio="blue"; $statusfbio="B"; echo'<div style=" color:'. $colorf1bio.';">'.$statusfbio.'</div>';
} 
  else if(($mxc11 >=$rangx13) && ($mxc11<=$rangx14)){
 $colorf1bio="blue"; $statusfbio="B+"; echo'<div style=" color:'. $colorf1bio.';">'.$statusfbio.'</div>';
} 
  else if(($mxc11 >=$rangx15) && ($mxc11<=$rangx16)){
 $colorf1bio="blue"; $statusfbio="A"; echo'<div style=" color:'. $colorf1bio.';">'.$statusfbio.'</div>';
} 
 
 

?></td>
		
		
 
 

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				
		
	  <td style="width:50px;border:1px solid #000; height:30px;"><?php echo $course3;?> </td>
	    <td style="width:50px;border:1px solid #000; height:30px;">
	
<?php

$qry = mysql_query("select  c101 as total
from resit where matricule='$matricule' and db1='$take' and sex='$sex' and  fname='$course3'"); 
$row = mysql_fetch_assoc($qry); 
 echo $acy5=$row['total']; 
 		


?></td>
	<td style="width:50px;border:1px solid #000; height:30px;"><?php

$qry = mysql_query("select  c102 as total
from resit where matricule='$matricule' and db1='$take' and sex='$sex' and  fname='$course3'"); 
$row = mysql_fetch_assoc($qry); 
 echo  $acy6=$row['total']; 
 		


?></td>
		<td style="width:50px;border:1px solid #000; height:30px;"> <?php
echo ($acy5+$acy6);


?></td>
		
		<td style="width:50px;border:1px solid #000; height:30px;"> <?php

$ns= ($acy5+$acy6);


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
 $statusfbio="D+";
 echo'<div style=" color:'. $colorf1bio.';">'.$statusfbio.'</div>';}
 
 
else if(($mxc11 >=$rangx7) && ($mxc11<=$rangx8)){
 $colorf1bio="blue";
 $statusfbio="C";
 echo'<div style=" color:'. $colorf1bio.';">'.$statusfbio.'</div>';}
 
 
 else if(($mxc11 >=$rangx9) && ($mxc11<=$rangx10)){
 $colorf1bio="blue"; $statusfbio="C+"; echo'<div style=" color:'. $colorf1bio.';">'.$statusfbio.'</div>';
} 
 
  else if(($mxc11 >=$rangx11) && ($mxc11<=$rangx12)){
 $colorf1bio="blue"; $statusfbio="B"; echo'<div style=" color:'. $colorf1bio.';">'.$statusfbio.'</div>';
} 
  else if(($mxc11 >=$rangx13) && ($mxc11<=$rangx14)){
 $colorf1bio="blue"; $statusfbio="B+"; echo'<div style=" color:'. $colorf1bio.';">'.$statusfbio.'</div>';
} 
  else if(($mxc11 >=$rangx15) && ($mxc11<=$rangx16)){
 $colorf1bio="blue"; $statusfbio="A"; echo'<div style=" color:'. $colorf1bio.';">'.$statusfbio.'</div>';
} 
 
 

?></td>
		
		
		
		
		
		
		
		
		
		
		
		
	  <td style="width:50px;border:1px solid #000; height:30px;"><?php echo $course4;?> </td>
	    <td style="width:50px;border:1px solid #000; height:30px;">
	
<?php

$qry = mysql_query("select  c101 as total
from resit where matricule='$matricule' and db1='$take' and sex='$sex' and  fname='$course4'"); 
$row = mysql_fetch_assoc($qry); 
 echo $acy5=$row['total']; 
 		


?></td>
	<td style="width:50px;border:1px solid #000; height:30px;"><?php

$qry = mysql_query("select  c102 as total
from resit where matricule='$matricule' and db1='$take' and sex='$sex' and  fname='$course4'"); 
$row = mysql_fetch_assoc($qry); 
 echo  $acy6=$row['total']; 
 		


?></td>
		<td style="width:50px;border:1px solid #000; height:30px;"> <?php
echo ($acy5+$acy6);


?></td>
		
		<td style="width:50px;border:1px solid #000; height:30px;"> <?php

$ns= ($acy5+$acy6);


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
 $statusfbio="D+";
 echo'<div style=" color:'. $colorf1bio.';">'.$statusfbio.'</div>';}
 
 
else if(($mxc11 >=$rangx7) && ($mxc11<=$rangx8)){
 $colorf1bio="blue";
 $statusfbio="C";
 echo'<div style=" color:'. $colorf1bio.';">'.$statusfbio.'</div>';}
 
 
 else if(($mxc11 >=$rangx9) && ($mxc11<=$rangx10)){
 $colorf1bio="blue"; $statusfbio="C+"; echo'<div style=" color:'. $colorf1bio.';">'.$statusfbio.'</div>';
} 
 
  else if(($mxc11 >=$rangx11) && ($mxc11<=$rangx12)){
 $colorf1bio="blue"; $statusfbio="B"; echo'<div style=" color:'. $colorf1bio.';">'.$statusfbio.'</div>';
} 
  else if(($mxc11 >=$rangx13) && ($mxc11<=$rangx14)){
 $colorf1bio="blue"; $statusfbio="B+"; echo'<div style=" color:'. $colorf1bio.';">'.$statusfbio.'</div>';
} 
  else if(($mxc11 >=$rangx15) && ($mxc11<=$rangx16)){
 $colorf1bio="blue"; $statusfbio="A"; echo'<div style=" color:'. $colorf1bio.';">'.$statusfbio.'</div>';
} 
 
 

?></td>
		
		
		
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 	  <td style="width:50px;border:1px solid #000; height:30px;"><?php echo $course5;?> </td>
	    <td style="width:50px;border:1px solid #000; height:30px;">
	
<?php

$qry = mysql_query("select  c101 as total
from resit where matricule='$matricule' and db1='$take' and sex='$sex' and  fname='$course5'"); 
$row = mysql_fetch_assoc($qry); 
 echo $acy9=$row['total']; 
 		


?></td>
	<td style="width:50px;border:1px solid #000; height:30px;"><?php

$qry = mysql_query("select  c102 as total
from resit where matricule='$matricule' and db1='$take' and sex='$sex' and  fname='$course5'"); 
$row = mysql_fetch_assoc($qry); 
 echo  $acy10=$row['total']; 
 		


?></td>
		<td style="width:50px;border:1px solid #000; height:30px;"> <?php
echo ($acy10+$acy9);


?></td>
		
		<td style="width:50px;border:1px solid #000; height:30px;"> <?php

$ns= ($acy9+$acy10);


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
 $statusfbio="D+";
 echo'<div style=" color:'. $colorf1bio.';">'.$statusfbio.'</div>';}
 
 
else if(($mxc11 >=$rangx7) && ($mxc11<=$rangx8)){
 $colorf1bio="blue";
 $statusfbio="C";
 echo'<div style=" color:'. $colorf1bio.';">'.$statusfbio.'</div>';}
 
 
 else if(($mxc11 >=$rangx9) && ($mxc11<=$rangx10)){
 $colorf1bio="blue"; $statusfbio="C+"; echo'<div style=" color:'. $colorf1bio.';">'.$statusfbio.'</div>';
} 
 
  else if(($mxc11 >=$rangx11) && ($mxc11<=$rangx12)){
 $colorf1bio="blue"; $statusfbio="B"; echo'<div style=" color:'. $colorf1bio.';">'.$statusfbio.'</div>';
} 
  else if(($mxc11 >=$rangx13) && ($mxc11<=$rangx14)){
 $colorf1bio="blue"; $statusfbio="B+"; echo'<div style=" color:'. $colorf1bio.';">'.$statusfbio.'</div>';
} 
  else if(($mxc11 >=$rangx15) && ($mxc11<=$rangx16)){
 $colorf1bio="blue"; $statusfbio="A"; echo'<div style=" color:'. $colorf1bio.';">'.$statusfbio.'</div>';
} 
 
 

?></td>
		
		
			 
		 
		 
		 
		 
		 
		 
		 
		 
		 	  <td style="width:50px;border:1px solid #000; height:30px;"><?php echo $course6;?> </td>
	    <td style="width:50px;border:1px solid #000; height:30px;">
	
<?php

$qry = mysql_query("select  c101 as total
from resit where matricule='$matricule' and db1='$take' and sex='$sex' and  fname='$course6'"); 
$row = mysql_fetch_assoc($qry); 
 echo $acy11=$row['total']; 
 		


?></td>
	<td style="width:50px;border:1px solid #000; height:30px;"><?php

$qry = mysql_query("select  c102 as total
from resit where matricule='$matricule' and db1='$take' and sex='$sex' and  fname='$course7'"); 
$row = mysql_fetch_assoc($qry); 
 echo  $acy12=$row['total']; 
 		


?></td>
		<td style="width:50px;border:1px solid #000; height:30px;"> <?php
echo ($acy11+$acy12);


?></td>
		
		<td style="width:50px;border:1px solid #000; height:30px;"> <?php

$ns= ($acy11+$acy12);


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
 $statusfbio="D+";
 echo'<div style=" color:'. $colorf1bio.';">'.$statusfbio.'</div>';}
 
 
else if(($mxc11 >=$rangx7) && ($mxc11<=$rangx8)){
 $colorf1bio="blue";
 $statusfbio="C";
 echo'<div style=" color:'. $colorf1bio.';">'.$statusfbio.'</div>';}
 
 
 else if(($mxc11 >=$rangx9) && ($mxc11<=$rangx10)){
 $colorf1bio="blue"; $statusfbio="C+"; echo'<div style=" color:'. $colorf1bio.';">'.$statusfbio.'</div>';
} 
 
  else if(($mxc11 >=$rangx11) && ($mxc11<=$rangx12)){
 $colorf1bio="blue"; $statusfbio="B"; echo'<div style=" color:'. $colorf1bio.';">'.$statusfbio.'</div>';
} 
  else if(($mxc11 >=$rangx13) && ($mxc11<=$rangx14)){
 $colorf1bio="blue"; $statusfbio="B+"; echo'<div style=" color:'. $colorf1bio.';">'.$statusfbio.'</div>';
} 
  else if(($mxc11 >=$rangx15) && ($mxc11<=$rangx16)){
 $colorf1bio="blue"; $statusfbio="A"; echo'<div style=" color:'. $colorf1bio.';">'.$statusfbio.'</div>';
} 
 
 

?></td>
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 		 
		 
		 	  <td style="width:50px;border:1px solid #000; height:30px;"><?php echo $course7;?> </td>
	    <td style="width:50px;border:1px solid #000; height:30px;">
	
<?php

$qry = mysql_query("select  c101 as total
from resit where matricule='$matricule' and db1='$take' and sex='$sex' and  fname='$course7'"); 
$row = mysql_fetch_assoc($qry); 
 echo $acy13=$row['total']; 
 		


?></td>
	<td style="width:50px;border:1px solid #000; height:30px;"><?php

$qry = mysql_query("select  c102 as total
from resit where matricule='$matricule' and db1='$take' and sex='$sex' and  fname='$course7'"); 
$row = mysql_fetch_assoc($qry); 
 echo  $acy14=$row['total']; 
 		


?></td>
		<td style="width:50px;border:1px solid #000; height:30px;"> <?php
echo ($acy13+$acy14);


?></td>
		
		<td style="width:50px;border:1px solid #000; height:30px;"> <?php

$ns= ($acy13+$acy14);


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
 $statusfbio="D+";
 echo'<div style=" color:'. $colorf1bio.';">'.$statusfbio.'</div>';}
 
 
else if(($mxc11 >=$rangx7) && ($mxc11<=$rangx8)){
 $colorf1bio="blue";
 $statusfbio="C";
 echo'<div style=" color:'. $colorf1bio.';">'.$statusfbio.'</div>';}
 
 
 else if(($mxc11 >=$rangx9) && ($mxc11<=$rangx10)){
 $colorf1bio="blue"; $statusfbio="C+"; echo'<div style=" color:'. $colorf1bio.';">'.$statusfbio.'</div>';
} 
 
  else if(($mxc11 >=$rangx11) && ($mxc11<=$rangx12)){
 $colorf1bio="blue"; $statusfbio="B"; echo'<div style=" color:'. $colorf1bio.';">'.$statusfbio.'</div>';
} 
  else if(($mxc11 >=$rangx13) && ($mxc11<=$rangx14)){
 $colorf1bio="blue"; $statusfbio="B+"; echo'<div style=" color:'. $colorf1bio.';">'.$statusfbio.'</div>';
} 
  else if(($mxc11 >=$rangx15) && ($mxc11<=$rangx16)){
 $colorf1bio="blue"; $statusfbio="A"; echo'<div style=" color:'. $colorf1bio.';">'.$statusfbio.'</div>';
} 
 
 

?></td>
		 
		 
		 
		 
		 	  <td style="width:50px;border:1px solid #000; height:30px;"><?php echo $course8;?> </td>
	    <td style="width:50px;border:1px solid #000; height:30px;">
	
<?php

$qry = mysql_query("select  c101 as total
from resit where matricule='$matricule' and db1='$take' and sex='$sex' and  fname='$course8'"); 
$row = mysql_fetch_assoc($qry); 
 echo $acy15=$row['total']; 
 		


?></td>
	<td style="width:50px;border:1px solid #000; height:30px;"><?php

$qry = mysql_query("select  c102 as total
from resit where matricule='$matricule' and db1='$take' and sex='$sex' and  fname='$course8'"); 
$row = mysql_fetch_assoc($qry); 
 echo  $acy16=$row['total']; 
 		


?></td>
		<td style="width:50px;border:1px solid #000; height:30px;"> <?php
echo ($acy15+$acy16);


?></td>
		
		<td style="width:50px;border:1px solid #000; height:30px;"> <?php

$ns= ($acy15+$acy16);


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
 $statusfbio="D+";
 echo'<div style=" color:'. $colorf1bio.';">'.$statusfbio.'</div>';}
 
 
else if(($mxc11 >=$rangx7) && ($mxc11<=$rangx8)){
 $colorf1bio="blue";
 $statusfbio="C";
 echo'<div style=" color:'. $colorf1bio.';">'.$statusfbio.'</div>';}
 
 
 else if(($mxc11 >=$rangx9) && ($mxc11<=$rangx10)){
 $colorf1bio="blue"; $statusfbio="C+"; echo'<div style=" color:'. $colorf1bio.';">'.$statusfbio.'</div>';
} 
 
  else if(($mxc11 >=$rangx11) && ($mxc11<=$rangx12)){
 $colorf1bio="blue"; $statusfbio="B"; echo'<div style=" color:'. $colorf1bio.';">'.$statusfbio.'</div>';
} 
  else if(($mxc11 >=$rangx13) && ($mxc11<=$rangx14)){
 $colorf1bio="blue"; $statusfbio="B+"; echo'<div style=" color:'. $colorf1bio.';">'.$statusfbio.'</div>';
} 
  else if(($mxc11 >=$rangx15) && ($mxc11<=$rangx16)){
 $colorf1bio="blue"; $statusfbio="A"; echo'<div style=" color:'. $colorf1bio.';">'.$statusfbio.'</div>';
} 
 
 

?></td>
		 
		 
		 
		 
		
		 	  <td style="width:50px;border:1px solid #000; height:30px;"><?php echo $course9;?> </td>
	    <td style="width:50px;border:1px solid #000; height:30px;">
	
<?php

$qry = mysql_query("select  c101 as total
from resit where matricule='$matricule' and db1='$take' and sex='$sex' and  fname='$course9'"); 
$row = mysql_fetch_assoc($qry); 
 echo $acy17=$row['total']; 
 		


?></td>
	<td style="width:50px;border:1px solid #000; height:30px;"><?php

$qry = mysql_query("select  c102 as total
from resit where matricule='$matricule' and db1='$take' and sex='$sex' and  fname='$course9'"); 
$row = mysql_fetch_assoc($qry); 
 echo  $acy18=$row['total']; 
 		


?></td>
		<td style="width:50px;border:1px solid #000; height:30px;"> <?php
echo ($acy17+$acy18);


?></td>
		
		<td style="width:50px;border:1px solid #000; height:30px;"> <?php

$ns= ($acy17+$acy18);


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
 $statusfbio="D+";
 echo'<div style=" color:'. $colorf1bio.';">'.$statusfbio.'</div>';}
 
 
else if(($mxc11 >=$rangx7) && ($mxc11<=$rangx8)){
 $colorf1bio="blue";
 $statusfbio="C";
 echo'<div style=" color:'. $colorf1bio.';">'.$statusfbio.'</div>';}
 
 
 else if(($mxc11 >=$rangx9) && ($mxc11<=$rangx10)){
 $colorf1bio="blue"; $statusfbio="C+"; echo'<div style=" color:'. $colorf1bio.';">'.$statusfbio.'</div>';
} 
 
  else if(($mxc11 >=$rangx11) && ($mxc11<=$rangx12)){
 $colorf1bio="blue"; $statusfbio="B"; echo'<div style=" color:'. $colorf1bio.';">'.$statusfbio.'</div>';
} 
  else if(($mxc11 >=$rangx13) && ($mxc11<=$rangx14)){
 $colorf1bio="blue"; $statusfbio="B+"; echo'<div style=" color:'. $colorf1bio.';">'.$statusfbio.'</div>';
} 
  else if(($mxc11 >=$rangx15) && ($mxc11<=$rangx16)){
 $colorf1bio="blue"; $statusfbio="A"; echo'<div style=" color:'. $colorf1bio.';">'.$statusfbio.'</div>';
} 
 
 

?></td>
		  
<?php
 }
 
echo "<input type='submit' name='submit' value='Submit'></form>";
?>






  