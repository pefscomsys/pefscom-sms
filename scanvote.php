<?php 
include 'dbc.php';
page_protect();
echo $ips=@$_SERVER['REMOTE_ADDR'];

 echo $notes=$_SESSION['user_name'];



?>
<?php
$roll=$_GET["1"];
$query="select * from users where  user_name='$notes'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>
<?php  $ip=$row['users_ip'];
?>

<?php } ?>
<?php


 
$query1r="update remoteu set  
ip='$ips' where user_name='$notes'
";

mysql_query ($query1r) or die ('could not updated:'.mysql_error());




?>
<?php
$roll=$_GET["1"];
$query="select * from remoteu where  ip='$ip'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>
<?php echo $mms=$row['total'];
$tyds=$mms;

if(empty($tyds)){

 
 }
 elseif($tyds>""){
 echo  $statusf="<meta http-equiv='refresh' content='0; url=shutdown.php?usr_name=$user_name'>";
 exit;
 }


?><?php } ?>

 <?php
 $notes=$_SESSION['user_name'];
$roll=$_GET["1"];
$query="select * from fresh where username='$notes'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>
<?php  $starts=$row[1];?>

<?php   $enddate= $row[2];?>

<?php  $todays_date= $row[3];
$t9= $row[9];
$t10= $row[10];

?>

 

<?php } ?>

<?php
 
 $statusfbioff="update fresh set  enddate='$enddate'";
 
$query8cys="$statusfbioff";

mysql_query ($query8cys) or die ('ERROR');
?>
<?php

   $tydssd=$todays_date;

if(empty($tydssd)){

 
 }
 elseif($tydssd>=$enddate){
 echo  $statusf="<meta http-equiv='refresh' content='0; url=timeout.php?usr_name=$user_name'>";
 exit;
 }
 elseif($tydssd<$enddate){

 }

 
 ?>
<?php

 $mki=($t10-$t9);
   $tydssds=$mki;

if(empty($tydssds)){

 
 }
 elseif($tydssds<''){
 echo  $statusfs="<meta http-equiv='refresh' content='0; url=sorrys.php?usr_name=$notes'>";
 exit;
 }
 elseif($tydssds>=''){

 }

 
 ?><?php
$year=date('Y');
$d=date('j');
$m=date('m');
$timiegt=$d;
	 if(empty($timiegt)){
$timiegt="";
 $statusftimiedgt="";
}
elseif($timiegt<10){
 $statusftimiedgt="0";
}
elseif($timiegt>=10){
 $statusftimiedgt="";
}
 
$query1g="update fresh set  
ends='$year$m$statusftimiedgt$d'
";

mysql_query ($query1g) or die ('could not updated:'.mysql_error());
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<html lang="en">
<head>
<title><?php echo $school;?></title>
        <link rel="shortcut icon" href="pef.png"> 
		<style>

		
		</style>
	   <script language="JavaScript">
function disableEnterKey(e)
{
     var key;

     if(window.event)
          key = window.event.keyCode;     //IE
     else
          key = e.which;     //firefox

     if(key == 13)
          return false;
     else
          return true;
}
</script>
	</head>
	<body ONLOAD='setFocus()'>

<form action="menuxsh.php" method="POST">
<table border=0 align=center bgcolor="#0000FF">
<tr><td style="color:#fff;">SCAN OR ENTER VOTERS CARD</td><td>
<input type='text' name='barcode' id='inputFieldId' autofocus="autofocus" />

<script>
    if (!("autofocus" in document.createElement("input")))
            document.getElementById("inputFieldId").focus();
</script>
</td>
</tr>

</table>
</form>
<hr />
</body>
</html>

	</div>
	
	
	
	
	</body>
	</html>