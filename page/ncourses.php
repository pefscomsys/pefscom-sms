<?php

include 'dbcs.php';
$ms=$_GET['roll'];
page_protect();


 $notes=$_SESSION['user_name'];

$user_name=$notes;




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
<link href="popupsy.css" rel="stylesheet" type="text/css" />

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
<div style="float:left; width:950px;border-bottom:1px solid #000;margin-top:3px; height:40px;background:rgb(120,80,100);">

<div style="float:left; width:100px; height:80px;color:#fff;font-size:22px;"><div style="float:left;margin-top:5px;margin-left:5px;">&#9658;</div></div>
 <div style="float:left; width:300px;color:#1188aa; height:30px;font-size:20px;color:#fff;">COURSE CREATION TABLE</div></div>
<?php
$query="select * from rush where roll='1'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>

<?php  $take=$row["year"];


?><?php } ?>
		 
<?php
$table = "marks";
$i = 0;
if(!empty($_POST["submit"]))
{
 foreach($_POST["id"] as $roll)
 {
  
  mysql_query("insert into subject SET
               credit='".$_POST['credit'][$i]."',
			   

               department='".$_POST['department'][$i]."',
               status='".$_POST['status'][$i]."',
               subject='".$_POST['subject'][$i]."',
               db1='".$_POST['db1s'][$i]."',
               acc='".$_POST['acc'][$i]."',
               year1='".$_POST['year1'][$i]."',
			   
              year2='".$_POST['year2'][$i]."'
               ");
  $i++;

               

  }

 

echo "<script>alert('Data Base Updated Successful!');</script>";

 echo  $statusf="<meta http-equiv='refresh' content='0; url=ncourses.php?usr_name=$user_name'>";
 exit;

 } 
?><table width="600px" cellspacing="0" cellpadding="0">
<tr><td style="width:40px;padding:4px;border-top:1px solid #000;border-right:1px solid #000;border-left:1px solid #000;border-bottom:1px solid #000;">SN</td>
<td style="width:250px;padding:4px;border-top:1px solid #000;border-right:1px solid #000;border-bottom:1px solid #000;">Description</td>
<td style="width:250px;padding:4px;border-top:1px solid #000;border-right:1px solid #000;border-bottom:1px solid #000;">Department</td><td style="width:100px;padding:4px;border-top:1px solid #000;border-right:1px solid #000;border-bottom:1px solid #000;">C.CODE</td>
<td style="width:100px;padding:4px;border-top:1px solid #000;border-right:1px solid #000;border-bottom:1px solid #000;">CV</td>
<td style="width:100px;padding:4px;
border-top:1px solid #000;border-right:1px solid #000;border-bottom:1px solid #000;">Status</td>
<td style="width:100px;padding:4px;border-top:1px solid #000;border-right:1px solid #000;border-bottom:1px solid #000;">Level</td>

<td style="width:100px;padding:4px;
border-top:1px solid #000;border-right:1px solid #000;border-bottom:1px solid #000;">Semester</td>
<td style="width:100px;padding:4px;border-top:1px solid #000;border-right:1px solid #000;border-bottom:1px solid #000;">Acc</td>

</tr>	  <?php
 $sql = "SELECT * FROM subject2 where id>='1' and id<='1'";
$results = mysql_query($sql);$y=1;
while($row = mysql_fetch_assoc($results))
{
 $id_array[] = $row["roll"];
 $db1_array[] = $row["db1"];
 
 
 $status_array[] = $row["status"];
 $credit_array[] = $row["credit"];
 $subject_array[] = $row["subject"];
 $department_array[] = $row["department"];
 $year1_array[] = $row["year1"];$year2_array[] = $row["year2"];
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


<tr><td style="width:40px;padding:4px;background:#fff;border-top:1px solid #000;
border-right:1px solid #000;border-bottom:1px solid #000;"><?php echo $iy++;?>

		<input type='hidden' name='id[]' value='<?php echo $roll;?>'></td>
		<td style="width:250px;background:#fff;
border-top:1px solid #000;border-right:1px solid #000;border-bottom:1px solid #000;">

 
 
 <input type='text' name='db1s[]' value='<?php echo $db1;?>' size='28' style="padding:4px;" ></td>
<td style="width:250px;background:#fff;
border-top:1px solid #000;border-right:1px solid #000;border-bottom:1px solid #000;">

 
 
 <input type='text' name='department[]' value='' size='28' style="padding:4px;" ></td>

<td style="width:70px;background:#fff;
border-top:1px solid #000;border-right:1px solid #000;border-bottom:1px solid #000;">

 <input type='text' name='subject[]' value='' size='4' placeholder='subject code'></td>
<td style="width:70px;background:#fff;
border-top:1px solid #000;border-right:1px solid #000;border-bottom:1px solid #000;">

 <input type='text' name='credit[]' value='' size='8'style="padding:4px;" placeholder='cv'></td>
<td style="width:70px;background:#fff;
border-top:1px solid #000;border-right:1px solid #000;border-bottom:1px solid #000;">

 <input type='text' name='status[]' value='' size='8'style="padding:4px;" placeholder='status'>
 </td>
<td style="width:70px;background:#fff;
border-top:1px solid #000;border-right:1px solid #000;border-bottom:1px solid #000;">

 <input type='text' name='year1[]' value='' size='4'placeholder='levels' ></td>
<td style="width:100px;background:#fff;
border-top:1px solid #000;border-right:1px solid #000;
border-bottom:1px solid #000;">
 <input type='text' name='year2[]' value='' size='4'style="padding:4px;" placeholder='semester'></td>
 
 
 
 
<td style="width:100px;background:#fff;
border-top:1px solid #000;border-right:1px solid #000;
border-bottom:1px solid #000;">
 <input type='text' name='acc[]' value='' size='4'style="padding:4px;" placeholder='acc'></td>
</tr>
 <div style='float:left; width:932; border-bottom:1px solid #ccc;'></div><?php
 }
 
echo "</table><input type='submit' name='submit' value='Validate'></form>";
?>













<table width="600px" cellspacing="0" cellpadding="0" STYLE="MARGIN-TOP:40PX;">
<?php



$qry = mysql_query("select * FROM  subject "); 
$num_rows=mysql_num_rows($qry);
  $rollss=$num_rows; 

$query="select * from subject where roll='$rollss'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>

<tr><td style="width:40px;padding:4px;background:#fff;border-top:1px solid #000;
border-right:1px solid #000;border-bottom:1px solid #000;"><?php echo $iy++;?>

		<input type='hidden' name='id' value='<?php echo $roll;?>'></td>
		<td style="width:250px;background:#fff;
border-top:1px solid #000;border-right:1px solid #000;border-bottom:1px solid #000;">

 
 
 <input type='text' name='db1s' value='<?php echo $row["db1"];?>' size='28' style="padding:4px;" ></td>
<td style="width:250px;background:#fff;
border-top:1px solid #000;border-right:1px solid #000;border-bottom:1px solid #000;">

 
 
 <input type='text' name='department' value='<?php echo $row["department"];?>' size='28' style="padding:4px;" ></td>

<td style="width:70px;background:#fff;
border-top:1px solid #000;border-right:1px solid #000;border-bottom:1px solid #000;">

 <input type='text' name='subject' value='<?php echo $row["subject"];?>' size='4' placeholder='subject code'></td>
<td style="width:70px;background:#fff;
border-top:1px solid #000;border-right:1px solid #000;border-bottom:1px solid #000;">

 <input type='text' name='credit' value='<?php echo $row["credit"];?>' size='8'style="padding:4px;" placeholder='cv'></td>
<td style="width:70px;background:#fff;
border-top:1px solid #000;border-right:1px solid #000;border-bottom:1px solid #000;">

 <input type='text' name='status' value='<?php echo $row["subject"];?>' size='8'style="padding:4px;" placeholder='status'>
 </td>
<td style="width:70px;background:#fff;
border-top:1px solid #000;border-right:1px solid #000;border-bottom:1px solid #000;">

 <input type='text' name='year1' value='<?php echo $row["year1"];?>' size='4'placeholder='levels' ></td>
<td style="width:100px;background:#fff;
border-top:1px solid #000;border-right:1px solid #000;
border-bottom:1px solid #000;">
 <input type='text' name='year2' value='<?php echo $row["year2"];?>' size='4'style="padding:4px;" placeholder='semester'></td>
 
 
 
 
<td style="width:100px;background:#fff;
border-top:1px solid #000;border-right:1px solid #000;
border-bottom:1px solid #000;">
 <input type='text' name='acc' value='<?php echo $row["acc"];?>' size='4'style="padding:4px;" placeholder='acc'></td>

 
 
 
 
 
 
 
 <td style="width:100px;background:#fff;
border-top:1px solid #000;border-right:1px solid #000;
border-bottom:1px solid #000;">
 <a href="dek.php?rolx=<?php echo $rollss;?>">Delete This</a></td>

 
 
 
 
 
 
 </tr>

<?php } ?>
 
 
</div>
</body>
</html>