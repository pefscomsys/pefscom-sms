<?php
ini_set('max_execution_time', 300000); //300 seconds = 5 minutes
echo $rope=$_GET['roll'];
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
$department=$_POST['class'];

$levels=$_POST['levels'];
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
		 
 

		  ?><?php

$deptt=$row["departmet"];
		
 $levels=$row["levels"];  
		  
$db1=$row["db1"];  
?>
		  <?php } ?>
<?php





$query="select * from courses where  levels='$levels'  and db1='$db1' and departmet='$department'
";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
 

		  ?>

 <div style="margin:auto;width:950px; height:1200px; MARGIN-TOP:-35PX; ">
		 
		 
		 <div style="float:left;width:950px; height:200px;">
		 
		 <div style="float:left;width:350px; height:200px;">
		 
		 <div style="float:left;width:370px; MARGIN-LEFT:7PX;">
		 <div style="float:left;width:370px;FONT-FAMILY:Baskerville Old Face; FONT-SIZE:16PX;MARGIN-LEFT:10PX; MARGIN-TOP:5PX; HEIGHT:23PX;">
		<B>REPUBLIC OF CAMEROON</B>
		    </div>
			
			 <div style="float:left;width:370px;FONT-FAMILY:times; FONT-SIZE:14PX;MARGIN-LEFT:10PX; HEIGHT:23PX;">
		     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Peace - Work - Fatherland
		    </div>
			 <div style="float:left;width:370px;FONT-FAMILY:times; FONT-SIZE:14PX;MARGIN-LEFT:10PX; HEIGHT:23PX;">
		     <div style="float:left;width:80px;height:1px; border-top:1px dashed #000; margin-left:47px;"></div>
		    </div>
			 </div>
			
			
			 <div style="float:left;width:370px;FONT-FAMILY:Bell MT; MARGIN-TOP:-8PX;FONT-SIZE:14PX;MARGIN-LEFT:10PX;  HEIGHT:23PX;">
		<B>MINISTRY OF HIGHER EDUCATION</B>
		    </div>
			
			 
			 <div style="float:left;width:370px;FONT-FAMILY:times; FONT-SIZE:14PX;MARGIN-LEFT:10PX; HEIGHT:23PX;">
		     <div style="float:left;width:80px;height:1px; border-top:1px dashed #000; margin-left:52px;"></div>
		    </div>
			
				 <div style="float:left;width:370px;FONT-FAMILY:Bell MT; MARGIN-TOP:-8PX;FONT-SIZE:16PX;MARGIN-LEFT:10PX;  HEIGHT:23PX;">
		<B>THE UNIVERSITY OF BAMENDA</B>
		    </div>
			
			 
		 <div style="float:left;width:370px; MARGIN-LEFT:10PX;">
			 <div style="float:left;width:370px;FONT-FAMILY:times; FONT-SIZE:14PX;MARGIN-LEFT:10PX; HEIGHT:23PX;">
		     <div style="float:left;width:80px;height:1px; border-top:1px dashed #000; margin-left:52px;"></div>
		    </div>
					 <div style="float:left;width:370px;FONT-FAMILY:Bell MT; MARGIN-TOP:-8PX;FONT-SIZE:16PX;MARGIN-LEFT:10PX;  HEIGHT:23PX;">
		<B>OFFICE OF THE REGISTRAR</B>
		    </div>
			
			 
			 <div style="float:left;width:370px;FONT-FAMILY:times; FONT-SIZE:14PX;MARGIN-LEFT:10PX; HEIGHT:23PX;">
		     <div style="float:left;width:80px;height:1px; border-top:1px dashed #000; margin-left:52px;"></div>
		    </div>
			  </div>
			
			
			
			
			
			
			
			
			
			
		 </div>
		 <div style="float:left;width:200px; height:200px;">
		 
		
		 <img src="bamenda.png">
		    </div>
		 <div style="float:left;width:380px; height:200px;">
		 
		
		 <div style="float:left;width:350px;margin-left:50px; ">
		 <div style="float:left;width:370px; MARGIN-LEFT:7PX;">
		 <div style="float:left;width:370px;FONT-FAMILY:Baskerville Old Face; FONT-SIZE:16PX;MARGIN-LEFT:10PX; MARGIN-TOP:5PX; HEIGHT:23PX;">
		<B>REPUBLIQUE DU CAMEROUN</B>
		    </div>
			
			 <div style="float:left;width:370px;FONT-FAMILY:times; FONT-SIZE:14PX;MARGIN-LEFT:40PX; HEIGHT:23PX;">
		     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Paix - Travail - Patrie
		    </div>
			 <div style="float:left;width:370px;FONT-FAMILY:times; FONT-SIZE:14PX;MARGIN-LEFT:10PX; HEIGHT:23PX;">
		     <div style="float:left;width:80px;height:1px; border-top:1px dashed #000; margin-left:67px;"></div>
		    </div>
			 </div>
			
			
			 <div style="float:left;width:370px;FONT-FAMILY:Bell MT; MARGIN-TOP:-8PX;FONT-SIZE:14PX;MARGIN-LEFT:-20PX;  HEIGHT:23PX;">
		<B>MINISTERE DE L'ENSEIGNEMENT SUPERIEUR</B>
		    </div>
			
			 
			 <div style="float:left;width:370px;FONT-FAMILY:times; FONT-SIZE:14PX;MARGIN-LEFT:10PX; HEIGHT:23PX;">
		     <div style="float:left;width:80px;height:1px; border-top:1px dashed #000; margin-left:82px;"></div>
		    </div>
			
				 <div style="float:left;width:370px;FONT-FAMILY:Bell MT; MARGIN-TOP:-8PX;FONT-SIZE:16PX;MARGIN-LEFT:34PX;  HEIGHT:23PX;">
		<B> UNIVERSITE DE BAMENDA</B>
		    </div>
			
			 
		 <div style="float:left;width:370px; MARGIN-LEFT:10PX;">
			 <div style="float:left;width:370px;FONT-FAMILY:times; FONT-SIZE:14PX;MARGIN-LEFT:10PX; HEIGHT:23PX;">
		     <div style="float:left;width:80px;height:1px; border-top:1px dashed #000; margin-left:72px;"></div>
		    </div>
					 <div style="float:left;width:370px;FONT-FAMILY:Bell MT; MARGIN-TOP:-8PX;FONT-SIZE:16PX;MARGIN-LEFT:32PX;  HEIGHT:23PX;">
		<B>SECRETARIAT GENERAL</B>
		    </div>
			
			 
			 <div style="float:left;width:370px;FONT-FAMILY:times; FONT-SIZE:14PX;MARGIN-LEFT:10PX; HEIGHT:23PX;">
		     <div style="float:left;width:80px;height:1px; border-top:1px dashed #000; margin-left:72px;"></div>
		    </div>
			  </div>
		 
		    </div>
		 
		    </div>
		 
		    </div>
			
		 <div style="float:left;width:950px; height:60px;">
			
		 <div style="float:left;width:330px;font-family:times;height:60px;">
		 
		 <div style="float:left;width:300px; margin-top:10px;margin-left:10px;">
		 Academic Year : <?php echo $take=$row['db1'];
 ?>
			
		    </div>
		    </div>
					 <div style="float:left;width:350px;font-family:Calibri;height:60px;">
		 
		 <div style="float:left;width:350px; margin-top:10px;margin-left:5px;FONT-SIZE:28PX; FONT-WEIGHT:BOLD;">
		 STUDENT TRANSCRIPT
			
		    </div>
		    </div>
			
		    </div>
			
		 <div style="float:left;width:950px; height:60px; text-align:center;">
			<i>(For the Students of the Higher Institute Of Management Studies (HIMS) Buea<br>
			Affiliated to The University of Bamenda by the Specific Partnership Agreement of 02<sup>nd</sup> August 2013)</i>
		    </div>
			
			
			
		 <div style="float:left;width:950px; height:103px;  border-top:1px solid #000;border-bottom:1px solid #000;">
					 <div style="float:left;width:100px;margin-left:22px; height:21px;"> Student's Name</div>
			<div style="float:left;width:5px; height:21px;"> :</div>
<div style="float:left;width:445px; height:21px;">&nbsp;<b><?php echo $row['fname'];?></b></div>

<div style="float:left;width:150px; height:21px;">&nbsp;Registration Number :</div>

			
			<div style="float:left;width:200px; height:21px;"><b><?php echo $mats=$row['matricule'];?></b></div>

			 <div style="float:left;width:100px;margin-left:22px; height:21px;"> Date of Birth</div>
			<div style="float:left;width:5px; height:21px;"> :</div>
<div style="float:left;width:100px; height:21px;">&nbsp;<b><?php echo $row['cxx2'];
$take=$row['db1'];

$level=$row['levels']?></b></div>	
			
			
			 <div style="float:left;width:100px; height:21px;"> Place of Birth</div>
			<div style="float:left;width:5px; height:21px;"> :</div>
<div style="float:left;width:500px; height:21px;">&nbsp;<b><?php echo $row['cxx1'];?></b></div>	
							 <div style="float:left;width:120px;margin-left:22px; height:21px;"> Degree in View</div>
			<div style="float:left;width:5px; height:21px;"> :</div>
<div style="float:left;width:725px; height:21px;">&nbsp;Professional Bachelor's Degree in <b><?php echo $row['departmet'];?></b></div>
			
			 <div style="float:left;width:100px;margin-left:22px; height:21px;"> Department</div>
			<div style="float:left;width:5px; height:21px;"> :</div>
<div style="float:left;width:745px; height:21px;">&nbsp;<b><?php echo $deptt=$row['departmet'];?></b></div>
			
			 <div style="float:left;width:120px;margin-left:22px; height:21px;"> Mentoring School</div>
			<div style="float:left;width:5px; height:21px;"> :</div>
<div style="float:left;width:705px; height:21px;">&nbsp;<b>Higher Institute of Commerce and Management (HICM)</b></div>
			
			</div>
			
			
			
			
			
		 <div style="float:left;width:949px;margin-top:15px; height:47px;border-top:1px solid #000;border-left:1px solid #000;border-right:1px solid #000;">
				
		 <div style="float:left;width:949px;text-align:center; FONT-SIZE:12PX;HEIGHT:23PX;border-bottom:1px solid #000;">
		<b>	1<sup>st</sup> SEMESTER</b>
			
			</div>
			 <div style="float:left;width:950px;MARGIN-LEFT:-1PX;MARGIN-TOP:-2PX;text-align:center; FONT-SIZE:12PX;HEIGHT:23PX;border-bottom:1px solid #000;">
			
			 <div style="float:left;width:100px;HEIGHT:23PX;TEXT_ALIGN:CENTER;BORDER-RIGHT:1PX SOLID #000;MARGIN-TOP:1PX;">
			 <b>CODE
			</div>
						 <div style="float:left;width:470px;HEIGHT:22PX;TEXT_ALIGN:CENTER;BORDER-RIGHT:1PX SOLID #000;MARGIN-TOP:1PX;">
			 TITLE
			</div>
			
			<div style="float:left;width:60px;HEIGHT:22PX;TEXT_ALIGN:CENTER;BORDER-RIGHT:1PX SOLID #000;MARGIN-TOP:1PX;">
			 CREDIT
			</div>
			<div style="float:left;width:60px;HEIGHT:22PX;TEXT_ALIGN:CENTER;BORDER-RIGHT:1PX SOLID #000;MARGIN-TOP:1PX;">
			 MARK
			</div>
			<div style="float:left;width:60px;HEIGHT:22PX;TEXT_ALIGN:CENTER;BORDER-RIGHT:1PX SOLID #000;MARGIN-TOP:1PX;">
			 GRADE
			</div>
			<div style="float:left;width:50px;HEIGHT:22PX;TEXT_ALIGN:CENTER;BORDER-RIGHT:1PX SOLID #000;MARGIN-TOP:1PX;">
			GP
			</div>
			<div style="float:left;width:80px;HEIGHT:22PX;TEXT_ALIGN:CENTER;BORDER-RIGHT:1PX SOLID #000;MARGIN-TOP:1PX;">
			 WEIGHTED
			</div>
			<div style="float:left;width:60px;HEIGHT:22PX;TEXT_ALIGN:CENTER;MARGIN-TOP:1PX;">
			 AVERAGE</b>
			</div>
			
			</div>
			
						<?php 


$query = mysql_query("select  * from resit where db1='$db1' and matricule='$mats' and departmet='$deptt' and sex='1' and levels='$levels'order by fname ASC"); 

		 while ($row = mysql_fetch_array($query)) {
		 
		 
		 
		 
		 
		 ?>
		 
			 <div style="float:left;width:950px;MARGIN-LEFT:-1PX;MARGIN-TOP:-2PX; FONT-SIZE:12PX;height:23px;border-bottom:1px solid #000;BORDER-RIGHT:1PX SOLID #000;">
			
			 <div style="float:left;width:99px;HEIGHT:22PX;text-align:CENTER;BORDER-left:1PX SOLID #000;BORDER-RIGHT:1PX SOLID #000;MARGIN-TOP:1PX;">
	 <div style="float:left;width:99px; margin-top:5px;">	<?php echo $courseps=$row['fname'];
		
		
		$exam=$row['c102'];
		
		$cas=$row['c101'];?>
			</div></div>
						 <div style="float:left;width:470px;HEIGHT:22PX;BORDER-RIGHT:1PX SOLID #000;MARGIN-TOP:1PX;">
		 <div style="float:left;width:470px; margin-top:5px;">	&nbsp;&nbsp;<?php 
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
			</div></div>
			
			<div style="float:left;width:60px;HEIGHT:22PX;text-align:CENTER;BORDER-RIGHT:1PX SOLID #000;MARGIN-TOP:1PX;">
			 <div style="float:left;width:60px; margin-top:5px;"><?php echo $richooTTTy;?></div>
			</div>
			<div style="float:left;width:60px;HEIGHT:22PX;text-align:CENTER;BORDER-RIGHT:1PX SOLID #000;MARGIN-TOP:1PX;">
			 <div style="float:left;width:60px; margin-top:5px;"><?php echo ($exam+$cas);?></div>
			</div>
			<div style="float:left;width:60px;HEIGHT:22PX;text-align:CENTER;BORDER-RIGHT:1PX SOLID #000;MARGIN-TOP:1PX;">
		 <div style="float:left;width:60px; margin-top:5px;">	
<?php




 $ns=
($exam+$cas); 
 
$qry = mysql_query("select sum(c102) as total
from resit where matricule='$mats' and departmet='$deptt'and levels='$levels' and sex='3' and db1='$db1'  and fname='$courseps'  and c102>''"); 
$row = mysql_fetch_assoc($qry); 
  $smsp=$row['total'];
  $smspp=($cas+$smsp);
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


 $mxc11=$mjsssvv;
if(empty($mxc11)){
 $colorf1bio="yellow";
 $statusfbiobios="";}
elseif($mxc11>=$rangx1 && $mxc11<=$rangx2 ){
 $colorf1bio="#FF0000";
 $statusfbiobios=$gpa1; ;
}else if(($mxc11 >=$rangx3) && ($mxc11<=$rangx4)){
 $colorf1bio="blue";
 $statusfbiobios=$gpa2; ;}
 
 else if(($mxc11 >=$rangx5) && ($mxc11<=$rangx6)){
 $colorf1bio="blue";
 $statusfbiobios=$gpa3; }
 
 
else if(($mxc11 >=$rangx7) && ($mxc11<=$rangx8)){
 $colorf1bio="blue";
 $statusfbiobios=$gpa4; }
 
 
 else if(($mxc11 >=$rangx9) && ($mxc11<=$rangx10)){
 $colorf1bio="blue"; $statusfbiobios=$gpa5; 
} 
 
 
 
 else if(($mxc11 >=$rangx11) && ($mxc11<=$rangx12)){
 $colorf1bio="blue"; $statusfbiobios=$gpa6; 
} 
 
  else if(($mxc11 >=$rangx10) && ($mxc11<=$rangx14)){
 $colorf1bio="blue"; $statusfbiobios=$gpa7; 
} 
 
 
  else if(($mxc11 >=$rangx15) && ($mxc11<=$rangx16)){
 $colorf1bio="blue"; $statusfbiobios=$gpa8; 
} 


 $cc=($statusfbio*$richooTTTy);





$query3="update resit set c104='$richooTTTy'
 where matricule='$mats' and departmet='$deptt'and levels='$levels' and sex='1' and db1='$db1' and fname='$courseps'";




 
$qry = mysql_query("select SUM(c101+c102) as total
from resit  where matricule='$mats' and departmet='$deptt' and levels='$levels' and sex='1' and db1='$db1' and fname='$courseps' "); 
$row = mysql_fetch_assoc($qry); 
 $savepsts=$row['total']; 

 
$qry = mysql_query("select SUM(c101+c102) as total
from resit  where matricule='$mats' and departmet='$deptt' and levels='$levels' and sex='3' and db1='$db1' and fname='$courseps' "); 
$row = mysql_fetch_assoc($qry); 
  $savepstss=$row['total']; 


 $mxcyy1= $savepsts;
 $mxcyy= $savepstss;
 
 if(empty($mxcyy)){

 $stmyyy=$savepsts;}
elseif($mxcyy<=""){

  $stmyyy=$savepsts; 
}
 
 elseif($mxcyy>""){

 $stmyyy=(($savepstss+$savepsts)/2); 
}


 $mxcyyy1=$savepstss;

 if(empty($mxcyyy1)){

 $stmyyyy1=$savepsts;}
elseif($mxcyyy1>="50" && $mxcyyy1<=""){

  $stmyyyy1=$savepstss; 
}
 
 elseif($mxcyyy1<$mxcyy1){

  $stmyyyy1=$mxcyy1; 
}




 elseif($mxcyyy1>$mxcyy1 &&  $stmyyy<50  ){

  $stmyyyy1=50; 
}

 elseif($mxcyyy1>$mxcyy1 &&  $stmyyy>=50  ){

  $stmyyyy1=$stmyyy; 
}

 elseif($mxcyyy1>=$mxcyy1 && $mxcyyy1<=$mxcyy1){

  $stmyyyy1=$mxcyyy1; 
}


 elseif($mxcyyy1>=$mxcyy1 && $mxcyyy1<=$mxcyy1){

  $stmyyyy1=$mxcyyy1; 
}




 elseif($mxcyyy1>'50' ){

  $stmyyyy1=$stmyyy; 
}
 elseif($mxcyyy1>'50' &&  $stmyyy>'50'){

  $stmyyyy1=$stmyyy; 
}
 elseif($mxcyyy1>'50' &&  $stmyyy<'50'){

  $stmyyyy1=$mxcyyy1; 
}
 
 
 $mxc11f=$stmyyyy1;
 
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

 
 $statusfbiogff;
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$query3eyy="update resit set c108='$statusfbiogff'
 where matricule='$mats' and departmet='$deptt'and levels='$levels' and sex='1' and db1='$db1' and fname='$courseps'";
 
 
 $xaf=($tm*$statusfbiogff);
$query3eyyy="update resit set c109='$xaf'
 where matricule='$mats' and departmet='$deptt'and levels='$levels' and sex='1' and db1='$db1' and fname='$courseps'";
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$query3ey="update resit set c107='$stmyyy'
 where matricule='$mats' and departmet='$deptt'and levels='$levels' and sex='1' and db1='$db1' and fname='$courseps'";
 
 
 
 
 
 
 
 
 
 
 
 
 

 $cc=($statusfbio*$richooTTTy);
 
 
 
$query13="update resit set c106='$cc'
 where matricule='$mats' and departmet='$deptt' and levels='$levels' and sex='1' and db1='$db1' and fname='$courseps' ";


mysql_query ($query13) or die ('could not updated:'.mysql_error());

mysql_query ($query3) or die ('could not updated:'.mysql_error());

mysql_query ($query3eyyy) or die ('could not updated:'.mysql_error());

mysql_query ($query3eyy) or die ('could not updated:'.mysql_error());

mysql_query ($query3ey) or die ('could not updated:'.mysql_error());

$query3="update resit set c103='$statusfbio'
 where matricule='$mats' and departmet='$deptt'and levels='$levels' and sex='1' and db1='$db1' and fname='$courseps'";


 
 
$query33="update resit set c104='$richooTTTy'
 where matricule='$mats' and departmet='$deptt'and levels='$levels' and sex='1' and db1='$db1' and fname='$courseps'";








 $cc=($statusfbio*$richooTTTy);
$query13="update resit set c106='$cc'
 where matricule='$mats' and departmet='$deptt' and levels='$levels' and sex='1' and db1='$db1' and fname='$courseps' ";



mysql_query ($query13) or die ('could not updated:'.mysql_error());
mysql_query ($query3) or die ('could not updated:'.mysql_error());
mysql_query ($query33) or die ('could not updated:'.mysql_error());






 ?>
		</div>
			</div>
			<div style="float:left;width:50px;HEIGHT:22PX;text-align:CENTER;BORDER-RIGHT:1PX SOLID #000;MARGIN-TOP:1PX;">
		 <div style="float:left;width:50px; margin-top:5px;"> <?php echo $statusfbio;
		  
		  
		  
		  
		  ?></div>
			</div>
			<div style="float:left;width:80px;HEIGHT:22PX;text-align:CENTER;BORDER-RIGHT:1PX SOLID #000;MARGIN-TOP:1PX;">
	 <div style="float:left;width:80px; margin-top:5px;">	  <?php echo $mkikiki=($statusfbio*$richooTTTy);
		  
		  
		  
		  
		  ?></div>
			</div>
			<div style="float:left;width:59px;HEIGHT:22PX;text-align:CENTER;MARGIN-TOP:1PX;"> 
			<div style="float:left;width:59px; margin-top:5px;">
			<?php echo ($exam+$cas);
		  
		  
		  $query13r4="update resit set c107='$mkikiki'
 where matricule='$mats' and departmet='$deptt' and levels='$levels' and sex='1' and db1='$db1' and fname='$courseps' ";

		  
mysql_query ($query13r4) or die ('could not updated:'.mysql_error());
		  ?></div>
			</div>
			
			</div>	
			
			
			
			
		 <?php } ?>
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
					
			
		 <div style="float:left;width:949px; MARGIN-LEFT:-1PX;HEIGHT:22PX;border-left:1px solid #000;border-right:1px solid #000;">
				
	
			 <div style="float:left;width:950px;MARGIN-TOP:-2PX;text-align:center; FONT-SIZE:12PX;height:23px;border-bottom:1px solid #000;">
			
			 <div style="float:left;width:99px;HEIGHT:23PX;TEXT_ALIGN:CENTER;BORDER-RIGHT:1PX SOLID #000;MARGIN-TOP:1PX;">
			
			</div>
						 <div style="float:left;width:470px;HEIGHT:23PX;TEXT-ALIGN:RIGHT;BORDER-RIGHT:1PX SOLID #000;MARGIN-TOP:1PX;">
			<B>TOTAL<B>
			</div>
			
			<div style="float:left;width:60px;HEIGHT:23PX;TEXT_ALIGN:CENTER;BORDER-RIGHT:1PX SOLID #000;MARGIN-TOP:1PX;">
				<?php
			
$qry = mysql_query("select SUM(c104) as total
from resit  where matricule='$mats' and departmet='$deptt' and levels='$levels' and sex='1' and db1='$db1'  "); 
$row = mysql_fetch_assoc($qry); 
 echo $tyts4=$row['total']; 
			?>
			</div>
			<div style="float:left;width:60px;HEIGHT:23PX;TEXT_ALIGN:CENTER;BORDER-RIGHT:1PX SOLID #000;MARGIN-TOP:1PX;">
			
			</div>
			<div style="float:left;width:60px;HEIGHT:23PX;TEXT_ALIGN:CENTER;BORDER-RIGHT:1PX SOLID #000;MARGIN-TOP:1PX;">
		
			</div>
			<div style="float:left;width:50px;HEIGHT:23PX;TEXT_ALIGN:CENTER;BORDER-RIGHT:1PX SOLID #000;MARGIN-TOP:1PX;">
			<?php
			
$qry = mysql_query("select SUM(c103) as total
from resit  where matricule='$mats' and departmet='$deptt' and levels='$levels' and sex='1' and db1='$db1'  "); 
$row = mysql_fetch_assoc($qry); 
 echo $tyts=$row['total']; 
			?>
			</div>
			<div style="float:left;width:80px;HEIGHT:23PX;TEXT_ALIGN:CENTER;BORDER-RIGHT:1PX SOLID #000;MARGIN-TOP:1PX;">
				<?php
			
$qry = mysql_query("select SUM(c107) as total
from resit  where matricule='$mats' and departmet='$deptt' and levels='$levels' and sex='1' and db1='$db1'  "); 
$row = mysql_fetch_assoc($qry); 
 echo $tyts4=$row['total']; 
			?>
			</div>
			<div style="float:left;width:63px;HEIGHT:23PX;TEXT_ALIGN:CENTER;MARGIN-TOP:1PX;">
		
			</div>
			
			</div>
			
			
			
					
		 <div style="float:left;width:949px; MARGIN-LEFT:-1PX;HEIGHT:22PX;border-left:1px solid #000;border-right:1px solid #000;">
				
	
			 <div style="float:left;width:950px;MARGIN-TOP:-2PX;text-align:center; FONT-SIZE:12PX;height:23px;border-bottom:1px solid #000;">
			
			 <div style="float:left;width:100px;HEIGHT:23PX;TEXT_ALIGN:CENTER;MARGIN-TOP:1PX;">
			
			</div>
						 <div style="float:left;width:470px;HEIGHT:23PX;TEXT-ALIGN:RIGHT;BORDER-RIGHT:1PX SOLID #000;MARGIN-TOP:1PX;">
			
			</div>
			
			<div style="float:left;width:314px;background:#ccc;HEIGHT:21PX;TEXT_ALIGN:CENTER;BORDER-BOTTOM:1PX SOLID #000;BORDER-TOP:1PX SOLID #000;BORDER-RIGHT:1PX SOLID #000;MARGIN-TOP:1PX;">
			FIRST SEMESTER GPA
			</b>
			</div>
			<div style="float:left;width:63px;background:#ccc;HEIGHT:21PX;TEXT_ALIGN:CENTER;MARGIN-TOP:1PX;BORDER-BOTTOM:1PX SOLID #000;BORDER-TOP:1PX SOLID #000;BORDER-RIGHT:1PX SOLID #000;">
		<?php 

$qry = mysql_query("select SUM(c106) as total
from resit  where matricule='$mats' and departmet='$deptt' and levels='$levels' and sex='1' and db1='$db1' "); 
$row = mysql_fetch_assoc($qry); 
 $savept=$row['total']; 

 



$qry = mysql_query("select sum(c104) as total
from resit where matricule='$mats' and departmet='$deptt'and levels='$levels' and sex='1' and db1='$db1'  "); 
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
 echo  $statusfbiooput="";
  }
  elseif($mxc111yt>'' ){
 printf("%01.2f",($statusfbioopt/$statusfbioop2t));
}?>
	
			</div>
			
			</div>
			
		 <div style="float:left;width:949px; height:47px;MARGIN-LEFT:-1PX;border-left:1px solid #000;border-right:1px solid #000;">
				
		 <div style="float:left;width:949px;text-align:center; FONT-SIZE:12PX;HEIGHT:23PX;border-bottom:1px solid #000;">
			2<sup>ND</sup> SEMESTER
			
			</div>
			 <div style="float:left;width:950px;MARGIN-LEFT:-1PX;MARGIN-TOP:-2PX;text-align:center; FONT-SIZE:12PX;height:23px;border-bottom:1px solid #000;">
			
			 <div style="float:left;width:100px;HEIGHT:22PX;TEXT_ALIGN:CENTER;BORDER-RIGHT:1PX SOLID #000;MARGIN-TOP:1PX;">
			 CODE
			</div>
						 <div style="float:left;width:470px;HEIGHT:22PX;TEXT_ALIGN:CENTER;BORDER-RIGHT:1PX SOLID #000;MARGIN-TOP:1PX;">
			 TITLE
			</div>
			
			<div style="float:left;width:60px;HEIGHT:22PX;TEXT_ALIGN:CENTER;BORDER-RIGHT:1PX SOLID #000;MARGIN-TOP:1PX;">
			 CREDIT
			</div>
			<div style="float:left;width:60px;HEIGHT:22PX;TEXT_ALIGN:CENTER;BORDER-RIGHT:1PX SOLID #000;MARGIN-TOP:1PX;">
			 MARK
			</div>
			<div style="float:left;width:60px;HEIGHT:22PX;TEXT_ALIGN:CENTER;BORDER-RIGHT:1PX SOLID #000;MARGIN-TOP:1PX;">
			 GRADE
			</div>
			<div style="float:left;width:50px;HEIGHT:22PX;TEXT_ALIGN:CENTER;BORDER-RIGHT:1PX SOLID #000;MARGIN-TOP:1PX;">
			GP
			</div>
			<div style="float:left;width:80px;HEIGHT:22PX;TEXT_ALIGN:CENTER;BORDER-RIGHT:1PX SOLID #000;MARGIN-TOP:1PX;">
			 WEIGHTED
			</div>
			<div style="float:left;width:60px;HEIGHT:22PX;TEXT_ALIGN:CENTER;MARGIN-TOP:1PX;">
			 AVERAGE
			</div>
			
			</div>
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
						<?php 


$query = mysql_query("select  * from resit where db1='$db1' and matricule='$mats' and departmet='$deptt' and sex='2' and levels='$levels'order by fname ASC"); 

		 while ($row = mysql_fetch_array($query)) {
		 
		 
		 
		 
		 
		 ?>
		 
			 <div style="float:left;width:950px;FONT-WEIGHT:NORMAL;MARGIN-LEFT:-1PX;MARGIN-TOP:-2PX; FONT-SIZE:12PX;height:23px;border-bottom:1px solid #000;BORDER-RIGHT:1PX SOLID #000;">
			
			 <div style="float:left;width:99px;HEIGHT:22PX;text-align:CENTER;BORDER-left:1PX SOLID #000;BORDER-RIGHT:1PX SOLID #000;MARGIN-TOP:1PX;">
		<div style="float:left;width:99px; margin-top:5px;">	<?php echo $courseps=$row['fname'];
		
		
		$exam=$row['c102'];
		
		$cas=$row['c101'];?>
			</div></div>
						 <div style="float:left;width:470px;HEIGHT:22PX;BORDER-RIGHT:1PX SOLID #000;MARGIN-TOP:1PX;">
		<div style="float:left;width:470px; margin-top:5px;">		&nbsp;&nbsp;<?php 
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
			</div></div>
			
			<div style="float:left;width:60px;HEIGHT:22PX;text-align:CENTER;BORDER-RIGHT:1PX SOLID #000;MARGIN-TOP:1PX;">
		<div style="float:left;width:60px; margin-top:5px;">		<?php echo $richooTTTy;?>
			</div></div>
			<div style="float:left;width:60px;HEIGHT:22PX;text-align:CENTER;BORDER-RIGHT:1PX SOLID #000;MARGIN-TOP:1PX;">
			<div style="float:left;width:60px; margin-top:5px;">	<?php echo ($exam+$cas);?>
			</div></div>
			<div style="float:left;width:60px;HEIGHT:22PX;text-align:CENTER;BORDER-RIGHT:1PX SOLID #000;MARGIN-TOP:1PX;">
	<div style="float:left;width:60px; margin-top:5px;">			
<?php




 $ns=
($exam+$cas); 
 
$qry = mysql_query("select sum(c102) as total
from resit where matricule='$mats' and departmet='$deptt'and levels='$levels' and sex='3' and db1='$db1'  and fname='$courseps'  and c102>''"); 
$row = mysql_fetch_assoc($qry); 
  $smsp=$row['total'];
  $smspp=($cas+$smsp);
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


 $mxc11=$mjsssvv;
if(empty($mxc11)){
 $colorf1bio="yellow";
 $statusfbiobios="";}
elseif($mxc11>=$rangx1 && $mxc11<=$rangx2 ){
 $colorf1bio="#FF0000";
 $statusfbiobios=$gpa1; ;
}else if(($mxc11 >=$rangx3) && ($mxc11<=$rangx4)){
 $colorf1bio="blue";
 $statusfbiobios=$gpa2; ;}
 
 else if(($mxc11 >=$rangx5) && ($mxc11<=$rangx6)){
 $colorf1bio="blue";
 $statusfbiobios=$gpa3; }
 
 
else if(($mxc11 >=$rangx7) && ($mxc11<=$rangx8)){
 $colorf1bio="blue";
 $statusfbiobios=$gpa4; }
 
 
 else if(($mxc11 >=$rangx9) && ($mxc11<=$rangx10)){
 $colorf1bio="blue"; $statusfbiobios=$gpa5; 
} 
 
 
 
 else if(($mxc11 >=$rangx11) && ($mxc11<=$rangx12)){
 $colorf1bio="blue"; $statusfbiobios=$gpa6; 
} 
 
  else if(($mxc11 >=$rangx10) && ($mxc11<=$rangx14)){
 $colorf1bio="blue"; $statusfbiobios=$gpa7; 
} 
 
 
  else if(($mxc11 >=$rangx15) && ($mxc11<=$rangx16)){
 $colorf1bio="blue"; $statusfbiobios=$gpa8; 
} 


 $cc=($statusfbio*$richooTTTy);





$query3="update resit set c104='$richooTTTy'
 where matricule='$mats' and departmet='$deptt'and levels='$levels' and sex='2' and db1='$db1' and fname='$courseps'";




 
$qry = mysql_query("select SUM(c101+c102) as total
from resit  where matricule='$mats' and departmet='$deptt' and levels='$levels' and sex='2' and db1='$db1' and fname='$courseps' "); 
$row = mysql_fetch_assoc($qry); 
 $savepsts=$row['total']; 

 
$qry = mysql_query("select SUM(c101+c102) as total
from resit  where matricule='$mats' and departmet='$deptt' and levels='$levels' and sex='3' and db1='$db1' and fname='$courseps' "); 
$row = mysql_fetch_assoc($qry); 
  $savepstss=$row['total']; 


 $mxcyy1= $savepsts;
 $mxcyy= $savepstss;
 
 if(empty($mxcyy)){

 $stmyyy=$savepsts;}
elseif($mxcyy<=""){

  $stmyyy=$savepsts; 
}
 
 elseif($mxcyy>""){

 $stmyyy=(($savepstss+$savepsts)/2); 
}


 $mxcyyy1=$savepstss;

 if(empty($mxcyyy1)){

 $stmyyyy1=$savepsts;}
elseif($mxcyyy1>="50" && $mxcyyy1<=""){

  $stmyyyy1=$savepstss; 
}
 
 elseif($mxcyyy1<$mxcyy1){

  $stmyyyy1=$mxcyy1; 
}




 elseif($mxcyyy1>$mxcyy1 &&  $stmyyy<50  ){

  $stmyyyy1=50; 
}

 elseif($mxcyyy1>$mxcyy1 &&  $stmyyy>=50  ){

  $stmyyyy1=$stmyyy; 
}

 elseif($mxcyyy1>=$mxcyy1 && $mxcyyy1<=$mxcyy1){

  $stmyyyy1=$mxcyyy1; 
}


 elseif($mxcyyy1>=$mxcyy1 && $mxcyyy1<=$mxcyy1){

  $stmyyyy1=$mxcyyy1; 
}




 elseif($mxcyyy1>'50' ){

  $stmyyyy1=$stmyyy; 
}
 elseif($mxcyyy1>'50' &&  $stmyyy>'50'){

  $stmyyyy1=$stmyyy; 
}
 elseif($mxcyyy1>'50' &&  $stmyyy<'50'){

  $stmyyyy1=$mxcyyy1; 
}
 
 
 $mxc11f=$stmyyyy1;
 
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

 
 $statusfbiogff;
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$query3eyy="update resit set c108='$statusfbiogff'
 where matricule='$mats' and departmet='$deptt'and levels='$levels' and sex='2' and db1='$db1' and fname='$courseps'";
 
 
 $xaf=($tm*$statusfbiogff);
$query3eyyy="update resit set c109='$xaf'
 where matricule='$mats' and departmet='$deptt'and levels='$levels' and sex='2' and db1='$db1' and fname='$courseps'";
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$query3ey="update resit set c107='$stmyyy'
 where matricule='$mats' and departmet='$deptt'and levels='$levels' and sex='2' and db1='$db1' and fname='$courseps'";
 
 
 
 
 
 
 
 
 
 
 
 
 

 $cc=($statusfbio*$richooTTTy);
 
 
 
$query13="update resit set c106='$cc'
 where matricule='$mats' and departmet='$deptt' and levels='$levels' and sex='2' and db1='$db1' and fname='$courseps' ";


mysql_query ($query13) or die ('could not updated:'.mysql_error());

mysql_query ($query3) or die ('could not updated:'.mysql_error());

mysql_query ($query3eyyy) or die ('could not updated:'.mysql_error());

mysql_query ($query3eyy) or die ('could not updated:'.mysql_error());

mysql_query ($query3ey) or die ('could not updated:'.mysql_error());

$query3="update resit set c103='$statusfbio'
 where matricule='$mats' and departmet='$deptt'and levels='$levels' and sex='2' and db1='$db1' and fname='$courseps'";


 
 
$query33="update resit set c104='$richooTTTy'
 where matricule='$mats' and departmet='$deptt'and levels='$levels' and sex='2' and db1='$db1' and fname='$courseps'";








 $cc=($statusfbio*$richooTTTy);
$query13="update resit set c106='$cc'
 where matricule='$mats' and departmet='$deptt' and levels='$levels' and sex='2' and db1='$db1' and fname='$courseps' ";



mysql_query ($query13) or die ('could not updated:'.mysql_error());
mysql_query ($query3) or die ('could not updated:'.mysql_error());
mysql_query ($query33) or die ('could not updated:'.mysql_error());






 ?>
		
				</div></div>
			<div style="float:left;width:50px;HEIGHT:22PX;text-align:CENTER;BORDER-RIGHT:1PX SOLID #000;MARGIN-TOP:1PX;">
		<div style="float:left;width:50px; margin-top:5px;">	 <?php echo $statusfbio;
		  
		  
		  
		  
		  ?>
			</div></div>
			<div style="float:left;width:80px;HEIGHT:22PX;text-align:CENTER;BORDER-RIGHT:1PX SOLID #000;MARGIN-TOP:1PX;">
		 <div style="float:left;width:80px; margin-top:5px;">	 <?php echo $mkikiki=($statusfbio*$richooTTTy);
		  
		  
		  
		  
		  ?>
			</div></div>
			<div style="float:left;width:59px;HEIGHT:22PX;text-align:CENTER;MARGIN-TOP:1PX;">
		<div style="float:left;width:60px; margin-top:5px;">		<?php echo ($exam+$cas);
		  
		  
		  $query13r4="update resit set c107='$mkikiki'
 where matricule='$mats' and departmet='$deptt' and levels='$levels' and sex='2' and db1='$db1' and fname='$courseps' ";

		  
mysql_query ($query13r4) or die ('could not updated:'.mysql_error());
		  ?>
			</div></div>
			
			</div>	
			
			
			
			
		 <?php } ?>
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
					
			
		 <div style="float:left;width:949px; MARGIN-LEFT:-1PX;HEIGHT:23PX;border-left:1px solid #000;border-right:1px solid #000;">
				
	
			 <div style="float:left;width:950px;MARGIN-TOP:-2PX;text-align:center; FONT-SIZE:12PX;height:23px;border-bottom:1px solid #000;">
			
			 <div style="float:left;width:99px;HEIGHT:243X;TEXT_ALIGN:CENTER;BORDER-RIGHT:1PX SOLID #000;MARGIN-TOP:1PX;">
			
			</div>
						 <div style="float:left;width:470px;HEIGHT:23PX;TEXT-ALIGN:RIGHT;BORDER-RIGHT:1PX SOLID #000;MARGIN-TOP:1PX;">
			<B>TOTAL<B>
			</div>
			
			<div style="float:left;width:60px;HEIGHT:23PX;TEXT_ALIGN:CENTER;BORDER-RIGHT:1PX SOLID #000;MARGIN-TOP:1PX;">
				<?php
			
$qry = mysql_query("select SUM(c104) as total
from resit  where matricule='$mats' and departmet='$deptt' and levels='$levels' and sex='2' and db1='$db1'  "); 
$row = mysql_fetch_assoc($qry); 
 echo $tyts4=$row['total']; 
			?>
			</div>
			<div style="float:left;width:60px;HEIGHT:23PX;TEXT_ALIGN:CENTER;BORDER-RIGHT:1PX SOLID #000;MARGIN-TOP:1PX;">
			
			</div>
			<div style="float:left;width:60px;HEIGHT:23PX;TEXT_ALIGN:CENTER;BORDER-RIGHT:1PX SOLID #000;MARGIN-TOP:1PX;">
		
			</div>
			<div style="float:left;width:50px;HEIGHT:23PX;TEXT_ALIGN:CENTER;BORDER-RIGHT:1PX SOLID #000;MARGIN-TOP:1PX;">
			<?php
			
$qry = mysql_query("select SUM(c103) as total
from resit  where matricule='$mats' and departmet='$deptt' and levels='$levels' and sex='2' and db1='$db1'  "); 
$row = mysql_fetch_assoc($qry); 
 echo $tyts=$row['total']; 
			?>
			</div>
			<div style="float:left;width:80px;HEIGHT:23PX;TEXT_ALIGN:CENTER;BORDER-RIGHT:1PX SOLID #000;MARGIN-TOP:1PX;">
				<?php
			
$qry = mysql_query("select SUM(c107) as total
from resit  where matricule='$mats' and departmet='$deptt' and levels='$levels' and sex='2' and db1='$db1'  "); 
$row = mysql_fetch_assoc($qry); 
 echo $tyts4=$row['total']; 
			?>
			</div>
			<div style="float:left;width:63px;HEIGHT:23PX;TEXT_ALIGN:CENTER;MARGIN-TOP:1PX;">
		
			</div>
			
			</div>
			
			
			
					
		 <div style="float:left;width:949px; MARGIN-LEFT:-1PX;HEIGHT:22PX;border-left:1px solid #000;border-right:1px solid #000;">
				
	
			 <div style="float:left;width:950px;MARGIN-TOP:-2PX;text-align:center; FONT-SIZE:12PX;height:23px;border-bottom:1px solid #000;">
			
			 <div style="float:left;width:100px;HEIGHT:22PX;TEXT_ALIGN:CENTER;MARGIN-TOP:1PX;">
			
			</div>
						 <div style="float:left;width:470px;HEIGHT:23PX;TEXT-ALIGN:RIGHT;BORDER-RIGHT:1PX SOLID #000;MARGIN-TOP:1PX;">
			
			</div>
			
			<div style="float:left;width:314px;background:#ccc;HEIGHT:21PX;TEXT_ALIGN:CENTER;BORDER-BOTTOM:1PX SOLID #000;BORDER-TOP:1PX SOLID #000;BORDER-RIGHT:1PX SOLID #000;MARGIN-TOP:1PX;">
			SECOND SEMESTER GPA
			</b>
			</div>
			<div style="float:left;width:63px;background:#ccc;HEIGHT:21PX;TEXT_ALIGN:CENTER;MARGIN-TOP:1PX;BORDER-BOTTOM:1PX SOLID #000;BORDER-TOP:1PX SOLID #000;BORDER-RIGHT:1PX SOLID #000;">
		<?php 

$qry = mysql_query("select SUM(c106) as total
from resit  where matricule='$mats' and departmet='$deptt' and levels='$levels' and sex='2' and db1='$db1' "); 
$row = mysql_fetch_assoc($qry); 
 $savept=$row['total']; 

 



$qry = mysql_query("select sum(c104) as total
from resit where matricule='$mats' and departmet='$deptt'and levels='$levels' and sex='2' and db1='$db1'  "); 
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
 echo  $statusfbiooput="";
  }
  elseif($mxc111yt>'' ){
 printf("%01.2f",($statusfbioopt/$statusfbioop2t));
}?>
	
			</div>
			
			</div>
							<?php 


$query = mysql_query("select  * from resit where db1='$db1' and matricule='$mats' and departmet='$deptt' and sex='3' and levels='$levels' order by fname ASC limit 1"); 

		 while ($row = mysql_fetch_array($query)) {
		 
		 
		 
		 
		 
		 ?>
		 <div style="float:left;width:949px;FONT-WEIGHT:NORMAL; height:47px;MARGIN-LEFT:-1PX;border-left:1px solid #000;border-right:1px solid #000;">
				
		 <div style="float:left;width:949px;text-align:center; FONT-SIZE:12PX;HEIGHT:23PX;border-bottom:1px solid #000;">
			RESIT SEMESTER
			
			</div>
			 <div style="float:left;width:950px;MARGIN-LEFT:-1PX;MARGIN-TOP:-2PX;text-align:center; FONT-SIZE:12PX;height:23px;border-bottom:1px solid #000;">
			
			 <div style="float:left;width:100px;HEIGHT:22PX;TEXT_ALIGN:CENTER;BORDER-RIGHT:1PX SOLID #000;MARGIN-TOP:1PX;">
			 CODE
			</div>
						 <div style="float:left;width:470px;HEIGHT:22PX;TEXT_ALIGN:CENTER;BORDER-RIGHT:1PX SOLID #000;MARGIN-TOP:1PX;">
			 TITLE
			</div>
			
			<div style="float:left;width:60px;HEIGHT:22PX;TEXT_ALIGN:CENTER;BORDER-RIGHT:1PX SOLID #000;MARGIN-TOP:1PX;">
			 CREDIT
			</div>
			<div style="float:left;width:60px;HEIGHT:22PX;TEXT_ALIGN:CENTER;BORDER-RIGHT:1PX SOLID #000;MARGIN-TOP:1PX;">
			 MARK
			</div>
			<div style="float:left;width:60px;HEIGHT:22PX;TEXT_ALIGN:CENTER;BORDER-RIGHT:1PX SOLID #000;MARGIN-TOP:1PX;">
			 GRADE
			</div>
			<div style="float:left;width:50px;HEIGHT:22PX;TEXT_ALIGN:CENTER;BORDER-RIGHT:1PX SOLID #000;MARGIN-TOP:1PX;">
			GP
			</div>
			<div style="float:left;width:80px;HEIGHT:22PX;TEXT_ALIGN:CENTER;BORDER-RIGHT:1PX SOLID #000;MARGIN-TOP:1PX;">
			 WEIGHTED
			</div>
			<div style="float:left;width:60px;HEIGHT:22PX;TEXT_ALIGN:CENTER;MARGIN-TOP:1PX;">
			 AVERAGE
			</div>
			
			</div>
			
			
			<?PHP } ?>
			
			
			
			
			
			
			
			
			
						<?php 


$query = mysql_query("select  * from resit where db1='$db1' and matricule='$mats' and departmet='$deptt' and sex='3' and levels='$levels'order by fname ASC"); 

		 while ($row = mysql_fetch_array($query)) {
		 
		 
		 
		 
		 
		 ?>
		 
			 <div style="float:left;width:950px;MARGIN-LEFT:-1PX;MARGIN-TOP:-2PX; FONT-SIZE:12PX;height:23px;border-bottom:1px solid #000;BORDER-RIGHT:1PX SOLID #000;">
			
			 <div style="float:left;width:99px;HEIGHT:22PX;text-align:CENTER;BORDER-left:1PX SOLID #000;BORDER-RIGHT:1PX SOLID #000;MARGIN-TOP:1PX;">
	<div style="float:left;width:99px; margin-top:5px;">		<?php echo $courseps=$row['fname'];
		
		
		$exam=$row['c102'];
		
		$cas=$row['c101'];?>
			</div></div>
						 <div style="float:left;width:470px;HEIGHT:22PX;BORDER-RIGHT:1PX SOLID #000;MARGIN-TOP:1PX;">
		<div style="float:left;width:470px; margin-top:5px;">		&nbsp;&nbsp;<?php 
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
			</div></div>
			
			<div style="float:left;width:60px;HEIGHT:22PX;text-align:CENTER;BORDER-RIGHT:1PX SOLID #000;MARGIN-TOP:1PX;">
			<div style="float:left;width:60px; margin-top:5px;">	<?php echo $richooTTTy;?>
			</div></div>
			<div style="float:left;width:60px;HEIGHT:22PX;text-align:CENTER;BORDER-RIGHT:1PX SOLID #000;MARGIN-TOP:1PX;">
			<div style="float:left;width:60px; margin-top:5px;">	<?php echo ($exam+$cas);?>
			</div></div>
			<div style="float:left;width:60px;HEIGHT:22PX;text-align:CENTER;BORDER-RIGHT:1PX SOLID #000;MARGIN-TOP:1PX;">
	<div style="float:left;width:60px; margin-top:5px;">			
<?php




 $ns=
($exam+$cas); 
 
$qry = mysql_query("select sum(c102) as total
from resit where matricule='$mats' and departmet='$deptt'and levels='$levels' and sex='3' and db1='$db1'  and fname='$courseps'  and c102>''"); 
$row = mysql_fetch_assoc($qry); 
  $smsp=$row['total'];
  $smspp=($cas+$smsp);
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


 $mxc11=$mjsssvv;
if(empty($mxc11)){
 $colorf1bio="yellow";
 $statusfbiobios="";}
elseif($mxc11>=$rangx1 && $mxc11<=$rangx2 ){
 $colorf1bio="#FF0000";
 $statusfbiobios=$gpa1; ;
}else if(($mxc11 >=$rangx3) && ($mxc11<=$rangx4)){
 $colorf1bio="blue";
 $statusfbiobios=$gpa2; ;}
 
 else if(($mxc11 >=$rangx5) && ($mxc11<=$rangx6)){
 $colorf1bio="blue";
 $statusfbiobios=$gpa3; }
 
 
else if(($mxc11 >=$rangx7) && ($mxc11<=$rangx8)){
 $colorf1bio="blue";
 $statusfbiobios=$gpa4; }
 
 
 else if(($mxc11 >=$rangx9) && ($mxc11<=$rangx10)){
 $colorf1bio="blue"; $statusfbiobios=$gpa5; 
} 
 
 
 
 else if(($mxc11 >=$rangx11) && ($mxc11<=$rangx12)){
 $colorf1bio="blue"; $statusfbiobios=$gpa6; 
} 
 
  else if(($mxc11 >=$rangx10) && ($mxc11<=$rangx14)){
 $colorf1bio="blue"; $statusfbiobios=$gpa7; 
} 
 
 
  else if(($mxc11 >=$rangx15) && ($mxc11<=$rangx16)){
 $colorf1bio="blue"; $statusfbiobios=$gpa8; 
} 


 $cc=($statusfbio*$richooTTTy);





$query3="update resit set c104='$richooTTTy'
 where matricule='$mats' and departmet='$deptt'and levels='$levels' and sex='3' and db1='$db1' and fname='$courseps'";




 
$qry = mysql_query("select SUM(c101+c102) as total
from resit  where matricule='$mats' and departmet='$deptt' and levels='$levels' and sex='3' and db1='$db1' and fname='$courseps' "); 
$row = mysql_fetch_assoc($qry); 
 $savepsts=$row['total']; 

 
$qry = mysql_query("select SUM(c101+c102) as total
from resit  where matricule='$mats' and departmet='$deptt' and levels='$levels' and sex='3' and db1='$db1' and fname='$courseps' "); 
$row = mysql_fetch_assoc($qry); 
  $savepstss=$row['total']; 


 $mxcyy1= $savepsts;
 $mxcyy= $savepstss;
 
 if(empty($mxcyy)){

 $stmyyy=$savepsts;}
elseif($mxcyy<=""){

  $stmyyy=$savepsts; 
}
 
 elseif($mxcyy>""){

 $stmyyy=(($savepstss+$savepsts)/2); 
}


 $mxcyyy1=$savepstss;

 if(empty($mxcyyy1)){

 $stmyyyy1=$savepsts;}
elseif($mxcyyy1>="50" && $mxcyyy1<=""){

  $stmyyyy1=$savepstss; 
}
 
 elseif($mxcyyy1<$mxcyy1){

  $stmyyyy1=$mxcyy1; 
}




 elseif($mxcyyy1>$mxcyy1 &&  $stmyyy<50  ){

  $stmyyyy1=50; 
}

 elseif($mxcyyy1>$mxcyy1 &&  $stmyyy>=50  ){

  $stmyyyy1=$stmyyy; 
}

 elseif($mxcyyy1>=$mxcyy1 && $mxcyyy1<=$mxcyy1){

  $stmyyyy1=$mxcyyy1; 
}


 elseif($mxcyyy1>=$mxcyy1 && $mxcyyy1<=$mxcyy1){

  $stmyyyy1=$mxcyyy1; 
}




 elseif($mxcyyy1>'50' ){

  $stmyyyy1=$stmyyy; 
}
 elseif($mxcyyy1>'50' &&  $stmyyy>'50'){

  $stmyyyy1=$stmyyy; 
}
 elseif($mxcyyy1>'50' &&  $stmyyy<'50'){

  $stmyyyy1=$mxcyyy1; 
}
 
 
 $mxc11f=$stmyyyy1;
 
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

 
 $statusfbiogff;
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$query3eyy="update resit set c108='$statusfbiogff'
 where matricule='$mats' and departmet='$deptt'and levels='$levels' and sex='3' and db1='$db1' and fname='$courseps'";
 
 
 $xaf=($tm*$statusfbiogff);
$query3eyyy="update resit set c109='$xaf'
 where matricule='$mats' and departmet='$deptt'and levels='$levels' and sex='3' and db1='$db1' and fname='$courseps'";
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$query3ey="update resit set c107='$stmyyy'
 where matricule='$mats' and departmet='$deptt'and levels='$levels' and sex='3' and db1='$db1' and fname='$courseps'";
 
 
 
 
 
 
 
 
 
 
 
 
 

 $cc=($statusfbio*$richooTTTy);
 
 
 
$query13="update resit set c106='$cc'
 where matricule='$mats' and departmet='$deptt' and levels='$levels' and sex='3' and db1='$db1' and fname='$courseps' ";


mysql_query ($query13) or die ('could not updated:'.mysql_error());

mysql_query ($query3) or die ('could not updated:'.mysql_error());

mysql_query ($query3eyyy) or die ('could not updated:'.mysql_error());

mysql_query ($query3eyy) or die ('could not updated:'.mysql_error());

mysql_query ($query3ey) or die ('could not updated:'.mysql_error());

$query3="update resit set c103='$statusfbio'
 where matricule='$mats' and departmet='$deptt'and levels='$levels' and sex='3' and db1='$db1' and fname='$courseps'";


 
 
$query33="update resit set c104='$richooTTTy'
 where matricule='$mats' and departmet='$deptt'and levels='$levels' and sex='3' and db1='$db1' and fname='$courseps'";








 $cc=($statusfbio*$richooTTTy);
$query13="update resit set c106='$cc'
 where matricule='$mats' and departmet='$deptt' and levels='$levels' and sex='3' and db1='$db1' and fname='$courseps' ";



mysql_query ($query13) or die ('could not updated:'.mysql_error());
mysql_query ($query3) or die ('could not updated:'.mysql_error());
mysql_query ($query33) or die ('could not updated:'.mysql_error());






 ?>
		</div></div>
			<div style="float:left;width:50px;HEIGHT:22PX;text-align:CENTER;BORDER-RIGHT:1PX SOLID #000;MARGIN-TOP:1PX;">
		<div style="float:left;width:50px; margin-top:5px;">	 <?php echo $statusfbio;
		  
		  
		  
		  
		  ?>
			</div></div>
			<div style="float:left;width:80px;HEIGHT:22PX;text-align:CENTER;BORDER-RIGHT:1PX SOLID #000;MARGIN-TOP:1PX;">
		 <div style="float:left;width:80px; margin-top:5px;">	 <?php echo $mkikiki=($statusfbio*$richooTTTy);
		  
		  
		  
		  
		  ?>
			</div></div>
			<div style="float:left;width:59px;HEIGHT:22PX;text-align:CENTER;MARGIN-TOP:1PX;">
			<div style="float:left;width:59px; margin-top:5px;">	<?php echo ($exam+$cas);
		  
		  
		  $query13r4="update resit set c107='$mkikiki'
 where matricule='$mats' and departmet='$deptt' and levels='$levels' and sex='3' and db1='$db1' and fname='$courseps' ";

		  
mysql_query ($query13r4) or die ('could not updated:'.mysql_error());
		  ?>

			</div></div>
			
			</div>	
			
			
			
			
		 <?php } ?>
			
			
		
							<?php 


$query = mysql_query("select  * from resit where db1='$db1' and matricule='$mats' and departmet='$deptt' and sex='3' and levels='$levels' order by fname ASC limit 1"); 

		 while ($row = mysql_fetch_array($query)) {
		 
		 
		 
		 
		 
		 ?>
				

			
			
			
					
			
		 <div style="float:left;width:949px; MARGIN-LEFT:-1PX;HEIGHT:22PX;border-left:1px solid #000;border-right:1px solid #000;">
				
	
			 <div style="float:left;width:950px;MARGIN-TOP:-2PX;text-align:center; FONT-SIZE:12PX;height:23px;border-bottom:1px solid #000;">
			
			 <div style="float:left;width:99px;HEIGHT:22PX;TEXT_ALIGN:CENTER;BORDER-RIGHT:1PX SOLID #000;MARGIN-TOP:1PX;">
			
			</div>
						 <div style="float:left;width:470px;HEIGHT:22PX;TEXT-ALIGN:RIGHT;BORDER-RIGHT:1PX SOLID #000;MARGIN-TOP:1PX;">
			<B>TOTAL<B>
			</div>
			
			<div style="float:left;width:60px;HEIGHT:22PX;TEXT_ALIGN:CENTER;BORDER-RIGHT:1PX SOLID #000;MARGIN-TOP:1PX;">
			
				
				
				
				
				
		<?php		
				
			
$qry = mysql_query("select SUM(c104) as total
from resit  where matricule='$mats' and departmet='$deptt' and levels='$levels' and sex='3' and db1='$db1'  "); 
$row = mysql_fetch_assoc($qry); 
echo $tyts4=$row['total']; 
			?>		  <?php 
		$mm78=$tyts4;				  
 if(empty($mm78)){

 $height='90';
 $height2='170';
 }
elseif($mm78>""){

 $height='0'; 
 
 $height2='140';
}
 
						  
						  
						  
						  
						  
						  ?>
				
			</div>
			<div style="float:left;width:60px;HEIGHT:22PX;TEXT_ALIGN:CENTER;BORDER-RIGHT:1PX SOLID #000;MARGIN-TOP:1PX;">
			
			</div>
			<div style="float:left;width:60px;HEIGHT:22PX;TEXT_ALIGN:CENTER;BORDER-RIGHT:1PX SOLID #000;MARGIN-TOP:1PX;">
		
			</div>
			<div style="float:left;width:50px;HEIGHT:22PX;TEXT_ALIGN:CENTER;BORDER-RIGHT:1PX SOLID #000;MARGIN-TOP:1PX;">
			<?php
			
$qry = mysql_query("select SUM(c103) as total
from resit  where matricule='$mats' and departmet='$deptt' and levels='$levels' and sex='3' and db1='$db1'  "); 
$row = mysql_fetch_assoc($qry); 
 echo $tyts=$row['total']; 
			?>
			</div>
			<div style="float:left;width:80px;HEIGHT:22PX;TEXT_ALIGN:CENTER;BORDER-RIGHT:1PX SOLID #000;MARGIN-TOP:1PX;">
				<?php
			
$qry = mysql_query("select SUM(c107) as total
from resit  where matricule='$mats' and departmet='$deptt' and levels='$levels' and sex='3' and db1='$db1'  "); 
$row = mysql_fetch_assoc($qry); 
 echo $tyts4=$row['total']; 
			?>
			</div>
			<div style="float:left;width:63px;HEIGHT:22PX;TEXT_ALIGN:CENTER;MARGIN-TOP:1PX;">
		
			</div>
			
			</div>
			
			
			
					
		 <div style="float:left;width:949px; MARGIN-LEFT:-1PX;HEIGHT:22PX;border-left:1px solid #000;border-right:1px solid #000;">
				
	
			 <div style="float:left;width:950px;MARGIN-TOP:-2PX;text-align:center; FONT-SIZE:12PX;height:23px;border-bottom:1px solid #000;">
			
			 <div style="float:left;width:100px;HEIGHT:22PX;TEXT_ALIGN:CENTER;MARGIN-TOP:1PX;">
			
			</div>
						 <div style="float:left;width:470px;HEIGHT:22PX;TEXT-ALIGN:RIGHT;BORDER-RIGHT:1PX SOLID #000;MARGIN-TOP:1PX;">
			
			</div>
			
			<div style="float:left;width:314px;background:#ccc;HEIGHT:23PX;TEXT_ALIGN:CENTER;BORDER-BOTTOM:1PX SOLID #000;BORDER-TOP:1PX SOLID #000;BORDER-RIGHT:1PX SOLID #000;MARGIN-TOP:1PX;">
			RESIT SEMESTER GPA
			</b>
			</div>
			<div style="float:left;width:63px;background:#ccc;HEIGHT:23PX;TEXT_ALIGN:CENTER;MARGIN-TOP:1PX;BORDER-BOTTOM:1PX SOLID #000;BORDER-TOP:1PX SOLID #000;BORDER-RIGHT:1PX SOLID #000;">
		<?php 

$qry = mysql_query("select SUM(c106) as total
from resit  where matricule='$mats' and departmet='$deptt' and levels='$levels' and sex='3' and db1='$db1' "); 
$row = mysql_fetch_assoc($qry); 
 $savept=$row['total']; 

 



$qry = mysql_query("select sum(c104) as total
from resit where matricule='$mats' and departmet='$deptt'and levels='$levels' and sex='3' and db1='$db1'  "); 
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
 echo  $statusfbiooput="";
  }
  elseif($mxc111yt>'' ){
 printf("%01.2f",($statusfbioopt/$statusfbioop2t));
}?>
	
			</div>
			
			</div>
			
			
			
		 <?php } ?>
			
			
		 <div style="float:left;width:949px; height:<?php echo $height;?>px;">
			
			
		 <div style="float:left;width:949px; MARGIN-LEFT:-1PX;height:33px;border-left:1px solid #000;border-right:1px solid #000;">
				
	
			 <div style="float:left;width:950px;MARGIN-TOP:-2PX;text-align:center; FONT-SIZE:12PX;height:33px;border-bottom:1px solid #000;">
			
			 <div style="float:left;width:100px;height:33px;TEXT_ALIGN:CENTER;MARGIN-TOP:1PX;">
			
			</div>
						 <div style="float:left;width:470px;height:33px;TEXT-ALIGN:RIGHT;BORDER-RIGHT:1PX SOLID #000;MARGIN-TOP:1PX;">
			
			</div>
			
			<div style="float:left;width:314px;background:#989898;HEIGHT:31PX;TEXT_ALIGN:CENTER;BORDER-BOTTOM:1PX SOLID #000;BORDER-TOP:1PX SOLID #000;BORDER-RIGHT:1PX SOLID #000;MARGIN-TOP:1PX;">
			
			<div style="float:left;width:314px;margin-top:5px;">Cummulative GPA</div>
			</b>
			</div>
			<div style="float:left;width:63px;background:#989898;HEIGHT:31PX;TEXT_ALIGN:CENTER;MARGIN-TOP:1PX;BORDER-BOTTOM:1PX SOLID #000;BORDER-TOP:1PX SOLID #000;BORDER-RIGHT:1PX SOLID #000;">
				 
		 <?php 

$qry = mysql_query("select SUM(c108*c104) as total
from resit  where matricule='$mats' and departmet='$deptt' and levels='$levels' and sex='1' and db1='$db1' "); 
$row = mysql_fetch_assoc($qry); 
 $savept19=$row['total']; 




$qry = mysql_query("select SUM(c108*c104) as total
from resit  where matricule='$mats' and departmet='$deptt' and levels='$levels' and sex='2' and db1='$db1' "); 
$row = mysql_fetch_assoc($qry); 
  $savept20=$row['total']; 
  
  
  

$qry = mysql_query("select SUM(c104) as total
from resit  where matricule='$mats' and departmet='$deptt' and levels='$levels' and sex='1' and db1='$db1' "); 
$row = mysql_fetch_assoc($qry); 
 $credit1s1t1=$row['total']; 


  

$qry = mysql_query("select SUM(c104) as total
from resit  where matricule='$mats' and departmet='$deptt' and levels='$levels' and sex='2' and db1='$db1' "); 
$row = mysql_fetch_assoc($qry); 
 $credit1s2t2=$row['total']; 
  ?><?php



$qry = mysql_query("select SUM(c108*c104) as total
from resit  where matricule='$mats' and departmet='$deptt' and levels='$levels' and sex='1' and db1='$db1' "); 
$row = mysql_fetch_assoc($qry); 
 $savept19=$row['total']; 




$qry = mysql_query("select SUM(c108*c104) as total
from resit  where matricule='$mats' and departmet='$deptt' and levels='$levels' and sex='2' and db1='$db1' "); 
$row = mysql_fetch_assoc($qry); 
  $savept20=$row['total']; 
  
  

$qry = mysql_query("select SUM(c104) as total
from resit  where matricule='$mats' and departmet='$deptt' and levels='$levels' and sex='1' and db1='$db1' "); 
$row = mysql_fetch_assoc($qry); 
 $credit1s1t1=$row['total']; 


  

$qry = mysql_query("select SUM(c104) as total
from resit  where matricule='$mats' and departmet='$deptt' and levels='$levels' and sex='2' and db1='$db1' "); 
$row = mysql_fetch_assoc($qry); 
 $credit1s2t2=$row['total']; 
  
  
  
  
  
  
 $mxop=($savept19+$savept20);

 $mxt1sop=($credit1s1t1+$credit1s2t2);




 
  
 $mxc111yt=$savept19; 
  
if(empty($mxc111yt)){
 $statusfbiooput="";
  }
  elseif($mxc111yt>'' ){
 printf("%01.2f",($mxop/$mxt1sop));
}













?>
			
				
			
			
			
			
			
			
		 
		    </div>
		 
		 <?php } ?>
					
				
		<?php		
				
			
$qry = mysql_query("select SUM(c104) as total
from resit  where matricule='$mats' and departmet='$deptt' and levels='$levels' and sex='3' and db1='$db1'  "); 
$row = mysql_fetch_assoc($qry); 
$tyts4=$row['total']; 
			?>		  <?php 
		$mm78=$tyts4;				  
 if(empty($mm78)){

 $height='90';
 $height2='170';
 }
elseif($mm78>""){

 $height='0'; 
 
 $height2='21';
}
 
						  
						  
						  
						  
						  
						  ?>
				
		 <div style="float:left;width:949px;font-weight:normal; HEIGHT:auto;  margin-top:<?php echo $height2;?>px;">
		 
		 <div style="float:left;width:500px; HEIGHT:135PX; "> 
		 
		 <div style="float:left;width:460px;border:1px solid #000;HEIGHT:130PX; ">
		 
		 
		 <div style="float:left;width:280px;border-right:1px solid #000;HEIGHT:132PX;font-size:12px;font-family:arial; ">
		 
		 <div style="float:left;width:240px;HEIGHT:18PX;TEXT-ALIGN:CENTER;"><u>Grade System (%)</u></DIV>
		 
		 <div style="float:left;width:280px;">
		  <div style="float:left;width:15px;HEIGHT:15PX; font-size:11px;">
		 &nbsp;&nbsp;A
		 </div>
		  <div style="float:left;width:50px;HEIGHT:15PX; font-size:11px;">
		 = 4.0 GP
		 </div>
		 <div style="float:left;width:50px;HEIGHT:15PX; font-size:11px;">
		<?php echo $rangx15;?> - <?php echo $rangx16;?> 
		 </div>
		 
		 	  <div style="float:left;width:20px;HEIGHT:15PX;font-size:11px; ">
		 &nbsp;&nbsp;D+
		 </div>
		  <div style="float:left;width:50px;HEIGHT:15PX;font-size:11px; ">
		 = 1.5 GP
		 </div>
		 <div style="float:left;width:85px;HEIGHT:15PX;font-size:11px; ">
		<?php echo $rangx5;?> - <?php echo $rangx6;?> 
		 </div>
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		   <div style="float:left;width:20px;HEIGHT:15PX; font-size:11px;">
		 &nbsp;&nbsp;B+
		 </div>
		  <div style="float:left;width:50px;HEIGHT:15PX; font-size:11px;">
		 = 3.5 GP
		 </div>
		 <div style="float:left;width:50px;HEIGHT:15PX; font-size:11px;">
		<?php echo $rangx13;?> - <?php echo $rangx14;?> 
		 </div>
		 
		 	  <div style="float:left;width:20px;HEIGHT:15PX;font-size:11px; ">
		 &nbsp;&nbsp;D
		 </div>
		  <div style="float:left;width:50px;HEIGHT:15PX;font-size:11px; ">
		 = 1.0 GP
		 </div>
		 <div style="float:left;width:85px;HEIGHT:15PX;font-size:11px; ">
		<?php echo $rangx3;?> - <?php echo $rangx4;?> 
		 </div>
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		   <div style="float:left;width:20px;HEIGHT:15PX; font-size:11px;">
		 &nbsp;&nbsp;B
		 </div>
		  <div style="float:left;width:50px;HEIGHT:15PX; font-size:11px;">
		 = 3.0 GP
		 </div>
		 <div style="float:left;width:50px;HEIGHT:15PX; font-size:11px;">
		<?php echo $rangx11;?> - <?php echo $rangx12;?> 
		 </div>
		 
		 	  <div style="float:left;width:20px;HEIGHT:15PX;font-size:11px; ">
		 &nbsp;&nbsp;F
		 </div>
		  <div style="float:left;width:50px;HEIGHT:15PX;font-size:11px; ">
		 = 1.0 GP
		 </div>
		 <div style="float:left;width:85px;HEIGHT:15PX;font-size:11px; ">
		<?php echo $rangx1;?> - <?php echo $rangx2;?> 
		 </div>
		 
		 
		 
		 
		 
		 
		   <div style="float:left;width:20px;HEIGHT:15PX; font-size:11px;">
		 &nbsp;&nbsp;C+
		 </div>
		  <div style="float:left;width:50px;HEIGHT:15PX; font-size:11px;">
		 = 2.5 GP
		 </div>
		 <div style="float:left;width:70px;HEIGHT:15PX; font-size:11px;">
		<?php echo $rangx9;?> - <?php echo $rangx10;?> 
		 </div>
		 
		 	  <div style="float:left;width:00px;HEIGHT:15PX;font-size:11px; ">
		
		 </div>
		  <div style="float:left;width:50px;HEIGHT:15PX;font-size:11px; ">
	
		 </div>
		 <div style="float:left;width:85px;HEIGHT:15PX;font-size:11px; ">
	
		 </div>
		 
		 
		   <div style="float:left;width:20px;HEIGHT:15PX; font-size:11px;">
		 &nbsp;&nbsp;C
		 </div>
		  <div style="float:left;width:50px;HEIGHT:15PX; font-size:11px;">
		 = 2.5 GP
		 </div>
		 <div style="float:left;width:70px;HEIGHT:15PX; font-size:11px;">
		<?php echo $rangx7;?> - <?php echo $rangx8;?> 
		 </div>
		 
		 	  <div style="float:left;width:00px;HEIGHT:15PX;font-size:11px; ">
		
		 </div>
		  <div style="float:left;width:50px;HEIGHT:15PX;font-size:11px; ">
	
		 </div>
		 	
				 </div> 	 
				 
				 
				 
				 </div> 
		 <div style="float:left;width:240px;margin-top:-130px; margin-left:290px;HEIGHT:100PX;TEXT-ALIGN:CENTER;font-size:11px; ">
		 
		  <div style="float:left;width:200px;height:18PX;TEXT-ALIGN:center;font-family:times;">
		 &nbsp;&nbsp;&nbsp;&nbsp;<u>Degree Classification</u></DIV>
	 <div style="float:left;width:200px;HEIGHT:11PX;TEXT-ALIGN:left;">GPA Class of Degree</DIV>
	 <div style="float:left;width:200px;HEIGHT:13PX;TEXT-ALIGN:left;">3.60-4.00 First Class</DIV>
	 <div style="float:left;width:200px;HEIGHT:13PX;TEXT-ALIGN:left;">3.00-3.59 Second Class-UD</DIV>
	
	 <div style="float:left;width:200px;HEIGHT:13PX;TEXT-ALIGN:left;">2.50-2.99 Second Class-LD</DIV>
	 
	 <div style="float:left;width:200px;HEIGHT:13PX;TEXT-ALIGN:left;">2.25-2.49 Third Class</DIV>
	 
	 <div style="float:left;width:200px;HEIGHT:13PX;TEXT-ALIGN:left;">2.00-2.24 Pass</DIV>
	 
	 
	 
	 <div style="float:left;width:200px;HEIGHT:13PX;TEXT-ALIGN:left;">UP (Upper Division )</DIV>
	 
	 <div style="float:left;width:200px;HEIGHT:13PX;TEXT-ALIGN:left;">LD (Lower Division )</DIV>
	 
	 
	 
	 
	 
		 </div>
		 
	 
		 </div>
		 
	 
		 <div style="float:left;width:400px;text-align:center; margin-left:500px; margin-top:-110px;  HEIGHT:150PX;font-size:17px; "> 
		 <b>Done in Bamenda, on<br><br><br><br>
		 
	The Registrar
		 </div>
		 
		 
		 
		 
		  </div>
		 
		 
		 
		 </div>
		 
		 
		 <div style="float:left;width:949px; HEIGHT:50PX;  margin-top:10px; text-align:left;">
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
registerImageKey('code', 'BCGcode39');

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
