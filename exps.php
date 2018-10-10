<?php

include 'dbcs.php';
$ms=$_GET['roll'];
page_protect();


 $notes=$_SESSION['user_name'];

$user_name=$notes;
if(@$_SESSION['userlevel']!=5){header("location: login.php?error=Unauthorized access");}




 $ip=@$_SERVER['REMOTE_ADDR'];
 
 ?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Universal University System</title>
<link href="popups.css" rel="stylesheet" type="text/css" />

</head>
 
<body>
 
<script src="jquery.min.js"></script>
   <script>
      // you can use just jquery for this
      $(document).ready(function(){
         $('#overlay-back').fadeIn(500,function(){
            $('#popup').show();
         });
 
         $(".close-image").on('click', function() {
            $('#popup').hide();
            $('#overlay-back').fadeOut(500);
         });
      });
   </script>

<div id="overlay-back"></div>
<div id="popup" >
<div style="float:left; width:650px;border-bottom:1px solid #000;margin-top:3px; height:40px;background:rgb(120,80,100);">

<div style="float:left; width:100px; height:80px;color:#fff;font-size:22px;"><div style="float:left;margin-top:5px;margin-left:5px;">&#9658;</div></div>
 <div style="float:left; width:500px;color:#1188aa; height:30px;font-size:28px;color:#fff;">HOME PAGE  (Expenditure(s))</div></div>

 
	
<iframe title="" class="youtube-player" type="text/html" 
width="100%" height="470" src="inotsss.php"
frameborder="0" allowFullScreen style="
 border: 0px solid #ffffff;background:#efefef;"></iframe>
  
  
  
	<a href="bustme.php">	
<div style="float:left; width:350px;height:30px; ">	
<div style="float:left; width:10px; height:30px; background:#989898;">	
							
				
				
	
</div>	
<div style="float:left; width:150px; height:30px; background:#FFBB40;">	

<div style="float:left;text-align:left; margin-left:10px; font-size:16px; width:150px; height:20px;margin-top:5px;">
							
<- Back 				
	</div>
</div>
</div>	

</a>			
	
  </div>
	
	
	<div style="float:left;
background:#efefef;
  width: 100%; text-align:center;
  height: 25px;margin-top:155px; font-size:12px;color:#009933;">
	
	
	&copy PEFSCOM COMPANY LTD
	
  </div>
		
	
	
	
	
	
	
	
	</div>
    <script src='jquery.min.js'></script>

        <script src="js/index.js"></script>

    
    
    
  </body>
</html>
