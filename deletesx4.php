<?php
include 'dbcs.php';
$dd=$_GET["dd"];
$ko=$_GET["ko"];
$grade=$_GET["grade"];
$id=$_GET["id"];$gpa=$_GET["gpa"];
$query="delete from [cg2015].[dbo].[gradebb] where from1='$dd' and from2='$ko' and comments='$grade' and ids='$id' and gpa='$gpa'
";
mssql_query($query);




 echo "<meta http-equiv='refresh' content='0; url=tablesdw.php'>";

?>