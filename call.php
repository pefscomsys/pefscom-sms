<?php include 'dbcs.php';?>
  
		
 <div style="float:left; width:400px;color:#1188aa; height:30px;font-size:28px;color:#fff;text-transform:uppercase;"><?php echo $pic;?></div>
 <table cellspacing="0" cellpadding="0" width="400">
  <tr> <td>Subject</td><td>Code</td><td>Action</td></tr>
 
 <?php


$query="select * from subject order by year1";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>
  <tr> <td><?php echo $row["db1"];?></td><td><?php echo $ms=$row["subject"];?></td><td>
  <a href="replicator/sync-mysql3.php?mats=<?php echo $mats;?>&rx=<?php echo $db1;?>&ui=<?php echo $row["year1"];?>&dept=<?php echo $department;?>"></a>
  
  </td></tr>
		 <?php } ?>