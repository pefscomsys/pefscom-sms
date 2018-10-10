<html>
<head>
<TITLE>DETAILS GRADUATION LIST</TITLE>
<style>

table,td{line-height:21px;
font-family:Tahoma, sans-serif;
text-transform:uppercase;
font-size:14px; }
tr{border-bottom:1px solid #000;}
.clock{background:#336666;color:#455645;}
.clock:hover{background:red; color:red;}
</style>
</head>
<body >



<div  style="text-align:center; margin:auto; width:800px; height:150px;"><br><br>

 <?php
 include 'dbcs.php';
 
$department=$_POST["department"];

$sex=$_POST["sex"];

$froms=$_POST["froms"];

$tos=$_POST["tos"];


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
<?php } ?><Br><Br>

Department : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php 


echo $department;?>

<Br>

Level : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php 


echo $levels;?><br /><br /><B>
COURSE VALIDATION TABLE </B>

<br />
</b>
 
<div style="width:1450px;FLOAT:LEFT;COLOR:#000;MARGIN-TOP:50PX;height:800px;margin-left:-220px;">

<?php
$roll=$_GET["1"];
$query="select * from rush where roll='1'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>
<b>
<?php $take=$row[1];
$db1=$take;


?>
<?php } ?>


	
			 <div style="float:left; width:2100px; height:auto;color:#000;">
 
			 <div style="float:left; width:250px;BORDER:1PX SOLID #000; height:35px;color:#000; background:#ccc;font-size:13px;">
			Matricule
			 
		    </div>
			 <div style="float:left; width:260px;BORDER:1PX SOLID #000; height:35px;color:#000; background:#ccc;font-size:13px;">
			Student Names
			 
		    </div>
			 <div style="float:left; width:1500px; height:25px;">
			 <div style="float:left; width:125px;background:#1188dd; height:35px;color:#000; font-size:13px;">
			
			 <div style="float:left; width:60px;BORDER:1PX SOLID #000; height:35px;">
			T.C 1<sup>st</SUP>S1 Y1
		    </div>
 <div style="float:left; width:60px;BORDER:1PX SOLID #000; height:35px;">
			N<sup>o</sup> C c. S1 Y1
		    </div>




			</div>
			 <div style="float:left; width:125px;background:#1188dd; height:35px;color:#000; font-size:13px;">
			
			 <div style="float:left; width:60px;BORDER:1PX SOLID #000; height:35px;">
			T.C 2<sup></SUP>S2 Y1
		    </div>
 <div style="float:left; width:60px;BORDER:1PX SOLID #000; height:35px;">
			N<sup>o</sup> C c. S2 Y1
		    </div>




			</div>
			
			 <div style="float:left; width:125px; background:#cc6666;height:35px;color:#000; font-size:13px;">
			
			 <div style="float:left; width:60px;BORDER:1PX SOLID #000; height:35px;">
			T.C 1<sup>st</SUP>S1 Y2
		    </div>
 <div style="float:left; width:60px;BORDER:1PX SOLID #000; height:35px;">
			N<sup>o</sup> C c. S1 Y2
		    </div>




			</div>
			 <div style="float:left; width:125px; background:#cc6666;height:35px;color:#000; font-size:13px;">
			
			 <div style="float:left; width:60px;BORDER:1PX SOLID #000; height:35px;">
			T.C 2<sup></SUP>S2 Y2
		    </div>
 <div style="float:left; width:60px;BORDER:1PX SOLID #000; height:35px;">
			N<sup>o</sup> C c. S2 Y2
		    </div>




			</div>
			
			
				 <div style="float:left; width:125px;background:wheat; height:35px;color:#000; font-size:13px;">
			
			 <div style="float:left; width:60px;BORDER:1PX SOLID #000; height:35px;">
			T.C 1<sup>st</SUP>S1 Y3
		    </div>
 <div style="float:left; width:60px;BORDER:1PX SOLID #000; height:35px;">
			N<sup>o</sup> C c. S1 Y3
		    </div>




			</div>
			 <div style="float:left; width:125px; background:wheat;height:35px;color:#000; font-size:13px;">
			
			 <div style="float:left; width:60px;BORDER:1PX SOLID #000; height:35px;">
			T.C 2<sup></SUP>S2 Y3
		    </div>
 <div style="float:left; width:60px;BORDER:1PX SOLID #000; height:35px;">
			N<sup>o</sup> C c. S2 Y3
		    </div>




			</div>
			
				 <div style="float:left; width:125px; height:35px;color:#000; font-size:13px;">
			
			 <div style="float:left; width:60px;BORDER:1PX SOLID #000; height:35px;">
			T.C 1<sup>st</SUP>S1 Y4
		    </div>
 <div style="float:left; width:60px;BORDER:1PX SOLID #000; height:35px;">
			N<sup>o</sup> C c. S1 Y4
		    </div>




			</div>
			 <div style="float:left; width:125px; height:35px;color:#000; font-size:13px;">
			
			 <div style="float:left; width:60px;BORDER:1PX SOLID #000; height:35px;">
			T.C 2<sup></SUP>S2 Y4
		    </div>
 <div style="float:left; width:60px;BORDER:1PX SOLID #000; height:35px;">
			N<sup>o</sup> C c. S2 Y4
		    </div>




			</div>
			 <div style="float:left; width:125px; height:35px;color:#000; font-size:13px;">
			
			 <div style="float:left; width:60px;BORDER:1PX SOLID #000; height:35px;">
			Resit total
		    </div>
 <div style="float:left; width:60px;BORDER:1PX SOLID #000; height:35px;">
			Total
		    </div>
</div>

 <div style="float:left; width:60px;BORDER:1PX SOLID #000; height:35px;">
			Valid No
		    </div>
			
			
 <div style="float:left; width:30px;BORDER:1PX SOLID #000; height:35px;font-size:11px;font-weight:normal;">
		N<sup>o</sup> OWED
		    </div>
 <div style="float:left; width:60px;BORDER:1PX SOLID #000; height:35px;">
			Status
		    </div>

			</div>
			
		    </div>
<?php 
 $rollss=$_GET["roll"];
$department=$_POST["department"];

 $froms=$_POST["froms"];

$tos=$_POST["tos"];
$sex=$_POST["sex"];

$levels=$_POST["levels"];
$query="select * from courses where departmet='$department' and db1='$froms'  and levels='$levels'
";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
 
		 ?>
		 
			
			 <div style="float:left; width:2100px; height:auto;color:#000;font-weight:normal;">
			<a href="#" class="clock"> 
			 <div style="float:left; width:250px;BORDER:1PX SOLID #000; height:25px;color:#000; font-size:13px;">
			<?php echo $mats=$row['matricule'];?>
			 
		    </div>
			 <div style="float:left; width:260px;BORDER:1PX SOLID #000; height:25px;color:#000; text-align:left;font-size:13px;">
			&nbsp;<?php echo $fname=$row['fname'];?>
			 
		    </div>
 
			 <div style="float:left; width:1500px; height:25px;">
 <div style="float:left; width:125px; height:25px;color:#000; font-size:13px;">
			
			 <div style="float:left; width:60px;BORDER:1PX SOLID #000; height:25px;">
			<?php 
			
			
			$qry = mysql_query("select  db1 as total
from courses where matricule='$mats' and levels='200' "); 
$row = mysql_fetch_assoc($qry); 
 $nb=$row['total'];
			
			
			
			
			
			
			
			
			$qry = mysql_query("select  c132 as total
from courses where matricule='$mats' and levels='200'  and db1='$nb'"); 
$row = mysql_fetch_assoc($qry); 
echo $mx11=$row['total'];
			
			
			
			
			?>
		    </div>
 <div style="float:left; width:60px;BORDER:1PX SOLID #000; height:25px;">
		<?php 	
			$qry = mysql_query("select  c130 as total
from courses where matricule='$mats' and levels='200'and db1='$nb' "); 
$row = mysql_fetch_assoc($qry); 
echo $mxc21=$row['total'];?>
		    </div>




			</div>
			 <div style="float:left; width:125px; height:25px;color:#000; font-size:13px;">
			
			 <div style="float:left; width:60px;BORDER:1PX SOLID #000; height:25px;">
			<?php $qry = mysql_query("select  c133 as total
from courses where matricule='$mats' and levels='200'and db1='$nb' "); 
$row = mysql_fetch_assoc($qry); 
echo $mx12=$row['total'];?>
		    </div>
 <div style="float:left; width:60px;BORDER:1PX SOLID #000; height:25px;">
		<?php $qry = mysql_query("select  c131 as total
from courses where matricule='$mats' and levels='200' and db1='$nb'"); 
$row = mysql_fetch_assoc($qry); 
echo $mxc22=$row['total'];?>
		    </div>




			</div>
			
			
			
			
			
			
			
			
			<div style="float:left; width:125px; height:25px;color:#000; font-size:13px;">
			
			 <div style="float:left; width:60px;BORDER:1PX SOLID #000; height:25px;">
			<?php 

			$qry = mysql_query("select  db1 as total
from courses where matricule='$mats' and levels='300' "); 
$row = mysql_fetch_assoc($qry); 
 $nbs=$row['total'];
			
			
			
			
			
			
			
			
			
			
			
			
			$qry = mysql_query("select  c132 as total
from courses where matricule='$mats' and levels='300' and db1='$nbs' "); 
$row = mysql_fetch_assoc($qry); 
echo $mx13=$row['total'];?>
		    </div>
 <div style="float:left; width:60px;BORDER:1PX SOLID #000; height:25px;">
			<?php $qry = mysql_query("select  c130 as total
from courses where matricule='$mats' and levels='300' and db1='$nbs' "); 
$row = mysql_fetch_assoc($qry); 
echo $mxc23=$row['total'];?>
		    </div>




			</div>
			 <div style="float:left; width:125px; height:25px;color:#000; font-size:13px;">
			
			 <div style="float:left; width:60px;BORDER:1PX SOLID #000; height:25px;">
					<?php $qry = mysql_query("select  c133 as total
from courses where matricule='$mats' and levels='300' and db1='$nbs'"); 
$row = mysql_fetch_assoc($qry); 
echo $mx14=$row['total'];?>
		    </div>
 <div style="float:left; width:60px;BORDER:1PX SOLID #000; height:25px;">
					<?php $qry = mysql_query("select  c131 as total
from courses where matricule='$mats' and levels='300' and db1='$nbs' "); 
$row = mysql_fetch_assoc($qry); 
echo $mxc24=$row['total'];?>
		    </div>




			</div>
			
			
			
			
			
			<div style="float:left; width:125px; height:25px;color:#000; font-size:13px;">
			
			 <div style="float:left; width:60px;BORDER:1PX SOLID #000; height:25px;">
				<?php 
				
				
			$qry = mysql_query("select  db1 as total
from courses where matricule='$mats' and levels='400' "); 
$row = mysql_fetch_assoc($qry); 
 $nbss=$row['total'];
				
				
				
				
				$qry = mysql_query("select  c132 as total
from courses where matricule='$mats' and levels='400' and db1='$nbss' "); 
$row = mysql_fetch_assoc($qry); 
echo $mx15=$row['total'];?>
		    </div>
 <div style="float:left; width:60px;BORDER:1PX SOLID #000; height:25px;">
			<?php $qry = mysql_query("select  c130 as total
from courses where matricule='$mats' and levels='400' and db1='$nbss' "); 
$row = mysql_fetch_assoc($qry); 
echo $mxc25=$row['total'];?>
		    </div>




			</div>
			 <div style="float:left; width:125px; height:25px;color:#000; font-size:13px;">
			
			 <div style="float:left; width:60px;BORDER:1PX SOLID #000; height:25px;">
				<?php $qry = mysql_query("select  c133 as total
from courses where matricule='$mats' and levels='400' and db1='$nbss' "); 
$row = mysql_fetch_assoc($qry); 
echo $mx16=$row['total'];?>
		    </div>
 <div style="float:left; width:60px;BORDER:1PX SOLID #000; height:25px;">
			<?php $qry = mysql_query("select  c131 as total
from courses where matricule='$mats' and levels='400' and db1='$nbss'  "); 
$row = mysql_fetch_assoc($qry); 
echo $mxc26=$row['total'];?>
		    </div>




			</div>
			
			
			
			<div style="float:left; width:125px; height:25px;color:#000; font-size:13px;">
			
			 <div style="float:left; width:60px;BORDER:1PX SOLID #000; height:25px;">
			
		    </div>
 <div style="float:left; width:60px;BORDER:1PX SOLID #000; height:25px;">
	
		    </div>




			</div>
			 <div style="float:left; width:125px; height:25px;color:#000; font-size:13px;">
			
			 <div style="float:left; width:60px;BORDER:1PX SOLID #000; height:25px;">
		
		    </div>
 <div style="float:left; width:60px;BORDER:1PX SOLID #000; height:25px;">
	
		    </div>




			</div>
			<div style="float:left; width:125px; height:25px;color:#000; font-size:13px;">
			
			 <div style="float:left; width:60px;BORDER:1PX SOLID #000; height:25px;background:<?php  $mx21= $row['cxx3'];
 
 $mxc3=$row['cxx5'];
 
if(empty($mxc3)){
 $statusf3="";}

 
 elseif($mxc3>$mxc2  ){
 $statusf3="#ff6666";
}
  elseif($mxc3=$mxc2  ){
 $statusf3="#fff";
}
 
 echo $statusf3;
 ?>;">
		<?php  

  $qry = mysql_query("select SUM(c134) as total
from courses where matricule='$mats' and levels='$levels' "); 
$row = mysql_fetch_assoc($qry); 
 $bb2=$row['total'];
		echo  $t1=($bb+$bb2);?>
		    </div>
 <div style="float:left; width:60px;BORDER:1PX SOLID #000; height:25px;">
			<?php 
		
		Echo $t2=($mx11+$mx12+$mx13+$mx14+$mx15+$mx16+$mx17+$mx18);?>
		    </div>
</div>

 <div style="float:left; width:60px;BORDER:1PX SOLID #000; height:25px;">
				<?php 
		
		Echo $t3=($mxc21+$mxc22+$mxc23+$mxc24+$mxc25+$mxc26+$mxc27+$mxc28);?>
		    </div>
			
			
			 <div style="float:left; width:30px;BORDER:1PX SOLID #000; height:25px;background:<?php
				 $mmc=(($t2+$t1)-($t3));
				
if(empty($mmc)){
 $statusfmmc="";
 }
elseif($mmc>''){
$statusfmmc="#ff0000";
}

echo $statusfmmc;

?>;">
				<?php 
		$tmx=($t3+$t1);
		Echo $mop=(($t2+$t1)-($t3));?>
		    </div>
<div style="float:left; width:60px;BORDER:1PX SOLID #000; height:25px;font-size:12px;">
				<?php
				
				$mxc48=$mop;
if(empty($mxc48)){
 $statusfmxc48="";
 }
elseif($mxc48>='' && $mxc48<=''){
$statusfmxc48="Graduate";
}
				
	elseif($mxc48>''){
$statusfmxc48="NOT YET";
}
				
	elseif($mxc48<0){
$statusfmxc48="NOT YET";
}				
		echo 	$statusfmxc48;	
		$statusfmxc48y="Graduate";
		
		
		
	$mxc488=$statusfmxc48;
	
	
if(empty($mxc488)){
 $statusfmxc488="";
 
$statusfmxc488y='';
 }
elseif($mxc488>=$statusfmxc48y && $mxc488<=$statusfmxc48y){
$statusfmxc488="graduate";

$statusfmxc488y=$query44;
}	

$queryf3="update courses set c108='$statusfmxc48'
 where matricule='$mats' and departmet='$department' and db1='$take'";







mysql_query ($queryf3) or die ();
		
				?>
		    </div>

			</div></a>
			
</div>
<?php } ?>


</div>