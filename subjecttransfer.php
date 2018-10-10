<?php 
include 'dbcs.php';

$query = "SELECT * FROM subjectx  where db1>'' group by roll ASC  	"; 
$result=mysql_query($query);$i=1;
		 while ($row = mysql_fetch_array($result)) {
		 
		 
		 
		 
		 
		 ?>
		 
		 <?php 
		 $db1=$row["db1"];
		 
		  $subject=$row["subject"];
		  
		  
		  
		  
		 $department=$row["department"];
		 
		  $year1=$row["year1"];
		  
		  
		  $year2=$row["year2"];
		  
		  $ids=$row["ids"];
		  
		  
		  
$query2="insert into  subject  set  
db1 	='$db1',subject='$subject',department='$department',
year1 ='$year1',year2='$year2',acc='2008/2009'


,
id='$ids'
 ";


mysql_query ($query2) or die ('could not updated:'.mysql_error());
		  
		  
		  
		  
		  
		  
		  
		  
		  
		 
		 ?>
		 
		 
		 <?php } ?>