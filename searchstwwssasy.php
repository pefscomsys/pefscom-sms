<?php 
include 'dbcs.php';
page_protect();
$x=$_GET['x'];
 $notes=$_SESSION['user_name'];


?>
<table  class="table table-bordred table-striped" style=" border:1px solid silver" cellpadding="5px" cellspacing="0px" align="center" border="0" >       
 <thead class="active">
<th>Student Name(s)</th>
<th>Matricule</th>
<th>Transaction Date</th>
<th>Amount Paid</th>
<th>Action</th>
     </thead>
    <tbody>
<?php

$qs=$_POST['search'];
if(empty($qs)){
	echo $q="enow";
}elseif($qs!=''){

$q=$qs;
$sql_res=mssql_query("select CAST(name as nvarchar(400)) as name,CAST(fname as text) as fname,

CAST(date as text) as date,CAST(db1 as text) as db1,CAST(folk as text) as folk


 from [cg2015].[dbo].[balancesheet] where  name like '%$q%' or fname like '%$q%'    or ids like '%$q%'   order by name
 OFFSET 0 ROWS
                          FETCH NEXT  20 ROWS ONLY");
while($row=mssql_fetch_array($sql_res))
{$name=$row['name'];
$username=$row['fname'];$fname=$row['fname'];
$folk=$row['folk'];$date=$row['date'];
$b_username='<strong>'.$q.'</strong>';
$b_email='<strong>'.$q.'</strong>';$b_emails='<strong>'.$q.'</strong>';
$final_username = str_ireplace($q, $b_username, $username);
$final_email = str_ireplace($q, $b_email, $matricule);
$final_emails = str_ireplace($q, $b_emails, $deparment);
$final_emails = str_ireplace($q, $b_emails, $year1);
?>



<tr>
<td><?php echo $name=$row['name'];?></td>
<td><?php echo $fname=$row['fname'];?></td>
<td><?php echo $date=$row['date'];?></td>
<td><?php  $folk=$row['folk'];
echo number_format($folk);

?></td>
 <td><a 
style='text-decoration:none;'  onclick="window.open('receiptsss.php?mats=<?php echo $fname;?>&date=<?php echo $date;?>&folk=<?php echo $folk;?>&name=<?php echo $name;?>&db1=<?php echo $row["db1"];?>&dept=<?php echo $department;?>', '_blank', 'location=yes,height=570,width=520,scrollbars=yes,status=yes');">
<p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" >Print</button></a></p></td>
 
</tr>




















<?php
}
}
?>