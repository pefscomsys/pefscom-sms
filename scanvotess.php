<?php 
include 'dbc.php';
page_protect();


 $notes=$_SESSION['user_name'];


if(@$_SESSION['userlevel']!=111){header("location: login.php?error=Unauthorized access");}

?>
<?php
$roll=$_GET["1"];
$query="select * from users where  user_name='$notes'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>
<?php  $ip=$row['users_ip'];
?>

<?php } ?>
<?php


 
$query1="update remoteu set  
ip='$ip' where user_name='$notes'
";

mysql_query ($query1) or die ('could not updated:'.mysql_error());




?>
<?php
$roll=$_GET["1"];
$query="select * from remoteu where  ip='$ip'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>
<?php $mms=$row['total'];


?><?php } ?>
<?php  $ands=$mms;
$tydate=$ands;
if(empty($tydate)){

 
 }
 elseif($tydate>""){
 echo  $statusf="<meta http-equiv='refresh' content='0; url=shutdown.php?usr_name=$user_name'>";
 exit;
 }

		
?>
<?php
 $notes=$_SESSION['user_name'];
$roll=$_GET["1"];
$query="select * from fresh where username='$notes'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>
<?php  $starts=$row[1];?>

<?php   $enddate= $row[2];?>

<?php  $todays_date= $row[3];
$t9= $row[9];
$t10= $row[10];

?>

 

<?php } ?>

<?php
 
 $statusfbioff="update fresh set  enddate='$enddate'";
 
$query8cys="$statusfbioff";

mysql_query ($query8cys) or die ('ERROR');
?>
<?php

   $tydssd=$todays_date;

if(empty($tydssd)){

 
 }
 elseif($tydssd>=$enddate){
 echo  $statusf="<meta http-equiv='refresh' content='0; url=timeout.php?usr_name=$user_name'>";
 exit;
 }
 elseif($tydssd<$enddate){

 }

 
 ?>
<?php

 $mki=($t10-$t9);
   $tydssds=$mki;

if(empty($tydssds)){

 
 }
 elseif($tydssds<''){
 echo  $statusfs="<meta http-equiv='refresh' content='0; url=sorrys.php?usr_name=$notes'>";
 exit;
 }
 elseif($tydssds>=''){

 }

 
 ?> <?php
$year=date('Y');
$d=date('j');
$m=date('m');
$timiegt=$d;
	 if(empty($timiegt)){
$timiegt="";
 $statusftimiedgt="";
}
elseif($timiegt<10){
 $statusftimiedgt="0";
}
elseif($timiegt>=10){
 $statusftimiedgt="";
}
 
$query1g="update fresh set  
ends='$year$m$statusftimiedgt$d'
";

mysql_query ($query1g) or die ('could not updated:'.mysql_error());
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>School Apps</title>
<link rel="stylesheet" href="global.css" type="text/css" media="all" />
<style type="text/css">
#long{float:left; width:100%; height:70px; background:#fff; }
body{margin:0px; padding:0px;}
.clock{color:#000;
text-decoration:none; }
.clock:hover{color:#fff;float:left;width:400px;margin-left:15px; height:35px;background-color:#336666;}.brad-img {
	border-radius: 50%;
	border: 4px solid #FFF;
	box-shadow: 0px 0px 4px 1px rgba(0,0,0,0.8);
	float: right;
	margin: 0px 15px;
	height: 130px;}
<!--
  #img_container { height:120px; }
  #img_container ul {display:block;padding:0;margin:0;list-style:none;}
  #img_container ul li{float:left;width:100px;margin:10px;}
  #img_container ul li a img {
      width:93px;
      height:93px;
      border:1px solid #574331;
      padding:5px;
      background:#eee;
  }
  #img_container ul li a:hover img { border-color: darkred; }
-->
</style>

<script src="mootools.js" type="text/javascript"></script>
<link rel="stylesheet" href="sexyalertbox.css" type="text/css" media="all" />
<script src="sexyalertbox.packed.js" type="text/javascript"></script>


<script type="text/javascript">
window.addEvent('domready', function() {
    Sexy = new SexyAlertBox();
});

function test() {
    Sexy.prompt('<h1>Registro de usuarios</h1>Ingresa tu nombre para poder identificarte en el sistema.','Eduardo' ,{ onComplete: 
      function(returnvalue) {
        if(returnvalue)
        {
          Sexy.confirm('<h1>Bienvenido '+returnvalue+',</h1><p>¿Deseas ver el about us?</p><p>Pulsa "Ok" para continuar, o pulsa "Cancelar" para salir.</p>', {onComplete: 
            function(returnvalue) { 
              if(returnvalue)
              {
                Sexy.info('<h1>SexyAlertBox</h1><em>versión 1.1</em><br/><p>&copy;2008-2009 Todos los derechos reservados.</p><p>Sexy Alert Box está basado en PBBAcpBox.</p><p>Visita <a href="http://www.coders.me/">www.coders.me</a> para obtener la última versión de este script.</p>');
              }
              else
              {
                Sexy.alert('<h1>SexyAlertBox</h1><em>versión 1.1</em><br/><p>No te olvides de visitar <a href="http://www.coders.me/">www.coders.me</a> está lleno de artículos de programación.</p>');
              }
            }
          });
        }
        else
        {
          Sexy.error('<h1>Error al intentar entrar al sistema</h1><p>Para continuar, debes ingresar un nombre en la casilla de Nombre.</p><p>Inténtalo de nuevo.</p>');
        }
      }
    });
}
</script>

</head>

<body>
<div id='long'>

<div style='float:left;width:900px; margin-left:30px; margin-top:20px;color:#20de20;font-weight:bold;font-size:21px;font-family:arial;text-shadow:1px 1px 1px #000;'>

<?php
$roll=$_GET["1"];
$query="select * from headerm where  roll='1'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>
<?php  echo $of1=$row['head'];


?><?php } ?>

</div>


<div style='float:left;width:900px; margin-left:30px; margin-top:05px;color:#456545;font-size:14px;font-family:arial;'>
School Managemen Application

</div>


<div style='float:left;width:1000px; height:500px;'>



<div style='float:left;width:400px; height:500px;'>

<div style='float:left;width:400px;margin-left:15px; margin-top:15px; height:50px;background:rgba(180,290,180,0.7);'>

<div style='float:left;width:400px; margin-left:10px; margin-top:15px;font-size:18px;'>
Main Menu > <?php echo $notes;?>
</div>
</div>


<div style='float:left;width:400px; height:25px;font-size:18px;'>



</div>


<div style='float:left;width:400px;margin-left:15px; height:20px;background:rgba(180,290,180,0.7);'>

</div>

<a href="mmsm.php?roll=<?php echo $ofd9;?>" class="clock">

<div style='float:left;width:400px;margin-left:15px; margin-top:5px; height:35px;'>


<div style='float:left;width:60px; height:30px;'>
<img src="icon/dude2.png" height="35" >
</div>

<div style='float:left;width:310px; height:30px;'>
Student Eligible for Discom
</div>

<div style='float:left;width:30px; height:30px;'>
D
</div>

</div>
</a>




<a href="permission.php?roll=<?php echo $ofd9;?>" class="clock">

<div style='float:left;width:400px;margin-left:15px; margin-top:5px; height:35px;'>


<div style='float:left;width:60px; height:30px;'>
<img src="icon/profile_add.png" >
</div>

<div style='float:left;width:310px; height:30px;'>
Grant Permission To student
</div>

<div style='float:left;width:30px; height:30px;'>
Ps
</div>

</div>
</a>


<a href="past.php?roll=<?php echo $ofd9;?>" class="clock">

<div style='float:left;width:400px;margin-left:15px; margin-top:5px; height:35px;'>


<div style='float:left;width:60px; height:30px;'>
<img src="icon/semi_success.png" >
</div>

<div style='float:left;width:310px; height:30px;'>
Publish Attendance Record
</div>

<div style='float:left;width:30px; height:30px;'>
X
</div>

</div>
</a>

<a href="call.php?roll=<?php echo $ofd9;?>" class="clock">

<div style='float:left;width:400px;margin-left:15px; margin-top:5px; height:35px;'>


<div style='float:left;width:60px; height:30px;'>
<img src="icon/order.png" >
</div>

<div style='float:left;width:310px; height:30px;'>
Print attendance Summary
</div>

<div style='float:left;width:30px; height:30px;'>
C
</div>

</div>
</a>










<a href="coursea.php?roll=<?php echo $ofd9;?>" class="clock">

<div style='float:left;width:400px;margin-left:15px; margin-top:5px; height:35px;'>


<div style='float:left;width:60px; height:30px;'>
<img src="icon/polls.png" >
</div>

<div style='float:left;width:310px; height:30px;'>
Print Course Attendance
</div>

<div style='float:left;width:30px; height:30px;'>
F
</div>

</div>
</a>




<a href="election.php?roll=<?php echo $ofd9;?>" class="clock">

<div style='float:left;width:400px;margin-left:15px; margin-top:5px; height:35px;'>


<div style='float:left;width:60px; height:30px;'>
<img src="icon/user.png" >
</div>

<div style='float:left;width:310px; height:30px;'>
Hims student Elections
</div>

<div style='float:left;width:30px; height:30px;'>
Es
</div>

</div>
</a>

<a href="graph/html/mg1s33.php?roll=<?php echo $ofd9;?>" class="clock" >

<div style='float:left;width:400px;margin-left:15px; margin-top:5px; height:35px;'>


<div style='float:left;width:60px; height:30px;'>
<img src="icon/bell.png" width="34px" height="34px">
</div>

<div style='float:left;width:310px; height:30px;'>
Print Election Cards! 
</div>

<div style='float:left;width:30px; height:30px;'>
Ps
</div>

</div>
</a>



<a href="checkcan.php" class="clock" >

<div style='float:left;width:400px;margin-left:15px; margin-top:5px; height:35px;'>


<div style='float:left;width:60px; height:30px;'>
<img src="icon/billboard.png" width="34px" height="34px">
</div>

<div style='float:left;width:310px; height:30px;'>
Check Candidate 
</div>

<div style='float:left;width:30px; height:30px;'>
Cs
</div>

</div>
</a>





<a href="cvote.php" class="clock" >

<div style='float:left;width:400px;margin-left:15px; margin-top:5px; height:35px;'>


<div style='float:left;width:60px; height:30px;'>
<img src="icon/billboard.png" width="34px" height="34px">
</div>

<div style='float:left;width:310px; height:30px;'>
Check Winners of Election
</div>

<div style='float:left;width:30px; height:30px;'>
Ws
</div>

</div>
</a>

<a href="scanvote.php" class="clock" >

<div style='float:left;width:400px;margin-left:15px; margin-top:5px; height:35px;'>


<div style='float:left;width:60px; height:30px;'>
<img src="icon/addons.png" width="34px" height="34px">
</div>

<div style='float:left;width:310px; height:30px;'>
Scan Voters Cards! 
</div>

<div style='float:left;width:30px; height:30px;'>
Vs
</div>

</div>
</a>


<a href="scanvotess.php" class="clock" >

<div style='float:left;width:400px;margin-left:15px; margin-top:5px; height:35px;'>


<div style='float:left;width:60px; height:30px;'>
<img src="icon/addons.png" width="34px" height="34px">
</div>

<div style='float:left;width:310px; height:30px;'>
Scan Voters Cards option2
</div>

<div style='float:left;width:30px; height:30px;'>
Vs2
</div>

</div>
</a>

<a href="barcode.php?roll=<?php echo $ofd9;?>" class="clock">

<div style='float:left;width:400px;margin-left:15px; margin-top:5px; height:35px;'>


<div style='float:left;width:60px; height:30px;'>
<img src="icon/printer.png" >
</div>

<div style='float:left;width:310px; height:30px;'>
Scan  student
</div>

<div style='float:left;width:30px; height:30px;'>
S
</div>

</div>
</a>







<div style='float:left;width:400px;margin-left:15px; margin-top:5px; height:35px;'>


<div style='float:left;width:60px; height:30px;'>

</div>

<div style='float:left;width:310px; height:30px;'>

</div>

<div style='float:left;width:30px; height:30px;'>

</div>

</div>



<a href="logout.php?roll=<?php echo $ofd9;?>" class="clock">

<div style='float:left;width:400px;margin-left:15px; margin-top:5px; height:35px;'>


<div style='float:left;width:60px; height:30px;'>
<img src="icon/layout.png" >
</div>

<div style='float:left;width:310px; height:30px;'>
Exit
</div>

<div style='float:left;width:30px; height:30px;'>
x!
</div>

</div>
</a>






















</div>


<div style='float:left;width:1px;background:rgba(180,290,180,0.7); margin-left:22px;margin-top:22px; height:500px;'>

</div>



<div style='float:left;width:500px; margin-top:22px;height:500px;'>

  
<iframe title="" class="youtube-player" type="text/html" 
width="930px" height="500" src="electo.php"
frameborder="0" allowFullScreen style="
 border: 0px solid #ffffff;background:#fff;"></iframe>
  
  
  

</div>



</div>






</div>




</body>
</html>