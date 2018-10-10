<?php 
include 'dbc.php';
page_protect();
 $cssv=$_GET['roll'];
 $ips=@$_SERVER['REMOTE_ADDR'];

  $notes=$_SESSION['user_name'];



?>
 <?php
$query="select * from offs where roll='1'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>
<?php  echo $mkii=$row[1];?>

<?php } ?>
<?php


   $tydssdss=$mkii;

if(empty($tydssdss)){
 echo  $statusfs="<meta http-equiv='refresh' content='0; url=over.php?usr_name=$notes'>";
 exit;
 
 }
 elseif($tydssdss<''){
 echo  $statusfs="<meta http-equiv='refresh' content='0; url=over.php?usr_name=$notes'>";
 exit;
 }
 elseif($tydssdss>=''){

 }
 elseif($tydssdss>='1' && $tydssdss>='1'){
 echo  $statusfs="<meta http-equiv='refresh' content='0; url=over.php?usr_name=$notes'>";
 exit;
 }
 
  elseif($tydssdss>='2' && $tydssdss>='2'){

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

 
 ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<html lang="en">
<head>
<title><?php echo $school;?></title>
        <link rel="shortcut icon" href="pef.png"> 
		<style>

		
		</style><script language="javascript" type="text/javascript">

window.history.forward();


</script>
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

<form action="menuxshs.php" method="POST">
<table border=0 align=center bgcolor="#0000FF">
<tr><td style="color:#fff;">SCAN OR ENTER VOTERS CARD</td><td>
<input type='text' name='barcode' id='inputFieldId' autofocus="autofocus" />
<input type='hidden' name='css' value='<?php echo $cssv;?>'>
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