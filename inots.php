<?php

include 'dbcs.php';

page_protect();


 $notes=$_SESSION['user_name'];

$user_name=$notes;
$mmp=$_GET['roll'];



 $ip=@$_SERVER['REMOTE_ADDR'];
 

$result = mysql_query("SELECT * FROM courses where fname>'' order by fname ASC");
?>
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
$query="select * from rushss where roll='1'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
?>

<?php   $taked=$row[1];
 
?>



<?php } ?>


<?php
$search=$_POST["search"];
$flag=0;
$query="select * from courses where roll='$mmp' ";
$result=mysql_query($query);
$i=0;
 while ($row = mysql_fetch_array($result)) {

?>
<html>
<head>
<title>Users List</title>

    <link rel="stylesheet" type="text/css" href="w2ui-1.4.2.min.css" />
    <script src="jquery.min.js"></script>
    <script type="text/javascript" src="w2ui-1.4.2.min.js"></script>
<link rel="stylesheet" type="text/css" href="styles.css" /><style>
input {
 
  display: block;
  border: 1px solid #999;
  height: 25px;
  -webkit-box-shadow: 0px 0px 8px rgba(0, 0, 0, 0.3);
  -moz-box-shadow: 0px 0px 8px rgba(0, 0, 0, 0.3);
  box-shadow: 0px 0px 8px rgba(0, 0, 0, 0.3);
}
</style>
</head>
<body>
<form name="frmUser" method="post" action="askof.php">
<fieldset style="margin-top:150px;">
<legend>Update Fees -</legend>
    <div class="w2ui-page page-0" style="float:left;width:560px; ">
<?php
if($i%2==0)
$classname="evenRow";
else
$classname="oddRow";
?>
				
                <div class="w2ui-field w2ui-span4">
                    <label style="float:left;width:200px;">Student Full Names:</label>
 


<?php $take=$row['db1'];?>

 <div> <input type="text" name="fname" value="<?php echo $row['fname'];?>" size="35">
 <input type="hidden" name="roll" value="<?php 
 $deptt=$row['departmet'];$mats= $row['matricule'];$levels=$row['levels'];
$qry = mysql_query("select roll as total
from historic where matricule='$mats' and amountpaid='$deptt'  and class='$levels' and oldb='$take' "); 
$row = mysql_fetch_assoc($qry); 
 echo $frankk=$row['total'];
 ;?>" size="35">
 
 
 
<?php
$query="select * from courses where roll='$mmp' ";
$result=mysql_query($query);
$i=0;
 while ($row = mysql_fetch_array($result)) {

?>

</div>


</div>

                <div class="w2ui-field w2ui-span4">
                    <label style="float:left;width:200px;">Levels</label>
 




<input type="hidden" name="takes" value="<?php echo $take=$row['db1'];?>" size="35">

 <div> <input type="text" name="levels" value="<?php echo $levels=$row['levels'];?>" size="35">



</div>

</div>


		
                <div class="w2ui-field w2ui-span4">
                    <label style="float:left;width:200px;">Matricule:</label>
 




 <div> <input type="text" name="matricule" value="<?php echo $mats=$row['matricule'];?>" size="35">



</div>

</div>

                <div class="w2ui-field w2ui-span4">
                    <label style="float:left;width:200px;">Department:</label>
 


<input type="hidden" name="ids" value="<?php echo $ids;?>" size="35">


 <div> <input type="text" name="department" value="<?php echo $deptt=$row['departmet'];?>" size="35">



</div>

</div>





                <div class="w2ui-field w2ui-span4">
				
				
				
                    <label style="float:left;width:200px;">Balance Brought Forward</label>
 




 <div> <input type="text"  readonly='readonly' name="famount" value="<?php 

 $mxc11UIS=$levels;
if(empty($mxc11UIS)){

 $statusfbiomxc11UIS="";}
elseif($mxc11UIS>='300' && $mxc11UIS<='300'){

$statusfbiomxc11UIS="200"; 
}
elseif($mxc11UIS>='400' && $mxc11UIS<='400'){

 $statusfbiomxc11UIS="300"; 
}


$qry = mysql_query("select sum(expected_amount-amount_paid) as total
from historic where matricule='$mats' and class='$statusfbiomxc11UIS'  "); 
$row = mysql_fetch_assoc($qry); 
echo $saveui=$row['total']; ?>" size="35">



</div>

				
				
				
				
				
				
				
				
				
                    <label style="float:left;width:200px;">Expecteed Amount</label>
 




 <div> <input type="hidden"  readonly='readonly' name="expected_amount" value="<?php 

$qry = mysql_query("select expected_amount as total
from historic where matricule='$mats' and amountpaid='$deptt'  and class='$levels' and oldb='$take'  "); 
$row = mysql_fetch_assoc($qry); 
 echo $saveh=$row['total']; ?>" size="35">
  <input type="text"  name="expected_amounst" value="<?php echo ($saveh-$saveui); ?>">



</div>

</div>




                <div class="w2ui-field w2ui-span4">
                    <label style="float:left;width:200px;">Scholarship Amount</label>
 

<?php 

$qry = mysql_query("select sum(scholarship) as total
from balancesheet where fname='$mats' and  db1='$take'  "); 
$row = mysql_fetch_assoc($qry); 
$savee4=$row['total']; 
$mxc11=$savee4;

if(empty($mxc11)){
 $statusfbio="<input type='text'   name='scholarship' value='' size='35' placeholder='0 for non Scholarship, >0 for Scholars'
";}
elseif($mxc11>'' ){
 $statusfbio="<input type='text' readonly='readonly'  name='scholarships' value='$mxc11' size='35' placeholder='0 for non Scholarship, >0 for Scholars'
";;
}


?>


 <div> <?php 

echo $statusfbio; ?>


</div>

</div>

</div>




                <div class="w2ui-field w2ui-span4">
                    <label style="float:left;width:200px;">Scholarship Valid Period</label>
 

<?php 

$qry = mysql_query("select period as total
from scholarship where fname='$mats' and  db1='$take'  "); 
$row = mysql_fetch_assoc($qry); 
$saveu4=$row['total']; 
$mxc11=$saveu4;

if(empty($mxc11)){
 $statusfbio="<input type='text'   name='period' value='' size='35' placeholder='1 or 2 (year)s'
";}
elseif($mxc11>'' ){
 $statusfbio="<input type='text' readonly='readonly'  name='periods' value='$mxc11' size='35' placeholder='0 for non Scholarship, >0 for Scholars'
";;
}


?>


 <div> <?php 

echo $statusfbio; ?>


</div>

</div>

</div>




                <div class="w2ui-field w2ui-span4">
                    <label style="float:left;width:200px;">Total Paid</label>
 




 <div> 
 <input type="hidden" name="amount_paid" readonly='readonly' value="<?php 

$qry = mysql_query("select (amount_paid) as total
from historic where matricule='$mats' and amountpaid='$deptt'  and class='$levels' and oldb='$take' "); 
$row = mysql_fetch_assoc($qry); 
echo $savea=$row['total']; ?>" size="35">


 
 
 <input type="text" name="amount_paids" readonly='readonly' value="<?php 
 
echo ($savea); ?>" size="35">



</div>

</div>

                <div class="w2ui-field w2ui-span4">
                    <label style="float:left;width:200px;">Balance</label>
 




 <div> <input type="text" name="balance" readonly='readonly' value="<?php 

echo $bals=($saveh-($savea  ));?>" style="background:red;color:#fff;"size="35">



</div>

</div>

                <div class="w2ui-field w2ui-span4">
                    <label style="float:left;width:200px;">Bank Receipt</label>
 




 <div> <input type="checkbox" name="cashed" readonly='readonly' value="1" style="background:#fff;" required='required'>
</div>

</div>

                <div class="w2ui-field w2ui-span4">
                    <label style="float:left;width:200px;">New Installment</label>
 <?php
 
 $mxc111=$bals;

if(empty($mxc111)){ $statusfbiopb="button";
 $statusfbiop="<input type='text'   name='paid' value='Sorry $notes! Record Completed'readonly='readonly' size='35' value=''>

";}
elseif($mxc111>'' ){$statusfbiopb="submit";
 $statusfbiop="<input type='text'   name='paid' value='' placeholder='Enter Amount to pay here'size='35' value=''>
";
}
?>



 <div>                    
 <?php
 
echo $statusfbiop;?>



</div>

</div>

    <div class="w2ui-buttons">
        <button class="w2ui-btn" name="save" type="<?php
 
echo $statusfbiopb;?>" size="250px" style="flot:left; width:200px; height:30px;">Save</button>
    </div>
</div>
</fieldset>






















</table>
</form>
</div>
    <div class="w2ui-page page-0" style="float:left;width:200px; margin-left:600px;margin-top:-460px;">
 <?php 
				 $mxx=$mats;
				$qry = mysql_query("select id as total
from employees where empname='$mxx'  "); 
$row = mysql_fetch_assoc($qry); 
 $savep4=$row['total']; 
				?>
										<img src="load_image.php?pic_id=<?php echo $savep4;?>" width="200px" height="125p" style="border:1px solid #000;box-shadow:1px 1px 1px #fff;">
</div>

        <div style="clear: both; padding-top: 15px;">
           
                </div> 
<?php } 
}
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