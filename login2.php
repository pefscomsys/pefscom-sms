<?php include 'dbcs.php';
?><?php 
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

	
$result = mysql_query("SELECT `id`,`pwd`,`full_name`,`approved`,`user_level` FROM users WHERE 
           $user_cond
			AND `banned` = '0'
			") or die (mysql_error()); 
			 
$num = mysql_num_rows($result);

  // Match row found with more than 1 results  - the user is authenticated. 
    if ( $num > 0 ) { 
	
	list($id,$pwd,$user_name,$approved,$user_level) = mysql_fetch_row($result);
	
	
	 
		//check against salt
	if ($pwd === PwdHash($pass,substr($pwd,0,9))) { 
	if(empty($err)){			

     // this sets session and logs user in  
       session_start();
	   session_regenerate_id (true); //prevent against session fixation attacks.

	   // this sets variables in the session 
		$_SESSION['user_id']= $id;  
		$notes=$_SESSION['user_name'];
		$_SESSION['user_name'] = $user_name;
		$_SESSION['user_level'] = $user_level;
		$_SESSION['HTTP_USER_AGENT'] = md5($_SERVER['HTTP_USER_AGENT']);
		$monn=$user_name;
		//update the timestamp and key for cookie
		$stamp = time();
		$ckey = GenKey();
		mysql_query("update users set `ctime`='$stamp', `ckey` = '$ckey' where id='$id'") or die(mysql_error());
		
		//set a cookie 
		//set a cookie  
if ($user_level == 7) 
{ 

		 $_SESSION['userlevel']= $user_level;
    header ("Location: myaccount1.php"); 
} 
else if ($user_level == 4) 
{ 

		 $_SESSION['userlevel']= $user_level;
    header ("Location:  myaccount1.php");
	 
}
else if ($user_level == 6) 
{ 
    header ("Location:  book.php"); 
}
else if ($user_level == 2.1) 
{ 
    header ("Location:  regg2.php"); 
}
else if ($user_level == 3) 
{ 
		 $_SESSION['userlevel']= $user_level;
    header ("Location:  dean.php"); 
}

else if ($user_level == 5) 
{ 
		 $_SESSION['userlevel']= $user_level;
    header ("Location:  bustme.php"); 
}


else if ($user_level == 41) 
{ 
		 $_SESSION['userlevel']= $user_level;
    header ("Location:  bustmer.php"); 
}
else if ($user_level == 99) 
{ 
		 $_SESSION['userlevel']= $user_level;
    header ("Location:  bustmes.php"); 
}
else if ($user_level == 33) 
{ 
		 $_SESSION['userlevel']= $user_level;
    header ("Location:  deanss.php"); 
}
else if ($user_level == 8) 
{ 

		 $_SESSION['userlevel']= $user_level;
    header ("Location:  busser.php"); 

}


else if ($user_level == 7) 
{ 

		 $_SESSION['userlevel']= $user_level;
    header ("Location:  myaccount1.php"); 

}


else if ($user_level == 1) 
{ 

		 $_SESSION['userlevel']= $user_level;
    header ("Location:  students.php"); 

}

else if ($user_level == 0) 
{ 

		 $_SESSION['userlevel']= $user_level;
    header ("Location:  book.php"); 

}
else if ($user_level == 9) 
{ 

		 $_SESSION['userlevel']= $user_level;
    header ("Location:  scanvotes.php"); 

}
else if ($user_level == 12) 
{ 

		 $_SESSION['userlevel']= $user_level;
    header ("Location:  salesss.php"); 

}

else if ($user_level == 11) 
{ 

		 $_SESSION['userlevel']= $user_level;
    header ("Location:  dean.php"); 

}

else if ($user_level ==2.1) 
{ 

		 $_SESSION['userlevel']= $user_level;
    header ("Location:  sales.php"); 

}

else if ($user_level == 13) 
{ 

		 $_SESSION['userlevel']= $user_level;
    header ("Location:  classmaster6.php"); 

}

else if ($user_level == 6) 
{ 

		 $_SESSION['userlevel']= $user_level;
    header ("Location:  book.php"); 

}


else if ($user_level == 16) 
{ 

		 $_SESSION['userlevel']= $user_level;
    header ("Location:  classmaster8.php"); 

}

else if ($user_level == 17) 
{ 

		 $_SESSION['userlevel']= $user_level;
    header ("Location:  bookm.php"); 

}
else if ($user_level == 18) 
{ 

		 $_SESSION['userlevel']= $user_level;
    header ("Location:  classmaster10.php?roll=security=@123&access=*2828"); 

}


else if ($user_level == 20) 
{ 

		 $_SESSION['userlevel']= $user_level;
    header ("Location:  classmaster11.php"); 

}

else if ($user_level == 21) 
{ 

		 $_SESSION['userlevel']= $user_level;
    header ("Location:  classmaster12.php"); 

}

else if ($user_level == 22) 
{ 

		 $_SESSION['userlevel']= $user_level;
    header ("Location:  classmaster13.php"); 

}


else if ($user_level == 23) 
{ 

		 $_SESSION['userlevel']= $user_level;
    header ("Location:  classmaster14.php"); 

}
else if ($user_level == 24) 
{ 

		 $_SESSION['userlevel']= $user_level;
    header ("Location:  classmastercom7.php"); 

}


else if ($user_level == 15) 
{ 

		 $_SESSION['userlevel']= $user_level;
    header ("Location:  classmaster8.php"); 

}

else if ($user_level ==18) 
{ 
		 $_SESSION['userlevel']= $user_level;
    header ("Location:  omegahomes.php?roll=security=@123&access=*2828"); 
}

else if ($user_level ==29) 
{ 
		 $_SESSION['userlevel']= $user_level;
    header ("Location:  systemadmin.php"); 
}

else if ($user_level ==41) 
{ 
		 $_SESSION['userlevel']= $user_level;
    header ("Location:  library.php"); 
}
else if ($user_level ==111) 
{ 
		 $_SESSION['userlevel']= $user_level;
    header ("Location:  orditteam.php"); 
}
else if ($user_level ==110) 
{ 
		 $_SESSION['userlevel']= $user_level;
    header ("Location:  orditteams.php"); 
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
		$err[] = "Invalid Password. Please you have $attempt left ";
		$statd='1';
		
$tm=date('H:i:s');
$idff=$_SESSION['user_id'];
$ip_value=date('d/m/y');
$ref=($_SERVER['SERVER_NAME']);
$notess=($_SESSION['full_name']);
$ref2=($_SERVER['PHP_SELF']);
$agent=($_SERVER['HTTP_USER_AGENT']);
$ip=@$_SERVER['REMOTE_ADDR'];





		//header("Location: login.php?msg=$msg");
		}
	} else {
		$err[] = "Unauthorised Access! please Logout From The Previous Computer";
	  }		
}
					 
 ?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Universal University System</title>
<link href="popup.css" rel="stylesheet" type="text/css" />

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
<div id="popup">
<div style="float:left; width:650px;border-bottom:1px solid #000;margin-top:3px; height:40px;background:rgb(120,80,100);">

<div style="float:left; width:100px; height:80px;color:#fff;font-size:30px;"><div style="float:left;margin-top:5px;margin-left:5px;">&#9658;</div></div>
 <div style="float:left; width:300px;color:#1188aa; height:30px;font-size:38px;color:#fff;">uniSys</div></div>


</h1>
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
   <form action="login.php" method="post" name="logForm" id="logForm" >
			<table width="500px" cellpadding="1" style="margin-left:70px;">
			
						<tr><td></td><td></td></tr>	
					
						<tr><td></td><td></td></tr>	
					
						<tr><td></td><td></td></tr>	
				<tr><td>School</td><td>			
<select name="fax" style="padding:5px;">
<?php
$rs=mysql_query("Select * from school where roll='2' ",$link);
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
?></select></td></tr>
				
<tr><td>Access UserName</td><td>			
					<input class="username" name="usr_email"  type="text" value=""  placeholder="Username" style="padding:5px;"size="33"/></td></tr>
				<tr><td>Password</td><td>	<input class="password"  name="pwd" type="password" value="" style="padding:5px;"size="33"placeholder="Password"/></td></tr>
					
						<tr><td></td><td></td></tr>	
						
						<tr><td></td><td></td></tr>	
					
						<tr><td></td><td></td></tr>	
					
					
					</table>
					<input id="login-button" name="doLogin" type="submit" class="submit" value="Login"  style="padding:10px   45px;margin-left:230px;" >
		</form>
		
		
		
		
		
		
<p>









</div>
</body>
</html>