<?php

include 'dbcs.php';

page_protect();


 $notes=$_SESSION['user_name'];

$user_name=$notes;
$mmp=$_GET['roll'];



 $ip=@$_SERVER['REMOTE_ADDR'];
 

$result = mysql_query("SELECT * FROM courses where fname>'' order by fname ASC");
?>	<?php  $datess=date('j/m/y');?>
	<?php   $dayss=date('D');
	 $yt=date('Y');	 $ytt=date('M');
	$days7=date('j');
	
	?>
<?php     $mmx1=$dayss;
if(empty($mmx1)){
$mmx1="";
}
else if(($mmx1 >='Sat' && $mmx1 <='Sat')){
$statusf1bengssmm1="SATURDAY";

}
else if(($mmx1 >='Mon'&& $mmx1 <='Mon')){
$statusf1bengssmm1="MONDAY";

}else if(($mmx1 >='Tue' && $mmx1 <='Tue')){
$statusf1bengssmm1="TUESDAY";

}else if(($mmx1 >='Wed' && $mmx1 <='Wed')){
$statusf1bengssmm1="WEDNESDAY";

}else if(($mmx1 >='Thu'&& $mmx1 <='Thu')){
$statusf1bengssmm1="THURSDAY";

}
else if(($mmx1 >='Fri'&& $mmx1 <='Fri')){
$statusf1bengssmm1="FRIDAY";

} 
  $mmx11=$days7;
if(empty($mmx11)){
$mmx11="";
}
else if(($mmx11 >='1' && $mmx11 <='7')){
$statusf1bengssmm11="1";

}
else if(($mmx11 >='8'&& $mmx11 <='14')){
$statusf1bengssmm11="2";

}else if(($mmx11 >='15' && $mmx11 <='21')){
$statusf1bengssmm11="3";

}else if(($mmx11 >='22' && $mmx11 <='28')){
$statusf1bengssmm11="3";

}else if(($mmx11 >='29'&& $mmx11 <='31')){
$statusf1bengssmm11="4";

}
$week=$statusf1bengssmm11;
?><?php

$query="select * from rushs where roll='1'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
?>

<?php  $db1=$row[1];


?>
<?php } ?><?php

$query="select * from matts where roll='1'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
?>

<?php  $mst=$row[1];
 $NJI= $mst+1;

?>
<?php } ?>
<?php
 $notes=$_SESSION['user_name'];
$roll=$_GET["1"];
$query="select * from users where full_name='$notes'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>
<?php  $ids=$row['fax'];


?>
<?php } ?>

<?php
$roll=$_GET["3"];
$query="select * from rush where roll='1'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
?>

<?php   $take=$row[1];
 
?>



<?php } ?>



<html>
<head>
<title>Users List</title>

    <link rel="stylesheet" type="text/css" href="w2ui-1.4.2.min.css" />
    <script src="jquery.min.js"></script>
    <script type="text/javascript" src="w2ui-1.4.2.min.js"></script>
<link rel="stylesheet" type="text/css" href="styles.css" />
</head>
<body>





<?php
$table = "marks";
$i = 0;
if(!empty($_POST["submit"]))
{
 foreach($_POST["id"] as $roll)
 {
  
  mysql_query("update attendance SET
              
			   

               timeoff='".$_POST['timeoff'][$i]."',
               specificity='".$_POST['specificity'][$i]."',
               remark='".$_POST['remark'][$i]."',
               hours='".$_POST['hours'][$i]."',
               timein='".$_POST['timein'][$i]."',
               course='".$_POST['course'][$i]."' 
			   where id='$roll'
               ");
  $i++;

               

  }

 

echo "<script>alert('Data Base Updated Successful!');</script>";

 echo  $statusf="<meta http-equiv='refresh' content='0; url=xm.php?usr_name=$user_name'>";
 exit;

 } 
?>











<h4>Course Instructor:-	<?php 
$qry = mysql_query("select  fname as total
from employer where matricule='$mmp' "); 
$row = mysql_fetch_assoc($qry); 
echo $richooTTT=$row['total']; ?><?php 
$qry = mysql_query("select  category as total
from employer where matricule='$mmp' "); 
$row = mysql_fetch_assoc($qry); 
$richooTTTs=$row['total']; ?>

<?php 
$qry = mysql_query("select  salry as total
from salary where cats='$richooTTTs' "); 
$row = mysql_fetch_assoc($qry); 
$price=$row['total']; ?>









<?php
 $sql = "SELECT * FROM attendance where fname='$mmp' order by fname  ASC";
$results = mysql_query($sql);
while($row = mysql_fetch_assoc($results))
{
 $id_array[] = $row["id"];
 $fname_array[] = $row["fname"];
  $category_array[] = $row["category"];
 $course_array[] = $row["course"];
 $days_array[] = $row["days"];
 $month_array[] = $row["month"];
 $year_array[] = $row["year"];
 $timein_array[] = $row["timein"];
 $remark_array[] = $row["remark"];
 $timeoff_array[] = $row["timeoff"];
 $department_array[] = $row["department"];
 $specificity_array[] = $row["specificity"];$c111_array[] = $row["c111"];
 }
 echo "<form action='inotsspp.php' method='post'>
       ";
for($i=0;$i<count($id_array);$i++)
{
 $roll = $id_array[$i];
 $fname = $fname_array[$i];
 $course = $course_array[$i];
 
 $days = $days_array[$i];
 $month = $month_array[$i];
 
 $category = $category_array[$i];
 $timein = $timein_array[$i];
 $year = $year_array[$i];
 $remark = $remark_array[$i];
 $timeoff = $timeoff_array[$i];
 $remark = $remark_array[$i];
 $department = $departmet_array[$i];
 $specificity = $specificity_array[$i];
 $c111 = $c111_array[$i];

?>
        <div style='float:left; width:732; background:#f4f4f4; font-size:12px; color:#686868; font-family:arial; text-translevels:UPPERCASE;  '>
     <a href="#" class="clock" style="color:#686868;">   <div style='float:left;width:300px; '>
		
		<input type='hidden' name='id[]' value='<?php echo	$roll;?>'></div>
        <div style='float:left;width:100px; height:25px; '>
	<?php echo	$fname;?>
</div>
<div style='float:left;width:170px; height:25px;'>

 <input type='text' name='timein[]' value='<?php echo	$mm=$timein;?> ' size='4'  maxlength='6'>
 <input type='text' name='sss[]' value='<?php echo	$month;?>-<?php echo	$year;?> ' size='15'  maxlength='6'>
 
</div>

<div style='float:left;width:70px; height:25px;'>
 <input type='text' name='specificity[]' value='<?php echo	$m1=$specificity;?> ' size='8'  maxlength='6'>

</div>

<div style='float:left;width:70px; height:25px;'>
 <input type='text' name='timeoff[]' value='<?php echo	$mm=$timeoff;?> ' size='8'  maxlength='6'>

</div><div style='float:left;width:70px; height:25px;'>
 <input type='text' name='course[]' value='<?php echo	$course;?> ' size='8'  maxlength='6' readonly='readonly'>

</div><div style='float:left;width:70px; height:25px;'>
 <input type='text' name='hours[]' value='<?php echo	$iki=(($mm-$m1)/100);?> ' size='8'  maxlength='6'readonly='readonly'>

</div>
<div style='float:left;width:70px; height:25px;'>
 <input type='text' name='hourssf[]' value='<?php echo	($iki*$price);?> ' size='8'  maxlength='6'readonly='readonly'>

</div>


<div style='float:left;width:70px; height:25px;'>
 <input type='text' name='remark[]' value='<?php echo $remark;
 
 
 
 
 
 
 
 
 ?> ' size='38'  >

</div>
 <div style='float:left; width:932; border-bottom:1px solid #ccc;'></div><?php
 }
 
echo "<input type='submit' name='submit' value='Submit'></form>";
?>

       
</form>
<script type="text/javascript">
$(function () {
    $('#form').w2form({ 
        name   : 'form',
       
        url    : 'server/post',
        fields : [
            { field: 'first_name', type: 'text', required: true },
            { field: 'last_name',  type: 'text', required: true },
            { field: 'comments',   type: 'text'},
            { field: 'address1', type: 'text', required: true },
            { field: 'address2', type: 'text' },
            { field: 'city', type: 'text', required: true },
            { field: 'state', type: 'text', required: true },
            { field: 'zip', type: 'int', required: true },
            { field: 'short_bio', type: 'text' },
            { field: 'talk_name', type: 'text', required: true },
            { field: 'description', type: 'text' }
        ],
        actions: {
            reset: function () {
                this.clear();
            },
            save: function () {
                this.save();
            }
        }
    });
});
</script>
</div>
</body></html>