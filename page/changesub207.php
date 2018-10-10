<?php include 'dbc.php';
 echo $rolls=$_GET['roll'];
?>



<?php
$roll=$_GET["1"];
$query="select * from matsub where levels='1'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>
<?php   $off1=$row['mgg'];


?>
<?php } ?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<html lang="en">
<head>
<title><?php echo $school;?></title>
        <link rel="shortcut icon" href="pef.png"> 
	<style>
	</style>
	
	</head>
	<body>

<div style="width:903px; float:left; height:25px; background:#336600;  color:#fff;">

<div style="width:332px; float:left; height:25px; margin-left:10PX">
Couse Full Name</div>

<div style="width:130px; float:left; height:25px; margin-left:10PX">
</div>

<div style="width:100px; float:left; height:25px; margin-left:10PX">
</div>
</div>
 <?php
$roll=$_GET["1"];
$query="select * from rush where roll='1'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>

<?php $take=$row[1];?>
<?php } ?>
<?php
$table = "subject";
$i = 0;
if(!empty($_POST["submit"]))
{
 foreach($_POST["id"] as $roll)
 {  mysql_query("Update credits SET
               credit='".$_POST['credit'][$i]."',
			    status='".$_POST['status'][$i]."'
               
               where subject='".$_POST['subject'][$i]."'");
 
 
 
 
  mysql_query("Update $table SET
               db1='".$_POST['db1'][$i]."',
               subject='".$_POST['subject'][$i]."',
               department='".$_POST['department'][$i]."',
               year1='".$_POST['year1'][$i]."',
			   
               year2='".$_POST['year2'][$i]."'
               where roll='$roll'");
  $i++;
  }
 }
 
echo "<script>alert('Student data Base Updated Successful!');</script>";
$sql = "SELECT * FROM $table  where year1='700' and department='$rolls'";
$results = mysql_query($sql);
while($row = mysql_fetch_assoc($results))
{
 $id_array[] = $row["roll"];
 $db1_array[] = $row["db1"];
 $subject_array[] = $row["subject"];
 $department_array[] = $row["department"];
 $year1_array[] = $row["year1"];
 
 $year2_array[] = $row["year2"];
 }
 echo "<form action='#' method='post'>
       ";
for($i=0;$i<count($id_array);$i++)
{
 $roll = $id_array[$i];
 $db1 = $db1_array[$i];
 $subject = $subject_array[$i];
 $department = $department_array[$i];
 $year1 = $year1_array[$i];
 
 $year2 = $year2_array[$i];

 ?>
        <div style='float:left; width:900px; background:#f2f2f2; font-size:12px; color:#686868; font-family:arial; text-transform:UPPERCASE;  '>
     
		
		
       
        <div style='float:left;width:260px;border-bottom:1px solid black;height:21px; '>
	<input type='hidden' name='id[]' value='<?php echo $roll;?>'>
 <input type='text' name='db1[]' value='<?php echo $db1;?>'  size='32'></div>
        <div style='float:left;width:110px; '>
 <input type='text' name='subject[]' value='<?php echo $subject;?>' >
  </div>      <div style='float:left;width:80px; '>
 <input type='text' name='department[]' value='<?php echo $department;?>' size='8' style='BACKGROUND:#CCC;' ></div>
        <div style='float:left;width:70px; '>
 <input type='text' name='year1[]' value='<?php echo $year1;?>' size='8' style='BACKGROUND:#CCC;' ></div>
 
   <div style='float:left;width:70px; '>
 <input type='text' name='year2[]' value='<?php echo $year2;?>'placeholder='name' size='8' style='BACKGROUND:#CCC;' ></div>

 
 
 
 
 
  <div style='float:left;width:70px; '>
 <input type='text' name='credit[]' value='<?php 
$qry = mysql_query("select credit as total
from credits where subject='$subject' "); 
$row = mysql_fetch_assoc($qry); 
echo  $mmsssolds=$row['total'];



;?>'placeholder='name' size='8' style='BACKGROUND:#CCC;' ></div>

  <div style='float:left;width:70px; '>
 <input type='text' name='status[]' value='<?php 
$qry = mysql_query("select status as total
from credits where subject='$subject' "); 
$row = mysql_fetch_assoc($qry); 
echo  $mmsssols=$row['total'];



;?>'placeholder='name' size='8' style='BACKGROUND:#CCC;' ></div>
 </DIV>
 
  </DIV>
 
 
 
 
 
 
 
 
 
 
 <div style='float:left; width:1012; border-bottom:1px solid #ccc;'></div><?php
 }
echo "<input type='submit' name='submit' value='Submit'></form>";
?>








  


</div>

</div>

</div>
</body>
</html>

	
	
	
	
	
	
	
	
	
	
	
	
	</div>
	
	</div>
	
	
	
	
	</body>
	</html>