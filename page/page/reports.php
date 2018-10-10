<?php

include 'dbcs.php';
$ms=$_GET['roll'];
page_protect();


 $notes=$_SESSION['user_name'];

$user_name=$notes;
if(@$_SESSION['userlevel']!=4){header("location: login.php?error=Unauthorized access");}


 
 ?><?php


$query="select * from users where full_name='$notes'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>
<?php  $ids=$row['fax'];


?>
<?php } ?>
 
 
 <?php
 $notes=$_SESSION['user_name'];
$roll=$_GET["1"];
$query="select * from mainmenu6 where extra='1'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>
<?php  $col1=$row['pagename'];


?>
<?php  $link1=$row['links'];


?>
<?php } ?>

<?php
 $notes=$_SESSION['user_name'];
$roll=$_GET["1"];
$query="select * from mainmenu6 where extra='2'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>
<?php  $col2=$row['pagename'];


?>
<?php  $link2=$row['links'];


?>
<?php } ?><?php
 $notes=$_SESSION['user_name'];
$roll=$_GET["1"];
$query="select * from mainmenu6 where extra='3'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>
<?php  $col3=$row['pagename'];


?>
<?php  $link3=$row['links'];


?>
<?php } ?><?php
 $notes=$_SESSION['user_name'];
$roll=$_GET["1"];
$query="select * from mainmenu6 where extra='4'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>
<?php  $col4=$row['pagename'];


?>
<?php  $link4=$row['links'];


?>
<?php } ?><?php
 $notes=$_SESSION['user_name'];
$roll=$_GET["1"];
$query="select * from mainmenu6 where extra='5'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>
<?php  $col5=$row['pagename'];


?>
<?php  $link5=$row['links'];


?>
<?php } ?><?php
 $notes=$_SESSION['user_name'];
$roll=$_GET["1"];
$query="select * from mainmenu6 where extra='6'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>
<?php  $col6=$row['pagename'];


?>
<?php  $link6=$row['links'];


?>
<?php } ?><?php
 $notes=$_SESSION['user_name'];
$roll=$_GET["1"];
$query="select * from mainmenu6 where extra='7'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>
<?php  $col7=$row['pagename'];


?>
<?php  $link7=$row['links'];


?>
<?php } ?><?php
 $notes=$_SESSION['user_name'];
$roll=$_GET["1"];
$query="select * from mainmenu6 where extra='8'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>
<?php  $col8=$row['pagename'];


?>
<?php  $link8=$row['links'];


?>
<?php } ?><?php
 $notes=$_SESSION['user_name'];
$roll=$_GET["1"];
$query="select * from mainmenu6 where extra='9'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>
<?php  $col9=$row['pagename'];


?>
<?php  $link9=$row['links'];


?>
<?php } ?>

<?php
 $notes=$_SESSION['user_name'];
$roll=$_GET["1"];
$query="select * from mainmenu6 where extra='10'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>
<?php  $col10=$row['pagename'];


?>
<?php  $link10=$row['links'];


?>
<?php } ?>
<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>PEFSCOM SYSTEM</title>
    
    
    
    
        <link rel="stylesheet" href="css/style.css">

<link rel="stylesheet" href="font-awesome/css/font-awesome.css" type="text/css" media="screen">
    
    
    
  </head>

  <body>

    <div class="titles" ><h1 style="float:left;margin-top:20px; margin-left:10px;text-shadow:1px 0px 1px #fff;color:#50a3a2;">PEFSCOM COMPANY LIMITED</h1><br>
	<div style="float:left;color:#000; margin-top:35px; margin-left:-370px;font-size:13px;">Transforming all Manual System to Computerised System</div>
		<div style="float:left;color:#000; margin-top:15px;  HEIGHT:25PX; BACKGROUND:#efefef; margin-left:320px;font-size:13px;">
		<div style="float:left; WIDTH:500PX;"><div style="float:left;margin-top:5px; margin-left:5px;  WIDTH:120PX; HEIGHT:25PX;color:#009966; font-size:13px;">	
				
<div style="float:left; WIDTH:15PX; HEIGHT:25PX;">	<i class="fa  fa-key fa-1x" style="float:left; color:#009966; ;">

</i></div>

		<div style="float:left; WIDTH:50PX; HEIGHT:25PX;">  <?php echo $notes;?>
		</div>

		
		</div>
		
		
  <a href="setting.php" style="color:#009966;">
		<div style="float:left;margin-top:5px; margin-left:5px;  WIDTH:100PX; HEIGHT:25PX;color:#009966; font-size:13px;">	
		
		<div style="float:left; WIDTH:15PX; HEIGHT:25PX;">	<i class="fa  fa-cog fa-1x" style="float:left; color:#009966; ;">

</i></div>

		<div style="float:left; WIDTH:50PX; HEIGHT:25PX;"> Setting
		</div>
		
		</div>
		</a>
  <a href="accounts.php" style="color:#009966;">
			<div style="float:left;margin-top:5px; margin-left:5px;  WIDTH:100PX; HEIGHT:25PX;color:#009966; font-size:13px;">	
		
<div style="float:left; WIDTH:15PX; HEIGHT:25PX;">	<i class="fa  fa-user fa-1x" style="float:left; color:#009966; ;">

</i></div>

		<div style="float:left; WIDTH:50PX; HEIGHT:25PX;"> Account
		</div>
		
		</div>
		</a>
		
		
  <a href="logout.php" style="color:#009966;">
			<div style="float:left;margin-top:5px; margin-left:5px;  WIDTH:120PX; HEIGHT:25PX;color:#009966; font-size:13px;">	
		
		&#9658; Logout
		
		</div>
		</a>
		
		
		</DIV>
			
		
		</DIV>
		
		
		<div style="float:left;color:#000; margin-top:15px;  width:190px; HEIGHT:20PX; BACKGROUND:#efefef; margin-left:665px;font-size:13px;">
			Position:-Security Post
		</DIV>
		
		
		
		
		
		
		
		</div>
    
	<div style="float:left;
  background: #50a3a2;
  background: -webkit-linear-gradient(top left, #50a3a2 0%, #53e3a6 100%);
  background: linear-gradient(to bottom right, #50a3a2 0%, #53e3a6 100%);
margin-top:100px;
 color:#fff;
  width: 110%;
  height: 70px;">
 
  <div style="float:left; WIDTH:1400PX; height:60px; margin-top:5px; margin-left:15px;">
  
  <a href="<?php echo $link1;?>?roll=<?php echo $col1;?>" style="color:#fff;">
  <div style="float:left; WIDTH:130PX; height25px; margin-top:10px; ">
  
  <div style="float:left; WIDTH:45PX; HEIGHT:25PX;">	<i class="fa  fa-area-chart fa-2x" style="float:left; color:#fff; ;">

</i></div>
  
  
  
    
  <div style="float:left; WIDTH:85PX; HEIGHT:25PX;font-size:13px;font-weight:bold;">  <?php echo $col1;?></div>
  
  
  
  
  
  
  
  </div>
  </a>
  
  
  
  <a href="<?php echo $link2;?>?roll=<?php echo $col2;?>" style="color:#fff;">
  <div style="float:left; WIDTH:130PX; height25px; margin-top:10px; ">
  
  <div style="float:left; WIDTH:45PX; HEIGHT:25PX;">	<i class="fa  fa-lastfm fa-2x" style="float:left; color:#fff; ;">

</i></div>
  
  
  
    
  <div style="float:left; WIDTH:85PX; HEIGHT:25PX;font-size:13px;font-weight:bold;"> <?php echo $col2;?></div>
  
  
  
  
  
  
  
  </div></a>
  
  
  
  
  
  
  
  
  <a href="<?php echo $link3;?>?roll=<?php echo $col3;?>" style="color:#fff;">
  
  <div style="float:left; WIDTH:130PX; height25px; margin-top:10px; ">
  
  <div style="float:left; WIDTH:45PX; HEIGHT:25PX;">	<i class="fa  fa-print fa-2x" style="float:left; color:#fff; ;">

</i></div>
  
  
  
    
  <div style="float:left; WIDTH:80PX; HEIGHT:25PX;font-size:13px;font-weight:bold;"><?php echo $col3;?></div>
  
  
  
  
  
  
  
  </div>
  </a>
  
  
  
  
  
  
  
  
  
  
  
  
  
  <a href="<?php echo $link4;?>?roll=<?php echo $col4;?>" style="color:#fff;">
  <div style="float:left; WIDTH:130PX; height25px; margin-top:10px; ">
  
  <div style="float:left; WIDTH:45PX; HEIGHT:25PX;">	<i class="fa  fa-bell fa-2x" style="float:left; color:#fff; ;">

</i></div>
  
  
  
    
  <div style="float:left; WIDTH:80PX; HEIGHT:25PX;font-size:13px;font-weight:bold; text-align:left;"><?php echo $col4;?></div>
  
  
  
  
  
  
  
  </div>
  </a>
  
  
  
  
  
  <a href="<?php echo $link5;?>?roll=<?php echo $col5;?>" style="color:#fff;">
  
  <div style="float:left; WIDTH:130PX; height25px; margin-top:10px; ">
  
  <div style="float:left; WIDTH:45PX; HEIGHT:25PX;">	<i class="fa  fa-eyedropper fa-2x" style="float:left; color:#fff; ;">

</i></div>
  
  
  
    
  <div style="float:left; WIDTH:80PX; HEIGHT:25PX;font-size:13px;font-weight:bold;"><?php echo $col5;?></div>
  
  
  
  
  
  
  
  </div>
  
  </a>
  
  
  
  
  
  <a href="<?php echo $link6;?>?roll=<?php echo $col6;?>" style="color:#fff;">
  
  
  <div style="float:left; WIDTH:130PX; height25px; margin-top:10px; ">
  
  <div style="float:left; WIDTH:45PX; HEIGHT:25PX;">	<i class="fa  fa-book fa-2x" style="float:left; color:#fff; ;">

</i></div>
  
  
  
    
  <div style="float:left; WIDTH:80PX; HEIGHT:25PX;font-size:13px;font-weight:bold;"><?php echo $col6;?></div>
  
  
  
  
  
  
  
  </div>
  
  </a>
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  <a href="<?php echo $link7;?>?roll=<?php echo $col7;?>" style="color:#fff;">
  <div style="float:left; WIDTH:140PX; height25px; margin-top:10px; ">
  
  <div style="float:left; WIDTH:45PX; HEIGHT:25PX;">	<i class="fa  fa-line-chart fa-2x" style="float:left; color:#fff; ;">

</i></div>
  
  
  
    
  <div style="float:left; WIDTH:80PX; HEIGHT:25PX;font-size:13px;font-weight:bold;"><?php echo $col7;?> </div>
  
  
  
  
  
  
  
  </div>
  </a>
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  <a href="<?php echo $link8;?>?roll=<?php echo $col8;?>" style="color:#fff;">
  <div style="float:left; WIDTH:130PX; height25px; margin-top:10px; ">
  
  <div style="float:left; WIDTH:45PX; HEIGHT:25PX;">	<i class="fa  fa-ioxhost fa-2x" style="float:left; color:#fff; ;">

</i></div>
  
  
  
    
  <div style="float:left; WIDTH:80PX; HEIGHT:25PX;font-size:13px;font-weight:bold;"><?php echo $col8;?> </div>
  
  
  
  
  
  
  
  </div>
  
  
  </a>
  
  
  
  
  
  
  <a href="<?php echo $link9;?>?roll=<?php echo $col9;?>" style="color:#fff;">
  <div style="float:left; WIDTH:130PX; height25px; margin-top:10px; ">
  
  <div style="float:left; WIDTH:45PX; HEIGHT:25PX;">	<i class="fa  fa-hand-o-right fa-2x" style="float:left; color:#fff; ;">

</i></div>
  
  
  
    
  <div style="float:left; WIDTH:80PX; HEIGHT:25PX;font-size:13px;font-weight:bold;"><?php echo $col9;?> </div>
  
  
  
  
  
  
  
  </div>
  
  
  </a>
  
  
  
   
  <a href="<?php echo $link10;?>?roll=<?php echo $col10;?>" style="color:#fff;">
  <div style="float:left; WIDTH:130PX; height25px; margin-top:10px; ">
  
  <div style="float:left; WIDTH:45PX; HEIGHT:25PX;">	<i class="fa  fa-subway fa-2x" style="float:left; color:#fff; ;">

</i></div>
  
  
  
    
  <div style="float:left; WIDTH:80PX; HEIGHT:25PX;font-size:13px;font-weight:bold;"><?php echo $col10;?> </div>
  
  
  
  
  
  
  
  </div>
  
  
  </a>
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  </div>
  
  </div>
	
	<div style="float:left;
  background: #efefef;
 color:#009966;
  width: 100%;
  height: 25px;margin-top:5px;">
	
  <div style="float:left; WIDTH:45PX; HEIGHT:25PX;">	<i class="fa  fa-chevron-right fa-2x" style="float:left; color:#fff; ;">

</i></div>
	- <?php echo $ms;?>
	
  </div>
	
	
	
	
	
	<div style="float:left;

  width: 100%;
  height: 25px;margin-top:5px;">
	<a href="busser.php">
	<div style="float:left;margin-left:5px;

  width: 110px;
  height: 25px;"><div style="float:left;

  width: 50px;
  height: 25px;">
  <i class="fa  fa-home fa-2x" style="float:left; color:#50a3a2; ;">

</i>
  
  </div><div style="float:left;

  width: 40px;
  height: 25px;color:#50a3a2;">
  <div style="float:left;margin-top:8px;font-size:12px;">
  Home
  </div>
  </div>
  
  </div></a>
	
	<a href="change.php">
	<div style="float:left;margin-left:5px;

  width: 110px;
  height: 25px;"><div style="float:left;

  width: 40px;
  height: 25px;">
  <i class="fa  fa-plane fa-2x" style="float:left; color:#50a3a2; ;">

</i>
  
  </div><div style="float:left;

  width: 40px;
  height: 25px;color:#50a3a2;">
  <div style="float:left;margin-top:8px;font-size:12px;">
  Change password 
  </div>
  </div>
  
  </div></a>
	
	
	<a href="track.php">
	<div style="float:left;margin-left:5px;

  width: 110px;
  height: 25px;"><div style="float:left;

  width: 40px;
  height: 25px;">
  <i class="fa  fa-eye fa-2x" style="float:left; color:#50a3a2; ;">

</i>
  
  </div><div style="float:left;

  width: 40px;
  height: 25px;color:#50a3a2;">
  <div style="float:left;margin-top:8px;font-size:12px;">
Track Activities
  </div>
  </div>
  
  </div>
	
	</a>
	
	
	<a href="rvisitors.php">
	<div style="float:left;margin-left:5px;

  width: 110px;
  height: 25px;"><div style="float:left;

  width: 40px;
  height: 25px;">
  <i class="fa  fa-bee fa-2x" style="float:left; color:#50a3a2; ;">

</i>
  
  </div><div style="float:left;

  width: 40px;
  height: 25px;color:#50a3a2;">
  <div style="float:left;margin-top:8px;font-size:12px;">
Visitors Records
  </div>
  </div>
  
  </div>
	
	</a>
	
	
	
	
	
	
	
	
	
	
	
	
  </div>
	
		<div style="float:left;
background:#efefef;
  width: 100%; 
  height: 300px;margin-top:15px;">
	
	
	
<iframe title="" class="youtube-player" type="text/html" 
width="100%" height="470" src="recordss.php"
frameborder="0" allowFullScreen style="
 border: 0px solid #ffffff;background:#efefef;"></iframe>
  
<script type="text/javascript">
$(function () {
    $('#form').w2form({ 
        name   : 'form',
       
        url    : 'server/post',
        fields : [
            { field: 'first_name', type: 'text', required: true },
            { field: 'last_name',  type: 'text', required: true },
            { field: 'comments',   type: 'text'},
            { field: 'address1', type: 'text', required: true },
            { field: 'address2', type: 'text' },
            { field: 'city', type: 'text', required: true },
            { field: 'state', type: 'text', required: true },
            { field: 'zip', type: 'int', required: true },
            { field: 'short_bio', type: 'text' },
            { field: 'talk_name', type: 'text', required: true },
            { field: 'description', type: 'text' }
        ],
        actions: {
            reset: function () {
                this.clear();
            },
            save: function () {
                this.save();
            }
        }
    });
});
</script>
  
  
	
  </div>
	
	
	<div style="float:left;
background:#efefef;
  width: 100%; text-align:center;
  height: 25px;margin-top:175px; font-size:12px;color:#009933;">
	
	
	&copy PEFSCOM COMPANY LTD
	
  </div>
		
	
	
	
	
	
	
	
	</div>
    <script src='jquery.min.js'></script>

        <script src="js/index.js"></script>

    
    
    
  </body>
</html>
