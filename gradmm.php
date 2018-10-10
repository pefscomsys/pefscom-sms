<?php

include 'dbcs.php';
$ms=$_GET['roll'];
page_protect();


 $notes=$_SESSION['user_name'];

$user_name=$notes;
if(@$_SESSION['userlevel']!=11){header("location: login.php?error=Unauthorized access");}




 $ip=@$_SERVER['REMOTE_ADDR'];
 $department=$_POST["department"];
 $levels=$_POST["levels"];
 
 $take=$_POST["db1"];
 $semesters=$_POST["semester"];$table="courses";
  $semeste=$_POST["semester"];
  $mxc11s=$semesters;
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
$sex2="3";$ef="RESIT SEMESTER EXAMINATION";
$dc="(c102)>'0.1' and (c101+c102)<='49.999'";
$fc="(c102)>'0.1' and (c101+c102)<='39.99'";
$gc="(c101+c102)>='40' and (c101+c102)<='44.99'";
$rts="(c101+c102)>='45'  and (c101+c102)<='49.99'";
$gom="and  (c102)>'0' and matricule>''";
}  elseif($mxc11s>="4" && $mxc11s<="4"){
$semester="2";
$sex2="3";$ef="RESIT SEMESTER EXAMINATION";
$dc="(c102)>'0.1' and (c101+c102)<='49.999'";
$fc="(c102)>'0.1' and (c101+c102)<='39.99'";
$gc="(c102+c101)>='40' and (c101+c102)<='44.99'";
$rts="(c101+c102)>='45'  and (c101+c102)<='49.99' ";
$gom="and  (c102)>'0' and matricule>''";
}
 ?>

 <html>
 <head>
 <title>BTECH FORMAT</title>
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
<body>
		 <div class="page" STYLE="MARGIN-TOP:-75PX;">

<?php

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
>%Pass</td><td class="ExcelTableFormationCol"style="font-weight:bold;">A</td><td class="ExcelTableFormationCol"style="font-weight:bold;"
>B+</td><td   class="ExcelTableFormationCol"style="font-weight:bold;">B</td><td  class="ExcelTableFormationCol"style="font-weight:bold;"
>C+</td><td   class="ExcelTableFormationCol"style="font-weight:bold;">C</td><td  class="ExcelTableFormationCol"style="font-weight:bold;"
>D+</td><td  class="ExcelTableFormationCol"style="font-weight:bold;">D</td><td  class="ExcelTableFormationCol"style="font-weight:bold;"
>F</td>
 </tr>
 
 <?php 


$query = mysql_query("select  * from subject where department='$department' and year1='$levels' and year2='$semester' and db1>'' and acc='$take' order by subject ASC"); 

		 while ($row = mysql_fetch_array($query)) {
		 
		 
		 
		 
		 
		 ?>
 
 <tr>
<td><?php echo $code=$row["subject"];?></td>  <td><?php echo $row["db1"];?></td>



<td><?php echo $row["credit"];?></td>


<td><?php echo $row["status"];?></td>
<td><?php



$qry = mysql_query("select lecturer as total
from tage where    db1='$take' and fname='$code'"); 
$row = mysql_fetch_assoc($qry); 
 echo $ny=$row['total']; 
  
  
  ?></td>


<td><?php



$qry = mysql_query("select coverage as total
from tage where    db1='$take' and fname='$code'"); 
$row = mysql_fetch_assoc($qry); 
 echo $ny=$row['total']; 
  
  
  ?></td>


<td><?php  


$qry = mysql_query("select * 
from resit where  departmet='$department' and levels='$levels' and sex='$sex2' and db1='$take' and fname='$code' $gom");




$num_rows=mysql_num_rows($qry);
 echo  $ex=$num_rows; 




$qry = mysql_query("select * 
from courses where  departmet='$department'and levels='$levels' and db1='$take' ");




$num_rows=mysql_num_rows($qry);
$x=$num_rows; 
?>

</td>

<td><?php
$qry = mysql_query("select * 
from resit where  departmet='$department' and levels='$levels' and sex='$sex2' and db1='$take' and fname='$code' $gom");




$num_rows=mysql_num_rows($qry);
 echo  $exs=$num_rows; 




  ?></td>




<td><?php
 echo  $es=($ex-$exs); 




  ?></td>



<td><?php  





$qry = mysql_query("select * 
from resit where  departmet='$department'and levels='$levels' and sex='$sex2' and db1='$take' and fname='$code' and  $dc ");




$num_rows=mysql_num_rows($qry);
  echo $fail=$num_rows; 
?></td>


<td><?php  




$qry = mysql_query("select * 
from resit where  departmet='$department'and levels='$levels' and sex='$sex2' and db1='$take' and fname='$code' and  (c101+c102)>='50'and (c101+c102)<='100' ");




$num_rows=mysql_num_rows($qry);
  echo $fails=$num_rows; 
?></td>



<td><?php
$qry = mysql_query("select * 
from resit where  departmet='$department'and levels='$levels' and sex='$sex2' and db1='$take' and fname='$code' and  (c101+c102)>=50");




$num_rows=mysql_num_rows($qry);
  $xx=$num_rows; 

$mxc11=$xx;
if(empty($mxc11)){
echo  $statusfbio="0";}
elseif($mxc11>""){

printf("%01.2f",$ui=(($fails/$exs)*100));


}





  ?></td><td><?php  




$qry = mysql_query("select * 
from resit where  departmet='$department'and levels='$levels' and sex='$sex2' and db1='$take' and fname='$code' and  (c101+c102)>='80'and (c101+c102)<='100' ");




$num_rows=mysql_num_rows($qry);
  echo $a=$num_rows; 
?>
</td><td><?php  




$qry = mysql_query("select * 
from resit where  departmet='$department'and levels='$levels' and sex='$sex2' and db1='$take' and fname='$code' and  (c101+c102)>='70'and (c101+c102)<='79.99' ");




$num_rows=mysql_num_rows($qry);
  echo $bb=$num_rows; 
?></td><td><?php  




$qry = mysql_query("select * 
from resit where  departmet='$department'and levels='$levels' and sex='$sex2' and db1='$take' and fname='$code' and  (c101+c102)>='60'and (c101+c102)<='69.99' ");




$num_rows=mysql_num_rows($qry);
  echo $b=$num_rows; 
?></td><td><?php  




$qry = mysql_query("select * 
from resit where  departmet='$department'and levels='$levels' and sex='$sex2' and db1='$take' and fname='$code' and  (c101+c102)>='55'and (c101+c102)<='59.99' ");




$num_rows=mysql_num_rows($qry);
  echo $cc=$num_rows; 
?></td><td><?php  




$qry = mysql_query("select * 
from resit where  departmet='$department'and levels='$levels' and sex='$sex2' and db1='$take' and fname='$code' and  (c101+c102)>='50'and (c101+c102)<='54.99' ");




$num_rows=mysql_num_rows($qry);
  echo $b=$num_rows; 
?></td><td><?php  




$qry = mysql_query("select * 
from resit where  departmet='$department'and levels='$levels' and sex='$sex2' and db1='$take' and fname='$code' and  $rts ");




$num_rows=mysql_num_rows($qry);
  echo $dd=$num_rows; 
?></td><td><?php  




$qry = mysql_query("select * 
from resit where  departmet='$department'and levels='$levels' and sex='$sex2' and db1='$take' and fname='$code' and  $gc ");




$num_rows=mysql_num_rows($qry);
  echo $d=$num_rows; 
?></td><td><?php  




$qry = mysql_query("select * 
from resit where  departmet='$department'and levels='$levels' and sex='$sex2' and db1='$take' and fname='$code' and  $fc ");




$num_rows=mysql_num_rows($qry);
  echo $f=$num_rows; 
?></td>
  </tr>
  <?php } ?>
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
 <?php 


$query = mysql_query("select  * from subject where department='$department' and year1='$levels' and year2='$semester2' and db1>'' and acc='$take' order by subject ASC"); 

		 while ($row = mysql_fetch_array($query)) {
		 
		 
		 
		 
		 
		 ?>
 
 <tr>
<td><?php echo $code=$row["subject"];?></td>  <td><?php echo $row["db1"];?></td>



<td><?php echo $row["credit"];?></td>


<td><?php echo $row["status"];?></td>
<td><?php



$qry = mysql_query("select lecturer as total
from tage where    db1='$take' and fname='$code'"); 
$row = mysql_fetch_assoc($qry); 
 echo $ny=$row['total']; 
  
  
  ?></td>


<td><?php



$qry = mysql_query("select coverage as total
from tage where    db1='$take' and fname='$code'"); 
$row = mysql_fetch_assoc($qry); 
 echo $ny=$row['total']; 
  
  
  ?></td>


<td><?php  


$qry = mysql_query("select * 
from resit where  departmet='$department' and levels='$levels' and sex='$sex22' and db1='$take' and fname='$code' $gom");




$num_rows=mysql_num_rows($qry);
 echo  $ex=$num_rows; 




$qry = mysql_query("select * 
from courses where  departmet='$department'and levels='$levels' and db1='$take' ");




$num_rows=mysql_num_rows($qry);
$x=$num_rows; 
?>

</td>

<td><?php
$qry = mysql_query("select * 
from resit where  departmet='$department' and levels='$levels' and sex='$sex22' and db1='$take' and fname='$code' $gom");




$num_rows=mysql_num_rows($qry);
 echo  $exs=$num_rows; 




  ?></td>




<td><?php
 echo  $es=($ex-$exs); 




  ?></td>



<td><?php  





$qry = mysql_query("select * 
from resit where  departmet='$department'and levels='$levels' and sex='$sex22' and db1='$take' and fname='$code' and  $dc ");




$num_rows=mysql_num_rows($qry);
  echo $fail=$num_rows; 
?></td>


<td><?php  




$qry = mysql_query("select * 
from resit where  departmet='$department'and levels='$levels' and sex='$sex22' and db1='$take' and fname='$code' and  (c101+c102)>='50'and (c101+c102)<='100' ");




$num_rows=mysql_num_rows($qry);
  echo $fails=$num_rows; 
?></td>



<td><?php
$qry = mysql_query("select * 
from resit where  departmet='$department'and levels='$levels' and sex='$sex22' and db1='$take' and fname='$code' and  (c101+c102)>=50");




$num_rows=mysql_num_rows($qry);
  $xx=$num_rows; 

$mxc11=$xx;
if(empty($mxc11)){
echo  $statusfbio="0";}
elseif($mxc11>""){

printf("%01.2f",$ui=(($fails/$exs)*100));


}





  ?></td><td><?php  




$qry = mysql_query("select * 
from resit where  departmet='$department'and levels='$levels' and sex='$sex22' and db1='$take' and fname='$code' and  (c101+c102)>='80'and (c101+c102)<='100' ");




$num_rows=mysql_num_rows($qry);
  echo $a=$num_rows; 
?>
</td><td><?php  




$qry = mysql_query("select * 
from resit where  departmet='$department'and levels='$levels' and sex='$sex22' and db1='$take' and fname='$code' and  (c101+c102)>='70'and (c101+c102)<='79.99' ");




$num_rows=mysql_num_rows($qry);
  echo $bb=$num_rows; 
?></td><td><?php  




$qry = mysql_query("select * 
from resit where  departmet='$department'and levels='$levels' and sex='$sex22' and db1='$take' and fname='$code' and  (c101+c102)>='60'and (c101+c102)<='69.99' ");




$num_rows=mysql_num_rows($qry);
  echo $b=$num_rows; 
?></td><td><?php  




$qry = mysql_query("select * 
from resit where  departmet='$department'and levels='$levels' and sex='$sex22' and db1='$take' and fname='$code' and  (c101+c102)>='55'and (c101+c102)<='59.99' ");




$num_rows=mysql_num_rows($qry);
  echo $cc=$num_rows; 
?></td><td><?php  




$qry = mysql_query("select * 
from resit where  departmet='$department'and levels='$levels' and sex='$sex22' and db1='$take' and fname='$code' and  (c101+c102)>='50'and (c101+c102)<='54.99' ");




$num_rows=mysql_num_rows($qry);
  echo $b=$num_rows; 
?></td><td><?php  




$qry = mysql_query("select * 
from resit where  departmet='$department'and levels='$levels' and sex='$sex22' and db1='$take' and fname='$code' and  $rts ");




$num_rows=mysql_num_rows($qry);
  echo $dd=$num_rows; 
?></td><td><?php  




$qry = mysql_query("select * 
from resit where  departmet='$department'and levels='$levels' and sex='$sex22' and db1='$take' and fname='$code' and  $gc ");




$num_rows=mysql_num_rows($qry);
  echo $d=$num_rows; 
?></td><td><?php  




$qry = mysql_query("select * 
from resit where  departmet='$department'and levels='$levels' and sex='$sex22' and db1='$take' and fname='$code' and  $fc ");




$num_rows=mysql_num_rows($qry);
  echo $f=$num_rows; 
?></td>
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
