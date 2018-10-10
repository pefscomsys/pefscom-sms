<?PHP
ini_set('max_execution_time', 60000); //300 seconds = 5 minutes
INCLUDE 'dbcs.PHP';


$rollsps=$_GET["roll"];

$cxx5=$_POST["cxx5"];
 $levels=$_POST["levels"];
$form=$_POST["form"];
$statusbsub=$_POST["statusbsub"];

 $deptt=$_POST["deptt"];

$teacher=$_POST["teacher"];
$t1=$_POST["t1"];
$t2=$_POST["t2"];

$levels=$_POST["levels"];
$roll=$_POST["roll"];
$form=$_POST["form"];

$form=$_POST["form"];
?>
<html>
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
<?php $deptt=$row['departmet'];?>
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
		   
		   <?php echo $row["fname"];?>
		      
		   </DIV>	
		   </DIV>	
		   
			<div style="float:left; text-align:center;  font-family:Georgia; MARGIN-LEFT:-110PX;FONT-WEIGHT:BOLD;font-size:28px; COLOR:#1188AA; width:1300px; height:50px;  ">
		   
		   
		   By the HIGHER &nbsp;&nbsp;INSTITUTE &nbsp;OF &nbsp;MANAGEMENT&nbsp; STUDIES (HIMS) BUEA
		   
		   
		   </DIV>	
		   
		 	<div style="float:left; text-align:center;  font-family:TIMES; line-height:45px;MARGIN-LEFT:-130PX;FONT-WEIGHT:BOLD;font-size:30px; COLOR:#000; width:1300px; height:50px;  ">
		   
		   
		   <I>for fullfilling all the requirements for the award of the <b style="font-size:38px;">HIGHER NATIONAL <br>DIPLOMA in <?php echo $row["departmet"];?></b> and for being successful in the June<br>
		   <b style="font-family:georgia; ">2015 </b> NATIONAL &nbsp;HND &nbsp;Examination&nbsp;, earning  <?php $nmi= $row["grade"];
		   
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
		   Done in Buea,this 20th day of February 2015
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
		 <B>Deputy Registrar/Academics </b>
		   </DIV>
		   
		   
		   
		   
		   
		      </DIV>	   
		   
		   
		   
		   
		   
		   
		   
		   
		   
		   
		   
		   
		   
		   
		   
		   
		   
		   
		   
		   
		   
		   
		   
		   
		   
		   
		   
		      
		   <div style="float:left; text-align:center; margin-top:-610px; margin-left:120px;  font-size:24px; width:1300px; height:100px;  ">
	  	   <div style="float:left;  width:350px;border-bottom:1px solid #000;  height:100px;   ">
		<div style="float:left;  width:250px; height:60px;  margin-top:25px; ">
		
		   </DIV>
		   </DIV>   
		   
		   <div style="float:left;  width:250px; height:100px;   ">
		  
		   </DIV>
		   
		   <div style="float:left;border-bottom:1px solid #000;  width:500px; height:100px;   ">
	<div style="float:left;  width:250px; height:60px; margin-top:-10px;  ">
		
		   </DIV>
		   </DIV>
		   
		   
		   
		   
		   
		      </DIV>	   
		   
		   
		   
		   
		   
		   
		   
		   
		   
		   
		   
		   
		   
		   
		   
		   
		   
		   
		   
		   
		   
		   
		   
		   
		   
		   
		   
		   
		   </DIV>	
		   
		   
		      <div style="float:left; text-align:center; margin-top:-55px; font-family:Bookman Old Style;  font-size:15px; width:1300px; height:100px;  ">
	  	
		   Tel: (+237) 679821672&nbsp;/&nbsp;677864647&nbsp;, Email: info@himsbuea.org,<br> website:www.himsbuea.org
		   
		   </DIV>	
		   
		   
		   
		   
		   
		   </DIV>	
		   
		   </DIV>	
		   </DIV>
		   </DIV>		
		   <?php } ?>