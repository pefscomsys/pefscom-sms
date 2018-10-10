<?php

include 'dbcs.php';
$ms=$_GET['roll'];
page_protect();


 $notes=$_SESSION['user_name'];

$user_name=$notes;
if(@$_SESSION['userlevel']!=11){header("location: login.php?error=Unauthorized access");}

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

<div style="float:left; width:900px;height:40px;background:rgb(120,80,100);">
<div style="float:left; width:100px; height:80px;color:#fff;font-size:22px;">
<div style="float:left;margin-top:5px;margin-left:5px;">&#9658;</div>


 
 </div>

 <div style="float:left; width:620px;color:#1188aa; height:30px;font-size:28px;color:#fff;text-transform:uppercase;">Type a name and search to edit</div>
 
 
 
 
 </div>

				
	<div style="float:left; width:350px;height:30px; margin-left:100px; margin-top:25px;">
				
		<a href="#">	
<div style="float:left; width:350px;height:30px; ">	
<div style="float:left; width:10px; height:30px; background:#989898;">	
							
				
				
	
</div>	
<div style="float:left; width:290px; height:30px; background:#FFBB40;">	

<div style="float:left;text-align:left; margin-left:0px; font-size:16px; width:320px; height:20px;margin-top:5px;">
							
		Correction	
				
	</div>
</div>
</div>	

</a>		


<div style="float:left; width:650px; height:360px; ">	


<DIV Style="font-family:verdana;color:#282828:margin-top:7px;margin-left:-57px;line-height:28px;font-size:13px; ">





<?php
if($_POST["do"]=="update")
{

$roll=$_POST["roll"];
$fname=$_POST["fname"];

$fname=$_POST["fname"];

$teacher=$_POST["teacher"];

$levels=$_POST["levels"];


$file = $_FILES ['file'];
$name1 = $file ['name'];
$type = $file ['type'];
$size = $file ['size'];
$tmppath = $file ['tmp_name']; 

if($name1!="")
{
if(move_uploaded_file ($tmppath, 'note/'.$name1))//image is a folder in which you will save image
{


    

$query1="update exporttable set photo='$name1' where roll='11'";


mysql_query ($query1) or die ('could not updated:'.mysql_error());
echo "<script>alert('Update Successful!');</script>";

 echo  $statusf="<meta http-equiv='refresh' content='0; url=note/cas.php?usr_name=$user_name'>";
}
}
}

$qry = mysql_query("select * FROM  rresits  "); 
$num_rows=mysql_num_rows($qry);
  $richooTTTyss=$num_rows; 
echo $mm=($richooTTTyss+1);
?>



<form name="form" action="uploadex.php" method="POST" enctype="multipart/form-data">
<DIV style="float:left;WIDTH:550PX; height:50px; background:#ffffcc; border:1px solid #000; margin-left:50px;">

	<DIV style="float:left;WIDTH:150PX; height:50px;text-align:center;">File-import Exam - Marks </div>   
	<DIV style="float:left;WIDTH:250PX; height:50px;margin-top:10px;"><input class="file" id="file1" name="file" type='file' multiple title="test #1" style="background:#ccc;"/>  </div>  
    <DIV style="float:left;WIDTH:150PX; height:50px;">  </div>
	<DIV style="float:left;WIDTH:150PX; height:50px;text-align:center;"><input type="hidden" name="do" value="update"></div>   
	<DIV style="float:left;WIDTH:250PX; height:50px;"><input type="submit" value="UPLOAD EXCELL FILE">  </div>  
    <DIV style="float:left;WIDTH:150PX; height:50px;">  </div>
	
	</div>
	
	










</div>

</DIV>
  
		
</div>
	<a href="../dean.php">	
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
</body>
</html>