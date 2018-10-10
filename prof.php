<?php 
include 'dbc.php';
$ops=$_GET['roll'];
page_protect();


 $notes=$_SESSION['user_name'];


if(@$_SESSION['userlevel']!=111){header("location: login.php?error=Unauthorized access");}







?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Addmission Form</title>




<script src="jquery.min.js"></script>
<script src="jquery.preimage.js"></script>

<script>

$(document).ready(function()
{
	$('.file').preimage();
});

</script>

<style>
.prev_container{
	overflow: auto;
	width: 300px;
	height: 135px;
}

.prev_thumb{
	margin: 10px;
	height: 100px;
}
</style>
<style>
div.fileinputs {
	position: relative;
}

.submit{width:140px;
	background-color: #50c1e9;
	border: 1px solid rgba(0,0,0,.1);
	color: rgb(255,255,255);
	font-family: 'Varela Round', sans-serif;
	font-size: .95em;
	padding: .55em .9em;
	transition: all 600ms ease;	
}

	.submit:hover {
		background-color: #1bc5b3;
		cursor: pointer;
	}

div.fakefile {
	position: absolute;
	top: 0px;
	left: 0px;
	z-index: 1;
}

table,td{border:1px solid #ccc; color:#000;
font-size:12px;
}

input {
	top: 0px;
	left: 0px;
	padding: 2px 2px 2px 5px  #CCC;
}


.prev_thumb{
	margin: 10px;
	height: 100px;
}
</style>


<meta charset=utf-8 />


</head>













 <body onload='window.print();'>


<div style="width:700px; height:400px;">

</script>



<?php


$first_name = $_POST ['first_name'];


$code = $_POST ['xxx'];
$levels = $_POST ['class'];

$take = $_POST ['take'];
$expected_amount = $_POST ['expected_amount'];

$amount_paid = $_POST ['amoutn_paid'];

$balance = $_POST ['balance'];
$class = $_POST ['class'];
$matricule = $_POST ['matricule'];
$code= $_POST ['matricule'];
$extra = $_POST ['extra'];

$name1= $_POST ['name1'];
$last_name= $_POST ['last_name'];
$sex= $_POST ['sex'];
$newon2x = $_POST ['newon2x'];
$db1= $_POST ['db1'];
$month= $_POST ['month'];

$date2= $_POST ['month'];
$year= $_POST ['year'];
$date = $_POST ['date'];
$notesxs=$_POST['notesxs'];
$stayoff ='1';

$amountx=$newon2x+$extra;

$amounts=$expected_amount-$balance;

$amountxx=$balance-$newon2x;
if($newon2x!="")
{


$query1="insert into payment set  amount_paid='$amounts',
oldb='$db1',student_name='$first_name',

expected_amount='$expected_amount'

,

class='$class',


year='$year',

month='$month',

time='$tt1',

date='$date',
matricule='$matricule'
,
amountpaid='$notesxs',
olddebt='$ptich',balance='$balance'


";




 
 

$query2="update historic set  olddebt='1'
 where student_name='$first_name'";
 
 
 
 
 
 
 
 
 
$query11="insert into enrolement set  photo='$name1',
db1='$db1',first_name='$first_name',middle_name='$middle_name',

sex='$sex',last_name='$last_name',

year='$year',

month='$date2',

matricule='$matricule'

,

levels='$levels'

,departmet='$last_name'


";

$query12="insert into container set  photo='$name1',
db1='$db1',first_name='$first_name',middle_name='$middle_name',

sex='$sex',last_name='$last_name',

year='$year',
month='$date2'


,

levels='$levels'




,

matricule='$matricule'


,departmet='$last_name'

";
$query4="insert into courses set  photo='$name1',
db1='$db1',fname='$first_name',

sex='$sex'

,

levels='$levels',

barcode='$code',

c145='$balance',
cxx2='$year',matricule='$matricule'



,departmet='$last_name'


";





 
mysql_query ($query1) or die ('could not updated:'.mysql_error());

 
 
mysql_query ($query2) or die ('could not updated:'.mysql_error());
 
 
mysql_query ($query4) or die ('could not updated:'.mysql_error());
 
 
 
 
 
 
mysql_query ($query11) or die ('could not updated:'.mysql_error());

 
 
mysql_query ($query12) or die ('could not updated:'.mysql_error());
 
 
 
 


echo "<script>alert('Admission Successful!');</script>";


 echo "<meta http-equiv='refresh' content='0; url=confirm.php'>";
}
?>








<?php
$roll=$_GET["1"];
$query="select * from rushs where roll='1'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>
<b>
<?php  $take=$row[1];



?>
<?php } ?>






<?php

$query="select * from courses where matricule='$ops' and db1='$take'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>
<?php
	  /******************** ERROR MESSAGES*************************************************
	  This code is to show error messages 
	  **************************************************************************/
	  if(!empty($err))  {
	   echo "<div class=\"msg\">";
	  foreach ($err as $e) {
	    echo "$e <br>";
	    }
	  echo "</div>";	
	   }
	  /******************************* END ********************************/	  
	  ?><br><br><br>
<div style="margin-left:-70px;">

<script type="text/javascript" language="javascript"> 
<!--
// By Adam Khoury @ www.developphp.com
function validateMyForm ( ) { 
    var isValid = true;
    if ( document.form1.first_name.value == "" ) { 
	    alert ( "Please type your Name" ); 
	    isValid = false;
    } else if ( document.form1.first_name.value.length < 1 ) { 
            alert ( "student  first_name, Middle name, Last name  must be Enter " ); 
            isValid = false;
    } 
	
	
	
	
	
	
	
	
	else if ( document.form1.table.value.length < 1 ) { 
            alert ( "You must select a class for this student " ); 
            isValid = false;
    }
	else if ( document.form1.tables.value.length < 1 ) { 
            alert ( "enter target class numeric representation " ); 
            isValid = false;
    }
	
	
	
	
	
		
	
	
	
	else if ( document.form1.go.value == "" ) { 
            alert ( "Please select Motive or Reason" ); 
            isValid = false;
	}
	
    return isValid;
}



//-->
</script>

<script type="text/javascript">
function doCalc(FORM) {
  FORM.newon2x.value = (parseInt(FORM.expected_amount.value)+parseInt(FORM.balance.value)) - parseInt(FORM.extra.value);
}
</script>
<form name="form1" method="post" action="sendpermit.php">
<div style="float:left; margin-left:100px;">
<table cellspacing="1" cellpadding="0" width="800px">
<tr>
<td style="float:left; width:120px; padding:14px;">

 <?php 
				  $mxx=$row['matricule'];  $fname=$row['fname'];$sex=$row['sex'];$deptt=$row['departmet'];$levels=$row['levels'];$cxx1=$row['cxx1'];$cxx2=$row['cxx2'];
				$qry = mysql_query("select id as total
from employees where empname='$mxx'  "); 
$row = mysql_fetch_assoc($qry); 
 $savep4=$row['total']; 
				 $mxx=$rec['empname'];?>
			
				
	
					<img src="load_image.php?pic_id=<?php echo $savep4;?>" width="120px" height="85p">


</td><td style="float:left; width:350px; padding:45px;font-size:20px;"> <?php echo $fname;?></td><td style="float:left; width:110px; padding:45px;font-size:20px;"> &nbsp;<?php echo $sex;?></td></tr>
<tr>

<td style="float:left; width:138px; padding:7px;text-transform:uppercase;color:#787878;">

Matricule #
</td>
<td style="float:left; width:150px; padding:5px;font-size:16px;">

<?php echo $ops;?>
</td>
<td style="float:left; width:138px; padding:7px;text-transform:uppercase;color:#787878;">

DEPARTMENT
</td>
<td style="float:left; width:313px; padding:5px;font-size:16px;">

<?php echo $deptt;?>
</td>
</tr>
<tr>

<td style="float:left; width:138px; padding:7px;text-transform:uppercase;color:#787878;">

Levels
</td>
<td style="float:left; width:150px; padding:5px;font-size:16px;">

<?php echo $levels;?>
</td>
<td style="float:left; width:138px; padding:7px;text-transform:uppercase;color:#787878;">

Date of Birth
</td>
<td style="float:left; width:313px; padding:5px;font-size:16px;">

&nbsp;<?php echo $cxx2;?>
</td>
</tr>








</tr>
<tr>
 <?php 

$query = mysql_query("select  * from admission where matricule='$ops' order by fname ASC"); 

		 while ($row = mysql_fetch_array($query)) {
		 
		 
		 
		 
		 
		 ?>

<td style="float:left; width:138px; padding:7px;text-transform:uppercase;color:#787878;">
PLACE OF BIRTH
</td>
<td style="float:left; width:150px; padding:5px;font-size:16px;">

&nbsp;<?php echo $row['place'];;?>
</td>
<td style="float:left; width:138px; padding:7px;text-transform:uppercase;color:#787878;">
Nationality
</td>
<td style="float:left; width:313px; padding:5px;font-size:16px;">

&nbsp;<?php echo $row['nation'];?>

</td>
</tr>









<tr>

<td style="float:left; width:138px; padding:7px;text-transform:uppercase;color:#787878;">
Address
</td>
<td style="float:left; width:150px; padding:5px;font-size:16px;">

&nbsp;<?php echo  $row['address'];?>
</td>
<td style="float:left; width:138px; padding:7px;text-transform:uppercase;color:#787878;">
Contact
</td>
<td style="float:left; width:313px; padding:5px;font-size:16px;">
&nbsp;<?php echo $row['contact1'];?>

</td>
</tr>

<tr>

<td style="float:left; width:138px; padding:7px;text-transform:uppercase;color:#787878;">
Region of Origin
</td>
<td style="float:left; width:150px; padding:5px;font-size:16px;">
&nbsp;<?php echo $region;?>
</td>
<td style="float:left; width:138px; padding:7px;text-transform:uppercase;color:#787878;">
ID card No
</td>
<td style="float:left; width:313px; padding:5px;font-size:16px;">
&nbsp;<?php echo $row['city'];?>

</td>
</tr>
<tr>

<td style="float:left; width:138px; padding:7px;text-transform:uppercase;color:#787878;">
Mother's Name
</td>
<td style="float:left; width:150px; padding:5px;font-size:16px;">

&nbsp;<?php echo $row['mother'];?>
</td>
<td style="float:left; width:138px; padding:7px;text-transform:uppercase;color:#787878;">
Father's Name
</td>
<td style="float:left; width:313px; padding:5px;font-size:16px;">
&nbsp;<?php echo  $row['father'];?>

</td>
</tr>


<tr>

<td style="float:left; width:138px; padding:7px;text-transform:uppercase;color:#787878;">
Guardian's Name
</td>
<td style="float:left; width:150px; padding:5px;font-size:16px;">

&nbsp;<?php echo  $row['guardian2'];?>

</td>
<td style="float:left; width:138px; padding:7px;text-transform:uppercase;color:#787878;">
Email
</td>
<td style="float:left; width:313px; padding:5px;font-size:16px;">
&nbsp;<?php echo $email;?>

</td>
</tr>

</table><br>
<fieldset style="float:left; width:770px;">
<legend>School Attended : FIRST CYCLE</legend>

<table cellspacing="1" cellpadding="0" width="770px">
<tr>
<td style="float:left; width:200px; padding:7px;text-transform:uppercase;color:#787878;">
School Name :
</td><td style="float:left; width:533px; padding:7px;text-transform:uppercase;color:#787878;">
&nbsp;<?php echo  $row['oschool'];?>
</td></tr></table>
</fieldset>


<br>
<fieldset style="float:left; width:770px;">
<legend>School Attended : SECOND CYCLE</legend>

<table cellspacing="1" cellpadding="0" width="770px">
<tr>
<td style="float:left; width:200px; padding:7px;text-transform:uppercase;color:#787878;">
School Name :
</td><td style="float:left; width:533px; padding:7px;text-transform:uppercase;color:#787878;">
&nbsp;<?php echo  $row['hschool'];?>
</td></tr></table>
</fieldset>



<br>
<fieldset style="float:left; width:770px;">
<legend>QUALIFICATION:</legend>

<table cellspacing="1" cellpadding="0" width="770px">
<tr>
<td style="float:left; width:200px; padding:7px;text-transform:uppercase;color:#787878;">
O-LEVEL :
</td><td style="float:left; width:533px; padding:7px;text-transform:uppercase;color:#787878;">
<?php echo  $row['ograde'];?>
</td></tr>
<td style="float:left; width:200px; padding:7px;text-transform:uppercase;color:#787878;">
A-LEVEL :
</td><td style="float:left; width:533px; padding:7px;text-transform:uppercase;color:#787878;">
&nbsp;<?php echo  $row['hgrade'];?>
</td></tr>

<td style="float:left; width:200px; padding:7px;text-transform:uppercase;color:#787878;">
HND :
</td><td style="float:left; width:533px; padding:7px;text-transform:uppercase;color:#787878;">
&nbsp;<?php echo $row['religion'];?>
</td></tr>


</table>
</fieldset>





<?php
}

}
?>















	</div>


	
	
	</div>
	
	
	
	
	
</div>
</div>





</body>
</html>