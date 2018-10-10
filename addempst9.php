<?php include 'dbcs.php';


page_protect();


 $notes=$_SESSION['user_name'];

$user_name=$notes;
$nki=$_GET['roll'];

?><?php


$query="select * from users where full_name='$notes'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>
<?php  $ids=$row['fax'];


?>
<?php } ?><?php
$mattt=$_POST['mattt'];
$ass=$_POST['ass'];
$cc=$_POST['department'];
$mxc11pop=$cc;

$levels=$_POST['levels'];


$qry = mysql_query("select  fess as total
from fees where id='$ids'  and classes='$cc' and levels='$levels' "); 
$row = mysql_fetch_assoc($qry); 
$statusfbiomxc111x=$row['total']; 


$qry = mysql_query("select  class as total
from classes where extra='$ids'  and nn='$cc' "); 
$row = mysql_fetch_assoc($qry); 
$statusfbiomxc11=$row['total'];

$qry = mysql_query("select  nn as total
from classes where extra='$ids'  and nn='$cc' "); 
$row = mysql_fetch_assoc($qry); 
$content=$row['total'];

$qry = mysql_query("select  mattsy as total
from classes where extra='$ids'  and nn='$cc' "); 
$row = mysql_fetch_assoc($qry); 
$countss=$row['total'];

$qry = mysql_query("select  digit as total
from classes where extra='$ids'  and nn='$cc' "); 
$row = mysql_fetch_assoc($qry); 
$mxc1188=$row['total'];





$qry = mysql_query("select  roll as total
from classes where extra='$ids'  and nn='$cc' "); 
$row = mysql_fetch_assoc($qry); 
$xp=$row['total'];
if(empty($mxc1188)){

$counts=$countss;

$pp="where roll='1'";
$r='1';
}
elseif($mxc1188>''){

$counts=$mxc1188;

$pp="where roll='$xp'";
$r='4';
}




$qry = mysql_query("select  conn as total
from fees where id='$ids'  and levels='$levels' "); 
$row = mysql_fetch_assoc($qry); 
$constant=$row['total'];



$query="select * from $counts $pp";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
?>

<?php  $mst=$row[$r];
$NJI= $mattt;



$mxc161=$mattt;
if(empty($mxc161)){

 $statusfbiomxc161="X";}
elseif($mxc161>='0' && $mxc161<='10'  ){

$statusfbiomxc161="000$mxc161"; 
}
elseif($mxc161>='10' && $mxc161<='99'  ){

$statusfbiomxc161="00$mxc161"; 
}
elseif($mxc161>='100' && $mxc161<='1000'  ){

$statusfbiomxc161="0$mxc161"; 
}

elseif($mxc161>='1000' && $mxc161<='9999'  ){

$statusfbiomxc161="$mxc161"; 
}


elseif($mxc161>='10000' && $mxc161<='99999'  ){

$statusfbiomxc161="$mxc1610"; 
}









?>
<?php } ?><?php
$query="select * from rushss where roll='1'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>
<b>
<?php  $db1=$row[1];
$constants=$row[4];

?><?php } ?>
<?php
$first_name=$_POST['first_name'];
$middle_name=$_POST['middle_name'];
$last_name=$_POST['last_name'];

$fname="$first_name $middle_name $last_name";


$mattt=$_POST['mattt'];
$month=$_POST['month'];
$part=$_POST['part'];
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
$cateory=$_POST['category'];

$levels=$_POST['levels'];


$contact1=$_POST['contact1'];
$contact2=$_POST['contact2'];


$guardian1=$_POST['gaurdain1'];
$guardian2=$_POST['guardian2'];

$hschool=$_POST['hschool'];
$hgrade=$_POST['hgrade'];

$oschool=$_POST['oschool'];
$ograde=$_POST['ograde'];

$motived=$_POST['motive'];


$father=$_POST['father'];
$mother=$_POST['mother'];

$matriculex=$_POST['matriculex'];

$matricule=$_POST['matricule'];

$barcode=$_POST['barcode'];
$mxc111=$statusfbiomxc11;





















$codes=$statusfbiomxc11;
$country=$_POST['country'];
$y=date('y');
$month=date('m');
$day=date('j');
$Y=date('Y');
$levels=$_POST['levels'];
$mxc11UI=$levels;
$statusfbiomxc11UI=$apps;




$mats="$constant$constants/$statusfbiomxc161";

$myyy1=$barcode;

$time=date("H:i:s");

$okp="barcode";

$mark="query6";
 $transp="historic";$transpp="courses";
$trans="REGISTRATION FEE"; 


$mxc111yx=$statusfbiomxc111y;
if(empty($mxc111yx)){

 $statusfbiomxc111yx=$statusfbiomxc111yy;
 }
elseif($mxc111yx>'' ){
 $statusfbiomxc111yx=$statusfbiomxc111y;
}


$qry = mysql_query("select fname as total
from courses where matricule='$myy1' and db1='$db1'  "); 
$row = mysql_fetch_assoc($qry); 
 $mmmf=$row['total']; 


$qry = mysql_query("select matricule as total
from courses where matricule='$myy1' and db1='$db1'  "); 
$row = mysql_fetch_assoc($qry); 
 $safety=$row['total']; 


$mxc111yxyh=$safety;
if(empty($mxc111yxyh)){

 echo $ssmxc111yxyh='';
 }
elseif($mxc111yxyh>'' ){
echo $ssmxc111yxyh="Sorry You Have Registered This Matricule ($myy1) Number The Student Name is $mmmf";
Exit;
}


if($fname!=''){


$rs_duplicate = mysql_query("select count(*) as total from admission  where fname='$fname' ") or die(mysql_error());
list($total) = mysql_fetch_row($rs_duplicate);

if ($total > 0)
{
$err[] = "ERROR - The student already exists. Please try again with different student .";
//header("Location: finances.php?msg=$err");
//exit();
}


if(empty($err)) {
$query2="insert into admission  set  
first_name='$first_name',
middle_name='$middle_name',
last_name='$last_name',

fname='$fname',

codes='$codes',id='$ids'";


mysql_query ($query2) or die ('could not updated:'.mysql_error());


 
}
}

 
echo "<script>alert('Record $Created Successfully!'); </script>";
 echo  $statusf="<meta http-equiv='refresh' content='0; url=addinto.php?usr_name=$fname'>";
  exit;
?>


	
	
	
	</div>
	
	</div>
	
	
	
	
	</body>
	</html>