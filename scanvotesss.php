<?php
include 'dbcs.php';
	
?><?php
$query="select * from offs where roll='1'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>

<?php  $offs= $row[1];


?>

 

<?php } ?>


 <?php

$tyday=$offs;
if(empty($tyday)){

 
 }
 elseif($tyday>=1 &&  $tyday<=1){
 echo  $statusf="<meta http-equiv='refresh' content='0; url=voteoff.php?usr_name=$notes'>";
 exit;
 }
 elseif($tyday>1){

 }

 
 ?>
 
<html>

<head><script language="javascript" type="text/javascript">

window.open("http://localhost/hims/scanvotes.php", "mywindow","status=1,toolbar=0");

window.history.forward();


</script>

<style>
body {
  background: url('school1.jpg') no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
  margin: 0px;
}
.brad-img {
	border-radius: 50%;
	border: 4px solid #FFF;
	box-shadow: 0px 0px 4px 1px rgba(0,0,0,0.8);
	float: right;
	margin: 0px 15px;
	height: 130px;}
</style>

</head>
<body><h2>PLEASE CHOOSE YOUR CANDIDATE - </h2><hr/>	

	</table>
	</body>
</html>

