<?php include 'dbcs.php';


page_protect();


 $notes=$_SESSION['user_name'];

$user_name=$notes;
$nki=$_GET['roll'];

?><?php
$roll=$_GET["1"];
$query="select * from matt where  roll='1'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>
<?php $MMMM=$row[1];
$mmss=$MMMM+1;

?><?php } ?>



<?php
$roll=$_GET["1"];
$query="select * from rushss where  roll='1'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>
<?php $takes=$row[1];


?><?php } ?><?php


$query="select * from users where full_name='$notes'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>
<?php  $ids=$row['fax'];


?>
<?php } ?>
<?php
$first_name=$_POST['first_name'];
$middle_name=$_POST['middle_name'];
$last_name=$_POST['last_name'];

$fname="$first_name $middle_name $last_name";

$month=$_POST['month'];

$day=$_POST['day'];

$year=$_POST['year'];

$dbirth="$day/$month/$year";

$place=$_POST['place'];

$nation=$_POST['nation'];
$sex=$_POST['sex'];

$religion=$_POST['religion'];
$qualification=$_POST['qualification'];

$address=$_POST['address'];
$city=$_POST['city'];

$farm=$_POST['farm'];
$category=$_POST['category'];



$contact1=$_POST['contact1'];
$contact2=$_POST['contact2'];




$father=$_POST['father'];
$mother=$_POST['mother'];




$country=$_POST['country'];
$matricule=$mmss;

$barcode=$_POST['barcode'];
$y=date('y');
$constant="M1";
$constants="$y";
$mats="$ids$constant$constants$matricule";
$barcodes="$ids$constants$matricule";


















if($fname!=''){


$query2="insert into employer  set  
first_name='$first_name',
middle_name='$middle_name',
last_name='$last_name',

fname='$fname',

month='$month',

day='$day',

year='$year',

dbirth='$dbirth',
place='$place',
nation='$nation',
sex='$sex',

religion='$religion',
qualification='$qualification',

address='$address',
city='$city',

farm='$farm',
category='$category',



contact1='$contact1',
contact2='$contact2',




father='$father',
mother='$mother',




country='$country',
matricule='$mats',
barcode='$barcodes'";


$query4="insert into barcode  set  
barcode='$barcodes',db1='$takes',
matricule='$mats',extra='2'";


$query44="insert into hhours  set  
matricule='$mats'";


$query3="update matt  set  matt='$mmss' where roll='1'";


mysql_query ($query44) or die ('could not updated:'.mysql_error());
mysql_query ($query4) or die ('could not updated:'.mysql_error());
mysql_query ($query3) or die ('could not updated:'.mysql_error());
mysql_query ($query2) or die ('could not updated:'.mysql_error());

echo "<script>alert('Record Created Successfully!'); </script>";
 
 echo  $statusf="<meta http-equiv='refresh' content='0; url=sidebysideformx.php?usr_name=$mats'>";
 exit;


}
?>


	
	
	
	</div>
	
	</div>
	
	
	
	
	</body>
	</html>