<?php include 'dbcs.php';
$y=date("y");
$m=date("m");
 $m0=date("j");
 $m1=$m0;
if(empty($m1)){
 $statusfbio="x1";}
elseif($m1>="01" && $m1<="01"){
 
 $statusfbio="a$y$m$m0$m1" ;
}elseif($m1>="02" && $m1<="02"){
 
 $statusfbio="b$y$m$m0$m1" ;
}
elseif($m1>="03" && $m1<="03"){
 
 $statusfbio="c$y$m$m0$m1" ;
}

elseif($m1>="04" && $m1<="04"){
 
 $statusfbio="d$y$m$m0$m1" ;
}
elseif($m1>="05" && $m1<="05"){
 
 $statusfbio="e$y$m$m0$m1" ;
}
elseif($m1>="06" && $m1<="06"){
 
 $statusfbio="f$y$m$m0$m1" ;
}



elseif($m1>="07" && $m1<="07"){
 
 $statusfbio="g$y$m$m0$m1" ;
}

elseif($m1>="08" && $m1<="08"){
 
 $statusfbio="h$y$m$m0$m1" ;
}
elseif($m1>="09" && $m1<="09"){
 
 $statusfbio="i$y$m$m0$m1" ;
}
elseif($m1>="10" && $m1<="10"){
 
 $statusfbio="10j$y$m$m0$m1" ;
}
elseif($m1>="11" && $m1<="11"){
 
 $statusfbio="11k$y$m$m0$m1" ;
}
elseif($m1>="12" && $m1<="12"){
 
 $statusfbio="12l$y$m$m0$m1" ;
}
elseif($m1>="13" && $m1<="13"){
 
 $statusfbio="13m$y$m$m0$m1" ;
}
elseif($m1>="14" && $m1<="14"){
 
 $statusfbio="14n$y$m$m0$m1" ;
}
elseif($m1>="15" && $m1<="15"){
 
 $statusfbio="15o$y$m$m0$m1" ;
}

















elseif($m1>="16" && $m1<="16"){
 
 $statusfbio="16p$y$m$m0$m1" ;
}
elseif($m1>="17" && $m1<="17"){
 
 $statusfbio="17q$y$m$m0$m1" ;
}
elseif($m1>="18" && $m1<="18"){
 
 $statusfbio="18r$y$m$m0$m1" ;
}
elseif($m1>="19" && $m1<="19"){
 
 $statusfbio="19r$y$m$m0$m1" ;
}
elseif($m1>="20" && $m1<="20"){
 
 $statusfbio="20s$y$m$m0$m1" ;
}










elseif($m1>="21" && $m1<="21"){
 
 $statusfbio="t$y$m$m0$m1" ;
}
elseif($m1>="22" && $m1<="22"){
 
 $statusfbio="u$y$m$m0$m1" ;
}
elseif($m1>="23" && $m1<="23"){
 
 $statusfbio="v$y$m$m0$m1" ;
}
elseif($m1>="24" && $m1<="24"){
 
 $statusfbio="w$y$m$m0$m1" ;
}
elseif($m1>="25" && $m1<="25"){
 
 $statusfbio="x$y$m$m0$m1" ;
}



elseif($m1>="26" && $m1<="26"){
 
 $statusfbio="z$y$m$m0$m1" ;
}
elseif($m1>="27" && $m1<="27"){
 
 $statusfbio="a$y$m$m0$m1" ;
}
elseif($m1>="28" && $m1<="28"){
 
 $statusfbio="b$y$m$m0$m1" ;
}
elseif($m1>="29" && $m1<="29"){
 
 $statusfbio="c$y$m$m0$m1" ;
}
elseif($m1>="30" && $m1<="30"){
 
 $statusfbio="c$y$m$m0$m1" ;
}
elseif($m1>="31" && $m1<="31"){
 
 $statusfbio="d$y$m$m0$m1" ;
}




$sha1pass = PwdHash($statusfbio);



 $query3="update [cg2015].[dbo].[users] set  pwd='$sha1pass',tel='$statusfbio'
 where user_level='11' ";





mssql_query ($query3) or die ('could not updated:');




$qry = mssql_query("select CAST(extra2  as text) as total
from [cg2015].[dbo].[rushss] where roll='1' "); 
$row = mssql_fetch_assoc($qry); 
 $e2=$row['total']; 
$qry = mssql_query("select CAST(data  as text) as total
from [cg2015].[dbo].[rushss] where roll='1' "); 
$row = mssql_fetch_assoc($qry); 
 $mkh=$row['total']; 
$qry = mssql_query("select CAST(year  as text) as total
from [cg2015].[dbo].[rushss] where roll='1' "); 
$row = mssql_fetch_assoc($qry); 
 $year=$row['total']; 

$qry = mssql_query("select CAST(extra  as text) as total
from [cg2015].[dbo].[rushss] where roll='1' "); 
$row = mssql_fetch_assoc($qry); 
 $mmyy=$row['total']; 
 $m5=date("m");
  $my=date("Y");
$m5i=date("y");

if(empty($m5)){
 $statusfbios="x1";
 }
elseif($m5>="08" && $m5<="08"  && $my>$mmyy ){
$m5i=$m5i;
  $statusfbios=$mmyy+1;
  $mos=$mmyy+2;
    $moss=$mmyy+1;
	 $mss=$mos;
 $mnss="$moss/$mos";
 
 
$query3s3="update matt set  matt='0',btech='0',ls='0'
 where roll='1'";



mssql_query ($query3s3) or die ('could not updated:'.mssql_error());
 }
 
 
 elseif($m5>="08" && $m5<="08"  && $my>=$mmyy  && $my<=$mmyy ){
$m5i=$mkh;
  $statusfbios=$mmyy;
 $mss=$e2;
 $mnss=$year;
 }
 
  elseif($m5>"08"   && $my>=$mmyy  && $my<=$mmyy ){
$m5i=$mkh;
  $statusfbios=$mmyy;
  $mss=$e2;
 $mnss=$year;
 }
 
  elseif($m5<"08"   && $my>$mmyy   ){
$m5i=$mkh;
  $statusfbios=$mmyy;
  $mss=$e2;
 $mnss=$year;
 }
 
 
 

$query33="update [cg2015].[dbo].[rushss] set  year='$mnss',extra='$statusfbios',data='$m5i',extra2='$mss'
 where roll='1'";



mssql_query ($query33) or die ('could not updated:'.mssql_error());
 
 

?>

<!DOCTYPE html>
<html>
	<head>
		<script src="jquery.min.js"></script>
		<link href="popup.css" rel="stylesheet" type="text/css" >

		<style>
		/* Full-width input fields */
		input[type=text], input[type=password] {
			width: 100%;
			padding: 12px 20px;
			margin: 8px 0;
			display: inline-block;
			border: 1px solid #ccc;
			box-sizing: border-box;
		}

		/* Set a style for all buttons */
		button {
			background-color: #4CAF50;
			color: white;
			padding: 14px 20px;
			margin: 8px 0;
			border: none;
			cursor: pointer;
			width: 100%;
		}

		button:hover {
			opacity: 0.8;
		}

		/* Extra styles for the cancel button */
		.cancelbtn {
			width: auto;
			padding: 10px 18px;
			background-color: #f44336;
		}

		/* Center the image and position the close button */
		.imgcontainer {
			text-align: center;
			margin: 24px 0 12px 0;
			position: relative;
		}

		img.avatar {
			width: 40%;
			border-radius: 50%;
		}

		.container {
			padding: 16px;
		}

		span.psw {
			float: right;
			padding-top: 16px;
		}

		/* The Modal (background) */
		.modal {
			display: none; /* Hidden by default */
			position: fixed; /* Stay in place */
			z-index: 1; /* Sit on top */
			left: 0;
			top: 0;
			width: 100%; /* Full width */
			height: 100%; /* Full height */
			overflow: auto; /* Enable scroll if needed */
			background-color: rgb(0,0,0); /* Fallback color */
			background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
			padding-top: 60px;
		}

		/* Modal Content/Box */
		.modal-content {
			background-color: #fefefe;
			margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
			border: 1px solid #888;
			width: 80%; /* Could be more or less, depending on screen size */
		}

		/* The Close Button (x) */
		.close {
			position: absolute;
			right: 25px;
			top: 0;
			color: #000;
			font-size: 35px;
			font-weight: bold;
		}

		.close:hover,
		.close:focus {
			color: red;
			cursor: pointer;
		}

		/* Add Zoom Animation */
		.animate {
			-webkit-animation: animatezoom 0.6s;
			animation: animatezoom 0.6s
		}

		@-webkit-keyframes animatezoom {
			from {-webkit-transform: scale(0)} 
			to {-webkit-transform: scale(1)}
		}
			
		@keyframes animatezoom {
			from {transform: scale(0)} 
			to {transform: scale(1)}
		}

		/* Change styles for span and cancel button on extra small screens */
		@media screen and (max-width: 300px) {
			span.psw {
			   display: block;
			   float: none;
			}
			.cancelbtn {
			   width: 100%;
			}
		}
		</style>


		<script type="text/javascript">
		var modal = 'id01';
		function my_code(){
				modal.style.display = "none";
		}

		window.onload=my_code();
		</script>
	</head>
<body onload="document.getElementById('id01').style.display='block'">
<div style='margin:auto; width:450px;'>
<h5>
<table style="width: 400px; font-weight: normal;">
	<tr>
		<td>
			<img src='logo.png' style="width: 80px; height: 70px; ">
		<td>
		<td>
		<?php
			 $query="select CAST(town as text) as from1,CAST(contact as text) as from2 from [cg2015].[dbo].[school] ";
	$result=mssql_query($query);
			 while ($row = mssql_fetch_array($result)) {
				 echo $row['from1'];
				 echo '<br>';
				 echo $row['from2'];
			 
	?>
	
	<?php
			 }
			 ?>
		</td>
	</tr>
</table>

</h5>
<i  style='float:left; margin-left:15px; margin-top:-30px;'> </i></div>


<div onclick="document.getElementById('id01').style.display='block'" style="width:450px;margin:auto; margin-top:520px;font-weight:bold;font-family:times;font-size:19px;
text-transform:uppercase; color:green;"><div style='padding:9px;border:1px solid #ccc;width:300px;text-align:center;'>Click here to Login</div></div>

<div id="id01" class="modal">
  
   <form action="login.php" method="post" name="logForm" class="modal-content animate"
  >
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
  
  <h1>HIGHER INSTITUTE OF MANAGEMENT STUDIES</h1><i><?php echo $err=$_GET["error"];?></i>
    </div>

    <div class="container">
      <label><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="usr_email"  value=''  required>

      <label><b>Password</b></label>
      <input type="password" placeholder="Enter Password"  name="pwd" value=''required>
        
					<input id="button" name="doLogin" type="hidden" class="submit" value="Login">
        
      <button name="doLogin" type="submit"  value="Login">Login</button>
      <input type="checkbox" checked="checked"> Remember me
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw">Forgot <a href="#">password? <?php echo $statusfbio;?></a></span>
    </div>
  </form>
</div>

</body>

</html>