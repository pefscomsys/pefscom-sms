<?php


 $notes=$_SESSION['user_name'];



 
 ?><?php
 $notes=$_SESSION['user_name'];
$roll=$_GET["1"];
$query="select * from users where user_name='$notes'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>
<?php $ids=$row['fax'];


?>
<?php } ?>
 
 

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
<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>PEFSCOM SYSTEM</title>
    
    
    
    
        <link rel="stylesheet" href="css/style.css">
    
<link rel="stylesheet" type="text/css" href="styles.css" />
    
  </head>

  <body>


<form name="frmUser" method="post" action="">
<div style="width:900px;">
<table border="0" cellpadding="10" cellspacing="1" width="930">
<tr class="listheader" style=" height:35px;">
<td>Matricule</td>
<td>Full Names</td>
<td>Department</td><td>Motive</td>

</tr>
<tr class="listheader">
<td></td>
<td>Enter Search Keyword</td><td><input type="text" name="search" size="10"placeholder="name #"style="float:left; width:200px; height:38px;background:#fff;" /></td>
<td><input type="submit" value="Search"  style="float:left; width:190px; height:48px;"/></td>
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
echo $ids;
$search=$_POST["search"];
$flag=0;
$query="select * from courses where   fname like '%$search%'   order by fname DESC limit 30 ";
$result=mysql_query($query);
$i=0;
 while ($row = mysql_fetch_array($result)) {
if($i%2==0)
$classname="evenRow";
else
$classname="oddRow";
?>
<tr class="<?php if(isset($classname)) echo $classname;?>"style=" height:25px;">
<td style="float:left; height:25px;">
<?php echo $mats=$row["departmet"]; $status=$row["status"]; $fname=$row["fname"];$roll=$row["recid"];?></td>
<td>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $cats; ?></td>
<td  style="text-align:left;">&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $fname;?>

 </td>
<td >
<a href="printresp.php?roll=<?php echo $row["matricule"]; ?>">Print Receipts</a></td>
</tr></a>
<?php
$i++;
}
?>
<tr class="listheader">
<td colspan="7">
</td>
</tr>
</table>
</form>
  
	
    
  </body>
</html>
