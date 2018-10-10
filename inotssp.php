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
<body><?php
$matricule=$_POST['matricule'];
$fname=$_POST['fname'];
$ffy=$matricule;
$levels=$_POST['levels'];
$department=$_POST['department'];
$remark=$_POST['remark'];
$coursecode=$_POST['coursecode'];
$ids=$_POST['ids'];

$specificity=$_POST['specificity'];
$timeout=$_POST['timeout'];
$timeoff=$_POST['timeoff'];$rdays=$_POST['rdays'];
$day=$_POST['day'];
$months=$_POST['month'];

$year=$_POST['year'];


$time=date("H:i:s");
$dates=date("Y-m-j");




$qrykjf= mysql_query("select * FROM  courstitle where (days>='$rdays' && days<='$rdays')  and department='$department' and  levels='$levels'"); 
$num_rowspo=mysql_num_rows($qrykjf);
 ECHO $jobg=$num_rowspo;


if($fname!=""){





 
 $qry2 = mysql_query("select tutor as total  FROM  countat where
months='$month' and ids='$ids' and db1='$db1'and week='$week'and total='$jobg' and days='$days' and decodes='$statusfbio' and department='$department' and years='$year' and year='$day' and tutor='$ffy' and levels='$levels' and course='$coursecode' "); 
$row = mysql_fetch_assoc($qry2); 
 $sends=$row['total']; 







 $qryf2 = mysql_query("select fname as total  FROM  attendance  where
 fname='$ffy' and timein='$day' and timeout='$specificity' and week='$week' and month='$month' and year='$year' and course='$coursecode' and db1='$db1' and present='1' and levels='$levels' and ids='$ids' and specificity='$specificity' and timeoff='$timeoff' and  department='$department'");
$row = mysql_fetch_assoc($qryf2); 
  echo $sendss=$row['total']; 





 



 $mxc11trr=$sendss; 
 
if(empty($mxc11trr)){
 
$statusfbioffa="insert into attendance set  fname='$ffy',timein='$day',timeout='$specificity',week='$week',month='$months',year='$year',course='$coursecode',db1='$db1',present='1',levels='$levels',ids='$ids',specificity='$specificity',timeoff='$timeoff', department='$department'";
}
elseif(($mxc11trr>""  ))
{


}

 
 $qry2 = mysql_query("select tutor as total  FROM  countat where
months='$month' and ids='$ids' and db1='$db1'and week='$week'and total='$jobg' and days='$days' and decodes='$statusfbio' and department='$department' and years='$year' and year='$day' and tutor='$ffy' and levels='$levels' and course='$coursecode' "); 
$row = mysql_fetch_assoc($qry2); 
 $sends=$row['total']; 



 $mxc11tr=$sends; 
 
if(empty($mxc11tr)){
 
$statusfbioff="insert into countat set  months='$month',ids='$ids', db1='$db1', week='$week', total='$jobg' , days='$days',decodes='$statusfbio', department='$department',years='$year', year='$day',tutor='$ffy', levels='$levels',course='$coursecode'";
}
elseif(($mxc11tr>""  ))
{

$statusfbioff="update countat set total='$jobg' where 
months='$month' and ids='$ids' and db1='$db1'and week='$week'and total='$jobg' and days='$days' and decodes='$statusfbio' and department='$department' and years='$year' and year='$day' and tutor='$ffy' and levels='$levels' and course='$coursecode' "; 


}















mysql_query ($statusfbioffa) or die ('Sorry Please You have record this Hours');

mysql_query ($statusfbioff) or die ('');

echo "<script>alert('Updated Created Successfully!'); </script>";
 
 echo  $statusf="<meta http-equiv='refresh' content='0; url=xm.php?usr_name=$mats'>";

}
?>
<?php
$search=$_POST["search"];
$flag=0;
$query="select * from employer where matricule='$mmp' ";
$result=mysql_query($query);
$i=0;
 while ($row = mysql_fetch_array($result)) {

?>
<form name="frmUser" method="post" action="inotssp.php">
<fieldset>
<legend>Enter Hourse Earn-</legend>
    <div class="w2ui-page page-0" style="float:left;width:560px;">
<?php
if($i%2==0)
$classname="evenRow";
else
$classname="oddRow";
?>
				
                <div class="w2ui-field w2ui-span4">
                    <label style="float:left;width:200px;">Full Names of Tutor:</label>
 




 <div> <input type="text" name="fname" value="<?php echo $row['fname'];?>" size="35">



</div>


</div>


		
                <div class="w2ui-field w2ui-span4">
                    <label style="float:left;width:200px;">Matricule:</label>
 




 <div> <input type="text" name="matricule" value="<?php  echo $mxx=$row['matricule'];
 
 
 
 ?>" size="35">



</div>

</div>

                <div class="w2ui-field w2ui-span4">
                    <label style="float:left;width:200px;">Department:</label>
 
<div>
<select name="department">
<?php
$rs=mysql_query("Select * from classes  order by  roll ASC",$link);
	  while($row=mysql_fetch_array($rs))
{
if($row[1]==$fees)
{
echo "<option value='$row[1]' selected>$row[1]</option>";
}
else
{
echo "<option value='$row[1]'>$row[1]</option>";
}
}
?></select>


</div>

</div>







                <div class="w2ui-field w2ui-span4">
                    <label style="float:left;width:200px;">Enter Date</label>
 




 <div> <input type="text" name="day" value="" size="15" placeholder="dd">
<input type="text" name="month" value="<?php echo date('M');?>" size="15" placeholder="MM">
<input type="text" name="year" value="<?php echo date('Y');?>" size="15" placeholder="YY">


</div>

</div>

                <div class="w2ui-field w2ui-span4">
                    <label style="float:left;width:200px;">DAY OF THE MONTH</label>
 




 <div> 


<select name="rdays"style="background:#ccc;" class="required"   id="select8">
               
                <option value="MONDAY">MONDAY</a></option>
                <option value="TUESDAY">TUESDAY</option>
				
                <option value="WEDNESDAY">WEDNESDAY</option>
				
                <option value="THURSDAY">THURSDAY</option>
                <option value="FRIDAY">FRIDAY</option>
                <option value="SATURDAY">SATURDAY</option>
				
      </select></div></div>
                <div class="w2ui-field w2ui-span4">
                    <label style="float:left;width:200px;">Time IN</label>
 




 <div> <input type="text" name="specificity" value="" size="50" placeholder="e.g 7:30--> 0730 , 12:30-->1230, 1:30-->1330">



</div>

</div>






                <div class="w2ui-field w2ui-span4">
                    <label style="float:left;width:200px;">Time Out</label>
 




 <div> <input type="hidden" name="ids" value="2" size="50"><input type="text" name="timeoff" value="" size="50">



</div>

</div>


                <div class="w2ui-field w2ui-span4">
                    <label style="float:left;width:200px;">Levels</label>
 




 <div> 
<select name="levels">
<?php
$rs=mysql_query("Select * from levels  order by  roll ASC",$link);
	  while($row=mysql_fetch_array($rs))
{
if($row[1]==$fees)
{
echo "<option value='$row[1]' selected>$row[1]</option>";
}
else
{
echo "<option value='$row[1]'>$row[1]</option>";
}
}
?>

</select>

</div>
</div>
                <div class="w2ui-field w2ui-span4">
                    <label style="float:left;width:200px;">Course Code</label>
 




 <div> 
<select name="coursecode">
<?php
$rs=mysql_query("Select * from subject  where db1>''  order by  department ASC",$link);
	  while($row=mysql_fetch_array($rs))
{
if($row[1]==$fees)
{
echo "<option value='$row[2]' selected>$row[1]-$row[3]-$row[4]</option>";
}
else
{
echo "<option value='$row[2]'>$row[1]-$row[3]-$row[4]</option>";
}
}
?>

</select>

</div>

</div>
                <div class="w2ui-field w2ui-span4">
                    <label style="float:left;width:200px;">Remark</label>
 




 <div> <input type="text" name="remark" value="" size="35">



</div>

</div>

    <div class="w2ui-buttons">
        <button class="w2ui-btn" name="save" size="250px" style="flot:left; width:200px; height:30px;">Save</button>
    </div>
</div>
</fieldset>






















</table>
</form>
</div>
    <div class="w2ui-page page-0" style="float:left;width:200px; margin-left:650px;margin-top:-350px;">
 <?php 
				
				$qry = mysql_query("select id as total
from emplopic where empname='$mxx'  "); 
$row = mysql_fetch_assoc($qry); 
 $savep4=$row['total']; 
				?>
										<img src="load_images.php?pic_id=<?php echo $savep4;?>" width="200px" height="125p" style="border:1px solid #000;box-shadow:1px 1px 1px #fff;">
</div>

        <div style="clear: both; padding-top: 15px;">
           
                </div> 
<?php } ?>

       
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