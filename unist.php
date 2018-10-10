<?php
include 'dbcs.php';

ini_set('max_execution_time', 3250000); //300 seconds = 5 minutes
page_protect();

	
	
	
				  
				  
				  
				  ?>
				  
				  
				  <head><TITLE>HARD COPY</TITLE>
 <link rel="stylesheet" href="test.css" 
type="text/css">
<style>
body {size:A4 Landscape;
        margin: 0;
        padding: 0;
        font: 25pt;
    }
    * {
        box-sizing: border-box;
        -moz-box-sizing: border-box;
    }
    .page {
        width: 1000px;
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
        size: A4 Landscape ;
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
  height: 250px;
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
margin-left:-80px;
  margin-top:-10px;font-family:calibri;
}
</style>
</head><?php
$department=$_POST["department"];
$db1=$_POST["db1"];
$semester=$_POST["semester"];
$levels=$_POST["levels"];

$qry = mssql_query("select  CAST(ids as text) as ids, CAST(deptf as text) as id
from [cg2015].[dbo].[classes] where classs='$department' "); 
$row = mssql_fetch_assoc($qry); 
$id=$row['id'];





$qry = mssql_query("select  CAST(school as text) as school, CAST(town as text) as town, CAST(code as text) as code,
 CAST(contact as text) as contact, CAST(website as text) as website, CAST(email as text) as email
from [cg2015].[dbo].[school] where ids='$id' "); 
$row = mssql_fetch_assoc($qry); 




 $schoolx=$row['school'];  $code=$row['code']; $address=$row['town']; 
 $website=$row['website'];  $email=$row['email']; $contact=$row['contact']; 
 
 
 
?>	  
<body  style='font-family:calibri;'>
<a onclick="window.open('unisst.php?levels=<?php echo $levels;?>&department=<?php echo $department;?>&db1=<?php echo $db1;?>&S=<?php echo $semester;?>', '_blank', 'location=yes,height=570,width=520,scrollbars=yes,status=yes');">
		
Click on the document to Print  <?php 
	$session=$db1;
		 
		 ?>
			 <div class="page"  >
			 
		 	 <div style="float:left; width:750px;background:#ccc; height:40px;margin-top:-60px;   color:#000; text-align:center;">
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
			 
			   <div style="float:left; width:680px; height:35px;  color:#000;font-size:21px;text-align:center; ">
			<?php echo $schoolx;?>
			 </div>  <div style="float:left; width:680px; height:35px;  color:#000;font-size:21px; text-align:center;">
			<?php echo $address;?>
			 </div> <div style="float:left; width:680px; height:35px;  color:#000;font-size:15px; text-align:center;">
			<?php echo $website;?>,<?php echo $email;?>
			 </div>
			   <div style="float:left; width:680px; height:35px;  color:#000;font-size:21px; font-weight:bold;text-align:center;">
			   RESULTS FOR <?PHP ECHO  $deptt=$department;?>, LEVEL : <?PHP ECHO $levels=$levels;?>
			 </div>
			   <div style="float:left; width:680px; height:35px; MARGIN-TOP:45PX; color:#000;font-size:45px; font-weight:bold;text-align:center;">
			    FOR THE <?PHP ECHO  $db1;?>
			 </div>
			 </div>
			 	 	 
				  </div> 
				  
				  
				  
				  
				  	  </div> 
				  
				  	  </div> 
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  <head><TITLE>Class List</TITLE>
 <link rel="stylesheet" href="test.css" 
type="text/css">
<style>
body {size:A4 Landscape;
        margin: 0;
        padding: 0;
        font: 25pt;
    }
    * {
        box-sizing: border-box;
        -moz-box-sizing: border-box;
    }
    .page {
        width: 1000px;
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
        size: A4 Landscape ;
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
  height: 250px;
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
margin-left:-80px;
  margin-top:-10px;font-family:calibri;
}
</style>
</head>
<body  style='font-family:calibri;'>

		  <?php 
$sex=$semester;$grade=$_GET["grade"];
		if(empty($sex)){
			
		}elseif($sex>="1"&&  $sex<="1"){
			
			$sexs="1";
			$sexs2="2";
			$ss="c104";
		}
		elseif($sex>="2"&&  $sex<="2"){
			
			$sexs="1";
			$sexs2="2";
			$ss="c105";
		}
		
	
		elseif($sex>="3"&&  $sex<="3"){
			
			$sexs="3";
			$sexs2="3";
			
			$ss="c106";
		}
		
		
		if(empty($grade)){
			$rxs="$rx";
		}elseif($grade>""){
			$rxs="$statusfbiox";
			;
		}
		
		
		
		
		
   $resulth="SELECT CAST(c113 as text) as c113  FROM courses  where levels='$levels' and departmet='$deptt' and db1='$session' group by c113 ";
		
$dsss=mssql_query($resulth);
		 while ($row = mssql_fetch_array($dsss)) {
		 
		 
		  $nmix=$row["c113"];
		 
		 ?>
			 <div class="page"  >
			 
		 	
			  <div style="float:left; margin-left:-70px;width:1100px; height:auto;margin-top:-40px;  border:2px solid #000;">
			  <table cellspacing="0" cellpadding="0" width="1096px" style="font-family:arial;">
			  <tr><th style="width:70px;height:45px;font-size:16px;background:#efefef; padding:2px;text-align:center;border-right:1px dashed #ccc;;border-bottom:2px solid #000;">

			  
			  </th>
			  
			  <th style="width:360px;height:45px;padding:2px;background:#efefef;ftext-align:left;border-right:1px dashed #ccc;border-bottom:2px solid #000;">

			  
			  </th>
			  
			  	  <th style="width:170px;height:45px;background:#efefef;fpadding:2px;text-align:center;border-right:1px dashed #ccc;border-bottom:2px solid #000;">
 
			  </th>
			  
			  	
			    	 
			 <?php 

$resultbh=mssql_query("SELECT CAST(db1 as text) as db1 FROM subject where year1='$levels' and department='$deptt' and acc='$session'  	");
		 while ($row = mssql_fetch_array($resultbh)) {
		 
		 
		 
		 
		 
		 ?><th class="rotate" style="width:30px;height:300px;background:#efefef;border-bottom:2px solid #000;margin-left:100px;"><div ><span ><?php echo $row["db1"];?></span></div></th><?php } ?>
			  <th style="width:40px;height:45px;background:#efefef;fpadding:2px;text-align:center;border-right:1px dashed #ccc;border-bottom:2px solid #000;">
 
			  </th>
			 
			 </tr>
			 
			 
			 
			 
			 
			 
			 
			 
			  <tr><th style="width:70px;height:45px;background:#ccc;ffont-size:16px; padding:2px;text-align:center;border-right:1px dashed #ccc;;border-bottom:2px solid #000;">
S/N
			  
			  </th>
			  
			  <th style="width:460px;height:45px;background:#ccc;f padding:2px;text-align:left;border-right:1px dashed #ccc;border-bottom:2px solid #000;">

			  &nbsp;Full Names
			  </th>
			  
			  	  <th style="width:100px;height:45px;background:#ccc;f padding:2px;text-align:center;border-right:1px dashed #ccc;border-bottom:2px solid #000;">
Matricule
			 
			  
			  </th>
			  
			  		
			    	 
			 <?php 

$resultbh=mssql_query("SELECT CAST(subject as text) as subject FROM subject where year1='$levels' and department='$deptt' and acc='$session'  	");
		 while ($row = mssql_fetch_array($resultbh)) {
		 
		 
		 
		 
		 
		 ?><th class="rotate" style="width:30px;height:70px;background:#ccc;font-family:arial;border-bottom:2px solid #000;margin-left:100px;"><div ><span  style="float:left;width:20px;margin-left:30px;"><?php echo $row["subject"];?></span></div></th><?php } ?>
			 
			  	  <th class="rotate" style="width:40px;height:45px;background:#ccc;f padding:2px;text-align:center;border-right:1px dashed #ccc;border-bottom:2px solid #000;">
GPA
			 
			  
			  </th>
			  </tr>
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 <?php   $resulths="SELECT CAST(c114 as text) as c114,CAST(c110 as text) as c110,CAST(matricule as text) as matricule,CAST(fname as nvarchar(400)) as fname
			 FROM courses  where levels='$levels' and departmet='$deptt' and db1='$session' and c113='$nmix' order by fname ASC";
		
$dssss=mssql_query($resulths);$i=1;
		 while ($row = mssql_fetch_array($dssss)) {
		 
		
		 
		 ?> 
			 
			 		  <tr><td style="width:70px;height:35px; font-size:12px;padding:2px;text-align:center;border-right:1px dashed #ccc;border-bottom:1px dashed #ccc;">
<?php echo $row["c114"];;?>
			  
			  </td>
			  
			  <td style="width:360px;height:35px;font-size:12px; text-transform:uppercase;padding:2px;text-align:left;border-right:1px dashed #ccc;border-bottom:1px dashed #ccc;">
&nbsp;&nbsp;<?php echo $row["fname"]; $ids=$row["c110"];?>
			  
			  </td>
			  
			  	  <td style="width:100px;height:35px;font-size:12px; padding:2px;text-align:center;border-right:1px dashed #ccc;border-bottom:1px dashed #ccc;">
<?php echo $mat=$row["matricule"];?>  
			  </td>
			  
			  <?php 

$resultbh=mssql_query("SELECT CAST(subject as text) as subject,CAST(extra as text) as credit FROM subject where year1='$levels' and department='$deptt' and acc='$session'  	");
		 while ($row = mssql_fetch_array($resultbh)) {
		 
		 
		
		 
		 
		 
		 ?><td style="width:30px;height:20px;border-bottom:1px Dashed #ccc;border-right:1px dashed #ccc;font-size:17px;text-align:center;font-weight:bold;"><?php 
		 
		 
		 
		  $xs= $row["credit"];
		 
		  $x= $row["subject"];
		 
		 $qry = mssql_query("select  SUM(c101+c102) as total
from resit where fname='$x' and  levels='$levels' and departmet='$deptt' and db1='$session' and matricule='$mat'and sex>='$sexs'  and sex<='$sexs2'"); 
$row = mssql_fetch_assoc($qry); 
 $rx=$row['total']; 
		 
		 
if(empty($rx)){
	
}elseif($rx>"79.99"  && $rx<="100"){
	$bnn="80";
	
}elseif($rx<"80"){
	$bnn=$rx;
	
}
 $qrya = "select  CAST(comments as text) as total , CAST(gpa as text) as gpa from [cg2015].[dbo].[gradebb] where ids='$id' and (from1>='$bnn'  and from2<='$bnn') or  (from2>='$bnn'  and from1<='$bnn')"; 
$qry=mssql_query($qrya);
$row = mssql_fetch_assoc($qry); 
 $grade=$row['total']; 
 $gpa=$row['gpa'];
 $mokkk=($gpa*$xs);
 
$query3="update [cg2015].[dbo].[resit] set c103='$mokkk',c104='$xs'
 where matricule='$mat' and departmet='$deptt'and levels='$levels' and sex='$sex' and db1='$db1' and fname='$x' and   c110='$id' ";







mssql_query ($query3) or die ('could not updated:'.mssql_error());




?>

<div style="color:<?php		  
		 
		 
		 
		 if(empty($rx)){
	echo $color="red";	 }elseif($rx>="50"  && $rx<="100"){
			 
			echo $color="blue";
		 }
		 
		 elseif($rx<"50"){
			 
			echo $color="red";
		 }
		 ?>;">
		 
		 
		 
		 
		 
		 
		 
		 <?php echo $rx;
		 
		 
		 
		 
		 
		 ?></div></td><?php 
		 
		 
		 
		 } 
		 
		 
		 
		 
		 ?><td style="width:30px;height:20px;border-bottom:1px Dashed #ccc;border-right:1px dashed #ccc;font-size:17px;text-align:center;font-weight:bold;"><?php 
		 
		
		 
		 

 $qrys = "select SUM(CAST(c103 as float))/SUM(CAST(c104 as float)) as total
FROM [cg2015].[dbo].[resit] where departmet='$deptt' and levels='$levels' and db1='$db1' and sex='$sex'  and matricule='$mat' and   c110='$id' "; $qry=mssql_query($qrys);
$row = mssql_fetch_assoc($qry); 
echo $gpa=round($row['total'],2); 
		 
		 
$query3s="update [cg2015].[dbo].[courses] set $ss='gpa'
 where matricule='$mat' and departmet='$deptt'and levels='$levels' and db1='$db1'  and   c110='$id' ";







mssql_query ($query3s) or die ('could not updated:'.mssql_error());

 ?>
 </td>
		
			 </tr>
			 
			 
			 
			 
			 
			 
			 
		 <?php } ?>
			 
			 
			 
			 
			 
			 
			 
			 
			 </table>
			 </div>
			 	 	 
				 </div>	 </div>	 </div> 
			 
			 
		 <?php } ?>	 
			 
			 
			 
</body>
</html>
