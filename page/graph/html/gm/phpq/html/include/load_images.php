<?php
include 'dbc.php';
	
$q="select * from  emplopic where id=".$_GET['pic_id'];
$rec=mysql_fetch_array(mysql_query($q));
$data=$rec['profile_pic'];
header('Content-Length: '.strlen($data));
header("Content-type: image/".$rec['ext']);
echo $data;
?>