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
$roll=$_GET["1"];
$query="select * from school where roll='1'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
?>

<?php  $school=$row[1];
$school2=$row[2];
?>
<?php } ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Universal University System</title>
<link href="popupst.css" rel="stylesheet" type="text/css" />

</head>
 
<body>
 
<script src="jquery.min.js"></script>
   <script>
      // you can use just jquery for this
      $(document).ready(function(){
         $('#overlay-back').fadeIn(500,function(){
            $('#popup').show();
         });
 
         $(".close-image").on('click', function() {
            $('#popup').hide();
            $('#overlay-back').fadeOut(500);
         });
      });
   </script>

<div id="overlay-back"></div>
<div id="popup">
<div style="float:left; width:900px;margin-top:3px; height:500px;">

<div style="float:left; width:900px;height:40px;background:rgb(120,80,100);">
<div style="float:left; width:100px; height:80px;color:#fff;font-size:22px;">
<div style="float:left;margin-top:5px;margin-left:5px;">&#9658;</div>


 
 </div>

 <div style="float:left; width:620px;color:#1188aa; height:30px;font-size:28px;color:#fff;text-transform:uppercase;">Select Position to Start Voting</div>
 
 
 
 
 </div>

				
	<div style="float:left; width:350px;height:30px; margin-left:100px; margin-top:25px;">
				
		<a href="#">	
<div style="float:left; width:350px;height:30px; ">	
<div style="float:left; width:10px; height:30px; background:#989898;">	
							
				
				
	
</div>	
<div style="float:left; width:290px; height:30px; background:#FFBB40;">	

<div style="float:left;text-align:left; margin-left:0px; font-size:16px; width:320px; height:20px;margin-top:5px;">
							
		Voting Position	
				
	</div>
</div>
</div>	

</a>		


<div style="float:left; width:650px; height:200px; ">	


<?php
$applied=$_POST['applied'];
if($applied!=''){
$query2="update votenow   set  
year='$applied' where roll='1'


";




mysql_query ($query2) or die ('could not updated:'.mysql_error());
}
?>

 
<form name="look" method="post" action="posit.php">
<table style=" border:1px solid silver" cellpadding="5px" cellspacing="0px" align="center" border="0" width="450px">
<tr bgcolor="#660000" style="color:#FFFFFF;">
<td colspan="4" style=" color:#fff; font-size:20px">Position</td>
</tr>
<tr>
<td ></td>
<td>
</td></tr>
<td >Select position</td>
<td>
<select name="applied"style="background:#ccc;">
<?php
$rs=mysql_query("Select * from position order by  positions ASC",$link);
	  while($row=mysql_fetch_array($rs))
{
if($row[1]==$fees)
{
echo "<option value='$row[0]' selected>$row[1]</option>";
}
else
{
echo "<option value='$row[0]'>$row[1]</option>";
}
}
?></select>

</td></tr></td></tr>



<tr>
<td><input type="submit" value="validate Now" /></td>
</tr>


<tr bgcolor="#CCCCCC">
</tr>
</table>
</form>





</ul>
<br />
</DIV>

</div>

</body>
</html>
