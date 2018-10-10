<?php 
include 'dbcs.php';
page_protect();


 $notes=$_SESSION['user_name'];



?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Transcript Manager</title>




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
<meta charset=utf-8 />


</head>






</div>

<div style="float:left; margin:auto; width:500px; height:400px;">











 <body>


<div style="width:700px; height:400px;">

</script>

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
	
	
	
	
		else if ( document.form1.sex.value == "" ) { 
            alert ( "Please select a Valid SEX for the student! from the options " ); 
            isValid = false;
    } 
	
	
	
	
	else if ( document.form1.addr1.value.length < 1 ) { 
            alert ( "student  address must be set  " ); 
            isValid = false;
    }
	else if ( document.form1.form.value.length < 1 ) { 
            alert ( "student  first_name, Middle name, Last name  must be Enter " ); 
            isValid = false;
    }
	
	
	
	else if ( document.form1.expected_amount.value == "" ) { 
            alert ( "Please Enter Amount paid" ); 
            isValid = false;
    }
	
	
	else if ( document.form1.amount_paid.value == "" ) { 
            alert ( "Please Enter Amount paid" ); 
            isValid = false;
    }
	

	
	else if ( document.form1.file.value == "" ) { 
            alert ( "Please insert Photo" ); 
            isValid = false;
    }
    return isValid;
}
//-->
</script>
<script type="text/javascript">
function doCalc(form) {
  form.balance.value = parseInt(form.expected_amount.value) - parseInt(form.amount_paid.value);
}
</script>
<div style="float:left;width:500px; margin-left:10px; height:300px;">
    <div style="float:left; height:30px;    -webkit-border-radius: 4px;
    -moz-border-radius: 4px;
    border-radius: 4px;font-family:arial; text-align;center; width:170px; ">
	<div style="float:left;color:#fff; margin-top:4px">
	

<form name="look" method="post" action="modifyy.php">
<table style=" border:1px solid silver" cellpadding="5px" cellspacing="0px" align="center" border="0" width="550px">
<tr>
<td colspan="10" style=" color:#000; font-size:20px; background:#ffcc00;">Change Password</td>
</tr>
<tr>
<td>Enter Search Keyword</td>
<td><input type="text" name="search" size="10"placeholder="use admission #" /></td>

<td><input type="submit" value="Search" /></td>
</tr>
<tr bgcolor="#666666" style="color:#fff;">
<td style="color:#fff">Name (s) of Patient </td>


<td style="color:#fff">Check Test Here</td>


	 
		 <td>&nbsp;</td>


</tr>

<?php
echo $notes;
$flag=0;
$query="select * from users where full_name='$notes'     ";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 $flag=1;
		 echo "<tr >
		 <td>",$row['roll'],"&nbsp;&nbsp;&nbsp;",$row['full_name'],",</td>
	
		 <td><a href='macy.php?roll=",$row['id'],"'>Change Password</a></td>
		 
		 <td>&nbsp;</td>
		 </tr>";

		 }
		 if($flag==0)
		 echo "<tr><td colspan='3' align='center' style='color:red'>No Patient Found</td></tr>";
		 		 
?>
<tr>
<td colspan="3">&nbsp;</td></tr>
<tr bgcolor="#CCCCCC">
</tr>
</table>
</form>
</fieldset>
	</div>
	
	
	
	</div>
	
	
	
	
	
</div>
</div>





</body>
</html>