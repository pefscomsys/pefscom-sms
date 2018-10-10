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
 <div style="float:left; width:300px;color:#1188aa; height:30px;font-size:28px;color:#fff;text-transform:uppercase;">Add Event </div></div>
<?php
$startdate=$_POST["startdate"];
$endhour=$_POST["endhour"];
$event=$_POST["event"];
$enddate=$_POST["enddate"];
$type=$_POST["type"];$name=$_POST["name"];
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
$jeep="insert into event set semester='$name',event='$event'  ,endhour='$endhour',startdate='$startdate',type='$type'";

mysql_query ($jeep) or die ('could not updated:'.mysql_error());

echo "<script>alert('event Created Successfully!'); </script>";
 
 echo  $statusf="<meta http-equiv='refresh' content='0; url=dean.php'>";
}

?>
 
 <form method="POST" action="adde.php">
 <table cellspacing="2"
cellpadding="2" width="500px" style="margin-left:100px;margin-top:10px;">
<tr><td>Semester</td><td><select name="name"style="padding:3px 40px;" class="required"   id="select8">
               <?php
$mmm=date("m");
$rs=mysql_query("Select * from  semester ");
	  while($row=mysql_fetch_array($rs))
{
if($row[1]==$fees)
{
echo "<option value='$row[1]' selected>$row[4] $row[6]</option>";
}
else
{
echo "<option value='$row[1]'>$row[4] $row[6]</option>";
}
}
?></select>

</td></tr>
<tr><td>Type</td><td><select name="type"style="padding:3px 40px;" class="required"   id="select8">
               
                <option value="accademic">Academic</a></option>
                <option value="class">Class</option>
				
                <option value="youthday">Youth Day</option>
				
                <option value="Semester Break">Semester Break</option>
				
                <option value="Public Holiday">Public Holiday</option>
      </select>


</td></tr>


<tr><td>Event</td><td>
<input type="text" name="event" value="" size="28">

</td></tr>

<tr><td>Start date</td><td>
<input type="text" name="startdate" value="" size="14">

</td></tr>

<tr><td>Endhour</td><td>
<input type="text" name="endhour" value="" size="14">

</td></tr>



<tr><td></td><td>
<input type="submit" name="submit" value="Save" style="padding:10px 50px;">

</td></tr>


</table> 

</div>
</body>
</html>