<?php
ini_set('max_execution_time', 300000); //300 seconds = 5 minutes
$rope=$_GET['rollsps'];
?>
<?php
define('IN_CB', true);

if (version_compare(phpversion(), '5.0.0', '>=') !== true) {
    exit('Sorry, but you have to run this script with PHP5... You currently have the version <b>' . phpversion() . '</b>.');
}

if (!function_exists('imagecreate')) {
    exit('Sorry, make sure you have the GD extension installed before running this script.');
}

include_once('function.php');

// FileName & Extension
$system_temp_array = explode('/', $_SERVER['PHP_SELF']);
$filename = $system_temp_array[count($system_temp_array) - 1];
$system_temp_array2 = explode('.', $filename);
$availableBarcodes = listBarcodes();
$barcodeName = findValueFromKey($availableBarcodes, $filename);
$code = $system_temp_array2[0];

// Check if the code is valid
if (file_exists('config' . DIRECTORY_SEPARATOR . $code . '.php')) {
    include_once('config' . DIRECTORY_SEPARATOR . $code . '.php');
}
?>
<?php
include 'dbc.php';
?>
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
<head><TITLE>TRANSCRIPT </TITLE>
 <link rel="stylesheet" href="test.css" 
type="text/css">
<style>
#container{
width:670px;
height:650px;
margin:auto;}
.left{float:left;width:270px;; height:70px;line-height:22px;background:#1188aa;}

.left2{float:left;width:200px; height:70px;text-align:center;}


.left3{float:left;width:200px; height:70px;}
.top{float:left;width:220px; height:15px;FONT-SIZE:10PX; "}
.bottom{float:left;width:200px; height:40px;FONT-SIZE:16PX;COLOR:#FFF; "}
.main{float:left;width:700px; margin-top:20px;;text-transform:uppercase;text-align:center;FONT-SIZE:18PX; height:70px;line-height:22px;}
.main2{float:left;width:700px;background:#000;  height:70px;line-height:22px;border:1px solid #000;}
</style>
</head>
<body>
<br>
<?php

$levels=$_POST["levels"];

?>
<?php

$deptt=$_POST["deptt"];
$roll=$_GET["1"];
$query="select * from subject where department='$deptt' and year1='$levels' AND extra='1'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
?>

<?php  $subject1=$row['subject'];
$subject1n=$row['db1'];
?>
<?php } ?>


<?php

$deptt=$_POST["deptt"];
$roll=$_GET["1"];
$query="select * from credits where subject='$subject1' ";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
?>

<?php  $credit=$row['credit'];

?>
<?php } ?>










<?php

$deptt=$_POST["deptt"];
$roll=$_GET["1"];
$query="select * from subject where department='$deptt' and year1='$levels' AND extra='2'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
?>

<?php  $subject2=$row['subject'];
$subject2n=$row['db1'];
?>
<?php } ?>


<?php

$deptt=$_POST["deptt"];
$roll=$_GET["1"];
$query="select * from credits where subject='$subject2' ";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
?>

<?php  $credit2=$row['credit'];

?>
<?php } ?>


<?php

$deptt=$_POST["deptt"];
$roll=$_GET["1"];
$query="select * from subject where department='$deptt' and year1='$levels' AND extra='3'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
?>

<?php  $subject3=$row['subject'];
$subject3n=$row['db1'];
?>
<?php } ?>


<?php

$deptt=$_POST["deptt"];
$roll=$_GET["1"];
$query="select * from credits where subject='$subject3' ";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
?>

<?php  $credit3=$row['credit'];

?>
<?php } ?>



<?php

$deptt=$_POST["deptt"];
$roll=$_GET["1"];
$query="select * from subject where department='$deptt' and year1='$levels' AND extra='4'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
?>

<?php   $subject4=$row['subject'];
$subject4n=$row['db1'];
?>
<?php } ?>


<?php

$deptt=$_POST["deptt"];
$roll=$_GET["1"];
$query="select * from credits where subject='$subject4' ";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
?>

<?php  $credit4=$row['credit'];

?>
<?php } ?>



<?php

$deptt=$_POST["deptt"];
$roll=$_GET["1"];
$query="select * from subject where department='$deptt' and year1='$levels' AND extra='5'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
?>

<?php  $subject5=$row['subject'];
$subject5n=$row['db1'];
?>
<?php } ?>


<?php

$deptt=$_POST["deptt"];
$roll=$_GET["1"];
$query="select * from credits where subject='$subject5' ";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
?>

<?php  $credit5=$row['credit'];

?>
<?php } ?>



<?php

$deptt=$_POST["deptt"];
$roll=$_GET["1"];
$query="select * from subject where department='$deptt' and year1='$levels' AND extra='6'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
?>

<?php  $subject6=$row['subject'];
$subject6n=$row['db1'];
?>
<?php } ?>


<?php

$deptt=$_POST["deptt"];
$roll=$_GET["1"];
$query="select * from credits where subject='$subject6' ";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
?>

<?php  $credit6=$row['credit'];

?>
<?php } ?>



<?php

$deptt=$_POST["deptt"];
$roll=$_GET["1"];
$query="select * from subject where department='$deptt' and year1='$levels' AND extra='7'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
?>

<?php  $subject7=$row['subject'];
$subject7n=$row['db1'];
?>
<?php } ?>


<?php

$deptt=$_POST["deptt"];
$roll=$_GET["1"];
$query="select * from credits where subject='$subject7' ";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
?>

<?php  $credit7=$row['credit'];

?>
<?php } ?>




<?php

$deptt=$_POST["deptt"];
$roll=$_GET["1"];
$query="select * from subject where department='$deptt' and year1='$levels' AND extra='8'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
?>

<?php  $subject8=$row['subject'];
$subject8n=$row['db1'];
?>
<?php } ?>


<?php

$deptt=$_POST["deptt"];
$roll=$_GET["1"];
$query="select * from credits where subject='$subject8' ";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
?>

<?php  $credit8=$row['credit'];

?>
<?php } ?>

<?php

$deptt=$_POST["deptt"];
$roll=$_GET["1"];
$query="select * from subject where department='$deptt' and year1='$levels' AND extra='9'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
?>

<?php  $subject9=$row['subject'];
$subject9n=$row['db1'];
?>
<?php } ?>


<?php

$deptt=$_POST["deptt"];
$roll=$_GET["1"];
$query="select * from credits where subject='$subject9' ";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
?>

<?php  $credit9=$row['credit'];

?>
<?php } ?>


<?php

$deptt=$_POST["deptt"];
$roll=$_GET["1"];
$query="select * from subject where department='$deptt' and year1='$levels' AND extra='10'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
?>

<?php  $subject10=$row['subject'];
$subject10n=$row['db1'];
?>
<?php } ?>


<?php

$deptt=$_POST["deptt"];
$roll=$_GET["1"];
$query="select * from credits where subject='$subject10' ";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
?>

<?php  $credit10=$row['credit'];

?>
<?php } ?>








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

$query="select * from courses where roll='$rollyu'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>
<?php  $take=$row['db1'];
 $levels=$row['levels'];
 $rollss=$row['fname'];
 $mss=$row['matricule'];
?>
<?php } ?>


<?php
$roll=$_GET["1"];
$query="select * from school where roll='5'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>


<?php $ji16= $row[1];

?>
<?php }?>
 <?php
$roll=$_GET["1"];
$query="select * from school where roll='4'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>


<?php $ji1= $row[1];

$ji12= $row[2];

?>
<?php }?>
 <?php
$roll=$_GET["1"];
$query="select * from school where roll='3'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>


<?php 


$ji2= $row[2];

?>
<?php }?>

<?php
$roll=$_GET["1"];
$query="select * from classes where  roll='4'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>
<?php  $off1in4=$row['class'];


?><?php } ?>

 <?php
 
$roll=$_GET["1"];
$query="select * from school where roll='1'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>
<b>
<?php   $takes=$row[1];?><br>

<?php  $takes2=$row[2];?>
</b>

<br>
 <?php

$levels=$_POST["levels"];

$class=$_POST["class"];
?>
<?php } ?>

<?php




$form=$_POST["form"];
$query="select * from courses where  roll='$rope' 
";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
 

		  ?>

		 <div style="margin:auto; margin-top:-42px; width:1308px; height:1200px; background:url(report.png);">
		 
		 
		 
		 
		 
		 <div style="float:left; width:1306px; height:906px; border:0px solid #000;">
		 
		 
		 
		 <div style="float:left;margin-left:7px;margin-top:2px; width:1300px; height:140px; color:#000; border:1px solid #000;">
		 

		 <div style="float:left; width:649px; height:140px;background:#ddd; color:#000; border-right:1px solid #000;">
		

		 <div style="float:left; width:323px; height:140px; color:#000; border-right:1px solid #000;">
		 
		 <div style="float:left; width:250px; MARGIN-TOP:10PX;height:130px;TEXT-ALIGN:CENTER; MARGIN-LEFT:5PX;">
HIGHER INSTITUTE OF MANAGEMENT STUDIES (HIMS BUEA) <br>
		<b style="font-family:arial; font-size:12px; font-weight:normal;">
		Website: http://www.himsbuea.org<br>
		E-mail: admission@himsbuea.org<br>
		Contact: (00237) 67982 1672 / 6963 68834
		 </b>
		    </div>
		    </div>
			
			<div style="float:left; width:323px; height:140px; color:#000; ">
		 	 <div style="float:left; width:320px; MARGIN-TOP:50PX;height:50px;TEXT-ALIGN:CENTER; MARGIN-LEFT:5PX;">
STUDENT ACADEMIC RECORD
		 
		 
		    </div>
		 
		 
		    </div>
			
			
		    </div>
		 

		 <div style="float:left; width:649px; height:140px;color:#000;">
			
			
		 <div style="float:left; width:649px; height:69px;color:#000;BORDER-BOTTOM:1PX SOLID #000;">
			 <div style="float:left; width:549px; height:69px;color:#000;BORDER-right:1PX SOLID #000;">
			
			 <div style="float:left; width:549px; height:34px;color:#000;">
			 
			 <div style="float:left; width:249px; height:34px;color:#000;">
			 <B>&nbsp;&nbsp;&nbsp;&nbsp;STUDENT NO</B>
			 
		    </div>
			 
			  <div style="float:left; width:300px; height:34px;color:#000;">
			 <B>&nbsp;&nbsp;&nbsp;&nbsp;DATE PRINTED</B>
			 
		    </div>
			
		    </div>
			
			
			
			
			
			
			
			
			 <div style="float:left; width:549px; height:34px;color:#000;">
			 
			 <div style="float:left; width:249px; height:34px;color:#000;font-size:13px;">
			&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $mats=$row['matricule'];?>
			 
		    </div>
			 
			  <div style="float:left; width:300px; height:34px;color:#000;font-size:13px;">
			 &nbsp;&nbsp;&nbsp;&nbsp;<?php echo date('Y/m/j');?>
			 
			  <div style="float:left;margin-left:310px; width:150px; height:20px;">Page 1 of 1 </div> 
		    </div>
		
		    </div>
			
			
			
			
			
			
			
			
			
		    </div>
		  <div style="float:left; width:100px; height:69px;color:#000;">
			
		    </div>
		    </div>
			
		 <div style="float:left; width:649px; height:69px;color:#000;">
		
			 <div style="float:left; width:649px; height:32px;color:#000;">	
			
			&nbsp;&nbsp;&nbsp;STUDENT NAME
		    </div>
			 <div style="float:left; width:649px; height:32px;color:#000;font-size:13px;">	
			 <div style="float:left; width:349px; height:32px;color:#000;font-size:13px;">	
			&nbsp;&nbsp;&nbsp;<?php echo $row['fname'];?><?php  $deptt=$row['departmet'];
		 
		 $level=$row['levels'];?>
		    </div>
			 <div style="float:left; width:300px; height:32px;color:#000;font-size:13px;">	ACADEMIC YEAR: <?PHP ECHO $take=$row['db1'];?>
		    </div>
			</div>
			
			
			
			
			
		 
		    </div>
			
			
		 
		    </div>
		 
		 
		 <div style="float:left;margin-left:-1px;margin-top:4px; width:1300px; height:297px; color:#000; border:1px solid #000;">
		 
		 <div style="float:left; width:1300px; height:100px; color:#000; border-bottom:1px solid #000;">

		 <div style="float:left; width:150px; height:100px;border-RIGHT:1px solid #000;">
		 
		 
		 <div style="float:left; width:150px; height:30px; TEXT-ALIGN:CENTER;">
		 DATE OF BIRTH
		 
		 </DIV>
		 <div style="float:left; width:49px; height:70px; TEXT-ALIGN:CENTER;border-RIGHT:1px solid #000;">
		
		 <div style="float:left; WIDTH:100PX;"> <?php echo $row['cxx2'];?></DIV>
		 
		 
		 </DIV> <div style="float:left; width:49px; height:70px; TEXT-ALIGN:CENTER;border-RIGHT:1px solid #000;">
		 
		 
		 
		 </DIV> <div style="float:left; width:49px; height:70px; TEXT-ALIGN:CENTER;">
		 
		 
		 
		 </DIV>
		 </DIV>
		 
		 
		 <div style="float:left; width:380px; height:100px;border-RIGHT:1px solid #000;">
		 <div style="float:left; width:380px; height:30px; TEXT-ALIGN:CENTER;">
		 PLACE OF BIRTH
		 
		 </DIV> <div style="float:left; width:380px;MARGIN-TOP:50PX; height:30px; TEXT-ALIGN:CENTER;">
			<?php echo $row['cxx1'];?>	  </DIV>
		 
		  
		    </div>
 
		 <div style="float:left; width:70px; height:100px;border-RIGHT:1px solid #000;">
		   <div style="float:left; width:70px; height:30px; TEXT-ALIGN:CENTER;">
		 SEX
		 
		 </DIV>
		  <div style="float:left; width:70px;MARGIN-TOP:50PX; height:30px; TEXT-ALIGN:CENTER;">
		  <?php echo $row['sex'];
		 ?>
		  </DIV>
		 
		  
		  
		    </div>
		 <div style="float:left; width:359px; height:100px;border-RIGHT:1px solid #000;">
		 
		   <div style="float:left; MARGIN-TOP:10PX;width:359px; height:30px; TEXT-ALIGN:CENTER;">
		 SCHOOL LAST ATTENDED
		 
		 </DIV><br><br><br><br><b style="color:#787878">
		  <?php echo $row['cxx6'];
		 ?></b>
		    </div>
			
		 <div style="float:left; width:309px; height:100px;">
			
		   <div style="float:left; MARGIN-TOP:10PX;FONT-SIZE:12PX;width:300px;FONT-WEIGHT:NORMAL;TEXT-TRANSFORM:UPPERCASE; height:30px; TEXT-ALIGN:CENTER;">
					This transcript is not valid without the official Seal  of the  school and the signature of the Registrar
		    </div>
		    </div>
			</div>
				 <div style="float:left; width:1300px; height:200px; color:#000; ">

		 <div style="float:left; width:430px; height:200px; color:#000; border-right:1px solid #000;">

		 
		 <div style="float:left; width:430px; height:70px; color:#000; border-bottom:1px solid #000;">
		  <div style="float:left; width:330px; height:70px; color:#000; border-right:1px solid #000;">
		 
		   <div style="float:left;MARGIN-LEFT:10PX;width:230px;height:20px; MARGIN-TOP:20PX;">
		 DATE OF ENROLMENT<br>
		 
	
		    </div>
			
		   <div style="float:left;MARGIN-LEFT:280PX;width:100px;height:20px;">
			<table WIDTH="120PX"CELLSPACING="0" CELLPADDING="2"><tr><td>MON</td><td>YEAR</TD></TR>
			<tr><td><?PHP ECHO $mm;?></td><td></TD></TR>
			
			
			
			</TABLE>
			</div>
			</div>
		  <div style="float:left; width:100px; height:70px; color:#000; ">
		 
		  <div style="float:left;MARGIN-LEFT:10PX;MARGIN-TOP:10PX;"> 
		 <table WIDTH="400PX"CELLSPACING="0" CELLPADDING="2" >
		 <tr><td WIDTH="200px" STYLE="FONT-SIZE:13PX;"><B>SPECIALTY :</B></td><td><?PHP ECHO $row['departmet'];?></td></tr>
		 
		 <tr><td STYLE="FONT-SIZE:13PX;"><B>DEGREE PROPOSED :</B></td><td STYLE="FONT-SIZE:11PX;">BACHELOR OF TECHNOLOGY</td></tr>
		 
		 <tr><td STYLE="FONT-SIZE:13PX;"><B>DEGREE CONFERRED :</B></td><td STYLE="FONT-SIZE:11PX;">Bachelor of Technology in <b><?PHP ECHO $row['departmet'];?></b> </td></tr>
		 
		 <tr><td STYLE="FONT-SIZE:13PX;"></tr>
		 </table>
		 
		    </div>
		    </div>
		 
		    </div>
		 
		 
		    </div>
				 
				 
				 
				 
				 
				 
		 <div style="float:left; width:530px; height:200px; color:#000; border-right:1px solid #000;">

		    </div>
				 
				 
		 <div style="float:left; width:330px; height:200px; color:#000; ">

		 
		 <div style="float:left; width:330px; height:30px; MARGIN-LEFT:10PX;"><B>GRADE SYSTEM</B></DIV>
		 
		 <div style="float:left; width:330px; height:160px; MARGIN-LEFT:10PX;">
		 <TABLE STYLE="FONT-SIZE:12PX;"><TR><TD>
		  <?php echo $c8;?> : </TD><TD><?php echo $rangx15;?> -</TD><TD> <?php echo $rangx16;?> %</TD><TD><?php echo $gpa8;?>GP</TD><TD>Excellent</TD></TR>
		  <TR><TD>
		  <?php echo $c7;?> : </TD><TD><?php echo $rangx14;?> -</TD><TD> <?php echo $rangx7;?> %</TD><TD><?php echo $gpa13;?>GP</TD><TD>V. Good</TD></TR>
		   <TR><TD>
		  <?php echo $c6;?> : </TD><TD><?php echo $rangx11;?> -</TD><TD> <?php echo $rangx12;?> %</TD><TD><?php echo $gpa6;?>GP</TD><TD>Good</TD></TR>
		   <TR><TD>
		  <?php echo $c5;?> : </TD><TD><?php echo $rangx10;?> -</TD><TD> <?php echo $rangx9;?> %</TD><TD><?php echo $gpa5;?>GP</TD><TD>FAIR</TD></TR>
		  
		    <TR><TD>
		  <?php echo $c4;?> : </TD><TD><?php echo $rangx8;?> -</TD><TD> <?php echo $rangx7;?> %</TD><TD><?php echo $gpa4;?>GP</TD><TD>PASS</TD></TR>
		    <TR><TD>
		  <?php echo $c3;?> : </TD><TD><?php echo $rangx6;?> -</TD><TD> <?php echo $rangx5;?> %</TD><TD><?php echo $gpa3;?>GP</TD><TD>FAIL</TD></TR>
		    <TR><TD>
		  <?php echo $c2;?> : </TD><TD><?php echo $rangx4;?> -</TD><TD> <?php echo $rangx3;?> %</TD><TD><?php echo $gpa2;?>GP</TD><TD>FAIL</TD></TR>
		  <TR><TD>
		  <?php echo $c1;?> : </TD><TD><?php echo $rangx2;?> -</TD><TD> <?php echo $rangx1;?> %</TD><TD><?php echo $gpa1;?>GP</TD><TD>FAIL</TD></TR>
		  
		  </TABLE>
		 
		    </div>
		 
		    </div>
			
			
			
			
		    </div>

			
		    </div>
		 
		 <div style="float:left;margin-left:0px; width:1300px; height:40px;background:#ccc; color:#000;font-size:11px; border:1px solid #000;MARGIN-TOP:3PX;">
		 
		 <div style="float:left; width:70px; height:40px; border-right:1px solid #000;">
		 <DIV STYLE="float:left;margin-left:5px; width:70px; text-align:center;font-weight:bold;height:25px;">
COURSE CODE
		    </div>
		 
		    </div>
		 
		 
		  <div style="float:left;width:280px; height:40px; border-right:1px solid #000;">
		 <DIV STYLE="float:left;margin-left:10px;width:280px; text-align:left;font-weight:bold;height:25px;">
COURSE TITLE
		    </div>
		 
		    </div>
		  <div style="float:left; width:60px; height:40px; border-right:1px solid #000;">
		 <DIV STYLE="float:left;margin-left:0px; width:60px; text-align:center;font-weight:bold;height:25px;">
STATUS
		    </div>
		 
		    </div>
		 
		   <div style="float:left; width:55PX; height:40px; border-right:1px solid #000;">
		 <DIV STYLE="float:left;margin-left:0px; width:55px; text-align:center;font-weight:bold;height:25px;">
CREDIT VALUE
		    </div>
		 
		    </div>
		   <div style="float:left; width:60px; height:40px; border-right:1px solid #000;">
		 <DIV STYLE="float:left;margin-left:0px; width:60px; text-align:center;font-weight:bold;height:25px;">
GRADE
		    </div>
		 
		    </div>
		 
		   <div style="float:left; width:60px; height:40px; border-right:1px solid #000;">
		 <DIV STYLE="float:left;margin-left:0px; width:60px; text-align:center;font-weight:bold;height:25px;">
CREDIT EARN
		    </div>
		 
		    </div>
		 
		 
		 
		   <div style="float:left; width:58px; height:40px; border-right:1px solid #000;">
		 <DIV STYLE="float:left;margin-left:0px; width:60px; text-align:center;font-weight:bold;height:25px;">
GRADE POINT
		    </div>
		 
		    </div>
		 
		 
		 
	 <div style="float:left; width:72px; height:40px; border-right:1px solid #000;">
		 <DIV STYLE="float:left;margin-left:5px; width:70px; text-align:center;font-weight:bold;height:25px;">
COURSE CODE
		    </div>
		 
		    </div>
		 
		 
		  <div style="float:left;width:280px; height:40px; border-right:1px solid #000;">
		 <DIV STYLE="float:left;margin-left:10px;width:280px; text-align:left;font-weight:bold;height:25px;">
COURSE TITLE
		    </div>
		 
		    </div>
		  <div style="float:left; width:60px; height:40px; border-right:1px solid #000;">
		 <DIV STYLE="float:left;margin-left:0px; width:60px; text-align:center;font-weight:bold;height:25px;">
STATUS
		    </div>
		 
		    </div>
		 
		   <div style="float:left; width:55PX; height:40px; border-right:1px solid #000;">
		 <DIV STYLE="float:left;margin-left:0px; width:55px; text-align:center;font-weight:bold;height:25px;">
CREDIT VALUE
		    </div>
		 
		    </div>
		   <div style="float:left; width:55px; height:40px; border-right:1px solid #000;">
		 <DIV STYLE="float:left;margin-left:0px; width:55px; text-align:center;font-weight:bold;height:25px;">
GRADE
		    </div>
		 
		    </div>
		 
		   <div style="float:left; width:60px; height:40px; border-right:1px solid #000;">
		 <DIV STYLE="float:left;margin-left:0px; width:60px; text-align:center;font-weight:bold;height:25px;">
CREDIT EARN
		    </div>
		 
		    </div>
		 
		 
		 
		   <div style="float:left; width:58px; height:40px; ">
		 <DIV STYLE="float:left;margin-left:0px; width:60px; text-align:center;font-weight:bold;height:25px;">
GRADE POINT
		    </div>
		 
		    </div>
		 
		 
		 

		 
		 
		 
		    </div>
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		 <div style="float:left;margin-left:0px; width:1350px; heigh:auto;">
		
		
		
		
		
		 <div style="float:left; width:653px; height:15px; color:#000;font-weight:normal;">
				 
				 
				 
				 
				 
		 <div style="float:left; width:70px; height:15px; border-left:1px solid #000; border-right:1px solid #000;">
		 <DIV STYLE="float:left;margin-left:5px; width:70px; text-align:center;height:15px;">

		    </div>
		 
		    </div>
		 
		 
		  <div style="float:left;width:280px; height:15px; border-right:1px solid #000;">
		 <DIV STYLE="float:left;margin-left:10px;width:280px;font-size:11px; text-align:left;height:15px;">
		 
		    </div>
		 
		    </div>
			
			
		  <div style="float:left; width:60px; height:15px; border-right:1px solid #000;">
		 <DIV STYLE="float:left;margin-left:0px; width:60px; text-align:center;height:15px;">

		    </div>
		 
		    </div>
			
			
		 
		   <div style="float:left; width:55PX; height:15px; border-right:1px solid #000;">
		 <DIV STYLE="float:left;margin-left:0px; width:55px; text-align:center;height:15px;">

		    </div>
		 
		    </div>
			
			
		   <div style="float:left; width:60px; height:15px; border-right:1px solid #000;">
		 <DIV STYLE="float:left;margin-left:0px; width:60px; text-align:center;height:15px;">


		    </div>
		 
		    </div>
		 
		 
		 
		   <div style="float:left; width:60px; height:15px; border-right:1px solid #000;">
		 <DIV STYLE="float:left;margin-left:0px; width:60px; text-align:center;height:15px;">

		    </div>
		 
		    </div>
		 
		 
		 
		 
		   <div style="float:left; width:58px; height:15px; border-right:1px solid #000;">
		 <DIV STYLE="float:left;margin-left:0px; width:60px; text-align:center;height:15px;">
		    </div>
		 
		    </div>
		 
		 
		 
				 
	
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 <div style="float:left; width:658px; heigh:350px; color:#000;font-weight:normal;">
				 
				 
			
		 <div style="float:left; width:70px; height:400px;border-bottom:1px solid #000; border-left:1px solid #000; border-right:1px solid #000;">
		 
		 
		 
		 
		 <DIV STYLE="float:left;margin-left:5px; width:70px; text-align:center;height:auto;">

		    </div>
		 
		 
		 
		 
		    </div>
		 
		 
		  <div style="float:left;width:280px; height:400px;border-bottom:1px solid #000; border-right:1px solid #000;">
		  
		  
		  
		  
		 <DIV STYLE="float:left;margin-left:10px;width:280px;font-size:11px; text-align:left;height:auto;">

		    </div>
		 
		    </div>
			
			
			
			
			
			
			
			
		  <div style="float:left; width:60px; height:400px;border-bottom:1px solid #000; border-right:1px solid #000;">
		  
		  
		 <DIV STYLE="float:left;margin-left:0px; width:60px; text-align:center;height:auto;">

		    </div>
		 
		    </div>
			
			
			
			
			
		 
		   <div style="float:left; width:55PX; height:400px;border-bottom:1px solid #000; border-right:1px solid #000;">
		 <DIV STYLE="float:left;margin-left:0px; width:55px; text-align:center;height:auto;">

		    </div>
		 
		    </div>
			
			
			
			
			
			
			
			
			
			
			
			
		   <div style="float:left; width:60px; height:400px;border-bottom:1px solid #000; border-right:1px solid #000;">
		 <DIV STYLE="float:left;margin-left:0px; width:60px; text-align:center;height:auto;">


		    </div>
		 
		    </div>
		 
		 
		 
		   <div style="float:left; width:60px; height:400px;border-bottom:1px solid #000; border-right:1px solid #000;">
		 <DIV STYLE="float:left;margin-left:0px; width:60px; text-align:center;height:auto;">

		    </div>
		 
		    </div>
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		   <div style="float:left; width:58px; height:400px;border-bottom:1px solid #000; border-right:1px solid #000;">
		 <DIV STYLE="float:left;margin-left:0px; width:60px; text-align:center;height:auto;">
		    </div>
		 
		    </div>
		 
		
		
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		    </div>
		 
		 
		 
		 
		 
		    </div>
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 	 <div style="float:left; width:653px; height:15px; color:#000;font-weight:normal;">
				 
				 
				 
				 
		 <div style="float:left; width:70px; height:15px;  border-right:1px solid #000;">
		 <DIV STYLE="float:left;margin-left:5px; width:70px; text-align:center;height:15px;">

		    </div>
		 
		    </div>
		 
		 
		  <div style="float:left;width:280px; height:15px; border-right:1px solid #000;">
		 <DIV STYLE="float:left;margin-left:10px;width:280px;font-size:11px; text-align:left;height:15px;">

		    </div>
		 
		    </div>
			
			
		  <div style="float:left; width:60px; height:15px; border-right:1px solid #000;">
		 <DIV STYLE="float:left;margin-left:0px; width:60px; text-align:center;height:15px;">

		    </div>
		 
		    </div>
			
			
		 
		   <div style="float:left; width:55PX; height:15px; border-right:1px solid #000;">
		 <DIV STYLE="float:left;margin-left:0px; width:55px; text-align:center;height:15px;">

		    </div>
		 
		    </div>
			
			
		   <div style="float:left; width:55px; height:15px; border-right:1px solid #000;">
		 <DIV STYLE="float:left;margin-left:0px; width:60px; text-align:center;height:15px;">


		    </div>
		 
		    </div>
		 
		 
		 
		   <div style="float:left; width:60px; height:15px; border-right:1px solid #000;">
		 <DIV STYLE="float:left;margin-left:0px; width:60px; text-align:center;height:15px;">

		    </div>
		 
		    </div>
		 
		 
		 
		 
		   <div style="float:left; width:62px; height:15px; border-right:1px solid #000;">
		 <DIV STYLE="float:left;margin-left:0px; width:60px; text-align:center;height:15px;">
		    </div>
		 
		    </div>
		 
		 
		 
				 
				 
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
		 
		 <div style="float:left; width:650px; heigh:700px; color:#000;font-weight:normal;">
				 
				 
			
		 <div style="float:left; width:70px; height:400px;border-bottom:1px solid #000;  border-right:1px solid #000;">
		 
		 
		 
		 
		 <DIV STYLE="float:left;margin-left:5px; width:70px; text-align:center;height:auto;">

		    </div>
		 
		 
		 
		 
		    </div>
		 
		 
		  <div style="float:left;width:280px; height:400px;border-bottom:1px solid #000; border-right:1px solid #000;">
		  
		  
		  
		  
		 <DIV STYLE="float:left;margin-left:10px;width:280px;font-size:11px; text-align:left;height:auto;">

		    </div>
		 
		    </div>
			
			
			
			
			
			
			
			
		  <div style="float:left; width:60px; height:400px;border-bottom:1px solid #000; border-right:1px solid #000;">
		  
		  
		 <DIV STYLE="float:left;margin-left:0px; width:60px; text-align:center;height:auto;">

		    </div>
		 
		    </div>
			
			
			
			
			
		 
		   <div style="float:left; width:55PX; height:400px;border-bottom:1px solid #000; border-right:1px solid #000;">
		 <DIV STYLE="float:left;margin-left:0px; width:55px; text-align:center;height:auto;">

		    </div>
		 
		    </div>
			
			
			
			
			
			
			
			
			
			
			
			
		   <div style="float:left; width:55px; height:400px;border-bottom:1px solid #000; border-right:1px solid #000;">
		 <DIV STYLE="float:left;margin-left:0px; width:60px; text-align:center;height:auto;">


		    </div>
		 
		    </div>
		 
		 
		 
		   <div style="float:left; width:60px; height:400px;border-bottom:1px solid #000; border-right:1px solid #000;">
		 <DIV STYLE="float:left;margin-left:0px; width:60px; text-align:center;height:auto;">

		    </div>
		 
		    </div>
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		   <div style="float:left; width:62px; height:400px;border-bottom:1px solid #000; border-right:1px solid #000;">
		 <DIV STYLE="float:left;margin-left:0px; width:60px; text-align:center;height:auto;">
		    </div>
		 
		    </div>
		 
		
		
	
	
	
	
	
	
	
	
	
	
	
	
	
	
		 
		 
		    </div>
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		    </div>
		 
		 
		 
		 
		 
		 
		 
		 
		 
		    </div>
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 <div style="float:left; width:1350px; heigh:auto; margin-top:-10px;">
		
		
		 <div style="float:left; width:653px; height:auto; color:#000;font-weight:normal;">
		
<?php




$form=$_POST["form"];
$query="select * from courses where  matricule='$mats'  order by matricule ASC
";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
 

		  ?><?php $pt=$row["db1"];
		  
		  
$qry = mysql_query("select  (c101+c102) as total
from resit where  matricule='$mats'  and sex='1' and db1='$pt' "); 
$row = mysql_fetch_assoc($qry); 
$smspl=$row['total'];
		  
		
 
 $mljs=$smspl;
 
if(empty($mljs)){
 
 echo  $statussms='';
 }
	elseif($mljs>''){
 echo  $statussms=" <b style='float:left; font-weight:bold; font-size:11px; margin-left:24px;letter-spacing:2px;height:15px;font-family:arial;'> First Semester : $pt</b>";
}	
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  ?>
		
		  
				<?php 




$query = mysql_query("select  * 









 



from resit where matricule='$mats' and departmet='$deptt'and levels='$level' and sex='1' and db1='$pt' and (c101+c102)>'' order by fname ASC"); 

		 while ($row = mysql_fetch_array($query)) {
		 
		 
		 
		 
		 
		 ?>
		 
		
		 <div style="float:left; width:653px; height:15px; color:#000;font-weight:normal;">
		 
	 
				 
				 
			
		 <div style="float:left; width:70px; height:15px;  ">
		 
		 
		 
		 
		 <DIV STYLE="float:left;margin-left:5px; width:70px;font-size:11px; text-align:center;height:auto;">
<?php echo $courseps=$row['fname'];
		
$qry = mysql_query("select  db1 as total
from 
subject where department='$deptt'and year1='$level' and year2='1' and acc='$pt'  and subject='$courseps'  
"); 
$row = mysql_fetch_assoc($qry); 

$richooTTT=$row['total']; 

	
$qry = mysql_query("select credit as total
from 
subject where department='$deptt'and year1='$level' and year2='1' and acc='$pt'  and subject='$courseps'  
"); 
$row = mysql_fetch_assoc($qry); 

$richooTTTy=$row['total']; 

$qry = mysql_query("select status as total
from 
subject where department='$deptt'and year1='$level' and year2='1' and acc='$pt'  and subject='$courseps'  
"); 
$row = mysql_fetch_assoc($qry); 

$status=$row['total']; 





		?>
		    </div>
		 
		 
		 
		 
		    </div>
		 
		 
		  <div style="float:left;width:280px; height:15px; ">
		  
		  
		  
		  
		 <DIV STYLE="float:left;margin-left:10px;width:280px;font-size:11px; text-align:left;height:auto;">
<?php 
echo $richooTTT; 

$qry = mysql_query("select  c101 as total
from 
resit where matricule='$mats' and departmet='$deptt'and levels='$level' and sex='1' and db1='$pt'  and fname='$courseps'  and c101>''
"); 
$row = mysql_fetch_assoc($qry); 

$cas=$row['total']; 


$qrys = mysql_query("select  c102 as total from
resit where matricule='$mats' and departmet='$deptt'and levels='$level' and sex='1' and db1='$pt'  and fname='$courseps'  and c102>''"); 
$row = mysql_fetch_assoc($qrys); 
$exam=$row['total'];



$qry = mysql_query("select  SUM(c101+c102) as total
from 
resit where matricule='$mats' and departmet='$deptt'and levels='$level' and sex='1' and db1='$pt'  and fname='$courseps'  
"); 
$row = mysql_fetch_assoc($qry); 

$ns=$row['total']; 


$qry = mysql_query("select  SUM(c101+c102) as total
from 
resit where matricule='$mats' and departmet='$deptt'and levels='$level' and sex='3' and db1='$pt'  and fname='$courseps'  and c102>''
"); 
$row = mysql_fetch_assoc($qry); 

$smps=$row['total']; 


?>
		    </div>
		 
		    </div>
			
			
			
			
			
			
			
			
		  <div style="float:left; width:60px; height:15px; ">
		  
		  
		 <DIV STYLE="float:left;margin-left:0px; font-size:11px;width:60px; text-align:center;height:auto;">
<?php echo $status;?>
		    </div>
		 
		    </div>
			
			
			
			
			
		 
		   <div style="float:left; width:55PX; height:15px; ">
		 <DIV STYLE="float:left;margin-left:0px; width:55px;font-size:11px; text-align:center;height:auto;">
<?php echo $richooTTTy;?>
		    </div>
		 
		    </div>
			
			
			
			
			
			
			
			
			
			
			
			
		   <div style="float:left; width:60px; height:15px; ">
		 <DIV STYLE="float:left;margin-left:0px; width:60px;font-size:11px; text-align:center;height:auto;">

<?php




 



 $savepsts=$ns; 

 
  $mxc11=$ns;
    
if(empty($mxc11)){
 $colorf1bio="yellow";
 $statusfbio="";}
elseif($mxc11>=$rangx1 && $mxc11<=$rangx2 ){
 $colorf1bio="#FF0000";
 $statusfbio="F";
 echo'<div style=" color:'. $colorf1bio.';">'.$statusfbio.'</div>';
}else if(($mxc11 >=$rangx3) && ($mxc11<=$rangx4)){
 $colorf1bio="#ff6666";
 $statusfbio="D";
 echo'<div style=" color:'. $colorf1bio.';">'.$statusfbio.'</div>';}else if(($mxc11 >=$rangx5) && ($mxc11<=$rangx6)){
 $colorf1bio="#ff6666";
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
 
 
 

 
$query4="insert into gpas  set  matricule='$mats',credit='$richooTTTy',levels='$level',db1='$pt'
 ,gpav='$statusfbiogff',code='$courseps',sex='1' ,cc='$tks' ,tm='$cc',mark='$ns',x='$statusfbio',ee='$ee'";







mysql_query ($query4) or die ('could not updated:'.mysql_error());
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 $tk=$tks;
 
 
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

 
 $statusfbiogff;
 
 
 
 
 
 $xaf=($tm*$statusfbiogff);
 

 $cc=($statusfbiogff*$richooTTTy);
  $qry = mysql_query("select code as total
from gpas where matricule='$mats' and levels='$level' 
  and code='$courseps' "); 
$row = mysql_fetch_assoc($qry); 
  $bn=$row['total']; 
 

if(empty($bn)){



$query44="update resit  set  c104='$ee',c106='$richooTTTy'
 ,c105='$statusfbiogff' where matricule='$mats' and levels='$level' and sex='1' and fname='$courseps'";



$query4="insert into gpas  set  matricule='$mats',credit='$richooTTTy',levels='$level',db1='$pt',x='$statusfbio'
 ,gpav='$statusfbiogff',code='$courseps',sex='1' ,cc='$tk' ,tm='$cc',mark='$ns',ee='$ee'";







mysql_query ($query4) or die ('could not updated:'.mysql_error());





mysql_query ($query44) or die ('could not updated:'.mysql_error());



}


elseif($bn>'') {

$query44="update resit  set  c104='$ee',c106='$richooTTTy'
 ,c105='$statusfbiogff' where matricule='$mats' and levels='$level' and sex='1' and fname='$courseps'";


  
$query4="update gpas  set  credit='$richooTTTy',cc='$tk',ee='$ee'
 ,gpav='$statusfbiogff' where matricule='$mats' and levels='$level' and code='$courseps'";





mysql_query ($query44) or die ('could not updated:'.mysql_error());


mysql_query ($query4) or die ('could not updated:'.mysql_error());



}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 ?>
		

		    </div>
		 
		    </div>
		 
		 
		 
		   <div style="float:left; width:60px; height:15px; ">
		 <DIV STYLE="float:left;margin-left:0px; width:60px; font-size:11px;text-align:center;height:auto;">
<?php echo $richooTTTy;?>
		    </div>
		 
		    </div>
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		   <div style="float:left; width:60px; height:15px; ">
		 <DIV STYLE="float:left;margin-left:0px; width:60px;font-size:11px; text-align:center;height:auto;">
		  <?php echo $statusfbio;
		  
		  
		  
		  
		  ?>  </div>
		 
		    </div>
		 
		
		
		 
		 
		 </div>
		 <?php }

	 ?>
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 <div style="float:left; width:653px; height:auto; color:#000;font-weight:normal;">
		 
		 <?php

$qry = mysql_query("select  (c101+c102) as total
from resit where  matricule='$mats'  and sex='1' and db1='$pt' "); 
$row = mysql_fetch_assoc($qry); 
$smspl=$row['total'];
		  
		
 
 $mljs=$smspl;
 
if(empty($mljs)){
  $height="0px";
 }
	elseif($mljs>''){
 $height="15px";
}	
?>	
		 
		 
		 
		 
		 
			 
		 <div style="float:left; width:70px; height:<?php echo $height;?>;  ">
		 
		 
		 
		 
		 <DIV STYLE="float:left;margin-left:5px; width:70px;font-size:11px; text-align:center;height:auto;">

		    </div>
		 
		 
		 
		 
		    </div>
		 
		 
		  <div style="float:left;width:280px; height:<?php echo $height;?>; ">
		  
		  
		  
		  
		 <DIV STYLE="float:left;margin-left:5px;width:280px;font-size:11px; text-align:left;height:auto;">
<?php



$qry = mysql_query("select sum(credit) as total
from subject where department='$deptt' and year1='$level' and year2>='1' and  year2<='1'and acc='$pt' "); 
$row = mysql_fetch_assoc($qry); 
 $smspl=$row['total']; 
 



$qry = mysql_query("select sum(credit) as total
from gpas where matricule='$mats' and levels='$level' and sex='1'  and db1='$pt'"); 
$row = mysql_fetch_assoc($qry); 
$cv=$row['total']; 


  
		
 
 $mljs=$cv;
 
if(empty($mljs)){
 
 echo  $statussms=''; $height="0px";
 }
	elseif($mljs>''){
 echo  $statussms=' TOTAL CREDITS ATTEMPTED:';
 $height="15px";
}	
?>		  
	
<?php 



$mljds=$cv;

if(empty($mljds)){
 
 echo  $statussmds='';
 }
	elseif($mljds>''){
printf("%01.2f",($smspl));
}	?>

		    </div>
		 
		    </div>
			
			
			
			
			
			
			
			
		  <div style="float:left; width:60px; height:<?php echo $height;?>;  ">
		  
		  
		 <DIV STYLE="float:left;margin-left:0px; font-size:11px;width:60px; text-align:center;height:auto;">

		    </div>
		 
		    </div>
			
			
			
			
			
		 
		   <div style="float:left; width:55PX;height:<?php echo $height;?>;  ">
		 <DIV STYLE="float:left;margin-left:0px; width:55px;font-size:11px; text-align:center;height:auto;">

		    </div>
		 
		    </div>
			
			
			
			
			
			
			
			
			
			
			
			
		   <div style="float:left; width:60px; height:<?php echo $height;?>;  ">
		 <DIV STYLE="float:left;margin-left:0px; width:60px;font-size:11px; text-align:center;height:auto;">

		

		    </div>
		 
		    </div>
		 
		 
		 
		   <div style="float:left; width:60px; height:<?php echo $height;?>; ">
		 <DIV STYLE="float:left;margin-left:0px; width:60px; font-size:11px;text-align:center;height:auto;">

		    </div>
		 
		    </div>
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		   <div style="float:left; width:60px;height:<?php echo $height;?>;  ">
		 <DIV STYLE="float:left;margin-left:0px; width:60px;font-size:11px; text-align:center;height:auto;">
	  </div>
		 
		    </div>
		 
		
		
		 
		 
			 
		 <div style="float:left; width:70px; height:<?php echo $height;?>;   ">
		 
		 
		 
		 
		 <DIV STYLE="float:left;margin-left:5px; width:70px;font-size:11px; text-align:center;height:auto;">

		    </div>
		 
		 
		 
		 
		    </div>
		 
		 
		  <div style="float:left;width:280px; height:<?php echo $height;?>;  ">
		  
		  
		  
		  
		 <DIV STYLE="float:left;margin-left:5px;width:280px;font-size:11px; text-align:left;height:auto;">
<?php


$qry = mysql_query("select sum(ee) as total
from gpas where matricule='$mats' and levels='$level' and sex>='1' and  sex<='1'  and db1='$pt'"); 
$row = mysql_fetch_assoc($qry); 
$smspl=$row['total']; 
 


		  
		
 
 $mljs=$smspl;
 
if(empty($mljs)){
 
 echo  $statussms='';
 }
	elseif($mljs>''){
 echo  $statussms='  TOTAL CREDITS EARNED:';
}	
?>		  
		  
		  

<?php 




$qry = mysql_query("select sum(tm) as total
from gpas where matricule='$mats' and levels='$level' and sex>='1' and  sex<='1' and db1='$pt'"); 
$row = mysql_fetch_assoc($qry); 
 $save=$row['total']; 
 



$qry = mysql_query("select sum(credit) as total
from gpas where matricule='$mats' and levels='$level' and sex='1'  and db1='$pt'"); 
$row = mysql_fetch_assoc($qry); 
$cv=$row['total']; 



$mljds=$save;

if(empty($mljds)){
 
 echo  $statussmds='';
 }
	elseif($mljds>''){
printf("%01.2f",($save));
}	
?>

		    </div>
		 
		    </div>
			
			
			
			
			
			
			
			
		  <div style="float:left; width:60px; height:<?php echo $height;?> ">
		  
		  
		 <DIV STYLE="float:left;margin-left:0px; font-size:11px;width:60px; text-align:center;height:auto;">

		    </div>
		 
		    </div>
			
			
			
			
			
		 
		   <div style="float:left; width:55PX; height:<?php echo $height;?> ">
		 <DIV STYLE="float:left;margin-left:0px; width:55px;font-size:11px; text-align:center;height:auto;">

		    </div>
		 
		    </div>
			
			
			
			
			
			
			
			
			
			
			
			
		   <div style="float:left; width:60px;height:<?php echo $height;?> ">
		 <DIV STYLE="float:left;margin-left:0px; width:60px;font-size:11px; text-align:center;height:auto;">

		

		    </div>
		 
		    </div>
		 
		 
		 
		   <div style="float:left; width:60px;height:<?php echo $height;?> ">
		 <DIV STYLE="float:left;margin-left:0px; width:60px; font-size:11px;text-align:center;height:auto;">

		    </div>
		 
		    </div>
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		   <div style="float:left; width:60px; height:<?php echo $height;?> ">
		 <DIV STYLE="float:left;margin-left:0px; width:60px;font-size:11px; text-align:center;height:auto;">
	  </div>
		 
		    </div>
		 
		
		
		
		
		
		
		
		
		
		
		
		
		
			 
	
		 
		 
		  <div style="float:left;width:280px;height:<?php echo $height;?> ">
		  
		  
		  
		  
		 <DIV STYLE="float:left;margin-left:5px;width:280px;font-size:11px; text-align:left;height:auto;">


<?php



$qry = mysql_query("select sum(credit) as total
from gpas where matricule='$mats' and levels='$level' and sex>='1' and  sex<='1' and db1='$pt' "); 
$row = mysql_fetch_assoc($qry); 
 $smspl=$row['total']; 
 



$qry = mysql_query("select sum(credit) as total
from subject where department='$deptt' and year1='$level' and year2='1' and acc='$pt'"); 
$row = mysql_fetch_assoc($qry); 
$cv=$row['total']; 


 
 $mljs=$smspl;
 
if(empty($mljs)){
 
 echo  $statussms='';
 }
	elseif($mljs>''){
 echo  $statussms='  GPA CREDITS ATTEMPTED:';
}	
?>	
 <?php 


$mljds=$smspl;

if(empty($mljds)){
 
 echo  $statussmds='';
 }
	elseif($mljds>''){
printf("%01.2f",($cv));
}	
?>
		    </div>
		 
		    </div>
			
			
			
			
			
			
			
			
		  <div style="float:left; width:60px; height:<?php echo $height;?>; ">
		  
		  
		 <DIV STYLE="float:left;margin-left:0px; font-size:11px;width:60px; text-align:center;height:auto;">

		    </div>
		 
		    </div>
			
			
			
			
			
		 
		   <div style="float:left; width:55PX;height:<?php echo $height;?>; ">
		 <DIV STYLE="float:left;margin-left:0px; width:55px;font-size:11px; text-align:center;height:auto;">

		    </div>
		 
		    </div>
			
			
			
			
			
			
			
			
			
			
			
			
		   <div style="float:left; width:60px; height:<?php echo $height;?>; ">
		 <DIV STYLE="float:left;margin-left:0px; width:60px;font-size:11px; text-align:center;height:auto;">

		

		    </div>
		 
		    </div>
		 
		 
		 
		   <div style="float:left; width:60px;height:<?php echo $height;?>; ">
		 <DIV STYLE="float:left;margin-left:0px; width:60px; font-size:11px;text-align:center;height:auto;">

		    </div>
		 
		    </div>
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		   <div style="float:left; width:60px; height:<?php echo $height;?>; ">
		 <DIV STYLE="float:left;margin-left:0px; width:60px;font-size:11px; text-align:center;height:auto;">
	  </div>
		 
		    </div>
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
			 
		 <div style="float:left; width:70px;height:<?php echo $height;?>;  ">
		 
		 
		 
		 
		 <DIV STYLE="float:left;margin-left:5px; width:70px;font-size:11px; text-align:center;height:auto;">

		    </div>
		 
		 
		 
		 
		    </div>
		 
		 
		  <div style="float:left;width:280px; height:15px; ">
		  
		  
		  
		  
		 <DIV STYLE="float:left;margin-left:5px;width:280px;font-size:11px; text-align:left;height:auto;">
<?php

$qry = mysql_query("select  (c101+c102) as total
from resit where  matricule='$mats'  and sex='1' and db1='$pt' "); 
$row = mysql_fetch_assoc($qry); 
$smspl=$row['total'];
		  
		
 
 $mljs=$smspl;
 
if(empty($mljs)){
 
 echo  $statussms='';
 }
	elseif($mljs>''){
 echo  $statussms=' GPA CREDITS EANRED:';
}	
?>

 <?php 



$qry = mysql_query("select sum(c103) as total
from resit where matricule='$mats' and departmet='$deptt'and levels='$level' and sex='1' and db1='$pt'  "); 
$row = mysql_fetch_assoc($qry); 
 $saves=$row['total']; 
 $gpacredit1=$saves;



$qry = mysql_query("select sum(c103) as total
from resit where matricule='$mats' and departmet='$deptt'and levels='$level' and sex='1' and db1='$pt'  "); 
$row = mysql_fetch_assoc($qry); 
$savetttty=$row['total'];
 $gpacredit11=$savetttty;

$qry = mysql_query("select * FROM  resit where matricule='$mats' and departmet='$deptt'and levels='$level' and sex='1' and db1='$pt'  "); 
$num_rows=mysql_num_rows($qry);
  $richooTTTyss=$num_rows; 
$gpacourses1=$richooTTTyss;



$mljds=$smspl;

if(empty($mljds)){
 
 echo  $statussmds='';
 }
	elseif($mljds>''){
printf("%01.2f",($saves));
}	



?>
		    </div>
		 
		    </div>
			
			
			
			
			
			
			
			
		  <div style="float:left; width:60px; height:15px; ">
		  
		  
		 <DIV STYLE="float:left;margin-left:0px; font-size:11px;width:60px; text-align:center;height:auto;">

		    </div>
		 
		    </div>
			
			
			
			
			
		 
		   <div style="float:left; width:55PX; height:15px; ">
		 <DIV STYLE="float:left;margin-left:0px; width:55px;font-size:11px; text-align:center;height:auto;">

		    </div>
		 
		    </div>
			
			
			
			
			
			
			
			
			
			
			
			
		   <div style="float:left; width:60px; height:15px; ">
		 <DIV STYLE="float:left;margin-left:0px; width:60px;font-size:11px; text-align:center;height:auto;">

		

		    </div>
		 
		    </div>
		 
		 
		 
		   <div style="float:left; width:60px; height:15px; ">
		 <DIV STYLE="float:left;margin-left:0px; width:60px; font-size:11px;text-align:center;height:auto;">

		    </div>
		 
		    </div>
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		   <div style="float:left; width:60px; height:15px; ">
		 <DIV STYLE="float:left;margin-left:0px; width:60px;font-size:11px; text-align:center;height:auto;">
	  </div>
		 
		    </div>
		 
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
			 
			 
		 
	
		 
		 
		  <div style="float:left;width:280px; height:15px; ">
		  
		  
		  
		  
		 <DIV STYLE="float:left;margin-left:10px;width:280px;font-size:11px; text-align:left;height:auto;">
<?php

$qry = mysql_query("select  (c101+c102) as total
from resit where  matricule='$mats'  and sex='1' and db1='$pt' "); 
$row = mysql_fetch_assoc($qry); 
$smspl=$row['total'];
		  
		
 
 $mljs=$smspl;
 
if(empty($mljs)){
 
 echo  $statussms='';
 }
	elseif($mljs>''){
 echo  $statussms=' SEMESTER GPA:';
}	
?> <?php 

$qry = mysql_query("select sum(c103*c104) as total
from resit where matricule='$mats' and levels='$level' and sex>='1' and  sex<='1' and db1='$pt' "); 
$row = mysql_fetch_assoc($qry); 
 $smspl=$row['total']; 
 



$qry = mysql_query("select sum(c104) as total
from resit where matricule='$mats' and levels='$level' and sex='1' and db1='$pt'"); 
$row = mysql_fetch_assoc($qry); 
$cv=$row['total']; 


  
 $mxc111yt=$smspl; 
  
if(empty($mxc111yt)){
 echo  $statusfbiooput="";
  }
  elseif($mxc111yt>'' ){
 printf("%01.2f",($smspl/$cv));
}?>
		    </div>
		 
		    </div>
			
			
			
			
			
			
			
			
		  <div style="float:left; width:60px; height:15px; ">
		  
		  
		 <DIV STYLE="float:left;margin-left:0px; font-size:11px;width:60px; text-align:center;height:auto;">

		    </div>
		 
		    </div>
			
			
			
			
			
		 
		   <div style="float:left; width:55PX; height:15px; ">
		 <DIV STYLE="float:left;margin-left:0px; width:55px;font-size:11px; text-align:center;height:auto;">

		    </div>
		 
		    </div>
			
			
			
			
			
			
			
			
			
			
			
			
		   <div style="float:left; width:60px; height:15px; ">
		 <DIV STYLE="float:left;margin-left:0px; width:60px;font-size:11px; text-align:center;height:auto;">

		

		    </div>
		 
		    </div>
		 
		 
		 
		   <div style="float:left; width:60px; height:15px; ">
		 <DIV STYLE="float:left;margin-left:0px; width:60px; font-size:11px;text-align:center;height:auto;">

		    </div>
		 
		    </div>
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		   <div style="float:left; width:60px; height:15px; ">
		 <DIV STYLE="float:left;margin-left:0px; width:60px;font-size:11px; text-align:center;height:auto;">
	  </div>
		 
		    </div>
		 
		
		
		
		
		<?php } ?>
		 

		 
		
		
		
		

		 <div style="float:left; width:653px; height:auto; color:#000;font-weight:normal;">
		 	
<?php




$form=$_POST["form"];
$query="select * from courses where  matricule='$mats'  order by matricule ASC
";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
 

		  ?><?php $pt=$row["db1"];?>
		  <?php

$qry = mysql_query("select  (c101+c102) as total
from resit where  matricule='$mats'  and sex='3' and db1='$pt' "); 
$row = mysql_fetch_assoc($qry); 
 $smspl=$row['total'];
		  
		
 
 $mljs=$smspl;
 
if(empty($mljs)){
 
 echo  $statussms='';
 }
	elseif($mljs>''){
 echo  $statussms=" <b style='float:left; font-weight:bold; font-size:11px; margin-left:24px;font-family:arial;letter-spacing:2px;'>Resit Semester: $pt</b>";
}	
?> 
		  
		  
		
				<?php 


$query = mysql_query("select  * from resit where db1='$pt' and matricule='$mats' and departmet='$deptt' and sex='3' and (c101+c102)>'' and levels='$level'order by fname ASC"); 

		 while ($row = mysql_fetch_array($query)) {
		 
		 
		 
		 
		 
		 ?>
		 
		
		 <div style="float:left; width:653px; height:15px; color:#000;font-weight:normal;">
		 
	 
				 
				 
			
		 <div style="float:left; width:70px; height:15px; border-left:1px solid #000; ">
		 
		 
		 
		 
		 <DIV STYLE="float:left;margin-left:5px; width:70px;font-size:11px; text-align:center;height:auto;">
<?php echo $courseps=$row['fname'];
		
		
		$exam=$row['c102'];
		
		$cas=$row['c101'];?>
		    </div>
		 
		 
		 
		 
		    </div>
		 
		 
		  <div style="float:left;width:280px; height:15px; ">
		  
		  
		  
		  
		 <DIV STYLE="float:left;margin-left:10px;width:280px;font-size:11px; text-align:left;height:auto;">
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
		    </div>
		 
		    </div>
			
			
			
			
			
			
			
			
		  <div style="float:left; width:60px; height:15px; ">
		  
		  
		 <DIV STYLE="float:left;margin-left:0px; font-size:11px;width:60px; text-align:center;height:auto;">
<?php echo $status;?>
		    </div>
		 
		    </div>
			
			
			
			
			
		 
		   <div style="float:left; width:55PX; height:15px; ">
		 <DIV STYLE="float:left;margin-left:0px; width:55px;font-size:11px; text-align:center;height:auto;">
<?php echo $richooTTTy;?>
		    </div>
		 
		    </div>
			
			
			
			
			
			
			
			
			
			
			
			
		   <div style="float:left; width:60px; height:15px; ">
		 <DIV STYLE="float:left;margin-left:0px; width:60px;font-size:11px; text-align:center;height:auto;">

<?php $ns=
($exam+$cas); 


 $mxc11=$ns;
 
  $mxc11=$ns;
    
if(empty($mxc11)){
 $colorf1bio="yellow";
 $statusfbio="";}
elseif($mxc11>=$rangx1 && $mxc11<=$rangx2 ){
 $colorf1bio="#FF0000";
 $statusfbio="F";
 echo'<div style=" color:'. $colorf1bio.';">'.$statusfbio.'</div>';
}else if(($mxc11 >=$rangx3) && ($mxc11<=$rangx4)){
 $colorf1bio="#ff6666";
 $statusfbio="D";
 echo'<div style=" color:'. $colorf1bio.';">'.$statusfbio.'</div>';}else if(($mxc11 >=$rangx5) && ($mxc11<=$rangx6)){
 $colorf1bio="#ff6666";
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










 $qry = mysql_query("select year2 as total
from subject where subject='$courseps' and  department='$deptt'  and year1='$level' and acc='$pt'"); 
$row = mysql_fetch_assoc($qry); 
 $sex=$row['total']; 


$qry = mysql_query("select  SUM(c101+c102) as total
from 
resit where matricule='$mats' and levels='$level' and  db1='$pt'  and sex='$sex' and fname='$courseps'  and c101>''and c102>''
"); 
$row = mysql_fetch_assoc($qry); 

 $ns=$row['total']; 

 


$qry = mysql_query("select  SUM(c101+c102) as total
from 
resit where matricule='$mats' and departmet='$deptt'and levels='$level' and sex='3' and db1='$pt'  and fname='$courseps'  and c101>''and c102>''
"); 
$row = mysql_fetch_assoc($qry); 

 $resit=$row['total']; 



 ?>
		

		    </div>
		 
		    </div>
		 
		 
		 
		   <div style="float:left; width:60px; height:15px; ">
		 <DIV STYLE="float:left;margin-left:0px; width:60px; font-size:11px;text-align:center;height:auto;">
<?php echo $richooTTTy;?>
		    </div>
		 
		    </div>
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		   <div style="float:left; width:60px; height:15px; ">
		 <DIV STYLE="float:left;margin-left:0px; width:60px;font-size:11px; text-align:center;height:auto;">
		  <?php echo $statusfbio;?>  </div>
		 
		    </div>
		 
		
		
		 
		 
		 </div>
		 <?php } ?>
		 


		 <div style="float:left; width:70px; height:15px; border-left:1px solid #000; ">
		 
		 
		 
		 
		 <DIV STYLE="float:left;margin-left:5px; width:70px;font-size:11px; text-align:center;height:auto;">

		    </div>
		 
		 
		 
		 
		    </div>
		 
		 
		  <div style="float:left;width:280px; height:15px; ">
		  
		  
		  
		  
		 <DIV STYLE="float:left;margin-left:10px;width:280px;font-size:11px; text-align:left;height:auto;">
   </div>
		 
		    </div>
			
			
			
			
			
			
			
			
		  <div style="float:left; width:60px; height:15px; ">
		  
		  
		 <DIV STYLE="float:left;margin-left:0px; font-size:11px;width:60px; text-align:center;height:auto;">

		    </div>
		 
		    </div>
			
			
			
			
			
		 
		   <div style="float:left; width:55PX; height:15px; ">
		 <DIV STYLE="float:left;margin-left:0px; width:55px;font-size:11px; text-align:center;height:auto;">

		    </div>
		 
		    </div>
			
			
			
			
			
			
			
			
			
			
			
			
		   <div style="float:left; width:60px; height:15px; ">
		 <DIV STYLE="float:left;margin-left:0px; width:60px;font-size:11px; text-align:center;height:auto;">

		

		    </div>
		 
		    </div>
		 
		 
		 
		   <div style="float:left; width:60px; height:15px; ">
		 <DIV STYLE="float:left;margin-left:0px; width:60px; font-size:11px;text-align:center;height:auto;">

		    </div>
		 
		    </div>
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		   <div style="float:left; width:60px; height:15px; ">
		 <DIV STYLE="float:left;margin-left:0px; width:60px;font-size:11px; text-align:center;height:auto;">
	  </div>
		 
		    </div>
		 
		
		
		 



















		 

		 










	
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		 </div>
		
		
		
		
		
		
		
		
		
		
		
		
		
		 <?php } ?>
		 
		 
		
		
		
		
		
		
		
		
		
		
		
		
		
		 </div>
		 
		 	 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 </div>
		 
		 
		 
		 
	


















	

		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 		 <div style="float:left; width:653px; height:auto; color:#000;font-weight:normal;"><?php




$form=$_POST["form"];
$query="select * from courses where  matricule='$mats'  order by matricule ASC
";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
 

		  ?><?php $pt=$row["db1"];?>
		  	  <?php

$qry = mysql_query("select  SUM(c101+c102) as total
from resit where  matricule='$mats'  and sex='2' and db1='$pt' "); 
$row = mysql_fetch_assoc($qry); 
 $smspl=$row['total'];
		  
		
 
 $mljs=$smspl;
 
if(empty($mljs)){
 
 echo  $statussms='';
 $color="#fff";
 }
	elseif($mljs>''){
 echo  $statussms=" <b style='float:left; font-weight:bold; font-size:11px; margin-left:24px;font-family:arial;letter-spacing:2px;'>Second Semester : $pt</b>";
 $color="#000";}	
?>
					<?php 




$query = mysql_query("select  * 









 



from resit where matricule='$mats' and departmet='$deptt'and levels='$level' and sex='2' and db1='$pt' and (c101+c102)>'' order by fname ASC"); 

		 while ($row = mysql_fetch_array($query)) {
		 
		 
		 
		 
		 
		 ?>
		 
		
		 <div style="float:left; width:653px; height:15px; color:#000;font-weight:normal;">
		 
	 
				 
				 
			
		 <div style="float:left; width:70px; height:15px;  ">
		 
		 
		 
		 
		 <DIV STYLE="float:left;margin-left:5px; width:70px;font-size:11px; text-align:center;height:auto;">
<?php echo $courseps=$row['fname'];
		
$qry = mysql_query("select  db1 as total
from 
subject where department='$deptt'and year1='$level' and year2='2' and acc='$pt'  and subject='$courseps'  
"); 
$row = mysql_fetch_assoc($qry); 

$richooTTT=$row['total']; 

	
$qry = mysql_query("select credit as total
from 
subject where department='$deptt'and year1='$level' and year2='2' and acc='$pt'  and subject='$courseps'  
"); 
$row = mysql_fetch_assoc($qry); 

$richooTTTy=$row['total']; 

$qry = mysql_query("select status as total
from 
subject where department='$deptt'and year1='$level' and year2='2' and acc='$pt'  and subject='$courseps'  
"); 
$row = mysql_fetch_assoc($qry); 

$status=$row['total']; 





		?>
		   
		    </div>
		 
		 
		 
		 
		    </div>
		 
		 
		  <div style="float:left;width:280px; height:15px; ">
		  
		  
		  
		  
		 <DIV STYLE="float:left;margin-left:10px;width:280px;font-size:11px; text-align:left;height:auto;">
<?php 
echo $richooTTT; 

$qry = mysql_query("select  c101 as total
from 
resit where matricule='$mats' and departmet='$deptt'and levels='$level' and sex='2' and db1='$pt'  and fname='$courseps'  and c101>''
"); 
$row = mysql_fetch_assoc($qry); 

$cas=$row['total']; 


$qrys = mysql_query("select  c102 as total from
resit where matricule='$mats' and departmet='$deptt'and levels='$level' and sex='2' and db1='$pt'  and fname='$courseps'  and c102>''"); 
$row = mysql_fetch_assoc($qrys); 
$exam=$row['total'];



$qry = mysql_query("select  SUM(c101+c102) as total
from 
resit where matricule='$mats' and departmet='$deptt'and levels='$level' and sex='2' and db1='$pt'  and fname='$courseps'  
"); 
$row = mysql_fetch_assoc($qry); 

$ns=$row['total']; 


$qry = mysql_query("select  SUM(c101+c102) as total
from 
resit where matricule='$mats' and departmet='$deptt'and levels='$level' and sex='3' and db1='$pt'  and fname='$courseps' and c102>''
"); 
$row = mysql_fetch_assoc($qry); 

$smps=$row['total']; 


?>
		    </div>
		 
		    </div>
			
			
			
			
			
			
			
			
		  <div style="float:left; width:60px; height:15px; ">
		  
		  
		 <DIV STYLE="float:left;margin-left:0px; font-size:11px;width:60px; text-align:center;height:auto;">
<?php echo $status;?>
		    </div>
		 
		    </div>
			
			
			
			
			
		 
		   <div style="float:left; width:55PX; height:15px; ">
		 <DIV STYLE="float:left;margin-left:0px; width:55px;font-size:11px; text-align:center;height:auto;">
<?php echo $richooTTTy;?>
		    </div>
		 
		    </div>
			
			
			
			
			
			
			
			
			
			
			
			
		   <div style="float:left; width:60px; height:15px; ">
		 <DIV STYLE="float:left;margin-left:0px; width:60px;font-size:11px; text-align:center;height:auto;">

<?php 
  $smsp=$smps;
 $smspp=$ns;
 $mjs=$ns;
 
if(empty($mjs)){
 
  $statussms='';
 }
elseif($mjs<$smspp && $smspp>$mjs && $mjs<50){
  $statussmsp='';
  $statussms=(($smspp));
}
 elseif($mjs>$smspp && $smspp<$mjs && $mjs<50){

  $statussms=(($ns));
   $statussmsp='';
}
 elseif($mjs>$smspp && $smspp<$mjs && $mjs>=50){

  $statussms='';
   $statussmsp=(($ns));
}

 
    $mjss=$statussms;
if(empty($mjss)){
 $statussmss=$statussmsp;}
 
elseif( $mjss>$mjs && $mjs<50 && $smspp>=50){

  $statussmss=(($ns+$smspp)/2);
}

elseif( $mjss>$mjs && $mjs<50 && $smspp<50){

  $statussmss=$statussmsp;
}







 
 
 


 
  $mjssss=$statussmss;
if(empty($mjssss)){
 $statussmsjs='';}
elseif($mjssss<50){

  $statussmsjs=50;
  
}
 elseif($mjssss>=50){

  $statussmsjs=$mjssss;
  
}
 
 
 
 
 
 
  $mjsssvv=$statussmsjs;
if(empty($mjsssvv)){
 
  $statussmsssv="";
  
  }
 
elseif($mjsssvv<50){

  $statussmsssv=$statussmsjs;
}
  
elseif($mjsssvv>=50){

  $statussmsssv=$statussmss;
}


 
 
$mxc11=$ns;
  
  $mxc11=$ns;
    
if(empty($mxc11)){
 $colorf1bio="yellow";
 $statusfbio="";}
elseif($mxc11>=$rangx1 && $mxc11<=$rangx2 ){
 $colorf1bio="#FF0000";
 $statusfbio="F";
 echo'<div style=" color:'. $colorf1bio.';">'.$statusfbio.'</div>';
}else if(($mxc11 >=$rangx3) && ($mxc11<=$rangx4)){
 $colorf1bio="#ff6666";
 $statusfbio="D";
 echo'<div style=" color:'. $colorf1bio.';">'.$statusfbio.'</div>';}else if(($mxc11 >=$rangx5) && ($mxc11<=$rangx6)){
 $colorf1bio="#ff6666";
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
 
 //grading second semester
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

 $mxc11=$mjsssvv;
if(empty($mxc11)){
 $colorf1bio="yellow";
 $statusfbiobio="";}
elseif($mxc11>=$rangx1 && $mxc11<=$rangx2 ){
 $colorf1bio="#FF0000";
 $statusfbiobio=$gpa1; ;
}else if(($mxc11 >=$rangx3) && ($mxc11<=$rangx4)){
 $colorf1bio="blue";
 $statusfbiobio=$gpa2; ;}
 
 else if(($mxc11 >=$rangx5) && ($mxc11<=$rangx6)){
 $colorf1bio="blue";
 $statusfbiobio=$gpa3; }
 
 
else if(($mxc11 >=$rangx7) && ($mxc11<=$rangx8)){
 $colorf1bio="blue";
 $statusfbiobio=$gpa4; }
 
 
 else if(($mxc11 >=$rangx9) && ($mxc11<=$rangx10)){
 $colorf1bio="blue"; $statusfbiobio=$gpa5; 
} 
 
 
 
 else if(($mxc11 >=$rangx11) && ($mxc11<=$rangx12)){
 $colorf1bio="blue"; $statusfbiobio=$gpa6; 
} 
 
  else if(($mxc11 >=$rangx10) && ($mxc11<=$rangx14)){
 $colorf1bio="blue"; $statusfbiobio=$gpa7; 
} 
 
 
  else if(($mxc11 >=$rangx15) && ($mxc11<=$rangx16)){
 $colorf1bio="blue"; $statusfbiobio=$gpa8; 
} 

 $cc=($statusfbio*$richooTTTy);


 $savepsts=$ns; 

 
 
 
 
 
 
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
 
 
 
 
 $qry = mysql_query("select code as total
from gpas where matricule='$mats' 
  and code='$courseps' "); 
$row = mysql_fetch_assoc($qry); 
  $bn=$row['total']; 
 

if(empty($bn)){



 
$query4="insert into gpas  set  matricule='$mats',credit='$richooTTTy',levels='$level',db1='$pt'
 ,gpav='$statusfbiogff',code='$courseps',sex='2' ,cc='$tks' ,tm='$cc',mark='$ns',x='$statusfbio',ee='$ee'";







mysql_query ($query4) or die ('could not updated:'.mysql_error());
 
 
 
 
 
 
 
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

 
 $statusfbiogff;
 
 
 
 
 
 $xaf=($tm*$statusfbiogff);
 

 $cc=($statusfbiogff*$richooTTTy);
 
 
 
 
 
 
 
 
 
 ?>
		

		    </div>
		 
		    </div>
		 
		 
		 
		   <div style="float:left; width:60px; height:15px; ">
		 <DIV STYLE="float:left;margin-left:0px; width:60px; font-size:11px;text-align:center;height:auto;">
<?php echo $richooTTTy;?>
		    </div>
		 
		    </div>
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		   <div style="float:left; width:60px; height:15px; ">
		 <DIV STYLE="float:left;margin-left:0px; width:60px;font-size:11px; text-align:center;height:auto;">
		  <?php echo $statusfbio;?>  </div>
		 
		    </div>
		 
		
		
		 
		 
		 <?php }

		 ?>
		 
	
		 <div style="float:left; width:70px; height:15px;  ">
		 
		 
		 
		 
		 <DIV STYLE="float:left;margin-left:5px; width:70px;font-size:11px; text-align:center;height:auto;">

		    </div>
		 
		 
		 
		 
		    </div>
		 
		 
		  <div style="float:left;width:280px; height:15px; ">
		  
		  
		  
		  
		 <DIV STYLE="float:left;margin-left:10px;width:280px;font-size:11px; text-align:left;height:auto;">
   </div>
		 
		    </div>
			
			
			
			
			
			
			
			
		  <div style="float:left; width:60px; height:15px; ">
		  
		  
		 <DIV STYLE="float:left;margin-left:0px; font-size:11px;width:60px; text-align:center;height:auto;">

		    </div>
		 
		    </div>
			
			
			
			
			
		 
		   <div style="float:left; width:55PX; height:15px; ">
		 <DIV STYLE="float:left;margin-left:0px; width:55px;font-size:11px; text-align:center;height:auto;">

		    </div>
		 
		    </div>
			
			
			
			
			
			
			
			
			
			
			
			
		   <div style="float:left; width:60px; height:15px; ">
		 <DIV STYLE="float:left;margin-left:0px; width:60px;font-size:11px; text-align:center;height:auto;">

		

		    </div>
		 
		    </div>
		 
		 
		 
		   <div style="float:left; width:60px; height:15px; ">
		 <DIV STYLE="float:left;margin-left:0px; width:60px; font-size:11px;text-align:center;height:auto;">

		    </div>
		 
		    </div>
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		   <div style="float:left; width:60px; height:15px; ">
		 <DIV STYLE="float:left;margin-left:0px; width:60px;font-size:11px; text-align:center;height:auto;">
	  </div>
		 
		    </div>
		 
		<?php

$qry = mysql_query("select  sum(c101+c102) as total
from resit where  matricule='$mats'  and sex='2' and db1='$pt' "); 
$row = mysql_fetch_assoc($qry); 
 $smspl=$row['total'];
		  
		
 
 $mljs=$smspl;
 
if(empty($mljs)){
 
 $height='0px';
 }
	elseif($mljs>''){
	 $height='15px';
}	
?>
		
		 <div style="float:left; width:70px; height:<?php echo $height;?>;  ">
		 
		 
		 
		 
		 <DIV STYLE="float:left;margin-left:5px; width:70px;font-size:11px; text-align:center;height:auto;">

		    </div>
		 
		 
		 
		 
		    </div>
		 
		 
		  <div style="float:left;width:280px; height:<?php echo $height;?>; ">
		  
		  
		  
		  
		 <DIV STYLE="float:left;margin-left:5px;width:280px;font-size:11px; text-align:left;height:auto;">
		  	  <?php

			  
			  
$qry = mysql_query("select sum(credit) as total
from subject where department='$deptt' and year1='$level' and year2>='1' and  year2<='1'and acc='$pt' "); 
$row = mysql_fetch_assoc($qry); 
 $cf=$row['total']; 
 


$qry = mysql_query("select  sum(c101+c102) as total
from resit where  matricule='$mats'  and sex='2' and db1='$pt' "); 
$row = mysql_fetch_assoc($qry); 
 $smspl=$row['total'];
		  
		
 
 $mljs=$smspl;
 
if(empty($mljs)){
 
 echo  $statussms='';
 }
	elseif($mljs>''){
 echo  $statussms="TOTAL CREDITS ATTEMPTED: ";
}	
?>
<?php 



$qry = mysql_query("select sum(c104) as total
from resit where matricule='$mats' and departmet='$deptt'and levels='$level' and sex='2' and db1='$pt'  "); 
$row = mysql_fetch_assoc($qry); 
 $save=$row['total']; 
 



$qry = mysql_query("select * FROM  resit where matricule='$mats' and departmet='$deptt'and levels='$level' and sex='2' and db1='$pt'  "); 
$num_rows=mysql_num_rows($qry);
  $richooTTTyss=$num_rows; 


 $mljst1=$save;
 
if(empty($mljst1)){
 
 echo  $statussms='';
 }
	elseif($mljst1>''){
printf("%01.2f",($cf));
}	

?>

		    </div>
		 
		    </div>
			
			
			
			
			
			
			
			
		  <div style="float:left; width:60px; height:<?php echo $height;?>; ">
		  
		  
		 <DIV STYLE="float:left;margin-left:0px; font-size:11px;width:60px; text-align:center;height:auto;">

		    </div>
		 
		    </div>
			
			
			
			
			
		 
		   <div style="float:left; width:55PX; height:<?php echo $height;?>; ">
		 <DIV STYLE="float:left;margin-left:0px; width:55px;font-size:11px; text-align:center;height:auto;">

		    </div>
		 
		    </div>
			
			
			
			
			
			
			
			
			
			
			
			
		   <div style="float:left; width:60px; height:<?php echo $height;?>; ">
		 <DIV STYLE="float:left;margin-left:0px; width:60px;font-size:11px; text-align:center;height:auto;">

		

		    </div>
		 
		    </div>
		 
		 
		 
		   <div style="float:left; width:60px; height:<?php echo $height;?>; ">
		 <DIV STYLE="float:left;margin-left:0px; width:60px; font-size:11px;text-align:center;height:auto;">

		    </div>
		 
		    </div>
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		   <div style="float:left; width:60px; height:<?php echo $height;?>; ">
		 <DIV STYLE="float:left;margin-left:0px; width:60px;font-size:11px; text-align:center;height:auto;">
	  </div>
		 
		    </div>
		 
		
		
		 
		 
			 
		 <div style="float:left; width:70px; height:<?php echo $height;?>;  ">
		 
		 
		 
		 
		 <DIV STYLE="float:left;margin-left:5px; width:70px;font-size:11px; text-align:center;height:auto;">

		    </div>
		 
		 
		 
		 
		    </div>
		 
		 
		  <div style="float:left;width:280px; height:<?php echo $height;?>; ">
		  
		  
		  
		  
		 <DIV STYLE="float:left;margin-left:5px;width:280px;font-size:11px; text-align:left;height:auto;">
		  	  <?php

$qry = mysql_query("select  sum(c101+c102) as total
from resit where  matricule='$mats'  and sex='2' and db1='$pt' "); 
$row = mysql_fetch_assoc($qry); 
 $smspl=$row['total'];
		  
		
 
 $mljs=$smspl;
 
if(empty($mljs)){
 
 echo  $statussms='';
 }
	elseif($mljs>''){
 echo  $statussms="TOTAL CREDITS EARNED: ";
}	
?>

<?php 


$qry = mysql_query("select sum(tm) as total
from gpas where matricule='$mats' and levels='$level' and sex>='2' and  sex<='2' and db1='$pt' "); 
$row = mysql_fetch_assoc($qry); 
$save=$row['total']; 
 



$qry = mysql_query("select sum(credit) as total
from gpas where matricule='$mats' and levels='$level' and sex='2'  and db1='$pt' "); 
$row = mysql_fetch_assoc($qry); 
$cv=$row['total']; 
 

 $mljst1=$save;
 
if(empty($mljst1)){
 
 echo  $statussms='';
 }
	elseif($mljst1>''){
printf("%01.2f",($save));
}	
?>

		    </div>
		 
		    </div>
			
			
			
			
			
			
			
			
		  <div style="float:left; width:60px; height:<?php echo $height;?>; ">
		  
		  
		 <DIV STYLE="float:left;margin-left:0px; font-size:11px;width:60px; text-align:center;height:auto;">

		    </div>
		 
		    </div>
			
			
			
			
			
		 
		   <div style="float:left; width:55PX; height:<?php echo $height;?>; ">
		 <DIV STYLE="float:left;margin-left:0px; width:55px;font-size:11px; text-align:center;height:auto;">

		    </div>
		 
		    </div>
			
			
			
			
			
			
			
			
			
			
			
			
		   <div style="float:left; width:60px; height:<?php echo $height;?>; ">
		 <DIV STYLE="float:left;margin-left:0px; width:60px;font-size:11px; text-align:center;height:auto;">

		

		    </div>
		 
		    </div>
		 
		 
		 
		   <div style="float:left; width:60px; height:<?php echo $height;?>; ">
		 <DIV STYLE="float:left;margin-left:0px; width:60px; font-size:11px;text-align:center;height:auto;">

		    </div>
		 
		    </div>
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		   <div style="float:left; width:60px; height:<?php echo $height;?>; ">
		 <DIV STYLE="float:left;margin-left:0px; width:60px;font-size:11px; text-align:center;height:auto;">
	  </div>
		 
		    </div>
		 
		
		
		
		
		
		
		
		
		
		
		
		
		
		 
		 
		  <div style="float:left;width:280px; height:<?php echo $height;?>; ">
		  
		  
		  
		  
		 <DIV STYLE="float:left;margin-left:5px;width:280px;font-size:11px; text-align:left;height:auto;">

  	  <?php

$qry = mysql_query("select sum(credit) as total
from subject where department='$deptt' and year1='$level' and year2>='1' and  year2<='1'and acc='$pt' "); 
$row = mysql_fetch_assoc($qry); 
 $cf=$row['total']; 
 


$qry = mysql_query("select  sum(c101+c102) as total
from resit where  matricule='$mats'  and sex='2' and db1='$pt' "); 
$row = mysql_fetch_assoc($qry); 
 $smspl=$row['total'];
		  
		
 
 $mljs=$smspl;
 
if(empty($mljs)){
 
 echo  $statussms='';
 }
	elseif($mljs>''){
 echo  $statussms="GPA CREDITS ATTEMPTED:  ";
}	
?>


<?php 


$qry = mysql_query("select sum(credit) as total
from gpas where matricule='$mats' and levels='$level' and sex>='2' and  sex<='2' and db1='$pt' "); 
$row = mysql_fetch_assoc($qry); 
$sav=$row['total']; 
 

 



$gpacourses2=$sav;
 $mljst1=$sav;
 
if(empty($mljst1)){
 
 echo  $statussms='';
 }
	elseif($mljst1>''){
printf("%01.2f",($cf));
}	?>
		    </div>
		 
		    </div>
			
			
			
			
			
			
			
			
		  <div style="float:left; width:60px; height:<?php echo $height;?>; ">
		  
		  
		 <DIV STYLE="float:left;margin-left:0px; font-size:11px;width:60px; text-align:center;height:auto;">

		    </div>
		 
		    </div>
			
			
			
			
			
		 
		   <div style="float:left; width:55PX; height:<?php echo $height;?>; ">
		 <DIV STYLE="float:left;margin-left:0px; width:55px;font-size:11px; text-align:center;height:auto;">

		    </div>
		 
		    </div>
			
			
			
			
			
			
			
			
			
			
			
			
		   <div style="float:left; width:60px; height:<?php echo $height;?>; ">
		 <DIV STYLE="float:left;margin-left:0px; width:60px;font-size:11px; text-align:center;height:auto;">

		

		    </div>
		 
		    </div>
		 
		 
		 
		   <div style="float:left; width:60px; height:<?php echo $height;?>; ">
		 <DIV STYLE="float:left;margin-left:0px; width:60px; font-size:11px;text-align:center;height:auto;">

		    </div>
		 
		    </div>
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		   <div style="float:left; width:60px; height:<?php echo $height;?>; ">
		 <DIV STYLE="float:left;margin-left:0px; width:60px;font-size:11px; text-align:center;height:auto;">
	  </div>
		 
		    </div>
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		  <div style="float:left;width:280px; height:<?php echo $height;?>; ">
		  
		  
		  
		  
		 <DIV STYLE="float:left;margin-left:5px;width:280px;font-size:11px; text-align:left;height:auto;">

  	  <?php


$qry = mysql_query("select sum(ee) as total
from gpas where matricule='$mats' and levels='$level' and sex>='2' and  sex<='2' and db1='$pt'"); 
$row = mysql_fetch_assoc($qry); 
 $smspl=$row['total'];
 


		  
		
 
 $mljs=$smspl;
 
if(empty($mljs)){
 
 echo  $statussms='';
 }
	elseif($mljs>''){
 echo  $statussms="GPA CREDITS EANRED:   ";
}	
?>

<?php 





$qry = mysql_query("select sum(ee) as total
from gpas where matricule='$mats' and levels='$level' and sex>='2' and  sex<='2' and db1='$pt' "); 
$row = mysql_fetch_assoc($qry); 
$sav=$row['total']; 
 



$qry = mysql_query("select sum(credit) as total
from gpas where matricule='$mats' and levels='$level' and sex='2'and db1='$pt' "); 
$row = mysql_fetch_assoc($qry); 
$cv=$row['total']; 


  $richooTTTyssiuu=$num_rows; 
$gpacoursesy2= $richooTTTyssiuu;
   $mxcx=$gpacredit11+$gpacredit21;
 $mxcourses=$gpacourses1+$gpacoursesy2;
$gpacum=($mxcx/$mxcourses);

 $mljst11=$sav;
 
if(empty($mljst11)){
 
 echo  $statussmsst='';
 }
	elseif($mljst11>''){
printf("%01.3f",($sav));
}	



?>
		    </div>
		 
		    </div>
			
			
			
			
			
			
			
			
		  <div style="float:left; width:60px; height:<?php echo $height;?>; ">
		  
		  
		 <DIV STYLE="float:left;margin-left:0px; font-size:11px;width:60px; text-align:center;height:auto;">

		    </div>
		 
		    </div>
			
			
			
			
			
		 
		   <div style="float:left; width:55PX; height:<?php echo $height;?>; ">
		 <DIV STYLE="float:left;margin-left:0px; width:55px;font-size:11px; text-align:center;height:auto;">

		    </div>
		 
		    </div>
			
			
			
			
			
			
			
			
			
			
			
			
		   <div style="float:left; width:60px; height:<?php echo $height;?>; ">
		 <DIV STYLE="float:left;margin-left:0px; width:60px;font-size:11px; text-align:center;height:auto;">

		

		    </div>
		 
		    </div>
		 
		 
		 
		   <div style="float:left; width:60px; height:<?php echo $height;?>; ">
		 <DIV STYLE="float:left;margin-left:0px; width:60px; font-size:11px;text-align:center;height:auto;">

		    </div>
		 
		    </div>
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		   <div style="float:left; width:60px; height:<?php echo $height;?>; ">
		 <DIV STYLE="float:left;margin-left:0px; width:60px;font-size:11px; text-align:center;height:auto;">
	  </div>
		 
		    </div>
		 
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
			 
		 
		 
		 
		 <div style="float:left; width:70px; height:<?php echo $height;?>;  ">
		 
		 
		 
		 
		 <DIV STYLE="float:left;margin-left:5px; width:70px;font-size:11px; text-align:center;height:auto;">

		    </div>
		 
		 
		 
		 
		    </div>
		 
		 
		  <div style="float:left;width:280px; height:<?php echo $height;?>; ">
		  
		  
		  
		  
		 <DIV STYLE="float:left;margin-left:10px;width:280px;font-size:11px; text-align:left;height:auto;">

		    </div>
		 
		    </div>
			
			
			
			
			
			
			
			
		  <div style="float:left; width:60px; height:<?php echo $height;?>; ">
		  
		  
		 <DIV STYLE="float:left;margin-left:0px; font-size:11px;width:60px; text-align:center;height:auto;">

		    </div>
		 
		    </div>
			
			
			
			
			
		 
		   <div style="float:left; width:55PX; height:<?php echo $height;?>; ">
		 <DIV STYLE="float:left;margin-left:0px; width:55px;font-size:11px; text-align:center;height:auto;">

		    </div>
		 
		    </div>
			
			
			
			
			
			
			
			
			
			
			
			
		   <div style="float:left; width:60px; height:<?php echo $height;?>; ">
		 <DIV STYLE="float:left;margin-left:0px; width:60px;font-size:11px; text-align:center;height:auto;">

		

		    </div>
		 
		    </div>
		 
		 
		 
		   <div style="float:left; width:60px; height:<?php echo $height;?>; ">
		 <DIV STYLE="float:left;margin-left:0px; width:60px; font-size:11px;text-align:center;height:auto;">

		    </div>
		 
		    </div>
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		   <div style="float:left; width:60px; height:<?php echo $height;?>; ">
		 <DIV STYLE="float:left;margin-left:0px; width:60px;font-size:11px; text-align:center;height:auto;">
	  </div>
		 
		    </div>
		 
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
			 
		 
		 
		 
		  <div style="float:left;width:280px; height:<?php echo $height;?>; ">
		  
		  
		  
		  
		 <DIV STYLE="float:left;margin-left:10px;width:280px;font-size:11px; text-align:left;height:auto;">

  	  <?php

$qry = mysql_query("select  sum(c101+c102) as total
from resit where  matricule='$mats'  and sex='2' and db1='$pt' "); 
$row = mysql_fetch_assoc($qry); 
 $smspl=$row['total'];
		  
		
 
 $mljs=$smspl;
 
if(empty($mljs)){
 
 echo  $statussms='';
 }
	elseif($mljs>''){
 echo  $statussms="SEMESTER GPA:";
}	
?> <?php 




$qry = mysql_query("select sum(tm) as total
from gpas where matricule='$mats' and levels='$level' and sex>='2' and  sex<='2'and db1='$pt' "); 
$row = mysql_fetch_assoc($qry); 
$sav=$row['total']; 
 



$qry = mysql_query("select sum(credit) as total
from gpas where matricule='$mats' and levels='$level' and sex='2' and db1='$pt'"); 
$row = mysql_fetch_assoc($qry); 
$cv=$row['total']; 


  
  
 $mxc111yt=$sav; 
  
if(empty($mxc111yt)){
 echo  $statusfbiooput="";
  }
  elseif($mxc111yt>'' ){
  
 printf("%01.2f",($sav/$cv));
}

?>
		    </div>
		 
		    </div>
			
			
			
			
			
			
			
			
		  <div style="float:left; width:60px; height:<?php echo $height;?>; ">
		  
		  
		 <DIV STYLE="float:left;margin-left:0px; font-size:11px;width:60px; text-align:center;height:auto;">

		    </div>
		 
		    </div>
			
			
			
			
			
		 
		   <div style="float:left; width:55PX; height:<?php echo $height;?>; ">
		 <DIV STYLE="float:left;margin-left:0px; width:55px;font-size:11px; text-align:center;height:auto;">

		    </div>
		 
		    </div>
			
			
			
			
			
			
			
			
			
			
			
			
		   <div style="float:left; width:60px; height:<?php echo $height;?>; ">
		 <DIV STYLE="float:left;margin-left:0px; width:60px;font-size:11px; text-align:center;height:auto;">

		

		    </div>
		 
		    </div>
		 
		 
		 
		   <div style="float:left; width:60px; height:<?php echo $height;?>5px; ">
		 <DIV STYLE="float:left;margin-left:0px; width:60px; font-size:11px;text-align:center;height:auto;">

		    </div>
		 
		    </div>
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		   <div style="float:left; width:60px; height:<?php echo $height;?>; ">
		 <DIV STYLE="float:left;margin-left:0px; width:60px;font-size:11px; text-align:center;height:auto;">
	  </div>
		 
		    </div>
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		
		 
		 <?php }

		 ?>
		 
		 
		 
		 
		 
		 
		 <div style="float:left; width:70px; height:15px; ">
		 
		 
		 
		 
		 <DIV STYLE="float:left;margin-left:5px; width:70px;font-size:11px; text-align:center;height:auto;">

		    </div>
		 
		 
		 
		 
		    </div>
		 
		 
		  <div style="float:left;width:280px; height:15px; ">
		  
		  
		  
		  
		 <DIV STYLE="float:left;margin-left:10px;width:280px;font-size:11px; text-align:left;height:auto;">
		 <?php




$form=$_POST["form"];
$query="select * from courses where  matricule='$mats'  order by matricule ASC
";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
 $gpas=$row["c112"];

		  ?><?php $pt=$row["db1"];?>
		 <?php 




  ?>
		
		 
		 <?php } 
		 }?>
		 <DIV STYLE="float:left;width:280px; height:18PX; FONT-SIZE:10PX;">
		 
		<b> CUMMULATIVE TOTAL GPA CREDIT EARNED :</b> <?php 
		
		
		
$qry = mysql_query("select SUM(tm) as total
from gpas  where matricule='$mats'  "); 
$row = mysql_fetch_assoc($qry); 
echo $totals=$row['total']; 

		
$qry = mysql_query("select c112 as total
from courses  where matricule='$mats' and levels='$level' "); 
$row = mysql_fetch_assoc($qry); 
 $total=$row['total']; 
	
 $mxc11s=$total;
if(empty($mxc11s)){
  
$query4="update courses set  c112='$totals' where matricule='$mats' and levels='$level' ";

mysql_query ($query4) or die ('could not updated:'.mysql_error());	

}elseif($mxc11s>''){
	
}



		

		
  
		
		
		?>
		 
		 
		 </DIV>
		 
		 <DIV STYLE="float:left;width:280px; height:18PX;FONT-SIZE:10PX;">
		 
		<b> CUMMULATIVE TOTAL  CREDIT ATTEMPTED :</b> <?php 
		


$qry = mysql_query("select SUM(credit) as total
from gpas  where matricule='$mats' "); 
$row = mysql_fetch_assoc($qry); 
 $credit=$row['total']; 
  
  
	
  
$query4="update courses set  c113='$credit' where matricule='$mats' and levels='$level' ";

mysql_query ($query4) or die ('could not updated:'.mysql_error());	
		
  


$qry = mysql_query("select c113 as total
from courses  where matricule='$mats' and levels='$level' "); 
$row = mysql_fetch_assoc($qry); 
  $credit=$row['total']; 
  
 $mxc111ytss=$credit; 
if(empty($mxc111ytss)){

  }
    elseif($mxc111ytss<'60' ){
  
$credity=$credit;
}
  elseif($mxc111ytss>'60' ){
  
$credity="60";
}
 elseif($mxc111ytss>='60' && $mxc111yts<='60'){
  
$credity="60";
}
echo $credity;
		
		 ?>
		 </DIV>
		 
		 
		  <DIV STYLE="float:left;width:280px; height:18PX;FONT-SIZE:10PX;">
		 
		<b> CUMMULATIVE TOTAL  CREDIT EARNED :</b> <?php 
		


$qry = mysql_query("select SUM(ee) as total
from gpas  where matricule='$mats' "); 
$row = mysql_fetch_assoc($qry); 
 $cr=$row['total']; 
  
  
  
$query4="update courses set  c114='$cr' where matricule='$mats' and levels='$level' ";

mysql_query ($query4) or die ('could not updated:'.mysql_error());	
		
  


$qry = mysql_query("select c114 as total
from courses where matricule='$mats' and levels='$level' "); 
$row = mysql_fetch_assoc($qry); 
  $cr=$row['total']; 
  
  

 $mxc111ytss=$cr; 
if(empty($mxc111ytss)){

  }elseif($mxc111ytss<'60' ){
  
$credity=$cr;
}
  elseif($mxc111ytss>'60' ){
  
$credity="60";
}
 elseif($mxc111ytss>='60' && $mxc111yts<='60'){
  
$credity="60";
}
echo $credity;
		
		 ?>
		 </DIV>
<b>CUMMULATIVE GPA <?php


  

		
$qry = mysql_query("select SUM(tm) as total
from gpas  where matricule='$mats'  "); 
$row = mysql_fetch_assoc($qry); 
$totals=$row['total']; 

		
$qry = mysql_query("select c112 as total
from courses  where matricule='$mats' and levels='$level' "); 
$row = mysql_fetch_assoc($qry); 
 $total=$row['total']; 

 
 
 
 $mxchji= $total;
   
if(empty($mxchji)){
	
	
  }
  elseif($mxchji>="0.1" &&  $mxchji<="4.0"){
  
 


}
 
 
  elseif($mxchji>"4"){
  
 
  
$query4sssss="update courses set  c112='' where matricule='$mats' and levels='$level' ";

mysql_query ($query4sssss) or die ('could not updated:'.mysql_error());	
		
  


}
 
 
 
 
 
 
 
$qry = mysql_query("select c112 as total
from courses  where matricule='$mats' and levels='$level' "); 
$row = mysql_fetch_assoc($qry); 
 $totalago=$row['total']; 

 
 
 
 
 
 
 
 
 
 
$credityss="60";

 $mxc111yts=$credit; 
if(empty($mxc111yts)){

  }
  elseif($mxc111yts>'60' ){
  
$credity="60";
}
 elseif($mxc111yts>='60' && $mxc111yts<='60'){
  
$credity="60";
}

 
  
 $mxc111yt=$credity; 
  
if(empty($mxc111yt)){
 $statusfbiooput="";
  }
  elseif($mxc111yt>'' ){
  
 
$cf=round (($totals/$credityss),2);


}
$nwm=$total;


if(empty($gpas)){
 $cff=$cf;
  }
  elseif($gpas>'' && $totalago>='' && $totalago<=''){
  
 
$cff=($gpas/$credity);


}
  elseif($gpas>'' && $totalago>''){
  
 
$cff=$totalago;


}


printf("%01.2f",($cff));






?></b> </div>
		 
		    </div>
			
			
			
			
			
			
			
			
		  <div style="float:left; width:60px; height:15px; ">
		  
		  
		 <DIV STYLE="float:left;margin-left:0px; font-size:11px;width:60px; text-align:center;height:auto;">

		    </div>
		 
		    </div>
			
			
			
			
			
		 
		   <div style="float:left; width:55PX; height:15px; ">
		 <DIV STYLE="float:left;margin-left:0px; width:55px;font-size:11px; text-align:center;height:auto;">

		    </div>
		 
		    </div>
			
			
			
			
			
			
			
			
			
			
			
			
		   <div style="float:left; width:60px; height:15px; ">
		 <DIV STYLE="float:left;margin-left:0px; width:60px;font-size:11px; text-align:center;height:auto;">

		

		    </div>
		 
		    </div>
		 
		 
		 
		   <div style="float:left; width:60px; height:15px; ">
		 <DIV STYLE="float:left;margin-left:0px; width:60px; font-size:11px;text-align:center;height:auto;">

		    </div>
		 
		    </div>
		 
		 
		 
		
		
		
		    </div>
		 
		    </div>
		 
		    </div>
		 
		    </div>
		 
		    </div>
		 
		    </div>
		 
		
		
		 
		    </div>
		 
		    </div>
		 
		    </div>
		 
		
		
		
		
		 
		    </div>
		 
		    </div>
		 
		    </div>
		 
		    </div>
		 
		    </div>
		 
		    </div>
		
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		    </div>
		 
		 
		 
			  <div style="float:left; width:1400px; height:100px;margin-top:-270px; color:#000; ">

		 
		
		 
		 
		 	  <div style="float:left; width:100px; height:100px;color:#000; ">
		
		
		 
		 
		 
		 
		 
		 
		 
		 
		 
 </div>
		 
		 	  <div style="float:left; width:300px; height:100px;color:#000; ">	
			  </DIV>
	
		 	  <div style="float:left; width:100px; height:100px;color:#000; ">	 
		 
		 <div style="float:left; width:500px; font-size:18px;height:25px;color:#000; ">
		  Signature
		 </div>
		 
		  <div style="float:left; width:500px;font-size:18px;MARGIN-LEFT:10PX;TEXT-ALIGN:CENTER; height:65px;color:#000;MARGIN-TOP:5PX; ">
		<B>REGISTRAR </B>
		 </div>
		 
		 
		  <div style="float:left; width:350px;MARGIN-LEFT:80PX;TEXT-ALIGN:CENTER;BORDER-BOTTOM:1PX DASHED #000; height:25px;color:#000;MARGIN-TOP:-95PX; ">
		  </div>
		 
		 </div>
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 </div>
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 <div style="float:left;width:949px; HEIGHT:50PX;  margin-top:-280px; margin-left:12px; text-align:left;">
<?php
 $matricule=$mats;
$default_value = array();
$default_value['filetype'] = 'PNG';
$default_value['dpi'] = 72;
$default_value['scale'] = isset($defaultScale) ? $defaultScale : 1;
$default_value['rotation'] = 0;
$default_value['font_family'] = 'Arial.ttf';
$default_value['font_size'] = 0;
$default_value['text'] = '';
$default_value['a1'] = '';
$default_value['a2'] = '';
$default_value['a3'] = '';

$filetype = isset($_POST['filetype']) ? $_POST['filetype'] : $default_value['filetype'];
$dpi = isset($_POST['dpi']) ? $_POST['dpi'] : $default_value['dpi'];
$scale = intval(isset($_POST['scale']) ? $_POST['scale'] : $default_value['scale']);
$rotation = intval(isset($_POST['rotation']) ? $_POST['rotation'] : $default_value['rotation']);
$font_family = isset($_POST['font_family']) ? $_POST['font_family'] : $default_value['font_family'];
$font_size = intval(isset($_POST['font_size']) ? $_POST['font_size'] : $default_value['font_size']);
$text = isset($_POST['text']) ? $_POST['text'] : $default_value['text'];
$text=$matricule;
registerImageKey('filetype', $filetype);
registerImageKey('dpi', $dpi);
registerImageKey('scale', $scale);
registerImageKey('rotation', $rotation);
registerImageKey('font_family', $font_family);
registerImageKey('font_size', $font_size);
registerImageKey('text', $text);

$default_value['checksum'] = '';
$checksum = isset($_POST['checksum']) ? $_POST['checksum'] : $default_value['checksum'];
registerImageKey('checksum', $checksum);
registerImageKey('code', 'BCGcode93');

$characters = array('0', '1', '2', '3', '4', '5', '6', '7', '8', '9', 'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z', '-', '.', '&nbsp;', '$', '/', '+', '%');

?>

            <?php  getSelectHtml('type', $filename, $availableBarcodes); ?>
   
<?php getSelectHtml('filetype', $filetype, array('PNG' => 'PNG - Portable Network Graphics', 'JPEG' => 'JPEG - Joint Photographic Experts Group', 'GIF' => 'GIF - Graphics Interchange Format')); ?>
                    
                        <?php getInputTextHtml('dpi', $dpi, array('type' => 'number', 'min' => 72, 'max' => 300, 'required' => 'required')); ?> 
  <?php  getInputTextHtml('scale', $scale, array('type' => 'number', 'min' => 1, 'max' => 4, 'required' => 'required')); ?>
                    <?php  getSelectHtml('rotation', $rotation, array(180 => '180&deg; clockwise', 180 => '180&deg; clockwise', 270 => '270&deg; clockwise')); ?>
                    <?php  getSelectHtml('font_family', $font_family, listfonts('../font')); ?> <?php  getInputTextHtml('font_size', $font_size, array('type' => 'number', 'min' => 1, 'max' => 30)); ?>
                  <?php  getInputTextHtml('text', $text, array('type' => 'text', 'required' => 'required')); ?> 

        
                    <?php
                        $finalRequest = '';
                        foreach (getImageKeys() as $key => $value) {
                            $finalRequest .= '&' . $key . '=' . urlencode($value);
                        }
                        if (strlen($finalRequest) > 0) {
                            $finalRequest[0] = '?';
                        }
                    ?>
                    <div id="imageOutput">
                        <?php if ($imageKeys['text'] !== '') { ?><img src="image.php<?php echo $finalRequest; ?>" alt="Barcode Image" /><?php }
                        else { ?>
                    </div>
                   
</div>       </section>
          
</div>


</div>



</div>
</div>



</div>



</div>
</div>



</div>




















			</div>
			</div>	</div>

</div>





</div>



</div>


</div>



			</div>
			</div>	</div>


			</div>
			</div>	</div>

			</div>
			</div>	</div>
			</div>	</div>
        </form>
<?php } ?>