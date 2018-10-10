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

 <div style="float:left; width:750px;color:#1188aa; height:30px;font-size:28px;color:#fff;text-transform:uppercase;">Section To Moderate Semester Result</div>
 
 
 
 
 </div>

				
	<div style="float:left; width:350px;height:30px; margin-left:100px; margin-top:25px;">
				
		<a href="#">	
<div style="float:left; width:350px;height:30px; ">	
<div style="float:left; width:10px; height:30px; background:#989898;">	
							
				
				
	
</div>	
<div style="float:left; width:290px; height:30px; background:#FFBB40;">	

<div style="float:left;text-align:left; margin-left:0px; font-size:16px; width:320px; height:20px;margin-top:5px;">
							
		Moderate all semester		
				
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
echo $marks=$_POST["marks"];
	  ?>
<div style="float:left; width:400px;">
Welcome To Marks MODERATION Page for <?php echo $subject;?><BR>
<div style="color:red">We are adding <?php echo $marks;?> to everyone!</div>

<div  style="float:left;width:990px; height:540px;">

<div  style="float:left;width:750px; height:540px; ">
	
	
	
<div  style="float:left;width:750px; height:30px; background:#336666;color:#fff;">

<div style="width:472px; float:left; height:25px; margin-left:10PX">
STUDENT NAMES</div>

<div style="width:80px; float:left; height:25px; margin-left:10PX">
Sq </div>

<div style="width:100px; float:left; height:25px; margin-left:10PX">
EXAM</div>
</div>

<?php
$take=$_POST["db1"];


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
               
               
               c101='".$_POST['c101'][$i]."',
			   
               c102='".$_POST['c102'][$i]."'
			   where roll='$roll'
               ");
  $i++;

               

  }
 }
 

echo "<script>alert('Datae Base Updated Successful!'); </script>";
?>
<?php  ?>			<?php
	  /******************** ERROR MESSAGES*************************************************
	  This code is to show error messages 
	  **************************************************************************/
	  if(!empty($err))  {
	   echo "<div class=\"msg\" style='text-decoration:blink;color:red;'>";
	  foreach ($err as $e) {
	    echo "$e <br>";
	    }
	  echo "</div>";	
	   }
	  /******************************* END ********************************/	  
	  
	  ?>	<?php

 $sql = "SELECT * FROM resit where levels='$levels' and db1='$take' and departmet='$department' and sex='$sex' and fname='$subject' and c110='$ids' and matricule>''order by matricule  ASC";
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

 $mxc11= $c102 ;
 
 
 
if(empty($mxc11)){

 $statusfbio="";}
elseif($mxc11>'' ){
 $statusfbio=$c102+$marks;
}
$mxc111=$statusfbio;
if(empty($mxc111)){

 $statusfbio1="";}

elseif($mxc111>=70 && $mxc111<=70 ){
 $statusfbio1=69;
}
elseif($mxc111>=0  && $mxc111<=70 ){
 $statusfbio1=$mxc111;
}
elseif($mxc111>70 ){
 $statusfbio1=69;
}

?>
        <div style='float:left; width:752px; background:#f4f4f4; font-size:12px; color:#686868; font-family:arial; text-translevels:UPPERCASE;  '>
           <div style='float:left;width:30px; '>
		
		<?php echo $t++;?></div>
		
		
		
		
		<div style='float:left;width:300px; '>
		
		<input type='hidden' name='id[]' value='<?php echo $roll;?>'></div>
        <div style='float:left;width:70px; '>
	<?php echo	$fname;?>
</div>
        <div style='float:left;width:200px; '>
	<?php echo	$matricule;?> 
  </div>     <div style='float:left;width:210px; '>
	<?php 
	
	
	
	
$qry = mysql_query("select fname as total
from courses where matricule='$matricule' and db1='$take'  "); 
$row = mysql_fetch_assoc($qry); 
	echo $saves=$row['total']; 
	
	
	;?>
</div>      <div style='float:left;width:80px; '>
  
 <input type='hidden' name='sex[]' value='<?php echo $sex;?>' size='8' style='BACKGROUND:#CCC;' maxlength='4'>
 <input type='hidden' name='departmet[]' value='<?php echo $departmet;?>' size='8' style='BACKGROUND:#CCC;' maxlength='4'>
 
 <input type='hidden' name='matricule[]' value='<?php echo $matricule;?>' size='8' style='BACKGROUND:#CCC;' maxlength='4'>
 <input type='hidden' name='db1[]' value='<?php echo $take;?>' size='8' style='BACKGROUND:#CCC;' maxlength='4'>
 <input type='hidden' name='levels[]' value='<?php echo $levels;?>' size='8' style='BACKGROUND:#CCC;' maxlength='4'>
 <input type='text' name='c101[]' value='<?php echo $c101;?>' size='8' style='BACKGROUND:#CCC;' maxlength='2'></div>
        <div style='float:left;width:70px; '>
		
 <input type='text' name='c102[]' value='<?php echo $statusfbio1;?>' size='8' style='BACKGROUND:#CCC;' maxlength='2'></div>
 
 </DIV>
 <div style='float:left; width:750px; border-bottom:1px solid #000;'></div><?php
 }
 
echo "<input type='submit' name='submit' value='Submit'></form>";
?>
<?PHP

 
 $mxc11= $c102 ;
 
 
 
if(empty($mxc11)){

 echo "<tr><td colspan='3' align='center' style='color:red'>No Record found for this semester $sex mr:-$notes please choose another semester or course or level;</td></tr>";
 }
elseif($mxc11>'' ){
	
}

	
		 		 
?>


</body>
</html>