<?php include 'dbcs.php';


page_protect();


 $notes=$_SESSION['user_name'];

$user_name=$notes;
$nki=$_GET['roll'];

?><?php
$query="select * from rushs where roll='1'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>
<?php  $db1=$row[1];
 $constanty=$row[4];

?><?php }

?>
<?php
$first_name=$_POST['first_name'];
$middle_name=$_POST['middle_name'];
$last_name=$_POST['last_name'];

$fname="$first_name $middle_name $last_name";

$department=$_POST['department'];

$mattt=$_POST['mattt'];
$mats=$_POST['mattt'];
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





$mxcp=$levels;
if(empty($mxcp)){

 $motived="X";}
elseif($mxcp>='200' && $mxcp<='200'  ){
$motived="27500";
}

elseif($mxcp>='300' && $mxcp<='300'  ){
$motived="27500";
}

elseif($mxcp>='400' && $mxcp<='400'  ){
$motived="30000";$tyt="s";
}

$father=$_POST['father'];
$mother=$_POST['mother'];

$matriculex=$_POST['matriculex'];

$matricule=$_POST['matricule'];

$mxc111=$statusfbiomxc11;





















$codes=$statusfbiomxc11;
$country=$_POST['country'];
$barcode=$_POST['barcode'];
$y=date('y');
$month=date('m');
$day=date('j');
$Y=date('Y');
$levels=$_POST['levels'];
$mxc11UI=$levels;
$statusfbiomxc11UI=$apps;




$mxcph=$levels;
if(empty($mxcp)){

 $motived="X";}
elseif($mxcph>='200' && $mxcph<='200'  ){
$constantgs=$constanty;
}

elseif($mxcph>='300' && $mxcph<='300'  ){
$constantgs=$constanty-1;
}

elseif($mxcph>='400' && $mxcph<='400'  ){
$constantgs=$constanty;
}


$y=date("y");




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


$qry = mysql_query("select abb as total
from matsub where mgg='$department'  "); 
$row = mysql_fetch_assoc($qry); 
  $xx=$row['total']; 
  
  
  
  
  
  
  
  
  
$qry = mysql_query("select fname as total
from courses where matricule='$mats' and db1='$db1' and levels='$levels' "); 
$row = mysql_fetch_assoc($qry); 
  $mmmf=$row['total']; 

$qry = mysql_query("select fname as total
from courses where matricule='$mats' "); 
$row = mysql_fetch_assoc($qry); 
echo $safety=$row['total']; 
$mxcp=$mats;
if(empty($mxcp)){

 $motived="X";}
elseif($mxcp>="0" && $mxcp<="9"  ){
$myyy1="000$mats";
}

elseif($mxcp>='10' && $mxcp<='99'  ){
$myyy1="00$mats";
}

elseif($mxcp>='100' && $mxcp<='999'  ){
$myyy1="0$mats";
}

elseif($mxcp>='1000' && $mxcp<='10000'  ){
$myyy1=$mats;
}


elseif($mxcp>'10000'   ){
$myyy1=$mats;
}

$y=date("y");
$mats="$y$xx$myyy1";
$mxc111yxyh=$safety;
if(empty($mxc111yxyh)){

 echo $ssmxc111yxyh='';
 }
elseif($mxc111yxyh>'' ){
echo $ssmxc111yxyh="Sorry You Have Registered This Matricule ($mats) Number The Student Name is $mmmf";
Exit;
}


if($fname!=''){


$rs_duplicate = mysql_query("select count(*) as total from admission  where matricule='$mats' and fname='$fname' and extra='$levels' ") or die(mysql_error());
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
fname='$fname',
codes='$codes',
department='$department',
matricule='$mats',
extra='$levels',
status='$db1',

barcode='$myyy1',id='$ids'";




$query4="insert into barcode set  
barcode='$y$myyy1',
db1='$db1',
matricule='$mats', extra='1'

";

$query44="insert into courses set  
fname='$fname',
departmet='$department',
matricule='$mats',
db1='$db1',
levels='$levels',c110='16'

";


$query444="insert into historic set  
student_name='$fname',
amountpaid='$department',
matricule='$mats',
oldb='$db1',
class='$levels',
expected_amount='1005000'

";
$query555y="update matt set  matt='$mattt' where roll='1'";
mysql_query ($query2) or die ('could not admission:'.mysql_error());

mysql_query ($query4) or die ('could not barcode:'.mysql_error());
mysql_query ($query44) or die ('could not barcode:'.mysql_error());

mysql_query ($query444) or die ('could not barcode:'.mysql_error());

mysql_query ($query555y) or die ('could not barcode:'.mysql_error());


echo "<script>alert('Record $Created Successfully!'); </script>";
 echo  $statusf="<meta http-equiv='refresh' content='0; url=admit.php?usr_name=$fname&dates=$dates&mats=$mats&db1=$db1&fname=fname'>";
  exit;

 }
}
?>


	
	
	
	</div>
	
	</div>
	
	
	
	
	</body>
	</html>