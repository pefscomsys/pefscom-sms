<?php include 'dbcs.php';
page_protect();


 $notes=$_SESSION['user_name'];

echo $rollsp=$_GET['roll'];

$user_name=$notes;




 $ip=@$_SERVER['REMOTE_ADDR'];
 
 ?><?php


$query="select * from users where full_name='$notes'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>
<?php  $ids=$row['fax'];


?>
<?php } ?>


<?php
$roll=$_GET["1"];
$query="select * from matsub where levels='4'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>
<?php  $off1=$row['mgg'];


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

<div style="width:2003px; float:left; height:25px; background:#336600;  color:#fff;">

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
			   cxx9='".$_POST['cxx9'][$i]."',
			   cxx8='".$_POST['cxx8'][$i]."',
			   cxx7='".$_POST['cxx7'][$i]."',
               cxx2='".$_POST['cxx2'][$i]."',
			     cxx1='".$_POST['cxx1'][$i]."',
			   
			   cxx6='".$_POST['cxx6'][$i]."',
               matricule='".$_POST['matricule'][$i]."',
			   barcode='".$_POST['barcode'][$i]."',
               sex='".$_POST['sex'][$i]."'
               where roll='$roll'");
  $i++;
  }
 }
 
 
echo "<script>alert('Student data Base Updated Successful!');</script>";
$sql = "SELECT * FROM $table  where levels='300' and  c110='$ids' and departmet='$rollsp' and db1='$take'";
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
 $cxx2_array[] = $row["cxx2"];
 $cxx6_array[] = $row["cxx6"];
 $cxx7_array[] = $row["cxx7"];
 $cxx8_array[] = $row["cxx8"];
 $cxx9_array[] = $row["cxx9"];
 $matricule_array[] = $row["matricule"];

 $sex_array[] = $row["sex"];
 }
 echo "<form action='#' method='post'>
       ";
for($i=0;$i<count($id_array);$i++)
{
 $roll = $id_array[$i];
 $db1 = $db1_array[$i];
 $fname = $fname_array[$i];$barcode = $barcode_array[$i];
 $departmet = $departmet_array[$i];$cxx2 = $cxx2_array[$i];$cxx6 = $cxx6_array[$i];$cxx7 = $cxx7_array[$i];$cxx8 = $cxx8_array[$i];$cxx9= $cxx9_array[$i];
 $levels = $levels_array[$i];
  $cxx1 = $cxx1_array[$i];
 $matricule = $matricule_array[$i];

 $sex = $sex_array[$i];
?>
        <div style='float:left; width:2082px;background:#f8f8f8; font-size:12px; color:#686868; font-family:arial; text-transform:UPPERCASE;  '>
     
		
		
       
        <div style='float:left;width:60px;border-bottom:1px solid black;height:21px;<?php 
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
?>;color:<?php echo $colors;?>;	 '>
		<input type='hidden' name='id[]' value='<?php echo $roll;?>'>
 <input type='text' name='db1[]' value='<?php echo $db1;?>'  size='10'></div>
 
        <div style='float:left;width:260px;background:<?php 
echo $colorf1bio;
?>;color:<?php echo $colors;?>;'>
 <input type='text' name='fname[]' value='<?php echo $fname;?>' size='40' STYLE='background:<?php 
echo $colorf1bio;
?>;color:<?php echo $colors;?>;'>
  </div>     

  <div style='float:left;width:80px; background:<?php 
echo $colorf1bio;
?>;color:<?php echo $colors;?>;'>
 <input type='text' name='departmet[]' STYLE='background:<?php 
echo $colorf1bio;
?>;color:<?php echo $colors;?>;'value='<?php echo $departmet;?>' size='8' style='BACKGROUND:#CCC;' ></div>
 
        <div style='float:left;width:70px;background:<?php 
echo $colorf1bio;
?>;color:<?php echo $colors;?>; '>
 <input type='text' name='levels[]'STYLE='background:<?php 
echo $colorf1bio;
?>;color:<?php echo $colors;?>;' value='<?php echo $levels;?>' size='8' style='BACKGROUND:#CCC;' ></div>
 
   <div style='float:left;width:140px;background:<?php 
echo $colorf1bio;
?>;color:<?php echo $colors;?>; '>
 <input type='text' name='matricule[]'STYLE='background:<?php 
echo $colorf1bio;
?>;color:<?php echo $colors;?>;' value='<?php echo $matricule;?>'placeholder='matricule' size='38' style='BACKGROUND:#CCC;' ></div>
 
 
   <div style='float:left;width:70px;background:<?php 
echo $colorf1bio;
?>;color:<?php echo $colors;?>; '>
 <input type='text' name='sex[]'STYLE='background:<?php 
echo $colorf1bio;
?>;color:<?php echo $colors;?>;' value='<?php echo $sex;?>'placeholder='sex' size='8' style='BACKGROUND:#CCC;' >
 
 
 
 </DIV>
 
  
 
   <div style='float:left;width:70px;background:<?php 
echo $colorf1bio;
?>;color:<?php echo $colors;?>; '>
 
 <input type='text' name='cxx2[]' STYLE='background:<?php 
echo $colorf1bio;
?>;color:<?php echo $colors;?>;'value='<?php echo $cxx2;?>'placeholder='date of birth' size='8' style='BACKGROUND:#CCC;' >
 
 
 </DIV>
 
 
 
   <div style='float:left;width:70px;background:<?php 
echo $colorf1bio;
?>;color:<?php echo $colors;?>;'>
 
 <input type='text' name='cxx1[]' STYLE='background:<?php 
echo $colorf1bio;
?>;color:<?php echo $colors;?>;'value='<?php echo $cxx1;?>'placeholder='Place of birth' size='8' style='BACKGROUND:#CCC;' >
 
 
 </DIV>
   <div style='float:left;width:70px;background:<?php 
echo $colorf1bio;
?>;color:<?php echo $colors;?>;'>
 
 <input type='text' name='cxx6[]' STYLE='background:<?php 
echo $colorf1bio;
?>;color:<?php echo $colors;?>;'value='<?php echo $cxx6;?>'placeholder='School Attendant' size='8' style='BACKGROUND:#CCC;' >
 
 
 </DIV>
 
   <div style='float:left;width:70px;background:<?php 
echo $colorf1bio;
?>;color:<?php echo $colors;?>; '>
 
 <input type='text' name='cxx7[]'STYLE='background:<?php 
echo $colorf1bio;
?>;color:<?php echo $colors;?>;' value='<?php echo $cxx7;?>'placeholder='Student Address' size='8' style='BACKGROUND:#CCC;' >
 
 
 </DIV>
 
 
   <div style='float:left;width:70px; background:<?php 
echo $colorf1bio;
?>;color:<?php echo $colors;?>;'>
 
 <input type='text' name='cxx8[]' STYLE='background:<?php 
echo $colorf1bio;
?>;color:<?php echo $colors;?>;'value='<?php echo $cxx8;?>'placeholder='Parent Address' size='8' style='BACKGROUND:#CCC;' >
 
 
 </DIV>
    <div style='float:left;width:70px; background:<?php 
echo $colorf1bio;
?>;color:<?php echo $colors;?>;'>
 
 <input type='text' name='barcode[]'STYLE='background:<?php 
echo $colorf1bio;
?>;color:<?php echo $colors;?>;' value='<?php echo $barcode;?>'placeholder='Bar code' size='8' style='BACKGROUND:#CCC;' >
 
 
 </DIV>
 
 <div style='float:left; width:1512px; border-bottom:1px solid #ccc;'>
 
 
 
 
 </div><?php 
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