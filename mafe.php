<?PHP
INCLUDE 'dbcs.PHP';

ini_set('max_execution_time', 3250000); //300 seconds = 5 minutes



 $levels=$_POST["levels"];
$form=$_POST["form"];
$statusbsub=$_POST["statusbsub"];

 $deptt=$_POST["deptt"];

$teacher=$_POST["teacher"];
$t1=$_POST["t1"];
$t2=$_POST["t2"];

$levels=$_POST["levels"];
$roll=$_POST["roll"];
$form=$_POST["form"];

$form=$_POST["form"];
?>
<html>
<?php
$roll=$_GET["1"];
$query="select * from school where roll='1'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
?>

<?php  $school=$row[1];
$school2=$row[2];
?>
<?php } ?>
<?php
$roll=$_GET["1"];
$query="select * from school where roll='6'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
?>

<?php  $school6=$row[1];
$school6b=$row[2];
?>
<?php } ?>
<?php
$roll=$_GET["1"];
$query="select * from school where roll='7'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
?>

<?php  $school7=$row[1];
$school7b=$row[2];
?>
<?php } ?><?php
$roll=$_GET["1"];
$query="select * from school where roll='8'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
?>

<?php  $school8=$row[1];
$school8b=$row[2];
?>
<?php } ?>


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
<?php } ?><head><TITLE>General Code Register</TITLE>
 <link rel="stylesheet" href="test.css" 
type="text/css">
<style>
body {size:A4 Landscape;
        margin: 0;
        padding: 0;
        font: 25pt;
    }
    * {
        box-sizing: border-box;
        -moz-box-sizing: border-box;
    }
    .page {
        width: 1000px;
        min-height: 77.7cm;
        padding: 2cm;
        margin: 1cm auto;
        background: white;
    }
    .subpage {
        padding: 1cm;
        border: 5px black solid;
        height: 627mm;
        outline: 2cm #000 solid;
    }
    
    @page {
        size: A4 Landscape ;
        margin: 0;
    }
    @media print {
        .page {
            margin: 0;
            border: initial;
            border-radius: initial;
            width: initial;
            min-height: initial;
            box-shadow: initial;
            background: initial;
            page-break-after: always;
        }
    }



th.rotate {
  /* Something you can count on */
  height: 150px;
  white-space: nowrap;
  padding:1px;
}

th.rotate > div {
	font-weight:normal;
  transform: 
    /* Magic Numbers */
    translate(2px, 51px)
    /* 45 is really 360 - 45 */
    rotate(270deg);font-family:calibri;
  width: 24px;
}
th.rotate > div > span {
  border-bottom: 1px solid #000;
margin-left:-40px;
  margin-top:-10px;font-family:calibri;
}
</style>
</head><?php
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
 $rollss=$_GET["rollsps"];
$form=$_POST["form"];
$statusbsub=$_POST["statusbsub"];

$deptt=$_POST["deptt"];

$teacher=$_POST["teacher"];
$t1=$_POST["t1"];
$t2=$_POST["t2"];

$levels=$_POST["levels"];
$roll=$_POST["roll"];
$form=$_POST["form"];

$form=$_POST["form"];
$query="select * from $table where roll='$rollss'
";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 $levelss=$row["levels"];
		 ?>
				  
<body  style='font-family:calibri;'>
 <div class="page"  >
			 
		 <div style="float:left; width:1170px; height:900px;margin-left:9px;margin-top:10px;">
		 <div style="float:left; width:1170px; height:80px; color:#000; border:1px solid #000;margin-left:-50px;margin-top:-70px;">
			 
			 
		 <div style="float:left; width:575px; height:80px; color:#000; border-right:1px solid #000;">
			 <div style="float:left;font-size:15px; width:430px; HEIGHT:21PX;FONT-SIZE:15PX; margin-top:5px;margin-left:10px;font-family:times;">
				  <?php // line 1 header
				  
				  
				  
				  echo $school6;?>
		 
		 </div>
			 
			 <div style="float:left; width:430px; HEIGHT:21PX;FONT-SIZE:14PX; margin-left:10px;font-family:times;">
				  <?php // line 1 header
				  
				  
				  echo $school6b;?>
		 
		 </div>
			 	 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 </div>
			 
			 
			 
			 
		 <div style="float:left; width:589px; height:80px; color:#000; ">
			 
			   <b style="font-size:17px;font-family:times;margin-left:10px;margin-top:5px;">STUDENT ACADEMIC RECORD</b>
			 
			 
			 
			 
			 </div>
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 </div>
			 
			 
			 
			 
			 
			 
			 
			
			 
		 <div style="float:left; width:1170px; height:110px; color:#000;margin-left:-50px;margin-top:5px;">
			 
		 <div style="float:left; width:350px; height:105px;border:1px solid #000;">
		 <div style="float:left; width:200px;font-family:arial;font-size:12px; height:25px; color:#000;text-align:center;margin-left:-30px;">
		<u>	Grading Key</u>
			 
			 
			 </div>
			 
			 	 <div style="float:left; width:200px; height:auto;">
			<table cellspacing="0" cellpadding="0" width="300px" style="float;left;margin-left:5px;margin-top:-5px;font-size:10px;">
			<tr><td style="font-size:10px;">
		  <?php echo $c8;?> : 
		  
		 </td><td style="float:left; width:125;font-family:arial;font-size:10px; height:10px;
		  ">
		  <?php echo $rangx15;?> -
		  <?php echo $rangx16;?> %
		  <?php echo $gpa8;?>GP
		  
		 </td> </tr>
		  
		  
		  <tr><td  style="font-size:12px;">
		  <?php echo $c6;?> : 
		  
		 </td><td style="float:left; width:125;font-family:arial;font-size:10px; height:10px;
		  ">
		  <?php echo $rangx11;?> -
		  <?php echo $rangx12;?> %
		  <?php echo $gpa6;?>GP
		  </td>
		</tr>
		  
		  
		  <tr><td  style="font-size:12px;">
		  <?php echo $c5;?> : 
		  
</td><td style="float:left; width:125;font-family:arial;font-size:10px; height:10px;
		  ">
		  <?php echo $rangx9;?> -
		  <?php echo $rangx10;?> %
		  <?php echo $gpa5;?>GP
		  
		   
		 </td><td style="float:left; width:125;font-family:arial;font-size:10px; height:10px;
		  ">
		 
		  </td>
			</tr>
			
			
			
					  <tr><td  style="font-size:12px;">
		  <?php echo $c4;?> : 
		  
</td><td style="float:left; width:125;font-family:arial;font-size:10px; height:10px;
		  ">
		  <?php echo $rangx8;?> -
		  <?php echo $rangx9;?> %
		  <?php echo $gpa4;?>GP
		  
		   
		 </td><td style="float:left; width:125;font-family:arial;font-size:10px; height:10px;
		  ">
		
		  </td>
			</tr>
			
			
			
						  <tr><td  style="font-size:12px;">
		  <?php echo $c2;?> : 
		  
</td><td style="float:left; width:125;font-family:arial;font-size:10px; height:10px;
		  ">
		  <?php echo $rangx7;?> -
		  <?php echo $rangx8;?> %
		  <?php echo $gpa3;?>GP
		  
		   
		 </td><td style="float:left; width:125;font-family:arial;font-size:10px; height:10px;
		  ">
		 
		  </td>
			</tr>
			
			
			
					  <tr><td  style="font-size:12px;">
		  <?php echo $c1;?> : 
		  
</td><td style="float:left; width:125;font-family:arial;font-size:10px; height:10px;
		  ">
		  <?php echo $rangx6;?> -
		  <?php echo $rangx7;?> %
		  <?php echo $gpa2;?>GP
		  
		   
		 </td><td style="float:left; width:125;font-family:arial;font-size:10px; height:10px;
		  ">
		 
		  </td>
			</tr>
			
				
			
			
			
			
			
			
			
			
			
		  </table>
		  
			 
			  </div> 
			 
			 
			  </div> 
			 
			  </div> 
			 
			 
			 
			 
		 <div style="float:left; width:1170px; height:50px; color:#000; border:1px solid #000;margin-left:-50px;margin-top:-3px;">
			 
			 
		 <div style="float:left; width:565px; height:50px; color:#000; border-right:1px solid #000;">
			 
			 
			 
			 <table cellspacing="0" cellpadding="0" style="font-family:times;font-size:13px;">
<tr><td><b style="float:left:width:80px;">Name:&nbsp;</b></td><td>:</td>  <td><?php 
		 
		  $row['fname'];
		 $deptt=$row['departmet'];
$qry = mysql_query("select from1  as total
from duration where extra='$deptt'  "); 
$row = mysql_fetch_assoc($qry); 
$savesd=$row['total'];
		 
		 
		$qry = mysql_query("select extra2  as total
from duration where extra='$deptt'  "); 
$row = mysql_fetch_assoc($qry); 
$savesds=$row['total'];
		  
		 
		 
		 
		 ?><?php 
$query="select * from $table where roll='$rollss'
";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
 
		 ?><?php echo $row['fname'];?>    </td></tr>
		 
		 
		 
		 
		 
		 
	<tr><td><b style="float:left:width:80px;">Mat. No &nbsp;</b></td><td>:</td>  <td><?php echo $mats=$row['matricule'];?></td></tr>	 
	
		 
		 
	<tr><td><b style="float:left:width:80px;">Sex:</b>&nbsp;</b></td><td>:</td>  <td><?php echo $row['sex'];?></td><td><b style="float:left:width:80px;">Date of Birth: </b></td><td>  &nbsp;<?php echo $row['cxx2'];?></td></tr>	 
		 
		 
		 
		 	 
		 	 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 </table>

			 
			  </div> 
			 
			 			 
		 <div style="float:left; width:589px; height:70px; color:#000; ">
			 	 
<table style="font-family:times;font-size:13px;"cellspacing="0" cellpadding="0" >
<tr>
<td><B>Department :</B></td><td><?php  echo $savesds;?></td></tr>


<tr>
<td><B>Qualification :</B></td><td><?php echo $deptt=$row['departmet'];?><?php  $deptt=$row['departmet'];
		 
		 $level=$row['levels'];
		 	
	
		 $qry = mysql_query("select c101  as total
from courses where departmet='$deptt'  and matricule='$mats' and levels='$levelss' "); 
$row = mysql_fetch_assoc($qry); 
$start=$row['total'];
		 
		
	$mmn=$deptt;	 
if(empty($mmn)){
 $statusfmmn="";
 }
 elseif($mmn='ENROLLED NURSING'){
 $statusfmmnyyuyyuy="300";

}
	 elseif($mmn='Pharmacy Assistant'){
 $statusfmmnyyuyyuy="200";
}	 
	 elseif($mmn='MEDICAL SALES'){
 $statusfmmnyyuyyuy="200";

}
	 elseif($mmn='MEDICAL SECRETARIAL'){
 $statusfmmnyyuyyuy="200";
$statusfmmn=$ny2;
}		 elseif($mmn='Radiology Assistant'){
 $statusfmmnyyuyyuy="200";

}	 



 elseif($mmn='Aged Care'){
 $statusfmmnyyuyyuy="200";

}	 
		 
			 $qry = mysql_query("select c102  as total
from courses where departmet='$deptt'  and matricule='$mats' and levels='$statusfmmnyyuyyuy' "); 
$row = mysql_fetch_assoc($qry); 
 $end=$row['total'];	

 $mmnfd=$end;
	if(empty($mmnfd)){
 $statusfmmnfd=$start;
 }	
elseif($mmnfd>''){
	 $statusfmmnfd=$end;
	
}
		
		 
		 
		 ?></td></tr>
<tr>
<td><B> Duration :</B></td><td>1<sup>st</sup> of Oct <?php echo $start;?>  to July, 31<sup>st</sup> <?php   
		 $ghs=$start;
	$mmn=$deptt;	 
if(empty($mmn)){
 $statusfmmn="";
 }
 elseif($mmn='ENROLLED NURSING'){
 $ny1=$ghs+2;
$statusfmmn=$ny1;
}
	 elseif($mmn='Pharmacy Assistant'){
 $ny2=$ghs+0;
$statusfmmn=$ny2;
}	 
	 elseif($mmn='MEDICAL SALES'){
 $ny2=$ghs+0;
$statusfmmn=$ny2;
}
	 elseif($mmn='MEDICAL SECRETARIAL'){
 $ny2=$ghs+0;
$statusfmmn=$ny2;
}		 elseif($mmn='Radiology Assistant'){
 $ny2=$ghs+0;
$statusfmmn=$ny2;
}	 



 elseif($mmn='Aged Care'){
 $ny2=$ghs+0;
$statusfmmn=$ny2;
}	 








echo $statusfmmnfd; ?></td></tr>
</table>

			 
			 
			
			 
			  </div>  
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			  </div> 
			 
			 
			 
		 <div style="float:left; width:1180px; height:auto; color:#000; margin-left:-50px;margin-top:2px;">
			 
		 <div style="float:left; width:589px; height:80px; color:#000; ">
			 	 
			 <table cellspacing="0" cellpadding="2" width="590px" style="font-family:times;font-size:12px;">
	 <tr><td style="text-transform:uppercase;border-bottom:1px solid #000;text-align:center;border-left:1px solid #000;border-top:1px solid #000;width:70px;height:30px;">
			Course Code
			 </td>
			 
			 <td style="text-transform:uppercase;border-bottom:1px solid #000;text-align:center;border-left:1px solid #000;border-top:1px solid #000;width:680px;height:30px;">
			COURSE TITLE
			 </td>
			 
			  <td style="text-transform:uppercase;border-bottom:1px solid #000;text-align:center;border-left:1px solid #000;border-top:1px solid #000;width:50px;height:30px;">
			STAT<br>US
			 </td>
			 
			 	  <td style="text-transform:uppercase;border-bottom:1px solid #000;text-align:center;border-left:1px solid #000;border-top:1px solid #000;width:55px;height:30px;">
			CREDIT VALUE
			 </td>
			   <td style="text-transform:uppercase;border-bottom:1px solid #000;text-align:center;border-left:1px solid #000;border-top:1px solid #000;width:45px;height:30px;">
			GRADE
			 </td>
			 	  <td style="text-transform:uppercase;border-bottom:1px solid #000;text-align:center;border-left:1px solid #000;border-top:1px solid #000;width:55px;height:30px;">
			CREDIT EARNED
			 </td>
			 	
			 	  <td style="text-transform:uppercase;border-right:1px solid #000;text-align:center;border-bottom:1px solid #000;border-left:1px solid #000;border-top:1px solid #000;width:65px;height:30px;">
			GRADE POINT
			 </td>
			 </tr>
			 
			 
			 
			 
			
		 
		
			 
			 
			 
			 <tr><td style="text-transform:uppercase;border-bottom:1px solid #000;text-align:center;border-left:1px solid #000;width:70px;height:550px">
	
			 </td>
			 
			 <td style="text-transform:uppercase;border-bottom:1px solid #000;text-align:center;border-left:1px solid #000;width:680px;height:550px;">
		
			 </td>
			 
			  <td style="text-transform:uppercase;border-bottom:1px solid #000;text-align:center;border-left:1px solid #000;width:40px;height:550px">

			 </td>
			 
			 	  <td style="text-transform:uppercase;border-bottom:1px solid #000;text-align:center;border-left:1px solid #000;width:55px;height:550px">
		
			 </td>
			 
			 	  <td style="text-transform:uppercase;border-bottom:1px solid #000;text-align:center;border-left:1px solid #000;width:55px;height:550px;">
		
			 </td>
			 	  <td style="text-transform:uppercase;border-bottom:1px solid #000;text-align:center;border-left:1px solid #000;border-right:1px solid #000;width:67px;height:550px">
			
			 </td>
			 	  <td style="text-transform:uppercase;text-align:center;border-bottom:1px solid #000;width:64px;height:550px">
			
			 </td>
			 </tr>
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 </table>
			 
			 
			  </div> 
			 
			 		 <div style="float:left; width:590px; height:80px; color:#000; ">
			 	 
			 <table cellspacing="0" cellpadding="2" width="580px" style="font-family:times;font-size:11px;">
			 <tr><td style="text-transform:uppercase;border-bottom:1px solid #000;text-align:center;border-left:1px solid #000;border-top:1px solid #000;width:70px;height:30px;">
			Course Code
			 </td>
			 
			 <td style="text-transform:uppercase;border-bottom:1px solid #000;text-align:center;border-left:1px solid #000;border-top:1px solid #000;width:680px;height:30px;">
			COURSE TITLE
			 </td>
			 
			  <td style="text-transform:uppercase;border-bottom:1px solid #000;text-align:center;border-left:1px solid #000;border-top:1px solid #000;width:40px;height:30px;">
			STAT<br>US
			 </td>
			 
			 	  <td style="text-transform:uppercase;border-bottom:1px solid #000;text-align:center;border-left:1px solid #000;border-top:1px solid #000;width:55px;height:30px;">
			CREDIT VALUE
			 </td>
			 
			 	
			 	  <td style="text-transform:uppercase;border-bottom:1px solid #000;text-align:center;border-left:1px solid #000;border-top:1px solid #000;width:45px;height:30px;">
GRADE
			 </td>
			 
			   <td style="text-transform:uppercase;border-bottom:1px solid #000;text-align:center;border-left:1px solid #000;border-top:1px solid #000;width:55px;height:30px;">
			CREDIT EARNED
			 </td>
			 	  <td style="text-transform:uppercase;border-right:1px solid #000;text-align:center;border-bottom:1px solid #000;border-left:1px solid #000;border-top:1px solid #000;width:65px;height:30px;">
			GRADE POINT
			 </td>
			 </tr>
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 <tr><td style="text-transform:uppercase;border-bottom:1px solid #000;text-align:center;border-left:1px solid #000;width:70px;height:550px">
		
			 </td>
			 
			 <td style="text-transform:uppercase;border-bottom:1px solid #000;text-align:center;border-left:1px solid #000;width:680px;height:550px;">
		
			 </td>
			 
			  <td style="text-transform:uppercase;border-bottom:1px solid #000;text-align:center;border-left:1px solid #000;width:40px;height:550px">

			 </td>
			 
			 	  <td style="text-transform:uppercase;border-bottom:1px solid #000;text-align:center;border-left:1px solid #000;width:55px;height:550px">
		
			 </td>
			 
			 	  <td style="text-transform:uppercase;border-bottom:1px solid #000;text-align:center;border-left:1px solid #000;width:55px;height:550px;">
		
			 </td>
			 	  <td style="text-transform:uppercase;border-bottom:1px solid #000;text-align:center;border-left:1px solid #000;border-right:1px solid #000;width:67px;height:550px">
			
			 </td>
			 	  <td style="text-transform:uppercase;border-right:1px solid #000;text-align:center;border-bottom:1px solid #000;width:64px;height:550px">
			
			 </td>
			 </tr>
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 </table>
			 
			 
			  </div> 
			 
			 
			 
			 
			 
			  </div> 
			 
			 
			 
			 
			  
		
		 <div style="float:left; width:1180px; height:650px; margin-left:-50px;margin-top:-40px;">
			 
			 
			
			  <div style="float:left; width:589px; height:auto;color:#000;">
			  
			  
					
 <?php 


$query = mysql_query("select  * from courses where matricule='$mats' and departmet='$deptt'  and levels='$levelss' group by db1"); 

		 while ($row = mysql_fetch_array($query)) {
		 
		$db1s=$row["db1"];
		 
		 
		 
		 ?>
			 
			 		 <div style="float:left; width:589px; height:auto; color:#000;margin-left:9px; ">
					 <table width="580px" cellpadding="0" cellspacing="0" style="font-size:11px;white-space:wrap;font-family:times;">
					 
			 <tr><td style="width:50px; height:15px;">
			 
			  </td> 
			  <td style=" width:250px; height:15px; color:#000;">

			
<b style="width:380px; height:15px;background:#fff;font-weight:bold;font-size:12px;">First Semester  <?php 


?><?php
		
 
echo $db1s; 
		 
 
		 ?>
		 
 </b>
			  </td> 
			 	 <td style="width:40px; height:15px; color:#000; margin-left:-5px;">
			 
			
			  </td> 
			  <td style=" width:40px; height:15px; color:#000; ">
			
			 
			  </td> 
			  <td style=" width:40px; height:15px; color:#000; "> </td> 
			  <td style=" width:40px; height:15px; color:#000; "> </td> 
			  </tr>
				<?php 


$query = mysql_query("select  * from resit where db1='$db1s'  and matricule='$mats' and departmet='$deptt' and sex='1' and levels='$levelss' order by fname ASC"); 

		 while ($row = mysql_fetch_array($query)) {
		 
		 
		 
		 
		 
		 ?><tr><td style="width:50px; height:15px;">
			 		
			 <?php echo $courseps=$row['fname'];
		
		
		$exam=$row['c102'];
		
		$cas=$row['c101'];?>
			 
			  </td> 
			  <td style=" width:270px; height:15px; color:#000;">
			 <?php 
$qry = mysql_query("select  db1 as total
from subject where subject='$courseps' "); 
$row = mysql_fetch_assoc($qry); 
echo $richooTTT=$row['total']; 

$qry = mysql_query("select  credit as total
from credits where subject='$courseps' "); 
$row = mysql_fetch_assoc($qry); 

$richooTTTy=$row['total']; 



$qry = mysql_query("select  status as total
from credits where subject='$courseps' "); 
$row = mysql_fetch_assoc($qry); 

$status=$row['total']; 
?>
			 
			  </td> 
			 	 <td style="width:40px; height:15px; color:#000; margin-left:-5px;">
			 
			 <?php echo $status;?>
			  </td> 
			  <td style=" width:40px; height:15px; color:#000; ">
			 <?php echo $richooTTTy;?>
			 
			  </td> 
			  <td style=" width:60px; height:15px; color:#000; ">
			 	<?php $ns=
($exam+$cas); 












$mxc11=$ns;






 
if(empty($mxc11)){
 $colorf1bio="red";
 $statusfbio="F";
  echo'<div style=" color:'. $colorf1bio.';">'.$statusfbio.'</div>';}
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
 
  else if(($mxc11 >=$rangx10) && ($mxc11<=$rangx14)){
 $colorf1bio="blue"; $statusfbio="B+"; echo'<div style=" color:'. $colorf1bio.';">'.$statusfbio.'</div>';
} 
 
 
  else if(($mxc11 >=$rangx15) && ($mxc11<=$rangx16)){
 $colorf1bio="blue"; $statusfbio="A"; echo'<div style=" color:'. $colorf1bio.';">'.$statusfbio.'</div>';
} 
 
 
 
  $mxc11=$ns;
if(empty($mxc11)){
 $colorf1bio="yellow";
 $statusfbio="0.0";}
elseif($mxc11>=$rangx1 && $mxc11<=$rangx2 ){
 $colorf1bio="#FF0000";
 $statusfbio=$gpa1; 
}else if(($mxc11 >=$rangx3) && ($mxc11<=$rangx4)){
 $colorf1bio="blue";
 $statusfbio=$gpa2;}
 
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
 $colorf1bio="blue"; 
 $statusfbio=$gpa8; 
} 

$statusfbiox=$statusfbio;


$query33="update resit set c104='$richooTTTy',c103='$statusfbio'
 where matricule='$mats' and departmet='$deptt'and levels='$levelss' and sex='1' and db1='$db1s' and fname='$courseps'";








mysql_query ($query33) or die ('could not updated:'.mysql_error());

$qry = mysql_query("select sum(c103) as total
from resit where matricule='$mats' and departmet='$deptt'and levels='$levelss' and sex='1' and db1='$db1s'  "); 
$row = mysql_fetch_assoc($qry); 
  $credit=$row['total']; 
 
$qry = mysql_query("select sum(c104) as total
from resit where matricule='$mats' and departmet='$deptt'and levels='$levelss' and sex='1' and db1='$db1s'  "); 
$row = mysql_fetch_assoc($qry); 
   $total1=$row['total']; 


$qry = mysql_query("select * FROM  resit where matricule='$mats' and departmet='$deptt'and levels='$levelss' and sex='1' and db1='$db1s'  "); 
$num_rows=mysql_num_rows($qry);
 $total2=$num_rows; 

$mxc002=$save;
















				    
				  
$qry = mysql_query("select fname as total
from gpa where matricule='$mats' and departmet='$deptt' and levels='$levelss' and sex='1' and  fname='$courseps'"); 
$row = mysql_fetch_assoc($qry); 
 $xdf=$row['total']; 
 







$mxc002sstds=$xdf;
if(empty($mxc002sstds)){

$query33x="insert into gpa set fname='$courseps',c101='$cas',c102='$exam',c104='$richooTTTy',c103='$statusfbio',
matricule='$mats' , departmet='$deptt', levels='$levelss' , sex='1' , db1='$db1s' ";










mysql_query ($query33x) or die ('could not updated:'.mysql_error());
 }
	elseif($mxc002sstds>''){			  
				  
			
$query33x="update gpa set c101='$cas',c102='$exam',c104='$richooTTTy',c103='$statusfbio' where
matricule='$mats' and departmet='$deptt'and levels='$levelss' and sex='1' and db1='$db1s' and  fname='$courseps'";










mysql_query ($query33x) or die ('could not updated:'.mysql_error());	  


	}			  










 ?>
			 
			  </td> 
			  <td style=" width:40px; height:15px; color:#000; ">
			 	<?php   $mxccredit=$ns;
if(empty($mxccredit)){
 $colorf1bio="yellow";
 $statusfbiocredit=""; echo $statusfbiocredit='0';}
elseif($mxccredit<50){
 
 echo $statusfbiocredit='0';
 
}
elseif($mxccredit>=50){
 
 echo $statusfbiocredit=$richooTTTy;
 
}

$querypps="update resit set c105='$statusfbiocredit'
 where matricule='$mats' and departmet='$deptt' and levels='$levelss' and sex='1' and db1='$db1s' and fname='$courseps'";




mysql_query ($querypps) or die ('could not updated:'.mysql_error());

$qry = mysql_query("select sum(c105) as total
from resit where matricule='$mats' and departmet='$deptt'and levels='$levelss' and sex='1' and db1='$db1s'  "); 
$row = mysql_fetch_assoc($qry); 
    $totalc=$row['total']; 
	

$queryppss="update courses set cxx11='$totalc'
 where matricule='$mats' and departmet='$deptt' and levels='$levelss'  and db1='$db1s' ";




mysql_query ($queryppss) or die ('could not updated:'.mysql_error());



$qry = mysql_query("select sum(cxx11) as total
from courses where matricule='$mats' and departmet='$deptt'and levels='$levelss' and sex='1' and db1='$db1s'  "); 
$row = mysql_fetch_assoc($qry); 
   echo  $c=$row['total']; 


				  
$qry = mysql_query("select SUM(c101+c102) as total
from gpa where matricule='$mats' and departmet='$deptt'  and  fname='$courseps' "); 
$row = mysql_fetch_assoc($qry); 
 $xdfs=$row['total']; 
 



$mxc0v=$xdfs;
if(empty($mxc0v)){
 }elseif($mxc0v>''  && $mxc0v>="50"  && $mxc0v<="100"  && $mxc0v>$ns){
	 
	$bm=(($ns+$xdfs)/2);
	
	if(empty($bm)){
		
	}ELSEIF($bm<50){
		$sc="50";
		
	}
	 ELSEIF($bm>=50){
		$sc=$bm;
		
	}
	 
 }
 elseif($mxc0v>''  && $mxc0v<"50"    && $mxc0v<$ns){
	 
	$bm=(($ns));
	
	if(empty($bm)){
		
	}ELSEIF($bm<50){
		$sc=$bm;
		
	}
	 ELSEIF($bm>=50){
		$sc=$bm;
		
	}
	 
 }
 
 
 
 elseif($mxc0v>''  && $mxc0v<"50"    && $mxc0v>$ns){
	 
	$bm=(($mxc0v));
	
	if(empty($bm)){
		
	}ELSEIF($bm<50){
		$sc=$bm;
		
	}
	 ELSEIF($bm>=50){
		$sc=$bm;
		
	}
	 
 }
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 $mxc11=$sc;
 
if(empty($mxc11)){
 $colorf1bio="red";
 $statusfbio="F";
 '<div style=" color:'. $colorf1bio.';">'.$statusfbio.'</div>';}
elseif($mxc11>=$rangx1 && $mxc11<=$rangx2 ){
 $colorf1bio="#FF0000";
 $statusfbio="F";
'<div style=" color:'. $colorf1bio.';">'.$statusfbio.'</div>';
}else if(($mxc11 >=$rangx3) && ($mxc11<=$rangx4)){
 $colorf1bio="blue";
 $statusfbio="D";
'<div style=" color:'. $colorf1bio.';">'.$statusfbio.'</div>';}else if(($mxc11 >=$rangx5) && ($mxc11<=$rangx6)){
 $colorf1bio="blue";
 $statusfbio="D+";
'<div style=" color:'. $colorf1bio.';">'.$statusfbio.'</div>';}
 
 
else if(($mxc11 >=$rangx7) && ($mxc11<=$rangx8)){
 $colorf1bio="blue";
 $statusfbio="C";
'<div style=" color:'. $colorf1bio.';">'.$statusfbio.'</div>';}
 
 
 else if(($mxc11 >=$rangx9) && ($mxc11<=$rangx10)){
 $colorf1bio="blue"; $statusfbio="C+"; '<div style=" color:'. $colorf1bio.';">'.$statusfbio.'</div>';
} 
 
 
 
 else if(($mxc11 >=$rangx11) && ($mxc11<=$rangx12)){
 $colorf1bio="blue"; $statusfbio="B"; '<div style=" color:'. $colorf1bio.';">'.$statusfbio.'</div>';
} 
 
  else if(($mxc11 >=$rangx10) && ($mxc11<=$rangx14)){
 $colorf1bio="blue"; $statusfbio="B+"; '<div style=" color:'. $colorf1bio.';">'.$statusfbio.'</div>';
} 
 
 
  else if(($mxc11 >=$rangx15) && ($mxc11<=$rangx16)){
 $colorf1bio="blue"; $statusfbio="A"; '<div style=" color:'. $colorf1bio.';">'.$statusfbio.'</div>';
} 
 
 
 
  $mxc11=$sc;
if(empty($mxc11)){
 $colorf1bio="yellow";
 $statusfbio="0.0";}
elseif($mxc11>=$rangx1 && $mxc11<=$rangx2 ){
 $colorf1bio="#FF0000";
 $statusfbio=$gpa1; 
}else if(($mxc11 >=$rangx3) && ($mxc11<=$rangx4)){
 $colorf1bio="blue";
 $statusfbio=$gpa2;}
 
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
 $colorf1bio="blue"; 
 $statusfbio=$gpa8; 
} 




$mxc002sstd=$sc;
if(empty($mxc002sstd)){
 }
	elseif($mxc002sstd>''){			  
				  
			
$query33x="update gpa set c101='$cas',c102='$exam',c104='$richooTTTy',c103='$statusfbio' where
matricule='$mats' and departmet='$deptt'and levels='$levelss'  and  fname='$courseps'";










mysql_query ($query33x) or die ('could not updated:'.mysql_error());	  


	}			  
				  
?>
			 
			  </td> 
			   <td style="width:40px; height:15px; color:#000; ">
			 
			 	  <?php echo $statusfbiox;
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  ?> 
			  </td> 
			 </tr>
			 
			 
			 <?php }
			 
			 ?>
			  </table> 
			  
			 		 <div style="float:left; width:589px; height:15px; color:#000;margin-left:7px;font-family:times;font-size:12px; ">
					 
			
		 		 <div style="float:left; width:300px; height:15px; color:#000;font-family:times;font-size:12px; ">		
<b style="width:300px; height:15px;background:#fff;font-weight:normal;">TOTAL CREDITS ATTEMPTED :<?php 


echo $total1;
$qry = mysql_query("select sum(c104) as total
from resit where matricule='$mats' and departmet='$deptt'and levels='$levelss' and sex='1' and db1='$db1s'  "); 
$row = mysql_fetch_assoc($qry); 
 $save=$row['total']; 
 $save1=$row['total']; 



$qry = mysql_query("select * FROM  resit where matricule='$mats' and departmet='$deptt'and levels='$levelss' and sex='1' and db1='$db1s'  "); 
$num_rows=mysql_num_rows($qry);
  $richooTTTyss=$num_rows; 

?></b>
					 </div>
		 		 <div style="float:left; width:200px; height:15px; color:#000;font-family:times;font-size:12px; ">
					 
					
<b style="width:200px; height:15px;background:#fff;font-weight:normal;">
TOTAL CREDITS EARNED:<?php 

echo $totalc;

$qry = mysql_query("select sum(c104) as total
from resit where matricule='$mats' and departmet='$deptt'and levels='$levelss' and sex='1' and db1='$db1s'  "); 
$row = mysql_fetch_assoc($qry); 
 $savee=$row['total']; 
 



$qry = mysql_query("select * FROM  resit where matricule='$mats' and departmet='$deptt'and levels='$levelss' and sex='1' and db1='$db1s'  "); 
$num_rows=mysql_num_rows($qry);
  $richooTTTyss=$num_rows; 


?></b>


					 </div>

					 </div>
			  
			  
	
			  
			   <div style="float:left; width:589px; height:15px; color:#000;margin-left:7px;font-family:times;font-size:12px; ">
					 
					
			   <div style="float:left; width:320px;height:15px;">
<b style="width:320px; height:15px;background:#fff;font-weight:normal;">

GPA CREDITS ATTEMPTED: <?php 

echo $total1;

$qry = mysql_query("select sum(c104) as total
from resit where matricule='$mats' and departmet='$deptt'and levels='$levelss' and sex='1' and db1='$db1s'  "); 
$row = mysql_fetch_assoc($qry); 
 $save=$row['total']; 
 



$qry = mysql_query("select * FROM  resit where matricule='$mats' and departmet='$deptt'and levels='$levelss' and sex='1' and db1='$db1s'  "); 
$num_rows=mysql_num_rows($qry);
  $richooTTTyss=$num_rows; 


?>
					 </div>
			  
			  
			   <div style="float:left; width:200px;height:15px;">
			  
			  	
<b style="width:200px; height:15px;background:#fff;font-weight:normal;">

GPA CREDITS EANRED: <?php 


echo $totalc;
$qry = mysql_query("select sum(c104) as total
from resit where matricule='$mats' and departmet='$deptt'and levels='$levelss' and sex='1' and db1='$db1s'  "); 
$row = mysql_fetch_assoc($qry); 
 $saves=$row['total']; 
 $saves1=$row['total'];



$qry = mysql_query("select * FROM  resit where matricule='$mats' and departmet='$deptt'and levels='$levelss' and sex='1' and db1='$db1s'  "); 
$num_rows=mysql_num_rows($qry);
  $richooTTTyss=$num_rows; 


?>
			  
			   </div>
			  
			  
			   </div>
			   
			   
			   
			   
			   
			   
			   
			  
			   <div style="float:left; width:589px; height:15px; color:#000;margin-left:7px;font-family:times;font-size:12px; ">
			  
			   <div style="float:left; width:320px; height:15px; color:#000;font-family:times;font-size:12px; ">
					 
				

					 </div>
			  
			  
			  
			  
			   <div style="float:left; width:200px; height:15px; color:#000;font-family:times;font-size:12px; ">
					 
					
<b style="width:200px; height:15px;background:#fff;font-weight:bold;">

SEMESTER GPA <?php 




 
 	 
 	 
$qry = mysql_query("select sum(c103*c104) as total
from resit where matricule='$mats' and departmet='$deptt'and levels='$levelss' and sex='1' and db1='$db1s'  "); 
$row = mysql_fetch_assoc($qry); 
$saveyuut=$row['total']; 
 

$qrytgh = mysql_query("select sum(c104) as total
from resit where matricule='$mats' and departmet='$deptt'and levels='$levelss' and sex='1' and db1='$db1s'  "); 
$row = mysql_fetch_assoc($qrytgh); 
 $richooTTTyssyuut=$row['total']; 







$mxc002st=$saveyuut;
if(empty($mxc002st)){
 $statusfbiou="";
 }
elseif($mxc002st>'' ){
 $statusfbiout=($saveyuut/$richooTTTyssyuut) ;
printf("%01.2f",($statusfbiout));
}
$queryf3iiii="update courses set c103='$statusfbiout'
 where matricule='$mats' and departmet='$deptt'and levels='$levelss'  and db1='$db1s'";
 
mysql_query ($queryf3iiii) or die ('could not updated:'.mysql_error());
 ?>

					 </div>
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  





















					 
					 
			<?php
}
?>		 
					 
			  	 <table width="580px" cellpadding="0" cellspacing="0" style="font-size:11px;white-space:wrap;font-family:times;float:left;margin-left:-5px;">
							 
			 <tr><td style="width:50px; height:15px;">
			 
			  </td> 
			  <td style=" width:250px; height:15px; color:#000;">

			
<b style="width:380px; height:15px;background:#fff;font-weight:bold;font-size:12px;"><?PHP 
		 
		 
		 
		 		 
$qry = mysql_query("select * from resit where matricule='$mats' and levels='$levelss' and sex='3' "); 
$num_rows=mysql_num_rows($qry);
  $riy111=$num_rows;  
  
  $mxcy48x3tt11= $riy111;
  if(empty($mxcy48x3tt11)){

 } 
elseif($mxcy48x3tt11>''){
$statusfmxcy48x3tt11="<b>Resit Session $db1s </b>"; 
}	

echo $statusfmxcy48x3tt11;
  ?>
 </b>
			  </td> 
			 	 <td style="width:40px; height:15px; color:#000; margin-left:-5px;">
			 
			
			  </td> 
			  <td style=" width:40px; height:15px; color:#000; ">
			
			 
			  </td> 
			  <td style=" width:40px; height:15px; color:#000; "> </td> 
			  <td style=" width:40px; height:15px; color:#000; "> </td> 
			  </tr>
			<?php 


$query = mysql_query("select  * from resit where db1='$db1s' and matricule='$mats' and departmet='$deptt' and sex='3' and levels='$levelss' order by fname ASC"); 

		 while ($row = mysql_fetch_array($query)) {
		 
		 
		 
		 
		 
		 ?>
		 <tr><td style="width:50px; height:15px;">
			 		
			 <?php echo $courseps=$row['fname'];
		
		
		$exam=$row['c102'];
		
		$cas=$row['c101'];?>
			 
			  </td> 
			  <td style=" width:270px; height:15px; color:#000;">
			 <?php 
$qry = mysql_query("select  db1 as total
from subject where subject='$courseps' "); 
$row = mysql_fetch_assoc($qry); 
echo $richooTTT=$row['total']; 

$qry = mysql_query("select  credit as total
from credits where subject='$courseps' "); 
$row = mysql_fetch_assoc($qry); 

$richooTTTy=$row['total']; 



$qry = mysql_query("select  status as total
from credits where subject='$courseps' "); 
$row = mysql_fetch_assoc($qry); 

$status=$row['total']; 
?>
			 
			  </td> 
			 	 <td style="width:40px; height:15px; color:#000; margin-left:-5px;">
			 
			 <?php echo $status;?>
			  </td> 
			  <td style=" width:40px; height:15px; color:#000; ">
			 <?php echo $richooTTTy;?>
			 
			  </td> 
			  <td style=" width:40px; height:15px; color:#000; ">
			 	<?php $ns=
($exam+$cas); 












$mxc11=$ns;






 
if(empty($mxc11)){
 $colorf1bio="red";
 $statusfbio="F";
  echo'<div style=" color:'. $colorf1bio.';">'.$statusfbio.'</div>';}
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
 
  else if(($mxc11 >=$rangx10) && ($mxc11<=$rangx14)){
 $colorf1bio="blue"; $statusfbio="B+"; echo'<div style=" color:'. $colorf1bio.';">'.$statusfbio.'</div>';
} 
 
 
  else if(($mxc11 >=$rangx15) && ($mxc11<=$rangx16)){
 $colorf1bio="blue"; $statusfbio="A"; echo'<div style=" color:'. $colorf1bio.';">'.$statusfbio.'</div>';
} 
 
 
 
  $mxc11=$ns;
if(empty($mxc11)){
 $colorf1bio="yellow";
 $statusfbio="0.0";}
elseif($mxc11>=$rangx1 && $mxc11<=$rangx2 ){
 $colorf1bio="#FF0000";
 $statusfbio=$gpa1; 
}else if(($mxc11 >=$rangx3) && ($mxc11<=$rangx4)){
 $colorf1bio="blue";
 $statusfbio=$gpa2;}
 
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
 $colorf1bio="blue"; 
 $statusfbio=$gpa8; 
} 





$query33="update resit set c104='$richooTTTy',c103='$statusfbio'
 where matricule='$mats' and departmet='$deptt'and levels='$levelss' and sex='3' and db1='$db1s' and fname='$courseps'";







mysql_query ($query33) or die ('could not updated:'.mysql_error());



$qry = mysql_query("select sum(c103) as total
from resit where matricule='$mats' and departmet='$deptt'and levels='$levelss' and sex='3' and db1='$db1s'  "); 
$row = mysql_fetch_assoc($qry); 
   $creditr=$row['total']; 
 
$qry = mysql_query("select sum(c104) as total
from resit where matricule='$mats' and departmet='$deptt'and levels='$levelss' and sex='3' and db1='$db1s'  "); 
$row = mysql_fetch_assoc($qry); 
  $total31=$row['total']; 


$qry = mysql_query("select * FROM  resit where matricule='$mats' and departmet='$deptt'and levels='$levelss' and sex='3' and db1='$db1s'  "); 
$num_rows=mysql_num_rows($qry);
 $total32=$num_rows; 


 ?>
			 
			  </td> 
			  <td style=" width:60px; height:15px; color:#000; ">
			 	<?php   $mxccredit=$ns;
if(empty($mxccredit)){
 $colorf1bio="yellow";
 $statusfbiocredit=""; echo $statusfbiocredit='0';}
elseif($mxccredit<50){
 
 echo $statusfbiocredit='0';
 
}
elseif($mxccredit>=50){
 
 echo $statusfbiocredit=$richooTTTy;
 
}



$queryp0pp="update resit set c105='$statusfbiocredit'
 where matricule='$mats' and departmet='$deptt'and levels='$levelss' and sex='3' and db1='$db1s' and fname='$courseps'";




mysql_query ($queryp0pp) or die ('could not updated:'.mysql_error());

$qry = mysql_query("select sum(c105) as total
from resit where matricule='$mats' and departmet='$deptt'and levels='$levelss' and sex='3' and db1='$db1s'  "); 
$row = mysql_fetch_assoc($qry); 
   $totalcc=$row['total']; 
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   


				  
$qry = mysql_query("select SUM(c101+c102) as total
from gpa where matricule='$mats' and departmet='$deptt'  and  fname='$courseps' "); 
$row = mysql_fetch_assoc($qry); 
 $xdfs=$row['total']; 
 



$mxc0v=$xdfs;
if(empty($mxc0v)){
 }elseif($mxc0v>''  && $mxc0v>="50"  && $mxc0v<="100"  && $mxc0v>$ns){
	 
	$bm=(($ns+$xdfs)/2);
	
	if(empty($bm)){
		
	}ELSEIF($bm<50){
		$sc="50";
		
	}
	 ELSEIF($bm>=50){
		$sc=$bm;
		
	}
	 
 }
 elseif($mxc0v>''  && $mxc0v<"50"    && $mxc0v<$ns){
	 
	$bm=(($ns));
	
	if(empty($bm)){
		
	}ELSEIF($bm<50){
		$sc=$bm;
		
	}
	 ELSEIF($bm>=50){
		$sc=$bm;
		
	}
	 
 }
 
 
 
 elseif($mxc0v>''  && $mxc0v<"50"    && $mxc0v>$ns){
	 
	$bm=(($mxc0v));
	
	if(empty($bm)){
		
	}ELSEIF($bm<50){
		$sc=$bm;
		
	}
	 ELSEIF($bm>=50){
		$sc=$bm;
		
	}
	 
 }
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 $mxc11=$sc;
 
if(empty($mxc11)){
 $colorf1bio="red";
 $statusfbio="F";
 '<div style=" color:'. $colorf1bio.';">'.$statusfbio.'</div>';}
elseif($mxc11>=$rangx1 && $mxc11<=$rangx2 ){
 $colorf1bio="#FF0000";
 $statusfbio="F";
'<div style=" color:'. $colorf1bio.';">'.$statusfbio.'</div>';
}else if(($mxc11 >=$rangx3) && ($mxc11<=$rangx4)){
 $colorf1bio="blue";
 $statusfbio="D";
'<div style=" color:'. $colorf1bio.';">'.$statusfbio.'</div>';}else if(($mxc11 >=$rangx5) && ($mxc11<=$rangx6)){
 $colorf1bio="blue";
 $statusfbio="D+";
'<div style=" color:'. $colorf1bio.';">'.$statusfbio.'</div>';}
 
 
else if(($mxc11 >=$rangx7) && ($mxc11<=$rangx8)){
 $colorf1bio="blue";
 $statusfbio="C";
'<div style=" color:'. $colorf1bio.';">'.$statusfbio.'</div>';}
 
 
 else if(($mxc11 >=$rangx9) && ($mxc11<=$rangx10)){
 $colorf1bio="blue"; $statusfbio="C+"; '<div style=" color:'. $colorf1bio.';">'.$statusfbio.'</div>';
} 
 
 
 
 else if(($mxc11 >=$rangx11) && ($mxc11<=$rangx12)){
 $colorf1bio="blue"; $statusfbio="B"; '<div style=" color:'. $colorf1bio.';">'.$statusfbio.'</div>';
} 
 
  else if(($mxc11 >=$rangx10) && ($mxc11<=$rangx14)){
 $colorf1bio="blue"; $statusfbio="B+"; '<div style=" color:'. $colorf1bio.';">'.$statusfbio.'</div>';
} 
 
 
  else if(($mxc11 >=$rangx15) && ($mxc11<=$rangx16)){
 $colorf1bio="blue"; $statusfbio="A"; '<div style=" color:'. $colorf1bio.';">'.$statusfbio.'</div>';
} 
 
 
 
  $mxc11=$sc;
if(empty($mxc11)){
 $colorf1bio="yellow";
 $statusfbio="0.0";}
elseif($mxc11>=$rangx1 && $mxc11<=$rangx2 ){
 $colorf1bio="#FF0000";
 $statusfbio=$gpa1; 
}else if(($mxc11 >=$rangx3) && ($mxc11<=$rangx4)){
 $colorf1bio="blue";
 $statusfbio=$gpa2;}
 
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
 $colorf1bio="blue"; 
 $statusfbio=$gpa8; 
} 




$mxc002sstd=$sc;
if(empty($mxc002sstd)){
 }
	elseif($mxc002sstd>''){			  
				  
			
$query33x="update gpa set c101='$cas',c102='$exam',c104='$richooTTTy',c103='$statusfbio' where
matricule='$mats' and departmet='$deptt'and levels='$levelss'  and  fname='$courseps'";










mysql_query ($query33x) or die ('could not updated:'.mysql_error());	  


	}			  
				  
				  
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
?>
			 
			  </td> 
			   <td style="width:40px; height:15px; color:#000; ">
			 
			 	  <?php echo $statusfbio;?> 
			  </td> 
			 </tr>
			 
			 
			 <?php }
			 
			 ?>
			  </table> 	







			  <div style="float:left; width:200px; height:15px; color:#000;font-family:times;font-size:12px; ">
					 
					
<b style="width:200px; height:15px;background:#fff;font-weight:bold;">

SEMESTER GPA <?php 




 
 	 
 	 
$qry = mysql_query("select sum(c103*c104) as total
from resit where matricule='$mats' and departmet='$deptt'and levels='$levelss' and sex='3' and db1='$db1s'  "); 
$row = mysql_fetch_assoc($qry); 
$saveyuut=$row['total']; 
 

$qrytgh = mysql_query("select sum(c104) as total
from resit where matricule='$mats' and departmet='$deptt'and levels='$levelss' and sex='3' and db1='$db1s'  "); 
$row = mysql_fetch_assoc($qrytgh); 
 $richooTTTyssyuut=$row['total']; 







$mxc002st=$saveyuut;
if(empty($mxc002st)){
 $statusfbiou="";
 }
elseif($mxc002st>'' ){
 $statusfbiout=($saveyuut/$richooTTTyssyuut) ;
printf("%01.2f",($statusfbiout));
}
$queryf3iiii="update courses set c104='$statusfbiout'
 where matricule='$mats' and departmet='$deptt'and levels='$levelss'  and db1='$db1s'";
 
mysql_query ($queryf3iiii) or die ('could not updated:'.mysql_error());
 ?>

					 </div>
			  
			  
					 </div>
			  
			 		
				 
			
					</div>  		 
					 
					 
					 
					</div>  		 
					 
					 
					 
					 
					 
					 
					 
					 <div style="float:left; width:589px; height:500px; color:#000; ">
			  
			  
			  				
 <?php 


$query = mysql_query("select  * from courses where matricule='$mats' and departmet='$deptt'  and levels='$levelss' group by db1"); 

		 while ($row = mysql_fetch_array($query)) {
		 
		$db1s=$row["db1"];
		 
		 
		 
		 ?>
			 
			 		
					 
			  	 <table width="580px" cellpadding="0" cellspacing="0" style="font-size:11px;white-space:wrap;font-family:times;float:left;margin-left:5px;">
			
					 
			 <tr><td style="width:60px; height:15px;">
			 
			  </td> 
			  <td style=" width:250px; height:15px; color:#000;">

			
<b style="width:380px; height:15px;background:#fff;font-weight:bold;font-size:12px;">Second Semester  <?php 


?><?php
		
 
echo $db1s; 
		 
 
		 ?>
		 
 </b>
			  </td> 
			 	 <td style="width:40px; height:15px; color:#000; margin-left:-5px;">
			 
			
			  </td> 
			  <td style=" width:40px; height:15px; color:#000; ">
			
			 
			  </td> 
			  <td style=" width:40px; height:15px; color:#000; "> </td> 
			  <td style=" width:40px; height:15px; color:#000; "> </td> 
			  </tr>
		<?php 


$query = mysql_query("select  * from resit where db1='$db1s' and matricule='$mats' and departmet='$deptt' and sex='2' and levels='$levelss' order by fname ASC"); 

		 while ($row = mysql_fetch_array($query)) {
		 
		 
		 
		 
		 
		 ?><tr><td style="width:60px; height:15px;">
			 		
			 <?php echo $courseps=$row['fname'];
		
		
		$exam=$row['c102'];
		
		$cas=$row['c101'];?>
			 
			  </td> 
			  <td style=" width:250px; height:15px; color:#000;">
			 <?php 
$qry = mysql_query("select  db1 as total
from subject where subject='$courseps' "); 
$row = mysql_fetch_assoc($qry); 
echo $richooTTT=$row['total']; 

$qry = mysql_query("select  credit as total
from credits where subject='$courseps' "); 
$row = mysql_fetch_assoc($qry); 

$richooTTTy=$row['total']; 



$qry = mysql_query("select  status as total
from credits where subject='$courseps' "); 
$row = mysql_fetch_assoc($qry); 

$status=$row['total']; 
?>
			 
			  </td> 
			 	 <td style="width:40px; height:15px; color:#000; margin-left:-5px;">
			 
			 <?php echo $status;?>
			  </td> 
			  <td style=" width:40px; height:15px; color:#000; ">
			 <?php echo $richooTTTy;?>
			 
			  </td> 
			  <td style=" width:40px; height:15px; color:#000; ">
			 	<?php $ns=
($exam+$cas); 












$mxc11=$ns;






 
if(empty($mxc11)){
 $colorf1bio="red";
 $statusfbio="F";
  echo'<div style=" color:'. $colorf1bio.';">'.$statusfbio.'</div>';}
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
 
  else if(($mxc11 >=$rangx10) && ($mxc11<=$rangx14)){
 $colorf1bio="blue"; $statusfbio="B+"; echo'<div style=" color:'. $colorf1bio.';">'.$statusfbio.'</div>';
} 
 
 
  else if(($mxc11 >=$rangx15) && ($mxc11<=$rangx16)){
 $colorf1bio="blue"; $statusfbio="A"; echo'<div style=" color:'. $colorf1bio.';">'.$statusfbio.'</div>';
} 
 
 
 
  $mxc11=$ns;
if(empty($mxc11)){
 $colorf1bio="yellow";
 $statusfbio="0.0";}
elseif($mxc11>=$rangx1 && $mxc11<=$rangx2 ){
 $colorf1bio="#FF0000";
 $statusfbio=$gpa1; 
}else if(($mxc11 >=$rangx3) && ($mxc11<=$rangx4)){
 $colorf1bio="blue";
 $statusfbio=$gpa2;}
 
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
 $colorf1bio="blue"; 
 $statusfbio=$gpa8; 
} 


























				  

$query33="update resit set c104='$richooTTTy',c103='$statusfbio'
 where matricule='$mats' and departmet='$deptt'and levels='$levelss' and sex='2' and fname='$courseps'";










mysql_query ($query33) or die ('could not updated:'.mysql_error());


$qry = mysql_query("select sum(c103) as total
from resit where matricule='$mats' and departmet='$deptt'and levels='$levelss' and sex='2' and db1='$db1s'  "); 
$row = mysql_fetch_assoc($qry); 
 $totalcs2=$row['total']; 
 
$qry = mysql_query("select sum(c104) as total
from resit where matricule='$mats' and departmet='$deptt'and levels='$levelss' and sex='2' and db1='$db1s'  "); 
$row = mysql_fetch_assoc($qry); 
  $total21b=$row['total']; 


$qry = mysql_query("select * FROM  resit where matricule='$mats' and departmet='$deptt'and levels='$levelss' and sex='2' and db1='$db1s'  "); 
$num_rows=mysql_num_rows($qry);
 $total22b=$num_rows; 


 ?>
			 
			  </td> 
			  <td style=" width:40px; height:15px; color:#000; ">
			 	<?php   $mxccredit=$ns;
if(empty($mxccredit)){
 $colorf1bio="yellow";
 $statusfbiocredit=""; echo $statusfbiocredit='0';}
elseif($mxccredit<50){
 
 echo $statusfbiocredit='0';
 
}
elseif($mxccredit>=50){
 
 echo $statusfbiocredit=$richooTTTy;
 
}

$queryp0pp="update resit set c105='$statusfbiocredit'
 where matricule='$mats' and departmet='$deptt'and levels='$levelss' and sex='2' and db1='$db1s' and fname='$courseps'";




mysql_query ($queryp0pp) or die ('could not updated:'.mysql_error());

$qry = mysql_query("select sum(c105) as total
from resit where matricule='$mats' and departmet='$deptt'and levels='$levelss' and sex='2' and db1='$db1s'  "); 
$row = mysql_fetch_assoc($qry); 
   $totalcc=$row['total']; 

?>
			 
			  </td> 
			   <td style="width:40px; height:15px; color:#000; ">
			 
			 	  <?php echo $statusfbio;
				  
				  
				  
				    
				  
$qry = mysql_query("select fname as total
from gpa where matricule='$mats' and departmet='$deptt' and levels='$levelss' and sex='2' and db1='$db1s' and  fname='$courseps' "); 
$row = mysql_fetch_assoc($qry); 
 $xdf=$row['total']; 
 







$mxc002sstd=$xdf;
if(empty($mxc002sstd)){

$query33x="insert into gpa set fname='$courseps',c101='$cas',c102='$exam',c104='$richooTTTy',c103='$statusfbio',
matricule='$mats' , departmet='$deptt', levels='$levelss' , sex='2' , db1='$db1s' ";










mysql_query ($query33x) or die ('could not updated:'.mysql_error());
 }
	elseif($mxc002sstd>''){			  
				  
			
$query33x="update gpa set c101='$cas',c102='$exam',c104='$richooTTTy',c103='$statusfbio' where
matricule='$mats' and departmet='$deptt'and levels='$levelss' and sex='2' and db1='$db1s' and  fname='$courseps'";










mysql_query ($query33x) or die ('could not updated:'.mysql_error());	  


	}			  
				  
				  
			


				  
$qry = mysql_query("select SUM(c101+c102) as total
from gpa where matricule='$mats' and departmet='$deptt'  and  fname='$courseps' "); 
$row = mysql_fetch_assoc($qry); 
 $xdfs=$row['total']; 
 



$mxc0v=$xdfs;
if(empty($mxc0v)){
 }elseif($mxc0v>''  && $mxc0v>="50"  && $mxc0v<="100"  && $mxc0v>$ns){
	 
	$bm=(($ns+$xdfs)/2);
	
	if(empty($bm)){
		
	}ELSEIF($bm<50){
		$sc="50";
		
	}
	 ELSEIF($bm>=50){
		$sc=$bm;
		
	}
	 
 }
 elseif($mxc0v>''  && $mxc0v<"50"    && $mxc0v<$ns){
	 
	$bm=(($ns));
	
	if(empty($bm)){
		
	}ELSEIF($bm<50){
		$sc=$bm;
		
	}
	 ELSEIF($bm>=50){
		$sc=$bm;
		
	}
	 
 }
 
 
 
 elseif($mxc0v>''  && $mxc0v<"50"    && $mxc0v>$ns){
	 
	$bm=(($mxc0v));
	
	if(empty($bm)){
		
	}ELSEIF($bm<50){
		$sc=$bm;
		
	}
	 ELSEIF($bm>=50){
		$sc=$bm;
		
	}
	 
 }
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 $mxc11=$sc;
 
if(empty($mxc11)){
 $colorf1bio="red";
 $statusfbio="F";
 '<div style=" color:'. $colorf1bio.';">'.$statusfbio.'</div>';}
elseif($mxc11>=$rangx1 && $mxc11<=$rangx2 ){
 $colorf1bio="#FF0000";
 $statusfbio="F";
'<div style=" color:'. $colorf1bio.';">'.$statusfbio.'</div>';
}else if(($mxc11 >=$rangx3) && ($mxc11<=$rangx4)){
 $colorf1bio="blue";
 $statusfbio="D";
'<div style=" color:'. $colorf1bio.';">'.$statusfbio.'</div>';}else if(($mxc11 >=$rangx5) && ($mxc11<=$rangx6)){
 $colorf1bio="blue";
 $statusfbio="D+";
'<div style=" color:'. $colorf1bio.';">'.$statusfbio.'</div>';}
 
 
else if(($mxc11 >=$rangx7) && ($mxc11<=$rangx8)){
 $colorf1bio="blue";
 $statusfbio="C";
'<div style=" color:'. $colorf1bio.';">'.$statusfbio.'</div>';}
 
 
 else if(($mxc11 >=$rangx9) && ($mxc11<=$rangx10)){
 $colorf1bio="blue"; $statusfbio="C+"; '<div style=" color:'. $colorf1bio.';">'.$statusfbio.'</div>';
} 
 
 
 
 else if(($mxc11 >=$rangx11) && ($mxc11<=$rangx12)){
 $colorf1bio="blue"; $statusfbio="B"; '<div style=" color:'. $colorf1bio.';">'.$statusfbio.'</div>';
} 
 
  else if(($mxc11 >=$rangx10) && ($mxc11<=$rangx14)){
 $colorf1bio="blue"; $statusfbio="B+"; '<div style=" color:'. $colorf1bio.';">'.$statusfbio.'</div>';
} 
 
 
  else if(($mxc11 >=$rangx15) && ($mxc11<=$rangx16)){
 $colorf1bio="blue"; $statusfbio="A"; '<div style=" color:'. $colorf1bio.';">'.$statusfbio.'</div>';
} 
 
 
 
  $mxc11=$sc;
if(empty($mxc11)){
 $colorf1bio="yellow";
 $statusfbio="0.0";}
elseif($mxc11>=$rangx1 && $mxc11<=$rangx2 ){
 $colorf1bio="#FF0000";
 $statusfbio=$gpa1; 
}else if(($mxc11 >=$rangx3) && ($mxc11<=$rangx4)){
 $colorf1bio="blue";
 $statusfbio=$gpa2;}
 
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
 $colorf1bio="blue"; 
 $statusfbio=$gpa8; 
} 




$mxc002sstd=$sc;
if(empty($mxc002sstd)){
 }
	elseif($mxc002sstd>''){			  
				  
			
$query33x="update gpa set c101='$cas',c102='$exam',c104='$richooTTTy',c103='$statusfbio' where
matricule='$mats' and departmet='$deptt'and levels='$levelss'  and  fname='$courseps'";










mysql_query ($query33x) or die ('could not updated:'.mysql_error());	  


	}			  
				  	  
				  
				  
				  ?> 
			  </td> 
			 </tr>
			 
			 
			 <?php }
			 
			 ?>
			  </table> 
			  
			  
			  
			  
			  
			 		 <div style="float:left; width:589px; height:15px; color:#000;margin-left:7px;font-family:times;font-size:12px; ">
					 
			
		 		 <div style="float:left; width:300px; height:15px; color:#000;font-family:times;font-size:12px; ">		
<b style="width:300px; height:15px;background:#fff;font-weight:normal;">TOTAL CREDITS ATTEMPTED :<?php 



echo $total21b;

$levels=$level+100;
$qry = mysql_query("select sum(c104) as total
from resit where matricule='$mats' and departmet='$deptt'and levels='$levelss' and sex='2' and db1='$db1s'  "); 
$row = mysql_fetch_assoc($qry); 
$save=$row['total']; 
 $save3=$row['total']; 



$qry = mysql_query("select * FROM  resit where matricule='$mats' and departmet='$deptt'and levels='$levelss' and sex='2' and db1='$db1s'  "); 
$num_rows=mysql_num_rows($qry);
  $richooTTTyss=$num_rows; 


?></b>
					 </div>
		 		 <div style="float:left; width:200px; height:15px; color:#000;font-family:times;font-size:12px; ">
					 
					
<b style="width:200px; height:15px;background:#fff;font-weight:normal;">
TOTAL CREDITS EARNED:<?php 

$qry = mysql_query("select sum(c105) as total
from resit where matricule='$mats' and departmet='$deptt'and levels='$levelss' and sex='2' and db1='$db1s'  "); 
$row = mysql_fetch_assoc($qry); 
   $totalccc=$row['total']; 
echo $totalccc;

$levels=$level+100;
$qry = mysql_query("select sum(c104) as total
from resit where matricule='$mats' and departmet='$deptt'and levels='$levelss' and sex='2' and db1='$db1s'  "); 
$row = mysql_fetch_assoc($qry); 
$save=$row['total']; 
 



$qry = mysql_query("select * FROM  resit where matricule='$mats' and departmet='$deptt'and levels='$levelss' and sex='2' and db1='$db1s'  "); 
$num_rows=mysql_num_rows($qry);
  $richooTTTyss=$num_rows; 


?></b>


					 </div>

					 </div>
			  
			  
	
			  
			   <div style="float:left; width:589px; height:15px; color:#000;margin-left:7px;font-family:times;font-size:12px; ">
					 
					
			   <div style="float:left; width:320px;height:15px;">
<b style="width:320px; height:15px;background:#fff;font-weight:normal;">

GPA CREDITS ATTEMPTED: <?php 


echo $total21b;
$levels=$level+100;

$qry = mysql_query("select sum(c104) as total
from resit where matricule='$mats' and departmet='$deptt'and levels='$levelss' and sex='2' and db1='$db1s'  "); 
$row = mysql_fetch_assoc($qry); 
$save=$row['total']; 
 



$qry = mysql_query("select * FROM  resit where matricule='$mats' and departmet='$deptt'and levels='$levelss' and sex='2' and db1='$db1s'  "); 
$num_rows=mysql_num_rows($qry);
  $richooTTTyss=$num_rows; 


?>
					 </div>
			  
			  
			   <div style="float:left; width:200px;height:15px;">
			  
			  	
<b style="width:200px; height:15px;background:#fff;font-weight:normal;">

GPA CREDITS EANRED: <?php 


echo $totalccc;

$levels=$level+100;
$qry = mysql_query("select sum(c103) as total
from resit where matricule='$mats' and departmet='$deptt'and levels='$levelss' and sex='2' and db1='$db1s'  "); 
$row = mysql_fetch_assoc($qry); 
$saves=$row['total']; 
 $saves3=$row['total']; 



$qry = mysql_query("select * FROM  resit where matricule='$mats' and departmet='$deptt'and levels='$levelss' and sex='2' and db1='$db1s'  "); 
$num_rows=mysql_num_rows($qry);
  $richooTTTyss=$num_rows; 


?>
			  
			   </div>
			  
			  
			   </div>
			   
			   
			   
			   
			   
			   
			   
			  
			   <div style="float:left; width:589px; height:15px; color:#000;margin-left:7px;font-family:times;font-size:12px; ">
			  
			   <div style="float:left; width:320px; height:15px; color:#000;font-family:times;font-size:12px; ">
					 
				

					 </div>
			  
			  
			  
			  
			   <div style="float:left; width:200px; height:15px; color:#000;font-family:times;font-size:12px; ">
					 
					
<b style="width:200px; height:15px;background:#fff;font-weight:bold;">

SEMESTER GPA <?php 




 
 	 
$qry = mysql_query("select sum(c103*c104) as total
from resit where matricule='$mats' and departmet='$deptt'and levels='$levelss' and sex='2' and db1='$db1s'  "); 
$row = mysql_fetch_assoc($qry); 
$saveyuus=$row['total']; 
 

 	 
$qry = mysql_query("select sum(c104) as total
from resit where matricule='$mats' and departmet='$deptt'and levels='$levelss' and sex='2' and db1='$db1s'  "); 
$row = mysql_fetch_assoc($qry); 
 $richooTTTyssyuus=$row['total']; 
 







$mxc002sst=$saveyuus;
if(empty($mxc002sst)){
 $statusfbious3="";
 }
elseif($mxc002sst>'' ){
 $statusfbious3=($saveyuus/$richooTTTyssyuus) ;
printf("%01.2f",($statusfbious3));
}
$queryf3iiiiyy="update courses set c105='$statusfbious3'
 where matricule='$mats' and departmet='$deptt'and levels='$levelss'  and db1='$db1s'";
		 
mysql_query ($queryf3iiiiyy) or die ('could not updated:'.mysql_error());
 
 ?>

					 </div>
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
					 </div>	 
					 
					 <?php }
			 
			 ?>
	</div>
<?php
}
		 }

		 ?>
			 		 <div style="float:left; width:1170px;margin-top:65px;text-align:right; height:15px;color:#000;margin-left:4px;font-family:times;font-size:12px; ">	
					 
					 
					 <?php
 	 
$qry = mysql_query("select levels as total
from courses where matricule='$mats' and departmet='$deptt'and levels='300'   "); 
$row = mysql_fetch_assoc($qry); 
 $x=$row['total']; 
 

 
$qry = mysql_query("select levels as total
from courses where matricule='$mats' and departmet='$deptt'and levels='$levelss'   "); 
$row = mysql_fetch_assoc($qry); 
 $x2=$row['total'];





if(empty($x)){
 $sd=$x2;
 }elseif($x>''){ $sd=$x;}
					 
	if(empty($sd)){
		
		
	}elseif($sd>="200"  && $sd<="200"){
		
		$rso="Page 1 of 1";
		
	}
elseif($sd>="300"  && $sd<="300"){
		
		$rso="Page 1 of 2";
		
	}


	
			echo $rso;		 
					 
					 
					 
			?>		 
					 
					 </div>