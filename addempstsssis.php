<?php include 'dbcs.php';


page_protect();


 $notes=$_SESSION['user_name'];

$user_name=$notes;
$nki=$_GET['roll'];

?><?php


$query="select * from users where full_name='$notes'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>
<?php  $ids=$row['fax'];


?>
<?php } ?><?php
$ass=$_POST['ass'];
$cc=$_POST['department'];
 
 
 
$mxc11pop=$cc;

$levels=$_POST['levels'];


$ma=$_POST['mattt'];
 
 
$qry = mysql_query("select  class as total
from classes where nn='$cc' "); 
$row = mysql_fetch_assoc($qry); 
 $department=$row['total'];


$qry = mysql_query("select  facultyid as total
from department where comment='$cc' "); 
$row = mysql_fetch_assoc($qry); 
$im=$row['total'];


$reps=$_POST['repeter'];
 $md=$reps;
if(empty($md)){

$qry = mysql_query("select  fess as total
from fees where id='$ids'  and classes='$cc' and levels='$levels' "); 
$row = mysql_fetch_assoc($qry); 
$statusfbiomxc111x=$row['total']; 

}
elseif($md>'')
{$statusfbiomxc111x=$reps; 
}

$qry = mysql_query("select btech as total
from matt where roll='1' "); 
$row = mysql_fetch_assoc($qry); 
$tgo2=$row['total']; 

$qry = mysql_query("select  class as total
from classes where extra='$ids'  and nn='$cc' "); 
$row = mysql_fetch_assoc($qry); 
 $statusfbiomxc11=$row['total'];

$qry = mysql_query("select  nn as total
from classes where extra='$ids'  and nn='$cc' "); 
$row = mysql_fetch_assoc($qry); 
$content=$row['total'];

$qry = mysql_query("select  mattsy as total
from classes where extra='$ids'  and nn='$cc' "); 
$row = mysql_fetch_assoc($qry); $countss=$row['total'];

$qry = mysql_query("select  digit as total
from classes where extra='$ids'  and nn='$cc' "); 
$row = mysql_fetch_assoc($qry); $mxc1188=$row['total'];





$qry = mysql_query("select  roll as total
from classes where extra='$ids'  and nn='$cc' "); 
$row = mysql_fetch_assoc($qry); 
$xp=$row['total'];
if(empty($mxc1188)){

$counts=$countss;

$pp="where roll='1'";
$r='1';
}
elseif($mxc1188>''){

$counts=$mxc1188;

$pp="where roll='$xp'";
$r='4';
}




$qry = mysql_query("select  conn as total
from fees where  levels>='$levels'  and levels<='$levels' AND classes>='$department'  and classes<='$department'"); 
$row = mysql_fetch_assoc($qry); 
 $constants=$row['total'];

$m1=$cc;
if(empty($m1)){

 $constant="X";}
elseif($m1>='011' && $m1<='011'  ){
$tmss="matt";$pp="P";

$tmss="matt";$hop="matt";
$mattt=$ma;
$constant="HIMS/P1/"; 

}elseif($m1>='044' && $m1<='044'  ){

$pp="P";
$tmss="matt";$hop="matt";
$mattt=$ma;
$constant="HIMS/P4/"; 
}



elseif($m1>='01' && $m1<='01'    && $levels>='200'   &&   $levels<='200'){
$tmss="matt";$hop="matt";
$mattt=$ma;
$constant="HIMS/01/"; 
}


elseif($m1>='02' && $m1<='02'    && $levels>='200'   &&   $levels<='200'){
$tmss="matt";$hop="matt";
$mattt=$ma;$constant="HIMS/02/"; 
}










elseif($m1>='03' && $m1<='03'  && $levels>='200'   &&   $levels<='200' ){
$tmss="matt";$hop="matt";
$mattt=$ma;$constant="HIMS/03/"; 
}


elseif($m1>='04' && $m1<='04'  && $levels>='200'   &&   $levels<='200' ){
$tmss="matt";$hop="matt";
$mattt=$ma;
$constant=$constants;$constant="HIMS/04/" ;
}elseif($m1>='05' && $m1<='05'  && $levels>='200'   &&   $levels<='200' ){
$tmss="matt";$hop="matt";$constant="HIMS/05/";
$mattt=$ma;
}







elseif($m1>='01' && $m1<='01'  && $levels>='300'   &&   $levels<='300' ){














$tmss="matt";$hop="ls";

$constant="HIMS/01/";







 
 
 
$m1rrrr=$levels;
if(empty($m1rrrr)){

 $constant="X";
 }
elseif($m1rrrr>='200' && $m1rrrr<='200'  ){
$mattt=$mattt;
}
elseif($m1rrrr>='300' && $m1rrrr<='300'  ){







 
$qry = mysql_query("select ls as total
from matt where roll='1' "); 
$row = mysql_fetch_assoc($qry); 
 $e2t=$row['total']; 
 
 

$qry = mysql_query("select extra as total
from rushs where roll='1' "); 
$row = mysql_fetch_assoc($qry); 
 $e2tt=$row['total']; 
 
$qry = mysql_query("select data as total
from rushs where roll='1' "); 
$row = mysql_fetch_assoc($qry); 
 $data=$row['total'];

$datas=$data-1;
$mtttt=$e2tt-1;
 $xc="$mtttt/$e2tt";

$qry = mysql_query("select * FROM  courses where levels='200' and db1='$xc'  "); 
$num_rows=mysql_num_rows($qry);
$edt=$num_rows; 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$mxc16u1=$e2t;
if(empty($mxc16u1)){

$mattt=$edt;
$query555yyy="update matt set  ls='$edt' where roll='1'";


mysql_query ($query555yyy) or die ('could not admission:'.mysql_error());


}
elseif($mxc16u1>''  ){

$mattt=$e2t+1; 
}
 


echo $mattt;













}

}


elseif($m1>='02' && $m1<='02'  && $levels>='300'   &&   $levels<='300' ){













$tmss="matt";$hop="ls";

$constant="HIMS/02/";






 
 
 
$m1rrrr=$levels;
if(empty($m1rrrr)){

 $constant="X";
 }
elseif($m1rrrr>='200' && $m1rrrr<='200'  ){
$mattt=$mattt;
}
elseif($m1rrrr>='300' && $m1rrrr<='300'  ){







 
$qry = mysql_query("select ls as total
from matt where roll='1' "); 
$row = mysql_fetch_assoc($qry); 
 $e2t=$row['total']; 
 
 

$qry = mysql_query("select extra as total
from rushs where roll='1' "); 
$row = mysql_fetch_assoc($qry); 
 $e2tt=$row['total']; 
 
$qry = mysql_query("select data as total
from rushs where roll='1' "); 
$row = mysql_fetch_assoc($qry); 
 $data=$row['total'];

$datas=$data-1;
$mtttt=$e2tt-1;
 
 $xc="$mtttt/$e2tt";

$qry = mysql_query("select * FROM  courses where levels='200' and db1='$xc'  "); 
$num_rows=mysql_num_rows($qry);
$edt=$num_rows; 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$mxc16u1=$e2t;
if(empty($mxc16u1)){

$mattts=$edt;
$query555yyy="update matt set  ls='$edt' where roll='1'";


mysql_query ($query555yyy) or die ('could not admission:'.mysql_error());


}
elseif($mxc16u1>''  ){

$mattt=$e2t+1; 
}
 


echo $mattts;













}
}









elseif($m1>='03' && $m1<='03'  && $levels>='300'   &&   $levels<='300' ){













$tmss="matt";$hop="ls";

$constant="HIMS/03/";








 
 
 
$m1rrrr=$levels;
if(empty($m1rrrr)){

 $constant="X";
 }
elseif($m1rrrr>='200' && $m1rrrr<='200'  ){
$mattts=$mattt;
}
elseif($m1rrrr>='300' && $m1rrrr<='300'  ){







 
$qry = mysql_query("select ls as total
from matt where roll='1' "); 
$row = mysql_fetch_assoc($qry); 
 $e2t=$row['total']; 
 
 

$qry = mysql_query("select extra as total
from rushs where roll='1' "); 
$row = mysql_fetch_assoc($qry); 
 $e2tt=$row['total']; 
$qry = mysql_query("select data as total
from rushs where roll='1' "); 
$row = mysql_fetch_assoc($qry); 
 $data=$row['total'];

$datas=$data-1;
$mtttt=$e2tt-1;
 
 $xc="$mtttt/$e2tt";

$qry = mysql_query("select * FROM  courses where levels='200' and db1='$xc'  "); 
$num_rows=mysql_num_rows($qry);
$edt=$num_rows; 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$mxc16u1=$e2t;
if(empty($mxc16u1)){

$mattts=$edt;
$query555yyy="update matt set  ls='$edt' where roll='1'";


mysql_query ($query555yyy) or die ('could not admission:'.mysql_error());


}
elseif($mxc16u1>''  ){

$mattt=$e2t+1; 
}
 


echo $mattt;













}















}elseif($m1>='04' && $m1<='04'  && $levels>='300'   &&   $levels<='300' ){













$tmss="matt";$hop="ls";

$constant="HIMS/04/";








 
 
 
$m1rrrr=$levels;
if(empty($m1rrrr)){

 $constant="X";
 }
elseif($m1rrrr>='200' && $m1rrrr<='200'  ){
$mattt=$mattt;
}
elseif($m1rrrr>='300' && $m1rrrr<='300'  ){







 
$qry = mysql_query("select ls as total
from matt where roll='1' "); 
$row = mysql_fetch_assoc($qry); 
 $e2t=$row['total']; 
 
 

$qry = mysql_query("select extra as total
from rushs where roll='1' "); 
$row = mysql_fetch_assoc($qry); 
 $e2tt=$row['total']; 
 
$qry = mysql_query("select data as total
from rushs where roll='1' "); 
$row = mysql_fetch_assoc($qry); 
 $data=$row['total'];

$datas=$data-1;
$mtttt=$e2tt-1;
 
 $xc="$mtttt/$e2tt";

$qry = mysql_query("select * FROM  courses where levels='200' and db1='$xc'  "); 
$num_rows=mysql_num_rows($qry);
$edt=$num_rows; 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$mxc16u1=$e2t;
if(empty($mxc16u1)){

$mattts=$edt;

$query555yyy="update matt set  ls='$edt' where roll='1'";


mysql_query ($query555yyy) or die ('could not admission:'.mysql_error());

}
elseif($mxc16u1>''  ){

$mattt=$e2t; 
}
 


echo $mattt;













}
}elseif($m1>='05' && $m1<='05'  && $levels>='300'   &&   $levels<='300' ){













$tmss="matt";$hop="ls";

$constant="HIMS/05/";







 
 
 
$m1rrrr=$levels;
if(empty($m1rrrr)){

 $constant="X";
 }
elseif($m1rrrr>='200' && $m1rrrr<='200'  ){
$mattts=$mattt;
}
elseif($m1rrrr>='300' && $m1rrrr<='300'  ){







 
$qry = mysql_query("select ls as total
from matt where roll='1' "); 
$row = mysql_fetch_assoc($qry); 
 $e2t=$row['total']; 
 
 

$qry = mysql_query("select extra as total
from rushs where roll='1' "); 
$row = mysql_fetch_assoc($qry); 
 $e2tt=$row['total']; 
 

$qry = mysql_query("select data as total
from rushs where roll='1' "); 
$row = mysql_fetch_assoc($qry); 
 $data=$row['total'];

$datas=$data-1;
$mtttt=$e2tt-1;
 
 $xc="$mtttt/$e2tt";

$qry = mysql_query("select * FROM  courses where levels='200' and db1='$xc'  "); 
$num_rows=mysql_num_rows($qry);
$edt=$num_rows; 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$mxc16u1=$e2t;
if(empty($mxc16u1)){

$mattt=$edt;

$query555yyy="update matt set  ls='$edt' where roll='1'";


mysql_query ($query555yyy) or die ('could not admission:'.mysql_error());


}
elseif($mxc16u1>''  ){

$mattt=$e2t+1; 
}
 

 $mattt;













}

}




























elseif($m1>='01' && $m1<='01'  && $levels>='400'   &&   $levels<='400' ){
$tmss="matt";
$hop="btech";
$mattt=$ma;
$constant=$constants; 
}


elseif($m1>='02' && $m1<='02'  && $levels>='400'   &&   $levels<='400' ){
$tmss="matt";$hop="btech";
$mattt=$ma;
$constant=$constants; 
}









elseif($m1>='03' && $m1<='03'  && $levels>='400'   &&   $levels<='400' ){
$tmss="matt";$hop="btech";
$mattt=$ma;
$constant=$constants; 
}elseif($m1>='04' && $m1<='04'  && $levels>='400'   &&   $levels<='400' ){
$tmss="matt";$hop="btech";
$mattt=$ma;
$constant=$constants; 
}elseif($m1>='05' && $m1<='05'  && $levels>='400'   &&   $levels<='400' ){
$tmss="matt";$hop="btech";
$mattt=$ma;
$constant=$constants; 
}




$tmss;




 
$NJI= $mattt;



$mxc161=$mattt;
if(empty($mxc161)){

 $statusfbiomxc161="X";}
elseif($mxc161>='0' && $mxc161<='9'  ){

$statusfbiomxc161="000$mxc161"; 
}
elseif($mxc161>='10' && $mxc161<='99'  ){

$statusfbiomxc161="00$mxc161"; 
}
elseif($mxc161>='100' && $mxc161<='1000'  ){

$statusfbiomxc161="0$mxc161"; 
}

elseif($mxc161>='1000' && $mxc161<='9999'  ){

$statusfbiomxc161="$mxc161"; 
}


elseif($mxc161>='10000' && $mxc161<='99999'  ){

$statusfbiomxc161="$mxc1610"; 
}






?>
<?php
$query="select * from $counts $pp";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
?>
<?php
$mst=$row[$r];
?>

<?php } ?><?php
$query="select * from rushs where roll='1'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>
<b>
<?php  $db1=$row[1];
 $constanty=$row[4];

?><?php }

?>
<?php
$first_name=$_POST['first_name'];
$middle_name=$_POST['middle_name'];
$last_name=$_POST['last_name'];

$fname="$first_name $middle_name $last_name";


$month=$_POST['month'];
$part=$_POST['part'];
$day=$_POST['day'];

$year=$_POST['year'];

$dbirth="$day/$month/$year";

$place=$_POST['place'];

$nation=$_POST['nation'];
$sex=$_POST['sex'];

$religion=$_POST['religion'];
$qualification=$_POST['qualification'];

$address=$_POST['address'];
$city=$_POST['city'];

$farm=$_POST['farm'];
$cateory=$_POST['category'];

$levels=$_POST['levels'];


$contact1=$_POST['contact1'];
$contact2=$_POST['contact2'];


$guardian1=$_POST['gaurdain1'];
$guardian2=$_POST['guardian2'];

$hschool=$_POST['hschool'];
$hgrade=$_POST['hgrade'];

$oschool=$_POST['oschool'];
$ograde=$_POST['ograde'];





$mxcp=$levels;
if(empty($mxcp)){

 $motived="X";}
elseif($mxcp>='200' && $mxcp<='200'  ){
$motived="27500";
}

elseif($mxcp>='300' && $mxcp<='300'  ){
$motived="27500";
}

elseif($mxcp>='400' && $mxcp<='400'  ){
$motived="30000";$tyt="s";$constant="UBa/HIMS/";
}

$father=$_POST['father'];
$mother=$_POST['mother'];

$matriculex=$_POST['matriculex'];

$matricule=$_POST['matricule'];

$mxc111=$statusfbiomxc11;





















$codes=$statusfbiomxc11;
$country=$_POST['country'];
$barcode=$_POST['barcode'];
$y=date('y');
$month=date('m');
$day=date('j');
$Y=date('Y');
$levels=$_POST['levels'];
$mxc11UI=$levels;
$statusfbiomxc11UI=$apps;




$mxcph=$levels;
if(empty($mxcp)){

 $motived="X";}
elseif($mxcph>='200' && $mxcph<='200'  ){
$constantgs=$constanty;
}

elseif($mxcph>='300' && $mxcph<='300'  ){
$constantgs=$constanty-1;
}

elseif($mxcph>='400' && $mxcph<='400'  ){
$constantgs=$constanty;$tyt="s";
}
$mats="$constant$constantgs/$statusfbiomxc161";

$myyy1="$cc$constantgs$tyt$statusfbiomxc161";

$time=date("H:i:s");

$okp="barcode";

$mark="query6";
 $transp="historic";$transpp="courses";
$trans="REGISTRATION FEE"; 


$mxc111yx=$statusfbiomxc111y;
if(empty($mxc111yx)){

 $statusfbiomxc111yx=$statusfbiomxc111yy;
 }
elseif($mxc111yx>'' ){
 $statusfbiomxc111yx=$statusfbiomxc111y;
}


$qry = mysql_query("select fname as total
from courses where matricule='$mats' and db1='$db1' and levels='$levels' "); 
$row = mysql_fetch_assoc($qry); 
  $mmmf=$row['total']; 

$qry = mysql_query("select fname as total
from courses where matricule='$mats' "); 
$row = mysql_fetch_assoc($qry); 
echo $safety=$row['total']; 


$mxc111yxyh=$safety;
if(empty($mxc111yxyh)){

 echo $ssmxc111yxyh='';
 }
elseif($mxc111yxyh>'' ){
echo $ssmxc111yxyh="Sorry You Have Registered This Matricule ($mats) Number The Student Name is $mmmf";
Exit;
}


if($fname!=''){


$rs_duplicate = mysql_query("select count(*) as total from admission  where matricule='$mats' and fname='$fname' and extra='$levels' ") or die(mysql_error());
list($total) = mysql_fetch_row($rs_duplicate);

if ($total > 0)
{
$err[] = "ERROR - The student already exists. Please try again with different student .";
//header("Location: finances.php?msg=$err");
//exit();
}


if(empty($err)) {
$query2="insert into admission  set  
first_name='$first_name',
fname='$fname',
codes='$codes',
department='$cc',
matricule='$mats',
extra='$levels',
status='$db1',

barcode='$myyy1',id='$ids'";




$query4="insert into barcode set  
barcode='$myyy1',db1='$db1',
matricule='$mats', extra='1'";


$qry = mysql_query("select  fess as total
from fees where id='$ids'  and classes='$statusfbiomxc11' and levels='$levels' "); 
$row = mysql_fetch_assoc($qry); 
 $statusfbiomxc111xt=$row['total'];

$qry = mysql_query("select  unions as total
from fees where id='$ids'  and classes='$statusfbiomxc11' and levels='$levels' "); 
$row = mysql_fetch_assoc($qry); 
$mots1=$row['total'];

$motive=$motived+$part;

$qry = mysql_query("select  forms as total
from fees where id='$ids'  and classes='$statusfbiomxc11' and levels='$levels' "); 
$row = mysql_fetch_assoc($qry); 
$mots2=$row['total'];
$folk=($motive-($mots2+$mots1));

$dates=date('Y-m-j');
$bbm=($statusfbiomxc111xt-$motive);
$tmk=$motive;


$query55="insert into $transp  set  
matricule='$mats',student_name='$fname',c111='$im',
class='$levels',amountpaid='$statusfbiomxc11',amount_paid='$motive',expected_amount='$statusfbiomxc111xt',balance='$bbm',date='$dates' ,oldb='$db1',id='$ids' ,classs='$levels' ";



$query5="insert into balancesheet  set  
id='27',name='$trans',amount='$mots2',amount2='$folk',c111='$im',
date='$dates',fname='$mats',month='$month',day='$day',db1='$db1',folk='$part',
cash='$part',status='$fname',time='$time',ass='$ass',sunion='$mots1',tmk='$tmk'
,year='$Y'";

$query56="insert into balancesheet2  set  
id='27',name='$trans',amount='$mots2',amount2='$folk',
date='$dates',fname='$mats',month='$month',day='$day',db1='$db1',folk='$part',
cash='$part',status='$fname',time='$time',ass='$ass',sunion='$mots1',tmk='$tmk',c111='$im'
,year='$Y'";
$query555="insert into $transpp  set  
matricule='$mats',fname='$fname',
levels='$levels',departmet='$codes',sex='$sex',db1='$db1',c110='$ids'  ,c111='$im'";


mysql_query ($query2) or die ('could not admission:'.mysql_error());


 
mysql_query ($query55) or die ('could not historic:'.mysql_error());

mysql_query ($query4) or die ('could not barcode:'.mysql_error());


mysql_query ($query555) or die ('could not courses:'.mysql_error());

mysql_query ($query5) or die ('could not balancesheet:'.mysql_error());
mysql_query ($query56) or die ('could not balancesheet2:'.mysql_error());
 



 
echo "<script>alert('Record $Created Successfully!'); </script>";
 echo  $statusf="<meta http-equiv='refresh' content='0; url=page/printrestsy.php?usr_name=$fname&dates=$dates&mats=$mats&db1=$db1&fname=fname'>";
 echo  $statusf="<meta http-equiv='refresh' content='0; url=page/printrestsy.php?usr_name=$fname&dates=$dates&mats=$mats&db1=$db1&fname=fname'>";
  exit;

 }
}
?>


	
	
	
	</div>
	
	</div>
	
	
	
	
	</body>
	</html>