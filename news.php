<?php

include 'dbcs.php';
$ms=$_GET['roll'];
page_protect();


 $notes=$_SESSION['user_name'];

$user_name=$notes;
if(@$_SESSION['userlevel']!=19){header("location: login.php?error=Unauthorized access");}
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
 <div style="float:left; width:300px;color:#1188aa; height:30px;font-size:28px;color:#fff;text-transform:uppercase;">New <?php echo $roll;?> </div></div>
<?php
$y1=$_POST["y1"];
$y2=$_POST["y2"];
$startdate=$_POST["startdate"];
$enddate=$_POST["enddate"];
$name=$_POST["name"];
$db1="$y1/$y2";
$yx="$y1-$y2";


  $mxc11=$name;
if(empty($mxc11)){
 $statusfbio="";
 }
elseif($mxc11>=1 && $mxc11<=1 ){

$statusfbio="FIRST SEMESTER";
 }
 elseif($mxc11>=2 && $mxc11<=2 ){

$statusfbio="SECOND SEMESTER";
 }elseif($mxc11>=3 && $mxc11<=3){

$statusfbio="RESIT SEMESTER";
 }

if($name!=''){
$jeep="insert into semester set db1='$db1' , startdate='$startdate' ,enddate='$enddate',name='$name',y1='$yx',description='$statusfbio'";

mysql_query ($jeep) or die ('could not updated:'.mysql_error());

echo "<script>alert('$xx Created Successfully!'); </script>";
 
 echo  $statusf="<meta http-equiv='refresh' content='0; url=dean.php'>";
}

?>
 
 <form method="POST" action="news.php">
 <table cellspacing="2"
cellpadding="2" width="500px" style="margin-left:100px;margin-top:10px;">
<tr><td>Name</td><td><select name="name"style="padding:3px 40px;" class="required"   id="select8">
               
                <option value="1">First Semester</a></option>
                <option value="2">Second Semester</option>
				
                <option value="3">Resit Semester</option>
      </select>

</td></tr>
<tr><td>Start Date</td><td>
<input type="text" name="startdate" value="" size="28">

</td></tr>


<tr><td>Enddate</td><td>
<input type="text" name="enddate" value="" size="28">

</td></tr>

<tr><td>From1</td><td>
<input type="text" name="y1" value="" size="14">

</td></tr>

<tr><td>To</td><td>
<input type="text" name="y2" value="" size="14">

</td></tr>



<tr><td></td><td>
<input type="submit" name="submit" value="submit" style="padding:10px 50px;">

</td></tr>


</table> 

</div>
</body>
</html>