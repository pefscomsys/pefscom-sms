<?php
include 'dbcs.php';
$dd=$_GET["dd"];
$ko=$_GET["ko"];
$query="delete from [cg2015].[dbo].[faculty] where facultydesc='$dd' and code='$ko'
";
mssql_query($query);




 echo "<meta http-equiv='refresh' content='0; url=tablesdg.php'>";

?>