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
 
 
$query3s3="update [cg2015].[dbo].[rushss] set  year='$mnss',extra='$statusfbios',extra2='$mos'
 where roll='1'";



mssql_query ($query3s3) or die ('could not updated:'.mssql_error());



 
$query3s3s="update [cg2015].[dbo].[rushs] set  year='$mnss',extra='$statusfbios',extra2='$mos'
 where roll='1'";



mssql_query ($query3s3s) or die ('could not updated:'.mssql_error());




 
$query3s3ss="update [cg2015].[dbo].[rush] set  year='$mnss',extra='$statusfbios',extra2='$mos'
 where roll='1'";



mssql_query ($query3s3ss) or die ('could not updated:'.mssql_error());
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


elseif($m5>"08"  && $my>$mmyy ){
$m5i=$m5i;
  $statusfbios=$mmyy+1;
  $mos=$mmyy+2;
    $moss=$mmyy+1;
	 $mss=$mos;
 $mnss="$moss/$mos";
 
 
$query3s3="update [cg2015].[dbo].[rushss] set  year='$mnss',extra='$statusfbios',extra2='$mos'
 where roll='1'";



mssql_query ($query3s3) or die ('could not updated:'.mssql_error());



 
$query3s3s="update [cg2015].[dbo].[rushs] set  year='$mnss',extra='$statusfbios',extra2='$mos'
 where roll='1'";



mssql_query ($query3s3s) or die ('could not updated:'.mssql_error());




 
$query3s3ss="update [cg2015].[dbo].[rush] set  year='$mnss',extra='$statusfbios',extra2='$mos'
 where roll='1'";



mssql_query ($query3s3ss) or die ('could not updated:'.mssql_error());
 }







 

 

?><?php 
$err = array();

foreach($_GET as $key => $value) {
	$get[$key] = filter($value); //get variables are filtered.
}

if ($_POST['doLogin']=='Login')
{

foreach($_POST as $key => $value) {
	$data[$key] = filter($value); // post variables are filtered
}


 $user_email = $data['usr_email'];
 $pass = $data['pwd'];

 $result = mssql_query("SELECT 	CAST(id as text) as id,CAST(pwd as text) as    pwd,CAST(full_name as text) as full_name,CAST(approved as text) as approved,
 
 
 CAST(user_level as text) as user_level FROM [cg2015].[dbo].[users] WHERE 
           user_name='$user_email'
			AND banned='0'
			") or die ('error to login'); 
			 
 $num = mssql_num_rows($result);


  // Match row found with more than 1 results  - the user is authenticated. 
    if ( $num > 0 ) { 
	
	list($id,$pwd,$user_name,$approved,$user_level) = mssql_fetch_row($result);
	
	
	 
		//check against salt
	if ($pwd === PwdHash($pass,substr($pwd,0,9))) { 
	if(empty($err)){			

     // this sets session and logs user in  
       session_start();
	   session_regenerate_id (true); //prevent against session fixation attacks.

	   // this sets variables in the session 
		$_SESSION['user_id']= $id;  
		 $notes=$_SESSION['user_name'];
		$_SESSION['user_name'] = $user_name;
		$_SESSION['user_level'] = $user_level;
		$_SESSION['HTTP_USER_AGENT'] = md5($_SERVER['HTTP_USER_AGENT']);
		$monn=$user_name;
		//update the timestamp and key for cookie
		$stamp = time();
		$ckey = GenKey();
		
		mssql_query("update users set ctime='$stamp', ckey = '$ckey' where id='$id'") or die(mssql_error());
		
		//set a cookie 
		//set a cookie  
if ($user_level == 7) 
{ 

		 $_SESSION['userlevel']= $user_level;
    header ("Location: myaccount1.php"); 
} 
else if ($user_level == 4) 
{ 

		 $_SESSION['userlevel']= $user_level;
    header ("Location:  myaccount1.php");
	 
}
else if ($user_level == 6) 
{ 
    header ("Location:  book.php"); 
}
else if ($user_level == 2.1) 
{ 
    header ("Location:  regg2.php"); 
}
else if ($user_level == 3) 
{ 
		 $_SESSION['userlevel']= $user_level;
    header ("Location:  dean.php"); 
}

else if ($user_level == 5) 
{ 
		 $_SESSION['userlevel']= $user_level;
    header ("Location:  bustme.php"); 
}


else if ($user_level == 41) 
{ 
		 $_SESSION['userlevel']= $user_level;
    header ("Location:  bustmer.php"); 
}
else if ($user_level == 91) 
{ 
		 $_SESSION['userlevel']= $user_level;
    header ("Location:  x.php"); 
}
else if ($user_level == 99) 
{ 
		 $_SESSION['userlevel']= $user_level;
    header ("Location:  bustmes.php"); 
}
else if ($user_level == 33) 
{ 
		 $_SESSION['userlevel']= $user_level;
    header ("Location:  deanss.php"); 
}
else if ($user_level == 8) 
{ 

		 $_SESSION['userlevel']= $user_level;
    header ("Location:  busser.php"); 

}


else if ($user_level == 7) 
{ 

		 $_SESSION['userlevel']= $user_level;
    header ("Location:  myaccount1.php"); 

}


else if ($user_level == 1) 
{ 

		 $_SESSION['userlevel']= $user_level;
    header ("Location:  students.php"); 

}

else if ($user_level == 0) 
{ 

		 $_SESSION['userlevel']= $user_level;
    header ("Location:  book.php"); 

}
else if ($user_level == 9) 
{ 

		 $_SESSION['userlevel']= $user_level;
    header ("Location:  scanvotes.php"); 

}
else if ($user_level == 12) 
{ 

		 $_SESSION['userlevel']= $user_level;
    header ("Location:  salesss.php"); 

}else if ($user_level == 10) 
{ 

		 $_SESSION['userlevel']= $user_level;
    header ("Location:  deans.php"); 

}

else if ($user_level == 11) 
{ 

		 $_SESSION['userlevel']= $user_level;
    header ("Location:  dean.php"); 

}

else if ($user_level ==2.1) 
{ 

		 $_SESSION['userlevel']= $user_level;
    header ("Location:  sales.php"); 

}

else if ($user_level == 13) 
{ 

		 $_SESSION['userlevel']= $user_level;
    header ("Location:  classmaster6.php"); 

}

else if ($user_level == 6) 
{ 

		 $_SESSION['userlevel']= $user_level;
    header ("Location:  book.php"); 

}


else if ($user_level == 16) 
{ 

		 $_SESSION['userlevel']= $user_level;
    header ("Location:  classmaster8.php"); 

}

else if ($user_level == 17) 
{ 

		 $_SESSION['userlevel']= $user_level;
    header ("Location:  bookm.php"); 

}
else if ($user_level == 18) 
{ 

		 $_SESSION['userlevel']= $user_level;
    header ("Location:  classmaster10.php?roll=security=@123&access=*2828"); 

}


else if ($user_level == 20) 
{ 

		 $_SESSION['userlevel']= $user_level;
    header ("Location:  classmaster11.php"); 

}

else if ($user_level == 21) 
{ 

		 $_SESSION['userlevel']= $user_level;
    header ("Location:  classmaster12.php"); 

}

else if ($user_level == 22) 
{ 

		 $_SESSION['userlevel']= $user_level;
    header ("Location:  classmaster13.php"); 

}


else if ($user_level == 23) 
{ 

		 $_SESSION['userlevel']= $user_level;
    header ("Location:  classmaster14.php"); 

}
else if ($user_level == 24) 
{ 

		 $_SESSION['userlevel']= $user_level;
    header ("Location:  classmastercom7.php"); 

}


else if ($user_level == 15) 
{ 

		 $_SESSION['userlevel']= $user_level;
    header ("Location:  classmaster8.php"); 

}

else if ($user_level ==19) 
{ 
		 $_SESSION['userlevel']= $user_level;
    header ("Location:  omegahome.php?roll=security=@123&access=*2828"); 
}

else if ($user_level ==18) 
{ 
		 $_SESSION['userlevel']= $user_level;
    header ("Location:  omegahomes.php?roll=security=@123&access=*2828"); 
}

else if ($user_level ==29) 
{ 
		 $_SESSION['userlevel']= $user_level;
    header ("Location:  systemadmin.php"); 
}

else if ($user_level ==41) 
{ 
		 $_SESSION['userlevel']= $user_level;
    header ("Location:  library.php"); 
}
else if ($user_level ==111) 
{ 
		 $_SESSION['userlevel']= $user_level;
    header ("Location:  orditteam.php"); 
}
else if ($user_level ==110) 
{ 
		 $_SESSION['userlevel']= $user_level;
    header ("Location:  orditteams.php"); 
}



	   if(isset($_POST['remember'])){
				  setcookie("user_id", $_SESSION['user_id'], time()+60*60*24*COOKIE_TIME_OUT, "/");
				  setcookie("user_key", sha1($ckey), time()+60*60*24*COOKIE_TIME_OUT, "/");
				  setcookie("user_name",$_SESSION['user_name'], time()+60*60*24*COOKIE_TIME_OUT, "/");
				   }
		 }
		}
		else
		{
		//$msg = urlencode("Invalid Login. Please try again with correct user email and password. ");
		$err[] = "Invalid Password. Please you have $attempt left ";
		$statd='1';
		
$tm=date('H:i:s');
$idff=$_SESSION['user_id'];
$ip_value=date('d/m/y');
$ref=($_SERVER['SERVER_NAME']);
$notess=($_SESSION['full_name']);
$ref2=($_SERVER['PHP_SELF']);
$agent=($_SERVER['HTTP_USER_AGENT']);
$ip=@$_SERVER['REMOTE_ADDR'];





		//header("Location: login.php?msg=$msg");
		}
	} else {
		$err[] = "Error - Invalid login. No such user exists";
	  }		
}
					 
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