<?php
include 'dbcs.php';
?><html>
<head>

  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
<script type="text/javascript" src="jquery-1.8.0.min.js"></script>
</head>
<body>  
						
<a href="#" class="btn btn-danger btn-lg btn-block">Select Academic Year for Data Entry</a>
					<div class="list-group" style='margin-top:25px;'><?php
 $query="select CAST(db1 as nvarchar(400)) as levels from [cg2015].[dbo].[courses] group by db1 order by db1 DESC ";
$result=mssql_query($query);
		 while ($row = mssql_fetch_array($result)) {
?>

  <a href="nmstuals.php?db1=<?php echo $levels=$row['levels'];?>&dept=<?php echo $_GET["dept"];?>&id=<?php echo $_GET["id"];?>" class="list-group-item">
    <span class="badge"><?php echo $levels;?></span>
   <?php echo $levels=$row['levels'];?>
  </a>
		 <?php } ?>

			  
        </div>
	
	
	</div>
			  
        </div>
 
      <!-- /.modal-dialog --> 
   </div>