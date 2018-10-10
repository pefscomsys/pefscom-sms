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
$levels=$_POST["levels"];
$sex=$_POST["sex"];

?>


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

</b>

<br>
Class List for the Accademic Year <?php
$tiko=date('Y '); 
echo $tiko-1;
?>/  <?php
$tiko=date('Y '); 
echo $tiko;
?><BR>

Department : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php 


echo $department;?>

<Br>

Level : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php 


echo $levels;?><br /><br /><B>
WEAVER CLASSES FOR LEVEL 300 </B>

<br />
</b>
 


	
			
			<?php


$department=$_POST["department"];

$sex=$_POST["sex"];

$levels=$_POST["levels"];

?>
			
				 <table width="3600px"cellspacing="0" cellpadding="0" style="background:#ccc;">

			 <tr>
			 <td style="float:left; width:165px;border:1px solid #000;"style="background:#ccc;">
			matricule
			 
		    </td>
			 <td style="float:left; width:250px;border:1px solid #000;font-size:13px;"style="background:#ccc;">
full Names 
			 
		    </td>
			
			
					 <td style="float:left; width:100px;border:1px solid #000;font-size:13px;"style="background:#ccc;">
1 st Sem: AV
			 
		    </td>
						 <td style="float:left; width:100px;border:1px solid #000;font-size:13px;"style="background:#ccc;">
2 nd Sem: AV
			 
		    </td>
								 <td style="float:left; width:120px;border:1px solid #000;font-size:13px;"style="background:#ccc;">Resit nd Sem: AV
			 
		    </td>
			
						 <td style="float:left; width:120px;border:1px solid #000;font-size:13px;"style="background:#ccc;">Cum AV
			 
		    </td>
						 <td style="float:left; width:100px;border:1px solid #000;font-size:13px;"style="background:#ccc;">Weaver Fee
			 
		    </td>

			
		    </td>

</tr>


</table>
			
			
			 <table width="1000px"cellspacing="0" cellpadding="0">
<?php 
 $rollss=$_GET["roll"];
$department=$_POST["department"];
$deptt=$_POST["department"];
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
			 <td style="float:left; width:250px;border:1px solid #000;font-size:11px;">
	<?php 
	echo $fname=$row['fname'];?>

			 
		    </td>
			
			
			
					 <td style="float:left; width:100px;border:1px solid #000;font-size:12px;">
	<?php 
	
	

$qry = mysql_query("select SUM(((c101+c102)/5)*c104) as total
from resit  where matricule='$mats' and departmet='$department' and levels='$levels'  and sex='1'   and db1='$take' "); 
$row = mysql_fetch_assoc($qry); 
 $savept=$row['total']; 
$qry = mysql_query("select SUM(c104) as total
from resit  where matricule='$mats' and departmet='$department' and levels='$levels'  and sex='1'   and db1='$take' "); 
$row = mysql_fetch_assoc($qry); 
 $savepts=$row['total']; 

  $mxc11=$savept;
if(empty($mxc11)){

echo  $statusfbio="0.00";}
elseif($mxc11>"" ){
 
 printf("%01.2f",$a1=($savept/$savepts));
 
 }
	?>

			 
		    </td>
			
			
			
			
					 <td style="float:left; width:100px;border:1px solid #000;font-size:12px;">
	<?php 
	
	

$qry = mysql_query("select SUM(((c101+c102)/5)*c104) as total
from resit  where matricule='$mats' and departmet='$department' and levels='$levels'  and sex='2'   and db1='$take' "); 
$row = mysql_fetch_assoc($qry); 
 $saveptt=$row['total']; 
$qry = mysql_query("select SUM(c104) as total
from resit  where matricule='$mats' and departmet='$department' and levels='$levels'  and sex='2'   and db1='$take' "); 
$row = mysql_fetch_assoc($qry); 
 $saveptts=$row['total']; 

 
  $mxc11=$saveptts;
if(empty($mxc11)){

echo  $statusfbio="0.00";}
elseif($mxc11>"" ){
 
 printf("%01.2f",$a2=($saveptt/$saveptts));
 
 }
	?>

			 
		    </td>
			
			
					 <td style="float:left; width:120px;border:1px solid #000;font-size:12px;">
	<?php 
	
	

$qry = mysql_query("select SUM(((c101+c102)/5)*c104) as total
from resit  where matricule='$mats' and departmet='$department' and levels='$levels'  and sex='2'   and db1='$take' "); 
$row = mysql_fetch_assoc($qry); 
 $savepttt=$row['total']; 
$qry = mysql_query("select SUM(c104) as total
from resit  where matricule='$mats' and departmet='$department' and levels='$levels'  and sex='2'   and db1='$take' "); 
$row = mysql_fetch_assoc($qry); 
 $savepttts=$row['total']; 

  $mxc11=$savepttt;
if(empty($mxc11)){

echo  $statusfbio="0.00";}
elseif($mxc11>"" ){
 
 printf("%01.2f",$a3=($savepttt/$savepttts));
 
 }
	?>
			 
		    </td>
				
			
							 <td style="float:left; width:120px;border:1px solid #000;font-size:12px;">
	<?php 
	
	  $mxc11t=$a1;
if(empty($mxc11t)){

  $statusfbiott="";}
elseif($mxc11t>"" ){
 
  $statusfbiott="1";
 
 }
		  $mxc11tt=$a2;
if(empty($mxc11tt)){

  $statusfbiottt="";}
elseif($mxc11tt>"" ){
 
  $statusfbiottt="1";
 
 }
		  $mxc11ttt=$a3;
if(empty($mxc11ttt)){

  $statusfbiotttt="";}
elseif($mxc11ttt>"" ){
 
  $statusfbiotttt="1";
 
 }
 
$tm=($statusfbiott+$statusfbiottt+$statusfbiotttt);
 
 $tx=($a1+$a2+$a3);

 printf("%01.2f",$cum=($tx/$tm));
	?>
			 
		    </td>
				
					 <td style="float:left; width:100px;border-right:1px solid #000;font-size:12px;">
	<?php 
	  $mxc11t=$a1;
if(empty($mxc11t)){

  $statusfbiott="";}
elseif($mxc11t>"" ){
 
  $statusfbiott="1";
 
 }
		  $mxc11tt=$a2;
if(empty($mxc11tt)){

  $statusfbiottt="";}
elseif($mxc11tt>"" ){
 
  $statusfbiottt="1";
 
 }
		  $mxc11ttt=$a3;
if(empty($mxc11ttt)){

  $statusfbiotttt="";}
elseif($mxc11ttt>"" ){
 
  $statusfbiotttt="1";
 
 }
 
 $tm=($statusfbiott+$statusfbiottt+$statusfbiotttt);
 
 $tx=($a1+$a2+$a3);
 $cum=($tx/$tm);
 $mxc11y=$cum;
 if(empty($mxc11y)){

 $statusfbiou="";}
elseif($mxc11y>7.99){
 $statusfbiou="";
}elseif($mxc11y>0 && $mxc11y<=7.99){
 $statusfbiou="10000";
}
echo  $statusfbiou;
	?>
			 
		    </td>
			
			

</tr>


<?php } ?>

</tr>
</table>