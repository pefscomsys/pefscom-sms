<?php 
include 'dbcs.php';
page_protect();
$x=$_GET['x'];
 $notes=$_SESSION['user_name'];


?>
<?php


$qry = mssql_query("select CAST(year as text) as total
from [cg2015].[dbo].[rushss] where roll='1'  "); 
$row = mssql_fetch_assoc($qry); 
 $dfs=$row['total'];
 
if($_POST)
{
$q=$_POST['search'];
$sql_res=mssql_query("select CAST(levels as nvarchar(400)) as levels,CAST(db1 as nvarchar(400)) as db1, CAST(fname as nvarchar(400)) as fname, 
CAST(matricule as text) as matricule, CAST(departmet as text) as departmet
 from  [cg2015].[dbo].[courses] where   fname like '%$q%' or matricule like '%$q%' order by levels  
 OFFSET 0 ROWS
                          FETCH NEXT  4 ROWS ONLY");
while($row=mssql_fetch_array($sql_res))
{$department=$row['departmet'];
$username=$row['fname'];$db1=$row['db1'];
$matricule=$row['matricule'];$year1=$row['levels'];
$b_username='<strong>'.$q.'</strong>';
$b_email='<strong>'.$q.'</strong>';$b_emails='<strong>'.$q.'</strong>';
$final_username = str_ireplace($q, $b_username, $username);
$final_email = str_ireplace($q, $b_email, $matricule);
$final_emails = str_ireplace($q, $b_emails, $deparment);
?> <a 
style='text-decoration:none;'  onclick="window.open('updates.php?mats=<?php echo $matricule;?>&rx=<?php echo $db1;?>&levels=<?php echo $year1;?>&ui=<?php echo $row["year1"];?>&dept=<?php echo $department;?>', '_blank', 'location=yes,height=570,width=800,scrollbars=yes,status=yes');">
<div class="show" align="left" style='text-transform:uppercase;'>
<span class="name"><?php echo $final_username; ?></span>
  <small> <cite title="Source Title" style='color:#ccc; font-size:13px;'><?php echo $db1;?> - <?php echo $year1;?></cite></small>
</div></a>
<?php
}
}
?>