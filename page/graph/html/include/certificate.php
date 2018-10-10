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
$query="select * from certificate where matricule='$rollsps' limit 1
";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
 
		 ?>
<?php  $deptt=$row['departmet'];?>
<?php } ?>
<?php
$query="select * from certificate where departmet='$deptt' 
";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
 
		 ?>
		 
		 <div class="page">
		<div style="float:left; width:1408px; margin-left:-60px;height:970px; MARGIN-TOP:-80PX;  background:url(frank.png);">
		<div style="float:left; width:1308px; height:1300px; MARGIN-TOP:80PX; ">
	
		<div style="margin:auto;width:1000px; height:100px; MARGIN-TOP:10PX; ">
		
		<div style="float:left; font-family:Old English Text MT;text-align:center; width:1100px;font-size:65px; height:100px;  ">
		   Attestation of Completion of Studies
		   
		   
		   </DIV>	
		   
		   
			<div style="float:left;  width:1100px; height:100px;  ">
	
		   
		   
		   
		   	   <div style="float:left;  width:150px; height:100px; margin-top:10px; margin-left:100px; ">
	<img src="logos.png" width="186px" height="120px">
		   
		   </DIV>	
		     
		   
		   
		   
		   	   <div style="float:left;  width:650px; height:100px; margin-top:10px;  ">
	
		   	   <div style="float:left;  width:650px; height:70px;   ">

		   
		   </DIV>	
		   
		   
		   
		   	   <div style="float:left; text-align:center; width:650px;font-size:35px; height:30px;   ">
		  <i> Awarded to</i>
		   </DIV>	
		   
		   
		   </DIV>	
		   
		   	   <div style="float:left;  width:150px; height:100px;  ">
	<img src="logos.png" width="186px" height="120px">
		   
		   </DIV>	
		   
		   
		   
			<div style="float:left; text-align:center; margin-top:30px; font-family:Gill Sans Ultra Bold; font-size:35px; width:1000px; height:100px;  ">
	  	   <div style="float:left;  width:1000px; height:20px;   ">
		   
		   </DIV>	 	   <div style="float:left;  width:1200px; height:30px;   ">
		   
		   <?php echo $row["fname"];$barcode=$row['matricule'];?>
		      
		   </DIV>	
		   </DIV>	
		   
			<div style="float:left; text-align:center;  font-family:Georgia; MARGIN-LEFT:-110PX;FONT-WEIGHT:BOLD;font-size:28px; COLOR:#1188AA; width:1300px; height:50px;  ">
		   
		   
		   By the HIGHER &nbsp;&nbsp;INSTITUTE &nbsp;OF &nbsp;MANAGEMENT&nbsp; STUDIES (HIMS) BUEA
		   
		   
		   </DIV>	
		   
		 	<div style="float:left; text-align:center;  font-family:TIMES;background:#ddd; opacity:0.9; line-height:45px;MARGIN-LEFT:-110PX;FONT-WEIGHT:BOLD;font-size:30px; COLOR:#000; width:1300px; height:180px;  ">
		   
		   
		   <I>for fullfilling all the requirements for the award of the <b style="font-size:38px;">HIGHER NATIONAL <br>DIPLOMA (HND) in <?php echo $row["departmet"];?></b> and for being successful in the June<br>
		   <b style="font-family:georgia; ">2015 </b> &nbsp;HND &nbsp;Examination&nbsp;, earning  <?php $nmi= $row["grade"];
		   
		 $mlop=$nmi;
		   if(empty($mlop)){

echo "an  UPPER CREDIT";
 }
elseif($mlop>='UPPER CREDIT' ){

echo "an  UPPER CREDIT";
}
elseif($mlop>='LOWER CREDIT' && $mlop<='LOWER CREDIT'){

echo "a  LOWER CREDIT";
}

elseif($mlop>='PASS GRADE' && $mlop<='PASS GRADE'){

echo "a  PASS GRADE";
}
		   
		   
		   
		   
		   
		   
		   
		   
		   ?>
		   </DIV>	  
		   
		   
		   
		   
		   
		   
		   </DIV>	
		   
		   </DIV>	
		      
		   </DIV>	
		   
		   
		   
		   
		   
		     
			<div style="float:left; text-align:center; margin-top:-700px;  font-size:24px; width:1300px; height:100px;  ">
	  	   <div style="float:left;  width:600px; height:100px; margin-left:390px;  ">
		   Done in Buea,&nbsp;&nbsp;this 20th day of February, 2015
		   </DIV>
		      </DIV>
		   
		   
		   
		   
		   
		   
	
		     </i>
			<div style="float:left; text-align:center; margin-top:-640px; margin-left:100px;font-family:Baskerville Old Face; font-size:24px; width:1000px; height:100px;  ">
	  	   <div style="float:left;  width:100px; height:100px;   ">
		
		   </DIV>   <div style="float:left;  width:300px; height:50px;   ">
		   Tikum Mbah Azonga (Ph.D)
		   </DIV>
		   
		   <div style="float:left;  width:400px; height:100px;   ">
		  
		   </DIV>
		   
		   <div style="float:left;  width:200px; height:100px;   ">
		   Forbe H. Ngangnchi
		   </DIV>
		   
		   
		   
		   
		   
		      </DIV>	   
		   
		   
		   <div style="float:left; text-align:center; margin-top:-600px;text-transform:uppercase; margin-left:120px;  font-size:24px; width:1300px; height:100px;  ">
	  	   <div style="float:left;  width:100px; height:100px;   ">
		
		   </DIV>   <div style="float:left;  width:150px; height:50px;   ">
		 <b> Registrar</B>
		   </DIV>
		   
		   <div style="float:left;  width:350px; height:100px;   ">
		  
		   </DIV>
		   
		   <div style="float:left;  width:450px; height:100px;margin-left:40px;   ">
		 <B>Registrar </b>
		   </DIV>
		   
		   
		   
		   
		   
		      </DIV>	   
		   
		   
		   
		   
		   
		   
		   
		   
		   
		   
		   
		   
		   
		   
		   
		   
		   
		   
		   
		   
		   
		   
		   
		   
		   
		   
		   
		      
		   <div style="float:left; text-align:center; margin-top:-610px; margin-left:120px;  font-size:24px; width:1300px; height:100px;  ">
	  	   <div style="float:left;  width:400px;border-bottom:1px solid #000;  height:100px;   ">
		<div style="float:left;  width:250px; height:60px;  margin-top:25px; ">
		
		   </DIV>
		   </DIV>   
		   
		   <div style="float:left;  width:250px; height:100px;   ">
		  
		   </DIV>
		   
		   <div style="float:left;border-bottom:1px solid #000;  width:500px; height:100px;   ">
	<div style="float:left;  width:250px; height:60px; margin-top:-10px;  ">
		
		   </DIV>
		   <?php
 $matricule='';
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
registerImageKey('code', 'BCGcode128');

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
		   
		   
		   
		   
		   
		   
		   
		   
		   
		   
		   
		   
		   
		   
		   
		   
		   
		   
		   
		   
		   
		   
		   </DIV>

		      <div style="float:left;  margin-top:35px; font-family:Bookman Old Style;   width:1300px; height:100px;  ">
	  	
		   
		   		      <div style="float:left; text-align:center; font-size:15px;   width:1000px; height:100px;  ">
	  	
		   Tel: (+237) 679821672&nbsp;/&nbsp;233323778&nbsp;, Email: info@himsbuea.org,<br> website:www.himsbuea.org
		   
		   </DIV>	
		 <div style='float:left;width:250px;height:25px;  color:$989898;'>
 <div id="imageOutput">
                        <?php if ($imageKeys['text'] !== '') { ?><img src="image.php<?php echo $finalRequest; ?>" alt="Barcode Image" /><?php }
                        else { ?><?php } ?>
                    </div>
                   
                   </div>  
     </section>
          
		   
		   
		   
		   
		   
		   
		   </DIV>
		   
		   
		   
		   
		   
		      </DIV>	   
		   
		   
		   
		   
		   
		   
		   
		   
		   
		   
		   
		   
		   
		   
		   
		   
		   
		   
		   
		   
		   
		   
		   
		   
		   
		   
		   
		   
		   </DIV>	
		   
		   

		  
		  
		  
		  
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

































































































































<br><?php
$query="select * from certificate where matricule='$rollsps' limit 1
";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
 
		 ?>
<?php  $deptt=$row['departmet'];?>
<?php } ?>
<?php
$query="select * from certificate where departmet='$deptt'  limit 1
";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
 
		 ?>
		 
		 <div class="page">
		<div style="float:left; width:1408px; margin-left:-60px;height:970px; MARGIN-TOP:-80PX; ">
		<div style="float:left; width:1308px;text-align:center; height:200px; MARGIN-TOP:170PX;font-weight:bold;LINE-HEIGHT:38PX;FONT-FAMILY:AngsanaUPC;font-size:45px; ">
	REPUBLIC OF CAMEROON<BR>
	MINISTRY OF HIGHER EDUCATION<BR>
	HIGHER NATIONAL DIPLOMA EXAMINATION<br>
	(HND)
	
	
		   </DIV>
		  
	<div style="float:left; width:1308px;text-align:center; height:65px;font-weight:bold;LINE-HEIGHT:38PX;FONT-FAMILY:AngsanaUPC;font-size:38px; ">

	<u>ISSUE OF RESULTS</u>
	
		   </DIV>
	
	
	
	
			  
	<div style="float:left;margin-left:50px;text-align:center; width:1308px; height:120px;font-weight:arial;LINE-HEIGHT:30PX;FONT-FAMILY:Arial;font-size:22px; letter-spacing:2px;">

	At the Higher National Diploma Level, the performance of the candidate in each subject attempted is indicated in descending order of merit;<b> Distinction , Upper Credit , lower Credit , Pass Grade , Fail,</b>  recorded on the Transcript
	
		   </DIV>
	
	
	
		<div style="float:left; width:1308px;text-align:center; height:65px;font-weight:bold;LINE-HEIGHT:38PX;FONT-FAMILY:AngsanaUPC;font-size:38px; ">

	<u>HIGHER NATIONAL DIPLOMA (HND) PASS GRADES</u>
	
		   </DIV>
	
				  
	<div style="float:left;margin-left:50px;text-align:center; width:1308px; height:150px;font-weight:arial;LINE-HEIGHT:30PX;FONT-FAMILY:Arial;font-size:22px; letter-spacing:2px;">

A pass grade in the Higher National Diploma  is indicated by one of the four Grades; <b> Distinction , Upper Credit , lower Credit , Pass Grade </b> of which <b> Distinction</b>
is the Highest and <b>Pass Grade</b> is the lowest. Performance below the pass grade is not recorded on the certificate.
		   </DIV>
	
	
	
	
	
	
	
	
	
		   </DIV>
		  
		
		   </DIV>
		   </DIV>  
                  
<?php } ?>
