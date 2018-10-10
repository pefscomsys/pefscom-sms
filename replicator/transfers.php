<?php

include 'dbcs.php';
$ms=$_GET['roll'];
page_protect();


 $notes=$_SESSION['user_name'];

$user_name=$notes;
if(@$_SESSION['userlevel']!=11){header("location: login.php?error=Unauthorized access");}




 $ip=@$_SERVER['REMOTE_ADDR'];
 
 ?><?php


$query="select * from users where full_name='$notes'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>
<?php  $ids=$row['fax'];

$levels=$row['user_level'];
?>
<?php } 
 $ip=@$_SERVER['REMOTE_ADDR'];
  $date=date("jmy");
    $time=date("H:i:s");
 $active="Active";
 
$qry = mysql_query("select  roll as total
from restriction where date='$date'  and pconcern='$notes'  and id='1'"); 
$row = mysql_fetch_assoc($qry); 
 $mxc11UI=$row['total'];
if(empty($mxc11UI)){

 $query1="insert into restriction set  
pconcern='$notes',date='$date',time='$time',status='$active',ipaddress='$ip',id='1'


";

mysql_query ($query1) or die ('could not updated:'.mysql_error());

 
 }
elseif($mxc11UI>'' &&  $mxc11UI=$ip){

 

}


$qry = mysql_query("select  ipaddress as total
from restriction where date='$date'  and pconcern='$notes'  and id='1'"); 
$row = mysql_fetch_assoc($qry); 
 $mxc11r=$row['total'];
$ip;




if(empty($mxc11r)){

echo"yes checked";

}
elseif($mxc11r>$ip){

 $mats="Unauthorise Access Please!";
 Echo "Sorry Sir you have connected before please logout from previous computer!";
 
 echo  $statusf="<meta http-equiv='refresh' content='0; url=login2.php?roll=$mats'>";
 exit;
}

elseif($mxc11r<$ip){

 $mats="Unauthorise Access Please!";
 Echo "Sorry Sir you have connected before please logout from previous computer!";
 
 echo  $statusf="<meta http-equiv='refresh' content='0; url=login2.php?roll=$mats'>";
 
 
 exit;
}
elseif($mxc11r>=$ip  &&  $mxc11r<=$ip ){


}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Universal University System</title>
<link href="../popups.css" rel="stylesheet" type="text/css" />

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
 <div style="float:left; width:500px;color:#1188aa; height:30px;font-size:28px;color:#fff;">HOME PAGE</div></div>

 
 		<?php
$query="select * from rush where roll='1'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>

<?php  $db1=$row["year"];


?><?php } ?>
 
			<table width="320px" cellpadding="4" style="margin-left:70px;">
			
						<tr><td></td><td></td></tr>	
		
				
<?php
$query="select * from levels";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
?>


				
<tr  style="border-bottom:1px solid #ccc;">
<td style="float:left;text-align:left;">&#9658;</td>
<td style="float:left;text-align:left;"><a href="ageallp.php?roll=<?php echo $row["levels"];?>&pic=<?php echo $row["levels"];?>">
<?php echo $row["levels"];?></a>	
					</td></tr>
							

				
					
					
					
					
					
					
<?php }
?>
					
					
					
						<tr><td></td><td></td></tr>	
				









							
					</table>
					



</div>
</body>
</html>