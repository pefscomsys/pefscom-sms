<?php
include 'dbcs.php';

page_protect();


 $notes=$_SESSION['user_name'];

$levels=$_GET["levels"];
$db1=$_GET["db1"];
$roll=$_GET["1"];
$query="select * from users where  full_name='$notes'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>
<?php  $ids=$row['fax'];


?><?php } ?>
<?php
$rollsx=$_GET["roll"];
$query="select * from rushs where roll='1'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>
<?php $take=$row[1];


?>
	<?php } ?>
	
	<div style="float:left; width:700px; height:auto;
">

Build Result Slip for <?php echo $rollsx;?>
</div>
	
	
	
	
	
	
	
	
	
	
	
	
	
<div style="float:left; width:700px; height:auto;
">

<div style="float:left; width:100px; height:25px;background:#336666;color:#fff;
">

Course Code

</div>

<div style="float:left; width:100px; height:25px;background:#336666;color:#fff;">


Course Ca

</div><div style="float:left; width:100px; height:25px;background:#336666;color:#fff;">


Course Exam

</div>
<div style="float:left; width:100px; height:25px;background:#336666;color:#fff;">


Semester!

</div>
</div>
<?PHP
$table = "marks";
$i = 0;
if(!empty($_POST["submit"]))
{
 foreach($_POST["id"] as $roll)
 {

  
  
  mysql_query("insert into resit SET
              
               matricule='".$_POST['matricule'][$i]."',
               
               departmet='".$_POST['departmet'][$i]."',
               fname='".$_POST['fname'][$i]."',
                 levels='".$_POST['levels'][$i]."',
				    db1='".$_POST['db1'][$i]."',
               sex='".$_POST['sex'][$i]."',
               c101='".$_POST['c101'][$i]."',
			     c110='".$_POST['c110'][$i]."',
               c102='".$_POST['c102'][$i]."'
			   
               ");
  $i++;

               

}
 

echo "<script>alert('Data Base Updated Successful!'); window.location.href('marks.php');</script>";

 echo $statusftydate="<meta http-equiv='refresh' content='0; url=st3build.php'>";
 }
?>		
<form method="POST" action="buildst3.php?roll<?php echo $rollsx;?>">

<div style="float:left; width:700px; height:28px;margin-top:2px;
">
<?php 
$qry = mysql_query("select levels as total
from courses where matricule='$rollsx'   "); 
$row = mysql_fetch_assoc($qry); 
	 $saves7y=$row['total']; ?>
<input type="hidden" name="id[]" value="1" size="8">
<input type="hidden" name="db1[]" value="<?php echo $db1; ?>" size="8">

<input type="hidden" name="matricule[]" value="<?php echo $rollsx;?>" size="8">
<div style="float:left; width:100px; height:25px;
">
<input type="text" name="fname[]" value="" size="8">

</div>

<div style="float:left; width:100px; height:25px;
">
<input type="text" name="c101[]" value="" size="8">

</div>
<div style="float:left; width:100px; height:25px;
">
<input type="text" name="c102[]" value="" size="8">

</div>
<div style="float:left; width:50px; height:25px;
">
<input type="text" name="sex[]" value="" size="8">

<input type="hidden" name="c110[]" value="<?php echo $ids;?>">
<input type="TEXT" name="levels[]" value="<?php echo $levels; ?>" size="8">
	
<input type="hidden" name="departmet[]" value="<?php 
$qry = mysql_query("select departmet as total
from courses where matricule='$rollsx'  "); 
$row = mysql_fetch_assoc($qry); 
	echo $saves=$row['total']; ?>" size="8">
</div>
<div style="float:left; width:700px; height:25px;
"><?php

 
echo "<input type='submit' name='submit' value='Submit'></form>";
?>
</div>
</form>


</div>

</DIV>


</div>

</body>
</html>
