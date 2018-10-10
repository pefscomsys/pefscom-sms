<?php
ini_set('max_execution_time', 3250000000); //300 seconds = 5 minutes
require 'dbcs.php';
 
 
 
error_reporting(E_ALL);
  $server [1] = "DESKTOP-NHB90TQ\HIMSSEVER";
  $user   [1] = "sa";
  $pass   [1] = "123456";
  $db     [1] = "cg2015";
    $table    [1] = "university";
 // $server [2] = "himsbuea.org";
 // $user   [2] = "hims_bikah2015";
 // $pass   [2] = "bikah1984";
 // $db     [2] = "hims_newsite";
 // $table="courses";
  $server [2] = "localhost";
  $user   [2] = "sofocol";
  $pass   [2] = "sofocol";
  $db     [2] = "university";
 
  $table    [2] = "hims_newsite";


 
  $mr1 = mssql_connect($server[1], $user[1], $pass[1], $table[1]);

 
mssql_select_db($db[1], $mr1);
  
  
  $mr2 = mysql_connect($server[2], $user[2], $pass[2], $table[2]);
  echo mysql_error($mr2);
  mysql_select_db($db[2], $mr2);
  echo mysql_error($mr2);
  
	
    $q2 = "SELECT * FROM historic ";
    $r2 = mysql_query($q2, $mr2);
    echo mysql_error($mr2);
    $n2 = mysql_numrows($r2);
    for ($x=0; $x<$n2; $x++) {
      $w2 = mysql_fetch_assoc($r2);
      $st = "";
      foreach ($w2 as $key => $val) {
        if ($st!="") $st .= ",";
        $st .= "'".mysql_real_escape_string($val)."'";
      }
  
 
	      echo $q3 = "INSERT INTO historic  ()      VALUES ($st)";
	  
     mssql_query($q3, $mr1);
	
    }
	
	
  
  
?>