<?php 
include '../dbcs.php';
page_protect();
ini_set('max_execution_time', 3250000); //300 seconds = 5 minutes

 $notesa=$_SESSION['user_name'];
 $notes=$_GET['roll'];








?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd"> 
				  <?php
				  $ss=$_GET['mats']; $db1=$_GET['db1'];$t1=$_GET['dept'];$t2=$_GET['levels'];
				  
				  
$qry = mssql_query("select  CAST(deptf as text) as id
from [cg2015].[dbo].[classes] where classs='$t1' "); 
$row = mssql_fetch_assoc($qry); 
 $id=$row['id']; 
$qry = mssql_query("select  CAST(school as text) as school, CAST(town as text) as town, CAST(code as text) as code,
 CAST(contact as text) as contact, CAST(website as text) as website, CAST(email as text) as email
from [cg2015].[dbo].[school] where ids='$id' "); 
$row = mssql_fetch_assoc($qry); 




 $school=$row['school'];  $code=$row['code']; $address=$row['town']; 
 $website=$row['website'];  $email=$row['email']; $contact=$row['contact']; 
 
 
$qry = mssql_query("select  CAST(fname as text) as fm
from [cg2015].[dbo].[courses] where departmet='$t1' and levels='$t2' and matricule='$ss' "); 
$row = mssql_fetch_assoc($qry); 
 $fm=$row['fm']; 
 
 
 
 
 ?>
<html>
	<head>
		<title>Resit Form C </title>
		<link rel="stylesheet" type="text/css" media="all" href="style.css" />
		<script type="text/javascript" src="tabview.js"></script>
		
		<!-- -----------Links Tab View scripts-------------- -->
		<link rel="stylesheet" type="text/css" href="tabview.css" />
		<style>
	.submit:hover {
		background-color: #1bc5b3;
		cursor: pointer;
	}
	body{background:url(jiii.png);}
		
		</style>
	</head>
	
	<body onload="window.print();" >		
	
				<div class="home">
						 
                  <div style='float:left;width:800px;margin-top:80px;margin-LEFT:100PX; height:102px;'>
				  
                  <div style='float:left;width:170px; height:102px;'>
				  </div>
				  <div style='float:left;width:600px; height:102px;font-size:21px;'>
<?php echo $school;?><br>
<?php echo $address;?><br>
<?php echo $website;?>,<?php echo $contact;?>







				  </div>
				  </div>
				  <?php
				  $ss=$_GET['mats']; $db1=$_GET['db1'];$t1=$_GET['dept'];$t2=$_GET['levels'];
				  
				  
				   $mxx=$ss;
				$qry = mssql_query("select CAST(empname as text) as total
from employees where empname='$mxx'  "); 
$row = mssql_fetch_assoc($qry); 
 $savep4=$row['total']; 

$sexsssy=$t2;
 if(empty($sexsssy)){
 $statusmxbm="";
 }
 
   elseif($sexsssy>=400 && $sexsssy<=400  ){
 echo  $statusmxbmyyu="


                  <div style='float:left;width:800px;margin-top:20px;margin-LEFT:100PX; height:102px;border:1px  solid #000;'>
				  
                  <div style='float:left;width:120px; height:25px;border-right:1px  solid #000;'>
				  Student Name:
				  </div>
				    <div style='float:left;width:678px; height:25px;'>
				 $fm
				  </div>
				   <div style='float:left;width:120px;border-top:1px  solid #000; height:25px;border-right:1px  solid #000;'>
				  Matricule:
				  </div>
				    <div style='float:left;width:678px; border-top:1px  solid #000;height:25px;'>
	 $ss 
				  
				
				  </div>
	   <div style='float:left;width:120px;border-top:1px  solid #000; height:25px;border-right:1px  solid #000;'>
				  Department:
				  </div>
				    <div style='float:left;width:678px; border-top:1px  solid #000;height:25px;'>
			 $t1
				  </div>
				  <div style='float:left;width:120px;border-top:1px  solid #000; height:25px;border-right:1px  solid #000;'>
				 Level:
				  </div>
				    <div style='float:left;width:678px; border-top:1px  solid #000;height:25px;'>
				 $t2
				  </div>";
				  
				  }
	
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
  elseif($sexsssy>=300 && $sexsssy<=300  ){
 echo  $statusmxbmyyu="


                  <div style='float:left;width:800px;margin-top:20px;margin-LEFT:100PX; height:102px;border:1px  solid #000;'>
				  
                  <div style='float:left;width:120px; height:25px;border-right:1px  solid #000;'>
				  Student Name:
				  </div>
				    <div style='float:left;width:678px; height:25px;'>
				 $fm
				  </div>
				   <div style='float:left;width:120px;border-top:1px  solid #000; height:25px;border-right:1px  solid #000;'>
				  Matricule:
				  </div>
				    <div style='float:left;width:678px; border-top:1px  solid #000;height:25px;'>
	 $ss 
				  
				
				  </div>
	   <div style='float:left;width:120px;border-top:1px  solid #000; height:25px;border-right:1px  solid #000;'>
				  Department:
				  </div>
				    <div style='float:left;width:678px; border-top:1px  solid #000;height:25px;'>
			 $t1
				  </div>
				  <div style='float:left;width:120px;border-top:1px  solid #000; height:25px;border-right:1px  solid #000;'>
				 Level:
				  </div>
				    <div style='float:left;width:678px; border-top:1px  solid #000;height:25px;'>
				 $t2
				  </div>";
				  
				  }
	
 
  elseif($sexsssy>=200 && $sexsssy<=200  ){
 echo  $statusmxbmyyu="
  
			
  
  
                  <div style='float:left;width:800px;margin-top:20px;margin-LEFT:100PX; height:102px;border:1px  solid #000;'>
				  
                  <div style='float:left;width:150px;height:102px;border:1px  solid #000;'>
				  <img src='load_image.php?pic_id=$savep4;' width='150px' height='101p'>
				  </div>
				  
				  
                  <div style='float:left;width:648px;height:102px;'>
				  
                  <div style='float:left;width:648px;height:25px;'>
                  <div style='float:left;width:100px;height:25px;color:#787878;border:1px  solid #000;'>
				  Full Name(s)
				  </div>
				  
				  
				   <div style='float:left;width:530px;height:25px;border-bottom:1px  solid #000;'>
				$fm
				  </div>
				  </div>
				  
                  <div style='float:left;width:648px;height:25px;'>
				    <div style='float:left;width:100px;height:24px;color:#787878;border:1px  solid #000;'>
				  Department
				  </div>
				  
				  
				   <div style='float:left;width:530px;height:25px;border-bottom:1px  solid #000;'>
				$t1
				  </div>
				  
				  </div>
				  <div style='float:left;width:648px;height:25px;'>
				    <div style='float:left;width:100px;height:24px;color:#787878;border:1px  solid #000;'>
				<i>Mat:</i>
				  </div>
				  
				  
				   <div style='float:left;width:530px;height:25px;border-bottom:1px  solid #000;'>
				$ss
				  </div>
				  
				  </div>
				  
				  
				  
				  <div style='float:left;width:648px;height:25px;'>
				    <div style='float:left;width:100px;height:24px;color:#787878;'>
				<i>Level</i>
				  </div>
				  
				  
				   <div style='float:left;width:530px;height:25px;'>
				$t2
				  </div>
				  
				  </div>
				  
				  
				  
				  
				  
				  
				  
				  </div>
				  
				  
				  
				  
				  
				  </div>";
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  }
  ?>			  
				  
				  
				  </div>
		
                  <div style='float:left;width:800px;margin-LEFT:100PX;  height:30px;text-align:center;'><b>STUDENT RESIT FORM C </b></div>
            
                  <div style='float:left;width:800px;margin-LEFT:100PX; background:#ccc; height:auto;border:1px double #000;'>
                  <div style='float:left;width:101px;border-right:1px solid #000; height:25px;'> Code</div>
				  
				  
                  <div style='float:left;width:399px;height:25px; border-right:1px  solid #000; '>Course Description</div>
		
                  <div style='float:left;width:49px;height:25px;border-right:1px  solid #000;  '>CA</div>
		<div style='float:left;width:49px;height:25px;border-right:1px  solid #000;  '>EXAM</div>
		<div style='float:left;width:50px;height:25px;border-right:1px  solid #000;  '>TOTAL</div>
		
		
                  <div style='float:left;width:70px;height:25px;border-right:1px  solid #000;  '>Credit</div>
                  <div style='float:left;width:70px;height:25px;  '>Remark</div>
		</div> 

		<?php
$sexss=$t2;
 if(empty($sexss)){
 $statusmxbm="";
 }
  elseif($sexss>=200 && $sexss<=200  ){
  $statusmxbm="200";
  $statusmxbm1="400";
}
  elseif($sexss>=30 && $sexss<=300  ){
$statusmxbm="200";
  $statusmxbm1="400";
}
  elseif($sexss<=400 && $sexss>=400  ){
  $statusmxbm="200";
  $statusmxbm1="400";
}


$query = mssql_query("select  CAST(subject as nvarchar(400)) as subject,


CAST(db1 as nvarchar(400)) as db1

 from subject where department='$t1' and year2>'' and year1>='$statusmxbm' and year1<='$statusmxbm1'  
 
 
 
 group by subject,db1
 
 
 
 
 
 
 
 
 
 
 
 
 
 order by subject asc"); 

		 while ($row = mssql_fetch_array($query)) {
		 
		 











?>
		
	
        <div style='float:left; width:800PX;margin-LEFT:100PX;   font-size:12px; color:#686868; font-family:arial; text-transform:UPPERCASE;  '>
        <div style='float:left;width:800px; '>
		
		<input type='hidden' name='id[]' value='$roll'></div>
<?php 
	   $courseps=$row['subject'];
				   
			$year1=$row['year1'];
				   	   
				 
$qry = mssql_query("select  CAST(db1 as text) as total
from courses where matricule='$ss'  AND levels='$year1'"); 
$row = mssql_fetch_assoc($qry); 
$take=$row['total']; 
		     
		
$qry = mssql_query("select  SUM(c101) as total
from resit where fname='$courseps' and  departmet='$t1' and matricule='$ss'  and sex='1'"); 
$row = mssql_fetch_assoc($qry); 
 $richooTTTgss1s1=$row['total']; 
		   
		
$qry = mssql_query("select  SUM(c102) as total
from resit where fname='$courseps' and  departmet='$t1' and matricule='$ss'   and sex='1'"); 
$row = mssql_fetch_assoc($qry); 
 $richooTTTgss2s1=$row['total']; 
				   
				   
				   
		
$qry = mssql_query("select  SUM(c101) as total
from resit where fname='$courseps' and  departmet='$t1' and matricule='$ss'  and sex='2'"); 
$row = mssql_fetch_assoc($qry); 
 $richooTTTgss1s2=$row['total']; 
		   
		
$qry = mssql_query("select  SUM(c102) as total
from resit where fname='$courseps' and  departmet='$t1' and matricule='$ss' and sex='2'"); 
$row = mssql_fetch_assoc($qry); 
 $richooTTTgss2s2=$row['total']; 
 
 
 
$qry = mssql_query("select  SUM(c101) as total
from resit where fname='$courseps' and  departmet='$t1' and matricule='$ss'and sex='3'"); 
$row = mssql_fetch_assoc($qry); 
 $richooTTTgss1s3=$row['total']; 
		   
		
$qry = mssql_query("select  SUM(c102) as total
from resit where fname='$courseps' and  departmet='$t1' and matricule='$ss' and sex='3'"); 
$row = mssql_fetch_assoc($qry); 
 $richooTTTgss2s3=$row['total']; 
				   
$qry = mssql_query("select  SUM(c101+c102) as total
from resit where fname='$courseps' and  departmet='$t1' and matricule='$ss'and sex='1'"); 
$row = mssql_fetch_assoc($qry); 
 $richooTTT=$row['total']; 


$qry = mssql_query("select  SUM(c101+c102) as total
from resit where fname='$courseps' and  departmet='$t1' and matricule='$ss' and sex='2'"); 
$row = mssql_fetch_assoc($qry); 
 $richooTTT2=$row['total']; 
				  
				  
				  
$qry = mssql_query("select  SUM(c101+c102) as total
from resit where fname='$courseps' and  departmet='$t1' and matricule='$ss' and sex='3'"); 
$row = mssql_fetch_assoc($qry); 
 $richooTTT3=$row['total'];

$sexsst=$richooTTT;
 if(empty($sexsst)){
 $statusmxbmt=$richooTTT2;
 $statusmxbmtt=1;
 
 }
  elseif($sexsst>''  ){
  $statusmxbmt=$richooTTT;
   $statusmxbmtt=1;
}





$sexssts=$richooTTT3;
 if(empty($sexssts)){
 $statusmxbmts=$richooTTT3;
 $statusmxbmtts=0;
 
 }
 
   elseif($sexssts>''  ){
  $statusmxbmts=$richooTTT3;
   $statusmxbmtts=1;
}
$mml1=($statusmxbmt+$statusmxbmts);
 
 
$mml2=($statusmxbmtt+$statusmxbmtts);
 
 $sexsstsss=$mml1;
 if(empty($sexsstsss)){
 $statusmxbmtsss="";
 }
 
  elseif(($sexsstsss>'')){
 $statusmxbmtsss=($mml1/$mml2);
 
 }
 
   $statusmxbmtsss;
   
   
 $sexsstssss=$statusmxbmtsss;
 if(empty($sexsstssss)){
 $statusmxbmtssss="";
 $height='25px';
 $color="#000";
   $size='14px';  $px='1px';
 }
   
    
  elseif(($sexsstsss>=0.1 && $sexsstsss<=49.99)){
$statusmxbmtssss=$statusmxbmtsss;
 $height='25px';
 $color="#000";
   $size='14px';  $px='1px';
 
 }
  elseif(($sexsstsss>49.99)){
$statusmxbmtssss='';
 $height='0';
   $color="#fff";
   $size='0px';  $px='0px';
   
 
		
$qry =("update resit set c109='1' where
 fname='$courseps' and  departmet='$t1' and matricule='$ss'  ");
 
 
mssql_query ($qry) or die ('could not updated:'.mssql_error());
   
 }
   

   
 $statusmxbmtssss;
				   
				   
				   
				   
				   
				   
				   
				   
				   
				   
				   
				   
				   
				   
				   ?>
                  <div style='float:left;width:801px;color:#000; height:auto;'>
                 

				 <div style='float:left;width:101px; border-left:<?php echo $px;?> solid <?php echo $color;?>;border-top:<?php echo $px;?> solid <?php echo $color;?>;border-bottom:<?php echo $px;?> solid <?php echo $color;?>;
				 border-right:<?php echo $px;?> solid <?php echo $color;?>; height:<?php echo $height;?>;color:<?php echo $color;?>; font-size:<?php echo $size;?>;'>
				  <div style='float:left;margin-top:5px;margin-left:5px;'> 
				 &nbsp; <?php 
				   echo $courseps;
				  
				  
   
   
   
   
   
				  ?></div></div>
				  
                  <div style='float:left;width:399px; border-left:<?php echo $px;?> solid <?php echo $color;?>;border-top:<?php echo $px;?> solid <?php echo $color;?>;border-bottom:<?php echo $px;?> solid <?php echo $color;?>;
				 border-right:<?php echo $px;?> solid <?php echo $color;?>; height:<?php echo $height;?>;color:<?php echo $color;?>; font-size:<?php echo $size;?>;'>&nbsp;
				    <div style='float:left;margin-top:5px;'>  <?php 
$qry = mssql_query("select  CAST(db1 as text) as total
from subject where subject='$courseps' and  department='$t1'    and year1='$t2'  and acc='$db1'"); 
$row = mssql_fetch_assoc($qry); 
echo $richooTTT=$row['total']; ?></div></div>
		  <div style='float:left;width:48px; border-left:<?php echo $px;?> solid <?php echo $color;?>;border-top:<?php echo $px;?> solid <?php echo $color;?>;border-bottom:<?php echo $px;?> solid <?php echo $color;?>;
				 border-right:<?php echo $px;?> solid <?php echo $color;?>; height:<?php echo $height;?>;color:<?php echo $color;?>; font-size:<?php echo $size;?>; text-align:center; '>
				  <?php 
				  
$mxc11k=	 $richooTTTgss1s1;			  
			
if(empty($mxc11k)){

 $cas=$richooTTTgss1s2;}
elseif($mxc11k>'' ){

 $cas=$mxc11k;


} 

$mxc11kk=$cas;
if(empty($mxc11kk)){

 $cas=$richooTTTgss1s3;
}
elseif($mxc11kk>'' ){

 $cas=$mxc11kk;


} 

echo  $cas;








				  
?></div>
                  <div style='float:left;width:48px; border-left:<?php echo $px;?> solid <?php echo $color;?>;border-top:<?php echo $px;?> solid <?php echo $color;?>;border-bottom:<?php echo $px;?> solid <?php echo $color;?>;
				 border-right:<?php echo $px;?> solid <?php echo $color;?>; height:<?php echo $height;?>;color:<?php echo $color;?>; font-size:<?php echo $size;?>; text-align:center; '>
				  <?php 		  
$mxc11kl=	 $richooTTTgss2s1;			  
			
if(empty($mxc11kl)){

 $exam=$richooTTTgss2s2;}
elseif($mxc11kl>'' ){

$exam=$mxc11kl;


} 

$mxc11klk=$exam;
if(empty($mxc11klk)){

$exam=$richooTTTgss2s3;
}
elseif($mxc11klk>'' ){

 $exam=$mxc11klk;


} 

echo  $exam;

?></div>
		
                  <div style='float:left;width:49px; border-left:<?php echo $px;?> solid <?php echo $color;?>;border-top:<?php echo $px;?> solid <?php echo $color;?>;border-bottom:<?php echo $px;?> solid <?php echo $color;?>;
				 border-right:<?php echo $px;?> solid <?php echo $color;?>; height:<?php echo $height;?>;color:<?php echo $color;?>; font-size:<?php echo $size;?>; text-align:center; '>
				  <?php ECHO $statusmxbmtssss;?>

</div>
		
		
                  <div style='float:left;width:70px; border-left:<?php echo $px;?> solid <?php echo $color;?>;border-top:<?php echo $px;?> solid <?php echo $color;?>;border-bottom:<?php echo $px;?> solid <?php echo $color;?>;
				 border-right:<?php echo $px;?> solid <?php echo $color;?>; height:<?php echo $height;?>;color:<?php echo $color;?>; font-size:<?php echo $size;?>;text-align:center;  '><?php
$qry = mssql_query("select  CAST(extra as text) as total
from subject where subject='$courseps'  and department='$t1'  and year1='$t2'  and acc='$db1'"); 
$row = mssql_fetch_assoc($qry); 

echo $richooTTTy=$row['total'];?> </div>
                  <div style='float:left;width:72px; border-left:<?php echo $px;?> solid <?php echo $color;?>;border-top:<?php echo $px;?> solid <?php echo $color;?>;border-bottom:<?php echo $px;?> solid <?php echo $color;?>;
				 border-right:<?php echo $px;?> solid <?php echo $color;?>; height:<?php echo $height;?>;color:<?php echo $color;?>; font-size:<?php echo $size;?>;text-align:center;  '>
				  <?php 
if(empty($mxc11)){
 $colorf1bio="yellow";
 $statusfbio="";}
elseif($mxc11>=$rangx1 && $mxc11<=$rangx2 ){
 $colorf1bio="#FF0000";
 $statusfbio="F";
 echo'<div style=" color:'. $colorf1bio.';">'.$statusfbio.'</div>';
}else if(($mxc11 >=$rangx3) && ($mxc11<=$rangx4)){
 $colorf1bio="blue";
 $statusfbio="D";
 echo'<div style=" color:'. $colorf1bio.';">'.$statusfbio.'</div>';}else if(($mxc11 >=$rangx5) && ($mxc11<=$rangx6)){
 $colorf1bio="blue";
 $statusfbio="C";
 echo'<div style=" color:'. $colorf1bio.';">'.$statusfbio.'</div>';}
 
 
else if(($mxc11 >=$rangx7) && ($mxc11<=$rangx8)){
 $colorf1bio="blue";
 $statusfbio="B";
 echo'<div style=" color:'. $colorf1bio.';">'.$statusfbio.'</div>';}
 
 
 else if(($mxc11 >=$rangx9) && ($mxc11<=$rangx10)){
 $colorf1bio="blue"; $statusfbio="A"; echo'<div style=" color:'. $colorf1bio.';">'.$statusfbio.'</div>';
} 
 
 ?>
		</DIV>
		
		
		</DIV>
		
		
</div>
		<?PHP } ?>
</fieldset>

                  <div style='float:left;width:800px;margin-LEFT:100PX;margin-top:7px; height:50px;'>
				  
                  <div style='float:left;width:800px;height:22px;'>
                  <div style='float:left;width:200px; height:22px;'>
<i> Total course(s) owe</i>
					
					</div>
				     <div style='float:left;width:100px;text-align:center;border:1px solid #000;background:#ccc;height:22px;'>
<?php 
?>
					
					</div>
				  
				   <div style='float:left;width:200px;height:22px;'>

					
					</div>
					
					
					<div style='float:left;width:150px; height:22px;'>
<i> Total Amount</i>
					
					</div>
				     <div style='float:left;width:100px;border:1px solid #000;background:#ccc;height:22px;'>

<?php		
?>
					</div>
					
					</div>
			  <div style='float:left;width:800px;height:22px;margin-top:10px;font-size:13px;'>
                  <div style='float:left;width:250px; height:22px;'>
 Departmental Period Covered =
					
					</div>	 <div style='float:left;width:180px; height:22px;text-align:left;'>
<?php     




?>
					
					</div>		
					  <div style='float:left;width:250px; height:22px;'>
  Period Covered by Student =
					
					</div>		
						
					
					
						 <div style='float:left;width:50px; height:22px;text-align:left;'>
					
					
					<?php     




?>
					
					
					</div>	 <div style='float:left;width:250px; height:22px;'>
  % of attendance by Student = <?php 
 $mxc11uk=$t2;
 ?>
					
					</div>		
						
					
					</div>	
					
				  
				  </div>

                  <div style='float:left;width:800px;margin-LEFT:100PX;margin-top:27px; height:102px;'>


                  <div style='float:left;width:200px; height:22px;'>
<i> Signature of Cashier</i>
					
					</div>
					
					
                  <div style='float:left;width:350px; height:22px;'>

					
					</div>
					
                  <div style='float:left;width:250px; height:22px;'>
<i> Signature of Rgistrar</i>
					
					</div>
					
					
					
			  <div style='float:left;width:300px; border-bottom:1px solid #000;height:22px;'>

					
					</div>
					
					
                  <div style='float:left;width:200px; height:22px;'>

					
					</div>
					
                  <div style='float:left;width:300px; border-bottom:1px solid #000; height:22px;'>

					
					</div>		
					
					
					
					
					
					
					
					
					
					</div>
				     <div style='float:left;width:900px; '>

					<a href="printresp.php?roll=<?php echo $ss;?>">Print</a>
					</div>		
