<?php
ini_set('max_execution_time', 3250000000); //300 seconds = 5 minutes
echo $take=$_GET["rx"];
echo $ui=$_GET["ui"];
echo $mats=$_GET["mats"];
echo $dept=$_GET["dept"];


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
	
	
    $q2 = "DELETE  FROM resit where db1='$take'  and 	matricule='$mats' and levels='$ui' and departmet='$dept'	";
    $r2 = mysql_query($q2, $mr2);
    echo mysql_error($mr2);
	
    // Copy
	
	
    $q2 = "SELECT * FROM resit where db1='$take' and 	matricule='$mats' and levels='$ui' and departmet='$dept'";
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
  
 
	      echo $q3 = "INSERT INTO resit VALUES ($st)";
	  
     mysql_query($q3, $mr2);
	
    }
	
	
	exit;
	
	
	
	
	
  }
  
  
?>