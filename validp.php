<html>
<head>
<TITLE>mock result stat</TITLE>
<style>

table,td{line-height:21px;
font-family:Tahoma, sans-serif;
text-transform:uppercase;
font-size:14px; }
tr{border-bottom:1px solid #000;}
</style>
</head>
<body onload="window.print();">



<div  style="text-align:center; margin:auto; width:800px; height:150px;">

 <?php
 include 'dbcs.php';
ini_set('max_execution_time', 300000); //300 seconds = 5 minutes
 
$department=$_POST["department"];

$sex=$_POST["sex"];

$levels=$_POST["levels"];
$table=courses;
$roll=$_GET["1"];
$query="select * from school where roll='1'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>


<?php echo $row[1];?>
</b>

<br>
Class List for the Accademic Year <?php
$tiko=date('Y '); 
echo $tiko-1;
?>/  <?php
$tiko=date('Y '); 
echo $tiko;
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
<?php } ?><Br><Br>

Department : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php 


echo $department;?>

<Br>

Level : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php 


echo $levels;?><br /><br /><B>
COURSE VALIDATION TABLE </B>

<br />
</b>
 

<?php
$roll=$_GET["1"];
$query="select * from rush where roll='1'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>
<b>
<?php $take=$row[1];



?>
<?php } ?>


	
			
			<?php


$department=$_POST["department"];

$sex=$_POST["sex"];

$levels=$_POST["levels"];

$mxc01=$sex;
  if(empty($mxc01)){
 $statusfb01="";
 }
  elseif($mxc01<=1 && $mxc01>=1  ){
   $statusfb01ss="1";
  $statusfb01s="1";
   $statusfb01="3";
}
  elseif($mxc01<=2 && $mxc01>=2  ){
  $statusfb01ss="2";
  $statusfb01s="2"; 
  $statusfb01="4";
}
 elseif($mxc01<=3 && $mxc01>=3  ){
  $statusfb01ss="1";
  $statusfb01s="2";
    $statusfb01="4";
}
?>
			
				 <table width="3600px"cellspacing="0" cellpadding="0" style="background:#ccc;">

			 <tr>
			 <td style="float:left; width:165px;border:1px solid #000;"style="background:#ccc;">
			matricule
			 
		    </td>
			 <td style="float:left; width:210px;border:1px solid #000;font-size:13px;"style="background:#ccc;">
full Names 
			 
		    </td>
			
			
			 <td style="float:left; width:3000px;border:1px solid #000;"style="background:#ccc;">
		<table style="background:#ccc;">
			<tr>
			 <?php


$query = mysql_query("select  * from subject where department='$department' and year1='$levels' order by subject asc"); 

		 while ($row = mysql_fetch_array($query)) {
		 
		 











?>
			<td style="float:left; width:95px;height:15px;border-right:1px solid #000;font-size:12px;"style="background:#ccc;">
			
			<?php echo $m1=$row['subject'];
			 
			 
			 
			 
			 
			  ?>
  
  
  
			
			</td>
			
		
			
			<?php } ?>
			</tr>	</table>
			
			
			
			
			
		    </td>

</tr>


</table>
			
			
			 <table width="3600px"cellspacing="0" cellpadding="0">
<?php 
 $rollss=$_GET["roll"];
$department=$_POST["department"];

$sex=$_POST["sex"];

$levels=$_POST["levels"];
$query="select * from courses where db1='$take' and levels='$levels' and departmet='$department' 
";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
 
		 ?>
		 
			
 
			 <tr>
			 <td style="float:left; width:165px;border:1px solid #000;">
			<?php echo $mats=$row['matricule'];?>
			 
		    </td>
			 <td style="float:left; width:210px;border:1px solid #000;font-size:12px;">
	<?php echo $fnameme=$row['fname'];
?> 
			 
		    </td>
			
			
			 <td style="float:left; width:3000px;border:1px solid #000;">
		<table>
			<tr>
			 <?php



$query = mysql_query("select  * from subject where department='$department' and year1='$levels' order by subject asc"); 

		 while ($row = mysql_fetch_array($query)) {
		 
		 











?>	

			<td style="float:left; width:95px;height:15px;border-right:1px solid #000;font-size:12px;">
			
			<?php  $m1=$row['subject'];
			 

$richooTTTy=$row['credit'];; 
			 

  
  
  
  
  
  
  
  
  
  
  
  
  		 

$qry = mysql_query("select  sum(c101+c102) as total
from resit where fname='$m1' and matricule='$mats' and departmet='$department'  and sex='1'"); 
$row = mysql_fetch_assoc($qry); 
 $x1=$row['total']; 

			 
			 
$qry = mysql_query("select  sum(c101+c102) as total
from resit where fname='$m1' and matricule='$mats' and departmet='$department'  and sex='3'"); 
$row = mysql_fetch_assoc($qry); 
 $x23=$row['total']; 

			 
$qry = mysql_query("select  sum(c101+c102) as total
from resit where fname='$m1' and matricule='$mats' and departmet='$department' and sex='2'"); 
$row = mysql_fetch_assoc($qry); 
$x22=$row['total']; 
 
 $mxc126=$x1;
  if(empty($mxc126)){
 $statusfb126=$x22;
 }  elseif($mxc126>'' ){
  $statusfb126=$x1 ;
}
			 
 $mxc125=$statusfb126;
  if(empty($mxc125)){
 $statusfb125=$x23;
 }
  elseif($mxc125>'' && ($mxc125>=0 && $mxc125<50) &&   $x23>=50 && $x23>$mxc125){
  $statusfb125=$x23;
}

  elseif($mxc125>'' && ($mxc125<50 ) &&   $x23<50 && $x23>$mxc125){
  $statusfb125=$x23;
}
  elseif($mxc125>'' && ($mxc125<50 ) &&   $x23<50 && $x23<$mxc125){
  $statusfb125=$mxc125;
}

    elseif($mxc125>'' && ($mxc125>=50 &&   $x23<50)){
  $statusfb125=$mxc125;
}

































 $mxc126t=$x1;
  if(empty($mxc126t)){
 $statusfb126t=$x23;
 }  elseif($mxc126t>'' ){
  $statusfb126t=$x1 ;
}

$mxc126tt=$statusfb126t;
  if(empty($mxc126tt)){
 $statusfb126tt='';
 }  elseif($mxc126tt>=50  ){
  $statusfb126tt=$statusfb126t;
}
elseif($mxc126tt<50 && $x22<50  && $mxc126tt>$x22){
  $statusfb126tt=$statusfb126t;
}
elseif($mxc126tt<50 && $x22<50  && $mxc126tt<$x22){
  $statusfb126tt=$x22;
}
elseif($mxc126tt<50 && $x22>=50 ){
  $statusfb126tt=($statusfb126t+$x22)/2;
}
elseif($mxc126tt>=50 && $x22<='' ){
  $statusfb126tt=($statusfb126t);
}


$mxc126ttt=$statusfb126tt;
  if(empty($mxc126ttt)){
 $statusfb126ttt='';
 }  elseif($mxc126ttt>=50 && $x22>'' ){
  $statusfb126ttt;
}
 elseif($mxc126ttt>='45' && $mxc126ttt<='49.99' && $x22>'' ){
  $statusfb126ttt=50;
}
	 elseif($mxc126ttt<44 && $x22<='' ){
  $statusfb126ttt=$statusfb126ttt;
}
			 

$mxc11f=$statusfb126ttt;
 
 
 if(empty($mxc11f)){

 $statusfbiogff="";}
elseif($mxc11f>=$rangx1 && $mxc11f<=$rangx2 ){

 $statusfbiogff=$gpa1; ;
}else if(($mxc11f >=$rangx3) && ($mxc11f<=$rangx4)){
 $colorf1bio="blue";
 $statusfbiogff=$gpa2; ;}
 
 else if(($mxc11f >=$rangx5) && ($mxc11f<=$rangx6)){
 $colorf1bio="blue";
 $statusfbiogff=$gpa3; }
 
 
else if(($mxc11f >=$rangx7) && ($mxc11f<=$rangx8)){
 $colorf1bio="blue";
 $statusfbiogff=$gpa4; }
 
 
 else if(($mxc11f >=$rangx9) && ($mxc11f<=$rangx10)){
 $colorf1bio="blue"; $statusfbiogff=$gpa5; 
} 
 
 
 
 else if(($mxc11f >=$rangx11) && ($mxc11f<=$rangx12)){
 $colorf1bio="blue"; $statusfbiogff=$gpa6; 
} 
 
  else if(($mxc11f >=$rangx10) && ($mxc11f<=$rangx14)){
 $colorf1bio="blue"; $statusfbiogff=$gpa7; 
} 
 
 
  else if(($mxc11f >=$rangx15) && ($mxc11f<=$rangx16)){
 $colorf1bio="blue"; $statusfbiogff=$gpa8; 
} 

 
 
  
  
$mxc002=$statusfb125;
if(empty($mxc002)){
 $statusfbios="<DIV STYLE='color:#cc0000;'>OWE $mxc002</div>";
   $statusfbiosy="0";
 }
elseif($mxc002>=50 && $mxc002<=100){
 $statusfbios="<DIV STYLE='color:#1188AA;'>VALIDATED</div>";
   $statusfbiosy="1";  
}

elseif( $mxc002<50 ){
 $statusfbios="<DIV STYLE='color:#cc0000;'>OWE $mxc002</div>"; 
  $statusfbiosy="0";
 
}



echo $statusfbios;
 
  
 
 
$queryf3="update resit set c105='$statusfbiosy'
 where matricule='$mats' and departmet='$department' and fname='$m1' and levels='$levels'";


mysql_query ($queryf3) or die ();
		
		
		
			 
$qry = mysql_query("select  sum(c105) as total
from resit where  matricule='$mats' and departmet='$department'  and sex>='1'  and  sex<='2' and levels='$levels'"); 
$row = mysql_fetch_assoc($qry); 
 $kadji=$row['total']; 

	
$qrye = mysql_query("select * FROM  subject where department='$department' and year1='$levels' "); 
$num_rows=mysql_num_rows($qrye);
$xoi=$num_rows; 	
		


$queryf3t="update courses set c131='$kadji' ,c130='$xoi'
 where matricule='$mats' and departmet='$department'  and levels='$levels' and db1='$take'";

 
mysql_query ($queryf3t) or die ();























 
$query3eyy="update resit set c108='$statusfbiogff'
 where matricule='$mats' and departmet='$department' and levels='$levels'  and db1='$take' and fname='$m1'";
 
 
 $xaf=($tm*$statusfbiogff);
$query3eyyy="update resit set c109='$xaf'
 where matricule='$mats' and departmet='$department' and levels='$levels' and db1='$take' and fname='$m1'";
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$query3ey="update resit set c107='$stmyyy'
 where matricule='$mats' and departmet='$department'  and levels='$levels' and db1='$take' and fname='$m1'";
 
 
 
 
 
 
 
 
 
 
 
 
 

 $cc=($statusfbiogff*$richooTTTy);
 
 
 
$query13="update resit set c106='$cc',c104='$richooTTTy'
 where matricule='$mats' and departmet='$department'  and levels='$levels' ' and db1='$take' and fname='$m1' ";




mysql_query ($query3eyyy) or die ('could not updated:'.mysql_error());

mysql_query ($query3eyy) or die ('could not updated:'.mysql_error());

mysql_query ($query3ey) or die ('could not updated:'.mysql_error());



  


$qry = mysql_query("select SUM(c106) as total
from resit  where matricule='$mats' and departmet='$department' and levels='$levels'  and sex>='1'  and  sex<='2' and db1='$take' "); 
$row = mysql_fetch_assoc($qry); 
$savept=$row['total']; 

 



$qry = mysql_query("select sum(c104) as total
from resit where matricule='$mats' and departmet='$department'  and sex>='1'  and  sex<='2' and levels='$levels' and db1='$take'  "); 
$row = mysql_fetch_assoc($qry); 
 $richooTTTyss=$row['total'];


  
 $mxc111t=$savept; 
  
if(empty($mxc111t)){
 $statusfbioopt="";}
elseif($mxc111t>0 ){
 
 $statusfbioopt=$mxc111t;
}
   $mxc1112t=$richooTTTyss; 
  
if(empty($mxc1112t)){
 $statusfbioop2t="";}
elseif($mxc1112t>0 ){
 
 $statusfbioop2t=$richooTTTyss;
}
  
  
  
 $mxc111yt=$savept; 
  
if(empty($mxc111yt)){
 $statusfbiooput="";
  }
  elseif($mxc111yt>'' ){
($mkkkkkk=$statusfbioopt/$statusfbioop2t);
}


 $myyyyyu=$kadji; 
  
if(empty($myyyyyu)){
  $statmyyyyyu="";
  }
  elseif($myyyyyu>=$xoi && $myyyyyu<=$xoi){
  $statmyyyyyu="Graduated";
}

  elseif($myyyyyu<$xoi ){
  $statmyyyyyu="Not Yet";
}








$queryf32="update courses set c132='$mkkkkkk', c133='$statmyyyyyu', c136='$statmyyyyyu', c137='$statmyyyyyu',c144='$savept',c145='$richooTTTyss'
 where matricule='$mats' and departmet='$department' and levels='$levels' and db1='$take'";


mysql_query ($queryf32) or die ('could not updated:'.mysql_error());



	?>

  
			
			</td>
			
		
			
			<?php } ?>
			</tr>	</table>
			
			
			
			
			
		    </td>

</tr>


<?php } ?>

</tr>
</table>