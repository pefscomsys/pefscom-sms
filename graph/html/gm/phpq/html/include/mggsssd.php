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
?><?php
include 'dbc.php';
 $rollssss=$_GET['roll'];
?>

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
$query="select * from classes where  roll='1'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>
<?php  $off1in=$row['class'];


?><?php } ?>

 <?php
 
$roll=$_GET["1"];
$query="select * from school where roll='1'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>

<?php   $takes=$row[1];?>

<?php  $takes2=$row[2];?>

 <?php

$levels=$_POST["levels"];

$class=$_POST["class"];
?>
<?php } ?>
 <?php
$roll=$_GET["1"];
$query="select * from rushs where roll='1'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>
<?php  $take=$row[1];



?>
		 

<?php } ?>
<!DOCTYPE HTML>
<HEAD>
<STYLE>
#pretcon{float:left;margin-left:30px;height:350px;width:493px;margin-top:1px;}
#container{float:left;
width:500px; height:300px;}

#containery{float:left;
width:500px; height:380px;}


#container2{float:left;margin-left:0px;
width:470px; height:200px;}


#container3{float:left;
width:500px; height:100px;}



#container4{float:left;
width:500px; height:20px;}


#coh1{float:left;MARGIN-LEFT:20PX;
width:350px; height:25px;FONT-FAMILY:Iskoola Pota;FONT-SIZE:13px;FONT-WEIGHT:BOLD;


}



#coh2{float:left;margin-left:10px;
width:265px; height:35px;TEXT-ALIGN:CENTER;FONT-WEIGHT:BOLD;COLOR:rgb(80,10,20); FONT-SIZE:30PX;MARGIN-TOP:-15PX;}


#coh3{float:left;
width:390px; height:20px;margin-left:10px;
FONT-FAMILY:Iskoola Pota;FONT-SIZE:11px;FONT-WEIGHT:BOLD;COLOR:#1188dd;}



#container5{float:left;margin-left:-60px;
width:120px; height:80px;margin-top:22px;}

#container6{float:left;margin-left:-10px;
width:400px; height:80px;background:url(image/fishs.png);margin-top:22px;}



#container422{float:left;margin-left:1px;
width:127px; height:5px;color:#fff;font-size:13px;background:rgb(80,10,20);}

#container41{float:left;
width:100px; height:17px;}

#container42{float:left;margin-left:-27px;
width:370px; height:17px;color:#fff;font-size:13px;background:rgb(80,10,20);}
.reflected {
    position: relative;
}
.reflected:after {
    content: 'MINISTRY OF HIGHER EDUCATION';
    display: block;
    position: right;
    bottom: -.8em; /* You should change this value to fit your font */
    left: 10px;
    right: 22px;
    opacity: .9;

    /* This is how the text is flipped vertically */
    -webkit-transform: scaleY(-1,1);
    -moz-transform: scaleY(-1,1);
    -o-transform: scaleY(-1,1);
}
.mirror{
display:block;
 -webkit-transform: matrix(-1,0,0,1,0,0);
    -moz-transform: matrix(-1,0,0,1,0,0);
    -o-transform: matrix(-1,0,0,1,0,0);
}
.mirror-icon:befor{
   -webkit-transform: scaleY(-1,1);
    -moz-transform: scaleY(-1,1);
    -o-transform: scaleY(-1,1);
}



</STYLE>
</HEAD>
<BODY>

	<div style="float:LEFT; width:1100px; height:auto; ">
	
<?php
$levels=$_POST["levels"];
$table='courses';
$class=$_POST["class"];
$roll=$_GET["1"];
$query="select * from $table where  db1='$take'  and c140='1' order by matricule DESC";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) { 
		 
		  $flag=1;
		  ?>
	<div style="float:LEFT; width:1100px; height:auto; ">
	
<div class="mirror">
	<DIV STYLE="float:left;height:380px;width:450px;">
	<DIV STYLE="float:left;height:350px;width:400px;">
	<table cellspacing="0" cellpadding="0">
	<tr>
	<td style="float:left; width:400px; height:70px;background:url(image/fishs.png);">
	
	<div  class="mirror" style="float:left; width:400px; height:20px;text-align:center; font-size:12px;"><b>HIGHER INSTITUTE OF MANAGEMENT STUDIES</b></div>
	<
	
	
	
	
	
	</td>
	</tr>
	
	</table>
	
	
	</div>
	</DIV>
	</DIV>
	</DIV>
	
	

  <?php
    }
?> 
	</div>
</BODY>
</HTML>