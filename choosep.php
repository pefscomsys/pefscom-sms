<?php
include 'dbcs.php';

$fname = $_POST ['fname'];


$acc = $_POST ['acc'];
$color=$_POST['colors'];
$matricule = $_POST ['matricule'];

$levels = $_POST ['levels'];
$department = $_POST ['department'];

$codes= $_POST ['codes'];
$applied = $_POST ['applied'];

$codess=$codes+1;

$qry = mysql_query("select  roll as total
from position where positions='$applied' "); 
$row = mysql_fetch_assoc($qry);

 $fake=$row['total'];  


if($applied!="")
{
$query1="insert into election set  
matricule='$matricule'
,
fname='$fname',department='$department',extra='$acc',colors='$color',
levels='$levels',position='$applied',codes='$codes',rolx='$fake'


";


$query3="update  chooses set  digits='$codess'

";

mysql_query ($query1) or die ('could not updated:'.mysql_error());



mysql_query ($query3) or die ('could not updated:'.mysql_error());

echo "<script>alert('Candidate Registered Successful!'); </script>";

 echo "<meta http-equiv='refresh' content='0; url=elecc.php'>";
}
?>

