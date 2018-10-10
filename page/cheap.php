<?php 
include 'dbc.php';
page_protect();


 $notes=$_SESSION['user_name'];

$user_name=$notes;




?>
  
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<html lang="en">
<head>
<title><?php echo $school;?></title>

<script src="jquery-latest.js"></script>	
<script type="text/javascript" src="jquery-1.11.3-jquery.min.js"></script>
        <link rel="shortcut icon" href="pef.png"> 
			
<Script>

var seconds = 1;

function secondPassed() {

	var minutes = Math.round((seconds - 30)/60);

	var remainingSeconds = seconds % 60;

	if (remainingSeconds < 10) {

		remainingSeconds = '0' + remainingSeconds;	

	}

	document.getElementById('countdown').innerHTML = minutes + ':' + remainingSeconds;

	if (seconds == 0) {

		clearInterval(countdownTimer);

		document.getElementById('countdown').innerHTML; window.location.href='students.php';

	} else {

		seconds--;

	}

}



var countdownTimer = setInterval('secondPassed()', 500);

</script>
<script type="text/javascript">
$(document).ready(function()
{	
	/*
	
	using $.post() function
	
	$(document).on('submit', '#reg-form', function()
	{		
		$.post('submit.php', $(this).serialize())
		.done(function(data)
		{
			$("#reg-form").fadeOut('slow', function()
			{
				$(".result").fadeIn('slow', function()
				{
					$(".result").html(data);	
				});
			});
		})
		.fail(function()
		{
			alert('fail to submit the data');
		});
		return false;
	});	
	
	using $.post() function
	
	*/
	
	$(document).on('submit', '#reg-form', function()
	{
		
		//var fn = $("#fname").val();
		//var ln = $("#lname").val();
	
		//var data = 'fname='+fn+'&lname='+ln;
		
		var data = $(this).serialize();
		
		
		$.ajax({
		
		type : 'POST',
		url  : 'menuxs.php',
		data : data,
		success :  function(data)
				   {						
						$("#reg-form").fadeOut(100).hide(function()
						{
							$(".result").fadeIn(100).show(function()
							{
								$(".result").html(data);
							});
						});
						
				   }
		});
		return false;
	});
});
</script>
	</head>
	<body ONLOAD='setFocus()'>
	   <script language="JavaScript">
function disableEnterKey(e)
{
     var key;

     if(window.event)
          key = window.event.keyCode;     //IE
     else
          key = e.which;     //firefox

     if(key == 13)
          return false;
     else
          return true;
}
</script><script>
    if (!("autofocus" in document.createElement("input")))
            document.getElementById("inputFieldId").focus();
</script>

<script src="jquery-latest.js"></script>
<script>
var auto_refresh = setInterval(
function ()
{
$('#load_tweetssss2').load('connection.php').fadeIn("slow");
}, 10); // refresh every 10000 milliseconds

</script>
</head>

<div id="load_tweetssss2"> </div>
