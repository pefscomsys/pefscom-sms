<?php
include 'dbc.php';
	
?>
<html>

<head>
<style>
body {
  background: url('background.jpg') no-repeat center center fixed; 
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
<body><h2>HIMSU CANDIDTE ALBUMS</h2><hr/>	
	
	<?php
	
	
	echo $gm=$_GET['roll'];





$query3="update election set  
stat='1' where matricule='$gm'


";



mysql_query ($query3) or die ('could not updated:'.mysql_error());

echo "<script>alert('Candidate Disqualified Successful!'); </script>";

 echo "<meta http-equiv='refresh' content='0; url=checkcan.php'>";

?>
	</table>
	</body>
</html>

