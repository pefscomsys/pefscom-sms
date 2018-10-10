<?php 
include 'dbc.php';
page_protect();


?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />




<script src="jquery.min.js"></script>
<script src="jquery.preimage.js"></script>
<title>SCHOOL MANAGEMENT SYSTEM</title>
<script>

$(document).ready(function()
{
	$('.file').preimage();
});

</script>

<style>
.prev_container{
	overflow: auto;
	width: 300px;
	height: 135px;
}

.prev_thumb{
	margin: 10px;
	height: 100px;
}
<style>
 .RolloverMenu { width:250px; font-size:11pt; font-weight:bold; color:#000000; background:rgb(180,235,230);}
   .RolloverMenu ul{ list-style-type:none; margin:0; padding:0;}
   .RolloverMenu li{  margin:2px; text-align:center; }
  .RolloverMenu a{ display:block; margin:0; padding:4px; border:1pt solid black; text-decoration:none;}
  .RolloverMenu a:hover{ background:#ffcc00}
  .RolloverMenu a:link, .RolloverMenu a:active, .RolloverMenu a:visited{ color:#000000;}
   
#headers {
		
                float:left;
		padding:0px 0;
		width:100%; border-bottom: 20px solid #660000; color: #CCC;
		z-index:9999px;
		background:#000;
		margin-top:-10px;
	}
table{font-family:Verdana, Geneva, sans-serif;}
.textfield {
	font-size: 11px;
	color: #333333;
	background: #F7F7F7;
	border: 1px solid #CCCCCC;
	padding-left: 1px;
}a {
	color: #2D3954;
	font-size: 11px;
	text-decoration:none;
}
a:visited {
	color:red;
}
a:active {
	color:blue;
}
a:link{text-decoration:none;}
a:hover {
	color: #99CC00;
}


body{
		background:#fff;
		color:#000;}
#container{margin:auto;

width:800px; height:20800px;
background:#fff;
border-radius: 8px 8px 8px 8px;

-o-border-radius: 8px 8px 8px 8px;

-moz-border-radius: 8px 8px 8px 8px;

-khtml-border-radius: 8px 8px 8px 8px;

}.header{
margin:auto;

width:800px;
height:150px;
	
	
	}
.x{
margin:auto;

width:800px;
height:150px;
	
	
	}
#containers{margin:auto;
margin-top:-5px;
box-shadow:1px 1px 1px   #fff;
width:820px; height:21000px;
background-color:#660000; !important;-moz-linear-gradient(top, #E3E3E3 0%, #EDEDED 100%) );}

</style>
</head>

<body>



<DIV Style="font-family:verdana;color:#282828:margin-top:7px;margin-left:-57px;line-height:28px;font-size:13px; ">





<?php
$roll=$_GET["1"];
$query="select * from rushs where roll='1'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>
<b>
<?php  $db1=$row[1];


?><?php } ?>


<?php
if($_POST["do"]=="update")
{

$roll=$_POST["roll"];
$fname=$_POST["fname"];

$fname=$_POST["fname"];

$matricule=$_POST["matricule"];
$teacher=$_POST["teacher"];

$levels=$_POST["levels"];

$file = $_FILES ['pic'];
$name1 = $file ['name'];
$type = $file ['type'];
 $size = $file ['size'];
$tmppath = $file ['tmp_name']; 
				$qry = mysql_query("select empname as total
from employees where empname='$matricule'  "); 
$row = mysql_fetch_assoc($qry); 
 $saveppo4=$row['total']; 






	$content=file_get_contents($_FILES['pic']['tmp_name']);
	$content=mysql_escape_string($content);
	
	$imtype=$size;

	if ($imtype == 3){
		$ext="png"; 
	}elseif ($imtype == 2){
		$ext="jpeg";
	}elseif ($imtype == 1){
		$ext="gif";
	}
	
		

	
	$q2="update  courses set photo='',c140='1' where matricule='$matricule'";

	mysql_query($q2);

			$mxc11=$saveppo4;
if(empty($mxc11)){

 $statusfbio="insert into   employees set empname='$matricule',profile_pic='".$content."',ext='$db1'";}
elseif($mxc11>'' )
{

 $statusfbio="update employees set profile_pic='".$content."' where empname='$matricule'";
}
 



	
	$q="$statusfbio";

	mysql_query($q);







echo "<script>alert('Update Successful!'); </script>";

 echo "<meta http-equiv='refresh' content='0; url=pic1.php'>";
}

?>

<?php
$roll=$_GET["roll"];
$query="select * from courses where roll='$roll'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>

<form name="form" action="pic11.php" method="POST" enctype="multipart/form-data">
<DIV style="float:left;WIDTH:550PX; height:350px; background:#ffffcc; border:1px solid #000; margin-left:50px;">
<?php $statusfbio;?>
<DIV style="float:left;WIDTH:550PX; height:30px; background:#666600; border-bottom:1px solid #000; text-align:center; color:#fff; ">Change Name and Picture</div>
  <DIV style="float:left;WIDTH:150PX; height:50px;"> </div>     <DIV style="float:left;WIDTH:250PX; height:50px;"> </div>  
    <DIV style="float:left;WIDTH:150PX; height:50px;"> <?php 
				 echo $mxx=$row['matricule'];
				$qry = mysql_query("select id as total
from employees where empname='$mxx'  "); 
$row = mysql_fetch_assoc($qry); 
 $savep4=$row['total']; 
				 $mxx=$rec['empname'];?>
					<td width="200">
					<?php } ?>
					<?php
$roll=$_GET["roll"];
$query="select * from courses where roll='$roll'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>
					<img src="load_image.php?pic_id=<?php echo $savep4;?>" width="120px" height="85p">
					</td>
					<td><?php echo $rec['empname']; ?>
</div>
	
	<input type="hidden" name="matricule" size="20" value="<?php echo $row['matricule'];?>">
	
	<input type="hidden" name="roll" size="20" value="<?php echo $row['roll'];?>">
	
	<input type="hidden" name="teacher" size="20" value="<?php echo $row['teacher'];?>" style="background:#ccc;">
	
	<DIV style="float:left;WIDTH:150PX; height:50px;text-align:center;"> level</div>     
	<DIV style="float:left;WIDTH:250PX; height:50px;"><input type="text" name="levels" size="20" value="<?php echo $row['levels'];?>" style="background:#ccc;"> </div>  
    <DIV style="float:left;WIDTH:150PX; height:50px;">  </div>
	
		
	
	<DIV style="float:left;WIDTH:150PX; height:50px;text-align:center;"> Full Name</div>   
	<DIV style="float:left;WIDTH:250PX; height:50px;"><input type="text" name="fname" size="20" value="<?php echo $row['fname'];?>" style="background:#ccc;"> </div>  
    <DIV style="float:left;WIDTH:150PX; height:50px;">  </div>
	
	<DIV style="float:left;WIDTH:150PX; height:50px;text-align:center;"> <input type="hidden" name="roll" size="20" value="<?php echo $row[0];?>" style="background:#ccc;"></div>   
	<DIV style="float:left;WIDTH:250PX; height:50px;"> </div>  
    <DIV style="float:left;WIDTH:150PX; height:50px;">  </div>
	
	<DIV style="float:left;WIDTH:150PX; height:50px;text-align:center;"> <input type="hidden" name="sroll" size="20" value="<?php echo $row[0];?>" style="background:#ccc;"></div>   
	<DIV style="float:left;WIDTH:250PX; height:50px;"> </div>  
    <DIV style="float:left;WIDTH:150PX; height:50px;"> <div id="prev_file1"></div> </div>
	
	
	<DIV style="float:left;WIDTH:150PX; height:50px;text-align:center;">Photo </div>   
	<DIV style="float:left;WIDTH:250PX; height:50px;"><input class="file" id="file1" name="pic" type='file' multiple title="test #1" style="background:#ccc;"/>  </div>  
    <DIV style="float:left;WIDTH:150PX; height:50px;">  </div>
	<DIV style="float:left;WIDTH:150PX; height:50px;text-align:center;"><input type="hidden" name="do" value="update"></div>   
	<DIV style="float:left;WIDTH:250PX; height:50px;"><input type="submit" value="UPDATE">  </div>  
    <DIV style="float:left;WIDTH:150PX; height:50px;">  </div>
	
	</div>
	
	



<?php } ?>






<div style="float:left; width:200px;margin-top:0px;text-align:center; height:30px; "></div>

<div style="float:left; width:200px;margin-top:0px;text-align:center; height:30px; "></div>
<a href="formthree.php">
<div style="float:left; width:200px;margin-toP:-5px;text-align:center;  height:30px;"></div></a>



</div>

</DIV>


</div>

</body>
</html>
