<html>
<head>

  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="font-awesome/css/font-awesome.css" type="text/css" media="screen">
    
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script type="text/javascript" src="jquery-1.8.0.min.js"></script>
<script type="text/javascript">
$(function(){
$(".search").keyup(function() 
{ 
var myInput = $(this).val();
var dataString = 'search='+ myInput;
if(myInput!='')
{
	$.ajax({
	type: "POST",
	url: "searchstwwss.php",
	data: dataString,
	cache: true,
	success: function(html)
	{
	$("#result").html(html).show();
	}
	});
}return true;    
});

jQuery("#result").live("",function(e){ 
	var $clicked = $(e.target);
	var $name = $clicked.find('.name').html();
	var decoded = $("<div/>").html($name).text();
	$('#myInput').val(decoded);
});
jQuery(document).live("click", function(e) { 
	var $clicked = $(e.target);
	if (! $clicked.hasClass("search")){
	jQuery("#result").fadeOut(); 
	}
});
$('#myInput').click(function(){
	jQuery("#result").fadeIn();
});
});
</script>
<style>
.inputsl{
	padding:9px;
	border:solid 1px #173955;
	outline:0;
	background:-webkit-gradient(linear,left top,left 25,from(#ffffff),color-stop(4%,#AAcce8),to(#ffffff));
	background:-mox-liner-gradient(top,#ffffff,#AACCE8 1px,#ffffff 25px);
	box-shadow:rgba(0,0,0,0.1) 0px 0px 8px;	
		-moz-box-shadow:rgba(0,0,0,0.1) 0px 0px 8px;	
		-webkit-box-shadow:rgba(0,0,0,0.1) 0px 0px 8px;	
	
	
}

label.btn span {
  font-size: 1.5em ;
}

label input[type="radio"] ~ i.fa.fa-circle-o{
    color: #c8c8c8;    display: inline;
}
label input[type="radio"] ~ i.fa.fa-dot-circle-o{
    display: none;
}
label input[type="radio"]:checked ~ i.fa.fa-circle-o{
    display: none;
}
label input[type="radio"]:checked ~ i.fa.fa-dot-circle-o{
    color: #7AA3CC;    display: inline;
}
label:hover input[type="radio"] ~ i.fa {
color: #7AA3CC;
}

label input[type="checkbox"] ~ i.fa.fa-square-o{
    color: #c8c8c8;    display: inline;
}
label input[type="checkbox"] ~ i.fa.fa-check-square-o{
    display: none;
}
label input[type="checkbox"]:checked ~ i.fa.fa-square-o{
    display: none;
}
label input[type="checkbox"]:checked ~ i.fa.fa-check-square-o{
    color: #7AA3CC;    display: inline;
}
label:hover input[type="checkbox"] ~ i.fa {
color: #7AA3CC;
}

div[data-toggle="buttons"] label.active{
    color: #7AA3CC;
}

div[data-toggle="buttons"] label {
display: inline-block;
padding: 6px 12px;
margin-bottom: 0;
font-size: 14px;
font-weight: normal;
line-height: 2em;
text-align: left;
white-space: nowrap;
vertical-align: top;
cursor: pointer;
background-color: none;
border: 0px solid 
#c8c8c8;
border-radius: 3px;
color: #c8c8c8;
-webkit-user-select: none;
-moz-user-select: none;
-ms-user-select: none;
-o-user-select: none;
user-select: none;
}

div[data-toggle="buttons"] label:hover {
color: #7AA3CC;
}

div[data-toggle="buttons"] label:active, div[data-toggle="buttons"] label.active {
-webkit-box-shadow: none;
box-shadow: none;
}



</style>
</head>
<body>  
<?php
include 'dbcs.php';
$y=date("y");
$m=date("m");
 $m0=date("j");
 $m1=$m0;
if(empty($m1)){
 $statusfbio="x1";}
elseif($m1>="01" && $m1<="01"){
 
 $statusfbio="a$y$m1" ;
}elseif($m1>="02" && $m1<="02"){
 
 $statusfbio="b$y$m1" ;
}
elseif($m1>="03" && $m1<="03"){
 
 $statusfbio="c$y$m1" ;
}

elseif($m1>="04" && $m1<="04"){
 
 $statusfbio="d$y$m1" ;
}
elseif($m1>="05" && $m1<="05"){
 
 $statusfbio="e$y$m1" ;
}
elseif($m1>="06" && $m1<="06"){
 
 $statusfbio="f$y$m1" ;
}



elseif($m1>="07" && $m1<="07"){
 
 $statusfbio="g$y$m1" ;
}

elseif($m1>="08" && $m1<="08"){
 
 $statusfbio="h$y$m1" ;
}
elseif($m1>="09" && $m1<="09"){
 
 $statusfbio="i$y$m1" ;
}
elseif($m1>="10" && $m1<="10"){
 
 $statusfbio="10j$y$m1" ;
}
elseif($m1>="11" && $m1<="11"){
 
 $statusfbio="11k$y$m1" ;
}
elseif($m1>="12" && $m1<="12"){
 
 $statusfbio="12l$y$m1" ;
}
elseif($m1>="13" && $m1<="13"){
 
 $statusfbio="13m$y$m1" ;
}
elseif($m1>="14" && $m1<="14"){
 
 $statusfbio="14n$y$m1" ;
}
elseif($m1>="15" && $m1<="15"){
 
 $statusfbio="15o$y$m1" ;
}

















elseif($m1>="16" && $m1<="16"){
 
 $statusfbio="16p$y$m1" ;
}
elseif($m1>="17" && $m1<="17"){
 
 $statusfbio="17q$y$m1" ;
}
elseif($m1>="18" && $m1<="18"){
 
 $statusfbio="18r$y$m1" ;
}
elseif($m1>="19" && $m1<="19"){
 
 $statusfbio="19r$y$m1" ;
}
elseif($m1>="20" && $m1<="20"){
 
 $statusfbio="20s$y$m1" ;
}










elseif($m1>="21" && $m1<="21"){
 
 $statusfbio="t$y$m1" ;
}
elseif($m1>="22" && $m1<="22"){
 
 $statusfbio="u$y$m1" ;
}
elseif($m1>="23" && $m1<="23"){
 
 $statusfbio="v$y$m1" ;
}
elseif($m1>="24" && $m1<="24"){
 
 $statusfbio="w$y$m1" ;
}
elseif($m1>="25" && $m1<="25"){
 
 $statusfbio="x$y$m1" ;
}



elseif($m1>="26" && $m1<="26"){
 
 $statusfbio="z$y$m1" ;
}
elseif($m1>="27" && $m1<="27"){
 
 $statusfbio="a$y$m1" ;
}
elseif($m1>="28" && $m1<="28"){
 
 $statusfbio="b$y$m1" ;
}
elseif($m1>="29" && $m1<="29"){
 
 $statusfbio="c$y$m1" ;
}
elseif($m1>="30" && $m1<="30"){
 
 $statusfbio="c$y$m1" ;
}
elseif($m1>="31" && $m1<="31"){
 
 $statusfbio="d$y$m1" ;
}




$qry = mssql_query("select CAST(extra2  as text) as total
from [cg2015].[dbo].[rushss] where roll='1' "); 
$row = mssql_fetch_assoc($qry); 
  $e2=$row['total']; 
$qry = mssql_query("select CAST(data  as text) as total
from [cg2015].[dbo].[rushss] where roll='1' "); 
$row = mssql_fetch_assoc($qry); 
 $mkh=$row['total']; 
$qry = mssql_query("select CAST(year  as text) as total
from [cg2015].[dbo].[rushss] where roll='1' "); 
$row = mssql_fetch_assoc($qry); 
 $year=$row['total']; 


$qry = mssql_query("select CAST(extra  as text) as total
from [cg2015].[dbo].[rushss] where roll='1' "); 
$row = mssql_fetch_assoc($qry); 
 $mmyy=$row['total']; 
 $m5=date("m");
  $my=date("Y");
$m5i=date("y");

if(empty($m5)){
 $statusfbios="x1";
 }
elseif($m5>="08" && $m5<="08"  && $my>$mmyy ){
$m5i=$m5i;
  $statusfbios=$mmyy+1;
  $mos=$mmyy+2;
    $moss=$mmyy+1;
	 $mss=$mos;
 $mnss="$moss/$mos";
 
 
$query3s3="update [cg2015].[dbo].[rushss] set  year='$mnss',extra='$statusfbios',extra2='$mos'
 where roll='1'";



mssql_query ($query3s3) or die ('could not updated:'.mssql_error());



 
$query3s3s="update [cg2015].[dbo].[rushs] set  year='$mnss',extra='$statusfbios',extra2='$mos'
 where roll='1'";



mssql_query ($query3s3s) or die ('could not updated:'.mssql_error());




 
$query3s3ss="update [cg2015].[dbo].[rush] set  year='$mnss',extra='$statusfbios',extra2='$mos'
 where roll='1'";



mssql_query ($query3s3ss) or die ('could not updated:'.mssql_error());
 }
 
 
 elseif($m5>="08" && $m5<="08"  && $my>=$mmyy  && $my<=$mmyy ){
$m5i=$mkh;
  $statusfbios=$mmyy;
 $mss=$e2;
 $mnss=$year;
 }
 
  elseif($m5>"08"   && $my>=$mmyy  && $my<=$mmyy ){
$m5i=$mkh;
  $statusfbios=$mmyy;
  $mss=$e2;
 $mnss=$year;
 }
 
  elseif($m5<"08"   && $my>$mmyy   ){
$m5i=$mkh;
  $statusfbios=$mmyy;
  $mss=$e2;
 $mnss=$year;
 }


elseif($m5>"08"  && $my>$mmyy ){
$m5i=$m5i;
  $statusfbios=$mmyy+1;
  $mos=$mmyy+2;
    $moss=$mmyy+1;
	 $mss=$mos;
 $mnss="$moss/$mos";
 
 
$query3s3="update [cg2015].[dbo].[rushss] set  year='$mnss',extra='$statusfbios',extra2='$mos'
 where roll='1'";



mssql_query ($query3s3) or die ('could not updated:'.mssql_error());



 
$query3s3s="update [cg2015].[dbo].[rushs] set  year='$mnss',extra='$statusfbios',extra2='$mos'
 where roll='1'";



mssql_query ($query3s3s) or die ('could not updated:'.mssql_error());




 
$query3s3ss="update [cg2015].[dbo].[rush] set  year='$mnss',extra='$statusfbios',extra2='$mos'
 where roll='1'";



mssql_query ($query3s3ss) or die ('could not updated:'.mssql_error());
 }









?>
  <div class="col-md-3" style='width:100%;height:450px;margin-top:15px;'>	
			  
           
  <div class="col-md-3" style='float:left;width:500;height:450px;margin-left:-15px;'> 
       
<a href="#" class="btn btn-default btn-lg btn-block">Today ID: <?php echo $statusfbio;?> Total:<?php 

$qry = mssql_query("select SUM(CAST(folk  as float)) as total
from [cg2015].[dbo].[balancesheet] where ids='$statusfbio' "); 
$row = mssql_fetch_assoc($qry); 
 echo $msy=number_format($row['total']); 

?> </a>
<?php
$fname=$_POST["fname"];
$address=$_POST["address"];
$contact=$_POST["address"];
$mid=$_POST["mid"];

$faculty=$_POST["faculty"];
$tdateofbirth=$_POST["tdateofbirth"];
$department=$_POST["department"];
$receiptn=$_POST['receiptn'];$receiptng=$_POST['contact'];
$levels=$_POST["levels"];
$sex=$_POST["sex"];

$applicationform=$_POST["applicationform"];
$time=date('H:i:s');
$dates=date('dmY');$m=date('m');$d=date('d');$y=date('y');
$paid=$_POST["paid"];

 $qry = mssql_query("select CAST(dep as float) 	 as total,CAST(form as float) 	 as form,CAST(sunion as float) 	 as sunion,CAST(deptf as float) 	 as facultyid,CAST(ids as float) 	 as deptids
,CAST(fees as float) 	 as fees,CAST(area as float) 	 as admissionfees,CAST(code as text) 	 as deptid
from [cg2015].[dbo].[classes] where classs='$department'  "); 
$row = mssql_fetch_assoc($qry); 
  $applicationfeei=$row['total'];
$fees=$row['fees'];
$amount2=$row['form'];
$sunion2=$row['sunion'];
$facultyid=$row['facultyid'];
$deptid=$row['deptid'];$deptids=$row['deptids'];
$admissionfees=$row['admissionfees'];

$candd=  substr("$year",2,2);
 $qry = mssql_query("select CAST(matt as float) 	 as fcodes
from [cg2015].[dbo].[classes] where classs='$department'   "); 
$row = mssql_fetch_assoc($qry); 
  $fcodes=$row['fcodes'];
if(empty($fcodes)){
	$m="1";
}elseif($fcodes>''){
	$m=$fcodes+1;
}
if(empty($m)){
	
	
}elseif($m>="0"  && $m<="9"){
	$xc="000$m";
}
	elseif($m>="10"  && $m<="99"){
	$xc="00$m";
}	elseif($m>="100"  && $m<="999"){
	$xc="0$m";
}elseif($m>="1000"  && $m<="9999"){
	$xc="$m";
}
elseif($m>="10000" ){
	$xc="$m";
}


 $qry = mssql_query("select count(*) 	 as fc
from [cg2015].[dbo].[balancesheet] where fname='$mat'   "); 
$row = mssql_fetch_assoc($qry); 
  $fc=$row['fc'];






 $qry = mssql_query("select CAST(code as text) 	 as fcode
from [cg2015].[dbo].[faculty] where facultyid='$faculty'  "); 
$row = mssql_fetch_assoc($qry); 
  $fcode=$row['fcode'];
$mat="$fcode$candd$deptid$xc";
if(empty($paid)){
	
	
}elseif($paid<$applicationfeei){
	$cash='';
	$bim=$paid-$amount2;
	if(empty($bim)){
		$form=$amount2;
		$used=$bim;
	}elseif($bim<'0'){
		$form='';
		$used=$paid;
	}
	elseif($bim>'0'){
		$form=$amount2;
		$used=$bim;
	}
	
	
		$bims=$used-$sunion2;
	if(empty($bims)){
		$sunion=$sunion2;
		$usedS=$bims;
	}elseif($bims<'0'){
		$form='';
		$usedS=$used;
	}
	elseif($bims>'0'){
		$sunion=$sunion2;
		$usedS=$bims;
	}
	
	$applicationfee='';
	
	
	$tmk=$usedS;
	
	
	
	
	
	
	
	
}

elseif($paid>="$applicationfeei"  &&  $paid<="$applicationfeei"){
	$applicationfee=$applicationfeei;
$form='';
$sunion='';


	$tmk='';
}










elseif($paid>$applicationfeei){
	$cash=$paid-$applicationfeei;

	
	
	
	
	
	
	
	
	
	$bim=$paid-$amount2;
	if(empty($bim)){
		$form=$amount2;
		$used=$bim;
	}elseif($bim<'0'){
		$form='';
		$used=$paid;
	}
	elseif($bim>'0'){
		$form=$amount2;
		$used=$bim;
	}
	
	
		$bims=$used-$sunion2;
	if(empty($bims)){
		$sunion=$sunion2;
		$useds=$bims;
	}elseif($bims<'0'){
		
		$sunion='';
		$useds=$useds;
	}
	elseif($bims>'0'){
		$sunion=$sunion2;
		$useds=$bims;
	}
	
		$bimss=$useds-$applicationfeei;
	if(empty($bimss)){
		$applicationfee=$applicationfeei;
		$usedx=$bimss;
	}elseif($bimss<'0'){
		$$applicationfee='';
		$usedx=$useds;
	}
	elseif($bimss>'0'){
		$applicationfee=$applicationfeei;
		$usedx=$bimss;
	}

	$tmk=$usedx;
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
}

$balance=($fees-$paid);

if(empty($fname)){
	
}elseif($fname>''){
	$barcode="$candd$deptids$facultyid$deptid$xc";
	
$query="insert into [cg2015].[dbo].[balancesheet] 
(name,fname,amount,amount2,sunion,date,month,day,year,db1,status,idcardno,scholarship,cash,tmk,ids,folk,deptf,schoolid,cc,time,expected_amount,balance,receiptno)
values
('$fname','$mat','$applicationfee','$form','$sunion','$dates','$m','$d','$y','$year','admisionfee','$admissionfee','','$cash','$tmk','$mid','$paid','$deptids','$facultyid','$fc','$time','$fees','$balance','$receiptn')

";


$querys="insert into [cg2015].[dbo].[historic] 
(matricule,student_name,classs,expected_amount,amount_paid,balance,dates,month,year,oldb,amountpaid,xxx,levels,ids,id,deptf)
values
('$mat','$fname','$department','$fees','$paid','$balance','$dates','$m','$y','$year','$paid','$d','$levels','','$deptids','$facultyid')

";

$queryss="insert into [cg2015].[dbo].[courses] 
(matricule,fname,departmet,c111,c110,levels,sex,cxx2,db1,c101,c102,barcode)
values
('$mat','$fname','$department','$facultyid','$deptids','$levels','$sex','$tdateofbirth','$year','$mmyy','$e2','$barcode')

";

$queryss0="insert into [cg2015].[dbo].[admission] 
(matricule,fname,contact1,idcard,extra,barcode,sex,department)
values
('$mat','$fname','$address','$receiptng','$year','$barcode','$sex','$department')

";

$queryss1="insert into [cg2015].[dbo].[barcode] 
(matricule,barcode,department)
values
('$mat','$barcode','$department')";

$queryssx="update [cg2015].[dbo].[classes] 
set matt='$m' where classs='$department' and ids='$deptids' and deptf='$facultyid'
";





mssql_query($querys);

mssql_query($queryss);
mssql_query($queryssx);

mssql_query($queryss1);
mssql_query($query);

mssql_query($queryss0);
	  



echo "<script>alert('Student Record Created!'); </script>";

 echo "<meta http-equiv='refresh' content='0; url=receipt.php?mat=$mat&date=$dates&afolk=$paid&deptf=$department&db1=$year&fname=$fname'>";
	
	
}
?>
 
  <form method='POST' action='#'>
  		<div style='float:left;  height:450px;margin-top:15px;height:25px;'>				
<div  class='form-group'  >
<label for="name1" class="col-sm-3 control-label" style='width:170px;text-align:right;margin-top:8px;'>Student Name:</label>
				
<div  class='col-sm-6'>
					
					<input type='text'name='fname' class="form-control inputsl" id="name1"
					placehokder="email" style='width:280px;'>
					
					<input type='hidden'name='mid' class="form-control inputsl" id="name1"
value='<?php echo $statusfbio;?>'					placehokder="email" style='width:280px;'>
					</div>
					</div></div>
 
 
 		<div style='float:left;  height:450px;margin-top:15px;height:25px;'>				
<div  class='form-group'  >
<label for="name1" class="col-sm-3 control-label" style='width:170px;text-align:right;margin-top:8px;'>Student Contact:</label>
				
<div  class='col-sm-6'>
					
					<input type='text'name='address' class="form-control inputsl" id="name1"
					placehokder="email" style='width:280px;'>
					</div>
					</div></div>
 
 
 
 
 
 
 
 
 		<div style='float:left;  height:450px;margin-top:15px;height:25px;'>				
<div  class='form-group'  >
<label for="dateofbirth" class="col-sm-3 control-label" style='width:170px;text-align:right;margin-top:8px;'>Date Of Birth:</label>
				
<div  class='col-sm-6'>
					
					<input type='text'name='tdateofbirth' class="form-control inputsl" id="name1"
					placeholder="d/m/Y" style='width:280px;'>
					</div>
					</div></div>
 
 
 
 
 
 
 
 
 
 
 		<div style='float:left;  height:450px;margin-top:15px;height:25px;'>				
<div  class='form-group'  >
<label for="name1" class="col-sm-3 control-label" style='width:170px;text-align:right;margin-top:8px;'>Idcard No:
<input type='hidden'name='receiptn' class="form-control inputsl" id="name1"
					value='<?php
					
					

 $qry = mssql_query("select count(*)	 as fcodes
from [cg2015].[dbo].[balancesheet]  "); 
$row = mssql_fetch_assoc($qry); 
 echo $fcodes=$row['fcodes'];
					
					?>'placeholder="email" style='width:200px;'>
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					</label>
				
<div  class='col-sm-6'>
					
					<input type='text'name='contact' class="form-control inputsl" id="name1"
					placehokder="email" style='width:200px;'>
					
	
					
						
					</div>
					</div></div>
 
 
 
 		<div style='float:left;  height:450px;margin-top:15px;height:25px;'>				
<div  class='form-group'  >
<label for="name1" class="col-sm-3 control-label" style='width:170px;text-align:right;margin-top:8px;'>Faculty of Interest:</label>

<div  class='col-sm-6'>
					 <select class="form-control inputsl"name='faculty' id="select"   style='width:280px;'>
         <?php
 $query="select facultyid as ids,CAST(facultydesc as text) as school from [cg2015].[dbo].[faculty]";
$result=mssql_query($query);
		 while ($row = mssql_fetch_array($result)) {
?> <option value='<?php echo $row["ids"];?>'><?php echo $row["school"];?></option>

		 <?php } ?>
		 </select>
					</div>
					</div></div>
 
 
 
 
 
 
 		<div style='float:left;  height:450px;margin-top:15px;height:25px;'>				
<div  class='form-group'  >
<label for="name1" class="col-sm-3 control-label" style='width:170px;text-align:right;margin-top:8px;'>Department:</label>

<div  class='col-sm-6'>
					 <select class="form-control inputsl"name='department' id="select"   style='width:280px;'>
 
         <?php
 $query="select CAST(classs as text) as school,CAST(ids as text) as ids from [cg2015].[dbo].[classes]";
$result=mssql_query($query);
		 while ($row = mssql_fetch_array($result)) {
?> <option value='<?php echo $row["school"];?>'><?php echo $row["school"];?>

 <b style='font-weight:normal;color:#ccc;'> (<?php $nm= $row["ids"];





	  
$qry = mssql_query("SELECT CAST(facultydesc as text) as totals
from [cg2015].[dbo].[faculty] where facultyid='$nm' "); 
$row = mssql_fetch_assoc($qry); 

 echo $idss=$row['totals'];

?> )</b>


</option>

		 <?php } ?>
        </select>
		 </select>
					</div>
					</div></div>
 
					
					
					
					
			
 
 
 
 
 		<div style='float:left;  height:450px;margin-top:15px;height:25px;'>				
<div  class='form-group'  >
<label for="name1" class="col-sm-3 control-label" style='width:170px;text-align:right;margin-top:8px;'>Level:</label>

<div  class='col-sm-6'>
					 <select class="form-control inputsl"name='levels' id="select"   style='width:150px;'>
 <?php
 $query="select CAST(levels as text) as school from [cg2015].[dbo].[levels]";
$result=mssql_query($query);
		 while ($row = mssql_fetch_array($result)) {
?> <option value='<?php echo $row["school"];?>'><?php echo $row["school"];?></option>

		 <?php } ?>
        </select>
		 </select>
					</div>
					</div></div>
 





 		<div style='float:left;  height:450px;margin-top:15px;height:25px;'>				
<div  class='form-group'  >
<label for="name1" class="col-sm-3 control-label" style='width:170px;text-align:right;margin-top:8px;'>Amount Paid:</label>
				
<div  class='col-sm-6'>
					
					<input type='text'name='paid' class="form-control inputsl" id="name1"
					placehokder="email" style='width:200px;'>
					</div>
					</div></div>
 

 

					
					
					
  <div class="row">
    <div class="col-xs-12" style='marginp-top:10px;'>
    
      <div class="btn-group btn-group-vertical" data-toggle="buttons">
         <label class="radio-inline">
      <input type="radio" name="sex"value='Male'required='required'>Male
    </label>
    <label class="radio-inline">
      <input type="radio" name="sex" value='Female' required='required'>Female
    </label>
 
 </div>
					</div></div>
 
 

  <button type="submit" class="form-control inputsl" style='width:200px;'>Save</button>
 </FORM>
					</div>
 
 
            
  <div class="col-md-3" style='width:560px;height:450px;'> 
       
 
 <div class="panel panel-default"  style='float:left; width:550px;margin-left:10px; height:380px;'>
  <div class="panel-body">
 <div class="embed-responsive embed-responsive-16by9">
    <iframe class="embed-responsive-item" src="tablesdf.php?x=<?php echo $statusfbio;?>&db1=<?php echo $year;?>" style='float:left;width:100%; height:380px;'></iframe>
  </div>
  </div>
</div>
 
 
 
 
 
 
					</div>
 
 
 
					</div>
					
<script>    
$(document).on("keyup",".search-table", function () {
                var value = $(this).val();
                $("table tr").each(function (index) {
                    $row = $(this);
                    $row.show();
                    if (index !== 0 && value) {
                        var found = false;
                        $row.find("td").each(function () {
                            var cell = $(this).text();
                            if (cell.indexOf(value.toLowerCase()) >= 0) {
                                found = true;
                                return;
                            } 
                        });
                        if (found === true) {
                            $row.show();
                        }
                        else {
                            $row.hide();
                        }
                    }
          });
   });
</script>
      <!-- /.modal-dialog --> 
   </div>