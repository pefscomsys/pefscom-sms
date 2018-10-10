<?php 
include 'dbc.php';
page_protect();
$rem=$_GET["roll"];
 $notes=$_SESSION['user_name'];

?>
<?php
$roll=$_GET["1"];
$query="select * from users where  full_name='$notes'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>
<?php  $ids=$row['fax'];


?><?php } ?>
<form name="look" method="post" action="dateoffs.php">
<table style=" border:1px solid silver" cellpadding="5px" cellspacing="0px" align="center" border="0" style="font-family:arial;font-size:13px;"width="750px">
<tr>
<td colspan="4" style=" color:#fff; font-size:20px; background:#ffcc00;">Search/ recherche</td>
</tr>
<tr>
<td>Select Student Name For Confirmation</td>
<td><input type="text" name="search" size="10"placeholder="use admission #" /></td>
<td><input type="submit" value="Search" /></td>
</tr>
<tr bgcolor="#666666" style="color:#fff;">
<td >Name's of studen</td>
<td>Department </td>
<td >Action</td>
<?php
$search=$_POST["search"];
$flag=0;
$query="select * from courses where  fname like '%$search%' and c110='$ids' and fname>'' order by levels ASC LIMIT 20";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 $flag=1;
		 echo "<tr ><td>",$row['fname'],"</td><td>&nbsp;&nbsp;&nbsp;",$row['matricule'],"</td><td><a href='pdf/examples/fille.php?rollsps=",$row[0],"' target='blank'>Create Confirmation</a></td></tr>";

		 }
		 if($flag==0)
		 echo "<tr><td colspan='3' align='center' style='color:red'>Record not found</td></tr>";
		 		 
?>
<tr>
<td colspan="3"></td></tr>
<tr bgcolor="#CCCCCC">
</tr>
</table>
</form>





<div style="float:left; width:200px;margin-top:0px;text-align:center; height:30px; "></div>

<div style="float:left; width:200px;margin-top:0px;text-align:center; height:30px; "></div>
<a href="formthree.php">
<div style="float:left; width:200px;margin-toP:-5px;text-align:center;  height:30px;"></div></a>



</div>

</DIV>


</div>

</body>
</html>
