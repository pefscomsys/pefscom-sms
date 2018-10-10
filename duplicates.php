<table width="300px">
			<?php
			include 'dbcs.php';
			$roll=$_GET["roll"];
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
FROM [cg2015].[dbo].[courses]

)

DELETE FROM CTE WHERE RN<>1
 ";
 







mssql_query ($packs) or die ('could not updated:');

$packss="			WITH CTE AS
(
SELECT *,ROW_NUMBER() OVER (PARTITION BY 
      [fname]

      ,[matricule]
      ,[department]
    ,[db1]  ,[sex]      
       ,[levels]   ,[c101]      
       ,[c102]      
     ORDER BY       [fname]

      ,[matricule],[department]
    ,[db1]  ,[sex]      
       ,[levels]   
	   ,[c101]      
       ,[c102]    
      ) AS RN
FROM [cg2015].[dbo].[resit]

)

DELETE FROM CTE WHERE RN<>1
 ";
 


mssql_query ($packss) or die ('could not updated:');
echo "<script>alert('Duplicate clear'); </script>";
 
 
 
 
 
 
 
 
 
 
 
 
 echo  $statusf="<meta http-equiv='refresh' content='0; url=tablesdsst.php?roll=$roll&&nm=$examcentercode'>";exit;

?>
			
			</table>
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 