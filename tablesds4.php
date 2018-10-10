<html>
<head>

  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>
<body>  
<?php
include 'dbcs.php';
?>
							

				
					
					
					
					
					
				
        <div class="table-responsive">

                
<form name="look" method="post" action="unist.php"   >           <div  class="btn btn-success"  style="color:#FFFFFF;">
Hard Copy
</div>
              <table id="mytable" class="table table-bordred table-striped">
                   
                   <thead class="active">
                   
        
<tr>
<td ></td>
<td>
</td></tr>
<td >Select Department</td>
<td><select name="department"><?php
$rs=mssql_query("Select CAST(classs as nvarchar(400)) as classs,CAST(ids as text) as ids from [cg2015].[dbo].[classes] order by classs ",$link);
	  while($row=mssql_fetch_array($rs))
{
if($row[1]==$fees)
{
?>
<option value='<?php echo $row['classs']?>' selected><?php echo $sec=$row['classs'];$sec=$row['ids'];?> <B STYLE='font-weight:normal;color:#ccc;'>(<?php



 
$qry = mssql_query("select CAST(facultydesc  as text) as total
from [cg2015].[dbo].[faculty] where facultyid='$sec'   "); 
$row = mssql_fetch_assoc($qry); 
echo   $total31=$row['total']; 

  
  
  ?>)</b></option>
<?php
}
else
{
	?>
<option value='<?php echo $row['classs']?>' selected><?php echo $secs=$row['classs'];$sec=$row['ids']; ?> <B STYLE='font-weight:normal;color:#ccc;'>(<?php



 
$qry = mssql_query("select CAST(facultydesc  as text) as total
from [cg2015].[dbo].[faculty] where facultyid='$sec'   "); 
$row = mssql_fetch_assoc($qry); 
echo   $total31=$row['total']; 

  
  
  ?>)</b></option>
<?php

}
}
?></select>
</td><td></td></tr>


<tr>
<td >Select Acc Year</td>
<td>

<select name="db1">
<?php
$rs=mssql_query("Select CAST(db1 as text) as classs from [cg2015].[dbo].[courses]  group by db1 order by  db1 ASC",$link);
	  while($row=mssql_fetch_array($rs))
{
if($row[1]==$fees)
{
echo "<option value='$row[classs]' selected>$row[classs]</option>";
}
else
{
echo "<option value='$row[classs]'>$row[classs]</option>";
}
}
?></select>








</td></tr><tr>
<td>Select Level</td><td>
<select name="levels" >
<?php
$rs=mssql_query("Select CAST(levels as text) as classs from [cg2015].[dbo].[levels]  ",$link);
	  while($row=mssql_fetch_array($rs))
{
if($row[1]==$fees)
{
echo "<option value='$row[classs]' selected>$row[classs]</option>";
}
else
{
echo "<option value='$row[classs]'>$row[classs]</option>";
}
}
?></select>
</td></tr>





<tr>
<td>Select Semester</td><td>
<select name="semester" >
<?php
$rs=mssql_query("Select CAST(sems as text) as sems,CAST(db1 as text) as classs from [cg2015].[dbo].[semester]  ",$link);
	  while($row=mssql_fetch_array($rs))
{
if($row[1]==$fees)
{
echo "<option value='$row[sems]' selected>$row[classs]</option>";
}
else
{
echo "<option value='$row[sems]'>$row[classs]</option>";
}
}
?></select>
</td></tr>











<tr>
<td>
  <button type="submit" class="btn btn-active" style='width:150px;'>Process...</button></td>
</tr>


<tr bgcolor="#CCCCCC">
</tr>
</table>
</form>
        </div>
 
      <!-- /.modal-dialog --> 
   </div>