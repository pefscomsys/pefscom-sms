<?php
include 'dbc.php';
	$rolls=$_GET["rolls"];
?>
<html>

<head>
</head>
<body><h2>STUDENT ALBUMS</h2><hr/>	
	
	
	<div style="width:840px;margin:auto;"> 
	<div style="width:840px;height:1000px;"> 
	<?php
	$department=$_POST['department'];
	$levels=$_POST['levels'];
	$query="select * from courses where matricule='$rolls' ";
$result=mysql_query($query);
	
		 while ($row = mysql_fetch_array($result)) {
		 $flag=1;
		 
	?>
	
	
	<div style="float:left; width:400px; height:500px; MARGIN-LEFT:100PX;">
	
	<div style="float:left; width:400px; height:500px; margin-top:10px; ">
	
	<?php  $mxc=$row['matricule'];
	$name=$row['fname'];	$deptt=$row['departmet'];$level=$row['levels'];
	$code=$row['barcode'];
	?><div style="float:left; width:140px; height:135px; ">
	<?php 
				
				$qry = mysql_query("select id as total
from employees where empname='$mxc'  order by empname ASC "); 
$row = mysql_fetch_assoc($qry); 
 $savep4=$row['total']; 
				 $mxx=$rec['empname'];?>
					
					
					<img src="load_image.php?pic_id=<?php echo $savep4;?>" width="550px" class="brad-img"height="500px">
	</div>
	<div style="float:left; width:5000px;font-family:Times New Roman; height:20px;font-weight:normal; font-size:12px; ">

		</div></div><h3 style="float:left; width:500px;"><?php echo $name;?></b><br>(<?php echo $deptt;?>)
		<br>Level: <?php echo $level;?></a></h3>
	</table>
	</div><?php
	}
	?>	<B>
	</body>
</html>

