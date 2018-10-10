<BR><BR><?PHP INCLUDE 'dbcs.PHP';
ini_set('max_execution_time', 3250000); //300 seconds = 5 minutes


$follows=$_POST['follows'];

$bookss=$_POST['bookss'];

$stetsub=$_POST['stetsub'];

$fname=$_POST["fname"];

?>
<html>

<?php
$query="select * from users where full_name='$notes'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
?>

<?php  $teacher=$row['fax'];
?>
<?php } ?>
<?php
$roll=$_GET["roll"];
$query="select * from courses where roll='$roll'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
?>

<?php  $fname=$row['fname'];$levelss=$row['levels'];$ids=$row['c110'];

 $departmet=$row['departmet'];
?>
<?php } ?>





<?php
$roll=$_GET["1"];
$query="select * from school where rx='1'and ids='$ids'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
?>

<?php  $school=$row[1];
$school2=$row[2];
?>
<?php } ?>
<?php
$roll=$_GET["1"];
$query="select * from school where rx='1'and ids='$ids'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
?>

<?php  $school6=$row[1];
$school6b=$row[2];
?>
<?php } ?>
<?php
$roll=$_GET["1"];
$query="select * from school where rx='2'  and ids='$ids'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
?>

<?php  $school7=$row[1];
$school7b=$row[2];
?>
<?php } ?><?php
$roll=$_GET["1"];
$query="select * from school where rx='8'and ids='$ids'";
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
$roll=$_GET["roll"];
$query="select * from courses where roll='$roll'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
?>

<?php  $fname=$row['fname'];$levelss=$row['levels'];

 $departmet=$row['departmet'];
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
<head><TITLE>All Result Slip for <?php echo $depatmet;?> </TITLE>
 <link rel="stylesheet" href="test.css" 
type="text/css">
<style>
body {size:A4 ;
        margin: 0;
        padding: 0;
        font: 25pt;
    }
    * {
        box-sizing: border-box;
        -moz-box-sizing: border-box;
    }
    .page {
        width: 750px;
        min-height: 47.7cm;
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
        size: A4 ;
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



th.rotate {
  /* Something you can count on */
  height: 150px;
  white-space: nowrap;
  padding:1px;
}

th.rotate > div {
	font-weight:normal;
  transform: 
    /* Magic Numbers */
    translate(2px, 51px)
    /* 45 is really 360 - 45 */
    rotate(270deg);font-family:calibri;
  width: 24px;
}
th.rotate > div > span {
  border-bottom: 1px solid #ccc;
margin-left:-40px;
  margin-top:-10px;font-family:calibri;
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
<?php $take=$row[1];
$table="courses";
?>
<?php } ?>

<?php
$form=$_POST["form"];
echo  $mat=$_GET["mat"];$db1=$_GET["db1"];
$query="select * from $table where matricule='$mat' and db1='$db1'  ";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
 $levelss=$row["levels"];   $departmet=$row["departmet"];
		 ?>
		 
		 <?php } ?>
<?php
$form=$_POST["form"];
$mat=$_GET["mat"];
$query="select * from $table where levels='$levelss' and departmet='$departmet'  and matricule='$mat' ";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
 
		 ?>
		  <div class="page"  >
		 <div style="margin:auto; width:800px; height:650px;">
		 <div style="float:left; width:800px; margin-top:20px; height:860px; BACKGROUND:URL(JIK.PNG);">
		 <div style="float:left; width:140px;  height:100px; ">
		  <div style="float:left; margin-top:2px; margin-left:10px;">
		 <img src="logo.png" width="100px" height="100px" >

		 </div>
		 
		 </div>
		 
		 
		  <div style="float:left; width:360px;COLOR:#1188aa;  height:100px; ">
		 
		 
		  <div style="float:left;FONT-SIZE:18PX; width:390px;margin-top:0px;font-family: ‘Times New Roman’, Times, serif;  height:100px; ">

		  <div style="float:left;FONT-SIZE:15PX; width:450px; HEIGHT:20PX;">
		  
		  <?php echo $school6;?>
		 
		 </div>
		 <div style="float:left;FONT-SIZE:14PX; width:390px; HEIGHT:21PX;">
<?php echo $school6b;?>
		 
		 </div> 
		 <div style="float:left;FONT-SIZE:14PX; width:390px; HEIGHT:21PX;">

<?php echo $school7;?>

		 
		 </div> 
		 
		 
	 <div style="float:left;FONT-SIZE:14PX; width:390px; HEIGHT:21PX;">

<?php echo $school7b;?>

		 
		 </div> 
		 
		 
		 
		 
		 
		 
		 
		 </div>
		 
		 </div>
		 
		  <div style="float:left; width:300px;  height:100px;FONT-FAMILY;ARIAL; ">
		  
		  <div style="float:left; width:300px;FONT-SIZE:13PX;FONT-FAMILY:ARIAL;TEXT-ALIGN:CENTER;  height:40px; ">
		  
		  
		  <div style="float:left; MARGIN-TOP:10PX;TEXT-ALIGN:CENTER;width:300px;COLOR:#000;"><B>
		 
		 </div>
		 </div>
		 
		 </div>
		 
		  <div style="float:left; width:800px;margin-top:20px;background:#ccc; border:1px solid #000; text-align:center;height:30px;font-size:18px;text-transform:uppercase;">student result slip</div>
		 
		  
		    
		 
		  <div style="float:left;font-weight:normal; width:800px;font-family:arial;font-size:14px; margin-top:10px; height:110px;border:1px solid #000; 
		  ">
		  
		  
		  <div style="float:left; width:380px;font-family:arial;font-size:14px; height:110px;border-right:1px solid #000; 
		  ">
		  
		  <div style="float:left; width:370px;font-family:arial;margin-left:5px; margin-top:5px;font-size:14px; height:20px;
		  "><b><u>GRADDING KEY</u></b></div>

		  <div style="float:left; width:165px;height:25px;">

		  	  <div style="float:left; width:25px;font-family:arial;font-size:14px; height:20;margin-left:10px;
		  ">
		  <?php echo $c8;?> : 
		  
		 </div> 
		  
 <div style="float:left; width:125;font-family:arial;font-size:14px; height:20px;margin-left:5px;
		  ">
		  <?php echo $rangx15;?> -
		  <?php echo $rangx16;?> %
		  <?php echo $gpa8;?>GP
		  
		 </div> 
		  
		  
		  
		  		  	  <div style="float:left; width:25px;font-family:arial;font-size:14px; height:20;margin-left:10px;
		  ">
		  <?php echo $c6;?> : 
		  
		 </div> 
		  
 <div style="float:left; width:125;font-family:arial;font-size:14px; height:20px;margin-left:5px;
		  ">
		  <?php echo $rangx11;?> -
		  <?php echo $rangx12;?> %
		  <?php echo $gpa6;?>GP
		  
		 </div> 
		  
		  		  		  	  <div style="float:left; width:28px;font-family:arial;font-size:14px; height:20;margin-left:10px;
		  ">
		  <?php echo $c5;?> : 
		  
		 </div> 
		  
 <div style="float:left; width:125;font-family:arial;font-size:14px; height:20px;margin-left:2px;
		  ">
		  <?php echo $rangx9;?> -
		  <?php echo $rangx10;?> %
		  <?php echo $gpa5;?>GP
		  
		 </div> 
		  
		 </div> 
		  
		  <div style="float:left; width:165px;height:25px;">
		  
		    	  <div style="float:left; width:28px;font-family:arial;font-size:14px; height:20;margin-left:10px;
		  ">
		  <?php echo $c4;?> : 
		  
		 </div> 
		  
 <div style="float:left; width:125;font-family:arial;font-size:14px; height:20px;margin-left:2px;
		  ">
		  <?php echo $rangx7;?> -
		  <?php echo $rangx8;?> %
		  <?php echo $gpa4;?>GP
		  
		 </div> 
		  
		  
		    	  <div style="float:left; width:28px;font-family:arial;font-size:14px; height:20;margin-left:10px;
		  ">
		  <?php echo $c3;?> : 
		  
		 </div> 
		  
 <div style="float:left; width:125;font-family:arial;font-size:14px; height:20px;margin-left:2px;
		  ">
		  <?php echo $rangx5;?> -
		  <?php echo $rangx6;?> %
		  <?php echo $gpa3;?>GP
		  
		 </div> 
		  
		  
		  
		  
		  
		      	  <div style="float:left; width:28px;font-family:arial;font-size:14px; height:20;margin-left:10px;
		  ">
		  <?php echo $c2;?> : 
		  
		 </div> 
		  
 <div style="float:left; width:125;font-family:arial;font-size:14px; height:20px;margin-left:2px;
		  ">
		  <?php echo $rangx3;?> -
		  <?php echo $rangx4;?> %
		  <?php echo $gpa2;?>GP
		  
		 </div> 
		  
		  
		  
		  
		      	  <div style="float:left; width:28px;font-family:arial;font-size:14px; height:20;margin-left:10px;
		  ">
		  <?php echo $c1;?> : 
		  
		 </div> 
		  
 <div style="float:left; width:125;font-family:arial;font-size:14px; height:20px;margin-left:2px;
		  ">
		  <?php echo $rangx1;?> -
		  <?php echo $rangx2;?> %
		  <?php echo $gpa1;?>GP
		  
		 </div> 
		  
		  
		  
		  
		  
		  
		 </div> 
		  

		 </div> 
		  
		  <div style="float:left; width:380px;font-family:arial;font-size:14px; margin-left:5px;height:110px;
		  ">
		  <div style="float:left; width:50px;font-family:arial;font-size:14px; height:22px;
		  ">
		  NAME:

		 </div> 
		   <div style="float:left; width:330px;font-family:arial;font-size:14px; height:22px;
		  ">
		  <b><?php $deptt=$row['departmet'];
		  $level=$row['levels'];echo $fname=$row['fname'];?></b>

		 </div> 

		 
		 
		 
		   <div style="float:left; width:80px;font-family:arial;font-size:14px; height:22px;
		  ">
		  MAT.NO

		 </div> 
		   <div style="float:left; width:100px;font-family:arial;font-size:14px; height:22px;
		  ">
		  <b><?php echo $mats=$row['matricule'];?></b>

		 </div> 
		 
		   <div style="float:left; width:50px;font-family:arial;font-size:14px; height:22px;
		  ">
		 DEPT:

		 </div>
		 
		 
		   <div style="float:left; width:150px;text-transform:uppercase;font-family:arial;font-size:14px; height:22px;
		  ">
<b><?php echo $deptt;?></b>
		 </div> 

		 
		 
		 

		   <div style="float:left; width:80px;font-family:arial;font-size:14px; height:22px;
		  ">
SEX:

		 </div> 
		   <div style="float:left; width:300px;font-family:arial;font-size:14px; height:22px;
		  ">
		  <b><?php echo $row['sex'];?></b>

		 </div>
		 
		   <div style="float:left; width:120px;font-family:arial;font-size:14px; height:22px;
		  ">
DATE OF BIRTH

		 </div> 
		   <div style="float:left; width:70px;font-family:arial;font-size:14px; height:22px;
		  ">
		  <b></b>

		 

		 </div> 		 
		 
		 
		   <div style="float:left; width:130px;font-family:arial;font-size:14px; height:22px;
		  ">
ACADEMIC YEAR :<?php echo $take;?>

		 </div> 
		 
		 
		 
		 
		 </div> 
		 </div> 
		  <div style="float:left; width:800px;margin-top:20px; border:1px solid #000; text-align:center;height:30px;font-size:18px;text-transform:uppercase;"><?php echo $term="1";
		  
		  
		  
		  
		  if(empty($term)){}elseif($term>="1" && $term<="1"){echo "First SEMESTER";
		  $xd="c103";
		  }
		  
		  elseif($term>="2" && $term<="2"){echo "Second Semester";		  $xd="c104";
		  }
		  elseif($term>="3" && $term<="3"){echo "Resit Semester";		  $xd="c105";
		  }
		  
		  elseif($term>="4" && $term<="4"){echo "First Semester Resit";		  $xd="c106";
		  }
		  
		  elseif($term>="5" && $term<="5"){echo "Second Semester Resit";		  $xd="c107";
		  }
		  
		  
		  
		  
		  ?></div>
		 
		  
		    
		  <div style="float:left;font-weight:normal; width:797px;font-family:arial;font-size:14px; margin-top:10px;font-weight:bold;background:#ccc;color:#000; height:40px;border:1px solid #000; 
		  ">
		  <div style="float:left; width:80px;height:40px;text-align:center;border-right:1px solid #000;">COURSE CODE</div>
		   <div style="float:left; width:400px;height:40px;text-align:center;border-right:1px solid #000;">&nbsp;COURSE TITLE</div>
		 
		  <div style="float:left; width:50px;height:40px;text-align:center;border-right:1px solid #000;">
		  CREDIT VALUE</div>
		   <div style="float:left; width:60px;height:40px;text-align:center;border-right:1px solid #000;">CA/30</div>
		 
		   <div style="float:left; width:62px;height:40px;text-align:center;border-right:1px solid #000;">EXAM/70</div>

		   <div style="float:left; width:65px;height:40px;text-align:center;border-right:1px solid #000;">TOTAL</div>
		   
		   <div style="float:left; width:65px;height:25px;text-align:CENTER;margin-top:0px;">&nbsp;GRADE</div>
		 </div> <?php 


$query = mysql_query("select  * from resit where db1='$take' and matricule='$mats' and departmet='$deptt' and sex='$term' and levels='$level'order by fname ASC"); 

		 while ($row = mysql_fetch_array($query)) {
		 
		 
		 
		 
		 
		 ?>

		  <div style="float:left;font-weight:normal; width:800px;font-family:arial;font-size:14px; height:auto; ">
		
		  <div style="float:left;font-weight:normal;border-bottom:1px dashed #000;border-bottom:1px dashed #000; width:80px;font-family:arial;height:25px;border-left:1px solid #000; 
		; ">
		
		  <div style="float:left;margin-top:5px;margin-left:2px;font-size:13px;">
		
		<?php echo $courseps=$row['fname'];
		
		
		$exam=$row['c102'];
		
		$cas=$row['c101'];?>
		
		</div>
		</div>
			  <div style="float:left;font-weight:normal;font-size:11.5px;border-bottom:1px dashed #000; width:400px;font-family:arial;height:25px;border-left:1px solid #000; 
	">
		  <div style="float:left;margin-top:5px;margin-left:2px;">
		<?php 
$qry = mysql_query("select  db1 as total
from subject where subject='$courseps' "); 
$row = mysql_fetch_assoc($qry); 
echo $richooTTT=$row['total']; 

$qry = mysql_query("select  credit as total
from credits where subject='$courseps' "); 
$row = mysql_fetch_assoc($qry); 

$richooTTTy=$row['total']; 
?>
		</div>
		
		</div>

		
		

			  <div style="float:left;font-weight:normal;text-align:center; border-bottom:1px dashed #000;text-align:center;width:50px;font-family:arial;height:25px;border-left:1px solid #000; 
	">
		  <div style="float:left;margin-top:5px;margin-left:28px;">
		
<?php echo 
$richooTTTy;?>
		

		</div>
		
		</div>
		

			  <div style="float:left;font-weight:normal;border-bottom:1px dashed #000; text-align:center;width:60px;font-family:arial;height:25px;border-left:1px solid #000; 
	 ">
		  <div style="float:left;margin-top:5px;margin-left:22px;">
		
<?php printf("%01.2f",
($cas));?>
		

		</div>
		
		</div>
		

			  <div style="float:left;font-weight:normal;border-bottom:1px dashed #000;text-align:center; width:62px;font-family:arial;height:25px;border-left:1px solid #000; 
		 ">
		  <div style="float:left;margin-top:5px;margin-left:22px;">
		
<?php printf("%01.2f",
( 
$exam));?>
		

		</div>
		
		</div>
		
		
			  <div style="float:left;border-bottom:1px dashed #000;font-weight:normal;text-align:center; width:65px;font-family:arial;height:25px;border-left:1px solid #000; 
		; ">
		  <div style="float:left;margin-top:5px;margin-left:22px;">
		
<?php $ns=
($exam+$cas); printf("%01.2f",
( $ns));?>
		

		</div>
		
		</div>
		
		
			  <div style="float:left;font-weight:normal;border-bottom:1px dashed #000;text-align:center; width:74px;font-family:arial;height:25px;border-left:1px solid #000; 
		border-right:1px solid #000; ">
		  <div style="float:left;margin-top:5px;margin-left:22px;">
		
<?php $ns=
($exam+$cas); 


 $mxc11=$ns;
 
 
if(empty($mxc11)){
 $colorf1bio="#FF0000";
 $statusfbio="F";
 
 echo'<div style=" color:'. $colorf1bio.';">'.$statusfbio.'</div>';
 
 
 }
elseif($mxc11>=$rangx1 && $mxc11<=$rangx2 ){
 $colorf1bio="#FF0000";
 $statusfbio="F";
 echo'<div style=" color:'. $colorf1bio.';">'.$statusfbio.'</div>';
}else if(($mxc11 >=$rangx3) && ($mxc11<=$rangx4)){
 $colorf1bio="blue";
 $statusfbio="D";
 echo'<div style=" color:'. $colorf1bio.';">'.$statusfbio.'</div>';}else if(($mxc11 >=$rangx5) && ($mxc11<=$rangx6)){
 $colorf1bio="blue";
 $statusfbio="D+";
 echo'<div style=" color:'. $colorf1bio.';">'.$statusfbio.'</div>';}
 
 
else if(($mxc11 >=$rangx7) && ($mxc11<=$rangx8)){
 $colorf1bio="blue";
 $statusfbio="C";
 echo'<div style=" color:'. $colorf1bio.';">'.$statusfbio.'</div>';}
 
 
 else if(($mxc11 >=$rangx9) && ($mxc11<=$rangx10)){
 $colorf1bio="blue"; $statusfbio="C+"; echo'<div style=" color:'. $colorf1bio.';">'.$statusfbio.'</div>';
} 
 
 
 
 else if(($mxc11 >=$rangx11) && ($mxc11<=$rangx12)){
 $colorf1bio="blue"; $statusfbio="B"; echo'<div style=" color:'. $colorf1bio.';">'.$statusfbio.'</div>';
} 
 
  else if(($mxc11 >=$rangx10) && ($mxc11<=$rangx14)){
 $colorf1bio="blue"; $statusfbio="B+"; echo'<div style=" color:'. $colorf1bio.';">'.$statusfbio.'</div>';
} 
 
 
  else if(($mxc11 >=$rangx15) && ($mxc11<=$rangx16)){
 $colorf1bio="blue"; $statusfbio="A"; echo'<div style=" color:'. $colorf1bio.';">'.$statusfbio.'</div>';
} 
 
 
 
  $mxc11=$ns;
if(empty($mxc11)){
  $colorf1bio="yellow";
 $statusfbio="F";}
elseif($mxc11>=$rangx1 && $mxc11<=$rangx2 ){
 $colorf1bio="#FF0000";
 $statusfbio=$gpa1; ;
}else if(($mxc11 >=$range3) && ($mxc11<=$range4)){
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
$mokkk=($statusfbio*$richooTTTy);

$query3="update resit set c103='$mokkk',c104='$richooTTTy'
 where matricule='$mats' and departmet='$deptt'and levels='$level' and sex='$term' and db1='$take' and fname='$courseps'";







mysql_query ($query3) or die ('could not updated:'.mysql_error());

 ?>

		</div>

				
		</div>

		</div>





		
		
		
		 
		 <?php } ?>
		 
		  <div style="float:left;font-weight:normal; width:800px;font-family:arial;font-size:14px; height:auto; ">
		
		  <div style="float:left;font-weight:normal; width:130px;font-family:arial;height:60px;
	border-bottom:1px solid #000; ">
		
		  <div style="float:left;margin-top:5px;margin-left:2px;">
		

		
		</div>
		</div>
			 
			  <div style="float:left;font-weight:normal; width:300px;font-family:arial;height:60px;
		border-bottom:1px solid #000; "><?php 



$qry = mysql_query("select sum(c103) as total
from resit where matricule='$mats' and departmet='$deptt'and levels='$level' and sex='$term' and db1='$take'  "); 
$row = mysql_fetch_assoc($qry); 
$save=$row['total']; 
 


$qry = mysql_query("select sum(c104) as total
from resit where matricule='$mats' and departmet='$deptt'and levels='$level' and sex='$term' and db1='$take'  "); 
$row = mysql_fetch_assoc($qry); 
$richooTTTyss=$row['total']; 
 

$mxc002=$save;
if(empty($mxc002)){
 $statusfbio="";
 }
elseif($mxc002>'' ){
 $colorf1bio="#FF0000";
 $statusfbio=($save/$richooTTTyss);
}
$queryf3="update courses set $xd='$statusfbio'
 where matricule='$mats' and departmet='$deptt'";





mysql_query ($queryf3) or die ();

$qry = mysql_query("select * FROM courses where departmet='$deptt' and levels='$level' and c103>='' and db1='$take'  "); 
$num_rows=mysql_num_rows($qry);
  $totalstudent=$num_rows; 


$qry = mysql_query("select * FROM courses where departmet='$deptt' and levels='$level' and c103>='0.0001' and db1='$take'  "); 
$num_rows=mysql_num_rows($qry);
  $totalstudente=$num_rows; 



$qry = mysql_query("select * FROM courses where departmet='$deptt' and levels='$level' and c103>='2' and db1='$take'  "); 
$num_rows=mysql_num_rows($qry);
  $totalstudentp=$num_rows; 

?>
		
		  <div style="float:left;width:360px;font-size:13px;">
			Total Student Enrolled: <?php echo   $totalstudent;?> Sat:<?php echo   $totalstudente;?>  Passed:<?php echo   $totalstudentp;?> Absent: <?php echo   ($totalstudent-$totalstudente);?>


		</div>
		  <div style="float:left;margin-top:25px;margin-left:2px;">
	
<b>SEMESTER GPA: </b><?php 
printf("%01.2f",($statusfbio));?>




		</div>
		
		
		</div>

		
		

			  <div style="float:left;font-weight:normal; text-align:center;width:100px;font-family:arial;height:60px; 
		border-bottom:1px solid #000; ">
		  <div style="float:left;margin-top:5px;margin-left:28px;">

		

		</div>
		
		</div>
		

			  <div style="float:left;font-weight:normal; text-align:center;width:60px;font-family:arial;height:60px;
		border-bottom:1px solid #000; ">
		  <div style="float:left;margin-top:5px;margin-left:22px;">


		</div>
		
		</div>
		

			  <div style="float:left;font-weight:normal;text-align:center; width:42px;font-family:arial;height:60px;
		border-bottom:1px solid #000; ">
		  <div style="float:left;margin-top:5px;margin-left:22px;">
		


		</div>
		
		</div>
		
		
			  <div style="float:left;font-weight:normal;text-align:center; width:82px;font-family:arial;height:60px;
		border-bottom:1px solid #000; ">
		  <div style="float:left;margin-top:5px;">
Printed on:-

		</div>
		
		</div>
		
		
			  <div style="float:left;font-weight:normal;text-align:center;	border-bottom:1px solid #000; width:81px;font-family:arial;height:60px;bborder-bottom:1px solid #000; ">
		  <div style="float:left;margin-top:5px;margin-left:22px;">
<?php echo date('j/m/y');?>
		

		</div>
		
		</div>
		  </div>
		  <div style="float:left;font-weight:normal; width:800px;font-family:arial;font-size:14px; height:125px; ">
		
			  <div style="float:left;font-weight:normal;text-align:right; margin-top:40px; width:71px;font-family:arial;height:60px;"><b>
</b>
		  </div>
			  <div style="float:left;font-weight:normal;text-align:right; margin-top:40px; width:529px;font-family:arial;height:60px;">
		  </div>
		  
		  
		    <div style="float:left;font-weight:normal;text-align:right; margin-top:40px; width:71px;font-family:arial;height:60px;"><b>
 <?php 
 $rtttttt="select * from signature where signame='1'";
$resultgssss=mysql_query($rtttttt);
		 while ($row = mysql_fetch_array($resultgssss)) {
		 
	?><?php echo $row["period"];?>
	<?php
	
}
	
	 ?></b>
		  </div>
		  
		  
		  
		  
		  
		  <div style="float:left;font-weight:normal; width:800px;font-family:arial;font-size:14px; height:45px; ">
		  
		  
		  
		    </div>
		  
		    </div>
		  
		    </div>

		    </div>
		  
		    </div>
		  
		    </div>
		 <?php } ?>
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
<?php

$form=$_POST["form"];
$query="select * from $table where levels='$levelss' and departmet='$departmet'  and matricule='$mat' ";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
 
		 ?>
		  <div class="page"  >
		 <div style="margin:auto; width:800px; height:650px;">
		 <div style="float:left; width:800px; margin-top:20px; height:860px; BACKGROUND:URL(JIK.PNG);">
		 <div style="float:left; width:140px;  height:100px; ">
		  <div style="float:left; margin-top:2px; margin-left:10px;">
		 <img src="logo.png" width="100px" height="100px" >

		 </div>
		 
		 </div>
		 
		 
		  <div style="float:left; width:360px;COLOR:#1188aa;  height:100px; ">
		 
		 
		  <div style="float:left;FONT-SIZE:18PX; width:390px;margin-top:0px;font-family: ‘Times New Roman’, Times, serif;  height:100px; ">

		  <div style="float:left;FONT-SIZE:15PX; width:450px; HEIGHT:20PX;">
		  
		  <?php echo $school6;?>
		 
		 </div>
		 <div style="float:left;FONT-SIZE:14PX; width:390px; HEIGHT:21PX;">
<?php echo $school6b;?>
		 
		 </div> 
		 <div style="float:left;FONT-SIZE:14PX; width:390px; HEIGHT:21PX;">

<?php echo $school7;?>

		 
		 </div> 
		 
		 
	 <div style="float:left;FONT-SIZE:14PX; width:390px; HEIGHT:21PX;">

<?php echo $school7b;?>

		 
		 </div> 
		 
		 
		 
		 
		 
		 
		 
		 </div>
		 
		 </div>
		 
		  <div style="float:left; width:300px;  height:100px;FONT-FAMILY;ARIAL; ">
		  
		  <div style="float:left; width:300px;FONT-SIZE:13PX;FONT-FAMILY:ARIAL;TEXT-ALIGN:CENTER;  height:40px; ">
		  
		  
		  <div style="float:left; MARGIN-TOP:10PX;TEXT-ALIGN:CENTER;width:300px;COLOR:#000;"><B>
		 
		 </div>
		 </div>
		 
		 </div>
		 
		  <div style="float:left; width:800px;margin-top:20px;background:#ccc; border:1px solid #000; text-align:center;height:30px;font-size:18px;text-transform:uppercase;">student result slip</div>
		 
		  
		    
		 
		  <div style="float:left;font-weight:normal; width:800px;font-family:arial;font-size:14px; margin-top:10px; height:110px;border:1px solid #000; 
		  ">
		  
		  
		  <div style="float:left; width:380px;font-family:arial;font-size:14px; height:110px;border-right:1px solid #000; 
		  ">
		  
		  <div style="float:left; width:370px;font-family:arial;margin-left:5px; margin-top:5px;font-size:14px; height:20px;
		  "><b><u>GRADDING KEY</u></b></div>

		  <div style="float:left; width:165px;height:25px;">

		  	  <div style="float:left; width:25px;font-family:arial;font-size:14px; height:20;margin-left:10px;
		  ">
		  <?php echo $c8;?> : 
		  
		 </div> 
		  
 <div style="float:left; width:125;font-family:arial;font-size:14px; height:20px;margin-left:5px;
		  ">
		  <?php echo $rangx15;?> -
		  <?php echo $rangx16;?> %
		  <?php echo $gpa8;?>GP
		  
		 </div> 
		  
		  
		  
		  		  	  <div style="float:left; width:25px;font-family:arial;font-size:14px; height:20;margin-left:10px;
		  ">
		  <?php echo $c6;?> : 
		  
		 </div> 
		  
 <div style="float:left; width:125;font-family:arial;font-size:14px; height:20px;margin-left:5px;
		  ">
		  <?php echo $rangx11;?> -
		  <?php echo $rangx12;?> %
		  <?php echo $gpa6;?>GP
		  
		 </div> 
		  
		  		  		  	  <div style="float:left; width:28px;font-family:arial;font-size:14px; height:20;margin-left:10px;
		  ">
		  <?php echo $c5;?> : 
		  
		 </div> 
		  
 <div style="float:left; width:125;font-family:arial;font-size:14px; height:20px;margin-left:2px;
		  ">
		  <?php echo $rangx9;?> -
		  <?php echo $rangx10;?> %
		  <?php echo $gpa5;?>GP
		  
		 </div> 
		  
		 </div> 
		  
		  <div style="float:left; width:165px;height:25px;">
		  
		    	  <div style="float:left; width:28px;font-family:arial;font-size:14px; height:20;margin-left:10px;
		  ">
		  <?php echo $c4;?> : 
		  
		 </div> 
		  
 <div style="float:left; width:125;font-family:arial;font-size:14px; height:20px;margin-left:2px;
		  ">
		  <?php echo $rangx7;?> -
		  <?php echo $rangx8;?> %
		  <?php echo $gpa4;?>GP
		  
		 </div> 
		  
		  
		    	  <div style="float:left; width:28px;font-family:arial;font-size:14px; height:20;margin-left:10px;
		  ">
		  <?php echo $c3;?> : 
		  
		 </div> 
		  
 <div style="float:left; width:125;font-family:arial;font-size:14px; height:20px;margin-left:2px;
		  ">
		  <?php echo $rangx5;?> -
		  <?php echo $rangx6;?> %
		  <?php echo $gpa3;?>GP
		  
		 </div> 
		  
		  
		  
		  
		  
		      	  <div style="float:left; width:28px;font-family:arial;font-size:14px; height:20;margin-left:10px;
		  ">
		  <?php echo $c2;?> : 
		  
		 </div> 
		  
 <div style="float:left; width:125;font-family:arial;font-size:14px; height:20px;margin-left:2px;
		  ">
		  <?php echo $rangx3;?> -
		  <?php echo $rangx4;?> %
		  <?php echo $gpa2;?>GP
		  
		 </div> 
		  
		  
		  
		  
		      	  <div style="float:left; width:28px;font-family:arial;font-size:14px; height:20;margin-left:10px;
		  ">
		  <?php echo $c1;?> : 
		  
		 </div> 
		  
 <div style="float:left; width:125;font-family:arial;font-size:14px; height:20px;margin-left:2px;
		  ">
		  <?php echo $rangx1;?> -
		  <?php echo $rangx2;?> %
		  <?php echo $gpa1;?>GP
		  
		 </div> 
		  
		  
		  
		  
		  
		  
		 </div> 
		  

		 </div> 
		  
		  <div style="float:left; width:380px;font-family:arial;font-size:14px; margin-left:5px;height:110px;
		  ">
		  <div style="float:left; width:50px;font-family:arial;font-size:14px; height:22px;
		  ">
		  NAME:

		 </div> 
		   <div style="float:left; width:330px;font-family:arial;font-size:14px; height:22px;
		  ">
		  <b><?php $deptt=$row['departmet'];
		  $level=$row['levels'];echo $fname=$row['fname'];?></b>

		 </div> 

		 
		 
		 
		   <div style="float:left; width:80px;font-family:arial;font-size:14px; height:22px;
		  ">
		  MAT.NO

		 </div> 
		   <div style="float:left; width:100px;font-family:arial;font-size:14px; height:22px;
		  ">
		  <b><?php echo $mats=$row['matricule'];?></b>

		 </div> 
		 
		   <div style="float:left; width:50px;font-family:arial;font-size:14px; height:22px;
		  ">
		 DEPT:

		 </div>
		 
		 
		   <div style="float:left; width:150px;text-transform:uppercase;font-family:arial;font-size:14px; height:22px;
		  ">
<b><?php echo $deptt;?></b>
		 </div> 

		 
		 
		 

		   <div style="float:left; width:80px;font-family:arial;font-size:14px; height:22px;
		  ">
SEX:

		 </div> 
		   <div style="float:left; width:300px;font-family:arial;font-size:14px; height:22px;
		  ">
		  <b><?php echo $row['sex'];?></b>

		 </div>
		 
		   <div style="float:left; width:120px;font-family:arial;font-size:14px; height:22px;
		  ">
DATE OF BIRTH

		 </div> 
		   <div style="float:left; width:70px;font-family:arial;font-size:14px; height:22px;
		  ">
		  <b></b>

		 

		 </div> 		 
		 
		 
		   <div style="float:left; width:130px;font-family:arial;font-size:14px; height:22px;
		  ">
ACADEMIC YEAR :<?php echo $take;?>

		 </div> 
		 
		 
		 
		 
		 </div> 
		 </div> 
		  <div style="float:left; width:800px;margin-top:20px; border:1px solid #000; text-align:center;height:30px;font-size:18px;text-transform:uppercase;"><?php echo $term="2";
		  
		  
		  
		  
		  if(empty($term)){}elseif($term>="1" && $term<="1"){echo "First SEMESTER";
		  $xd="c103";
		  }
		  
		  elseif($term>="2" && $term<="2"){echo "Second Semester";		  $xd="c104";
		  }
		  elseif($term>="3" && $term<="3"){echo "Resit Semester";		  $xd="c105";
		  }
		  
		  elseif($term>="4" && $term<="4"){echo "First Semester Resit";		  $xd="c106";
		  }
		  
		  elseif($term>="5" && $term<="5"){echo "Second Semester Resit";		  $xd="c107";
		  }
		  
		  
		  
		  
		  ?></div>
		 
		  
		    
		  <div style="float:left;font-weight:normal; width:797px;font-family:arial;font-size:14px; margin-top:10px;font-weight:bold;background:#ccc;color:#000; height:40px;border:1px solid #000; 
		  ">
		  <div style="float:left; width:80px;height:40px;text-align:center;border-right:1px solid #000;">COURSE CODE</div>
		   <div style="float:left; width:400px;height:40px;text-align:center;border-right:1px solid #000;">&nbsp;COURSE TITLE</div>
		 
		  <div style="float:left; width:50px;height:40px;text-align:center;border-right:1px solid #000;">
		  CREDIT VALUE</div>
		   <div style="float:left; width:60px;height:40px;text-align:center;border-right:1px solid #000;">CA/30</div>
		 
		   <div style="float:left; width:62px;height:40px;text-align:center;border-right:1px solid #000;">EXAM/70</div>

		   <div style="float:left; width:65px;height:40px;text-align:center;border-right:1px solid #000;">TOTAL</div>
		   
		   <div style="float:left; width:65px;height:25px;text-align:CENTER;margin-top:0px;">&nbsp;GRADE</div>
		 </div> <?php 


$query = mysql_query("select  * from resit where db1='$take' and matricule='$mats' and departmet='$deptt' and sex='$term' and levels='$level'order by fname ASC"); 

		 while ($row = mysql_fetch_array($query)) {
		 
		 
		 
		 
		 
		 ?>

		  <div style="float:left;font-weight:normal; width:800px;font-family:arial;font-size:14px; height:auto; ">
		
		  <div style="float:left;font-weight:normal;border-bottom:1px dashed #000;border-bottom:1px dashed #000; width:80px;font-family:arial;height:25px;border-left:1px solid #000; 
		; ">
		
		  <div style="float:left;margin-top:5px;margin-left:2px;font-size:13px;">
		
		<?php echo $courseps=$row['fname'];
		
		
		$exam=$row['c102'];
		
		$cas=$row['c101'];?>
		
		</div>
		</div>
			  <div style="float:left;font-weight:normal;font-size:11.5px;border-bottom:1px dashed #000; width:400px;font-family:arial;height:25px;border-left:1px solid #000; 
	">
		  <div style="float:left;margin-top:5px;margin-left:2px;">
		<?php 
$qry = mysql_query("select  db1 as total
from subject where subject='$courseps' "); 
$row = mysql_fetch_assoc($qry); 
echo $richooTTT=$row['total']; 

$qry = mysql_query("select  credit as total
from credits where subject='$courseps' "); 
$row = mysql_fetch_assoc($qry); 

$richooTTTy=$row['total']; 
?>
		</div>
		
		</div>

		
		

			  <div style="float:left;font-weight:normal;text-align:center; border-bottom:1px dashed #000;text-align:center;width:50px;font-family:arial;height:25px;border-left:1px solid #000; 
	">
		  <div style="float:left;margin-top:5px;margin-left:28px;">
		
<?php echo 
$richooTTTy;?>
		

		</div>
		
		</div>
		

			  <div style="float:left;font-weight:normal;border-bottom:1px dashed #000; text-align:center;width:60px;font-family:arial;height:25px;border-left:1px solid #000; 
	 ">
		  <div style="float:left;margin-top:5px;margin-left:22px;">
		
<?php printf("%01.2f",
($cas));?>
		

		</div>
		
		</div>
		

			  <div style="float:left;font-weight:normal;border-bottom:1px dashed #000;text-align:center; width:62px;font-family:arial;height:25px;border-left:1px solid #000; 
		 ">
		  <div style="float:left;margin-top:5px;margin-left:22px;">
		
<?php printf("%01.2f",
( 
$exam));?>
		

		</div>
		
		</div>
		
		
			  <div style="float:left;border-bottom:1px dashed #000;font-weight:normal;text-align:center; width:65px;font-family:arial;height:25px;border-left:1px solid #000; 
		; ">
		  <div style="float:left;margin-top:5px;margin-left:22px;">
		
<?php $ns=
($exam+$cas); printf("%01.2f",
( $ns));?>
		

		</div>
		
		</div>
		
		
			  <div style="float:left;font-weight:normal;border-bottom:1px dashed #000;text-align:center; width:74px;font-family:arial;height:25px;border-left:1px solid #000; 
		border-right:1px solid #000; ">
		  <div style="float:left;margin-top:5px;margin-left:22px;">
		
<?php $ns=
($exam+$cas); 


 $mxc11=$ns;
 
 
if(empty($mxc11)){
 $colorf1bio="#FF0000";
 $statusfbio="F";
 
 echo'<div style=" color:'. $colorf1bio.';">'.$statusfbio.'</div>';
 
 
 }
elseif($mxc11>=$rangx1 && $mxc11<=$rangx2 ){
 $colorf1bio="#FF0000";
 $statusfbio="F";
 echo'<div style=" color:'. $colorf1bio.';">'.$statusfbio.'</div>';
}else if(($mxc11 >=$rangx3) && ($mxc11<=$rangx4)){
 $colorf1bio="blue";
 $statusfbio="D";
 echo'<div style=" color:'. $colorf1bio.';">'.$statusfbio.'</div>';}else if(($mxc11 >=$rangx5) && ($mxc11<=$rangx6)){
 $colorf1bio="blue";
 $statusfbio="D+";
 echo'<div style=" color:'. $colorf1bio.';">'.$statusfbio.'</div>';}
 
 
else if(($mxc11 >=$rangx7) && ($mxc11<=$rangx8)){
 $colorf1bio="blue";
 $statusfbio="C";
 echo'<div style=" color:'. $colorf1bio.';">'.$statusfbio.'</div>';}
 
 
 else if(($mxc11 >=$rangx9) && ($mxc11<=$rangx10)){
 $colorf1bio="blue"; $statusfbio="C+"; echo'<div style=" color:'. $colorf1bio.';">'.$statusfbio.'</div>';
} 
 
 
 
 else if(($mxc11 >=$rangx11) && ($mxc11<=$rangx12)){
 $colorf1bio="blue"; $statusfbio="B"; echo'<div style=" color:'. $colorf1bio.';">'.$statusfbio.'</div>';
} 
 
  else if(($mxc11 >=$rangx10) && ($mxc11<=$rangx14)){
 $colorf1bio="blue"; $statusfbio="B+"; echo'<div style=" color:'. $colorf1bio.';">'.$statusfbio.'</div>';
} 
 
 
  else if(($mxc11 >=$rangx15) && ($mxc11<=$rangx16)){
 $colorf1bio="blue"; $statusfbio="A"; echo'<div style=" color:'. $colorf1bio.';">'.$statusfbio.'</div>';
} 
 
 
 
  $mxc11=$ns;
if(empty($mxc11)){
  $colorf1bio="yellow";
 $statusfbio="F";}
elseif($mxc11>=$rangx1 && $mxc11<=$rangx2 ){
 $colorf1bio="#FF0000";
 $statusfbio=$gpa1; ;
}else if(($mxc11 >=$range3) && ($mxc11<=$range4)){
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
$mokkk=($statusfbio*$richooTTTy);

$query3="update resit set c103='$mokkk',c104='$richooTTTy'
 where matricule='$mats' and departmet='$deptt'and levels='$level' and sex='$term' and db1='$take' and fname='$courseps'";







mysql_query ($query3) or die ('could not updated:'.mysql_error());

 ?>

		</div>

				
		</div>

		</div>





		
		
		
		 
		 <?php } ?>
		 
		  <div style="float:left;font-weight:normal; width:800px;font-family:arial;font-size:14px; height:auto; ">
		
		  <div style="float:left;font-weight:normal; width:130px;font-family:arial;height:60px;
	border-bottom:1px solid #000; ">
		
		  <div style="float:left;margin-top:5px;margin-left:2px;">
		

		
		</div>
		</div>
			 
			  <div style="float:left;font-weight:normal; width:300px;font-family:arial;height:60px;
		border-bottom:1px solid #000; "><?php 



$qry = mysql_query("select sum(c103) as total
from resit where matricule='$mats' and departmet='$deptt'and levels='$level' and sex='$term' and db1='$take'  "); 
$row = mysql_fetch_assoc($qry); 
$save=$row['total']; 
 


$qry = mysql_query("select sum(c104) as total
from resit where matricule='$mats' and departmet='$deptt'and levels='$level' and sex='$term' and db1='$take'  "); 
$row = mysql_fetch_assoc($qry); 
$richooTTTyss=$row['total']; 
 

$mxc002=$save;
if(empty($mxc002)){
 $statusfbio="";
 }
elseif($mxc002>'' ){
 $colorf1bio="#FF0000";
 $statusfbio=($save/$richooTTTyss);
}
$queryf3="update courses set $xd='$statusfbio'
 where matricule='$mats' and departmet='$deptt'";





mysql_query ($queryf3) or die ();

$qry = mysql_query("select * FROM courses where departmet='$deptt' and levels='$level' and c103>='' and db1='$take'  "); 
$num_rows=mysql_num_rows($qry);
  $totalstudent=$num_rows; 


$qry = mysql_query("select * FROM courses where departmet='$deptt' and levels='$level' and c103>='0.0001' and db1='$take'  "); 
$num_rows=mysql_num_rows($qry);
  $totalstudente=$num_rows; 



$qry = mysql_query("select * FROM courses where departmet='$deptt' and levels='$level' and c103>='2' and db1='$take'  "); 
$num_rows=mysql_num_rows($qry);
  $totalstudentp=$num_rows; 

?>
		
		  <div style="float:left;width:360px;font-size:13px;">
			Total Student Enrolled: <?php echo   $totalstudent;?> Sat:<?php echo   $totalstudente;?>  Passed:<?php echo   $totalstudentp;?> Absent: <?php echo   ($totalstudent-$totalstudente);?>


		</div>
		  <div style="float:left;margin-top:25px;margin-left:2px;">
	
<b>SEMESTER GPA: </b><?php 
printf("%01.2f",($statusfbio));?>




		</div>
		
		
		</div>

		
		

			  <div style="float:left;font-weight:normal; text-align:center;width:100px;font-family:arial;height:60px; 
		border-bottom:1px solid #000; ">
		  <div style="float:left;margin-top:5px;margin-left:28px;">

		

		</div>
		
		</div>
		

			  <div style="float:left;font-weight:normal; text-align:center;width:60px;font-family:arial;height:60px;
		border-bottom:1px solid #000; ">
		  <div style="float:left;margin-top:5px;margin-left:22px;">


		</div>
		
		</div>
		

			  <div style="float:left;font-weight:normal;text-align:center; width:42px;font-family:arial;height:60px;
		border-bottom:1px solid #000; ">
		  <div style="float:left;margin-top:5px;margin-left:22px;">
		


		</div>
		
		</div>
		
		
			  <div style="float:left;font-weight:normal;text-align:center; width:82px;font-family:arial;height:60px;
		border-bottom:1px solid #000; ">
		  <div style="float:left;margin-top:5px;">
Printed on:-

		</div>
		
		</div>
		
		
			  <div style="float:left;font-weight:normal;text-align:center;	border-bottom:1px solid #000; width:81px;font-family:arial;height:60px;bborder-bottom:1px solid #000; ">
		  <div style="float:left;margin-top:5px;margin-left:22px;">
<?php echo date('j/m/y');?>
		

		</div>
		
		</div>
		  </div>
		  <div style="float:left;font-weight:normal; width:800px;font-family:arial;font-size:14px; height:125px; ">
		
			  <div style="float:left;font-weight:normal;text-align:right; margin-top:40px; width:71px;font-family:arial;height:60px;"><b>
</b>
		  </div>
			  <div style="float:left;font-weight:normal;text-align:right; margin-top:40px; width:529px;font-family:arial;height:60px;">
		  </div>
		  
		  
		    <div style="float:left;font-weight:normal;text-align:right; margin-top:40px; width:71px;font-family:arial;height:60px;"><b>
 <?php 
 $rtttttt="select * from signature where signame='1'";
$resultgssss=mysql_query($rtttttt);
		 while ($row = mysql_fetch_array($resultgssss)) {
		 
	?><?php echo $row["period"];?>
	<?php
	
}
	
	 ?></b>
		  </div>
		  
		  
		  
		  
		  
		  <div style="float:left;font-weight:normal; width:800px;font-family:arial;font-size:14px; height:45px; ">
		  
		  
		  
		    </div>
		  
		    </div>
		  
		    </div>

		    </div>
		  
		    </div>
		  
		    </div>
		 <?php } ?>
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
<?php

$form=$_POST["form"];
$query="select * from $table where levels='$levelss' and departmet='$departmet'  and matricule='$mat' ";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
 
		 ?>
		  <div class="page"  >
		 <div style="margin:auto; width:800px; height:650px;">
		 <div style="float:left; width:800px; margin-top:20px; height:860px; BACKGROUND:URL(JIK.PNG);">
		 <div style="float:left; width:140px;  height:100px; ">
		  <div style="float:left; margin-top:2px; margin-left:10px;">
		 <img src="logo.png" width="100px" height="100px" >

		 </div>
		 
		 </div>
		 
		 
		  <div style="float:left; width:360px;COLOR:#1188aa;  height:100px; ">
		 
		 
		  <div style="float:left;FONT-SIZE:18PX; width:390px;margin-top:0px;font-family: ‘Times New Roman’, Times, serif;  height:100px; ">

		  <div style="float:left;FONT-SIZE:15PX; width:450px; HEIGHT:20PX;">
		  
		  <?php echo $school6;?>
		 
		 </div>
		 <div style="float:left;FONT-SIZE:14PX; width:390px; HEIGHT:21PX;">
<?php echo $school6b;?>
		 
		 </div> 
		 <div style="float:left;FONT-SIZE:14PX; width:390px; HEIGHT:21PX;">

<?php echo $school7;?>

		 
		 </div> 
		 
		 
	 <div style="float:left;FONT-SIZE:14PX; width:390px; HEIGHT:21PX;">

<?php echo $school7b;?>

		 
		 </div> 
		 
		 
		 
		 
		 
		 
		 
		 </div>
		 
		 </div>
		 
		  <div style="float:left; width:300px;  height:100px;FONT-FAMILY;ARIAL; ">
		  
		  <div style="float:left; width:300px;FONT-SIZE:13PX;FONT-FAMILY:ARIAL;TEXT-ALIGN:CENTER;  height:40px; ">
		  
		  
		  <div style="float:left; MARGIN-TOP:10PX;TEXT-ALIGN:CENTER;width:300px;COLOR:#000;"><B>
		 
		 </div>
		 </div>
		 
		 </div>
		 
		  <div style="float:left; width:800px;margin-top:20px;background:#ccc; border:1px solid #000; text-align:center;height:30px;font-size:18px;text-transform:uppercase;">student result slip</div>
		 
		  
		    
		 
		  <div style="float:left;font-weight:normal; width:800px;font-family:arial;font-size:14px; margin-top:10px; height:110px;border:1px solid #000; 
		  ">
		  
		  
		  <div style="float:left; width:380px;font-family:arial;font-size:14px; height:110px;border-right:1px solid #000; 
		  ">
		  
		  <div style="float:left; width:370px;font-family:arial;margin-left:5px; margin-top:5px;font-size:14px; height:20px;
		  "><b><u>GRADDING KEY</u></b></div>

		  <div style="float:left; width:165px;height:25px;">

		  	  <div style="float:left; width:25px;font-family:arial;font-size:14px; height:20;margin-left:10px;
		  ">
		  <?php echo $c8;?> : 
		  
		 </div> 
		  
 <div style="float:left; width:125;font-family:arial;font-size:14px; height:20px;margin-left:5px;
		  ">
		  <?php echo $rangx15;?> -
		  <?php echo $rangx16;?> %
		  <?php echo $gpa8;?>GP
		  
		 </div> 
		  
		  
		  
		  		  	  <div style="float:left; width:25px;font-family:arial;font-size:14px; height:20;margin-left:10px;
		  ">
		  <?php echo $c6;?> : 
		  
		 </div> 
		  
 <div style="float:left; width:125;font-family:arial;font-size:14px; height:20px;margin-left:5px;
		  ">
		  <?php echo $rangx11;?> -
		  <?php echo $rangx12;?> %
		  <?php echo $gpa6;?>GP
		  
		 </div> 
		  
		  		  		  	  <div style="float:left; width:28px;font-family:arial;font-size:14px; height:20;margin-left:10px;
		  ">
		  <?php echo $c5;?> : 
		  
		 </div> 
		  
 <div style="float:left; width:125;font-family:arial;font-size:14px; height:20px;margin-left:2px;
		  ">
		  <?php echo $rangx9;?> -
		  <?php echo $rangx10;?> %
		  <?php echo $gpa5;?>GP
		  
		 </div> 
		  
		 </div> 
		  
		  <div style="float:left; width:165px;height:25px;">
		  
		    	  <div style="float:left; width:28px;font-family:arial;font-size:14px; height:20;margin-left:10px;
		  ">
		  <?php echo $c4;?> : 
		  
		 </div> 
		  
 <div style="float:left; width:125;font-family:arial;font-size:14px; height:20px;margin-left:2px;
		  ">
		  <?php echo $rangx7;?> -
		  <?php echo $rangx8;?> %
		  <?php echo $gpa4;?>GP
		  
		 </div> 
		  
		  
		    	  <div style="float:left; width:28px;font-family:arial;font-size:14px; height:20;margin-left:10px;
		  ">
		  <?php echo $c3;?> : 
		  
		 </div> 
		  
 <div style="float:left; width:125;font-family:arial;font-size:14px; height:20px;margin-left:2px;
		  ">
		  <?php echo $rangx5;?> -
		  <?php echo $rangx6;?> %
		  <?php echo $gpa3;?>GP
		  
		 </div> 
		  
		  
		  
		  
		  
		      	  <div style="float:left; width:28px;font-family:arial;font-size:14px; height:20;margin-left:10px;
		  ">
		  <?php echo $c2;?> : 
		  
		 </div> 
		  
 <div style="float:left; width:125;font-family:arial;font-size:14px; height:20px;margin-left:2px;
		  ">
		  <?php echo $rangx3;?> -
		  <?php echo $rangx4;?> %
		  <?php echo $gpa2;?>GP
		  
		 </div> 
		  
		  
		  
		  
		      	  <div style="float:left; width:28px;font-family:arial;font-size:14px; height:20;margin-left:10px;
		  ">
		  <?php echo $c1;?> : 
		  
		 </div> 
		  
 <div style="float:left; width:125;font-family:arial;font-size:14px; height:20px;margin-left:2px;
		  ">
		  <?php echo $rangx1;?> -
		  <?php echo $rangx2;?> %
		  <?php echo $gpa1;?>GP
		  
		 </div> 
		  
		  
		  
		  
		  
		  
		 </div> 
		  

		 </div> 
		  
		  <div style="float:left; width:380px;font-family:arial;font-size:14px; margin-left:5px;height:110px;
		  ">
		  <div style="float:left; width:50px;font-family:arial;font-size:14px; height:22px;
		  ">
		  NAME:

		 </div> 
		   <div style="float:left; width:330px;font-family:arial;font-size:14px; height:22px;
		  ">
		  <b><?php $deptt=$row['departmet'];
		  $level=$row['levels'];echo $fname=$row['fname'];?></b>

		 </div> 

		 
		 
		 
		   <div style="float:left; width:80px;font-family:arial;font-size:14px; height:22px;
		  ">
		  MAT.NO

		 </div> 
		   <div style="float:left; width:100px;font-family:arial;font-size:14px; height:22px;
		  ">
		  <b><?php echo $mats=$row['matricule'];?></b>

		 </div> 
		 
		   <div style="float:left; width:50px;font-family:arial;font-size:14px; height:22px;
		  ">
		 DEPT:

		 </div>
		 
		 
		   <div style="float:left; width:150px;text-transform:uppercase;font-family:arial;font-size:14px; height:22px;
		  ">
<b><?php echo $deptt;?></b>
		 </div> 

		 
		 
		 

		   <div style="float:left; width:80px;font-family:arial;font-size:14px; height:22px;
		  ">
SEX:

		 </div> 
		   <div style="float:left; width:300px;font-family:arial;font-size:14px; height:22px;
		  ">
		  <b><?php echo $row['sex'];?></b>

		 </div>
		 
		   <div style="float:left; width:120px;font-family:arial;font-size:14px; height:22px;
		  ">
DATE OF BIRTH

		 </div> 
		   <div style="float:left; width:70px;font-family:arial;font-size:14px; height:22px;
		  ">
		  <b></b>

		 

		 </div> 		 
		 
		 
		   <div style="float:left; width:130px;font-family:arial;font-size:14px; height:22px;
		  ">
ACADEMIC YEAR :<?php echo $take;?>

		 </div> 
		 
		 
		 
		 
		 </div> 
		 </div> 
		  <div style="float:left; width:800px;margin-top:20px; border:1px solid #000; text-align:center;height:30px;font-size:18px;text-transform:uppercase;"><?php echo $term="3";
		  
		  
		  
		  
		  if(empty($term)){}elseif($term>="1" && $term<="1"){echo "First SEMESTER";
		  $xd="c103";
		  }
		  
		  elseif($term>="2" && $term<="2"){echo "Second Semester";		  $xd="c104";
		  }
		  elseif($term>="3" && $term<="3"){echo "Resit Semester";		  $xd="c105";
		  }
		  
		  elseif($term>="4" && $term<="4"){echo "First Semester Resit";		  $xd="c106";
		  }
		  
		  elseif($term>="5" && $term<="5"){echo "Second Semester Resit";		  $xd="c107";
		  }
		  
		  
		  
		  
		  ?></div>
		 
		  
		    
		  <div style="float:left;font-weight:normal; width:797px;font-family:arial;font-size:14px; margin-top:10px;font-weight:bold;background:#ccc;color:#000; height:40px;border:1px solid #000; 
		  ">
		  <div style="float:left; width:80px;height:40px;text-align:center;border-right:1px solid #000;">COURSE CODE</div>
		   <div style="float:left; width:400px;height:40px;text-align:center;border-right:1px solid #000;">&nbsp;COURSE TITLE</div>
		 
		  <div style="float:left; width:50px;height:40px;text-align:center;border-right:1px solid #000;">
		  CREDIT VALUE</div>
		   <div style="float:left; width:60px;height:40px;text-align:center;border-right:1px solid #000;">CA/30</div>
		 
		   <div style="float:left; width:62px;height:40px;text-align:center;border-right:1px solid #000;">EXAM/70</div>

		   <div style="float:left; width:65px;height:40px;text-align:center;border-right:1px solid #000;">TOTAL</div>
		   
		   <div style="float:left; width:65px;height:25px;text-align:CENTER;margin-top:0px;">&nbsp;GRADE</div>
		 </div> <?php 


$query = mysql_query("select  * from resit where db1='$take' and matricule='$mats' and departmet='$deptt' and sex='$term' and levels='$level'order by fname ASC"); 

		 while ($row = mysql_fetch_array($query)) {
		 
		 
		 
		 
		 
		 ?>

		  <div style="float:left;font-weight:normal; width:800px;font-family:arial;font-size:14px; height:auto; ">
		
		  <div style="float:left;font-weight:normal;border-bottom:1px dashed #000;border-bottom:1px dashed #000; width:80px;font-family:arial;height:25px;border-left:1px solid #000; 
		; ">
		
		  <div style="float:left;margin-top:5px;margin-left:2px;font-size:13px;">
		
		<?php echo $courseps=$row['fname'];
		
		
		$exam=$row['c102'];
		
		$cas=$row['c101'];?>
		
		</div>
		</div>
			  <div style="float:left;font-weight:normal;font-size:11.5px;border-bottom:1px dashed #000; width:400px;font-family:arial;height:25px;border-left:1px solid #000; 
	">
		  <div style="float:left;margin-top:5px;margin-left:2px;">
		<?php 
$qry = mysql_query("select  db1 as total
from subject where subject='$courseps' "); 
$row = mysql_fetch_assoc($qry); 
echo $richooTTT=$row['total']; 

$qry = mysql_query("select  credit as total
from credits where subject='$courseps' "); 
$row = mysql_fetch_assoc($qry); 

$richooTTTy=$row['total']; 
?>
		</div>
		
		</div>

		
		

			  <div style="float:left;font-weight:normal;text-align:center; border-bottom:1px dashed #000;text-align:center;width:50px;font-family:arial;height:25px;border-left:1px solid #000; 
	">
		  <div style="float:left;margin-top:5px;margin-left:28px;">
		
<?php echo 
$richooTTTy;?>
		

		</div>
		
		</div>
		

			  <div style="float:left;font-weight:normal;border-bottom:1px dashed #000; text-align:center;width:60px;font-family:arial;height:25px;border-left:1px solid #000; 
	 ">
		  <div style="float:left;margin-top:5px;margin-left:22px;">
		
<?php printf("%01.2f",
($cas));?>
		

		</div>
		
		</div>
		

			  <div style="float:left;font-weight:normal;border-bottom:1px dashed #000;text-align:center; width:62px;font-family:arial;height:25px;border-left:1px solid #000; 
		 ">
		  <div style="float:left;margin-top:5px;margin-left:22px;">
		
<?php printf("%01.2f",
( 
$exam));?>
		

		</div>
		
		</div>
		
		
			  <div style="float:left;border-bottom:1px dashed #000;font-weight:normal;text-align:center; width:65px;font-family:arial;height:25px;border-left:1px solid #000; 
		; ">
		  <div style="float:left;margin-top:5px;margin-left:22px;">
		
<?php $ns=
($exam+$cas); printf("%01.2f",
( $ns));?>
		

		</div>
		
		</div>
		
		
			  <div style="float:left;font-weight:normal;border-bottom:1px dashed #000;text-align:center; width:74px;font-family:arial;height:25px;border-left:1px solid #000; 
		border-right:1px solid #000; ">
		  <div style="float:left;margin-top:5px;margin-left:22px;">
		
<?php $ns=
($exam+$cas); 


 $mxc11=$ns;
 
 
if(empty($mxc11)){
 $colorf1bio="#FF0000";
 $statusfbio="F";
 
 echo'<div style=" color:'. $colorf1bio.';">'.$statusfbio.'</div>';
 
 
 }
elseif($mxc11>=$rangx1 && $mxc11<=$rangx2 ){
 $colorf1bio="#FF0000";
 $statusfbio="F";
 echo'<div style=" color:'. $colorf1bio.';">'.$statusfbio.'</div>';
}else if(($mxc11 >=$rangx3) && ($mxc11<=$rangx4)){
 $colorf1bio="blue";
 $statusfbio="D";
 echo'<div style=" color:'. $colorf1bio.';">'.$statusfbio.'</div>';}else if(($mxc11 >=$rangx5) && ($mxc11<=$rangx6)){
 $colorf1bio="blue";
 $statusfbio="D+";
 echo'<div style=" color:'. $colorf1bio.';">'.$statusfbio.'</div>';}
 
 
else if(($mxc11 >=$rangx7) && ($mxc11<=$rangx8)){
 $colorf1bio="blue";
 $statusfbio="C";
 echo'<div style=" color:'. $colorf1bio.';">'.$statusfbio.'</div>';}
 
 
 else if(($mxc11 >=$rangx9) && ($mxc11<=$rangx10)){
 $colorf1bio="blue"; $statusfbio="C+"; echo'<div style=" color:'. $colorf1bio.';">'.$statusfbio.'</div>';
} 
 
 
 
 else if(($mxc11 >=$rangx11) && ($mxc11<=$rangx12)){
 $colorf1bio="blue"; $statusfbio="B"; echo'<div style=" color:'. $colorf1bio.';">'.$statusfbio.'</div>';
} 
 
  else if(($mxc11 >=$rangx10) && ($mxc11<=$rangx14)){
 $colorf1bio="blue"; $statusfbio="B+"; echo'<div style=" color:'. $colorf1bio.';">'.$statusfbio.'</div>';
} 
 
 
  else if(($mxc11 >=$rangx15) && ($mxc11<=$rangx16)){
 $colorf1bio="blue"; $statusfbio="A"; echo'<div style=" color:'. $colorf1bio.';">'.$statusfbio.'</div>';
} 
 
 
 
  $mxc11=$ns;
if(empty($mxc11)){
  $colorf1bio="yellow";
 $statusfbio="F";}
elseif($mxc11>=$rangx1 && $mxc11<=$rangx2 ){
 $colorf1bio="#FF0000";
 $statusfbio=$gpa1; ;
}else if(($mxc11 >=$range3) && ($mxc11<=$range4)){
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
$mokkk=($statusfbio*$richooTTTy);

$query3="update resit set c103='$mokkk',c104='$richooTTTy'
 where matricule='$mats' and departmet='$deptt'and levels='$level' and sex='$term' and db1='$take' and fname='$courseps'";







mysql_query ($query3) or die ('could not updated:'.mysql_error());

 ?>

		</div>

				
		</div>

		</div>





		
		
		
		 
		 <?php } ?>
		 
		  <div style="float:left;font-weight:normal; width:800px;font-family:arial;font-size:14px; height:auto; ">
		
		  <div style="float:left;font-weight:normal; width:130px;font-family:arial;height:60px;
	border-bottom:1px solid #000; ">
		
		  <div style="float:left;margin-top:5px;margin-left:2px;">
		

		
		</div>
		</div>
			 
			  <div style="float:left;font-weight:normal; width:300px;font-family:arial;height:60px;
		border-bottom:1px solid #000; "><?php 



$qry = mysql_query("select sum(c103) as total
from resit where matricule='$mats' and departmet='$deptt'and levels='$level' and sex='$term' and db1='$take'  "); 
$row = mysql_fetch_assoc($qry); 
$save=$row['total']; 
 


$qry = mysql_query("select sum(c104) as total
from resit where matricule='$mats' and departmet='$deptt'and levels='$level' and sex='$term' and db1='$take'  "); 
$row = mysql_fetch_assoc($qry); 
$richooTTTyss=$row['total']; 
 

$mxc002=$save;
if(empty($mxc002)){
 $statusfbio="";
 }
elseif($mxc002>'' ){
 $colorf1bio="#FF0000";
 $statusfbio=($save/$richooTTTyss);
}
$queryf3="update courses set $xd='$statusfbio'
 where matricule='$mats' and departmet='$deptt'";





mysql_query ($queryf3) or die ();

$qry = mysql_query("select * FROM courses where departmet='$deptt' and levels='$level' and c103>='' and db1='$take'  "); 
$num_rows=mysql_num_rows($qry);
  $totalstudent=$num_rows; 


$qry = mysql_query("select * FROM courses where departmet='$deptt' and levels='$level' and c103>='0.0001' and db1='$take'  "); 
$num_rows=mysql_num_rows($qry);
  $totalstudente=$num_rows; 



$qry = mysql_query("select * FROM courses where departmet='$deptt' and levels='$level' and c103>='2' and db1='$take'  "); 
$num_rows=mysql_num_rows($qry);
  $totalstudentp=$num_rows; 

?>
		
		  <div style="float:left;width:360px;font-size:13px;">
			Total Student Enrolled: <?php echo   $totalstudent;?> Sat:<?php echo   $totalstudente;?>  Passed:<?php echo   $totalstudentp;?> Absent: <?php echo   ($totalstudent-$totalstudente);?>


		</div>
		  <div style="float:left;margin-top:25px;margin-left:2px;">
	
<b>SEMESTER GPA: </b><?php 
printf("%01.2f",($statusfbio));?>




		</div>
		
		
		</div>

		
		

			  <div style="float:left;font-weight:normal; text-align:center;width:100px;font-family:arial;height:60px; 
		border-bottom:1px solid #000; ">
		  <div style="float:left;margin-top:5px;margin-left:28px;">

		

		</div>
		
		</div>
		

			  <div style="float:left;font-weight:normal; text-align:center;width:60px;font-family:arial;height:60px;
		border-bottom:1px solid #000; ">
		  <div style="float:left;margin-top:5px;margin-left:22px;">


		</div>
		
		</div>
		

			  <div style="float:left;font-weight:normal;text-align:center; width:42px;font-family:arial;height:60px;
		border-bottom:1px solid #000; ">
		  <div style="float:left;margin-top:5px;margin-left:22px;">
		


		</div>
		
		</div>
		
		
			  <div style="float:left;font-weight:normal;text-align:center; width:82px;font-family:arial;height:60px;
		border-bottom:1px solid #000; ">
		  <div style="float:left;margin-top:5px;">
Printed on:-

		</div>
		
		</div>
		
		
			  <div style="float:left;font-weight:normal;text-align:center;	border-bottom:1px solid #000; width:81px;font-family:arial;height:60px;bborder-bottom:1px solid #000; ">
		  <div style="float:left;margin-top:5px;margin-left:22px;">
<?php echo date('j/m/y');?>
		

		</div>
		
		</div>
		  </div>
		  <div style="float:left;font-weight:normal; width:800px;font-family:arial;font-size:14px; height:125px; ">
		
			  <div style="float:left;font-weight:normal;text-align:right; margin-top:40px; width:71px;font-family:arial;height:60px;"><b>
</b>
		  </div>
			  <div style="float:left;font-weight:normal;text-align:right; margin-top:40px; width:529px;font-family:arial;height:60px;">
		  </div>
		  
		  
		    <div style="float:left;font-weight:normal;text-align:right; margin-top:40px; width:71px;font-family:arial;height:60px;"><b>
 <?php 
 $rtttttt="select * from signature where signame='1'";
$resultgssss=mysql_query($rtttttt);
		 while ($row = mysql_fetch_array($resultgssss)) {
		 
	?><?php echo $row["period"];?>
	<?php
	
}
	
	 ?></b>
		  </div>
		  
		  
		  
		  
		  
		  <div style="float:left;font-weight:normal; width:800px;font-family:arial;font-size:14px; height:45px; ">
		  
		  
		  
		    </div>
		  
		    </div>
		  
		    </div>

		    </div>
		  
		    </div>
		  
		    </div>
		 <?php } ?>
		 
		 
		 
<?php

$form=$_POST["form"];
$query="select * from $table where levels='$levelss' and departmet='$departmet'  and matricule='$mat' ";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
 
		 ?>
		  <div class="page"  >
		 <div style="margin:auto; width:800px; height:650px;">
		 <div style="float:left; width:800px; margin-top:20px; height:860px; BACKGROUND:URL(JIK.PNG);">
		 <div style="float:left; width:140px;  height:100px; ">
		  <div style="float:left; margin-top:2px; margin-left:10px;">
		 <img src="logo.png" width="100px" height="100px" >

		 </div>
		 
		 </div>
		 
		 
		  <div style="float:left; width:360px;COLOR:#1188aa;  height:100px; ">
		 
		 
		  <div style="float:left;FONT-SIZE:18PX; width:390px;margin-top:0px;font-family: ‘Times New Roman’, Times, serif;  height:100px; ">

		  <div style="float:left;FONT-SIZE:15PX; width:450px; HEIGHT:20PX;">
		  
		  <?php echo $school6;?>
		 
		 </div>
		 <div style="float:left;FONT-SIZE:14PX; width:390px; HEIGHT:21PX;">
<?php echo $school6b;?>
		 
		 </div> 
		 <div style="float:left;FONT-SIZE:14PX; width:390px; HEIGHT:21PX;">

<?php echo $school7;?>

		 
		 </div> 
		 
		 
	 <div style="float:left;FONT-SIZE:14PX; width:390px; HEIGHT:21PX;">

<?php echo $school7b;?>

		 
		 </div> 
		 
		 
		 
		 
		 
		 
		 
		 </div>
		 
		 </div>
		 
		  <div style="float:left; width:300px;  height:100px;FONT-FAMILY;ARIAL; ">
		  
		  <div style="float:left; width:300px;FONT-SIZE:13PX;FONT-FAMILY:ARIAL;TEXT-ALIGN:CENTER;  height:40px; ">
		  
		  
		  <div style="float:left; MARGIN-TOP:10PX;TEXT-ALIGN:CENTER;width:300px;COLOR:#000;"><B>
		 
		 </div>
		 </div>
		 
		 </div>
		 
		  <div style="float:left; width:800px;margin-top:20px;background:#ccc; border:1px solid #000; text-align:center;height:30px;font-size:18px;text-transform:uppercase;">student result slip</div>
		 
		  
		    
		 
		  <div style="float:left;font-weight:normal; width:800px;font-family:arial;font-size:14px; margin-top:10px; height:110px;border:1px solid #000; 
		  ">
		  
		  
		  <div style="float:left; width:380px;font-family:arial;font-size:14px; height:110px;border-right:1px solid #000; 
		  ">
		  
		  <div style="float:left; width:370px;font-family:arial;margin-left:5px; margin-top:5px;font-size:14px; height:20px;
		  "><b><u>GRADDING KEY</u></b></div>

		  <div style="float:left; width:165px;height:25px;">

		  	  <div style="float:left; width:25px;font-family:arial;font-size:14px; height:20;margin-left:10px;
		  ">
		  <?php echo $c8;?> : 
		  
		 </div> 
		  
 <div style="float:left; width:125;font-family:arial;font-size:14px; height:20px;margin-left:5px;
		  ">
		  <?php echo $rangx15;?> -
		  <?php echo $rangx16;?> %
		  <?php echo $gpa8;?>GP
		  
		 </div> 
		  
		  
		  
		  		  	  <div style="float:left; width:25px;font-family:arial;font-size:14px; height:20;margin-left:10px;
		  ">
		  <?php echo $c6;?> : 
		  
		 </div> 
		  
 <div style="float:left; width:125;font-family:arial;font-size:14px; height:20px;margin-left:5px;
		  ">
		  <?php echo $rangx11;?> -
		  <?php echo $rangx12;?> %
		  <?php echo $gpa6;?>GP
		  
		 </div> 
		  
		  		  		  	  <div style="float:left; width:28px;font-family:arial;font-size:14px; height:20;margin-left:10px;
		  ">
		  <?php echo $c5;?> : 
		  
		 </div> 
		  
 <div style="float:left; width:125;font-family:arial;font-size:14px; height:20px;margin-left:2px;
		  ">
		  <?php echo $rangx9;?> -
		  <?php echo $rangx10;?> %
		  <?php echo $gpa5;?>GP
		  
		 </div> 
		  
		 </div> 
		  
		  <div style="float:left; width:165px;height:25px;">
		  
		    	  <div style="float:left; width:28px;font-family:arial;font-size:14px; height:20;margin-left:10px;
		  ">
		  <?php echo $c4;?> : 
		  
		 </div> 
		  
 <div style="float:left; width:125;font-family:arial;font-size:14px; height:20px;margin-left:2px;
		  ">
		  <?php echo $rangx7;?> -
		  <?php echo $rangx8;?> %
		  <?php echo $gpa4;?>GP
		  
		 </div> 
		  
		  
		    	  <div style="float:left; width:28px;font-family:arial;font-size:14px; height:20;margin-left:10px;
		  ">
		  <?php echo $c3;?> : 
		  
		 </div> 
		  
 <div style="float:left; width:125;font-family:arial;font-size:14px; height:20px;margin-left:2px;
		  ">
		  <?php echo $rangx5;?> -
		  <?php echo $rangx6;?> %
		  <?php echo $gpa3;?>GP
		  
		 </div> 
		  
		  
		  
		  
		  
		      	  <div style="float:left; width:28px;font-family:arial;font-size:14px; height:20;margin-left:10px;
		  ">
		  <?php echo $c2;?> : 
		  
		 </div> 
		  
 <div style="float:left; width:125;font-family:arial;font-size:14px; height:20px;margin-left:2px;
		  ">
		  <?php echo $rangx3;?> -
		  <?php echo $rangx4;?> %
		  <?php echo $gpa2;?>GP
		  
		 </div> 
		  
		  
		  
		  
		      	  <div style="float:left; width:28px;font-family:arial;font-size:14px; height:20;margin-left:10px;
		  ">
		  <?php echo $c1;?> : 
		  
		 </div> 
		  
 <div style="float:left; width:125;font-family:arial;font-size:14px; height:20px;margin-left:2px;
		  ">
		  <?php echo $rangx1;?> -
		  <?php echo $rangx2;?> %
		  <?php echo $gpa1;?>GP
		  
		 </div> 
		  
		  
		  
		  
		  
		  
		 </div> 
		  

		 </div> 
		  
		  <div style="float:left; width:380px;font-family:arial;font-size:14px; margin-left:5px;height:110px;
		  ">
		  <div style="float:left; width:50px;font-family:arial;font-size:14px; height:22px;
		  ">
		  NAME:

		 </div> 
		   <div style="float:left; width:330px;font-family:arial;font-size:14px; height:22px;
		  ">
		  <b><?php $deptt=$row['departmet'];
		  $level=$row['levels'];echo $fname=$row['fname'];?></b>

		 </div> 

		 
		 
		 
		   <div style="float:left; width:80px;font-family:arial;font-size:14px; height:22px;
		  ">
		  MAT.NO

		 </div> 
		   <div style="float:left; width:100px;font-family:arial;font-size:14px; height:22px;
		  ">
		  <b><?php echo $mats=$row['matricule'];?></b>

		 </div> 
		 
		   <div style="float:left; width:50px;font-family:arial;font-size:14px; height:22px;
		  ">
		 DEPT:

		 </div>
		 
		 
		   <div style="float:left; width:150px;text-transform:uppercase;font-family:arial;font-size:14px; height:22px;
		  ">
<b><?php echo $deptt;?></b>
		 </div> 

		 
		 
		 

		   <div style="float:left; width:80px;font-family:arial;font-size:14px; height:22px;
		  ">
SEX:

		 </div> 
		   <div style="float:left; width:300px;font-family:arial;font-size:14px; height:22px;
		  ">
		  <b><?php echo $row['sex'];?></b>

		 </div>
		 
		   <div style="float:left; width:120px;font-family:arial;font-size:14px; height:22px;
		  ">
DATE OF BIRTH

		 </div> 
		   <div style="float:left; width:70px;font-family:arial;font-size:14px; height:22px;
		  ">
		  <b></b>

		 

		 </div> 		 
		 
		 
		   <div style="float:left; width:130px;font-family:arial;font-size:14px; height:22px;
		  ">
ACADEMIC YEAR :<?php echo $take;?>

		 </div> 
		 
		 
		 
		 
		 </div> 
		 </div> 
		  <div style="float:left; width:800px;margin-top:20px; border:1px solid #000; text-align:center;height:30px;font-size:18px;text-transform:uppercase;"><?php echo $term="4";
		  
		  
		  
		  
		  if(empty($term)){}elseif($term>="1" && $term<="1"){echo "First SEMESTER";
		  $xd="c103";
		  }
		  
		  elseif($term>="2" && $term<="2"){echo "Second Semester";		  $xd="c104";
		  }
		  elseif($term>="3" && $term<="3"){echo "Resit Semester";		  $xd="c105";
		  }
		  
		  elseif($term>="4" && $term<="4"){echo "First Semester Resit";		  $xd="c106";
		  }
		  
		  elseif($term>="5" && $term<="5"){echo "Second Semester Resit";		  $xd="c107";
		  }
		  
		  
		  
		  
		  ?></div>
		 
		  
		    
		  <div style="float:left;font-weight:normal; width:797px;font-family:arial;font-size:14px; margin-top:10px;font-weight:bold;background:#ccc;color:#000; height:40px;border:1px solid #000; 
		  ">
		  <div style="float:left; width:80px;height:40px;text-align:center;border-right:1px solid #000;">COURSE CODE</div>
		   <div style="float:left; width:400px;height:40px;text-align:center;border-right:1px solid #000;">&nbsp;COURSE TITLE</div>
		 
		  <div style="float:left; width:50px;height:40px;text-align:center;border-right:1px solid #000;">
		  CREDIT VALUE</div>
		   <div style="float:left; width:60px;height:40px;text-align:center;border-right:1px solid #000;">CA/30</div>
		 
		   <div style="float:left; width:62px;height:40px;text-align:center;border-right:1px solid #000;">EXAM/70</div>

		   <div style="float:left; width:65px;height:40px;text-align:center;border-right:1px solid #000;">TOTAL</div>
		   
		   <div style="float:left; width:65px;height:25px;text-align:CENTER;margin-top:0px;">&nbsp;GRADE</div>
		 </div> <?php 


$query = mysql_query("select  * from resit where db1='$take' and matricule='$mats' and departmet='$deptt' and sex='$term' and levels='$level'order by fname ASC"); 

		 while ($row = mysql_fetch_array($query)) {
		 
		 
		 
		 
		 
		 ?>

		  <div style="float:left;font-weight:normal; width:800px;font-family:arial;font-size:14px; height:auto; ">
		
		  <div style="float:left;font-weight:normal;border-bottom:1px dashed #000;border-bottom:1px dashed #000; width:80px;font-family:arial;height:25px;border-left:1px solid #000; 
		; ">
		
		  <div style="float:left;margin-top:5px;margin-left:2px;font-size:13px;">
		
		<?php echo $courseps=$row['fname'];
		
		
		$exam=$row['c102'];
		
		$cas=$row['c101'];?>
		
		</div>
		</div>
			  <div style="float:left;font-weight:normal;font-size:11.5px;border-bottom:1px dashed #000; width:400px;font-family:arial;height:25px;border-left:1px solid #000; 
	">
		  <div style="float:left;margin-top:5px;margin-left:2px;">
		<?php 
$qry = mysql_query("select  db1 as total
from subject where subject='$courseps' "); 
$row = mysql_fetch_assoc($qry); 
echo $richooTTT=$row['total']; 

$qry = mysql_query("select  credit as total
from credits where subject='$courseps' "); 
$row = mysql_fetch_assoc($qry); 

$richooTTTy=$row['total']; 
?>
		</div>
		
		</div>

		
		

			  <div style="float:left;font-weight:normal;text-align:center; border-bottom:1px dashed #000;text-align:center;width:50px;font-family:arial;height:25px;border-left:1px solid #000; 
	">
		  <div style="float:left;margin-top:5px;margin-left:28px;">
		
<?php echo 
$richooTTTy;?>
		

		</div>
		
		</div>
		

			  <div style="float:left;font-weight:normal;border-bottom:1px dashed #000; text-align:center;width:60px;font-family:arial;height:25px;border-left:1px solid #000; 
	 ">
		  <div style="float:left;margin-top:5px;margin-left:22px;">
		
<?php printf("%01.2f",
($cas));?>
		

		</div>
		
		</div>
		

			  <div style="float:left;font-weight:normal;border-bottom:1px dashed #000;text-align:center; width:62px;font-family:arial;height:25px;border-left:1px solid #000; 
		 ">
		  <div style="float:left;margin-top:5px;margin-left:22px;">
		
<?php printf("%01.2f",
( 
$exam));?>
		

		</div>
		
		</div>
		
		
			  <div style="float:left;border-bottom:1px dashed #000;font-weight:normal;text-align:center; width:65px;font-family:arial;height:25px;border-left:1px solid #000; 
		; ">
		  <div style="float:left;margin-top:5px;margin-left:22px;">
		
<?php $ns=
($exam+$cas); printf("%01.2f",
( $ns));?>
		

		</div>
		
		</div>
		
		
			  <div style="float:left;font-weight:normal;border-bottom:1px dashed #000;text-align:center; width:74px;font-family:arial;height:25px;border-left:1px solid #000; 
		border-right:1px solid #000; ">
		  <div style="float:left;margin-top:5px;margin-left:22px;">
		
<?php $ns=
($exam+$cas); 


 $mxc11=$ns;
 
 
if(empty($mxc11)){
 $colorf1bio="#FF0000";
 $statusfbio="F";
 
 echo'<div style=" color:'. $colorf1bio.';">'.$statusfbio.'</div>';
 
 
 }
elseif($mxc11>=$rangx1 && $mxc11<=$rangx2 ){
 $colorf1bio="#FF0000";
 $statusfbio="F";
 echo'<div style=" color:'. $colorf1bio.';">'.$statusfbio.'</div>';
}else if(($mxc11 >=$rangx3) && ($mxc11<=$rangx4)){
 $colorf1bio="blue";
 $statusfbio="D";
 echo'<div style=" color:'. $colorf1bio.';">'.$statusfbio.'</div>';}else if(($mxc11 >=$rangx5) && ($mxc11<=$rangx6)){
 $colorf1bio="blue";
 $statusfbio="D+";
 echo'<div style=" color:'. $colorf1bio.';">'.$statusfbio.'</div>';}
 
 
else if(($mxc11 >=$rangx7) && ($mxc11<=$rangx8)){
 $colorf1bio="blue";
 $statusfbio="C";
 echo'<div style=" color:'. $colorf1bio.';">'.$statusfbio.'</div>';}
 
 
 else if(($mxc11 >=$rangx9) && ($mxc11<=$rangx10)){
 $colorf1bio="blue"; $statusfbio="C+"; echo'<div style=" color:'. $colorf1bio.';">'.$statusfbio.'</div>';
} 
 
 
 
 else if(($mxc11 >=$rangx11) && ($mxc11<=$rangx12)){
 $colorf1bio="blue"; $statusfbio="B"; echo'<div style=" color:'. $colorf1bio.';">'.$statusfbio.'</div>';
} 
 
  else if(($mxc11 >=$rangx10) && ($mxc11<=$rangx14)){
 $colorf1bio="blue"; $statusfbio="B+"; echo'<div style=" color:'. $colorf1bio.';">'.$statusfbio.'</div>';
} 
 
 
  else if(($mxc11 >=$rangx15) && ($mxc11<=$rangx16)){
 $colorf1bio="blue"; $statusfbio="A"; echo'<div style=" color:'. $colorf1bio.';">'.$statusfbio.'</div>';
} 
 
 
 
  $mxc11=$ns;
if(empty($mxc11)){
  $colorf1bio="yellow";
 $statusfbio="F";}
elseif($mxc11>=$rangx1 && $mxc11<=$rangx2 ){
 $colorf1bio="#FF0000";
 $statusfbio=$gpa1; ;
}else if(($mxc11 >=$range3) && ($mxc11<=$range4)){
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
$mokkk=($statusfbio*$richooTTTy);

$query3="update resit set c103='$mokkk',c104='$richooTTTy'
 where matricule='$mats' and departmet='$deptt'and levels='$level' and sex='$term' and db1='$take' and fname='$courseps'";







mysql_query ($query3) or die ('could not updated:'.mysql_error());

 ?>

		</div>

				
		</div>

		</div>





		
		
		
		 
		 <?php } ?>
		 
		  <div style="float:left;font-weight:normal; width:800px;font-family:arial;font-size:14px; height:auto; ">
		
		  <div style="float:left;font-weight:normal; width:130px;font-family:arial;height:60px;
	border-bottom:1px solid #000; ">
		
		  <div style="float:left;margin-top:5px;margin-left:2px;">
		

		
		</div>
		</div>
			 
			  <div style="float:left;font-weight:normal; width:300px;font-family:arial;height:60px;
		border-bottom:1px solid #000; "><?php 



$qry = mysql_query("select sum(c103) as total
from resit where matricule='$mats' and departmet='$deptt'and levels='$level' and sex='$term' and db1='$take'  "); 
$row = mysql_fetch_assoc($qry); 
$save=$row['total']; 
 


$qry = mysql_query("select sum(c104) as total
from resit where matricule='$mats' and departmet='$deptt'and levels='$level' and sex='$term' and db1='$take'  "); 
$row = mysql_fetch_assoc($qry); 
$richooTTTyss=$row['total']; 
 

$mxc002=$save;
if(empty($mxc002)){
 $statusfbio="";
 }
elseif($mxc002>'' ){
 $colorf1bio="#FF0000";
 $statusfbio=($save/$richooTTTyss);
}
$queryf3="update courses set $xd='$statusfbio'
 where matricule='$mats' and departmet='$deptt'";





mysql_query ($queryf3) or die ();

$qry = mysql_query("select * FROM courses where departmet='$deptt' and levels='$level' and c103>='' and db1='$take'  "); 
$num_rows=mysql_num_rows($qry);
  $totalstudent=$num_rows; 


$qry = mysql_query("select * FROM courses where departmet='$deptt' and levels='$level' and c103>='0.0001' and db1='$take'  "); 
$num_rows=mysql_num_rows($qry);
  $totalstudente=$num_rows; 



$qry = mysql_query("select * FROM courses where departmet='$deptt' and levels='$level' and c103>='2' and db1='$take'  "); 
$num_rows=mysql_num_rows($qry);
  $totalstudentp=$num_rows; 

?>
		
		  <div style="float:left;width:360px;font-size:13px;">
			Total Student Enrolled: <?php echo   $totalstudent;?> Sat:<?php echo   $totalstudente;?>  Passed:<?php echo   $totalstudentp;?> Absent: <?php echo   ($totalstudent-$totalstudente);?>


		</div>
		  <div style="float:left;margin-top:25px;margin-left:2px;">
	
<b>SEMESTER GPA: </b><?php 
printf("%01.2f",($statusfbio));?>




		</div>
		
		
		</div>

		
		

			  <div style="float:left;font-weight:normal; text-align:center;width:100px;font-family:arial;height:60px; 
		border-bottom:1px solid #000; ">
		  <div style="float:left;margin-top:5px;margin-left:28px;">

		

		</div>
		
		</div>
		

			  <div style="float:left;font-weight:normal; text-align:center;width:60px;font-family:arial;height:60px;
		border-bottom:1px solid #000; ">
		  <div style="float:left;margin-top:5px;margin-left:22px;">


		</div>
		
		</div>
		

			  <div style="float:left;font-weight:normal;text-align:center; width:42px;font-family:arial;height:60px;
		border-bottom:1px solid #000; ">
		  <div style="float:left;margin-top:5px;margin-left:22px;">
		


		</div>
		
		</div>
		
		
			  <div style="float:left;font-weight:normal;text-align:center; width:82px;font-family:arial;height:60px;
		border-bottom:1px solid #000; ">
		  <div style="float:left;margin-top:5px;">
Printed on:-

		</div>
		
		</div>
		
		
			  <div style="float:left;font-weight:normal;text-align:center;	border-bottom:1px solid #000; width:81px;font-family:arial;height:60px;bborder-bottom:1px solid #000; ">
		  <div style="float:left;margin-top:5px;margin-left:22px;">
<?php echo date('j/m/y');?>
		

		</div>
		
		</div>
		  </div>
		  <div style="float:left;font-weight:normal; width:800px;font-family:arial;font-size:14px; height:125px; ">
		
			  <div style="float:left;font-weight:normal;text-align:right; margin-top:40px; width:71px;font-family:arial;height:60px;"><b>
</b>
		  </div>
			  <div style="float:left;font-weight:normal;text-align:right; margin-top:40px; width:529px;font-family:arial;height:60px;">
		  </div>
		  
		  
		    <div style="float:left;font-weight:normal;text-align:right; margin-top:40px; width:71px;font-family:arial;height:60px;"><b>
 <?php 
 $rtttttt="select * from signature where signame='1'";
$resultgssss=mysql_query($rtttttt);
		 while ($row = mysql_fetch_array($resultgssss)) {
		 
	?><?php echo $row["period"];?>
	<?php
	
}
	
	 ?></b>
		  </div>
		  
		  
		  
		  
		  
		  <div style="float:left;font-weight:normal; width:800px;font-family:arial;font-size:14px; height:45px; ">
		  
		  
		  
		    </div>
		  
		    </div>
		  
		    </div>

		    </div>
		  
		    </div>
		  
		    </div>
		 <?php } ?>
		 
		 
		 