<?php

include 'dbcs.php';
page_protect();


$notes=$_SESSION['user_name'];

$user_name=$notes;




 ?><?php
 $notes=$_SESSION['user_name'];
$roll=$_GET["1"];
$query="select * from users where full_name='$notes'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>
<?php $ids=$row['fax'];
echo $levels=$row['user_level'];

?>
<?php } ?>
 <?php
$result = mysql_query("SELECT * FROM intenship where id='$ids'order by cname ASC");
?>
<html>
<head>
<title>Users List</title>
<link rel="stylesheet" type="text/css" href="styles.css" />
<script language="javascript" src="users.js" type="text/javascript"></script>
</head>
<body>
<h3> List of student With intenship Hand Book</h3>
<form name="frmUser" method="post" action="">
<div style="width:500px;">
<table border="0" cellpadding="10" cellspacing="1" width="500" class="tblListForm">
<tr class="listheader">
<td></td>
<td>Matricule</td><td>Student name</td>
<td>Department</td>
<td>Motive</td>
</tr>
<?php
$i=0;
while($row = mysql_fetch_array($result)) {
if($i%2==0)
$classname="evenRow";
else
$classname="oddRow";
?>
<tr class="<?php if(isset($classname)) echo $classname;?>">
<td><input type="checkbox" name="users[]" value="<?php echo $row["roll"]; ?>" ></td>
<td><?php echo $mk=$row["cname"];$books=$row['valid']; ?>



</td>
<td><?php 
 
$qry = mysql_query("select fname as total
from courses where matricule='$mk'  "); 
$row = mysql_fetch_assoc($qry);
 echo $values=$row['total']; 


 ?></td>
<td><?php 
 
$qry = mysql_query("select departmet as total
from courses where matricule='$mk'  "); 
$row = mysql_fetch_assoc($qry);
 echo $values=$row['total']; ?></td>
<td><?php echo $books; ?></td>
</tr>
<?php
$i++;
}
?></td>
<tr class="listheader">
<td colspan="5"><input type="button" name="update" value="Update" onClick="setUpdateAction();" /> <input type="button" name="delete" value="Delete"  onClick="setDeleteAction();" /></td>
</tr>
</table>
</form>
</div>
</body></html>