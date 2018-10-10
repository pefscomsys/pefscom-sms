<?php

include 'dbcs.php';
$ms=$_GET['roll'];
page_protect();


 $notes=$_SESSION['user_name'];

$user_name=$notes;
if(@$_SESSION['userlevel']!=5){header("location: login.php?error=Unauthorized access");}




 $ip=@$_SERVER['REMOTE_ADDR'];
 
 ?>
<html>
<head>
<title>Create Expenditure List</title>

    <link rel="stylesheet" type="text/css" href="w2ui-1.4.2.min.css" />
    <script src="jquery.min.js"></script>
    <script type="text/javascript" src="w2ui-1.4.2.min.js"></script>
<link rel="stylesheet" type="text/css" href="styles.css" />
</head>
<body><?php
 $status=$_POST['status'];
$motive=$_POST['motive'];
$quantity=$_POST['quantity'];
$idcard=$_POST['idcard'];
$expected_amount=$_POST['expected_amount'];
$contact=$_POST['contact'];
$paid=$_POST['paid'];






if(empty($status)){
	
}elseif($status>''){
	
$querys="insert into [cg2015].[dbo].[exs] 
(status,motive,quantity,idcard,expected_amount,contact,paid)
values
('$status','$motive','$quantity','$idcard','$expected_amount','$contact','$paid')

";

mssql_query($querys);

echo "<script>alert('Expenditure Save!'); </script>";

 echo "<meta http-equiv='refresh' content='0; url=inotsss.php?mat=$mat&date=$dates&afolk=$paid&deptf=$department&db1=$year&fname=$fname'>";
}
?>
<form name="frmUser" method="post" action="inotsss.php">
<fieldset>
<legend>Record Expenditure-</legend>
    <div class="w2ui-page page-0" style="float:left;width:560px;">
<?php
if($i%2==0)
$classname="evenRow";
else
$classname="oddRow";
?>
				
                <div class="w2ui-field w2ui-span4">
                    <label style="float:left;width:200px;">Staff or Contractor Name:</label>
 




 <div> <input type="text" name="status" value="" size="35">



</div>


</div>


		
                <div class="w2ui-field w2ui-span4">
                    <label style="float:left;width:200px;">Motive/ Reason</label>
 




 <div> <input type="text" name="motive" value="" size="35">

</div>

</div>

                <div class="w2ui-field w2ui-span4">
                    <label style="float:left;width:200px;">Quantity of Item</label>
 

 <div> <input type="text" name="quantity" value="" size="35">



</div>

</div>







                <div class="w2ui-field w2ui-span4">
                    <label style="float:left;width:200px;">Idcard No</label>
 




 <div> <input type="text" name="idcard" value="" size="35">



</div>

</div>

                <div class="w2ui-field w2ui-span4">
                    <label style="float:left;width:200px;">Expecteed Amount</label>
 




 <div> <input type="text" name="expected_amount" value="">



</div>

</div>






                <div class="w2ui-field w2ui-span4">
                    <label style="float:left;width:200px;">Contact No</label>
 




 <div> <input type="text" name="contact" value="" size="35">



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