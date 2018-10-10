
		
		 <div style="float:left; width:1180px; height:650px; margin-top:-40px;">
			 
			 
			
			  <div style="float:left; width:589px; height:auto;color:#000;">
			  
			  
					
 <?php 


$query = mssql_query("select  CAST(db1 as text) as db1,CAST(levels as text) as levels from [cg2015].[dbo].[courses] 
where matricule='$mats' and departmet='$deptt'   and c120='$c116' group by db1,levels"); 

		 while ($row = mssql_fetch_array($query)) {
		 
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


$query = mssql_query("select  CAST(c101 as float) as c101,
CAST(c102 as float) as c102,CAST(fname as nvarchar(400)) as fname


 from [cg2015].[dbo].[resit] where db1='$db1s'  and matricule='$mats' and departmet='$deptt' and sex='1' and levels='$levels' order by fname ASC"); 

		 while ($row = mssql_fetch_array($query)) {
		 
		 
		 
		 
		 
		 ?><tr><td style="width:50px; height:15px;">
			 		
			 <?php echo $courseps=$row['fname'];
		
		
		$exam=$row['c102'];
		
		$cas=$row['c101'];?>
			 
			  </td> 
			  <td style=" width:270px; height:15px; color:#000;">
			 <?php 
$qry = mssql_query("select  CAST(db1 as text) as total,CAST(extra as text) as total2,CAST([status] as text) as total3
from [cg2015].[dbo].[subject] where subject='$courseps' "); 
$row = mssql_fetch_assoc($qry); 
echo $richooTTT=$row['total']; 

$richooTTTy=$row['total2']; 

$status=$row['total3']; 


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


















 
if(empty($ns)){
	
}elseif($ns>"79.99"  && $ns<="100"){
	$bnn="80";
	
}elseif($ns<"80"){
	$bnn=$ns;
	
}
 $qrya = "select  CAST(comments as text) as total , CAST(gpa as text) as gpa from [cg2015].[dbo].[gradebb] where ids='$id' and (from1>='$bnn'  and from2<='$bnn') or  (from2>='$bnn'  and from1<='$bnn')"; 
$qry=mssql_query($qrya);
$row = mssql_fetch_assoc($qry); 
echo $grade=$row['total']; 
 $gpa=$row['gpa'];
 $mokkk=($gpa*$richooTTTy);
 
//$query3="update [cg2015].[dbo].[resit] set c103='$mokkk',c104='$richooTTTy'
 //where matricule='$mats' and departmet='$deptt'and levels='$level' and sex='$term' and db1='$take' and fname='$courseps' and   c110='$id' ";




$statusfbiox=$statusfbio;


$query33="update [cg2015].[dbo].[resit] set c104='$richooTTTy',c103='$gpa',c106='$gpa'
 where matricule='$mats' and departmet='$deptt'and levels='$levels' and sex='1' and db1='$db1s' and fname='$courseps'";








mssql_query ($query33) or die ('could not updated:'.mssql_error());

$qry = mssql_query("select sum(CAST(c103 as float)) as total,sum(CAST(c104 as float)) as total2
from  [cg2015].[dbo].[resit] where matricule='$mats' and departmet='$deptt'and levels='$levels' and sex='1' and db1='$db1s'  "); 
$row = mssql_fetch_assoc($qry); 
  $credit=$row['total']; 
 
   $total1=$row['total2']; 


$qry = mssql_query("select count(*) as total
from  [cg2015].[dbo].[resit] where matricule='$mats' and departmet='$deptt'and levels='$levels' and sex='1' and db1='$db1s'  "); 
$row = mssql_fetch_assoc($qry); 
  $total2=$row['total']; 

$mxc002=$save;
















				    
				  
$qry = mssql_query("select CAST(fname as text) as total
from [cg2015].[dbo].[gpa] where matricule='$mats' and departmet='$deptt'  and  fname='$courseps'"); 
$row = mssql_fetch_assoc($qry); 
 $xdf=$row['total']; 
 







$mxc002sstds=$xdf;
if(empty($mxc002sstds)){

$query33x="insert into [cg2015].[dbo].[gpa] (fname,c101,c102,c104,c103,matricule,departmet,levels,sex,db1)
values ( '$courseps','$cas','$exam','$richooTTTy','$statusfbio',
'$mats' , '$deptt', '200' , '1' ,'$db1s' )";










mssql_query ($query33x) or die ('could not updated:'.mssql_error());
 }
	elseif($mxc002sstds>''){			  
				  
			
$query33x="update [cg2015].[dbo].[gpa] set c101='$cas',c102='$exam',c104='$richooTTTy',c103='$statusfbio' where
matricule='$mats' and departmet='$deptt' and  fname='$courseps'";










mssql_query ($query33x) or die ('could not updated:'.mssql_error());	  


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

$querypps="update [cg2015].[dbo].[resit] set c105='$statusfbiocredit'
 where matricule='$mats' and departmet='$deptt' and levels='$levels' and sex='1' and db1='$db1s' and fname='$courseps'";




mssql_query ($querypps) or die ('could not updated:'.mssql_error());

$qry = mssql_query("select sum(CAST(c105 as float)) as total
from [cg2015].[dbo].[resit] where matricule='$mats' and departmet='$deptt'and levels='$levels' and sex='1' and db1='$db1s'  "); 
$row = mssql_fetch_assoc($qry); 
    $totalc=$row['total']; 
	

$queryppss="update [cg2015].[dbo].[courses] set cxx11='$totalc'
 where matricule='$mats' and departmet='$deptt' and levels='$levels'  and db1='$db1s' ";




mssql_query ($queryppss) or die ('could not updated:'.mssql_error());



$qry = mssql_query("select sum(CAST(cxx11 as float)) as total
from [cg2015].[dbo].[courses]  where matricule='$mats' and departmet='$deptt'and levels='$levels' and sex='1' and db1='$db1s'  "); 
$row = mssql_fetch_assoc($qry); 
   echo  $c=$row['total']; 


				  
$qry = mssql_query("select SUM(CAST(c101 as float)) as total
from [cg2015].[dbo].[gpa]  where matricule='$mats' and departmet='$deptt'  and  fname='$courseps' "); 
$row = mssql_fetch_assoc($qry); 
 $xd1=$row['total']; 
   
$qry = mssql_query("select SUM(CAST(c102 as float)) as total
from [cg2015].[dbo].[gpa]  where matricule='$mats' and departmet='$deptt'  and  fname='$courseps' "); 
$row = mssql_fetch_assoc($qry); 
 $xd2=$row['total']; 
 

$xdfs=$xd1+$xd2;

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
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 if(empty($ns)){
	
}elseif($ns>"79.99"  && $ns<="100"){
	$bnn="80";
	
}elseif($ns<"80"){
	$bnn=$ns;
	
}
 $qrya = "select  CAST(comments as text) as total , CAST(gpa as text) as gpa from [cg2015].[dbo].[gradebb] where ids='$id' and (from1>='$bnn'  and from2<='$bnn') or  (from2>='$bnn'  and from1<='$bnn')"; 
$qry=mssql_query($qrya);
$row = mssql_fetch_assoc($qry); 
 $grade=$row['total']; 
 $gpa=$row['gpa'];
 $mokkk=($gpa*$richooTTTy);
 
			

 $mxc002sstd=$ns;
if(empty($mxc002sstd)){
 }
	elseif($mxc002sstd>''){			  
				  

$query33x="update [cg2015].[dbo].[gpa] set c101='$cas',c102='$exam',c104='$richooTTTy',c103='$gpa' where
matricule='$mats' and departmet='$deptt'and levels='$levels'  and  fname='$courseps'";



mssql_query ($query33x) or die ('could not updated:'.mssql_error());	  











	}			  
				  
?>
			 
			  </td> 
			   <td style="width:40px; height:15px; color:#000; ">
			 
			 	  <?php echo $gpa;
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
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
$qry = mssql_query("select sum(CAST(c104 as float)) as total
from [cg2015].[dbo].[resit] where matricule='$mats' and departmet='$deptt'and levels='$levels' and sex='1' and db1='$db1s'  "); 
$row = mssql_fetch_assoc($qry); 
 $save=$row['total']; 
 $save1=$row['total']; 



$qry = mssql_query("select count(*) as total
from [cg2015].[dbo].[resit] where matricule='$mats' and departmet='$deptt'and levels='$levels' and sex='1' and db1='$db1s'  "); 
$row = mssql_fetch_assoc($qry); 
 $richooTTTyss=$row['total']; 
?></b>
					 </div>
		 		 <div style="float:left; width:200px; height:15px; color:#000;font-family:times;font-size:12px; ">
					 
					
<b style="width:200px; height:15px;background:#fff;font-weight:normal;">
TOTAL CREDITS EARNED:<?php 

echo $totalc;

$qry = mssql_query("select Sum(CAST(c104 as float))  as total
from [cg2015].[dbo].[resit] where matricule='$mats' and departmet='$deptt'and levels='$levels' and sex='1' and db1='$db1s'  "); 
$row = mssql_fetch_assoc($qry); 
 $savee=$row['total']; 
 




?></b>


					 </div>

					 </div>
			  
			  
	
			  
			   <div style="float:left; width:589px; height:15px; color:#000;margin-left:7px;font-family:times;font-size:12px; ">
					 
					
			   <div style="float:left; width:320px;height:15px;">
<b style="width:320px; height:15px;background:#fff;font-weight:normal;">

GPA CREDITS ATTEMPTED: <?php 

echo $total1;

$qry = mssql_query("select sum(CAST(c104 as float)) as total
from [cg2015].[dbo].[resit] where matricule='$mats' and departmet='$deptt'and levels='$levels' and sex='1' and db1='$db1s'  "); 
$row = mssql_fetch_assoc($qry); 
 $save=$row['total']; 
 

 


?>
					 </div>
			  
			  
			   <div style="float:left; width:200px;height:15px;">
			  
			  	
<b style="width:200px; height:15px;background:#fff;font-weight:normal;">

GPA CREDITS EANRED: <?php 


echo $totalc;
$qry = mssql_query("select sum(CAST(c104 as float)) as total
from [cg2015].[dbo].[resit] where matricule='$mats' and departmet='$deptt'and levels='$levels' and sex='1' and db1='$db1s'  "); 
$row = mssql_fetch_assoc($qry); 
 $saves=$row['total']; 
 $saves1=$row['total'];





?>
			  
			   </div>
			  
			  
			   </div>
			   
			   
			   
			   
			   
			   
			   
			  
			   <div style="float:left; width:589px; height:15px; color:#000;margin-left:7px;font-family:times;font-size:12px; ">
			  
			   <div style="float:left; width:320px; height:15px; color:#000;font-family:times;font-size:12px; ">
					 
				

					 </div>
			  
			  
			  
			  
			   <div style="float:left; width:200px; height:15px; color:#000;font-family:times;font-size:12px; ">
					 
					
<b style="width:200px; height:15px;background:#fff;font-weight:bold;">

SEMESTER GPA <?php 




 
 	 
 	 
$qry = mssql_query("select sum(  (CAST(c106 as float)* CAST(c104 as float))) as total
from [cg2015].[dbo].[resit] where matricule='$mats' and departmet='$deptt'and levels='$levels' and sex='1' and db1='$db1s'  "); 
$row = mssql_fetch_assoc($qry); 
 $saveyuut=$row['total']; 
 

$qrytgh = mssql_query("select sum(CAST(c104 as float)) as total
from [cg2015].[dbo].[resit] where matricule='$mats' and departmet='$deptt'and levels='$levels' and sex='1' and db1='$db1s'  "); 
$row = mssql_fetch_assoc($qrytgh); 
 $richooTTTyssyuut=$row['total']; 







$mxc002st=$saveyuut;
if(empty($mxc002st)){
 $statusfbiou="";
 }
elseif($mxc002st>'' ){

printf("%01.2f",$statusfbiout=($saveyuut/$richooTTTyssyuut));
}
$queryf3iiii="update [cg2015].[dbo].[courses] set c103='$statusfbiout'
 where matricule='$mats' and departmet='$deptt'and levels='$levels'  and db1='$db1s'";
 
mssql_query ($queryf3iiii) or die ('could not updated:'.mssql_error());
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
		 
 $qrytgh ="select CAST(db1  as text) as total
from [cg2015].[dbo].[courses] where matricule='$mats' and departmet='$deptt' and c110='$id'  and c120='$c116' group by db1";  $rttttt=mssql_query($qrytgh);
$row = mssql_fetch_assoc($rttttt); 
  $db1s=$row['total']; 
		 
  
		 
		 		 
 $qrytgh ="select count(*) as total from [cg2015].[dbo].[resit] where matricule='$mats' and levels='$levels' and sex='3' and db1>='$db1s' and db1<='$db1s'";
 $rttttt=mssql_query($qrytgh);
$row = mssql_fetch_assoc($rttttt); 
  $riy111=$row['total']; 
		
  
  $mxcy48x3tt11= $riy111;
  if(empty($mxcy48x3tt11)){

 } 
elseif($mxcy48x3tt11>'0'){
echo $statusfmxcy48x3tt11="<b>Resit First Semester Session $db1s </b>"; 
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
if(empty($riy111)){
}elseif($riy111>="1"  &&  $riy111<="9"){
	
	$gf="1";
	
	
}elseif($riy111>"9" ){
	
	$gf="2";
	
	
}

$query = mssql_query("select  CAST(c101 as float) as c101,
CAST(c102 as float) as c102,CAST(fname as nvarchar(400)) as fname


 from [cg2015].[dbo].[resit] where db1='$db1s'  and matricule='$mats' and departmet='$deptt' and sex='3' and levels='$levels' order by fname ASC
 
 
 OFFSET 0 ROWS
                          FETCH NEXT  11  ROWS ONLY"); 

		 while ($row = mssql_fetch_array($query)) {
		 
		 
		 
		 
		 
		 ?>
		 <tr><td style="width:50px; height:15px;">
			 		
			 <?php echo $courseps=$row['fname'];
		
		
		$exam=$row['c102'];
		
		$cas=$row['c101'];?>
			 
			  </td> 
			  <td style=" width:270px; height:15px; color:#000;">
			 <?php 
$qry = mssql_query("select  CAST(db1 as text) as total,CAST(extra as text) as total2,CAST([status] as text) as total3
from [cg2015].[dbo].[subject] where subject='$courseps' "); 
$row = mssql_fetch_assoc($qry); 
echo $richooTTT=$row['total']; 

$richooTTTy=$row['total2']; 

$status=$row['total3']; 
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











if(empty($ns)){
	
}elseif($ns>"79.99"  && $ns<="100"){
	$bnn="80";
	
}elseif($ns<"80"){
	$bnn=$ns;
	
}
 $qrya = "select  CAST(comments as text) as total , CAST(gpa as text) as gpa from [cg2015].[dbo].[gradebb] where ids='$id' and (from1>='$bnn'  and from2<='$bnn') or  (from2>='$bnn'  and from1<='$bnn')"; 
$qry=mssql_query($qrya);
$row = mssql_fetch_assoc($qry); 
echo $grade=$row['total']; 
 $gpa=$row['gpa'];
 $mokkk=($gpa*$richooTTTy);
 
//$query3="update [cg2015].[dbo].[resit] set c103='$mokkk',c104='$richooTTTy'
 //where matricule='$mats' and departmet='$deptt'and levels='$level' and sex='$term' and db1='$take' and fname='$courseps' and   c110='$id' ";




$statusfbiox=$statusfbio;


$query33="update [cg2015].[dbo].[resit] set c104='$richooTTTy',c103='$gpa',c106='$gpa'
 where matricule='$mats' and departmet='$deptt'and levels='$levels' and sex='3' and db1='$db1s' and fname='$courseps'";








mssql_query ($query33) or die ('could not updated:'.mssql_error());

$qry = mssql_query("select sum(CAST(c103  as float)) as total
from [cg2015].[dbo].[resit] where matricule='$mats' and departmet='$deptt'and levels='$levels' and sex='3' and db1='$db1s'  "); 
$row = mssql_fetch_assoc($qry); 
   $creditr=$row['total']; 
 
$qry = mssql_query("select sum(CAST(c104  as float)) as total
from [cg2015].[dbo].[resit] where matricule='$mats' and departmet='$deptt'and levels='$levels' and sex='3' and db1='$db1s'  "); 
$row = mssql_fetch_assoc($qry); 
  $total31=$row['total']; 


$qry = mssql_query("select count(*) as total FROM  [cg2015].[dbo].[resit] where matricule='$mats' and departmet='$deptt'and levels='$levels' and sex='3' and db1='$db1s'  "); 
$row = mssql_fetch_assoc($qry); 
  $total32=$row['total']; 



 ?>
			 
			  </td> 
			  <td style=" width:60px; height:15px; color:#000; ">
			  <div style='float:left;margin-left:15px;'>
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



$queryp0pp="update [cg2015].[dbo].[resit] set c105='$statusfbiocredit'
 where matricule='$mats' and departmet='$deptt'and levels='$levels' and sex='3' and db1='$db1s' and fname='$courseps'";




mssql_query ($queryp0pp) or die ('could not updated:'.mssql_error());

$qry = mssql_query("select sum(CAST(c105 as float)) as total
from [cg2015].[dbo].[resit] where matricule='$mats' and departmet='$deptt'and levels='$levels' and sex='3' and db1='$db1s'  "); 
$row = mssql_fetch_assoc($qry); 
   $totalcc=$row['total']; 
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   


				  
$qry = mssql_query("select SUM(CAST(c101  as float)+ CAST(c102 as float)) as total
from [cg2015].[dbo].[gpa] where matricule='$mats' and departmet='$deptt'  and  fname='$courseps' "); 
$row = mssql_fetch_assoc($qry); 
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
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 if(empty($ns)){
	
}elseif($ns>"79.99"  && $ns<="100"){
	$bnn="80";
	
}elseif($ns<"80"){
	$bnn=$ns;
	
}
 $qrya = "select  CAST(comments as text) as total , CAST(gpa as text) as gpa from [cg2015].[dbo].[gradebb] where ids='$id' and (from1>='$bnn'  and from2<='$bnn') or  (from2>='$bnn'  and from1<='$bnn')"; 
$qry=mssql_query($qrya);
$row = mssql_fetch_assoc($qry); 
 $grade=$row['total']; 
 $gpa=$row['gpa'];
 $mokkk=($gpa*$richooTTTy);
 
			

 $mxc002sstd=$ns;
if(empty($mxc002sstd)){
 }
	elseif($mxc002sstd>''){			  
				  

$query33x="update [cg2015].[dbo].[gpa] set c101='$cas',c102='$exam',c104='$richooTTTy',c103='$gpa' where
matricule='$mats' and departmet='$deptt'and levels='$levels'  and  fname='$courseps'";



mssql_query ($query33x) or die ('could not updated:'.mssql_error());	  



	}			  
				  
				  
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
?>
			 </div>
			  </td> 
			   <td style="width:40px; height:15px; color:#000; ">
			 
			 	  <?php echo $gpa;?> 
			  </td> 
			 </tr>
			 
			 
			 <?php }
			 
			 ?>
			  </table> 	





<?php
if(empty($gf)){
	$m1=0;
	$m2=1;
	
	$rgh=" OFFSET 0 ROWS
                          FETCH NEXT  1  ROWS ONLY";

	
}elseif($gf>="1" && $gf<="1"){
	?>

			  <div style="float:left; width:200px; height:15px; color:#000;font-family:times;font-size:12px; ">
					 <?PHP 
		 
		 
		 
		 		 
$qry = mssql_query("select count(*) as total from [cg2015].[dbo].[resit] where matricule='$mats' and levels='$levels' and sex='3' and db1='$db1s' "); 
$row = mssql_fetch_assoc($qry); 
 $riy111=$row['total']; 
 
  
  $mxcy48x3tt11= $riy111;
  if(empty($mxcy48x3tt11)){

 } 
elseif($mxcy48x3tt11>''){
?>

<b style="width:200px; height:15px;background:#fff;font-weight:bold;">

SEMESTER GPA <?php 




 
 	 
 	 
$qry = mssql_query("select sum(CAST(c106 as float) * CAST(c104 as float)) as total
from [cg2015].[dbo].[resit] where matricule='$mats' and departmet='$deptt'and levels='$levels' and sex='3' and db1='$db1s'  "); 
$row = mssql_fetch_assoc($qry); 
 $saveyuut=$row['total']; 
 

$qrytgh = mssql_query("select sum(CAST(c104 as float)) as total
from [cg2015].[dbo].[resit] where matricule='$mats' and departmet='$deptt'and levels='$levels' and sex='3' and db1='$db1s'  "); 
$row = mssql_fetch_assoc($qrytgh); 
 $richooTTTyssyuut=$row['total']; 







$mxc002st=$saveyuut;
if(empty($mxc002st)){
 $statusfbiou="";
 }
elseif($mxc002st>'' ){

printf("%01.2f",$statusfbiout=($saveyuut/$richooTTTyssyuut));
}
$queryf3iiii="update [cg2015].[dbo].[courses] set c104='$statusfbiout'
 where matricule='$mats' and departmet='$deptt'and levels='$levels'  and db1='$db1s'";
 
mssql_query ($queryf3iiii) or die ('could not updated:'.mssql_error());
 ?>


<?php
}	
$fgggg=$riy111+1;
	$rgh=" OFFSET $riy111 ROWS
                          FETCH NEXT  $fgggg  ROWS ONLY";

  ?>
					
					 </div>
<?php }





elseif($gf>="2" &&   $gf<="2"){
	$m1=12;
	$m2=$riy111;
	$gf="1";
	$rgh=" OFFSET $m1 ROWS
                          FETCH NEXT  $m2  ROWS ONLY";
}
	?>  
			  
					 </div>
			  
			 		
				 
			
					</div>  		 
					 
					 
					 
					</div>  		 
					 
					 
					 
					 
					 
					 
					 
					 <div style="float:left; width:589px; height:500px; color:#000; ">
			  
			  
			  
			  
			  
			  
			  
			  
			  	 
			  	 <table width="580px" cellpadding="0" cellspacing="0" style="font-size:11px;white-space:wrap;font-family:times;float:left;margin-left:5px;">
			
					 
			
			  
			  
			<?php 

$query = mssql_query("select  CAST(c101 as float) as c101,
CAST(c102 as float) as c102,CAST(fname as nvarchar(400)) as fname


 from [cg2015].[dbo].[resit] where db1='$db1s'  and matricule='$mats' and departmet='$deptt' and sex='3' and levels='$levels' order by fname ASC
 
 
$rgh "); 

		 while ($row = mssql_fetch_array($query)) {
		 
		 
		 
		 
		 
		 ?>
		 <tr><td style="width:50px; height:15px;">
			 		
			 <?php echo $courseps=$row['fname'];
		
		
		$exam=$row['c102'];
		
		$cas=$row['c101'];?>
			 
			  </td> 
			  <td style=" width:270px; height:15px; color:#000;">
			 <?php 
$qry = mssql_query("select  CAST(db1 as text) as total,CAST(extra as text) as total2,CAST([status] as text) as total3
from [cg2015].[dbo].[subject] where subject='$courseps' "); 
$row = mssql_fetch_assoc($qry); 
echo $richooTTT=$row['total']; 

$richooTTTy=$row['total2']; 

$status=$row['total3']; 
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











if(empty($ns)){
	
}elseif($ns>"79.99"  && $ns<="100"){
	$bnn="80";
	
}elseif($ns<"80"){
	$bnn=$ns;
	
}
 $qrya = "select  CAST(comments as text) as total , CAST(gpa as text) as gpa from [cg2015].[dbo].[gradebb] where ids='$id' and (from1>='$bnn'  and from2<='$bnn') or  (from2>='$bnn'  and from1<='$bnn')"; 
$qry=mssql_query($qrya);
$row = mssql_fetch_assoc($qry); 
echo $grade=$row['total']; 
 $gpa=$row['gpa'];
 $mokkk=($gpa*$richooTTTy);
 
//$query3="update [cg2015].[dbo].[resit] set c103='$mokkk',c104='$richooTTTy'
 //where matricule='$mats' and departmet='$deptt'and levels='$level' and sex='$term' and db1='$take' and fname='$courseps' and   c110='$id' ";




$statusfbiox=$statusfbio;


$query33="update [cg2015].[dbo].[resit] set c104='$richooTTTy',c103='$gpa',c106='$gpa'
 where matricule='$mats' and departmet='$deptt'and levels='$levels' and sex='3' and db1='$db1s' and fname='$courseps'";








mssql_query ($query33) or die ('could not updated:'.mssql_error());

$qry = mssql_query("select sum(CAST(c103  as float)) as total
from [cg2015].[dbo].[resit] where matricule='$mats' and departmet='$deptt'and levels='$levels' and sex='3' and db1='$db1s'  "); 
$row = mssql_fetch_assoc($qry); 
   $creditr=$row['total']; 
 
$qry = mssql_query("select sum(CAST(c104  as float)) as total
from [cg2015].[dbo].[resit] where matricule='$mats' and departmet='$deptt'and levels='$levels' and sex='3' and db1='$db1s'  "); 
$row = mssql_fetch_assoc($qry); 
  $total31=$row['total']; 


$qry = mssql_query("select count(*) as total FROM  [cg2015].[dbo].[resit] where matricule='$mats' and departmet='$deptt'and levels='$levels' and sex='3' and db1='$db1s'  "); 
$row = mssql_fetch_assoc($qry); 
  $total32=$row['total']; 



 ?>
			 
			  </td> 
			  <td style=" width:60px; height:15px; color:#000; ">
			  <div style='float:left;margin-left:15px;'>
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



$queryp0pp="update [cg2015].[dbo].[resit] set c105='$statusfbiocredit'
 where matricule='$mats' and departmet='$deptt'and levels='$levels' and sex='3' and db1='$db1s' and fname='$courseps'";




mssql_query ($queryp0pp) or die ('could not updated:'.mssql_error());

$qry = mssql_query("select sum(CAST(c105 as float)) as total
from [cg2015].[dbo].[resit] where matricule='$mats' and departmet='$deptt'and levels='$levels' and sex='3' and db1='$db1s'  "); 
$row = mssql_fetch_assoc($qry); 
   $totalcc=$row['total']; 
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   


				  
$qry = mssql_query("select SUM(CAST(c101  as float)+ CAST(c102 as float)) as total
from [cg2015].[dbo].[gpa] where matricule='$mats' and departmet='$deptt'  and  fname='$courseps' "); 
$row = mssql_fetch_assoc($qry); 
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
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 if(empty($ns)){
	
}elseif($ns>"79.99"  && $ns<="100"){
	$bnn="80";
	
}elseif($ns<"80"){
	$bnn=$ns;
	
}
 $qrya = "select  CAST(comments as text) as total , CAST(gpa as text) as gpa from [cg2015].[dbo].[gradebb] where ids='$id' and (from1>='$bnn'  and from2<='$bnn') or  (from2>='$bnn'  and from1<='$bnn')"; 
$qry=mssql_query($qrya);
$row = mssql_fetch_assoc($qry); 
 $grade=$row['total']; 
 $gpa=$row['gpa'];
 $mokkk=($gpa*$richooTTTy);
 
			

 $mxc002sstd=$ns;
if(empty($mxc002sstd)){
 }
	elseif($mxc002sstd>''){			  
				  

$query33x="update [cg2015].[dbo].[gpa] set c101='$cas',c102='$exam',c104='$richooTTTy',c103='$gpa' where
matricule='$mats' and departmet='$deptt'and levels='$levels'  and  fname='$courseps'";



mssql_query ($query33x) or die ('could not updated:'.mssql_error());	  



	}			  
				  
				  
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
?>
			 </div>
			  </td> 
			   <td style="width:40px; height:15px; color:#000; ">
			 
			 	  <?php echo $gpa;?> 
			  </td> 
			 </tr>
			 
			 
			 <?php }
			 
			 ?>
			  </table> 	





<?php
if(empty($gf)){
	
}elseif($gf>="1" && $gf<="1"){
	?>

			  <div style="float:left; width:200px; height:15px; color:#000;font-family:times;font-size:12px; ">
					 <?PHP 
		 
		 
		 
		 		 
$qry = mssql_query("select count(*) as total from [cg2015].[dbo].[resit] where matricule='$mats' and levels='$levels' and sex='3' and db1='$db1s' "); 
$row = mssql_fetch_assoc($qry); 
 $riy111=$row['total']; 
 
  
  $mxcy48x3tt11= $riy111;
  if(empty($mxcy48x3tt11)){

 } 
elseif($mxcy48x3tt11>''){
?>

<b style="width:200px; height:15px;background:#fff;font-weight:bold;">

RESIT SEMESTER GPA <?php 




 
 	 
 	 
$qry = mssql_query("select sum(CAST(c106 as float) * CAST(c104 as float)) as total
from [cg2015].[dbo].[resit] where matricule='$mats' and departmet='$deptt'and levels='$levels' and sex='3' and db1='$db1s'  "); 
$row = mssql_fetch_assoc($qry); 
 $saveyuut=$row['total']; 
 

$qrytgh = mssql_query("select sum(CAST(c104 as float)) as total
from [cg2015].[dbo].[resit] where matricule='$mats' and departmet='$deptt'and levels='$levels' and sex='3' and db1='$db1s'  "); 
$row = mssql_fetch_assoc($qrytgh); 
 $richooTTTyssyuut=$row['total']; 







$mxc002st=$saveyuut;
if(empty($mxc002st)){
 $statusfbiou="";
 }
elseif($mxc002st>'' ){

printf("%01.2f",$statusfbiout=($saveyuut/$richooTTTyssyuut));
}
$queryf3iiii="update [cg2015].[dbo].[courses] set c104='$statusfbiout'
 where matricule='$mats' and departmet='$deptt'and levels='$levels'  and db1='$db1s'";
 
mssql_query ($queryf3iiii) or die ('could not updated:'.mssql_error());
 ?>


<?php
}	


  ?>
					
					 </div>
<?php }elseif($gf>="2" &&   $gf<="2"){
	$m1=9;
	$m2=$riy111;
	$gf="1";
}
	?>  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  				
 <?php 

$query = mssql_query("select  CAST(c101 as float) as c101,
CAST(c102 as float) as c102,CAST(fname as nvarchar(400)) as fname


 from [cg2015].[dbo].[resit] where db1='$db1s'  and matricule='$mats' and departmet='$deptt' and sex='2' and levels='$levels' order by fname ASC");
		 while ($row = mssql_fetch_array($query)) {
		 
		
		 
		 
		 
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

 $qrytgh ="select CAST(db1 as text) as total
from [cg2015].[dbo].[courses] where matricule='$mats' and departmet='$deptt'  and c120='$c116' group by db1";  $rttttt=mssql_query($qrytgh);
$row = mssql_fetch_assoc($rttttt); 
 $db1s=$row['total']; 
		 

$query = mssql_query("select  CAST(fname as nvarchar(400)) as fname, CAST(c101 as float) as c101,CAST(c102 as float) as c102 from [cg2015].[dbo].[resit] where db1='$db1s' and matricule='$mats' and departmet='$deptt' and sex='2' and levels='$levels' order by fname ASC"); 

		 while ($row = mssql_fetch_array($query)) {
		 
		 
		 
		 
		 
		 ?><tr><td style="width:60px; height:15px;">
			 		
			 <?php echo $courseps=$row['fname'];
		
		
		$exam=$row['c102'];
		
		$cas=$row['c101'];?>
			 
			  </td> 
			  <td style=" width:250px; height:15px; color:#000;">
			 <?php 
$qry = mssql_query("select  CAST(db1 as text) as total,CAST(extra as text) as total2,CAST([status] as text) as total3
from [cg2015].[dbo].[subject] where subject='$courseps' "); 
$row = mssql_fetch_assoc($qry); 
echo $richooTTT=$row['total']; 

$richooTTTy=$row['total2']; 

$status=$row['total3']; 
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













if(empty($ns)){
	
}elseif($ns>"79.99"  && $ns<="100"){
	$bnn="80";
	
}elseif($ns<"80"){
	$bnn=$ns;
	
}
 $qrya = "select  CAST(comments as text) as total , CAST(gpa as text) as gpa from [cg2015].[dbo].[gradebb] where ids='$id' and (from1>='$bnn'  and from2<='$bnn') or  (from2>='$bnn'  and from1<='$bnn')"; 
$qry=mssql_query($qrya);
$row = mssql_fetch_assoc($qry); 
echo $grade=$row['total']; 
 $gpa=$row['gpa'];
 $mokkk=($gpa*$richooTTTy);
 
//$query3="update [cg2015].[dbo].[resit] set c103='$mokkk',c104='$richooTTTy'
 //where matricule='$mats' and departmet='$deptt'and levels='$level' and sex='$term' and db1='$take' and fname='$courseps' and   c110='$id' ";




$statusfbiox=$statusfbio;


$query33="update [cg2015].[dbo].[resit] set c104='$richooTTTy',c103='$gpa',c106='$gpa'
 where matricule='$mats' and departmet='$deptt'and levels='$levels' and sex='2' and db1='$db1s' and fname='$courseps'";








mssql_query ($query33) or die ('could not updated:'.mssql_error());

$qry = mssql_query("select sum(CAST(c103  as float)) as total
from [cg2015].[dbo].[resit] where matricule='$mats' and departmet='$deptt'and levels='$levels' and sex='2' and db1='$db1s'  "); 
$row = mssql_fetch_assoc($qry); 
   $creditr=$row['total']; 
 
$qry = mssql_query("select sum(CAST(c104  as float)) as total
from [cg2015].[dbo].[resit] where matricule='$mats' and departmet='$deptt'and levels='$levels' and sex='2' and db1='$db1s'  "); 
$row = mssql_fetch_assoc($qry); 
  $total31=$row['total']; 


$qry = mssql_query("select count(*) as total FROM  [cg2015].[dbo].[resit] where matricule='$mats' and departmet='$deptt'and levels='$levels' and sex='2' and db1='$db1s'  "); 
$row = mssql_fetch_assoc($qry); 
  $total32=$row['total']; 




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

$queryp0pp="update [cg2015].[dbo].[resit] set c105='$statusfbiocredit'
 where matricule='$mats' and departmet='$deptt'and levels='$levels' and sex='2' and db1='$db1s' and fname='$courseps'";




mssql_query ($queryp0pp) or die ('could not updated:'.mssql_error());

$qry = mssql_query("select sum(CAST(c105 as float)) as total
from [cg2015].[dbo].[resit] where matricule='$mats' and departmet='$deptt'and levels='$levels' and sex='2' and db1='$db1s'  "); 
$row = mssql_fetch_assoc($qry); 
   $totalcc=$row['total']; 
   
   
   
   
   
   
   
   
   
   
   
   
   

?>
			 
			  </td> 
			   <td style="width:40px; height:15px; color:#000; ">
			 
			 	  <?php echo $gpa;
				  
				  
				  
				    
				  
$qry = mssql_query("select CAST(fname as text) as total
from [cg2015].[dbo].[gpa] where matricule='$mats' and departmet='$deptt'  and  fname='$courseps' "); 
$row = mssql_fetch_assoc($qry); 
 $xdf=$row['total']; 
 







$mxc002sstd=$xdf;
if(empty($mxc002sstd)){

$query33x="insert into [cg2015].[dbo].[gpa] (fname,c101,c102,c104,c103,matricule,departmet,levels,sex,db1)
values ( '$courseps','$cas','$exam','$richooTTTy','$statusfbio',
'$mats' , '$deptt', '200' , '2' ,'$db1s' )";












mssql_query ($query33x) or die ('could not updated:'.mssql_error());
 }
	elseif($mxc002sstd>''){			  
				  
			
$query33x="update [cg2015].[dbo].[gpa] set c101='$cas',c102='$exam',c104='$richooTTTy',c103='$statusfbio' where
matricule='$mats' and departmet='$deptt' and  fname='$courseps'";










mssql_query ($query33x) or die ('could not updated:'.mssql_error());	  


	}			  
				  
				  
			


				  
$qry = mssql_query("select SUM(CAST(c101 as float) + CAST(c102 as float)) as total
from [cg2015].[dbo].[gpa] where matricule='$mats' and departmet='$deptt'  and  fname='$courseps' "); 
$row = mssql_fetch_assoc($qry); 
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
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 if(empty($ns)){
	
}elseif($ns>"79.99"  && $ns<="100"){
	$bnn="80";
	
}elseif($ns<"80"){
	$bnn=$ns;
	
}
 $qrya = "select  CAST(comments as text) as total , CAST(gpa as text) as gpa from [cg2015].[dbo].[gradebb] where ids='$id' and (from1>='$bnn'  and from2<='$bnn') or  (from2>='$bnn'  and from1<='$bnn')"; 
$qry=mssql_query($qrya);
$row = mssql_fetch_assoc($qry); 
 $grade=$row['total']; 
 $gpa=$row['gpa'];
 $mokkk=($gpa*$richooTTTy);
 
			

 $mxc002sstd=$ns;
if(empty($mxc002sstd)){
 }
	elseif($mxc002sstd>''){			  
				  

$query33x="update [cg2015].[dbo].[gpa] set c101='$cas',c102='$exam',c104='$richooTTTy',c103='$gpa' where
matricule='$mats' and departmet='$deptt'and levels='$levels'  and  fname='$courseps'";



mssql_query ($query33x) or die ('could not updated:'.mssql_error());	  











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




$qry = mssql_query("select sum(CAST(c104 as float)) as total
from [cg2015].[dbo].[resit] where matricule='$mats' and departmet='$deptt'and levels='$levels' and sex='2' and db1='$db1s'  "); 
$row = mssql_fetch_assoc($qry); 
$save=$row['total']; 
 echo $save3=$row['total']; 



$qry = mssql_query("select count(*) as total FROM  [cg2015].[dbo].[resit]  where matricule='$mats' and departmet='$deptt'and levels='$levels' and sex='2' and db1='$db1s'  "); 
$num_rows=mssql_num_rows($qry);$row = mssql_fetch_assoc($qry); 
$richooTTTyss=$row['total']; 
 


?></b>
					 </div>
		 		 <div style="float:left; width:200px; height:15px; color:#000;font-family:times;font-size:12px; ">
					 
					
<b style="width:200px; height:15px;background:#fff;font-weight:normal;">
TOTAL CREDITS EARNED:<?php 

$qry = mssql_query("select sum(CAST(c105 as float)) as total
from [cg2015].[dbo].[resit] where matricule='$mats' and departmet='$deptt'and levels='$levels' and sex='2' and db1='$db1s'  "); 
$row = mssql_fetch_assoc($qry); 
   $totalccc=$row['total']; 
echo $totalccc;

$qry = mssql_query("select sum(CAST(c104 as float)) as total
from [cg2015].[dbo].[resit] where matricule='$mats' and departmet='$deptt'and levels='$levels' and sex='2' and db1='$db1s'  "); 
$row = mssql_fetch_assoc($qry); 
$save=$row['total']; 
 

?></b>


					 </div>

					 </div>
			  
			  
	
			  
			   <div style="float:left; width:589px; height:15px; color:#000;margin-left:7px;font-family:times;font-size:12px; ">
					 
					
			   <div style="float:left; width:320px;height:15px;">
<b style="width:320px; height:15px;background:#fff;font-weight:normal;">

GPA CREDITS ATTEMPTED: <?php 


$qry = mssql_query("select sum(CAST(c104 as float)) as total
from [cg2015].[dbo].[resit] where matricule='$mats' and departmet='$deptt'and levels='$levels' and sex='2' and db1='$db1s'  "); 
$row = mssql_fetch_assoc($qry); 
echo $save=$row['total']; 
 





?>
					 </div>
			  
			  
			   <div style="float:left; width:200px;height:15px;">
			  
			  	
<b style="width:200px; height:15px;background:#fff;font-weight:normal;">

GPA CREDITS EANRED: <?php 


echo $totalccc;

$qry = mssql_query("select sum(CAST(c103 as float)) as total
from [cg2015].[dbo].[resit] where matricule='$mats' and departmet='$deptt'and levels='$levels' and sex='2' and db1='$db1s'  "); 
$row = mssql_fetch_assoc($qry); 
$saves=$row['total']; 
 $saves3=$row['total']; 




?>
			  
			   </div>
			  
			  
			   </div>
			   
			   
			   
			   
			   
			   
			   
			  
			   <div style="float:left; width:589px; height:15px; color:#000;margin-left:7px;font-family:times;font-size:12px; ">
			  
			   <div style="float:left; width:320px; height:15px; color:#000;font-family:times;font-size:12px; ">
					 
				

					 </div>
			  
			  
			  
			  
			   <div style="float:left; width:200px; height:15px; color:#000;font-family:times;font-size:12px; ">
					 
					
<b style="width:200px; height:15px;background:#fff;font-weight:bold;">

SEMESTER GPA <?php 




 
 	 
$qry = mssql_query("select sum(CAST(c106 as float)* CAST(c104 as float)) as total
from [cg2015].[dbo].[resit] where matricule='$mats' and departmet='$deptt'and levels='$levels' and sex='2' and db1='$db1s'  "); 
$row = mssql_fetch_assoc($qry); 
$saveyuus=$row['total']; 
 

 	 
$qry = mssql_query("select sum(CAST(c104 as float)) as total
from [cg2015].[dbo].[resit] where matricule='$mats' and departmet='$deptt'and levels='$levels' and sex='2' and db1='$db1s'  "); 
$row = mssql_fetch_assoc($qry); 
 $richooTTTyssyuus=$row['total']; 
 







$mxc002sst=$saveyuus;
if(empty($mxc002sst)){
 $statusfbious3="";
 }
elseif($mxc002sst>'' ){

printf("%01.2f",$statusfbious3=($saveyuus/$richooTTTyssyuus));
}
$queryf3iiiiyy="update [cg2015].[dbo].[courses] set c105='$statusfbious3'
 where matricule='$mats' and departmet='$deptt'and levels='$levels'  and db1='$db1s'";
		 
mssql_query ($queryf3iiiiyy) or die ('could not updated:'.mssql_error());
 

 	 
$qry = mssql_query("select CAST(c103 as float) as total
from [cg2015].[dbo].[courses] where  matricule='$mats' and departmet='$deptt'and levels='$levels' and c115='$c115' and c120='$c116' and db1='$db1s' "); 
$row = mssql_fetch_assoc($qry); 
 $c1=$row['total']; 
 

$qry = mssql_query("select CAST(c104 as float) as total
from [cg2015].[dbo].[courses] where  matricule='$mats' and departmet='$deptt'and levels='$levels' and c115='$c115' and c120='$c116'and db1='$db1s' "); 
$row = mssql_fetch_assoc($qry); 
 $c2=$row['total']; 
 

	
$qry = mssql_query("select CAST(c105 as float) as total
from [cg2015].[dbo].[courses] where  matricule='$mats' and departmet='$deptt' and levels='$levels'and c115='$c115'  and c120='$c116' and db1='$db1s' "); 
$row = mssql_fetch_assoc($qry); 
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

$qry = mssql_query("select sum(CAST(c103 as float) + CAST(c104 as float) + CAST(c105  as float)) as total
from [cg2015].[dbo].[courses] where matricule='$mats' and departmet='$deptt'and levels='$levels' and c115='$c115' and c120='$c116' and db1='$db1s'  "); 
$row = mssql_fetch_assoc($qry); 
 $totalgpa=$row['total']; 
 $mxc002sstx=$totalgpa;
if(empty($mxc002sstx)){
 $statusfbious3xx="0";
 }
elseif($mxc002sstx>'' ){
 $statusfbious3xx=($totalgpa/$tmop);

}
$queryf3iiiiyyx="update [cg2015].[dbo].[courses] set c109='$statusfbious3xx'
 where matricule='$mats' and departmet='$deptt'and levels='$levels' and c115='$c115' and c120='$c116' and db1='$db1s'";
		 
mssql_query ($queryf3iiiiyyx) or die ('could not updated:'.mssql_error());
 
	
$qry = mssql_query("select SUM(CAST(c109  as float)) as total
from [cg2015].[dbo].[courses] where  matricule='$mats' and departmet='$deptt' "); 
$row = mssql_fetch_assoc($qry); 
 $maboh=$row['total']; 		
		
 	 
$qry = mssql_query("select SUM(CAST(c104  as float)) as total
from [cg2015].[dbo].[gpa] where  matricule='$mats' and departmet='$deptt' "); 
$row = mssql_fetch_assoc($qry); 
 $attempted=$row['total']; 		



$qry = mssql_query("select SUM(CAST(c103  as float)) as total
from [cg2015].[dbo].[gpa] where  matricule='$mats' and departmet='$deptt' and c104>'' "); 
$row = mssql_fetch_assoc($qry); 
 $earn=$row['total']; 		

 
$qry = mssql_query("select SUM(CAST(c103  as float)) as total
from [cg2015].[dbo].[gpa] where  matricule='$mats' and departmet='$deptt' and c103>='2'"); 
$row = mssql_fetch_assoc($qry); 
 $earn2=$row['total']; 		
 
 
$qry = mssql_query("select (SUM(CAST(c103 as float) *  CAST(c104  as float))/SUM(CAST(c104  as float))) as total
from [cg2015].[dbo].[gpa] where  matricule='$mats' and departmet='$deptt' "); 
$row = mssql_fetch_assoc($qry); 
 $gpa=$row['total']; 
 ?>

					 </div>
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
					 </div>	 
					 
					 
					 
					 
					 
				 
			  	 <table width="580px" cellpadding="0" cellspacing="0" style="font-size:11px;white-space:wrap;font-family:times;float:left;margin-left:10px;">
							 
			 <tr><td style="width:50px; height:15px;">
			 
			  </td> 
			  <td style=" width:250px; height:15px; color:#000;">

			
<b style="width:380px; height:15px;background:#fff;font-weight:bold;font-size:12px;"><?PHP 
		 
$qrytgh ="select CAST(db1 as text) as total
from [cg2015].[dbo].[courses] where matricule='$mats' and departmet='$deptt'  and c120='$c116' group by db1";  $rttttt=mssql_query($qrytgh);
$row = mssql_fetch_assoc($rttttt); 
 $db1s=$row['total']; 
		 
  
		 
		 		 
$qry = mssql_query("select count(*) as total from [cg2015].[dbo].[resit] where matricule='$mats' and levels='$levels' and sex='4' and db1>='$db1s' and db1<='$db1s'"); 
$row = mssql_fetch_assoc($rttttt); 
 $riy111=$row['total']; 
		 
  
  $mxcy48x3tt11= $riy111;
  if(empty($mxcy48x3tt11)){

 } 
elseif($mxcy48x3tt11>'0'){
echo $statusfmxcy48x3tt11="<b>Resit Second Semester Session $db1s </b>"; 
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

$qrytgh ="select CAST(db1 as text) as total
from [cg2015].[dbo].[courses] where matricule='$mats' and departmet='$deptt' and c120='$c116' group by db1";  $rttttt=mssql_query($qrytgh);
$row = mssql_fetch_assoc($rttttt); 
 $db1s=$row['total']; 
		 

$query = mssql_query("select  CAST(fname as nvarchar(400)) as fname, CAST(c101 as float) as c101,CAST(c102 as float) as c102 from [cg2015].[dbo].[resit] 
where db1='$db1s' and matricule='$mats' and departmet='$deptt' and sex='4' and levels='$levels' order by fname ASC"); 

		 while ($row = mssql_fetch_array($query)) {
		 
		 
		 
		 
		 
		 ?><tr><td style="width:60px; height:15px;">
			 		
			 <?php echo $courseps=$row['fname'];
		
		
		$exam=$row['c102'];
		
		$cas=$row['c101'];?>
			 
			  </td> 
			  <td style=" width:250px; height:15px; color:#000;">
			 <?php 
$qry = mssql_query("select  CAST(db1 as text) as total,CAST(extra as text) as total2,CAST([status] as text) as total3
from [cg2015].[dbo].[subject] where subject='$courseps' "); 
$row = mssql_fetch_assoc($qry); 
echo $richooTTT=$row['total']; 

$richooTTTy=$row['total2']; 

$status=$row['total3']; 
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













if(empty($ns)){
	
}elseif($ns>"79.99"  && $ns<="100"){
	$bnn="80";
	
}elseif($ns<"80"){
	$bnn=$ns;
	
}
 $qrya = "select  CAST(comments as text) as total , CAST(gpa as text) as gpa from [cg2015].[dbo].[gradebb] where ids='$id' and (from1>='$bnn'  and from2<='$bnn') or  (from2>='$bnn'  and from1<='$bnn')"; 
$qry=mssql_query($qrya);
$row = mssql_fetch_assoc($qry); 
echo $grade=$row['total']; 
 $gpa=$row['gpa'];
 $mokkk=($gpa*$richooTTTy);
 
//$query3="update [cg2015].[dbo].[resit] set c103='$mokkk',c104='$richooTTTy'
 //where matricule='$mats' and departmet='$deptt'and levels='$level' and sex='$term' and db1='$take' and fname='$courseps' and   c110='$id' ";




$statusfbiox=$statusfbio;


$query33="update [cg2015].[dbo].[resit] set c104='$richooTTTy',c103='$gpa',c106='$gpa'
 where matricule='$mats' and departmet='$deptt'and levels='$levels' and sex='4' and db1='$db1s' and fname='$courseps'";








mssql_query ($query33) or die ('could not updated:'.mssql_error());

$qry = mssql_query("select sum(CAST(c103  as float)) as total
from [cg2015].[dbo].[resit] where matricule='$mats' and departmet='$deptt'and levels='$levels' and sex='4' and db1='$db1s'  "); 
$row = mssql_fetch_assoc($qry); 
   $creditr=$row['total']; 
 
$qry = mssql_query("select sum(CAST(c104  as float)) as total
from [cg2015].[dbo].[resit] where matricule='$mats' and departmet='$deptt'and levels='$levels' and sex='4' and db1='$db1s'  "); 
$row = mssql_fetch_assoc($qry); 
  $total31=$row['total']; 


$qry = mssql_query("select count(*) as total FROM  [cg2015].[dbo].[resit] where matricule='$mats' and departmet='$deptt'and levels='$levels' and sex='4' and db1='$db1s'  "); 
$row = mssql_fetch_assoc($qry); 
  $total32=$row['total']; 




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

$queryp0pp="update [cg2015].[dbo].[resit] set c105='$statusfbiocredit'
 where matricule='$mats' and departmet='$deptt'and levels='$levels' and sex='4' and db1='$db1s' and fname='$courseps'";




mssql_query ($queryp0pp) or die ('could not updated:'.mssql_error());

$qry = mssql_query("select sum(CAST(c105 as float)) as total
from [cg2015].[dbo].[resit] where matricule='$mats' and departmet='$deptt'and levels='$levels' and sex='4' and db1='$db1s'  "); 
$row = mssql_fetch_assoc($qry); 
   $totalcc=$row['total']; 
   
   
   
   
   
   
   
   
   
   
   
   
   

?>
			 
			  </td> 
			   <td style="width:40px; height:15px; color:#000; ">
			 
			 	  <?php echo $gpa;
				  
				  
				  
				    
				  
$qry = mssql_query("select CAST(fname as text) as total
from [cg2015].[dbo].[gpa] where matricule='$mats' and departmet='$deptt'  and  fname='$courseps' "); 
$row = mssql_fetch_assoc($qry); 
 $xdf=$row['total']; 
 







$mxc002sstd=$xdf;
if(empty($mxc002sstd)){

$query33x="insert into [cg2015].[dbo].[gpa] (fname,c101,c102,c104,c103,matricule,departmet,levels,sex,db1)
values ( '$courseps','$cas','$exam','$richooTTTy','$statusfbio',
'$mats' , '$deptt', '200' , '4' ,'$db1s' )";












mssql_query ($query33x) or die ('could not updated:'.mssql_error());
 }
	elseif($mxc002sstd>''){			  
				  
			
$query33x="update [cg2015].[dbo].[gpa] set c101='$cas',c102='$exam',c104='$richooTTTy',c103='$statusfbio' where
matricule='$mats' and departmet='$deptt' and  fname='$courseps'";










mssql_query ($query33x) or die ('could not updated:'.mssql_error());	  


	}			  
				  
				  
			


				  
$qry = mssql_query("select SUM(CAST(c101 as float) + CAST(c102 as float)) as total
from [cg2015].[dbo].[gpa] where matricule='$mats' and departmet='$deptt'  and  fname='$courseps' "); 
$row = mssql_fetch_assoc($qry); 
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
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 if(empty($ns)){
	
}elseif($ns>"79.99"  && $ns<="100"){
	$bnn="80";
	
}elseif($ns<"80"){
	$bnn=$ns;
	
}
 $qrya = "select  CAST(comments as text) as total , CAST(gpa as text) as gpa from [cg2015].[dbo].[gradebb] where ids='$id' and (from1>='$bnn'  and from2<='$bnn') or  (from2>='$bnn'  and from1<='$bnn')"; 
$qry=mssql_query($qrya);
$row = mssql_fetch_assoc($qry); 
 $grade=$row['total']; 
 $gpa=$row['gpa'];
 $mokkk=($gpa*$richooTTTy);
 
			

 $mxc002sstd=$ns;
if(empty($mxc002sstd)){
 }
	elseif($mxc002sstd>''){			  
				  

$query33x="update [cg2015].[dbo].[gpa] set c101='$cas',c102='$exam',c104='$richooTTTy',c103='$gpa' where
matricule='$mats' and departmet='$deptt'and levels='$levels'  and  fname='$courseps'";



mssql_query ($query33x) or die ('could not updated:'.mssql_error());	  











	}			  
				  	  
				  
				  
				  ?> 
			  </td> 
			 </tr>
			 
			 
			 <?php }
			 
			 ?>
			  </table> 
			  







			  <div style="float:left; width:200px; height:15px; color:#000;font-family:times;font-size:12px; ">
					 <?PHP 
		 
		 
		 
		 		 
$qry = mssql_query("select count(*) as total from [cg2015].[dbo].[resit] where matricule='$mats' and levels='$levels' and sex='4' and db1='$db1s' "); 
$row = mssql_fetch_assoc($qry); 
$riy111=$row['total']; 

  
  $mxcy48x3tt11= $riy111;
  if(empty($mxcy48x3tt11)){

 } 
elseif($mxcy48x3tt11>''){
?>

<b style="width:200px; height:15px;background:#fff;font-weight:bold;">

SEMESTER GPA <?php 




 
 	 
 	 
$qry = mssql_query("select sum(CAST(c106 as float)*  CAST(c104 as float)) as total
from [cg2015].[dbo].[resit]  where matricule='$mats' and departmet='$deptt'and levels='$levels' and sex='4' and db1='$db1s'  "); 
$row = mssql_fetch_assoc($qry); 
 $saveyuut=$row['total']; 
 

$qrytgh = mssql_query("select sum(CAST(c104 as float)) as total
from [cg2015].[dbo].[resit] where matricule='$mats' and departmet='$deptt'and levels='$levels' and sex='4' and db1='$db1s'  "); 
$row = mssql_fetch_assoc($qrytgh); 
 $richooTTTyssyuut=$row['total']; 







$mxc002st=$saveyuut;
if(empty($mxc002st)){
 $statusfbiou="";
 }
elseif($mxc002st>'' ){

printf("%01.2f",$statusfbiout=($saveyuut/$richooTTTyssyuut));
}
$queryf3iiii="update [cg2015].[dbo].[courses] set c104='$statusfbiout'
 where matricule='$mats' and departmet='$deptt'and levels='$levels'  and db1='$db1s'";
 
mssql_query ($queryf3iiii) or die ('could not updated:'.mssql_error());
 ?>


<?php
}	


  ?>
					
					 </div>
			  
			  
					 </div>
			  
			 		
				 
					 
							 
					 
					 
					 
					 
					 
					 
					 
					 
					 
					 
					 
					 
					 
					 
					 
					 
					 
					 
					 
					 
					 
					 <?php

if(empty($c116)){
	
	
}elseif($c116>="$opps"  &&  $c11<="$opps"){
	
	?>
	
			 <div style='float:left; width:589px; margin-top:-50px;'>
	
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
						 
			
					 
					  </div> 		 
						 
	
	<?php
	
}			 ?>
					 
			 
					 
					 
					 		 <?php

if(empty($c116)){
	
	
}elseif($c116>="$opps"  &&  $c11<="$opps"){
	?>  <div style="float:left; width:1180px;letter-spacing:2px; text-align:center;height:650px; margin-top:-220px;">
			  
			 <div style='float:left; width:1260px; height:15px;text-align:left; color:#000;margin-left:7px;font-family:times;font-size:12px;font-weight:normal; '>
			  
					<?php 
 $rtttttt="select CAST(ads as text) as ads from [cg2015].[dbo].[foot] where ads>''";
$resultgssss=mssql_query($rtttttt);
		 while ($row = mssql_fetch_array($resultgssss)) {
		 
	
		 ?>
			   <div style='float:left; width:420px;background:#fff;  height:15px; color:#000;font-family:times;font-size:11px; '>
					 
				<?php echo $row["ads"];?>
					 
					 </div>
			   
					 
					 
					 
			  
			
			   
					 
	
		
	<?php
	
}
	
	 ?> 		  
		
					  </div> 
					 	<div style="float:left; width:1180px;letter-spacing:2px; text-align:center;height:150px; margin-top:40px;">
		  <b>
					<?php 
 $rtttttt="select CAST(period as text) as period from [cg2015].[dbo].[signature]  where signame='1'";
$resultgssss=mssql_query($rtttttt);
		 while ($row = mssql_fetch_array($resultgssss)) {
		 
	?><?php echo $row["period"];?>
	<?php
	
}
	
	 ?> ............................................</b>
			   </div>	
					 </div>	
<?php } ?>
			  
					 </div>	 
			
			  <div style="float:left; width:1180px;
				  
				  position:inherit;
				  
				  
				  
				  text-align:center;height:100px; margin-top:-230px;">
		<?php
 $matricule=$mats;
$default_value = array();
$default_value['filetype'] = 'PNG';
$default_value['dpi'] = 72;
$default_value['scale'] = isset($defaultScale) ? $defaultScale : 1;
$default_value['rotation'] = 0;
$default_value['font_family'] = 'Arial.ttf';
$default_value['font_size'] = 12;
$default_value['text'] = '';
$default_value['a1'] = '';
$default_value['a2'] = '';
$default_value['a3'] = '';

$filetype = isset($_POST['filetype']) ? $_POST['filetype'] : $default_value['filetype'];
$dpi = isset($_POST['dpi']) ? $_POST['dpi'] : $default_value['dpi'];
$scale = intval(isset($_POST['scale']) ? $_POST['scale'] : $default_value['scale']);
$rotation = intval(isset($_POST['rotation']) ? $_POST['rotation'] : $default_value['rotation']);
$font_family = isset($_POST['font_family']) ? $_POST['font_family'] : $default_value['font_family'];
$font_size = intval(isset($_POST['font_size']) ? $_POST['font_size'] : $default_value['font_size']);
$text = isset($_POST['text']) ? $_POST['text'] : $default_value['text'];
$text=$matricule;
registerImageKey('filetype', $filetype);
registerImageKey('dpi', $dpi);
registerImageKey('scale', $scale);
registerImageKey('rotation', $rotation);
registerImageKey('font_family', $font_family);
registerImageKey('font_size', $font_size);
registerImageKey('text', $text);

$default_value['checksum'] = '';
$checksum = isset($_POST['checksum']) ? $_POST['checksum'] : $default_value['checksum'];
registerImageKey('checksum', $checksum);
registerImageKey('code', 'BCGcode39');

$characters = array('0', '1', '2', '3', '4', '5', '6', '7', '8', '9', 'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z', '-', '.', '&nbsp;', '$', '/', '+', '%');

?>

            <?php  getSelectHtml('type', $filename, $availableBarcodes); ?>
   
<?php getSelectHtml('filetype', $filetype, array('PNG' => 'PNG - Portable Network Graphics', 'JPEG' => 'JPEG - Joint Photographic Experts Group', 'GIF' => 'GIF - Graphics Interchange Format')); ?>
                    
                        <?php getInputTextHtml('dpi', $dpi, array('type' => 'number', 'min' => 72, 'max' => 300, 'required' => 'required')); ?> 
  <?php  getInputTextHtml('scale', $scale, array('type' => 'number', 'min' => 1, 'max' => 4, 'required' => 'required')); ?>
                    <?php  getSelectHtml('rotation', $rotation, array(180 => '180&deg; clockwise', 180 => '180&deg; clockwise', 270 => '270&deg; clockwise')); ?>
                    <?php  getSelectHtml('font_family', $font_family, listfonts('../font')); ?> <?php  getInputTextHtml('font_size', $font_size, array('type' => 'number', 'min' => 1, 'max' => 30)); ?>
                  <?php  getInputTextHtml('text', $text, array('type' => 'text', 'required' => 'required')); ?> 

        
                    <?php
                        $finalRequest = '';
                        foreach (getImageKeys() as $key => $value) {
                            $finalRequest .= '&' . $key . '=' . urlencode($value);
                        }
                        if (strlen($finalRequest) > 0) {
                            $finalRequest[0] = '?';
                        }
                    ?>
                    <div id="imageOutput" style="float:left;">
                        <?php if ($imageKeys['text'] !== '') { ?>
						<img src="image.php<?php echo $finalRequest; ?>" alt="Barcode Image" /><?php }
                        else { ?><?php } ?>
                    </div> 
					 
		 </div>	 
					 </div>	 
					
					 
					 <?php 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
 	 
 
			 
			} 
			 
			 
			 ?>  
			  </B>
			  	  </B>	  </B>	  </B></div>	 