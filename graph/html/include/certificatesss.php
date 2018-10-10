<?php
ini_set('max_execution_time', 300000); //300 seconds = 5 minutes
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
$rollsps=$_GET['roll'];
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
?><html>
<head><TITLE>result slip</TITLE>
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
        width: 1450px;
        min-height: 29.7cm;
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
        size: A4 landscape;
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

</style>
</head>
<body>
<br><?php
$rollsps=$_GET['rollsps'];
$query="select * from courses where roll='$rollsps' 
";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
 
		 ?>
<?php  $deptt=$row['departmet'];

$level=$row['levels'];
$db1=$row['db1'];
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
<?php } ?>
 <?php
 
$roll=$_GET["1"];
$query="select * from school where roll='1'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>
<b>
<?php   $takes=$row[1];?>

<?php  $takes2=$row[2];?>
</b>

 <?php

$levels=$_POST["levels"];

$class=$_POST["class"];
?>
<?php } ?>

<?php
$query="select * from courses where departmet='$deptt' and levels='300'  and db1='$db1'
";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
 
		 ?>
		 
		 <div class="page">
		<div style="float:left; width:1408px; margin-left:-60px;height:965px; MARGIN-TOP:-80PX;  BACKGROUND:URL(report.png); font-family:times;">
		

		 
		 <div style="float:left; width:1400px; height:140px; color:#000; border:1px solid #000;">
		 
		 
		 
		 
		 
		  <div style="float:left; width:679px; height:140px;background:#ddd; color:#000; border-right:1px solid #000;">
		

		 <div style="float:left; width:343px; height:140px; color:#000; border-right:1px solid #000;">
		 
		 <div style="float:left; width:323px; MARGIN-TOP:20PX;height:120px;letter-spacing:1px;TEXT-ALIGN:CENTER; MARGIN-LEFT:5PX;">
<b>
		<?php echo $takes;?>  <?php echo $takes2;?> <BR><?php echo $school7;?> <?php echo $school7b;?> </b>
		<b style="font-family:arial; font-size:12px; font-weight:normal;">
		Website: http://www.himsbuea.org<br>
		E-mail: admission@himsbuea.org<br>
		Contact: (00237) 67982 1672 / 6963 68834
		 </b>
		    </div>
		    </div>
			
			
		 <div style="float:left; width:323px; height:140px; color:#000; ">
			
			 <div style="float:left; width:320px; MARGIN-TOP:50PX;font-weight:bold;height:50px;TEXT-ALIGN:CENTER; MARGIN-LEFT:5PX;">
STUDENT ACADEMIC RECORD
		 
		 
		    </div>
			
		    </div>
			
			
		 
		    </div>
			

		  <div style="float:left; width:619px; height:140px; color:#000; ">
		  
		  <div style="float:left;border-bottom:1px solid #000; width:719px; height:70px; color:#000; ">
		  
		  
			 <div style="float:left; width:249px; height:34px;color:#000;margin-top:5px;">
			 <B>&nbsp;&nbsp;&nbsp;&nbsp;STUDENT NO</B>
			 
		    </div>
		  
			 <div style="float:left; width:249px; height:34px;color:#000;margin-top:5px;">
			 <B>&nbsp;&nbsp;&nbsp;&nbsp;DATE PRINTED</B>
			 
		    </div>
		  
		  
		  
			 <div style="float:left; width:100px; height:34px;color:#000;margin-top:5px;">
			 <B>&nbsp;&nbsp;&nbsp;&nbsp;Page  <?PHP
			 
			 
			 
		$lel=$row["levels"];	 
			 
if(empty($lel)){
 $statusfbio="";}
elseif($lel>='200'&&  $lel<='200'){
 echo $statusfbio="1";
}


elseif($lel>='300'&&  $lel<='300'){
 echo $statusfbio="2";
}
?> of  <?PHP
			 
			 
			 
		$lel=$row["levels"];	 
			 
if(empty($lel)){
 $statusfbio="";}
elseif($lel>='200'&&  $lel<='200'){
 echo $statusfbio="1";
}


elseif($lel>='300'&&  $lel<='300'){
 echo $statusfbio="2";
}
?></B>
			 
		    </div>
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
			 <div style="float:left; width:249px; height:34px;color:#000;font-weight:normal;font-family:Mingliu-ExtB;font-weight:normal;">
			 &nbsp;&nbsp;&nbsp;&nbsp;<?php echo $mats=$row["matricule"];?>
			 
		    </div>
		  
			 <div style="float:left; width:249px; height:34px;color:#000;font-family:Mingliu-ExtB;font-weight:normal;">
			&nbsp;&nbsp;&nbsp;&nbsp; <?php echo $date=date("j -m- Y");?>
			 
		    </div>
		  
		  
		  
			 <div style="float:left; width:100px; height:34px;color:#000;">
			 <B>&nbsp;&nbsp;&nbsp;&nbsp; </B>
			 
		    </div>
		  
		  
		  
		  
		  
		  
		  
		  
		 
		    </div>
		 
		  <div style="float:left; width:619px; height:70px; color:#000; ">
		 
		 
			 <div style="float:left; width:380px; height:34px;color:#000;margin-top:5px;">
			 <B>&nbsp;&nbsp;&nbsp;&nbsp;STUDENT NAMES</B>
			 
		    </div>
		  
			 <div style="float:left; width:220px; height:34px;color:#000;margin-top:5px;">
			 <B>&nbsp;&nbsp;&nbsp;&nbsp;ACADEMIC YEAR</B>
			 
		    </div>
		  
		   <div style="float:left; width:380px; height:34px;color:#000;font-family:Mingliu-ExtB;font-weight:normal;">
			&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row["fname"];?>
			 
		    </div>
		  
			 <div style="float:left; width:220px; height:34px;color:#000;;font-family:Mingliu-ExtB;font-weight:normal;">
			&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $pt=$row["db1"];?>
			 
		    </div>
		 
		 
		 
		    </div>
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		    </div>
			
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 </div>


		 
		 <div style="float:left; width:1400px; height:100px;margin-top:4px; color:#000; border:1px solid #000;">
		 
		 <div style="float:left; width:179px; height:100px; color:#000; border-right:1px solid #000;">
 <div style="float:left; width:179px; height:30px; BORDER-BOTTOM:1PX SOLID #000;MARGIN-TOP:5PX;color:#000; TEXT-ALIGN:CENTER;FONT-WEIGHT:BOLD;">

		 DATE OF BIRTH
		 </div>
		 
		 
		 <div style="float:left; width:179px; height:65px; color:#000; TEXT-ALIGN:CENTER;">

		 
		 <div style="float:left; width:59px; height:65px;  border-right:1px solid #000;color:#000; TEXT-ALIGN:CENTER;">

		 
		 </div>
		 
		 	 <div style="float:left; width:59px; height:65px;  border-right:1px solid #000;color:#000; TEXT-ALIGN:CENTER;">

		 
		 </div>
		 	 <div style="float:left; width:59px; height:65px; color:#000; TEXT-ALIGN:CENTER;">

		 
		 </div>
	
		 </div>
		 
		 
		 
		 </div>
 
		 <div style="float:left; width:379px; height:100px; color:#000; border-right:1px solid #000;">

		 
		 
		 
		 <div style="float:left; width:379px; height:30px;FONT-WEIGHT:BOLD; MARGIN-TOP:5PX;color:#000;TEXT-ALIGN:CENTER;">
		 
		 FIELD OF STUDY : 
		 
		 
		 </div>
		 
		 
		 <div style="float:left; width:379px; height:30px; MARGIN-TOP:5PX;color:#000;TEXT-ALIGN:CENTER;">
		 
	
		 
		 
		 </div>
		 
		 
		 
		 <div style="float:left; width:379px; height:30px; FONT-WEIGHT:BOLD;color:#000;TEXT-ALIGN:CENTER;">
		BUSINESS
		 
		 
		 </div>
		 
		 
		 
		 
		 
		 
		 </div>

		 <div style="float:left; width:69px; height:100px; color:#000; border-right:1px solid #000;">
		 
		 
		 <div style="float:left; width:69px;FONT-WEIGHT:BOLD; height:30px;MARGIN-TOP:5PX; color:#000; TEXT-ALIGN:CENTER;">
		 
SEX

		 </div>
		 <div style="float:left; width:69px; height:30px;MARGIN-TOP:5PX; color:#000; TEXT-ALIGN:CENTER;">
		 


		 </div> 
		 
		 
		 <div style="float:left; width:69px; height:30px; color:#000; TEXT-ALIGN:CENTER;font-family:Mingliu-ExtB;font-weight:normal;">
		 <?php echo $row["sex"];?>


		 </div> 
		 
		 
		 
		 </div>
 <div style="float:left; width:349px; height:100px; color:#000; border-right:1px solid #000;">
 
 <div style="float:left; width:349px; height:30px;FONT-WEIGHT:BOLD; color:#000; MARGIN-TOP:5PX;TEXT-ALIGN:CENTER;">
 DEPARTMENT
 
		 </div>
 
  <div style="float:left; width:349px; height:30px; color:#000; TEXT-ALIGN:CENTER;">

 
		 </div>
 
 <div style="float:left; width:349px; height:30px;color:#000; MARGIN-TOP:5PX;TEXT-ALIGN:CENTER;font-family:Mingliu-ExtB;font-weight:normal;">
<?php echo $deptt=$row["departmet"]; $level=$row["levels"];?>
 
		 </div>
		 
		 
		 </div>

		 
		 
		 
		 
		 
		 
		 
		 
		  <div style="float:left; width:319px; height:100px; color:#000; ">
 <div style="float:left; width:319px; height:70px;MARGIN-TOP:10PX; color:#000; text-align:center;font-weight:bold;line-height:23px; ">

		  This transcript is not valid without the Official Seal of the School 
		  
		 </div>
		  
		  
		  
		 </div>

		 
		 
		 
		 </div>


		 <div style="float:left; width:1400px; height:46px;margin-top:4px; color:#000;OPACITY:0.7; background:#ddd;border:1px solid #000;FONT-Size:12px;">


		 <div style="float:left; width:80px; height:45px; color:#000; border-right:1px solid #000;text-align:center;">
		 <b>COURSE <BR>
		 CODE
		 </b>
		 
		 </div>
		 
		 	 <div style="float:left; width:350px; height:45px; color:#000; border-right:1px solid #000;text-align:center;">
		 <b>COURSE TITLE</B>
		
		 
		 
		 </div>
		 
		 
		 		 
		 	 <div style="float:left; width:52px; height:46px; color:#000; border-right:1px solid #000;text-align:center;">
		 <b>STATUS</B>
		
		 
		 
		 </div>
		 
		 
		 		 		 
		 	 <div style="float:left; width:54px; height:46px; color:#000; border-right:1px solid #000;text-align:center;">
		 <b>CREDIT<BR> VALUE </B>
		
		 
		 
		 </div>
		 		 		 		 
		 	 <div style="float:left; width:54px; height:46px; color:#000; border-right:1px solid #000;text-align:center;">
		 <b>GRADE </B>
		
		 
		 
		 </div>
		 
		 
		 
		 		 		 
		 	 <div style="float:left; width:54px; height:46px; color:#000; border-right:1px solid #000;text-align:center;">
		 <b>TOTAL <BR>MARKS </B>
		
		 
		 
		 </div>
		  		 
		 	 <div style="float:left; width:54px; height:46px; color:#000; border-right:1px solid #000;text-align:center;">
		 <b>MXC </B>
		
		 
		 
		 </div>
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		  <div style="float:left; width:80px; height:45px; color:#000; border-right:1px solid #000;text-align:center;">
		 <b>COURSE <BR>
		 CODE
		 </b>
		 
		 </div>
		 
		 	 <div style="float:left; width:350px; height:45px; color:#000; border-right:1px solid #000;text-align:center;">
		 <b>COURSE TITLE</B>
		
		 
		 
		 </div>
		 
		 
		 		 
		 	 <div style="float:left; width:52px; height:46px; color:#000; border-right:1px solid #000;text-align:center;">
		 <b>STATUS</B>
		
		 
		 
		 </div>
		 
		 
		 		 		 
		 	 <div style="float:left; width:54px; height:46px; color:#000; border-right:1px solid #000;text-align:center;">
		 <b>CREDIT<BR> VALUE </B>
		
		 
		 
		 </div>
		 		 		 		 
		 	 <div style="float:left; width:54px; height:46px; color:#000; border-right:1px solid #000;text-align:center;">
		 <b>GRADE </B>
		
		 
		 
		 </div>
		 
		 
		 
		 		 		 
		 	 <div style="float:left; width:54px; height:46px; color:#000; border-right:1px solid #000;text-align:center;">
		 <b>TOTAL <BR>MARKS </B>
		
		 
		 
		 </div>
		  		 
		 	 <div style="float:left; width:54px; height:46px; color:#000; text-align:center;">
		 <b>MXC </B>
		
		 
		 
		 </div>
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 </div>



		 <div style="float:left; width:1400px; height:600px;margin-top:4px; color:#000;border:1px solid #000;FONT-Size:12px;">


		 <div style="float:left; width:80px; height:600px; color:#000; border-right:1px solid #000;text-align:center;">
	
	
	
	
		 
		 </div>
		 
		 	 <div style="float:left; width:350px; height:600px; color:#000; border-right:1px solid #000;text-align:center;">
		 
		
		 
		 
		 </div>
		 
		 
		 		 
		 	 <div style="float:left; width:52px; height:600px; color:#000; border-right:1px solid #000;text-align:center;">
		
		 
		 
		 </div>
		 
		 
		 		 		 
		 	 <div style="float:left; width:54px; height:600px; color:#000; border-right:1px solid #000;text-align:center;">

		
		 
		 
		 </div>
		 		 		 		 
		 	 <div style="float:left; width:54px; height:600px; color:#000; border-right:1px solid #000;text-align:center;">
		 
		
		 
		 
		 </div>
		 
		 
		 
		 		 		 
		 	 <div style="float:left; width:54px; height:600px; color:#000; border-right:1px solid #000;text-align:center;">
		
		
		 
		 
		 </div>
		  		 
		 	 <div style="float:left; width:54px; height:600px; color:#000; border-right:1px solid #000;text-align:center;">
		
		
		 
		 
		 </div>
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		  <div style="float:left; width:80px; height:600px; color:#000; border-right:1px solid #000;text-align:center;">
	

		 
		 </div>
		 
		 	 <div style="float:left; width:350px; height:600px; color:#000; border-right:1px solid #000;text-align:center;">

		 
		 
		 </div>
		 
		 
		 		 
		 	 <div style="float:left; width:52px; height:600px; color:#000; border-right:1px solid #000;text-align:center;">
		
		 
		 
		 </div>
		 
		 
		 		 		 
		 	 <div style="float:left; width:54px; height:600px; color:#000; border-right:1px solid #000;text-align:center;">
	
		 
		 </div>
		 		 		 		 
		 	 <div style="float:left; width:54px; height:600px; color:#000; border-right:1px solid #000;text-align:center;">
		
		 
		 
		 </div>
		 
		 
		 
		 		 		 
		 	 <div style="float:left; width:54px; height:600px; color:#000; border-right:1px solid #000;text-align:center;">
		
		 
		 </div>
		  		 
		 	 <div style="float:left; width:54px; height:600px; color:#000; text-align:center;">
		
		
		 
		 
		 </div>
		 

		 </div>

		 <div style="float:left; width:1400px; height:100px;margin-top:4px; color:#000; ">

		 
		 <div style="float:left; width:200px; height:100px;color:#000; ">
		 </div>
		  <div style="float:left; width:80px; height:100px;color:#000; ">
		
		  <div style="float:left; width:70px; height:25px;color:#000; ">
		  Signature
		 </div>
		 
		  <div style="float:left; width:200px;TEXT-ALIGN:CENTER; height:65px;color:#000;MARGIN-TOP:5PX; ">
		<B>REGISTRAR</B>
		 </div>
		 </div>
		 
		 
		 	  <div style="float:left; width:300px; height:100px;color:#000; ">
		
		  <div style="float:left; width:250px; height:25px;color:#000;border-bottom:1px dashed #000; ">
		  
		 </div>
		 
		 
		 
		 
		 
		 
		 
		 
		 
		  <div style="float:left; width:250px; height:75px;color:#000; ">
		
		 </div>
		 
 </div>
		 
		 	  <div style="float:left; width:300px; height:100px;color:#000; ">	
			  </DIV>
	
		 	  <div style="float:left; width:100px; height:100px;color:#000; ">	 
		 
		 <div style="float:left; width:70px; height:25px;color:#000; ">
		  Signature
		 </div>
		 
		  <div style="float:left; width:350px;TEXT-ALIGN:CENTER; height:65px;color:#000;MARGIN-TOP:5PX; ">
		<B>DEPUTY REGISTRAR I/C OF ACADEMICS</B>
		 </div>
		 
		 
		  <div style="float:left; width:350px;MARGIN-LEFT:80PX;TEXT-ALIGN:CENTER;BORDER-BOTTOM:1PX DASHED #000; height:25px;color:#000;MARGIN-TOP:-95PX; ">
		  </div>
		 
		 </div>
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 </div>
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 <div style="float:left; width:1400px; height:600px;margin-top:-700px; color:#000;FONT-Size:12px;">
		 
		 
		 <div style="float:left; width:698px; height:auto;FONT-Size:12px;">
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 <div style="float:left; width:80px; height:15px; color:#000; text-align:center;">
	
	
	
	
		 
		 </div>
		 
		 	 <div style="float:left; width:350px; height:15px; color:#000; text-align:center;">
		 
		
		 <DIV STYLE="float:left;margin-left:10px;width:280px;font-size:11px; letter-spacing:2px;text-align:left;height:15px;FONT-WEIGHT:BOLD;TEXT-TRANSFORM:UPPERCASE;">
		 
		
		  				<?php 

$levels=$row['levels'];
$qry = mysql_query("select  db1 as total
from resit where matricule='$mats' and sex='1'"); 
$row = mysql_fetch_assoc($qry); 
 $db1=$row['total']; 
		$take=$db1; 
		 ?>
		
<?php 
			
			 $myhu=$levels; 
  
if(empty($myhu)){
 $smyhu="";}
elseif($myhu>='200' && $myhu<='200' ){
 
echo $smyhu="First Semester Year I";
}
elseif($myhu>='300' && $myhu<='300' ){
 
echo $smyhu="First Semester Year II";
}
?> :-<?php echo $db1;?>
		 </div></div>
		 
		 
		 		 
		 	 <div style="float:left; width:52px; height:15px; color:#000; text-align:center;">
		
		 
		 
		 </div>
		 
		 
		 		 		 
		 	 <div style="float:left; width:54px; height:15px; color:#000; text-align:center;">

		
		 
		 
		 </div>
		 		 		 		 
		 	 <div style="float:left; width:54px; height:15px; color:#000; text-align:center;">
		 
		
		 
		 
		 </div>
		 
		 
		 
		 		 		 
		 	 <div style="float:left; width:54px; height:15px; color:#000; text-align:center;">
		
		
		 
		 
		 </div>
		  		 
		 	 <div style="float:left; width:54px; height:15px; color:#000; text-align:center;">
		
		
		 
		 
		 </div>
			<?php 
$take=$pt;

$query = mysql_query("select  * from resit where db1='$take' and matricule='$mats' and departmet='$deptt' and sex='1' and levels='$level'  and fname>'' order by (c101+c102) DESC"); 

		 while ($row = mysql_fetch_array($query)) {
		 
		 
		 
		 
		 
		 ?>
		 
		 
		 
		 <div style="float:left; width:80px; height:15px; color:#000; text-align:center;">
	
		 
		 <DIV STYLE="float:left;margin-left:5px;text-align:left;width:75px;font-size:11px; text-align:center;height:auto;">
<?php echo $courseps=$row['fname'];
		
		
		$exam=$row['c102'];
		
		$cas=$row['c101'];?>
		    </div>
		 
		 
		 
		 
		    </div>
	
	
		 	 <div style="float:left; width:350px; height:15px; color:#000; text-align:center;">
		 
		
		 
		  
		  
		  
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
		 
		 
		 		 
		 	 <div style="float:left; width:52px; height:15px; color:#000; text-align:center;">
			  
		 <DIV STYLE="float:left;margin-left:0px;text-transform:uppercase; font-size:11px;width:60px; text-align:center;height:auto;">
<?php echo $status;?>
		    </div>
		 
		 
		 </div>
		 
		 
		 		 		 
		 	 <div style="float:left; width:54px; height:15px; color:#000; text-align:center;">
 <DIV STYLE="float:left;margin-left:0px; width:55px;font-size:11px; text-align:center;height:auto;">
<?php echo $tm=$richooTTTy;?>
		    </div>
		
		 
		 
		 </div>
		 		 		 		 
		 	 <div style="float:left; width:54px; height:15px; color:#000; text-align:center;">
		 
		<?php $ns=
($exam+$cas); 


 $mxc11=$ns;
 
 
if(empty($mxc11)){$colorf1bio=""; $statusfbio="";

 echo '<div style="color:'.colorf1bio.';">'.$statusfbio.'</div>';}
elseif($mxc11>=$rangx1 && $mxc11<=$rangx2 ){
 $colorf1bio="";
 $statusfbio="F";
 echo'<div style=" color:'. $colorf1bio.';">'.$statusfbio.'</div>';
}else if(($mxc11 >=$rangx3) && ($mxc11<=$rangx4)){
 $colorf1bio="blue";
 $statusfbio="D";
 echo'<div style=" color:'. $colorf1bio.';">'.$statusfbio.'</div>';}else if(($mxc11 >=$rangx5) && ($mxc11<=$rangx6)){
 $colorf1bio="blue";
 $statusfbio="C";
 echo'<div style=" color:'. $colorf1bio.';">'.$statusfbio.'</div>';}
 
 
else if(($mxc11 >=$rangx7) && ($mxc11<=$rangx8)){
 $colorf1bio="blue";
 $statusfbio="B";
 echo'<div style=" color:'. $colorf1bio.';">'.$statusfbio.'</div>';}
 
 
 else if(($mxc11 >=$rangx9) && ($mxc11<=$rangx10)){
 $colorf1bio="blue"; $statusfbio="A"; echo'<div style=" color:'. $colorf1bio.';">'.$statusfbio.'</div>';
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
if(empty($mxc11)){$colorf1bio=""; echo $statusfbio="F";}
elseif($mxc11>=$rangx1 && $mxc11<=$rangx2 ){
 $colorf1bio="";
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

$manS=($exam+$cas);
$man=($exam+$cas)/5;
$ftsS=($manS*$tm);

$fts=($man*$tm);
$query3="update resit set c103='$fts',c104='$tm',c105='$ftsS',c107='$fts'
 where matricule='$mats' and departmet='$deptt'and levels='$level' and sex='1' and db1='$take' and fname='$courseps'";







mysql_query ($query3) or die ('could not updated:'.mysql_error());




 ?>
		 
		 
		 </div>
		 
		 
		 
		 		 		 
		 	 <div style="float:left; width:54px; height:15px; color:#000; text-align:center;">
				 <DIV STYLE="float:left;margin-left:0px; width:60px; font-size:11px;text-align:center;height:auto;"><?PHP ECHO $mx=($exam+$cas);?>
		    </div>
		 
		 
		 </div>
		  		 
		 	 <div style="float:left; width:54px; height:15px; color:#000; text-align:center;">
		
		
		 	 <DIV STYLE="float:left;margin-left:0px; width:60px;font-size:11px; text-align:center;height:auto;">
		 <?PHP ECHO ($mx*$richooTTTy);?>  </div>
		 
		 
		 </div>
		 
		 
		 	









			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			












			<?php }
		  ?>
		 
		 
		







		 <div style="float:left; width:80px; height:15px; color:#000; text-align:center;">
	
	
	
	
		 
		 </div>
		 
		 	 <div style="float:left; width:350px; height:15px; color:#000; text-align:center;">
		 
		
		 
		 
		 </div>
		 
		 
		 		 
		 	 <div style="float:left; width:52px; height:15px; color:#000; text-align:center;">
		
		 
		 
		 </div>
		 
		 
		 		 		 
		 	 <div style="float:left; width:54px; height:15px; color:#000; text-align:center;">

		
		 
		 
		 </div>
		 		 		 		 
		 	 <div style="float:left; width:54px; height:15px; color:#000; text-align:center;">
		 
		
		 
		 
		 </div>
		 
		 
		 
		 		 		 
		 	 <div style="float:left; width:54px; height:15px; color:#000; text-align:center;">
		
		
		 
		 
		 </div>
		  		 
		 	 <div style="float:left; width:54px; height:15px; color:#000; text-align:center;">
		
		
		 
		 
		 </div>
		 










		
		 <div style="float:left; width:80px; height:15px; color:#000; text-align:center;">
	
	
	
	
		 
		 </div>
		 
		 	 <div style="float:left; width:350px; height:15px; color:#000; ">
		 
		 	 <div style="float:left; width:250px; height:15px; color:#000;margin-left:20px; ">
		
		 TOTAL CREDITS ATTEMPTED:<?php 



$qry = mysql_query("select sum(c104) as total
from resit where matricule='$mats' and departmet='$deptt'and levels='$level' and sex='1' and db1='$take'  "); 
$row = mysql_fetch_assoc($qry); 
$save=$row['total']; 
 



$qry = mysql_query("select * FROM  resit where matricule='$mats' and departmet='$deptt'and levels='$level' and sex='1' and db1='$take'  "); 
$num_rows=mysql_num_rows($qry);
  $richooTTTyss=$num_rows; 



printf("%01.2f",($save));?>

		 </div>
		 
		 </div>
		 
		 
		 		 
		 	 <div style="float:left; width:52px; height:15px; color:#000; text-align:center;">
		
		 
		 
		 </div>
		 
		 
		 		 		 
		 	 <div style="float:left; width:54px; height:15px; color:#000; text-align:center;">

		
		 
		 
		 </div>
		 		 		 		 
		 	 <div style="float:left; width:54px; height:15px; color:#000; text-align:center;">
		 
		
		 
		 
		 </div>
		 
		 
		 
		 		 		 
		 	 <div style="float:left; width:54px; height:15px; color:#000; text-align:center;">
		
		
		 
		 
		 </div>
		  		 
		 	 <div style="float:left; width:54px; height:15px; color:#000; text-align:center;">
		
		
		 
		 
		 </div>
		 







	 
		 
		 
		 
		 
		 
			
			
		 <div style="float:left; width:80px; height:15px; color:#000; text-align:center;">
	
	
	
	
		 
		 </div>
		 
		 	 <div style="float:left; width:350px; height:15px; color:#000; ">
		 
		 	 <div style="float:left; width:250px; height:15px; color:#000;margin-left:20px; ">


TOTAL MARKS EARNED:<?php 



$qry = mysql_query("select sum(c105) as total
from resit where matricule='$mats' and departmet='$deptt'and levels='$level' and sex='1' and db1='$take'  "); 
$row = mysql_fetch_assoc($qry); 
 $savye=$row['total']; 
 $mm1= $savye;


$qry = mysql_query("select sum(c103) as total
from resit where matricule='$mats' and departmet='$deptt'and levels='$levels' and sex='1' and db1='$take'  "); 
$row = mysql_fetch_assoc($qry); 
$savyes=$row['total']; 
 $mmm1=$savyes;
$qry = mysql_query("select * FROM  resit where matricule='$mats' and departmet='$deptt'and levels='$level' and sex='1' and db1='$take'  "); 
$num_rows=mysql_num_rows($qry);
  $richooTTTyss=$num_rows; 



printf("%01.2f",($savye));?>


		 
		 </div>
		 
		 </div>
		 
		 
		 		 
		 	 <div style="float:left; width:52px; height:15px; color:#000; text-align:center;">
		
		 
		 
		 </div>
		 
		 
		 		 		 
		 	 <div style="float:left; width:54px; height:15px; color:#000; text-align:center;">

		
		 
		 
		 </div>
		 		 		 		 
		 	 <div style="float:left; width:54px; height:15px; color:#000; text-align:center;">
		 
		
		 
		 
		 </div>
		 
		 
		 
		 		 		 
		 	 <div style="float:left; width:54px; height:15px; color:#000; text-align:center;">
		
		
		 
		 
		 </div>
		  		 
		 	 <div style="float:left; width:54px; height:15px; color:#000; text-align:center;">
		
		
		 
		 
		 </div>


		 
			
			
		 <div style="float:left; width:80px; height:15px; color:#000; text-align:center;">
	
	
	
	
		 
		 </div>
		 
		 	 <div style="float:left; width:350px; height:15px; color:#000; ">
		 
		 	 <div style="float:left; width:250px; height:15px; color:#000;margin-left:20px; ">


TOTAL CREDITS EARN: <?php 



$qry = mysql_query("select sum(c104) as total
from resit where matricule='$mats' and departmet='$deptt'and levels='$level' and sex='1' and db1='$take'  "); 
$row = mysql_fetch_assoc($qry); 
$save=$row['total']; 
 $marks1=$save;



$qry = mysql_query("select * FROM  resit where matricule='$mats' and departmet='$deptt'and levels='$level' and sex='1' and db1='$take'  "); 
$num_rows=mysql_num_rows($qry);
  $richooTTTyss=$num_rows; 



printf("%01.2f",($save));?>
		 
		 </div>
		 
		 </div>
		 
		 
		 		 
		 	 <div style="float:left; width:52px; height:15px; color:#000; text-align:center;">
		
		 
		 
		 </div>
		 
		 
		 		 		 
		 	 <div style="float:left; width:54px; height:15px; color:#000; text-align:center;">

		
		 
		 
		 </div>
		 		 		 		 
		 	 <div style="float:left; width:54px; height:15px; color:#000; text-align:center;">
		 
		
		 
		 
		 </div>
		 
		 
		 
		 		 		 
		 	 <div style="float:left; width:54px; height:15px; color:#000; text-align:center;">
		
		
		 
		 
		 </div>
		  		 
		 	 <div style="float:left; width:54px; height:15px; color:#000; text-align:center;">
		
		
		 
		 
		 </div>		 
		 
		 
		 
	
			
			
		 <div style="float:left; width:80px; height:15px; color:#000; text-align:center;">
	
	
	
	
		 
		 </div>
		 
		 	 <div style="float:left; width:350px; height:15px; color:#000; ">
		 
		 	 <div style="float:left; width:250px; height:15px; color:#000;margin-left:100px;font-weight:bold; ">


SEMESTER AVERAGE: <?php 





$qry = mysql_query("select sum(c103) as total
from resit where matricule='$mats' and departmet='$deptt'and levels='$level' and sex='1' and db1='$take'  "); 
$row = mysql_fetch_assoc($qry); 
$save=$row['total']; 
 


$qry = mysql_query("select sum(c104) as total
from resit where matricule='$mats' and departmet='$deptt'and levels='$level' and sex='1' and db1='$take'  "); 
$row = mysql_fetch_assoc($qry); 
$saves=$row['total']; 
 


$qry = mysql_query("select * FROM  resit where matricule='$mats' and departmet='$deptt'and levels='$level' and sex='1' and db1='$take'  "); 
$num_rows=mysql_num_rows($qry);
  $richooTTTyss=$num_rows; 



$fgg=$save;
if(empty($fgg)){
 echo $statusfbiog="";}
elseif($fgg>'' ){

printf("%01.2f",$ui1=($save/$saves));
}





$query3r="update courses set c126='$ui'
 where matricule='$mats' and departmet='$deptt'and levels='$level'  and db1='$take' ";







mysql_query ($query3r) or die ('could not updated:'.mysql_error());



?>
		 
		 </div>
		 
		 </div>
		 
		 
		 		 
		 	 <div style="float:left; width:52px; height:15px; color:#000; text-align:center;">
		
		 
		 
		 </div>
		 
		 
		 		 		 
		 	 <div style="float:left; width:54px; height:15px; color:#000; text-align:center;">

		
		 
		 
		 </div>
		 		 		 		 
		 	 <div style="float:left; width:54px; height:15px; color:#000; text-align:center;">
		 
		
		 
		 
		 </div>
		 
		 
		 
		 		 		 
		 	 <div style="float:left; width:54px; height:15px; color:#000; text-align:center;">
		
		
		 
		 
		 </div>
		  		 
		 	 <div style="float:left; width:54px; height:15px; color:#000; text-align:center;">
		
		
		 
		 
		 </div>		 
		 	 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
	








































































































































		 
		 
		 
		 <div style="float:left; width:80px; height:15px; color:#000; text-align:center;">
	
	
	
	
		 
		 </div>
		 
		 	 <div style="float:left; width:350px; height:15px; color:#000; text-align:center;">
		 
		
		 <DIV STYLE="float:left;margin-left:10px;width:280px;font-size:11px; letter-spacing:2px;text-align:left;height:15px;FONT-WEIGHT:BOLD;TEXT-TRANSFORM:UPPERCASE;">
		 
			  
	<?php 


$qry = mysql_query("select  db1 as total
from resit where matricule='$mats' and sex='3' and db1='$take'"); 
$row = mysql_fetch_assoc($qry); 
 $db1=$row['total']; 
	$mxc56=$db1;
if(empty($mxc56))
{
$colorf1bio=""; 
echo $statusfbio="";}
elseif($mxc56>'' ){
 $colorf1bio="";
echo  $statusfbio="RESIT SEMESTER : - $take";
}








	?> 
		 </div></div>
		 
		 
		 		 
		 	 <div style="float:left; width:52px; height:15px; color:#000; text-align:center;">
		
		 
		 
		 </div>
		 
		 
		 		 		 
		 	 <div style="float:left; width:54px; height:15px; color:#000; text-align:center;">

		
		 
		 
		 </div>
		 		 		 		 
		 	 <div style="float:left; width:54px; height:15px; color:#000; text-align:center;">
		 
		
		 
		 
		 </div>
		 
		 
		 
		 		 		 
		 	 <div style="float:left; width:54px; height:15px; color:#000; text-align:center;">
		
		
		 
		 
		 </div>
		  		 
		 	 <div style="float:left; width:54px; height:15px; color:#000; text-align:center;">
		
		
		 
		 
		 </div>
			<?php 
$take=$pt;

$query = mysql_query("select  * from resit where db1='$take' and matricule='$mats' and departmet='$deptt' and sex='3' and levels='$level'  and fname>'' order by (c101+c102) DESC"); 

		 while ($row = mysql_fetch_array($query)) {
		 
		 
		 
		 
		 
		 ?>
		 
		 
		 
		 <div style="float:left; width:80px; height:15px; color:#000; text-align:center;">
	
		 
		 <DIV STYLE="float:left;margin-left:5px;text-align:left;width:75px;font-size:11px; text-align:center;height:auto;">
<?php echo $courseps=$row['fname'];
		
		
		$exam=$row['c102'];
		
		$cas=$row['c101'];?>
		    </div>
		 
		 
		 
		 
		    </div>
	
	
		 	 <div style="float:left; width:350px; height:15px; color:#000; text-align:center;">
		 
		
		 
		  
		  
		  
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
		 
		 
		 		 
		 	 <div style="float:left; width:52px; height:15px; color:#000; text-align:center;">
			  
		 <DIV STYLE="float:left;margin-left:0px;text-transform:uppercase; font-size:11px;width:60px; text-align:center;height:auto;">
<?php echo $status;?>
		    </div>
		 
		 
		 </div>
		 
		 
		 		 		 
		 	 <div style="float:left; width:54px; height:15px; color:#000; text-align:center;">
 <DIV STYLE="float:left;margin-left:0px; width:55px;font-size:11px; text-align:center;height:auto;">
<?php echo $tm=$richooTTTy;?>
		    </div>
		
		 
		 
		 </div>
		 		 		 		 
		 	 <div style="float:left; width:54px; height:15px; color:#000; text-align:center;">
		 
		<?php $ns=
($exam+$cas); 


 $mxc11=$ns;
 
 
if(empty($mxc11)){$colorf1bio=""; $statusfbio="";

 echo '<div style="color:'.colorf1bio.';">'.$statusfbio.'</div>';}
elseif($mxc11>=$rangx1 && $mxc11<=$rangx2 ){
 $colorf1bio="";
 $statusfbio="F";
 echo'<div style=" color:'. $colorf1bio.';">'.$statusfbio.'</div>';
}else if(($mxc11 >=$rangx3) && ($mxc11<=$rangx4)){
 $colorf1bio="blue";
 $statusfbio="D";
 echo'<div style=" color:'. $colorf1bio.';">'.$statusfbio.'</div>';}else if(($mxc11 >=$rangx5) && ($mxc11<=$rangx6)){
 $colorf1bio="blue";
 $statusfbio="C";
 echo'<div style=" color:'. $colorf1bio.';">'.$statusfbio.'</div>';}
 
 
else if(($mxc11 >=$rangx7) && ($mxc11<=$rangx8)){
 $colorf1bio="blue";
 $statusfbio="B";
 echo'<div style=" color:'. $colorf1bio.';">'.$statusfbio.'</div>';}
 
 
 else if(($mxc11 >=$rangx9) && ($mxc11<=$rangx10)){
 $colorf1bio="blue"; $statusfbio="A"; echo'<div style=" color:'. $colorf1bio.';">'.$statusfbio.'</div>';
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
if(empty($mxc11)){$colorf1bio=""; echo $statusfbio="F";}
elseif($mxc11>=$rangx1 && $mxc11<=$rangx2 ){
 $colorf1bio="";
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

$manS=($exam+$cas);
$man=($exam+$cas)/5;
$ftsS=($manS*$tm);

$fts=($man*$tm);



$qry = mysql_query("select sum(c101+c102) as total
from resit where matricule='$mats' and departmet='$deptt'and levels='$level' and sex='2' and db1='$take' and fname='$courseps' "); 
$row = mysql_fetch_assoc($qry); 
 $g11=($row['total']/5); 


$qry = mysql_query("select sum(c101+c102) as total
from resit where matricule='$mats' and departmet='$deptt'and levels='$level' and sex='1' and db1='$take' and fname='$courseps' "); 
$row = mysql_fetch_assoc($qry); 
 $g1=($row['total']/5); 
$m1u=($g11);
if(empty($m1)){
 $sg1=($g1);}
elseif($mxc11>'' ){
 $sg1=($g11); 
}
$qry = mysql_query("select sum(c101+c102) as total
from resit where matricule='$mats' and departmet='$deptt'and levels='$level' and sex='3' and db1='$take'and fname='$courseps'  "); 
$row = mysql_fetch_assoc($qry); 
$g2=($row['total']/5); 
$nmmmm=($g2*$tm);
$nx2=(($nmmmm+$sg1)/2);
  $nmx=$nx2;




$querye3="update resit set c107='$nmx'
 where matricule='$mats' and departmet='$deptt'and levels='$level'  and db1='$take' and fname='$courseps'";







mysql_query ($querye3) or die ('could not updated:'.mysql_error());


$query3="update resit set c103='$fts',c104='$tm',c105='$ftsS',c107='$fts'
 where matricule='$mats' and departmet='$deptt'and levels='$level' and sex='3' and db1='$take' and fname='$courseps'";







mysql_query ($query3) or die ('could not updated:'.mysql_error());




 ?>
		 
		 
		 </div>
		 
		 
		 
		 		 		 
		 	 <div style="float:left; width:54px; height:15px; color:#000; text-align:center;">
				 <DIV STYLE="float:left;margin-left:0px; width:60px; font-size:11px;text-align:center;height:auto;"><?PHP ECHO $mx=($exam+$cas);?>
		    </div>
		 
		 
		 </div>
		  		 
		 	 <div style="float:left; width:54px; height:15px; color:#000; text-align:center;">
		
		
		 	 <DIV STYLE="float:left;margin-left:0px; width:60px;font-size:11px; text-align:center;height:auto;">
		 <?PHP ECHO ($mx*$richooTTTy);?>  </div>
		 
		 
		 </div>
		 
		 
		 	









			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			












			<?php }
		  ?>
		 
		 
		







		 <div style="float:left; width:80px; height:15px; color:#000; text-align:center;">
	
	
	
	
		 
		 </div>
		 
		 	 <div style="float:left; width:350px; height:15px; color:#000; text-align:center;">
		 
		
		 
		 
		 </div>
		 
		 
		 		 
		 	 <div style="float:left; width:52px; height:15px; color:#000; text-align:center;">
		
		 
		 
		 </div>
		 
		 
		 		 		 
		 	 <div style="float:left; width:54px; height:15px; color:#000; text-align:center;">

		
		 
		 
		 </div>
		 		 		 		 
		 	 <div style="float:left; width:54px; height:15px; color:#000; text-align:center;">
		 
		
		 
		 
		 </div>
		 
		 
		 
		 		 		 
		 	 <div style="float:left; width:54px; height:15px; color:#000; text-align:center;">
		
		
		 
		 
		 </div>
		  		 
		 	 <div style="float:left; width:54px; height:15px; color:#000; text-align:center;">
		
		
		 
		 
		 </div>
		 










		
		 <div style="float:left; width:80px; height:15px; color:#000; text-align:center;">
	
	
	
	
		 
		 </div>
		 
		 	 <div style="float:left; width:350px; height:15px; color:#000; ">
		 
		 	 <div style="float:left; width:250px; height:15px; color:#000;margin-left:20px; ">
		
		<?php 


$qry = mysql_query("select  db1 as total
from resit where matricule='$mats' and sex='3'"); 
$row = mysql_fetch_assoc($qry); 
 $db1=$row['total']; 
	$fg=$db1;	

if(empty($fg)){
 echo $statusfbio="";}
elseif($fg>'' ){
echo $statusfbio="TOTAL CREDITS ATTEMPTED:";
}
	?>	 <?php 



$qry = mysql_query("select sum(c104) as total
from resit where matricule='$mats' and departmet='$deptt'and levels='$level' and sex='3' and db1='$take'  "); 
$row = mysql_fetch_assoc($qry); 
$save=$row['total']; 
 



$qry = mysql_query("select * FROM  resit where matricule='$mats' and departmet='$deptt'and levels='$level' and sex='3' and db1='$take'  "); 
$num_rows=mysql_num_rows($qry);
  $richooTTTyss=$num_rows; 

$fgi=$save;

if(empty($fgi)){
 echo $statusfbio="";}
elseif($fgi>'' ){
printf("%01.2f",($save));
}
?>

		 </div>
		 
		 </div>
		 
		 
		 		 
		 	 <div style="float:left; width:52px; height:15px; color:#000; text-align:center;">
		
		 
		 
		 </div>
		 
		 
		 		 		 
		 	 <div style="float:left; width:54px; height:15px; color:#000; text-align:center;">

		
		 
		 
		 </div>
		 		 		 		 
		 	 <div style="float:left; width:54px; height:15px; color:#000; text-align:center;">
		 
		
		 
		 
		 </div>
		 
		 
		 
		 		 		 
		 	 <div style="float:left; width:54px; height:15px; color:#000; text-align:center;">
		
		
		 
		 
		 </div>
		  		 
		 	 <div style="float:left; width:54px; height:15px; color:#000; text-align:center;">
		
		
		 
		 
		 </div>
		 







	 
		 
		 
		 

		 
	
			
			
		 <div style="float:left; width:80px; height:15px; color:#000; text-align:center;">
	
	
	
	
		 
		 </div>
		 
		 	 <div style="float:left; width:350px; height:15px; color:#000; ">
		 
		 	 <div style="float:left; width:250px; height:15px; color:#000;margin-left:100px;font-weight:bold; ">
<?php 


$qry = mysql_query("select  db1 as total
from resit where matricule='$mats' and sex='3'"); 
$row = mysql_fetch_assoc($qry); 
 $db1=$row['total']; 
	$fg=$db1;	

if(empty($fg)){
 echo $statusfbio="";$color="#fff";}
elseif($fg>'' ){
echo $statusfbio="SEMESTER AVERAGE:";
$color="000";
}
	?>	 
<b style="font-weight:normal; color:<?php echo $color;?>;">
 <?php 





$qry = mysql_query("select sum(c103) as total
from resit where matricule='$mats' and departmet='$deptt'and levels='$level' and sex='3' and db1='$take'  "); 
$row = mysql_fetch_assoc($qry); 
$save=$row['total']; 
 


$qry = mysql_query("select sum(c104) as total
from resit where matricule='$mats' and departmet='$deptt'and levels='$level' and sex='3' and db1='$take'  "); 
$row = mysql_fetch_assoc($qry); 
$saves=$row['total']; 
 


$qry = mysql_query("select * FROM  resit where matricule='$mats' and departmet='$deptt'and levels='$level' and sex='3' and db1='$take'  "); 
$num_rows=mysql_num_rows($qry);
  $richooTTTyss=$num_rows; 

$fgg=$save;
if(empty($fgg)){
 echo $statusfbiog="";}
elseif($fgg>'' ){
printf("%01.2f",$ui1=($save/$saves));
}





$query3r="update courses set c126='$ui'
 where matricule='$mats' and departmet='$deptt'and levels='$level'  and db1='$take' ";







mysql_query ($query3r) or die ('could not updated:'.mysql_error());



?>
		 </b>
		 </div>
		 
		 </div>
		 
		 
		 		 
		 	 <div style="float:left; width:52px; height:15px; color:#000; text-align:center;">
		
		 
		 
		 </div>
		 
		 
		 		 		 
		 	 <div style="float:left; width:54px; height:15px; color:#000; text-align:center;">

		
		 
		 
		 </div>
		 		 		 		 
		 	 <div style="float:left; width:54px; height:15px; color:#000; text-align:center;">
		 
		
		 
		 
		 </div>
		 
		 
		 
		 		 		 
		 	 <div style="float:left; width:54px; height:15px; color:#000; text-align:center;">
		
		
		 
		 
		 </div>
		  		 
		 	 <div style="float:left; width:54px; height:15px; color:#000; text-align:center;">
		
		
		 
		 
		 </div>		 
		 	 































































	
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
</div>
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 <div style="float:left; width:698px; height:auto;FONT-Size:12px;font-weight:normal;">
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
	</b>	 
		 
		 
	</b>	 
		 
	</b>	 
		 
	</b>	 
		 
	</b>	 
		 
	</b>	 
		 
	</b>	 
		 
		 
		 <div style="float:left; width:80px; height:15px; color:#000; text-align:center;font-weight:normal;">
	
	
	
	
		 
		 </div>
		 
		 	 <div style="float:left; width:350px; height:15px; color:#000; text-align:center;font-weight:normal;">
		 
		
		 <DIV STYLE="float:left;margin-left:10px;width:350px;font-size:11px; letter-spacing:2px;text-align:left;height:15px;FONT-WEIGHT:BOLD;TEXT-TRANSFORM:UPPERCASE;">
		 
		<?php 


$qry = mysql_query("select  db1 as total
from resit where matricule='$mats' and sex='2'"); 
$row = mysql_fetch_assoc($qry); 
 $db1=$row['total']; 
		 ?>
<b><?php 
			
			 $myhu=$levels; 
  
if(empty($myhu)){
 $smyhu="";}
elseif($myhu>='200' && $myhu<='200' ){
 
echo $smyhu="Second Semester Year I";
}
elseif($myhu>='300' && $myhu<='300' ){
 
echo $smyhu="Second Semester Year II";
}
?> :-<?php echo $db1;?></b>
		 </div></div>
		 
		 
		 		 
		 	 <div style="float:left; width:52px; height:15px; color:#000; text-align:center;">
		
		 
		 
		 </div>
		 
		 
		 		 		 
		 	 <div style="float:left; width:54px; height:15px; color:#000; text-align:center;">

		
		 
		 
		 </div>
		 		 		 		 
		 	 <div style="float:left; width:54px; height:15px; color:#000; text-align:center;">
		 
		
		 
		 
		 </div>
		 
		 
		 
		 		 		 
		 	 <div style="float:left; width:54px; height:15px; color:#000; text-align:center;">
		
		
		 
		 
		 </div>
		  		 
		 	 <div style="float:left; width:54px; height:15px; color:#000; text-align:center;">
		
		
		 
		 
		 </div>
			<?php 
$take=$pt;

$query = mysql_query("select  * from resit where db1='$take' and matricule='$mats' and departmet='$deptt' and sex='2' and levels='$level'   and fname>'' order by (c101+c102) DESC"); 

		 while ($row = mysql_fetch_array($query)) {
		 
		 
		 
		 
		 
		 ?>
		 
		 
		 
		 <div style="float:left; width:80px; height:15px; color:#000; text-align:center;">
	
		 
		 <DIV STYLE="float:left;margin-left:5px;text-align:left;width:75px;font-size:11px; text-align:center;height:auto;">
<?php echo $courseps=$row['fname'];
		
		
		$exam=$row['c102'];
		
		$cas=$row['c101'];?>
		    </div>
		 
		 
		 
		 
		    </div>
	
	
		 	 <div style="float:left; width:350px; height:15px; color:#000; text-align:center;">
		 
		
		 
		  
		  
		  
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
		 
		 
		 		 
		 	 <div style="float:left; width:52px; height:15px; color:#000; text-align:center;">
			  
		 <DIV STYLE="float:left;margin-left:0px;text-transform:uppercase; font-size:11px;width:60px; text-align:center;height:auto;">
<?php echo $status;?>
		    </div>
		 
		 
		 </div>
		 
		 
		 		 		 
		 	 <div style="float:left; width:54px; height:15px; color:#000; text-align:center;">
 <DIV STYLE="float:left;margin-left:0px; width:55px;font-size:11px; text-align:center;height:auto;">
<?php echo $tm=$richooTTTy;?>
		    </div>
		
		 
		 
		 </div>
		 		 		 		 
		 	 <div style="float:left; width:54px; height:15px; color:#000; text-align:center;">
		 
		<?php $ns=
($exam+$cas); 


 $mxc11=$ns;
 
 
if(empty($mxc11)){$colorf1bio=""; $statusfbio="";

 echo '<div style="color:'.colorf1bio.';">'.$statusfbio.'</div>';}
elseif($mxc11>=$rangx1 && $mxc11<=$rangx2 ){
 $colorf1bio="";
 $statusfbio="F";
 echo'<div style=" color:'. $colorf1bio.';">'.$statusfbio.'</div>';
}else if(($mxc11 >=$rangx3) && ($mxc11<=$rangx4)){
 $colorf1bio="blue";
 $statusfbio="D";
 echo'<div style=" color:'. $colorf1bio.';">'.$statusfbio.'</div>';}else if(($mxc11 >=$rangx5) && ($mxc11<=$rangx6)){
 $colorf1bio="blue";
 $statusfbio="C";
 echo'<div style=" color:'. $colorf1bio.';">'.$statusfbio.'</div>';}
 
 
else if(($mxc11 >=$rangx7) && ($mxc11<=$rangx8)){
 $colorf1bio="blue";
 $statusfbio="B";
 echo'<div style=" color:'. $colorf1bio.';">'.$statusfbio.'</div>';}
 
 
 else if(($mxc11 >=$rangx9) && ($mxc11<=$rangx10)){
 $colorf1bio="blue"; $statusfbio="A"; echo'<div style=" color:'. $colorf1bio.';">'.$statusfbio.'</div>';
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
if(empty($mxc11)){$colorf1bio=""; echo $statusfbio="F";}
elseif($mxc11>=$rangx1 && $mxc11<=$rangx2 ){
 $colorf1bio="";
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

$manS=($exam+$cas);
$man=($exam+$cas)/5;
$ftsS=($manS*$tm);

$fts=($man*$tm);
$query3="update resit set c103='$fts',c104='$tm',c105='$ftsS',c107='$fts'
 where matricule='$mats' and departmet='$deptt'and levels='$level' and sex='2' and db1='$take' and fname='$courseps'";







mysql_query ($query3) or die ('could not updated:'.mysql_error());


 ?>
		 
		 
		 </div>
		 
		 
		 
		 		 		 
		 	 <div style="float:left; width:54px; height:15px; color:#000; text-align:center;">
				 <DIV STYLE="float:left;margin-left:0px; width:60px; font-size:11px;text-align:center;height:auto;"><?PHP ECHO $mx=($exam+$cas);?>
		    </div>
		 
		 
		 </div>
		  		 
		 	 <div style="float:left; width:54px; height:15px; color:#000; text-align:center;">
		
		
		 	 <DIV STYLE="float:left;margin-left:0px; width:60px;font-size:11px; text-align:center;height:auto;">
		 <?PHP ECHO ($mx*$richooTTTy);?>  </div>
		 
		 
		 </div>
		 
		 
		 	









			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			












			<?php }
		  ?>
		 
		 
		







		 <div style="float:left; width:80px; height:15px; color:#000; text-align:center;">
	
	
	
	
		 
		 </div>
		 
		 	 <div style="float:left; width:350px; height:15px; color:#000; text-align:center;">
		 
		
		 
		 
		 </div>
		 
		 
		 		 
		 	 <div style="float:left; width:52px; height:15px; color:#000; text-align:center;">
		
		 
		 
		 </div>
		 
		 
		 		 		 
		 	 <div style="float:left; width:54px; height:15px; color:#000; text-align:center;">

		
		 
		 
		 </div>
		 		 		 		 
		 	 <div style="float:left; width:54px; height:15px; color:#000; text-align:center;">
		 
		
		 
		 
		 </div>
		 
		 
		 
		 		 		 
		 	 <div style="float:left; width:54px; height:15px; color:#000; text-align:center;">
		
		
		 
		 
		 </div>
		  		 
		 	 <div style="float:left; width:54px; height:15px; color:#000; text-align:center;">
		
		
		 
		 
		 </div>
		 










		
		 <div style="float:left; width:80px; height:15px; color:#000; text-align:center;">
	
	
	
	
		 
		 </div>
		 
		 	 <div style="float:left; width:350px; height:15px; color:#000; ">
		 
		 	 <div style="float:left; width:250px; height:15px; color:#000;margin-left:20px; ">
		
		 TOTAL CREDITS ATTEMPTED:<?php 



$qry = mysql_query("select sum(c104) as total
from resit where matricule='$mats' and departmet='$deptt'and levels='$level' and sex='2' and db1='$take'  "); 
$row = mysql_fetch_assoc($qry); 
$save=$row['total']; 
 



$qry = mysql_query("select * FROM  resit where matricule='$mats' and departmet='$deptt'and levels='$level' and sex='2' and db1='$take'  "); 
$num_rows=mysql_num_rows($qry);
  $richooTTTyss=$num_rows; 



printf("%01.2f",($save));?>

		 </div>
		 
		 </div>
		 
		 
		 		 
		 	 <div style="float:left; width:52px; height:15px; color:#000; text-align:center;">
		
		 
		 
		 </div>
		 
		 
		 		 		 
		 	 <div style="float:left; width:54px; height:15px; color:#000; text-align:center;">

		
		 
		 
		 </div>
		 		 		 		 
		 	 <div style="float:left; width:54px; height:15px; color:#000; text-align:center;">
		 
		
		 
		 
		 </div>
		 
		 
		 
		 		 		 
		 	 <div style="float:left; width:54px; height:15px; color:#000; text-align:center;">
		
		
		 
		 
		 </div>
		  		 
		 	 <div style="float:left; width:54px; height:15px; color:#000; text-align:center;">
		
		
		 
		 
		 </div>
		 







	 
		 
		 
		 
		 
		 
			
			
		 <div style="float:left; width:80px; height:15px; color:#000; text-align:center;">
	
	
	
	
		 
		 </div>
		 
		 	 <div style="float:left; width:350px; height:15px; color:#000; ">
		 
		 	 <div style="float:left; width:250px; height:15px; color:#000;margin-left:20px; ">


TOTAL MARKS EARNED:<?php 


$qry = mysql_query("select sum(c105) as total
from resit where matricule='$mats' and departmet='$deptt'and levels='$level' and sex='3' and db1='$take'  "); 
$row = mysql_fetch_assoc($qry); 
 $savye8=$row['total']; 

$qry = mysql_query("select sum(c105) as total
from resit where matricule='$mats' and departmet='$deptt'and levels='$level' and sex='2' and db1='$take'  "); 
$row = mysql_fetch_assoc($qry); 
 $savye=$row['total']; 
 $mm2= $savye;
 $mm3= $savye8;

 
$qry = mysql_query("select sum(c103) as total
from resit where matricule='$mats' and departmet='$deptt'and levels='$levels' and sex='8' and db1='$take'  "); 
$row = mysql_fetch_assoc($qry); 
$savyes=$row['total']; 
 
 
 
 
$qry = mysql_query("select sum(c103) as total
from resit where matricule='$mats' and departmet='$deptt'and levels='$levels' and sex='2' and db1='$take'  "); 
$row = mysql_fetch_assoc($qry); 
$savyes=$row['total']; 
$mmm2=$savyes;
$mmm3=$savyes8;
$qry = mysql_query("select * FROM  resit where matricule='$mats' and departmet='$deptt'and levels='$level' and sex='2' and db1='$take'  "); 
$num_rows=mysql_num_rows($qry);
  $richooTTTyss=$num_rows; 



printf("%01.2f",($savye));?>


		 
		 </div>
		 
		 </div>
		 
		 
		 		 
		 	 <div style="float:left; width:52px; height:15px; color:#000; text-align:center;">
		
		 
		 
		 </div>
		 
		 
		 		 		 
		 	 <div style="float:left; width:54px; height:15px; color:#000; text-align:center;">

		
		 
		 
		 </div>
		 		 		 		 
		 	 <div style="float:left; width:54px; height:15px; color:#000; text-align:center;">
		 
		
		 
		 
		 </div>
		 
		 
		 
		 		 		 
		 	 <div style="float:left; width:54px; height:15px; color:#000; text-align:center;">
		
		
		 
		 
		 </div>
		  		 
		 	 <div style="float:left; width:54px; height:15px; color:#000; text-align:center;">
		
		
		 
		 
		 </div>


		 
			
			
		 <div style="float:left; width:80px; height:15px; color:#000; text-align:center;">
	
	
	
	
		 
		 </div>
		 
		 	 <div style="float:left; width:350px; height:15px; color:#000; ">
		 
		 	 <div style="float:left; width:250px; height:15px; color:#000;margin-left:20px; ">


TOTAL CREDITS EARN: <?php 



$qry = mysql_query("select sum(c104) as total
from resit where matricule='$mats' and departmet='$deptt'and levels='$level' and sex='2' and db1='$take'  "); 
$row = mysql_fetch_assoc($qry); 
$save=$row['total']; 
 



$qry = mysql_query("select * FROM  resit where matricule='$mats' and departmet='$deptt'and levels='$level' and sex='2' and db1='$take'  "); 
$num_rows=mysql_num_rows($qry);
  $richooTTTyss=$num_rows; 



printf("%01.2f",($save));?>
		 
		 </div>
		 
		 </div>
		 
		 
		 		 
		 	 <div style="float:left; width:52px; height:15px; color:#000; text-align:center;">
		
		 
		 
		 </div>
		 
		 
		 		 		 
		 	 <div style="float:left; width:54px; height:15px; color:#000; text-align:center;">

		
		 
		 
		 </div>
		 		 		 		 
		 	 <div style="float:left; width:54px; height:15px; color:#000; text-align:center;">
		 
		
		 
		 
		 </div>
		 
		 
		 
		 		 		 
		 	 <div style="float:left; width:54px; height:15px; color:#000; text-align:center;">
		
		
		 
		 
		 </div>
		  		 
		 	 <div style="float:left; width:54px; height:15px; color:#000; text-align:center;">
		
		
		 
		 
		 </div>		 
		 
		 
		 
	
			
			
		 <div style="float:left; width:80px; height:15px; color:#000; text-align:center;">
	
	
	
	
		 
		 </div>
		 
		 	 <div style="float:left; width:350px; height:15px; color:#000; ">
		 
		 	 <div style="float:left; width:250px; height:15px; color:#000;margin-left:100px;font-weight:bold; ">


SEMESTER AVERAGE: <?php 





$qry = mysql_query("select sum(c103) as total
from resit where matricule='$mats' and departmet='$deptt'and levels='$level' and sex='2' and db1='$take'  "); 
$row = mysql_fetch_assoc($qry); 
$save=$row['total']; 
 


$qry = mysql_query("select sum(c104) as total
from resit where matricule='$mats' and departmet='$deptt'and levels='$level' and sex='2' and db1='$take'  "); 
$row = mysql_fetch_assoc($qry); 
$saves=$row['total']; 
 


$qry = mysql_query("select * FROM  resit where matricule='$mats' and departmet='$deptt'and levels='$level' and sex='2' and db1='$take'  "); 
$num_rows=mysql_num_rows($qry);
  $richooTTTyss=$num_rows; 
$fgg=$save;
if(empty($fgg)){
 echo $statusfbiog="";}
elseif($fgg>'' ){

printf("%01.2f",$ui2=($save/$saves));

}


$query3r="update courses set c127='$ui2'
 where matricule='$mats' and departmet='$deptt'and levels='$level'  and db1='$take' ";







mysql_query ($query3r) or die ('could not updated:'.mysql_error());



?>
		 
		 </div>
		 
		 </div>
		 
		 
		 		 
		 	 <div style="float:left; width:52px; height:15px; color:#000; text-align:center;">
		
		 
		 
		 </div>
		 
		 
		 		 		 
		 	 <div style="float:left; width:54px; height:15px; color:#000; text-align:center;">

		
		 
		 
		 </div>
		 		 		 		 
		 	 <div style="float:left; width:54px; height:15px; color:#000; text-align:center;">
		 
		
		 
		 
		 </div>
		 
		 
		 
		 		 		 
		 	 <div style="float:left; width:54px; height:15px; color:#000; text-align:center;">
		
		
		 
		 
		 </div>
		  		 
		 	 <div style="float:left; width:54px; height:15px; color:#000; text-align:center;">
		
		
		 
		 
		 </div>		 
		 	 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
	










































































































































		 <div style="float:left; width:80px; height:25px; color:#000; text-align:center;">
	
	
	
	
		 
		 </div>
		 
		 	 <div style="float:left; width:350px; height:25px; color:#000; text-align:center;">
		 
		
		 
		 
		 </div>
		 
		 
		 		 
		 	 <div style="float:left; width:52px; height:25px; color:#000; text-align:center;">
		
		 
		 
		 </div>
		 
		 
		 		 		 
		 	 <div style="float:left; width:54px; height:25px; color:#000; text-align:center;">

		
		 
		 
		 </div>
		 		 		 		 
		 	 <div style="float:left; width:54px; height:25px; color:#000; text-align:center;">
		 
		
		 
		 
		 </div>
		 
		 
		 
		 		 		 
		 	 <div style="float:left; width:54px; height:25px; color:#000; text-align:center;">
		
		
		 
		 
		 </div>
		  		 
		 	 <div style="float:left; width:54px; height:25px; color:#000; text-align:center;">
		
		
		 
		 
		 </div>
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 










		 <div style="float:left; width:80px; height:25px; color:#000; text-align:center;">
	
	
	
	
		 
		 </div>
		 
		 	 <div style="float:left; width:350px; height:25px; color:#000; text-align:center;">
		 
		
		 
		 
		 </div>
		 
		 
		 		 
		 	 <div style="float:left; width:52px; height:25px; color:#000; text-align:center;">
		
		 
		 
		 </div>
		 
		 
		 		 		 
		 	 <div style="float:left; width:54px; height:25px; color:#000; text-align:center;">

		
		 
		 
		 </div>
		 		 		 		 
		 	 <div style="float:left; width:54px; height:25px; color:#000; text-align:center;">
		 
		
		 
		 
		 </div>
		 
		 
		 
		 		 		 
		 	 <div style="float:left; width:54px; height:25px; color:#000; text-align:center;">
		
		
		 
		 
		 </div>
		  		 
		 	 <div style="float:left; width:54px; height:25px; color:#000; text-align:center;">
		
		
		 
		 
		 </div>
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 





	 <div style="float:left; width:80px; height:15px; color:#000; text-align:center;">
	
	
	
	
		 
		 </div>
		 
		 	 <div style="float:left; width:350px; height:15px; color:#000; text-align:center;">
		 
		<b> TOTAL CREDIT ATTEMPTED: <?php 		

		
		
		



 
 


$qry = mysql_query("select sum(c104) as total
from resit where matricule='$mats' and departmet='$deptt'and levels='$level' and sex>='1' and sex<='2' and db1='$take'  "); 
$row = mysql_fetch_assoc($qry); 
ECHO $marks11=$row['total']; 
 

?></B>
		 
		 
		 </div>
		 
		 
		 		 
		 	 <div style="float:left; width:52px; height:15px; color:#000; text-align:center;">
		
		 
		 
		 </div>
		 
		 
		 		 		 
		 	 <div style="float:left; width:54px; height:15px; color:#000; text-align:center;">

		
		 
		 
		 </div>
		 		 		 		 
		 	 <div style="float:left; width:54px; height:15px; color:#000; text-align:center;">
		 
		
		 
		 
		 </div>
		 
		 
		 
		 		 		 
		 	 <div style="float:left; width:54px; height:15px; color:#000; text-align:center;">
		
		
		 
		 
		 </div>
		  		 
		 	 <div style="float:left; width:54px; height:15px; color:#000; text-align:center;">
		
		
		 
		 
		 </div>



		 <div style="float:left; width:80px; height:15px; color:#000; text-align:center;">
	
	
	
	
		 
		 </div>
		 
		 	 <div style="float:left; width:350px; height:15px; color:#000; text-align:center;">
		 
		<b>  SESSION MARKS EARNED: <?php 		

		
		
		





$qry = mysql_query("select sum(c107) as total
from resit where matricule='$mats' and departmet='$deptt'and levels='$level'  and sex>='1'and sex<='2'  and db1='$take'  "); 
$row = mysql_fetch_assoc($qry); 
  ECHO $nalls=$row['total']; 


?></B>
		 
		 
		 </div>
		 
		 
		 		 
		 	 <div style="float:left; width:52px; height:15px; color:#000; text-align:center;">
		
		 
		 
		 </div>
		 
		 
		 		 		 
		 	 <div style="float:left; width:54px; height:15px; color:#000; text-align:center;">

		
		 
		 
		 </div>
		 		 		 		 
		 	 <div style="float:left; width:54px; height:15px; color:#000; text-align:center;">
		 
		
		 
		 
		 </div>
		 
		 
		 
		 		 		 
		 	 <div style="float:left; width:54px; height:15px; color:#000; text-align:center;">
		
		
		 
		 
		 </div>
		  		 
		 	 <div style="float:left; width:54px; height:15px; color:#000; text-align:center;">
		
		
		 
		 
		 </div>











		 <div style="float:left; width:80px; height:15px; color:#000; text-align:center;">
	
	
	
	
		 
		 </div>
		 
		 	 <div style="float:left; width:350px; height:15px; color:#000; text-align:center;">
		 
		<b> CUMMULATIVE AVERAGE: <?php 		

		
		
		





$qry = mysql_query("select sum(c107) as total
from resit where matricule='$mats' and departmet='$deptt'and levels='$level'  and sex>='1'and sex<='2'  and db1='$take'  "); 
$row = mysql_fetch_assoc($qry); 
  $nalls=$row['total']; 
 


$qry = mysql_query("select sum(c104) as total
from resit where matricule='$mats' and departmet='$deptt'and levels='$level' and sex>='1' and sex<='2' and db1='$take'  "); 
$row = mysql_fetch_assoc($qry); 
$marks11=$row['total']; 
 
$fgg=$nalls;
if(empty($fgg)){
 echo $statusfbiog="";}
elseif($fgg>'' ){

printf("%01.2f",($nalls/$marks11));
}

?></B>
		 
		 
		 </div>
		 
		 
		 		 
		 	 <div style="float:left; width:52px; height:15px; color:#000; text-align:center;">
		
		 
		 
		 </div>
		 
		 
		 		 		 
		 	 <div style="float:left; width:54px; height:15px; color:#000; text-align:center;">

		
		 
		 
		 </div>
		 		 		 		 
		 	 <div style="float:left; width:54px; height:15px; color:#000; text-align:center;">
		 
		
		 
		 
		 </div>
		 
		 
		 
		 		 		 
		 	 <div style="float:left; width:54px; height:15px; color:#000; text-align:center;">
		
		
		 
		 
		 </div>
		  		 
		 	 <div style="float:left; width:54px; height:15px; color:#000; text-align:center;">
		
		
		 
		 
		 </div>













		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 




		 <div style="float:left; width:80px; height:25px; color:#000; text-align:center;">
	
	
	
	
		 
		 </div>
		 
		 	 <div style="float:left; width:350px; height:25px; color:#000; text-align:center;">
		 
		
		 
		 
		 </div>
		 
		 
		 		 
		 	 <div style="float:left; width:52px; height:25px; color:#000; text-align:center;">
		
		 
		 
		 </div>
		 
		 
		 		 		 
		 	 <div style="float:left; width:54px; height:25px; color:#000; text-align:center;">

		
		 
		 
		 </div>
		 		 		 		 
		 	 <div style="float:left; width:54px; height:25px; color:#000; text-align:center;">
		 
		
		 
		 
		 </div>
		 
		 
		 
		 		 		 
		 	 <div style="float:left; width:54px; height:25px; color:#000; text-align:center;">
		
		
		 
		 
		 </div>
		  		 
		 	 <div style="float:left; width:54px; height:25px; color:#000; text-align:center;">
		
		
		 
		 
		 </div>
		 
		 
		 
		 
		 
		 
		 
		 




		 <div style="float:left; width:80px; height:25px; color:#000; text-align:center;">
	
	
	
	
		 
		 </div>
		 
		 	 <div style="float:left; width:350px; height:25px; color:#000; text-align:center;">
		 
		
		 
		 
		 </div>
		 
		 
		 		 
		 	 <div style="float:left; width:52px; height:25px; color:#000; text-align:center;">
		
		 
		 
		 </div>
		 
		 
		 		 		 
		 	 <div style="float:left; width:54px; height:25px; color:#000; text-align:center;">

		
		 
		 
		 </div>
		 		 		 		 
		 	 <div style="float:left; width:54px; height:25px; color:#000; text-align:center;">
		 
		
		 
		 
		 </div>
		 
		 
		 
		 		 		 
		 	 <div style="float:left; width:54px; height:25px; color:#000; text-align:center;">
		
		
		 
		 
		 </div>
		  		 
		 	 <div style="float:left; width:54px; height:25px; color:#000; text-align:center;">
		
		
		 
		 
		 </div>
		 
		 
		 
		 
		 
		 
		 
		 




		 <div style="float:left; width:80px; height:25px; color:#000; text-align:center;">
	
	
	
	
		 
		 </div>
		 
		 	 <div style="float:left; width:350px; height:25px; color:#000; text-align:center;">
		 
		
		 
		 
		 </div>
		 
		 
		 		 
		 	 <div style="float:left; width:52px; height:25px; color:#000; text-align:center;">
		
		 
		 
		 </div>
		 
		 
		 		 		 
		 	 <div style="float:left; width:54px; height:25px; color:#000; text-align:center;">

		
		 
		 
		 </div>
		 		 		 		 
		 	 <div style="float:left; width:54px; height:25px; color:#000; text-align:center;">
		 
		
		 
		 
		 </div>
		 
		 
		 
		 		 		 
		 	 <div style="float:left; width:54px; height:25px; color:#000; text-align:center;">
		
		
		 
		 
		 </div>
		  		 
		 	 <div style="float:left; width:54px; height:25px; color:#000; text-align:center;">
		
		
		 
		 
		 </div>
		 
		 
		 
		 
		 
		 
		 
		 




		 <div style="float:left; width:80px; height:25px; color:#000; text-align:center;">
	
	
	
		 
		 </div>
		 
		 	 <div style="float:left; width:350px; height:25px; color:#000; text-align:center;">
		<div style='float:left;width:350px;height:15px;  color:$989898;'>
		 
		Transcript No: <?php 

$qry = mysql_query("select roll as total
from courses where matricule='$mats' and departmet='$deptt'and levels='$level'  and  db1='$take'  "); 
$row = mysql_fetch_assoc($qry); 
  echo $nalls=$row['total']; 
  ?>
  </div>
	    <div style='float:left;width:350px;height:25px;  color:$989898;'>
		Verification #: <?php 

$qry = mysql_query("select barcode as total
from barcode where matricule='$mats'  "); 
$row = mysql_fetch_assoc($qry); 
  echo $nallsss=$row['total']; 
  ?>
  </div>
		 
		 
		 </div>
		 
		 
		 		 
		 	 <div style="float:left; width:52px; height:25px; color:#000; text-align:center;">
		
		 
		 
		 </div>
		 
		 
		 		 		 
		 	 <div style="float:left; width:54px; height:25px; color:#000; text-align:center;">

		
		 
		 
		 </div>
		 		 		 		 
		 	 <div style="float:left; width:54px; height:25px; color:#000; text-align:center;">
		 
		
		 
		 
		 </div>
		 
		 
		 
		 		 		 
		 	 <div style="float:left; width:54px; height:25px; color:#000; text-align:center;">
		
		
		 
		 
		 </div>
		  		 
		 	 <div style="float:left; width:54px; height:25px; color:#000; text-align:center;">
		
		
		 
		 
		 </div>
		 
		 
		 
		 
		 
		 
		 
		 







		 <div style="float:left; width:80px; height:25px; color:#000; text-align:center;">
	

	
		 
		 </div>
		 
		 	 <div style="float:left; width:350px; height:25px; color:#000; text-align:center;">
		 
		
	
		 <?php
 $matricule=$mats;
$default_value = array();
$default_value['filetype'] = 'PNG';
$default_value['dpi'] = 72;
$default_value['scale'] = isset($defaultScale) ? $defaultScale : 1;
$default_value['rotation'] = 0;
$default_value['font_family'] = 'Arial.ttf';
$default_value['font_size'] = 14;
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
		   
		   
		    <div style='float:left;width:250px;height:25px;margin-top:25px;  color:$989898;'>
 <div id="imageOutput">
                        <?php if ($imageKeys['text'] !== '') { ?><img src="image.php<?php echo $finalRequest; ?>" alt="Barcode Image" /><?php }
                        else { ?><?php } ?>
                    </div>
                   
		   
		   
		   
		   
		   
		   
		   
		   
		   
		   
		   
		    
		 
		 </div>
		 
		 
		 		 
		 	 <div style="float:left; width:52px; height:25px; color:#000; text-align:center;">
		
		 
		 
		 </div>
		 
		 
		 		 		 
		 	 <div style="float:left; width:54px; height:25px; color:#000; text-align:center;">

		
		 
		 
		 </div>
		 		 		 		 
		 	 <div style="float:left; width:54px; height:25px; color:#000; text-align:center;">
		 
		
		 
		 
		 </div>
		 
		 
		 
		 

		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
</div>
		 
		 


</div>


		 <div style="float:left; width:1400px; height:100px;margin-top:4px; color:#000; ">

   
		 


</div>

















		</div></div>
      
			</div>
			</div>	</div>


			</div>
			</div>	</div>

			</div>
			</div>	</div>
			</div>	</div>
        </form>
<?php } ?>




























































































































