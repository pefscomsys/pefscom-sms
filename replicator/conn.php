<?php

$conn = @mysql_connect('localhost','sofocol','sofocol');
if (!$conn) {
	die('Could not connect: ' . mysql_error());
}
mysql_select_db('okdb', $conn);

?>