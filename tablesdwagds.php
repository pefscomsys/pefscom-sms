<html>
<head>

  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="font-awesome/css/font-awesome.css" type="text/css" media="screen">
    
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script type="text/javascript" src="jquery-1.8.0.min.js"></script>
<script type="text/javascript">
$(function(){
$(".search").keyup(function() 
{ 
var myInput = $(this).val();
var dataString = 'search='+ myInput;
if(myInput!='')
{
	$.ajax({
	type: "POST",
	url: "searchstwwsss.php",
	data: dataString,
	cache: true,
	success: function(html)
	{
	$("#result").html(html).show();
	}
	});
}return true;    
});

jQuery("#result").live("",function(e){ 
	var $clicked = $(e.target);
	var $name = $clicked.find('.name').html();
	var decoded = $("<div/>").html($name).text();
	$('#myInput').val(decoded);
});
jQuery(document).live("click", function(e) { 
	var $clicked = $(e.target);
	if (! $clicked.hasClass("search")){
	jQuery("#result").fadeOut(); 
	}
});
$('#myInput').click(function(){
	jQuery("#result").fadeIn();
});
});
</script>
<style>
.inputsl{
	padding:9px;
	border:solid 1px #173955;
	outline:0;
	background:-webkit-gradient(linear,left top,left 25,from(#ffffff),color-stop(4%,#AAcce8),to(#ffffff));
	background:-mox-liner-gradient(top,#ffffff,#AACCE8 1px,#ffffff 25px);
	box-shadow:rgba(0,0,0,0.1) 0px 0px 8px;	
		-moz-box-shadow:rgba(0,0,0,0.1) 0px 0px 8px;	
		-webkit-box-shadow:rgba(0,0,0,0.1) 0px 0px 8px;	
	
	
}

label.btn span {
  font-size: 1.5em ;
}

label input[type="radio"] ~ i.fa.fa-circle-o{
    color: #c8c8c8;    display: inline;
}
label input[type="radio"] ~ i.fa.fa-dot-circle-o{
    display: none;
}
label input[type="radio"]:checked ~ i.fa.fa-circle-o{
    display: none;
}
label input[type="radio"]:checked ~ i.fa.fa-dot-circle-o{
    color: #7AA3CC;    display: inline;
}
label:hover input[type="radio"] ~ i.fa {
color: #7AA3CC;
}

label input[type="checkbox"] ~ i.fa.fa-square-o{
    color: #c8c8c8;    display: inline;
}
label input[type="checkbox"] ~ i.fa.fa-check-square-o{
    display: none;
}
label input[type="checkbox"]:checked ~ i.fa.fa-square-o{
    display: none;
}
label input[type="checkbox"]:checked ~ i.fa.fa-check-square-o{
    color: #7AA3CC;    display: inline;
}
label:hover input[type="checkbox"] ~ i.fa {
color: #7AA3CC;
}

div[data-toggle="buttons"] label.active{
    color: #7AA3CC;
}

div[data-toggle="buttons"] label {
display: inline-block;
padding: 6px 12px;
margin-bottom: 0;
font-size: 14px;
font-weight: normal;
line-height: 2em;
text-align: left;
white-space: nowrap;
vertical-align: top;
cursor: pointer;
background-color: none;
border: 0px solid 
#c8c8c8;
border-radius: 3px;
color: #c8c8c8;
-webkit-user-select: none;
-moz-user-select: none;
-ms-user-select: none;
-o-user-select: none;
user-select: none;
}

div[data-toggle="buttons"] label:hover {
color: #7AA3CC;
}

div[data-toggle="buttons"] label:active, div[data-toggle="buttons"] label.active {
-webkit-box-shadow: none;
box-shadow: none;
}



</style>
</head>
<body>  
<?php
include 'dbcs.php';
$y=date("y");
$m=date("m");
 $m0=date("j");
 $m1=$m0;
if(empty($m1)){
 $statusfbio="x1";}
elseif($m1>="01" && $m1<="01"){
 
 $statusfbio="a$y$m1" ;
}elseif($m1>="02" && $m1<="02"){
 
 $statusfbio="b$y$m1" ;
}
elseif($m1>="03" && $m1<="03"){
 
 $statusfbio="c$y$m1" ;
}

elseif($m1>="04" && $m1<="04"){
 
 $statusfbio="d$y$m1" ;
}
elseif($m1>="05" && $m1<="05"){
 
 $statusfbio="e$y$m1" ;
}
elseif($m1>="06" && $m1<="06"){
 
 $statusfbio="f$y$m1" ;
}



elseif($m1>="07" && $m1<="07"){
 
 $statusfbio="g$y$m1" ;
}

elseif($m1>="08" && $m1<="08"){
 
 $statusfbio="h$y$m1" ;
}
elseif($m1>="09" && $m1<="09"){
 
 $statusfbio="i$y$m1" ;
}
elseif($m1>="10" && $m1<="10"){
 
 $statusfbio="10j$y$m1" ;
}
elseif($m1>="11" && $m1<="11"){
 
 $statusfbio="11k$y$m1" ;
}
elseif($m1>="12" && $m1<="12"){
 
 $statusfbio="12l$y$m1" ;
}
elseif($m1>="13" && $m1<="13"){
 
 $statusfbio="13m$y$m1" ;
}
elseif($m1>="14" && $m1<="14"){
 
 $statusfbio="14n$y$m1" ;
}
elseif($m1>="15" && $m1<="15"){
 
 $statusfbio="15o$y$m1" ;
}

















elseif($m1>="16" && $m1<="16"){
 
 $statusfbio="16p$y$m1" ;
}
elseif($m1>="17" && $m1<="17"){
 
 $statusfbio="17q$y$m1" ;
}
elseif($m1>="18" && $m1<="18"){
 
 $statusfbio="18r$y$m1" ;
}
elseif($m1>="19" && $m1<="19"){
 
 $statusfbio="19r$y$m1" ;
}
elseif($m1>="20" && $m1<="20"){
 
 $statusfbio="20s$y$m1" ;
}










elseif($m1>="21" && $m1<="21"){
 
 $statusfbio="t$y$m1" ;
}
elseif($m1>="22" && $m1<="22"){
 
 $statusfbio="u$y$m1" ;
}
elseif($m1>="23" && $m1<="23"){
 
 $statusfbio="v$y$m1" ;
}
elseif($m1>="24" && $m1<="24"){
 
 $statusfbio="w$y$m1" ;
}
elseif($m1>="25" && $m1<="25"){
 
 $statusfbio="x$y$m1" ;
}



elseif($m1>="26" && $m1<="26"){
 
 $statusfbio="z$y$m1" ;
}
elseif($m1>="27" && $m1<="27"){
 
 $statusfbio="a$y$m1" ;
}
elseif($m1>="28" && $m1<="28"){
 
 $statusfbio="b$y$m1" ;
}
elseif($m1>="29" && $m1<="29"){
 
 $statusfbio="c$y$m1" ;
}
elseif($m1>="30" && $m1<="30"){
 
 $statusfbio="c$y$m1" ;
}
elseif($m1>="31" && $m1<="31"){
 
 $statusfbio="d$y$m1" ;
}




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









?>
  <div class="col-md-3" style='width:100%;height:380px;margin-top:15px;'>	
			  
           
       

 <div class="panel panel-default"  style='float:left; width:1060px;margin-left:-10px; height:380px;'>
 
  <div class="panel-body">
 <div class="embed-responsive embed-responsive-16by9">
    <iframe class="embed-responsive-item" src="tsds.php?x=<?php echo $statusfbio;?>&db1=<?php echo $year;?>" style='float:left;width:100%; height:360px;'></iframe>
  </div>
  </div>
				  </div>
				 
 
 
</div>
 
 
 
 
 
 
					</div>
 
 
 
					</div>
					
<script>    
$(document).on("keyup",".search-table", function () {
                var value = $(this).val();
                $("table tr").each(function (index) {
                    $row = $(this);
                    $row.show();
                    if (index !== 0 && value) {
                        var found = false;
                        $row.find("td").each(function () {
                            var cell = $(this).text();
                            if (cell.indexOf(value.toLowerCase()) >= 0) {
                                found = true;
                                return;
                            } 
                        });
                        if (found === true) {
                            $row.show();
                        }
                        else {
                            $row.hide();
                        }
                    }
          });
   });
</script>
      <!-- /.modal-dialog --> 
   </div>