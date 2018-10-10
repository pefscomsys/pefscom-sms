<?php

include 'dbcs.php';

page_protect();


 $notes=$_SESSION['user_name'];

$user_name=$notes;




 $ip=@$_SERVER['REMOTE_ADDR'];
 

?>
<?php
 $notes=$_SESSION['user_name'];
$roll=$_GET["1"];
$query="select * from users where full_name='$notes'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>
<?php  $ids=$row['fax'];


?>
<?php } ?><?php 
 $position=$_POST['applied'];




$qry = mysql_query("select  roll as total
from position where positions='$position' "); 
$row = mysql_fetch_assoc($qry);

 echo  $fake=$row['total'];  

?>
<html>
<head>
<title><?php echo $position;?></title>
<script src="jquery-latest.js"></script>
<script>
var auto_refresh = setInterval(
function ()
{
$('#load_tweetssss2').load('charmss.php?roll=<?php echo $fake;?>').fadeIn("slow");
}, 200); // refresh every 10000 milliseconds

</script>
</head>
<body style="background:blue;">
 
<div id="load_tweetssss2"> </div>
</body>
</html>
</body>
</html>
