<?php 
include 'dbc.php';
page_protect();
echo $department=$_GET["roll"];
 $notes=$_SESSION['user_name'];

if(@$_SESSION['userlevel']==3){header("location: login.php?msg=Unauthorized access");}

?>

<?php
$roll=$_GET["1"];
$query="select * from subject2 where full_name='$notes'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>
<b>
 <?php   $class=$row['country'];
$course=$row['tel'];
  $clasx=$row['website'];
?>
		 

<?php } ?>






-
<?php
$roll=$_GET["1"];
$query="select * from subject where extra='1' and department='$class'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>
<?php  $classy=$row['subject'];
?>
		 

<?php } ?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<html lang="en">
<head>
<title><?php echo $school;?></title>
        <link rel="shortcut icon" href="pef.png"> 
	<style>
	table,td,tr{font-family:arial; font-size:12px;}
	</style>
	
<script src="jquery.min.js"></script>
<script src="jquery.preimage.js"></script>

<script>

$(document).ready(function()
{
	$('.file').preimage();
});

</script>

<style>
.prev_container{
	overflow: auto;
	width: 300px;
	height: 200px;
}

.prev_thumb{
	margin: 10px;
	height: 200px;
}
</style>
	</head>
	<body>
	<div style="float:left; width:700px; height:400px;">
	
	
<script type="text/javascript" language="javascript"> 
<!--
// By Adam Khoury @ www.developphp.com
function validateMyForm ( ) { 
    var isValid = true;
    if ( document.form1.comments.value == "" ) { 
	    alert ( "please Enter  Comment subject name" ); 
	    isValid = false;
    } else if ( document.form1.comments.value.length < 1 ) { 
            alert ( "please Enter  comment name  must be Enter " ); 
            isValid = false;
    } 
	
	 else if ( document.form1.from1.value.length < 1 ) { 
            alert ( "please Enter   start range Code  must be Enter " ); 
            isValid = false;
    } 
	
	 else if ( document.form1.from2.value.length < 0 ) { 
            alert ( "please  end point  must be Enter " ); 
            isValid = false;
    } 
	
		else if ( document.status.value == "" ) { 
            alert ( "Please status must be enter " ); 
            isValid = false;
    } 
	
	
	
//-->
</script>
<script type="text/javascript">
function doCalc(form) {
  form.balance.value = parseInt(form.expected_amount.value) - parseInt(form.amount_paid.value);
}
</script>

		 

<?php
$roll=$_GET["1"];
$query="select * from matsub where roll='1'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>
<?php  $off1=$row['mgg'];


?><?php } ?>

<?php
$roll=$_GET["2"];
$query="select * from matsub where roll='2'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>
<?php  $off2=$row['mgg'];


?><?php } ?>


<?php
$roll=$_GET["3"];
$query="select * from matsub where roll='3'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>
<?php  $off3=$row['mgg'];


?><?php } ?>





<?php
$roll=$_GET["4"];
$query="select * from matsub where roll='4'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>
<?php  $off4=$row['mgg'];


?><?php } ?>



<?php
$roll=$_GET["5"];
$query="select * from matsub where roll='5'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>
<?php  $off5=$row['mgg'];


?><?php } ?>





<?php
$roll=$_GET["6"];
$query="select * from matsub where roll='6'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>
<?php  $off6=$row['mgg'];


?><?php } ?>



<?php
$roll=$_GET["7"];
$query="select * from matsub where roll='7'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>
<?php  $off7=$row['mgg'];


?><?php } ?>


<?php
$roll=$_GET["8"];
$query="select * from matsub where roll='8'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>
<?php  $off8=$row['mgg'];


?><?php } ?>
<div style="width:903px; float:left; height:25px; background:#11AAAA;  color:#fff;">SELECT NAMES TO SIT IN FOR RESIT SECTION</div>
<div style="width:903px; float:left; height:25px; background:#336600;  color:#fff;">

<div style="width:372px; float:left; height:25px; margin-left:10PX">
STUDENT NAMES</div>

<div style="width:80px; float:left; height:25px; margin-left:10PX">
</div>

<div style="width:100px; float:left; height:25px; margin-left:10PX">
Accept</div>
</div>


<?php
$roll=$_GET["1"];
$query="select * from rushss where roll='1'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>
<b>
<?php echo $take=$row[1];



?>
		 
<?php } ?>		 
<?php

	$levels=$_POST['levels'];
$department=$_POST["department"];
$table = "courses";
$i = 0;
if(!empty($_POST["submit"]))
{
 foreach($_POST["id"] as $roll)
 {

  
  mysql_query("update  courses SET
			   
               fname='".$_POST['fname'][$i]."',
 db1='".$_POST['db1'][$i]."',
 

 levels='".$_POST['levels'][$i]."',
               matricule='".$_POST['matricule'][$i]."',
               c140='".$_POST['cxx12'][$i]."' where roll='$roll'  
			 
               ");
  $i++;

               

  }
 }
 
	
 $sql = "SELECT * FROM courses where db1='$take' and departmet='$department'    and fname>'' order by c140 ASC";
$results = mysql_query($sql);
while($row = mysql_fetch_assoc($results))
{
 $id_array[] = $row["roll"];
 $fname_array[] = $row["fname"];
 $matricule_array[] = $row["matricule"];
 
 $levels_array[] = $row["levels"];
 $db1_array[] = $row["db1"];
 $departmet_array[] = $row["departmet"];
  $c140_array[] = $row["c140"];
 }
 echo "<form action='#' method='post'>
       ";
for($i=0;$i<count($id_array);$i++)
{
 $roll = $id_array[$i];
 $fname = $fname_array[$i];
 $matricule = $matricule_array[$i];
 
 $levels = $levels_array[$i];
 $db1 = $db1_array[$i];
 $departmet = $departmet_array[$i];
 $c140 = $c140_array[$i];
 echo "
        <div style='float:left; width:732; background:#f4f4f4; font-size:12px; color:#686868; font-family:arial; text-transform:UPPERCASE;  '>
        <div style='float:left;width:300px; '>
		
		<input type='hidden' name='id[]' value='$roll'></div>
        <div style='float:left;width:300px; '>
		$fname

 <input type='hidden' name='fname[]' value='$fname' readonly='readonly'>
 <input type='hidden' name='dbid[]' value='$take' readonly='readonly'>
 <input type='hidden' name='levels[]' value='$levels' readonly='readonly'>
 <input type='hidden' name='departmet[]' value='$departmet' readonly='readonly'>
		</div>
        <div style='float:left;width:200px; '>
$matricule <input type='hidden' name='matricule[]' value='$matricule' readonly='readonly'>
  </div>      <div style='float:left;width:80px; '>
 <input type='hidden' name='db1[]' value='$db1' size='8' style='BACKGROUND:#CCC;' maxlength='4'readonly='readonly'></div>
        <div style='float:left;width:70px; '>
 <input type='hidden' name='departmet[]' value='$departmet' size='8' style='BACKGROUND:#CCC;' maxlength='4' readonly='readonly'></div>
 
 
 
        <div style='float:left;width:70px; '>
 <input type='text' name='cxx12[]' value='$c140' size='8' style='BACKGROUND:#CCC;' maxlength='4'></div>
 
 
 
 
 
 
 
 
 </DIV>
 <div style='float:left; width:932; border-bottom:1px solid #ccc;'></div>";
 }
 
echo "<input type='submit' name='submit' value='Submit'></form>";
?>

