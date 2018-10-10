<?php

$qry = mssql_query("select  CAST(c110 as text) as school
from [cg2015].[dbo].[courses] where departmet='$department' and levels='$levels' "); 
$row = mssql_fetch_assoc($qry); 
 $id=$row['school'];

$qry = mssql_query("select  CAST(school as text) as school, CAST(town as text) as town, CAST(code as text) as code,
 CAST(contact as text) as contact, CAST(website as text) as website, CAST(email as text) as email
from [cg2015].[dbo].[school] where ids>'' "); 
$row = mssql_fetch_assoc($qry); 




 $school=$row['school'];  $code=$row['code']; $address=$row['town']; 
 $website=$row['website'];  $email=$row['email']; $contact=$row['contact']; 
 
 
 
 ?>
		<div style='float:left; width:950px; height:140px;border-bottom:2px double #000; '>
		
		<div style='float:left; width:400px; height:150px;'>
		
		<div style='float:left; width:400px; height:15px;text-align:center;'>
		Republic Of Cameroon
		</div>
			<div style='float:left; width:400px; height:15px;text-align:center;'>
		<div style='float:left; width:100px; height:5px; margin-left:155px;'>
		-------------
		</div>
		</div>
			<div style='float:left; width:400px; height:15px;text-align:center;'>
		South West Region
		</div>
			<div style='float:left; width:400px; height:15px;text-align:center;'>
		<div style='float:left; width:100px; height:5px; margin-left:155px;'>
		-------------
		</div>
		</div>
		
		<div style='float:left; width:400px; height:auto;text-align:center;'>
	<?php echo $school;?>
		</div>
		
		<div style='float:left; width:400px; height:15px;text-align:center;'>
	<?php echo $website;?>
		</div>
		<div style='float:left; width:400px; height:15px;text-align:center;'>
<?php echo $email;?>
		</div>
		
		</div>
		
		
		
		
		<div style='float:left; width:150px; height:150px;'>
		<div style='float:left; margin-top:-20px;'>
		<img src="logo.png">
		
		</div>	
		</div>	
		
		<div style='float:left; width:400px; height:150px;'>
		
			
		<div style='float:left; width:400px; height:15px;text-align:center;'>
		Republique Du Cameroun
		</div>
		
		<div style='float:left; width:400px; height:15px;text-align:center;'>
		<div style='float:left; width:100px; height:5px; margin-left:155px;'>
		-------------
		</div>
		</div>
		
		<div style='float:left; width:400px; height:15px;text-align:center;'>
		Region Du Sud-Ouest
		</div>
			<div style='float:left; width:400px; height:15px;'>
		<div style='float:left; width:100px; height:5px; margin-left:175px;'>
		-------------
		</div>
		</div>
		
		<div style='float:left; width:400px; height:auto;text-align:center;'>
	<?php echo $school;?>
		</div>
		
		<div style='float:left; width:400px; height:15px;text-align:center;'>
	<?php echo $website;?>
		</div>
		
		<div style='float:left; width:400px; height:15px;text-align:center;'>
<?php echo $email;?>
		</div>
		</div>
		
		
		</div>