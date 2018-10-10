<?php
include 'dbcs.php';
page_protect();
ini_set('max_execution_time', 3250000); //300 seconds = 5 minutes


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
$query="select * from rush where roll='1'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>
<?php  $take=$_POST["acc"];


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
		 <div style="text-align:center;float:left; width:900px; height:150px;">
		 
		 <div style="text-align:center;float:left; width:350px; height:100px;"></DIV>
		 
		 <div style="text-align:LEFT;float:left; width:550px; height:100px;">
<h2><?php  
$deptt=$_POST["department"];$levels=$_POST["levels"];$sexs=$_POST["sex"];$level=$levels;
 $mxc11s=$sexs;
if(empty($mxc11s)){
}
elseif($mxc11s>="1" && $mxc11s<="1"){
$sex="1";
$sex2="1";

} elseif($mxc11s>="2" && $mxc11s<="2"){
$sex="2";
$sex2="2";

}elseif($mxc11s>="3" && $mxc11s<="3"){
$sex="1";
$sex2="3";

}  elseif($mxc11s>="4" && $mxc11s<="4"){
$sex="2";
$sex2="3";

}
?>DEPARTMENT: <?php echo $deptt;?><br>
<?php


 echo $take;?> ACADEMIC YEAR, <br>


</h2>
</div>

<table width="1300px" cellspacing="2" cellpadding="2" >
<tr><td style="width:30px;border-bottom:3px solid #000; background:#ccc;">SN</td>
<td style="350px;border-bottom:3px solid #000;background:#ccc;font-weight:bold;">Course Code</td>


<?php
$roll=$_GET["1"];
$query="select * from rush where roll='1'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>
<?php  $takes=$row[1];
 $db1=$_POST["acc"];
?>
<?php } ?>
<?php
$query="select  * from subject where department='$deptt' and year1='$level' and year2='$sex' and acc='$take' ";
$result=mysql_query($query);$i=1;
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>
<td style="width:70px;background:#ccc;">	<?php echo $sub=$row["subject"];?>
	
	</td>
	
		 <?php } ?><td style="width:70px;background:#ccc;">	
	
	</td>
	</tr>
	
	
	<tr><td style="width:30px;border-bottom:1px solid #000;border-left:1px solid #000;"></td><td style="350px;border-bottom:1px solid #000;"><b>Course Title</b></td>

<?php
$query="select  * from subject where department='$deptt' and year1='$level' and year2='$sex'  and acc='$take'";
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
	
		 <?php } ?><td style="width:70px;BACKGROUND:#000; COLOR:#FFF;">	
	
	</td>
	</tr>
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
	<tr><td style="width:30px;border-bottom:1px solid #000;border-left:1px solid #000;"></td>
	<td style="350px;border-bottom:1px solid #000;"><b>N<sup>o</sup> Enrol</td>

<?php
$query="select  * from subject where department='$deptt' and year1='$level' and year2='$sex' and acc='$take'";
$result=mysql_query($query);$i=1;
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>
<td style="width:70px; background:#ccc;color:#000; font-weight:bold; font-size:25px;">	<div style="float:left; width:85px;font-size:13px;

;"><?php  $sub=$row["subject"];

$mxc11=$levels;
if(empty($mxc11)){
}
elseif($mxc11>=200 && $mxc11<=200 ){
	$statme="(c101+c102)";
}elseif($mxc11>=300 && $mxc11<=300 ){
	$statme="(c102)";
}elseif($mxc11>=400 && $mxc11<=400 ){
	$statme="(c101+c102)";
}



$qry = mysql_query("select * FROM  resit where fname='$sub' and departmet='$deptt'and levels='$level' and sex='$sex2' and db1='$take' and (c101+c102)>'' group by matricule "); 
$num_rows=mysql_num_rows($qry);
 $totalev=$num_rows; 


$qry = mysql_query("select * FROM  resit where fname='$sub' and departmet='$deptt'and levels='$level' and sex='$sex2' and db1='$take' and $statme>='50' group by matricule"); 
$num_rows=mysql_num_rows($qry);
 $pass=$num_rows; 


  $mxc11=$totalev;
if(empty($mxc11)){
echo  $statusfbio="x";
 
 
 
 }
elseif($mxc11>''){

echo $totalev;


}











?></div>
	
	</td>
	
		 <?php } ?><td style="width:70px;background:#ccc;">
	
	</td>
	</tr>	
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
	<tr><td style="width:30px;border-bottom:1px solid #000;border-left:1px solid #000;"></td>
	<td style="350px;border-bottom:1px solid #000;"><b>Total N<sup>o</sup> SAT</td>

<?php
$query="select  * from subject where department='$deptt' and year1='$level' and year2='$sex' and acc='$take'";
$result=mysql_query($query);$i=1;
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>
<td style="width:70px; background:#ccc;color:#000; font-weight:bold; font-size:25px;">	<div style="float:left; width:85px;font-size:13px;

;"><?php  $sub=$row["subject"];



$qry = mysql_query("select * FROM  resit where fname='$sub' and departmet='$deptt'and levels='$level' and sex='$sex2' and db1='$take' and c102>'' group by matricule "); 
$num_rows=mysql_num_rows($qry);
 echo  $sat=$num_rows; 













?></div>
	
	</td>
	
		 <?php } ?><td style="width:70px;background:#ccc;">
	
	</td>
	</tr>
				
		
		
		
		
		
		

		
		
	<tr><td style="width:30px;border-bottom:1px solid #000;border-left:1px solid #000;"></td>
	<td style="350px;border-bottom:1px solid #000;"><b>N<sup>o</sup>Absent</td>

<?php
$query="select  * from subject where department='$deptt' and year1='$level' and year2='$sex' and acc='$take'";
$result=mysql_query($query);$i=1;
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>
<td style="width:70px; background:#ccc;color:#000; font-weight:bold; font-size:25px;">	<div style="float:left; width:85px;font-size:13px;

;"><?php  $sub=$row["subject"];

$mxc11=$levels;
if(empty($mxc11)){
}
elseif($mxc11>=200 && $mxc11<=200 ){
	$statme="(c101+c102)";
}elseif($mxc11>=300 && $mxc11<=300 ){
	$statme="(c102)";
}elseif($mxc11>=400 && $mxc11<=400 ){
	$statme="(c101+c102)";
}



$qry = mysql_query("select * FROM  resit where fname='$sub' and departmet='$deptt'and levels='$level' and sex='$sex2' and db1='$take' and (c101+c102)>'' group by matricule "); 
$num_rows=mysql_num_rows($qry);
 $totalev=$num_rows; 


$qry = mysql_query("select * FROM  resit where fname='$sub' and departmet='$deptt'and levels='$level' and sex='$sex2' and db1='$take' and c102>'' group by matricule "); 
$num_rows=mysql_num_rows($qry);
  $sat=$num_rows; 
$qry = mysql_query("select * FROM  resit where fname='$sub' and departmet='$deptt'and levels='$level' and sex='$sex2' and db1='$take' and $statme>='50' group by matricule"); 
$num_rows=mysql_num_rows($qry);
 $pass=$num_rows; 

$abs=( $totalev-$sat);
  $mxc11=$totalev;
if(empty($mxc11)){
echo  $statusfbio="x";
 
 
 
 }
elseif($mxc11>''){

echo $abs;


}











?></div>
	
	</td>
	
		 <?php } ?><td style="width:70px;background:#ccc;">
	
	</td>
	</tr>			
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
	<tr><td style="width:30px;border-bottom:1px solid #000;border-left:1px solid #000;"></td>
	<td style="350px;border-bottom:1px solid #000;"><b>Total N<sup>o</sup> PASS</td>

<?php
$query="select  * from subject where department='$deptt' and year1='$level' and year2='$sex'  and acc='$take'";
$result=mysql_query($query);$i=1;
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>
<td style="width:70px; background:#ccc;color:#000; font-weight:bold; font-size:25px;">	<div style="float:left; width:85px;font-size:13px;

;"><?php  $sub=$row["subject"];

$mxc11=$levels;
if(empty($mxc11)){
}
elseif($mxc11>=200 && $mxc11<=200 ){
	$statme="(c101+c102)";
}elseif($mxc11>=300 && $mxc11<=300 ){
	$statme="(c102)";
}elseif($mxc11>=400 && $mxc11<=400 ){
	$statme="(c101+c102)";
}


$qry = mysql_query("select * FROM  resit where fname='$sub' and departmet='$deptt'and levels='$level' and sex='$sex2' and db1='$take' and $statme>='50' group by matricule "); 
$num_rows=mysql_num_rows($qry);
 echo  $richooTTTyss=$num_rows; 













?></div>
	
	</td>
	
		 <?php } ?><td style="width:70px;background:#ccc;">
	
	</td>
	</tr>
				
		
		
		
		
		
		
		
		
		
		
	<tr><td style="width:30px;border-bottom:1px solid #000;border-left:1px solid #000;"></td>
	<td style="350px;border-bottom:1px solid #000;"><b>% PASS</td>

<?php
$query="select  * from subject where department='$deptt' and year1='$level' and year2='$sex' and acc='$take'";
$result=mysql_query($query);$i=1;
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>
<td style="width:70px; background:#ccc;color:#000; font-weight:bold; font-size:25px;">	<div style="float:left; width:85px;font-size:13px;

;"><?php  $sub=$row["subject"];

$mxc11=$levels;
if(empty($mxc11)){
}
elseif($mxc11>=200 && $mxc11<=200 ){
	$statme="(c101+c102)";
}elseif($mxc11>=300 && $mxc11<=300 ){
	$statme="(c102)";
}elseif($mxc11>=400 && $mxc11<=400 ){
	$statme="(c101+c102)";
}



$qry = mysql_query("select * FROM  resit where fname='$sub' and departmet='$deptt'and levels='$level' and sex='$sex2' and db1='$take' and (c101+c102)>'' group by matricule "); 
$num_rows=mysql_num_rows($qry);
 $totalev=$num_rows; 



$qry = mysql_query("select * FROM  resit where fname='$sub' and departmet='$deptt'and levels='$level' and sex='$sex2' and db1='$take' and c102>'' group by matricule "); 
$num_rows=mysql_num_rows($qry);
  $sat=$num_rows;
$qry = mysql_query("select * FROM  resit where fname='$sub' and departmet='$deptt'and levels='$level' and sex='$sex2' and db1='$take' and $statme>='50' group by matricule"); 
$num_rows=mysql_num_rows($qry);
 $pass=$num_rows; 


  $mxc11=$totalev;
if(empty($mxc11)){
echo  $statusfbio="x";
 
 
 
 }
elseif($mxc11>''){


printf("%01.1f",$ui=($pass/$sat)*100);


}











?></div>
	
	</td>
	
		 <?php } ?><td style="width:70px;background:#ccc;">
	
	</td>
	</tr>
				
		
		
	</table>
	
		
	
	
	
</body>
</html>