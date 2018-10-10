<html>
<head>

  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>
<body>  
<?php
include 'dbcs.php';
?>
							

				
					
					
					
					
					
				
        <div class="table-responsive">

                
<form name="look" method="post" action="unisp.php"   >           <div  class="btn btn-success"  style="color:#FFFFFF;">
Management
</div>
              <table id="mytable" class="table table-bordred table-striped">
                   
                   <thead class="active">
                   
        
<tr>
<td ></td>
<td>
</td></tr>
<td >Select Department</td>
<td>
<select name="department"><?php
$rs=mssql_query("Select CAST(classs as text) as classs,
CAST(ids as text) as ids from [cg2015].[dbo].[classes]  ",$link);
	  while($row=mssql_fetch_array($rs))
{
if($row[1]==$fees)
{
	?>
<option value='<?php echo $row['classs'];?>' selected><?php echo $row['classs'];?>



 <b style='font-weight:normal;color:#ccc;'> (<?php $nm= $row["ids"];





	  
$qry = mssql_query("SELECT CAST(facultydesc as text) as totals
from [cg2015].[dbo].[faculty] where facultyid='$nm' "); 
$row = mssql_fetch_assoc($qry); 

 echo $idss=$row['totals'];

?> )</b>


</option>
<?php

}
else
{
	?>
<option value='<?php echo $row['classs'];?>' selected><?php echo $row['classs'];?>






 <b style='font-weight:normal;color:#ccc;'> (<?php $nm= $row["ids"];





	  
$qry = mssql_query("SELECT CAST(facultydesc as text) as totals
from [cg2015].[dbo].[faculty] where facultyid='$nm' "); 
$row = mssql_fetch_assoc($qry); 

 echo $idss=$row['totals'];

?> )</b>

</option>
<?php
}
}
?></select>

</td></tr></td></tr>
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