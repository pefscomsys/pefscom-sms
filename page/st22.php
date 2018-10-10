<?php

include 'dbcs.php';
$ms=$_GET['roll'];
page_protect();


 $notes=$_SESSION['user_name'];

$user_name=$notes;
if(@$_SESSION['userlevel']!=11){header("location: login.php?error=Unauthorized access");}

 $pic=$_GET["pic"];
$amp=$_GET["amp"];
$roll=$_GET["roll"];

 $ip=@$_SERVER['REMOTE_ADDR'];
 
 ?><?php


$query="select * from users where full_name='$notes'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>
<?php  $ids=$row['fax'];

$levels=$row['user_level'];
?>
<?php } ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Universal University System</title>
<link href="popupsts.css" rel="stylesheet" type="text/css" />

</head><style>

.ExcelTableFormationCol {
                      width: 55px;
                  height: 30px;
                  text-align: center;
                  font-family: Arial Narrow;
                  font-size: 14px;
                }

.ExcelTableFormationRow {
                  text-align: center;
              font-family: Calibri;
              font-size: 16px;
              height: 20px;
			  width:80px;
            }

#LastRow td {
          border-bottom-width: 0px;
        }

.LastCol {
       border-right-width: 0px;
     }
cursor{
position: absolute;
      top: 8px;
      right: -5px;
      background: #000;
      width: 5px;
      height: 5px;
      border: 1px solid #fff;
      border-right: 0px;
      border-bottom: 0px;

}
     #ExcelCursorOuter {
      position: relative;
     }

     #ExcelCursor {
      position: absolute;
      top: 8px;
      right: -5px;
      background: #000;
      width: 5px;
      height: 5px;
      border-right: 0px;
      border-bottom: 0px;
     }





input{border-radius:0px; border: 0;
    box-shadow: none; /* outline:#fff;}

</style>
 
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

 <div style="float:left; width:750px;color:#1188aa; height:30px;font-size:28px;color:#fff;text-transform:uppercase;">Section To Make Correction of Result</div>
 
 
 
 
 </div>

				
	<div style="float:left; width:350px;height:30px; margin-left:100px; margin-top:25px;">
				
		<a href="#">	
<div style="float:left; width:350px;height:30px; ">	
<div style="float:left; width:10px; height:30px; background:#989898;">	
							
				
				
	
</div>	
<div style="float:left; width:290px; height:30px; background:#FFBB40;">	

<div style="float:left;text-align:left; margin-left:0px; font-size:16px; width:320px; height:20px;margin-top:5px;">
							
		Correction		
				
	</div>
</div>
</div>	

</a>		


<div style="float:left; width:750px; height:200px; background:#FFBB40;">	

		 
<?php
$fish=$_GET["roll"];
 $subject=$_POST["subject"];
 $sex=$_POST["sex"];
$department=$_POST["department"];
$levels=$_POST["levels"];
$coef=$_POST["coef"];

	  ?>
<div style="float:left; width:400px;">
<div style="color:red">Department - <?php echo $department;?> </div>

<div  style="float:left;width:990px; height:540px;">

<div  style="float:left;width:750px; height:540px; ">
	
	
	
<div  style="float:left;width:750px; height:30px; background:#336666;color:#fff;">

<div style="width:492px; float:left; height:25px; margin-left:10PX">
STUDENT NAMES</div>

<div style="width:80px; float:left; height:25px; margin-left:10PX">
Quiz </div>

<div style="width:100px; float:left; height:25px; margin-left:10PX">
EXAM</div>
</div>

<?php
$roll=$_GET["1"];
$query="select * from rush where roll='1'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>

<?php  $take=$row[1];



?>
		 
		 
<?php
$table = "marks";
$i = 0;
if(!empty($_POST["submit"]))
{
 foreach($_POST["id"] as $roll)
 {

  
  mysql_query("update resit SET
              
               matricule='".$_POST['matricule'][$i]."',
               
               fname='".$_POST['fname'][$i]."',
               
               c101='".$_POST['c101'][$i]."',
			   
               c102='".$_POST['c102'][$i]."'
			   where roll='$roll'
               ");
  $i++;

               

  }

 

echo "<script>alert('Datae Base Updated Successful!'); </script>";
 }
?>
<?php } ?><?php

 $sql = "SELECT * FROM resit where levels='$levels' and db1='$take' and departmet='$department' and sex='$sex' and c110='$ids' and fname='$subject' order by matricule  ASC";
$results = mysql_query($sql);$t=1;
while($row = mysql_fetch_assoc($results))
{
 $id_array[] = $row["roll"];
 $fname_array[] = $row["fname"];
 $matricule_array[] = $row["matricule"];
 $departmet_array[] = $row["departmet"];
 $levels_array[] = $row["levels"];
  $c101_array[] = $row["c101"];
$c102_array[] = $row["c102"];
$db1_array[] = $row["db1"];
$sex_array[] = $row["sex"];
 }
 echo "<form action='#' method='post'>
       ";
for($i=0;$i<count($id_array);$i++)
{
 $roll = $id_array[$i];
 $fname = $fname_array[$i];
 $matricule = $matricule_array[$i];
 $departmet = $departmet_array[$i];
 $levels = $levels_array[$i];
$c101 = $c101_array[$i];
$c102 = $c102_array[$i];
$db1 = $db1_array[$i];
$sex = $sex_array[$i];
?>
        <div style='float:left; width:750px; background:#FFBB40; font-size:12px; color:#686868; font-family:arial; text-translevels:UPPERCASE;  '>
        <div style='float:left;width:300px; '>
		<table class="editabletable"  width="700px">
		
		<input type='hidden' name='id[]' value='<?php echo $roll;?>'>
		
      <tr><td style='float:left;width:30px; '><?php echo $t++;?></td>  <td style='float:left;width:70px; '><?php echo $fname;?>
	  <input type='hidden' name='fname[]' value='<?php echo $fname;?>' size='8' style='BACKGROUND:#CCC;' >
</td>
        <td style='float:left;width:200px; '>
<input type='text' name='matricule[]' value='<?php echo $matricule;?>' size='18' style='BACKGROUND:#fff;'>

  </td>     <td style='float:left;width:210px; '>
	<?php 
	
	
	
	
$qry = mysql_query("select fname as total
from courses where matricule='$matricule' and db1='$take'  "); 
$row = mysql_fetch_assoc($qry); 
	echo $saves=$row['total']; 
	
	
	;?>
</td>      <td style='float:left;width:80px; '>
  
 <input type='hidden' name='sex[]' value='<?php echo $sex;?>' size='8' style='BACKGROUND:#CCC;' >
 <input type='hidden' name='departmet[]' value='<?php echo $departmet;?>' size='8' style='BACKGROUND:#fff;' >
 
 <input type='hidden' name='c110[]' value='<?php echo $ids;?>' size='8' style='BACKGROUND:#CCC;' >
 <input type='hidden' name='db1[]' value='<?php echo $take;?>' size='8' style='BACKGROUND:#CCC;' >
 <input type='hidden' name='levels[]' value='<?php echo $levels;?>' size='8' style='BACKGROUND:#CCC;'>
 <input type='text' name='c101[]' value='<?php echo $c101;?>' size='8' style='BACKGROUND:#fff;' maxlength='2'></td>
        <td style='float:left;width:70px; '>
		
 <input type='text' name='c102[]' value='<?php echo $c102;?>' size='8' style='BACKGROUND:#fff;' maxlength='2'></td>
 
 </tr>
 <div style='float:left; width:750px; border-bottom:1px solid #fff;'></div>
 
 
 </table>
 <?php
 }
 
echo "<input type='submit' name='submit' value='Submit'></form>";
?><?PHP

 
 $mxc11= $c102 ;
 
 
 
if(empty($mxc11)){

 echo "<tr><td colspan='3' align='center' style='color:red'>No Record found for this semester $sex mr:-$notes please choose another semester or course or level;</td></tr>";
 }
elseif($mxc11>'' ){
	
}

	
		 		 
?>



</body>
</html>