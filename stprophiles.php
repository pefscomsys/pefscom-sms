<?php

include 'dbcs.php';
$ms=$_GET['roll'];
page_protect();


 $notes=$_SESSION['user_name'];

$user_name=$notes;
if(@$_SESSION['userlevel']!=111){header("location: login.php?error=Unauthorized access");}


 
 ?><?php


$query="select * from users where full_name='$notes'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>
<?php  $ids=$row['fax'];


?>
<?php } ?>
 
<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>PEFSCOM SYSTEM</title>
    
    
    
    
        <link rel="stylesheet" href="css/style.css">

<link rel="stylesheet" href="font-awesome/css/font-awesome.css" type="text/css" media="screen">
    
    
<link rel="stylesheet" type="text/css" href="styles.css" />
    
  </head>

  <body>


	
		<div style="float:left;

  width: 100%; 
  height: 300px;margin-top:15px;">
	
<form name="frmUser" method="post" action="">

<table border="0" cellpadding="10px" cellspacing="4" width="930">
<tr class="listheader">

<td>Matricule</td>
<td>Full Names</td>
<td>Contact</td>


<td>Grant </td>
</tr>
<tr class="listheader">
<td>Enter Search Keyword</td><td><input type="text" name="search" size="39"placeholder="name #"style="float:left; width:400px; height:28px;" /></td>
<td><input type="submit" value="Search"  style="float:left; width:190px; height:28px;"/></td>
<td></td>
</tr>



<?php
$roll=$_GET["3"];
$query="select * from rush where roll='1'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
?>

<?php   $take=$row[1];
 
?>



<?php } ?>


<?php
$search=$_POST["search"];
$flag=0;
$query="select * from courses where  fname like '%$search%'  and fname>'' and db1='$take'  and c110='$ids'  order by fname ASC ";
$result=mysql_query($query);
$i=0;
 while ($row = mysql_fetch_array($result)) {
if($i%2==0)
$classname="evenRow";
else
$classname="oddRow";
?>
<tr class="<?php if(isset($classname)) echo $classname;?>">
<td><?php echo $mxx=$row["matricule"]; ?></td>
<td style="text-align:left;"><?php echo $row["fname"]; ?></td>
<td><?php echo $row["departmet"]; ?></td>
<td>

<a href="javascript:void(0);"
 NAME="My Window Name"  title=" My title here "
 onClick=window.open("prof.php?roll=<?php echo $row["matricule"]; ?>","Ratting","width=550,height=170,0,status=0,");>Student Profile</a>
</td>


</tr></a>
<?php
$i++;
}
?>
<tr class="listheader">
<td colspan="10">
</td>
</tr>
</table>
</form>
	
  </div>
	
	
	
	
	
	
	
	</div>
    <script src='jquery.min.js'></script>

        <script src="js/index.js"></script>

    
    
    