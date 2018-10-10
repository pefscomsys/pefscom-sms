<?php 
include 'dbc.php';
page_protect();





 $notes=$_SESSION['user_name'];
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Addmission Form</title>



 <script language="JavaScript">
function disableEnterKey(e)
{
     var key;

     if(window.event)
          key = window.event.keyCode;     //IE
     else
          key = e.which;     //firefox

     if(key == 13)
          return false;
     else
          return true;
}
</script>

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



<?php



 $matricule = $_POST ['coverage'];
if($matricule!=''){
 $department = $_POST ['departmet'];
$db1 = $_POST ['db1'];
$fname = $_POST ['fname'];
$lecturer= $_POST ['lecturer'];
$query3="insert into tage set fname='$fname',coverage='$matricule' ,departmet='$department',
db1='$db1'
 ,lecturer='$lecturer'

";




 
mysql_query ($query3) or die ('could not updated:'.mysql_error());

echo "<script>alert('Recorded Successfully!'); </script>";

 echo "<meta http-equiv='refresh' content='0; url=xinfo.php'>";
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


?><?php } ?>





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

<form name="form1" method="post" action="xinfo.php">

  <table style=" border:1px solid silver; margin-left:100px;" cellpadding="1" bgcolor="#ffffcc"cellspacing="0px" align="center" border="0">
    <tr><td style="text-transform:uppercase;">




<table cellpadding="1" >
      <td colspan="18" style="background:#000; color:#FFFFFF; font-size:20px">REGISTER TEACHERS COVERAGE
    </tr>
   
        </tr>
      <td width="150px">Course Code</td>
      <td style="text-transform:uppercase;">
<select name="fname"style="background:#ccc;"><?php
$rs=mysql_query("Select * from subject  group by db1 order by  db1",$link);
	  while($row=mysql_fetch_array($rs))
{
if($row[1]==$fees)
{
echo "<option value='$row[2]' selected>$row[1] $row[2]</option>";
}
else
{
echo "<option value='$row[2]'>$row[1] $row[2]</option>";
}
}
?></select></td><td width="150"></td></tr>

<tr>
      <td style="text-transform:uppercase;">Accademic Year</td>
      <td style="text-transform:uppercase;">
	  <input type="text" name="db1" size="19" value="<?php echo $take;?>"style="background:#ccc;" ></td>
	
	

    </tr>   </tr>
	   <td style="text-transform:uppercase;">Department</td>
	     <td style="text-transform:uppercase;">

<select name="departmet"style="background:#ccc;"><?php
$rs=mysql_query("Select * from matsub  order by  mgg",$link);
	  while($row=mysql_fetch_array($rs))
{
if($row[1]==$fees)
{
echo "<option value='$row[2]' selected>$row[2]</option>";
}
else
{
echo "<option value='$row[2]'>$row[2]</option>";
}
}
?></select></td>
    </tr> <tr>
      <td style="text-transform:uppercase;">Lecturer Name</td>
      <td style="text-transform:uppercase;"><input type="text" name="lecturer" size="19"
	  value=""style="background:#ccc;" ></td>
	
	

 

	<td colspan="4" align="center"><input type="hidden" name="do" value="update">
        <input type="submit" value="Save" onClick="javascript:return validateMyForm();self.close();"/></td>
    </tr>

	   </tr>
	   <td style="text-transform:uppercase;">% Coverage</td>
	     <td style="text-transform:uppercase;"><input type="text"
		 name="coverage" size="20" value=""  style="background:#ccc;"></td>
    </tr>

</table>



<table width="400px" cellspacing="0" cellpadding="0">
<tr><td style="width:40px;padding:4px;border-top:1px solid #000;border-right:1px solid #000;border-left:1px solid #000;border-bottom:1px solid #000;">SN</td>
<td style="width:50px;padding:4px;border-top:1px solid #000;border-right:1px solid #000;border-bottom:1px solid #000;">Description</td>
<td style="width:250px;padding:4px;border-top:1px solid #000;border-right:1px solid #000;border-bottom:1px solid #000;">Department</td>
<td style="width:100px;padding:4px;border-top:1px solid #000;border-right:1px solid #000;border-bottom:1px solid #000;">C.CODE</td>
<td style="width:100px;padding:4px;border-top:1px solid #000;border-right:1px solid #000;border-bottom:1px solid #000;">Coverage</td>
<td style="width:100px;padding:4px;
border-top:1px solid #000;border-right:1px solid #000;border-bottom:1px solid #000;">Lecturer</td>
</tr>	  <?php
 $sql = "SELECT * FROM tage where db1='$take'";
$results = mysql_query($sql);$y=1;
while($row = mysql_fetch_assoc($results))
{
 $id_array[] = $row["roll"];
 $db1_array[] = $row["db1"];
 
 
 $fname_array[] = $row["fname"];
 $lecturer_array[] = $row["lecturer"];
 $coverage_array[] = $row["coverage"];
 $departmet_array[] = $row["departmet"];
 }
 echo "<form action='#' method='post'>
       ";
for($i=0;$i<count($id_array);$i++)
{
 $roll = $id_array[$i];
 $db1 = $db1_array[$i];
 $lecturer = $lecturer_array[$i];
 $departmet = $departmet_array[$i];
 $coverage = $coverage_array[$i];
 $fname = $fname_array[$i];
 
?>


<tr><td style="width:40px;padding:4px;background:#fff;border-top:1px solid #000;
border-right:1px solid #000;border-bottom:1px solid #000;"><?php echo $iy++;?>

		<input type='hidden' name='id[]' value='<?php echo $roll;?>'></td>
		<td style="width:50px;background:#fff;
border-top:1px solid #000;border-right:1px solid #000;border-bottom:1px solid #000;">

 
 
 <input type='text' name='db1' value='<?php echo $db1;?>' size='28' style="padding:4px;" ></td>
<td style="width:250px;background:#fff;
border-top:1px solid #000;border-right:1px solid #000;border-bottom:1px solid #000;">

 
 
 <input type='text' name='department[]' value='<?php echo $departmet;?>' size='28' style="padding:4px;" ></td>

<td style="width:70px;background:#fff;
border-top:1px solid #000;border-right:1px solid #000;border-bottom:1px solid #000;">

 <input type='text' name='subject[]' value='<?php echo $fname;?>' size='4' placeholder='subject code'></td>
<td style="width:70px;background:#fff;
border-top:1px solid #000;border-right:1px solid #000;border-bottom:1px solid #000;">

 <input type='text' name='credit[]' value='<?php echo $lecturer;?>' size='8'style="padding:4px;" placeholder='cv'></td>
<td style="width:70px;background:#fff;
border-top:1px solid #000;border-right:1px solid #000;border-bottom:1px solid #000;">

 <input type='text' name='status[]' value='<?php echo $coverage;?>' size='8'style="padding:4px;" placeholder='status'>
 </td>
</tr>
 <div style='float:left; width:932; border-bottom:1px solid #ccc;'></div><?php
 }
 
echo "</table>";
?>













	</div>


	
	
	</div>
	
	
	
	
	
</div>
</div>





</body>
</html>