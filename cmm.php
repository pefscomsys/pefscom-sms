<?php

include 'dbcs.php';
$ms=$_GET['roll'];
$dept=$_GET['dept'];
page_protect();

$uii=$_GET['uii'];

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
<div id="popup"><?php
$query="select * from rushs where roll='1'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>

<?php  $db1=$uii;
				
		$take=$uii;				
$qry = mysql_query("select * from subject where year1>='$ms' &&  year1<='$ms' and department>='$dept' and department<='$dept' and acc='$db1'  "); 
$num_rows=mysql_num_rows($qry);
 $xcx=$num_rows; 
	$mb=$xcx;		

if(empty($mb)){

$rt="select * from subject where year1>='$ms' &&  year1<='$ms' and department>='$dept' and department<='$dept' and acc=''
  ";

}
elseif($mb>""){
			
	$rt="select * from subject where year1>='$ms' &&  year1<='$ms' and department>='$dept' and department<='$dept' and acc='$db1'  ";

}	
				

?><?php } ?>
<div style="float:left; width:650px;border-bottom:1px solid #000;margin-top:3px; height:40px;background:rgb(120,80,100);">

<div style="float:left; width:100px; height:80px;color:#fff;font-size:22px;"><div style="float:left;margin-top:5px;margin-left:5px;">&#9658;</div></div>
 <div style="float:left; width:500px;color:#1188aa; height:30px;font-size:20px;color:#fff;">Level : <?php echo $ms;?>, Dept: <?php echo $dept;?>, <?php echo $take=$db1;?></div></div>

 
 		
 <table width="600px">
	
	<?php

$levels=$_GET["roll"];

$deptt=$_GET["dept"];
$query="$rt order by year2 ASC";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>					
						
	
	<tr>	<td><a href="load.php?levels=<?php echo $levels;?>&dept=<?php echo $dept;?>&sub=<?php echo $ss=$row["subject"];?>&sex=3">
	<?php echo $db1=$row["db1"];?></a></td>
						<td><a href="load.php?levels=<?php echo $levels;?>&dept=<?php echo $dept;?>&sub=<?php echo $ss=$row["subject"];?>&sex=3"><?php echo $year1=$row["year1"];?></td>
						<td><a href="load.php?levels=<?php echo $levels;?>&dept=<?php echo $dept;?>&sub=<?php echo $ss=$row["subject"];?>&sex=3"><?php echo $year2=$row["year2"];?></a></td>
					
						<td><a href="load.php?levels=<?php echo $levels;?>&dept=<?php echo $dept;?>&sub=<?php echo $ss=$row["subject"];?>&sex=3"><?php echo $ss=$row["subject"];?></td>
						
						</a>
						
						</tr>
						

<?php } 


?>				
					
					
				









							
					</table>
					



</div>
</body>
</html>