<?php

include 'dbcs.php';
page_protect();


 $notes=$_SESSION['user_name'];
 $levels=$_SESSION['user_level'];
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


  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">

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
  }elseif($levels>="19" &&  $levels<="19"){
	  echo "System Administrator";
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
  <div class="col-md-3" style='width:100%;height:450px;margin-top:15px;'>
<blockquote style='float:left; margin-left:10px;width:65%;height:100px;'>
  <h2><?php
  $levels=$_GET['level'];
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
  }elseif($levels>="19" &&  $levels<="19"){
	  echo "System Administrator";
  }
  ?> Menu</h2>
  <small>View this Category/Edit to remove <cite title="Source Title"></cite></small>
</blockquote>

<div style='width:100%;height:300px;'>

<div class="panel panel-default"  style='float:left; width:60%;margin-left:10px; height:300px;'>
  <div class="panel-body">
 <div class="embed-responsive embed-responsive-16by9">
    <iframe class="embed-responsive-item" src="tablesdu.php?levels=<?php echo $levels;?>"  style='height:280px;'></iframe>
  </div>
  </div>
</div>



<div   style='float:left; width:400px;margin-left:10px; margin-top:-80px;height:300px;'>


<ul class="nav nav-pills" style='margin-top:-25px;margin-left:25px;'><a href='omegahome.php'><button type="button" class="close" aria-label="Close">
  <span aria-hidden="true">&times; close</span>
</button></a>
  <li class="active"><a href="#" style='color:#fff;'><span class="badge">Add</span></a></li>
  <li><a href="#">Add a Button/Page<span class="badge"></span></a></li>
  
</ul>

  <div class="panel-body">
     <?php
  $page=$_POST["page"];
  $code=$_POST["code"]; $level=$_POST["level"];$link=$_POST["link"];
   $fees=$_POST["fees"];
     $secs=$_POST["secs"];
    
  if(empty($page)){
	  
	  
	  
  }elseif($page>''){
	  
$qry = mssql_query("select CAST(page as text) as total
from [cg2015].[dbo].[menu] where page='$page'  "); 
$row = mssql_fetch_assoc($qry); 
 $ssid=$row['total'];
 
 
 
$qryc = "select count(*) as total
from [cg2015].[dbo].[menu] where [level]='$level'  and category='$secs' ";$qry= mssql_query($qryc);
$row = mssql_fetch_assoc($qry); 
  $x=$row['total'];
 $xs=$x+1;

  if(empty($ssid)){
	  
	  
 $query="insert into [cg2015].[dbo].[menu] 
(page,code,link,[level],category)
values
('$page','$code','$link','$level','$xs')

";





mssql_query($query);





echo "<script>alert('New Menu Added!'); </script>";

 echo "<meta http-equiv='refresh' content='0; url=registrar.php?level=$fees'>";
	  
	  
  }elseif($ssid>''){
	  
	  
  }
	  
	  
	  
  }
  
  ?>
    <form  method="POST" action="">
  <div class="form-group">
    <label for="exampleInputEmail1">Page Title</label>
    <input type="text" class="form-control" name='page' id="exampleInputEmail1" placeholder="tile of the Page" required='required'>
    <label for="exampleInputEmail1">Link</label>
    <input type="text" class="form-control" name='link' id="exampleInputEmail1" placeholder="link when click" required='required'>
    <label for="exampleInputEmail1">Spec Code</label>
    <input type="text" class="form-control" name='code' id="exampleInputEmail1" placeholder="Any Unic Code" required='required'>
	 <input type="hidden" class="form-control" name='fees' value="<?php echo $levels;?>">
    
  <div class="form-group">
    <label for="exampleInputPassword1">Section</label>
      <div >
        <select class="form-control"name='secs' id="select">
         <?php
 $query="select category as school from [cg2015].[dbo].[menu] where level='$levels' group by category";
$result=mssql_query($query);
		 while ($row = mssql_fetch_array($result)) {
?> <option value='<?php echo $row["school"];?>'><?php echo $row["school"];?></option>

		 <?php } ?>
        </select>
        </select>
       
      </div>
      </div>
    </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Level</label>
      <div >
        <select class="form-control"name='level' id="select">
         <?php
 $query="select CAST(total as text) as ids,CAST(description as text) as school from [cg2015].[dbo].[menut]where total='$levels'";
$result=mssql_query($query);
		 while ($row = mssql_fetch_array($result)) {
?> <option value='<?php echo $row["ids"];?>'><?php echo $row["school"];?></option>

		 <?php } ?>
        </select>
        </select>
       
      </div>
      </div>
    </div>


  <button type="submit" class="btn btn-default">Save</button>
</form>
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
 Previledges and Level
  </a>

<?php
 $query="select CAST(link as text) as link,CAST(description as text) as page from [cg2015].[dbo].[menut] where level='1'";
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
  Create Access / Off & Online
  </a>

<?php
 $query="select CAST(nimbot as text) as link,CAST(description as text) as page from [cg2015].[dbo].[bb] ";
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
  Online Addmission/Payment
  </a>

<?php
 $query="select CAST(link as text) as link,CAST(description as text) as page from [cg2015].[dbo].[online] ";
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
   Marks Online /Correction
  </a>

<?php
 $query="select CAST(link as text) as link,CAST(description as text) as page from [cg2015].[dbo].[menut] where level='2'";
$result=mssql_query($query);
		 while ($row = mssql_fetch_array($result)) {
?>

  <a href="<?php echo $row["link"];?>?roll=<?php echo $row["code"];?>&amp=<?php echo $levels;?>&rx=<?php echo $db1;?>&pic=<?php echo $row["faculty"];?>"
  class="list-group-item">
				&#9658; <?php echo $row["page"];?></a>	
					
							

				
					
					
					
					
					
					
<?php }?>

</div></div>





  
  
  
  
  
  
  
  
  <div id="light" class="white_content">This is the lightbox content.
  <a href="javascript:void(0)" onclick="document.getElementById('light').style.display='none';document.getElementById('fade').style.display='none'">Close</a>
  </div>
  <div id="fade" class="black_overlay">
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  </div>

</div>

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