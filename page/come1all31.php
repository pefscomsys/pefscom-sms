<?PHP
INCLUDE 'dbcs.PHP';
page_protect();
 $notes=$_SESSION['user_name'];
ini_set('max_execution_time', 3250000); //300 seconds = 5 minutes

$xampp=$_GET['roll'];
$follows=$_POST['follows'];

$bookss=$_POST['bookss'];

$stetsub=$_POST['stetsub'];

$fname=$_POST["fname"];

?>
<?php
$query="select * from users where full_name='$notes'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
?>

<?php   $teacher=$row['fax'];
?>
<?php }

$qry = mysql_query("select  name as total
from logo where id='$teacher'  "); 
$row = mysql_fetch_assoc($qry); 
$img=$row['total'];


$qry = mysql_query("select  school as total
from school where id='$teacher'  and tt='1' "); 
$row = mysql_fetch_assoc($qry); 
$f1name=$row['total'];


$qry = mysql_query("select  txts as total
from school where id='$teacher'  and tt='1' "); 
$row = mysql_fetch_assoc($qry); 
$tts=$row['total'];

$qry = mysql_query("select  trts as total
from school where id='$teacher'  and tt='1' "); 
$row = mysql_fetch_assoc($qry); 
$trts=$row['total'];



$qry = mysql_query("select  twon as total
from school where id='$teacher'  and tt='1' "); 
$row = mysql_fetch_assoc($qry); 
$town=$row['total'];




$qry = mysql_query("select  pobox as total
from school where id='$teacher'  and tt='1' "); 
$row = mysql_fetch_assoc($qry); 
$pobox=$row['total'];


$qry = mysql_query("select  pobox as total
from school where id='$teacher'  and tt='1' "); 
$row = mysql_fetch_assoc($qry); 
$pobox=$row['total'];



$qry = mysql_query("select  contact as total
from school where id='$teacher'  and tt='1' "); 
$row = mysql_fetch_assoc($qry); 
$contact=$row['total'];




?>

<html>
<?php
$roll=$_GET["1"];
$query="select * from school where roll='1'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
?>

<?php  $school=$row[1];
$school2=$row[2];
?>
<?php } ?>
<?php
$roll=$_GET["1"];
$query="select * from school where roll='6'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
?>

<?php  $school6=$row[1];
$school6b=$row[2];
?>
<?php } ?>
<?php
$roll=$_GET["1"];
$query="select * from school where roll='7'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
?>

<?php  $school7=$row[1];
$school7b=$row[2];
?>
<?php } ?><?php
$roll=$_GET["1"];
$query="select * from school where roll='8'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
?>

<?php  $school8=$row[1];
$school8b=$row[2];
?>
<?php } ?>


<?php
$roll=$_GET["1"];
$query="select * from gradeb where roll='1'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
?>

<?php  $rangx1=$row['from1'];
$rangx2=$row['from2'];
$c1=$row['comments'];
$gpa1=$row['gpa'];

?>
<?php } ?>




<?php
$roll=$_GET["1"];
$query="select * from gradeb where roll='2'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
?>

<?php  $rangx3=$row['from1'];
$rangx4=$row['from2'];
$c2=$row['comments'];
$gpa2=$row['gpa'];
?>
<?php } ?>









<?php
$roll=$_GET["1"];
$query="select * from gradeb where roll='3'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
?>

<?php  $rangx5=$row['from1'];
$rangx6=$row['from2'];

$c3=$row['comments'];
$gpa3=$row['gpa'];
?>
<?php } ?>







<?php
$roll=$_GET["1"];
$query="select * from gradeb where roll='4'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
?>

<?php  $rangx7=$row['from1'];
$rangx8=$row['from2'];

$c4=$row['comments'];
$gpa4=$row['gpa'];
?>
<?php } ?>








<?php
$roll=$_GET["1"];
$query="select * from gradeb where roll='5'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
?>

<?php     $rangx9=$row['from1'];
 $rangx10=$row['from2'];
 
$c5=$row['comments'];
$gpa5=$row['gpa'];
?>
<?php } ?>

<?php
$roll=$_GET["1"];
$query="select * from gradeb where roll='6'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
?>

<?php     $rangx11=$row['from1'];
 $rangx12=$row['from2'];
 
$c6=$row['comments'];
$gpa6=$row['gpa'];
?>
<?php } ?>

<?php
$roll=$_GET["1"];
$query="select * from gradeb where roll='7'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
?>

<?php     $rangx13=$row['from1'];
 $rangx14=$row['from2'];
 
$c7=$row['comments'];
$gpa7=$row['gpa'];
?>
<?php } ?>
<?php
$roll=$_GET["1"];
$query="select * from gradeb where roll='8'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
?>

<?php     $rangx15=$row['from1'];
 $rangx16=$row['from2'];
 
$c8=$row['comments'];
$gpa8=$row['gpa'];
?>
<?php } ?>
<?php
$roll=$_GET["1"];
$query="select * from gradeb where roll='9'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
?>

<?php     $rangx17=$row['from1'];
 $rangx18=$row['from2'];
 
$c9=$row['comments'];
$gpa9=$row['gpa'];
?>
<?php } ?>
<head><TITLE>result slip</TITLE>
<style>
   body {
        margin: 0;
        padding: 0;
        background-color: #fff;
        font: 12pt;
    }
    * {
        box-sizing: border-box;
        -moz-box-sizing: border-box;
    }
    .page {
	size:landscape;
        width: 1000px;
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
        size: A4;
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
<br>
<?php

$levels=$_POST["levels"];

?>
<?php

$deptt=$_POST["deptt"];
$roll=$_GET["1"];
$query="select * from subject where department='$deptt' and year1='$levels' AND extra='1'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
?>

<?php  $subject1=$row['subject'];
$subject1n=$row['db1'];
?>
<?php } ?>


<?php

$deptt=$_POST["deptt"];
$roll=$_GET["1"];
$query="select * from credits where subject='$subject1' ";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
?>

<?php  $credit=$row['credit'];

?>
<?php } ?>










<?php

$deptt=$_POST["deptt"];
$roll=$_GET["1"];
$query="select * from subject where department='$deptt' and year1='$levels' AND extra='2'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
?>

<?php  $subject2=$row['subject'];
$subject2n=$row['db1'];
?>
<?php } ?>


<?php

$deptt=$_POST["deptt"];
$roll=$_GET["1"];
$query="select * from credits where subject='$subject2' ";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
?>

<?php  $credit2=$row['credit'];

?>
<?php } ?>


<?php

$deptt=$_POST["deptt"];
$roll=$_GET["1"];
$query="select * from subject where department='$deptt' and year1='$levels' AND extra='3'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
?>

<?php  $subject3=$row['subject'];
$subject3n=$row['db1'];
?>
<?php } ?>


<?php

$deptt=$_POST["deptt"];
$roll=$_GET["1"];
$query="select * from credits where subject='$subject3' ";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
?>

<?php  $credit3=$row['credit'];

?>
<?php } ?>



<?php

$deptt=$_POST["deptt"];
$roll=$_GET["1"];
$query="select * from subject where department='$deptt' and year1='$levels' AND extra='4'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
?>

<?php   $subject4=$row['subject'];
$subject4n=$row['db1'];
?>
<?php } ?>


<?php

$deptt=$_POST["deptt"];
$roll=$_GET["1"];
$query="select * from credits where subject='$subject4' ";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
?>

<?php  $credit4=$row['credit'];

?>
<?php } ?>



<?php

$deptt=$_POST["deptt"];
$roll=$_GET["1"];
$query="select * from subject where department='$deptt' and year1='$levels' AND extra='5'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
?>

<?php  $subject5=$row['subject'];
$subject5n=$row['db1'];
?>
<?php } ?>


<?php

$deptt=$_POST["deptt"];
$roll=$_GET["1"];
$query="select * from credits where subject='$subject5' ";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
?>

<?php  $credit5=$row['credit'];

?>
<?php } ?>



<?php

$deptt=$_POST["deptt"];
$roll=$_GET["1"];
$query="select * from subject where department='$deptt' and year1='$levels' AND extra='6'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
?>

<?php  $subject6=$row['subject'];
$subject6n=$row['db1'];
?>
<?php } ?>


<?php

$deptt=$_POST["deptt"];
$roll=$_GET["1"];
$query="select * from credits where subject='$subject6' ";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
?>

<?php  $credit6=$row['credit'];

?>
<?php } ?>



<?php

$deptt=$_POST["deptt"];
$roll=$_GET["1"];
$query="select * from subject where department='$deptt' and year1='$levels' AND extra='7'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
?>

<?php  $subject7=$row['subject'];
$subject7n=$row['db1'];
?>
<?php } ?>


<?php

$deptt=$_POST["deptt"];
$roll=$_GET["1"];
$query="select * from credits where subject='$subject7' ";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
?>

<?php  $credit7=$row['credit'];

?>
<?php } ?>




<?php

$deptt=$_POST["deptt"];
$roll=$_GET["1"];
$query="select * from subject where department='$deptt' and year1='$levels' AND extra='8'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
?>

<?php  $subject8=$row['subject'];
$subject8n=$row['db1'];
?>
<?php } ?>


<?php

$deptt=$_POST["deptt"];
$roll=$_GET["1"];
$query="select * from credits where subject='$subject8' ";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
?>

<?php  $credit8=$row['credit'];

?>
<?php } ?>

<?php

$deptt=$_POST["deptt"];
$roll=$_GET["1"];
$query="select * from subject where department='$deptt' and year1='$levels' AND extra='9'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
?>

<?php  $subject9=$row['subject'];
$subject9n=$row['db1'];
?>
<?php } ?>


<?php

$deptt=$_POST["deptt"];
$roll=$_GET["1"];
$query="select * from credits where subject='$subject9' ";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
?>

<?php  $credit9=$row['credit'];

?>
<?php } ?>


<?php

$deptt=$_POST["deptt"];
$roll=$_GET["1"];
$query="select * from subject where department='$deptt' and year1='$levels' AND extra='10'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
?>

<?php  $subject10=$row['subject'];
$subject10n=$row['db1'];
?>
<?php } ?>


<?php

$deptt=$_POST["deptt"];
$roll=$_GET["1"];
$query="select * from credits where subject='$subject10' ";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
?>

<?php  $credit10=$row['credit'];

?>
<?php } ?>








<?php
$roll=$_GET["1"];
$query="select * from rush where roll='1'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>
<?php $takess=$row[1];
$table="courses";
?>
<?php } ?>
<?php
$roll=$_GET["roll"];
$cxx5=$_POST["cxx5"];
$form=$_POST["form"];
$statusbsub=$_POST["statusbsub"];

$deptt=$_POST["deptt"];

$teacher=$_POST["teacher"];
$t1=$_POST["t1"];
$t2=$_POST["t2"];

$levels=$_POST["levels"];
$roll=$_POST["roll"];
$form=$_POST["form"];

$form=$_POST["form"];
$query="select * from $table where roll='$xampp' order by db1 ASC";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
 
		 ?>
		 <?php $matttt=$row['matricule'];
		  $db1=$row['db1'];
		 $ss=$row['matricule'];$fm=$row['fname']; $take=$db1;
		  $t1=$row['departmet'];
		 $t2=$row['levels'];
 
 $qry2 = mysql_query("select SUM(balance) as total from historic where  matricule='$ss' and class='$t2'  "); 
$row = mysql_fetch_assoc($qry2); 
 $amounts=$row['total']; 



 
 $qry2 = mysql_query("select SUM(expected_amount) as total from historic where  matricule='$ss' and class='$t2'  "); 
$row = mysql_fetch_assoc($qry2); 
 $exp=$row['total']; 


 
 $qry2 = mysql_query("select SUM(amount_paid) as total from historic where  matricule='$ss' and class='$t2'  "); 
$row = mysql_fetch_assoc($qry2); 
  $amount=$row['total']; 

 $qry = mysql_query("select firstin as total from control where department='$t1'  and db1='$t2'"); 
$row = mysql_fetch_assoc($qry); 
  $money=$row['total']; 
 
 $mmn=$money-$exp;
   $mmx1ug=$amounts;
if(empty($mmx1ug)){
$stand2gg="This $mmn is due to departmental change as balance fees";
$stand2g=$mmn;
}


else if( ($mmx1ug>'')){

$stand2gg="";
$stand2g=$amounts;
}
 
 
 
  $mmx1u=$money;
if(empty($mmx1u)){

$stand2="";
}


else if( ($mmx1u<=$amount )){


}
else if( ($mmx1u>$amount )){


 $stand2="fees.png";
}

		 
		 
		 
		 
		 
		 
		 
		 
		 ?>
		 
		 <?php } ?>
	<?php	 
		 
		 
		 $form=$_POST["form"];
$query="select * from $table where departmet='$t1' and matricule='$ss' and levels='$t2' and db1='$db1' and c139='1'order by db1 ASC";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
 
		 ?>
		 
		 <div class="page">
		  	 
		   <div style="margin:auto; width:800px; height:980px;background:url(reportss.png); ">
		 
		 <div style="float:left; width:800px; margin-top:40px; height:800px;">
		 <div style="float:left; width:140px;  height:100px; ">
		  <div style="float:left; margin-top:2px; margin-left:10px;">
		 <img src="<?php echo $img;?>" width="100px" height="100px" >

		 </div>
		 
		 </div>
		 
		 
		  <div style="float:left; width:360px;COLOR:#1188aa;  height:100px; ">
		 
		 
		  <div style="float:left;FONT-SIZE:22PX; width:300px;margin-top:0px;font-family: ‘Times New Roman’, Times, serif;  height:100px; ">

		  <div style="float:left;FONT-SIZE:20PX; width:250px; HEIGHT:30PX;">
		  
		  <b><?php echo $f1name;?> </b>
		 
		 </div> 
		 
		  <div style="float:left;FONT-SIZE:39PX;font-family:script;margin-TOP:-20px;margin-left:-40px; width:30px; HEIGHT:30PX;">
		 </div>
		 
		 <div style="float:left;FONT-SIZE:19PX; width:390px; HEIGHT:30PX;">
		  
		  <b></b>
		 
		 </div> 
		 
		 <div style="float:left;FONT-SIZE:14PX; width:390px; HEIGHT:30PX;">
		<?php echo $pobox;?><br>
		<?php echo $contact;?>
		 </div> 
		 
		 
		 
		 
		 
		 
		 
		 
		 </div>
		 
		 </div>
		 
		  <div style="float:left; width:300px;  height:100px;FONT-FAMILY;ARIAL; ">
		  
		  <div style="float:left; width:300px;FONT-SIZE:13PX;FONT-FAMILY:ARIAL;TEXT-ALIGN:CENTER;  height:40px; BACKGROUND:#ccc; BORDER:1PX SOLID #000;">
		  
		  
		  <div style="float:left; MARGIN-TOP:10PX;TEXT-ALIGN:CENTER;width:300px;COLOR:#000;"><B>
		  INDIVIDUAL - RESULT- SLIP</B>
		 
		 </div>
		 </div>
		 
		 </div>
		 
		  <div style="float:left; width:500px;margin-top:20px;  height:30px;"></div>
		 
		  <div style="float:left; width:300px;margin-top:30px;  height:30px; 
		  ">
		  <div style="float:left; MARGIN-LEFT:10PX; width:289px; HEIGHT:50PX;margin-top:-23px;  border:1px solid #ccc;">
		  
		  
		  <div style="float:left; width:188px; HEIGHT:25PX;border-BOTTOM:1px solid #ccc;border-RIGHT:1px solid #ccc;
		  
		  TEXT-ALIGN:CENTER; FONT-FAMILY:VERDANA;FONT-SIZE:13PX;">
		 
		  <div style="float:left; MARGIN-TOP:5PX;  TEXT-ALIGN:CENTER;width:188px;"> <B>ACADEMIC YEAR</B></DIV>
		  
		  
		  </DIV>
		  
		  
		  <div style="float:left; width:100px; height:25px; font-weight:normal;border-BOTTOM:1px solid #ccc;">
		  
		  
		  
		  <div style="float:left; MARGIN-TOP:5PX;  TEXT-ALIGN:CENTER;width:100px;"> <B><?PHP  echo $take;?></B></DIV>
		  
		  
		  </DIV>
		  
		  
		    
		  <div style="float:left; width:188px; HEIGHT:25PX;border-RIGHT:1px solid #ccc;
		  
		  TEXT-ALIGN:CENTER; FONT-FAMILY:VERDANA;FONT-SIZE:13PX;">
		 
		  <div style="float:left; MARGIN-TOP:5PX;  TEXT-ALIGN:CENTER;width:158px;"> <B>SEX</B></DIV>
		  
		  
		  </DIV>
		  
		  
		  <div style="float:left; width:100px; height:25px; font-weight:normal;">
		  
		  
		  
		  <div style="float:left; MARGIN-TOP:5PX;  TEXT-ALIGN:CENTER;width:100px;"> <B><?PHP ECHO $row['sex'];?></B></DIV>
		  
		  
		  </DIV>
		  
		  
		  </div>
		  
		  
		  </div>
		  
		  <div style="float:left; width:800px;font-family:arial;font-size:14px;  height:70px;border-top:1px solid #ccc; 
		  ">
		  
		  
		  <div style="float:left; width:178px; border-left:1px solid #ccc;  height:25px;border-right:1px solid #ccc;border-bottom:1px solid #ccc;">
		 
		 &nbsp;<b>STUDENT NAME </b>:
		 </div>
		 
		  <div style="float:left; width:250px;   height:25px;border-right:1px solid #ccc;border-bottom:1px solid #ccc;">
		  <b><?php $deptt=$row['departmet'];
		  $level=$row['levels'];echo $fname=$row['fname'];?></b>
		 </div>
		 
		  <div style="float:left; width:370px;   height:25px;border-right:1px solid #ccc;border-bottom:1px solid #ccc;">
		 <div style="float:left; width:370px;margin-left:265px;">

		 </div>
		  </div>
		 	  
		  <div style="float:left; width:178px; border-left:1px solid #ccc;  height:25px;border-right:1px solid #ccc;border-bottom:1px solid #ccc;">
		 
		 &nbsp;<b>MATRICULE </b>:
		 </div>
		 
		  <div style="float:left; width:250px;   height:25px;border-right:1px solid #ccc;border-bottom:1px solid #ccc;">
		 
		<?php echo $mats=$row['matricule'];?>
		 </div>
		 
		  <div style="float:left; width:100px;   height:25px;border-right:1px solid #ccc;border-bottom:1px solid #ccc;">
		 
Date of Birth
		 </div>
		  <div style="float:left; width:80px;   height:25px;border-right:1px solid #ccc;border-bottom:1px solid #ccc;">
		 
<?php echo $row['cxx2'];?>
		 </div>
		 
		 
		 
		 <div style="float:left; width:107px;   height:25px;border-right:1px solid #ccc;border-bottom:1px solid #ccc;">
		 
Place of Birth
		 </div>
		  <div style="float:left; width:84px;   height:25px;border-right:1px solid #ccc;border-bottom:1px solid #ccc;">
		 <?php echo $row['cxx1'];?>
		 </div>
		 
		<div style="float:left; width:178px; border-left:1px solid #ccc;   height:25px;border-right:1px solid #ccc;border-bottom:1px solid #ccc;">
		 
		 &nbsp;<b>FIELD OF STUDY </b>:
		 </div>
		 
		  <div style="float:left; width:150px;   height:25px;border-right:1px solid #ccc;border-bottom:1px solid #ccc;">
		 
		BUSINESS
		 </div>
		 
		  <div style="float:left; width:97px;   height:25px;border-right:1px solid #ccc;border-bottom:1px solid #ccc;">
		DEPARTMENT </div>
		    <div style="float:left; width:164px;   height:25px;border-right:1px solid #ccc;border-bottom:1px solid #ccc;">
		
<?php echo $row['departmet'];  $pt=$row['db1']?>
</div>
		 <div style="float:left; width:107px;   height:25px;border-right:1px solid #ccc;border-bottom:1px solid #ccc;">
		 LEVEL<?php echo $row['levels'];?>


		 </div> 
		   <div style="float:left; width:103px; border-right:1px solid #ccc;  height:25px;border-bottom:1px solid #ccc;">
		
		 </div> 
		 
		 	  <div style="float:left; width:800px;font-family:arial;font-size:18px;  height:20px;
		 text-align:center; margin-top:0px;color:#000; font-weight:bold;">
		 
		  <div style="float:left;margin-top:4px;width:800px;text-align:center;"> RESIT SEMESTER </div>
		  </div>
		 
		 
		 
		  
		  <div style="float:left;font-weight:normal; width:800px;font-family:arial;font-size:14px; margin-top:20px;background:#000;color:#fff; height:30px;border:1px solid #ccc; 
		  ">
		  
		  <div style="float:left; width:40px;height:35px;text-align:center;margin-top:5px;border-right:1px solid #fff;">SN</div>
		  <div style="float:left; width:90px;height:35px;text-align:center;margin-top:5px;border-right:1px solid #fff;"> CODE</div>
		   <div style="float:left; width:300px;height:35px;text-align:LEFT;margin-top:5px;border-right:1px solid #fff;">&nbsp;COURSE TITLE</div>
		 
		  <div style="float:left; width:100px;height:35px;text-align:CENTER;margin-top:0px;border-right:1px solid #fff;">&nbsp;CREDIT VALUE</div>
		   <div style="float:left; width:60px;height:35px;text-align:CENTER;margin-top:0px;border-right:1px solid #fff;">&nbsp;CA/30</div>
		 
		   <div style="float:left; width:65px;height:35px;text-align:CENTER;margin-top:0px;border-right:1px solid #fff;">&nbsp;EXAM/70</div>

		   <div style="float:left; width:65px;height:35px;text-align:CENTER;margin-top:0px;border-right:1px solid #fff;">&nbsp;TOTAL</div>
		   
		   <div style="float:left; width:65px;height:35px;text-align:CENTER;margin-top:0px;">&nbsp;GRADE</div>
		 </div> <?php 


$query = mysql_query("select  * from resit where db1='$take' and matricule='$mats' and departmet='$deptt' and sex='3' and levels='$level'order by fname ASC"); 
$i=1;
		 while ($row = mysql_fetch_array($query)) {
		 
		 
		 
		 
		 
		 ?>

		  <div style="float:left;font-weight:normal; width:800px;font-family:arial;font-size:14px; height:auto; ">
		
		  <div style="float:left;font-weight:normal;text-align:center; width:40px;font-family:arial;height:25px;border-bottom:1px dashed #ccc; border-left:1px solid #ccc; 
		; ">
		<?php echo $i++;?>
		</DIV>
		  <div style="float:left;font-weight:normal; width:90px;font-family:arial;height:25px;border-bottom:1px dashed #ccc; border-left:1px solid #ccc; 
		border-right:1px solid #ccc;; ">
		
		  <div style="float:left;margin-top:5px;margin-left:2px;">
		
		<?php echo $courseps=$row['fname'];
		
		
		$exam=$row['c102'];
		
		$cas=$row['c101'];?>
		
		</div>
		</div>
			  <div style="float:left;font-weight:normal;border-bottom:1px dashed #ccc; width:300px;font-family:arial;height:25px;border-left:1px solid #ccc; 
		border-right:1px solid #ccc; #ccc; ">
		  <div style="float:left;margin-top:5px;margin-left:2px;">
		<?php 
$qry = mysql_query("select  db1 as total
from subject where subject='$courseps' and  department='$deptt' and acc='$take'"); 
$row = mysql_fetch_assoc($qry); 
echo $richooTTT=$row['total']; 

$qry = mysql_query("select  credit as total
from subject where subject='$courseps' and acc='$take'"); 
$row = mysql_fetch_assoc($qry); 

$richooTTTy=$row['total']; 
?>
		</div>
		
		</div>

		
		

			  <div style="float:left;font-weight:normal;border-bottom:1px dashed #ccc; text-align:center;width:100px;font-family:arial;height:25px;border-left:1px solid #ccc; 
		border-right:1px solid #ccc;; ">
		  <div style="float:left;margin-top:5px;margin-left:28px;">
		
<?php echo 
$tm=$richooTTTy;?>
		

		</div>
		
		</div>
		

			  <div style="float:left;font-weight:normal; border-bottom:1px dashed #ccc;text-align:center;width:60px;font-family:arial;height:25px;border-left:1px solid #ccc; 
		border-right:1px solid #ccc; ">
		  <div style="float:left;margin-top:5px;margin-left:22px;">
		
<?php

$cas;

 $mxc11UIS=$cas;
if(empty($mxc11UIS)){

 ECHO $statusfbiomxc11UIS="X";}
elseif($mxc11UIS>'' ){

printf("%01.0f",( $mxc11UIS));
}





?>
		

		</div>
		
		</div>
		

			  <div style="float:left;font-weight:normal;text-align:center;border-bottom:1px dashed #ccc; width:62px;font-family:arial;height:25px;border-left:1px solid #ccc; 
		border-right:1px solid #ccc; ">
		  <div style="float:left;margin-top:5px;margin-left:22px;">
		
<?php 
$exam;

 $mxc11UI=$exam;
if(empty($mxc11UI)){

 ECHO $statusfbiomxc11UI="X";}
elseif($mxc11UI>'' ){
printf("%01.0f",( $mxc11UI));
}











?>
		

		</div>
		
		</div>
		
		
			  <div style="float:left;font-weight:normal;text-align:center;border-bottom:1px dashed #ccc; width:62px;font-family:arial;height:25px;border-left:1px solid #ccc; 
		border-right:1px solid #ccc;; ">
		  <div style="float:left;margin-top:5px;margin-left:22px;">
		
<?php $ns=
($exam+$cas); printf("%01.0f",( $ns));?>
		

		</div>
		
		</div>
		
		
			  <div style="float:left;font-weight:normal;text-align:center;border-bottom:1px dashed #ccc; width:85px;font-family:arial;height:25px;border-left:1px solid #ccc; ">
			  <div style="float:left;font-weight:normal;text-align:center;border-bottom:1px dashed #ccc; width:85px;font-family:arial;height:25px;border-left:1px solid #ccc; 
		border-right:1px solid #ccc; ">
		  <div style="float:left;margin-top:5px;margin-left:22px;">
		
<?php $ns=
($exam+$cas); 


 $mxc11=$ns;
 
 
if(empty($mxc11)){
 $colorf1bio="red";
 $statusfbio="";
 $statusfbio="F";
 echo'<div style=" color:'. $colorf1bio.';">'.$statusfbio.'</div>';}
elseif($mxc11>=$rangx1 && $mxc11<=$rangx2 ){
 $colorf1bio="#FF0000";
 $statusfbio="F";
 echo'<div style=" color:'. $colorf1bio.';">'.$statusfbio.'</div>';
}else if(($mxc11 >=$rangx3) && ($mxc11<=$rangx4)){
 $colorf1bio="blue";
 $statusfbio="D";
 echo'<div style=" color:'. $colorf1bio.';">'.$statusfbio.'</div>';}else if(($mxc11 >=$rangx5) && ($mxc11<=$rangx6)){
 $colorf1bio="blue";
 $statusfbio="C";
 echo'<div style=" color:'. $colorf1bio.';">'.$statusfbio.'</div>';}
 
 
else if(($mxc11 >=$rangx7) && ($mxc11<=$rangx8)){
 $colorf1bio="blue";
 $statusfbio="B";
 echo'<div style=" color:'. $colorf1bio.';">'.$statusfbio.'</div>';}
 
 
 else if(($mxc11 >=$rangx9) && ($mxc11<=$rangx10)){
 $colorf1bio="blue"; $statusfbio="A"; echo'<div style=" color:'. $colorf1bio.';">'.$statusfbio.'</div>';
} 
 
 
 
 
  $mxc11=$ns;
if(empty($mxc11)){
 $colorf1bio="red";
 $statusfbio="";}
elseif($mxc11>=$rangx1 && $mxc11<=$rangx2 ){
 $colorf1bio="#FF0000";
 $statusfbio=$gpa1; ;
}else if(($mxc11 >=$rangx3) && ($mxc11<=$rangx4)){
 $colorf1bio="blue";
 $statusfbio=$gpa2; ;}
 
 else if(($mxc11 >=$rangx5) && ($mxc11<=$rangx6)){
 $colorf1bio="blue";
 $statusfbio=$gpa3; }
 
 
else if(($mxc11 >=$rangx7) && ($mxc11<=$rangx8)){
 $colorf1bio="blue";
 $statusfbio=$gpa4; }
 
 
 else if(($mxc11 >=$rangx9) && ($mxc11<=$rangx10)){
 $colorf1bio="blue"; $statusfbio=$gpa5; 
} 
 
 
 
 else if(($mxc11 >=$rangx11) && ($mxc11<=$rangx12)){
 $colorf1bio="blue"; $statusfbio=$gpa6; 
} 
 
  else if(($mxc11 >=$rangx10) && ($mxc11<=$rangx14)){
 $colorf1bio="blue"; $statusfbio=$gpa7; 
} 
 
 
  else if(($mxc11 >=$rangx15) && ($mxc11<=$rangx16)){
 $colorf1bio="blue"; $statusfbio=$gpa8; 
} 

$manS=($exam+$cas);
$man=($exam+$cas)/5;
$ftsS=($manS*$tm);

$fts=($man*$tm);
$query3="update resit set c103='$fts',c104='$tm'
 where matricule='$mats' and departmet='$deptt'and levels='$level' and sex='3' and db1='$take' and fname='$courseps'";







mysql_query ($query3) or die ('could not updated:'.mysql_error());



 ?>

		</div>

				
		</div>

		</div>





		
		
		
		 
		 <?php } ?>
		 
		  <div style="float:left;font-weight:normal; width:800px;font-family:arial;font-size:14px; height:auto; ">
		
		  <div style="float:left;font-weight:normal; width:130px;font-family:arial;height:30px;
		border-bottom:1px solid #ccc; ">
		
		  <div style="float:left;margin-top:5px;margin-left:2px;">
		
<------------------------
		
		</div>
		</div>
			  <div style="float:left;font-weight:normal; width:300px;font-family:arial;height:30px;
border-bottom:1px solid #ccc; ">
		  <div style="float:left;margin-top:5px;margin-left:2px;">
	
<b>SEMESTER AV: </b><?php 



$qry = mysql_query("select sum(c103) as total
from resit where matricule='$mats' and departmet='$deptt'and levels='$level' and sex='3' and db1='$take'  "); 
$row = mysql_fetch_assoc($qry); 
$save=$row['total']; 
 


$qry = mysql_query("select sum(c104) as total
from resit where matricule='$mats' and departmet='$deptt'and levels='$level' and sex='3' and db1='$take'  "); 
$row = mysql_fetch_assoc($qry); 
$saves=$row['total']; 
 


$qry = mysql_query("select * FROM  resit where matricule='$mats' and departmet='$deptt'and levels='$level' and sex='3' and db1='$take'  "); 
$num_rows=mysql_num_rows($qry);
  $richooTTTyss=$num_rows; 

$mxc161=$saves;
if(empty($mxc161)){
 $colorf1bio="red";
}
elseif($mxc161>''){

printf("%01.2f",$ui=($save/$saves));

}



$query3r="update courses set c126='$ui'
 where matricule='$mats' and departmet='$deptt'and levels='$level'  and db1='$take' ";







mysql_query ($query3r) or die ('could not updated:'.mysql_error());


?>----



		printed on ---

		</div>
		
		</div>

		
		

			  <div style="float:left;font-weight:normal; text-align:center;width:100px;font-family:arial;height:30px;border-bottom:1px solid #ccc; ">
		  <div style="float:left;margin-top:5px;margin-left:28px;">


		</div>
		
		</div>
		

			  <div style="float:left;font-weight:normal; text-align:center;width:60px;font-family:arial;height:30px;border-bottom:1px solid #ccc; ">
		  <div style="float:left;margin-top:5px;margin-left:22px;">
<?php echo date('j/m/Y');









$rs_duplicate = mysql_query("select count(*) as total from average where departmet='$deptt'and levels='$level' and sex='3' and dbid='$take' and fname='$mats'") or die(mysql_error());
list($total) = mysql_fetch_row($rs_duplicate);

if ($total > 0)
{
$err[] = "ERROR - This Course has been filled see the dean of studies! .";
//header("Location: finances.php?msg=$err");
//exit();
}


if(empty($err)) {
  

$query4="insert into average  set av='$ui',departmet='$deptt',levels='$level',dbid='$take' ,total='$ftsS',fname='$mats',sex='3' ";







mysql_query ($query4) or die ('could not updated:'.mysql_error());






}











?>

		</div>
		
		</div>
		

			  <div style="float:left;font-weight:normal;text-align:center; width:62px;font-family:arial;height:30px;border-bottom:1px solid #ccc; ">
		  <div style="float:left;margin-top:5px;margin-left:22px;">
		


		</div>
		
		</div>
		
		
			  <div style="float:left;font-weight:normal;text-align:center; width:62px;font-family:arial;height:30px;border-bottom:1px solid #ccc; ">
		  <div style="float:left;margin-top:5px;margin-left:22px;">


		</div>
		
		</div>
		
		
			  <div style="float:left;font-weight:normal;text-align:center; width:71px;font-family:arial;height:30px;border-bottom:1px solid #ccc; ">
		  <div style="float:left;margin-top:5px;margin-left:22px;">

		

		</div>
		
		</div>
		  </div>
		  <div style="float:left;font-weight:normal; width:800px;font-family:arial;font-size:14px; height:105px; ">
		
			  <div style="float:left;font-weight:normal;text-align:right; margin-top:40px; width:71px;font-family:arial;height:160px;">
		  </div>
			  <div style="float:left;font-weight:normal;text-align:right; margin-top:40px; width:529px;font-family:arial;height:160px;">
		  </div>
		  
		  
		    <div style="float:left;font-weight:normal;text-align:right; margin-top:40px; width:171px;font-family:arial;height:160px;"><b>
SIGNATURE OF DEPUTY REGISTRAR I/C ACADEMIC AFFAIRS</b>
		  </div>
		  
		  
		  
		  
		  
		  <div style="float:left;font-weight:normal; width:800px;font-family:arial;font-size:14px; height:145px; ">
		  
		  
	    </div>
		  
		    </div>
		  
		    </div>

		    </div>
		  
		    </div>
		    </div>
		  
		 
		    </div>

		    </div>
		  
		    </div>
		    </div>
		 
		    </div>
		 
		    </div>
		 
		    </div>
		 
		 
		    </div>
		 
		    </div>
		  
		    </div>
		    </div>
		  
		    </div>
		    </div>
		 
		    </div>
		  
		    </div>
		    </div>
		  
		    </div>
		    </div>
		 
		    </div>
		  
		    </div>
		    </div>
		  
		    </div>
		    </div>
		 
		    </div>
		  
		    </div>
		    </div>
		  
		    </div>
		    </div>
		 
		    </div>
		  
		    </div>
		    </div>
		 <?php } ?>
	
		 
		 
		 
		 
		 
		 
	