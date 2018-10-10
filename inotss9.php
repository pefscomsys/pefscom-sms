<?php

include 'dbcs.php';

page_protect();


 $notes=$_SESSION['user_name'];

$user_name=$notes;
$mmp=$_GET['roll'];



 $ip=@$_SERVER['REMOTE_ADDR'];
 

$result = mysql_query("SELECT * FROM courses where fname>'' order by fname ASC");
?><?php

$query="select * from rushss where roll='1'";
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
$query="select * from rushss where roll='1'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
?>

<?php   $take=$row[1];
 
?>



<?php } ?>

<?php
$roll=$_GET["3"];
$query="select * from rushss where roll='1'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
?>

<?php   $ssss=$row[1];
 
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
$matricule=$_POST['matricule'];$ids=$_POST['ids'];
$amount_paid=$_POST['amount_paid'];
$paid=$_POST['paid'];$sex=$_POST['sex'];$mop=$_POST['mop'];
$fname=$_POST['fname'];$mops=$_POST['mops'];
$regfee=$_POST['regfee'];
$department=$_POST['department'];$expected_amount=$_POST['expected_amount'];
$barcode=$_POST['barcode'];$levels=$_POST['levels'];
$fmms="3";
$trans="Fees";

$month=date("m");

$day=date("j");
$y=date("Y");
$time=date("H:i:s");
$dates=date("Y-m-j");
if($fname!=""){
$tm=($amount_paid+$paid+$regfee);
$bbs=($tm-22500);


$mxc11i=$bbs;
if(empty($mxc11i)){
 $statusfbioRT="REGISTRATION FEE";
}

elseif($mxc11i>='0' && $mxc11i<='0'){

 $statusfbioRT="REGISTRATION FEE";

}


elseif($mxc11i>='22500' && $mxc11i<='22500' && $levels>='200' && $levels<='200'){

 $statusfbioRT="REGISTRATION FEE";
$amount2="20000"; 

$sunion="2500"; 

}
elseif($mxc11i>='22500' && $mxc11i<='22500' && $levels>='300' && $levels<='300'){

 $statusfbioRT="REGISTRATION FEE";
$amount2="20000"; 

$sunion="2500"; 

}



elseif($mxc11i>='25000' && $mxc11i<='25000' && $levels>='400' && $levels<='400'){

 $statusfbioRT="REGISTRATION FEE";
$amount2="22500"; 

$sunion="2500"; 

}


elseif($mxc11i>'25000'  && $levels>='400' && $levels<='400'){

 $statusfbioRT="REGISTRATION FEE & PART TUTION";
$amount2="22500"; 

$sunion="2500"; 

}

elseif($mxc11i>'22500'  && $levels>='300' && $levels<='300'){

 $statusfbioRT="REGISTRATION FEE & PART TUTION";
$amount2="20000"; 

$sunion="2500"; 

}


elseif($mxc11i>'22500'  && $levels>='200' && $levels<='200'){

 $statusfbioRT="REGISTRATION FEE & PART TUTION";
$amount2="20000"; 

$sunion="2500"; 

}

$balances=($expected_amount-$tm);

$tms=($amount_paid+$paid);
$tmk=$tms;
$query4="insert into barcode set  
barcode='$barcode',db1='$db1',
matricule='$matricule',extra='1'";

$query555="insert into courses  set  
matricule='$matricule',fname='$fname',
levels='$levels',departmet='$department',sex='$sex',db1='$ssss',c110='$ids'  ";



mysql_query ($query555) or die ('could not updated:'.mysql_error());
echo "<script>alert('Update Created Successfully!'); </script>";
 
 echo  $statusf="<meta http-equiv='refresh' content='0; url=inotss9.php?usr_name=$mats'>";

}
?>
<?php
$search=$_POST["search"];
$flag=0;
$query="select * from admission where recid='$mmp' and country='' ";
$result=mysql_query($query);
$i=0;
 while ($row = mysql_fetch_array($result)) {

?>
<form name="frmUser" method="post" action="inotss9.php">
<fieldset>
<legend>Add Student Financial Record -</legend>
    <div class="w2ui-page page-0" style="float:left;width:560px;">
<?php
if($i%2==0)
$classname="evenRow";
else
$classname="oddRow";
?>
				
                <div class="w2ui-field w2ui-span4">
                    <label style="float:left;width:200px;">Student Full Names:</label>
 




 <div> <input type="text" name="fname" value="<?php echo $names=$row['fname'];
 
 $levels=$row['extra'];
 
 $mxc118k=$row['department'];
 
 if(empty($mxc118k)){
 }
elseif($mxc118ku>='01' && $mxc118k<='01'  ){
$content='01';
$statusfbiomxc118k="ACCOUNTANCY"; $statusfee="325000"; 
}elseif($mxc118k>='011' && $mxc118k<='011'  ){
$content='01';
$statusfbiomxc118k="ACCOUNTANCY"; 
$statusfbiomxc118k1yy='27';$statusfee="325000"; 
}
elseif($mxc118k>='02' && $mxc118k<='02'  ){
$content='02';
$statusfbiomxc118k="BANKING AND FINANCE"; 
}elseif($mxc118k>='022' && $mxc118k<='022'  ){
$statusfbiomxc118k1yy='27';$content='02';
$statusfbiomxc118k="BANKING AND FINANCE"; 
$statusfee="325000"; 
}
elseif($mxc118k>='03' && $mxc118k<='03'  ){
$statusfbiomxc118k1yy='27';$content='03';
$statusfbiomxc118k="INSURANCE"; $statusfee="340000"; 
}
elseif($mxc118k>='033' && $mxc118k<='033'  ){
$statusfbiomxc118k1yy='27';$content='03';
$statusfbiomxc118k="INSURANCE"; $statusfee="340000"; 
}
elseif($mxc118k>='04' && $mxc118k<='04'  ){
$content='04';
$statusfbiomxc118k="MANAGEMENT"; 
}elseif($mxc118k>='044' && $mxc118k<='044'  ){
$statusfbiomxc118k1yy='27';$content='04';
$statusfbiomxc118k="MANAGEMENT"; $statusfee="315000"; 
}
elseif($mxc118k>='05' && $mxc118k<='05'  ){
$content='05';
$statusfbiomxc118k="MARKETING";  $statusfee="315000"; 
}
elseif($mxc118k>='055' && $mxc118k<='055'  ){
$statusfbiomxc118k1yy='27';$content='05';
$statusfbiomxc118k="MARKETING";  $statusfee="315000"; 
}
 
 ?>" size="35">



</div>


</div>


		
                <div class="w2ui-field w2ui-span4">
                    <label style="float:left;width:200px;">Matricule:</label>
 




 <div> <input type="text" name="matricule" value="<?php  $levels=$row['extra'];
 
 
 echo $row['matricule'];
 
 
 ?>" size="35">



</div>

</div>

                <div class="w2ui-field w2ui-span4">
                    <label style="float:left;width:200px;">Department:</label>
 

<input type="hidden" name="levels" value="<?php echo $levels;?>">

<input type="hidden" name="sex" value="<?php echo $sex;?>">

<input type="hidden" name="barcode" value="<?php echo "$mm$mu$statusfbiomxc161";?>">
 <div> <input type="text" name="department" value="<?php echo $statusfbiomxc118k;
 
 
 
 
 
 
 
 
 
 
 
 
 ?>" size="35">



</div>

</div>







                <div class="w2ui-field w2ui-span4">
                    <label style="float:left;width:200px;">Registration Fees</label>
 




 <div> <input type="text" name="regfee" value="27500" size="35">



</div>

</div>

                <div class="w2ui-field w2ui-span4">
                    <label style="float:left;width:200px;">Expecteed Amount</label>
 




 <div> <input type="text" name="expected_amount" value="<?php 

$qry = mysql_query("select expected_amount as total
from historic where matricule='$mats' and amountpaid='$deptt' and  oldb='$take'  "); 
$row = mysql_fetch_assoc($qry); 
echo $save=$row['total']; ?>"


</div>

</div>






                <div class="w2ui-field w2ui-span4">
                    <label style="float:left;width:200px;">Amount Paid</label>
 




 <div> <input type="text" name="amount_paid" value="<?php 

$qry = mysql_query("select amount_paid as total
from historic where matricule='$mats' and amountpaid='$deptt' and  oldb='$take'  "); 
$row = mysql_fetch_assoc($qry); 
echo $save=$row['total']; ?>" size="35">



</div>

</div>

                <div class="w2ui-field w2ui-span4">
                    <label style="float:left;width:200px;">Balance</label>
 




 <div> <input type="text" name="balance" value="<?php 

$qry = mysql_query("select balance as total
from historic where matricule='$mats' and amountpaid='$deptt' and  oldb='$take'  "); 
$row = mysql_fetch_assoc($qry); 
 $saveuiii=$row['total'];

echo ($saveuiii);


 ?>" size="35">



</div>

</div>

<input type="hidden" name="mops" value="<?php echo $mops;?>" size="35">
<input type="hidden" name="mop" value="<?php echo $statusfbiomxc111yuj;?>" size="35">
 <div> 



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