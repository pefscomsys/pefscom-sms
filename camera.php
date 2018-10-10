<?php 
include 'dbc.php';
page_protect();
 $roll=$_GET["roll"];

?>
<html>
<head>
<script type="text/javascript" src="camera.js"></script>
<script type="text/javascript" src="camera.min.js"></script>
<style type="text/css">
body{
	margin:0;
padding:0;
}
.img
    { background:#ffffff;
    padding:12px;
    border:1px solid #999999; }
.shiva{
 -moz-user-select: none;
    background: #2A49A5;
    border: 1px solid #082783;
    box-shadow: 0 1px #4C6BC7 inset;
    color: white;
    padding: 3px 5px;
    text-decoration: none;
    text-shadow: 0 -1px 0 #082783;
    font: 12px Verdana, sans-serif;}
</style></head>
<html>

<?php
$roll=$_GET["roll"];
$query="select * from courses where roll='$roll'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>
<body style="background-color:#dfe3ee;">

<div style="height:300px;width:1200px; margin-top:30px;">


<div style="float:left;height:250px; width:300px;border:1px solid #000; background:#fff;">
<div style="float:left;height:240px; width:290px;">
<?php 
 $matricule=$row["matricule"];
				
				$qry = mysql_query("select id as total
from employees where empname='$matricule'  "); 
$row = mysql_fetch_assoc($qry); 
 $savep4=$row['total']; ?>
					<img src="load_image.php?pic_id=<?php echo $savep4;?>" width="290px" height="240px" style="margin-left:5px; margin-top:5px;">
</div>
</div>


<div id="content" style="float:left; width:300px;height:380px;" align="center">
<script type="text/javascript" src="webcam.js"></script>
<script language="JavaScript">
		document.write( webcam.get_html(240, 240) );
</script>
<form>
		<input type=button value="Configure settings" onClick="webcam.configure()" class="shiva">
		&nbsp;&nbsp;
		<input type=button value="snap" onClick="take_snapshot()" class="shiva">
	</form>
 
</div>


<script  type="text/javascript">
    webcam.set_api_url( 'sendf.php?roll=<?php echo $roll;?>' );
		webcam.set_quality( 90 ); // JPEG quality (1 - 100)
		webcam.set_shutter_sound( true ); // play shutter click sound
		webcam.set_hook( 'onComplete', 'my_completion_handler' );

		function take_snapshot(){
			// take snapshot and upload to server
			document.getElementById('img').innerHTML = '<h1>Uploading...</h1>';
			
			webcam.snap();
		}

		function my_completion_handler(msg) {
			// extract URL out of PHP output
			if (msg.match(/(http\:\/\/\S+)/)) {
				// show JPEG image in page
				
				document.getElementById('img').innerHTML ='<h3>Upload Successfuly done</h3>'+msg;
			     
				document.getElementById('img').innerHTML ="<img src="+msg+" class=\"img\">";
				
			
				// reset camera for another shot
				webcam.reset();
			}
			else {alert("Error occured we are trying to fix now: " + msg); }
		}
	</script>
  
<div id="img" style=" height:300px; width:300px; float:left; ">
</div>
</div>
<?php } ?>
</body>
</html>