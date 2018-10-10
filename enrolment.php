<?php
include 'dbc.php';

page_protect();

 $notes=$_SESSION['user_name'];


$query2="DELETE FROM gpas "



;




mysql_query ($query2) or die ('could not updated:'.mysql_error());



?>
<?php
$roll=$_GET["1"];
$query="select * from users where  full_name='$notes'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>
<?php  $ids=$row['fax'];


?><?php } ?><html>
<head>
<style>

	</style>

<script type="text/javascript">
var popupwin = null;
function popupWin(url,name) {
popupwin = window.open(url,this.html,'width=1400,height=550,align=center');
}
if (!document.all) {
document.captureEvents (Event.CLICK);
}
document.onclick = function() {
if (popupwin != null && !popupwin.closed) {
popupwin.focus();
}
}
</script>
</head>
<body>
<table>

<tr>
<td style="width:200px; padding:5px; border-top:1px solid #000;border-left:1px solid #000;">Department</td>
<td style="width:100px; padding:5px; border-top:1px solid #000;border-left:1px solid #000;">level</td>
<td style="width:100px; padding:5px; border-top:1px solid #000;border-left:1px solid #000;">Total Enrol</td>

<td style="width:40px; padding:5px; border-top:1px solid #000;border-left:1px solid #000;border-right:1px solid #000;">%</td>
</tr>


<?php
$roll=$_GET["1"];
$query="select * from rush where roll='1'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>
<?php $take=$row[1];
$table="courses";
?>
<?php } ?>
<?php
$query="select  * from levels  where levels>='200' and levels<='400' order by levels ASC";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 $levels=$row["levels"];
?>
		 <?php 


$query = mysql_query("select  * from  matsub where levels='1' order by mgg ASC"); 

		 while ($row = mysql_fetch_array($query)) {
		 
		 
		 
		 
		 
		 ?>
		<tr>
<td style="width:200px; padding:5px; border-top:1px solid #000;border-left:1px solid #000;"><?php echo $d=$row["mgg"];?></td>

<td style="width:100px; padding:5px; border-top:1px solid #000;border-left:1px solid #000;"><?php echo $l=$levels;?></td>
<td style="width:100px; padding:5px; border-top:1px solid #000;border-left:1px solid #000;"><?php 

$qry = mysql_query("select * FROM  courses where  departmet='$d'and levels='$l'  and db1='$take'  "); 
$num_rows=mysql_num_rows($qry);
  echo $richooTTTyss=$num_rows; 


  
  ?></td>

<td style="width:40px; padding:5px; border-top:1px solid #000;border-left:1px solid #000;border-right:1px solid #000;">%</td>
</tr> 
		 <?php } ?>	 
		 
		 </div>
		 
		 <?php } ?>