<?php 
include 'dbcs.php';
page_protect();

 $notes=$_SESSION['user_name'];


?>
<?php
if($_POST)
{
$q=$_POST['search'];
$sql_res=mssql_query("select CAST(levels as nvarchar(400)) as levels,CAST(db1 as nvarchar(400)) as db1, CAST(fname as nvarchar(400)) as fname, CAST(matricule as nvarchar(400)) as matricule, CAST(departmet as text) as departmet
 from  [cg2015].[dbo].[courses] where  fname like '%$q%' or matricule like '%$q%' order by matricule  
 OFFSET 0 ROWS
                          FETCH NEXT  5 ROWS ONLY");
while($row=mssql_fetch_array($sql_res))
{$department=$row['departmet'];
$username=$row['fname'];$db1=$row['db1'];
$matricule=$row['matricule'];$year1=$row['levels'];
$b_username='<strong>'.$q.'</strong>';
$b_email='<strong>'.$q.'</strong>';$b_emails='<strong>'.$q.'</strong>';
$final_username = str_ireplace($q, $b_username, $username);
$final_email = str_ireplace($q, $b_email, $matricule);
$final_emails = str_ireplace($q, $b_emails, $deparment);
?> <a href="replicator/sync-mysql3.php?mats=<?php echo $matricule;?>&rx=<?php echo $db1;?>&ui=<?php echo $row["year1"];?>&dept=<?php echo $department;?>"
style='text-decoration:none;'>
<div class="show" align="left" style='text-transform:uppercase;'>
<span class="name"><?php echo $final_username; ?></span>&nbsp;<br/><?php echo $final_email; ?><br/>
					&nbsp;<br/><?php echo $final_emails; ?><br/>
</div></a>
<?php
}
}
?>
