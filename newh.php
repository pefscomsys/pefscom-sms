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
<div style="float:left; width:650px;border-bottom:1px solid #000;margin-top:3px; height:30px;background:rgb(120,80,100);">

<div style="float:left; width:100px; height:80px;color:#fff;font-size:22px;"><div style="float:left;margin-top:5px;margin-left:5px;">&#9658;</div></div>
 <div style="float:left; width:300px;color:#1188aa; height:30px;font-size:28px;color:#fff;text-transform:uppercase;">New Hour </div></div>
<?php
$id=$_POST["id"];
$type=$_POST["type"];
$fax=$_POST["fax"];$lecture=$_POST["lecture"];
$day=$_POST["day"];
$starthour=$_POST["starthour"];
$endhour=$_POST["endhour"];
$area=$_POST["area"];


if($starthour!=''){
$jeep="insert into hour set starthour='$starthour',endhour='$endhour' , day='$day' ,facultyid='$facultyid'";

mysql_query ($jeep) or die ('could not updated:'.mysql_error());

echo "<script>alert('hour Created Successfully!'); </script>";
 
 echo  $statusf="<meta http-equiv='refresh' content='0; url=dean.php'>";
}

?>
 
 <form method="POST" action="newh.php">
 <table cellspacing="2"
cellpadding="2" width="500px" style="margin-left:100px;margin-top:10px;">
<tr><td> N<sup>o</sup></td><td>
<input type="text" name="id" value="<?php


$qry = mysql_query("select * FROM  hour  "); 
$num_rows=mysql_num_rows($qry);
  $richooTTTyss=$num_rows; 
  
  echo $rt=($richooTTTyss+1);
?>" size="5"readonly='readonly'>

</td></tr>


<tr><td>Day</td><td>			
<select name="day" style="padding:5px;">
<?php
$rs=mysql_query("Select * from days  ",$link);
	  while($row=mysql_fetch_array($rs))
{
if($row[1]==$fees)
{
echo "<option value='$row[0]' selected>$row[1]</option>";
}
else
{
echo "<option value='$row[0]'>$row[1]</option>";
}
}
?></select>

</td></tr>



<tr><td>Lecture</td><td><select name="lecture"style="padding:3px 40px;" class="required"   id="select8">
               
                <option value="1">1</option>
                <option value="2">2</option>
				
                <option value="3">3</option>
                <option value="4">4</option>
				
                <option value="5">5</option>
                <option value="6">6</option>
				
				
                <option value="7">7</option>
                <option value="8">8</option>
				
                <option value="9">9</option>
                <option value="10">10</option>
				
				
      </select>

</td></tr>
<tr><td>Starthour</td><td>
<input type="text" name="starthour" value="" size="18">

</td></tr>
<tr><td>Endhour</td><td>

<input type="text" name="endhour" value="" size="28">
</td></tr>

<tr><td></td><td>
<input type="submit" name="submit" value="Save" style="padding:10px 50px;">

</td></tr>


</table> 

</div>
</body>
</html>