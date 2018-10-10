<?php
include 'dbc.php';
page_protect();
 $notes=$_SESSION['user_name'];

$user_name=$notes;
$nki=$_GET['roll'];


?><?php





 $ip=@$_SERVER['REMOTE_ADDR'];
 
 ?><?php
 $notes=$_SESSION['user_name'];
$roll=$_GET["1"];
$query="select * from users where user_name='$notes'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>
<?php  $ids=$row['fax'];


?>
<?php } ?>







<?php
$roll=$_GET["1"];
$query="select * from matsub where roll='1'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>
<?php  $classs=$row['mgg'];


?><?php } ?>



<?php 


if(@$_SESSION['userlevel']==3){header("location: login.php?msg=Unauthorized access");}

$result = mysql_query( "SELECT  total2 FROM courses where departmet='$classs'" )
or die("SELECT Error: ".mysql_error());
$num_rows = mysql_num_rows($result);
$follow=teachers1;
$follows=coeficient
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="hidden/html; charset=utf-8" />
<title>SCHOOL MANAGEMENT SYSTEM</title>
<style>
 .RolloverMenu { width:250px; font-size:11pt; font-weight:bold; color:#000000; background:rgb(180,235,230);}
   .RolloverMenu ul{ list-style-type:none; margin:0; padding:0;}
   .RolloverMenu li{  margin:2px; hidden-align:center; }
  .RolloverMenu a{ display:block; margin:0; padding:4px; border:1pt solid black; hidden-decoration:none;}
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
.hiddenfield {
	font-size: 11px;
	color: #333333;
	background: #F7F7F7;
	border: 1px solid #CCCCCC;
	padding-left: 1px;
}a {
	color: #2D3954;
	font-size: 11px;
	hidden-decoration:none;
}
a:visited {
	color:red;
}
a:active {
	color:blue;
}
a:link{hidden-decoration:none;}
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


<div style="float:left; margin-left:460px;"><a href="first.php">GO BACK</a></div>




<?php 
$qry = mysql_query("select  tm as total
from page where cn='11'  and id='$ids'  "); 
$row = mysql_fetch_assoc($qry); 

 $rsy=$row['total']; ?>
<?php
$roll=$_GET["roll"];
$query="select * from courses where roll='$roll'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?><?php $mm=$row[0];?>
<br>
<br>
<br>
<br>
<br>
<form name="update" method="post" action="btech1all1.php?roll=<?php echo $nki;?>">

<?php
$roll=$_GET["roll"];
$query="select * from courses where roll='$roll'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>
<table style=" border:1px solid silver ; background:#fff; color:#000; font-size:12px;" cellpadding="10px" bgcolor="#fff"cellspacing="0px" align="center" border="0">
    <tr>
      <td colspan="4" width="650px" style="  baackground:#ccc;color:#000; font-size:20px;"></td>
    </tr><tr><td><input type="hidden" name="deptt" size="10" value="<?PHP ECHO $row['departmet'];?>"><td></tr>
    <tr> </td>  <input type="hidden" name="levels" size="10" value="<?php echo $row['levels'];?>">
	<input type="hidden" name="fname" size="10" value="<?php echo $row['fname'];?>">
	   <input type="hidden" name="cxx5" size="10" value="<?php echo $row['cxx5'];?>">
     <td></td>
      <td><input type="hidden" name="matricule" size="10" value="<?php echo $row[2];?>"   readonly="readonly"  ></td>
    </tr>
    <tr>
      <td>NAME :</td>
      <td><?PHP ECHO $row['fname'];?></td></tr>
	  
	  
    <tr>
      <td>Matri :</td>
      <td><?PHP ECHO $row['matricule'];?></td></tr>
	  
    <tr>
      <td>Departm :</td>
      <td><?PHP ECHO $row['departmet'];?></td></tr>
	  <tr><td></td><td></td><td>  <div style="margin-left:40px; margin-top:-140px;">
<img src="image/<?php echo $row['photo']; ?>" width="130" height="120" border="3px">

</div></td>
<tr>
        <td></td>
          <td><input type="submit" name="submit" size="10" value="Continue "    ></td>
    </tr>


  







<?php }
}
?>


 </tr>




  </table>
</form>
  


</div>

</div>

</div>
</body>
</html>
