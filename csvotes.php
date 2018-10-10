<?php include 'dbc.php';
echo $csvs=$_GET['roll'];?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<html lang="en">
<head>
<title><?php echo $school;?></title>
        <link rel="shortcut icon" href="pef.png"> 
		<style>
	alert{border:1px solid #000;
	background:#000;}
		
		</style>
		
<Script>

var seconds = 1;

function secondPassed() {

	var minutes = Math.round((seconds - 30)/60);

	var remainingSeconds = seconds % 60;

	if (remainingSeconds < 10) {

		remainingSeconds = '0' + remainingSeconds;	

	}

	document.getElementById('countdown').innerHTML = minutes + ':' + remainingSeconds;

	if (seconds == 0) {

		clearInterval(countdownTimer);

		document.getElementById('countdown').innerHTML; window.location.href='scans.php?roll=<?php echo $csvs;?>';

	} else {

		seconds--;

	}

}



var countdownTimer = setInterval('secondPassed()', 1000);

</script>

	</head>
	<body onload="myFunction()">
<?php
$roll=$_GET["1"];
$query="select * from week where id='1'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>
<b>
<?php  $intos=$row[1];

$frime=$intos+1;
?><?php } ?>
	
	
	<?php  $datess=date('j/m/y');?>
	<?php   $dayss=date('D');
	 $yt=date('Y');	 $ytt=date('M');
	$days7=date('j');
	
	?>
<?php     $mmx1=$dayss;
if(empty($mmx1)){
$mmx1="";
}
else if(($mmx1 >='Sat' && $mmx1 <='Sat')){
$statusf1bengssmm1="SATURDAY";

}
else if(($mmx1 >='Mon'&& $mmx1 <='Mon')){
$statusf1bengssmm1="MONDAY";

}else if(($mmx1 >='Tue' && $mmx1 <='Tue')){
$statusf1bengssmm1="TUESDAY";

}else if(($mmx1 >='Wed' && $mmx1 <='Wed')){
$statusf1bengssmm1="WEDNESDAY";

}else if(($mmx1 >='Thu'&& $mmx1 <='Thu')){
$statusf1bengssmm1="THURSDAY";

}
else if(($mmx1 >='Fri'&& $mmx1 <='Fri')){
$statusf1bengssmm1="FRIDAY";

} 
  $mmx11=$days7;
if(empty($mmx11)){
$mmx11="";
}
else if(($mmx11 >='1' && $mmx11 <='7')){
$statusf1bengssmm11="1";

}
else if(($mmx11 >='8'&& $mmx11 <='14')){
$statusf1bengssmm11="2";

}else if(($mmx11 >='15' && $mmx11 <='21')){
$statusf1bengssmm11="3";

}else if(($mmx11 >='22' && $mmx11 <='28')){
$statusf1bengssmm11="3";

}else if(($mmx11 >='29'&& $mmx11 <='31')){
$statusf1bengssmm11="4";

}
?><?php     

$query7="update week set  special='$statusf1bengssmm11', date='$datess' where id='1'



";

mysql_query ($query7) or die ('could not updated:'.mysql_error());


?>


<?php
$roll=$_GET["1"];
$query="select * from rushs where roll='1'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>
<?php  $take=$row[1];


?><?php } ?>

	<br>
<h2>
Please Wait for  
<span id='countdown'></span>



</h2>

<form action="csvotes.php" method="POST">
<table border=0 align=center bgcolor="#0000FF">
<tr><td style="color:#fff;">SCAN OR ENTER BARCODE</td><td>
<input type="text" name="barcode" 
	    onKeyPress="return disableCtrlKeyCombination(event);"
	    onKeyDown="return disableCtrlKeyCombination(event);" />

<script>
    if (!("autofocus" in document.createElement("input")))
            document.getElementById("inputFieldId").focus();
</script>
</td>
</tr>

</table>
</form>
<hr />
<?php
$roll=$_GET["1"];
$query="select * from timing2 where id='1'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
?>

<?php  $start=$row[3];
 $end=$row[4];
?>



<?php } ?>
<?php
$roll=$_GET["2"];
$query="select * from timing2 where id='2'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
?>

<?php  $start2=$row[3];
 $end2=$row[4];
?>



<?php } ?><?php
$roll=$_GET["3"];
$query="select * from timing2 where id='3'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
?>

<?php  $start3=$row[3];
 $end3=$row[4];
?>



<?php } ?>
<?php
$roll=$_GET["4"];
$query="select * from timing2 where id='4'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
?>

<?php  $start4=$row[3];
 $end4=$row[4];
?>



<?php } ?><?php
$roll=$_GET["5"];
$query="select * from timing2 where id='5'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
?>

<?php  $start5=$row[3];
 $end5=$row[4];
?>



<?php } ?>

<?php
$txtbarcode=$_POST['barcode']; 

$query="select * from courses where   barcode='$txtbarcode' and db1='$take'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {

?>
<?php $fname=$row['matricule'];

$deptt=$row['departmet'];
$department=$row['departmet'];
$levels=$row['levels'];
?>
<?php } ?>
<?php 

$qry = mysql_query("select * FROM  courstitle where department='$deptt' and levels='$levels' and days='$statusf1bengssmm1'"); 
$num_rows=mysql_num_rows($qry);
 echo $x11p=$num_rows;


?>
<?php
$query="select * from courses where   matricule='$fname' and levels='$levels' and db1='$take'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>
<div style="float:left; width:1200px; height:400px;border:3px solid #ccc; fieldset:1px;margin-left:100px;">


<div style="float:left; width:1200px; margin-top:3px;height:40px;background:#1188aa; color:#fff;">
<div style="float:left;margin-top:3px;width:1190px; text-align:center;text-transform:uppercase;">
Welcome to HIMS SCANNING in service
</div></div>
<div style="float:left; width:450px; height:200px; fieldset:1px;">


				
				
					
					<?php
				 $mxx=$row['matricule'];
				$qry = mysql_query("select id as total
from employees where empname='$mxx'"); 
$row = mysql_fetch_assoc($qry); 
 $savep4=$row['total']; 
				 $mxx=$rec['empname'];
				 ?>
					
						<?php } ?>
					<img src="load_image.php?pic_id=<?php echo $savep4;?>" width="420px" height="300px"style="border:2px solid #ccc; box-shadow:2px 2px 2px 2px #000;">
					
					
					
					
					
					<?php
$query="select * from courses where   matricule='$fname' and levels='$levels' and db1='$take'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>
</div>

<div style="float:left; width:570px; height:150px;fieldset:1px;">


<div style="float:left; width:570px; height:25px;border:1px solid #fff;margin-top:5px;">DEPARTMENTAL INFORMATION</div>
<div style="float:left; width:230px; height:25px; TEXT-ALIGN:RIGHT; fieldset:1px;">
NAME:
</div>

<div style="float:left; width:270px; height:25px; TEXT-ALIGN:left; fieldset:1px;font-weight:bold;">
&nbsp;<?php echo $fname=$row['fname'];


$fnamey=$row['matricule'];?>
</div>
<div style="float:left; width:230px; height:25px; TEXT-ALIGN:RIGHT; fieldset:1px;">
DEPARTMENT:
</div>

<div style="float:left; width:270px; height:25px; TEXT-ALIGN:left; fieldset:1px;font-weight:bold; color:#ff6666;">
&nbsp;<?php echo $department;
?>
</div>
<div style="float:left; width:230px; height:25px; TEXT-ALIGN:RIGHT; fieldset:1px;">
MATRICULE:
</div>

<div style="float:left; width:270px; height:25px; TEXT-ALIGN:left; fieldset:1px;font-weight:bold; color:#ff6666;">
&nbsp;<?php echo $fnamey;
?>
</div>
<div style="float:left; width:230px; height:25px; TEXT-ALIGN:RIGHT; fieldset:1px;">
LEVEL:
</div>

<div style="float:left; width:270px; height:25px; TEXT-ALIGN:left; fieldset:1px;font-weight:bold;">



&nbsp;<?php echo $levels=$row['levels'];

 $clasc=$row['total2'];
$amount=$row['c145'];?>
</div>

<div style="float:left; width:230px; height:25px; TEXT-ALIGN:RIGHT; fieldset:1px;">
DAY:
</div>

<div style="float:left; width:270px; height:25px; TEXT-ALIGN:left; fieldset:1px;font-weight:bold; ">
&nbsp;<?php   $dayss=date('D');?>
<?php     $mmx1=$dayss;
if(empty($mmx1)){
$mmx1="";
}
else if(($mmx1 >='Sat' && $mmx1 <='Sat')){
$statusf1bengssmm1="SATURDAY";

}
else if(($mmx1 >='Mon'&& $mmx1 <='Mon')){
$statusf1bengssmm1="MONDAY";

}else if(($mmx1 >='Tue' && $mmx1 <='Tue')){
$statusf1bengssmm1="TUESDAY";

}else if(($mmx1 >='Wed' && $mmx1 <='Wed')){
$statusf1bengssmm1="WEDNESDAY";

}else if(($mmx1 >='Thur'&& $mmx1 <='Thur')){
$statusf1bengssmm1="THURSDAY";

}
else if(($mmx1 >='Fri'&& $mmx1 <='Fri')){
$statusf1bengssmm1="FRIDAY";

}
  $statusf1bengssmm1;
?>
</div>


<div style="float:left; width:230px; height:25px; TEXT-ALIGN:RIGHT; fieldset:1px;">
TIME IN:
</div>

<div style="float:left; width:270px; height:25px; TEXT-ALIGN:left; fieldset:1px;font-weight:bold; color:#ff6666;">
&nbsp;<?php $date=date('y/m/j');$month=date('M');$year=date('Y');echo $times=date('H:I');
$time=date('Hi');

?>
</div>




<div style="float:left; width:230px; height:25px; TEXT-ALIGN:RIGHT; fieldset:1px;">
COURSE TITLE:
</div>

<div style="float:left; width:270px; height:25px; TEXT-ALIGN:left; fieldset:1px;font-weight:bold;">
&nbsp;
<?php    

 echo $mmx1=$time;
if(empty($mmx1)){
$mmx1="";
}
else if( ($mmx1>="$start"   && $mmx1<="$end")){
$statusf1bengssmmx1="$end";

}
else if( ($mmx1>="$start2"   && $mmx1<="$end2")){
$statusf1bengssmmx1="$end2";

}

else if( ($mmx1>="$start3"   && $mmx1<="$end3")){
$statusf1bengssmmx1="$end3";

}

else if( ($mmx1>="$start4"   && $mmx1<="$end4")){
$statusf1bengssmmx1="$end4";

}

else if( ($mmx1>="$start5"   && $mmx1<="$end5")){
$statusf1bengssmmx1="$end5";

}
 $statusf1bengssmmx1;
 
?>
<?php     

$qry = mysql_query("select venue as total from exam where department='$department' and   days='$statusf1bengssmm1' and stat='$levels' and  (time2>='$statusf1bengssmmx1' && time2<='$statusf1bengssmmx1' )"); 
$row = mysql_fetch_assoc($qry); 
echo $coursecode=$row['total']; 

?>
</div>



<div style="float:left; width:230px; height:25px; TEXT-ALIGN:RIGHT; fieldset:1px;">
HALL
</div>

<div style="float:left; width:270px; height:25px; TEXT-ALIGN:left; fieldset:1px;font-weight:bold;">
<?PHP ECHO $csvs;?>
</dIV>


<div style="float:left; width:230px; height:25px; TEXT-ALIGN:RIGHT; fieldset:1px;">
COURSE TUTORS:
</div>

<div style="float:left; width:270px; height:25px; TEXT-ALIGN:left; fieldset:1px;font-weight:bold;">
&nbsp;
<?php      
?>
<?php     
$qry = mysql_query("select db1 as total from courstitle where stream='$clasc' and days='$statusf1bengssmm1' and levels='$levels' and  (to1='$statusf1bengssmmx1')"); 
$row = mysql_fetch_assoc($qry); 
echo $row['total']; 

?>
</div>









<div style="float:left; width:230px; height:25px; TEXT-ALIGN:RIGHT; fieldset:1px;">
COURSE DESCRIPTION:
</div>

<div style="float:left; width:270px; height:25px; TEXT-ALIGN:left; fieldset:1px;font-weight:bold; color:#ff6666;">

&nbsp;
<?php  
 $dates=date("j/m/Y");
$qryujgft = mysql_query("select SUM(present) as total
from attendance2 where fname='$fnamey' AND levels='$levels' and dates='$dates' and time='$statusf1bengssmmx1' "); 
$row = mysql_fetch_assoc($qryujgft); 
 $jimss=$row['total'];


   
$qry = mysql_query("select db1 as total from subject where subject='$coursecode' and year1='$levels'"); 
$row = mysql_fetch_assoc($qry); 
echo $coursetitle=$row['total']; 



 
 $qry2 = mysql_query("select SUM(balance) as total from historic where  matricule='$fnamey' and class='$levels' and oldb='$take' "); 
$row = mysql_fetch_assoc($qry2); 
 $amounts=$row['total']; 


 
 $qry2 = mysql_query("select SUM(amount_paid) as total from historic where  matricule='$fnamey' and class='$levels' and oldb='$take' "); 
$row = mysql_fetch_assoc($qry2); 
 $amount=$row['total']; 

 $qry = mysql_query("select firstin as total from control where department='$department'  and db1='$levels'"); 
$row = mysql_fetch_assoc($qry); 
    $money=$row['total']; 
 
  $mmx1u=$money;
if(empty($mmx1u)){
$mmx1u="";
$statusfbiok="";
$standy2="";
$stand2="";
}
else if( ($mmx1u>$amount && $amount<$mmx1u)){

$statusfbiok="";
$standy2="<div style='float:left; width:450px; height:250px;color:red;font-size:28px;'><script style='width:400px;color:red;height:400px;background:#ccc;'>alert('DEBTOR Bal: $amounts!,P=$jimss'); window.location.href('students.php');</script></div>";

}
else if( ($mmx1u<=$amount && $amount>=$mmx1u)){
 $statusfbiok="insert into debt set  matricule='$fnamey',timein='$days7',db1='$take',amount='$amount',fname='$fname' ,department='$department'";

$stand2="";

 $standy2="attendance2";
}

else if( ($mmx1u=$amount )){
$stand2="";

 $standy2="attendance2";
}
$mmx109=$statusfbiok;
if(empty($mmx109)){
$mmx109="";
$statusfbioks="";

}

else if( ($mmx109>'' )){

$statusfbioks=mysql_query ($statusfbiok);
}









echo $statusfbioks;
echo $standy2; 
?>



<?php

$qrykj= mysql_query("select * FROM  courstitle where days='$statusf1bengssmm1' AND stream='$clasc' and  levels='$levels'"); 
$num_rowspo=mysql_num_rows($qrykj);
 $jobg=$num_rowspo;


?>




<?php
$trs_duplicate = mysql_query("select count(*) as total from months where  month='$month'and db1='$take'and week='$statusf1bengssmm11' and department='$department'") or die(mysql_error());
list($total) = mysql_fetch_row($trs_duplicate);

if ($total > 0)
{
$terr[] = "";
//header("Location: finances.php?msg=$err");
//exit();
}


if(empty($terr)) {

$query8c="insert into months set  month='$month',db1='$take', week='$statusf1bengssmm11', totalattendance='$jobg',department='$department'



";

mysql_query ($query8c) or die ('could not insert:'.mysql_error());
}

?>


<?php



$aat=date('j/m/Y');
$qryujg = mysql_query("select present as total
from attendance2 where fname='$fnamey'and timein='$days7' and hall='$csvs' and week='$intos'and month='$month' and year='$year' and course='$coursecode' and db1='$take' and department='$department'  AND levels='$levels'  and time='$statusf1bengssmmx1'"); 
$row = mysql_fetch_assoc($qryujg); 

 $mxc11tr=$row['total']; 
 
if(empty($mxc11tr)){

 $statusfbio="insert into attendance2 set  fname='$fnamey',timein='$days7',timeout='$times',week='$intos',month='$month',year='$year',course='$coursecode',db1='$take',present='1',levels='$levels', department='$department',hall='$csvs',dates='$aat',time='$statusf1bengssmmx1'";}
elseif($mxc11tr>'' )
{

 $statusfbio="";
}

$query8yrt="$statusfbio";

mysql_query ($query8yrt) or die ('x= double scanning');



$query8cf="update  refrence set  matricule='$fnamey'  where roll='1'



";

mysql_query ($query8cf) or die ('could not insert:'.mysql_error());

$mxc1tt=$department;

if(empty($mxc1tt)){

 $statusfbio="";}
elseif($mxc1tt>="MARKETING" && $mxc1tt<="MARKETING"  ){
 
 $statusfbio='01'; 
}

elseif($mxc1tt>="MANAGEMENT" && $mxc1tt<="MANAGEMENT"  ){
 
 $statusfbio='02'; 
}
elseif($mxc1tt>="ACCOUNTANCY" && $mxc1tt<="ACCOUNTANCY"  ){
 
 $statusfbio='03'; 
}

elseif($mxc1tt>="INSURANCE" && $mxc1tt<="INSURANCE"  ){
 
 $statusfbio='04'; 
}
elseif($mxc1tt>="BANKING AND FINANCE" && $mxc1tt<="BANKING AND FINANCE"  ){
 
 $statusfbio='05'; 
}

$rs_duplicate = mysql_query("select count(*) as total from countat where months='$ytt' and db1='$take' and  week='$statusf1bengssmm11' and decodes='$statusfbio' and  days='$statusf1bengssmm1' and department='$department' and years='$yt' and year='$days7' and levels='$levels' ") or die(mysql_error());
list($total) = mysql_fetch_row($rs_duplicate);

if ($total > 0)
{
$err[] = "ERROR - The student already exists. Please try again with different student .";
//header("Location: finances.php?msg=$err");
//exit();
}


if(empty($err)) {

$qryujgf = mysql_query("select total as total
from countat where months='$ytt' and db1='$take' and  week='$statusf1bengssmm11' and  days='$statusf1bengssmm1' and department='$department' and years='$yt' and year='$days7' and levels='$levels'  "); 
$row = mysql_fetch_assoc($qryujgf); 

$tpsss1=$row['total']; 
$mxc111t=$tpsss1;
if(empty($mxc111t)){

 $statusfbioff="insert into countat set  months='$ytt', db1='$take', week='$statusf1bengssmm11', total='$jobg' , days='$statusf1bengssmm1',decodes='$statusfbio', department='$department',years='$yt', year='$days7', levels='$levels',course='$coursecode'";}
elseif($mxc111t>'' )
{
$statusfbioff="update countat set  total='$jobg'  where where months='$ytt' and db1='$take' and  week='$statusf1bengssmm11' and  days='$statusf1bengssmm1' and department='$department' and years='$yt' and year='$days7' and levels='$levels'";

}


$query8cys="$statusfbioff";

mysql_query ($query8cys) or die ('ERROR');
} 
?>
</div>



<div style="float:left; width:230px; height:25px; TEXT-ALIGN:RIGHT; fieldset:1px;">
EXPECTED AMOUNT :
</div>

<div style="float:left; width:270px; height:25px; TEXT-ALIGN:left; fieldset:1px;font-weight:bold; color:#ff6666;">

&nbsp;
<?php     








 
 $qry2 = mysql_query("select SUM(c145) as total from courses where  matricule='$fnamey' and levels='$levels' and db1='$take' "); 
$row = mysql_fetch_assoc($qry2); 
 $amount=$row['total']; 
?>
</div>



<div style="float:left; width:230px; height:25px; TEXT-ALIGN:RIGHT; fieldset:1px;">
AMOUNT PAID :
</div>

<div style="float:left; width:270px; height:25px; TEXT-ALIGN:left; fieldset:1px;font-weight:bold; color:#ff6666;">

&nbsp;
<?php     





 $qry2 = mysql_query("select SUM(amount_paid) as total from historic where  matricule='$fnamey' and class='$levels' and oldb='$take' "); 
$row = mysql_fetch_assoc($qry2); 
 $amount=$row['total']; 

?>
</div>


<div style="float:left; width:230px; height:25px; TEXT-ALIGN:RIGHT; fieldset:1px;font-size:17;">
Check previous Record :
</div>

<div style="float:left; width:270px; height:25px; TEXT-ALIGN:left; fieldset:1px;font-weight:bold;font-size:29px;; color:#ff6666;">

&nbsp;
<?php     

 $dates=date("j/m/Y");


$qryujg = mysql_query("select SUM(present) as total
from attendance2 where fname='$fnamey' AND levels='$levels' and dates='$dates' "); 
$row = mysql_fetch_assoc($qryujg); 
echo $jim=$row['total'];
?>
</div>



</div>
 


<?php } ?>
</body>
</html>

	</div>
	
	
	
	
	</body>
	</html>