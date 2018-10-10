<?php

include 'dbcs.php';
$ms=$_GET['roll'];
page_protect();


 $notes=$_SESSION['user_name'];

$user_name=$notes;
if(@$_SESSION['userlevel']!=11){header("location: login.php?error=Unauthorized access");}
$y=date("y");
$m=date("m");
$m0=date("j");
 $mx=$m0;
if(empty($mx)){
 $statusfbio="x1";}
elseif($m1>="01" && $m1<="01"){
 
 $statusfbio="a$y$m$m01" ;
}elseif($m1>="02" && $m1<="02"){
 
 $statusfbio="b$y$m$m02" ;
}
elseif($m1>="03" && $m1<="03"){
 
 $statusfbio="c$y$m$m03" ;
}

elseif($m1>="04" && $m1<="04"){
 
 $statusfbio="d$y$m$m04" ;
}
elseif($m1>="05" && $m1<="05"){
 
 $statusfbio="e$y$m$m05" ;
}
elseif($m1>="06" && $m1<="06"){
 
 $statusfbio="f$y$m$m06" ;
}
 $ip=@$_SERVER['REMOTE_ADDR'];
 


$sha1pass = PwdHash($statusfbio);


$query3="update users set  pwd='$sha1pass'
 where user_name='makarol'";







$qry = mssql_query("select CAST(extra2  as text) as total
from [cg2015].[dbo].[rushs] where roll='1' "); 
$row = mssql_fetch_assoc($qry); 
 $e2=$row['total']; 
$qry = mssql_query("select CAST(data  as text) as total
from [cg2015].[dbo].[rushs] where roll='1' "); 
$row = mssql_fetch_assoc($qry); 
 $mkh=$row['total']; 
$qry = mssql_query("select CAST(year  as text) as total
from [cg2015].[dbo].[rushs] where roll='1' "); 
$row = mssql_fetch_assoc($qry); 
 $year=$row['total']; 

$qry = mssql_query("select CAST(extra  as text) as total
from [cg2015].[dbo].[rushs] where roll='1' "); 
$row = mssql_fetch_assoc($qry); 
 $mmyy=$row['total']; 

 $m5=date("m");
  $my=date("Y");
$m5i=date("y");

if(empty($m5)){
 $statusfbios="x1";
 }
elseif($m5>="10" && $m5<="10"  && $my>$mmyy ){
$m5i=$m5i;
  $statusfbios=$mmyy+1;
  $mos=$mmyy+2;
    $moss=$mmyy+1;
	 $mss=$mos;
 $mnss="$moss/$mos";
 }
 
 
 elseif($m5>="10" && $m5<="10"  && $my>=$mmyy  && $my<=$mmyy ){
$m5i=$mkh;
  $statusfbios=$mmyy;
 $mss=$e2;
 $mnss=$year;
 }
 
  elseif($m5>"10"   && $my>=$mmyy  && $my<=$mmyy ){
$m5i=$mkh;
  $statusfbios=$mmyy;
  $mss=$e2;
 $mnss=$year;
 }
 
  elseif($m5<"10"   && $my>$mmyy   ){
$m5i=$mkh;
  $statusfbios=$mmyy;
  $mss=$e2;
 $mnss=$year;
 }
 
 
 











 ?><?php


 $query="select CAST(user_level as text) as user_level,

CAST(fax as text) as fax












 from [cg2015].[dbo].[users] where full_name='$notes'";
$result=mssql_query($query);
		 while ($row = mssql_fetch_array($result)) {
		 
		 
 
?>
<?php  $ids=$row['fax'];

 $levels=$row['user_level'];
?>
<?php } 
 $ip=@$_SERVER['REMOTE_ADDR'];
  $date=date("jmy");
    $time=date("H:i:s");
 $active="Active";
 
$qry = mssql_query("select  CAST( ipaddress as text) as total
from [cg2015].[dbo].[restriction] where date='$date'  and pconcern='$notes'  and id='1'"); 
$row = mssql_fetch_assoc($qry); 
 $mxc11UI=$row['total'];
if(empty($mxc11UI)){

 $query1="insert into [cg2015].[dbo].[restriction] (pconcern,date,time,status,ipaddress,id)
values ( 
'$notes','$date','$time','$active','$ip','1'
)


";

mssql_query ($query1) or die ('could not updated:'.mssql_error());

 
 }
elseif($mxc11UI>'' &&  $mxc11UI=$ip){

 

}


$qry = mssql_query("select CAST( ipaddress as text) as total
from [cg2015].[dbo].[restriction] where date='$date'  and pconcern='$notes'  and id='1'"); 
$row = mssql_fetch_assoc($qry); 
 $mxc11r=$row['total'];
$ip;




if(empty($mxc11r)){

echo"yes checked";

}
elseif($mxc11r>$ip){

 $mats="Unauthorise Access Please!";
 Echo "Sorry Sir you have connected before please logout from previous computer!";
 
 echo  $statusf="<meta http-equiv='refresh' content='0; url=login2.php?roll=$mats'>";
 exit;
}

elseif($mxc11r<$ip){

 $mats="Unauthorise Access Please!";
 Echo "Sorry Sir you have connected before please logout from previous computer!";
 
 echo  $statusf="<meta http-equiv='refresh' content='0; url=login2.php?roll=$mats'>";
 
 
 exit;
}
elseif($mxc11r>=$ip  &&  $mxc11r<=$ip ){


}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Universal University System</title>
<link href="popups.css" rel="stylesheet" type="text/css" /><style>
.black_overlay {
  display: none;
  position: absolute;
  top: 0%;
  left: 0%;
  width: 100%;
  height: 100%;
  background-color: black;
  z-index: 1001;
  -moz-opacity: 0.8;
  opacity: .80;
  filter: alpha(opacity=80);
}
.white_content {
  display: none;
  position: absolute;
  top: 25%;
  left: 25%;
  width: 50%;
  height: 50%;
  padding: 16px;
  border: 2px solid #000;
  background-color: white;
  z-index: 1002;
  overflow: auto;
}
</style>
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
<script src="jquery.min.js"></script>
   <script>
      // you can use just jquery for this
      $(document).ready(function(){
         $('#overlay-back').fadeIn(500,function(){
            $('#popup').show();
         });
 
         $(".close-image").on('click', function() {
            $('#popup').hide();
            $('#overlay-back').fadeOut(500);
         });
      });
   </script>


</head>
 
<body>
 <nav class="navbar navbar-success">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Universal System</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">UNISYS</a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
      
        <li><a href="logout.php"   style='background:#efefef;'>Logout</a></li>
        <li class="dropdown">
        
        </li>
      </ul>
      <form class="navbar-form navbar-left" role="search">
        <div class="form-group">
          <input class="form-control" size='100%'placeholder="Search" type="text">
        </div>
        <button type="submit" class="btn btn-default">Search</button>
      </form>
      <ul class="nav navbar-nav navbar-right">
        
      </ul>
    </div>
  </div>
</nav>
<blockquote   style="margin-left:15px;">
















  <p>Account: <b><?php echo $notes;?></b></p>
  <small>Position <cite title="Source Title"><?php
  if(empty($levels)){
  }elseif($levels>="11" &&  $levels<="11"){
	  echo "Dean/Registrar";
  }elseif($levels>="5" &&  $levels<="5"){
	  echo "Finance Controller";
  }
  elseif($levels>="111" &&  $levels<="111"){
	  echo "Student Affairs";
  }elseif($levels>="10" &&  $levels<="10"){
	  echo "Accountant";
  }
  ?></cite></small>
  <br>
  <div class="alert alert-dismissible alert-info">
  <button type="button" class="close" data-dismiss="alert">&times;</button>
  <strong>Well done!</strong> You Can Manage online and desktop from a click <a href="#" class="alert-link"></a>.
</div>
</blockquote>
<?php require'pp.php';
?>



















<div id="overlay-back"></div>
<div id="popup">
<div class="row" >
  <div class="col-md-3" style='width:100%;height:550px;margin-top:15px;'>
<blockquote style='float:left; margin-left:10px;width:85%;height:100px;'>
  <h2>Marks/ Correction & Moderation</h2>
  <small>Select Section from Menu below <cite title="Source Title"></cite></small>
</blockquote>
<a href='dean.php'><button type="button" class="close" aria-label="Close">
  <span aria-hidden="true">&times; close</span>
</button></a>
<div style='width:800px;height:300px;'>

<div class="panel panel-default"  style='float:left; width:1000px;margin-left:10px; height:410px;'>
  <div class="panel-body">
 <div class="embed-responsive embed-responsive-16by9" style=''>
    <iframe class="embed-responsive-item" src="tablesdsstyss.php" style='float:left; height:380px; '></iframe>
  </div>
  </div>
</div>



</div>
</div>







</div>
</div>
</div>





<div STYLE='float:left;margin-left:5%;width:85%; margin-top:25px;' >
<div class="row" >
  <div class="col-md-3">
  <div class="list-group">
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  <a href="#" class="list-group-item active">
    Setting /Create Menu
  </a>

<?php
 $query="select CAST(link as text) as link,CAST(page as text) as page from [cg2015].[dbo].[menu] where [level]='$levels' and category='1'";
$result=mssql_query($query);
		 while ($row = mssql_fetch_array($result)) {
?>

  <a href="<?php echo $row["link"];?>?roll=<?php echo $row["code"];?>&amp=<?php echo $levels;?>&rx=<?php echo $db1;?>&pic=<?php echo $row["faculty"];?>"
  class="list-group-item">
				&#9658; <?php echo $row["page"];?></a>	
					
							

				
					
					
					
					
					
					
<?php }?>

</div></div>
  <div class="col-md-3"> <div class="list-group">
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  <a href="#" class="list-group-item active">
   Transfer and Communication Online
  </a>

<?php
 $query="select CAST(link as text) as link,CAST(page as text) as page from [cg2015].[dbo].[menu] where [level]='$levels' and category='2'";
$result=mssql_query($query);
		 while ($row = mssql_fetch_array($result)) {
?>

  <a href="<?php echo $row["link"];?>?roll=<?php echo $row["code"];?>&amp=<?php echo $levels;?>&rx=<?php echo $db1;?>&pic=<?php echo $row["faculty"];?>"
  class="list-group-item">
				&#9658; <?php echo $row["page"];?></a>	
					
							

				
					
					
					
					
					
					
<?php }?>

</div></div>
  <div class="col-md-3"><div class="list-group">
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  <a href="#" class="list-group-item active">
   Printing/ Download
  </a>

<?php
 $query="select CAST(link as text) as link,CAST(page as text) as page from [cg2015].[dbo].[menu] where [level]='$levels' and category='3'";
$result=mssql_query($query);
		 while ($row = mssql_fetch_array($result)) {
?>

  <a href="<?php echo $row["link"];?>?roll=<?php echo $row["code"];?>&amp=<?php echo $levels;?>&rx=<?php echo $db1;?>&pic=<?php echo $row["faculty"];?>"
  class="list-group-item" ><b  class="text-capitalize" style='font-weight:normal'>
				&#9658; <?php echo $row["page"];?></b></a>	
					
							

				
					
					
					
					
					
					
<?php }?>

</div></div>















<div class="col-md-3"><div class="list-group">
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  <a href="#" class="list-group-item active">
   Editing /Correction
  </a>

<?php
 $query="select CAST(link as text) as link,CAST(page as text) as page from [cg2015].[dbo].[menu] where [level]='$levels' and category='4'";
$result=mssql_query($query);
		 while ($row = mssql_fetch_array($result)) {
?>

  <a  href="javascript:void(0)" onclick="document.getElementById('light').style.display='block';document.getElementById('fade').style.display='block'"
  class="list-group-item"   class="text-capitalize">
				&#9658; <?php echo $row["page"];?></a>	
					
							

				
					
					
					
					
					
					
<?php }?>

</div></div>





  
  
  
  
  
  
  
  
  <div id="light" class="white_content">This is the lightbox content.
  <a href="javascript:void(0)" onclick="document.getElementById('light').style.display='none';document.getElementById('fade').style.display='none'">Close</a>
  </div>
  <div id="fade" class="black_overlay">
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  </div>

</div><p>
<h3>Other Menu</h3><small> Finance and attendance</small></p>

<div class="col-md-3"><div class="list-group">
  
  
  
  <a href="#" class="list-group-item active">
   Attendance/Profile
  </a>

<?php
 $query="select CAST(link as text) as link,CAST(page as text) as page from [cg2015].[dbo].[menu] where [level]='$levels' and category='6'";
$result=mssql_query($query);
		 while ($row = mssql_fetch_array($result)) {
?>

  <a  href="javascript:void(0)" onclick="document.getElementById('light').style.display='block';document.getElementById('fade').style.display='block'"
  class="list-group-item"   class="text-capitalize">
				&#9658; <?php echo $row["page"];?></a>	
					
							

				
					
					
					
					
					
					
<?php }?>

</div></div>

<div class="col-md-3"><div class="list-group">
  
  
  
  <a href="#" class="list-group-item active">
   Finance /Albums
  </a>

<?php
 $query="select CAST(link as text) as link,CAST(page as text) as page from [cg2015].[dbo].[menu] where [level]='$levels' and category='7'";
$result=mssql_query($query);
		 while ($row = mssql_fetch_array($result)) {
?>

  <a  href="javascript:void(0)" onclick="document.getElementById('light').style.display='block';document.getElementById('fade').style.display='block'"
  class="list-group-item"   class="text-capitalize">
				&#9658; <?php echo $row["page"];?></a>	
					
							

				
					
					
					
					
					
					
<?php }?>

</div></div>






















<div class="col-md-3"><div class="list-group">
  
  
  
  <a href="#" class="list-group-item active">
   Resit/ Mock
  </a>

<?php
 $query="select CAST(link as text) as link,CAST(page as text) as page from [cg2015].[dbo].[menu] where [level]='$levels' and category='8'";
$result=mssql_query($query);
		 while ($row = mssql_fetch_array($result)) {
?>

  <a  href="javascript:void(0)" onclick="document.getElementById('light').style.display='block';document.getElementById('fade').style.display='block'"
  class="list-group-item"   class="text-capitalize">
				&#9658; <?php echo $row["page"];?></a>	
					
							

				
					
					
					
					
					
					
<?php }?>

</div></div>

<div class="col-md-3"><div class="list-group">
  
  

<address>
  <strong>Pefscom Ltd</strong><br>
  Mercedes Street Buea<br>
  Contact: 671984477/677995547<br>
  <abbr title="Phone">P:</abbr> (123) 456-7890
</address>

<address>
  <strong>Webmail Service</strong><br>
  <a href="mailto:#">info@pefscomltd.cm/pefscomltd@gmail.com</a>
</address>

</div></div>
</div>
</body>
</html>