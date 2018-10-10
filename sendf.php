<?php
include 'dbcs.php';
$mm=$_GET["roll"];
?>

<?php
$roll=$_GET["roll"];
$query="select * from courses where roll='$mm'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>
<?php




$roll=$row["roll"];
$fname=$row["fname"];

$fname=$row["fname"];

$matricule=$row["matricule"];
$teacher=$row["teacher"];

$levels=$row["levels"];
 
				$qry = mysql_query("select empname as total
from employees where empname='$matricule'  "); 
$row = mysql_fetch_assoc($qry); 
 $saveppo4=$row['total']; 
?>
<?php } ?>
<?php




$name = date('YmdHis');
$newname="images/".$name.".jpg";
$jpg=".jpg";
$file = file_put_contents( $newname, file_get_contents('php://input') );

$files =file_get_contents('php://input');
	$content=mysql_escape_string($files);
if (!$file) {
	print "Error occured here";
	exit();
}
else
{
	

	
	$q2="update  courses set photo='',c140='1' where matricule='$matricule'";

	mysql_query($q2);

			$mxc11=$saveppo4;
if(empty($mxc11)){

 $statusfbio="insert into   employees set empname='$matricule',profile_pic='".$content."',ext='$db1'";}
elseif($mxc11>'' )
{

 $statusfbio="update employees set profile_pic='".$content."' where empname='$matricule'";
}
 



	
	$q="$statusfbio";

	mysql_query($q);


}

$url = 'http://' . $_SERVER['HTTP_HOST'] . dirname($_SERVER['REQUEST_URI']) . '/' . $newname;
print "$url\n";

?>
