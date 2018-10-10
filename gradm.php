
<?php
$roll=$_GET["1"];
$query="select * from users where  full_name='$notes'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>
<?php  $ids=$row['fax'];


?><?php } 
$nki=$_GET['roll'];


?>

<fieldset id="el02" style="width:480px; margin-top:45px;">
<legend >Select Your Class here</legend>
<input type="hidden" name="note" value="<?php echo $note;?>">

<form name="form1" action="gradmm.php?roll=<?php echo $fish;?>" method="post" enctype="multipart/form-data" >

     <table style="" cellpadding="3px"  cellspacing="0px" align="left" width="550px"style="text-transform:uppercase;">
	<tr>
      <td style="text-transform:uppercase;"style="background:#ccc;width:150px;">Department</td
	  ><td>

<select name="department"style="background:#ccc;">

<?php
$rs=mysql_query("Select * from matsub  order by  mgg",$link);
	  while($row=mysql_fetch_array($rs))
{
if($row[1]==$fees)
{
echo "<option value='$row[2]' selected>$row[2]</option>";
}
else
{
echo "<option value='$row[2]'>$row[2]</option>";
}
}
?></select></td></tr>



<tr>
      <td style="text-transform:uppercase;"style="background:#ccc;width:150px;">Year</td
	  ><td>

<select name="db1"style="background:#ccc;">
<?php
$rs=mysql_query("Select * from courses group by db1",$link);
	  while($row=mysql_fetch_array($rs))
{
if($row[1]==$fees)
{
echo "<option value='$row[7]' selected>$row[7]</option>";
}
else
{
echo "<option value='$row[7]'>$row[7]</option>";
}
}
?></select></td></tr>




	
 <tr>
      <td style="text-transform:uppercase;"style="background:#ccc;width:150px;">Levels/les niveaux</td
	  ><td>

<select name="levels"style="background:#ccc;">
<?php
$rs=mysql_query("Select * from levels where id='$ids' order by  levels",$link);
	  while($row=mysql_fetch_array($rs))
{
if($row[1]==$fees)
{
echo "<option value='$row[1]' selected>$row[1]</option>";
}
else
{
echo "<option value='$row[1]'>$row[1]</option>";
}
}
?></select></td></tr>
<tr> 
            <td>Semester</td><td colspan="2"><select name="semester"style="background:#ccc;" class="required"   id="select8">
               
                <option value="1">First Semester</a></option>
				
                <option value="2">Second Semester</a></option>
				
                <option value="3">Resit First Semester Courses</a></option>
				
                <option value="4">Resit Second Semester Courses</a></option>
				</select>
   <tr>
   <td>
	
<input name="button" type="submit" value="Submit Information" onClick="javascript:return validateMyForm();self.close();"/>
</td></tr>
 </table>
	
	</fieldset>
	