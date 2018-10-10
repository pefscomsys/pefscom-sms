
<div style="float:left; width:500px;margin-top:15px;text-transform:uppercase; background:#ccc; border-top:1px solid #000;height:30px;margin-left:75px;">
				
<?php

$query="select * from faculty where id='$roll' ";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
?>
<?PHP echo $mm=$row["facultyid"];?>-<?PHP echo $mms=$row["facultyno"];?>

<?PHP 
$qry = mysql_query("select comment as total
from faculty where facultyid='$mm'  "); 
$row = mysql_fetch_assoc($qry); 
echo $save=$row['total']; 
 ?>
<?php } ?>

</div>