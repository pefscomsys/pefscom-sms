<?php

include 'dbcs.php';
$ms=$_GET['roll'];
page_protect();


 $notes=$_SESSION['user_name'];

$user_name=$notes;
if(@$_SESSION['userlevel']!=11){header("location: login.php?error=Unauthorized access");}




 $ip=@$_SERVER['REMOTE_ADDR'];
 $department=$_GET["department"];
 $levels=$_GET["levels"];
 
 $take=$_GET["db1"];
 $semesters=$_GET["semester"];$table="courses";
  $semeste=$_GET["semester"]; $ses=$_GET["S"];$table="courses";
  $semeste=$_GET["semester"];
  $mxc11s=$ses;
if(empty($mxc11s)){
}
elseif($mxc11s>="1" && $mxc11s<="1"){
$semester="1";$fc="(c101+c102)>'0.1'and (c101+c102)<='39.99' and matricule>''";
$sex2="1";$ef="FIRST SEMESTER EXAMINATION";
$dc="(c101+c102)>='0.1'and (c101+c102)<='49.999'";
$gc="(c101+c102)>='40'and (c101+c102)<='44.99' and matricule>''";$rts="(c101+c102)>='45'and (c101+c102)<='49.99' and matricule>''";
$gom="and  (c101+c102)>='0.1' and matricule>''";
} elseif($mxc11s>="2" && $mxc11s<="2"){
$semester="2";
$sex2="2";$ef="SECOND SEMESTER EXAMINATION";$fc="(c101+c102)>'0.1'and (c101+c102)<='39.99' and matricule>''";
$dc="(c101+c102)>='0.1'and (c101+c102)<='49.999'";
$gc="(c101+c102)>='40'and (c101+c102)<='44.99'";$rts="(c101+c102)>='45'and (c101+c102)<='49.99' and matricule>''";
$gom="and  (c101+c102)>='0.1' and matricule>''";

$gc="(c101+c102)>='40'and (c101+c102)<='44.99'";
}elseif($mxc11s>="3" && $mxc11s<="3"){
$semester="1";$sex22="3";$semester2="2";
$sex2="3";$ef="RESIT FIRST SEMESTER COURSES  (EXAMINATION)";
$dc="(c102)>'0.1' and (c101+c102)<='49.999'";
$fc="(c102)>'0.1' and (c101+c102)<='39.99'";
$gc="(c101+c102)>='40' and (c101+c102)<='44.99'";
$rts="(c101+c102)>='45'  and (c101+c102)<='49.99'";
$gom="and  (c102)>'0' and matricule>''";
}  elseif($mxc11s>="4" && $mxc11s<="4"){
$semester="2";
$sex2="3";$ef="RESIT SECOND SEMESTER COURSES (EXAMINATION)";
$dc="(c102)>'0.1' and (c101+c102)<='49.999'";
$fc="(c102)>'0.1' and (c101+c102)<='39.99'";
$gc="(c102+c101)>='40' and (c101+c102)<='44.99'";
$rts="(c101+c102)>='45'  and (c101+c102)<='49.99' ";
$gom="and  (c102)>'0' and matricule>''";
}
 ?>

 <html>
 <head>
 <title>FREQUENCY TABLE -<?php echo $department;?></title>
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
<style type="text/css"> body {size:A4 Landscape;
        margin: 40px;
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
.ExcelTableFormationCol {
                 
                  text-align: center;
                  font-family: Arial Narrow;
                  font-size: 14px;
                }

.ExcelTableFormationRow {
                  background-color: WHEAT;
                  text-align: center;
              font-family: Calibri;
              font-size: 16px;
              height: 20px;
            }

#LastRow td {
          border-bottom-width: 0px;
        }

.LastCol {
       border-right-width: 0px;
     }
cursor{
position: absolute;
      top: 8px;
      right: -5px;
      background: #000;
      width: 5px;
      height: 5px;
      border: 1px solid #fff;
      border-right: 0px;
      border-bottom: 0px;

}
     #ExcelCursorOuter {
      position: relative;
     }

     #ExcelCursor {
      position: absolute;
      top: 8px;
      right: -5px;
      background: #000;
      width: 5px;
      height: 5px;
      border: 1px solid #fff;
      border-right: 0px;
      border-bottom: 0px;
     }


table.gridtable {
	font-family: verdana,arial,sans-serif;
	font-size:11px;
	color:#333333;
	border-width: 1px;
	border-color: #666666;
	border-collapse: collapse;
}
table.gridtable td {
	border-width: 1px;
	padding: 8px;
	border-style: solid;
	border-color: #666666;
	background-color: #dedede;
}
table.gridtable td {
	border-width: 1px;
	padding: 8px;
	border-style: solid;
	border-color: #666666;
	background-color: #ffffff;
}

input{border-radius:0px; border: 0;
    box-shadow: none; /* outline:#fff;background:#fff;border-bottom:1px solid #efefef;}
</style>
</head>
<body onload="window.print();">
		
<?php

$qry = mssql_query("select CAST(deptf as text) as total
from [cg2015].[dbo].[classes] where    classs='$department' "); 
$row = mssql_fetch_assoc($qry); 
  $id=$row['total']; 
 $mxc11s=$levels;
if(empty($mxc11s)){
}
elseif($mxc11s>="200" && $mxc11s<="200"){
require "btech.php";


} 

elseif($mxc11s>="300" && $mxc11s<="300"){

require "btech.php";

}
elseif($mxc11s>="400" && $mxc11s<="400"){
require "btechs.php";


} 
?>

<table cellspacing="$semester" cellpadding="2"class="gridtable" style="width:1200px;border-collapse: collapse; border-bottom-width: 0px; border-right-width: 0px;color:#000;"><tr style="background-color: #EEEEEE;">
<td class="ExcelTableFormationCol" style="font-weight:bold;">Code</td>
 <td class="ExcelTableFormationCol"style="font-weight:bold;">Subject</td>
  <td class="ExcelTableFormationCol"style="font-weight:bold;">Credit<br>Value</td>
  <td class="ExcelTableFormationCol"style="font-weight:bold;">Status</td>
    <td class="ExcelTableFormationCol"style="font-weight:bold;">Course Master</td>
 <td class="ExcelTableFormationCol"style="font-weight:bold;">%Coverage</td class="ExcelTableFormationCol"style="font-weight:bold;"
 ><td class="ExcelTableFormationCol">
CR</td><td class="ExcelTableFormationCol"style="font-weight:bold;"style="font-weight:bold;">CE</td>
<td class="ExcelTableFormationCol"style="font-weight:bold;">ABS</td>
<td class="ExcelTableFormationCol"style="font-weight:bold;"># Fail</td>
<td class="ExcelTableFormationCol"style="font-weight:bold;"># Pass</td><td class="ExcelTableFormationCol"style="font-weight:bold;"
>%Pass</td>


	 <?php 


$querys = mssql_query("select  CAST(comments as text) as comments,

CAST(from1 as text) as from1,
CAST(from2 as text) as from2,
CAST(gpa as text) as gpa

 from [cg2015].[dbo].[gradebb] where ids='$id'"); 

		 while ($row = mssql_fetch_array($querys)) {
		 
		 
		 
		 
		 
		 ?>







<td class="ExcelTableFormationCol"style="font-weight:bold;"
><?php echo $grade=$row['comments'];$f1=$row['from1'];$f2=$row['from2'];?></td>
		 <?php } ?>
 </tr>
 
 <?php 


 $querys = "select  CAST([subject] as nvarchar(400)) as subjects, CAST(db1 as text) as db1 ,
 CAST(extra as text) as credit from [cg2015].[dbo].[subject] where department='$department' 
 and year1='$levels' and year2='$semester' and acc='$take' order by subject ASC";
$query=mssql_query($querys); 

		 while ($row = mssql_fetch_array($query)) {
		 
		 
		 
		 
		 
		 ?>
 
 <tr>
<td><?php echo $code=$row["subjects"];?></td>  <td><?php echo $row["db1"];?></td>



<td><?php echo $row["credit"];?></td>


<td><?php echo $row["status"];?></td>
<td><?php



$qry = mssql_query("select CAST(lecturer as text) as total
from [cg2015].[dbo].[tag] where    db1='$take' and fname='$code'"); 
$row = mssql_fetch_assoc($qry); 
 echo $ny=$row['total']; 
  
  
  ?></td>


<td><?php



$qry = mssql_query("select coverage as total
from [cg2015].[dbo].[tag] where    db1='$take' and fname='$code'"); 
$row = mssql_fetch_assoc($qry); 
 echo $nysss=$row['total']; 
  
  
  ?></td>


<td><?php  


$qry = mssql_query("select count(*) as nm 
from [cg2015].[dbo].[resit] where  departmet='$department' and levels='$levels' and sex='$sex2' and db1='$take' and fname='$code' $gom");

$row = mssql_fetch_assoc($qry); 
 echo $ex=$row['nm']; 



$qry = mssql_query("select count(*) as nm 
from [cg2015].[dbo].[resit] where  departmet='$department'and levels='$levels' and db1='$take' ");

$row = mssql_fetch_assoc($qry); 
 $x=$row['nm']; 

?>

</td>

<td><?php
$qry = mssql_query("select count(*) as tn 
from [cg2015].[dbo].[resit] where  departmet='$department' and levels='$levels' and sex='$sex2' and db1='$take' and fname='$code' $gom");


$row = mssql_fetch_assoc($qry); 
 echo $exs=$row['tn']; 
 




  ?></td>




<td><?php
 echo  $es=($ex-$exs); 




  ?></td>



<td><?php  





$qry = mssql_query("select count(*) as fail 
from [cg2015].[dbo].[resit] where  departmet='$department'and levels='$levels' and sex='$sex2' and db1='$take' and fname='$code' and  $dc ");



$row = mssql_fetch_assoc($qry); 
 echo $fail=$row['fail']; 
 

?></td>


<td><?php  



$qry = mssql_query("select count(*) as passed 
from [cg2015].[dbo].[resit] where departmet='$department'and levels='$levels' and sex='$sex2' and db1='$take' and fname='$code' and  (c101+c102)>='50'and (c101+c102)<='100' ");



$row = mssql_fetch_assoc($qry); 
 echo $fails=$row['passed']; 

?></td>



<td><?php

$mxc11=$fails;
if(empty($mxc11)){
echo  $statusfbio="0";}
elseif($mxc11>""){

printf("%01.2f",$ui=(($fails/$exs)*100));


}





  ?></td>
  
  
  
  
  
	 <?php 


$querys = mssql_query("select  CAST(comments as text) as comments,

CAST(from1 as text) as from1,
CAST(from2 as text) as from2,
CAST(gpa as text) as gpa

 from [cg2015].[dbo].[gradebb] where ids='$id'"); 

		 while ($row = mssql_fetch_array($querys)) {
		 
		 
		 $f1=$row['from1'];$f2=$row['from2'];
		 
		 ?>


  
  
  
  <td><?php  

// work here


 $qrya = "select count(*) as passed
from [cg2015].[dbo].[resit] where  departmet='$department'and levels='$levels' and sex='$sex2' and db1='$take' and fname='$code' and  
((c101+c102)>='$f1'and (c101+c102)<='$f2') or  ((c101+c102)>='$f2'and (c101+c102)<='$f1')";$qry=mssql_query($qrya);






$row = mssql_fetch_assoc($qry); 
 echo $a=$row['passed']; 
?>
</td>
  <?php } ?>
  
  
  </tr>
    <?php } ?>
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  </table>
  
  
  
  
  
<div style="float:left; height:50px;text-align:center; width:1100px;MARGIN-TOP:45PX;line-height:25px;FONT-SIZE:17PX;">

<div style="float:left; height:50px;text-align:center; width:250px;line-height:25px;">

</div>


<div style="float:left; height:50px;text-align:center; width:300px;line-height:25px;">
CR = CANDIDATE REGISTERED
</div>



<div style="float:left; height:50px;text-align:center; width:300px;line-height:25px;">
CE = CANDIDATE EXAMINED

</div>

<div style="float:left; height:50px;text-align:center; width:250px;line-height:25px;">
ABS = ABSENT
</div></div>
