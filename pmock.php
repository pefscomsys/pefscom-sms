<?php 
include 'dbc.php';
page_protect();

 $notes=$_SESSION['user_name'];

if(@$_SESSION['userlevel']==3){header("location: login.php?msg=Unauthorized access");}

?>
<?php
$roll=$_GET["1"];
$query="select * from users where  full_name='$notes'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>
<?php  $ids=$row['fax'];


?><?php } 
$nki=$_GET['roll'];


?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<html lang="en">
<head>
<title><?php echo $school;?></title>
        <link rel="shortcut icon" href="pef.png"> 
	<style>
	table,td,tr{font-family:arial; font-size:12px;}
	</style>
	

<link rel="stylesheet" href="global.css" type="text/css" media="all" />
<script src="mootools.js" type="text/javascript"></script>
<link rel="stylesheet" href="sexyalertbox.css" type="text/css" media="all" />
<script src="sexyalertbox.packed.js" type="text/javascript"></script>
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
	height: 200px;
}

.prev_thumb{
	margin: 10px;
	height: 200px;
}
</style>
	</head>
		 
	<div style="float:left; width:700px; height:400px;">
	
	
<script type="text/javascript" language="javascript"> 
<!--
// By Adam Khoury @ www.developphp.com
function validateMyForm ( ) { 
    var isValid = true;
    if ( document.form1.fname.value == "" ) { 
	    alert ( "Please type Your Name" ); 
	    isValid = false;
    } else if ( document.form1.fname.value.length < 1 ) { 
            alert ( "student  fname, Middle name, Last name  must be Enter " ); 
            isValid = false;
    } 
	
	 else if ( document.form1.middle_name.value.length < 1 ) { 
            alert ( "student   Middle name  must be Enter " ); 
            isValid = false;
    } 
	
	 else if ( document.form1.last_name.value.length < 1 ) { 
            alert ( "student   Last name  must be Enter " ); 
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
            alert ( "student  fname, Middle name, Last name  must be Enter " ); 
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

		 
<?php
$fish=$_POST["teacher"];
$_GET["roll"]=$fish;
	  ?>
<div style="float:left; width:400px;">
MODERATE MARKS PAGE FOR ALL SEMESTER(1,2,3) <?php echo $notes;?>

<div  style="float:left;width:990px; height:540px;">

<div  style="float:left;width:550px; height:540px; ">
<fieldset id="el02" style="width:480px;">
<legend >Select Your Class here</legend>
<input type="hidden" name="note" value="<?php echo $note;?>">

<form name="form1" action="publish.php?roll=<?php echo $fish;?>" method="post" enctype="multipart/form-data" >

     <table style="" cellpadding="3px"  cellspacing="0px" align="left" width="550px"style="text-transform:uppercase;">
	<tr>
      <td style="text-transform:uppercase;"style="background:#ccc;width:150px;">Department/ 
départements</td
	  ><td>

<select name="department"style="background:#ccc;">
<?php
$rs=mysql_query("Select * from matsub order by  mgg",$link);
	  while($row=mysql_fetch_array($rs))
{
if($row[1]==$fees)
{
echo "<option value='$row[2]' selected>$row[2]  $row[1]</option>";
}
else
{
echo "<option value='$row[2]'>$row[2]  $row[1]</option>";
}
}
?></select></td></tr>





	<tr>
      <td style="text-transform:uppercase;"style="background:#ccc;width:150px;">Levels</td
	  ><td>

<select name="levels"style="background:#ccc;">
<?php
$rs=mysql_query("Select * from levels ",$link);
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
?></select></td></tr>




	<tr>
      <td style="text-transform:uppercase;"style="background:#ccc;width:150px;">Semester</td
	  ><td>
<select name="sex"style="background:#ccc;" class="required"   id="select8">
               
                <option value="1">First Semester</option>
                <option value="2">Second Semester</option></select>
				</td></tr>














   <tr>
   <td>
	
<input name="button" type="submit" value="Submit Information" onClick="javascript:return validateMyForm();self.close();"/>
</td></tr>
 </table>
	
	</fieldset>
	
	
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

</body>
</html>