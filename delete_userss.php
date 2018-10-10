<?php 
include 'dbc.php';
$rowCount = count($_POST["users"]);
for($i=0;$i<$rowCount;$i++) {
mysql_query("DELETE FROM courses WHERE roll='" . $_POST["users"][$i] . "'");
}
header("Location:changedeptt.php");
?>