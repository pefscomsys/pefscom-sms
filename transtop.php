
		<div style="float:left; width:1170px; height: <?php 
			 
			  if(empty($c116)){
				  
			  }elseif($c116>="1" && $c116<="1"){
		echo "320";
		 
		 $bnsss=' border-bottom:1px solid #000;';
			  }elseif($c116>"1"){
		echo "90";
		 $bnsss=' border-bottom:0px solid #000;';
			  }?>px; color:#000; border:1px solid #000;margin-left:-210px;margin-top:-30px;">
			 <div style="float:left; width:1170px; height:90px; color:#000;<?php echo $bnsss;?>">
			 
			<div style="float:left; width:335px;margin-left:5px;font-family:times; font-size:14px;height:90px;white-space:wrap; padding:2px;color:#000; border-right:1px solid #000;"> 
			
			<h3 style='margin-top:0px;'><?php // line 1 header
				  
				  
				  
				  echo $school;?></h3>
			 <div style='margin-top:-25px;'>
			 <?php // line 1 header
				  
				  
				  echo $website;?> , <?php // line 1 header
				  
				  
				  echo $email;?><br>
				  <?php // line 1 header
				  
				  
				  echo $contact;?>
		 
			 
			 <?php // line 1 header
				  
				  
				  echo $email;?>
			 </div> </div>
			 	<div style="float:left; width:205px;margin-left:5px;font-family:calibri; font-size:14px;height:90px;white-space:wrap; padding:2px;color:#000; border-right:1px solid #000;"> 
			
			 	<div style="float:left; width:205px;margin-left:0px;margin-top:25px;">
			 STUDENT ACADEMIC RECORD
			 </div>
			  </div>
			 
			 
			 
			 <div style="float:left; width:300px;margin-left:0px;font-family:calibri; font-size:14px;height:90px;white-space:wrap; padding:2px;color:#000; border-right:1px solid #000;"> 
			
			 	<div style="float:left; width:300px;margin-left:-2px;height:44px;border-bottom:1px solid #000;">
			
			 	<div style="float:left; width:300px;margin-top:3px;height:44px;font-size:14px;">
				<b style="font-weight:normal; color:#000">Student's No: </b>
				<b style="font-weight:bold;font-size:16px;">  <?php echo $mats=$row['matricule'];?></b>
				</div>
			 </div>
			 <div style="float:left; font-family:calibri;width:300px;margin-top:3px;height:44px;font-size:14px;">
				<b style="font-weight:normal; color:#000">Student's Name: </b><b style="font-weight:bold;font-size:16px;">   <?php echo $fname=$row['fname'];?>
				</b></div>
			  </div>
			 
			 <div style="float:left; width:319px;height:90px;">
			 
			 <div style="float:left; width:319px;margin-left:-2px;height:46px;border-bottom:1px solid #000;">
			
			 <div style="float:left; width:150px;font-family:calibri;text-align:center;height:46px;border-right:1px solid #000;">
			 Date Printed <br> <?php echo date("d/m/Y"); ?>
			   </div>
			   
			   	 <div style="float:left; width:150px;font-family:calibri;text-align:center;height:46px;
				">
			Page <?php echo 
		 	 $c116;
	?> /<?php
	echo $x;
	
		 ?> 
			   </div>
			 </div>
			 
			 <div style="float:left; width:319px;height:46px;font-family:calibri;">
			<b style="font-weight:normal; color:#000">Other Names: </b>  
			
			 
			  </div>
			 
			 </div>
			 
			 
			 
			 
			 
			 
			 </div>
			   <?php 
			  
			  if(empty($c116)){
				  
			  }elseif($c116>="1" && $c116<="1"){
		 
		 ?>
			  <div style="float:left; width:1170px; height:50px; color:#000; border-bottom:1px solid #000;">
			 <div style="float:left; width:335px;margin-left:5px;font-family:times; font-size:14px;height:49px;white-space:wrap; padding:2px;color:#000; border-right:1px solid #000;"> 
			
			 	<div style="float:left; width:205px;margin-left:0px;margin-top:5px;">
				
			<b style="font-weight:normal; color:#000">Date of Birth: </b> <br><b style="font-weight:bold;font-size:16px;"> <?php echo $row['cxx2'];?>
			</b> </div>
			 
			  </div>
			 
			 
			 
			 <div style="float:left; width:140px;margin-left:0px;font-family:calibri; font-size:14px;height:49px;white-space:wrap; padding:2px;color:#000; border-right:1px solid #000;"> 
			
			 
			<b style="font-weight:normal; color:#000">Place of Birth: </b> <br><B style="text-transform:uppercase;font-weight:normal;"><?php echo $row['cxx1'];?></B>
			 
			 
			  </div>
			 
			 <div style="float:left; width:70px;margin-left:0px;font-family:calibri; text-transform:uppercasefont-size:14px;height:49px;white-space:wrap; padding:2px;color:#000; border-right:1px solid #000;"> 
			
			<b style="font-weight:normal; color:#000text-transform:uppercase;">Sex: </b> <br>
			<B style="text-transform:uppercase;font-weight:normal;"><b style="font-weight:bold;font-size:16px;"> <?php echo $row['sex'];?></b></B>
			 
			  </div>
			  <div style="float:left; width:300px;margin-left:0px;font-family:times;
			  text-align:center;font-size:14px;height:49px;white-space:wrap; padding:2px;color:#000
			  ; border-right:1px solid #000;"> 
			
			<b style="font-weight:normal; color:#000">School Last Attended </b>
			 
			  </div>
			 
			 	  <div style="float:left; width:319px;margin-left:0px;font-family:calibri;
			  text-align:center;font-size:14px;height:49px;white-space:wrap; padding:2px;color:#000;font-weight:normal;
			  ; "> 
			 
			 This Transcript is not valid without the signature of the Registrar and the Embossed seal of the School
			  </div>
			 <?php 
		   $deptt=$row['departmet'];
		 
		 $xxxxx=$row['c102'];
		 $level=$row['levels'];
		  $row['fname'];

		 
		 ?>
			   </div>
			
			 <div style="float:left; width:1170px; height:179px; color:#000; border-bottom:1px solid #000;">
			  <div style="float:left; width:370px; height:179px; color:#000; border-right:1px solid #000;">
			   <div style="float:left; width:370px; height:40px; color:#000; border-bottom:1px solid #000;">
			 
			<b style="font-weight:normal; color:#000">Date of Enrolment </b> 
			<b style="font-weight:bold; color:#000;"><?php 

		 
$qrya= mssql_query("select  CAST(c116 as nvarchar(400))  as total
from [cg2015].[dbo].[courses] where  departmet='$deptt'  and matricule='$mats'  order by c116 DESC 

 
 OFFSET 0 ROWS
                          FETCH NEXT  1 ROWS ONLY
"); 
$row = mssql_fetch_assoc($qrya); 

$send=$row['total'];
		
		 
		 
		 
		 
		 
$qrya= mssql_query("select  CAST(db1 as nvarchar(400))  as total
from [cg2015].[dbo].[courses] where  departmet='$deptt'  and matricule='$mats'   and c116='$send'
"); 
$row = mssql_fetch_assoc($qrya); 

$end=$row['total'];
		
		 
		 
		 
		 
		 
		 
		 
 $qryas= "select  CAST(db1 as nvarchar(400))  as total
from [cg2015].[dbo].[courses] where  departmet='$deptt'  and matricule='$mats' and c120='1'  ";$qrya=mssql_query($qryas); 
$row = mssql_fetch_assoc($qrya); 

 $starts=$row['total'];
 
		 $start=  substr("$starts",0,4);
		 $end2=$row['total2'];

		 
$qrya= mssql_query("select  count(*)  as total
from [cg2015].[dbo].[courses] where  departmet='$deptt'  and matricule='$mats' and levels='$cx'  "); 
$row = mssql_fetch_assoc($qrya); 

 $xgb=$row['total'];
	if(empty($xgb)){

 $end=$end2;


	}elseif($xgb>''){

	
		 
$qryas= mssql_query("select  CAST([level] as text)  as total
from [cg2015].[dbo].[classes] where  classs='$deptt'  and ids='$id'  


 "); 
$row = mssql_fetch_assoc($qryas); 

 $cx=$row['total'];
		 
$qrya= mssql_query("select  CAST(db1 as nvarchar(400))  as total
from [cg2015].[dbo].[courses] where  departmet='$deptt'  and matricule='$mats' and levels='$cx'  order by db1 desc


 "); 
$row = mssql_fetch_assoc($qrya); 

 $ends=$row['total'];
		
		 $end=  substr("$ends",5,4);
	} 
		 
		 ?>  Oct <?php echo $start;?>  to July <?php echo $end;?> </b>
			   </div>
			    <div style="float:left; width:370px; height:auto;font-weight:normal; color:#000;">
					<div style="float:left; width:370px; font-weight:normal;height:40px; color:#000;">
			 Faculty/School: <b style="font-weight:bold;font-size:14px;"> <?php 
$qrya= mssql_query("select CAST(facultydesc as text)  as total
from [cg2015].[dbo].[faculty] where  facultyid='$id'   "); 
$row = mssql_fetch_assoc($qrya); 

 echo $xgb=$row['total'];;?></b>
			   </div>
			   </div>
			   <div style="float:left; width:370px; font-weight:normal;height:24px; color:#000;">
			 Department: <b style="font-weight:bold;font-size:14px;"> <?php echo $deptt;?></b>
			   </div>
			  
			   
			   <div style="float:left; width:370px; font-weight:normal;height:24px; color:#000;">
			 Degree Proposed: <b style="font-weight:bold;font-size:14px;"> <?php 
			 
			 
			 $qryas= "select  CAST(ids as text)  as total,CAST(deptf as text)  as deptf,
			 CAST(confered as text)  as confered,CAST(propose as text)  as propose
from [cg2015].[dbo].[classes] where   classs='$deptt'  and ids='$id'   ";$qrya=mssql_query($qryas); 
$row = mssql_fetch_assoc($qrya); 

  $fid=$row['total'];
			 
			 

 echo  $propose=$row['propose']; $confered=$row['confered'];	?></b>
			   </div>
			  
			   
			   <div style="float:left; width:370px; font-weight:normal;height:24px; color:#000;">
			 Degree Confered: <b style="font-weight:bold;font-size:14px;"> <?php echo $confered;?></b>
			   </div>
		
			   
			   <div style="float:left; width:370px; font-weight:normal;height:30px; color:#000;">
			
			   
			 </div>
			 
			 </div>
			 
			   <div style="float:left; width:180px; height:179px; color:#000; border-right:1px solid #000;">
			 
			 
			   <div style="float:left; width:180px; height:40px; color:#000; text-align:center;">
			   Student's Address 
			   </div>
			   
			   
			   
			   
			   
			   
			 
			   </div><div style="float:left; width:180px; height:179px; color:#000; border-right:1px solid #000;">
			 
			  <div style="float:left; width:180px; height:40px; color:#000;text-align:center; ">
			   Parent's Address 
			   </div>
			 
			   </div><div style="float:left; width:120px; height:179px; color:#000; border-right:1px solid #000;">
			 
			   <div style="float:left; width:110px; height:40px; color:#000;text-align:center; ">
			  Remarks
			   </div>
			 </b>
			 
			   </div>
			 
			 
			 
			 <div style="float:left; width:319px; height:179px; color:#000; ">
		 <div style="float:left; width:200px;font-family:arial;font-size:14px; height:25px; color:#000;text-align:center;margin-left:-30px;">
		<u><b>	Grade System</b></u></b>
			 
			 
			 </div>
			 
			 <?php 


$querys = mssql_query("select  CAST(comments as text) as comments,

CAST(from1 as text) as from1,
CAST(from2 as text) as from2,
CAST(gpa as text) as gpa

 from [cg2015].[dbo].[gradebb] where ids='$id'"); 

		 while ($row = mssql_fetch_array($querys)) {
		 
		 
		 
		 
		 
		 ?>
		  <div style="float:left; width:235px;height:18px;">

		  	  <div style="float:left; width:18px;font-family:arial;font-size:14px; height:20;margin-left:10px;
		  ">
		  <?php echo $row['comments'];?> : 
		  
		 </div> 
		  
 <div style="float:left; width:125;font-family:arial;font-size:14px; height:18px;margin-left:5px;
		  ">
		  <?php echo $row['from1'];?> -
		  <?php echo $row['from2'];?> %
		  <?php echo  $row['gpa'];;?>GP
		  
		 </div> </div> 
		 <?php } ?>
		  
			
		  </table>
		  
			 
			   </div>
			  
			   </div>
			  
			  <?php } ?>
			  