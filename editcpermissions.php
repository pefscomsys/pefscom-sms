<?php 
include 'dbc.php';
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


$matricule = $_POST ['matricule'];
$fname= $_POST ['fname'];
$department = $_POST ['department'];

$levels= $_POST ['levels'];
$total= $_POST ['total'];
$overall= $_POST ['overall'];
$permit = $_POST ['permit'];
$reason= $_POST ['reason'];
$date= $_POST ['date'];

$issue= $_POST ['issue'];
if($reason!="")
{
$query1="update permission set  
extra='$overall' where matricule='$matricule' and levels='$levels'";

mysql_query ($query1) or die ('could not updated:'.mysql_error());

 
 
 

echo "<script>alert('Admission Successful!'); window.location.href('confirmx.php');</script>";


 echo "<meta http-equiv='refresh' content='0; url=permit.php'>";
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
$roll=$_GET["roll"];
$query="select * from permission where roll='$roll'";
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
<form name="form1" method="post" action="editcpermissions.php">

<?php $notes=$_SESSION['user_name'];?>
<input type="hidden" name="issue" value="<?php echo $notes;?>">
  <table style=" border:1px solid silver" cellpadding="1" bgcolor="#ffffcc"cellspacing="0px" align="center" border="0">
    <tr><td style="text-transform:uppercase;">




<table cellpadding="1" >
      <td colspan="18" style="background:#000; color:#FFFFFF; font-size:20px">EDIT PERMISSION FOR :- <?php
echo $row['fname'];
?>
    </tr>
   
<input type="hidden" name="db1" size="20" value="<?php
echo $take;
?>" readonly="readonly" style="background:#ccc;"> 
  <input type="hidden" name="xxx" size="20" value="<?php echo $row['xxx'];?>" readonly="readonly"style="background:#ccc;">
      <input type="hidden" name="name1" size="20" value="<?php echo $row['photo'];?>" readonly="readonly"style="background:#ccc;">
    </tr><tr>
      <td width="150px">Date of Permission</td>
      <td style="text-transform:uppercase;"><input type="text" name="date"  size="30"  value="<?php
echo $row['date'];
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
echo $department= $row['department'];
?>"  style="background:#ccc;"></td><td width="150"></td></tr>







<tr>
      <td width="150px">Total Attendance</td>
      <td style="text-transform:uppercase;"><input type="text" name="total"  size="30"  readonly='readonly' value="<?php
echo $total= $row['total'];
?>"  style="background:#ccc;"></td><td width="150"></td></tr>








<tr>
      <td width="150px">Overall Attendance</td>
      <td style="text-transform:uppercase;"><input type="text" name="overall"  size="30" readonly='readonly' value="<?php
echo  $row['overall'];
?>
"  style="background:#ccc;"></td><td width="150"></td></tr>



<tr>
      <td width="150px">Permission /Days</td>
      <td style="text-transform:uppercase;"><input type="text" name="overall"  size="30"  value="<?php
echo  $row['extra'];
?>
"  style="background:#ccc;"></td>
      </tr>




<tr>
      <td width="150px">Reason</td>
      <td style="text-transform:uppercase;"><textarea name="reason" cols="36"><?php
echo  $row['reason'];
?>
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