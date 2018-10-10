<?php include 'dbc.php';
?>



<?php
$roll=$_GET["1"];
$query="select * from classes where roll='2'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>
<?php  echo $off1=$row['class'];


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


<?php echo $take=$row[1];?>
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
$sql = "SELECT * FROM $table  where levels='200' and departmet='$off1' and db1='$take'order by matricule ASC";
$results = mysql_query($sql);
while($row = mysql_fetch_assoc($results))
{
 $id_array[] = $row["roll"];
 $db1_array[] = $row["db1"];
 $fname_array[] = $row["fname"];
 $departmet_array[] = $row["departmet"];
 $levels_array[] = $row["levels"];
 
 $cxx1_array[] = $row["cxx1"];
 $matricule_array[] = $row["matricule"];

 $barcode_array[] = $row["barcode"];
 $sex_array[] = $row["sex"];
 }
 echo "<form action='#' method='post'>
       ";
for($i=0;$i<count($id_array);$i++)
{
 $roll = $id_array[$i];
 $db1 = $db1_array[$i];
 $fname = $fname_array[$i];
 $departmet = $departmet_array[$i];
 $levels = $levels_array[$i];
  $cxx1 = $cxx1_array[$i];
 $matricule = $matricule_array[$i];
 $barcode = $barcode_array[$i];
 $sex = $sex_array[$i];
?>
        <div style='float:left; width:1682px; background:<?php 
$qry = mysql_query("select * FROM courses where matricule='$matricule'  and departmet='$departmet'  and db1='$db1' "); 
$num_rows=mysql_num_rows($qry);
$mhsd=$num_rows; 

if(empty($mhsd)){
echo  $colorf1bio="";
 $statusfbio="";}
 elseif($mhsd>=1 && $mhsd<=1 ){
 echo $colorf1bio="";
 $colors="#686868";

}
elseif($mhsd>=2 && $mhsd<=2 ){
 echo $colorf1bio="red";
 $colors="white";
 ;
}
elseif($mhsd>=3 && $mhsd<=3 ){
 echo $colorf1bio="red";
 $colors="white";
 ;
}
?>;color:<?php echo $colors;?>;	; font-size:12px; color:#686868; font-family:arial; text-transform:UPPERCASE;  '>
     
		
		
       
        <div style='float:left;width:60px;border-bottom:1px solid black;height:21px;background:<?php echo $colorf1bio
		
		
		?>; '>
		<input type='hidden' name='id[]' value='<?php echo $roll;?>'>
 <input type='text' name='db1[]' value='<?php echo $db1;?>'  size='10'></div>
 
        <div style='float:left;width:260px;background:<?php echo $colorf1bio;
		
		
		?>;  '>
 <input type='text' name='fname[]' value='<?php echo $fname;?>' size='40' style="background:<?php echo $colorf1bio;
		
		
		?>; ">
  </div>     

  <div style='float:left;width:80px;background:<?php echo $colorf1bio;
		
		
		?>;  '>
 <input type='text' name='departmet[]' value='<?php echo $departmet;?>' size='8' style='background:<?php echo $colorf1bio;
		
		
		?>;' ></div>
 
        <div style='float:left;width:70px;background:<?php echo $colorf1bio;
		
		
		?>;  '>
 <input type='text' name='levels[]' value='<?php echo $levels;?>' size='8' style='background:<?php echo $colorf1bio;
		
		
	
		
		
		?>;' ></div>
 
   <div style='float:left;width:140px;background:<?php echo $colorf1bio;
		
		
		?>;  '>
 <input type='text' name='matricule[]' value='<?php echo $matricule;?>'placeholder='name' size='38' style='BACKGROUND:<?php echo $colorf1bio;
		
		
		?>;' ></div>
 
 
   <div style='float:left;width:70px;background:<?php echo $colorf1bio;
		
		
		?>;  '>
 <input type='text' name='sex[]' value='<?php echo $sex;?>'placeholder='name' size='8' style='BACKGROUND:<?php echo $colorf1bio;
		
		
		?>;;' ></div>
 
 <input type='text' name='cxx[]' value='<?php echo $cxx;?>'placeholder='date of birth' size='8' style='<?php echo $colorf1bio;
		
		
		?>;' >
 
 
 
 <input type='text' name='barcode[]' value='<?php echo $barcode;?>'placeholder='name' size='38' style='BACKGROUND:<?php echo $colorf1bio;
		
		
		?>;' ></div>
 
 
 
 
 
 <div style='float:left; width:1512px; border-bottom:1px solid #ccc;'>
 
 
 
 
 </div>
 <?php
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