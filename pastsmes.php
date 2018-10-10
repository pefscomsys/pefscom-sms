<html>
<head>
<TITLE>ATTENDANCE SECTION</TITLE>
<style>

table,div{line-height:21px;
font-family:Tahoma, sans-serif;
text-transform:uppercase;
font-size:14px; }
tr{border-bottom:1px solid #000;}
</style>
</head>
<body onload="window.print();">



<div  style="text-align:center; margin:auto; width:800px; height:150px;"><br><br>

 <?php
ini_set('max_execution_time', 60000); //300 seconds = 5 minutes
 include 'dbcs.php';
 

$months=$_POST["months"];
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
Accademic Year <?php
$tiko=date('Y '); 
echo $tiko-1;
?>/  <?php
$tiko=date('Y '); 
echo $tiko;
?>
<?php } ?><Br><Br>

Department : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php 


echo $department;?>

<Br>

Level : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php 


echo $levels;?><br /><br /><B>
STUDENT WITH VERY POOR ATTENDANCE</B>

<br />
</b>
 
<div style="width:1000px;FLOAT:LEFT;COLOR:#000;MARGIN-TOP:50PX;height:800px;margin-left:20px;">

<?php
$roll=$_GET["1"];
$query="select * from rushs where roll='1'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>

<?php $take=$row[1];


?>
<?php } ?>


	
			 <div style="float:left; width:1000px; margin-left:00px;height:auto;color:#000;">
 
			 <div style="float:left; width:170px;BORDER:1PX SOLID #000; height:65px;color:#000; font-size:13px;">
			Matricule
			 
		    </div>
			 <div style="float:left; width:280px;BORDER:1PX SOLID #000; height:65px;color:#000; font-size:13px;">
			Student Names
			 
		    </div>
			
			
			
			 
			
			
			
			
			
			
							 <div style="float:left; width:35px; BORDER-right:1PX SOLID #000; BORDER-bottom:1PX SOLID #000; height:20px;color:#000;">
				
			P
		
		    </div>
			
							 <div style="float:left; width:34px; BORDER-right:1PX SOLID #000; BORDER-bottom:1PX SOLID #000; height:20px;color:#000;">
				
			T.P
			
			
		    </div>
			
							 <div style="float:left; width:34px; BORDER-right:1PX SOLID #000; BORDER-bottom:1PX SOLID #000; height:20px;color:#000;">
			S%
			
		    </div>
		
			
							 <div style="float:left; width:34px; BORDER-right:1PX SOLID #000; BORDER-bottom:1PX SOLID #000; height:20px;color:#000;">
			D%
			
		    </div>
			
			
			
			</div>
			
			
			
			
			
			
			
			
			
			
			
			<?php
$roll=$_GET["1"];
$query="select * from rushs where roll='1'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>

<?php $take=$row[1];


?>
<?php } ?>
<?php 

 $rollss=$_GET["roll"];
 $department=$_POST["department"];

$sex=$_POST["sex"];

 $levels=$_POST["levels"];
$query="select * from courses where db1='$take' and levels='$levels' and departmet='$department'  order by matricule ASC
";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
 
		 ?>
					 <?php  $mats=$row['matricule'];  $names=$row['fname'];
$qry = mysql_query("select  sum(present) as total
from attendance where   fname='$mats' and department='$department' and present>'' AND levels='$levels' "); 
$row = mysql_fetch_assoc($qry); 
$x11g=$row['total']; 
 $mjss=$x11g;

if(empty($mjss)){
 $statussmss="0";
 $height="25px";
 $size="14px";
 $color="#000";
 
 $px="1";
 
 }
 
elseif( $mjss>''){

 $statussmss=$mjss;
 
 $height="0px";
 $size="0px";
 $color="#FFF";
 
 $px="0";
} 

elseif( $mjss>=1 &&  $mjss<=9){

  $statussmss="0";
 $height="25px";
 $size="14px";
 $color="#000";
 
 $px="1";
} 
?>
			 <div style="float:left; width:600px;height:auto;">
			 <div style="float:left; width:170px;font-weight:normal;BORDER:<?PHP echo $px;?>PX SOLID <?PHP echo $color;?>;height:<?PHP echo $height;?>;font-size:<?PHP echo $size;?>;">
			 <?php echo $mats;
			
			
			?></div>
			
 
			<div style="float:left; text-align:left;width:280px;font-weight:normal;BORDER:<?PHP echo $px;?>PX SOLID <?PHP echo $color;?>;height:<?PHP echo $height;?>;font-size:<?PHP echo $size;?>;">
			
				&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $names;
?> 
			 </div>
			 
			 
			 
			 
			 
		 
			<div style="float:left; width:32px;text-align:center; border-right:<?PHP echo $px;?>px solid <?PHP echo $color;?>;height:<?PHP echo $height;?>;font-size:<?PHP echo $size;?>;">
		
		
		 	 
<?php
$qry = mysql_query("select  sum(extra) as total
from permission where   department='$department'    AND levels='$levels'  and matricule='$mats' "); 
$row = mysql_fetch_assoc($qry); 
$sss=$row['total']; 
			 $mn=($sss*3);
$qry = mysql_query("select  sum(present) as total
from attendance where   fname='$mats' and department='$department' and present>'' AND levels='$levels' "); 
$row = mysql_fetch_assoc($qry); 
$x11gz=$row['total'];
$x11g=$x11gz+$mn; 
 $mjss=$x11g;
if(empty($mjss)){
 echo $statussmss="0";}
 
elseif( $mjss>''){

 echo $statussmss=$mjss;
}
 ?>
		
		
		
		
		
		</div> 



















 
			<div style="float:left; width:32px;text-align:center; border-right:<?PHP echo $px;?>px solid <?PHP echo $color;?>;height:<?PHP echo $height;?>;font-size:<?PHP echo $size;?>;">
		
		
			 			<?php 
$qry = mysql_query("select  sum(total) as total
from countat where   department='$department'  and months='$months'  AND levels='$levels' and total>'' "); 
$row = mysql_fetch_assoc($qry); 
  $x11gg=$row['total']; 
 
 $mjssf=$x11gg;
 if(empty($mjssf)){
 echo $statussmssf="0";}
 
elseif( $mjssf>''){

 echo $statussmssf=$mjssf;
}
 ?>

		
		
		
		
		
		</div> 


















 
			<div style="float:left; width:32px;text-align:center; height:<?PHP echo $height;?>;font-size:<?PHP echo $size;?>;">
		
		
			<?php  
			
			$mjssxf=$statussmss;
			 if(empty($mjssxf)){
 echo $statussmssxf="0";}
 
elseif( $mjssxf>''){



printf("%01.2f",(($x11g/$x11gg)*100));
}
			
			
			
			
			$gim=($x11gg-$x11g);
			$m1=date("m");
$qry = mysql_query("select  sum(extra) as total
from permission where   department='$department'    AND levels='$levels'  and matricule='$mats'"); 
$row = mysql_fetch_assoc($qry); 
$sss=$row['total']; 
			 $mn=($sss*3);
			
			
		$tms=($x11g+$mn);
$trs_duplicate = mysql_query("select count(*) as total from mrshey where  

 fname='$names'
and matricule='$mats'and department='$department' and levels='$levels' and  months='$months' and  present='$tms' and  total='$x11gg' and absences='$gim' 



") or die(mysql_error());
list($total) = mysql_fetch_row($trs_duplicate);

if ($total > 0)
{
$terr[] = "";
//header("Location: finances.php?msg=$err");
//exit();
}


if(empty($terr)) {
			
			
$query3r="insert into mrshey set fname='$names'
, matricule='$mats',department='$department',levels='$levels' , months='$months' , present='$tms', total='$x11gg', absences='$gim' and year='$take'";







mysql_query ($query3r) or die ('could not updated:'.mysql_error());

}
			
			
			
			
			?>
		
		
		
		
		</div> 		
			 
			
			 
			 
			 

 
			<div style="float:left;border-right:1px solid #000; border-left:1px solid #000;width:30px;text-align:center; height:<?PHP echo $height;?>;font-size:<?PHP echo $size;?>;">
		
		<?php

 $qry22 = mysql_query("select SUM(total) as total from countat where  department='$department' and levels='$levels'  and db1='$take' and  department>''"); 
$row = mysql_fetch_assoc($qry22); 
ECHO $ats2=$row['total']; 
			
			?>
		
		
		
		
		</div> 		
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 </div>
			  			 	 
			 
			 
			 
			 
			  			 	 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 

			 
		
			 
			 
			 
			 
			 			
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
	
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			
			
			
			
		



<?php } ?>


</div>


			 
			 <div style="float:left; width:800px; margin-left:000px;height:auto;color:#000;text-align:left;">
			<b> N.B. A Total of <?php echo $ats2;?> period (s) were Covered for This Department</b><br>
			 D% = Total Departmental Period Cover<br>
			 S% = Percentage of Student Attendance<br>
			  P = Total Present<br>
			  T.P = Total Departmental Attendance<br>
			  N.B D%= T.p
			 
			 </div>