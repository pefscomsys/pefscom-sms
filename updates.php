<html>
<head>

  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="font-awesome/css/font-awesome.css" type="text/css" media="screen">
    
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script type="text/javascript" src="jquery-1.8.0.min.js"></script>
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
			  
           
<a href="#" class="btn btn-danger btn-lg btn-block"><?php 
$mats=$_GET["mats"];
$qry = mssql_query("select CAST(fname  as text) as total,CAST(sex  as text) as sex
from [cg2015].[dbo].[courses] where matricule='$mats' "); 
$row = mssql_fetch_assoc($qry); 
 echo $msy=$row['total']; $sexs=$row['sex']; 

?> </a>
<?php
$fname=$_POST["fname"];
$mat=$_POST["matricule"];
$department=$_POST["department"];
$mid=$_POST["mid"];

$deptid=$_POST["deptid"];
$faculty=$_POST["faculty"];

$fc=$_POST["fc"];
$expected_amount=$_POST["expected_amount"];

$levels=$_POST["levels"];
$amount_paid=$_POST["amount_paid"];

$paid=$_POST["paid"];$receiptno=$_POST["receiptno"];
$month=$_POST["month"];
$day=$_POST["day"];
$year=$_POST["year"];
$oldb=$_POST["oldb"];
$any_name = $_POST['any_name'];

$var_schol = $_POST['scholarship'];

$period = $_POST['period'];



if(empty($any_name))
{
	$scholarshipx = ($var_schol * ($expected_amount/100));
}
elseif($any_name > '')
{
	$scholarshipx = $any_name;
}
if(empty($scholarshipx))
{
	
}
elseif($scholarshipx > '')
{
	$insert = "INSERT INTO [cg2015].[dbo].[scholarships] ( [matricule]
      ,[amount]
      ,[level]
      ,[year]
      ,[years])
	  VALUES('$mat', '$scholarshipx', '$levels', '$oldb', '$period')";
	  
	  $res = mssql_query($insert);
}
 $qry = mssql_query("select count(*) 	 as fc
from [cg2015].[dbo].[balancesheet] where fname='$mat'   "); 
$row = mssql_fetch_assoc($qry); 
  $fc=$row['fc'];
$amountpaids=$amount_paid+$paid;

$balances=$expected_amount-$amountpaids;


$time=date('H:i:s');
$dates=date('dmY');$m=date('m');$j=date('d');$y=date('y');
$paid=$_POST["paid"];

if(empty($paid)){
	
}elseif($paid>''  && $paid>"0"){
	
$query="insert into [cg2015].[dbo].[balancesheet] 
(name,fname,amount,amount2,sunion,date,month,day,year,db1,status,idcardno,scholarship,cash,tmk,ids,folk,deptf,schoolid,cc,time,expected_amount,balance,receiptno)
values
('$fname','$mat','0','0','0','$dates','$month','$day','$year','$oldb','School Fee','','','$paid','$paid','$mid','$paid','$deptids','$facultyid','$fc','$time','','$balances','$receiptno')

";


$querys="update [cg2015].[dbo].[historic] set 
amount_paid='$amountpaids',balance='$balances',
scholarship = '$scholarshipx'
 where matricule='$mat' and oldb='$oldb'  and levels='$levels' and classs='$department'

";





mssql_query($querys);

mssql_query($query);

	  



echo "<script>alert('Update Successful!'); </script>";

 echo "<meta http-equiv='refresh' content='0; url=receipts.php?mat=$mat&code=$mid&date=$dates&amount=$paid&cc=$fc'>";
	
	
}elseif($paid<"0"){
	

echo "<script>alert('Negative Amount Please see administrator Thanks!'); </script>";
exit;
}
?>

 
  <div class="col-md-3" style='width:750px;height:650px; margin-top:30px;'> 
       
 
 <div class="panel panel-default"  style='float:left; width:750px;margin-left:-10px; height:500px;'>
 
 
 
  <form method='POST' action='#'>
  	<?php
	$mats=$_GET["mats"];$db1=$_GET["rx"];$levels=$_GET["levels"];
 $sql_ress="select CAST(student_name as nvarchar(400)) as fname,CAST(matricule as nvarchar(400)) as matricule, CAST(expected_amount as nvarchar(400)) as expected_amount, 
CAST(matricule as text) as matricule, CAST(amount_paid as text) as amount_paid, CAST(deptf as text) as deptf,CAST(id as text) as id,CAST(levels as text) as levels,CAST(oldb as text) as oldb,CAST(classs as text) as department
 from  [cg2015].[dbo].[historic] where  oldb='$db1'  and matricule='$mats'  and levels='$levels'";$sql_res=mssql_query($sql_ress);
while($row=mssql_fetch_array($sql_res))
{
?> 
	<div style='float:left;  width:150px;height:380px;'>	
	
	<div style='float:left;  width:150px;height:150px;border:2px solid #000; background:#ccc;'>	
	</div>
	
	</div>
	  <div style='float:left;  width:550px;height:380px;margin-top:-25px;'>	
	<div style='float:left;  height:450px;margin-top:15px;height:25px;'>				

 
 
 		<div style='float:left;  height:450px;margin-top:15px;height:25px;'>				
<div  class='form-group'  >
<label for="name1" class="col-sm-3 control-label" style='width:170px;text-align:right;margin-top:8px;'>Department:</label>
				
<div  class='col-sm-6'>
					
					<input type='text'name='department' value="<?php echo $dept=$row["department"];?>"class="form-control inputsl" id="name1"
					placeholder="Department" style='width:280px;'>
					</div>
					</div></div>
 
 
 		<div style='float:left;  height:450px;margin-top:15px;height:25px;'>				
<div  class='form-group'  >
<label for="name1" class="col-sm-3 control-label" style='width:170px;text-align:right;margin-top:8px;'>Matricule:</label>
				
<div  class='col-sm-6'>
					
					<input type='text'name='matricule'  value="<?php echo $matricule=$row["matricule"];
					
					
					 $db1=$row["oldb"];
					
					 $deptf=$row["depft"];
					 $ids=$row["id"];
					
					 $expected_amounts=$row["expected_amount"];
					 $amount_paid=$row["amount_paid"];

					 $levels=$row["levels"];
					$scholarship = $row['scholarship'];
					

					
					
					
					?>"class="form-control inputsl" id="name1"
					placeholder="Matricule" style='width:200px;'>
					</div>
					</div></div>
 
 
 		<div style='float:left;  height:450px;margin-top:15px;height:25px;'>				
<div  class='form-group'  >
<label for="name1" class="col-sm-3 control-label" style='width:170px;text-align:right;margin-top:8px;'>Sex</label>
				
<div  class='col-sm-6'>		
	
					<input type='hidden'name='receiptno' class="form-control inputsl" id="name1"
					value='<?php
					
								

 $qry = mssql_query("select count(*)	 as fcode
from [cg2015].[dbo].[balancesheet]  "); 
$row = mssql_fetch_assoc($qry); 
 echo $fcode=$row['fcode'];
					
					
					?>'placeholder="email" style='width:200px;'>
						
					<input type='hidden'name='dates'  value="<?php echo $dates;?>"class="form-control inputsl" id="name1"
					placeholder="Sex" style='width:150px;'>
					<input type='hidden'name='fc'  value="<?php echo $fc;?>"class="form-control inputsl" id="name1"
					placeholder="Sex" style='width:150px;'>
					<input type='hidden'name='month'  value="<?php echo $m;?>"class="form-control inputsl" id="name1"
					placeholder="Sex" style='width:150px;'>
					<input type='hidden'name='day'  value="<?php echo $j;?>"class="form-control inputsl" id="name1"
					placeholder="Sex" style='width:150px;'>
					<input type='hidden'name='year'  value="<?php echo $Y;?>"class="form-control inputsl" id="name1"
					placeholder="Sex" style='width:150px;'>
					<input type='hidden'name='mid'  value="<?php echo $statusfbio;?>"class="form-control inputsl" id="name1"
					placeholder="Sex" style='width:150px;'>
					<input type='hidden'name='facultyid'  value="<?php echo $deptf;?>"class="form-control inputsl" id="name1"
					placeholder="Sex" style='width:150px;'>
					<input type='hidden'name='deptid'  value="<?php echo $ids;?>"class="form-control inputsl" id="name1"
					placeholder="Sex" style='width:150px;'>
					<input type='hidden'name='fname'  value="<?php echo $msy;?>"class="form-control inputsl" id="name1"
					placeholder="Sex" style='width:150px;'>
					
					<input type='text'name='sex'  value="<?php echo $sexs;?>"class="form-control inputsl" id="name1"
					placeholder="Sex" style='width:150px;'>
					</div>
					</div></div>
 
 		<div style='float:left;  height:450px;margin-top:15px;height:25px;'>				
<div  class='form-group'  >
<label for="name1" class="col-sm-3 control-label" style='width:170px;text-align:right;margin-top:8px;'>Levels</label>
				
<div  class='col-sm-6'>
					
					<input type='text'name='levels'  value="<?php echo $levels;?>"class="form-control inputsl" id="name1"
					placeholder="Sex" style='width:150px;'>
					</div>
					</div></div>
 		<div style='float:left;  height:450px;margin-top:15px;height:25px;'>				
<div  class='form-group'  >
<label for="name1" class="col-sm-3 control-label" style='width:170px;text-align:right;margin-top:8px;'>Acc. Year:</label>
				
<div  class='col-sm-6'>
					
					<input type='text'name='oldb'   value="<?php echo $db1;?>"class="form-control inputsl" id="name1"
					placeholder="db1" style='width:200px;'>
					</div>
					</div></div>
 
 
 		<div style='float:left;  height:450px;margin-top:15px;height:25px;'>				
<div  class='form-group'  >
<label for="name1" class="col-sm-3 control-label" style='width:170px;text-align:right;margin-top:8px;'>Bal. Brought Fwd:</label>
				
<div  class='col-sm-6'>
					
					<input type='text'name='bfs' value="<?php  

 $qry = mssql_query("select SUM(CAST(amount as float))	 as fcs
from [cg2015].[dbo].[bf] where matricule='$mat' and newl='$levels'  and db1='$db1' "); 
$row = mssql_fetch_assoc($qry); 
 echo $fcs=$row['fcs'];
  ?>" class="form-control inputsl" id="name1"
					placeholder = "" style="width:200px;" readonly='readonly'>
					</div>
					</div></div>
 
					
					
					
 		<div style='float:left;  height:450px;margin-top:15px;height:25px;'>				
<div  class='form-group'  >
<label for="name1" class="col-sm-3 control-label" style='width:170px;text-align:right;margin-top:8px;'>Expected Amount:</label>
				
<div  class='col-sm-6'>
					
					<input type='text'name='expected_amount'   value="<?php echo $expected_amount=($expected_amounts-$fcs);?>"class="form-control inputsl" id="name1"
					placeholder="expected_amount" style='width:150px;' readonly='readonly'>
					</div>
					</div></div>
 
				<div style='float:left;  height:450px;margin-top:15px;height:25px;'>				
<div  class='form-group'  >
<label for="name1" class="col-sm-3 control-label" style='width:170px;text-align:right;margin-top:8px;'>Scholarship:</label>
				
<div  class='col-sm-6'>
					<?php
					$qry = mssql_query("select count(*)	 as fcs
			from [cg2015].[dbo].[historic] where matricule='$matricule'  and scholarship>'' "); 
			$row = mssql_fetch_assoc($qry); 
			  $fcss=$row['fcs'];
			  
			  $qry = mssql_query("select CAST(years as float) as fcssc, CAST(amount as float) as amount
			from [cg2015].[dbo].[scholarships] where matricule='$matricule'"); 
			$row = mssql_fetch_assoc($qry); 
			  $schol=$row['fcssc'];
			  $xamount = $row['amount'];
			  
			  $qry = mssql_query("select CAST(years as float) as fcsc
			from [cg2015].[dbo].[scholarships] where matricule='$matricule' and year= '$db1'"); 
			$row = mssql_fetch_assoc($qry); 
			  $years=$row['fcsc'];
			  
			  if(empty($years))
			  {
				  
				  
				  if(empty($xamount)){
					  
				 $scholarship_amount ="";
				
				   $variable = "";
				  }elseif($xamount>''){
				
				  
				  $scholarship_amount = $xamount;
				  $variable = "readonly";
				  
				  }
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
			  }
			  elseif($years > '' && $schol > $fcss)
			  {
				  $scholarship_amount = $xamount;
				  
				  $variable = "readonly";
			  }
				elseif($years > '' && (($schol >= $fcss && $schol <= $fcss)))
			  {
				  $scholarship_amount = $xamount;
				  $variable = "readonly";
			  }
					?>
					<?php
					if(empty($scholarship_amount))
					{
						?>
					
					<select name="scholarship" class="form-control inputsl" style='width:150px;'>
						<option value="">--SELECT--</option>
						<?php
						$start = 10;
						
						for ($i = $start; $i <= 100; $i += 10)
						{
							?>
						<option value="<?php echo $i; ?>">
							<?php echo $i . '%'; ?>
						</option>
							<?php
						}
						?>
					</select>
					
					<?PHP
					
					}
					elseif($scholarship_amount > '')
					{
						?>
					<input type='text'name='real_scholarship' value="<?php echo $scholarship_amount; ?>" class="form-control inputsl" id="name1"
					placeholder="paid" style='width:150px;' readonly='readonly'>
						<?php
					}
					?>
					</div>
					</div></div>	
					
					<div style='float:left;  height:450px;margin-top:15px;height:25px;'>				
<div  class='form-group'  >
<label for="name1" class="col-sm-3 control-label" style='width:170px;text-align:right;margin-top:8px;'>Scholarship Period:</label>
				
<div  class='col-sm-6'>
					
					<input type='<?php
					$qry = mssql_query("select count(*)	 as fcs
			from [cg2015].[dbo].[historic] where matricule='$matricule' and scholarship>'' "); 
			$row = mssql_fetch_assoc($qry); 
			  $fcss=$row['fcs']; //what use ?
			  
			  $qry = mssql_query("select CAST(years as float) as fcssc, CAST(amount as float) as amount
			from [cg2015].[dbo].[scholarships] where matricule='$matricule'"); 
			$row = mssql_fetch_assoc($qry); 
			  $schol=$row['fcssc'];
			  $xamount = $row['amount'];
			  
			  $qry = mssql_query("select CAST(years as float) as fcsc
			from [cg2015].[dbo].[scholarships] where matricule='$matricule' and year= '$db1'"); 
			$row = mssql_fetch_assoc($qry); 
			  $years=$row['fcsc'];
			  
			  if(empty($years))
			  {
				  if(empty($xamount)){
					  
				 $scholarship_amount ="0";
				  echo "text";
				   $variable = "";
				  }elseif($xamount>''){
					   echo "text";
				  
				  $scholarship_amount = $xamount;
				  $variable = "readonly";
				  
				  }
			  }
			  elseif($years > '' && $schol > $fcss)
			  {
				  $scholarship_amount = $xamount;
				  echo "text";
				  $variable = "readonly";
			  }
				elseif($years > '' && (($schol >= $fcss && $schol <= $fcss)))
			  {
				  $scholarship_amount = 0;
				  
				    
				  $scholarship_amounts = $xamount;
				  echo "text"; $variable = "readonly";
			  }
					?>' name="period" class="form-control inputsl" id="name1"
					placeholder="E.g 2 (for 2 years)" style='width:150px;' maxlength="1" value="<?php
					echo $schol;
					?>"  <?php echo $variable; ?>>
					</div>
					</div></div>
 
					
 		<div style='float:left;  height:450px;margin-top:15px;height:25px;'>				
<div  class='form-group'  >
<label for="name1" class="col-sm-3 control-label" style='width:170px;text-align:right;margin-top:8px;'>Paid:</label>
				
<div  class='col-sm-6'>
					<input type='hidden'name='amount_paid' value="<?php echo $amount_paid;?>" class="form-control inputsl" id="name1"
					placeholder="paid" style='width:150px;' readonly='readonly'>
					<input type='text'name='amount_paids' value="<?php echo $total_schol = $amount_paid+$scholarship_amount;?>" class="form-control inputsl" id="name1"
					placeholder="paid" style='width:150px;' readonly='readonly'>
					
					<input type='hidden'name='any_name' value="<?php echo $scholarship_amount;	
			
			 ?>" class="form-control inputsl" id="name1"
					placeholder="paid" style='width:150px; float: left; margin-left: 150px;' readonly='readonly'>
					
					</div>
					</div></div>
 
					
			
 
 
 
 
 		<div style='float:left;  height:450px;margin-top:15px;height:25px;'>				
<div  class='form-group'  >
<label for="name1" class="col-sm-3 control-label" style='width:170px;text-align:right;margin-top:8px;'>Balance</label>

<div  class='col-sm-6'>
					
					<input type='hidden'name='balance'value="<?php echo $balance=($expected_amount-($total_schol));?>"class="form-control inputsl" id="name1"
					placeholder="email" style='width:150px;' readonly='readonly'>
        </select>
					<input type='text'name='balances'value="<?php echo $balance=($expected_amount-($total_schol+$scholarship_amounts));?>"class="form-control inputsl" id="name1"
					placeholder="email" style='width:150px;' readonly='readonly'>
        </select>
		 </select>
					</div>
					</div></div>
 





 		<div style='float:left;  height:450px;margin-top:15px;height:25px;'>				
<div  class='form-group'  >
<label for="name1" class="col-sm-3 control-label" style='width:170px;text-align:right;margin-top:8px;'>New Instalment:</label>
				
<div  class='col-sm-6'>
					
					<input type='text'name='paid' class="form-control inputsl" id="name1"
					placeholder="Add Payment" style='width:200px;'
					<?php
					
					
					if($balance == 0)
					{
						echo 'readonly';
					}
					?>
					>
					</div>
					</div></div>
 

 

				
					</div></div>
 
<?php } ?></div>

  <button type="submit" class="form-control inputsl" style='width:200px;'>Update Account</button>
 </FORM>
					</div>
 
 
 