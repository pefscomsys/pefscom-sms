<?php
include 'dbcs.php';

ini_set('max_execution_time', 3250000); //300 seconds = 5 minutes
page_protect();

	
	
	
				  
				  
				  
				  ?>
				  
				  
				  <head><TITLE>Class List</TITLE>
 <link rel="stylesheet" href="test.css" 
type="text/css">
<style>
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
        width: 1000px;
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
  height: 250px;
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
margin-left:-80px;
  margin-top:-10px;font-family:calibri;
}
</style>
</head><?php
$roll=$_GET["1"];
$query="select * from school where roll='1'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
?>

<?php  $school=$row[1];
$school2=$row[2];
?>
<?php } ?><?php
$roll=$_GET["1"];
$query="select * from school where roll='2'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
?>

<?php  $schoolx=$row[1];
$school2x=$row[2];
?>
<?php } ?>
				  
<body  style='font-family:calibri;'>

		  <?php 
		$levels=$_GET["levels"];$deptt=$_GET["deptt"];$session=$_GET["session"];
		 
		 ?>
			 <div class="page"  >
			 
		 	 <div style="float:left; width:750px;background:#ccc; height:40px;margin-top:-60px;   color:#000; text-align:center;">
		 	 <div style="float:left; width:180px; height:35px; color:#000; text-align:center;">
			 
			 </div>
			 
		 	 <div style="float:left;border-bottom:1px double #000;margin-top:-2px; border-top:1px solid #000; width:400px; height:40px; color:#000; ">
		 	 <div style="float:left;border-bottom:1px double #000; border-top:1px solid #000; width:400px; margin-top:1px;height:41px; color:#000; ">
			
		 	 <div style="float:left;width:750px;text-align:center; Height:35px;margin-left:-200px; font-size:25px;"> <b style="font-size:25px;"> <?php echo $school;?></B>
			 </div>


			 </div>
			  <div style="float:left; width:180px; height:35px;  color:#000; text-align:center;">
			 
			 </div>
			 </div>
			  <div style="float:left; width:750px; height:50px;margin-top:10px;  ">
			  <div style="float:left; width:70px; height:55px; color:#000; text-align:center;">
			 <img src="logo.png" width="100px" height="80px;">
			 </div>
			 
			 
			   <div style="float:left; width:680px; height:50px; margin-left:-20px;font-family:calibri; color:#000; ">
			 
			   <div style="float:left; width:680px; height:35px;  color:#000;font-size:21px; ">
			<?php echo $schoolx;?>
			 </div>
			   <div style="float:left; width:680px; height:35px;  color:#000;font-size:21px; font-weight:bold;MARGIN-LEFT:-50PX;">
			   CLASS LIST FOR <?PHP ECHO  $deptt=$_GET["deptt"];?>, LEVEL : <?PHP ECHO $levels=$_GET["levels"];;?>
			 </div>
			 
			 </div>
			 	 	 
				  </div> 
				  
				  
				  
				  
				  	  </div> 
				  
				  	  </div> 
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  <head><TITLE>Class List</TITLE>
 <link rel="stylesheet" href="test.css" 
type="text/css">
<style>
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
        width: 1000px;
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
  height: 250px;
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
margin-left:-80px;
  margin-top:-10px;font-family:calibri;
}
</style>
</head><?php
$roll=$_GET["1"];
$query="select * from school where roll='1'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
?>

<?php  $school=$row[1];
$school2=$row[2];
?>
<?php } ?><?php
$roll=$_GET["1"];
$query="select * from school where roll='2'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
?>

<?php  $schoolx=$row[1];
$school2x=$row[2];
?>
<?php } ?>
				  
<body  style='font-family:calibri;'>

		  <?php 
		$levels=$_GET["levels"];$deptt=$_GET["deptt"];$session=$_GET["session"];$sex=$_GET["sex"];$grade=$_GET["grade"];
		if(empty($sex)){
			
		}elseif($sex>="1"&&  $sex<="1"){
			
			$sexs="1";
			$sexs2="2";
		}
		elseif($sex>="2"&&  $sex<="2"){
			
			$sexs="1";
			$sexs2="2";
		}
		
		elseif($sex>="4"&&  $sex<="4"){
			
			$sexs="4";
			$sexs2="4";
		}
		elseif($sex>="3"&&  $sex<="3"){
			
			$sexs="3";
			$sexs2="3";
		}
		
		
		if(empty($grade)){
			$rxs="$rx";
		}elseif($grade>""){
			$rxs="$statusfbiox";
			;
		}
		
		
		
		
		
   $resulth="SELECT *  FROM courses  where levels='$levels' and departmet='$deptt' and db1='$session' group by c113 ";
		
$dsss=mysql_query($resulth);
		 while ($row = mysql_fetch_array($dsss)) {
		 
		 
		  $nmix=$row["c113"];
		 
		 ?>
			 <div class="page"  >
			 
		 	
			  <div style="float:left; margin-left:-70px;width:1100px; height:auto;margin-top:-40px;  border:2px solid #000;">
			  <table cellspacing="0" cellpadding="0" width="1096px" style="font-family:arial;">
			  <tr><th style="width:70px;height:45px;font-size:16px;background:#efefef; padding:2px;text-align:center;border-right:1px dashed #ccc;;border-bottom:2px solid #000;">

			  
			  </th>
			  
			  <th style="width:360px;height:45px;padding:2px;background:#efefef;ftext-align:left;border-right:1px dashed #ccc;border-bottom:2px solid #000;">

			  
			  </th>
			  
			  	  <th style="width:170px;height:45px;background:#efefef;fpadding:2px;text-align:center;border-right:1px dashed #ccc;border-bottom:2px solid #000;">
 
			  </th>
			  
			  	
			    	 
			 <?php 

$resultbh=mysql_query("SELECT * FROM subject where year1='$levels' and department='$deptt' and acc='$session'  	");
		 while ($row = mysql_fetch_array($resultbh)) {
		 
		 
		 
		 
		 
		 ?><th class="rotate" style="width:30px;height:300px;background:#efefef;border-bottom:2px solid #000;margin-left:100px;"><div ><span ><?php echo $row["db1"];?></span></div></th><?php } ?>
			  <th style="width:40px;height:45px;background:#efefef;fpadding:2px;text-align:center;border-right:1px dashed #ccc;border-bottom:2px solid #000;">
 
			  </th>
			 
			 </tr>
			 
			 
			 
			 
			 
			 
			 
			 
			  <tr><th style="width:70px;height:45px;background:#ccc;ffont-size:16px; padding:2px;text-align:center;border-right:1px dashed #ccc;;border-bottom:2px solid #000;">
S/N
			  
			  </th>
			  
			  <th style="width:360px;height:45px;background:#ccc;f padding:2px;text-align:left;border-right:1px dashed #ccc;border-bottom:2px solid #000;">

			  &nbsp;Full Names
			  </th>
			  
			  	  <th style="width:170px;height:45px;background:#ccc;f padding:2px;text-align:center;border-right:1px dashed #ccc;border-bottom:2px solid #000;">
Matricule
			 
			  
			  </th>
			  
			  		
			    	 
			 <?php 

$resultbh=mysql_query("SELECT * FROM subject where year1='$levels' and department='$deptt' and acc='$session'  	");
		 while ($row = mysql_fetch_array($resultbh)) {
		 
		 
		 
		 
		 
		 ?><th class="rotate" style="width:30px;height:70px;background:#ccc;font-family:arial;border-bottom:2px solid #000;margin-left:100px;"><div ><span  style="float:left;width:20px;margin-left:30px;"><?php echo $row["subject"];?></span></div></th><?php } ?>
			 
			  	  <th class="rotate" style="width:40px;height:45px;background:#ccc;f padding:2px;text-align:center;border-right:1px dashed #ccc;border-bottom:2px solid #000;">
GPA
			 
			  
			  </th>
			  </tr>
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 <?php   $resulths="SELECT *  FROM courses  where levels='$levels' and departmet='$deptt' and db1='$session' and c113='$nmix' order by fname ASC";
		
$dssss=mysql_query($resulths);$i=1;
		 while ($row = mysql_fetch_array($dssss)) {
		 
		
		 
		 ?> 
			 
			 		  <tr><td style="width:70px;height:35px; font-size:12px;padding:2px;text-align:center;border-right:1px dashed #ccc;border-bottom:1px dashed #ccc;">
<?php echo $row["c114"];;?>
			  
			  </td>
			  
			  <td style="width:360px;height:35px;font-size:12px; text-transform:uppercase;padding:2px;text-align:left;border-right:1px dashed #ccc;border-bottom:1px dashed #ccc;">
&nbsp;&nbsp;<?php echo $row["fname"]; $ids=$row["c110"];?>
			  
			  </td>
			  
			  	  <td style="width:170px;height:35px;font-size:12px; padding:2px;text-align:center;border-right:1px dashed #ccc;border-bottom:1px dashed #ccc;">
<?php echo $mat=$row["matricule"];?>  
			  </td>
			  
			  <?php 

$resultbh=mysql_query("SELECT * FROM subject where year1='$levels' and department='$deptt' and acc='$session'  	");
		 while ($row = mysql_fetch_array($resultbh)) {
		 
		 
		
		 
		 
		 
		 ?><td style="width:30px;height:20px;border-bottom:1px Dashed #ccc;border-right:1px dashed #ccc;font-size:17px;text-align:center;font-weight:bold;"><?php 
		 
		 
		 
		 
		  $x= $row["subject"];
		 
		 $qry = mysql_query("select  SUM(c101+c102) as total
from resit where fname='$x' and  levels='$levels' and departmet='$deptt' and db1='$session' and matricule='$mat'and sex>='$sexs'  and sex<='$sexs2'"); 
$row = mysql_fetch_assoc($qry); 
 $rx=$row['total']; 
		 
		 

?>

<div style="color:<?php		  
		 
		 
		 
		 if(empty($rx)){
	echo $color="red";	 }elseif($rx>="50"  && $rx<="100"){
			 
			echo $color="blue";
		 }
		 
		 elseif($rx<"50"){
			 
			echo $color="red";
		 }
		 ?>;">
		 
		 
		 
		 
		 
		 
		 
		 <?php echo $rx;
		 
		 
		 
		 
		 
		 ?></div></td><?php } ?><td style="width:30px;height:20px;border-bottom:1px Dashed #ccc;border-right:1px dashed #ccc;font-size:17px;text-align:center;font-weight:bold;"><?php 
		 
		 
 ?>
		
			 </tr>
			 
			 
			 
			 
			 
			 
			 
		 <?php } ?>
			 
			 
			 
			 
			 
			 
			 
			 
			 </table>
			 </div>
			 	 	 
				 </div>	 </div>	 </div> 
			 
			 
		 <?php } ?>	 
			 
			 
			 
</body>
</html>
