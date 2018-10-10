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
        <title><?php echo $barcodeName; ?> - Barcode Generator</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link type="text/css" rel="stylesheet" href="style.css" />
        <link rel="shortcut icon" href="favicon.ico" />
        <script src="jquery-1.7.2.min.js"></script>
        <script src="barcode.js"></script>
    </head>
    <body ">

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
$query="select * from $table where departmet='MANAGEMENT' and levels='200' and db1='$take' ";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) { 
		 
		  $flag=1;
		  ?>
		  		
		  		  <div style='margin:auto;width:1200px;height:400px;'> 
				  <div style='width:500px;height:300px;'>

		  <div style='float:left;width:400px;height:260px; margin-left:00px;letter-spacing:2px; border:1px solid #ccc;'>
		  		  <div style='float:left;width:400px;height:70px; background:rgba(230,230,250,0.7);margin-top:2px;
	background: -moz-linear-gradient(rgb(180,160,90), #000 , #2c5678); 
        background: -webkit-gradient(linear,left bottom,left top,color-stop(0, #111),color-stop(rgb(180,160,90), #000 , #2c5678));	
	background: -webkit-linear-gradient(rgb(180,160,90), #000, #2c5678);	
	background: -o-linear-gradient(rgb(180,160,90), #000, #2c5678);
	background: -ms-linear-gradient(#rgb(180,160,90), #000, #2c5678);
	background: linear-gradient(rgb(180,160,90), #000, #2c5678);
color:#fff;text-align:center;font-weight:bold;font-size:15px;'><?php echo $takes;?><br><?php echo $takes2;?>
</div>
		  <div style='float:left;width:400px;height:1px; margin-left:00px;letter-spacing:2px; border-bottom:2px solid #ccc;'></div>
		  		  <div style='float:left;width:400px;height:25px; margin-left:00px;letter-spacing:1px;font-size:13px;text-align:center;color:#ff6666;'><i> STUDENT ATTENDANCE CARD<i></div>

		  <div style='float:left;width:400px;height:15px; margin-left:00px;letter-spacing:2px;'>
		  
		  </div>
		
		  <div style='float:left;width:400px;height:100px; margin-left:00px;letter-spacing:2px;'>
		  <div style='float:left;width:100px;height:20px; margin-left:00px;text-align:left; color:$989898;'>
		  NAMES :
</div>	  <div style='float:left;width:300px;height:20px; margin-left:00px;text-align:left; color:$989898;'>
		  <B><?PHP ECHO $row['fname'];?></b>
</div>
		   <div style='float:left;width:100px;height:20px; margin-left:00px;text-align:left; color:$989898;'>
		  DEPARTMENT :
</div>	  <div style='float:left;width:300px;height:20px; margin-left:00px;text-align:left; color:$989898;'>
		  <B><?PHP ECHO $row['departmet'];?></b>
</div>


  <div style='float:left;width:100px;height:20px; margin-left:00px;text-align:left; color:$989898;'>
		  LEVEL :
</div>	  <div style='float:left;width:300px;height:20px; margin-left:00px;text-align:left; color:$989898;'>
		  <B><?PHP ECHO $row['levels'];?></b>
</div>
  <div style='float:left;width:100px;height:25px; margin-left:00px;text-align:left; color:$989898;'>
		  ISSUED ON :
</div>	  <div style='float:left;width:300px;height:25px; margin-left:00px;text-align:left; color:$989898;'>
		  <B><?PHP ECHO DATE('Y/M/j');?></b>
</div>







		 </div>  
		 
		 <div style='float:left;width:250px;height:25px; text-align:left; color:$989898;margin-left:8px;'>
<?php
$matricule=$row['matricule'];
$default_value = array();
$default_value['filetype'] = 'PNG';
$default_value['dpi'] = 72;
$default_value['scale'] = isset($defaultScale) ? $defaultScale : 1;
$default_value['rotation'] = 0;
$default_value['font_family'] = 'Arial.ttf';
$default_value['font_size'] = 8;
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
                </section>
            </div>     

</div>


  <div style='float:left;width:100px;height:25px; margin-left:300px;text-align:left; color:$989898; margin-top:-140px;'>
<img src="image/<?php echo $pic;?>" width="90px" height="90px"style="border:2px solid #000;">


</div>





<div style='float:left;width:404px;height:30px; background:rgba(230,230,250,0.7);margin-top:2px;
	background: -moz-linear-gradient(rgb(180,160,90), #000 , #2c5678); 
        background: -webkit-gradient(linear,left bottom,left top,color-stop(0, #111),color-stop(rgb(180,160,90), #000 , #2c5678));	
	background: -webkit-linear-gradient(rgb(180,160,90), #000, #2c5678);	
	background: -o-linear-gradient(rgb(180,160,90), #000, #2c5678);
	background: -ms-linear-gradient(#rgb(180,160,90), #000, #2c5678);
	background: linear-gradient(rgb(180,160,90), #000, #2c5678);
color:#fff;text-align:center;font-weight:bold;font-size:15px;'>STUDENT FEE AND ATTENDANCE CARD
</div>


			</div>
			</div>	</div><bR><BR>
        </form>
<?php } ?>
