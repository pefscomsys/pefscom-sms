<?php 
include 'dbcs.php';
page_protect();
ini_set('max_execution_time', 3250000); //300 seconds = 5 minutes

 $notesa=$_SESSION['user_name'];
 $notes=$_GET['roll'];








?>
<?php
$query="select * from users where full_name='$notesa'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
?>

<?php   $teacher=$row['fax'];
?>
<?php }

$qry = mysql_query("select  name as total
from logo where id='$teacher'  "); 
$row = mysql_fetch_assoc($qry); 
$img=$row['total'];


$qry = mysql_query("select  school as total
from school where id='$teacher'  and tt='1' "); 
$row = mysql_fetch_assoc($qry); 
$f1name=$row['total'];


$qry = mysql_query("select  txts as total
from school where id='$teacher'  and tt='1' "); 
$row = mysql_fetch_assoc($qry); 
$tts=$row['total'];

$qry = mysql_query("select  trts as total
from school where id='$teacher'  and tt='1' "); 
$row = mysql_fetch_assoc($qry); 
$trts=$row['total'];



$qry = mysql_query("select  twon as total
from school where id='$teacher'  and tt='1' "); 
$row = mysql_fetch_assoc($qry); 
$town=$row['total'];




$qry = mysql_query("select  pobox as total
from school where id='$teacher'  and tt='1' "); 
$row = mysql_fetch_assoc($qry); 
$pobox=$row['total'];


$qry = mysql_query("select  pobox as total
from school where id='$teacher'  and tt='1' "); 
$row = mysql_fetch_assoc($qry); 
$pobox=$row['total'];



$qry = mysql_query("select  contact as total
from school where id='$teacher'  and tt='1' "); 
$row = mysql_fetch_assoc($qry); 
$contact=$row['total'];




?>
<?php
$roll=$_GET["1"];
$query="select * from gradeb where roll='1'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
?>

<?php  $rangx1=$row['from1'];
$rangx2=$row['from2'];
$c1=$row['comments'];
$gpa1=$row['gpa'];

?>
<?php } ?>




<?php
$roll=$_GET["1"];
$query="select * from gradeb where roll='2'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
?>

<?php  $rangx3=$row['from1'];
$rangx4=$row['from2'];
$c2=$row['comments'];
$gpa2=$row['gpa'];
?>
<?php } ?>









<?php
$roll=$_GET["1"];
$query="select * from gradeb where roll='3'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
?>

<?php  $rangx5=$row['from1'];
$rangx6=$row['from2'];

$c3=$row['comments'];
$gpa3=$row['gpa'];
?>
<?php } ?>







<?php
$roll=$_GET["1"];
$query="select * from gradeb where roll='4'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
?>

<?php  $rangx7=$row['from1'];
$rangx8=$row['from2'];

$c4=$row['comments'];
$gpa4=$row['gpa'];
?>
<?php } ?>








<?php
$roll=$_GET["1"];
$query="select * from gradeb where roll='5'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
?>

<?php     $rangx9=$row['from1'];
 $rangx10=$row['from2'];
 
$c5=$row['comments'];
$gpa5=$row['gpa'];
?>
<?php } ?>

<?php
$roll=$_GET["1"];
$query="select * from gradeb where roll='6'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
?>

<?php     $rangx11=$row['from1'];
 $rangx12=$row['from2'];
 
$c6=$row['comments'];
$gpa6=$row['gpa'];
?>
<?php } ?>

<?php
$roll=$_GET["1"];
$query="select * from gradeb where roll='7'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
?>

<?php     $rangx13=$row['from1'];
 $rangx14=$row['from2'];
 
$c7=$row['comments'];
$gpa7=$row['gpa'];
?>
<?php } ?>
<?php
$roll=$_GET["1"];
$query="select * from gradeb where roll='8'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
?>

<?php     $rangx15=$row['from1'];
 $rangx16=$row['from2'];
 
$c8=$row['comments'];
$gpa8=$row['gpa'];
?>
<?php } ?>
<?php
$roll=$_GET["1"];
$query="select * from gradeb where roll='9'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
?>

<?php     $rangx17=$row['from1'];
 $rangx18=$row['from2'];
 
$c9=$row['comments'];
$gpa9=$row['gpa'];
?>
<?php } ?><?php
$roll=$_GET["1"];
$query="select * from rush where roll='1'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>

<?php $take=$row[1];
$db1=$take;


?>
<?php } ?>
<?php
$roll=$_GET["1"];
$query="select * from courses where matricule='$notes'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>
<?php  $t1=$row['departmet'];
 $t2=$row['levels'];
	 $ss=$row['matricule'];	
 $fm=$row['fname'];	


$queryf3="update courses set c139='1'
 where matricule='$notes' and departmet='$t1' and db1='$take'";







mysql_query ($queryf3) or die (); 

 
 $qry2 = mysql_query("select SUM(balance) as total from historic where  matricule='$ss' and class='$t2'  "); 
$row = mysql_fetch_assoc($qry2); 
  $amounts=$row['total']; 




 
 $qry2 = mysql_query("select SUM(amount_paid) as total from historic where  matricule='$ss' and class='$t2'  "); 
$row = mysql_fetch_assoc($qry2); 
  $amount=$row['total']; 

 $qry = mysql_query("select firstin as total from control where department='$t1'  and db1='$t2'"); 
$row = mysql_fetch_assoc($qry); 
  $money=$row['total']; 
 
  $mmx1u=$money;
if(empty($mmx1u)){

$stand2="";
}


else if( ($mmx1u<=$amount )){


}
else if( ($mmx1u>$amount )){


}



?>
<?php } ?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd"> 
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
		 <img src="<?php echo $img;?>" width="100px" height="100px" >
				  </div>
				  <div style='float:left;width:600px; height:102px;font-size:21px;'>
<?php echo $f1name;?>  <?php echo $trts;?><br>
<?php echo $pobox;?><br>
		<?php echo $contact;?>







				  </div>
				  </div>
				  <?php
				   $mxx=$ss;
				$qry = mysql_query("select id as total
from employees where empname='$mxx'  "); 
$row = mysql_fetch_assoc($qry); 
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
  $statusmxbm1="200";
}
  elseif($sexss>=30 && $sexss<=300  ){
$statusmxbm="200";
  $statusmxbm1="300";
}
  elseif($sexss<=400 && $sexss>=400  ){
  $statusmxbm="400";
  $statusmxbm1="400";
}


$query = mysql_query("select  * from subject where department='$t1' and year2>'' and year1>='$statusmxbm' and year1<='$statusmxbm1'  order by subject asc"); 

		 while ($row = mysql_fetch_array($query)) {
		 
		 











?>
		
	
        <div style='float:left; width:800PX;margin-LEFT:100PX;   font-size:12px; color:#686868; font-family:arial; text-transform:UPPERCASE;  '>
        <div style='float:left;width:800px; '>
		
		<input type='hidden' name='id[]' value='$roll'></div>
<?php 
	   $courseps=$row['subject'];
				   
			$year1=$row['year1'];
				   	   
				 
$qry = mysql_query("select  db1 as total
from courses where matricule='$ss'  AND levels='$year1'"); 
$row = mysql_fetch_assoc($qry); 
$take=$row['total']; 
		     
		
$qry = mysql_query("select  SUM(c101) as total
from resit where fname='$courseps' and  departmet='$t1' and matricule='$ss'  AND db1='$take' and sex='1'"); 
$row = mysql_fetch_assoc($qry); 
 $richooTTTgss1s1=$row['total']; 
		   
		
$qry = mysql_query("select  SUM(c102) as total
from resit where fname='$courseps' and  departmet='$t1' and matricule='$ss'  AND db1='$take' and sex='1'"); 
$row = mysql_fetch_assoc($qry); 
 $richooTTTgss2s1=$row['total']; 
				   
				   
				   
		
$qry = mysql_query("select  SUM(c101) as total
from resit where fname='$courseps' and  departmet='$t1' and matricule='$ss' AND db1='$take' and sex='2'"); 
$row = mysql_fetch_assoc($qry); 
 $richooTTTgss1s2=$row['total']; 
		   
		
$qry = mysql_query("select  SUM(c102) as total
from resit where fname='$courseps' and  departmet='$t1' and matricule='$ss'AND db1='$take' and sex='2'"); 
$row = mysql_fetch_assoc($qry); 
 $richooTTTgss2s2=$row['total']; 
 
 
 
$qry = mysql_query("select  SUM(c101) as total
from resit where fname='$courseps' and  departmet='$t1' and matricule='$ss' AND db1='$take'and sex='3'"); 
$row = mysql_fetch_assoc($qry); 
 $richooTTTgss1s3=$row['total']; 
		   
		
$qry = mysql_query("select  SUM(c102) as total
from resit where fname='$courseps' and  departmet='$t1' and matricule='$ss' AND db1='$take'and sex='3'"); 
$row = mysql_fetch_assoc($qry); 
 $richooTTTgss2s3=$row['total']; 
				   
$qry = mysql_query("select  SUM(c101+c102) as total
from resit where fname='$courseps' and  departmet='$t1' and matricule='$ss' AND db1='$take'and sex='1'"); 
$row = mysql_fetch_assoc($qry); 
 $richooTTT=$row['total']; 


$qry = mysql_query("select  SUM(c101+c102) as total
from resit where fname='$courseps' and  departmet='$t1' and matricule='$ss' AND db1='$take'and sex='2'"); 
$row = mysql_fetch_assoc($qry); 
 $richooTTT2=$row['total']; 
				  
				  
				  
$qry = mysql_query("select  SUM(c101+c102) as total
from resit where fname='$courseps' and  departmet='$t1' and matricule='$ss' AND db1='$take'and sex='3'"); 
$row = mysql_fetch_assoc($qry); 
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
 
 
mysql_query ($qry) or die ('could not updated:'.mysql_error());
   
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
$qry = mysql_query("select  db1 as total
from subject where subject='$courseps' and  department='$t1' "); 
$row = mysql_fetch_assoc($qry); 
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
$qry = mysql_query("select  credit as total
from credits where subject='$courseps' "); 
$row = mysql_fetch_assoc($qry); 

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
		$qry = mysql_query("select  * from resit 
 where c109!='1' and matricule='$ss' and sex>='1' and sex<='2'  group by fname  "); 
echo $num_rows = mysql_num_rows($qry);
?>
					
					</div>
				  
				   <div style='float:left;width:200px;height:22px;'>

					
					</div>
					
					
					<div style='float:left;width:150px; height:22px;'>
<i> Total Amount</i>
					
					</div>
				     <div style='float:left;width:100px;border:1px solid #000;background:#ccc;height:22px;'>

<?php					
 $mxc11=$t2;
if(empty($mxc11)){
$price="0";
 }
elseif($mxc11>="200" && $mxc11<="200" ){
$price="2500";
}
	elseif($mxc11>="300" && $mxc11<="300" ){
$price="2500";
}
		elseif($mxc11>="400" && $mxc11<="400"  ){
$price="5000";
}

echo ($num_rows*$price);
?>
					</div>
					
					</div>
			  <div style='float:left;width:800px;height:22px;margin-top:10px;font-size:13px;'>
                  <div style='float:left;width:250px; height:22px;'>
 Departmental Period Covered =
					
					</div>	 <div style='float:left;width:180px; height:22px;text-align:left;'>
<?php     



 $qry22 = mysql_query("select SUM(total) as total from countat where  department='$t1' and levels='$t2' and db1='$take' and  department>''"); 
$row = mysql_fetch_assoc($qry22); 
ECHO $ats2=$row['total']; 

?>
					
					</div>		
					  <div style='float:left;width:250px; height:22px;'>
  Period Covered by Student =
					
					</div>		
						
					
					
						 <div style='float:left;width:50px; height:22px;text-align:left;'>
					
					
					<?php     



 $qry22 = mysql_query("select SUM(present) as total from attendance where  fname='$ss' and levels='$t2'  "); 
$row = mysql_fetch_assoc($qry22); 
ECHO $ats1=$row['total']; 

?>
					
					
					</div>	 <div style='float:left;width:250px; height:22px;'>
  % of attendance by Student = <?php 
 $mxc11uk=$t2;
 
 
if(empty($mxc11uk)){

 $statusfbiouk="";
 }
elseif($mxc11uk>='200' && $mxc11uk<='200' ){
  $ui=(($ats1/$ats2)*100);
 $statusfbiouk=($ui);;
     $statusfbiouks="/100";
  }
  elseif($mxc11uk>='300' && $mxc11uk<='300' ){
  $ui=(($ats1/$ats2)*100);
 $statusfbiouk=($ui);;
     $statusfbiouks="35.2548";
  }
    elseif($mxc11uk>='400' && $mxc11uk<='400' ){
  
   $statusfbiouk="";
    
     $statusfbiouks="/100";
  }
  printf("%01.2f",$ui=($statusfbiouk));

  
  ?><?php echo $statusfbiouks;?>

					
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
<i> Signature of Dean of studies</i>
					
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
