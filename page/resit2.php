<?php 
include 'dbc.php';
$err = array();

foreach($_GET as $key => $value) {
	$get[$key] = filter($value); //get variables are filtered.
}

if ($_POST['doLogin']=='Login')
{

foreach($_POST as $key => $value) {
	$data[$key] = filter($value); // post variables are filtered
}


$user_email = $data['usr_email'];
$pass = $data['pwd'];


if (strpos($user_email,'@') === false) {
    $user_cond = "user_name='$user_email'";
} else {
      $user_cond = "user_email='$user_email'";
    
}

	
$result = mysql_query("SELECT `id`,`pwd`,`full_name`,`approved`,`user_level` FROM subject2 WHERE 
           $user_cond
			AND `banned` = '0'
			") or die (mysql_error()); 
			 
$num = mysql_num_rows($result);

  // Match row found with more than 1 results  - the user is authenticated. 
    if ( $num > 0 ) { 
	
	list($id,$pwd,$full_name,$approved,$user_level) = mysql_fetch_row($result);
	
	
	 
		//check against salt
	if ($pwd === PwdHash($pass,substr($pwd,0,9))) { 
	if(empty($err)){			

     // this sets session and logs user in  
       session_start();
	   session_regenerate_id (true); //prevent against session fixation attacks.

	   // this sets variables in the session 
		$_SESSION['user_id']= $id;  
		$_SESSION['user_name'] = $full_name;
		$_SESSION['user_level'] = $user_level;
		$_SESSION['HTTP_USER_AGENT'] = md5($_SERVER['HTTP_USER_AGENT']);
		
		//update the timestamp and key for cookie
		$stamp = time();
		$ckey = GenKey();
		mysql_query("update subject2 set `ctime`='$stamp', `ckey` = '$ckey' where id='$id'") or die(mysql_error());
		
		//set a cookie 
		//set a cookie  
if ($user_level <= 10) 
{ 
    header ("Location: outppo.php"); 
} 


else if ($user_level == 11) 
{ 
    header ("Location:  englishst2ppo.php"); 

}





	   if(isset($_POST['remember'])){
				  setcookie("user_id", $_SESSION['user_id'], time()+60*60*24*COOKIE_TIME_OUT, "/");
				  setcookie("user_key", sha1($ckey), time()+60*60*24*COOKIE_TIME_OUT, "/");
				  setcookie("user_name",$_SESSION['user_name'], time()+60*60*24*COOKIE_TIME_OUT, "/");
				   }
		 }
		}
		else
		{
		//$msg = urlencode("Invalid Login. Please try again with correct user email and password. ");
		$err[] = "Invalid Login. Please try again with correct subject password and username.";
		//header("Location: login.php?msg=$msg");
		}
	}else {
		$err[] = "Error - Invalid login. No such subject password or username";
	  }		
}

					 

		
			 

?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<html lang="en">
<head>
<title><?php echo $school;?></title>
        <link rel="shortcut icon" href="pef.png"> 
	<style>
	table,td,tr{font-family:arial; font-size:12px;}
	</style>
	
<script src="jquery.min.js"></script>
<script src="jquery.preimage.js"></script>

<script>

$(document).ready(function()
{
	$('.file').preimage();
});

</script>

<style>
.prev_container{
	overflow: auto;
	width: 300px;
	height: 200px;
}

.prev_thumb{
	margin: 10px;
	height: 200px;
}
</style>
	</head>
	<body>
	<div style="float:left; width:700px; height:400px;">
	
	
<script type="text/javascript" language="javascript"> 
<!--
// By Adam Khoury @ www.developphp.com
function validateMyForm ( ) { 
    var isValid = true;
    if ( document.form1.comments.value == "" ) { 
	    alert ( "please Enter  Comment subject name" ); 
	    isValid = false;
    } else if ( document.form1.comments.value.length < 1 ) { 
            alert ( "please Enter  comment name  must be Enter " ); 
            isValid = false;
    } 
	
	 else if ( document.form1.from1.value.length < 1 ) { 
            alert ( "please Enter   start range Code  must be Enter " ); 
            isValid = false;
    } 
	
	 else if ( document.form1.from2.value.length < 0 ) { 
            alert ( "please  end point  must be Enter " ); 
            isValid = false;
    } 
	
		else if ( document.status.value == "" ) { 
            alert ( "Please status must be enter " ); 
            isValid = false;
    } 
	
	
	
//-->
</script>
<script type="text/javascript">
function doCalc(form) {
  form.balance.value = parseInt(form.expected_amount.value) - parseInt(form.amount_paid.value);
}
</script>

		 
<?php
	  /******************** ERROR MESSAGES*************************************************
	  This code is to show error messages 
	  **************************************************************************/
	  if(!empty($err))  {
	   echo "<div class=\"msg\" style='text-decoration:blink;color:red;'>";
	  foreach ($err as $e) {
	    echo "$e <br>";
	    }
	  echo "</div>";	
	   }
	  /******************************* END ********************************/	  
	  
	  ?>
<div style="float:left; width:400px;">


   <form action="resit2.php" method="post" name="logForm" id="logForm" ><table><tr><td>
  <table width="270" border="0" align="center" cellpadding="3" cellspacing="0" style="border: 1px solid #000; 
  background:wheat;color:#fff;">
    <tr>
    <td width="112">Subject:</font></td><td width="188"><input class="username" name="usr_email"  type="text" value="" /></td></tr>
    <td width="112">Password:</font></td><td width="188"><input class="password"  name="pwd" type="password" value="" /></td>
    </tr><tr><td>&nbsp;</td><td>
                  <input name="doLogin" type="submit" class="submit" value="Login"></td>
  </tr>
 
   
</table>
  




	
	
	
	
	
	</div>
	
	  
	  
	
	</div>
	
	
	
	
	</div>
	
	
	</body>
	</html>