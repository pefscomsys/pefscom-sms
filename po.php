<?php

include 'dbcs.php';
$ms=$_GET['roll'];
page_protect();


 $notes=$_SESSION['user_name'];

$user_name=$notes;
if(@$_SESSION['userlevel']!=11){header("location: login.php?error=Unauthorized access");}
$fac=$_GET["fac"];$sec=$_GET["sec"];
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
<link href="popupss.css" rel="stylesheet" type="text/css" />

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
<div style="float:left; width:650px;border-bottom:1px solid #000;margin-top:3px; height:40px;background:rgb(120,80,100);">

<div style="float:left; width:100px; height:80px;color:#fff;font-size:22px;"><div style="float:left;margin-top:5px;margin-left:5px;">&#9658;</div></div>
 <div style="float:left; width:300px;color:#1188aa; height:30px;font-size:28px;color:#fff;text-transform:uppercase;"><?php echo $amp;?> DETAIL</div></div>

 <?php
  $mxc11=$sec;
if(empty($mxc11)){
}elseif($mxc11>='department'&&  $mxc11<='department'){
require'ago.php';
$top="0px";
}
elseif($mxc11<'department'){
$top="15px";
}elseif($mxc11>'department'){
$top="15px";
}
?>

 
<div style="float:left; width:500px;border-bottom:1px solid #000;margin-top:15px; height:30px;margin-left:75px;background:rgb(120,80,100);">
			<div style="float:left; width:500px; height:25px;font-size:15px;color:#fff;text-transform:uppercase;">
			<div style="float:left; width:40px;text-align:center;margin-top:4px; height:25px;color:#fff;;">
				<?php echo $roll;?> )
			</div>
			<div style="float:left; width:20px;text-align:center;margin-top:4px; height:25px;color:#fff;text-transform:uppercase;">
		
			</div>
			
				<div style="float:left; width:380px;text-align:left;margin-top:4px; height:25px;color:#fff;">
			<?php echo $amp;?>
			</div>
			
			
			
			
			
			</div>
			
			
			</div>
<div style="float:left; width:650px;margin-left:35PX;margin-top:10px; height:auto;font-size:14px;">
		
			
			
				
				
<?php

$query="select * from hour where day='$roll' ";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
?>
<div style="float:left; width:620px;border-bottom:1px solid #000;margin-top:<?php echo $top;?>; height:30px;margin-left:-20px;background:#ccc;">
			<div style="float:left; width:600px; height:25px;font-size:17px;">
			<div style="float:left; width:40px;text-align:center;margin-top:4px;margin-left:15px; height:25px;;">
			<a href="dhour.php?rollx=<?php echo $row["id"];?>">delete	</a>
			</div>
			<div style="float:left; width:100px;text-align:left;margin-top:4px; height:25px;">
		<a href="update.php?rollx=<?php echo $row["id"];?>">Update	</a>
			</div>
			
				<div style="float:left; width:120px;text-align:center;margin-top:4px; height:25px;">
			<?php echo $row["id"];?>, <?php echo $row["lecture"];?>
			</div>
			
			
				<div style="float:left; width:120px;text-align:left;margin-top:4px; height:25px;">
			<?php echo $row["starthour"];?>
			</div>
			
			
				<div style="float:left; width:120px;text-align:left;margin-top:4px; height:25px;">
			<?php echo $row["endhour"];?>
			</div>
			
			
			</div>
			
			
			</div>
					
<?php }
?>

</div>
<div style="float:left; width:650px; height:127px;font-size:14px;margin-top:1px;">		
	

				<table width="200px" style="float:left; margin-left:100px;">
				<tr>
				<td style="float:left;text-align:left;width:200px;">
	<a href="newh.php?roll=<?php echo $sec;?>&kill=<?php echo $roll;?>">
&#9658; New hour</a></td></tr>

	
		
		<tr>
		
		
				<td style="text-align:left;width:200px;">	<a href="dean.php">
&#9658; HOME PAGE &nbsp;&nbsp;</a></a></td></tr>
</table>
	
</div>		
				
				
		

</div>
</body>
</html>