<?php

include 'dbcs.php';

page_protect();


 $notes=$_SESSION['user_name'];

$user_name=$notes;




 $ip=@$_SERVER['REMOTE_ADDR'];
 

?>
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
</head>
<body>
<form name="frmUser" method="post" action="">

<table border="0" cellpadding="10" cellspacing="1" width="900px">
<tr class="listheader">
<td></td>
<td>Matricule</td>
<td>Full Names</td>
<td>Contact</td>


<td>Grant </td>
</tr>
<tr class="listheader">
<td></td>
<td>Enter Search Keyword</td><td><input type="text" name="search" size="39"placeholder="name #"style="float:left; width:400px; height:28px;" /></td>
<td><input type="submit" value="Search"  style="float:left; width:190px; height:28px;"/></td>
<td></td>
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
$query="select * from courses where  fname like '%$search%'  and fname>'' and db1='$take' and c110='$ids'   order by fname ASC ";
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
<td><?php echo $mxx=$row["matricule"]; ?></td>
<td><?php echo $row["fname"]; ?></td>
<td><?php echo $row["departmet"]; ?></td>
<td>
<a href="choose.php?roll=<?php echo $row["matricule"]; ?>">Choose candidate</a></td>


</tr></a>
<?php
$i++;
}
?>
<tr class="listheader">
<td colspan="10">
</td>
</tr>
</table>
</form>
</div>
</body></html>