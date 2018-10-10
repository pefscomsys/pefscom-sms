<?php

include 'dbcs.php';
page_protect();


$notes=$_SESSION['user_name'];

$user_name=$notes;




 ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="hidden/html; charset=utf-8" />
<title>SCHOOL MANAGEMENT SYSTEM</title>
<style>
 .RolloverMenu { width:250px; font-size:11pt; font-weight:bold; color:#000000; background:rgb(180,235,230);}
   .RolloverMenu ul{ list-style-type:none; margin:0; padding:0;}
   .RolloverMenu li{  margin:2px; hidden-align:center; }
  .RolloverMenu a{ display:block; margin:0; padding:4px; border:1pt solid black; hidden-decoration:none;}
  .RolloverMenu a:hover{ background:#ffcc00}
  .RolloverMenu a:link, .RolloverMenu a:active, .RolloverMenu a:visited{ color:#000000;}
   
#headers {
		
                float:left;
		padding:0px 0;
		width:100%; border-bottom: 20px solid #660000; color: #CCC;
		z-index:9999px;
		background:#000;
		margin-top:-10px;
	}
table{font-family:Verdana, Geneva, sans-serif;
}
tr,td{border:1px ;}
.hiddenfield {
	font-size: 11px;
	color: #333333;
	background: #F7F7F7;
	border: 1px solid #CCCCCC;
	padding-left: 1px;
}a {
	color: #2D3954;
	font-size: 11px;
	hidden-decoration:none;
}
a:visited {
	color:red;
}
a:active {
	color:blue;
}
a:link{hidden-decoration:none;}
a:hover {
	color: #99CC00;
}


body{
		background:#fff;}
#container{float:left;
margin-left:9px;

width:900px; height:auto;
background:#fff;
border-radius: 8px 8px 8px 8px;

-o-border-radius: 8px 8px 8px 8px;

-moz-border-radius: 8px 8px 8px 8px;

-khtml-border-radius: 8px 8px 8px 8px;

}.header{
margin:auto;

width:900px;
height:150px;
	
	
	}
.x{float:left;
width:900px;
height:150px;
	
	
	}
	
#cout{ margin:auto; width:900px;
}
#containers{float:left;
margin-top:10px;
box-shadow:1px 1px 1px   #fff;
width:920px; height:auto;
background-color:#660000; !important;-moz-linear-gradient(top, #E3E3E3 0%, #EDEDED 100%) );}

</style>
</head>

<body>

<div style="width:550px; float:left; height:7000px; margin-top:-60px;   border-LEFT: 2px solid #f4f4f4;">






<?php
$roll=$_GET["roll"];



echo $ids=$_GET["id"];
  $term=$_GET["term"];
?><?php

$query="select * from courses where roll='$roll'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>
<?php $ls=$row['levels'];


?><?php } ?>	<?php	
		 $myhuuu=$ids; 
if(empty($myhuuu)){
 $myhuuu='';}
 
elseif($myhuuu>='15' && $myhuuu<='15' 
&& $ls>='200' && $ls<='200'){
$tmms="report1st99s21hs.php";


}elseif($myhuuu>='17' && $myhuuu<='17' 
&& $ls>='100' && $ls<='100'){
$tmms="report1st99s21whus.php";


}elseif($myhuuu>='15' && $myhuuu<='15' 
&& $ls>='100' && $ls<='100'){
$tmms="report1st99s21hs.php";


}elseif($myhuuu>='16' && $myhuuu<='16' 
&& $ls>='200' && $ls<='200'){
$tmms="report1st99s21s.php";

}elseif($myhuuu>='17' && $myhuuu<='17' 
&& $ls>='200' && $ls<='200'){
$tmms="report1st99s21whus.php";

}












elseif($myhuuu>='15' && $myhuuu<='15' 
&& $ls>='300' && $ls<='300'){
$tmms="report1st99s21h.php";


}elseif($myhuuu>='16' && $myhuuu<='16' 
&& $ls>='300' && $ls<='300'){
$tmms="report1st99s21s.php";

}elseif($myhuuu>='17' && $myhuuu<='17' 
&& $ls>='300' && $ls<='300'){
$tmms="report1st99s21whus.php";

}
elseif($myhuuu>='15' && $myhuuu<='15' 
&& $ls>='400' && $ls<='400'){
$tmms="report1st99s21hys.php";


}elseif($myhuuu>='16' && $myhuuu<='16' 
&& $ls>='400' && $ls<='400'){
$tmms="report1st99s21s.php";

}elseif($myhuuu>='17' && $myhuuu<='17' 
&& $ls>='400' && $ls<='400'){
$tmms="report1st99s21whus.php";

}




?>
<br>
<br>
<br>
<br>
<br>
<?php 
 echo  $statusf="<meta http-equiv='refresh' content='0; url=$tmms?roll=$roll&&id=$ids&term=$term'>";?>
</body>
</html>
