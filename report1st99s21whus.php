<?php include 'dbcs.php';


page_protect();


 $notes=$_SESSION['user_name'];

$user_name=$notes;
$nki=$_GET['roll'];

?><?php


$query="select * from users where full_name='$notes'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>
<?php   $ids=$row['fax'];


?>
<?php } ?><BR><BR><?PHP
ini_set('max_execution_time', 3250000); //300 seconds = 5 minutes


$follows=$_POST['follows'];

$bookss=$_POST['bookss'];

$stetsub=$_POST['stetsub'];

$fname=$_POST["fname"];

?>
<html>

<?php
$query="select * from users where full_name='$notes'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
?>

<?php  $teacher=$row['fax'];
?>
<?php } ?>





<?php
$roll=$_GET["roll"];
$query="select * from courses where roll='$roll'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
?>

<?php  $fname=$row['fname'];$levelss=$row['levels'];$ids=$row['c110'];

 $departmet=$row['departmet'];
?>
<?php } ?>














<?php
$roll=$_GET["1"];
$query="select * from school where roll='1' and ids='$ids'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
?>

<?php  $school=$row[1];
$school2=$row[2];
?>
<?php } ?>
<?php
$roll=$_GET["1"];
$query="select * from school where roll='6' and ids='$ids'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
?>

<?php  $school6=$row[1];
$school6b=$row[2];
?>
<?php } ?>
<?php
$roll=$_GET["1"];
$query="select * from school where roll='7' and ids='$ids'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
?>

<?php  $school7=$row[1];
$school7b=$row[2];
?>
<?php } ?><?php
$roll=$_GET["1"];
$query="select * from school where roll='8' and ids='$ids'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
?>

<?php  $school8=$row[1];
$school8b=$row[2];
?>
<?php } ?>


<?php
$roll=$_GET["1"];
$query="select * from gradeb where extra='1' and ids='$ids'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
?>

<?php  $rangx1=$row['from1'];
$rangx2=$row['from2'];
$c1=$row['comments'];
$gpa1=$row['gpa'];
$grade1=$row['comments'];
?>
<?php } ?>




<?php
$roll=$_GET["1"];
$query="select * from gradeb where extra='2'and ids='$ids'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
?>

<?php  $rangx3=$row['from1'];
$rangx4=$row['from2'];
$c2=$row['comments'];
$gpa2=$row['gpa'];
$grade2=$row['comments'];
?>
<?php } ?>









<?php
$roll=$_GET["1"];
$query="select * from gradeb where extra='3' and ids='$ids'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
?>

<?php  $rangx5=$row['from1'];
$rangx6=$row['from2'];

$c3=$row['comments'];
$gpa3=$row['gpa'];
 $grade3=$row['comments'];
?>
<?php } ?>







<?php
$roll=$_GET["roll"];
$query="select * from courses where roll='$roll'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
?>

<?php  $fname=$row['fname'];$levelss=$row['levels'];$ids=$row['c110'];

 $departmet=$row['departmet'];
?>
<?php } ?>



<?php
$roll=$_GET["1"];
$query="select * from gradeb where extra='4' and ids='$ids'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
?>

<?php  $rangx7=$row['from1'];
$rangx8=$row['from2'];

$c4=$row['comments'];
$gpa4=$row['gpa'];
$grade4=$row['comments'];
?>
<?php } ?>








<?php
$roll=$_GET["1"];
$query="select * from gradeb where extra='5' and ids='$ids'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
?>

<?php     $rangx9=$row['from1'];
 $rangx10=$row['from2'];
 
$c5=$row['comments'];
$gpa5=$row['gpa'];
$grade5=$row['comments'];
?>
<?php } ?>

<?php
$roll=$_GET["1"];
$query="select * from gradeb where extra='6' and ids='$ids'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
?>

<?php     $rangx11=$row['from1'];
 $rangx12=$row['from2'];
 
$c6=$row['comments'];
$gpa6=$row['gpa'];
$grade6=$row['comments'];
?>
<?php } ?>

<?php
$roll=$_GET["1"];
$query="select * from gradeb where extra='7' and ids='$ids'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
?>

<?php     $rangx13=$row['from1'];
 $rangx14=$row['from2'];
 
$c7=$row['comments'];
$gpa7=$row['gpa'];
$grade7=$row['comments'];
?>
<?php } ?>
<?php
$roll=$_GET["1"];
$query="select * from gradeb where extra='8' and ids='$ids'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
?>

<?php     $rangx15=$row['from1'];
 $rangx16=$row['from2'];
 
$c8=$row['comments'];
$gpa8=$row['gpa'];
$grade8=$row['comments'];
?>
<?php } ?>
<?php
$roll=$_GET["1"];
$query="select * from gradeb where extra='9' and ids='$ids'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
?>

<?php     $rangx17=$row['from1'];
 $rangx18=$row['from2'];
 
$c9=$row['comments'];
$gpa9=$row['gpa'];
$grade9=$row['comments'];
?>
<?php } ?>
<head><TITLE><?php echo $fname;?> </TITLE>
 <link rel="stylesheet" href="test.css" 
type="text/css">
<style>
body {size:A4 ;
        margin: 0;
        padding: 0;
        font: 25pt;
    }
    * {
        box-sizing: border-box;
        -moz-box-sizing: border-box;
    }
    .page {
        width: 750px;
        min-height: 47.7cm;
        padding: 2cm;
        margin: 1cm auto;
        background: white;
    }
    .subpage {
        padding: 1cm;
        border: 5px black solid;
        height: 237mm;
        outline: 2cm #000 solid;
    }
    
    @page {
        size: A4 ;
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
  border-bottom: 1px solid #ccc;
margin-left:-40px;
  margin-top:-10px;font-family:calibri;
}
</style>
</head>
<body>
<br>
<?php

$levels=$_POST["levels"];

?>

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
$roll=$_GET["roll"];
$cxx5=$_POST["cxx5"];
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
$query="select * from $table where levels='$levelss' and departmet='$departmet'  ";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
 
		 ?>
		  <div class="page"  > <div style="margin:auto; width:800px; height:650px;">
		 
		 
		 <div style="float:left; width:850px;height:220px;">
		 
		 
		 <div style="float:left; width:610px;height:220px;">
		 
		 <div style="float:left; width:610px;height:100px;">
		 <div style="float:left; width:130px; height:100px;">
		 <img src="logo.png" width="130px" height="90px">
		 </div>
		 
		 
		 
		  
		 <div style="float:left; width:460px; height:100px;LINE-HEIGHT:21PX;FONT-FAMILY:TIMES;">
		 <B>ST. FRANCIS SCHOOL OF NURSING AND MIDWIFERY<BR>
		</B> P.O. BOX 77, BOKOKO BUEA, BUEA<BR>
		
		 TEL:(237) 3332 24 75/ 3332 25 26/ FAX: 3332  25 66
		 
		 </div>
		 </div>
		 
		 
		 <div style="float:left; width:610px;height:100px;font-family:arial; line-height:21px;margin-top:30px;">
		 
	
		 
		  RESULT SLIP FOR  <?PHP ECHO $take;?>
		 <div style="float:left; width:460px; height:40px;LINE-HEIGHT:21PX;FONT-FAMILY:TIMES;background:#ccc;border:1px solid #000; ">
		 <div style="float:left; width:460px;margin-top:10px; margin-left:10px; font-size:18px;">PROG: -<b>   <?PHP ECHO $deptt=$row["departmet"];$level=$row["levels"];?><br>
		</b>
		 
		 
		 </div> <div style="float:left; width:460px;margin-top:10px;">
		 Level: <?php echo $levels;?>, SEM: <?php $term=$_GET["term"];
		  
		  
		  
		  
		  if(empty($term)){}elseif($term>="1" && $term<="1"){echo "1";
		  $xd="c103";
		  }
		  
		  elseif($term>="2" && $term<="2"){echo "2";		  $xd="c104";
		  }
		  elseif($term>="3" && $term<="3"){echo "3";		  $xd="c105";
		  }
		  
		  elseif($term>="4" && $term<="4"){echo "4";		  $xd="c106";
		  }
		  
		  elseif($term>="5" && $term<="5"){echo "5";		  $xd="c107";
		  }
		  
		  
		  
		  
		  ?>
		 </div>	 </div>
		 
		 
		 
		  </div>
		 
		 
		 
		 
		 
		  </div>
		 <div style="float:left; width:200px; height:205px;BORDER:1PX SOLID #000;font-family:arial; font-size:13px;">
		 
		 <div style="float:left; width:200px; height:35px;BORDER-BOTTOM:1PX SOLID #000;background:#ccc;">
		
		 <div style="float:left; width:200px; margin-top:3px; margin-left:5px;"> GRADE SYSTEM
		  </DIV>
		 </DIV>
		 
		 
		  <div style="float:left; width:72px; height:35px;BORDER-BOTTOM:1PX SOLID #000;BORDER-right:1PX SOLID #000;">
		
		 <div style="float:left; width:72x; margin-top:3px; margin-left:5px;">  Grade/Point
		 
		 </DIV>
		 </DIV>
		 <div style="float:left; width:68px; height:35px;BORDER-BOTTOM:1PX SOLID #000;BORDER-right:1PX SOLID #000;">
			
		 <div style="float:left; width:72x; margin-top:3px; margin-left:5px;"> Score
		 
		 
		 </DIV></DIV>
		 
		 
		 	 <div style="float:left; width:58px; height:35px;BORDER-BOTTOM:1PX SOLID #000;">
		
		 <div style="float:left; width:72x; margin-top:3px; margin-left:5px;"> Remarks
		 
		 </DIV>
		 </DIV>
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 	  <div style="float:left; width:72px; height:21px;BORDER-BOTTOM:1PX SOLID #000;BORDER-right:1PX SOLID #000;">
		&nbsp;<?php echo $grade6;?>-  <?php echo $gpa6;?>GP
		 
		 </DIV>
		 <div style="float:left; width:68px; height:21px;BORDER-BOTTOM:1PX SOLID #000;BORDER-right:1PX SOLID #000;FONT-SIZE:13PX;">
		<?php echo $rangx11;?>-<?php echo $rangx12;?> %

		 
		 </DIV>
		 
		 
		 	 <div style="float:left; width:58px; height:21px;BORDER-BOTTOM:1PX SOLID #000;">
				Excellent
		 
		 </DIV>
		 
		   <div style="float:left; width:72px; height:21px;BORDER-BOTTOM:1PX SOLID #000;BORDER-right:1PX SOLID #000;">
		&nbsp;<?php echo $grade5;?> -  <?php echo $gpa5;?>GP
		 
		 </DIV>
		 <div style="float:left; width:68px; height:21px;BORDER-BOTTOM:1PX SOLID #000;BORDER-right:1PX SOLID #000;FONT-SIZE:13PX;">
		<?php echo $rangx9;?>-<?php echo $rangx10;?> %

		 
		 </DIV>
		 
		 
		 	 <div style="float:left; width:58px; height:21px;BORDER-BOTTOM:1PX SOLID #000;">
				V. Good
		 
		 </DIV>
		 
		 
		   <div style="float:left; width:72px; height:21px;BORDER-BOTTOM:1PX SOLID #000;BORDER-right:1PX SOLID #000;">
		&nbsp;<?php echo $grade4;?> - <?php echo $gpa4;?>GP
		 
		 </DIV>
		 <div style="float:left; width:68px; height:21px;BORDER-BOTTOM:1PX SOLID #000;BORDER-right:1PX SOLID #000;FONT-SIZE:13PX;">
		<?php echo $rangx7;?>-<?php echo $rangx8;?> %

		 
		 </DIV>
		 
		 
		 	 <div style="float:left; width:58px; height:21px;BORDER-BOTTOM:1PX SOLID #000;">
			Good
		 
		 </DIV>
		 
		 
		 
		 
		 
		 
		 
		   <div style="float:left; width:72px; height:21px;BORDER-BOTTOM:1PX SOLID #000;BORDER-right:1PX SOLID #000;">
		&nbsp;<?php echo $grade3;?>-  <?php echo $gpa3;?>GP
		 
		 </DIV>
		 <div style="float:left; width:68px; height:21px;BORDER-BOTTOM:1PX SOLID #000;BORDER-right:1PX SOLID #000;FONT-SIZE:13PX;">
		<?php echo $rangx5;?>-<?php echo $rangx6;?> %

		 
		 </DIV>
		 
		 
		 	 <div style="float:left; width:58px; height:21px;BORDER-BOTTOM:1PX SOLID #000;">
			Fair
		 
		 </DIV>
		 
		 
		 
		 
		 
		 
		   <div style="float:left; width:72px; height:22px;BORDER-BOTTOM:1PX SOLID #000;BORDER-right:1PX SOLID #000;">
		&nbsp;<?php echo $grade2;?>-  <?php echo $gpa2;?>GP
		 
		 </DIV>
		 <div style="float:left; width:68px; height:22px;BORDER-BOTTOM:1PX SOLID #000;BORDER-right:1PX SOLID #000;FONT-SIZE:13PX;">
		<?php echo $rangx3;?>-<?php echo $rangx4;?> %

		 
		 </DIV>
		 
		 
		 	 <div style="float:left; width:58px; height:22px;BORDER-BOTTOM:1PX SOLID #000;">
			Pass
		 
		 </DIV>
		 
		 
		 
		 
		 
		   <div style="float:left; width:72px; height:22px;BORDER-BOTTOM:1PX SOLID #000;BORDER-right:1PX SOLID #000;">
		&nbsp;<?php echo $grade1;?>-  <?php echo $gpa1;?>GP
		 
		 </DIV>
		 <div style="float:left; width:68px; height:22px;BORDER-BOTTOM:1PX SOLID #000;BORDER-right:1PX SOLID #000;FONT-SIZE:13PX;">
		<?php echo $rangx1;?>-<?php echo $rangx2;?> %

		 
		 </DIV>
		 
		 
		 	 <div style="float:left; width:58px; height:22px;BORDER-BOTTOM:1PX SOLID #000;">
			Fail
		 
		 </DIV>
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 </div>
		 
		 
		 
		 
		 </div>
		 
		 
		 
		 
		 
		 

		  <div style="float:left; width:800px;margin-top:20px;  text-align:center;height:30px;font-size:18px;text-transform:uppercase;">

		  <div style="float:left; width:100px;margin-top:20px;  text-align:left;height:30px;font-size:18px;text-transform:uppercase;">
<b>NAME:</b>
		  </div>
		   
		  <div style="float:left; width:400px;margin-top:20px;  text-align:left;height:30px;font-size:18px;text-transform:uppercase;">
<?PHP ECHO $row["fname"];?>
		  </div>  
		  
		    <div style="float:left; width:120px;margin-top:20px;  text-align:left;height:30px;font-size:18px;text-transform:uppercase;">
<b>MATRICULE :</b>
		  </div>  
		  
		  
		  
		    <div style="float:left; width:120px;margin-top:20px;  text-align:left;height:30px;font-size:18px;text-transform:uppercase;">
<?PHP ECHO $mats=$row["matricule"];?>
		  </div>  
		  </div>
		 
		  
		  
		    
		  <div style="float:left;font-weight:normal; width:805px;font-family:arial;font-size:14px; margin-top:10px;font-weight:bold;color:#000; height:40px;border:1px solid #000; 
		  ">
		  <div style="float:left; width:70px;height:40px;text-align:center;border-right:1px solid #000;">COURSE CODE</div>
		   <div style="float:left; width:300px;height:40px;text-align:center;border-right:1px solid #000;">&nbsp;COURSE TITLE</div>
		 	  <div style="float:left; width:60px;height:40px;text-align:center;border-right:1px solid #000;">
		  STATUS</div>
		  <div style="float:left; width:50px;height:40px;text-align:center;border-right:1px solid #000;">
		  CREDIT VALUE</div>
		   <div style="float:left; width:60px;height:40px;text-align:center;border-right:1px solid #000;">CA/30</div>
		 
		   <div style="float:left; width:62px;height:40px;text-align:center;border-right:1px solid #000;">EXAM/70</div>

		   <div style="float:left; width:45px;height:40px;text-align:center;border-right:1px solid #000;">TOTAL</div>
		   
		   <div style="float:left; width:55px;height:40px;border-right:1px solid #000;text-align:CENTER;margin-top:0px;">&nbsp;GRADE</div>
		   
		   <div style="float:left; width:65px;height:40px;text-align:CENTER;margin-top:0px;">&nbsp;REMARK</div>
		 </div> <?php 


$query = mysql_query("select  * from resit where db1='$take' and matricule='$mats' and departmet='$deptt' and sex='$term' and levels='$level'order by fname ASC"); 

		 while ($row = mysql_fetch_array($query)) {
		 
		 
		 
		 
		 
		 ?>

		  <div style="float:left;font-weight:normal;border:1px solid #000; width:805px;font-family:arial;font-size:14px; height:auto; ">
		
		
		
		
		
		
				  <div style="float:left; width:70px;height:25px;text-align:center;border-right:1px solid #000;">
				  
				  <div style="float:left; width:70px;MARGIN-TOP:3PX;">
		<?php echo $courseps=$row['fname'];
		
		
		$exam=$row['c102'];
		
		$cas=$row['c101'];?></div></div>
		   <div style="float:left; width:300px;height:25px;text-align:left;border-right:1px solid #000;">
		   
		     <div style="float:left; width:300px;MARGIN-TOP:3PX;MARGIN-LEFT:3PX;">
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
?></div></DIV>
		 	  <div style="float:left; width:60px;height:25px;text-align:center;border-right:1px solid #000;">
		  <div style="float:left; width:60px;MARGIN-TOP:3PX;">  <?php echo 
$status;?>
		</div></DIV>
		  <div style="float:left; width:50px;height:25px;text-align:center;border-right:1px solid #000;">
		  <div style="float:left; width:50px;MARGIN-TOP:3PX;"><?php echo 
$richooTTTy;?>
		</div></DIV>
		   <div style="float:left; width:60px;height:25px;text-align:center;border-right:1px solid #000;">  <div style="float:left; width:60px;MARGIN-TOP:3PX;">
<?php printf("%01.2f",
($cas));?></div></DIV>
		 
		   <div style="float:left; width:62px;height:25px;text-align:center;border-right:1px solid #000;">
		  <div style="float:left; width:62px;MARGIN-TOP:3PX;">
<?php printf("%01.2f",
( 
$exam));?></div></DIV>

		   <div style="float:left; width:45px;height:25px;text-align:center;border-right:1px solid #000;">	
		     <div style="float:left; width:45px;MARGIN-TOP:3PX;">
<?php $ns=
($exam+$cas); printf("%01.2f",
( $ns));?></div></DIV>
		   
		   <div style="float:left; width:55px;height:25px;border-right:1px solid #000;text-align:CENTER;margin-top:0px;">
		     <div style="float:left; width:55px;MARGIN-TOP:3PX;">
<?php $ns=
($exam+$cas); 


 $mxc11=$ns;
 
 
if(empty($mxc11)){
 $colorf1bio="#FF0000";
 $statusfbio=$grade1;
 
 echo'<div style=" color:'. $colorf1bio.';">'.$statusfbio.'</div>';
 
 
 }
elseif($mxc11>=$rangx1 && $mxc11<=$rangx2 ){
 $colorf1bio="#FF0000";
 $statusfbio=$grade1;
 echo'<div style=" color:'. $colorf1bio.';">'.$statusfbio.'</div>';
}else if(($mxc11 >=$rangx3) && ($mxc11<=$rangx4)){
 $colorf1bio="blue";
 $statusfbio=$grade2;
 echo'<div style=" color:'. $colorf1bio.';">'.$statusfbio.'</div>';}else if(($mxc11 >=$rangx5) && ($mxc11<=$rangx6)){
 $colorf1bio="blue";
 $statusfbio=$grade3;
 echo'<div style=" color:'. $colorf1bio.';">'.$statusfbio.'</div>';}
 
 
else if(($mxc11 >=$rangx7) && ($mxc11<=$rangx8)){
 $colorf1bio="blue";
 $statusfbio=$grade4;
 echo'<div style=" color:'. $colorf1bio.';">'.$statusfbio.'</div>';}
 
 
 else if(($mxc11 >=$rangx9) && ($mxc11<=$rangx10)){
 $colorf1bio="blue"; $statusfbio=$grade5; echo'<div style=" color:'. $colorf1bio.';">'.$statusfbio.'</div>';
} 
 
 
 
 else if(($mxc11 >=$rangx11) && ($mxc11<=$rangx12)){
 $colorf1bio="blue"; $statusfbio=$grade6; echo'<div style=" color:'. $colorf1bio.';">'.$statusfbio.'</div>';
} 
 
  else if(($mxc11 >=$rangx10) && ($mxc11<=$rangx14)){
 $colorf1bio="blue"; $statusfbio=$grade7; echo'<div style=" color:'. $colorf1bio.';">'.$statusfbio.'</div>';
} 
 
 
  else if(($mxc11 >=$rangx15) && ($mxc11<=$rangx16)){
 $colorf1bio="blue"; $statusfbio=$grade8; echo'<div style=" color:'. $colorf1bio.';">'.$statusfbio.'</div>';
} 
 
 
 
  $mxc11=$ns;
if(empty($mxc11)){
  $colorf1bio="yellow";
 $statusfbio=$gpa1;}
elseif($mxc11>=$rangx1 && $mxc11<=$rangx2 ){
 $colorf1bio="#FF0000";
 $statusfbio=$gpa1; ;
}else if(($mxc11 >=$range3) && ($mxc11<=$range4)){
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
$mokkk=($statusfbio*$richooTTTy);

$query3="update resit set c103='$mokkk',c104='$richooTTTy'
 where matricule='$mats' and departmet='$deptt'and levels='$level' and sex='$term' and db1='$take' and fname='$courseps'";







mysql_query ($query3) or die ('could not updated:'.mysql_error());

 ?></div></DIV>
		   
		   <div style="float:left; width:65px;height:25px;text-align:CENTER;margin-top:0px;">
		     <div style="float:left; width:65px;MARGIN-TOP:3PX;font-size:12px;">
<?php $ns=
($exam+$cas); 


 $mxc11=$ns;
 
 
if(empty($mxc11)){
 $colorf1bio="#FF0000";
 $statusfbio="FAIL";
 
 echo'<div style=" color:'. $colorf1bio.';">'.$statusfbio.'</div>';
 
 
 }
elseif($mxc11>=$rangx1 && $mxc11<=$rangx2 ){
 $colorf1bio="#FF0000";
 $statusfbio="FAIL";
 echo'<div style=" color:'. $colorf1bio.';">'.$statusfbio.'</div>';
}else if(($mxc11 >=$rangx3) && ($mxc11<=$rangx4)){
 $colorf1bio="blue";
 $statusfbio="Pass";
 echo'<div style=" color:'. $colorf1bio.';">'.$statusfbio.'</div>';}else if(($mxc11 >=$rangx5) && ($mxc11<=$rangx6)){
 $colorf1bio="blue";
 $statusfbio="Fair";
 echo'<div style=" color:'. $colorf1bio.';">'.$statusfbio.'</div>';}
 
 
else if(($mxc11 >=$rangx7) && ($mxc11<=$rangx8)){
 $colorf1bio="blue";
 $statusfbio="Good";
 echo'<div style=" color:'. $colorf1bio.';">'.$statusfbio.'</div>';}
 
 
 else if(($mxc11 >=$rangx9) && ($mxc11<=$rangx10)){
 $colorf1bio="blue"; $statusfbio="V. Good"; echo'<div style=" color:'. $colorf1bio.';">'.$statusfbio.'</div>';
} 
 
 
 
 else if(($mxc11 >=$rangx11) && ($mxc11<=$rangx12)){
 $colorf1bio="blue"; $statusfbio="Excellent"; echo'<div style=" color:'. $colorf1bio.';">'.$statusfbio.'</div>';
} 
 
  else if(($mxc11 >=$rangx10) && ($mxc11<=$rangx14)){
 $colorf1bio="blue"; $statusfbio="Excellent"; echo'<div style=" color:'. $colorf1bio.';">'.$statusfbio.'</div>';
} 
 
 
  else if(($mxc11 >=$rangx15) && ($mxc11<=$rangx16)){
 $colorf1bio="blue"; $statusfbio="Excellent"; echo'<div style=" color:'. $colorf1bio.';">'.$statusfbio.'</div>';
} 
 
 
 ?></div>
		
		
		
		</DIV>
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		</div>





		
		
		
		 
		 <?php } ?>
		 
		  <div style="float:left;font-weight:normal; width:800px;font-family:arial;font-size:14px; height:auto; ">
		
		  <div style="float:left;font-weight:normal; width:130px;font-family:arial;height:60px;
	border-bottom:1px solid #000; ">
		
		  <div style="float:left;margin-top:5px;margin-left:2px;">
		

		
		</div>
		</div>
			 
			  <div style="float:left;font-weight:normal; width:300px;font-family:arial;height:60px;
		border-bottom:1px solid #000; "><?php 



$qry = mysql_query("select sum(c103) as total
from resit where matricule='$mats' and departmet='$deptt'and levels='$level' and sex='$term' and db1='$take' and c110='$ids'  "); 
$row = mysql_fetch_assoc($qry); 
$save=$row['total']; 
 


$qry = mysql_query("select sum(c104) as total
from resit where matricule='$mats' and departmet='$deptt'and levels='$level' and sex='$term' and db1='$take' and c110='$ids'  "); 
$row = mysql_fetch_assoc($qry); 
$richooTTTyss=$row['total']; 
 

$mxc002=$save;
if(empty($mxc002)){
 $statusfbio="";
 }
elseif($mxc002>'' ){
 $colorf1bio="#FF0000";
 $statusfbio=($save/$richooTTTyss);
}
$queryf3="update courses set $xd='$statusfbio'
 where matricule='$mats' and departmet='$deptt'";





mysql_query ($queryf3) or die ();

$qry = mysql_query("select * FROM resit where departmet='$deptt' and levels='$level' and matricule='$mats' and db1='$take' and fname>'' and sex='$term' "); 
$num_rows=mysql_num_rows($qry);
  $totalstudent=$num_rows; 

$qry = mysql_query("select * FROM resit where departmet='$deptt' and levels='$level' and matricule='$mats' and db1='$take' and fname>'' and sex='$term' and (c101+c102)>=50"); 
$num_rows=mysql_num_rows($qry);
  $passed=$num_rows;


?>
		
		  <div style="float:left;width:360px;font-size:13px;">
			Number of Courses Registered: <?php echo   $totalstudent;?> &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;   Passed:<?php echo   $passed;?> 


		</div>
		
		
		
		</div>

		
		

			  <div style="float:left;font-weight:normal; text-align:center;width:100px;font-family:arial;height:60px; 
		border-bottom:1px solid #000; ">
		  <div style="float:left;margin-top:5px;margin-left:28px;">

		

		</div>
		
		</div>
		

			  <div style="float:left;font-weight:normal; text-align:center;width:60px;font-family:arial;height:60px;
		border-bottom:1px solid #000; ">
		  <div style="float:left;margin-top:5px;margin-left:22px;">


		</div>
		
		</div>
		

			  <div style="float:left;font-weight:normal;text-align:center; width:42px;font-family:arial;height:60px;
		border-bottom:1px solid #000; ">
		  <div style="float:left;margin-top:5px;margin-left:22px;">
		


		</div>
		
		</div>
		
		
			  <div style="float:left;font-weight:normal;text-align:center; width:82px;font-family:arial;height:60px;
		border-bottom:1px solid #000; ">
		  <div style="float:left;margin-top:5px;">
Printed on:-

		</div>
		
		</div>
		
		
			  <div style="float:left;font-weight:normal;text-align:center;	border-bottom:1px solid #000; width:81px;font-family:arial;height:60px;bborder-bottom:1px solid #000; ">
		  <div style="float:left;margin-top:5px;margin-left:22px;">
<?php echo date('j/m/y');?>
		

		</div>
		
		</div>
		  </div>
		  
		  <div style="float:left;font-weight:normal; width:800px;font-family:arial;font-size:14px; height:45px; ">
		  
		  
		  
		    </div>
		  
		    </div>
		  
		    </div>

		    </div>
		  
		    </div>
		    </div>
		  
		 <?php } ?>
		 
		 