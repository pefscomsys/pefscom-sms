<!DOCTYPE html>
 <html>
 <head>
<meta charset="UTF-8">
 <title>HIGHER INSTITUTE OF MANAGEMENT STUDIES</title>
 
    <link rel="stylesheet" href="page/nivo-slider.css" type="text/css" media="screen" />
	
    <script type="text/javascript" src="scripts/jquery-1.4.3.min.js"></script>
    <script type="text/javascript" src="page/jquery.nivo.slider.pack.js"></script> <script type="text/javascript">
    $(window).load(function() {
        $('#slider').nivoSlider();
    });
    </script>
 <STYLE>
 
 ul,li{list-style:none;}
 body{
  padding: 0; 
  margin:0;
  color: #FFFFFF;
  height:100%;
  min-height:100%;
  
  background: -moz-linear-gradient(#2c5678,#000, #000); 
        background: -webkit-gradient(linear,left bottom,left top,color-stop(0, #111),color-stop(#ddd, #000));	
	background: -webkit-linear-gradient(#2c5678, #000,#000);	
	background: -o-linear-gradient(#2c5678,#000, #000);
	background: linear-gradient(#2c5678, #000);
	background: -ms-linear-gradient( #2c5678,#000,#000);
  background-repeat: repeat-x;
  background-attachment: fixed;
  background-position: top left;
  min-width: 900px;
  font-family:verdana,arial,sans-serif;
  font-size:14px;
	}#menux{
  position: fixed;
  right: 0;
  top: 50%;
  width: 8em;
  margin-top: -2.5em;
}


#menuxx{
  position: fixed;
  left: 0;
  top: 50%;
  width: 11em;
  margin-top: -2.5em;
}
	#menus{
	width:950px;

	list-style: none;  
	background:(#2c5678,0.7);border:1px solid #ccc;
	
	background: -moz-linear-gradient(#2c5678, #000); 
        background: -webkit-gradient(linear,left bottom,left top,color-stop(0, #111),color-stop(#2c5678, #000));	
	background: -webkit-linear-gradient(#2c5678, #000);	
	background: -o-linear-gradient(#2c5678, #000);
	background: -ms-linear-gradient(##2c5678, #000);
	background: linear-gradient(#2c5678, #000);
	-moz-border-radius: 0px;
	border-radius: 0px;
	-moz-box-shadow: 0 2px 1px #9c9c9c;
	-webkit-box-shadow: 0 2px 1px #9c9c9c;
	box-shadow: 0 2px 1px #9c9c9c;
	
}

#menus li{
	float: left;
	padding: 0 0 10px 0;
	position: relative;
}

#menus a{
	float: left;
	height: 25px;
	padding: 0 25px;
	color: #fff;
	text-transform: uppercase;
	font: bold 12px/25px Arial, Helvetica;
	text-decoration: none;
	text-shadow: 0 1px 0 #000;
}

#menus li:hover > a{
	color: #fafafa;
}

*html #menus li a:hover{ /* IE6 */
	color: #fafafa;
}

#menus li:hover > ul{
	display: block;
}

/* Sub-menu */

#menus ul{
    list-style: none;
    margin: 0;
    padding: 5px;   
 	
    display: none;
    position: absolute;
    top: 35px;
    left: 0;
    z-index: 99999;    
    background: #444;
    background: -moz-linear-gradient(#444, #1188AA);
    background: -webkit-gradient(linear,left bottom,left top,color-stop(0, #1188AA),color-stop(1, #444));
    background: -webkit-linear-gradient(#444, #1188AA);    
    background: -o-linear-gradient(#444, #1188AA);	
    background: -ms-linear-gradient(#444, #1188AA);	
    background: linear-gradient(#444, #1188AA);	
    -moz-border-radius: 5px;
    border-radius: 5px;
}


#menus ul li{
    float: none;
    margin: 0;
    padding: 0;
    display: block;  
    -moz-box-shadow: 0 1px 0 #111111, 0 2px 0 #777777;
    -webkit-box-shadow: 0 1px 0 #111111, 0 2px 0 #777777;
    box-shadow: 0 1px 0 #111111, 0 2px 0 #777777;
}

#menus ul li:last-child{   
    -moz-box-shadow: none;
    -webkit-box-shadow: none;
    box-shadow: none;    
}

#menus ul a{    
    padding: 10px;
    height: auto;
    line-height: 1;
    display: block;
    white-space: nowrap;
    float: none;
    text-transform: none;
}

*html #menus ul a{ /* IE6 */   
	height: 10px;
	width: 150px;
}

*:first-child+html #menus ul a{ /* IE7 */    
	height: 10px;
	width: 150px;
}

#menus ul a:hover{
        background: #0186ba;
	background: -moz-linear-gradient(#04acec,  #0186ba);	
	background: -webkit-gradient(linear, left top, left bottom, from(#04acec), to(#0186ba));
	background: -webkit-linear-gradient(#04acec,  #0186ba);
	background: -o-linear-gradient(#04acec,  #0186ba);
	background: -ms-linear-gradient(#04acec,  #0186ba);
	background: linear-gradient(#04acec,  #0186ba);
}

#menus ul li:first-child a{
    -moz-border-radius: 5px 5px 0 0;
    -webkit-border-radius: 5px 5px 0 0;
    border-radius: 5px 5px 0 0;
}

#menus ul li:first-child a:after{
    content: '';
    position: absolute;
    left: 30px;
    top: -8px;
    width: 0;
    height: 0;
    border-left: 5px solid transparent;
    border-right: 5px solid transparent;
    border-bottom: 8px solid #444;
}

#menus ul li:first-child a:hover:after{
    border-bottom-color: #04acec; 
}

#menus ul li:last-child a{
    -moz-border-radius: 0 0 5px 5px;
    -webkit-border-radius: 0 0 5px 5px;
    border-radius: 0 0 5px 5px;
}

/* Clear floated elements */
#menus:after{
	visibility: hidden;
	display: block;
	font-size: 0;
	content: " ";
	clear: both;
	height: 0;
}

* html #menus             { zoom: 1; } /* IE6 */
*:first-child+html #menu { zoom: 1; } /* IE7 */
#MegaMenu1 .submenu ul li a:hover
{
   padding: 6px 4px 6px 14px;
}
#MegaMenu1 .submenu ul li a .ui-icon
{
   left: 0;
   margin-top: -8px;
   position: absolute;
   top: 20%;
}
 </STYLE>
 </head>

 <body>
 
 
 
 
 <div class="sub1">
 <div style="margin:auto; width:950px; height:50px;color:#fff;">
 
 
 
 			
   
		         <a href="index.php" style='color:#fff;'>         <div style="float:left; width:200px; margin-top:20px; height:30px; "> 
			
			Study at HIMS
          </div></a>
		  
		
		         <a href="about.php" style='color:#fff;'>      <div style="background:url(ok.png);float:left;text-align:center;margin-top:0px; width:200px; height:70px;border-left:1px solid #fff; border-right:1px solid #fff;"> 
		<div style="float:left; margin-top:20px;width:200px;text-align:center;">	
			About  HIMS   </div>
          </div></a>
		  
		
		         <a href="research.php" style='color:#fff;'>     	   <div style="float:left;text-align:center; margin-top:20px;width:200px; height:30px; border-right:1px solid #fff;"> 
			
			Research at  HIMS
          </div></a>
		  
		  
		  
		  	   <div style="float:left;text-align:center;margin-top:20px; width:300px; height:30px; "> 
			<div style="float:left;margin-left:5px;">
		  	   <div style="float:left;margin-top:-4px;">
		<form method="post" action="index.php"><table><tr><td><input type="text" name="search" value="" placeholder="Quick link" size="34">
          </td><td><input type="button" value="Search"></td></tr></table>
		   </form>
		  </div>
 
 	  </div>	  </div></div></div>
	  
	  
	  
	  
	  
	  
	  
	  
	   <div class="sub2">
 <div style="margin:auto; width:950px; height:220px;color:#484848;">
 
 
 
  <div style="float:left; margin-top:70px; width:400px;text-shadow:0px 1px 0px #282828; height:140px;color:#fff; "> 
		   
		   
		     <div style="float:left; width:140px; height:140px; "> 
		   
		   <img src="logo.png" height="80px" width="100px">
		   </div>
		   
		   
		       <div style="float:left; width:260px; height:140px; "> 
			   
		       <div style="float:left; width:221px;FONT-SIZE:18PX; height:30px; "> 
		    HIGHER INSTITUTE 
		  
		   </div>
		    <div style="float:left;FONT-SIZE:39PX;font-family:script;margin-left:-40px; width:30px; HEIGHT:30PX;">
		
		  <div style="float:left;width:30px; margin-top:-15px;margin-left:0px;"> of</div>
		 
		 </div>
		  
		 
		       <div style="float:left; width:260px;FONT-SIZE:17PX; height:30px; ">  MANAGEMENT STUDIES
		   
		   	 </div>
		  
		   
		   
		   </div>
		   
		   
		   </div>
           <div style="float:left;margin-left:90px; margin-top:70px; width:400px; height:140px;color:#fff;letter-spacing:1px; "> 
		   
		   
		   
		         <a href="staff.php" style='color:#fff;'>    <div style="float:left; width:200px; height:20px; "> 
		   > For staff
		     </div></a>
			
		         <a href="department.php" style='color:#fff;'>        <div style="float:left; width:200px; height:20px; "> 
		   > Colleges and departments
		     </div></a>
		   
		         <a href="student.php" style='color:#fff;'>      <div style="float:left; width:200px; height:20px; "> 
		 >  For current students
		     </div></a>
			
		         <a href="library.php" style='color:#fff;'>        <div style="float:left; width:200px; height:20px; "> 
		   > Libraries and facilities
		     </div></a>
		     
		         <a href="library.php" style='color:#fff;'>      <a href="result.php" style='color:#fff;'> <div style="float:left; width:200px; height:20px; "> 
		 >  Results 
		     </div></a>
			 
		         <a href="login.php" style='color:#fff;'>        <div style="float:left; width:200px; height:20px; "> 
		  > Online Form B
		     </div></a>
		  </div>
 
 
 
 
 </div>
 
 
 
 <div style="margin:auto;width:950px; height:500px;margin-top:00px; background:#efefef;">
 
 
 
 <div style="float:left;width:950px; height:70px;background:url(ok.png);
 
 
">
 
 <div style="float:left;width:100px; height:70px;">
 
 
 
 </div>
 
 
 <div style="float:left;width:720px; height:70px;color:#CCC;FONT-FAMILY:ARIAL,SANS-SERIF;">
 
 <div style="float:left;width:720px; MARGIN-TOP:20PX;">
   STUDENT ACCESS SECTION ONLINE
		   	 </div>
 </div>
 
 
 
 <div style="float:left;width:950px; height:70px;color:#CCC;FONT-FAMILY:ARIAL,SANS-SERIF;">
 
 
  </div>
 
  <div style="float:left;width:600px; margin-left:20px; height:300px;">
 
  <div style="float:left;width:600px;  background:#2c5678;height:50px;color:#fff;">
 
  <div style="float:left;width:600px;MARGIN-left:10PX; MARGIN-TOP:10PX;font-size:25px;">
   <b>Sign in</b>
   
   
   
   
   
   
   
   
   
   
   
   
   

		   	 </div>
			 
			 
			 
			
  <div style="float:left;width:600px; margin-top:30px; -ms-border-radius:12px;-moz-border-radius:12px;-webkit-border-radius:12px;-ms-border-top-left-radius:0;-moz-border-radius-topleft:0;-webkit-border-top-left-radius:0;-ms-border-top-right-radius:0;-moz-border-radius-topright:0;-webkit-border-top-right-radius:0;min-height:15px; background:#ddd;height:250px;color:#fff;"> 
			 
			 
			 
  <div style="float:left;width:600px; margin-top:10px; margin-left:10px;">
			 
			 
				 
			<form method="POST" action="ehims/login.php"> 
  <div style="float:left;width:600px;height:20px;color:#2c5678;margin-top:10px;">
  
  Student Matricule
  
  
  </div>
 
   <div style="float:left;width:600px;height:20px;color:#2c5678;">
  <input class="username" name="usr_email"  type="text" value=""  size="48"/>
  
  </div>
 
 
 <div style="float:left;width:600px;height:20px;color:#2c5678;margin-top:10px;">
  
  Password
  
  
  </div>
 
   <div style="float:left;width:600px;height:20px;color:#2c5678;">
  
 <input class="password"  name="pwd" type="password" value="" size="48"/>
  
  </div>
 
 
   <div style="float:left;width:600px;height:20px;color:#2c5678;margin-top:20px;">
  
 
 <input class="button" name="doLogin" type="submit" value="Login" "/></a>
 </div>
 </form>
 
 </div>
  <div style="float:left;width:600px;height:20px;color:red;margin-left:10px;margin-top:20px;">
 
 
 </div>
 
 </div>
 </div>
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 </div>
 
  <div style="float:left;width:300px; margin-left:20px;font-size:21px;height:300px;">
 
  <div style="float:left;width:300px;font-size:21px; background:#2c5678;height:30px;color:#fff;">
 
 &nbsp; &nbsp;Need an Account?
 </div>
 
 
  
  <div style="float:left;margin-top:10px;width:300px;font-size:12px;height:30px;color:#787878;font-family:arial,sans-serif;line-height:18px;">
 Find Results and transcript through  HIMS Internet account .<a href='register.php'>CLICK HERE</a>

 </div>
 
  
  <div style="float:left;margin-top:20px;width:300px;font-size:21px; background:#2c5678;height:30px;color:#fff;">
 
  &nbsp; &nbsp;Need More Help?
 </div>
 
 
  <div style="float:left;margin-top:10px;width:300px;font-size:12px;height:30px;color:#787878;font-family:arial,sans-serif;line-height:18px;">
Contact  help staff or see the  Internet accounts site. <a href='help.php'>CLICK HERE</a>

 </div>
 
 
 
 
 
 
 
 </div>
 
 
 </div>
 
 
 
 </div>
 
 
 
 
 
 
	 
	 
	  		  
	<div style="margin:auto;text-align:center;margin-top:100px;font-size:11px;border-top:1px solid #282828;color:#282828; width:950px; height:3px;font-family:arial;line-height:29px; ">
		  
		design by PEFSCOM  &copy 02,2014
	 
     </div>
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
     </div>
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 </div>