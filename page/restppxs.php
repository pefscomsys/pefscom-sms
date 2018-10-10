<?php
include 'dbc.php';
require'function.php';
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="description" content="Php Code for View, Search, Edit and Delete Record" />
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Search Student  Record</title>
<style>
</style>
<link href="styles.css" rel="stylesheet" type="text/css">
<style>
input[type=submit]{
    cursor: pointer;
    font-size: 16px;
    height: 24px;
    padding: 3px;
}
input[type=text], input[type=password], input[type=submit] {
    -moz-border-radius: 2px;
    -ms-border-radius: 2px;
    -o-border-radius: 2px;
    -webkit-border-radius: 2px;
    border-radius: 2px;
	background-color: rgb(246, 254, 231);
}
.rotate {


-webkit-transform: rotate(-50deg);


-moz-transform: rotate(-50deg);


-ms-transform: rotate(-50deg);


-o-transform: rotate(-50deg);


filter: progid:DXImageTransform.Microsoft.BasicImage(rotation=3);

color:#989898;}
  
</style>
</head>
<body onload="window.print();" >
<div style="margin-left:100px; margin-top:50px; float:left; width:700px; height:480px;">


<div style=" float:left; width:150px; height:70px;">
<img src="logo.png" width="150px" height="100px">
</div>

<div style=" float:left; width:550px; height:30px;text-transform:uppercase;text-align:center; font-size:19px; font-family:
verdana; text-shadow:1px 1px 1px #000; background:#ccc;">

<?php
$roll=$_GET["1"];
$query="select * from school where roll='1'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>

<?php echo $row[1];?>
<?php
}
?><br>
<?php
$roll=$_GET["1"];
$query="select * from school where roll='1'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>


<?php $into=$row[2];



?>
<?php
}
?>

<?php
$roll=$_GET["1"];
$query="select * from school where roll='2'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>


<?php $outof=$row[1];


$outofin=$row[2];
?>
<?php
}
?>

<?php
$roll=$_GET["1"];
$query="select * from school where roll='3'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>


<?php $inside=$row[1];


$inside2=$row[2];
?>
<?php
}
?>

<?php
$roll=$_GET["roll"];
$query="select * from historic where roll='roll'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>


<?php $nast=$row['student_name'];
$classy=$row['class'];

?>
<?php
}
?>
<?php
$roll=$_GET["roll"];
$qry = mysql_query("select  SUM(amount_paid) as total
from historic  where student_name='$nast' and class='$classy'"); 
$row = mysql_fetch_assoc($qry); 
$timm=$row['total']; 

?>
</div>

<div style=" float:left; width:550px; height:69px;text-transform:uppercase;text-align:center; font-size:14px; font-family:
verdana; color:#fff;text-shadow:1px 1px 1px #000; background:#000;">


<div style=" float:left; width:450px; height:20px;">
<b><?php echo $outof;?></b>

</div>


<div style=" float:left; width:600px; height:20px;font-size:11px; text-align:left;">
<?php echo $inside;?>

</div>
<div style=" float:left; width:400px; height:20px;font-size:11px; text-align:center;">
<?php echo $inside2;?>

</div>





</div>
<div style=" float:left; width:700px;margin-top:17px;  height:34px; text-align:left;
font-size:18px; ">

<?php
$roll=$_GET["1"];
$query="select * from rushs where roll='1'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>
<b>
<?php $take=$row[1];



?>
		 

<?php } ?>
<?php
$roll=$_GET["roll"];
$query="select * from payment where roll='$roll' and oldb='$take'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>

<div style=" float:left; width:700px; margin-top:17px;TEXT-ALIGN:CENTER;  height:34px; 
font-size:28px; ">
<div style=" float:left; width:500px; margin-top:17px;TEXT-ALIGN:CENTER;  height:34px; 
font-size:28px; ">
CASH RECEIPT 


</div>

<div style=" float:left; width:200px; margin-top:17px;TEXT-ALIGN:CENTER;  height:34px; 
font-size:18px; ">
N<SUP>0</SUP> 00<?PHP ECHO $row['roll'];?>


</div>




<div style=" float:left; width:700px; margin-top:37px;TEXT-ALIGN:CENTER; font-family:arial; height:300px; 
font-size:13px; ">

<div style=" float:left; width:170px; height:25px;font-size:17px;"> Received From M.</div>


<div style=" float:left; width:500px;border-bottom:1px solid #000;font-weight:normal; height:25px;font-size:17px;"> 


<div style=" float:left; width:300px;margin-top:3px;">
<?php echo $fname=$row['student_name'];?>.
</div>

<div style=" float:left; width:200px;  height:25px;margin-top:3px;"></div></div>
<div style=" float:left; width:700px;TEXT-ALIGN:CENTER; font-family:arial; height:300px; 
font-size:13px; ">
<div style=" float:left; width:170px; height:25px;font-size:17px;"> <i>Matricule No.</i></div>


<div style=" float:left; width:500px;border-bottom:1px solid #000; height:25px;font-size:17px;"> 


<div style=" float:left; width:300px;margin-top:3px;">
<?php echo $row['matricule'];?>
</div>


</div>



<div style=" float:left; width:700px;margin-top:3px;TEXT-ALIGN:CENTER; font-family:arial; height:300px; 
font-size:13px; ">
<div style=" float:left; width:170px; height:25px;font-size:17px;"> <i>Amount in Figure</i></div>


<div style=" float:left; width:500px height:25px;font-size:17px;"> 


<div style=" float:left; width:200px;border:1px solid #000;margin-top:3px;">
<?php echo $row['amount_paid'];?> <i>frs C. F. A</i>
</div>
<div style=" float:left; width:100px;margin-top:3px;">
DATE
</div>
<div style=" float:left; width:200px;border-bottom:1px solid #000;margin-top:3px;">
<?php echo $row['date'];?>
</div>

</div>



<div style=" float:left; width:700px;margin-top:3px;TEXT-ALIGN:CENTER; font-family:arial; height:30px; 
font-size:13px; ">
<div style=" float:left; width:170px; height:25px;font-size:17px;"> <i>Amount in Words</i></div>


<div style=" float:left; width:500px;border-bottom:1px solid #000; height:25px;font-size:13px;"> 

<div style=" float:left; width:500px;margin-top:3px;">

<?php 
 $mmm=$row['amount_paid'];

		 $depppt=$row['amountpaid'];
		 
		$mmm=$row['amount_paid'];
	if(empty($mmm)){
		
$mmm="";
 $statusssmmm="$depppt";
}

elseif($mmm<=0){
 $colorf1chem="#FF0000";
 $statusssmmm="$mmm";
}
	

elseif($mmm>=0){
 $colorf1chem="#FF0000";
 $statusssmmm="$mmm";
}
		 
		 
 $mxc10=$statusssmmm;



?>
<div style="float:left;text-transform:uppercase;">
<?php




 echo convert_number_to_words($mmm);


?>
</div>
 <i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

</div>
</div>

</div>
<div style=" float:left; margin-left:10px;width:660px;border-bottom:1px solid #000;TEXT-ALIGN:CENTER; font-family:arial; height:30px; 
font-size:13px; ">
<?php echo $statusfecon;?>
</div>
<?php }?>
<div style=" float:left; margin-top:20px;margin-left:10px;width:660px;TEXT-ALIGN:CENTER; font-family:arial; height:30px; 
font-size:13px; ">
DETAILS
</div>
<div style=" float:left; margin-left:10px;width:660px;border-bottom:1px solid #000;TEXT-ALIGN:CENTER; 
font-family:arial; height:auto; 
font-size:13px; ">
<div  style='float:left; width:660px;border-top:1px solid #000;
		 border-right:1px solid #000;border-left:1px solid #000; height:25px; font-family:arial;
		 font-size:13px;'>
<div  style='float:left; width:150px;border-right:1px solid #000;height:25px;'><b>N <sup>o</sup></b></div>
<div  style='float:left; width:280px; height:25px; border-right:1px solid #000;'>
<b>Purpose</b>

</div><div  style='float:left; width:160px; height:25px;'>Amount</div>

</div>
<?php
$search=$_POST["search"];
$flag=0;
$query="select * from payment where  student_name='$fname' ";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 $flag=1;
		 echo "
		 
		 

		 <div  style='float:left; width:660px;border-top:1px solid #000;
		 border-right:1px solid #000;border-left:1px solid #000; height:25px; font-family:arial;
		 font-size:13px;'>
<div  style='float:left; width:150px; border-right:1px solid #000; height:25px;'>",$row[0],"</div>
<div  style='float:left; width:280px; height:25px; border-right:1px solid #000;'>


Fees</div><div  style='float:left; width:100px; height:25px;'>",$row['amount_paid'],"</div>

</div>";

		 }
		 if($flag==0)
		 echo "<tr><td colspan='3' align='center' style='color:red'>Record not found</td></tr>";
		 		 
?>

<div  style='float:left; width:660px;border-top:1px solid #000;
		 border-right:1px solid #000;border-left:1px solid #000; height:25px; font-family:arial;
		 font-size:13px;'>
<div  style='float:left; width:150px;  height:25px;'><B>TOTAL</div>
<div  style='float:left; width:281px; height:25px; border-right:1px solid #000;'>


</div><div  style='float:left; width:160px; height:25px;'># <?php
$qry = mysql_query("select  SUM(amount_paid) as total
from payment where student_name='$fname'"); 
$row = mysql_fetch_assoc($qry); 
echo $row['total']; 
?> #</div>

</div>
</div>

<div  style='float:left; width:760px;margin-top:20px; height:25px; font-family:arial;
		 font-size:13px;'>

<div  style='float:left; width:150px;  height:25px;'><B>Balance</b></div>
		 
		 
		 
<div  style='float:left; width:250px;  height:25px; border-bottom:1px solid #000;'><B>= <?php
$qry = mysql_query("select  (balance) as total
from historic where student_name='$fname'"); 
$row = mysql_fetch_assoc($qry); 
echo $row['total']; 
?></b> frs C.F.A</div>
		 
		 

<div  style='float:left; width:150px;  height:25px; '><B><i>Signature</i></b></div>
		 

</div>
</div>

</div>


<div style="margin-left:0px; margin-top:150px; float:left; width:700px; height:480px;">


<div style=" float:left; width:150px; height:70px;">
<img src="logo.png" width="150px" height="100px">
</div>

<div style=" float:left; width:550px; height:30px;text-transform:uppercase;text-align:center; font-size:19px; font-family:
verdana; text-shadow:1px 1px 1px #000; background:#ccc;">

<?php
$roll=$_GET["1"];
$query="select * from school where roll='1'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>

<?php echo $row[1];?>
<?php
}
?><br>
<?php
$roll=$_GET["1"];
$query="select * from school where roll='1'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>


<?php $into=$row[2];



?>
<?php
}
?>

<?php
$roll=$_GET["1"];
$query="select * from school where roll='2'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>


<?php $outof=$row[1];


$outofin=$row[2];
?>
<?php
}
?>

<?php
$roll=$_GET["1"];
$query="select * from school where roll='3'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>


<?php $inside=$row[1];


$inside2=$row[2];
?>
<?php
}
?>

<?php
$roll=$_GET["roll"];
$query="select * from historic where roll='roll'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>


<?php $nast=$row['student_name'];
$classy=$row['class'];

?>
<?php
}
?>
<?php
$roll=$_GET["roll"];
$qry = mysql_query("select  SUM(amount_paid) as total
from historic  where student_name='$nast' and class='$classy'"); 
$row = mysql_fetch_assoc($qry); 
$timm=$row['total']; 

?>
</div>

<div style=" float:left; width:550px; height:69px;text-transform:uppercase;text-align:center; font-size:14px; font-family:
verdana; color:#fff;text-shadow:1px 1px 1px #000; background:#000;">


<div style=" float:left; width:450px; height:20px;">
<b><?php echo $outof;?></b>

</div>


<div style=" float:left; width:600px; height:20px;font-size:11px; text-align:left;">
<?php echo $inside;?>

</div>
<div style=" float:left; width:400px; height:20px;font-size:11px; text-align:center;">
<?php echo $inside2;?>

</div>





</div>
<div style=" float:left; width:700px;margin-top:17px;  height:34px; text-align:left;
font-size:18px; ">

<?php
$roll=$_GET["1"];
$query="select * from rushs where roll='1'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>
<b>
<?php $take=$row[1];



?>
		 

<?php } ?>
<?php
$roll=$_GET["roll"];
$query="select * from payment where roll='$roll' and oldb='$take'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>

<div style=" float:left; width:700px; margin-top:17px;TEXT-ALIGN:CENTER;  height:34px; 
font-size:28px; ">
<div style=" float:left; width:500px; margin-top:17px;TEXT-ALIGN:CENTER;  height:34px; 
font-size:28px; ">
CASH RECEIPT 


</div>

<div style=" float:left; width:200px; margin-top:17px;TEXT-ALIGN:CENTER;  height:34px; 
font-size:18px; ">
N<SUP>0</SUP> 00<?PHP ECHO $row['roll'];?>


</div>




<div style=" float:left; width:700px; margin-top:37px;TEXT-ALIGN:CENTER; font-family:arial; height:300px; 
font-size:13px; ">

<div style=" float:left; width:170px; height:25px;font-size:17px;"> Received From M.</div>


<div style=" float:left; width:500px;border-bottom:1px solid #000;font-weight:normal; height:25px;font-size:17px;"> 


<div style=" float:left; width:300px;margin-top:3px;">
<?php echo $fname=$row['student_name'];?>.
</div>

<div style=" float:left; width:200px;  height:25px;margin-top:3px;"></div></div>
<div style=" float:left; width:700px;TEXT-ALIGN:CENTER; font-family:arial; height:300px; 
font-size:13px; ">
<div style=" float:left; width:170px; height:25px;font-size:17px;"> <i>Matricule No.</i></div>


<div style=" float:left; width:500px;border-bottom:1px solid #000; height:25px;font-size:17px;"> 


<div style=" float:left; width:300px;margin-top:3px;">
<?php echo $row['matricule'];?>
</div>


</div>



<div style=" float:left; width:700px;margin-top:3px;TEXT-ALIGN:CENTER; font-family:arial; height:300px; 
font-size:13px; ">
<div style=" float:left; width:170px; height:25px;font-size:17px;"> <i>Amount in Figure</i></div>


<div style=" float:left; width:500px height:25px;font-size:17px;"> 


<div style=" float:left; width:200px;border:1px solid #000;margin-top:3px;">
<?php echo $row['amount_paid'];?> <i>frs C. F. A</i>
</div>
<div style=" float:left; width:100px;margin-top:3px;">
DATE
</div>
<div style=" float:left; width:200px;border-bottom:1px solid #000;margin-top:3px;">
<?php echo $row['date'];?>
</div>

</div>



<div style=" float:left; width:700px;margin-top:3px;TEXT-ALIGN:CENTER; font-family:arial; height:30px; 
font-size:13px; ">
<div style=" float:left; width:170px; height:25px;font-size:17px;"> <i>Amount in Words</i></div>


<div style=" float:left; width:500px;border-bottom:1px solid #000; height:25px;font-size:13px;"> 

<div style=" float:left; width:500px;margin-top:3px;">

<?php 
 $mmm=$row['amount_paid'];

		 $depppt=$row['amountpaid'];
		 
		$mmm=$row['amount_paid'];
	if(empty($mmm)){
		
$mmm="";
 $statusssmmm="$depppt";
}

elseif($mmm<=0){
 $colorf1chem="#FF0000";
 $statusssmmm="$mmm";
}
	

elseif($mmm>=0){
 $colorf1chem="#FF0000";
 $statusssmmm="$mmm";
}
		 
		 
 $mxc10=$statusssmmm;



?>
<div style="float:left;text-transform:uppercase;">
<?php




 echo convert_number_to_words($mmm);


?>
</div><i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

</div>
</div>

</div>
<div style=" float:left; margin-left:10px;width:660px;border-bottom:1px solid #000;TEXT-ALIGN:CENTER; font-family:arial; height:30px; 
font-size:13px; ">
<?php echo $statusfecon;?>
</div>
<?php }?>
<div style=" float:left; margin-top:20px;margin-left:10px;width:660px;TEXT-ALIGN:CENTER; font-family:arial; height:30px; 
font-size:13px; ">
DETAILS
</div>
<div style=" float:left; margin-left:10px;width:660px;border-bottom:1px solid #000;TEXT-ALIGN:CENTER; 
font-family:arial; height:auto; 
font-size:13px; ">
<div  style='float:left; width:660px;border-top:1px solid #000;
		 border-right:1px solid #000;border-left:1px solid #000; height:25px; font-family:arial;
		 font-size:13px;'>
<div  style='float:left; width:150px;border-right:1px solid #000;height:25px;'><b>N <sup>o</sup></b></div>
<div  style='float:left; width:280px; height:25px; border-right:1px solid #000;'>
<b>Purpose</b>

</div><div  style='float:left; width:160px; height:25px;'>Amount</div>

</div>
<?php
$search=$_POST["search"];
$flag=0;
$query="select * from payment where  student_name='$fname' ";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 $flag=1;
		 echo "
		 
		 

		 <div  style='float:left; width:660px;border-top:1px solid #000;
		 border-right:1px solid #000;border-left:1px solid #000; height:25px; font-family:arial;
		 font-size:13px;'>
<div  style='float:left; width:150px; border-right:1px solid #000; height:25px;'>",$row[0],"</div>
<div  style='float:left; width:280px; height:25px; border-right:1px solid #000;'>


Fees</div><div  style='float:left; width:100px; height:25px;'>",$row['amount_paid'],"</div>

</div>";

		 }
		 if($flag==0)
		 echo "<tr><td colspan='3' align='center' style='color:red'>Record not found</td></tr>";
		 		 
?>

<div  style='float:left; width:660px;border-top:1px solid #000;
		 border-right:1px solid #000;border-left:1px solid #000; height:25px; font-family:arial;
		 font-size:13px;'>
<div  style='float:left; width:150px;  height:25px;'><B>TOTAL</div>
<div  style='float:left; width:281px; height:25px; border-right:1px solid #000;'>


</div><div  style='float:left; width:160px; height:25px;'># <?php
$qry = mysql_query("select  SUM(amount_paid) as total
from payment where student_name='$fname'"); 
$row = mysql_fetch_assoc($qry); 
echo $row['total']; 
?> #</div>

</div>
</div>

<div  style='float:left; width:760px;margin-top:20px; height:25px; font-family:arial;
		 font-size:13px;'>

<div  style='float:left; width:150px;  height:25px;'><B>Balance</b></div>
		 
		 
		 
<div  style='float:left; width:250px;  height:25px; border-bottom:1px solid #000;'><B>= <?php
$qry = mysql_query("select  (balance) as total
from historic where student_name='$fname'"); 
$row = mysql_fetch_assoc($qry); 
echo $row['total']; 
?></b> frs C.F.A</div>
		 
		 

<div  style='float:left; width:150px;  height:25px; '><B><i>Signature</i></b></div>
		 

</div>
</div>

</div>


