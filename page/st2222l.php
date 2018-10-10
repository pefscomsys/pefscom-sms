<?php
include 'dbcs.php';
$roll=$_GET["1"];
$query="select * from users where  full_name='$notes'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>
<?php echo $ids=$row['fax'];


?><?php } ?>



<?php
$roll=$_GET["1"];
$query="select * from rushs where roll='1'";
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
	<body>
		 
	<div style="float:left; width:700px; height:400px;">
	
	
<script type="text/javascript" language="javascript"> 
<!--
// By Adam Khoury @ www.developphp.com
function validateMylevels ( ) { 
    var isValid = true;
    if ( document.levels1.fname.value == "" ) { 
	    alert ( "Please type Your Name" ); 
	    isValid = false;
    } else if ( document.levels1.fname.value.length < 1 ) { 
            alert ( "student  fname, Middle name, Last name  must be Enter " ); 
            isValid = false;
    } 
	
	 else if ( document.levels1.middle_name.value.length < 1 ) { 
            alert ( "student   Middle name  must be Enter " ); 
            isValid = false;
    } 
	
	 else if ( document.levels1.departmet.value.length < 1 ) { 
            alert ( "student   Last name  must be Enter " ); 
            isValid = false;
    } 
	
		else if ( document.levels1.sex.value == "" ) { 
            alert ( "Please select a Valid SEX for the student! from the options " ); 
            isValid = false;
    } 
	
	
	
	
	else if ( document.levels1.addr1.value.length < 1 ) { 
            alert ( "student  address must be set  " ); 
            isValid = false;
    }
	else if ( document.levels1.levels.value.length < 1 ) { 
            alert ( "student  fname, Middle name, Last name  must be Enter " ); 
            isValid = false;
    }
	
	
	
	else if ( document.levels1.expected_amount.value == "" ) { 
            alert ( "Please Enter Amount paid" ); 
            isValid = false;
    }
	
	
	else if ( document.levels1.amount_paid.value == "" ) { 
            alert ( "Please Enter Amount paid" ); 
            isValid = false;
    }
	

	
	else if ( document.levels1.file.value == "" ) { 
            alert ( "Please insert Photo" ); 
            isValid = false;
    }
    return isValid;
}
//-->
</script>
<script type="text/javascript">
function doCalc(levels) {
  levels.balance.value = parseInt(levels.expected_amount.value) - parseInt(levels.amount_paid.value);
}
</script>

		 
<?php
$fish=$_GET["roll"];
 $subject=$_POST["subject"];
 $sex=$_POST["sex"];
$department=$_POST["department"];
$levels=$_POST["levels"];
$coef=$_POST["coef"];
$marks=$_POST["marks"];
	  ?>
<div style="float:left; margin-left:100px;"><?php 			
$query="select * from school where roll='1'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>


<?php echo $row[1];?><br style="font-size:18px;">

<?php } ?>




<?php 			
$query="select * from school where roll='2'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>


<?php echo $row[1];?><br>

<?php } ?>

<div  style="float:left;width:990px; height:25px;">
 <?php echo $subject;?>  <?php 
$qry = mysql_query("select  db1 as total
from subject where subject='$subject' and  department='$department'"); 
$row = mysql_fetch_assoc($qry); 
echo $richooTTT=$row['total'];?><BR>
</div>
<div  style="float:left;width:990px; height:540px;">

<div  style="float:left;margin-left:0px; ">
	
	
	
<div  style="float:left;width:925px; height:30px; background:#336666;color:#fff;">
<div style="width:60px; float:left; height:25px; ">
S/N</div>
<div style="width:230px; float:left; height:25px; ">
STUDENT NAMES</div>

<div style="width:190px; float:left; height:25px; ">
MATRICULE </div>

<div style="width:50px; float:left; height:25px; ">
CA</div><div style="width:50px; float:left; height:25px; margin-left:10PX">
EXAM</div>
</div>

<?php
$roll=$_GET["1"];
$query="select * from rushs where roll='1'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>

<?php  $take=$row[1];



?>
		 
		 
		<?php
	  /******************** ERROR MESSAGES*************************************************
	  This code is to show error messages 
	  **************************************************************************/
	  if(!empty($err))  {
	   echo "<div class=\"msg\" style='text-decoration:blink;color:red;'>";
	  foreach ($err as $e) {
	    echo "$e <br>";
	    }
	  echo "</div>";	
	   }
	  /******************************* END ********************************/	  
	  
	  ?>	<?php
echo $ids;
 $sql = "SELECT * FROM resit where fname='$subject' and db1='$take'  and departmet='$department' and (c101+c102)<50  and matricule>''order by matricule  ASC";
$results = mysql_query($sql);
$l=1;
while($row = mysql_fetch_assoc($results))
{
 $id_array[] = $row["roll"];
 $fname_array[] = $row["fname"];
 $matricule_array[] = $row["matricule"];
 $departmet_array[] = $row["departmet"];
 $levels_array[] = $row["levels"];
  $c101_array[] = $row["c101"];
$c102_array[] = $row["c102"];
$db1_array[] = $row["db1"];
$sex_array[] = $row["sex"];
 }
 echo "<form action='#' method='post'>
       ";
for($i=0;$i<count($id_array);$i++)
{
 $roll = $id_array[$i];
 $fname = $fname_array[$i];
 $matricule = $matricule_array[$i];
 $departmet = $departmet_array[$i];
 $levels = $levels_array[$i];
$c101 = $c101_array[$i];
$c102 = $c102_array[$i];
$db1 = $db1_array[$i];
$sex = $sex_array[$i];
$richooTTT1=$c101;
$richooTTT2=$c102;
$mxc11y=($richooTTT1+$richooTTT2);

 if(empty($mxc11y)){

 $statusfbiosy="";
 $statusfbioy="Not Eligible";
 
 $statusfbiomy="1";}
elseif($mxc11y<50 ){

 $statusfbiosy="text";
 $statusfbioy="3";
}
 elseif($mxc11y>=50 ){

  $statusfbiosy="";
 $statusfbioy="";
 
}
 
?>
        <table cellspacing="0" cellpadding="3" width="950px">
		<tr>
		<td style="float:left; width:45px; border:1px solid #ccc;height:21px;">
		<input type='hidden' name='id[]' value='<?php echo $roll;?>'>
		<?php echo	$l++;?>
		</td>
		
		<td style="float:left; width:295px;border:1px solid #ccc;height:21px;">
		
		
		
	<?php 
$qry = mysql_query("select fname as total
from courses where matricule='$matricule' and db1='$take'   "); 
$row = mysql_fetch_assoc($qry); 
	echo $saves=$row['total']; 
	?>
	</td>
		
		<td style="float:left; width:125px;border:1px solid #ccc;height:21px;">
	<?php echo	$matricule;?> 
</td>
		<td style="float:left; width:50px;border:1px solid #ccc;height:21px;">
	<?php 
	
	
	
	
$qry = mysql_query("select c101 as total
from resit where matricule='$matricule' and db1='$take' and fname='$subject'  "); 
$row = mysql_fetch_assoc($qry); 
	echo $saves=$row['total']; 
	
	
	;?>
</td>  
		<td style="float:left; width:50px;border:1px solid #ccc; height:21px;">  
	<?php 
	
	
	
	
$qry = mysql_query("select c102 as total
from resit where matricule='$matricule' and db1='$take' and fname='$subject'  "); 
$row = mysql_fetch_assoc($qry); 
	echo $saves=$row['total']; 
	
	
	;?>
</td> 
		<td style="float:left; width:150px;border:1px solid #ccc; height:21px;"> </td>
		<td style="float:left; width:150px;border:1px solid #ccc; height:21px;"> </td> </tr>  </table>













<?php
 }
  }
echo "</form>";

?>


<BR>


<BR>

<BR>

<BR>

<BR>

<BR>

 
<BR>


<BR>

<BR>

<BR>

<BR>

<BR>

<BR>


<BR>

<BR>

<BR>

<BR>

<BR>

<BR>


<BR>

<BR>

<BR>

<BR>

<BR>

<BR>


<BR>

<BR>

<BR>

<BR>

<BR>

<BR>


<BR>

<BR>

<BR>

<BR>

<BR>

<BR>


<BR>

<BR>

<BR>

<BR>

<BR>

<BR>


<BR>

<BR>

<BR>

<BR>

<BR>

<BR>


<BR>

<BR>

<BR>

<BR>

<BR>
 


</div>

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	

	
	</div>
	
	
	</div><script type="text/javascript">
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