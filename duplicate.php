
			<div style="float:left; width:850px; height:auto;  <?php echo $ddm;?> margin-top:10px;">
			
			
			<div style="float:left; width:850px;  <?php echo $color;?> height:auto;">
			
			<br>	<br>	<br>
			
			
			<table width="300px">
			<?php
			include 'dbcs.php';
			
ini_set('max_execution_time', 3250000); //300 seconds = 5 minutes
			
			
 $examcentercode=$_POST["examcentercode"];
 
 $cats=$_POST["examcode"];
 $packs="			WITH CTE AS
(
SELECT *,ROW_NUMBER() OVER (PARTITION BY 
      [fname]

      ,[matricule]
    ,[db1]  ,[sex]      
       ,[levels]     
     ORDER BY       [fname]

      ,[matricule]
    ,[db1]  ,[sex]      
       ,[levels]    
      ) AS RN
FROM [gcesys].[dbo].[courses]

)

DELETE FROM CTE WHERE RN<>1
 ";
 

mssql_query ($packs) or die ('could not updated:');
 
 
 
 
 
 
 
 
 
 
 
 
 echo  $statusf="<meta http-equiv='refresh' content='0; url=true2.php?roll=$cats&&nm=$examcentercode'>";exit;

?>
			
			</div>
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 