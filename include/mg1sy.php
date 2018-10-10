<?php

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

define ("DB_HOST", "localhost"); // set database host
define ("DB_USER", "sofocol"); // set database user
define ("DB_PASS","sofocol"); // set database password
define ("DB_NAME","hims"); // set database name

$link = mysql_connect(DB_HOST, DB_USER, DB_PASS) or die("Couldn't make connection.");
$db = mysql_select_db(DB_NAME, $link) or die("Couldn't select database");

?>
<!DOCTYPE html>
<html>
    <head>
        <title>STUDENT ID CARD</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link type="text/css" rel="stylesheet" href="style.css" />
        <link rel="shortcut icon" href="pef.png" />
        <script src="jquery-1.7.2.min.js"></script>
        <script src="barcode.js"></script>
    </head>
    <body ">
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
$query="select * from school where roll='1'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>
<b>
<?php  $takes=$row[1];?><br>

<?php  $takes2=$row[2];?>
</b>

<br>
 <?php

$levels=$_POST["levels"];

$class=$_POST["class"];
?>
<?php } ?>
 <?php
$roll=$_GET["1"];
$query="select * from rush where roll='1'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>
<?php  $take=$row[1];



?>
		 

<?php } ?>
<?php
$levels=$_POST["levels"];
$table='courses';
$class=$_POST["class"];
$roll=$_GET["1"];
$query="select * from $table where departmet='ACCOUNTANCY' and levels='200' and db1='$take' order by matricule asc";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) { 
		 
		  $flag=1;
		  ?>

<HTML>
<HEAD>
<title>STUDENT ID CARD</title>
<style>
#pretcon{margin:auto; height:300px;width:290px;}
#container{float:left;
width:400px; height:300px;background:rgb(80,10,20);}

#containery{float:left;
width:400px; height:350px;}


#container2{float:left;
width:400px; height:270px;background:#fff;}


#container3{float:left;
width:400px; height:100px;background:#fff;}



#container4{float:left;
width:400px; height:20px;}


#coh1{float:left;MARGIN-LEFT:40PX;
width:300px; height:25px;FONT-FAMILY:Maiandra GD;FONT-SIZE:13px;FONT-WEIGHT:BOLD;}



#coh2{float:left;margin-left:10px;
width:280px; height:40px;TEXT-ALIGN:CENTER;FONT-WEIGHT:BOLD;COLOR:rgb(80,10,20); FONT-SIZE:30PX;MARGIN-TOP:-20PX;}


#coh3{float:left;
width:300px; height:20px;margin-left:10px;
FONT-FAMILY:Iskoola Pota;FONT-SIZE:15px;FONT-WEIGHT:BOLD;COLOR:#1188dd;}



#container5{float:left;
width:100px; height:100px;}

#container6{float:left;
width:300px; height:100px;background:url(image/fish.png);}




#container41{float:left;
width:100px; height:17px;}

#container42{float:left;
width:300px; height:17px;color:#fff;font-size:13px;background:#1188aa;}

</style>
</HEAD>
<BODY><BR><BR><BR>
<div id="pretcon">



<div style=" height:300px; width:400px;">

<div style="float:left; height:80px;margin-top:10px; width:400px;line-height:21px;">
<B>THIS IS TO CETIFY THAT THE BEARER OF THIS CARD IS REGISTERED STUDENT AT THE HIGHER INSTITUTE OF MAMAGENT STUDIES, BUEA
</B>
	</div>

<div style="float:left; height:20px;margin-top:5px;FONT-SIZE:10PX; width:190px;line-height:21px;">
Auth. No: 08/0255/MINESUO/OF02/10/08
	</div>

<div style="float:left; height:20px;margin-top:-10px;FONT-SIZE:10PX; width:180px;line-height:14px;">
This is the property of HIMS-Buea. if found please return to the HIMS P.O. Box 462 Buea Tel +237 79 82 16 72/ 96 36 88 34



</div>


<div style="float:left; height:80px;margin-top:10px; width:400px;line-height:21px;">


<div style="float:left; height:20px;margin-top:5px;FONT-SIZE:10PX; width:190px;line-height:21px;">
<img src="image/inds.png">
</div>

<div style="float:left; height:20px;margin-top:5px;FONT-SIZE:10PX; width:190px;line-height:21px;">

<div style="float:left;text-align:right; height:20px;margin-top:10px;FONT-SIZE:14PX; width:100px;line-height:21px;">
The RECTOR
</div>

<div style="float:left;text-align:right; height:20px;margin-top:10px;FONT-SIZE:14PX; width:90px;line-height:21px;">
</div>
<div style="float:left;text-align:right; height:20px;margin-top:10px;FONT-SIZE:14PX; width:80px;line-height:21px;">

</div>

<div style="float:left;text-align:right; height:20px;margin-top:10px;FONT-SIZE:14PX; width:20px;line-height:21px;">
</div>

<div style="float:left;text-align:LEFT; height:20px;margin-top:10px;FONT-SIZE:13PX; width:240px;line-height:21px;">
DR. ASOBO NAPOLEON TENENG
</div>



</div>
</div>




	</div>
       
	</div>
<?php } ?>
