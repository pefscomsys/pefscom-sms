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
?>
<?php
include 'dbc.php';
    include "qrlib.php";   
 $rollssss=$_GET['roll'];
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
$roll=$_GET["1"];
$query="select * from rushss where roll='1'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>
<?php  $take=$row[1];



?>
		 

<?php } ?>



<HTML>
<HEAD>
<title>STUDENT ID CARD</title>
<style>
#pretcon{float:left;margin-left:30px;height:350px;width:593px;margin-top:1px;}
#container{float:left;
width:650px; height:300px;}

#containery{float:left;
width:550px; height:380px;}


#container2{float:left;margin-left:0px;
width:500px; height:200px;}


#container3{float:left;
width:500px; height:100px;}



#container4{float:left;
width:500px; height:15px;}


#coh1{float:left;MARGIN-LEFT:20PX;
width:350px; height:25px;FONT-FAMILY:Iskoola Pota;FONT-SIZE:13px;FONT-WEIGHT:BOLD;


}



#coh2{float:left;margin-left:10px;
width:240px; height:35px;TEXT-ALIGN:CENTER;FONT-WEIGHT:BOLD;COLOR:rgb(80,10,20); FONT-SIZE:30PX;MARGIN-TOP:-15PX;}


#coh3{float:left;
width:390px; height:15px;margin-left:10px;
FONT-FAMILY:Iskoola Pota;FONT-SIZE:11px;FONT-WEIGHT:BOLD;COLOR:#1188dd;}



#container5{float:left;margin-left:-60px;
width:120px; height:80px;margin-top:22px;}

#container6{float:left;margin-left:-10px;
width:450px; height:80px;background:url(image/fishs.png);margin-top:22px;}



#container422{float:left;margin-left:1px;
width:157px; height:5px;color:#fff;font-size:13px;background:#75d5fa;;}

#container41{float:left;
width:100px; height:17px;}

#container42{float:left;margin-left:-27px;
width:420px; height:17px;color:#fff;font-size:13px;background:#75d5fa;}
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









</style>
</HEAD>
<BODY>
<?php
$department=$_POST["department"];
$levels=$_POST["levels"];
$table='courses';
$class=$_POST["class"];
$roll=$_GET["1"];
$query="select * from $table";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) { 
		 
		  $flag=1;
		  ?><?php
$fnames=$row["first_name"];
$fname=$row["fname"];$sex=$row["sex"];
 $mat=$row["matricule"];
$cxx2=$row["cxx2"];
$last=$row["last_name"];
$levels=$row["levels"];
$deptt=$row["departmet"];
$barcode=$row["barcode"];
?>

<div style="margin:auto; width:1300px;">
<div class="mirror">
<div style="float:left;  width:580px; height:370px;margin-left:70px;">

<div style="float:left;  width:580px; height:80px;border-bottom:1px solid red;">


<div style="float:left;  width:100px; height:80px;margin-left:40px;">
<img src="sm.jpg" width="100" height="100px">
</DIV>



<div style="float:left;  width:170px; height:80px; margin-top:20px;margin-left:200px;">

<img src="LOGO2S.PNG" width="220px" height="39px"  >
</DIV>

</DIV>

<div style="float:left;  width:580px; height:30px;text-align:center;color:green; FONT-SIZE:17PX;">
MOTTO: SERVIRE SINE FINE

</div>


<div style="float:left;  width:25px; height:180px;">


</div>



<div style="float:left;  width:180px; height:100px;margin-left:30px;">
<?php $deptt=$row['departmet'];$levels=$row['levels'];$fname=$row['fname'];$barcode=$row['matricule'];$sex=$row['sex'];
				 $mxx=$row['matricule'];$dateof=$row['cxx1'];
				 $mxx=$row['matricule'];
				$qry = mysql_query("select id as total
from employees where empname='$mxx'"); 
$row = mysql_fetch_assoc($qry); 
 $savep4=$row['total']; 
				
				 ?>
					
					
			<?php  $roll=$row['roll'];?>	
			
<img src="load_image.php?pic_id=<?php echo $savep4;?>" width="150px" height="95px" style="border:1px solid rgb(200,20,20);">

</div>



<div style="float:left;  width:90px; height:100px;">

<div style="float:left;  width:90px; height:18px; TEXT-ALIGN:RIGHT;">

DEPARTMENT :
</div>

<div style="float:left;  width:90px; height:18px; TEXT-ALIGN:RIGHT;">

MATRICULE :
</div>

<div style="float:left;  width:90px; height:18px; TEXT-ALIGN:RIGHT;">

SEX :
</div>

<div style="float:left;  width:90px; height:18px; TEXT-ALIGN:RIGHT;">

D' OF BIRTH :
</div>
<div style="float:left;  width:90px; height:18px; TEXT-ALIGN:RIGHT;">

ISSUED ON :
</div>
<div style="float:left;  width:90px; height:18px; TEXT-ALIGN:RIGHT;COLOR:RED;">

VALID TILL :
</div>





</div>

<div style="float:left;  width:240px; height:100px;">

<div style="float:left;  width:240px; height:18px;text-align:left; font-weight:bold; letter-spacing:1px; text-transform:uppercase;">
<?php echo $deptt;?>


</div>
<div style="float:left;  width:240px; height:18px;text-align:left; font-weight:bold; letter-spacing:1px; text-transform:uppercase;">
<?php echo $matricule;?>


</div>
<div style="float:left;  width:240px; height:18px;text-align:left; font-weight:bold; letter-spacing:1px; text-transform:uppercase;">
<?php echo $sex;?>


</div>
<div style="float:left;  width:240px; height:18px;text-align:left; font-weight:bold; letter-spacing:1px; text-transform:uppercase;">
<?php echo $dateof;?>


</div>
<div style="float:left;  width:240px; height:18px;text-align:left; font-weight:bold; letter-spacing:1px; text-transform:uppercase;">
10-10-2015


</div>

<div style="float:left;  width:240px; height:18px;text-align:left; font-weight:bold; letter-spacing:1px; text-transform:uppercase;">
10-10-2018


</div>



</div>


<div style="float:left;  width:620px; height:60px;text-align:center;color:#fff; margin-top:-30px;FONT-SIZE:18PX;text-transform:uppercase;BACKGROUND:rgb(200,20,20);">


<div style="float:left;  width:580px; height:30px;margin-top:5px;">
NAME: <B> <?php echo $fname;?>
</div></div>
<?php
 $matricule=$mat;
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
                    <div id="imageOutput" style="float:left; margin-left:340px;margin-top:-93px;">
                        <?php if ($imageKeys['text'] !== '') { ?><img src="image.php<?php echo $finalRequest; ?>" alt="Barcode Image" /><?php }
                        else { ?><?php } ?>
                    </div>
</div></div>

</div>



</div>


</div>


</div>

</div>
	<?php } ?>
	
	>
<?php
$department=$_POST["department"];
$levels=$_POST["levels"];
$table='courses';
$class=$_POST["class"];
$roll=$_GET["1"];
$query="select * from $table where  db1='$take'  and  departmet='Accountancy' ";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) { 
		 
		  $flag=1;
		  ?><?php
$fnames=$row["first_name"];
$fname=$row["fname"];$sex=$row["sex"];
 $mat=$row["matricule"];
$cxx2=$row["cxx2"];
$last=$row["last_name"];
$levels=$row["levels"];
$deptt=$row["departmet"];
$barcode=$row["barcode"];
?>

<div style="margin:auto; width:1300px;">
<div class="mirror">
<div style="float:left;  width:580px; height:370px;margin-left:70px;font-size:19px; line-height:22px;">


<div style="float:left;  width:400px; height:250px;margin-left:70px;">
THE AMERICAN UNIVERSITY<BR>
IF FOUND , PLEASE RETURN TO<br>
P.O.BOX 132 BUEA, SWR Cameroon
<br><br><br>
Tel: (+237) 69999801,677618687<br>
http://www.smuedu.org
<br><br>
<img src="sig.png">
</div>

</div>
</div>
</div>
<?php } ?>