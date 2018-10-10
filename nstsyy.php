<?php

include 'dbcs.php';
$ms=$_GET['roll'];
page_protect();


 $notes=$_SESSION['user_name'];

$user_name=$notes;
if(@$_SESSION['userlevel']!=11){header("location: login.php?error=Unauthorized access");}

 $pic=$_GET["pic"];
$amp=$_GET["amp"];
$roll=$_GET["roll"];

 $ip=@$_SERVER['REMOTE_ADDR'];
 
 ?> 
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
<title>Universal University System</title>

</head>
 
<body>
 




<?php
if($_POST["do"]=="update")
{

$roll=$_POST["roll"];
$fname=$_POST["fname"];

$fname=$_POST["fname"];

$teacher=$_POST["teacher"];

$levels=$_POST["levels"];


$file = $_FILES ['file'];
$name1 = $file ['name'];
$type = $file ['type'];
$size = $file ['size'];
$tmppath = $file ['tmp_name']; 

if($name1!="")
{
if(move_uploaded_file ($tmppath, 'note/'.$name1))//image is a folder in which you will save image
{


    

$query1="update [cg2015].[dbo].[rresits]  set filename='$name1' where roll='4'";


mssql_query ($query1) or die ('could not updated:'.mssql_error());

 echo  $statusf="<meta http-equiv='refresh' content='0; url=excell/indexs4.php?name=$name1'>";
}
}
}

	
  
	
?>

<h2> Excell file with student Record</h2>
<small> </small>

<form name="form" action="#" method="POST" enctype="multipart/form-data">
 
<DIV style="float:left;WIDTH:550PX; height:60px; background:#ffffcc; border:1px solid #000;margin-top:50px;margin-left:50px;">

	<DIV style="float:left;WIDTH:150PX; height:50px;text-align:center;">File-import Exam - Marks </div>   
	<DIV style="float:left;WIDTH:250PX; height:50px;margin-top:10px;">
	
	<input class="filestyle" id="file1" name="file" type='file' multiple title="test #1" style="background:#ccc;"/>  </div>  
    <DIV style="float:left;WIDTH:150PX; height:50px;">  </div>
	<DIV style="float:left;WIDTH:150PX; height:50px;text-align:center;"><input type="hidden" name="do" value="update"></div>   
	<DIV style="float:left;WIDTH:250PX; height:50px;"><input type="submit" value="UPLOAD EXCELL FILE">  </div>  
    <DIV style="float:left;WIDTH:150PX; height:50px;">  </div>
	
	</div>
	
	










</div>

</DIV>
  
		
</div>
				
				
				
	
</div>


</div>
</body>
</html>