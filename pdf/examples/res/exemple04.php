<?php include 'dbcs.php';
ini_set('max_execution_time', 3250000); //300 seconds = 5 minutes
$roll=$_GET["roll"];

?><style type="text/css">
<!--
div.special { margin: auto; width:95%; border:1px solid #000000; padding: 2px; }
div.special table { width:100%; border:1px solid #000000; font-size:10px; border-collapse:collapse; }
.topLeftRight     { border-top:1px solid #000; border-left:1px solid #000; border-right:1px solid #000;}
.topLeftBottom    { border-top:1px solid #000; border-left:1px solid #000; border-bottom:1px solid #000; }
.topLeft          { border-top:1px solid #000; border-left:1px solid #000; }
.bottomLeft       { border-bottom:1px solid #000; border-left:1px solid #000; }
.topRight         { border-top:1px solid #000; border-right:1px solid #000; }
.bottomRight      { border-bottom:1px solid #000; border-right:1px solid #000; }
.topRightBottom   { border-top:1px solid #000; border-bottom:1px solid #000; border-right:1px solid #000; }
-->
</style>
<page style="font-size: 16px" >

<table width="700px" cellspacing="0" cellpadding="0" style="float:left;margin-top:20px; margin-left:0px;">
 

  <tr><td style="width:1050px;font-size:23px; height:80px;text-align:center;">
  <b style="">Higher Institute of Management Studies (HIMS Buea)</b></td>
  </tr>
  
  
  
  
  
   <tr><td style="width:1050px;font-size:23px; height:20px;text-align:center;">
   <table><tr>
  <td style="float:left; width:350px;font-size:17px; line-height:24px;height:100px;text-align:left;">The Deputy Registrar office HIMS Buea<br>
  Garden Park Molyko-Buea<br>P.O.Box 496<br>
  South West Region Cameroon</td>
  
  
  <td style="float:left; width:350px; height:100px;"></td>
  
  
  <td style="float:left; width:350px; height:100px;text-align:right;font-size:17px;line-height:24px;">TELEPHONE: (+237) 677570206<BR>
  E-mail:info@himsbuea.org<br>
  website:http://www.himsbuea.org</td></tr></table>
  </td>
  </tr>
  
  
  
  
 
  <?php
$query="select * from courses where roll='$roll' order by db1 ASC ";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
 
		 ?>
  
  
  
   <tr><td style="width:1050px;font-size:23px; height:30px;text-align:center;">
<hr></td>
  </tr>
   <tr><td style="width:1050px;font-size:23px; height:80px;text-align:center;">
  <b style="font-weight:normal; color:#787878;">Enrolement Verification as of  27/06/<?php 
  
    
  $deptt=$row["departmet"];
  $db1=$row["db1"];
  $levels=$row["levels"]; $place=$row["cxx1"]; $sex=$row["sex"];
    $birth=$row["cxx2"];  $im=$row["roll"];
  $mats=$row["matricule"];$fname=$row["fname"]; $deptt=$row["departmet"];
$qry = mysql_query("select  SUM(db1) as total
from courses where levels='$levels' and matricule='$mats'"); 
$row = mysql_fetch_assoc($qry); 
 $r=$row['total']; 
 
echo $rs=($r+2);?> </b></td>
  </tr>
  
   
  
  
   <tr><td style="width:1050px;font-size:23px; height:20px;text-align:center;">
   <table><tr>
  <td style="float:left; width:350px;font-size:17px; line-height:24px;height:30px;text-align:left;">
  Name :<b> <?php echo $fname;?></b></td>
  
  
  <td style="float:left; width:350px; height:30px;"></td>
  
  
  <td style="float:left; width:350px; height:30px;text-align:right;font-size:17px;line-height:24px;">
  ID Nbr :<?php echo $mats;?> </td></tr>
  
  
  <tr>
  <td style="float:left; width:350px;font-size:17px; line-height:24px;height:30px;text-align:left;">
  Date of Birth :<b> <?php echo $birth?></b></td>
  
  
  <td style="float:left; width:350px; height:30px;"></td>
  
  
  <td style="float:left; width:350px; height:30px;text-align:right;font-size:17px;line-height:24px;">
  Place of Birth:<?php echo $place;?> </td></tr>
  
  
  
    
  <tr>
  <td style="float:left; width:350px;font-size:17px; line-height:24px;height:30px;text-align:left;">
  Sex:<b> <?php echo $sex;?></b></td>
  
  
  <td style="float:left; width:350px; height:30px;"></td>
  
  
  <td style="float:left; width:350px; height:30px;text-align:right;font-size:17px;line-height:24px;">
  internal code:hims<?php echo $im;?> </td></tr>
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  </table>
  </td>
  </tr>
  
  
  
  
    <tr><td style="width:1050px;font-size:20px;font-size:17px; height:80px;text-align:left;">
Note: if the Term "Begin Date" in Enrolment History is after the date listed above this certification should be considered preliminary for that term. </td>
  </tr>
  
  
  
    <tr><td style="width:1050px;font-size:23px;font-size:17px; height:30px;text-align:center;">
<b><u>Current Program of study</u></b></td>
  </tr>
  
  <tr><td style="width:1050px;font-size:23px; height:20px;text-align:center;">
   <table><tr>
  <td style="float:left; width:350px;font-size:17px; line-height:24px;height:20px;text-align:left;">
  <b> Field of Study</b></td>
  
  
  <td style="float:left; width:350px; height:20px;font-size:17px;"><b> Academic Program</b></td>
  
  
  <td style="float:left; width:350px; height:20px;text-align:center;font-size:17px;line-height:24px;">
  Expected Start Date </td></tr></table>
  </td>
  </tr>
  
  
  
    <tr><td style="width:1050px;font-size:23px; height:20px;text-align:center;">
   <table><tr>
  <td style="float:left; width:350px;font-size:17px; line-height:24px;height:30px;text-align:left;">
  Business</td>
  
  
  <td style="float:left; width:350px; height:30px;font-size:17px;"><?php echo $deptt;?></td>
  
  
  <td style="float:left; width:350px; height:30px;text-align:center;font-size:17px;line-height:24px;">
  10/10/<?php echo $r;?> </td></tr></table>
  </td>
  </tr>
  
  
  <tr><td style="width:1050px;font-size:23px; height:20px;text-align:center;">
   <table><tr>
  <td style="float:left; width:350px;font-size:17px; line-height:24px;height:20px;text-align:left;">
  <b> Specaility</b></td>
  
  
  <td style="float:left; width:350px; height:20px;font-size:17px;"><b> Diploma Conferred :</b></td>
  
  
  <td style="float:left; width:350px; height:20px;text-align:center;font-size:17px;line-height:24px;">
  <b>Declare End Date </b></td>
  
  
  
  
  </tr></table>
  </td>
  </tr>
  
  <tr><td style="width:1050px;font-size:23px; height:20px;text-align:center;">
   <table><tr>
  <td style="float:left; width:350px;font-size:17px; line-height:24px;height:20px;text-align:left;">
<?php echo $deptt;?></td>
  
  
  <td style="float:left; width:350px; height:20px;font-size:17px;"> HND in <?php echo $deptt;?></td>
  
  
  <td style="float:left; width:350px; height:20px;text-align:center;font-size:17px;line-height:24px;">
  26/06/<?php echo $rs;?> </td>
  
  
  
  
  </tr></table>
  </td>
  </tr> <tr><td style="width:1050px;font-size:23px;font-size:17px; height:30px;text-align:center;">
</td>
  </tr><tr><td style="width:1050px;font-size:23px;font-size:17px; height:30px;text-align:center;">
</td>
  </tr><tr><td style="width:1050px;font-size:23px;font-size:17px; height:30px;text-align:center;">
</td>

  </tr>
    <tr><td style="width:1050px;font-size:23px;font-size:17px; height:30px;text-align:center;">
<b><u>Enrolment History</u></b></td>
  </tr>
  <?php } ?>
  
  
  </table>
  
<table width="900px" cellspacing="0" cellpadding="0" style="float:left;margin-top:20px; margin-left:0px;">
  <?php
 
$query="select * from courses where matricule='$mats'  ";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
 
		 ?>
 <tr><td style="float:left; width:200px; height:20px;text-align:center;font-size:17px;line-height:24px;">
  1<sup>st</sup> Sem </td>
<td style="float:left; width:100px; height:20px;text-align:center;font-size:17px;line-height:24px;">
  <?php echo $deptt=$row["departmet"];$level=$row["levels"];$db1=$row["db1"];?> </td>
  <td style="float:left; width:200px; height:20px;text-align:center;font-size:17px;line-height:24px;">
  <?php 
echo $nn= round ($tt=$row["db1"]);
  
  ?> </td>
  
  <td style="float:left; width:100px; height:20px;text-align:center;font-size:17px;line-height:24px;">
  18/09/<?php 
echo $nn= round ($tt=$row["db1"]);
  
  ?> </td>
  
  <td style="float:left; width:100px; height:20px;text-align:center;font-size:17px;line-height:24px;">
  21/03/<?php 
echo $nn= round ($tt=$row["db1"]);
  
  ?> </td>
  
  
  <td style="float:left; width:100px; height:20px;text-align:center;font-size:17px;line-height:24px;">
  
  
  
  
  <?php
  
  
  
$qry = mysql_query("select c105 as total
from courses where levels='$level' and matricule='$mats'and db1='$db1'"); 
$row = mysql_fetch_assoc($qry); 
 $ny=$row['total']; 
  
printf("%01.2f",$ui=($ny));
?>
  
  
  
  </td>
  
  
  <td style="float:left; width:100px; height:20px;text-align:center;font-size:17px;line-height:24px;">
  <b><?php 
  $mxc11=$ny;
if(empty($mxc11)){
}
elseif($mxc11>='10' ){
	echo "PASS";
	
}
elseif($mxc11<'10' ){
	echo "Fail";
	
}
?></b></td>
</tr>









































<tr><td style="float:left; width:200px; height:20px;text-align:center;font-size:17px;line-height:24px;">
  2<sup>nd</sup> Sem </td>
<td style="float:left; width:100px; height:20px;text-align:center;font-size:17px;line-height:24px;">
  <?php echo $deptt;$level;?> </td>
  <td style="float:left; width:200px; height:20px;text-align:center;font-size:17px;line-height:24px;">
  <?php 
echo $nn;
  
  ?> </td>
  
  <td style="float:left; width:100px; height:20px;text-align:center;font-size:17px;line-height:24px;">
  21/04/<?php 
echo $nn;
  
  ?> </td>
  
  <td style="float:left; width:100px; height:20px;text-align:center;font-size:17px;line-height:24px;">
  20/06/<?php 
echo $nn;
  
  ?> </td>
  
  
  <td style="float:left; width:100px; height:20px;text-align:center;font-size:17px;line-height:24px;">
  
  

  
  <?php
  

$qry = mysql_query("select c106 as total
from courses where levels='$level' and matricule='$mats'  and db1='$db1'"); 
$row = mysql_fetch_assoc($qry); 
 $nh=$row['total']; 
  
printf("%01.2f",$ui=($nh));
?>
  
  
  
  </td>
  
  
  <td style="float:left; width:100px; height:20px;text-align:center;font-size:17px;line-height:24px;">
  <b><?php 
  $mxc11=$nh;
if(empty($mxc11)){
}
elseif($mxc11>='10' ){
	echo "PASS";
	
}
elseif($mxc11<'10' ){
	echo "Fail";
	
}
?></b></td>
</tr>























<tr><td style="float:left; width:200px; height:20px;text-align:center;font-size:17px;line-height:24px;">
  3<sup>rd</sup> Sem </td>
<td style="float:left; width:100px; height:20px;text-align:center;font-size:17px;line-height:24px;">
  <?php echo $deptt;?> </td>
  <td style="float:left; width:200px; height:20px;text-align:center;font-size:17px;line-height:24px;">
  <?php 
echo $nn;
  
  ?> </td>
  
  <td style="float:left; width:100px; height:20px;text-align:center;font-size:17px;line-height:24px;">
  4/09/<?php 
echo $nn;
  
  ?> </td>
  
  <td style="float:left; width:100px; height:20px;text-align:center;font-size:17px;line-height:24px;">
  21/09/<?php 
echo $nn;
  
  ?> </td>
  
  
  <td style="float:left; width:100px; height:20px;text-align:center;font-size:17px;line-height:24px;">
  
  

  
  <?php
  
$qry = mysql_query("select SUM(c101+c102) as total
from resit where levels>='$level' and levels<='$level' and sex>='3'and sex<='3' and matricule='$mats' and db1>='$db1'    and db1<='$db1'"); 
$rcbvb=$row['total']; 
  
if(empty($rcbvb)){
}
elseif($rcbvb>''){
$qry = mysql_query("select c107 as total
from courses where levels='$level' and matricule='$mats' and db1='$db1'"); 
$row = mysql_fetch_assoc($qry); 
 $nis=$row['total']; 
  

printf("%01.2f",$uis=($nis));

}
?>
  
  
  
  </td>
  
  
  <td style="float:left; width:100px; height:20px;text-align:center;font-size:17px;line-height:24px;">
  <b><?php 
  $mxc11=$nis;
if(empty($mxc11)){
		echo "Nil";
}

elseif($mxc11>='0.00' && $mxc11<='0.00'){
	echo "No Resit";
	
}
elseif($mxc11>='10' ){
	echo "PASS";
	
}
elseif($mxc11<'10' ){
	echo "Fail";
	
}
?></b></td>
</tr>



<?php } ?>
</table>
</page>