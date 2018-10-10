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
 <div style="float:left; width:300px;color:#1188aa; height:30px;font-size:28px;color:#fff;text-transform:uppercase;">New <?php echo $roll;?> </div></div>
<?php
$id=$_POST["id"];
$type=$_POST["type"];
$fax=$_POST["fax"];$building=$_POST["building"];
$facultyid=$_POST["facultyid"];
$type=$_POST["type"];
$description=$_POST["description"];
$area=$_POST["area"];


if($description!=''){
$jeep="insert into room set type='$type',description='$description' , nos='$id' ,building='$building', facultyid='$facultyid',schoolid='$schoolid',area='$area'";

mysql_query ($jeep) or die ('could not updated:'.mysql_error());

echo "<script>alert('room Created Successfully!'); </script>";
 
 echo  $statusf="<meta http-equiv='refresh' content='0; url=dean.php'>";
}

?>
 
 <form method="POST" action="newff.php">
 <table cellspacing="2"
cellpadding="2" width="500px" style="margin-left:100px;margin-top:10px;">
<tr><td> N<sup>o</sup></td><td>
<input type="text" name="id" value="<?php


$qry = mysql_query("select * FROM  $roll  "); 
$num_rows=mysql_num_rows($qry);
  $richooTTTyss=$num_rows; 
  
  echo $rt=($richooTTTyss+1);
?>" size="5"readonly='readonly'>

</td></tr>


<tr><td>Select Faculty</td><td>			
<select name="facultyid" style="padding:5px;">
<?php
$rs=mysql_query("Select * from faculty  ",$link);
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
?></select>

</td></tr>



<tr><td>Select Type</td><td><select name="type"style="padding:3px 40px;" class="required"   id="select8">
               
                <option value="classroom">Classroom</a></option>
                <option value="teacher">Teacher</option>
                <option value="laboratory">Laboratory</option>
				
                <option value="bathroom">Bath Room</option>
				
                <option value="store">Store Room</option>
				
      </select>

</td></tr>
<tr><td>Building</td><td>
<input type="text" name="building" value="" size="18">

</td></tr>
<tr><td>Capacity</td><td>

<input type="text" name="description" value="" size="28">
</td></tr>

<tr><td>Area</td><td>
<input type="text" name="pap" value="" size="28">

</td></tr>
<tr><td></td><td>
<input type="submit" name="submit" value="Save" style="padding:10px 50px;">

</td></tr>


</table> 

</div>
</body>
</html>