<?php
include 'dbc.php';
require'function.php';
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="description" content="Php Code for View, Search, Edit and Delete Record" />
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Search Student  Record</title>
<style>
</style>
<link href="styles.css" rel="stylesheet" type="text/css">
<style>
input[type=submit]{
    cursor: pointer;
    font-size: 16px;
    height: 24px;
    padding: 3px;
}
input[type=text], input[type=password], input[type=submit] {
    -moz-border-radius: 2px;
    -ms-border-radius: 2px;
    -o-border-radius: 2px;
    -webkit-border-radius: 2px;
    border-radius: 2px;
	background-color: rgb(246, 254, 231);
}
.rotate {


-webkit-transform: rotate(-50deg);


-moz-transform: rotate(-50deg);


-ms-transform: rotate(-50deg);


-o-transform: rotate(-50deg);


filter: progid:DXImageTransform.Microsoft.BasicImage(rotation=3);

color:#989898;}
  
</style>
</head>
<body onload="window.print();" >
<div style="margin-left:100px; margin-top:50px; float:left; width:700px; height:480px;">


<div style=" float:left; width:150px; height:70px;">
<img src="logo.png" width="150px" height="100px">
</div>

<div style=" float:left; width:550px; height:30px;text-transform:uppercase;text-align:center; font-size:19px; font-family:
verdana; text-shadow:1px 1px 1px #000; background:#ccc;">

<?php
$roll=$_GET["1"];
$query="select * from school where roll='1'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>

<?php echo $row[1];?>
<?php
}
?><br>
<?php
$roll=$_GET["1"];
$query="select * from school where roll='1'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>


<?php $into=$row[2];



?>
<?php
}
?>

<?php
$roll=$_GET["1"];
$query="select * from school where roll='2'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>


<?php $outof=$row[1];


$outofin=$row[2];
?>
<?php
}
?>

<?php
$roll=$_GET["1"];
$query="select * from school where roll='3'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>


<?php $inside=$row[1];


$inside2=$row[2];
?>
<?php
}
?>

<?php
$roll=$_GET["roll"];
$query="select * from historic where roll='roll'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>


<?php $nast=$row['student_name'];
$classy=$row['class'];

?>
<?php
}
?>
<?php
$roll=$_GET["roll"];
$qry = mysql_query("select  SUM(amount_paid) as total
from historic  where student_name='$nast' and class='$classy'"); 
$row = mysql_fetch_assoc($qry); 
$timm=$row['total']; 

?>
</div>

<div style=" float:left; width:550px; height:69px;text-transform:uppercase;text-align:center; font-size:14px; font-family:
verdana;  color:#000;">


<div style=" float:left; width:450px; height:20px;">
<b><?php echo $outof;?></b>

</div>


<div style=" float:left; width:600px; height:20px;font-size:11px; text-align:left;">
<?php echo $inside;?>

</div>
<div style=" float:left; width:400px; height:20px;font-size:11px; text-align:center;">
<?php echo $inside2;?>

</div>





</div>
<div style=" float:left; width:700px;margin-top:17px;  height:34px; text-align:left;
font-size:18px; ">

<?php
$department=$_POST["department"];
$levels=$_POST["levels"];
$roll=$_GET["1"];
$query="select * from rushss where roll='1'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>
<b>
<?php  echo $take=$row[1];



?>
		 

<?php } ?>
</div>

<div style=" float:left; width:900px;  height:24px; text-align:left;
font-size:18px;text-align:center; ">
DEPARTMENTAL FEE RECORDS

<div style=" float:left; width:900px;  height:14px; text-align:left;font-weight:normal;
font-size:18px;text-align:left; ">
Department: &nbsp;<?php echo $department;?><br>
Levels: &nbsp;<?php echo $levels;?>
</div>
</div>




<div style=" float:left; width:900px;  height:auto; margin-top:45px; font-weight:normal;font-family:arail;">

<div style=" float:left; width:900px; background:#989898;  height:24px; text-align:left;font-weight:normal;
font-size:18px;text-align:left;border:1px solid #ccc; ">

<div style=" float:left; width:300px;  height:24px; text-align:left;font-weight:normal;
font-size:15px;text-align:left; border-right:1px solid #000; ">

Student Names
</div>


<div style=" float:left; width:200px;  height:24px; text-align:left;font-weight:normal;
font-size:18px;text-align:left; border-right:1px solid #000; ">

&nbsp;Matricule
</div>

<div style=" float:left; width:100px;  height:24px; text-align:left;font-weight:normal;
font-size:18px;text-align:left; border-right:1px solid #000; ">

&nbsp;&nbsp;Exp. Am
</div>

<div style=" float:left; width:100px;  height:24px; text-align:left;font-weight:normal;
font-size:18px;text-align:left; border-right:1px solid #000; ">

&nbsp;&nbsp;Am Paid
</div>


<div style=" float:left; width:100px;  height:24px; text-align:left;font-weight:normal;
font-size:18px;text-align:left;  ">

&nbsp;&nbsp;Balance
</div>





</div>

<?php
$search=$_POST["search"];
$flag=0;
$query="select * from historic where   oldb='$take' and amountpaid='$department' and class='$levels' order by student_name ASC ";
$result=mysql_query($query);
$i=1;
		 while ($row = mysql_fetch_array($result)) {
		 $flag=1;
		 ?>

<div style=" float:left; width:900px;  height:24px; text-align:left;font-weight:normal;
font-size:18px;text-align:left;border:1px solid #ccc; ">

<div style=" float:left; width:20px;  height:24px; text-align:left;font-weight:normal;
font-size:15px;text-align:left; border-right:1px solid #000; "><?php echo $i++;?></div>
<div style=" float:left; width:280px;  height:24px; text-align:left;font-weight:normal;
font-size:15px;text-align:left; border-right:1px solid #000; ">

<?php echo $row['student_name'];?>
</div>


<div style=" float:left; width:200px;  height:24px; text-align:left;font-weight:normal;
font-size:18px;text-align:left; border-right:1px solid #000; ">

&nbsp;<?php echo $row['matricule'];?>
</div>

<div style=" float:left; width:100px;  height:24px; text-align:left;font-weight:normal;
font-size:18px;text-align:left; border-right:1px solid #000; ">

&nbsp;&nbsp;<?php echo $row['expected_amount'];?>
</div>

<div style=" float:left; width:100px;  height:24px; text-align:left;font-weight:normal;
font-size:18px;text-align:left; border-right:1px solid #000; ">

&nbsp;&nbsp;<?php echo $row['amount_paid'];?>
</div>


<div style=" float:left; width:100px;  height:24px; text-align:left;font-weight:normal;
font-size:18px;text-align:left;  ">

&nbsp;&nbsp;<?php echo $row['balance'];?>
</div>





</div>

<?php } ?>






