
		
		 <div style="float:left; width:1180px; height:650px; margin-top:-40px;">
			 
			 
			
			  <div style="float:left; width:589px; height:auto;color:#000;">
			  
			  
					
 <?php 


$query = mysql_query("select  * from courses where matricule='$mats' and departmet='$deptt' and c115='$c115'  and c116='$c116' group by db1"); 

		 while ($row = mysql_fetch_array($query)) {
		 
		$db1s=$row["db1"];
		 
		 $levels=$row["levels"];
		 
		 ?>
			 
			 		 <div style="float:left; width:589px; height:auto; color:#000;margin-left:9px; ">
					 <table width="580px" cellpadding="0" cellspacing="0" style="font-size:11px;white-space:wrap;font-family:times;">
					 
			 <tr><td style="width:50px; height:15px;">
			 
			  </td> 
			  <td style=" width:250px; height:15px; color:#000;">

			
<b style="width:380px; height:15px;background:#fff;font-weight:bold;font-size:12px;">First Semester  <?php 


?><?php
		
 
echo $db1s; 
		 
 
		 ?>
		 
 </b>
			  </td> 
			 	 <td style="width:40px; height:15px; color:#000; margin-left:-5px;">
			 
			
			  </td> 
			  <td style=" width:40px; height:15px; color:#000; ">
			
			 
			  </td> 
			  <td style=" width:40px; height:15px; color:#000; "> </td> 
			  <td style=" width:40px; height:15px; color:#000; "> </td> 
			  </tr>
				<?php 


$query = mysql_query("select  * from resit where db1='$db1s'  and matricule='$mats' and departmet='$deptt' and sex='1' and levels='$levels' order by fname ASC"); 

		 while ($row = mysql_fetch_array($query)) {
		 
		 
		 
		 
		 
		 ?><tr><td style="width:50px; height:15px;">
			 		
			 <?php echo $courseps=$row['fname'];
		
		
		$exam=$row['c102'];
		
		$cas=$row['c101'];?>
			 
			  </td> 
			  <td style=" width:270px; height:15px; color:#000;">
			 <?php 
$qry = mysql_query("select  db1 as total
from subject where subject='$courseps' "); 
$row = mysql_fetch_assoc($qry); 
echo $richooTTT=$row['total']; 

$qry = mysql_query("select  credit as total
from credits where subject='$courseps' "); 
$row = mysql_fetch_assoc($qry); 

$richooTTTy=$row['total']; 



$qry = mysql_query("select  status as total
from credits where subject='$courseps' "); 
$row = mysql_fetch_assoc($qry); 

$status=$row['total']; 
?>
			 
			  </td> 
			 	 <td style="width:40px; height:15px; color:#000; margin-left:-5px;">
			 
			 <?php echo $status;?>
			  </td> 
			  <td style=" width:40px; height:15px; color:#000; ">
			 <?php echo $richooTTTy;?>
			 
			  </td> 
			  <td style=" width:60px; height:15px; color:#000; ">
			 	<?php $ns=
($exam+$cas); 












$mxc11=$ns;






 if(empty($mxc11)){
 $colorf1bio="red";
 $statusfbio=$c1d;
 echo '<div style=" color:'. $colorf1bio.';">'.$statusfbio.'</div>';}
elseif($mxc11>=$rangx1 && $mxc11<=$rangx2 ){
 $colorf1bio="#FF0000";
 $statusfbio=$c1d;
  echo'<div style=" color:'. $colorf1bio.';">'.$statusfbio.'</div>';
}else if(($mxc11 >=$rangx3) && ($mxc11<=$rangx4)){
 $colorf1bio="blue";
 $statusfbio=$c2d;
  echo'<div style=" color:'. $colorf1bio.';">'.$statusfbio.'</div>';}else if(($mxc11 >=$rangx5) && ($mxc11<=$rangx6)){
 $colorf1bio="blue";
 $statusfbio=$c3d;
  echo'<div style=" color:'. $colorf1bio.';">'.$statusfbio.'</div>';}
 
 
else if(($mxc11 >=$rangx7) && ($mxc11<=$rangx8)){
 $colorf1bio="blue";
 $statusfbio=$c4d;
  echo'<div style=" color:'. $colorf1bio.';">'.$statusfbio.'</div>';}
 
 
 else if(($mxc11 >=$rangx9) && ($mxc11<=$rangx10)){
 $colorf1bio="blue"; $statusfbio=$c5d;  echo '<div style=" color:'. $colorf1bio.';">'.$statusfbio.'</div>';
} 
 
 
 
 else if(($mxc11 >=$rangx11) && ($mxc11<=$rangx12)){
 $colorf1bio="blue"; $statusfbio=$c6d;  echo'<div style=" color:'. $colorf1bio.';">'.$statusfbio.'</div>';
} 
 
  
 else if(($mxc11 >=$rangx11) && ($mxc11<=$rangx12)){
 $colorf1bio="blue"; $statusfbio=$c7d;  echo'<div style=" color:'. $colorf1bio.';">'.$statusfbio.'</div>';
} 
 
 
  
 else if(($mxc11 >=$rangx11) && ($mxc11<=$rangx12)){
 $colorf1bio="blue"; $statusfbio=$c8d;  echo'<div style=" color:'. $colorf1bio.';">'.$statusfbio.'</div>';
} 
 
 
 
 
 
 
 
 
 
  $mxc11=$ns;
if(empty($mxc11)){
 $colorf1bio="yellow";$statusfbiox="0.0";
 $statusfbio="0.0";}
elseif($mxc11>=$rangx1 && $mxc11<=$rangx2 ){
 $colorf1bio="#FF0000";$statusfbiox=$gpa1;
 $statusfbio=$gpa1; 
}else if(($mxc11 >=$rangx3) && ($mxc11<=$rangx4)){
 $colorf1bio="blue";$statusfbiox=$gpa2;
 $statusfbio=$gpa2;}
 
 else if(($mxc11 >=$rangx5) && ($mxc11<=$rangx6)){
 $colorf1bio="blue";$statusfbiox=$gpa3;
 $statusfbio=$gpa3; }
 
 
else if(($mxc11 >=$rangx7) && ($mxc11<=$rangx8)){
 $colorf1bio="blue";$statusfbiox=$gpa4;
 $statusfbio=$gpa4; }
 
 
 else if(($mxc11 >=$rangx9) && ($mxc11<=$rangx10)){
 $colorf1bio="blue"; $statusfbio=$gpa5; $statusfbiox=$gpa5; 
} 
 
 
 
 else if(($mxc11 >=$rangx11) && ($mxc11<=$rangx12)){
 $colorf1bio="blue"; $statusfbio=$gpa6; $statusfbiox=$gpa6; 
} 
 
  else if(($mxc11 >=$rangx13) && ($mxc11<=$rangx14)){
 $colorf1bio="blue"; $statusfbio=$gpa7; $statusfbiox=$gpa7; 
} 
 
 
  else if(($mxc11 >=$rangx15) && ($mxc11<=$rangx16)){
 $colorf1bio="blue";  $statusfbiox=$gpa8; 
 $statusfbio=$gpa8; 
} 

$statusfbiox=$statusfbio;


$query33="update resit set c104='$richooTTTy',c103='$statusfbio',c106='$statusfbiox'
 where matricule='$mats' and departmet='$deptt'and levels='$levels' and sex='1' and db1='$db1s' and fname='$courseps'";








mysql_query ($query33) or die ('could not updated:'.mysql_error());

$qry = mysql_query("select sum(c103) as total
from resit where matricule='$mats' and departmet='$deptt'and levels='$levels' and sex='1' and db1='$db1s'  "); 
$row = mysql_fetch_assoc($qry); 
  $credit=$row['total']; 
 
$qry = mysql_query("select sum(c104) as total
from resit where matricule='$mats' and departmet='$deptt'and levels='$levels' and sex='1' and db1='$db1s'  "); 
$row = mysql_fetch_assoc($qry); 
   $total1=$row['total']; 


$qry = mysql_query("select * FROM  resit where matricule='$mats' and departmet='$deptt'and levels='$levels' and sex='1' and db1='$db1s'  "); 
$num_rows=mysql_num_rows($qry);
 $total2=$num_rows; 

$mxc002=$save;
















				    
				  
$qry = mysql_query("select fname as total
from gpa where matricule='$mats' and departmet='$deptt'  and  fname='$courseps'"); 
$row = mysql_fetch_assoc($qry); 
 $xdf=$row['total']; 
 







$mxc002sstds=$xdf;
if(empty($mxc002sstds)){

$query33x="insert into gpa set fname='$courseps',c101='$cas',c102='$exam',c104='$richooTTTy',c103='$statusfbio',
matricule='$mats' , departmet='$deptt', levels='200' , sex='1' , db1='$db1s' ";










mysql_query ($query33x) or die ('could not updated:'.mysql_error());
 }
	elseif($mxc002sstds>''){			  
				  
			
$query33x="update gpa set c101='$cas',c102='$exam',c104='$richooTTTy',c103='$statusfbio' where
matricule='$mats' and departmet='$deptt' and  fname='$courseps'";










mysql_query ($query33x) or die ('could not updated:'.mysql_error());	  


	}			  










 ?>
			 
			  </td> 
			  <td style=" width:40px; height:15px; color:#000; ">
			 	<?php   $mxccredit=$ns;
if(empty($mxccredit)){
 $colorf1bio="yellow";
 $statusfbiocredit=""; echo $statusfbiocredit='0';}
elseif($mxccredit<50){
 
 echo $statusfbiocredit='0';
 
}
elseif($mxccredit>=50){
 
 echo $statusfbiocredit=$richooTTTy;
 
}

$querypps="update resit set c105='$statusfbiocredit'
 where matricule='$mats' and departmet='$deptt' and levels='$levels' and sex='1' and db1='$db1s' and fname='$courseps'";




mysql_query ($querypps) or die ('could not updated:'.mysql_error());

$qry = mysql_query("select sum(c105) as total
from resit where matricule='$mats' and departmet='$deptt'and levels='$levels' and sex='1' and db1='$db1s'  "); 
$row = mysql_fetch_assoc($qry); 
    $totalc=$row['total']; 
	

$queryppss="update courses set cxx11='$totalc'
 where matricule='$mats' and departmet='$deptt' and levels='$levels'  and db1='$db1s' ";




mysql_query ($queryppss) or die ('could not updated:'.mysql_error());



$qry = mysql_query("select sum(cxx11) as total
from courses where matricule='$mats' and departmet='$deptt'and levels='$levels' and sex='1' and db1='$db1s'  "); 
$row = mysql_fetch_assoc($qry); 
   echo  $c=$row['total']; 


				  
$qry = mysql_query("select SUM(c101+c102) as total
from gpa where matricule='$mats' and departmet='$deptt'  and  fname='$courseps' "); 
$row = mysql_fetch_assoc($qry); 
 $xdfs=$row['total']; 
 



$mxc0v=$xdfs;
if(empty($mxc0v)){
 }elseif($mxc0v>''  && $mxc0v>="50"  && $mxc0v<="100"  && $mxc0v>$ns){
	 
	$bm=(($ns+$xdfs)/2);
	
	if(empty($bm)){
		
	}ELSEIF($bm<50){
		$sc="50";
		
	}
	 ELSEIF($bm>=50){
		$sc=$bm;
		
	}
	 
 }
 elseif($mxc0v>''  && $mxc0v<"50"    && $mxc0v<$ns){
	 
	$bm=(($ns));
	
	if(empty($bm)){
		
	}ELSEIF($bm<50){
		$sc=$bm;
		
	}
	 ELSEIF($bm>=50){
		$sc=$bm;
		
	}
	 
 }
 
 
 
 elseif($mxc0v>''  && $mxc0v<"50"    && $mxc0v>$ns){
	 
	$bm=(($mxc0v));
	
	if(empty($bm)){
		
	}ELSEIF($bm<50){
		$sc=$bm;
		
	}
	 ELSEIF($bm>=50){
		$sc=$bm;
		
	}
	 
 }
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 $mxc11=$sc;
 

 
if(empty($mxc11)){
 $colorf1bio="red";
 $statusfbio=$c1d;
  '<div style=" color:'. $colorf1bio.';">'.$statusfbio.'</div>';}
elseif($mxc11>=$rangx1 && $mxc11<=$rangx2 ){
 $colorf1bio="#FF0000";
 $statusfbio=$c1d;
 '<div style=" color:'. $colorf1bio.';">'.$statusfbio.'</div>';
}else if(($mxc11 >=$rangx3) && ($mxc11<=$rangx4)){
 $colorf1bio="blue";
 $statusfbio=$c2d;
 '<div style=" color:'. $colorf1bio.';">'.$statusfbio.'</div>';}else if(($mxc11 >=$rangx5) && ($mxc11<=$rangx6)){
 $colorf1bio="blue";
 $statusfbio=$c3d;
 '<div style=" color:'. $colorf1bio.';">'.$statusfbio.'</div>';}
 
 
else if(($mxc11 >=$rangx7) && ($mxc11<=$rangx8)){
 $colorf1bio="blue";
 $statusfbio=$c4d;
 '<div style=" color:'. $colorf1bio.';">'.$statusfbio.'</div>';}
 
 
 else if(($mxc11 >=$rangx9) && ($mxc11<=$rangx10)){
 $colorf1bio="blue"; $statusfbio=$c5d; '<div style=" color:'. $colorf1bio.';">'.$statusfbio.'</div>';
} 
 
 
 
 else if(($mxc11 >=$rangx11) && ($mxc11<=$rangx12)){
 $colorf1bio="blue"; $statusfbio=$c6d; '<div style=" color:'. $colorf1bio.';">'.$statusfbio.'</div>';
} 
 
 else if(($mxc11 >=$rangx13) && ($mxc11<=$rangx14)){
 $colorf1bio="blue"; $statusfbio=$c7d; '<div style=" color:'. $colorf1bio.';">'.$statusfbio.'</div>';
} 
 
 
 else if(($mxc11 >=$rangx15) && ($mxc11<=$rangx16)){
 $colorf1bio="blue"; $statusfbio=$c8d; '<div style=" color:'. $colorf1bio.';">'.$statusfbio.'</div>';
} 
 
 
  $mxc11=$sc;
if(empty($mxc11)){
 $colorf1bio="yellow";
 $statusfbio="0.0";}
elseif($mxc11>=$rangx1 && $mxc11<=$rangx2 ){
 $colorf1bio="#FF0000";
 $statusfbio=$gpa1; 
}else if(($mxc11 >=$rangx3) && ($mxc11<=$rangx4)){
 $colorf1bio="blue";
 $statusfbio=$gpa2;}
 
 else if(($mxc11 >=$rangx5) && ($mxc11<=$rangx6)){
 $colorf1bio="blue";
 $statusfbio=$gpa3; }
 
 
else if(($mxc11 >=$rangx7) && ($mxc11<=$rangx8)){
 $colorf1bio="blue";
 $statusfbio=$gpa4; }
 
 
 else if(($mxc11 >=$rangx9) && ($mxc11<=$rangx10)){
 $colorf1bio="blue"; $statusfbio=$gpa5; 
} 
 
 
 
 else if(($mxc11 >=$rangx11) && ($mxc11<=$rangx12)){
 $colorf1bio="blue"; $statusfbio=$gpa6; 
} 
 
  else if(($mxc11 >=$rangx13) && ($mxc11<=$rangx14)){
 $colorf1bio="blue"; $statusfbio=$gpa7; 
} 
 
 
  else if(($mxc11 >=$rangx15) && ($mxc11<=$rangx16)){
 $colorf1bio="blue"; 
 $statusfbio=$gpa8; 
} 




$mxc002sstd=$sc;
if(empty($mxc002sstd)){
 }
	elseif($mxc002sstd>''){			  
				  
			
$query33x="update gpa set c101='$cas',c102='$exam',c104='$richooTTTy',c103='$statusfbio' where
matricule='$mats' and departmet='$deptt'and levels='$levels'  and  fname='$courseps'";










mysql_query ($query33x) or die ('could not updated:'.mysql_error());	  


	}			  
				  
?>
			 
			  </td> 
			   <td style="width:40px; height:15px; color:#000; ">
			 
			 	  <?php echo $statusfbiox;
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  ?> 
			  </td> 
			 </tr>
			 
			 
			 <?php }
			 
			 ?>
			  </table> 
			  
			 		 <div style="float:left; width:589px; height:15px; color:#000;margin-left:7px;font-family:times;font-size:12px; ">
					 
			
		 		 <div style="float:left; width:300px; height:15px; color:#000;font-family:times;font-size:12px; ">		
<b style="width:300px; height:15px;background:#fff;font-weight:normal;">TOTAL CREDITS ATTEMPTED :<?php 


echo $total1;
$qry = mysql_query("select sum(c104) as total
from resit where matricule='$mats' and departmet='$deptt'and levels='$levels' and sex='1' and db1='$db1s'  "); 
$row = mysql_fetch_assoc($qry); 
 $save=$row['total']; 
 $save1=$row['total']; 



$qry = mysql_query("select * FROM  resit where matricule='$mats' and departmet='$deptt'and levels='$levels' and sex='1' and db1='$db1s'  "); 
$num_rows=mysql_num_rows($qry);
  $richooTTTyss=$num_rows; 

?></b>
					 </div>
		 		 <div style="float:left; width:200px; height:15px; color:#000;font-family:times;font-size:12px; ">
					 
					
<b style="width:200px; height:15px;background:#fff;font-weight:normal;">
TOTAL CREDITS EARNED:<?php 

echo $totalc;

$qry = mysql_query("select sum(c104) as total
from resit where matricule='$mats' and departmet='$deptt'and levels='$levels' and sex='1' and db1='$db1s'  "); 
$row = mysql_fetch_assoc($qry); 
 $savee=$row['total']; 
 



$qry = mysql_query("select * FROM  resit where matricule='$mats' and departmet='$deptt'and levels='$levels' and sex='1' and db1='$db1s'  "); 
$num_rows=mysql_num_rows($qry);
  $richooTTTyss=$num_rows; 


?></b>


					 </div>

					 </div>
			  
			  
	
			  
			   <div style="float:left; width:589px; height:15px; color:#000;margin-left:7px;font-family:times;font-size:12px; ">
					 
					
			   <div style="float:left; width:320px;height:15px;">
<b style="width:320px; height:15px;background:#fff;font-weight:normal;">

GPA CREDITS ATTEMPTED: <?php 

echo $total1;

$qry = mysql_query("select sum(c104) as total
from resit where matricule='$mats' and departmet='$deptt'and levels='$levels' and sex='1' and db1='$db1s'  "); 
$row = mysql_fetch_assoc($qry); 
 $save=$row['total']; 
 



$qry = mysql_query("select * FROM  resit where matricule='$mats' and departmet='$deptt'and levels='$levels' and sex='1' and db1='$db1s'  "); 
$num_rows=mysql_num_rows($qry);
  $richooTTTyss=$num_rows; 


?>
					 </div>
			  
			  
			   <div style="float:left; width:200px;height:15px;">
			  
			  	
<b style="width:200px; height:15px;background:#fff;font-weight:normal;">

GPA CREDITS EANRED: <?php 


echo $totalc;
$qry = mysql_query("select sum(c104) as total
from resit where matricule='$mats' and departmet='$deptt'and levels='$levels' and sex='1' and db1='$db1s'  "); 
$row = mysql_fetch_assoc($qry); 
 $saves=$row['total']; 
 $saves1=$row['total'];



$qry = mysql_query("select * FROM  resit where matricule='$mats' and departmet='$deptt'and levels='$levels' and sex='1' and db1='$db1s'  "); 
$num_rows=mysql_num_rows($qry);
  $richooTTTyss=$num_rows; 


?>
			  
			   </div>
			  
			  
			   </div>
			   
			   
			   
			   
			   
			   
			   
			  
			   <div style="float:left; width:589px; height:15px; color:#000;margin-left:7px;font-family:times;font-size:12px; ">
			  
			   <div style="float:left; width:320px; height:15px; color:#000;font-family:times;font-size:12px; ">
					 
				

					 </div>
			  
			  
			  
			  
			   <div style="float:left; width:200px; height:15px; color:#000;font-family:times;font-size:12px; ">
					 
					
<b style="width:200px; height:15px;background:#fff;font-weight:bold;">

SEMESTER GPA <?php 




 
 	 
 	 
$qry = mysql_query("select sum(c106*c104) as total
from resit where matricule='$mats' and departmet='$deptt'and levels='$levels' and sex='1' and db1='$db1s'  "); 
$row = mysql_fetch_assoc($qry); 
 $saveyuut=$row['total']; 
 

$qrytgh = mysql_query("select sum(c104) as total
from resit where matricule='$mats' and departmet='$deptt'and levels='$levels' and sex='1' and db1='$db1s'  "); 
$row = mysql_fetch_assoc($qrytgh); 
 $richooTTTyssyuut=$row['total']; 







$mxc002st=$saveyuut;
if(empty($mxc002st)){
 $statusfbiou="";
 }
elseif($mxc002st>'' ){

printf("%01.2f",$statusfbiout=($saveyuut/$richooTTTyssyuut));
}
$queryf3iiii="update courses set c103='$statusfbiout'
 where matricule='$mats' and departmet='$deptt'and levels='$levels'  and db1='$db1s'";
 
mysql_query ($queryf3iiii) or die ('could not updated:'.mysql_error());
 ?>

					 </div>
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  





















					 
					 
			<?php
}
?>		 
					 
			  	 <table width="580px" cellpadding="0" cellspacing="0" style="font-size:11px;white-space:wrap;font-family:times;float:left;margin-left:-5px;">
							 
			 <tr><td style="width:50px; height:15px;">
			 
			  </td> 
			  <td style=" width:250px; height:15px; color:#000;">

			
<b style="width:380px; height:15px;background:#fff;font-weight:bold;font-size:12px;"><?PHP 
		 
$qrytgh ="select db1 as total
from courses where matricule='$mats' and departmet='$deptt' and c115='$c115'  and c116='$c116' group by db1";  $rttttt=mysql_query($qrytgh);
$row = mysql_fetch_assoc($rttttt); 
 $db1s=$row['total']; 
		 
  
		 
		 		 
$qry = mysql_query("select * from resit where matricule='$mats' and levels='$levels' and sex='3' and db1>='$db1s' and db1<='$db1s'"); 
$num_rows=mysql_num_rows($qry);
  $riy111=$num_rows;  
  
  $mxcy48x3tt11= $riy111;
  if(empty($mxcy48x3tt11)){

 } 
elseif($mxcy48x3tt11>'0'){
echo $statusfmxcy48x3tt11="<b>Resit Session $db1s </b>"; 
}	


  ?>
 </b>
			  </td> 
			 	 <td style="width:40px; height:15px; color:#000; margin-left:-5px;">
			 
			
			  </td> 
			  <td style=" width:40px; height:15px; color:#000; ">
			
			 
			  </td> 
			  <td style=" width:40px; height:15px; color:#000; "> </td> 
			  <td style=" width:40px; height:15px; color:#000; "> </td> 
			  </tr>
			<?php 


$query = mysql_query("select  * from resit where db1='$db1s' and matricule='$mats' and departmet='$deptt' and sex='3' and levels='$levels' order by fname ASC"); 

		 while ($row = mysql_fetch_array($query)) {
		 
		 
		 
		 
		 
		 ?>
		 <tr><td style="width:50px; height:15px;">
			 		
			 <?php echo $courseps=$row['fname'];
		
		
		$exam=$row['c102'];
		
		$cas=$row['c101'];?>
			 
			  </td> 
			  <td style=" width:270px; height:15px; color:#000;">
			 <?php 
$qry = mysql_query("select  db1 as total
from subject where subject='$courseps' "); 
$row = mysql_fetch_assoc($qry); 
echo $richooTTT=$row['total']; 

$qry = mysql_query("select  credit as total
from credits where subject='$courseps' "); 
$row = mysql_fetch_assoc($qry); 

$richooTTTy=$row['total']; 



$qry = mysql_query("select  status as total
from credits where subject='$courseps' "); 
$row = mysql_fetch_assoc($qry); 

$status=$row['total']; 
?>
			 
			  </td> 
			 	 <td style="width:40px; height:15px; color:#000; margin-left:-5px;">
			 
			 <?php echo $status;?>
			  </td> 
			  <td style=" width:40px; height:15px; color:#000; ">
			 <?php echo $richooTTTy;?>
			 
			  </td> 
			  <td style=" width:40px; height:15px; color:#000; ">
			 	<?php $ns=
($exam+$cas); 












$mxc11=$ns;





if(empty($mxc11)){
 $colorf1bio="red";
 $statusfbio=$c1d;
 echo '<div style=" color:'. $colorf1bio.';">'.$statusfbio.'</div>';}
elseif($mxc11>=$rangx1 && $mxc11<=$rangx2 ){
 $colorf1bio="#FF0000";
 $statusfbio=$c1d;
  echo'<div style=" color:'. $colorf1bio.';">'.$statusfbio.'</div>';
}else if(($mxc11 >=$rangx3) && ($mxc11<=$rangx4)){
 $colorf1bio="blue";
 $statusfbio=$c2d;
  echo'<div style=" color:'. $colorf1bio.';">'.$statusfbio.'</div>';}else if(($mxc11 >=$rangx5) && ($mxc11<=$rangx6)){
 $colorf1bio="blue";
 $statusfbio=$c3d;
  echo'<div style=" color:'. $colorf1bio.';">'.$statusfbio.'</div>';}
 
 
else if(($mxc11 >=$rangx7) && ($mxc11<=$rangx8)){
 $colorf1bio="blue";
 $statusfbio=$c4d;
  echo'<div style=" color:'. $colorf1bio.';">'.$statusfbio.'</div>';}
 
 
 else if(($mxc11 >=$rangx9) && ($mxc11<=$rangx10)){
 $colorf1bio="blue"; $statusfbio=$c5d;  echo '<div style=" color:'. $colorf1bio.';">'.$statusfbio.'</div>';
} 
 
 
 
 else if(($mxc11 >=$rangx11) && ($mxc11<=$rangx12)){
 $colorf1bio="blue"; $statusfbio=$c6d;  echo'<div style=" color:'. $colorf1bio.';">'.$statusfbio.'</div>';
} 
 
  
 
  
 else if(($mxc11 >=$rangx13) && ($mxc11<=$rangx14)){
 $colorf1bio="blue"; $statusfbio=$c7d;  echo'<div style=" color:'. $colorf1bio.';">'.$statusfbio.'</div>';
} 
 
 
 else if(($mxc11 >=$rangx15) && ($mxc11<=$rangx16)){
 $colorf1bio="blue"; $statusfbio=$c8d;  echo'<div style=" color:'. $colorf1bio.';">'.$statusfbio.'</div>';
} 
 
 
 
 
 
 
 
 
  $mxc11=$ns;
if(empty($mxc11)){
 $colorf1bio="yellow";$statusfbiox="0.0"; 
 $statusfbio="0.0";}
elseif($mxc11>=$rangx1 && $mxc11<=$rangx2 ){
 $colorf1bio="#FF0000";$statusfbiox=$gpa1; 
 $statusfbio=$gpa1; 
}else if(($mxc11 >=$rangx3) && ($mxc11<=$rangx4)){
 $colorf1bio="blue";$statusfbiox=$gpa2; 
 $statusfbio=$gpa2;}
 
 else if(($mxc11 >=$rangx5) && ($mxc11<=$rangx6)){
 $colorf1bio="blue";$statusfbiox=$gpa3; 
 $statusfbio=$gpa3; }
 
 
else if(($mxc11 >=$rangx7) && ($mxc11<=$rangx8)){
 $colorf1bio="blue";$statusfbiox=$gpa4; 
 $statusfbio=$gpa4; }
 
 
 else if(($mxc11 >=$rangx9) && ($mxc11<=$rangx10)){
 $colorf1bio="blue"; $statusfbio=$gpa5; $statusfbiox=$gpa5; 
} 
 
 
 
 else if(($mxc11 >=$rangx11) && ($mxc11<=$rangx12)){
 $colorf1bio="blue"; $statusfbio=$gpa6; $statusfbiox=$gpa6; 
} 
 
  else if(($mxc11 >=$rangx13) && ($mxc11<=$rangx14)){
 $colorf1bio="blue"; $statusfbio=$gpa7; $statusfbiox=$gpa7; 
} 
 
 
  else if(($mxc11 >=$rangx15) && ($mxc11<=$rangx16)){
 $colorf1bio="blue"; 
 $statusfbio=$gpa8;  $statusfbiox=$gpa8; 
} 





$query33="update resit set c104='$richooTTTy',c103='$statusfbio',c106='$statusfbiox'
 where matricule='$mats' and departmet='$deptt'and levels='$levels' and sex='3' and db1='$db1s' and fname='$courseps'";







mysql_query ($query33) or die ('could not updated:'.mysql_error());



$qry = mysql_query("select sum(c103) as total
from resit where matricule='$mats' and departmet='$deptt'and levels='$levels' and sex='3' and db1='$db1s'  "); 
$row = mysql_fetch_assoc($qry); 
   $creditr=$row['total']; 
 
$qry = mysql_query("select sum(c104) as total
from resit where matricule='$mats' and departmet='$deptt'and levels='$levels' and sex='3' and db1='$db1s'  "); 
$row = mysql_fetch_assoc($qry); 
  $total31=$row['total']; 


$qry = mysql_query("select * FROM  resit where matricule='$mats' and departmet='$deptt'and levels='$levels' and sex='3' and db1='$db1s'  "); 
$num_rows=mysql_num_rows($qry);
 $total32=$num_rows; 


 ?>
			 
			  </td> 
			  <td style=" width:60px; height:15px; color:#000; ">
			 	<?php   $mxccredit=$ns;
if(empty($mxccredit)){
 $colorf1bio="yellow";
 $statusfbiocredit=""; echo $statusfbiocredit='0';}
elseif($mxccredit<50){
 
 echo $statusfbiocredit='0';
 
}
elseif($mxccredit>=50){
 
 echo $statusfbiocredit=$richooTTTy;
 
}



$queryp0pp="update resit set c105='$statusfbiocredit'
 where matricule='$mats' and departmet='$deptt'and levels='$levels' and sex='3' and db1='$db1s' and fname='$courseps'";




mysql_query ($queryp0pp) or die ('could not updated:'.mysql_error());

$qry = mysql_query("select sum(c105) as total
from resit where matricule='$mats' and departmet='$deptt'and levels='$levels' and sex='3' and db1='$db1s'  "); 
$row = mysql_fetch_assoc($qry); 
   $totalcc=$row['total']; 
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   


				  
$qry = mysql_query("select SUM(c101+c102) as total
from gpa where matricule='$mats' and departmet='$deptt'  and  fname='$courseps' "); 
$row = mysql_fetch_assoc($qry); 
 $xdfs=$row['total']; 
 



$mxc0v=$xdfs;
if(empty($mxc0v)){
 }elseif($mxc0v>''  && $mxc0v>="50"  && $mxc0v<="100"  && $mxc0v>$ns){
	 
	$bm=(($ns+$xdfs)/2);
	
	if(empty($bm)){
		
	}ELSEIF($bm<50){
		$sc="50";
		
	}
	 ELSEIF($bm>=50){
		$sc=$bm;
		
	}
	 
 }
 elseif($mxc0v>''  && $mxc0v<"50"    && $mxc0v<$ns){
	 
	$bm=(($ns));
	
	if(empty($bm)){
		
	}ELSEIF($bm<50){
		$sc=$bm;
		
	}
	 ELSEIF($bm>=50){
		$sc=$bm;
		
	}
	 
 }
 
 
 
 elseif($mxc0v>''  && $mxc0v<"50"    && $mxc0v>$ns){
	 
	$bm=(($mxc0v));
	
	if(empty($bm)){
		
	}ELSEIF($bm<50){
		$sc=$bm;
		
	}
	 ELSEIF($bm>=50){
		$sc=$bm;
		
	}
	 
 }
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 $mxc11=$sc;
 
 
if(empty($mxc11)){
 $colorf1bio="red";
 $statusfbio=$c1d;
  '<div style=" color:'. $colorf1bio.';">'.$statusfbio.'</div>';}
elseif($mxc11>=$rangx1 && $mxc11<=$rangx2 ){
 $colorf1bio="#FF0000";
 $statusfbio=$c1d;
 '<div style=" color:'. $colorf1bio.';">'.$statusfbio.'</div>';
}else if(($mxc11 >=$rangx3) && ($mxc11<=$rangx4)){
 $colorf1bio="blue";
 $statusfbio=$c2d;
 '<div style=" color:'. $colorf1bio.';">'.$statusfbio.'</div>';}else if(($mxc11 >=$rangx5) && ($mxc11<=$rangx6)){
 $colorf1bio="blue";
 $statusfbio=$c3d;
 '<div style=" color:'. $colorf1bio.';">'.$statusfbio.'</div>';}
 
 
else if(($mxc11 >=$rangx7) && ($mxc11<=$rangx8)){
 $colorf1bio="blue";
 $statusfbio=$c4d;
 '<div style=" color:'. $colorf1bio.';">'.$statusfbio.'</div>';}
 
 
 else if(($mxc11 >=$rangx9) && ($mxc11<=$rangx10)){
 $colorf1bio="blue"; $statusfbio=$c5d; '<div style=" color:'. $colorf1bio.';">'.$statusfbio.'</div>';
} 
 
 
 
 else if(($mxc11 >=$rangx11) && ($mxc11<=$rangx12)){
 $colorf1bio="blue"; $statusfbio=$c6d; '<div style=" color:'. $colorf1bio.';">'.$statusfbio.'</div>';
} 
 
 
 else if(($mxc11 >=$rangx13) && ($mxc11<=$rangx14)){
 $colorf1bio="blue"; $statusfbio=$c7d; '<div style=" color:'. $colorf1bio.';">'.$statusfbio.'</div>';
} 
 
 else if(($mxc11 >=$rangx15) && ($mxc11<=$rangx16)){
 $colorf1bio="blue"; $statusfbio=$c8d; '<div style=" color:'. $colorf1bio.';">'.$statusfbio.'</div>';
} 
 
  $mxc11=$sc;
if(empty($mxc11)){
 $colorf1bio="yellow";
 $statusfbio="0.0";}
elseif($mxc11>=$rangx1 && $mxc11<=$rangx2 ){
 $colorf1bio="#FF0000";
 $statusfbio=$gpa1; 
}else if(($mxc11 >=$rangx3) && ($mxc11<=$rangx4)){
 $colorf1bio="blue";
 $statusfbio=$gpa2;}
 
 else if(($mxc11 >=$rangx5) && ($mxc11<=$rangx6)){
 $colorf1bio="blue";
 $statusfbio=$gpa3; }
 
 
else if(($mxc11 >=$rangx7) && ($mxc11<=$rangx8)){
 $colorf1bio="blue";
 $statusfbio=$gpa4; }
 
 
 else if(($mxc11 >=$rangx9) && ($mxc11<=$rangx10)){
 $colorf1bio="blue"; $statusfbio=$gpa5; 
} 
 
 
 
 else if(($mxc11 >=$rangx11) && ($mxc11<=$rangx12)){
 $colorf1bio="blue"; $statusfbio=$gpa6; 
} 
 
  else if(($mxc11 >=$rangx13) && ($mxc11<=$rangx14)){
 $colorf1bio="blue"; $statusfbio=$gpa7; 
} 
 
 
  else if(($mxc11 >=$rangx15) && ($mxc11<=$rangx16)){
 $colorf1bio="blue"; 
 $statusfbio=$gpa8; 
} 




$mxc002sstd=$sc;
if(empty($mxc002sstd)){
 }
	elseif($mxc002sstd>''){			  
				  
			
$query33x="update gpa set c101='$cas',c102='$exam',c104='$richooTTTy',c103='$statusfbio' where
matricule='$mats' and departmet='$deptt'and fname='$courseps'";










mysql_query ($query33x) or die ('could not updated:'.mysql_error());	  


	}			  
				  
				  
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
?>
			 
			  </td> 
			   <td style="width:40px; height:15px; color:#000; ">
			 
			 	  <?php echo $statusfbio;?> 
			  </td> 
			 </tr>
			 
			 
			 <?php }
			 
			 ?>
			  </table> 	







			  <div style="float:left; width:200px; height:15px; color:#000;font-family:times;font-size:12px; ">
					 <?PHP 
		 
		 
		 
		 		 
$qry = mysql_query("select * from resit where matricule='$mats' and levels='$levels' and sex='3' and db1='$db1s' "); 
$num_rows=mysql_num_rows($qry);
  $riy111=$num_rows;  
  
  $mxcy48x3tt11= $riy111;
  if(empty($mxcy48x3tt11)){

 } 
elseif($mxcy48x3tt11>''){
?>

<b style="width:200px; height:15px;background:#fff;font-weight:bold;">

SEMESTER GPA <?php 




 
 	 
 	 
$qry = mysql_query("select sum(c106*c104) as total
from resit where matricule='$mats' and departmet='$deptt'and levels='$levels' and sex='3' and db1='$db1s'  "); 
$row = mysql_fetch_assoc($qry); 
 $saveyuut=$row['total']; 
 

$qrytgh = mysql_query("select sum(c104) as total
from resit where matricule='$mats' and departmet='$deptt'and levels='$levels' and sex='3' and db1='$db1s'  "); 
$row = mysql_fetch_assoc($qrytgh); 
 $richooTTTyssyuut=$row['total']; 







$mxc002st=$saveyuut;
if(empty($mxc002st)){
 $statusfbiou="";
 }
elseif($mxc002st>'' ){

printf("%01.2f",$statusfbiout=($saveyuut/$richooTTTyssyuut));
}
$queryf3iiii="update courses set c104='$statusfbiout'
 where matricule='$mats' and departmet='$deptt'and levels='$levels'  and db1='$db1s'";
 
mysql_query ($queryf3iiii) or die ('could not updated:'.mysql_error());
 ?>


<?php
}	


  ?>
					
					 </div>
			  
			  
					 </div>
			  
			 		
				 
			
					</div>  		 
					 
					 
					 
					</div>  		 
					 
					 
					 
					 
					 
					 
					 
					 <div style="float:left; width:589px; height:500px; color:#000; ">
			  
			  
			  				
 <?php 


		 
$query = mysql_query("select  * from courses where matricule='$mats' and departmet='$deptt'  and levels='$levels'and c115='$c115'  and c116='$c116' group by db1"); 

		 while ($row = mysql_fetch_array($query)) {
		 
		$db1s=$row["db1"];
		 
		 
		 
		 ?>
			 
			 		
					 
			  	 <table width="580px" cellpadding="0" cellspacing="0" style="font-size:11px;white-space:wrap;font-family:times;float:left;margin-left:5px;">
			
					 
			 <tr><td style="width:60px; height:15px;">
			 
			  </td> 
			  <td style=" width:250px; height:15px; color:#000;">

			
<b style="width:380px; height:15px;background:#fff;font-weight:bold;font-size:12px;">Second Semester  <?php 


?><?php
		
 
echo $db1s; 
		 
 
		 ?>
		 
 </b>
			  </td> 
			 	 <td style="width:40px; height:15px; color:#000; margin-left:-5px;">
			 
			
			  </td> 
			  <td style=" width:40px; height:15px; color:#000; ">
			
			 
			  </td> 
			  <td style=" width:40px; height:15px; color:#000; "> </td> 
			  <td style=" width:40px; height:15px; color:#000; "> </td> 
			  </tr>
		<?php 

$qrytgh ="select db1 as total
from courses where matricule='$mats' and departmet='$deptt' and c115='$c115'  and c116='$c116' group by db1";  $rttttt=mysql_query($qrytgh);
$row = mysql_fetch_assoc($rttttt); 
 $db1s=$row['total']; 
		 

$query = mysql_query("select  * from resit where db1='$db1s' and matricule='$mats' and departmet='$deptt' and sex='2' and levels='$levels' order by fname ASC"); 

		 while ($row = mysql_fetch_array($query)) {
		 
		 
		 
		 
		 
		 ?><tr><td style="width:60px; height:15px;">
			 		
			 <?php echo $courseps=$row['fname'];
		
		
		$exam=$row['c102'];
		
		$cas=$row['c101'];?>
			 
			  </td> 
			  <td style=" width:250px; height:15px; color:#000;">
			 <?php 
$qry = mysql_query("select  db1 as total
from subject where subject='$courseps' "); 
$row = mysql_fetch_assoc($qry); 
echo $richooTTT=$row['total']; 

$qry = mysql_query("select  credit as total
from credits where subject='$courseps' "); 
$row = mysql_fetch_assoc($qry); 

$richooTTTy=$row['total']; 



$qry = mysql_query("select  status as total
from credits where subject='$courseps' "); 
$row = mysql_fetch_assoc($qry); 

$status=$row['total']; 
?>
			 
			  </td> 
			 	 <td style="width:40px; height:15px; color:#000; margin-left:-5px;">
			 
			 <?php echo $status;?>
			  </td> 
			  <td style=" width:40px; height:15px; color:#000; ">
			 <?php echo $richooTTTy;?>
			 
			  </td> 
			  <td style=" width:40px; height:15px; color:#000; ">
			 	<?php $ns=
($exam+$cas); 












$mxc11=$ns;






 
if(empty($mxc11)){
 $colorf1bio="red";
 $statusfbio=$c1d;
 echo '<div style=" color:'. $colorf1bio.';">'.$statusfbio.'</div>';}
elseif($mxc11>=$rangx1 && $mxc11<=$rangx2 ){
 $colorf1bio="#FF0000";
 $statusfbio=$c1d;
  echo'<div style=" color:'. $colorf1bio.';">'.$statusfbio.'</div>';
}else if(($mxc11 >=$rangx3) && ($mxc11<=$rangx4)){
 $colorf1bio="blue";
 $statusfbio=$c2d;
  echo'<div style=" color:'. $colorf1bio.';">'.$statusfbio.'</div>';}else if(($mxc11 >=$rangx5) && ($mxc11<=$rangx6)){
 $colorf1bio="blue";
 $statusfbio=$c3d;
  echo'<div style=" color:'. $colorf1bio.';">'.$statusfbio.'</div>';}
 
 
else if(($mxc11 >=$rangx7) && ($mxc11<=$rangx8)){
 $colorf1bio="blue";
 $statusfbio=$c4d;
  echo'<div style=" color:'. $colorf1bio.';">'.$statusfbio.'</div>';}
 
 
 else if(($mxc11 >=$rangx9) && ($mxc11<=$rangx10)){
 $colorf1bio="blue"; $statusfbio=$c5d;  echo '<div style=" color:'. $colorf1bio.';">'.$statusfbio.'</div>';
} 
 
 
 
 else if(($mxc11 >=$rangx11) && ($mxc11<=$rangx12)){
 $colorf1bio="blue"; $statusfbio=$c6d;  echo'<div style=" color:'. $colorf1bio.';">'.$statusfbio.'</div>';
} 
 
  
 else if(($mxc11 >=$rangx13) && ($mxc11<=$rangx14)){
 $colorf1bio="blue"; $statusfbio=$c7d;  echo'<div style=" color:'. $colorf1bio.';">'.$statusfbio.'</div>';
} 
 
 
  
 else if(($mxc11 >=$rangx15) && ($mxc11<=$rangx16)){
 $colorf1bio="blue"; $statusfbio=$c8d;  echo'<div style=" color:'. $colorf1bio.';">'.$statusfbio.'</div>';
} 
 
 
  
 
 
 
 
 
 
 
 
  $mxc11=$ns;
if(empty($mxc11)){
 $colorf1bio="yellow";
 $statusfbio="0.0";}
elseif($mxc11>=$rangx1 && $mxc11<=$rangx2 ){
 $colorf1bio="#FF0000";
 $statusfbiox=$gpa1;  $statusfbio=$gpa1; 
}else if(($mxc11 >=$rangx3) && ($mxc11<=$rangx4)){
 $colorf1bio="blue";
 $statusfbiox=$gpa2;}
 
 else if(($mxc11 >=$rangx5) && ($mxc11<=$rangx6)){
 $colorf1bio="blue";
 $statusfbiox=$gpa3;
 $statusfbio=$gpa3;

 }
 
 
else if(($mxc11 >=$rangx7) && ($mxc11<=$rangx8)){
 $colorf1bio="blue";
 $statusfbiox=$gpa4; $statusfbio=$gpa4; }
 
 
 else if(($mxc11 >=$rangx9) && ($mxc11<=$rangx10)){
 $colorf1bio="blue"; $statusfbiox=$gpa5;  $statusfbio=$gpa5;
} 
 
 
 
 else if(($mxc11 >=$rangx11) && ($mxc11<=$rangx12)){
 $colorf1bio="blue"; $statusfbiox=$gpa6;  $statusfbio=$gpa6;
} 
 
  else if(($mxc11 >=$rangx13) && ($mxc11<=$rangx14)){
 $colorf1bio="blue"; $statusfbiox=$gpa7;  $statusfbio=$gpa7;
} 
 
 
  else if(($mxc11 >=$rangx15) && ($mxc11<=$rangx16)){
 $colorf1bio="blue"; 
 $statusfbiox=$gpa8;  $statusfbio=$gpa8;
} 


























				  

 $query33="update resit set c104='$richooTTTy',c103='$statusfbio',c106='$statusfbio'
 where matricule='$mats' and departmet='$deptt'and levels='$levels' and sex='2' and fname='$courseps'";










mysql_query ($query33) or die ('could not updated:'.mysql_error());


$qry = mysql_query("select sum(c103) as total
from resit where matricule='$mats' and departmet='$deptt'and levels='$levels' and sex='2' and db1='$db1s'  "); 
$row = mysql_fetch_assoc($qry); 
 $totalcs2=$row['total']; 
 
$qry = mysql_query("select sum(c104) as total
from resit where matricule='$mats' and departmet='$deptt'and levels='$levels' and sex='2' and db1='$db1s'  "); 
$row = mysql_fetch_assoc($qry); 
  $total21b=$row['total']; 


$qry = mysql_query("select * FROM  resit where matricule='$mats' and departmet='$deptt'and levels='$levels' and sex='2' and db1='$db1s'  "); 
$num_rows=mysql_num_rows($qry);
 $total22b=$num_rows; 


 ?>
			 
			  </td> 
			  <td style=" width:40px; height:15px; color:#000; ">
			 	<?php   $mxccredit=$ns;
if(empty($mxccredit)){
 $colorf1bio="yellow";
 $statusfbiocredit=""; echo $statusfbiocredit='0';}
elseif($mxccredit<50){
 
 echo $statusfbiocredit='0';
 
}
elseif($mxccredit>=50){
 
 echo $statusfbiocredit=$richooTTTy;
 
}

$queryp0pp="update resit set c105='$statusfbiocredit'
 where matricule='$mats' and departmet='$deptt'and levels='$levels' and sex='2' and db1='$db1s' and fname='$courseps'";




mysql_query ($queryp0pp) or die ('could not updated:'.mysql_error());

$qry = mysql_query("select sum(c105) as total
from resit where matricule='$mats' and departmet='$deptt'and levels='$levels' and sex='2' and db1='$db1s'  "); 
$row = mysql_fetch_assoc($qry); 
   $totalcc=$row['total']; 

?>
			 
			  </td> 
			   <td style="width:40px; height:15px; color:#000; ">
			 
			 	  <?php echo $statusfbio;
				  
				  
				  
				    
				  
$qry = mysql_query("select fname as total
from gpa where matricule='$mats' and departmet='$deptt'  and  fname='$courseps' "); 
$row = mysql_fetch_assoc($qry); 
 $xdf=$row['total']; 
 







$mxc002sstd=$xdf;
if(empty($mxc002sstd)){

$query33x="insert into gpa set fname='$courseps',c101='$cas',c102='$exam',c104='$richooTTTy',c103='$statusfbio',
matricule='$mats' , departmet='$deptt', levels='200' , sex='2' , db1='$db1s' ";










mysql_query ($query33x) or die ('could not updated:'.mysql_error());
 }
	elseif($mxc002sstd>''){			  
				  
			
$query33x="update gpa set c101='$cas',c102='$exam',c104='$richooTTTy',c103='$statusfbio' where
matricule='$mats' and departmet='$deptt' and  fname='$courseps'";










mysql_query ($query33x) or die ('could not updated:'.mysql_error());	  


	}			  
				  
				  
			


				  
$qry = mysql_query("select SUM(c101+c102) as total
from gpa where matricule='$mats' and departmet='$deptt'  and  fname='$courseps' "); 
$row = mysql_fetch_assoc($qry); 
 $xdfs=$row['total']; 
 



$mxc0v=$xdfs;
if(empty($mxc0v)){
 }elseif($mxc0v>''  && $mxc0v>="50"  && $mxc0v<="100"  && $mxc0v>$ns){
	 
	$bm=(($ns+$xdfs)/2);
	
	if(empty($bm)){
		
	}ELSEIF($bm<50){
		$sc="50";
		
	}
	 ELSEIF($bm>=50){
		$sc=$bm;
		
	}
	 
 }
 elseif($mxc0v>''  && $mxc0v<"50"    && $mxc0v<$ns){
	 
	$bm=(($ns));
	
	if(empty($bm)){
		
	}ELSEIF($bm<50){
		$sc=$bm;
		
	}
	 ELSEIF($bm>=50){
		$sc=$bm;
		
	}
	 
 }
 
 
 
 elseif($mxc0v>''  && $mxc0v<"50"    && $mxc0v>$ns){
	 
	$bm=(($mxc0v));
	
	if(empty($bm)){
		
	}ELSEIF($bm<50){
		$sc=$bm;
		
	}
	 ELSEIF($bm>=50){
		$sc=$bm;
		
	}
	 
 }
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 $mxc11=$sc;
 
 
if(empty($mxc11)){
 $colorf1bio="red";
 $statusfbio=$c1d;
  '<div style=" color:'. $colorf1bio.';">'.$statusfbio.'</div>';}
elseif($mxc11>=$rangx1 && $mxc11<=$rangx2 ){
 $colorf1bio="#FF0000";
 $statusfbio=$c1d;
 '<div style=" color:'. $colorf1bio.';">'.$statusfbio.'</div>';
}else if(($mxc11 >=$rangx3) && ($mxc11<=$rangx4)){
 $colorf1bio="blue";
 $statusfbio=$c2d;
 '<div style=" color:'. $colorf1bio.';">'.$statusfbio.'</div>';}else if(($mxc11 >=$rangx5) && ($mxc11<=$rangx6)){
 $colorf1bio="blue";
 $statusfbio=$c3d;
 '<div style=" color:'. $colorf1bio.';">'.$statusfbio.'</div>';}
 
 
else if(($mxc11 >=$rangx7) && ($mxc11<=$rangx8)){
 $colorf1bio="blue";
 $statusfbio=$c4d;
 '<div style=" color:'. $colorf1bio.';">'.$statusfbio.'</div>';}
 
 
 else if(($mxc11 >=$rangx9) && ($mxc11<=$rangx10)){
 $colorf1bio="blue"; $statusfbio=$c5d; '<div style=" color:'. $colorf1bio.';">'.$statusfbio.'</div>';
} 
 
 
 
 else if(($mxc11 >=$rangx11) && ($mxc11<=$rangx12)){
 $colorf1bio="blue"; $statusfbio=$c6d; '<div style=" color:'. $colorf1bio.';">'.$statusfbio.'</div>';
} 
 
 
 
 else if(($mxc11 >=$rangx13) && ($mxc11<=$rangx14)){
 $colorf1bio="blue"; $statusfbio=$c7d; '<div style=" color:'. $colorf1bio.';">'.$statusfbio.'</div>';
} 
 
 else if(($mxc11 >=$rangx15) && ($mxc11<=$rangx16)){
 $colorf1bio="blue"; $statusfbio=$c8d; '<div style=" color:'. $colorf1bio.';">'.$statusfbio.'</div>';
} 
 
  $mxc11=$sc;
if(empty($mxc11)){
 $colorf1bio="yellow";
 $statusfbio="0.0";}
elseif($mxc11>=$rangx1 && $mxc11<=$rangx2 ){
 $colorf1bio="#FF0000";
 $statusfbio=$gpa1; 
}else if(($mxc11 >=$rangx3) && ($mxc11<=$rangx4)){
 $colorf1bio="blue";
 $statusfbio=$gpa2;}
 
 else if(($mxc11 >=$rangx5) && ($mxc11<=$rangx6)){
 $colorf1bio="blue";
 $statusfbio=$gpa3; }
 
 
else if(($mxc11 >=$rangx7) && ($mxc11<=$rangx8)){
 $colorf1bio="blue";
 $statusfbio=$gpa4; }
 
 
 else if(($mxc11 >=$rangx9) && ($mxc11<=$rangx10)){
 $colorf1bio="blue"; $statusfbio=$gpa5; 
} 
 
 
 
 else if(($mxc11 >=$rangx11) && ($mxc11<=$rangx12)){
 $colorf1bio="blue"; $statusfbio=$gpa6; 
} 
 
  else if(($mxc11 >=$rangx13) && ($mxc11<=$rangx14)){
 $colorf1bio="blue"; $statusfbio=$gpa7; 
} 
 
 
  else if(($mxc11 >=$rangx15) && ($mxc11<=$rangx16)){
 $colorf1bio="blue"; 
 $statusfbio=$gpa8; 
} 




$mxc002sstd=$sc;
if(empty($mxc002sstd)){
 }
	elseif($mxc002sstd>''){			  
				  
			
$query33x="update gpa set c101='$cas',c102='$exam',c104='$richooTTTy',c103='$statusfbio' where
matricule='$mats' and departmet='$deptt'and levels='$levels'  and  fname='$courseps'";










mysql_query ($query33x) or die ('could not updated:'.mysql_error());	  


	}			  
				  	  
				  
				  
				  ?> 
			  </td> 
			 </tr>
			 
			 
			 <?php }
			 
			 ?>
			  </table> 
			  
			  
			  
			  
			  
			 		 <div style="float:left; width:589px; height:15px; color:#000;margin-left:7px;font-family:times;font-size:12px; ">
					 
			
		 		 <div style="float:left; width:300px; height:15px; color:#000;font-family:times;font-size:12px; ">		
<b style="width:300px; height:15px;background:#fff;font-weight:normal;">TOTAL CREDITS ATTEMPTED :<?php 



echo $total21b;

$qry = mysql_query("select sum(c104) as total
from resit where matricule='$mats' and departmet='$deptt'and levels='$levels' and sex='2' and db1='$db1s'  "); 
$row = mysql_fetch_assoc($qry); 
$save=$row['total']; 
 $save3=$row['total']; 



$qry = mysql_query("select * FROM  resit where matricule='$mats' and departmet='$deptt'and levels='$levels' and sex='2' and db1='$db1s'  "); 
$num_rows=mysql_num_rows($qry);
  $richooTTTyss=$num_rows; 


?></b>
					 </div>
		 		 <div style="float:left; width:200px; height:15px; color:#000;font-family:times;font-size:12px; ">
					 
					
<b style="width:200px; height:15px;background:#fff;font-weight:normal;">
TOTAL CREDITS EARNED:<?php 

$qry = mysql_query("select sum(c105) as total
from resit where matricule='$mats' and departmet='$deptt'and levels='$levels' and sex='2' and db1='$db1s'  "); 
$row = mysql_fetch_assoc($qry); 
   $totalccc=$row['total']; 
echo $totalccc;

$qry = mysql_query("select sum(c104) as total
from resit where matricule='$mats' and departmet='$deptt'and levels='$levels' and sex='2' and db1='$db1s'  "); 
$row = mysql_fetch_assoc($qry); 
$save=$row['total']; 
 



$qry = mysql_query("select * FROM  resit where matricule='$mats' and departmet='$deptt'and levels='$levels' and sex='2' and db1='$db1s'  "); 
$num_rows=mysql_num_rows($qry);
  $richooTTTyss=$num_rows; 


?></b>


					 </div>

					 </div>
			  
			  
	
			  
			   <div style="float:left; width:589px; height:15px; color:#000;margin-left:7px;font-family:times;font-size:12px; ">
					 
					
			   <div style="float:left; width:320px;height:15px;">
<b style="width:320px; height:15px;background:#fff;font-weight:normal;">

GPA CREDITS ATTEMPTED: <?php 


echo $total21b;

$qry = mysql_query("select sum(c104) as total
from resit where matricule='$mats' and departmet='$deptt'and levels='$levels' and sex='2' and db1='$db1s'  "); 
$row = mysql_fetch_assoc($qry); 
$save=$row['total']; 
 



$qry = mysql_query("select * FROM  resit where matricule='$mats' and departmet='$deptt'and levels='$levels' and sex='2' and db1='$db1s'  "); 
$num_rows=mysql_num_rows($qry);
  $richooTTTyss=$num_rows; 


?>
					 </div>
			  
			  
			   <div style="float:left; width:200px;height:15px;">
			  
			  	
<b style="width:200px; height:15px;background:#fff;font-weight:normal;">

GPA CREDITS EANRED: <?php 


echo $totalccc;

$qry = mysql_query("select sum(c103) as total
from resit where matricule='$mats' and departmet='$deptt'and levels='$levels' and sex='2' and db1='$db1s'  "); 
$row = mysql_fetch_assoc($qry); 
$saves=$row['total']; 
 $saves3=$row['total']; 



$qry = mysql_query("select * FROM  resit where matricule='$mats' and departmet='$deptt'and levels='$levels' and sex='2' and db1='$db1s'  "); 
$num_rows=mysql_num_rows($qry);
  $richooTTTyss=$num_rows; 


?>
			  
			   </div>
			  
			  
			   </div>
			   
			   
			   
			   
			   
			   
			   
			  
			   <div style="float:left; width:589px; height:15px; color:#000;margin-left:7px;font-family:times;font-size:12px; ">
			  
			   <div style="float:left; width:320px; height:15px; color:#000;font-family:times;font-size:12px; ">
					 
				

					 </div>
			  
			  
			  
			  
			   <div style="float:left; width:200px; height:15px; color:#000;font-family:times;font-size:12px; ">
					 
					
<b style="width:200px; height:15px;background:#fff;font-weight:bold;">

SEMESTER GPA <?php 




 
 	 
$qry = mysql_query("select sum(c106*c104) as total
from resit where matricule='$mats' and departmet='$deptt'and levels='$levels' and sex='2' and db1='$db1s'  "); 
$row = mysql_fetch_assoc($qry); 
$saveyuus=$row['total']; 
 

 	 
$qry = mysql_query("select sum(c104) as total
from resit where matricule='$mats' and departmet='$deptt'and levels='$levels' and sex='2' and db1='$db1s'  "); 
$row = mysql_fetch_assoc($qry); 
 $richooTTTyssyuus=$row['total']; 
 







$mxc002sst=$saveyuus;
if(empty($mxc002sst)){
 $statusfbious3="";
 }
elseif($mxc002sst>'' ){

printf("%01.2f",$statusfbious3=($saveyuus/$richooTTTyssyuus));
}
$queryf3iiiiyy="update courses set c105='$statusfbious3'
 where matricule='$mats' and departmet='$deptt'and levels='$levels'  and db1='$db1s'";
		 
mysql_query ($queryf3iiiiyy) or die ('could not updated:'.mysql_error());
 

 	 
$qry = mysql_query("select c103 as total
from courses where  matricule='$mats' and departmet='$deptt'and levels='$levels' and c115='$c115' and c116='$c116' and db1='$db1s' "); 
$row = mysql_fetch_assoc($qry); 
 $c1=$row['total']; 
 

$qry = mysql_query("select c104 as total
from courses where  matricule='$mats' and departmet='$deptt'and levels='$levels' and c115='$c115' and c116='$c116'and db1='$db1s' "); 
$row = mysql_fetch_assoc($qry); 
 $c2=$row['total']; 
 

	
$qry = mysql_query("select c105 as total
from courses where  matricule='$mats' and departmet='$deptt' and levels='$levels'and c115='$c115'  and c116='$c116' and db1='$db1s' "); 
$row = mysql_fetch_assoc($qry); 
 $c3=$row['total']; 
 
$mc1=$c1;
if(empty($mc1)){
 $stac1="0";
 }elseif($mc1>''){ $stac1="1";
 
 }$mc2=$c2;
if(empty($mc2)){
 $stac2="0";
 }elseif($mc2>''){ $stac2="1";
 
 }$mc3=$c3;
if(empty($mc3)){
 $stac3="0";
 }elseif($mc3>''){ $stac3="1";
 
 }

 $tmop=($stac1+$stac2+$stac3);

$qry = mysql_query("select sum(c103+c104+c105) as total
from courses where matricule='$mats' and departmet='$deptt'and levels='$levels' and c115='$c115' and c116='$c116' and db1='$db1s'  "); 
$row = mysql_fetch_assoc($qry); 
 $totalgpa=$row['total']; 
 $mxc002sstx=$totalgpa;
if(empty($mxc002sstx)){
 $statusfbious3xx="0";
 }
elseif($mxc002sstx>'' ){
 $statusfbious3xx=($totalgpa/$tmop);

}
$queryf3iiiiyyx="update courses set c109='$statusfbious3xx'
 where matricule='$mats' and departmet='$deptt'and levels='$levels' and c115='$c115' and c116='$c116' and db1='$db1s'";
		 
mysql_query ($queryf3iiiiyyx) or die ('could not updated:'.mysql_error());
 
	
$qry = mysql_query("select SUM(c109) as total
from courses where  matricule='$mats' and departmet='$deptt' "); 
$row = mysql_fetch_assoc($qry); 
 $maboh=$row['total']; 		
		
 	 
$qry = mysql_query("select SUM(c104) as total
from gpa where  matricule='$mats' and departmet='$deptt' "); 
$row = mysql_fetch_assoc($qry); 
 $attempted=$row['total']; 		



$qry = mysql_query("select SUM(c103) as total
from gpa where  matricule='$mats' and departmet='$deptt' "); 
$row = mysql_fetch_assoc($qry); 
 $earn=$row['total']; 		

 
$qry = mysql_query("select SUM(c104) as total
from gpa where  matricule='$mats' and departmet='$deptt' and c103>='2'"); 
$row = mysql_fetch_assoc($qry); 
 $earn2=$row['total']; 		
 
 
$qry = mysql_query("select (SUM(c103*c104)/SUM(c104)) as total
from gpa where  matricule='$mats' and departmet='$deptt' "); 
$row = mysql_fetch_assoc($qry); 
 $gpa=$row['total']; 
 ?>

					 </div>
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
					 </div>	 
					 <?php

if(empty($c116)){
	
	
}elseif($c116>="$opps"  &&  $c11<="$opps"){
	
	?>
	
	
			 <div style='float:left; width:589px; height:15px; color:#000;margin-left:7px;font-family:times;font-size:12px; '>
			  
			   <div style='float:left; width:420px; height:15px; color:#000;font-family:times;font-size:12px; '>
					 
							
<b style='width:400px; height:15px;background:#fff;font-weight:bold;'>			 
					 
					CUMMULATIVE	 TOTAL CREDITS ATTEMPTED: 			 
		<?php  
		
		
		echo $attempted;
		
		
		
		
		
		
		
		
		?>
					 </b>

					 </div>
			  
			  
			  
			  
			   <div style='float:left; width:100px; height:15px; color:#000;font-family:times;font-size:12px; '>
		
					 
					 </div>
			   
					 
					  </div>
					  
					  
					  
			  
					  <div style='float:left; width:589px; height:15px; color:#000;margin-left:7px;font-family:times;font-size:12px; '>
			  
			   <div style='float:left; width:420px; height:15px; color:#000;font-family:times;font-size:12px; '>
					 				
<b style='width:400px; height:15px;background:#fff;font-weight:bold;'>			 
					 
					CUMMULATIVE TOTAL CREDITS EARNED: <?php  
		
		
		echo $earn;
		
		
		
		
		
		
		
		
		?>
					 </b>

				

					 </div>
			  
			  
			  
			  
			   <div style='float:left; width:100px; height:15px; color:#000;font-family:times;font-size:12px; '>
					 
					
<b style='width:100px; height:15px;background:#fff;font-weight:bold;'>			 
			
					 </b>
					 
					 </div>
			   
					 
					  </div> 
					  
					  
					  
					 
			 <div style='float:left; width:589px; height:15px; color:#000;margin-left:7px;font-family:times;font-size:12px; '>
			  
			   <div style='float:left; width:400px; height:15px; color:#000;font-family:times;font-size:12px; '>
					 
					
<b style='width:400px; height:15px;background:#fff;font-weight:bold;'>			 
				CUMMULATIVE TOTAL GPA CREDITS EARNED: <?php  
		
		
		echo $earn2;
		
		
		
		
		
		
		
		
		?>
					 </b>
					 
					 </div>
			   
					 
					 
					 
					 
			  
			   <div style='float:left; width:100px; height:15px; color:#000;font-family:times;font-size:12px; '>
					 
					
<b style='width:100px; height:15px;background:#fff;font-weight:bold;'>			 
					
					
					 </b>
					 
					 </div>
			   
					 
					  </div> 
					 
					 
					 
					 
					 
					 
					 		  
					 
			 <div style='float:left; width:589px; height:15px; color:#000;margin-left:7px;font-family:times;font-size:12px; '>
			  
			   <div style='float:left; width:400px; height:15px; color:#000;font-family:times;font-size:12px; '>
					 
					
<b style='width:400px; height:15px;background:#fff;font-weight:bold;'>			 
				CUMMULATIVE GPA: <?php
if(empty($db1s)){
	
	
}elseif($db1s<"2017" ){
	
printf("%01.2f",$statufs=($maboh/$opps));
}elseif($db1s>="2017" ){
	
	
printf("%01.2f",$statufs=($gpa));
}

?>
					 </b>
					 
			   
					 
					  </div> 
					 
					 
					 
			  
			   <div style='float:left; width:100px; height:15px; color:#000;font-family:times;font-size:12px; '>
					 
					
<b style='width:100px; height:15px;background:#fff;font-weight:bold;'>			 
					 
					
					 </b>
					 
					 </div>
			   
					 
					  </div> 
					 
	
	
	
	
	
					 		  
			 		  
					 
			 <div style='float:left; width:589px; height:15px; color:#000;margin-left:7px;font-family:times;font-size:12px; '>
			  
			  
			   
					 
					  </div>  
					 
	
	
	
		 		  
					 
			 <div style='float:left; width:589px; height:15px; color:#000;margin-left:7px;font-family:times;font-size:12px; '>
			  
			  
			   
					 
					  </div> 
	
	
	
	
	
	
	
	
	
	
	
					 		  
					 
			 <div style='float:left; width:589px; height:15px; color:#000;margin-left:7px;font-family:times;font-size:12px; '>
			  
			  
			   
					 
					  </div> 
					 
	
			 		
	
		<div style='float:left; width:589px; height:15px; color:#000;margin-left:7px;font-family:times;font-size:12px; '>
			  
			   <div style='float:left; width:400px;height:15px; color:#000;font-family:times;font-size:12px; '>
					 
					
<b style='width:400px; height:15px;background:#fff;font-weight:bold;'>			 
				
					 </b>
					 
					 
					  </div> 
			   
					 
					  </div> 
					 
					 
					 
			  
			   <div style='float:left; width:100px; height:15px; color:#000;font-family:times;font-size:12px; '>
					 
	
					 </b>
					 
					 </div>
			   
					 
					  </div> 		 
						 
			
	
	<?php
	
}			 ?>
					 
			 
					 
					 
					 
			  
					 </div>				 <?php

if(empty($c116)){
	
	
}elseif($c116>="$opps"  &&  $c11<="$opps"){
	?>  <div style="float:left; width:1180px;letter-spacing:2px; text-align:center;height:650px; margin-top:-230px;">
			  
			 <div style='float:left; width:1260px; height:15px;text-align:left; color:#000;margin-left:7px;font-family:times;font-size:12px;font-weight:normal; '>
			  
					<?php 
 $rtttttt="select * from foot where ads>''";
$resultgssss=mysql_query($rtttttt);
		 while ($row = mysql_fetch_array($resultgssss)) {
		 
	
		 ?>
			   <div style='float:left; width:420px;background:#fff;  height:15px; color:#000;font-family:times;font-size:11px; '>
					 
				<?php echo $row["ads"];?>
					 
					 </div>
			   
					 
					 
					 
			  
			
			   
					 
	
		
	<?php
	
}
	
	 ?> 		  
		
					  </div> 
					 	<div style="float:left; width:1180px;letter-spacing:2px; text-align:center;height:650px; margin-top:40px;">
		  <b>Registrar............................................</b>
			   </div>	
					 </div>	
<?php } ?>
			  
					 </div>	 
			
			  
					 </div>	 
					
					 
					 <?php 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
 	 
 
			 
			} 
			 
			 
			 ?>  
			  