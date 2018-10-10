<?php 
include 'dbc.php';
page_protect();

 $notes=$_SESSION['user_name'];

if(@$_SESSION['userlevel']==3){header("location: login.php?msg=Unauthorized access");}

?>
<?php
$roll=$_GET["1"];
$query="select * from users where  full_name='$notes'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>
<?php echo $teacher=$row['fax'];


?><?php } ?>
<?php
$roll=$_GET["1"];
$query="select * from classes where  roll='5'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>
<?php  $off1in=$row['class'];


?><?php } ?>

<?php
$roll=$_GET["1"];
$query="select * from matsub where mgg='$off1in'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>
<?php  $off5=$row['mgg'];


?><?php } ?>

<?php
$roll=$_GET["1"];
$query="select * from subject2 where full_name='$notes'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>
<b>
<?php $class=$row['country'];




?>
		 

<?php } ?>

<?php
$query="select * from users where full_name='$notes'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>
<?php $follows=$row['website'];
$classs=$row['country'];



?>
		 

<?php } ?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>SCHOOL MANAGEMENT SYSTEM</title>
<style>
 .RolloverMenu { width:250px; font-size:11pt; font-weight:bold; color:#000000; background:rgb(180,235,230);}
   .RolloverMenu ul{ list-style-type:none; margin:0; padding:0;}
   .RolloverMenu li{  margin:2px; text-align:center; }
  .RolloverMenu a{ display:block; margin:0; padding:4px; border:1pt solid black; text-decoration:none;}
  .RolloverMenu a:hover{ background:#ffcc00}
  .RolloverMenu a:link, .RolloverMenu a:active, .RolloverMenu a:visited{ color:#000000;}
   
#headers {
		
                float:left;
		padding:0px 0;
		width:100%; border-bottom: 20px solid #660000; color: #CCC;
		z-index:9999px;
		background:#000;
		margin-top:-10px;
	}
table{font-family:Verdana, Geneva, sans-serif;
}
tr,td{border:1px ;}
.textfield {
	font-size: 11px;
	color: #333333;
	background: #F7F7F7;
	border: 1px solid #CCCCCC;
	padding-left: 1px;
}a {
	color: #2D3954;
	font-size: 11px;
	text-decoration:none;
}
a:visited {
	color:red;
}
a:active {
	color:blue;
}
a:link{text-decoration:none;}
a:hover {
	color: #99CC00;
}


body{
		background:#fff;}
#container{float:left;
margin-left:9px;

width:900px; height:auto;
background:#fff;
border-radius: 8px 8px 8px 8px;

-o-border-radius: 8px 8px 8px 8px;

-moz-border-radius: 8px 8px 8px 8px;

-khtml-border-radius: 8px 8px 8px 8px;

}.header{
margin:auto;

width:900px;
height:150px;
	
	
	}
.x{float:left;
width:900px;
height:150px;
	
	
	}
	
#cout{ margin:auto; width:900px;
}
#containers{float:left;
margin-top:10px;
box-shadow:1px 1px 1px   #fff;
width:920px; height:auto;
background-color:#660000; !important;-moz-linear-gradient(top, #E3E3E3 0%, #EDEDED 100%) );}

</style>
</head>

<body>

<div style="width:550px; float:left; height:7000px; margin-top:-60px;   border-LEFT: 2px solid #f4f4f4;">

<DIV Style="font-family:Stencil Std;color:rgba(230,164,64, 0.9);width:550px; height:30px;margin-top:7px;margin-left:3px; ">REPORT CARD</a>

<br><br><br><br><br><br>


<div style="float:left; margin-left:00px;"><br><br><a href="results.php">GO BACK</a></div>




<form name="look" method="post" action="getst85.php">
<table style=" border:1px solid silver" cellpadding="2px" cellspacing="0px" align="center" border="0" width="750px">
<tr>
<td colspan="4" style="background:#d6d4b4; color:#FFFFFF; font-size:17px">Search</td></tr>
<tr>
<td>Enter Search Keyword</td>
<td><input type="text" name="search" size="10" /></td>
<td><input type="submit" value="Search" /></td>
</tr>
<tr bgcolor="#666666" style="color:#FFFFFF">
<td >Nam of student </td>
<td>DEPT</td>
<td >Matricule</td>
<td>&nbsp;</td>
<?php
$roll=$_GET["1"];
$query="select * from rush where roll='1'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>
<?php $take=$row[1];
$table="courses";
?>
<?php } ?>
 

<?php
$search=$_POST["search"];
$flag=0;
$query="select * from $table  where  db1='$take' and  departmet='$off5' and levels='400'  and c139='1' ";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 $flag=1;
		 echo "<tr ><td font-color=#000>",$row[2],"</td><td>&nbsp;",$row[3],"</td><td><a href='",$row[1],"'>&nbsp;",$row[5],"
		  </a></td><td><a href='addtotal111cus.php?roll=",$row[0],"'>INDIVIDUAL</a>|<a href='checkst111cus.php?roll=",$row[0],"'>GROUP</a>
		  </td></tr>";

		 }
		 if($flag==0)
		 echo "<tr><td colspan='3' align='center' style='color:red'>Record not found</td></tr>";
		 		 
?>
<tr>
<td colspan="3">&nbsp;</td></tr>
<tr bgcolor="#CCCCCC">
</tr>
</table>
</form>



  


</div>

</div>

</div>
</body>
</html>
