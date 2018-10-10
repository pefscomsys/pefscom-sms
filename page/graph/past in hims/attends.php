<?php 
include 'dbc.php';
page_protect();
	
 $notes=$_SESSION['user_name'];


if(@$_SESSION['userlevel']!=7){header("location: login.php?error=Unauthorized access");}				 	 

?>
	<?php
$roll=$_GET["1"];
$query="select * from school where roll='1'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
?>

<?php  $school=$row[1];
$school2=$row[2];
?>
<?php } ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<html lang="en">
<head>
<title><?php echo $school;?></title>
        <link rel="shortcut icon" href="pef.png"> 
    <link rel="stylesheet" href="stss.css" type="text/css" media="screen" />
	<style>
	
	
	
	#login, #newCustomer, #resetYourPassword {min-height:210px; float:left;}

#login {margin:0 15px 0 40px; width:440px; padding:20px 0 20px;}
#login fieldset {clear:left; padding:0 20px 10px 30px;}
#login .btn, #resetYourPassword .btn {width:208px;}
#login ol {clear:left;}
#login li {margin:0 0 15px 0; list-style-type:none;}
#login label, #resetYourPassword label {width:200px; display:block; padding:0 5px 4px 0; font-size:14px;}
#login input, #resetYourPassword input {width:200px;}
#login .fNote {line-height:17px; text-indent:13px;}
#login .forgot {margin:0 0 0 10px;}
submitError {background:#feeee6 !important; border:1px solid #f25b00 !important;}
.submit {width:100%; font-size:14px; margin:0 -20px 20px -30px; border-width:1px 0;}
.submitError span {display:block;}
#login.cont .submitError li {display:block; margin:10px 0;}
#login .legalAgreement {padding:10px; font-size:10px; border:1px solid #D9EEFA; border-width:1px 0; background:#ECF8FF;}

#loginEmail, #resetEmail {font:italic 13px Georgia, serif;}

#newCustomer {width:440px; padding:20px 0 20px 10px; font-size:10px;}
.ie7 #newCustomer .bVneck {margin-right:350px;}
#newCustomer ul {margin:6px 0 15px 20px;}
#newCustomer ul li {margin:0 0 7px;}
#newCustomer .new, #newCustomer .amazon {float:left; width:180px;}
#newCustomer .new {clear:left; margin:0 10px 0 15px; clear:left;}
#newCustomer b.or {float:left; margin:7px 20px 0 0;}
#newCustomer .amazon .link {width:156px; height:32px; background-image:url(/tng/imgs/login/spLogin.20131114112442.png); background-repeat:no-repeat; background-position:0 0px; margin:0 0 0 5px; padding:0; zoom:1; text-indent:-9999px; overflow:hidden; border:0; display:block;}
#newCustomer .amazon p {margin:16px 0 0 0;}
	
	.bVneck {font-weight:normal; font:italic 18px 'Georgia', serif; background:#2c5987; color:#fff; position:relative; margin:0; line-height:39px; padding:0 28px 0 23px; overflow:visible; float:left;}
.bVneck:after {content:""; background:#2c5987 right -1107px; width:14px; height:40px; position:absolute; top:0; right:0;}

	.cont .inlineErr,
.cont .inputErr input,
.cont .submitError {background:#feeee6 !important; border:1px solid #f25b00 !important;}
.cont .inputErr label {color:#f25b00;}
.cont .submitError {line-height:1.4em; clear:left; padding:12px 25px; border-width:1px 0 !important;}
.cont .submitError span {display:block;}
.cont .action {line-height:18px; margin:0 0 7px 0; display:inline-block; -webkit-border-radius:4px; -moz-border-radius:4px; border-radius:4px;}
body .cont .action {white-space:nowrap; background:#FA5700 !important; color:#fff;}
.cont input {box-shadow:inset 2px 2px 2px #e8e8e8; -webkit-transition:border-color 0.25s 0s ease-in-out; -moz-transition:border-color 0.25s 0s ease-in-out; transition:border-color 0.25s 0s ease-in-out;}
.cont input:focus {border-color:#759AC7; box-shadow:0 0 10px rgba(117, 154, 199, .8); outline:none;}
table,td,tr{cellspacing:2px;}
	
	
	</style>
</head>
<body>
<div id="container">

<div id="headers1">
<div style="float:left; width:200px; margin-top:40px; text-align:center;">
PCL- Buea

</div>

<div style="float:left;font-size:11px;width:200px; font-weight:normal;margin-left:20px; font-family:arial;">



<div style="float:left;color:f4f4f4; "> PEFSCOM</div> &nbsp; COMPANY LTD - Buea
</div>
</div>
<div id="headers2">

<div style="float:left; width:700px; color:rgb(300,200,80); height:30px; margin-top:40px; text-align:center; font-family:impact,sans-serif;
font-size:28px;">

<?php echo $school;?></div>


<div style="float:left; width:700px; color:rgb(300,200,80); height:30px; margin-top:10px; text-align:center; font-family:impact,sans-serif;
font-size:14px;">


<?php echo $school2;?>
</div>
</div>
<div id="headers3">

</div>



<div id="headers4">

<div style="float:left; width:160px;  height:51px; background:url(button.png); margin-left:10px;">
<a href="myaccount1.php">
<div style="float:left; width:160px;  margin-top:10px;text-align:center; font-family:impact;color:#787878;">



 Home</div></a></div>

 
<div style="float:left; width:160px;  height:51px; background:url(button.png); margin-left:10px;">
<a href="attends.php">
<div style="float:left; width:160px;  margin-top:10px;text-align:center; font-family:impact;color:#787878;">


 Attendance card</div></a></div>

 
<div style="float:left; width:160px;  height:51px; background:url(button.png); margin-left:10px;"><a href="users.php">

<div style="float:left; width:160px;  margin-top:10px;text-align:center; font-family:impact;color:#787878;">



 Users and acc</div></a></div>
 
<div style="float:left; width:160px;  height:51px; background:url(button.png); margin-left:10px;">
<a href="access.php">
<div style="float:left; width:160px;  margin-top:10px;text-align:center; font-family:impact;color:#787878;">



 access key gen.</div></a></div>
 
 
<div style="float:left; width:160px;  height:51px; background:url(button.png); margin-left:10px;">
<a href="tracking.php">
<div style="float:left; width:160px;  margin-top:10px;text-align:center; font-family:impact;color:#787878;">



 Tracking</div></a></div>
 
 
<div style="float:left; width:160px;  height:51px; background:url(button.png); margin-left:10px;">
<a href="online.php">
<div style="float:left; width:160px;  margin-top:10px;text-align:center; font-family:impact;color:#787878;">



 Send result online</div></a></div>
 
<div style="float:left; width:160px;  height:51px; background:url(button.png); margin-left:10px;">
<a href="news.php">
<div style="float:left; width:160px;  margin-top:10px;text-align:center; font-family:impact;color:#787878;">



 send news</div></a></div>
<div style="float:left; width:160px;  height:51px; background:url(button.png); margin-left:10px;">
<a href="logout.php">
<div style="float:left; width:160px;  margin-top:10px;text-align:center; font-family:impact;color:#787878;">



Sign out</div></a></div>
 
 
 
</div>


<div id="headers5">

<div style="float:left;width:630px;font-family:arial;font-size:11px; height:30px;margin-top:10px; margin-left:30px; background:rgba(200,250,80 ,0.3);;">

<div style="float:left; margin-top:5px;width:630px;">
<marquee scrollamount="1" hspace="2" vspace="1"
>Welcome to <b><?php echo $school;?></b> <?php echo $school2;?>


</marquee>
</div>
</div>





<div style="float:left;width:600px; height:400px; margin-left:30px;">


	
<iframe title="receipt" class="y" type="text/html" 
width="630px" height="420px" src="attendss.php"
frameborder="0" allowFullScreen style="
 border: 0px solid #ffffff;"></iframe>


</div>




</div>


<div id="headers6">

<div style="float:left;width:900px; margin-top:10px; font-size:11px;font-family:arial;">
PROGRAMMED BY PEFSCOM COMPANY LTD - Buea
</div.
</div>







</div>







</body>
</html>