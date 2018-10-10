<?php

include 'dbcs.php';

page_protect();


 $notes=$_SESSION['user_name'];

$user_name=$notes;
$mmp=$_GET['roll'];



 $ip=@$_SERVER['REMOTE_ADDR'];
 

$result = mysql_query("SELECT * FROM courses where fname>'' order by fname ASC");
?>
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
$matricule=$_POST['matricule'];
$amount_paid=$_POST['amount_paid'];
$paid=$_POST['paid'];$sex=$_POST['sex'];
$status=$_POST['status'];
$regfee=$_POST['regfee'];$idcard=$_POST['idcard'];
$expenditure=$_POST['expenditure'];
$amount=$_POST['paid'];
$contact=$_POST['contact'];
$quantity=$_POST['quantity'];$motive=$_POST['motive'];
$expected_amount=$_POST['expected_amount'];
$month=date("m");
$paidf=$_POST['paidf'];
$day=date("j");
$y=date("Y");
$time=date("H:i:s");
$dates=date("Y-m-j");
if($status!=""){
$tm=($paid+$paidf);


$balances=($expected_amount-$tm);



$query5="insert into balancesheet  set  
id='5',name='EXPENDITURE',
date='$dates',month='$month',day='$day',db1='$db1',status='$status',time='$time'
,year='$y'   ,idcardno='$idcard' ,quantity='$quantity',expenditure='$amount',motive ='$motive'                    ";


$query555="update exm  set  paid='$tm',balance='$balances',motive ='$motive',idcard='$idcard', quantity='$quantity',contact='$contact' where fname='$status'";


mysql_query ($query555) or die ('could not updated:'.mysql_error());

mysql_query ($query5) or die ('could not updated:'.mysql_error());

echo "<script>alert('Expenditure Created Successfully!'); </script>";
 
 echo  $statusf="<meta http-equiv='refresh' content='0; url=updatebbb.php?usr_name=$mats'>";

}
?>
<?php
$search=$_POST["search"];
$flag=0;
$query="select * from exm where roll='$mmp'  ";
$result=mysql_query($query);
$i=0;
 while ($row = mysql_fetch_array($result)) {

?>
<form name="frmUser" method="post" action="inotssd.php">
<fieldset>
<legend>Update Expenditure Record-</legend>
    <div class="w2ui-page page-0" style="float:left;width:560px;">
<?php
if($i%2==0)
$classname="evenRow";
else
$classname="oddRow";
?>
				
                <div class="w2ui-field w2ui-span4">
                    <label style="float:left;width:200px;">Staff or Contractor Name:</label>
 




 <div> <input type="text" name="status" value="<?php echo $row['fname'];?>" size="35">



</div>


</div>


		
                <div class="w2ui-field w2ui-span4">
                    <label style="float:left;width:200px;">Motive/ Reason</label>
 




 <div> <input type="text" name="motive" value="<?php echo $row['motive'];?>" size="35">



</div>

</div>

                <div class="w2ui-field w2ui-span4">
                    <label style="float:left;width:200px;">Quantity of Item</label>
 

 <div> <input type="text" name="quantity" value="<?php echo $row['quantity'];?>" size="35">



</div>

</div>







                <div class="w2ui-field w2ui-span4">
                    <label style="float:left;width:200px;">Idcard No</label>
 




 <div> <input type="text" name="idcard" value="<?php echo $row['idcard'];?>" size="35">



</div>

</div>

                <div class="w2ui-field w2ui-span4">
                    <label style="float:left;width:200px;">Expecteed Amount</label>
 




 <div> <input type="text" readonly='readonly' name="expected_amount" value="<?php echo $row['expected_amount'];?>">



</div>

</div>






                <div class="w2ui-field w2ui-span4">
                    <label style="float:left;width:200px;">Contact No</label>
 




 <div> <input type="text" name="contact" value="<?php echo $row['contact'];?>" size="35">



</div>

</div>


                <div class="w2ui-field w2ui-span4">
                    <label style="float:left;width:200px;">Amount Paid</label>
 




 <div> <input type="text" readonly='readonly' name="paidf" value="<?php echo $row['paid'];?>" size="35">



</div>

</div>

                <div class="w2ui-field w2ui-span4">
                    <label style="float:left;width:200px;">New Installment</label>
 




 <div> <input type="text" name="paid" value="" size="35">



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

        <div style="clear: both; padding-top: 15px;">
           
                </div> 


       
</form><?php } ?>
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