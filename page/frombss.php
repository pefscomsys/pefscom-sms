<BR><BR><?PHP INCLUDE '../dbcs.PHP';
ini_set('max_execution_time', 3250000); //300 seconds = 5 minutes



?>
<html>
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
<body onload="window.print();">
<?php
$rolls=$_GET["mats"];$rx=$_GET["rx"];$dept=$_GET["dept"];
 $query="select CAST(matricule as text) as matricule,  

CAST(fname as text) as fname,  

CAST(levels as text) as levels,
CAST(c110 as text) as c110, CAST(cxx2 as text) as cxx2, 
CAST(departmet as text) as departmet, 
CAST(sex as text) as sex, CAST(db1 as text) as db1

 from [cg2015].[dbo].[courses] where matricule='$rolls'  and db1='$rx'  and departmet='$dept'";
$result=mssql_query($query);
		 while ($row = mssql_fetch_array($result)) {
		 
$id=$row['c110'];
	$department=$row['departmet'];	 
$levels=$row['levels'];


$qry = mssql_query("select  CAST(school as text) as school, CAST(town as text) as town, CAST(code as text) as code,
 CAST(contact as text) as contact, CAST(website as text) as website, CAST(email as text) as email
from [cg2015].[dbo].[school] where ids='$id' "); 
$row = mssql_fetch_assoc($qry); 




 $school=$row['school'];  $code=$row['code']; $address=$row['town']; 
 $website=$row['website'];  $email=$row['email']; $contact=$row['contact']; 
 
 
 
$qrya= mssql_query("select  CAST(ids as text) as idn
from [cg2015].[dbo].[classes] where classs='$department' "); 
$row = mssql_fetch_assoc($qrya); 
 $idm=$row['idn'];

$qrya= mssql_query("select  CAST(facultydesc as text) as schools
from [cg2015].[dbo].[faculty] where facultyid='$idm' "); 
$row = mssql_fetch_assoc($qrya); 

$schools=$row['schools'];
		 ?>
		 
		<?php 
$querys="select CAST(matricule as text) as matricule,  

CAST(fname as text) as fname,  

CAST(levels as text) as levels,
CAST(c110 as text) as c110, CAST(cxx2 as text) as cxx2, 
CAST(departmet as text) as departmet, 
CAST(sex as text) as sex, CAST(db1 as text) as db1

 from [cg2015].[dbo].[courses] where levels='$levels'  and db1='$rx'  and departmet='$dept' and c110='$id'";
$results=mssql_query($querys);
		 while ($row = mssql_fetch_array($results)) {
		 
$id=$row['c110'];
		 
$levels=$row['levels'];
		 ?>		
		 
		 <?php $deptt=$row['departmet'];$take=$row['db1'];$mats=$row['matricule'];
		  $level=$row['levels']; $fname=$row['fname']; $sex=$row['sex'];               ?>
		  <div class="page" STYLE='MARGIN-LEFT:20PX;margin-top:-35px; ' >
	
		  
		  <div style="float:left; width:959px; height:auto;">
	
		  <div style="float:left; width:959px; text-align:center;height:120px;font-size:18px;text-transform:uppercase;">
		  
		  <div style="float:left; width:200px; height:130px;MARGIN-TOP:25PX;">
		  <img src='../logo.png' WIDTH='120' HEIGHT='120PX'>
		  </div>
		  <div style="float:left; width:700px; height:100px;">
		  
		  <div style="float:left; width:240px;margin-left:500px;margin-top:-25px; height:38px;padding:3px;background:#ccc; border:1px solid #000;">
		 <b> INDIVIDUAL -SLIP</b>
		  </div>
		  
		  <div style="float:left; width:750px;MARGIN-TOP:30PX; height:70px;">
		  
		 <table width='750px' cellspacing='0' cellpadding='6' STYLE='MARGIN-LEFT:0PX;'>
		  <tr><td style='font-weight:bold;width:170px;border-left:1px solid #000;border-right:1px solid #000; border-top:1px solid #000; '>Student's Name</td>
		  <td  style='font-weight:bold;width:450px;border-right:1px solid #000; border-top:1px solid #000; '>
		  <b><?php echo $fname;?></b></td> </tr>
		   <tr><td style='font-weight:bold;width:170px;border-left:1px solid #000;border-right:1px solid #000; border-top:1px solid #000; '>Mat. No:</td>
		  <td  style='font-weight:bold;width:450px;border-right:1px solid #000; border-top:1px solid #000; '>
		  <b><?php echo $mats;?></b></td> </tr>
		
		    <tr><td style='font-weight:bold;width:170px;border-bottom:1px solid #000;border-left:1px solid #000;border-right:1px solid #000; border-top:1px solid #000; '>Department</td>
		  <td  style='font-weight:bold;width:450px;border-bottom:1px solid #000;border-right:1px solid #000; border-top:1px solid #000; '>
		  <table width="450"><tr><td><b><?php echo $deptt;?></b></td>
<td>Level:</td><td><b><?php echo $levels;?></b></td>
<td>Acc:</td><td><b><?php echo $take;?></b></td>


		  </tr>
		  
		  
		  
		  </table>
		  
		  
		  
		  </table>
		  
		    </div>
		  
		  
		 <table width='700px' cellspacing='0' cellpadding='2' style='float:left; margin-top:45px;'>
		  
		  <tr><td style='font-weight:bold; font-size:18px;'>(<?php $term=$_GET["term"];
		  
		  
		  
		  
		  if(empty($term)){}elseif($term>="1" && $term<="1"){echo "First SEMESTER";
		  $xd="c103";
		  }
		  
		  elseif($term>="2" && $term<="2"){echo "Second Semester";		  $xd="c104";
		  }
		  elseif($term>="3" && $term<="3"){echo "Resit Semester";		  $xd="c105";
		  }
		  
		  elseif($term>="4" && $term<="4"){echo "Third Semester";		  $xd="c106";
		  }
		  
		  elseif($term>="5" && $term<="5"){echo "Certification";		  $xd="c107";
		  }
		  
		  
$qry = mssql_query("select CAST(ids as text) as total 
from [cg2015].[dbo].[classes] where classs='$deptt' "); 
$row = mssql_fetch_assoc($qry); 
 $deptfs=$row['total'];
		  
$qrys ="select ca,exam
from [cg2015].[dbo].[resultslip] where deptf='$id'  and ids='$deptfs'";$qry=  mssql_query($qrys);
$row = mssql_fetch_assoc($qry); 
 $ca=$row['ca'];
 
  $exam=$row['exam'];
		  
		  ?>)-Results Slip</td></tr>
		  </table>
		  
		  
		  </div>
		  </div>
		 
		  
		 <table width='959px' cellspacing='0' cellpadding='9' style='float:left;margin-top:85px;'>
		 <tr><td style='width:30px; text-align:center; height:30px;border-bottom:1px solid #000;border-top:1px solid #000;border-left:1px solid #000;border-right:1px solid #000;font-weight:bold;'>S/N</td>
		 <td style='width:80px; text-align:center; height:30px;border-bottom:1px solid #000;border-top:1px solid #000;border-right:1px solid #000;font-weight:bold;'>Course Code</td>
		 
		 <td style='width:500px; text-align:left; height:30px;border-bottom:1px solid #000;border-top:1px solid #000;border-right:1px solid #000;font-weight:bold;'>&nbsp;Course Title</td>
		 
		 <td style='width:50px; text-align:center; height:30px;border-bottom:1px solid #000;border-top:1px solid #000;border-right:1px solid #000;font-weight:bold;'>Status</td>
		 <td style='width:50px; text-align:center; height:30px;border-bottom:1px solid #000;border-top:1px solid #000;border-right:1px solid #000;font-weight:bold;'>CV</td>
		 
		 <td style='width:50px; text-align:center; height:30px;border-bottom:1px solid #000;border-top:1px solid #000;border-right:1px solid #000;font-weight:bold;'>CA<?PHP ECHO $ca;?></td>
		 
		 
		 <td style='width:50px; text-align:center; height:30px;border-bottom:1px solid #000;border-top:1px solid #000;border-right:1px solid #000;font-weight:bold;'>EXAM<?PHP ECHO $exam;?></td>
		 
		 
		 
		 <td style='width:50px; text-align:center; height:30px;border-bottom:1px solid #000;border-top:1px solid #000;border-right:1px solid #000;font-weight:bold;'>Grade</td>
		 
		 
		 
		 <td style='width:50px; text-align:center; height:30px;border-bottom:1px solid #000;border-top:1px solid #000;border-right:1px solid #000;font-weight:bold;'>Points</td>
		 
		 
		 </tr>
		 
		 <?php 


$query = mssql_query("select CAST(fname as nvarchar(400)) as fname, CAST(c101 as float) as c101,CAST(c102 as float) as c102 from [cg2015].[dbo].[resit] where db1='$take' and matricule='$mats' and departmet='$deptt' and sex='$term' and levels='$level'order by fname ASC");
$t=1; 

		 while ($row = mssql_fetch_array($query)) {
		 
		 
		 
		 
		 
		 ?>
		 
		 
		  <tr><td style='width:30px; text-align:center; height:10px;border-bottom:1px solid #000;border-left:1px solid #000;border-right:1px solid #000;'><?php echo $t++;?></td>
		 <td style='width:80px; text-align:center;  height:10px;border-bottom:1px solid #000;border-right:1px solid #000;'><?php echo $courseps=$row['fname'];
		
		
		$exam=$row['c102'];
		
		$cas=$row['c101'];?></td>
		 
		 <td style='width:500px; text-align:left; height:10px;border-bottom:1px solid #000;border-right:1px solid #000;'>&nbsp;<?php 
$qryy = "select  CAST(db1 as text) as total, CAST(extra as text) as extra, CAST([status] as text) as statuss
from [cg2015].[dbo].[subject] where subject='$courseps' ";$qry=mssql_query($qryy); 
$row = mssql_fetch_assoc($qry); 
echo $richooTTT=$row['total']; 
 $stat=$row['statuss']; 

$richooTTTy=$row['extra']; 
?></td>
		 
		 <td style='width:50px; text-align:center;  height:10px;border-bottom:1px solid #000;border-right:1px solid #000;'><?php echo $stat;?></td>
		 <td style='width:50px; text-align:center; height:10px;border-bottom:1px solid #000;border-right:1px solid #000;'><?php echo $richooTTTy;?></td>
		 
		 
		 <td style='width:50px; text-align:center;  height:10px;border-bottom:1px solid #000;border-right:1px solid #000;font-weight:bold;font-size:16px;'><?php echo $nsd1=($cas);?></td>
		 
		 
		 
		 <td style='width:50px; text-align:center;  height:10px;border-bottom:1px solid #000;border-right:1px solid #000;font-weight:bold;font-size:16px;'><?php echo $nsd=($exam);$ns=($nsd1+$nsd		);?></td>
		 <td style='width:50px; text-align:center;  height:10px;border-bottom:1px solid #000;border-right:1px solid #000;font-weight:bold;font-size:16px;'><?php 

if(empty($ns)){
	
}elseif($ns>"79.99"  && $ns<="100"){
	$bnn="80";
	
}elseif($ns<"80"){
	$bnn=$ns;
	
}
  $qrya = "select  CAST(comments as text) as total , CAST(gpa as text) as gpa from 
[cg2015].[dbo].[gradebb] where 
(ids>='$id' AND ids<='$id' ) and ((from1>='$bnn'  and from2<='$bnn') or  (from2>='$bnn'  and from1<='$bnn'))


"; 
$qry=mssql_query($qrya);
$row = mssql_fetch_assoc($qry); 
echo $grade=$row['total']; 
 $gpa=$row['gpa'];
 $mokkk=($gpa*$richooTTTy);
 
$query3="update [cg2015].[dbo].[resit] set c103='$mokkk',c104='$richooTTTy'
 where matricule='$mats' and departmet='$deptt'and levels='$level' and sex='$term' and db1='$take' and fname='$courseps' and   c110='$id' ";







mssql_query ($query3) or die ('could not updated:'.mssql_error());
?></td>
		 
		 
		 
		 <td style='width:50px; text-align:center; height:10px;border-bottom:1px solid #000;border-right:1px solid #000;font-weight:bold;font-size:16x;'><?php  
		 
		 
		  if(empty($id)){
			  
			  
		  }elseif($id>="1" && $id<="1"){
		  $semsss="Semester AV";
		    $semsss2="";
		 
if(empty($ns)){
	echo "0.0";
	
}elseif($ns>'')
{
	
	$tko=($ns/5);
	
	 $ttotal=($richooTTTy*$tko);
	printf("%01.2f",$ttotal);
$query3="update [cg2015].[dbo].[resit] set c108='$ttotal',c104='$richooTTTy',c103='$bos'
 where matricule='$mats' and departmet='$deptt'and levels='$level' and sex='$term' and db1='$take' and fname='$courseps'  ";







mssql_query ($query3) or die ('could not updated:'.mssql_error());
	
}
		  }
		 elseif($id>"1"){

  $semsss="Semester GPA";
		    $semsss2="Semester Credits:";
		 

		 $bos=($gpa*$richooTTTy);
		 
		 
		 
		 $query3="update [cg2015].[dbo].[resit] set c108='$bos',c104='$richooTTTy',c103='$bos'
 where matricule='$mats' and departmet='$deptt'and levels='$level' and sex='$term' and db1='$take' and fname='$courseps'  ";


mssql_query ($query3) or die ('could not updated:'.mssql_error());

printf("%01.2f",$bos);







		 }		 





?></td>
		 
		 
		 </tr>
		 
		 
		 
		 
		 
		 
		 
		 
		 
	



		
		
		
		 
		 <?php } ?></TABLE>
		  <div style="float:left; width:780px; height:40px;margin-left:150px;">
		 <table width='900px' cellspacing='0' cellpadding='2'>
		  <tr><td style='font-weight:bold; font-size:18px;'><?php echo $semsss;?>:<?php
		  
		  		  if(empty($id)){
			  
			  
		  }elseif($id>="1" && $id<="1"){
		 

$qry = mssql_query("select sum(CAST(c108 as float)) as total
from [cg2015].[dbo].[resit] where matricule='$mats' and departmet='$deptt'and levels='$level' and sex='$term' and db1='$take'    "); 
$row = mssql_fetch_assoc($qry); 
  $ns=$row['total']; 
 

 $qrys = "select sum(CAST(extra as float)) as total
from [cg2015].[dbo].[subject] where 
department='$deptt'and year1='$level' and year2='$term' and acc='$take'    ";$qry=mssql_query($qrys); 
$row = mssql_fetch_assoc($qry); 
 $coeff=$row['total']; 
		 
if(empty($ns)){
	echo "0.0";
	
}elseif($ns>'')
{
	
	
	
	 $av=($ns/$coeff);
	printf("%01.2f",$av);
	
	if(empty($term)){
		
	}elseif($term>="1" && $term<="1"){
$query3="update [cg2015].[dbo].[courses] set c111='$ns',c112='$av',c113='$coeff'
 where matricule='$mats' and departmet='$deptt'and levels='$level'  and db1='$take'   ";







mssql_query ($query3) or die ('could not updated:'.mssql_error());
	}
	
	elseif($term>="2" && $term<="2"){
$query3="update [cg2015].[dbo].[courses] set c114='$ns',c115='$av',c116='$coeff'
 where matricule='$mats' and departmet='$deptt'and levels='$level'  and db1='$take'   ";







mssql_query ($query3) or die ('could not updated:'.mssql_error());
	}
	
		elseif($term>="3" && $term<="3"){
$query3="update [cg2015].[dbo].[courses] set c117='$ns',c118='$av',c119='$coeff'
 where matricule='$mats' and departmet='$deptt'and levels='$level'  and db1='$take'   ";







mssql_query ($query3) or die ('could not updated:'.mssql_error());
	}
	
	
	
}
		  }
		 elseif($id>"1"){

  $semsss="Semester GPA";
		    $semsss2="Semester Credits:";
		 

		 $bos=($gpa*$richooTTTy);
		 
		 $term=$_GET["term"];
		 if(empty($term)){
		
	}elseif($term>="1" && $term<="1"){
		 
		 
$qry = mssql_query("select ((sum(CAST(c104 as float)))) as total
from [cg2015].[dbo].[resit] where matricule='$mats' and departmet='$deptt'and levels='$level' and sex='$term' and db1='$take'    "); 
$row = mssql_fetch_assoc($qry); 
  $ccc=$row['total']; 
  
  
$qry = mssql_query("select ((sum(CAST(c108 as float)))/(sum(CAST(c104 as float)))) as total
from [cg2015].[dbo].[resit] where matricule='$mats' and departmet='$deptt'and levels='$level' and sex='$term' and db1='$take'    "); 
$row = mssql_fetch_assoc($qry); 
   $gpa=$row['total']; 
  
  
printf("%01.2f",$gpa);
  
$query3="update [cg2015].[dbo].[courses] set c111='$bos',c112='$gpa',c113='$ccc'
 where matricule='$mats' and departmet='$deptt'and levels='$level'  and db1='$take'   ";







mssql_query ($query3) or die ('could not updated:'.mssql_error());





		 }	
		  
		  
		  elseif($term>="2" && $term<="2"){
		 
		 
$qry = mssql_query("select ((sum(CAST(c104 as float)))) as total
from [cg2015].[dbo].[resit] where matricule='$mats' and departmet='$deptt'and levels='$level' and sex='$term' and db1='$take'    "); 
$row = mssql_fetch_assoc($qry); 
  $ccc=$row['total']; 

$qry = mssql_query("select ((sum(CAST(c108 as float)))/(sum(CAST(c104 as float)))) as total
from [cg2015].[dbo].[resit] where matricule='$mats' and departmet='$deptt'and levels='$level' and sex='$term' and db1='$take'    "); 
$row = mssql_fetch_assoc($qry); 
  $gpa=$row['total']; 
  
  
printf("%01.2f",$gpa);
  
$query3="update [cg2015].[dbo].[courses] set c114='$bos',c115='$gpa',c116='$ccc'
 where matricule='$mats' and departmet='$deptt'and levels='$level'  and db1='$take'   ";







mssql_query ($query3) or die ('could not updated:'.mssql_error());





		 }	
		  
		  
		  elseif($term>="3" && $term<="3"){
		 
		 
$qry = mssql_query("select ((sum(CAST(c104 as float)))) as total
from [cg2015].[dbo].[resit] where matricule='$mats' and departmet='$deptt'and levels='$level' and sex='$term' and db1='$take'    "); 
$row = mssql_fetch_assoc($qry); 
  $ccc=$row['total']; 

$qry = mssql_query("select ((sum(CAST(c108 as float)))/(sum(CAST(c104 as float)))) as total
from [cg2015].[dbo].[resit] where matricule='$mats' and departmet='$deptt'and levels='$level' and sex='$term' and db1='$take'    "); 
$row = mssql_fetch_assoc($qry); 
  $gpa=$row['total']; 
  
  
printf("%01.2f",$gpa);
  
$query3="update [cg2015].[dbo].[courses] set c117='$bos',c118='$gpa',c119='$ccc'
 where matricule='$mats' and departmet='$deptt'and levels='$level'  and db1='$take'   ";







mssql_query ($query3) or die ('could not updated:'.mssql_error());





		 }	
		  
		 }	
		   
		  
		  
		  ?>
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  <?php 



 $qryF = "select sum(CAST(c103 as float)) as total
from [cg2015].[dbo].[resit] where matricule='$mats' and departmet='$deptt'and levels='$level' and sex='$term' and db1='$take'    ";$qry=mssql_query($qryF); 
$row = mssql_fetch_assoc($qry); 
  $save=$row['total']; 
 


$qry = mssql_query("select sum(CAST(c104 as float)) as total
from [cg2015].[dbo].[resit] where matricule='$mats' and departmet='$deptt'and levels='$level' and sex='$term' and db1='$take'  "); 
$row = mssql_fetch_assoc($qry); 
$richooTTTyss=$row['total']; 
 

$mxc002=$save;
if(empty($mxc002)){
 $statusfbio="";
 }
elseif($mxc002>'' ){
 $colorf1bio="#FF0000";
 $statusfbio=($save/$richooTTTyss);
}
$queryf3="update [cg2015].[dbo].[courses] set $xd='$statusfbio'
 where matricule='$mats' and departmet='$deptt'  and   c110='$id' ";





mssql_query ($queryf3) or die ();


?> </td><td style='font-weight:bold; font-size:18px;width:340px;'>&nbsp;</td><td style='font-weight:bold; font-size:18px;'><?php echo $semsss2;?><?php 

if(empty($id)){

		 }
	 elseif($id>="1" && $id<="1"){

	 }
	  elseif($id>"1"){
echo $save;
	 }
?></TD></tr>
		  
		  </TABLE>
		  </div>
	<?php


?>
		
		  <div style="float:left; width:980px; height:100px;">
		  <div style="float:left; width:460px;  height:auto;">
		   <?php 


$querys = mssql_query("select  CAST(comments as text) as comments,

CAST(from1 as text) as from1,
CAST(from2 as text) as from2,
CAST(gpa as text) as gpa

 from [cg2015].[dbo].[gradebb] where ids='$id'"); 

		 while ($row = mssql_fetch_array($querys)) {
		 
		 
		 
		 
		 
		 ?>
		  <div style="float:left; width:225px;height:20px;">

		  	  <div style="float:left; width:20px;font-family:arial;font-size:14px; height:20;margin-left:10px;
		  ">
		  <?php echo $row['comments'];?> : 
		  
		 </div> 
		  
 <div style="float:left; width:145;font-family:arial;font-size:14px; height:20px;margin-left:5px;
		  ">
		  <?php echo $row['from1'];?> -
		  <?php echo $row['from2'];?> %
		  <?php echo  $row['gpa'];;?>GP
		  
		 </div> </div> 
		 
		 <?php } ?>
		  
		   </div> 
		  
		   </div> 
		  
		  	   </div> 
		  
		   </div> 
		  
		  
		  

		  
		 <?php } ?>
		 
		 <?php } ?>
		 