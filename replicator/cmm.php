<?php

include 'dbcs.php';
$ms=$_GET['roll'];
$dept=$_GET['dept'];
page_protect();

$uii=$_GET['uii'];

 $notes=$_SESSION['user_name'];

$user_name=$notes;
if(@$_SESSION['userlevel']!=11){header("location: login.php?error=Unauthorized access");}




 $ip=@$_SERVER['REMOTE_ADDR'];
 
 ?><?php


$query="select * from users where full_name='$notes'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>
<?php  $ids=$row['fax'];

$levels=$row['user_level'];
?>
<?php } 
 $ip=@$_SERVER['REMOTE_ADDR'];
  $date=date("jmy");
    $time=date("H:i:s");
 $active="Active";
 
$qry = mysql_query("select  roll as total
from restriction where date='$date'  and pconcern='$notes'  and id='1'"); 
$row = mysql_fetch_assoc($qry); 
 $mxc11UI=$row['total'];
if(empty($mxc11UI)){

 $query1="insert into restriction set  
pconcern='$notes',date='$date',time='$time',status='$active',ipaddress='$ip',id='1'


";

mysql_query ($query1) or die ('could not updated:'.mysql_error());

 
 }
elseif($mxc11UI>'' &&  $mxc11UI=$ip){

 

}


$qry = mysql_query("select  ipaddress as total
from restriction where date='$date'  and pconcern='$notes'  and id='1'"); 
$row = mysql_fetch_assoc($qry); 
 $mxc11r=$row['total'];
$ip;




if(empty($mxc11r)){

echo"yes checked";

}
elseif($mxc11r>$ip){

 $mats="Unauthorise Access Please!";
 Echo "Sorry Sir you have connected before please logout from previous computer!";
 
 echo  $statusf="<meta http-equiv='refresh' content='0; url=login2.php?roll=$mats'>";
 exit;
}

elseif($mxc11r<$ip){

 $mats="Unauthorise Access Please!";
 Echo "Sorry Sir you have connected before please logout from previous computer!";
 
 echo  $statusf="<meta http-equiv='refresh' content='0; url=login2.php?roll=$mats'>";
 
 
 exit;
}
elseif($mxc11r>=$ip  &&  $mxc11r<=$ip ){


}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Universal University System</title>
<link href="../popups.css" rel="stylesheet" type="text/css" />

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
<div id="popup"><?php
$query="select * from rushs where roll='1'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>

<?php  $db1=$uii;
				
		$take=$uii;				
$qry = mysql_query("select * from subject where year1>='$ms' &&  year1<='$ms' and department>='$dept' and department<='$dept' and acc='$db1'  "); 
$num_rows=mysql_num_rows($qry);
 $xcx=$num_rows; 
	$mb=$xcx;		

if(empty($mb)){

$rt="select * from subject where year1>='$ms' &&  year1<='$ms' and department>='$dept' and department<='$dept' and acc=''
  ";

}
elseif($mb>""){
			
	$rt="select * from subject where year1>='$ms' &&  year1<='$ms' and department>='$dept' and department<='$dept' and acc='$db1'  ";

}	
				

?><?php } ?>
<div style="float:left; width:650px;border-bottom:1px solid #000;margin-top:3px; height:40px;background:rgb(120,80,100);">

<div style="float:left; width:100px; height:80px;color:#fff;font-size:22px;"><div style="float:left;margin-top:5px;margin-left:5px;">&#9658;</div></div>
 <div style="float:left; width:500px;color:#1188aa; height:30px;font-size:20px;color:#fff;">Level : <?php echo $ms;?>, Dept: <?php echo $dept;?>, <?php echo $take=$db1;?></div></div>

 
 		
 <table width="600px">
	<tr><td>Course Code</td><td>Course Description</td>
						<td>Department</td>
						<td>Level</td>
						<td>Semester</td>
						<td>Credit</td>
						<td>Status</td>
						</tr>
						
						
		 
<?php
$mas=$_POST["mas"];
 $mxc11UIyS=$mas;
$i = 0;
if(!empty($_POST["submit"]))
{
 foreach($_POST["id"] as $roll)
 {
  
  
 $mxc11UIyS=$mas;
if(empty($mxc11UIyS)){
 
   mysql_query("insert into subject SET
               acc='".$_POST['take'][$i]."',
			   
 department='".$_POST['department'][$i]."',
               db1='".$_POST['db1'][$i]."',
               year1='".$_POST['year1'][$i]."',
               year2='".$_POST['year2'][$i]."',
               credit='".$_POST['credit'][$i]."',
			    status='".$_POST['status'][$i]."',
               subject='".$_POST['subject'][$i]."'
               ");
 
 }
elseif($mxc11UIyS>'' ){
 
   mysql_query("update subject SET
 acc='".$_POST['take'][$i]."',
			   
 department='".$_POST['department'][$i]."',
               db1='".$_POST['db1'][$i]."',
               year1='".$_POST['year1'][$i]."',
               year2='".$_POST['year2'][$i]."',
               credit='".$_POST['credit'][$i]."',
			    status='".$_POST['status'][$i]."',
               subject='".$_POST['subject'][$i]."'where roll='$roll'
               ");
 
 
}

  $i++;


  }


    
echo "<script>alert('Data Base Updated Successful!');</script>";

 echo  $statusf="<meta http-equiv='refresh' content='0; url=uall.php?usr_name=$user_name'>";
 exit;           


 } 
?>
	<?php
 $sql = "$rt order by year2 ASC";
$results = mysql_query($sql);$rt=1;
while($row = mysql_fetch_assoc($results))
{
 $id_array[] = $row["roll"];
 $db1_array[] = $row["db1"];
 $department_array[] = $row["department"];
 $subject_array[] = $row["subject"];
 $year1_array[] = $row["year1"];$year2_array[] = $row["year2"];
 $credit_array[] = $row["credit"];$status_array[] = $row["status"];
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
 $credit = $credit_array[$i];
 $status = $status_array[$i];

?>
	<tr><td><input type="hidden" name="id[]" value="<?php echo $roll;?>"size="8"><input type="text" name="subject[]" value="<?php echo $subject;?>"size="8"></td>
	<td><input type="text" name="db1[]" value="<?php echo $db1;?>"size="28"></td>
						<td><input type="text" name="department[]" value="<?php echo $department;?>"size="8"></td>
						<td><input type="text" name="year1[]" value="<?php echo $year1;?>"size="4"></td>
						<td><input type="text" name="year2[]" value="<?php echo $year2;?>"size="2"></td>
						<td><input type="text" name="credit[]" value="<?php echo $credit;?>"size="2"></td>
						<td><input type="text" name="status[]" value="<?php echo $status;?>"size="2"></td>
						<input type="hidden" name="take[]" value="<?php echo $take;?>"size="8">
						<input type="hidden" name="mas" value="<?php 
						
						
						
$qry = mysql_query("select * from subject where year1>='$ms' &&  year1<='$ms' and department>='$dept' and department<='$dept' and acc='$take'  "); 
$num_rows=mysql_num_rows($qry);
 echo  $richooTTTyss=$num_rows; 
						
						
						
						
						
						
						
						
						
						?>"size="8">
						
						
						
						
						</tr>
						

<?php } 

echo "</table>
					<input type='submit' name='submit' value='Save' style='padding:10px 45px; margin-left:5px;margin-top:10px;'></form>";


?>				
					
					
				









							
					</table>
					



</div>
</body>
</html>