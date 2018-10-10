<?php
ini_set('max_execution_time', 3250000000); //300 seconds = 5 minutes
 $ms=$_GET["roll"];
 $mat=$_GET["mat"];
 $levels=$_GET["levels"];?>
 <html>
 <head>
 
<script src="jquery-2.1.1.min.js"></script>
        <script type="text/javascript">
            function showImage(smSrc, lgSrc) {
                document.getElementById('largeImg').src = smSrc;
                showLargeImagePanel();
                unselectAll();
                setTimeout(function() {
                    document.getElementById('largeImg').src = lgSrc;
                }, 1)
            }
            function showLargeImagePanel() {
                document.getElementById('largeImgPanel').style.display = 'block';
            }
            function unselectAll() {
                if(document.selection)
                    document.selection.empty();
                if(window.getSelection)
                    window.getSelection().removeAllRanges();
            }
        </script>
<style type="text/css">
            #largeImgPanel {
                text-align: center;
                display: none;
                position: fixed;
                z-index: 100;
                top: 0; left: 0; width: 100%; height: 100%;
                background-color: rgba(100,100,100, 0.5);
            }
			#loading {
   width: 100%;
   height: 100%;
   top: 0;
   left: 0;
   position: fixed;
   display: block;
   opacity: 0.7;
   background-color: #fff;
   z-index: 99;
   text-align: center;
}

#loading-image {
  position: absolute;
  top: 100px;
  left: 240px;
  z-index: 100;
}
        </style>
		</head>
		<body><div id="loading">
  <img id="loading-image" src="images/ajax-loader.gif" alt="Loading..." />
</div>
		<?php
error_reporting(E_ALL);
  $server [1] = "localhost";
  $user   [1] = "sofocol";
  $pass   [1] = "sofocol";
  $db     [1] = "university";
    $table    [1] = "university";
 // $server [2] = "himsbuea.org";
 // $user   [2] = "hims_bikah2015";
 // $pass   [2] = "bikah1984";
 // $db     [2] = "hims_newsite";
 // $table="courses";
 $server [2] = "www.himsbuea.org";
  $user   [2] = "hims_bikah2015";
  $pass   [2] = "bikah1984";
  $db     [2] = "hims_newsite";
 
  $table    [2] = "hims_newsite";

 
  $mr1 = mysql_connect($server[1], $user[1], $pass[1], $table[1]);

  echo mysql_error($mr1);
mysql_select_db($db[1], $mr1);
  echo mysql_error($mr1);
  echo $mr1;
  
  $mr2 = mysql_connect($server[2], $user[2], $pass[2], $table[2]);
  echo mysql_error($mr2);
  mysql_select_db($db[2], $mr2);
  echo mysql_error($mr2);
  


  $q = "SHOW TABLES FROM $db[1]";
  $r = mysql_query($q, $mr1);
  echo mysql_error($mr1);
  $n = mysql_numrows($r);
  for ($i=0; $i<$n; $i++) {
    $w = mysql_fetch_array($r);
	
    // Delete
	
	
    $q2 = "DELETE  FROM historic where class='$levels' and matricule='$mat' and oldb='$ms'";
    $r2 = mysql_query($q2, $mr2);
    echo mysql_error($mr2);
	
    // Copy
	
	
    $q2 = "SELECT * FROM historic where class='$levels' and matricule='$mat' and oldb='$ms'";
    $r2 = mysql_query($q2, $mr1);
    echo mysql_error($mr1);
    $n2 = mysql_numrows($r2);
    for ($x=0; $x<$n2; $x++) {
      $w2 = mysql_fetch_assoc($r2);
      $st = "";
      foreach ($w2 as $key => $val) {
        if ($st!="") $st .= ",";
        $st .= "'".mysql_real_escape_string($val)."'";
      }
  
 
	      echo $q3 = "INSERT INTO historic VALUES ($st)";
	  
     mysql_query($q3, $mr2);
	
    }
	
	
	exit;
	 echo  $statusf="<meta http-equiv='refresh' content='0; url=../bustme.php?usr_name=$fname&dates=$dates&mats=$mats&db1=$db1&fname=fname'>";

	
	
	
	
  }
  
  
?>