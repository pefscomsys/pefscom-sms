
		<div style="float:left; width:1170px; height:320px; color:#000; border:1px solid #000;margin-left:-50px;margin-top:-30px;">
			 <div style="float:left; width:1170px; height:90px; color:#000; border-bottom:1px solid #000;">
			 
			<div style="float:left; width:335px;margin-left:5px;font-family:times; font-size:14px;height:90px;white-space:wrap; padding:2px;color:#000; border-right:1px solid #000;"> 
			
			<?php // line 1 header
				  
				  
				  
				  echo $school6;?>
			 
			 <?php // line 1 header
				  
				  
				  echo $school6bx;?> 
		 
			 
			 
			 </div>
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
			 Date Printed
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
			  text-align:center;font-size:14px;height:49px;white-space:wrap; padding:2px;color:#000
			  ; "> 
			 
			 This Transcript is not valid without the signature of the Registrar and the Embossed seal of the School
			  </div>
			 <?php 
		   $deptt=$row['departmet'];
		 $xxxx=$row['c102'];
		 $level=$row['levels'];
		  $row['fname'];
		 $deptt=$row['departmet'];
$qry = mysql_query("select from1  as total
from duration where extra='$deptt'  "); 
$row = mysql_fetch_assoc($qry); 
$savesd=$row['total'];


$qry = mysql_query("select diploma  as total
from matsub where mgg='$deptt'  "); 
$row = mysql_fetch_assoc($qry); 
 $diploma=$row['total'];
		  
$qry = mysql_query("select prefix  as total
from matsub where mgg='$deptt'  "); 
$row = mysql_fetch_assoc($qry); 
$prefix=$row['total'];
		 
$qry = mysql_query("select conferred  as total
from matsub where mgg='$deptt'  "); 
$row = mysql_fetch_assoc($qry); 
$conferred=$row['total'];
		$qry = mysql_query("select extra2  as total
from duration where extra='$deptt'  "); 
$row = mysql_fetch_assoc($qry); 
$savesds=$row['total'];
		  
		 
		$qry = mysql_query("select fc  as total
from matsub where mgg='$deptt'  "); 
$row = mysql_fetch_assoc($qry); 
$ss=$row['total'];
		 
		$qry = mysql_query("select comment  as total
from faculty where id='$ss'  "); 
$row = mysql_fetch_assoc($qry); 
$sss=$row['total'];  
		 
		 ?>
			   </div>
			 
			 <div style="float:left; width:1170px; height:179px; color:#000; border-bottom:1px solid #000;">
			  <div style="float:left; width:370px; height:179px; color:#000; border-right:1px solid #000;">
			   <div style="float:left; width:370px; height:40px; color:#000; border-bottom:1px solid #000;">
			 
			<b style="font-weight:normal; color:#000">Date of Enrolment </b> 
			<b style="font-weight:bold; color:#000;"><?php 
		 $qry = mysql_query("select c101  as total
from courses where departmet='$deptt'  and matricule='$mats' and levels='200' "); 
$row = mysql_fetch_assoc($qry); 
$start=$row['total'];
		 
		
	$mmn=$deptt;	 
if(empty($mmn)){
 $statusfmmn="";
 }
 elseif($mmn='ENROLLED NURSING'){
 $statusfmmnyyuyyuy="300";

}
	 elseif($mmn='Pharmacy Assistant'){
 $statusfmmnyyuyyuy="200";
}	 
	 elseif($mmn='MEDICAL SALES'){
 $statusfmmnyyuyyuy="200";

}
	 elseif($mmn='MEDICAL SECRETARIAL'){
 $statusfmmnyyuyyuy="200";
$statusfmmn=$ny2;
}		 elseif($mmn='Radiology Assistant'){
 $statusfmmnyyuyyuy="200";

}	 



 elseif($mmn='Aged Care'){
 $statusfmmnyyuyyuy="200";

}	 
		 
			 $qry = mysql_query("select c102  as total
from courses where departmet='$deptt'  and matricule='$mats' and levels='$statusfmmnyyuyyuy' "); 
$row = mysql_fetch_assoc($qry); 
 $end=$row['total'];	

 $mmnfd=$end;
	if(empty($mmnfd)){
 $statusfmmnfd=$start;
 }	
elseif($mmnfd>''){
	 $statusfmmnfd=$end;
	
}
		
		 
		 
		 ?>1<sup>st</sup> of Oct <?php echo $start;?>  to July, 31<sup>st</sup> <?php   
		 $ghs=$start;
	$mmn=$deptt;	 
if(empty($mmn)){
 $statusfmmn="";
 }
 elseif($mmn='ENROLLED NURSING'){
 $ny1=$ghs+2;
$statusfmmn=$ny1;
}
	 elseif($mmn='Pharmacy Assistant'){
 $ny2=$ghs+0;
$statusfmmn=$ny2;
}	 
	 elseif($mmn='MEDICAL SALES'){
 $ny2=$ghs+0;
$statusfmmn=$ny2;
}
	 elseif($mmn='MEDICAL SECRETARIAL'){
 $ny2=$ghs+0;
$statusfmmn=$ny2;
}		 elseif($mmn='Radiology Assistant'){
 $ny2=$ghs+0;
$statusfmmn=$ny2;
}	 



 elseif($mmn='Aged Care'){
 $ny2=$ghs+0;
$statusfmmn=$ny2;
}	 








echo $xxxx; ?></b>
			   </div>
			    <div style="float:left; width:370px; height:30px;font-weight:normal; color:#000;">
			<b style="font-weight:bold;font-size:16px;"> <?php echo $sss;?></b>
			   </div>
			   <div style="float:left; width:370px; font-weight:normal;height:30px; color:#000;">
			 Department: <b style="font-weight:bold;font-size:16px;"> <?php echo $diploma;?></b>
			   </div>
			  <div style="float:left; width:370px; font-weight:normal;height:30px; color:#000;">
			 Degree Proposed: <b style="font-weight:bold;font-size:16px;"><?php echo $prefix;?> </b>
			   </div>
			   
			     <div style="float:left; width:370px;font-weight:normal; height:30px; color:#000;">
			 Degree Conferred: <b style="font-weight:bold;font-size:16px;"><?php echo $conferred;?> </b>
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
			 
			 
			   </div>
			 
			 
			 
			 <div style="float:left; width:319px; height:179px; color:#000; ">
		 <div style="float:left; width:200px;font-family:arial;font-size:14px; height:25px; color:#000;text-align:center;margin-left:-30px;">
		<u><b>	Grade System</b></u>
			 
			 
			 </div>
			 
			 	 <div style="float:left; width:200px; height:auto;margin-left:15px;">
			<table cellspacing="1" cellpadding="0" width="250px" style="float;left;margin-left:5px;margin-top:-5px;font-size:13px;">
			<?php 


$query = mysql_query("select  * from gradeb where ids='$ids' order by extra DESC "); 

		 while ($row = mysql_fetch_array($query)) {
		 
	
		 
		 ?>
			
			
			<tr><td style="width:40px;">
		  <?php echo $gpa=$row['comments'];?> : 
		  
		 </td><td style=" width:160px;font-family:arial; height:10px;
		  ">
		  <?php echo $gpa=$row['from1'];?> -
		<?php echo $gpa=$row['from2'];?> %
		 <?php echo $gpa=$row['extra'];?>GP
		  
		 </td> <td><?php echo $gpa=$row['sm'];?></td></tr>
		 <?php } ?>
			
					 
			
			
				
			
			
			
			
			
					  <tr><td  style="font-size:12px;width:40px;">
		
		  
</td><td style="width:125;font-family:arial;height:10px;
		  ">
		  C:   Compulsory, R:School Requirement
		   
		 </td><td> 
		 
		  </td>
			</tr>
			
			
			
			
		  </table>
		  
			 
			   </div>
			 
			   </div>