<html>
<head>

  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
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
	url: "searchstwwssasy.php",
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
* {
  box-sizing: border-box;
}

.search {
  background-image: url('/css/searchicon.png');
  background-position: 10px 12px;
  background-repeat: no-repeat;
  width: 100%;
  font-size: 16px;
  padding: 12px 20px 12px 40px;
  border: 1px solid #ddd;
  margin-bottom: 12px;
}

#search {
  list-style-type: none;
  padding: 0;
  margin: 0;
}

#myUL li a {
  border: 1px solid #ddd;
  margin-top: -1px; /* Prevent double borders */
  background-color: #f6f6f6;
  padding: 12px;
  text-decoration: none;
  font-size: 18px;
  color: black;
  display: block
}

#myUL li a:hover:not(.header) {
  background-color: #eee;
}
</style>
</head>
<body>  
<?php
include 'dbcs.php';
?>
							

			
<?php
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

?>	
					
					
					
					
				
        <div class="table-responsive">

                
      
			  
<input type="text" class="search"   name="search"id="searchid" value='' placeholder="Search for student " style='float:left;'/>

	
<div class="content">

<div id="result">


<div>
<div>

                
              <table id="mytable" class="table table-bordred table-striped">
 <thead class="active">
<th>Student Name(s)</th>
<th>Matricule</th>
<th>Transaction Date</th>
<th>Amount Paid</th>
<th>Action</th>
     </thead>
    <tbody>
<?php
 $query="select CAST(name as text) as name,CAST(fname as text) as fname,

CAST(date as text) as date,CAST(db1 as text) as db1,CAST(folk as text) as folk
,CAST(db1 as text) as db1

 from [cg2015].[dbo].[balancesheet] where [ids]='$statusfbio' ";
$result=mssql_query($query);
		 while ($row = mssql_fetch_array($result)) {
?><tr>
<td><?php echo $name=$row['name'];?></td>
<td><?php echo $fname=$row['fname'];?></td>
<td><?php echo $date=$row['date'];?></td>
<td><?php  $folk=$row['folk'];
echo number_format($folk);

?></td>
 <td><a 
style='text-decoration:none;'  onclick="window.open('receiptsss.php?mats=<?php echo $fname;?>&date=<?php echo $date;?>&folk=<?php echo $folk;?>&name=<?php echo $name;?>&db1=<?php echo $row["db1"];?>&dept=<?php echo $department;?>', '_blank', 'location=yes,height=570,width=520,scrollbars=yes,status=yes');">
<p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" >Print</button></a></p></td>
 
</tr>

		 <?php } ?>



</form>
			  
</table>

            
       
 
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