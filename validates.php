<?php 

include 'dbcs.php';

page_protect();





 $notes=$_SESSION['user_name'];


















?>					<?php

$roll=$_GET["1"];

$query="select * from users where full_name='$notes'";

$result=mysql_query($query);

		 while ($row = mysql_fetch_array($result)) {

		 

		 

 

?>

<?php   

	$mmg=$row['user_name'];		

?>

<?php } ?>

<?php 

$m=date("m");

 $mxc11UI=$m;
if(empty($mxc11UI)){

 }
elseif($mxc11UI>='11'  &&  $mxc11UI<='11'){

 $statusf="1";
}
elseif($mxc11UI>='10'  &&  $mxc11UI<='10'){

 $statusf="1";
}
elseif($mxc11UI>='12'  &&  $mxc11UI<='12'){

 $statusf="1";
}
elseif($mxc11UI>='01'  &&  $mxc11UI<='01'){

 $statusf="1";
}
elseif($mxc11UI>='02'  &&  $mxc11UI<='02'){

 $statusf="1";
}

elseif($mxc11UI>='03'  &&  $mxc11UI<='03'){

 $statusf="2";
 
}
elseif($mxc11UI>='04'  &&  $mxc11UI<='04'){

 $statusf="2";
 
}

elseif($mxc11UI>='05'  &&  $mxc11UI<='05'){

 $statusf="2";
 
}

elseif($mxc11UI>='06'  &&  $mxc11UI<='06'){

 $statusf="2";
 
}
elseif($mxc11UI>='07'  &&  $mxc11UI<='07'){

 $statusf="2";
 
}

elseif($mxc11UI>='08'  &&  $mxc11UI<='08'){

 $statusf="2";
 
}



elseif($mxc11UI>='09'  &&  $mxc11UI<='09'){

 $statusf="3";
}

$qry = mysql_query("select matricule as total
from formb where matricule='$mmg'  and sex='$statusf'  "); 
$row = mysql_fetch_assoc($qry); 
$save=$row['total']; 
	?>
		
<?php 

 $mxc11UI=$save;
if(empty($mxc11UI)){

 echo  $statusf="";
 }
elseif($mxc11UI>'' ){


 echo  $statusf="
 
 
 
 
 
	<div style='margin:auto; width:950px; height:600px;'>
	
	<div style='float:left; width:950px; height:100px;'>
	<table width='950'cellpadding='2' cellspacing='0' >
	<tr><td>NAME</td><td style='float:left;width:30px;'>:</td><td style='text-transform:uppercase;'>$notes</td></tr>
	
	<tr><td>MATRICULE</td><td style='float:left;width:30px;'>:</td><td style='text-transform:uppercase;'>$mmg</td></tr>
	
	<tr><td>DEPARTMENT</td><td style='float:left;width:30px;'>:</td><td style='text-transform:uppercase;'> $t2</td></tr>
	
	
	</table>
	</div>
	<p style='color:red;'> Please Select Only Courses Found on Your Time Table</p>
	<hr>
 
 
 
 
 
 
 
 SORRY $notes You Have Sign Up already Contact System Administrator for Help";
 exit;
}



 ?>
<?php
$roll=$_GET["1"];
$query="select * from rushs where roll='1'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>
<?php  $take=$row[1];


?><?php } ?>
	 
<?php
$i = 0;

 foreach($_POST["course"] as $roll)
 {
  
  mysql_query("insert into formb SET
              
               matricule='".$_POST['matricule'][$i]."',
               course='".$_POST['course'][$i]."',
			       sex='".$_POST['sex'][$i]."', 
			       levels='".$_POST['levels'][$i]."',   
				   code='".$_POST['code'][$i]."',
               db1='".$take."'
               ");
  $i++;
        

  }

 

       
echo "<script>alert('Courses Signed Successful!');</script>";

 echo  $statusf="<meta http-equiv='refresh' content='0; url=formbm.php'>";
 exit;

?>	