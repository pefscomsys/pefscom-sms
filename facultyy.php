<?php

include 'dbcs.php';
$ms=$_GET['roll'];
page_protect();


 $notes=$_SESSION['user_name'];

$user_name=$notes;
if(@$_SESSION['userlevel']!=19){header("location: login.php?error=Unauthorized access");}

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
<div id="popup">
<div style="float:left; width:650px;border-bottom:1px solid #000;margin-top:3px; height:40px;background:rgb(120,80,100);">

<div style="float:left; width:100px; height:80px;color:#fff;font-size:22px;"><div style="float:left;margin-top:5px;margin-left:5px;">&#9658;</div></div>
 <div style="float:left; width:300px;color:#1188aa; height:30px;font-size:28px;color:#fff;text-transform:uppercase;"><?php echo $pic;?></div></div>
<form action="facultys.php?roll=<?php echo $pic;?>" method="POST" >
 <table width="650" style="margin-left:50px;">
<tr><td>Faculty</td><td>
 
<select name='amp' id='inputFieldId' autofocus="autofocus" required='required'style="padding:3px;"   onchange='this.form.submit()'>
<?php
$mmm=date("m");
$rs=mysql_query("Select * from  faculty ");
	  while($row=mysql_fetch_array($rs))
{
if($row[1]==$fees)
{
echo "<option value='$row[1]' selected>$row[4]</option>";
}
else
{
echo "<option value='$row[1]'>$row[4]</option>";
}
}
?></select></td></tr></table>
 <script>
    if (!("autofocus" in document.createElement("input")))
            document.getElementById("inputFieldId").focus();
</script>
</FORM>
<div style="float:left; width:500px;border-bottom:1px solid #000;margin-top:15px; height:30px;margin-left:75px;background:rgb(120,80,100);">
			<div style="float:left; width:500px; height:25px;font-size:17px;color:#fff;text-transform:uppercase;">
			<div style="float:left; width:120px;text-align:center;margin-top:4px; height:25px;color:#fff;;">
				SN
			</div>
			<div style="float:left; width:20px;text-align:center;margin-top:4px; height:25px;color:#fff;text-transform:uppercase;">
		
			</div>
			
				<div style="float:left; width:300px;text-align:left;margin-top:4px; height:25px;color:#fff;">
			Name
			</div>
			
			
			
			
			
			</div>
			
			
			</div>
<div style="float:left; width:650px;margin-left:45PX;margin-top:10px; height:auto;font-size:14px;">
		
			
			
				
				
				
				
			
				
				
				
				
	
</div>


</div>
</body>
</html>