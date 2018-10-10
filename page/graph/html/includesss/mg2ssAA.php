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
define ("DB_NAME","btec"); // set database name

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
$query="select * from $table where departmet='BANKING AND FINANCE' and levels='400' and db1='$take' and cxx4='' order by matricule asc";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) { 
		 
		  $flag=1;
		  ?>


<HTML>
<HEAD>
<title>STUDENT ID CARD</title>
<style>
#pretcon{float:left;margin-left:10px;height:370px;width:473px;}
#container{float:left;
width:470px; height:300px;}

#containery{float:left;
width:470px; height:350px;}


#container2{float:left;margin-left:0px;
width:450px; height:270px;background:#fff;}


#container3{float:left;
width:470px; height:100px;background:#fff;}



#container4{float:left;
width:470px; height:20px;}


#coh1{float:left;MARGIN-LEFT:20PX;
width:250px; height:25px;FONT-FAMILY:Iskoola Pota;FONT-SIZE:13px;FONT-WEIGHT:BOLD;}



#coh2{float:left;margin-left:10px;
width:265px; height:35px;TEXT-ALIGN:CENTER;FONT-WEIGHT:BOLD;COLOR:rgb(80,10,20); FONT-SIZE:30PX;MARGIN-TOP:-15PX;}


#coh3{float:left;
width:300px; height:20px;margin-left:10px;
FONT-FAMILY:Iskoola Pota;FONT-SIZE:15px;FONT-WEIGHT:BOLD;COLOR:#1188dd;}



#container5{float:left;margin-left:-20px;
width:120px; height:100px;}

#container6{float:left;
width:340px; height:100px;background:url(image/fish.png);}



#container422{float:left;margin-left:5px;
width:127px; height:5px;color:#fff;font-size:13px;background:rgb(80,10,20);}

#container41{float:left;
width:100px; height:17px;}

#container42{float:left;margin-left:17px;
width:330px; height:17px;color:#fff;font-size:13px;background:rgb(80,10,20);}

</style>
</HEAD>
<BODY>
<div style="margin:auto; width:1100px;margin-top:-20px;">
<div id="pretcon">
<div id="containery">
<div id="container">


<div id="container2">


<div id="container3">




<DIV STYLE="FLOAT:LEFT;FONT-WEIGHT:BOLD; FONT-SIZE:11PX;MARGIN-LEFT:60PX; WIDTH:400PX; HEIGHT:80PX; MARGIN-TOP:70PX; LINE-HEIGHT:21PX;">

THIS IS TO CERTIFY THAT THE BEARER OF THIS CARD IS A REGISTERED STUDENT AT THE HIGHER INSTITUTE OF MANAGEMENT STUDIES, BUEA
			</div>	
			
			
<DIV STYLE="FLOAT:LEFT;FONT-SIZE:10PX; WIDTH:420PX; HEIGHT:40PX;MARGIN-LEFT:20PX; MARGIN-TOP:5PX; LINE-HEIGHT:14PX;">
				 <div style='float:left;width:400px;height:25px;  margin-top:-35px;color:$989898;margin-left:54px;'>
<?php
$matricule=$row['cxx1'];
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
                        else { ?><?php } ?>
                    </div>     </div>
                   
<DIV STYLE="float:left;FONT-SIZE:10PX;MARGIN-LEFT:30PX; WIDTH:160PX; HEIGHT:40PX;">

<DIV STYLE="FONT-SIZE:10PX; WIDTH:200PX; margin-top:15px;HEIGHT:20PX;">
Auth.No.08/0255/MINESUO/OF02/10/08



</DIV>

</DIV>
			
<DIV STYLE="float:left;FONT-SIZE:8PX;MARGIN-LEFT:25PX; WIDTH:195PX; HEIGHT:40PX;">

This is the property of HIMS- Buea, if found please return to HIMS P.O. Box 462, Buea Tel +237 79 82 16 72/ 96 36 86 34


<DIV STYLE="float:left;FONT-SIZE:12PX; WIDTH:200PX; margin-top:15px;HEIGHT:20PX; FONT-WEIGHT:BOLD;">
			RECTOR;<BR>
			DR. ASOBO NAPOLEON TENENG
</DIV>
			</div>
			
			
				</div>
			
			
			
			
			</div>

			</div>
			</div>	</div></div>
        </form>
<?php } ?>
