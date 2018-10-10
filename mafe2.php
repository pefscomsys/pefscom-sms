<?PHP
INCLUDE 'dbcs.PHP';

ini_set('max_execution_time', 3250000); //300 seconds = 5 minutes



 $levels=$_POST["levels"];
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
?><?php
 $rollss=$_GET["rollsps"];
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
$query="select * from courses where roll='$rollss'
";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 $fname=$row["fname"]; $ids=$row["c110"];$c116=$row["c116"];
		 ?><?php } ?>
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
$query="select * from school where rx='1' and ids='$ids'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
?>

<?php  $school6=$row[1];
$school6bs=$row[2];
?>
<?php } ?>
<?php
$roll=$_GET["1"];
$query="select * from school where rx='2' and ids='$ids'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
?>

<?php  $school6bx=$row[1];
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
$query="select * from gradeb where extra='1' and ids='$ids'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
?>

<?php  $rangx1=$row['from1'];
$rangx2=$row['from2'];
$c1d=$row['comments'];
$gpa1=$row['gpa'];

?>
<?php } ?>




<?php
$roll=$_GET["1"];
$query="select * from gradeb where extra='2' and ids='$ids'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
?>

<?php  $rangx3=$row['from1'];
$rangx4=$row['from2'];
$c2d=$row['comments'];
$gpa2=$row['gpa'];
?>
<?php } ?>









<?php
$roll=$_GET["1"];
$query="select * from gradeb where extra='3' and ids='$ids'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
?>

<?php  $rangx5=$row['from1'];
$rangx6=$row['from2'];

$c3d=$row['comments'];
$gpa3=$row['gpa'];
?>
<?php } ?>







<?php
$roll=$_GET["1"];
$query="select * from gradeb where extra='4' and ids='$ids'";
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
$query="select * from gradeb where extra='5' and ids='$ids'";
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
$query="select * from gradeb where extra='6' and ids='$ids'";
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
$query="select * from gradeb where extra='7' and ids='$ids'";
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
$query="select * from gradeb where extra='8' and ids='$ids'";
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
$query="select * from gradeb where extra='9' and ids='$ids'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
?>

<?php     $rangx17=$row['from1'];
 $rangx18=$row['from2'];
 
$c9=$row['comments'];
$gpa9=$row['gpa'];
?>
<?php } ?><?php
$roll=$_GET["1"];
$query="select * from rush where roll='1' ";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>
<?php $take=$row[1];
$table="courses";
?>
<?php } ?>
<head><TITLE><?php echo $fname;?> page- <?php echo $c116;?></TITLE>
 <link rel="stylesheet" href="test.css" 
type="text/css">
<style>
body {size:A4 Landscape;
        margin: 5px;
        padding: 0;
        font: 25pt;
    }
    * {
        box-sizing: border-box;
        -moz-box-sizing: border-box;
    }
    .page {
        width: 1000px;
        min-height: 77.7cm;
        padding: 2cm;
        margin: 1cm auto;
        background: white;
    }
    .subpage {
        padding: 1cm;
        border: 5px black solid;
        height: 627mm;
        outline: 2cm #000 solid;
    }
    
    @page {
        size: A4 Landscape ;
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
  border-bottom: 1px solid #000;
margin-left:-40px;
  margin-top:-10px;font-family:calibri;
}
</style>
</head><?php
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
 $rollss=$_GET["rollsps"];
$form=$_POST["form"];
$statusbsub=$_POST["statusbsub"];

$deptt=$_POST["deptt"];

$teacher=$_POST["teacher"];
$t1=$_POST["t1"];
$t2=$_POST["t2"];

$levels=$_POST["levels"];
$roll=$_POST["roll"];
$form=$_POST["form"];

?>
				  
<body  style='font-family:calibri;'> <?php 
 $query="select * from $table where roll='$rollss' order by c116 ASC
";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
			 $c115=$row['c115'];   $c116=$row['c116'];
  $ms=$row['matricule'];
$qry = mysql_query("select * FROM  courses where matricule='$ms'  "); 
$num_rows=mysql_num_rows($qry);
 $x=$num_rows; 
 $opps=$x;
		 ?><?php 

$resultg=mysql_query("select * from $table where c115='$c115'  and matricule='$ms'  order by c116");
		 while ($row = mysql_fetch_array($resultg)) {
		 
		  $c116=$row['c116'];
	
		 ?>
 <div class="page"  >
			 <?php require 'transtop.php';
			 ?>
			 	 <?php require 'body1.php';
			 ?>
			 
			 
			 	 <?php require 'subject.php';
			 ?>
			 
			 
			 
			 
			 
			 
			   </div>
			   
			   
			   
			   
			   
			   
			   
			  </div> 
			 
			 
			 

			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 

 
			 
	</div>

<?php
		 }
		
		 ?>
			 		 
					 
					 
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
					 
					 
					 
					 
					<?php }
			 
			 ?> 
					 
					 
					 
					 
					 
					 
					 
					 
					 
					 
					 
					 
					 
					 
					 
					 
					 
					 
					 
					 
					 
					 
					 