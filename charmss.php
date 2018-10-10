<?php

include 'dbcs.php';

page_protect();


 $notes=$_SESSION['user_name'];

$user_name=$notes;




 $ip=@$_SERVER['REMOTE_ADDR'];
 

?>
<?php
 $notes=$_SESSION['user_name'];
$roll=$_GET["1"];
$query="select * from users where full_name='$notes'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>
<?php  $ids=$row['fax'];


?>
<?php } ?><?php
$position=$_GET['roll'];




$qry = mysql_query("select  positions as total
from position where roll='$position' "); 
$row = mysql_fetch_assoc($qry);

  $fake=$row['total'];  	
?>
<html>

<head>
<script src="jquery.min.js"></script><style>
body {
  background: url('school1.jpg') no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
  margin: 0px;
}
.brad-img {
	border-radius: 50%;
	border: 4px solid #FFF;
	box-shadow: 0px 0px 4px 1px rgba(0,0,0,0.8);
	float: right;
	margin: 0px 15px;
	height: 130px;}#flower {
    display: none;
}

#shiva
{
  width: 100px;
	height: 100px;
	background: red;
	-moz-border-radius: 50px;
	-webkit-border-radius: 50px;
	border-radius: 50px;
  float:left;
  margin:5px;
}
.count
{
  line-height: 100px;
  color:white;
  margin-left:30px;
  font-size:25px;
}
#talkbubble {
   width: 120px;
   height: 80px;
   background: red;
   position: relative;
   -moz-border-radius:    10px;
   -webkit-border-radius: 10px;
   border-radius:         10px;
  float:left;
  margin:20px;
}
#talkbubble:before {
   content:"";
   position: absolute;
   right: 100%;
   top: 26px;
   width: 0;
   height: 0;
   border-top: 13px solid transparent;
   border-right: 26px solid red;
   border-bottom: 13px solid transparent;
}

.linker
{
  font-size : 20px;
  font-color: black;
}

</style>
<script type="text/javascript">//SINGLE VALUE


$('.Count').each(function (index, value) {
    jQuery({ Counter: 0 }).animate({ Counter: value.text() }, {
        duration: 1000,
        easing: 'swing',
        step: function () {
            value.text(Math.ceil(this.Counter));
        }
    });

</script>
<script type="text/javascript">
function fadeIn(el, time) {
  el.style.opacity = 5;
  el.style.display = "block";

  var last = +new Date();
  var tick = function() {
    el.style.opacity = +el.style.opacity + (new Date() - last) / time;
    last = +new Date();

    if (+el.style.opacity < 1) {
      (window.requestAnimationFrame && requestAnimationFrame(tick)) || setTimeout(tick, 16)
    }
  };

  tick();
}

fadeIn(document.getElementById('flower'), 1000);
</script>
</head>
<body style="background:blue;">

	
	<div style="width:1600px;float:left; margin-left:50px;"> <?php
$roll=$_GET["1"];
$query="select * from rushs where roll='1'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>
<?php   $take=$row[1];

?>
<?php } ?>
	<?php
	
	$query="select * from election where  extra='$take'  and stat=''  and rolx='$position' order by position ASC";
$result=mysql_query($query);
	
		 while ($row = mysql_fetch_array($result)) {
		 $flag=1;
		 
	?>
	<?php  $mxc=$row['matricule'];$levels=$row['levels'];
	$name=$row['fname'];$deptt=$row['department'];
	$code=$row['codes'];$colors=$row['colors'];
	?>
	<a href="charmsss.php?roll=<?php echo $mxc;?>">
	<div style="float:left; width:410px; height:340px;font-weight:bold;background:url(fire.gif);">
		<div style="float:left; width:370px;font-family:Times New Roman; height:50px;font-weight:normal; font-size:18px; ">
	
	<div style="float:left; BACKGROUND:#770000;font-size:18px; width:370px;font-family:Times New Roman; height:70px;">
<div style="float:left; width:370px; height:35px;color:#fff;">
<div style="float:left;margin-top:15px;font-family:georgia;font-size:28px;">
<B>VOTE = 









<?php 


 $qry2 = mysql_query("select SUM(counts) as total from countelec where   codes='$code' "); 
$row = mysql_fetch_assoc($qry2); 
  $tm=$row['total']; 
?>
<div id="talkbubble"><span class="Count"><?php echo $tm;?></span></div>
	</div></div></div>
	
	<div style="float:left; width:370px;font-family:Times New Roman; height:40px;">
	
	<B>
	</b>
	</div>
	
	</div>
	<div style="float:left; width:370px; height:300px; margin-top:25px; ">
	
	
	<div style="float:left; width:140px; height:195px; ">
	<?php 
				
				$qry = mysql_query("select id as total
from employees where empname='$mxc'  order by empname ASC "); 
$row = mysql_fetch_assoc($qry); 
 $savep4=$row['total']; 
				 $mxx=$rec['empname'];?>
					
					
					<img src="load_image.php?pic_id=<?php echo $savep4;?>" width="370px" height="185px">
	</div>
	
	<div style="float:left; width:300px; height:90px;">
	<div style="float:left; width:370px; height:80px;text-transform:uppercase;font-size:22px;background:<?php echo $colors;?>; text-align:center;">

	<div style="float:left;width:250px;text-align:center;  margin-top:25px;"><?php echo $colors;?>-	PARTY
	
	</div>
</div>
	</div>
	<div style="float:left; width:320px;font-family:Times New Roman; height:20px;font-weight:normal; font-size:18px; ">
	
	
	
	<?php 
	

 $qry2 = mysql_query("select matricule as total from refrence where   student_name='$code' "); 
$row = mysql_fetch_assoc($qry2); 
  $tm=$row['total']; 
   
  $mxc11=$tm;
if(empty($mxc11)){
 $colorf1bio="";
 	 $mm='10000';
	 $w="0px"; $h="0px";$b="0px";
	 $nnb=""; $blin='';

}
elseif($mxc11>'' ){
	 $colorf1bio="wheat";
	 $mm=$tm;
	 $w="200px"; $h="155px";$b="2px";
	 $blin='<img src="arrow.gif" width="50"><img src="arrow.gif" width="50"><img src="arrow.gif" width="50"><img src="arrow.gif" width="50">';;

	 $nnb="Vote Now";}

  ?>
	
	
		<div style="float:left; width:270px;font-family:Times New Roman; height:20px;font-weight:normal; font-size:18px; ">
	
	<div style="float:left; width:200px;font-family:Times New Roman; height:250px;font-size:15px;">
	
	
	<div style="float:left; width:200px;font-family:Times New Roman; height:30px;font-size:15px;">
	<?php echo  $blin;?> </div>
	
	
	
	<?php
  

 $qry2 = mysql_query("select Fname as total from courses where   matricule='$mm' "); 
$row = mysql_fetch_assoc($qry2); 
  $fname=$row['total']; 
				
				
				$qry = mysql_query("select id as total
from employees where empname='$mm'  order by empname ASC "); 
$row = mysql_fetch_assoc($qry); 
 $savep4=$row['total']; 
				 $mxx=$rec['empname'];?>
					
					
					<img  src="load_image.php?pic_id=<?php echo $savep4;?>" style="opacity:0.7;border:<?php echo $b;?> solid #000;BACKGROUND:<?php echo $colorf1bio;?>;"width="<?php echo $w;?>" height="<?php echo $h;?>">
	
	
	
	<div style="float:left;text-align:center;color:#000;BACKGROUND:<?php echo $colorf1bio;?>; margin-top:15px; width:200px;font-family:Times New Roman; height:60px;font-size:15px;">
	
	<h3> <?php echo $fname;?>- <?php echo $nnb;?></h3>
	
	</div>
	
	</div>
	
	
	
	
	
	</div>
	
	
	
	
	
	
	</div>	</div>	</div>
	</a>
	<?php
	}
	?>
	</table>
	</body>
</html>

