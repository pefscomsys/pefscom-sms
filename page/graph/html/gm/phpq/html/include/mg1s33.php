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
        <title>Election CARD</title>
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
$query="select * from classes where  roll='3'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>
<?php  $off1in3=$row['class'];


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
$query="select * from election  where stat=''order by position DESC";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) { 
		 
		  $flag=1;
		  ?>

<?php
 $matricules=$row['matricule'];
 $fname=$row['fname'];
$mat=$row['matricule'];

$last=$row['last_name'];
$levels=$row['levels'];
$deptt=$row['departmet'];
$barcode=$row['codes'];
?>
<HTML>
<HEAD>
<title>STUDENT ID CARD</title>
<style>
#pretcon{float:left;margin-left:10px;height:400px;width:463px;margin-top:1px;}
#container{float:left;
width:470px; height:300px;}

#containery{float:left;
width:470px; height:380px;}


#container2{float:left;margin-left:0px;
width:450px; height:200px;}


#container3{float:left;
width:470px; height:100px;}



#container4{float:left;
width:470px; height:20px;}


#coh1{float:left;MARGIN-LEFT:20PX;
width:350px; height:25px;FONT-FAMILY:Iskoola Pota;FONT-SIZE:13px;FONT-WEIGHT:BOLD;}



#coh2{float:left;margin-left:10px;
width:265px; height:35px;TEXT-ALIGN:CENTER;FONT-WEIGHT:BOLD;COLOR:rgb(80,10,20); FONT-SIZE:30PX;MARGIN-TOP:-15PX;}


#coh3{float:left;
width:390px; height:20px;margin-left:10px;
FONT-FAMILY:Iskoola Pota;FONT-SIZE:11px;FONT-WEIGHT:BOLD;COLOR:#1188dd;}



#container5{float:left;margin-left:-20px;
width:120px; height:80px;margin-top:22px;}

#container6{float:left;
width:340px; height:80px;background:url(image/fish.png);margin-top:22px;}



#container422{float:left;margin-left:5px;
width:127px; height:5px;color:#fff;font-size:13px;background:rgb(80,10,20);}

#container41{float:left;
width:100px; height:17px;}

#container42{float:left;margin-left:17px;
width:330px; height:17px;color:#fff;font-size:13px;background:rgb(80,10,20);}

</style>
</HEAD>
<BODY>
<div style="margin:auto; width:1100px;margin-top:-20px;margin-left:15px;">
<div style="float:left;
width:470px;height:400x;">
<div style="float:left;
width:450px;height:328px;">
<div style="float:left;
width:450px;height:253px;border:1px solid #000;">
<div style="float:left;
width:500px;height:18px;font-size:15px;"><b>Higher Institute Of Management Studies</b>
</div><div style="float:left;
width:500px;height:20px;font-size:17px;">Buea
</div>
<div style="float:left;
width:500px;height:20px;font-size:17px;font-family:Bradley Hand ITC;"><b>Voting Permit</b>
</div>
<div style="float:left;
width:500px;height:20px;font-size:17px;font-family:Broadway;"><b>STUDENT AFFAIRS OFFICE HIMS</b>
</div>
<div style="float:left;
width:500px;height:25px;font-size:14px;font-family:Browallia New;"><b>Registration Number</b> 
</div><div style="float:left;
width:500px;height:20px;font-size:17px;font-family:Gill Sans MT Condensedi;"><b><?php echo 
$row[0];?>-<?php echo $row['codes'];?>-<?php echo date('j');?></b>
</div>
<div style="float:left;
width:400px;height:20px;font-size:17px;font-family:Agency FB;"><b>Profession</b>/Occupation
</div><div style="float:left;
width:400px;height:15px;font-size:17px;font-family:Broadway;"><b>STUDENT</b>
</div>

<div style="float:left;
width:400px;height:20px;font-size:17px;font-family:Agency FB;"><b>Name of Candidate</b>
</div><div style="float:left;
width:400px;height:15px;font-size:17px;font-family:Broadway;"><b><?php echo 
$row['fname'];?></b>
</div>


<div style="float:left;
width:400px;height:15px;font-size:17px;font-family:Broadway;"><b></b>
</div>
<div style="float:left;
width:450px;height:25px;font-size:17px;font-family:Bodoni MT Condensed;text-align:right;font-size:23px;"><b>ElEHIMS</b>
</div>
<div style="float:left;
width:450px;height:35px;background:#ccc;font-size:17px;font-family:Agency FB;text-align:center;font-size:23px;"><b><?php echo $row['position'];?>
</div>
<?php $takes2;?> 

<?php
 $matricules=$row['matricule'];
 $fname=$row['fname'];
$mat=$row['matricule'];

$last=$row['last_name'];
$levels=$row['levels'];
$deptt=$row['departmet'];
$barcode=$row['codes'];
?>
</div>


<div style="float:left;
width:300px;;height:15px;text-align:left;font-size:12px;font-weight:normal;color:#989898;">
</div>


		 <div style='float:left;width:250px;height:25px;  margin-top:-220px;color:$989898;margin-left:340px;'>
<?php
 $matricule=$barcode;
$default_value = array();
$default_value['filetype'] = 'PNG';
$default_value['dpi'] = 72;
$default_value['scale'] = isset($defaultScale) ? $defaultScale : 1;
$default_value['rotation'] = 90;
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
						
				<?php
				 $mxx=$matricules;
				$qry = mysql_query("select id as total
from employees where empname='$mxx'"); 
$row = mysql_fetch_assoc($qry); 
 $savep4=$row['total']; 
				
				 ?>
					
					
			<?php  $roll=$row['roll'];?>	
			
<img src="load_image.php?pic_id=<?php echo $savep4;?>" width="70px" height="65px" style="border:1px solid #efefef;">
                    </div>
                   
</div>       </section>
          
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
			</div>	</div></div>	</div>
        </form>
<?php } ?>
