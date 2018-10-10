<?php

include 'dbcs.php';
$ms=$_GET['roll'];
page_protect();


 $notes=$_SESSION['user_name'];




 $ip=@$_SERVER['REMOTE_ADDR'];
 
 ?><?php
 $notes=$_SESSION['user_name'];
$roll=$_GET["1"];
$query="select * from users where user_name='$notes'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>
<?php  $ids=$row['fax'];


?>
<?php } ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<html lang="en">
<head>
    <title></title>
	
    
    
    
    <script src="jquery.min.js"></script>

	
		


	</head>
	<body>
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
$query="select * from rush where roll='1'";
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

<form action="menuxs.php" method="POST">
<table border=0 align=center bgcolor="#0000FF">
<tr><td style="color:#fff;">SCAN OR ENTER BARCODE</td><td>

<input type='text' name='barcode' id='inputFieldId' autofocus="autofocus" />

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
$query="select * from timing where recid='1'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
?>

<?php   $start=$row['froms'];
 $end=$row['tos'];
?>



<?php } ?>
<?php
$roll=$_GET["2"];
$query="select * from timing where recid='2'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
?>

<?php   $start2=$row['froms'];
 $end2=$row['tos'];
?>



<?php } ?><?php
$roll=$_GET["3"];
$query="select * from timing where recid='3'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
?>

<?php   $start3=$row['froms'];
 $end3=$row['tos'];
?>



<?php } ?>
<?php
$roll=$_GET["4"];
$query="select * from timing where recid='4'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
?>

<?php   $start4=$row['froms'];
 $end4=$row['tos'];
?>



<?php } ?><?php
$roll=$_GET["5"];
$query="select * from timing where recid='5'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
?>

<?php   $start5=$row['froms'];
 $end5=$row['tos'];
?>



<?php } ?>
<?php
$roll=$_GET["5"];
$query="select * from timing where recid='6'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
?>

<?php   $start6=$row['froms'];
 $end6=$row['tos'];
?>



<?php } ?>
<?php
$roll=$_GET["5"];
$query="select * from timing where recid='7'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
?>

<?php   $start7=$row['froms'];
 $end7=$row['tos'];
?>



<?php } ?>
<?php
$roll=$_GET["5"];
$query="select * from timing where recid='8'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
?>

<?php   $start8=$row['froms'];
 $end8=$row['tos'];
?>



<?php } ?>
<?php       $mmx1=date("Hi");
if(empty($mmx1)){
$mmx1="";
}
else if( ($mmx1>="$start"   && $mmx1<="$end")){
 $statusf1bengssmmx1=$end;
$mmx1F="1";
}
else if( ($mmx1>="$start2"   && $mmx1<="$end2")){
$statusf1bengssmmx1=$end2;
$mmx1F="2";
}

else if( ($mmx1>="$start3"   && $mmx1<="$end3")){
$statusf1bengssmmx1=$end3;
$mmx1F="3";
}

else if( ($mmx1>='$start4'   && $mmx1<='$end4')){
$statusf1bengssmmx1=$end4;
$mmx1F="4";
}

else if( ($mmx1>="$start5"   && $mmx1<="$end5")){
$statusf1bengssmmx1=$end5;
$mmx1F="5";
}
 ECHO $statusf1bengssmmx1;
  ECHO $mmx1F;
?>

<?php
$txtbarcode=$_POST['barcode']; 

$query="select * from barcode where   barcode='$txtbarcode' ";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {

?>
<?php  $fname=$row['matricule']; 
 $ffy=$row['matricule'];
  $extra=$row['extra'];










 
 $qry2 = mysql_query("select levels as total  FROM  courses where matricule='$ffy' and db1='$take' "); 
$row = mysql_fetch_assoc($qry2); 
 $levels=$row['total']; 


 $qry2 = mysql_query("select departmet as total  FROM  courses where matricule='$ffy' and db1='$take' "); 
$row = mysql_fetch_assoc($qry2); 
 $department=$row['total']; 

$deptt=$department;





$mxc11fr=$extra;

if(empty($mxc11fr)){
 $statusfbiomxc11fr="";}
elseif($mxc11fr>="1" && $mxc11fr<="1" ){
  $statusfbiomxc11fr="courses";
  $statuspic="employees";
  
   $employeeh="DEPARTMENTAL INFORMATION";
   $staffname="DEPARTMENT";
   $staffmat="LEVEL";
    $staftime="DAY";
   $staftimeout="TIME IN";
    $stafcourse="COURSE TITLE";
   $x1s="";
    $stafstream="STREAM";
    $staftutor="COURSE TUTORS";
	  $staftitle="$course";
    $stafdesc="COURSE DESCRIPTION";
  
  $staflevels="$levels";
    $stafip="load_image.php";
  $messages="Warning You Have Scan In before";
  $cv="2";
  $messagesss="COUNT FAILED";

 $statusfbiofff="";

   $mbsss="courstitle where  (days>='$statusf1bengssmm1' && days<='$statusf1bengssmm1')  and levels='$levels' and  (to1>='$statusf1bengssmmx1' && to1<='$statusf1bengssmmx1') and coursecode>''";
   $mbss="courstitle where department='$deptt' and levels='$levels' and (days>='$statusf1bengssmm1' && days<='$statusf1bengssmm1') ";
  $mbs="courstitle where stream='$clasc' and (days>='$statusf1bengssmm1' && days<='$statusf1bengssmm1')  and levels='$levels' and  (to1>='$statusf1bengssmmx1' && to1<='$statusf1bengssmmx1')";
  $jkquery="select id as total
from employees where ";
  
  
  $statusfbiomxc11frr="select * from courses where   levels='$levels' and db1='$take' and";
  
}
elseif($mxc11fr>="2" && $mxc11fr<="2" ){
 $statusfbiomxc11fr="employer";
   $statuspic="emplopic";
   $staflevels="date('H:i:s')";
   $staftitle="date('H:i:s')";
   $x1s=$ffy;
   
   
   
   
   
   
   $employeeh="STAFF INFORMATION";
   $staffname="STAFF NAME";
   $staffmat="MATRICULE";
    $staftime="DAY";
   $staftimeout="TIME IN";
    $stafcourse="COURSE TITLE";
  
    $stafstream="TIME OUT";
	  $staftitle="$course";
    $stafdesc="COURSE DESCRIPTION";
  $stafmats="$ffy";
  $staflevels="$levels";
    
  $messagesss="COUNT SUCCESS";
$cv="1";
 $statusfbiofff="insert into countat set  months='$ytt',ids='$idm',id='$ids', db1='$take',tutor='$x1s', week='$statusf1bengssmm11', total='$jobg' , days='$statusf1bengssmm1',decodes='$statusfbio', department='$statusfmmx1u78',years='$yt', year='$days7', levels='$levels',ntime='now()++-',course='$coursecode'";

 $messages="You Have Sign Out";
   $mbsss="courstitle where db1='$ffy' and   (days>='$statusf1bengssmm1' &&  days<='$statusf1bengssmm1')and  (to1>='$statusf1bengssmmx1' && to1<='$statusf1bengssmmx1') and coursecode>''";
   $mbss="courstitle where  db1='$ffy' and (days>='$statusf1bengssmm1' &&  days<='$statusf1bengssmm1')";
   
  $mbs="courstitle where  (days>='$statusf1bengssmm1' &&  days<='$statusf1bengssmm1')  and  (to1>='$statusf1bengssmmx1' && to1<='$statusf1bengssmmx1') and db1='$ffy'";
   
   
  $jkquery="select id as total
from emplopic where ";
    $stafip="load_images.php";
  $statusfbiomxc11frr="select * from employer where  ";
}




?>
<?php } ?>
<?php 

$qry = mysql_query("select * FROM  $mbsss"); 
$num_rows=mysql_num_rows($qry);
 echo $x11p=$num_rows;


?>
<?php

  $query="$statusfbiomxc11frr   matricule='$ffy'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>
<div style="float:left; width:1200px; height:400px;border:3px solid #ccc; fieldset:1px;margin-left:10px;">


<div style="float:left; width:1200px; margin-top:3px;height:40px;background:#1188aa; color:#fff;">
<div style="float:left;margin-top:3px;width:1190px; text-align:center;text-transform:uppercase;">
Welcome to HIMS SCANNING in service
</div></div>
<div style="float:left; width:450px; height:200px; fieldset:1px;">


				
				
					
					<?php
 $you=$row['cm']; 
				
		 $qry = mysql_query("$jkquery  empname='$ffy'"); 
$row = mysql_fetch_assoc($qry); 
 $savep4=$row['total']; 
				 $mxx=$rec['empname'];
				 ?>
					
						<?php } ?>
					<img src="<?php echo $stafip;?>?pic_id=<?php echo $savep4;?>" width="420px" height="300px"style="border:2px solid #ccc; box-shadow:2px 2px 2px 2px #000;">
					
					
					</div>
					

 

<div style="float:left; width:450px; height:200px; fieldset:1px;">
		
					<?php
$query="$statusfbiomxc11frr  matricule='$ffy'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
?><table cellspacing="0" cellpadding="3" width="600px">
<tr>
<td><?php echo $employeeh;?></td><td></td></tr>







<tr>

<td style="color:#ccc;"> <?php echo $staffname;?></td>
<td>:<?php echo $fname=$row['fname'];$department=$row['departmet'];

$clasc=$row['c111'];
$ffy=$row['matricule'];?></td></tr>




<tr>

<td style="color:#ccc;"> <?php echo $staffmat;?></td>
<td>:<?php echo $ffy;?></td></tr>












<tr>

<td style="color:#ccc;"> <?php echo $staftime;?></td>
<td>
:<?php   $dayss=date('D');?>
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
echo  $statusf1bengssmm1;
?>
</td></tr>




<tr>

<td style="color:#ccc;"> <?php echo  $staftimeout;?></td>
<td>:
&nbsp;<?php $date=date('y/m/j');$month=date('m');$year=date('Y');echo $times=date('h:i');
$time=date('hi');

?></td></tr>







<tr>

<td style="color:#ccc;"> <?php echo $stafcourse;?></td>
<td>:
<?php 


$mmf=$department;
if(empty($mmf)){
$mmf="";
}
else if( ($mmf>="ACCOUNTANCY"  && $mmf<="ACCOUNTANCY")){
$mmf="1";
}
else if( ($mmf>="BANKING AND FINANCE"  && $mmf<="BANKING AND FINANCE" )){
$mmf="2";
}else if( ($mmf>="INSURANCE" && $mmf<="INSURANCE")){
$mmf="1";
}else if( ($mmf>="MANAGEMENT" && $mmf<="MANAGEMENT" )){
$mmf="4";
}else if( ($mmf>="MARKETING"  && $mmf<="MARKETING")){
$mmf="5";
}


 $qry2 = mysql_query("select coursecode as total  FROM  courstitle where department>='$mmf'  and department<='$mmf' and 
 ass='$mmx1F' and days>='$statusf1bengssmm1' and  days<='$statusf1bengssmm1'
 
 
 
 
 "); 
$row = mysql_fetch_assoc($qry2); 
echo $coursecode=$row['total']; 



$qry = mysql_query("select department as total from $mbsss"); 
$row = mysql_fetch_assoc($qry); 
$baby=$row['total']; 


$qry = mysql_query("select levels as total from $mbsss"); 
$row = mysql_fetch_assoc($qry); 
$levy=$row['total']; 
?></td></tr>





<tr>

<td style="color:#ccc;"><?PHP ECHO $stafstream;?></td>
<td>:</td></tr>


<td style="color:#000;font-weight:bold;">STATUS :</td>
<td STYLE="color:red;">:
<?php     

$qry = mysql_query("select db1 as total from $mbs"); 
$row = mysql_fetch_assoc($qry); 
$row['total']; 

?>
<?php     
$qry = mysql_query("select db1 as total from subject where subject='$coursecode' and year1='$levels'"); 
$row = mysql_fetch_assoc($qry); 
 $coursetitle=$row['total']; 


 
 $qry2 = mysql_query("select SUM(balance) as total from historic where  matricule='$ffy'   "); 
$row = mysql_fetch_assoc($qry2); 
  $amounts=$row['total']; 




 
 $qry2 = mysql_query("select SUM(amount_paid) as total from historic where  matricule='$ffy'   "); 
$row = mysql_fetch_assoc($qry2); 
 $amount=$row['total']; 

 $qry = mysql_query("select firstin as total from control where department='$department'  and db1='200'"); 
$row = mysql_fetch_assoc($qry); 
  $money=$row['total']; 
 
  $mmx1u=$money;
if(empty($mmx1u)){
$mmx1u="";
$statusfbiok="";
$standy2="";
$stand2="";
}
else if( ($mmx1u>$amount )){
 $statusfbiok="insert into debt set  matricule='$fnamey',timein='$days7',db1='$take',amount='$amount',fname='$fname' ,department='$department'";


echo $standy2="<div style='float:left; width:450px; height:250px;color:red;font-size:28px;'><script style='width:400px;color:red;height:400px;background:#ccc;'>alert('DEBTOR! Bal: $amounts'); window.location.href('students.php');</script></div>";

}
else if( ($mmx1u<=$amount )){
$stand2="";

 $standy2="attendance";
}

else if( ($mmx1u=$amount )){
$stand2="";

 $standy2="attendance";
}
$mmx109=$statusfbiok;
if(empty($mmx109)){
$mmx109="";
$statusfbioks="";

}

else if( ($mmx109>'' )){

$statusfbioks=mysql_query ($statusfbiok);
}







  $standy2="attendance";


echo $statusfbioks;
?>



<?php



$mmx1u78=$deptt;

if(empty($mmx1u78)){
$mmx1u78="";
$statusfmmx1u78=$baby;
$idm='2';
}
else if( ($mmx1u78>'' )){
$statusfmmx1u78=$deptt;
$idm='1';
}
$mmx1u785=$levels;

if(empty($mmx1u785)){
$mmx1u785="";
$statusfmmx1u785=$levy;

}
else if( ($mmx1u785>'' )){
$statusfmmx1u785=$levels;

}




 $statusfmmx1u78;





$qrykjf= mysql_query("select * FROM  courstitle where (days>='$statusf1bengssmm1' && days<='$statusf1bengssmm1')  and department='$statusfmmx1u78' and  levels='$statusfmmx1u785'  and cm='$ids'  "); 
$num_rowspo=mysql_num_rows($qrykjf);
  echo $jobg=$num_rowspo;

  
  
  
  
$qryg = mysql_query("select db1 as total from countat where 
 months='$ytt' and 
 ids='$idm' and 
 db1='$take' and 
 tutor='$x1s' and 
 department='$statusfmmx1u78' and 
 years='$yt' and 
 year='$days7' and 
 levels='$levels'  "); 
$row = mysql_fetch_assoc($qryg); 
 $mxc11tr67=$row['total']; 


 
if(empty($mxc11tr67)){





 $statusfbioff="insert into countat set  months='$ytt',ids='$idm', db1='$take',tutor='$x1s',id='$ids', week='$statusf1bengssmm11', total='$jobg' , days='$statusf1bengssmm1',decodes='$statusfbio', department='$statusfmmx1u78',years='$yt', year='$days7', levels='$levels',course='$coursecode'";

mysql_query ($statusfbioff) or die ('');

}
elseif($mxc11tr67>'' ){

}

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

mysql_query ($query8c) or die ('could not updated:'.mysql_error());
}







?>


<?php



$spec=date("Hi");

$qryujgt = mysql_query("select specificity as total
from attendance where fname='$ffy'and timein='$days7' and ids='2' and week='$intos'and month='$month' and cm='$ids' and year='$year' and course='$coursecode'  "); 
$row = mysql_fetch_assoc($qryujgt); 

 $autospec=$row['total']; 
$t12=$autospec;

$qryujg = mysql_query("select timeoff as total
from attendance where fname='$ffy'and timein='$days7' and ids='2'  and cm='$ids' and week='$intos'and month='$month' and year='$year' and course='$coursecode'  "); 
$row = mysql_fetch_assoc($qryujg); 

 $outspec=$row['total']; 
 $t13=$outspec;
 
$qryujg = mysql_query("select present as total
from attendance where fname='$ffy'and timein='$days7' and week='$intos'and month='$month' and year='$year' and cm='$ids' and course='$coursecode' and db1='$take' and department='$statusfmmx1u78'  AND levels='$levels' "); 
$row = mysql_fetch_assoc($qryujg); 

 $mxc11tr=$row['total']; 
  $time=time();
$qryujg = mysql_query("select ntime as total
from attendance where fname='$ffy'and timein='$days7' and week='$intos'and month='$month' and year='$year' and cm='$ids' and course='$coursecode' and db1='$take' and department='$statusfmmx1u78'  AND levels='$levels' "); 
$row = mysql_fetch_assoc($qryujg); 

 $ntime=$row['total']; 
 $tmz=($time-$ntime);
 $thours=($tmz/3600);

if(empty($mxc11tr)){
  $statusfbios="";
 $statusfbio="insert into attendance set  fname='$ffy',timein='$days7',timeout='$times',week='$intos',cm='$ids',month='$month',year='$year',course='$coursecode',db1='$take',present='1',levels='$levels',ids='$extra',specificity='$spec',timeoff='$timecal', ntime='$time',department='$statusfmmx1u78'";
 
 
 }
elseif(($mxc11tr>""   &&     $autospec>"" && $outspec<=""  ))
{
 
 
 $statusfbio=""; 
 $statusfbios="update attendance set  timeoff='$spec',hours='$thours' where fname='$ffy' and cm='$ids' and timein='$days7'  and week='$intos' and month='$month' and year='$year' and course='$coursecode'";

$statusfbiokss=mysql_query ($statusfbios);
}

elseif(($mxc11tr>""  &&  $autospec<="" && $outspec>=""))
{
 $statusfbios="";

}




 $query8yrt="$statusfbio";

 $query8yrtr="$statusfbios";

 $statusfbiokss;
mysql_query ($query8yrt) or die ("$messages");

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




?>
</td></tr>



</table>

  






<?php } 








?>
</body>
</html>

	</div>
	
	
	
	
	</body>
	</html>