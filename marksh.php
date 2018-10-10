<?php

include 'dbcs.php';
$ms=$_GET['roll'];
page_protect();


 $notes=$_SESSION['user_name'];

$user_name=$notes;

 $pic=$_GET["pic"];
$amp=$_GET["amp"];
$roll=$_GET["roll"];

 $ip=@$_SERVER['REMOTE_ADDR'];
 
 ?><?php


$query="select * from users where full_name='$notes'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>
<?php  $ids=$row['fax'];

$levels=$row['user_level'];
?>
<?php } ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Universal University System</title>
<link href="popupst.css" rel="stylesheet" type="text/css" />

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
<div id="popup">
<div style="float:left; width:900px;margin-top:3px; height:500px;">

<div style="float:left; width:900px;height:40px;background:rgb(150,120,190);">
<div style="float:left; width:100px; height:80px;color:#fff;font-size:22px;">
<div style="float:left;margin-top:5px;margin-left:5px;">&#9658;</div>


 
 </div>

 <div style="float:left; width:300px;color:#1188aa; height:30px;font-size:28px;color:#fff;text-transform:uppercase;"><?php echo $pic;?></div>
 
 
 
 
 </div>

<div style="float:left; width:350px;height:30px; margin-left:100px; margin-top:25px;">
				
<a href="<?php 
$qry = mysql_query("select  tm as total
from page where cn='21'  and id='$ids'  "); 
$row = mysql_fetch_assoc($qry); 

 echo $rsy=$row['total']; ?>?rolls=Register Marks">
<div style="float:left; width:350px;height:30px; ">	
<div style="float:left; width:10px; height:30px; background:#989898;">	
							
				
				
	
</div>	
<div style="float:left; width:290px; height:30px; background:#FFBB40;">	

<div style="float:left;text-align:left; margin-left:10px; font-size:16px; width:280px; height:20px;margin-top:5px;">
							
	Register Marks 
				
	</div>
</div>
</div>	

</a>		


	<a href="<?php 
$qry = mysql_query("select  tm as total
from page where cn='22'  and id='$ids'  "); 
$row = mysql_fetch_assoc($qry); 

 echo $rsy=$row['total']; ?>?rolls=Register Resit Marks">	
<div style="float:left; width:350px;height:30px; ">	
<div style="float:left; width:10px; height:30px; background:#989898;">	
							
				
				
	
</div>	
<div style="float:left; width:290px; height:30px; background:#FFBB40;">	

<div style="float:left;text-align:left; margin-left:10px; font-size:16px; width:280px; height:20px;margin-top:5px;">
							
	Register Resit Marks
				
	</div>
</div>
</div>	

</a>		


<a href="<?php 
$qry = mysql_query("select  tm as total
from page where cn='23'  and id='$ids'  "); 
$row = mysql_fetch_assoc($qry); 

 echo $rsy=$row['total']; ?>?rolls=Add Missing Course on Slip">	
<div style="float:left; width:350px;height:30px; ">	
<div style="float:left; width:10px; height:30px; background:#989898;">	
							
				
				
	
</div>	
<div style="float:left; width:290px; height:30px; background:#FFBB40;">	

<div style="float:left;text-align:left; margin-left:10px; font-size:16px; width:280px; height:20px;margin-top:5px;">
							
		Add Missing Course on Slip
				
	</div>
</div>
</div>	

</a>		






<div style="float:left; width:350px;height:30px; ">	
<div style="float:left; width:10px; height:30px; ">	
							
				
				
	
</div>	
<div style="float:left; width:290px; height:30px;">	

<div style="float:left;text-align:left; margin-left:10px; font-size:16px; width:280px; height:20px;margin-top:5px;">
							

				
	</div>
</div>
</div>	

	

<div style="float:left; width:350px;height:30px; ">	
<div style="float:left; width:10px; height:30px; ">	
							
				
				
	
</div>	
<div style="float:left; width:290px; height:30px;">	

<div style="float:left;text-align:left; margin-left:10px; font-size:16px; width:280px; height:20px;margin-top:5px;">
							

				
	</div>
</div>
</div>	


<div style="float:left; width:350px;height:30px; ">	
<div style="float:left; width:10px; height:30px; ">	
							
				
				
	
</div>	
<div style="float:left; width:290px; height:30px;">	

<div style="float:left;text-align:left; margin-left:10px; font-size:16px; width:280px; height:20px;margin-top:5px;">
							

				
	</div>
</div>
</div>	

		

	<a href="deans.php">	
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

</div>	

</div>
</body>
</html>