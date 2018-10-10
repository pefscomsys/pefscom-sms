<?php
ini_set('max_execution_time', 3250000); //300 seconds = 5 minutes
  error_reporting(E_ALL);
  $server [1] = "localhost";
  $user   [1] = "sofocol";
  $pass   [1] = "sofocol";
  $db     [1] = "okdb";
  
  $server [2] = "localhost";
  $user   [2] = "root";
  $pass   [2] = "";
  $db     [2] = "hims";
  $table="courses";
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
    $q2 = "DELETE FROM resit";
    $r2 = mysql_query($q2, $mr2);
    echo mysql_error($mr2);
    // Copy
    $q2 = "SELECT * FROM resit";
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
	
	
	
	
	
	    $q2 = "DELETE FROM courses";
    $r2 = mysql_query($q2, $mr2);
    echo mysql_error($mr2);
    // Copy
    $q2 = "SELECT * FROM courses";
    $r2 = mysql_query($q2, $mr1);
    echo mysql_error($mr1);
    $n2 = mysql_numrows($r2);
    for ($x=0; $x<$n2; $x++) {
      $w2 = mysql_fetch_assoc($r2);
      $st = "";
      foreach ($w2 as $key => $vals) {
        if ($st!="") $sts .= ",";
        $sts .= "'".mysql_real_escape_string($vals)."'";
      }
      echo $q4 = "INSERT INTO courses VALUES ($sts)";
	  
     mysql_query($q4, $mr2);
 
	  
    }
	
	
	
	
	
	
	
	
	
	
  }
  
  
?>