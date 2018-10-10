<?php
include 'dbcs.php';
	
?>
<html>

<head>
<style>
body {
  background: url('background.jpg') no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
  margin: 0px;
}
.brad-img {
	border-radius: 50%;
	border: 4px solid #FFF;
	box-shadow: 0px 0px 4px 1px rgba(0,0,0,0.8);
	float: right;
	margin: 0px 15px;
	height: 130px;}
</style>

</head>
<body><h2>STUDENT ALBUMS</h2><hr/>	
	
	
	<div style="width:900px;margin:auto;"> <?php
$take=$_POST["db1"];

	$department=$_POST['department'];
	$levels=$_POST['levels'];
	 $query="select CAST(fname as text) as fname,


CAST(matricule as nvarchar(400)) as matricule


	from courses where  db1='$take' and departmet='$department' and levels='$levels'   order by matricule ASC";
$result=mssql_query($query);
	
		 while ($row = mssql_fetch_array($result)) {
		 $flag=1;
		 
	?>
	
	
	<div style="float:left; width:170px; height:190px;">
	
	<div style="float:left; width:170px; height:190px; margin-top:10px; ">
	
	<?php echo $mxc=$row['matricule'];
	$name=$row['fname'];
	$code=$row['barcode'];
	?><a href="viewall.php?rolls=<?php echo $mxc;?>">
	<div style="float:left; width:140px; height:135px; ">
	<?php 
				
				$qry = mssql_query("select CAST(pic_id as text) as total
from employees where matricule='$mxc'  order by empname ASC "); 
$row = mssql_fetch_assoc($qry); 
 echo $savep4=$row['total']; 
				 $mxx=$rec['empname'];?>
					
					
					<img src="load_image.php?pic_id=<?php echo $savep4;?>" width="140px" class="brad-img"height="105p">
	</div>
	<div style="float:left; width:160px;font-family:Times New Roman; height:20px;font-weight:normal; font-size:12px; ">
	<B><?php echo $name;?></b>(<?php echo $code;?>)
		</div></div>
	</div><?php
	}
	?></a>
	</table>
	</body>
</html>

