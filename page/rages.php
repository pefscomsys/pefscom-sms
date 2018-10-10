<?php

include 'dbcs.php';
$ms=$_GET['roll'];
page_protect();


 $notes=$_SESSION['user_name'];

$user_name=$notes;
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
$id=$_POST["id"];
$phone=$_POST["phone"];
$fax=$_POST["fax"];$pap=$_POST["pap"];$conn=$_POST["conn"];
$fees=$_POST["fees"];$nn=$_POST["nn"];
$facultyid=$_POST["facultyid"];
$web=$_POST["web"];
$email=$_POST["email"];$xx=$_POST["xx"];
 $mxc11=$xx;
if(empty($mxc11)){
}elseif($mxc11>='department'&&  $mxc11<='department'){
$stats="department of";
$statss="department";$tyy="nn='$nn', fees='$fees',conn='$conn',facultyid='$id'";

$jeeps="insert into classes set class='$pap' , extra='16', abb='$pap', nn='$nn', conn='$conn',fees='$fees'
,mattsy='mattsy'";

mysql_query ($jeeps) or die ('could not updated:'.mysql_error());

}
elseif($mxc11>='faculty'&&  $mxc11<='facultyt'){
$stats="faculty of";
$statss="faculty";$tyy="facultyid='$id' ";
}


if($pap!=''){
$jeep="insert into $xx set phone='$phone' , $tyy,comment='$pap', fax='$fax', web='$web', email='$email',section='$statss',facultyno='$stats'";

mysql_query ($jeep) or die ('could not updated:'.mysql_error());

echo "<script>alert('$xx Created Successfully!'); </script>";
 
 echo  $statusf="<meta http-equiv='refresh' content='0; url=newf.php'>";
}

?>
 
 <form method="POST" action="newf.php">
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
<tr><td>Phone</td><td>
<input type="text" name="phone" value="" size="18">

</td></tr>
<tr><td>Comment</td><td>
<textarea cols="5" span="10"name="cment"style="width:150px;"></textarea>

</td></tr>


<tr><td>Fax</td><td>
<input type="text" name="fax" value="" size="28">

<input type="hidden" name="xx" value="<?php echo $roll;?>" size="28">
</td></tr>
<?php
  $mxc11=$roll;
if(empty($mxc11)){
}elseif($mxc11>='department'&&  $mxc11<='department'){
require'pinp.php';

}
elseif($mxc11<'department'){

}
?>










<tr><td>New <?php echo $roll;?></td><td>
<input type="text" name="pap" value="" size="28">

</td></tr>

<tr><td>E-mail </td><td>
<input type="text" name="email" value="" size="28">

</td></tr>

<tr><td>Web</td><td>
<input type="text" name="web" value="" size="28">

</td></tr>


<tr><td>Digit</td><td>
<input type="text" name="nn" value="" size="10" placeholder="department #">

</td></tr>

<tr><td>Matricule</td><td>
<input type="text" name="conn" value="" size="15"   placeholder="HIMS/05/">

</td></tr>


<tr><td>Fees</td><td>
<input type="text" name="fees" value="" size="10"  placeholder="Fees">

</td></tr>

<tr><td></td><td>
<input type="submit" name="submit" value="submit" style="padding:10px 50px;">

</td></tr>


</table> 

</div>
</body>
</html>