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
body{background:#f4f4f4;}
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

<script type="text/javascript">
     var mappedArray = [];
      mappedArray.push({tables:"formone",tableCode:"formonespecial"});
      mappedArray.push({tables:"formtwo",tableCode:"formtwospecial"});
	  
      mappedArray.push({tables:"formthree",tableCode:"formthreespecial"});
	  
      mappedArray.push({tables:"formfour",tableCode:"formfourspecial"});
	  
      mappedArray.push({tables:"formfive",tableCode:"formfivespecial"});
	  
	  
      mappedArray.push({tables:"lowersixth",tableCode:"lowersixthspecial"});
      mappedArray.push({tables:"lowersixthscience",tableCode:"lowersixthsciencespecial"});
   
      mappedArray.push({tables:"uppersixth",tableCode:"uppersixthspecial"});
	  
      mappedArray.push({tables:"uppersixthscience",tableCode:"uppersixthsciencespecial"});
	  
	  
	  
      mappedArray.push({tables:"commercial3",tableCode:"commercial3special"});
	  
      mappedArray.push({tables:"commercial4",tableCode:"commercial4special"});
	  
      mappedArray.push({tables:"commercial5",tableCode:"commercial5special"});
	  
      mappedArray.push({tables:"commercial6",tableCode:"commercial6special"});
	  
      mappedArray.push({tables:"commercial7",tableCode:"commercial7special"});
	  
      mappedArray.push({tables:"commercial8",tableCode:"commercial8special"});
	  
      mappedArray.push({tables:"commercial9",tableCode:"commercial9special"});
    
    function populatetableCode(cntry, phoneCode1, phoneCode2) {
      if(cntry == ''){
        document.getElementById(phoneCode1).value = '1';
        document.getElementById(phoneCode2).value = '1';
        return;
      }
      for(var i = 0; i < mappedArray.length; i++) {
        if(mappedArray[i].tables == cntry){
          document.getElementById(phoneCode1).value = mappedArray[i].tableCode;
          document.getElementById(phoneCode2).value = mappedArray[i].tableCode;
          break;
        }
      }
    }
  </script>
  <script type="text/javascript">
     
          /*************************************************/
          // Function to set Phone table Code according to 
          // selected table.
          /*************************************************/
          function settableCode() {
            var table2 = document.getElementById ('table' ).value;
			//alert(table2);
            populatetableCode(table2 , 'tables', 'phonetableCode2');
            //doNothing();


	        if(table2 == "United States")
       	    {
			    document.getElementById("hide_show").style.display = 'block';
			    document.getElementById("hide_show2").style.display = 'block';				
				
		    }
	        else
	        {
			    document.getElementById("hide_show").style.display = 'none';
			    document.getElementById("hide_show2").style.display = 'none';				
	        }
          }
        </script>
<meta charset=utf-8 />


</head>






</div>

<div style="float:left; margin:auto; width:500px; height:400px;">











 <body>


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
<?php $take=$row[1];



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

<?php $notes=$_SESSION['user_name'];?>
<input type="hidden" name="issue" value="<?php echo $notes;?>">
  <table style=" border:1px solid silver" cellpadding="1" bgcolor="#ffffcc"cellspacing="0px" align="center" border="0">
    <tr><td style="text-transform:uppercase;">




<table cellpadding="1" >
      <td colspan="18" style="background:#000; color:#FFFFFF; font-size:20px">NEW STUDENT DATA BASE
    </tr>
   
<input type="hidden" name="db1" size="20" value="<?php
echo $take;
?>" readonly="readonly" style="background:#ccc;"> 
  <input type="hidden" name="xxx" size="20" value="<?php echo $row['xxx'];?>" readonly="readonly"style="background:#ccc;">
      <input type="hidden" name="name1" size="20" value="<?php echo $row['photo'];?>" readonly="readonly"style="background:#ccc;">
    </tr><tr>
      <td width="150px">Date of Permission</td>
      <td style="text-transform:uppercase;"><input type="text" name="date"  size="30"  value="<?php
echo date('j-m-Y');
?>" readonly="readonly" style="background:#ccc;"></td><td width="150"></td></tr>





<tr>
      <td width="150px">Student Full Names</td>
      <td style="text-transform:uppercase;"><input type="text" name="fname"  size="30"  value="<?php
echo $row['fname'];
?>"  style="background:#ccc;"></td><td width="150"></td></tr>






<tr>
      <td width="150px">Matricule</td>
      <td style="text-transform:uppercase;"><input type="text" name="matricule"  size="30"  value="<?php
echo $mats=$row['matricule'];
?>"  style="background:#ccc;"></td><td width="150"></td></tr>




<tr>
      <td width="150px">Level</td>
      <td style="text-transform:uppercase;"><input type="text" name="levels"  size="30"  value="<?php
echo $row['levels'];
?>"  style="background:#ccc;"></td><td width="150"></td></tr>



<tr>
      <td width="150px">Department</td>
      <td style="text-transform:uppercase;"><input type="text" name="department"  size="30"  value="<?php
echo $department= $row['departmet'];
?>"  style="background:#ccc;"></td><td width="150"></td></tr>







<tr>
      <td width="150px">Total Attendance</td>
      <td style="text-transform:uppercase;"><input type="text" name="total"  size="30"  readonly='readonly' value="<?php
$qry = mysql_query("select  sum(present) as total
from attendance where   fname='$mats' and department='$department'   "); 
$row = mysql_fetch_assoc($qry); 
 echo $x11g=$row['total']; 
 ?>"  style="background:#ccc;"></td><td width="150"></td></tr>








<tr>
      <td width="150px">Overall Attendance</td>
      <td style="text-transform:uppercase;"><input type="text" name="overall"  size="30" readonly='readonly' value="<?php
$qry = mysql_query("select  sum(total) as total
from countat where   department='$department'  "); 
$row = mysql_fetch_assoc($qry); 
 echo $x11gg=$row['total']; 
 ?>
"  style="background:#ccc;"></td><td width="150"></td></tr>



<tr>
      <td width="150px">Permission /Days</td>
      <td style="text-transform:uppercase;"><select name="permit" class="required" id="select8"style="background:#ccc;">
               
                <option value=""></option>
                <option value="1">1 </option>
 <option value="2">2</option>
 
 <option value="3">3</option></select>
      </tr>




<tr>
      <td width="150px">Reason</td>
      <td style="text-transform:uppercase;"><textarea name="reason" cols="36">
               </textarea>
      </tr>
	  
<tr>
      <td width="150px"></td>
      <td style="text-transform:uppercase;"></select>
      </tr>


<tr>
      <td width="150px"></td>
      <td style="text-transform:uppercase;"><input type="submit"class="submit" value="Submit Permision" /></td>
      </tr>
<?php
}
?>















	</div>


	
	
	</div>
	
	
	
	
	
</div>
</div>





</body>
</html>