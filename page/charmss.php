<?php

include 'dbcs.php';

page_protect();


 $notes=$_SESSION['user_name'];

$user_name=$notes;




 $ip=@$_SERVER['REMOTE_ADDR'];
 

?>
<?php
 $notes=$_SESSION['user_name'];
$roll=$_GET["1"];
$query="select * from users where full_name='$notes'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>
<?php  $ids=$row['fax'];


?>
<?php } ?><?php
echo $position=$_GET['roll'];




$qry = mysql_query("select  positions as total
from position where roll='$position' "); 
$row = mysql_fetch_assoc($qry);

 echo $fake=$row['total'];  	
?>
<html>

<head><style>
body {
  background: url('school1.jpg') no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
  margin: 0px;
}
.brad-img {
	border-radius: 50%;
	border: 4px solid #FFF;
	box-shadow: 0px 0px 4px 1px rgba(0,0,0,0.8);
	float: right;
	margin: 0px 15px;
	height: 130px;}
</style>

</head>
<body >
<span id='countdown'></span><h2>HIMSU CANDIDATE - <?php echo $fake;?></h2><hr/>	
	
	
	<div style="width:1600px;float:left; margin-left:50px;"> <?php
$roll=$_GET["1"];
$query="select * from rushs where roll='1'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>
<?php   $take=$row[1];

?>
<?php } ?>
	<?php
	
	$query="select * from election where  extra='$take'  and stat=''  and rolx='$position' and id='$ids' order by position ASC";
$result=mysql_query($query);
	
		 while ($row = mysql_fetch_array($result)) {
		 $flag=1;
		 
	?>
	<?php  $mxc=$row['matricule'];$levels=$row['levels'];
	$name=$row['fname'];$deptt=$row['department'];
	$code=$row['codes'];$colors=$row['colors'];
	?>
	<a href="charmsss.php?roll=<?php echo $mxc;?>">
	<div style="float:left; width:210px; height:340px;font-weight:bold;">
		<div style="float:left; width:270px;font-family:Times New Roman; height:50px;font-weight:normal; font-size:18px; ">
	
	<div style="float:left; BACKGROUND:#770000;font-size:18px; width:200px;font-family:Times New Roman; height:70px;">
<div style="float:left; width:250px; height:35px;color:#fff;">
<div style="float:left;margin-top:15px;font-family:georgia;">
<B>TOTAL VOTE = <?php 


 $qry2 = mysql_query("select SUM(counts) as total from countelec where   codes='$code' "); 
$row = mysql_fetch_assoc($qry2); 
echo  $tm=$row['total']; 
?>
	</div></div></div>
	
	<div style="float:left; width:200px;font-family:Times New Roman; height:40px;">
	
	<B>
	</b>
	</div>
	
	</div>
	<div style="float:left; width:230px; height:290px; margin-top:25px; ">
	
	
	<div style="float:left; width:140px; height:165px; ">
	<?php 
				
				$qry = mysql_query("select id as total
from employees where empname='$mxc'  order by empname ASC "); 
$row = mysql_fetch_assoc($qry); 
 $savep4=$row['total']; 
				 $mxx=$rec['empname'];?>
					
					
					<img src="load_image.php?pic_id=<?php echo $savep4;?>" width="200px" height="155p">
	</div>
	
	<div style="float:left; width:200px; height:90px;">
	<div style="float:left; width:200px; height:80px;background:<?php echo $colors;?>; text-align:center;">

	<div style="float:left;width:200px;text-align:center;  margin-top:25px;">	PARTY
	
	</div>
</div>
	</div>
	<div style="float:left; width:270px;font-family:Times New Roman; height:20px;font-weight:normal; font-size:18px; ">
	
	<div style="float:left; BACKGROUND:#CCC; width:200px;font-family:Times New Roman; height:20px;font-size:14px;">
DEPARTMENT
	</div><div style="float:left;BACKGROUND:#fff; width:200px;font-family:Times New Roman; height:20px;">
	
	<B><?PHP
 $qry2 = mysql_query("select departmet as total from courses where   matricule='$mxc' "); 
$row = mysql_fetch_assoc($qry2); 
echo  $tms=$row['total']; 
?>
	</b>
	</div>
	
	
	
	
	
	
	
	
	
	
	
	
	<div style="float:left; BACKGROUND:#CCC; width:200px;font-family:Times New Roman; height:20px;font-size:15px;">
	NAMES
	</div><div style="float:left;BACKGROUND:#fff; width:200px;font-family:Times New Roman; height:20px;">
	
	<B><?php echo $name;?>
	</b>
	</div>
		<div style="float:left; width:270px;font-family:Times New Roman; height:20px;font-weight:normal; font-size:18px; ">
	
	<div style="float:left;BACKGROUND:#CCC; width:200px;font-family:Times New Roman; height:20px;font-size:15px;">
	ATTENDANCE
	</div><div style="float:left; BACKGROUND:#fff; width:200px;font-family:Times New Roman; height:20px;">
	
	<B><?php     



 $qry22 = mysql_query("select SUM(present) as total from attendance where  fname='$mxc' and levels='$levels' and db1='$take' "); 
$row = mysql_fetch_assoc($qry22); 
ECHO $ats1=$row['total']; 

?>
	</b>
	</div>	
	
	
	
	<div style="float:left; width:270px;font-family:Times New Roman; height:20px;font-weight:normal; font-size:18px; ">
	
	<div style="float:left;BACKGROUND:#CCC; width:200px;font-family:Times New Roman; height:20px;font-size:15px;">
	AVERAGES
	</div><div style="float:left; BACKGROUND:#fff; width:200px;font-family:Times New Roman; height:20px;">
	
	<B><?php 


$query = mysql_query("select  * from resit where db1='$take' and matricule='$mxc' and departmet='$deptt' and sex='1' and levels='$levels'order by fname ASC"); 

		 while ($row = mysql_fetch_array($query)) {
		 
		 
		 
		 
		 
		 ?>		<?php 
$rolls=$row[0];

		 $courseps=$row['fname'];
		
		
		 $exam=$row['c102'];
		
		$cas=$row['c101'];?>	<?php 


$qry = mysql_query("select  credit as total
from credits where subject='$courseps' "); 
$row = mysql_fetch_assoc($qry); 

 $richooTTTy=$row['total']; 
 
 
 
 $mmm=($exam+$cas)/5;
  $totalmarks=($mmm*$richooTTTy);
 
 $rolls;
$query3r="update resit set c109='$totalmarks'
 where roll='$rolls'";







mysql_query ($query3r) or die ('could not updated:'.mysql_error());


$query3rr="update resit set c108='$richooTTTy'
 where roll='$rolls'";







mysql_query ($query3rr) or die ('could not updated:'.mysql_error());
 

  
?>





<?PHP } ?>
<?php
 $qry2 = mysql_query("select SUM(c109) as total from resit where   matricule='$mxc' "); 
$row = mysql_fetch_assoc($qry2); 
 $tm=$row['total']; 


 $qry2 = mysql_query("select SUM(c108) as total from resit where  matricule='$mxc' "); 
$row = mysql_fetch_assoc($qry2); 
 $tms=$row['total']; 
   printf("%01.2f",$ui=($tm/$tms));
   ?>
   
	</b>
	</div>	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
		<div style="float:left; width:270px;font-family:Times New Roman; height:20px;font-weight:normal; font-size:18px; ">
	
	<div style="float:left;BACKGROUND:#CCC; width:200px;font-family:Times New Roman; height:20px;">
	FEE(S)
	</div><div style="float:left; BACKGROUND:#fff; width:200px;font-family:Times New Roman; height:20px;">
	
	<B><?php     



 
 $qry2 = mysql_query("select SUM(amount_paid) as total from historic where   matricule='$mxc' and class='$levels' and oldb='$take' "); 
$row = mysql_fetch_assoc($qry2); 
echo  $amount=$row['total']; 

?>
	</b>
	</div></a>
	</div>
	
	
	
	
	
	
	
	</div>	
	
	
	
	
	
	</div>
	
	
	
	
	
	
	</div>	</div>	</div>
	</a>
	<?php
	}
	?>
	</table>
	</body>
</html>

