<?php
include 'dbcs.php';
page_protect();
ini_set('max_execution_time', 8250000); //300 seconds = 5 minutes


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
<?php  $take=$row[1];


?><?php } ?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<html lang="en">
<head>
<title><?php echo $school;?></title>
        <link rel="shortcut icon" href="pef.png"> 
	<style>
	table,td,tr{font-family:arial; font-size:18px;}

   body {size:A4 Landscape;
        margin: 0;
        padding: 0;
        font: 25pt;
    }
    * {
        box-sizing: border-box;
        -moz-box-sizing: border-box;
    }
    .page {
        width: 1450px;
        min-height: 29.7cm;
        padding: 2cm;
        margin: 1cm auto;
        background: white;
    }
    .subpage {
        padding: 1cm;
        border: 5px black solid;
        height: 237mm;
        outline: 2cm #000 solid;
    }
    
    @page {
        size: A4 landscape;
        margin: 0;
    }
    @media print {
        .page {
            margin: 0;
            border: initial;
            border-radius: initial;
            width: initial;
            min-height: initial;
            box-shadow: initial;
            background: initial;
            page-break-after: always;
        }
    }

</style>

	
	</head>
	<body>
		 
		 
		 <div class="page">
<h2>DEPARTMENT: <?PHP

$levels=$_POST["levels"];
$level=$levels;

$deptt=$_POST["department"]; 
ECHO $deptt;?><br>
YEAR: <?php echo $take;?><br>


</h2>

<table width="1300px" cellspacing="2" cellpadding="1">
<tr><td style="width:30px;border-bottom:3px solid #000; background:#ccc;">SN</td><td style="350px;border-bottom:3px solid #000;">Full Name(s)</td>


<?php
$roll=$_GET["1"];
$query="select * from rush where roll='1'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>
<?php  $take=$row[1];

?>
<?php } ?>
<?php

$sex=$_POST["sex"];
$deptt=$_POST["department"];$db1='$take';
$query="select  * from subject where department='$deptt' and year1='$level' and year2='$sex' ";
$result=mysql_query($query);$i=1;
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>
<td style="width:70px;background:#ccc;">	<?php echo $sub=$row["subject"];?>
	
	</td>
	
		 <?php } ?><td style="width:70px;background:#ccc;">	Average
	
	</td>
	</tr>
	
	
	<tr><td style="width:30px;"></td><td style="350px;"></td>

<?php
$query="select  * from subject where department='$deptt' and year1='$level' and year2='$sex'";
$result=mysql_query($query);$i=1;
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>
<td style="width:70px; background:#000;color:#fff;">	<div style="float:left; width:85px;font-size:13px;

;"><?php  $sub=$row["subject"];





$qry = mysql_query("select db1 as total from
subject where  subject='$sub'  and department='$deptt' and year1='$level' and year2='$sex'"); 
$row = mysql_fetch_assoc($qry); 
 echo $richooTTT=$row['total']; 










?></div>
	
	</td>
	
		 <?php } ?><td style="width:70px;">	/20
	
	</td>
	</tr>
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	<?php
$query="select  * from courses where departmet='$deptt' and levels='$level' and departmet='$deptt' and db1='$take' order by fname ASC";
$result=mysql_query($query);$i=1;
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>
		<tr><td style="width:30px; background:#ccc;border-bottom:1px solid #ccc;"><?php echo $i++;?></td>
		<td style="350px;font-size:14px;"><?php $rr=$row["matricule"];
		echo $rttt=$row["fname"];
		
		
		
		?></td>

	
	
	
	
	
	
	
	
	
	
	
<?php


$query = mysql_query("select  * from subject where department='$deptt' and year1='$level' and year2='$sex'"); 

		 while ($row = mysql_fetch_array($query)) {
		 
		 
 
?>

<td style="width:70px; background:#ccc;color:#000;"><?php $sub=$row["subject"]; 

 $rr;
$qrsy = mysql_query("select  (c101+c102) as total from resit 
where db1='$take' 
and fname='$sub' 
and matricule='$rr' 
and departmet='$deptt' and sex='$sex'
and levels='$level' "); 
$row = mysql_fetch_assoc($qrsy); 
echo $MM=$row['total']; 

 

$qry = mysql_query("select credit as total from
credits where  subject='$sub' "); 
$row = mysql_fetch_assoc($qry); 
 $credit=$row['total']; 

$query3rytt="update subject set credit='$credit'

where 

 subject='$sub'";







mysql_query ($query3rytt) or die ('could not updated:'.mysql_error());

$TM=(($MM/5)*$credit);











$query3r="update resit set c103='$credit',c104='$TM',c105='$TMS'

where db1='$take' 
and fname='$sub' 
and matricule='$rr' 
and departmet='$deptt' and sex='$sex'
and levels='$level'";





 

$qry = mysql_query("select SUM(credit) as total from
subject where  department='$deptt' and year1='$level' and year2='$sex'"); 
$row = mysql_fetch_assoc($qry); 
 $avssf=$row['total']; 



mysql_query ($query3r) or die ('could not updated:'.mysql_error());


 
$qrsyp = mysql_query("select  (SUM(c104)/($avssf)) as total from resit 
where db1='$take' 

and matricule='$rr' 
and departmet='$deptt' and sex='$sex'
and levels='$level' "); 
$row = mysql_fetch_assoc($qrsyp); 
 $av=$row['total']; 




?></div>
	
	</td>
	
		 <?php } ?><td style="width:70px;">	
		 <?php
		 
		 
$qrsy = mysql_query("select  (SUM(c104)) as total from resit 
where db1='$take' 

and matricule='$rr' 
and departmet='$deptt' and sex='$sex'
and levels='$level'

 "); 
$row = mysql_fetch_assoc($qrsy); 
$avs=$row['total']; 

$avvg=($avs/$avssf);


printf("%01.2f",$ui=($avvg));

$query3ryt="update courses set c101='$ui'

where 

 matricule='$rr'";







mysql_query ($query3ryt) or die ('could not updated:'.mysql_error());

?>
	
	</td><?php }
		 
		 	?>
	</tr>
	
	</table>
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
</body>
</html>