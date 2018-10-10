<?php 
header('Content-type: image/jpeg;');
include 'dbcs.php';
$PersonID = $_GET['pic_id'];
// Specify database here
mssql_select_db('Company_Person');

// Build SQL statement here
$sqlText = 'SELECT Picture FROM Comany_Person WHERE PersonID= ' . $PersonID;
$sql = mssql_query($sqlText);
echo mssql_result($sql,0,"Picture");

?>