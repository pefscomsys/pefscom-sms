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
$rs_duplicate = mysql_query("select count(*) as total from hourss where    heads='".$_POST['heads'][$i]."' and
			   ss='".$_POST['ss'][$i]."' and
               matricule='".$_POST['matricule'][$i]."' and
               rates='".$_POST['rates'][$i]."'") or die(mysql_error());
list($total) = mysql_fetch_row($rs_duplicate);

if ($total > 0)
{
$err[] = "ERROR - This Course has been filled see the dean of studies! .";
//header("Location: finances.php?msg=$err");
//exit();
}



if(empty($err)) {
  
  mysql_query("insert into hourss 
  SET
              
			   

               heads='".$_POST['heads'][$i]."',
			   ss='".$_POST['ss'][$i]."',
               matricule='".$_POST['matricule'][$i]."',
               rates='".$_POST['rates'][$i]."'
               ");
  $i++;

               

  }
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







<form method="post" action="inotssppp.php">
<div id="form" style="width: 1300px; border:0px;">
    <div class="w2ui-page page-0"  style="width: 800px; ">
        <div style=" margin-right: 0px;">
            <div style="padding: 3px; font-weight: bold; color: #777;">Create Menu Item for Payslips</div>
            

<?php
 $sql = "SELECT * FROM money order by roll  ASC";
$results = mysql_query($sql);
while($row = mysql_fetch_assoc($results))
{
 $id_array[] = $row["roll"];
 
 $fullcontent_array[] = $row["fullcontent"];
 $rates_array[] = $row["rates"];
 
 
 $matricule_array[] = $row["matricule"];
 $heads_array[] = $row["heads"];
 }
 echo "<form action='#' method='post'>
       ";
for($i=0;$i<count($id_array);$i++)
{
 $roll = $id_array[$i];
 $heads = $heads_array[$i];
 $rates = $rates_array[$i]; $matricule = $matricule_array[$i];
 $fullcontent = $fullcontent_array[$i];
 ?>


		<input type='hidden' name='id[]' value='<?php echo $roll;?>'>
				 <div class="w2ui-field w2ui-span4">
                    <label>Activity <?php echo $roll;?>:</label>
                    <div>
					
                        <input name='heads[]' type="text" maxlength="100" value="<?php echo $heads;?>"style="width:10%"placeholder="#">
                        <input name='fullcontent[]' type="text" maxlength="100" value="<?php echo $fullcontent;?>"style="width:30%"placeholder="Description">
                        <input name='rates[]' type="text" maxlength="100" value="<?php echo $rates;?>"style="width:10%"placeholder="Rates">
				<input name='matricule[]' type="hidden" maxlength="100" value="<?php 
				
				
				
				
				
				
				
				
				
				echo $mmp;?>"style="width:10%"placeholder="Rates">
				
								<input name='ss[]' type="hidden" maxlength="100" value="<?php echo $matricule;?>"style="width:10%"placeholder="Rates">
                    </div>
					
                    </div><?php
 }
 
echo "<input type='submit' name='submit' value='Submit'></form>";
?>







</div>
 <div style='float:left; width:932; border-bottom:1px solid #ccc;'></div>

       
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