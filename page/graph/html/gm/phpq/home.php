<?php   
include 'dbcs.php';
    include "qrlib.php";   
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
$query="select * from rushss where roll='1'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>
<?php  $take=$row[1];



?>
		 

<?php } ?><?php

 
/*
 * PHP QR Code encoder
 *
 * Exemplatory usage
 *
 * PHP QR Code is distributed under LGPL 3
 * Copyright (C) 2010 Dominik Dzienia <deltalab at poczta dot fm>
 *
 * This library is free software; you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation; either
 * version 3 of the License, or any later version.
 *
 * This library is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU
 * Lesser General Public License for more details.
 *
 * You should have received a copy of the GNU Lesser General Public
 * License along with this library; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA 02110-1301 USA
 */
    
    
    
        
		?>

<HTML>
<HEAD>
<title>STUDENT ID CARD</title>

        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link type="text/css" rel="stylesheet" href="style.css" />
        <link rel="shortcut icon" href="pef.png" />
        <script src="jquery-1.7.2.min.js"></script>
        <script src="barcode.js"></script>
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

<div style="margin:auto; width:1400px;margin-top:0px; margin-left:0px;">
<?php
$levels=$_POST["levels"];
$table='courses';
$class=$_POST["class"];
$roll=$_GET["1"];
$query="select * from $table where  db1='$take'  limit 10";
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


<div style="float:left;  width:600px; height:370px;">
<div style="float:left;  width:550px; height:180px;">
<div style="float:left;  width:550px; height:78px;background:url(fish.png);border-bottom:1px solid green;">

<div style="float:left;  width:130px; border-bottom:3px solid rgb(10,50,100); height:97px; margin-left:15px; margin-top:7px;">
<img src="logos.png" width="135px" height="75px">
</div>

<div style="float:left;  width:400px; TEXT-ALIGN:CENTER;height:78px; margin-left:-50px; margin-top:10px;">

<div id="coh1"style="font-size:12px;"><b>MINISTRY OF HIGHER EDUCATION</b></div>

<div id="coh1"style="COLOR:rgb(20,50,100); margin-top:-5px;">HIGHER INSTITUTE OF MANAGEMENT STUDIES <b style="color:red; font-size:14px;font-size:22px;">
(HIMS BUEA)</b> </div>


</div>

<div style="float:left;  width:550px;margin-top:-33px;">
<div style="float:left;  width:550px; height:2px;border-bottom:2px solid green;">
</div>
<div style="float:left;  width:550px; height:3px;border-bottom:2px solid red;margin-top:-3px;">
</div><div style="float:left;  width:550px; height:2px;border-bottom:2px solid yellow;margin-top:-2px;">
</div></div>
<?php
				$qry = mysql_query("select id as total
from employees where empname='$mat'"); 
$row = mysql_fetch_assoc($qry); 
 $savep4=$row["total"]; 

				
				 ?>
				 
<div style="float:left; margin-top:-10px; margin-left:-20px;width:550px;text-align:center; font-size:18px;COLOR:#1188aa; letter-spacing:2px; height:15px;">

<div style="float:left; margin-top:-13px;width:550px;margin-left:20px;"> 
<B style="COLOR:red;">STUDENT IDCARD</B>
</div></div>
<div style="float:left;  width:550px; height:250px;">

<div style="float:left;  width:130px; height:250px; margin-left:70px; ">

<div style="float:left;  width:130px; height:60px; margin-top:-10px;">
<img src="load_image.php?pic_id=<?php echo $savep4;?>" width="50px" height="40px"style="border:1px solid #efefef; margin-top:20px;">

</div>

<div style="float:left;  width:130px; height:60px;">

</div>

</div>

<div style="float:left;  width:250px; height:180px;margin-top:0px;margin-left:-60px;background:url(long.png); ">

<div style="float:left;  width:100px;text-align:right; height:15px; text-transform:uppercase;">
Department:

</div>

<div style="float:left;  width:150px; height:15px; text-transform:uppercase; ">
&nbsp;&nbsp;&nbsp;<?php
echo $deptt;?>
</div>
<div style="float:left;  width:100px;text-align:right; height:15px; text-transform:uppercase;">
Matricule:

</div>

<div style="float:left;  width:150px; height:15px; text-transform:uppercase; font-weight:bold;">
&nbsp;&nbsp;&nbsp;<?php
echo $mat;?>
</div>
<div style="float:left;  width:100px;text-align:right;  height:15px; text-transform:uppercase;">
Sex:

</div>

<div style="float:left;  width:150px; height:15px; text-transform:uppercase; ">
&nbsp;&nbsp;&nbsp;<?php
echo $sex;?>
</div>

<div style="float:left;  width:100px;text-align:right;  height:15px; text-transform:uppercase;">
Date of Birth:

</div>

<div style="float:left;  width:150px; height:15px; text-transform:uppercase; ">
&nbsp;&nbsp;&nbsp;<?php
$qry = mysql_query("select  dbirth as total
from admission where matricule='$mat' "); 
$row = mysql_fetch_assoc($qry); 
echo 
$richooTTTy=$row['total']; ?>
</div>
<div style="float:left;  width:100px;text-align:right;  height:15px; text-transform:uppercase;">
IDcard No:

</div>

<div style="float:left;  width:150px; height:15px; text-transform:uppercase; font-weight:bold;">
&nbsp;&nbsp;&nbsp;<?php
$qry = mysql_query("select  city as total
from admission where matricule='$mat' "); 
$row = mysql_fetch_assoc($qry); 
echo 
$richooTTTys=$row['total']; 



$qry = mysql_query("select  barcode as total
from admission where matricule='$mat' "); 
$row = mysql_fetch_assoc($qry); 

$code=$row['total']; ?>
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

 $statusfbio="+2";

}

elseif($mxc11>=300 && $mxc11<=300 ){

 $statusfbio="+1";
}



elseif($mxc11>=400 && $mxc11<=400 ){

 $statusfbio="+1";
}









echo $mum=($take)+ $statusfbio;


?>

</div>





</div>


<div style="float:left;  width:100px; height:250px; ">

	
<div style="float:left;  width:100px;margin-top:-20px;">
					
					
			<?php echo  $roll=$row['roll'];?>	
<img src="load_image.php?pic_id=<?php echo $savep4;?>" width="130px" height="99px"style="border:1px solid #1188aa; margin-top:10px; margin-left:-25px;">

</div>

</div>
</div>

<div style="float:left;  width:550px; margin-top:-140px; height:50px;background:rgb(10,50,100);text-align:center;">

<div style="float:left;  width:550px; margin-top:5px; font-size:17px;color:#fff;">
NAME: <b><?php echo $fname;?></b>
</div>

<div style="float:left;  width:100px; margin-left:40px;height:100px;margin-top:-80px; ">

<?php 
$data=$code;








    //set it to writable location, a place for temp generated PNG files
    $PNG_TEMP_DIR = dirname(__FILE__).DIRECTORY_SEPARATOR.'temp'.DIRECTORY_SEPARATOR;
    
    //html PNG location prefix
    $PNG_WEB_DIR = 'temp/';
 
    
    //ofcourse we need rights to create temp dir
    if (!file_exists($PNG_TEMP_DIR))
        mkdir($PNG_TEMP_DIR);
    
    
    $filename = $PNG_TEMP_DIR."$code.png";
    
    //processing form input
    //remember to sanitize user input in real-life solution !!!
    $errorCorrectionLevel = 'L';
    if (isset($_REQUEST['level']) && in_array($_REQUEST['level'], array('L','M','Q','H')))
        $errorCorrectionLevel = $_REQUEST['level'];    

    $matrixPointSize = 4;
    if (isset($_REQUEST['size']))
        $matrixPointSize = min(max((int)$_REQUEST['size'], 1), 10);


        QRcode::png($data, $filename, $errorCorrectionLevel, $matrixPointSize, 2);    
        
   
        QRcode::png("$code", $filename, $errorCorrectionLevel, $matrixPointSize, 2);    
        
      echo '<img src="'.$PNG_WEB_DIR.basename($filename).'" />';  
    
    //config form
   
    // benchmark
  

    ?>


</div>

</div>



</div>


</div>


</div>

</div>
	<?php } ?>
</div>