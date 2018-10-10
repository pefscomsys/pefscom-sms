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
<?php echo $ids=$row['fax'];


?><?php } 




$qry = mysql_query("select tm as total
from page where id='$ids' and cn='36'  "); 
$row = mysql_fetch_assoc($qry); 
$saves=$row['total']; ?>
<form name="look" method="post" action="formbss.php">
<table style=" border:1px solid silver" cellpadding="5px" cellspacing="0px" align="center" border="0" style="font-size:13px;"width="750px">
<tr>
<td colspan="4" style=" color:#fff; font-size:20px; background:#ffcc00;">Search/ recherche </td>
</tr>
<tr>
<td>Enter Search Keyword /recherche mot-clé</td>
<td><input type="text" name="search" size="10"placeholder="use admission #" /></td>
<td><input type="submit" value="Search" /></td>
</tr>
<tr bgcolor="#666666" style="color:#fff;">
<td >Name's of student / Nom de étudiante</td>
<td>Department</td>
<td >Action</td>
<?php
$roll=$_GET["1"];
$query="select * from rushs where roll='1'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>
<?php $take=$row[1];


?>
	<?php } ?>
<?php
$search=$_POST["search"];
$flag=0;
$query="select * from courses where  fname like '%$search%'  and fname>'' order by levels ASC Limit 10 ";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 $flag=1;
		 echo "<tr ><td>",$row['fname'],"</td><td>&nbsp;",$row[3],"",$row['levels'],"</td><td><a href='$saves?roll=",$row['matricule'],"'>Print Slipsd</a></td></tr>";

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




<script type="text/javascript">
$(function () {
    $('#form').w2form({ 
        name   : 'form',
       
        url    : 'server/post',
        fields : [
            { field: 'first_name', type: 'text', required: true },
            { field: 'last_name',  type: 'text', required: true },
            { field: 'comments',   type: 'text'},
            { field: 'address1', type: 'text', required: true },
            { field: 'address2', type: 'text' },
            { field: 'city', type: 'text', required: true },
            { field: 'state', type: 'text', required: true },
            { field: 'zip', type: 'int', required: true },
            { field: 'short_bio', type: 'text' },
            { field: 'talk_name', type: 'text', required: true },
            { field: 'description', type: 'text' }
        ],
        actions: {
            reset: function () {
                this.clear();
            },
            save: function () {
                this.save();
            }
        }
    });
});
</script>


<div style="float:left; width:200px;margin-top:0px;text-align:center; height:30px; "></div>

<div style="float:left; width:200px;margin-top:0px;text-align:center; height:30px; "></div>
<a href="formthree.php">
<div style="float:left; width:200px;margin-toP:-5px;text-align:center;  height:30px;"></div></a>



</div>

</DIV>


</div>

</body>
</html>
