<?php
include 'dbcs.php';
$dd=$_GET["dd"];
$ko=$_GET["ko"];
$grade=$_GET["grade"];
$id=$_GET["id"];$gpa=$_GET["gpa"];
$query="delete from [cg2015].[dbo].[subject] where db1='$dd' and subject='$ko' and extra='$grade' and ids='$id' and department='$gpa'
";
mssql_query($query);




 echo "<meta http-equiv='refresh' content='0; url=tablesdws.php'>";

?>