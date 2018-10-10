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
$cc=$_POST['department'];
$mxc11pop=$cc;
if(empty($mxc11pop)){

 $statusfbiomxc11="X";
 }
elseif($mxc11pop>='01' && $mxc11pop<='01'  ){
$content='01';$counts='matts';
$statusfbiomxc11="ACCOUNTANCY"; 
}elseif($mxc11pop>='011' && $mxc11pop<='011'  ){
$content='01';$counts='mattsy';
$statusfbiomxc11="ACCOUNTANCY"; 
$statusfbiomxc111yy='27';
}
elseif($mxc11pop>='02' && $mxc11pop<='02'  ){
$content='02';$counts='matts';
$statusfbiomxc11="BANKING AND FINANCE"; 
}elseif($mxc11pop>='022' && $mxc11pop<='022'  ){
$statusfbiomxc111yy='27';$content='02';$counts='mattsy';
$statusfbiomxc11="BANKING AND FINANCE"; 
}
elseif($mxc11pop>='03' && $mxc11pop<='03'  ){
$statusfbiomxc111yy='27';$content='03';$counts='matts';
$statusfbiomxc11="INSURANCE"; 
}
elseif($mxc11pop>='033' && $mxc11pop<='033'  ){
$statusfbiomxc111yy='27';$content='03';$counts='mattsy';
$statusfbiomxc11="INSURANCE"; 
}
elseif($mxc11pop>='04' && $mxc11pop<='04'  ){
$content='04';$counts='matts';
$statusfbiomxc11="MANAGEMENT"; 
}elseif($mxc11pop>='044' && $mxc11pop<='044'  ){
$statusfbiomxc111yy='27';$content='04';$counts='mattsy';
$statusfbiomxc11="MANAGEMENT"; 
}
elseif($mxc11pop>='05' && $mxc11pop<='05'  ){
$content='05';$counts='matts';
$statusfbiomxc11="MARKETING"; 
}
elseif($mxc11pop>='055' && $mxc11pop<='055'  ){
$statusfbiomxc111yy='27';$content='05';$counts='mattsy';
$statusfbiomxc11="MARKETING"; 
}
$query="select * from $counts where roll='1'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
?>

<?php  $mst=$row[1];
$NJI= $mst+1;



$mxc161=$NJI;
if(empty($mxc161)){

 $statusfbiomxc161="X";}
elseif($mxc161>='0' && $mxc161<='10'  ){

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
<?php } ?><?php
$query="select * from rushs where roll='1'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>
<b>
<?php  $db1=$row[1];
$constants=$row[4];

?><?php } ?>
<?php
$first_name=$_POST['first_name'];
$middle_name=$_POST['middle_name'];
$last_name=$_POST['last_name'];

$fname="$first_name $middle_name $last_name";


$category=$_POST['category'];
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

$motived=$_POST['motive'];


$father=$_POST['father'];
$mother=$_POST['mother'];

$matriculex=$_POST['matriculex'];

$matricule=$_POST['matricule'];
$cc=$_POST['department'];
$mxc11=$cc;
if(empty($mxc11)){

 $statusfbiomxc11="X";}
elseif($mxc11>='01' && $mxc11<='01'  ){
$content='01';$counts='matts';
$statusfbiomxc11="ACCOUNTANCY"; 
}elseif($mxc11>='011' && $mxc11<='011'  ){
$content='01';$counts='mattsy';
$statusfbiomxc11="ACCOUNTANCY"; 
$statusfbiomxc111yy='27';
}
elseif($mxc11>='02' && $mxc11<='02'  ){
$content='02';$counts='matts';
$statusfbiomxc11="BANKING AND FINANCE"; 
}elseif($mxc11>='022' && $mxc11<='022'  ){
$statusfbiomxc111yy='27';$content='02';$counts='mattsy';
$statusfbiomxc11="BANKING AND FINANCE"; 
}
elseif($mxc11>='03' && $mxc11<='03'  ){
$statusfbiomxc111yy='27';$content='03';$counts='matts';
$statusfbiomxc11="INSURANCE"; 
}
elseif($mxc11>='033' && $mxc11<='033'  ){
$statusfbiomxc111yy='27';$content='03';$counts='mattsy';
$statusfbiomxc11="INSURANCE"; 
}
elseif($mxc11>='04' && $mxc11<='04'  ){
$content='04';$counts='matts';
$statusfbiomxc11="MANAGEMENT"; 
}elseif($mxc11>='044' && $mxc11<='044'  ){
$statusfbiomxc111yy='27';$content='04';$counts='mattsy';
$statusfbiomxc11="MANAGEMENT"; 
}
elseif($mxc11>='05' && $mxc11<='05'  ){
$content='05';$counts='matts';
$statusfbiomxc11="MARKETING"; 
}
elseif($mxc11>='055' && $mxc11<='055'  ){
$statusfbiomxc111yy='27';$content='05';$counts='mattsy';
$statusfbiomxc11="MARKETING"; 
}

$mxc111=$statusfbiomxc11;


if(empty($mxc111)){

 $statusfbiomxc111x="X";}
elseif(($mxc111>='ACCOUNTANCY' && $mxc111<='ACCOUNTANCY')  && $levels>='200' && $levels<='200' ){

$statusfbiomxc111x="352500"; 
}
elseif($mxc111>='BANKING AND FINANCE' && $mxc111<='BANKING AND FINANCE'  && $levels>='200' && $levels<='200' ){

$statusfbiomxc111x="352500"; 
}

elseif($mxc111>='INSURANCE' && $mxc111<='INSURANCE'  && $levels>='200' && $levels<='200' ){

$statusfbiomxc111x="367500"; 
}

elseif($mxc111>='MANAGEMENT' && $mxc111<='MANAGEMENT'  && $levels>='200' && $levels<='200' ){

$statusfbiomxc111x="342500"; 
}


elseif($mxc111>='MARKETING' && $mxc111<='MARKETING'  && $levels>='200' && $levels<='200' ){

$statusfbiomxc111x="342500"; 
}








elseif(($mxc111>='ACCOUNTANCY' && $mxc111<='ACCOUNTANCY')  && $levels>='400' && $levels<='400' ){

$statusfbiomxc111x="430000"; $tyt="s";
}
elseif($mxc111>='BANKING AND FINANCE' && $mxc111<='BANKING AND FINANCE'  && $levels>='400' && $levels<='400' ){

$statusfbiomxc111x="430000"; $tyt="s";
}

elseif($mxc111>='INSURANCE' && $mxc111<='INSURANCE'  && $levels>='400' && $levels<='400' ){

$statusfbiomxc111x="430000"; $tyt="s";
}

elseif($mxc111>='MANAGEMENT' && $mxc111<='MANAGEMENT'  && $levels>='400' && $levels<='400' ){

$statusfbiomxc111x="430000"; $tyt="s";
}


elseif($mxc111>='MARKETING' && $mxc111<='MARKETING'  && $levels>='400' && $levels<='400' ){

$statusfbiomxc111x="430000"; $tyt="s";
}



















$codes=$statusfbiomxc11;
$country=$_POST['country'];
$barcode=$_POST['barcode'];
$y=date('y');
$month=date('m');
$day=date('j');
$Y=date('Y');
$levels=$_POST['levels'];
$mxc11UI=$levels;
if(empty($mxc11UI)){

 $statusfbiomxc11UI="X";}
elseif($mxc11UI>='200' && $mxc11UI<='200'&& $cc>='01' && $cc<='01'){

$statusfbiomxc11UI="HIMS/"; 
}elseif($mxc11UI>='200' && $mxc11UI<='200'&& $cc>='011' && $cc<='011'){

$statusfbiomxc11UI="HIMS/P"; 
}


elseif($mxc11UI>='200' && $mxc11UI<='200'&& $cc>='02' && $cc<='02'){

$statusfbiomxc11UI="HIMS/"; 
}elseif($mxc11UI>='200' && $mxc11UI<='200'&& $cc>='022' && $cc<='022'){

$statusfbiomxc11UI="HIMS/P"; 
}
elseif($mxc11UI>='200' && $mxc11UI<='200'&& $cc>='03' && $cc<='03'){

$statusfbiomxc11UI="HIMS/"; 
}elseif($mxc11UI>='200' && $mxc11UI<='200'&& $cc>='033' && $cc<='033'){

$statusfbiomxc11UI="HIMS/P"; 
}


elseif($mxc11UI>='200' && $mxc11UI<='200'&& $cc>='04' && $cc<='04'){

$statusfbiomxc11UI="HIMS/"; 
}elseif($mxc11UI>='200' && $mxc11UI<='200'&& $cc>='044' && $cc<='044'){

$statusfbiomxc11UI="HIMS/P"; 
}

elseif($mxc11UI>='200' && $mxc11UI<='200'&& $cc>='05' && $cc<='05'){

$statusfbiomxc11UI="HIMS/"; 
}elseif($mxc11UI>='200' && $mxc11UI<='200'&& $cc>='055' && $cc<='055'){

$statusfbiomxc11UI="HIMS/P"; 
}


elseif($mxc11UI>='300' && $mxc11UI<='300'&& $cc>='01' && $cc<='01'){

$statusfbiomxc11UI="HIMS/"; 
}elseif($mxc11UI>='300' && $mxc11UI<='300'&& $cc>='011' && $cc<='011'){

$statusfbiomxc11UI="HIMS/P"; 
}


elseif($mxc11UI>='300' && $mxc11UI<='300'&& $cc>='02' && $cc<='02'){

$statusfbiomxc11UI="HIMS/"; 
}elseif($mxc11UI>='300' && $mxc11UI<='300'&& $cc>='022' && $cc<='022'){

$statusfbiomxc11UI="HIMS/P"; 
}
elseif($mxc11UI>='300' && $mxc11UI<='300'&& $cc>='03' && $cc<='03'){

$statusfbiomxc11UI="HIMS/"; 
}elseif($mxc11UI>='300' && $mxc11UI<='300'&& $cc>='033' && $cc<='033'){

$statusfbiomxc11UI="HIMS/P"; 
}


elseif($mxc11UI>='300' && $mxc11UI<='300'&& $cc>='04' && $cc<='04'){

$statusfbiomxc11UI="HIMS/"; 
}elseif($mxc11UI>='300' && $mxc11UI<='300'&& $cc>='044' && $cc<='044'){

$statusfbiomxc11UI="HIMS/P"; 
}

elseif($mxc11UI>='300' && $mxc11UI<='300'&& $cc>='05' && $cc<='05'){

$statusfbiomxc11UI="HIMS/"; 
}elseif($mxc11UI>='300' && $mxc11UI<='300'&& $cc>='055' && $cc<='055'){

$statusfbiomxc11UI="HIMS/P"; 
}




elseif($mxc11UI>='400' && $mxc11UI<='400'  ){

$statusfbiomxc11UI="UBa/HIMS/"; 
}



$constant="M1";

$mats="$statusfbiomxc11UI$content/$constants/$statusfbiomxc161";
$barcodes="$cc$constants$tyt$statusfbiomxc161";

$time=date("H:i:s");







$mxc111y=$motived;
if(empty($mxc111y)){

 $statusfbiomxc111y="X";
 }
elseif(($mxc111y>='5000' && $mxc111y<='5000')  && $levels>='200' && $levels<='200' && $cc>='01' && $cc<='01' ){

$statusfbiomxc111y="1"; 
$trans="FORMS"; 
$transp=""; 
$mots2="0"; 
$mots1="5000";




$myy1=""; 

$myyy1="";

$mark=""; 
}
elseif(($mxc111y>='5000' && $mxc111y<='5000')  && $levels>='200' && $levels<='200' && $cc>='011' && $cc<='011' ){

$statusfbiomxc111y="29"; $statusfbiomxc111yuk="29"; 
$trans="FORMS"; 
$transp=""; 
$mots2="0"; 
$mots1="5000";




$myy1=""; 

$myyy1="";

$mark=""; 
}




elseif(($mxc111y>='5000' && $mxc111y<='5000')  && $levels>='200' && $levels<='200' && $cc>='02' && $cc<='02' ){

$statusfbiomxc111y="1"; 
$trans="FORMS"; 
$transp=""; 
$mots2="0"; 
$mots1="5000";




$myy1=""; 

$myyy1="";

$mark=""; 
}
elseif(($mxc111y>='5000' && $mxc111y<='5000')  && $levels>='200' && $levels<='200' && $cc>='022' && $cc<='022' ){

$statusfbiomxc111y="29"; $statusfbiomxc111yuk="29"; 
$trans="FORMS"; 
$transp=""; 
$mots2="0"; 
$mots1="5000";




$myy1=""; 

$myyy1="";

$mark=""; 
}






elseif(($mxc111y>='5000' && $mxc111y<='5000')  && $levels>='200' && $levels<='200' && $cc>='03' && $cc<='03' ){

$statusfbiomxc111y="1"; 
$trans="FORMS"; 
$transp=""; 
$mots2="0"; 
$mots1="5000";




$myy1=""; 

$myyy1="";

$mark=""; 
}
elseif(($mxc111y>='5000' && $mxc111y<='5000')  && $levels>='200' && $levels<='200' && $cc>='033' && $cc<='033' ){

$statusfbiomxc111y="29"; $statusfbiomxc111yuk="29"; 
$trans="FORMS"; 
$transp=""; 
$mots2="0"; 
$mots1="5000";




$myy1=""; 

$myyy1="";

$mark=""; 
}




elseif(($mxc111y>='5000' && $mxc111y<='5000')  && $levels>='200' && $levels<='200' && $cc>='04' && $cc<='04' ){

$statusfbiomxc111y="1"; 
$trans="FORMS"; 
$transp=""; 
$mots2="0"; 
$mots1="5000";




$myy1=""; 

$myyy1="";

$mark=""; 
}
elseif(($mxc111y>='5000' && $mxc111y<='5000')  && $levels>='200' && $levels<='200' && $cc>='044' && $cc<='044' ){

$statusfbiomxc111y="29"; $statusfbiomxc111yuk="29"; 
$trans="FORMS"; 
$transp=""; 
$mots2="0"; 
$mots1="5000";




$myy1=""; 

$myyy1="";

$mark=""; 
}




elseif(($mxc111y>='5000' && $mxc111y<='5000')  && $levels>='200' && $levels<='200' && $cc>='05' && $cc<='05' ){

$statusfbiomxc111y="1"; 
$trans="FORMS"; 
$transp=""; 
$mots2="0"; 
$mots1="5000";




$myy1=""; 

$myyy1="";

$mark=""; 
}
elseif(($mxc111y>='5000' && $mxc111y<='5000')  && $levels>='200' && $levels<='200' && $cc>='055' && $cc<='055' ){

$statusfbiomxc111y="29"; $statusfbiomxc111yuk="29"; 
$trans="FORMS"; 
$transp=""; 
$mots2="0"; 
$mots1="5000";




$myy1=""; 

$myyy1="";

$mark=""; 
}













elseif(($mxc111y>='27500' && $mxc111y<='27500')  && $levels>='200' && $levels<='200' && $cc>='01' && $cc<='01' ){

$statusfbiomxc111y="2"; 
$trans="REGISTRATION FEE"; 
$transp="historic";$transpp="courses";
$mots2="20000"; 
$mots1="5000"; 
$sunion="2500"; 
$myy1="$statusfbiomxc11UI$content/$constants/$statusfbiomxc161"; 

$myyy1="$cc$constants$statusfbiomxc161";

$okp="barcode";

$mark="query6";
}





elseif(($mxc111y>='27500' && $mxc111y<='27500')  && $levels>='200' && $levels<='200' && $cc>='011' && $cc<='011' ){

$statusfbiomxc111y="29"; $statusfbiomxc111yuk="29"; 
$trans="REGISTRATION FEE"; 
$transp="historic";$transpp="courses";
$mots2="20000"; 
$mots1="5000"; 
$sunion="2500"; 
$myy1="$statusfbiomxc11UI$content/$constants/$statusfbiomxc161"; 

$myyy1="$cc$constants$statusfbiomxc161";

$okp="barcode";

$mark="query6";
}


elseif(($mxc111y>='27500' && $mxc111y<='27500')  && $levels>='200' && $levels<='200' && $cc>='02' && $cc<='02' ){

$statusfbiomxc111y="2"; 
$trans="REGISTRATION FEE"; 
$transp="historic";$transpp="courses";
$mots2="20000"; 
$mots1="5000"; 
$sunion="2500"; 
$myy1="$statusfbiomxc11UI$content/$constants/$statusfbiomxc161"; 

$myyy1="$cc$constants$statusfbiomxc161";

$okp="barcode";

$mark="query6";
}





elseif(($mxc111y>='27500' && $mxc111y<='27500')  && $levels>='200' && $levels<='200' && $cc>='022' && $cc<='022' ){

$statusfbiomxc111y="29"; $statusfbiomxc111yuk="29"; 
$trans="REGISTRATION FEE"; 
$transp="historic";$transpp="courses";
$mots2="20000"; 
$mots1="5000"; 
$sunion="2500"; 
$myy1="$statusfbiomxc11UI$content/$constants/$statusfbiomxc161"; 

$myyy1="$cc$constants$statusfbiomxc161";

$okp="barcode";

$mark="query6";
}








elseif(($mxc111y>='27500' && $mxc111y<='27500')  && $levels>='200' && $levels<='200' && $cc>='03' && $cc<='03' ){

$statusfbiomxc111y="2"; 
$trans="REGISTRATION FEE"; 
$transp="historic";$transpp="courses";
$mots2="20000"; 
$mots1="5000"; 
$sunion="2500"; 
$myy1="$statusfbiomxc11UI$content/$constants/$statusfbiomxc161"; 

$myyy1="$cc$constants$statusfbiomxc161";

$okp="barcode";

$mark="query6";
}





elseif(($mxc111y>='27500' && $mxc111y<='27500')  && $levels>='200' && $levels<='200' && $cc>='033' && $cc<='033' ){

$statusfbiomxc111y="29"; $statusfbiomxc111yuk="29"; 
$trans="REGISTRATION FEE"; 
$transp="historic";$transpp="courses";
$mots2="20000"; 
$mots1="5000"; 
$sunion="2500"; 
$myy1="$statusfbiomxc11UI$content/$constants/$statusfbiomxc161"; 

$myyy1="$cc$constants$statusfbiomxc161";

$okp="barcode";

$mark="query6";
}





elseif(($mxc111y>='27500' && $mxc111y<='27500')  && $levels>='200' && $levels<='200' && $cc>='04' && $cc<='04' ){

$statusfbiomxc111y="2"; 
$trans="REGISTRATION FEE"; 
$transp="historic";$transpp="courses";
$mots2="20000"; 
$mots1="5000"; 
$sunion="2500"; 
$myy1="$statusfbiomxc11UI$content/$constants/$statusfbiomxc161"; 

$myyy1="$cc$constants$statusfbiomxc161";

$okp="barcode";

$mark="query6";
}





elseif(($mxc111y>='27500' && $mxc111y<='27500')  && $levels>='200' && $levels<='200' && $cc>='044' && $cc<='044' ){

$statusfbiomxc111y="29"; $statusfbiomxc111yuk="29"; 
$trans="REGISTRATION FEE"; 
$transp="historic";$transpp="courses";
$mots2="20000"; 
$mots1="5000"; 
$sunion="2500"; 
$myy1="$statusfbiomxc11UI$content/$constants/$statusfbiomxc161"; 

$myyy1="$cc$constants$statusfbiomxc161";

$okp="barcode";

$mark="query6";
}




elseif(($mxc111y>='27500' && $mxc111y<='27500')  && $levels>='200' && $levels<='200' && $cc>='05' && $cc<='05' ){

$statusfbiomxc111y="2"; 
$trans="REGISTRATION FEE"; 
$transp="historic";$transpp="courses";
$mots2="20000"; 
$mots1="5000"; 
$sunion="2500"; 
$myy1="$statusfbiomxc11UI$content/$constants/$statusfbiomxc161"; 

$myyy1="$cc$constants$statusfbiomxc161";

$okp="barcode";

$mark="query6";
}





elseif(($mxc111y>='27500' && $mxc111y<='27500')  && $levels>='200' && $levels<='200' && $cc>='055' && $cc<='055' ){

$statusfbiomxc111y="29"; $statusfbiomxc111yuk="29"; 
$trans="REGISTRATION FEE"; 
$transp="historic";$transpp="courses";
$mots2="20000"; 
$mots1="5000"; 
$sunion="2500"; 
$myy1="$statusfbiomxc11UI$content/$constants/$statusfbiomxc161"; 

$myyy1="$cc$constants$statusfbiomxc161";

$okp="barcode";

$mark="query6";
}















elseif(($mxc111y>='5000' && $mxc111y<='5000')  && $levels>='300' && $levels<='300' && $cc>='01' && $cc<='01' ){

$statusfbiomxc111y="1"; 
$trans="FORMS"; 
$transp=""; 
$mots2="0"; 
$mots1="5000";




$myy1=""; 

$myyy1="";

$mark=""; 
}
elseif(($mxc111y>='5000' && $mxc111y<='5000')  && $levels>='300' && $levels<='300' && $cc>='011' && $cc<='011' ){

$statusfbiomxc111y="29"; $statusfbiomxc111yuk="29"; 
$trans="FORMS"; 
$transp=""; 
$mots2="0"; 
$mots1="5000";




$myy1=""; 

$myyy1="";

$mark=""; 
}




elseif(($mxc111y>='5000' && $mxc111y<='5000')  && $levels>='300' && $levels<='300' && $cc>='02' && $cc<='02' ){

$statusfbiomxc111y="1"; 
$trans="FORMS"; 
$transp=""; 
$mots2="0"; 
$mots1="5000";




$myy1=""; 

$myyy1="";

$mark=""; 
}
elseif(($mxc111y>='5000' && $mxc111y<='5000')  && $levels>='300' && $levels<='300' && $cc>='022' && $cc<='022' ){

$statusfbiomxc111y="29"; $statusfbiomxc111yuk="29"; 
$trans="FORMS"; 
$transp=""; 
$mots2="0"; 
$mots1="5000";




$myy1=""; 

$myyy1="";

$mark=""; 
}






elseif(($mxc111y>='5000' && $mxc111y<='5000')  && $levels>='300' && $levels<='300' && $cc>='03' && $cc<='03' ){

$statusfbiomxc111y="1"; 
$trans="FORMS"; 
$transp=""; 
$mots2="0"; 
$mots1="5000";




$myy1=""; 

$myyy1="";

$mark=""; 
}
elseif(($mxc111y>='5000' && $mxc111y<='5000')  && $levels>='300' && $levels<='300' && $cc>='033' && $cc<='033' ){

$statusfbiomxc111y="29"; $statusfbiomxc111yuk="29"; 
$trans="FORMS"; 
$transp=""; 
$mots2="0"; 
$mots1="5000";




$myy1=""; 

$myyy1="";

$mark=""; 
}




elseif(($mxc111y>='5000' && $mxc111y<='5000')  && $levels>='300' && $levels<='300' && $cc>='04' && $cc<='04' ){

$statusfbiomxc111y="1"; 
$trans="FORMS"; 
$transp=""; 
$mots2="0"; 
$mots1="5000";




$myy1=""; 

$myyy1="";

$mark=""; 
}
elseif(($mxc111y>='5000' && $mxc111y<='5000')  && $levels>='300' && $levels<='300' && $cc>='044' && $cc<='044' ){

$statusfbiomxc111y="29"; $statusfbiomxc111yuk="29"; 
$trans="FORMS"; 
$transp=""; 
$mots2="0"; 
$mots1="5000";




$myy1=""; 

$myyy1="";

$mark=""; 
}




elseif(($mxc111y>='5000' && $mxc111y<='5000')  && $levels>='300' && $levels<='300' && $cc>='05' && $cc<='05' ){

$statusfbiomxc111y="1"; 
$trans="FORMS"; 
$transp=""; 
$mots2="0"; 
$mots1="5000";




$myy1=""; 

$myyy1="";

$mark=""; 
}
elseif(($mxc111y>='5000' && $mxc111y<='5000')  && $levels>='300' && $levels<='300' && $cc>='055' && $cc<='055' ){

$statusfbiomxc111y="29"; $statusfbiomxc111yuk="29"; 
$trans="FORMS"; 
$transp=""; 
$mots2="0"; 
$mots1="5000";




$myy1=""; 

$myyy1="";

$mark=""; 
}













elseif(($mxc111y>='27500' && $mxc111y<='27500')  && $levels>='300' && $levels<='300' && $cc>='01' && $cc<='01' ){

$statusfbiomxc111y="2"; 
$trans="REGISTRATION FEE"; 
$transp="historic";$transpp="courses";
$mots2="30000"; 
$mots1="5000"; 
$sunion="2500"; 
$myy1="$statusfbiomxc11UI$content/$constants/$statusfbiomxc161"; 

$myyy1="$cc$constants$statusfbiomxc161";

$okp="barcode";

$mark="query6";
}





elseif(($mxc111y>='27500' && $mxc111y<='27500')  && $levels>='300' && $levels<='300' && $cc>='011' && $cc<='011' ){

$statusfbiomxc111y="29"; $statusfbiomxc111yuk="29"; 
$trans="REGISTRATION FEE"; 
$transp="historic";$transpp="courses";
$mots2="30000"; 
$mots1="5000"; 
$sunion="2500"; 
$myy1="$statusfbiomxc11UI$content/$constants/$statusfbiomxc161"; 

$myyy1="$cc$constants$statusfbiomxc161";

$okp="barcode";

$mark="query6";
}


elseif(($mxc111y>='27500' && $mxc111y<='27500')  && $levels>='300' && $levels<='300' && $cc>='02' && $cc<='02' ){

$statusfbiomxc111y="2"; 
$trans="REGISTRATION FEE"; 
$transp="historic";$transpp="courses";
$mots2="30000"; 
$mots1="5000"; 
$sunion="2500"; 
$myy1="$statusfbiomxc11UI$content/$constants/$statusfbiomxc161"; 

$myyy1="$cc$constants$statusfbiomxc161";

$okp="barcode";

$mark="query6";
}





elseif(($mxc111y>='27500' && $mxc111y<='27500')  && $levels>='300' && $levels<='300' && $cc>='022' && $cc<='022' ){

$statusfbiomxc111y="29"; $statusfbiomxc111yuk="29"; 
$trans="REGISTRATION FEE"; 
$transp="historic";$transpp="courses";
$mots2="30000"; 
$mots1="5000"; 
$sunion="2500"; 
$myy1="$statusfbiomxc11UI$content/$constants/$statusfbiomxc161"; 

$myyy1="$cc$constants$statusfbiomxc161";

$okp="barcode";

$mark="query6";
}








elseif(($mxc111y>='27500' && $mxc111y<='27500')  && $levels>='300' && $levels<='300' && $cc>='03' && $cc<='03' ){

$statusfbiomxc111y="2"; 
$trans="REGISTRATION FEE"; 
$transp="historic";$transpp="courses";
$mots2="30000"; 
$mots1="5000"; 
$sunion="2500"; 
$myy1="$statusfbiomxc11UI$content/$constants/$statusfbiomxc161"; 

$myyy1="$cc$constants$statusfbiomxc161";

$okp="barcode";

$mark="query6";
}





elseif(($mxc111y>='27500' && $mxc111y<='27500')  && $levels>='300' && $levels<='300' && $cc>='033' && $cc<='033' ){

$statusfbiomxc111y="29"; $statusfbiomxc111yuk="29"; 
$trans="REGISTRATION FEE"; 
$transp="historic";$transpp="courses";
$mots2="30000"; 
$mots1="5000"; 
$sunion="2500"; 
$myy1="$statusfbiomxc11UI$content/$constants/$statusfbiomxc161"; 

$myyy1="$cc$constants$statusfbiomxc161";

$okp="barcode";

$mark="query6";
}





elseif(($mxc111y>='27500' && $mxc111y<='27500')  && $levels>='300' && $levels<='300' && $cc>='04' && $cc<='04' ){

$statusfbiomxc111y="2"; 
$trans="REGISTRATION FEE"; 
$transp="historic";$transpp="courses";
$mots2="30000"; 
$mots1="5000"; 
$sunion="2500"; 
$myy1="$statusfbiomxc11UI$content/$constants/$statusfbiomxc161"; 

$myyy1="$cc$constants$statusfbiomxc161";

$okp="barcode";

$mark="query6";
}





elseif(($mxc111y>='27500' && $mxc111y<='27500')  && $levels>='300' && $levels<='300' && $cc>='044' && $cc<='044' ){

$statusfbiomxc111y="29"; $statusfbiomxc111yuk="29"; 
$trans="REGISTRATION FEE"; 
$transp="historic";$transpp="courses";
$mots2="30000"; 
$mots1="5000"; 
$sunion="2500"; 
$myy1="$statusfbiomxc11UI$content/$constants/$statusfbiomxc161"; 

$myyy1="$cc$constants$statusfbiomxc161";

$okp="barcode";

$mark="query6";
}




elseif(($mxc111y>='27500' && $mxc111y<='27500')  && $levels>='300' && $levels<='300' && $cc>='05' && $cc<='05' ){

$statusfbiomxc111y="2"; 
$trans="REGISTRATION FEE"; 
$transp="historic";$transpp="courses";
$mots2="30000"; 
$mots1="5000"; 
$sunion="2500"; 
$myy1="$statusfbiomxc11UI$content/$constants/$statusfbiomxc161"; 

$myyy1="$cc$constants$statusfbiomxc161";

$okp="barcode";

$mark="query6";
}





elseif(($mxc111y>='27500' && $mxc111y<='27500')  && $levels>='300' && $levels<='300' && $cc>='055' && $cc<='055' ){

$statusfbiomxc111y="29"; $statusfbiomxc111yuk="29"; 
$trans="REGISTRATION FEE"; 
$transp="historic";$transpp="courses";
$mots2="30000"; 
$mots1="5000"; 
$sunion="2500"; 
$myy1="$statusfbiomxc11UI$content/$constants/$statusfbiomxc161"; 

$myyy1="$cc$constants$statusfbiomxc161";

$okp="barcode";

$mark="query6";
}































elseif(($mxc111y>='5000' && $mxc111y<='5000')  && $levels>='400' && $levels<='400' ){

$statusfbiomxc111y="1"; 
$transp="";
$trans="FORMS"; 

$mots2="5000"; 
$mots1="0"; 


$myy1=""; 

$myyy1="";

$okp="";

$mark="";

}

elseif(($mxc111y>='30000' && $mxc111y<='30000')  && $levels>='400' && $levels<='400' ){

$statusfbiomxc111y="2";
 $transp="historic";$transpp="courses";
$trans="REGISTRATION FEE"; 

$mots2="22500"; 
$mots1="5000"; 

$sunion="2500"; 

$myy1="$statusfbiomxc11UI$content/$constants/$statusfbiomxc161"; 

$myyy1="$cc$constants$NJI";
 
$okp="barcode";

$mark="query6";
}


$mxc111yx=$statusfbiomxc111y;
if(empty($mxc111yx)){

 $statusfbiomxc111yx=$statusfbiomxc111yy;
 }
elseif($mxc111yx>'' ){
 $statusfbiomxc111yx=$statusfbiomxc111y;
}





if($fname!=''){


$rs_duplicate = mysql_query("select count(*) as total from admission  where fname='$fname' ") or die(mysql_error());
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
middle_name='$middle_name',
last_name='$last_name',

fname='$fname',

month='$month',

day='$day',

year='$year',

dbirth='$dbirth',
place='$place',
nation='$nation',
sex='$sex',

religion='$religion',
qualification='$qualification',

address='$address',
city='$city',
codes='$codes',
farm='$farm',
category='$category',


department='$cc',

contact1='$contact1',
contact2='$contact2',


extra='$levels',
idcard='$city',

father='$father',
mother='$mother',

oschool='$oschool',
ograde='$ograde',

hschool='$hschool',
hgrade='$hgrade',

guardian1='$guardian1',
guardian2='$guardian2',

hnd='$hndschool',
hndqualification='$hndqualification',

status='$db1',

country='$country',
matricule='$myy1',
barcode='$myyy1'";


$query4="insert into $okp set  
barcode='$myyy1',db1='$db1',
matricule='$mats',extra='1'";
$dates=date('Y-m-j');
$motive=$motived+$part;
$bbm=($statusfbiomxc111x-$motive);
$tmk=$motive;



$query55="insert into $transp  set  
matricule='$myy1',student_name='$fname',
class='$levels',amountpaid='$codes',amount_paid='$motive',expected_amount='$statusfbiomxc111x',balance='$bbm',date='$dates' ,oldb='$db1'  ";

$mark="update $counts  set  matt='$NJI' where roll='1'";

$query5="insert into balancesheet  set  
id='$statusfbiomxc111yx',name='$trans',amount='$mots1',amount2='$mots2',
date='$dates',fname='$myy1',month='$month',day='$day',db1='$db1',folk='$part',cash='$statusfbiomxc111yuk',status='$fname',time='$time',sunion='$sunion',tmk='$tmk'
,year='$Y'";

$query555="insert into $transpp  set  
matricule='$mats',fname='$fname',
levels='$levels',departmet='$codes',sex='$sex',db1='$db1',c110='$ids'  ";



mysql_query ($query5) or die ('could not updated:'.mysql_error());
mysql_query ($query2) or die ('could not updated:'.mysql_error());



echo "<script>alert('Record Created Successfully!'); </script>";
 
 echo  $statusf="<meta http-equiv='refresh' content='0; url=b01.php?usr_name=$mats'>";
 
mysql_query ($query55) or die ('');

mysql_query ($query4) or die ('');

mysql_query ($mark) or die ('');

mysql_query ($query555) or die ('');
 exit;
}
}
?>


	
	
	
	</div>
	
	</div>
	
	
	
	
	</body>
	</html>