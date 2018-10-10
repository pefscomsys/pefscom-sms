<?php
include 'dbc.php';

page_protect();

 $notes=$_SESSION['user_name'];

if(@$_SESSION['userlevel']==3){header("location: login.php?msg=Unauthorized access");}

$query2="DELETE FROM gpas "



;




mysql_query ($query2) or die ('could not updated:'.mysql_error());



?>
<?php
$roll=$_GET["1"];
$query="select * from users where  full_name='$notes'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>
<?php  $ids=$row['fax'];


?><?php } ?><html>
<head>
<style>
	body{ 
background:#efefef;
		font-family:Tahoma, Geneva, sans-serif;
		font-size:18px;
	}
	</style>

<script type="text/javascript">
var popupwin = null;
function popupWin(url,name) {
popupwin = window.open(url,this.html,'width=1400,height=550,align=center');
}
if (!document.all) {
document.captureEvents (Event.CLICK);
}
document.onclick = function() {
if (popupwin != null && !popupwin.closed) {
popupwin.focus();
}
}
</script>
</head>
<body>
<div style="float:left; margin-left:10px;">
<table style=" border:1px solid silver" cellpadding="5px" cellspacing="0px" align="center" border="0" width="1150px">
<tr>
<td colspan="4" style=" color:#000; font-size:20px; background:#ffcc00;">TRANSCRIPT GENERATOR</td>
</tr>
<tr>
</tr>
<tr bgcolor="#666666" style="color:#fff;">
<td style="color:#fff">level </td>
<td style="color:#fff">Department</td>
<td style="color:#fff">View transcript</td>

</tr>

</table>
</div>

<div style="float:left; margin-left:20px;">
<?php
$roll=$_GET["1"];
$query="select * from rush where roll='1'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>
<?php $take=$row[1];

?>
<?php } ?>
<?php

$search=$_POST["search"];
$flag=0;
$query="select * from courses where  fname like '%$search%'order by roll DESC ";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 $flag=1;
		?><div style="float:left; width:1250px; height:auto;">
		  <div style="float:left; width:350px; height:25px;"><?php echo $row[2];?></div>
		<div style="float:left; width:50px; height:25px;"><?php echo $ls=$row[4];$levels=$row[4]; $rr=$row[0];?></div>
		 
		 <div style="float:left; width:250px; height:auto;"><?php echo  $row[3];$ms=$row["matricule"];  $ns=$row["c110"];  $bs=$row["db1"]; $dbs=$row["departmet"]; 
		 
		 
		echo $bs=$row["c120"];
  
		 
$qry = mysql_query("select roll as total
from courses where matricule='$ms'  and levels='400' order by roll DESC   "); 
$row = mysql_fetch_assoc($qry); 
   $saves=$row['total']; 

 
$qry = mysql_query("select db1 as total
from courses where matricule='$ms'  and levels='$ls'  and roll='$saves'  "); 
$row = mysql_fetch_assoc($qry); 
$b=$row['total']; 

$qry = mysql_query("select * FROM  courses where matricule='$ms'   "); 
$num_rows=mysql_num_rows($qry);
$x=$num_rows; 
		 
		 
		 
		 
		 
		 
		 
		 ?></div>
		 
		<div style="float:left; width:580px; height:auto;">
		
		
		
		
		
<a href="javascript:void(0);"
 NAME="My Window Name"  title=" My title here "
 onClick=window.open("<?php
		$myhu=$ls; 
		


if(empty($myhu)){
 $smyhu='';}
 
 
 
 
 
elseif($myhu>='200' && $myhu<='200' && $dbs>="ENROLLED NURSING"  && $dbs<="ENROLLED NURSING"  && $bs<$take){
 
 $GS="tanss.php?rollsps=$rr&pagetotal=$x";
 
 
 
}
 elseif($myhu>='300' && $myhu<='300' && $dbs>="ENROLLED NURSING"  && $dbs<="ENROLLED NURSING"  && $bs<$take){
 
 $GS="tanss.php?rollsps=$rr&pagetotal=$x";
 
 
 
}
 
 
 
 
 
 
 
 
 
 
elseif($myhu>='200' && $myhu<='200' && $dbs>="ENROLLED NURSING"  && $dbs<="ENROLLED NURSING"  && $bs>=$take){
 
 $GS="tanss.php?rollsps=$rr&pagetotal=$x";
 
 
 
}
 elseif($myhu>='300' && $myhu<='300' && $dbs>="ENROLLED NURSING"  && $dbs<="ENROLLED NURSING"  && $bs>=$take){
 
 $GS="tanss.php?rollsps=$rr&pagetotal=$x";
 
 
 
}
 
 
 
 
 elseif($myhu>='200' && $myhu<='200' && $dbs!="ENROLLED NURSING" &&  $ns>='16'  &&  $ns<='16' ){
 
 $GS="tanss.php?rollsps=$rr&pagetotal=$x";
 
 
 
}
 
  elseif($myhu>='300' && $myhu<='300' && $dbs!="ENROLLED NURSING" &&  $ns>='16'  &&  $ns<='16'){
 
 $GS="tanss.php?rollsps=$rr&pagetotal=$x";
 
 
 
}
 
 
  elseif($myhu>='400' && $myhu<='400' && $dbs!="ENROLLED NURSING"      &&  $ns>='16'  &&  $ns<='16'){
 
 $GS="tanss.php?rollsps=$rr&pagetotal=$x";
 
 
 
}
 
 
 
 
 
 
 
 elseif($myhu>='200' && $myhu<='200' && $dbs!="ENROLLED NURSING"    &&  $ns>='15'  &&  $ns<='15'){
 
 $GS="tansss.php?rollsps=$rr&pagetotal=$x";
 
 
 
}
 
  elseif($myhu>='300' && $myhu<='300' && $dbs!="ENROLLED NURSING"   &&  $ns>='15'  &&  $ns<='15'){
 
 $GS="tansss.php?rollsps=$rr&pagetotal=$x";
 
 
 
}
 
 
  elseif($myhu>='400' && $myhu<='400' && $dbs!="ENROLLED NURSING"   &&  $ns>='15'  &&  $ns<='15'){
 
 $GS="tansss.php?rollsps=$rr&pagetotal=$x";
 
 
 
}
 
 
 
 
 
 
 
 
 
 
?><?php echo $GS;?>");>Transcript </a>
		|
		
		<?php
 
 $myhu=$ls; 
		


if(empty($myhu)){
 $smyhu='';}
 
 
 
 
 
elseif($myhu>='200' && $myhu<='200' ){
 
 $GS="mafe.php?rollsps=$rr&pagetotal=$x";
 
 
 
}
 elseif($myhu>='300' && $myhu<='300' ){
 
 $GS="mafe2.php?rollsps=$rr&pagetotal=$x";
 
 
 
}
 
 
 
 $xcm="1";
 
  $sqlx = "SELECT * FROM courses  where matricule='$ms' order by db1 ASC ";
$results = mysql_query($sqlx);$f=1;

$ino=10;;

if(empty($plusns)){
	
	$ii=1;
	
	
}elseif($plusns>''){
	$ii=1;
	
	
}










while($row = mysql_fetch_assoc($results))
{
?>

     <?php $ff=$f++; $yp=$ii++;  $rtttt=$ino++;?>
 <?php
	$cnumber=$row["matricule"];	
	 $specs=$row["specialty"];$series=$row["series"];?>

	<?php
	
	 $pacck=$row["matricule"];
	 $number=$row["matricule"]; $center=$row["center"];$series=$row["seriescode"];$series=$row["seriescode"];
	  $codes=$row["matricule"]; $roll=$row["roll"];$cats=$row["cats"];
$qry = mysql_query("select  packn as total
from euro4 where roll='$xcm'  "); 
$row = mysql_fetch_assoc($qry); 
$packn=$row['total'];

 
$query22ds="update euro4 set ads='$pacck',packs='$number' where roll='$xcm'
";
 
mysql_query ($query22ds) or die ('could not updated:'.mysql_error());

$qry = mysql_query("select  plusn as total
from euro4 where roll='$xcm'  "); 
$row = mysql_fetch_assoc($qry); 
 $plusn=$row['total'];
 
 
$qry = mysql_query("select  packs as total
from euro4 where roll='$xcm'  "); 
$row = mysql_fetch_assoc($qry); 
 $pps=$row['total'];
 
$qry = mysql_query("select  ads as total
from euro4 where roll='1'  "); 
$row = mysql_fetch_assoc($qry); 
   $pp=$row['total'];
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
   $mxc11=$yp;
if(empty($mxc11) &&  $pp=''){
$rt="1";
$rts=$plusn+9;

$query22d="update euro4 set  
pack='$yp',packn='$rt' ,plusn='$rts',increment='$rts',ads='$pacck',computerid='$mxh' where roll='$xcm'
";
 
mysql_query ($query22d) or die ('could not updated:'.mysql_error());
 }
 
 
 
 
 
 
 
 
 
 
 
 
 elseif($mxc11<9 &&  $pp!="$pacck" ){
 $rt="1";
$rts="9";
 
$query22d="update euro4 set  
pack='$yp',packn='$rt' ,plusn='$rts',increment='$rts',ads='$pacck',computerid='$mxh' where roll='$xcm'
";
 
mysql_query ($query22d) or die ('could not updated:'.mysql_error());
 }
 elseif($mxc11>=$plusn && $mxc11<=$plusn   &&  $pp>="$pacck"  && $pp<="$pacck" ){
	 // condition when pack=20 and the subject code is the same
 $rt=$packn;
$rts=$plusn;
 
$query22d="update euro3 set  
pack='$yp',packn='$rt' ,plusn='$rts',increment='$rts',ads='$pacck',computerid='$mxh' where roll='$xcm'
";
 
mysql_query ($query22d) or die ('could not updated:'.mysql_error());
 }
 
  elseif($mxc11>$plusn   &&  $pp>="$pacck"  && $pp<="$pacck" ){ // condition when pack>20 and the subject code is the same
 $rt=$packn+1;
$rts=$plusn+9;
 
$query22d="update euro4 set  
pack='$yp',packn='$rt' ,plusn='$rts',increment='$rts',ads='$pacck',computerid='$mxh' where roll='$xcm'
";
 
mysql_query ($query22d) or die ('could not updated:'.mysql_error());
 }
 elseif($mxc11>$plusn   &&  $pp!="$pacck"   ){ // condition when pack>20 and the subject code is not the same it should start from 1
$rt="1";
$rts="9";
 
$query22d="update euro4 set  
pack='$yp',packn='$rt' ,plusn='$rts',increment='$rts',ads='$pacck',computerid='$mxh' where roll='$xcm'
";
 
mysql_query ($query22d) or die ('could not updated:'.mysql_error());
 }
 
 
 
 
 ?>
 <?php  $pacck;?><?php
 $rt;
 
?>
<?php
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
  $query22gx="update courses set  
c115='$rt',c116='$ff' where matricule='$cnumber' and roll='$roll'";
 

mysql_query ($query22gx) or die ('could not updated:'.mysql_error());

 
 
}


 
 ?>
<a href="javascript:void(0);"
 NAME="My Window Name"  title=" My title here "
 onClick=window.open("<?php echo $GS;?>?rollsps=<?php echo $rr;?>");>Detail Transcript</a>
</div></div>
<?php
		 }
		 if($flag==0)
		 echo "<tr><td colspan='3' align='center' style='color:red'>Record not found</td></tr>";
		 		 
?>