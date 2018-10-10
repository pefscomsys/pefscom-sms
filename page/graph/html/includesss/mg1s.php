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
$query="select * from rushs where roll='1'";
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
$query="select * from $table where  db1='$take'  and levels>=200 && levels<=200 and departmet='ACCOUNTANCY' order by departmet asc";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) { 
		 
		  $flag=1;
		  ?>


<HTML>
<HEAD>
<title>STUDENT ID CARD</title>
<style>
#pretcon{float:left;margin-left:30px;height:330px;width:463px;}
#container{float:left;
width:470px; height:300px;}

#containery{float:left;
width:470px; height:350px;}


#container2{float:left;margin-left:0px;
width:450px; height:200px;}


#container3{float:left;
width:470px; height:100px;}



#container4{float:left;
width:470px; height:20px;}


#coh1{float:left;MARGIN-LEFT:20PX;
width:300px; height:25px;FONT-FAMILY:Iskoola Pota;FONT-SIZE:13px;FONT-WEIGHT:BOLD;}



#coh2{float:left;margin-left:10px;
width:265px; height:35px;TEXT-ALIGN:CENTER;FONT-WEIGHT:BOLD;COLOR:rgb(80,10,20); FONT-SIZE:30PX;MARGIN-TOP:-15PX;}


#coh3{float:left;
width:390px; height:20px;margin-left:10px;
FONT-FAMILY:Iskoola Pota;FONT-SIZE:13px;FONT-WEIGHT:BOLD;COLOR:#1188dd;}



#container5{float:left;margin-left:-40px;
width:120px; height:80px;margin-top:22px;}

#container6{float:left;
width:360px; height:80px;background:url(image/fish.png);margin-top:22px;}



#container422{float:left;margin-left:5px;
width:147px; height:5px;color:#fff;font-size:13px;background:rgb(80,10,20);}

#container41{float:left;
width:100px; height:17px;}

#container42{float:left;margin-left:17px;
width:330px; height:17px;color:#fff;font-size:13px;background:rgb(80,10,20);}

</style>
</HEAD>
<BODY>
<div style="margin:auto; width:1100px;margin-top:-50px;">
<div id="pretcon">
<div id="containery">
<div id="container">


<div id="container2">


<div id="container3">


<div id="container5"style="background:url(image/fish.png);">


<div style="float:left;margin-top:15px;margin-left:25px;">
<img src="logoS.png" width="103px" height="80px" STYLE="















">
</div>
<div id="container422" style="text-align:center;"><i></i></div></div>


<div id="container6"style="float:left:margin-top:0px;">


<div id="coh1"style="margin-top:12px;">MINISTRY OF HIGHER EDUCATION</div>
<div id="coh2" style="text-shadow:1px 1px 1px #000;">
<?php echo $takes2;?> 




</div>

<div id="coh3">
<?php echo $takes;?> </div>

<div id="coh3"style="font-weight:normal; color:#000;margin-top:-2px;color:#787878;text-align:center;">

</div>
</div>

</div>

<div id="container4" style="margin-left:-7px;">
<div id="container41"></div>

<div id="container42" style="text-align:center;"><i>Assiduty Creativity Professionalism</i></div>

</div>


<div style="float:left; width:110px; height:150px;">

<div style="float:left;margin-left:0px; width:100px; height:100px;margin-top:15px; margin-left:-20px;">

	
			<?php  $roll=$row['roll'];?>	
			
<img src="load_image.php?pic_id=<?php echo $roll;?>" width="123px" height="90px"style="border:3px solid #efefef;">
					


</div>
<div style="float:left;margin-left:82px;margin-top:-30px;width:42px; height:42px;"><img src="image/inds.png"><div style="float:left;width:100px; margin-left:30px;margin-top:-15px;"><img src="image/signature.png"></div></div>

<div style="float:left;margin-left:2px;width:150px; height:42px;font-size:12px;font-weight:normal;margin-top:-10px;font-family:Script MT Bold;"><div style="float:left;margin-left:15px;">Rector <br>Dr. <?php echo $ji16;?></div><br>
<div id="float:left; margin-left:50px;color:#ff6666;"></div> </div>
</div>
<div style="float:left;
width:300px;height:180px;background:url(image/long.png);">


<div style="float:left;
width:250px; height:20px;color:#ff6666;text-align:center;">STUDENT - IDENTITY - CARD
<div style="float:left; width:50px; height:20px;margin-left:240px;margin-top:-15px;">

			<?php $roll=$row['roll'];?>	
<img src="load_image.php?pic_id=<?php echo $roll;?>" width="40px" height="35px" style="border:1px solid #efefef;">

</div>
</div>
<?php 
$fname=$row['first_name'];

$mat=$row['matricule'];

$last=$row['last_name'];
?><div style="float:left;
width:140px;margin-left:7px;height:15px;text-align:left;font-size:13px;;"><b>Born on</b>/ Ne(e) Le</div>



<div style="float:left;
width:150px;;height:15px;text-align:left;font-size:13px;"><?php echo $row['cxx2'];?></div>

<div style="float:left;
width:140px;margin-left:7px;height:15px;text-align:left;font-size:13px;font-weight:bold;">Department</div>



<div style="float:left;
width:150px;;height:15px;FONT-WEIGHT:NORMAL;text-align:left;font-size:11px;"><?php echo $row['departmet'];?></div>


<div style="float:left;
width:140px;margin-left:7px;height:15px;text-align:left;font-size:13px;font-weight:bold;">Level</div>



<div style="float:left;
width:150px;;height:15px;text-align:left;font-size:13px;text-transform:capitalised;font-weight:normal;"><?php echo $row['levels'];?></div>




<div style="float:left;
width:140px;margin-left:7px;height:15px;text-align:left;font-size:13px;font-weight:bold;">Programe</div>



<div style="float:left;
width:150px;;height:15px;text-align:left;font-size:13px;font-weight:normal;font-weight:bold;">
<?php 



$mxc11=$row['levels'];
if(empty($mxc11)){

 $statusfbio="";}
elseif($mxc11>=200 && $mxc11<=200 ){

 $statusfbio="HND";
 echo'<div style=" color:'. $colorf1bio.';">'.$statusfbio.'</div>';
}

elseif($mxc11>=300 && $mxc11<=300 ){

 $statusfbio="HND";
 echo'<div style=" color:'. $colorf1bio.';">'.$statusfbio.'</div>';
}



elseif($mxc11>=400 && $mxc11<=400 ){

 $statusfbio="HND";
 echo'<div style=" color:'. $colorf1bio.';">'.$statusfbio.'</div>';
}












?></div>



<div style="float:left;
width:140px;margin-left:7px;height:15px;text-align:left;font-size:13px;color:#000;"><i><b> Matricule</i></div>


<div style="float:left;
width:150px;;height:15px;text-align:left;font-size:13px;font-weight:normal;color:#000;"><?php echo $mat;?></div>



<div style="float:left;
width:140px;margin-left:7px;height:15px;text-align:left;font-size:13px;color:#ff6666;"><i>Valid untill</i></div>


<div style="float:left;
width:150px;;height:15px;text-align:left;font-size:13px;font-weight:normal;color:#ff6666;"><?php $month=date('m');$day=date('j');$y=date('Y'); ?><?php echo $day;?>/<?php echo $month+5;?>
/<?php echo $y+1;?></div>



<div style="float:left;
width:140px;margin-left:7px;height:15px;text-align:left;font-size:13px;"></div>



<div style="float:left;
width:150px;;height:15px;text-align:left;font-size:13px;font-weight:normal;"><?php echo $last;?></div>




<div style="float:left;
width:140px;margin-left:7px;height:15px;text-align:left;font-size:13px;"></div>



<div style="float:left;
width:150px;;height:15px;text-align:left;font-size:13px;font-weight:normal;"><?php  $take;?></div>



<div style="float:left;
width:300px;;height:15px;text-align:left;font-size:12px;font-weight:normal;color:#989898;">



		 <div style='float:left;width:250px;height:25px;  margin-top:-25px;color:$989898;margin-left:194px;'>
<?php
 $matricule=$row['barcode'];
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
                    </div>
                   
</div>       </section>
          
</div>
<div  style="float:left;width:490px;background:#75d5fa; height:40px;margin-left:-153px; margin-top:-5px;">
<div style="float:left; color:#fff;margin-top:0px;margin-left:40px;margin-top:3px; color:#000;text-align:left; text-transform:uppercase;">


<div style="float:left;font-size:21px;font-family:Century Gothic;color:#000;margin-left:40px; "><b><?php echo $row['fname'];?></b></div> &nbsp;&nbsp;&nbsp; 



</div>


</div>


<div style="float:left; color:;margin-top:-57px;margin-left:10px; width:80px; height:25px;">

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
			</div>	</div>

			</div>
			</div>	</div>
			</div>	</div>
        </form>
<?php } ?>
