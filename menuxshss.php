<?php include 'dbc.php';
$css=$_POST['css'];

?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<html lang="en">
<head>
<title><?php echo $school;?></title>
        <link rel="shortcut icon" href="pef.png"> 
		<style>
	body{background:blue;color:#fff;}
		
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

		document.getElementById('countdown').innerHTML; window.location.href='book.php';

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

<hr />
<?php
$roll=$_GET["1"];
$query="select * from timing where recid='1'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
?>

<?php  $start=$row[3];
 $end=$row[4];
?>



<?php } ?>
<?php
$roll=$_GET["2"];
$query="select * from timing where recid='2'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
?>

<?php  $start2=$row[3];
 $end2=$row[4];
?>



<?php } ?><?php
$roll=$_GET["3"];
$query="select * from timing where recid='3'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
?>

<?php  $start3=$row[3];
 $end3=$row[4];
?>



<?php } ?>
<?php
$roll=$_GET["4"];
$query="select * from timing where recid='4'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
?>

<?php  $start4=$row[3];
 $end4=$row[4];
?>



<?php } ?><?php
$roll=$_GET["5"];
$query="select * from timing where recid='5'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
?>

<?php  $start5=$row[3];
 $end5=$row[4];
?>



<?php } ?>

<?php
$txtbarcode=$_POST['barcode']; 

$query="select * from courses where   barcode='$txtbarcode' and db1='$take' ";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {

?>
<?php $fname=$row['matricule'];
$xxc=$row['matricule'];
$deptt=$row['departmet'];
$department=$row['departmet'];
$levels=$row['levels'];
?>
<?php } ?>

<?php
$query="select * from  courses where   barcode='$txtbarcode' and db1='$take'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>
<div style="float:left; width:1200px; height:400px; fieldset:1px;margin-left:30px;">


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
					<img src="load_image.php?pic_id=<?php echo $savep4;?>" width="420px" height="350px"style="border:2px solid #ccc; box-shadow:2px 2px 2px 2px #000;">
					
					
					
					
					
					<?php
$query="select * from courses where   barcode='$txtbarcode' and db1='$take'";
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
$can=$row['position'];
$deptt=$row['department'];$code=$row['codes'];
$pos=$row['position'];$mat=$row['matricule'];
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
&nbsp;<?php  


$ff=date('j-m-Y'); $dayss=date('D');?>
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
echo  $statusf1bengssmm1;
?>
</div>


<div style="float:left; width:230px; height:25px; TEXT-ALIGN:RIGHT; fieldset:1px;">
TIME IN:
</div>

<div style="float:left; width:270px; height:25px; TEXT-ALIGN:left; fieldset:1px;font-weight:bold; color:#ff6666;">
&nbsp;<?php $date=date('y/m/j');$month=date('M');$year=date('Y');echo $times=date('h:i');
$time=date('hi');

?><?php    


 $valuessf='intenship handbook';
$qry = mysql_query("select position as total
from election where codes='$css'  "); 
$row = mysql_fetch_assoc($qry); 
 echo $values=$row['total'];
?>
</div>





<div style="float:left; width:270px; height:25px; TEXT-ALIGN:left; fieldset:1px;font-weight:bold; color:#ff6666;">

&nbsp;
<?php     


?>

<?Php


$qry = mysql_query("select candidate as total
from intenship where candidate='$txtbarcode' and extra='$take'  and cname='$xxc' and valid='$valuessf' "); 
$row = mysql_fetch_assoc($qry); 
 $valuess=$row['total'];
$mxc111yts=$valuess; 
  
  $mxc111ytss=$valuess; 
  
  if(empty($mxc111ytss)){
 $statusfbiooputss="";
  }
  elseif($mxc111ytss>'' ){
   $statusfbiooputss="YOU HAVE ALREADY COLLECT THIS BOOK!";
  }

  
  
  
  
  
$qry = mysql_query("select codes as total
from countelec where candidate='$txtbarcode' and extra='$take'  and cname='$xxc' and valid='$valuessf' "); 
$row = mysql_fetch_assoc($qry); 
 $valux=$row['total'];
  
$qry = mysql_query("select colors as total
from election where codes='$valux'  "); 
$row = mysql_fetch_assoc($qry); 
 $mxccss=$row['total'];
  
  
  
  
  ?>
  
<div style="float:left; width:600px;font-size:29px;text-decoration:blink; text-transform:uppercase;height:25px; TEXT-ALIGN:left; fieldset:1px;font-weight:bold;color:#fff;font-family:rockwell;">
<?PHP echo $statusfbiooputss;?> <?PHP echo $mxccss;?> 
</DIV>
  
  
  
  
  </DIV>
  
  
  
  
  
  
  
  <?php
  
  
  

$qry = mysql_query("select candidate as total
from intenship where candidate='$txtbarcode' and extra='$take'  and cname='$xxc' and valid='$valuessf' "); 
$row = mysql_fetch_assoc($qry); 
 $valuess=$row['total'];
$mxc111yts=$valuess; 
  
if(empty($mxc111yts)){
 $statusfbiooputs="insert into intenship set  codes='intenship books',extra='$take',counts='1', date='$ff', time='$times', cname='$xxc' , department='$department', valid='$valuessf', candidate='$txtbarcode'";
  }
  elseif($mxc111yts>'' ){
   $statusfbiooputs="";
   $statusfbiooputsx="YOU HAVE COLLECTED A BOOK BEFOR!";
  }



$query8c="$statusfbiooputs 




";

mysql_query ($query8c) or die ("");
}
echo $mji;
?><div>

<div style="float:left; width:400px;">
<div style="float:left; width:230px; height:25px; TEXT-ALIGN:RIGHT; fieldset:1px;color:#fff;">
MOTIVE OF SCANNING:
</div>

<div style="float:left; width:150px; height:25px; TEXT-ALIGN:left; fieldset:1px;font-weight:bold;">
INTENSHIP REPORT BOOKS
</DIV></div>
<div style="float:left; width:400px;">
<div style="float:left; width:270px; height:25px; TEXT-ALIGN:left;margin-left:450px;margin-top:-130px;">

</div>	

<div style="float:left; width:100px; height:40px; TEXT-ALIGN:left;color:#fff;font-size:39px;">


</div>	



</div>	






	</div>

	
	
	
	
	</body>
	</html>