<?php include 'dbc.php';
?>



<?php
$roll=$_GET["1"];
$query="select * from classes where roll='2'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>
<?php  $off1=$row['class'];


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
Student's Full Name</div>

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
$table = "courses";
$i = 0;
if(!empty($_POST["submit"]))
{
 foreach($_POST["id"] as $roll)
 {
  mysql_query("Update $table SET
               db1='".$_POST['db1'][$i]."',
               fname='".$_POST['fname'][$i]."',
               departmet='".$_POST['departmet'][$i]."',
               levels='".$_POST['levels'][$i]."',
			   
               matricule='".$_POST['matricule'][$i]."',
			        barcode='".$_POST['barcode'][$i]."',
               sex='".$_POST['sex'][$i]."'
               where roll='$roll'");
  $i++;
  }
 }
 
 
echo "<script>alert('Student data Base Updated Successful!'); window.location.href('marks.php');</script>";
$sql = "SELECT * FROM $table  where levels='400' and departmet='$off1' and db1='$take'order by fname ASC";
$results = mysql_query($sql);
while($row = mysql_fetch_assoc($results))
{
 $id_array[] = $row["roll"];
 $db1_array[] = $row["db1"];
 $fname_array[] = $row["fname"];
 $departmet_array[] = $row["departmet"];
 $levels_array[] = $row["levels"];
 
 $barcode_array[] = $row["barcode"];
 $cxx1_array[] = $row["cxx1"];
 $matricule_array[] = $row["matricule"];

 $sex_array[] = $row["sex"];
 }
 echo "<form action='#' method='post'>
       ";
for($i=0;$i<count($id_array);$i++)
{
 $roll = $id_array[$i];
 $db1 = $db1_array[$i];
  $barcode = $barcode_array[$i];
 $fname = $fname_array[$i];
 $departmet = $departmet_array[$i];
 $levels = $levels_array[$i];
  $cxx1 = $cxx1_array[$i];
 $matricule = $matricule_array[$i];

 $sex = $sex_array[$i];
 echo "
        <div style='float:left; width:1582px; background:#f2f2f2; font-size:12px; color:#686868; font-family:arial; text-transform:UPPERCASE;  '>
     
		
		
       
        <div style='float:left;width:60px;border-bottom:1px solid black;height:21px; '>
		<input type='hidden' name='id[]' value='$roll'>
 <input type='text' name='db1[]' value='$db1'  size='10'></div>
 
        <div style='float:left;width:260px; '>
 <input type='text' name='fname[]' value='$fname' size='40' >
  </div>     

  <div style='float:left;width:80px; '>
 <input type='text' name='departmet[]' value='$departmet' size='8' style='BACKGROUND:#CCC;' ></div>
 
        <div style='float:left;width:70px; '>
 <input type='text' name='levels[]' value='$levels' size='8' style='BACKGROUND:#CCC;' ></div>
 
   <div style='float:left;width:140px; '>
 <input type='text' name='matricule[]' value='$matricule'placeholder='name' size='38' style='BACKGROUND:#CCC;' ></div>
 
 
   <div style='float:left;width:70px; '>
 <input type='text' name='sex[]' value='$sex'placeholder='name' size='8' style='BACKGROUND:#CCC;' ></div>
 
   <div style='float:left;width:70px; '>
 <input type='text' name='barcode[]' value='$barcode' placeholder='name' size='8' style='BACKGROUND:#CCC;' ></div>
 <input type='text' name='cxx[]' value='$cxx'placeholder='date of birth' size='8' style='BACKGROUND:#CCC;' >
 
 
 </DIV><div style='float:left; width:1512px; border-bottom:1px solid #ccc;'>
 
 
 
 
 </div>";
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