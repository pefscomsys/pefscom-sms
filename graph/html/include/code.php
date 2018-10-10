<?php  
  
    
    //set it to writable location, a place for temp generated PNG files
    $PNG_TEMP_DIR = dirname(__FILE__).DIRECTORY_SEPARATOR.'temp'.DIRECTORY_SEPARATOR;
    
    //html PNG location prefix
    $PNG_WEB_DIR = 'temp/';

    include "qrlib.php";    
    
    //ofcourse we need rights to create temp dir
    if (!file_exists($PNG_TEMP_DIR))
        mkdir($PNG_TEMP_DIR);
    
    
    $filename = $PNG_TEMP_DIR.'test.png';
    
    //processing form input
    //remember to sanitize user input in real-life solution !!!
    $errorCorrectionLevel = 'L';
    if (isset($_REQUEST['level']) && in_array($_REQUEST['level'], array('L','M','Q','H')))
        $errorCorrectionLevel = $_REQUEST['level'];    

    $matrixPointSize = 4;
    if (isset($_REQUEST['size']))
        $matrixPointSize = min(max((int)$_REQUEST['size'], 1), 10);

echo $data=$_GET["data"];
    if (isset($_REQUEST['data'])) { 
    
        //it's very important!
        if (trim($_REQUEST['data']) == '')
            die('data cannot be empty! <a href="?">back</a>');
            
        // user data
        $filename = $PNG_TEMP_DIR.'test'.md5($_REQUEST['data'].'|'.$errorCorrectionLevel.'|'.$matrixPointSize).'.png';
        QRcode::png($_REQUEST['data'], $filename, $errorCorrectionLevel, $matrixPointSize, 2);    
        
    } else {    
    
        //default data
        echo 'You can provide data in GET parameter: <a href="index.php?data=1233456">like that</a><hr/>';    
        QRcode::png('PHP QR Code :)', $filename, $errorCorrectionLevel, $matrixPointSize, 2);    
        
    }    
        
    //display generated file
    echo '
	<div style="float:left; width:1400px; height:300px;font-size:15px;">
	
	
	
	
	<div style="float:left; width:600px;font-weight:times;height:90px;background:rgb(180,50,60); border-radius:5px 0px 5px 0px;">
	
	<div style="float:left;margin-left:5px; width:235px;color:#fff; height:90px; border-radius:5px 0px 5px 0px;">
	
	<B>REPUBLIQUE DU CAMEROUN</B>
	
	<div style="float:left; width:235px;MARGIN-TOP:3PX;text-align:center;">
	Paix - Travail - Patrie
	</div>
	<div style="float:left; width:235px;MARGIN-TOP:3PX;text-align:center;">
	<b>Higher Institute Of Management Studies (HIMS BUEA)</b>
	</div>
	</div>
	
		
	<div style="float:left; width:100px; height:100px; border-radius:5px 0px 5px 0px;">
	<img src="logos.png">
	
	
	</div>
	
	<div style="float:left; width:235px;color:#fff; height:100px; border-radius:5px 0px 5px 0px;">
	
	<B>REPUBLIC OF CAMEROON</B>
	<div style="float:left; width:220px;MARGIN-TOP:3PX;text-align:center;">
	Peace - Work - Fatherland
	</div>
	
	</div>
	
	
	
	
	
	
	
	</div>
	
	
	
	<img src="'.$PNG_WEB_DIR.basename($filename).'" />
	
	
   </div>
	';  
    
   
   