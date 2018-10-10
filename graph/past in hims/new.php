<?php
include 'dbc.php';?>




<?php
$roll=$_GET["1"];
$query="select * from rush where roll='1'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>
<b>
<?php  $take=$row[1];


?><?php } ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<html lang="en">
<head>
<title><?php echo $school;?></title>
        <link rel="shortcut icon" href="pef.png"> 
	<style>
	table,td,tr{font-family:arial; font-size:12px;}
	</style>
	
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
	<body>
	<div style="float:left; width:700px; height:400px;">
	
	
<script type="text/javascript" language="javascript"> 
<!--
// By Adam Khoury @ www.developphp.com
function validateMyForm ( ) { 
    var isValid = true;
    if ( document.form1.first_name.value == "" ) { 
	    alert ( "Please type Student first Name" ); 
	    isValid = false;
    } else if ( document.form1.first_name.value.length < 1 ) { 
            alert ( "student  first_name, Middle name, Last name  must be Enter " ); 
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

		 
<?php
	  /******************** ERROR MESSAGES*************************************************
	  This code is to show error messages 
	  **************************************************************************/
	  if(!empty($err))  {
	   echo "<div class=\"msg\" style='text-decoration:blink;'>";
	  foreach ($err as $e) {
	    echo "$e <br>";
	    }
	  echo "</div>";	
	   }
	  /******************************* END ********************************/	  
	  
	  ?>
<div style="float:left; width:400px;">
<?php $note=$_SESSION['user_name'];











{
	
$table = $_POST ['table'];
$first_name = $_POST ['first_name'];
$last_name = $_POST ['last_name'];
$middle_name = $_POST ['middle_name'];
$matricule = $_POST ['matricule'];

$sex = $_POST ['sex'];

$levels = $_POST ['levels'];
$date2 = $_POST ['date2'];
$department = $_POST ['department'];
$expected_amount = $_POST ['expected_amount'];
$amount_paid = $_POST ['amount_paid'];
$balance = $_POST ['balance'];
$db1= $_POST ['tform'];
$month = $_POST ['contact'];
$year = date('j/m/y');
$mm1 = date('m');
$tt1 = date('h:m:s');
$yy1=$year;
$dd1=date('j/m/y');
$y1 = date('y');
$yy1=$y1;
$y2 = date('j');
$bookss=$_POST['department'];
if(empty($bookss)){
$bookss="";
 $statusbbookss="";
}
elseif($bookss<="ACCOUNTANCY" ){
 $colorf1chem="#FF0000";
 $statusbbookss="01";
}


elseif($bookss<="BANKING AND FINANCE"){
 $colorf1chem="#FF0000";
 $statusbbookss="02";
}


elseif($bookss<="INSURANCE" ){
 $colorf1chem="#FF0000";
 $statusbbookss="03";
}
elseif($bookss<="MANAGEMENT" ){
 $colorf1chem="#FF0000";
 $statusbbookss="04";
}

elseif($bookss>="MARKETING" ){
 $colorf1chem="#FF0000";
 $statusbbookss="05";
}

$file = $_FILES ['file'];
$name1 = $file ['name'];
$type = $file ['type'];
$size = $file ['size'];
$tmppath = $file ['tmp_name']; 

$tmppath2 = $file ['tmp_name']; 
move_uploaded_file ($tmppath2, 'image/'.$name1);
if($name1!="")
{
if(move_uploaded_file ($tmppath, 'graph/html/image/'.$name1))//image is a folder in which you will save image
{



    



$rs_duplicate = mysql_query("select count(*) as total from historic where student_name='$first_name $middle_name $last_name'and oldb='$take'") or die(mysql_error());
list($total) = mysql_fetch_row($rs_duplicate);

if ($total > 0)
{
$err[] = "ERROR - The student already exists. Please try again with different student .";
//header("Location: finances.php?msg=$err");
//exit();
}


if(empty($err)) {


$query6="insert into historic set  amount_paid='$amount_paid',
oldb='$db1',student_name='$first_name $middle_name $last_name',

expected_amount='$expected_amount'

,

class='$levels',


year='$yy1',

month='$mm1',

time='$tt1',

date='$dd1',
matricule='HIMS/$statusbbookss/$y1/$matricule'

,
olddebt='0'

,balance='$balance'


";
$query3="update matt set  matt='$matricule'
 where roll='1'";

}

$query1="insert into enrolement set  photo='$name1',
db1='$db1',first_name='$first_name',middle_name='$middle_name',

sex='$sex',last_name='$last_name',

year='$year',

month='$date2',

matricule='$matricule'

,

levels='$levels'

,departmet='$department'


";

$query2="insert into container set  photo='$name1',
db1='$db1',first_name='$first_name',middle_name='$middle_name',

sex='$sex',last_name='$last_name',

year='$year',
month='$date2'


,

levels='$levels'




,

matricule='$matricule'


,departmet='$department'


";
$query4="insert into courses set  photo='$name1',
db1='$db1',fname='$first_name $middle_name $last_name',

sex='$sex'

,

levels='$levels',

cxx2='$year',matricule='HIMS/$statusbbookss/$y1/$matricule'



,departmet='$department'


";


$query5="insert into resit set  photo='$name1',
db1='$db1',fname='$first_name $middle_name $last_name',

sex='$sex'

,

levels='$levels',

cxx2='$year',matricule='HIMS/$statusbbookss/$y1/$matricule'



,departmet='$department'


";



mysql_query ($query1) or die ('could not updated:'.mysql_error());

mysql_query ($query2) or die ('could not updated:'.mysql_error());

mysql_query ($query3) or die ('could not updated:'.mysql_error());

mysql_query ($query4) or die ('could not updated:'.mysql_error());

mysql_query ($query5) or die ('could not updated:'.mysql_error());

mysql_query ($query6) or die ('could not updated:'.mysql_error());

echo "<script>alert('Admission Successful!'); window.location.href('new.php');</script>";
 

}
}

}
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
	  ?>
<fieldset id="el02">
<legend >Student Information</legend>
<input type="hidden" name="note" value="<?php echo $note;?>">

<form name="form1" action="new.php" method="post" enctype="multipart/form-data" >
<table style="" cellpadding="3px"  cellspacing="0px" align="left" width="450px"style="text-transform:uppercase;">
  <tr>
<tr>
     
<input type="hidden" name="tform" value="<?php echo $take;?>">
<input type="hidden" name="usersskk" size="10" value="<?php echo $notes;?>">
<td style="text-transform:uppercase;">MATRICULE :</td>
      <td style="text-transform:uppercase;"><input type="text" name="matricule" size="10" value=""></td></tr><tr><td style="text-transform:uppercase;">DEPARTMENT :</td><td style="text-transform:uppercase;">

<select name="department">
<?php
$rs=mysql_query("Select * from classes order by  class",$link);
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
?></select></td>
    </tr>
    <tr>
      <td style="text-transform:uppercase;">First Name :</td> <td style="text-transform:uppercase;">
	  <input type="text" name="first_name" class="bigLetter" size="18" onKeyUp="convertToUppercase(this)" value="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
    
      </tr>
	  <tr>
      <td style="text-transform:uppercase;">Middle Name :</td>
	  <td style="text-transform:uppercase;"><input type="text" name="middle_name" class="bigLetter" size="18" onKeyUp="convertToUppercase(this)" value=""></td>
    
      </tr>
	  <tr>
      <td style="text-transform:uppercase;">last Name :</td> <td style="text-transform:uppercase;">
	  <input type="text" name="last_name" class="bigLetter" size="18" onKeyUp="convertToUppercase(this)" value=""></td>
    
      </tr>
	  <tr>
	  
	  
	  <td style="text-transform:uppercase;">Level:</td><td style="text-transform:uppercase;">

<select name="levels">
<?php
$rs=mysql_query("Select * from levels order by  levels",$link);
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
?></select></td>
    </tr>
<tr>
      <td style="text-transform:uppercase;">DATE OF BIRTH :</td>
      <td style="text-transform:uppercase;"><input type="date" name="date2" id="date2" size="20" value=""></td>
    </tr>
    <tr>
     <td style="text-transform:uppercase;">SEX :</td> <td style="text-transform:uppercase;"><select name="sex" class="required" id="select8">
               
                <option value=""></option>
                <option value="Male">Male</option>
 <option value="Female">Female</option></select></td>
      </tr><tr>
      <td style="text-transform:uppercase;">CONTACT :</td><td style="text-transform:uppercase;">
	  <input type="text" name="contact" size="17" value=""></td></tr>
	  
	  </tr>
	  
	  
	  
	  <tr>
	  
	  
	  <td style="text-transform:uppercase;">Expected _amount:</td><td style="text-transform:uppercase;">

<select name="expected_amount">
<?php
$rs=mysql_query("Select * from fees order by  fees",$link);
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
?></select></td>
    </tr>
	  <tr>
 
 
      <td style="text-transform:uppercase;">Amount Paid</td><td style="text-transform:uppercase;">
    <input type="text" name="amount_paid"  value="" size="10" onBlur="doCalc(this.form)" maxlength="5"></td></tr>
      <td style="text-transform:uppercase;">Balance</td><td style="text-transform:uppercase;">
     <input type="text" name="balance"style="background:red;color:white;" size="10" value=""></td>
    </tr>
	
	<tr>

 <td style="text-transform:uppercase;">Photo
     </TD>
 
 
 
 
 
 <td style="text-transform:uppercase;">
	<input class="file" id="file1"size="6" name="file" type="file" multiple title="test #1" value="C:\xampp\htdocs\schoolf\imagexxx\webinfopedia_1373185"/></td>
   </tr>
	
     
     <input type="hidden" name="date" size="20" value="<?php
echo date('Y-m-j');
?>" ><tr>
	
	
	</div>
	
	</td></tr><tr><td style="text-transform:uppercase;">

<input name="button" type="submit" value="Submit Information" onClick="javascript:return validateMyForm();self.close();"/>
</td></tr>
 </table>
	
	
	
	
	
	
	
	</div>
	
	  <div style="float:left; width:200px; height:400px;">
	  <div style="float:left; width:200px; height:200px; background:#787878; border:1px solid #ccc;">
	  
	  
	  <div style="float:left; width:196px; height:196px; background:#787878; border:1px solid #ccc;">
	  
<div id="prev_file1">
	  </div>
	  
	  </div>
	</div>
	
	  <div style="float:left; width:200px; font-family:arial,sans-serif;height:200px;border:1px solid #ccc;">
	  
	  
	  <div style="float:left; width:100px; height:30px;">
	  Total Enrol:
	  </div>
	  
	  
	  
	  <div style="float:left; width:100px; height:30px;">
	  <?php 


$result = mysql_query( "SELECT  * FROM enrolement   where db1='$take' " )
or die("SELECT Error: ".mysql_error());
$num_rows = mysql_num_rows($result);
echo $xeee=$num_rows;
?>
	  
	  </div>
	  
	  
	  
	
	  <div style="float:left; width:100px; height:30px;">
	  Total Male:
	  </div>
	  
	  
	  
	  <div style="float:left; width:100px; height:30px;">
	  <?php 


$result = mysql_query( "SELECT  * FROM enrolement   where db1='$take' and sex='male' " )
or die("SELECT Error: ".mysql_error());
$num_rows = mysql_num_rows($result);
echo $xeee=$num_rows;
?>
	  
	  </div>
	  
	  
	  
	
	  <div style="float:left; width:100px; height:30px;">
	  Total Fem:
	  </div>
	  
	  
	  
	  <div style="float:left; width:100px; height:30px;">
	  <?php 


$result = mysql_query( "SELECT  * FROM enrolement   where db1='$take' and sex='female' " )
or die("SELECT Error: ".mysql_error());
$num_rows = mysql_num_rows($result);
echo $xeee=$num_rows;
?>
	  
	  </div>
	  
	  
	  
	  
	  
	  
	
	</div>
	
	
	
	
	</div>
	
	
	</body>
	</html>