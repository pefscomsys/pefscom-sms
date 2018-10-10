<?php 
include 'dbcs.php';
page_protect();
$x=$_GET['x'];
 $notes=$_SESSION['user_name'];


?>
<table  class="table table-bordred table-striped" style=" border:1px solid silver" cellpadding="5px" cellspacing="0px" align="center" border="0" width="900px">       
<thead class="active">
                   
                   <th>Students </th>
                    <th>Levels </th>
                      <th>Matricule</th>
                      <th>Accademic Year</th>
                      
                      <th>Edit</th>
                   </thead>
    <tbody>
<?php

$qs=$_POST['search'];
if(empty($qs)){
	echo $q="enow";
}elseif($qs!=''){

$q=$qs;
$sql_res=mssql_query("select CAST(levels as nvarchar(400)) as levels,CAST(db1 as nvarchar(400)) as db1, CAST(fname as nvarchar(400)) as fname, 
CAST(matricule as text) as matricule, CAST(departmet as text) as departmet
 from  [cg2015].[dbo].[courses] where  fname like '%$q%' or matricule like '%$q%' order by levels  
 OFFSET 0 ROWS
                          FETCH NEXT  20 ROWS ONLY");
while($row=mssql_fetch_array($sql_res))
{$department=$row['departmet'];
$username=$row['fname'];$db1=$row['db1'];
$matricule=$row['matricule'];$year1=$row['levels'];
$b_username='<strong>'.$q.'</strong>';
$b_email='<strong>'.$q.'</strong>';$b_emails='<strong>'.$q.'</strong>';
$final_username = str_ireplace($q, $b_username, $username);
$final_email = str_ireplace($q, $b_email, $matricule);
$final_emails = str_ireplace($q, $b_emails, $deparment);
$final_emails = str_ireplace($q, $b_emails, $year1);
?>
 <tr>
    
    <td><?php echo $username;?></td>
    <td><?php echo $year1;?></td>    <td><?php echo $matricule;?></td>
	
	<td><?php echo $db1;?></td>
    <td><a href="depor.php?mat=<?php echo $matricule;?>&dept=<?php echo $department;?>&levels=<?php echo $year1;?>&db1=<?php echo $db1;?>"><p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span></button></a></p></td>
  
    </tr>
    













<?php
}
}
?>