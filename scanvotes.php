<?php

include 'dbcs.php';

page_protect();


 $notes=$_SESSION['user_name'];

$user_name=$notes;




 $ip=@$_SERVER['REMOTE_ADDR'];
 

$result = mysql_query("SELECT * FROM courses where fname>'' order by fname ASC");
?>
<?php
 $notes=$_SESSION['user_name'];
$roll=$_GET["1"];
$query="select * from users where full_name='$notes'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>
<?php  $ids=$row['fax'];


?>
<?php } ?>
<html>

<head><script language="javascript" type="text/javascript">

window.history.forward();


</script>

<style>
body {
  background: url('school1.jpg') no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
  margin: 0px;
}
.brad-img {
	border-radius: 50%;
	border: 4px solid #FFF;
	box-shadow: 0px 0px 4px 1px rgba(0,0,0,0.8);
	float: right;
	margin: 0px 15px;
	height: 130px;}
</style>

</head>
<body style="background:blue;"><h2 style="color:#fff;">PLEASE CHOOSE YOUR CANDIDATE - </h2><hr/>	
	
	
	<div style="width:1100px;float:left; margin-left:200px;"> <?php
$roll=$_GET["1"];
$query="select * from rushs where roll='1'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>
<?php   $take=$row[1];

?>
<?php } ?> <?php
$roll=$_GET["1"];
$query="select * from votenow where cn='1'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>
<?php   $pme=$row[1];

?>
<?php } ?>
	<?php
	
	$query="select * from election where  extra='$take'  and stat='' and rolx='$pme'  order by position DESC";
$result=mysql_query($query);
	
		 while ($row = mysql_fetch_array($result)) {
		 $flag=1;
		 
	?>
	<a href='csvote.php?roll=<?php echo $codes=$row['codes'];?>'>
	
	<div style="float:left; width:230px; height:280px;">
	
	<div style="float:left; width:270px;font-family:Times New Roman; height:40px;font-weight:normal; font-size:12px; ">
	
	<div style="float:left; BACKGROUND:#660000; color:#fff;width:200px;font-family:Times New Roman; text-align:center;font-size:20px;height:40px;">
	<?php echo $row['position'];?>
	</div></div>
	<div style="float:left; width:230px; height:250px; margin-top:10px; ">
	
	<?php  $mxc=$row['matricule'];$levels=$row['levels'];
	$name=$row['fname'];$deptt=$row['department'];
	$code=$row['barcode'];$colors=$row['colors'];
	?>
	<div style="float:left; width:200px; height:135px; background:<?php echo $colors;?>;color:#fff; ">
	
	<div style="float:left; margin-top:45px;margin-left:40px;font-size:37px;">
	<?php echo $codes;?>
	</div>
	
	</div>
	
	
	<div style="float:left; width:270px;font-family:Times New Roman; height:20px;font-weight:normal; font-size:12px; ">
	
	<div style="float:left; BACKGROUND:#CCC; width:200px;font-family:Times New Roman; height:20px;text-align:center;">
PARTY
	</div><div style="float:left;BACKGROUND:#fff; width:200px;font-family:Times New Roman; height:20px;">
	
	<B>Vote Me as Leader
	</b>
	</div>
	
	
	
	
	
	</div>	</div>	</div>
	
	<?php
	}
	?>
	</table>
	</body>
</html>

