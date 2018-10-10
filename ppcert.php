<?php
 $notes=$_SESSION['user_name'];
$roll=$_GET["1"];
$query="select * from users where full_name='$notes'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>
<?php  $ids=$row['fax'];


?>
<?php } ?>
<html>
<head>
<title>Users List</title>
<link rel="stylesheet" type="text/css" href="styles.css" />
<script language="javascript" src="usersss.js" type="text/javascript"></script>
</head>
<body>
<form name="frmUser" method="post" action="">
<div style="width:400px;">
<table border="0" cellpadding="10" cellspacing="1" width="900" class="tblListForm">
<tr class="listheader">
<td></td>
<td>Matricule</td>
<td>Full Names</td>
<td>Department</td><td>Motive</td>

</tr>
<tr class="listheader">
<td></td>
<td>Enter Search Keyword</td><td><input type="text" name="search" size="39"placeholder="name #" /></td>
<td><input type="submit" value="Search" /></td>
<td>Motive</td>




</tr>



<?php
$roll=$_GET["3"];
$query="select * from rush where roll='1'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
?>

<?php   $take=$row[1];
 
?>



<?php } ?>


<?php
$search=$_POST["search"];
$flag=0;
$query="select * from certificate where  fname like '%$search%'  and fname>''   order by departmet ASC ";
$result=mysql_query($query);
$i=0;
 while ($row = mysql_fetch_array($result)) {
if($i%2==0)
$classname="evenRow";
else
$classname="oddRow";
?>
<tr class="<?php if(isset($classname)) echo $classname;?>">
<td><input type="checkbox" name="users[]" value="<?php echo $row["roll"]; ?>" ></td>
<td><?php echo $row["matricule"]; ?></td>
<td><?php echo $row["fname"]; ?></td>
<td><?php echo $row["departmet"]; ?></td>
<td><a href="graph/html/certificate.php?roll=<?php echo $row["matricule"]; ?>">Print Certiticate Now!</a>



</td>
</tr>
<?php
$i++;
}
?>
<tr class="listheader">
<td colspan="7"></td>
</tr>
</table>
</form>
</div>
</body></html>