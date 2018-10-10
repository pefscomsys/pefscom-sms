<?php
include 'dbc.php';
	
?>
	<h2>Saved Images</h2><hr/>	
	<table>
	<?php
		$q="select * from employees";
		$resultset=mysql_query($q);
		if(mysql_num_rows($resultset)==0){
			?>
				<tr>
					<td width="400">No Images Saved</td>
				</tr>
			<?php
		}
		while($rec=mysql_fetch_array($resultset)){
			?>
				<tr><?php 
				 $mxx=$rec['empname'];
				$qry = mysql_query("select id as total
from employees where empname='$mxx'  "); 
$row = mysql_fetch_assoc($qry); 
echo $savep4=$row['total']; 
				 $mxx=$rec['empname'];?>
					<td width="200">
					
					
					<img src="load_image.php?pic_id=<?php echo $savep4;?>" width="100px" height="85p">
					</td>
					<td><?php echo $rec['empname']; ?></td>
				</tr>
			<?php
		}
	
	?>
	</table>
	</body>
</html>

