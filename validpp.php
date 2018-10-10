<html>
<head>
<TITLE>mock result stat</TITLE>
<style>

table,td{line-height:21px;
font-family:Tahoma, sans-serif;
text-transform:uppercase;
font-size:14px; }
tr{border-bottom:1px solid #000;}
</style>
</head>
<body onload="window.print();">



<div  style="text-align:center; margin:auto; width:800px; height:150px;"><br><br>

 <?php
ini_set('max_execution_time', 60000); //300 seconds = 5 minutes
 include 'dbcs.php';
 
ini_set('max_execution_time', 60000); //300 seconds = 5 minutes
$department=$_POST["department"];

$sex=$_POST["sex"];

$levels=$_POST["levels"];
$table=courses;
$roll=$_GET["1"];
$query="select * from school where roll='1'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>


<?php echo $row[1];?>
</b>

<br>
Class List for the Accademic Year <?php
$tiko=date('Y '); 
echo $tiko-1;
?>/  <?php
$tiko=date('Y '); 
echo $tiko;
?>
<?php } ?>
<?php
$roll=$_GET["1"];
$query="select * from matsub where roll='1'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>
<?php  $off1=$row['mgg'];


?><?php } ?>

<?php
$roll=$_GET["2"];
$query="select * from matsub where roll='2'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>
<?php  $off2=$row['mgg'];


?><?php } ?>


<?php
$roll=$_GET["3"];
$query="select * from matsub where roll='3'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>
<?php  $off3=$row['mgg'];


?><?php } ?>





<?php
$roll=$_GET["4"];
$query="select * from matsub where roll='4'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>
<?php  $off4=$row['mgg'];


?><?php } ?>



<?php
$roll=$_GET["5"];
$query="select * from matsub where roll='5'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>
<?php  $off5=$row['mgg'];


?><?php } ?>





<?php
$roll=$_GET["6"];
$query="select * from matsub where roll='6'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>
<?php  $off6=$row['mgg'];


?><?php } ?>



<?php
$roll=$_GET["7"];
$query="select * from matsub where roll='7'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>
<?php  $off7=$row['mgg'];


?><?php } ?>
<Br><Br>

Department : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php 


echo $department;?>

<Br>

Level : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php 


echo $levels;?><br /><br /><B>
COURSE STATISTIC FORM TABLE </B>

<br />
</b>
 <?php
$roll=$_GET["1"];
$query="select * from rush where roll='1'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>
<b>
<?php $take=$row[1];



?>
<?php } ?>










<div style="width:900px;FLOAT:LEFT;COLOR:#000;height:24px;text-align:left;font-size:17px; text-transform:uppercase;">
Semester:<?php echo $sex;?>
</div>







<div style="width:1450px;FLOAT:LEFT;COLOR:#000;MARGIN-TOP:50PX;height:100px;margin-left:-120px;">

<div style="width:900px;FLOAT:LEFT;COLOR:#000;border-top:1px solid #000;border-right:1px solid #000; border-left:1px solid #000;height:74px;">

<div style="width:200px;FLOAT:LEFT;COLOR:#000;border-right:1px solid #000;border-bottom:1px solid #000;  height:35px;">

Total Enrolment
</div>
<div style="width:200px;FLOAT:LEFT;COLOR:#000;border-right:1px solid #000;border-bottom:1px solid #000;  height:35px;">

N<sup>o </sup>Sat
</div>

<div style="width:200px;FLOAT:LEFT;COLOR:#000;border-right:1px solid #000;border-bottom:1px solid #000;  height:35px;">

N<sup>o </sup>Passed
</div>
<div style="width:200px;FLOAT:LEFT;COLOR:#000;border-right:1px solid #000;border-bottom:1px solid #000;  height:35px;">

N<sup>o </sup>Failed
</div>
<div style="width:94px;FLOAT:LEFT;COLOR:#000;border-bottom:1px solid #000;  height:35px;">

Absent
</div>


<div style="width:200px;FLOAT:LEFT;COLOR:#000;border-right:1px solid #000;border-bottom:1px solid #000;  height:35px;">
<?php 
$mxc01fd=$sex;
  if(empty($mxc01fd)){
 $statusfb01fd="";
 }
  elseif($mxc01fd<=1 && $mxc01fd>=1  ){
  $statusfb01fd="c126";
   $nn="";
}
  elseif($mxc01fd<=2 && $mxc01fd>=2  ){
  $statusfb01fd="c127";
   $nn="";
}

  elseif($mxc01fd<=3 && $mxc01fd>=3  ){
  $statusfb01fd="c128";
   $nn="1";
}
$qry = mysql_query("select * FROM  courses where   departmet='$department'  and c139='$nn' and levels='$levels' and db1='$take'"); 
$num_rows=mysql_num_rows($qry);
 echo $x133=$num_rows;

?>

</div>
<div style="width:200px;FLOAT:LEFT;COLOR:#000;border-right:1px solid #000;border-bottom:1px solid #000;  height:35px;">

<?php 

$qry = mysql_query("select * FROM  courses where   departmet='$department' and c139='$nn'  and levels='$levels' and db1='$take' and $statusfb01fd>=0.0001"); 
$num_rows=mysql_num_rows($qry);
 echo $x1p=$num_rows;

 ?>
</div>

<div style="width:200px;FLOAT:LEFT;COLOR:#000;border-right:1px solid #000;border-bottom:1px solid #000;  height:35px;">

<?php 

$qry = mysql_query("select * FROM  courses where   departmet='$department' and c139='$nn' and levels='$levels' and db1='$take' and $statusfb01fd>=10"); 
$num_rows=mysql_num_rows($qry);
 echo $x1pp=$num_rows;

 ?>
</div>
<div style="width:200px;FLOAT:LEFT;COLOR:#000;border-right:1px solid #000;border-bottom:1px solid #000;  height:35px;">
<?php 

echo $mins=($x1p-$x1pp);?>

</div>
<div style="width:94px;FLOAT:LEFT;COLOR:#000;border-bottom:1px solid #000;  height:35px;">
<?php 

echo ($x133-($mins+$x1pp));?>

</div>









</div></div>
<div style="width:1450px;FLOAT:LEFT;COLOR:#000;height:800px;MARGIN-TOP:10PX;margin-left:-220px;">

<?php
$roll=$_GET["1"];
$query="select * from rush where roll='1'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>
<b>
<?php $take=$row[1];



?>
<?php } ?>


	
			 <div style="float:left; width:1650px; height:auto;color:#000;margin-left:100px;">
 
			 <div style="float:left; width:70px;BORDER:1PX SOLID #000; height:50px;color:#000; background:#ccc;font-size:13px;">
			Code
			 
		    </div>
			 <div style="float:left; width:350px;BORDER:1PX SOLID #000; height:50px;color:#000; background:#ccc;font-size:13px;">
			Course Title
			 
		    </div>
			
			 <div style="float:left; width:1210px; height:50px;">
			 <div style="float:left; width:1210px; height:25px;">

			 <div style="float:left; width:500px;BORDER:1PX SOLID #000; BACKGROUND:#CCC;height:50px;color:#000;font-size:11px;">
			 
			 <div style="float:left; width:500px; BORDER-BOTTOM:1PX SOLID #000;text-align:center;height:25px;color:#000;font-size:11px;">
			STATISTICS
			 </div>

			 <div style="float:left; width:500px; height:25px;color:#000;font-size:11px;">
			 
			 <div style="float:left; width:152px;BORDER-RIGHT:1PX SOLID #000; height:25px;color:#000;font-size:10px;">
			 >=50</div> 
			 <div style="float:left; width:152px;BORDER-RIGHT:1PX SOLID #000;height:25px;color:#000;font-size:10px;">
			 <50</div> 
			  
			  <div style="float:left; width:150px; height:25px;color:#000;font-size:10px;">
			 %/100</div> 
			  
			 
			  </div> 
			  </div>			<?php


$department=$_POST["department"];

$sex=$_POST["sex"];

$levels=$_POST["levels"];

$mxc01=$sex;
  if(empty($mxc01)){
 $statusfb01="";
 }
  elseif($mxc01<=1 && $mxc01>=1  ){
  $statusfb01="3";
}
  elseif($mxc01<=2 && $mxc01>=2  ){
  $statusfb01="4";
}

$mxc01t=$sex;
  if(empty($mxc01t)){
 $statusfb0t="";
 }
  elseif($mxc01t<=1 && $mxc01t>=1  ){
  $statusfb01t="1";
}
  elseif($mxc01t<=2 && $mxc01t>=2  ){
  $statusfb01t="2";
}

elseif($mxc01t<=3 && $mxc01t>=3  ){
  $statusfb01t="1";
}

elseif($mxc01t<=4 && $mxc01t>=4  ){
  $statusfb01t="2";
}

$query = mysql_query("select  * from subject where department='$department' and year1='$levels' and year2='$statusfb01t' order by subject asc"); 

		 while ($row = mysql_fetch_array($query)) {
		 
		 











?> 


 <?php  $m1=$row['subject'];?>
<?php } ?>
			 
		    </div>
			
			
			</div>
<?php 
 $rollss=$_GET["roll"];
$department=$_POST["department"];

$sex=$_POST["sex"];

$levels=$_POST["levels"];
$query="select * from subject where year1='$levels' and department='$department'  and year2='$sex' order by subject asc
";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
 
		 ?>
		 
			
			 <div style="float:left; width:1400px; height:auto;color:#000;">
 
			 <div style="float:left; width:70px;font-weight:normal;BORDER-left:1PX SOLID #000;BORDER-bottom:1PX SOLID #000; BORDER-right:1PX SOLID #000;height:25px;color:#000;font-size:13px;">
			<?php echo $mats=$row['subject'];?>
			 
		    </div>
			 <div style="float:left;text-align:left; width:350px;BORDER-left:1PX SOLID #000;BORDER-bottom:1PX SOLID #000; BORDER-right:1PX SOLID #000;font-weight:normal; height:25px;color:#000;font-size:12px;">
	<?php echo $matss=$row['db1'];?>
			 
		    </div>
			
			
			 <div style="float:left; width:500px; height:auto;">
			 
			 
			 
			 
			 
			 
			 

			

			 <div style="float:left; width:502px; height:25px;color:#000;font-size:11px; ">
			 
			 <div style="float:left; width:153px;BORDER-RIGHT:1PX SOLID #000;BORDER-bottom:1PX SOLID #000; height:25px;color:#000;font-size:10px;">
			<?PHP $m1=$row['subject'];
			 
$qry = mysql_query("select * FROM  resit where fname='$m1' and db1='$take'and sex='$sex' and departmet='$department' and levels='$levels' and (c101+c102)>=50"); 
$num_rows=mysql_num_rows($qry);
echo   $x11=$num_rows; ?></div> 
			 <div style="float:left; width:152px;BORDER-bottom:1PX SOLID #000;BORDER-RIGHT:1PX SOLID #000;height:25px;color:#000;font-size:10px;">
		<?PHP 
			 
$qry = mysql_query("select * FROM  resit where fname='$m1' and db1='$take'and sex='$sex' and departmet='$department' and levels='$levels' and (c101+c102)>0.001 and (c101+c102)<50"); 
$num_rows=mysql_num_rows($qry);
 echo $x12=$num_rows;


$qry = mysql_query("select * FROM  resit where fname='$m1'and db1='$take' and sex='$sex'  and departmet='$department'  and levels='$levels' and (c101+c102)>0.0001"); 
$num_rows=mysql_num_rows($qry);
  $x133=$num_rows;



 ?></div> 
			  
			  <div style="float:left; width:194px;BORDER-RIGHT:1PX SOLID #000;BORDER-bottom:1PX SOLID #000; height:25px;color:#000;font-size:10px;">
				<?PHP 
				$x13=$x11+$x12;
			 $mxc125=$x11;
  if(empty($mxc125)){
 $statusfb125="";
 }
  elseif($mxc125>'' ){
  $statusfb125=($mxc125)/($x13) ;
}

			
printf("%01.2f",($statusfb125)*100); 
			 
			 
			 ?></div> 
			  
			 
			  </div> 

			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
</div>



<?php } ?>


</div>

<div style="FLOAT:LEFT;width:1200px; margin-top:30px;COLOR:#000;height:120px;">


<iframe title="" class="youtube-player" type="text/html" 
width="700px" height="400" src="graphs/example.php?roll=<?php echo $levels;?>"
frameborder="0" allowFullScreen style="
 border: 0px solid #ffffff;background:#fff;"></iframe>



</div>












<div style="FLOAT:LEFT;width:1200px; margin-top:900px;COLOR:#000;height:500px; text-align:left;font-size:17px; text-transform:uppercase;">

<div style="FLOAT:LEFT;width:900px; COLOR:#000;height:25px;text-align:left;font-size:17px; text-transform:uppercase;">
Semester:<?php echo $sex;?>
</div>


<table>
<tr>
<td style="float:left; width:300px; border-right:1px solid #000;border-left;:1px solid #000;border-left:1px solid #000;border-top:1px solid #000;border-bottom:1px solid #000;">Department</td><td  style="float:left; width:150px; border-right:1px solid #000;border-left;:1px solid #000;border-left:1px solid #000;border-top:1px solid #000;border-bottom:1px solid #000;">Total Sat</td> <td style="float:left; width:150px; border-right:1px solid #000;border-left;:1px solid #000;border-left:1px solid #000;border-top:1px solid #000;border-bottom:1px solid #000;"> Total Passed</td><td style="float:left; width:150px; border-right:1px solid #000;border-left;:1px solid #000;border-left:1px solid #000;border-top:1px solid #000;border-bottom:1px solid #000;"> Total Failed</td><td style="float:left; width:150px; border-right:1px solid #000;border-left;:1px solid #000;border-left:1px solid #000;border-top:1px solid #000;border-bottom:1px solid #000;"> % Pass</td></tr></table>
</tr></table>
<table>
<tr>
<td style="float:left; width:300px; border-right:1px solid #000;border-left;:1px solid #000;border-left:1px solid #000;border-top:1px solid #000;border-bottom:1px solid #000;">
&nbsp;&nbsp;<?php echo $off1;?>

</td>

<td  style="float:left; width:150px; border-right:1px solid #000;border-left;:1px solid #000;border-left:1px solid #000;border-top:1px solid #000;border-bottom:1px solid #000;">

<?php 

$qry = mysql_query("select * FROM  courses where   departmet='$off1'  and levels='$levels' and db1='$take' and $statusfb01fd>=0.0001"); 
$num_rows=mysql_num_rows($qry);
 echo $x1pc1=$num_rows;

 ?>
</td> 


<td style="float:left; width:150px; border-right:1px solid #000;border-left;:1px solid #000;border-left:1px solid #000;border-top:1px solid #000;border-bottom:1px solid #000;"> 
<?php 

$qry = mysql_query("select * FROM  courses where   departmet='$off1'  and levels='$levels' and db1='$take' and $statusfb01fd>=10"); 
$num_rows=mysql_num_rows($qry);
 echo $x1pc2=$num_rows;

 ?>

</td>




<td style="float:left; width:150px; border-right:1px solid #000;border-left;:1px solid #000;border-left:1px solid #000;border-top:1px solid #000;border-bottom:1px solid #000;"> 
<?php
echo ($x1pc1-$x1pc2);?>


</td>


<td style="float:left; width:150px; border-right:1px solid #000;border-left;:1px solid #000;border-left:1px solid #000;border-top:1px solid #000;border-bottom:1px solid #000;"> 

<?php
echo $mins=(($x1pc2/$x1pc1)*100);?>


</td>


























</tr>














<tr>
<td style="float:left; width:300px; border-right:1px solid #000;border-left;:1px solid #000;border-left:1px solid #000;border-top:1px solid #000;border-bottom:1px solid #000;">
&nbsp;&nbsp;<?php echo $off2;?>

</td>

<td  style="float:left; width:150px; border-right:1px solid #000;border-left;:1px solid #000;border-left:1px solid #000;border-top:1px solid #000;border-bottom:1px solid #000;">

<?php 

$qry = mysql_query("select * FROM  courses where   departmet='$off2'  and levels='$levels' and db1='$take' and $statusfb01fd>=0.0001"); 
$num_rows=mysql_num_rows($qry);
 echo $x1pc12=$num_rows;

 ?>
</td> 


<td style="float:left; width:150px; border-right:1px solid #000;border-left;:1px solid #000;border-left:1px solid #000;border-top:1px solid #000;border-bottom:1px solid #000;"> 
<?php 

$qry = mysql_query("select * FROM  courses where   departmet='$off2'  and levels='$levels' and db1='$take' and $statusfb01fd>=10"); 
$num_rows=mysql_num_rows($qry);
 echo $x1pc22=$num_rows;

 ?>

</td>




<td style="float:left; width:150px; border-right:1px solid #000;border-left;:1px solid #000;border-left:1px solid #000;border-top:1px solid #000;border-bottom:1px solid #000;"> 
<?php
echo ($x1pc12-$x1pc22);?>


</td>


<td style="float:left; width:150px; border-right:1px solid #000;border-left;:1px solid #000;border-left:1px solid #000;border-top:1px solid #000;border-bottom:1px solid #000;"> 

<?php
echo $mins2=(($x1pc22/$x1pc12)*100);?>


</td>


























</tr>














<tr>
<td style="float:left; width:300px; border-right:1px solid #000;border-left;:1px solid #000;border-left:1px solid #000;border-top:1px solid #000;border-bottom:1px solid #000;">
&nbsp;&nbsp;<?php echo $off3;?>

</td>

<td  style="float:left; width:150px; border-right:1px solid #000;border-left;:1px solid #000;border-left:1px solid #000;border-top:1px solid #000;border-bottom:1px solid #000;">

<?php 

$qry = mysql_query("select * FROM  courses where   departmet='$off3'  and levels='$levels' and db1='$take' and $statusfb01fd>=0.0001"); 
$num_rows=mysql_num_rows($qry);
 echo $x1pc13=$num_rows;

 ?>
</td> 


<td style="float:left; width:150px; border-right:1px solid #000;border-left;:1px solid #000;border-left:1px solid #000;border-top:1px solid #000;border-bottom:1px solid #000;"> 
<?php 

$qry = mysql_query("select * FROM  courses where   departmet='$off3'  and levels='$levels' and db1='$take' and $statusfb01fd>=10"); 
$num_rows=mysql_num_rows($qry);
 echo $x1pc23=$num_rows;

 ?>

</td>




<td style="float:left; width:150px; border-right:1px solid #000;border-left;:1px solid #000;border-left:1px solid #000;border-top:1px solid #000;border-bottom:1px solid #000;"> 
<?php
echo ($x1pc13-$x1pc23);?>


</td>


<td style="float:left; width:150px; border-right:1px solid #000;border-left;:1px solid #000;border-left:1px solid #000;border-top:1px solid #000;border-bottom:1px solid #000;"> 

<?php
echo $mins3=(($x1pc23/$x1pc13)*100);?>


</td>


























</tr>








<tr>
<td style="float:left; width:300px; border-right:1px solid #000;border-left;:1px solid #000;border-left:1px solid #000;border-top:1px solid #000;border-bottom:1px solid #000;">
&nbsp;&nbsp;<?php echo $off4;?>

</td>

<td  style="float:left; width:150px; border-right:1px solid #000;border-left;:1px solid #000;border-left:1px solid #000;border-top:1px solid #000;border-bottom:1px solid #000;">

<?php 

$qry = mysql_query("select * FROM  courses where   departmet='$off4'  and levels='$levels' and db1='$take' and $statusfb01fd>=0.0001"); 
$num_rows=mysql_num_rows($qry);
 echo $x1pc14=$num_rows;

 ?>
</td> 


<td style="float:left; width:150px; border-right:1px solid #000;border-left;:1px solid #000;border-left:1px solid #000;border-top:1px solid #000;border-bottom:1px solid #000;"> 
<?php 

$qry = mysql_query("select * FROM  courses where   departmet='$off4'  and levels='$levels' and db1='$take' and $statusfb01fd>=10"); 
$num_rows=mysql_num_rows($qry);
 echo $x1pc24=$num_rows;

 ?>

</td>




<td style="float:left; width:150px; border-right:1px solid #000;border-left;:1px solid #000;border-left:1px solid #000;border-top:1px solid #000;border-bottom:1px solid #000;"> 
<?php
echo ($x1pc14-$x1pc24);?>


</td>


<td style="float:left; width:150px; border-right:1px solid #000;border-left;:1px solid #000;border-left:1px solid #000;border-top:1px solid #000;border-bottom:1px solid #000;"> 

<?php
echo $mins4=(($x1pc24/$x1pc14)*100);?>


</td>


























</tr>




<tr>
<td style="float:left; width:300px; border-right:1px solid #000;border-left;:1px solid #000;border-left:1px solid #000;border-top:1px solid #000;border-bottom:1px solid #000;">
&nbsp;&nbsp;<?php echo $off5;?>

</td>

<td  style="float:left; width:150px; border-right:1px solid #000;border-left;:1px solid #000;border-left:1px solid #000;border-top:1px solid #000;border-bottom:1px solid #000;">

<?php 

$qry = mysql_query("select * FROM  courses where   departmet='$off5'  and levels='$levels' and db1='$take' and $statusfb01fd>=0.0001"); 
$num_rows=mysql_num_rows($qry);
 echo $x1pc15=$num_rows;

 ?>
</td> 


<td style="float:left; width:150px; border-right:1px solid #000;border-left;:1px solid #000;border-left:1px solid #000;border-top:1px solid #000;border-bottom:1px solid #000;"> 
<?php 

$qry = mysql_query("select * FROM  courses where   departmet='$off5'  and levels='$levels' and db1='$take' and $statusfb01fd>=10"); 
$num_rows=mysql_num_rows($qry);
 echo $x1pc25=$num_rows;

 ?>

</td>




<td style="float:left; width:150px; border-right:1px solid #000;border-left;:1px solid #000;border-left:1px solid #000;border-top:1px solid #000;border-bottom:1px solid #000;"> 
<?php
echo ($x1pc15-$x1pc25);?>


</td>


<td style="float:left; width:150px; border-right:1px solid #000;border-left;:1px solid #000;border-left:1px solid #000;border-top:1px solid #000;border-bottom:1px solid #000;"> 

<?php
echo $mins5=(($x1pc25/$x1pc15)*100);?>


</td>


























</tr>




</table>
</tr></table>
<table>
<tr>
<td>TOTAL Evaluated:</td>




<td><?PHP ECHO $mans=($x1pc15+$x1pc14+$x1pc13+$x1pc12+$x1pc1);?></td>


<td>TOTAL PASSED:</td>




<td><?PHP ECHO $man2=($x1pc25+$x1pc24+$x1pc23+$x1pc22+$x1pc2);?></td>



<td>% PASSED:</td>




<td><?PHP ECHO (($man2/$mans)*100);?></td>


</tr></table>
