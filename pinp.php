

<tr><td>Select Faculty</td><td>			
<select name="facultyid" style="padding:5px;">
<?php
$rs=mysql_query("Select * from faculty  ",$link);
	  while($row=mysql_fetch_array($rs))
{
if($row[1]==$fees)
{
echo "<option value='$row[1]' selected>$row[4]</option>";
}
else
{
echo "<option value='$row[1]'>$row[4]</option>";
}
}
?></select>

</td></tr>
