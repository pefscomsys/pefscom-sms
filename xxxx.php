<?php include 'dbcs.php';?><html>
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
	url: "searchstwws.php",
	data: dataString,
	cache: false,
	success: function(html)
	{
	$("#result").html(html).show();
	}
	});
}return false;    
});

jQuery("#result").live("click",function(e){ 
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

#myInput {
  background-image: url('/css/searchicon.png');
  background-position: 10px 12px;
  background-repeat: no-repeat;
  width: 100%;
  font-size: 16px;
  padding: 12px 20px 12px 40px;
  border: 1px solid #ddd;
  margin-bottom: 12px;
}

#myUL {
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


<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names.." title="Type in a name">

<ul id="myUL"> <?php
	 $query="select CAST(fname as text) as fname,CAST(departmet as text) as department,CAST(matricule as text) as matricule,CAST(levels as text) as levels,CAST(db1 as nvarchar(400)) as db1 from [cg2015].[dbo].[courses] 
	 order by db1 DESC
	  ";
$result=mssql_query($query);
		 while ($row = mssql_fetch_array($result)) {
?>
  <li><a href="#"><?php echo $dd=$row["fname"];?> ( <?php echo $ko=$row["department"];?>  )-   <?php echo $ko=$row["matricule"];?> -<?php echo $ko=$row["db1"];?><?php echo $ko=$row["levels"];?>              </a></li>
		 <?php } ?>
</ul>

<script>
function myFunction() {
    var input, filter, ul, li, a, i;
    input = document.getElementById("myInput");
    filter = input.value.toUpperCase();
    ul = document.getElementById("myUL");
    li = ul.getElementsByTagName("li");
    for (i = 0; i < li.length; i++) {
        a = li[i].getElementsByTagName("a")[0];
        if (a.innerHTML.toUpperCase().indexOf(filter) > -1) {
            li[i].style.display = "";
        } else {
            li[i].style.display = "none";

        }
    }
}
</script>

</body>
</html>
