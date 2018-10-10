<?php

include 'dbcs.php';
$ms=$_GET['roll'];
page_protect();


 $notes=$_SESSION['user_name'];

$user_name=$notes;
if(@$_SESSION['userlevel']!=5){header("location: login.php?error=Unauthorized access");}




 $ip=@$_SERVER['REMOTE_ADDR'];
 
 ?><?php


$query="select * from users where full_name='$notes'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>
<?php  $ids=$row['fax'];

$levels=$row['user_level'];
?>
<?php } 
 $ip=@$_SERVER['REMOTE_ADDR'];
  $date=date("jmy");
    $time=date("H:i:s");
 $active="Active";
 
$qry = mysql_query("select  roll as total
from restriction where date='$date'  and pconcern='$notes'  and id='1'"); 
$row = mysql_fetch_assoc($qry); 
 $mxc11UI=$row['total'];
if(empty($mxc11UI)){

 $query1="insert into restriction set  
pconcern='$notes',date='$date',time='$time',status='$active',ipaddress='$ip',id='1'


";

mysql_query ($query1) or die ('could not updated:'.mysql_error());

 
 }
elseif($mxc11UI>'' &&  $mxc11UI=$ip){

 

}


$qry = mysql_query("select  ipaddress as total
from restriction where date='$date'  and pconcern='$notes'  and id='1'"); 
$row = mysql_fetch_assoc($qry); 
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
<link href="popups.css" rel="stylesheet" type="text/css" />
<style>
input,option {
  width: 375px;
  display: block;
  border: 1px solid #999;
  height: 25px;
  -webkit-box-shadow: 0px 0px 8px rgba(0, 0, 0, 0.3);
  -moz-box-shadow: 0px 0px 8px rgba(0, 0, 0, 0.3);
  box-shadow: 0px 0px 8px rgba(0, 0, 0, 0.3);
}
</style>
</head>
 
<body>
 
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

<div id="overlay-back"></div>
<div id="popup" >
<div style="float:left; width:650px;border-bottom:1px solid #000;margin-top:3px; height:40px;background:rgb(120,80,100);">

<div style="float:left; width:100px; height:80px;color:#fff;font-size:22px;"><div style="float:left;margin-top:5px;margin-left:5px;">&#9658;</div></div>
 <div style="float:left; width:500px;color:#1188aa; height:30px;font-size:28px;color:#fff;">Used Numbers Not Registered</div></div>

 
 
 
		
<form method="post" action="addempstsssis.php">
<div id="form" style="margin:auto;width: 600px; margin-top:45px;border:0px;color:#000;">
    <div class="w2ui-page page-0">
        <div style="width: 580px; float: left; margin-right: 0px;">
            <div style="padding: 3px; font-weight: bold; color: #777;"></div>
            <div class="w2ui-group" style="height: auto;">
                <div class="w2ui-field w2ui-span4">
                    <label>Full Name(s):</label>
                    <div>
                        <input name="first_name" type="text" maxlength="100" required="required" style="width: 100%" size="350px" style="padding:10px;">
                    </div>
                </div>
				
		
				
				
			
				
				
				
				
					 <div class="w2ui-field w2ui-span4">
                    <label>Field of Interest</label>
                    <div>
<select name="department"     style="background:#ccc;" class="required"   required="required"  id="select8"    style="padding:4px;"      >
<?php
$rs=mysql_query("Select * from matsub  order by  mgg",$link);
	  while($row=mysql_fetch_array($rs))
{
if($row[1]==$fees)
{
echo "<option value='$row[2]' selected>$row[2]</option>";
}
else
{
echo "<option value='$row[2]'>$row[2]</option>";
}
}
?></select>
                
                    </div>
                </div>
								
                <div class="w2ui-field w2ui-span4">
                    <label>Matricule</label>
                    <div>
                        <input name="mattt" type="text"  required="required" maxlength="100"
						value="">
                    </div>
                </div>
				
					
			
            
                  
                <div class="w2ui-field w2ui-span4">
                    <label>level   </label>
                    <div>
                        <input name="ass" type="hidden" value="<?php echo $ids;?>" maxlength="50" size="25"/>
                     <select name="levels"     style="background:#ccc;" class="required"   id="select8"  required="required"       style="padding:4px;"  >
<?php

$rs=mysql_query("Select * from levels   order by  roll ASC",$link);
	  while($row=mysql_fetch_array($rs))
{
if($row[1]==$fees)
{
echo "<option value='$row[1]' selected>$row[1]</option>";
}
else
{
echo "<option value='$row[1]'>$row[1]</option>";
}
}
?></select>
                     </div>
                </div>
                
				
				
				
				
				
                  
                <div class="w2ui-field w2ui-span4">
                    <label>Repeater   </label>
                    <div>
                     <select name="repeter"     style="background:#ccc;" class="required"   id="select8"         style="padding:4px;"  >
<?php

$rs=mysql_query("Select * from repeter   order by  cost ASC",$link);
	  while($row=mysql_fetch_array($rs))
{
if($row[1]==$fees)
{
echo "<option value='$row[2]' selected>$row[1]</option>";
}
else
{
echo "<option value='$row[2]'>$row[1]</option>";
}
}
?></select>
                     </div>
                </div>
                
				
				
				
			  </div>
                
        <div style="clear: both; padding-top: 15px;">
           
                </div>
           </div>
    
    <div class="w2ui-buttons">
        <button class="w2ui-btn" name="save" style="padding:10px 45px">Save</button>
    </div>
</div>    </div>













	<a href="bustme.php">	
<div style="float:left; width:350px;height:30px; ">	
<div style="float:left; width:10px; height:30px; background:#989898;">	
							
				
				
	
</div>	
<div style="float:left; width:150px; height:30px; background:#FFBB40;">	

<div style="float:left;text-align:left; margin-left:10px; font-size:16px; width:150px; height:20px;margin-top:5px;">
							
<- Back 				
	</div>
</div>
</div>	

</a>					
    </div>

</form>
 
 
 
 

</div>
</body>
</html>