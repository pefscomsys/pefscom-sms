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
<style> body {
        margin: 0;
        padding: 0;
        font: 12pt;

	

	


    }
    * {
        box-sizing: border-box;
        -moz-box-sizing: border-box;
    }
    .page {
        width: 21cm;
        min-height: 41.7cm;
        padding: 2cm;
        margin: 1cm auto;
        border: 1px #000 solid;
        background: white;
        box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
    }
    .subpage {
        padding: 1cm;
        border: 5px black solid;
        height: 237mm;
        outline: 2cm #000 solid;
    }
    
    @page {
        size: A4;
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
width:265px; height:35px;TEXT-ALIGN:CENTER;FONT-WEIGHT:BOLD;COLOR:rgb(80,10,20); FONT-SIZE:30PX;MARGIN-TOP:-15PX;}


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

$take=$_POST["db1"];
$department=$_POST["department"];
$levels=$_POST["levels"];
$table='courses';
$class=$_POST["class"];
$roll=$_GET["1"];
$query="select * from $table where  db1='$take'  and  departmet='$department' and c140='1'";
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
$qry = mysql_query("select  barcode as total
from barcode where matricule='$mat'  "); 
$row = mysql_fetch_assoc($qry); 
$barcode=$row['total']; 
?>

<div style="margin:auto; width:1200px;">
<div class="mirrors">
<div style="float:left;  width:530px; height:350px;margin-left:50px;">


<div style="float:left;  width:580px; height:100px; margin-left:35px;margin-top:5px;">

<div style="float:left;  width:230px; height:100px;margin-left:15px;">

<div style="float:left;  width:230px; height:20px;">
REPUBLIQUE DU CAMEROUN

</div>
<div style="float:left;  width:230px; height:15px;">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Paix-Travail-Patrie
</div>

<div style="float:left;  width:230px; height:15px;">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*********
</div>

<div style="float:left;  width:230px; height:15px;">
LIMBE NAUTICAL ARTS 
</div>


</div>

<div style="float:left;  width:70px; height:100px;">
<img src="logos.png"  style="float:left; margin-top:-10px;margin-left:-70px; height:100px; width:120px;">

</div>


<div style="float:left;  width:230px; height:100px;">

<div style="float:left;  width:230px; height:15px;">
REPUBLIC OF CAMEROON

</div>
<div style="float:left;  width:230px; height:15px;">
Peace - Work -Fatherland

</div>

<div style="float:left;  width:230px; height:20px;">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*********
</div>


<div style="float:left;  width:230px; height:15px;">
AND FISHERIES INSTITUTE
</div>



</div>








</div>
<div style="float:left;  width:550px;margin-top:-27px;">
<div style="float:left;  width:550px; height:2px;border-bottom:3px solid green;">
</div>
<div style="float:left;  width:550px; height:3px;border-bottom:2px solid red;margin-top:-1px;">
</div><div style="float:left;  width:550px; height:2px;border-bottom:2px solid yellow;margin-top:0px;">
</div></div>
<?php
				$qry = mysql_query("select id as total
from employees where empname='$mat'"); 
$row = mysql_fetch_assoc($qry); 
 $savep4=$row["total"]; 

				
				 ?>
				 
<div style="float:left; margin-top:0px; margin-left:-50px;width:550px;text-align:center; font-size:18px;COLOR:#1188aa; letter-spacing:2px; height:15px;">

<div style="float:left; margin-top:-13px;width:550px;margin-left:-20px;font-size:13px;"> 
<B style="COLOR:#ccc;">STUDENT BIOMETRIC ID</B>
</div></div>
<div style="float:left; margin-left:-40px; width:550px; height:250px;">

<div style="float:left;  width:130px; height:250px; margin-left:70px; ">

<div style="float:left;  width:130px; height:60px; margin-top:-10px;">

</div>

<div style="float:left;  width:130px; height:60px;">

</div>

</div>

<div style="float:left;  width:250px; height:180px;margin-top:0px;margin-left:-70px;background:url(long.png); ">

<div style="float:left;  width:250px;text-align:center;margin-top:-10px; height:25px; color:red;text-transform:uppercase;font-size:18px; ">
<b><?php
echo $deptt;?></b>
</div>
<div style="float:left;  width:100px;text-align:right; height:15px; text-transform:uppercase;">
Student ID:

</div>

<div style="float:left;  width:150px; height:15px;font-size:<?php 



$mxc11=$levels;
if(empty($mxc11)){

 $statusfbio="";}
elseif($mxc11>=200 && $mxc11<=200 ){

 echo $sto="13px";

}

elseif($mxc11>=300 && $mxc11<=300 ){

 echo $sto="13px";

}



elseif($mxc11>=400 && $mxc11<=400 ){

 echo $sto="11px";

}


?>; text-transform:uppercase; font-weight:bold;">
&nbsp;&nbsp;&nbsp;<?php
echo $mat;?>
</div>
<div style="float:left;  width:100px;text-align:right;  height:15px; text-transform:uppercase;">
Sex:

</div>

<div style="float:left;  width:150px; height:15px; text-transform:uppercase; ">
&nbsp;&nbsp;&nbsp;<?php 


$qry = mysql_query("select sex as total
from admission where matricule='$mat'    "); 
$row = mysql_fetch_assoc($qry); 
echo $save=$row['total']; 
?>
</div>

<div style="float:left;  width:100px;text-align:right;  height:15px; text-transform:uppercase;">
Date of Birth:

</div>

<div style="float:left;  width:150px; height:15px; text-transform:uppercase; ">
&nbsp;&nbsp;&nbsp;<?php 


$qry = mysql_query("select dbirth as total
from admission where matricule='$mat' and codes='$deptt'  "); 
$row = mysql_fetch_assoc($qry); 
echo $save=$row['total']; 
?>
</div>
<div style="float:left;  width:100px;text-align:right;  height:15px; text-transform:uppercase;">
IDcard No:

</div>

<div style="float:left;  width:150px; height:15px; text-transform:uppercase; font-weight:bold;">
&nbsp;&nbsp;&nbsp;<?php 


$qry = mysql_query("select idcard as total
from admission where matricule='$mat' and codes='$deptt'   "); 
$row = mysql_fetch_assoc($qry); 
echo $save=$row['total']; 
?>
</div>
<div style="float:left;  width:100px;text-align:right;  height:15px; text-transform:uppercase;">
ISSUED ON

</div>

<div style="float:left;  width:150px; height:15px; text-transform:uppercase; font-weight:bold;">
&nbsp;&nbsp;&nbsp;10/10 /<?php echo date("Y");?>


</div>
<div style="float:left;  width:100px;text-align:right;  height:15px; text-transform:uppercase;">
Valid:

</div>

<div style="float:left;  width:150px; height:15px; text-transform:uppercase; font-weight:bold;">
&nbsp;&nbsp;&nbsp;10/10 /<?php 



$mxc11=$levels;
if(empty($mxc11)){

 $statusfbio="";}
elseif($mxc11>=200 && $mxc11<=200 ){

 $statusfbio="+3";

}

elseif($mxc11>=300 && $mxc11<=300 ){

 $statusfbio="+2";
}



elseif($mxc11>=400 && $mxc11<=400 ){

 $statusfbio="+1";
}









echo $mum=($take)+ $statusfbio;


?>

</div>





</div>


<div style="float:left;  width:100px; height:250px;margin-left:15px; ">

	
<div style="float:left;  width:100px;margin-top:-30px;">
					
					
			<?php echo  $roll=$row['roll'];?>	
			
			
<img src="load_image.php?pic_id=<?php echo $savep4;?>" width="190px" height="145px"style="border:1px solid #1188aa; margin-top:10px; margin-left:-25px;">

</div>

</div>
</div>

<div style="float:left;  width:550px; margin-top:-120px; height:65px;background:url('2s.png');text-align:center;">

<div style="float:left;  width:550px; margin-top:13px; font-size:21px;color:#fff;">
&nbsp;&nbsp;&nbsp;&nbsp; <b><?php echo $fname;?></b>
</div>

<div style="float:left;  width:100px; margin-left:260px;height:100px;margin-top:-90px; ">

<?php 

 
 $data=$barcode;








    //set it to writable location, a place for temp generated PNG files
    $PNG_TEMP_DIR = dirname(__FILE__).DIRECTORY_SEPARATOR.'temp'.DIRECTORY_SEPARATOR;
    
    //html PNG location prefix
    $PNG_WEB_DIR = 'include/temp/';
 
    
    //ofcourse we need rights to create temp dir
    if (!file_exists($PNG_TEMP_DIR))
        mkdir($PNG_TEMP_DIR);
    
    
    $filename = $PNG_TEMP_DIR."$barcode.png";
    
    //processing form input
    //remember to sanitize user input in real-life solution !!!
    $errorCorrectionLevel = 'L';
    if (isset($_REQUEST['level']) && in_array($_REQUEST['level'], array('L','M','Q','H')))
        $errorCorrectionLevel = $_REQUEST['level'];    

    $matrixPointSize = 3;
    if (isset($_REQUEST['size']))
        $matrixPointSize = min(max((int)$_REQUEST['size'], 1), 6);


        QRcode::png($data, $filename, $errorCorrectionLevel, $matrixPointSize, 1);    
        
   
        QRcode::png("$barcode", $filename, $errorCorrectionLevel, $matrixPointSize, 1);    
        
    
    //config form
   
    // benchmark
  
	echo '<img src="'.$PNG_WEB_DIR.basename($filename).'" />';

    ?>
	</div>
<div style="float:left;margin-left:0px;margin-top:-70px;">
<?php
 $matricule=$barcode;
$default_value = array();
$default_value['filetype'] = 'PNG';
$default_value['dpi'] = 72;
$default_value['scale'] = isset($defaultScale) ? $defaultScale : 1;
$default_value['rotation'] = 270;
$default_value['font_family'] = 'Arial.ttf';
$default_value['font_size'] = 7;
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
                    <div id="imageOutput" style="float:left; margin-left:-308px; margin-top:-80px;">
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
</div>