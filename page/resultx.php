<?php 
include 'dbc.php';
page_protect();

if(@$_SESSION['userlevel']!=7){header("location: login.php?error=Unauthorized access");}

 $notes=$_SESSION['user_name']
?>

<!DOCTYPE html>
 <html>
 <head>
<meta charset="UTF-8">
 <title>HIGHER INSTITUTE OF MANAGEMENT STUDIES</title>
 
    <link rel="stylesheet" href="page/nivo-slider.css" type="text/css" media="screen" />
	
    <script type="text/javascript" src="scripts/jquery-1.4.3.min.js"></script>
    <script type="text/javascript" src="page/jquery.nivo.slider.pack.js"></script> <script type="text/javascript">
    $(window).load(function() {
        $('#slider').nivoSlider();
    });
    </script>
 <STYLE>
 </STYLE>
 </head>

 <body>
   <div id="header1">
 <div class="sub1">
 <div style="margin:auto; width:950px; height:50px;color:#fff;">
 
 
 
 		
 
 
 			
   
		         <a href="index.php" style='color:#fff;'>         <div style="float:left; width:200px; margin-top:20px; height:30px; border-right:1px solid #fff;"> 
			
			Study at HIMS
          </div></a>
		  
		
		         <a href="about.php" style='color:#fff;'>      <div style="float:left;text-align:center;margin-top:20px; width:200px; height:30px; border-right:1px solid #fff;"> 
			
			About  HIMS
          </div></a>
		  
		
		         <a href="research.php" style='color:#fff;'>     	   <div style="float:left;text-align:center; margin-top:20px;width:200px; height:30px; border-right:1px solid #fff;"> 
			
			Research at  HIMS
          </div></a>
		  
		  
		  
		  
		  	   <div style="float:left;text-align:center;margin-top:20px; width:300px; height:30px; "> 
			<div style="float:left;margin-left:5px;">
		  	   <div style="float:left;margin-top:-4px;">
		<form method="post" action="index.php"><table><tr><td><input type="text" name="search" value="" placeholder="Quick link" size="34">
          </td><td><input type="button" value="Search"></td></tr></table>
		  </form>
		  </div>
 
 
 
 
 
 
 
 
 
 
 </div>
 
 
 </div>
 
 <div class="sub2">
 <div style="margin:auto; width:950px; height:50px;color:#fff;">
 
 
 
  <div style="float:left; margin-top:70px; width:400px;text-shadow:0px 1px 0px #282828; height:140px;color:#fff; "> 
		   
		   
		     <div style="float:left; width:140px; height:140px; "> 
		   
		   <img src="logo.png" height="80px" width="100px">
		   </div>
		   
		   
		       <div style="float:left; width:260px; height:140px; "> 
			   
		       <div style="float:left; width:221px;FONT-SIZE:18PX; height:30px; "> 
		    HIGHER INSTITUTE 
		  
		   </div>
		    <div style="float:left;FONT-SIZE:39PX;font-family:script;margin-left:-40px; width:30px; HEIGHT:30PX;">
		
		  <div style="float:left;width:30px; margin-top:-15px;margin-left:0px;"> of</div>
		 
		 </div>
		  
		 
		       <div style="float:left; width:260px;FONT-SIZE:17PX; height:30px; ">  MANAGEMENT STUDIES
		   
		   	 </div>
		  
		   
		   
		   </div>
		   
		   
		   </div>
           <div style="float:left;margin-left:90px; margin-top:70px; width:400px; height:140px;color:#fff;letter-spacing:1px; "> 
		   
		  		   
		   
   
		         <a href="staff.php" style='color:#fff;'>    <div style="float:left; width:200px; height:20px; "> 
		   > For staff
		     </div></a>
			
		         <a href="department.php" style='color:#fff;'>        <div style="float:left; width:200px; height:20px; "> 
		   > Colleges and departments
		     </div></a>
		   
		         <a href="student.php" style='color:#fff;'>      <div style="float:left; width:200px; height:20px; "> 
		 >  For current students
		     </div></a>
			
		         <a href="library.php" style='color:#fff;'>        <div style="float:left; width:200px; height:20px; "> 
		   > Libraries and facilities
		     </div></a>
		     
		         <a href="library.php" style='color:#fff;'>      <a href="result.php" style='color:#fff;'> <div style="float:left; width:200px; height:20px; "> 
		 >  Results 
		     </div></a>
			 
		         <a href="login.php" style='color:#fff;'>        <div style="float:left; width:200px; height:20px; "> 
		  > Online Form B
		     </div></a>
		  </div>
 
 
 
 
 </div>
 
 </div>
 
 </div>
 
 </div>
 
 <div style="margin:auto;width:950px; height:500px;margin-top:240px;opacity:0.9;
 box-shadow: 1px 0px 1px  3PX #FFFFFF; background:#fff;">
 
 
 
 
 <div style="float:left;width:200px; height:500px; ;">
 
 <div style="float:left;width:200px; height:30px;color:#fff;font-size:17px;
 background: -moz-linear-gradient(#2c5678, #000); 
        background: -webkit-gradient(linear,left bottom,left top,color-stop(0, #111),color-stop(#2c5678, #000));	
	background: -webkit-linear-gradient(#2c5678, #000);	
	background: -o-linear-gradient(#2c5678, #000);
	background: -ms-linear-gradient(#2c5678, #000);
	background: linear-gradient(#2c5678, #000);text-align:center;">
 <b>
 Menu</b>
 
 </div>
 
 
 <div style="float:left;width:70px;margin-top:10px;margin-left:10px; height:20px;">
 <img src='g1.gif'>
 
 
 </div>
  
 <div style="float:left;width:100px;margin-top:20px;margin-left:10px; height:20px;">

  <div style="float:left;width:120px;margin-left:-20px;">
 <a href="form.php" style='color:#787878;'>FORM B</a>
 
 </div>
 
 
 </div>
 
 
 
  <div style="float:left;width:70px;margin-top:5px; margin-left:10px;height:30px;">
 <img src='re.gif'>
 
 
 </div>
  
 <div style="float:left;width:120px;margin-top:12px; height:30px;">

  <div style="float:left;width:120px;margin-left:-20px;">
 <a href="resultx.php" style='color:#787878;'>RESULT SLIP</a>
 
 </div>
 </div>
   <div style="float:left;width:70px;margin-top:5px; margin-left:10px;height:30px;">
 <img src='re.gif'>
 
 
 </div>
  
 <div style="float:left;width:120px;margin-top:12px; height:30px;">

  <div style="float:left;width:120px;margin-left:-20px;">
 <a href="resultxs.php" style='color:#787878;'>SECOND SEM</a>
 
 </div>
 </div>
   <div style="float:left;width:70px;margin-top:5px; margin-left:10px;height:30px;">
 <img src='dn.gif'>
 
 
 </div>
  
 <div style="float:left;width:120px;margin-top:5px; height:30px;">

 
  <div style="float:left;width:120px;margin-left:-20px;">
 <a href="trans.php" style='color:#787878;'>TRANSCRIPT</a>
 
 </div>
 
 
 </div>
 
 
 
 
  <div style="float:left;width:70px;margin-top:10px;margin-left:10px; height:30px;">
 <img src='tr.png' height='36px' width='36px'>
 
 
 </div>
  
 <div style="float:left;width:120px;margin-top:10px; height:30px;">

  
  <div style="float:left;width:120px;margin-left:-20px;">
 <a href="idcard.php" style='color:#787878;'>ID - CARD</a>
 
 </div>
 
 
 </div>
 
   <div style="float:left;width:70px;margin-top:5px; margin-left:10px;height:30px;">
 <img src='sr.gif'>
 
 
 </div>
  
 <div style="float:left;width:120px;margin-top:5px; height:30px;">

 
  <div style="float:left;width:120px;margin-left:-20px;">
 <a href="search.php" style='color:#787878;'>SEARCH</a>
 
 </div>
 
 </div>
 
    <div style="float:left;width:70px;margin-top:5px; margin-left:10px;height:30px;">
 <img src='ll.jpeg' height='32px' width='32px'>
 
 
 </div>
  
 <div style="float:left;width:120px;margin-top:5px; height:30px;">

 
 
  <div style="float:left;width:120px;margin-left:-20px;">
 <a href="logout.php" style='color:#787878;'>LOGOUT</a>
 
 </div>
 </div>
 
 
 
 </div>
 
 
 
 
 <div style="float:left;width:750px; height:500px; background:#efefef;">
 
 
 <div style="float:left;width:750px;HEIGHT:30PX; background:#BCB5B3; TEXT-ALIGN:CENTER;color:#fff; ">
 
 WELCOME : <?php 
 echo $notes;?>
 
 </DIV>
 
<?php
$roll=$_GET["1"];
$query="select * from users where full_name='$notes'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>

 <?php   $levels=$row['country'];
$users=$row['user_name'];
  $dept=$row['website'];
?>
		 

<?php } ?>

 
 <div style="float:left;width:750px;HEIGHT:450PX; background:#fff;  TEXT-ALIGN:CENTER;color:#fff; ">
 
 
	
<iframe title="receipt" class="y" type="text/html" 
width="730px" height="440px" src="report1st99s2.php"
frameborder="0" allowFullScreen style="
 border: 0px solid #ffffff;"></iframe>


 
 </div>
 
 
 </div>
 
 
 
 
 
 
 
 
 
 
 
 
 </div>