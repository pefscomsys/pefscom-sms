<?php 


$query = mysql_query("select  * from resit where db1='$db1s'  and matricule='$mats' and departmet='$deptt' and sex='1' and levels='$levels' order by fname ASC"); 

		 while ($row = mysql_fetch_array($query)) {
		 
		 
		 
		 
		 
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






 $mxccredit=$ns;
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
 $statusfbio="F";
 '<div style=" color:'. $colorf1bio.';">'.$statusfbio.'</div>';}
elseif($mxc11>=$rangx1 && $mxc11<=$rangx2 ){
 $colorf1bio="#FF0000";
 $statusfbio="F";
'<div style=" color:'. $colorf1bio.';">'.$statusfbio.'</div>';
}else if(($mxc11 >=$rangx3) && ($mxc11<=$rangx4)){
 $colorf1bio="blue";
 $statusfbio="D";
'<div style=" color:'. $colorf1bio.';">'.$statusfbio.'</div>';}else if(($mxc11 >=$rangx5) && ($mxc11<=$rangx6)){
 $colorf1bio="blue";
 $statusfbio="D+";
'<div style=" color:'. $colorf1bio.';">'.$statusfbio.'</div>';}
 
 
else if(($mxc11 >=$rangx7) && ($mxc11<=$rangx8)){
 $colorf1bio="blue";
 $statusfbio="C";
'<div style=" color:'. $colorf1bio.';">'.$statusfbio.'</div>';}
 
 
 else if(($mxc11 >=$rangx9) && ($mxc11<=$rangx10)){
 $colorf1bio="blue"; $statusfbio="C+"; '<div style=" color:'. $colorf1bio.';">'.$statusfbio.'</div>';
} 
 
 
 
 else if(($mxc11 >=$rangx11) && ($mxc11<=$rangx12)){
 $colorf1bio="blue"; $statusfbio="B"; '<div style=" color:'. $colorf1bio.';">'.$statusfbio.'</div>';
} 
 
  else if(($mxc11 >=$rangx10) && ($mxc11<=$rangx14)){
 $colorf1bio="blue"; $statusfbio="B+"; '<div style=" color:'. $colorf1bio.';">'.$statusfbio.'</div>';
} 
 
 
  else if(($mxc11 >=$rangx15) && ($mxc11<=$rangx16)){
 $colorf1bio="blue"; $statusfbio="A"; '<div style=" color:'. $colorf1bio.';">'.$statusfbio.'</div>';
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
 
  else if(($mxc11 >=$rangx10) && ($mxc11<=$rangx14)){
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