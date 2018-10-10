<?php
include 'dbcs.php';
page_protect();


 $notes=$_SESSION['user_name'];
$roll=$_GET["1"];
$query="select * from users where  full_name='$notes'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>
<?php  $ids=$row['fax'];


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
input{
	border:0px;
	background:#efefef;
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

	  ?>
<div style="float:left; width:700px;">
Course: - <?php echo $subject;?> 	- <?php 
$qry = mysql_query("select  db1 as total
from subject where subject='$subject' and  department='$department'"); 
$row = mysql_fetch_assoc($qry); 
echo $richooTTT=$row['total'];



$qry = mysql_query("select  year2 as total
from subject where subject='$subject' and  department='$department'"); 
$row = mysql_fetch_assoc($qry); 
 $sex=$row['total'];

$qry = mysql_query("select  year1 as total
from subject where subject='$subject' and  department='$department'"); 
$row = mysql_fetch_assoc($qry); 
echo  $levels=$row['total'];

$mxc11=$levels;

if(empty($mxc11)){
 $statusfbio="courses";
 }
elseif($mxc11>='300' && $mxc11<='300' ){

 $statusfbio='courses';  
 $ss="and departmet='$department'";
}
elseif($mxc11>='200' && $mxc11<='200' ){

 $statusfbio='courses'; 
 $ss="and departmet='$department'"; 
}
elseif($mxc11>='400' && $mxc11<='400' ){

 $statusfbio='courses'; 
 $ss="and departmet='$department'"; 
}


?>

<div  style="float:left;width:990px; height:540px;">

<div  style="float:left;width:750px; height:540px; ">
	
	
	
<div  style="float:left;width:750px; height:30px; background:#336666;color:#fff;">

<div style="width:472px; float:left; height:25px; margin-left:10PX">
STUDENT NAMES</div>

<div style="width:80px; float:left; height:25px; margin-left:10PX">
Sq </div>

<div style="width:100px; float:left; height:25px; margin-left:10PX">
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
$table = "marks";
$i = 0;
if(!empty($_POST["submit"]))
{
 foreach($_POST["id"] as $roll)
 {
  
  mysql_query("insert into resit SET
               sex='".$_POST['sex'][$i]."',
			   

               departmet='".$_POST['departmet'][$i]."',
               fname='".$_POST['fname'][$i]."',
               matricule='".$_POST['matricule'][$i]."',
               levels='".$_POST['levels'][$i]."',
               db1='".$_POST['db1'][$i]."',
               c101='".$_POST['c101'][$i]."',
			   
               c110='".$_POST['c110'][$i]."',
               c105='".$_POST['c105'][$i]."',
               c104='".$_POST['c104'][$i]."',
                 c103='".$_POST['c103'][$i]."',
               c102='".$_POST['c102'][$i]."'
               ");
  $i++;

               

  }

 

echo "<script>alert('Data Base Updated Successful!');</script>";

 echo  $statusf="<meta http-equiv='refresh' content='0; url=st1.php?usr_name=$user_name'>";
 exit;

 } 
?>
<?php } ?>			<?php
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
 $sql = "SELECT * FROM $statusfbio where levels='$levels' and db1='$take'  $ss order by matricule  ASC";
$results = mysql_query($sql);
while($row = mysql_fetch_assoc($results))
{
 $id_array[] = $row["roll"];
 $fname_array[] = $row["fname"];
 $matricule_array[] = $row["matricule"];
 $departmet_array[] = $row["departmet"];
 $code_array[] = $row["code"];
 $levels_array[] = $row["levels"];$c111_array[] = $row["c111"];
 }
 echo "<form action='#' method='post'>
       ";
for($i=0;$i<count($id_array);$i++)
{
 $roll = $id_array[$i];
 $fname = $fname_array[$i];
 $matricule = $matricule_array[$i];
 $departmet = $departmet_array[$i];
 $levels = $levels_array[$i]; $code = $code_array[$i];
 $c111 = $c111_array[$i];

?>
        <div style='float:left; width:732;height:25px; background:#f4f4f4; font-size:12px; color:#686868; font-family:arial; text-translevels:UPPERCASE;  '>
     <div style='float:left;width:300px; '>
		
		<input type='hidden' name='id[]' value='$roll'></div>
        <div style='float:left;width:280px; '>
	<?php echo	$fname;?>
</div>
        <div style='float:left;width:200px; '>
	<?php echo	$matricule;?>(<?php echo	$code;?> ) <?php echo $levels;?>
 </div>     
 <div style='float:left;width:80px; '>

 <input type='text' name='c101[]' size='8' value='<?php
 
 
 
 
$qry = mysql_query("select  c101 as total
from rresit where levels='$levels' and  departmet='$department'  and  matricule='$matricule'"); 
$row = mysql_fetch_assoc($qry); 
echo $richooTTT=$row['total'];?>'  maxlength='2'></div>
        <div style='float:left;width:70px; '>
		
 <input type='text' name='c102[]' value='<?php 

  $mxc11=$levels;
if(empty($mxc11)){}
elseif($mxc11>='300' && $mxc11<='300' ){
	
 $statusfbio1="matricule";

 $statusfbio=$matricule;
}

elseif($mxc11>='200' && $mxc11<='200' ){
	
 $statusfbio1="matricule";

 $statusfbio=$matricule;
	
}
elseif($mxc11>='400' && $mxc11<='400' ){
	
 $statusfbio1="matricule";

 $statusfbio=$matricule;
	
	
}
$qry = mysql_query("select  c101 as total
from rresits where levels='$levels' and  departmet='$department'  and  $statusfbio1='$statusfbio'"); 
$row = mysql_fetch_assoc($qry); 
echo $richooTTT=$row['total']; ?>' size='8' maxlength='2'></div>
 
 </DIV>  
 <input type='hidden' name='sex[]' value='<?php echo $sex;?>' size='8' style='BACKGROUND:#CCC;' maxlength='4'>
 <input type='hidden' name='departmet[]' value='<?php echo $departmet;?>' size='8' style='BACKGROUND:#CCC;' maxlength='4'>
 
 <input type='hidden' name='c110[]' value='<?php echo $ids;?>' size='8' style='BACKGROUND:#CCC;' maxlength='4'>
 <input type='hidden' name='db1[]' value='<?php echo $take;?>' size='8' style='BACKGROUND:#CCC;' maxlength='4'>
 <input type='hidden' name='levels[]' value='<?php echo $levels;?>' size='8' style='BACKGROUND:#CCC;' maxlength='4'>
 <input type='hidden' name='fname[]' value='<?php echo	$subject;?>' size='8' style='BACKGROUND:#CCC;' maxlength='4'>
 <input type='hidden' name='matricule[]' value='<?php echo $matricule;?>' size='8' style='BACKGROUND:#CCC;' maxlength='4'>
  <div style='float:left; width:932; border-bottom:1px solid #ccc;'></div><?php
 }
 
echo "<input type='submit' name='submit' value='Submit'></form>";
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

	
	</html>
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