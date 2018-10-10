<?php
include 'dbcs.php';

page_protect();

	
	
	
				  
				  
				  
				  ?>
				  <head><TITLE>Class List</TITLE>
 <link rel="stylesheet" href="test.css" 
type="text/css">
<style>
body {size:A4 ;
        margin: 0;
        padding: 0;
        font: 25pt;
    }
    * {
        box-sizing: border-box;
        -moz-box-sizing: border-box;
    }
    .page {
        width: 750px;
        min-height: 47.7cm;
        padding: 2cm;
        margin: 1cm auto;
        background: white;
    }
    .subpage {
        padding: 1cm;
        border: 5px black solid;
        height: 237mm;
        outline: 2cm #000 solid;
    }
    
    @page {
        size: A4  ;
        margin: 0;
    }
    @media print {
        .page {
            margin: 0;
            border: initial;
            border-radius: initial;
            width: initial;
            min-height: initial;
            box-shadow: initial;
            background: initial;
            page-break-after: always;
        }
    }



th.rotate {
  /* Something you can count on */
  height: 150px;
  white-space: nowrap;
  padding:1px;
}

th.rotate > div {
	font-weight:normal;
  transform: 
    /* Magic Numbers */
    translate(2px, 51px)
    /* 45 is really 360 - 45 */
    rotate(270deg);font-family:calibri;
  width: 24px;
}
th.rotate > div > span {
  border-bottom: 1px solid #ccc;
margin-left:-40px;
  margin-top:-10px;font-family:calibri;
}
</style>
</head><?php
$roll=$_GET["1"];
$query="select * from school where roll='1'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
?>

<?php  $school=$row[1];
$school2=$row[2];
?>
<?php } ?><?php
$roll=$_GET["1"];
$query="select * from school where roll='2'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
?>

<?php  $schoolx=$row[1];
$school2x=$row[2];
?>
<?php } ?>
				  
<body  style='font-family:calibri;'>

	
		 	 	  <?php 
		  $session=$_POST["session"]; $deptt=$_POST["department"]; $levels=$_POST["levels"];
   
		 ?>
			 <div class="page"  >
			 
		 	 <div style="float:left; width:750px;background:#ccc; height:40px;margin-top:-60px;margin-left:0px;   color:#000; text-align:center;">
		 	 <div style="float:left; width:180px; height:35px; color:#000; text-align:center;">
			 
			 </div>
			 
		 	 <div style="float:left;border-bottom:1px double #000;margin-top:-2px; border-top:1px solid #000; width:400px; height:40px; color:#000; ">
		 	 <div style="float:left;border-bottom:1px double #000; border-top:1px solid #000; width:400px; margin-top:1px;height:41px; color:#000; ">
			
		 	 <div style="float:left;width:750px;text-align:center; Height:35px;margin-left:-200px; font-size:25px;"> <b style="font-size:25px;"> <?php echo $school;?></B>
			 </div>


			 </div>
			  <div style="float:left; width:180px; height:35px;  color:#000; text-align:center;">
			 
			 </div>
			 </div>
			  <div style="float:left; width:750px; height:50px;margin-top:10px;  ">
			  <div style="float:left; width:70px; height:55px; color:#000; text-align:center;">
			 <img src="logo.png" width="100px" height="80px;">
			 </div>
			 
			 
			   <div style="float:left; width:680px; height:50px; margin-left:-20px;font-family:calibri; color:#000; ">
			 
			   <div style="float:left; width:680px; height:35px;  color:#000;font-size:21px; ">
			<?php echo $schoolx;?>
			 </div>
			   <div style="float:left; width:680px; height:25px;  color:#000;font-size:21px; font-weight:bold;MARGIN-LEFT:-50PX;">
			   CLASS LIST FOR <?PHP ECHO $deptt;?>, LEVEL : <?PHP ECHO $levels;?>
			 </div>
			 
			 </div>
			 	 	 
			 
<?php		
	
 $catss=$_POST["barcode"];$sex=$_POST["sex"];$grade=$_POST["grade"];
$barcode=$_POST["barcode"];echo $specialty=$_POST["specialty"];

$acomcentercode=$_POST["acomcentercode"];

	
$bb=$subcount;
	
	
	$xcm=1;
	
	
?>
	
	<?php $sqlb = "SELECT *  FROM courses  where levels='$levels' and departmet='$deptt' and db1='$session' order by fname ASC ";
$resultss = mysql_query($sqlb);$f=1;

$ino=10;;

if(empty($plusns)){
	
	$ii=1;
	
	
}elseif($plusns>''){
	$ii=1;
	
	
}
while($row = mysql_fetch_assoc($resultss))
{
?>

     <?php $ff=$f++; $yp=$ii++;  $rtttt=$ino++;?>
<?php
	$cnumber=$row["candnumber"];	
	 $specs=$row["specialty"];$series=$row["series"];?>
	
	<?php
	 $email=$row["email"];
	 $cnumber=$row["matricule"]; $deptt=$row["departmet"];$session=$row["db1"];$series=$row["seriescode"];
	  $codes=$row["codes"]; $roll=$row["roll"];$cats=$row["cats"];$codes=$row["codes"];$catss=$row["cats"];$specialtyh=$row["codes"];
$qry = mysql_query("select  packn as total
from euro4 where roll='1'  "); 
$row = mysql_fetch_assoc($qry); 
$packn=$row['total'];

 
$query22ds="update euro4 set ads='$pacck',packs='$number' where roll='1'
";
 
mysql_query ($query22ds) or die ('could not updated:'.mysql_error());

$qry = mysql_query("select  plusn as total
from euro4 where roll='1'  "); 
$row = mysql_fetch_assoc($qry); 
 $plusn=$row['total'];
 
 
$qry = mysql_query("select  packs as total
from euro4 where roll='1'  "); 
$row = mysql_fetch_assoc($qry); 
 $pps=$row['total'];
 
$qry = mysql_query("select  ads as total
from euro4 where roll='1'  "); 
$row = mysql_fetch_assoc($qry); 
   $pp=$row['total'];
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
   $mxc11=$yp;
if(empty($mxc11) &&  $pp=''){
$rt="1";
$rts=$plusn+10;

$query22d="update euro4 set  
pack='$yp',packn='$rt' ,plusn='$rts',increment='$rts',ads='$pacck',computerid='$mxh' where roll='$xcm'
";
 
mysql_query ($query22d) or die ('could not updated:'.mysql_error());
 }
 
 
 
 
 
 
 
 
 
 
 
 
 elseif($mxc11<10 &&  $pp!="$pacck" ){
 $rt="1";
$rts="10";
 
$query22d="update euro4 set  
pack='$yp',packn='$rt' ,plusn='$rts',increment='$rts',ads='$pacck',computerid='$mxh' where roll='$xcm'
";
 
mysql_query ($query22d) or die ('could not updated:'.mysql_error());
 }
 elseif($mxc11>=$plusn && $mxc11<=$plusn   &&  $pp>="$pacck"  && $pp<="$pacck" ){
	 // condition when pack=20 and the subject code is the same
 $rt=$packn;
$rts=$plusn;
 
$query22d="update euro4 set  
pack='$yp',packn='$rt' ,plusn='$rts',increment='$rts',ads='$pacck',computerid='$mxh' where roll='$xcm'
";
 
mysql_query ($query22d) or die ('could not updated:'.mysql_error());
 }
 
  elseif($mxc11>$plusn   &&  $pp>="$pacck"  && $pp<="$pacck" ){ // condition when pack>20 and the subject code is the same
 $rt=$packn+1;
$rts=$plusn+10;
 
$query22d="update euro4 set  
pack='$yp',packn='$rt' ,plusn='$rts',increment='$rts',ads='$pacck',computerid='$mxh' where roll='$xcm'
";
 
mysql_query ($query22d) or die ('could not updated:'.mysql_error());
 }
 elseif($mxc11>$plusn   &&  $pp!="$pacck"   ){ // condition when pack>20 and the subject code is not the same it should start from 1
$rt="1";
$rts="10";
 
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
c113='$rt' ,c114='$ff' where matricule='$cnumber' and  db1='$session' and departmet='$deptt' 

";
 

mysql_query ($query22gx) or die ('could not updated:'.mysql_error());

 
 
}


echo  $statusf="<meta http-equiv='refresh' content='0; url=classlistallsx.php?deptt=$deptt&levels=$levels&session=$session&sex=$sex&grade=$grade'>";

?>
			  
			 
			 
			 
			 
			 
			 
			 
			 
			 
</body>
</html>
