<?php

ini_set('max_execution_time', 3250000000); //300 seconds = 5 minutes

error_reporting(E_ALL ^ E_NOTICE);
 $db1=$_GET["db1"];
 $levels=$_GET["levels"];
 $fname=$_GET["pic"];

 $dept=$_GET["dept"];
	$table=$_GET["rx"];
			
			$table2=$_GET["rxs"];

error_reporting(E_ALL);
  $server [1] = "localhost";
  $user   [1] = "sofocol";
  $pass   [1] = "sofocol";
  $db     [1] = "university";
	
	
	////$server [1] = "himsbuea.org";
 // $user   [1] = "hims_bikah2015";
 // $pass   [1] = "hims_bikah2015";
 // $db     [1] = "hims_gce";
 //   $table    [1] = "gceconsol";
 // $server [2] = "himsbuea.org";
 // $user   [2] = "hims_bikah2015";
 // $pass   [2] = "bikah1984";
 // $db     [2] = "hims_newsite";
 // $table="courses";
 
 
 $server [2] = "DESKTOP-36RS7SA";
  $user   [2] = "sa";
  $pass   [2] = "123456";
  $db     [2] = "cg2015";
 

 


 
  $mr1 = mysql_connect($server[1], $user[1], $pass[1], $table[1]);

  mysql_error($mr1);
mysql_select_db($db[1], $mr1);
   mysql_error($mr1);
   $mr1;
  
  
  $mr2 = mssql_connect($server[2], $user[2], $pass[2], $table[2]);

  mssql_select_db($db[2], $mr2);


		
    $q22 = "SELECT 
  fname, matricule, departmet, levels, sex, db1, c101, c102, c103, c104, c105, c106, c107, c108, c109, c110,roll
	FROM resit
	
 
 
							
	
	";
    $r2 = mysql_query($q22, $mr1);
    
    $n2 = mysql_num_rows($r2);
    for ($x=0; $x<$n2; $x++) {
      $w2 = mysql_fetch_assoc($r2);
      $st = "";
      foreach ($w2 as $key => $val) {
        if ($st!="") $st .= ",";
        $st .= "'".mysql_real_escape_string($val)."'";
      }
  
 
 echo   $q33 = "INSERT INTO  [cg2015].[dbo].[resit] ( 
   fname, matricule, departmet, levels, sex, db1, c101, c102, c103, c104, c105, c106, c107, c108, c109, c110,roll
   
   
   )  VALUES ($st)";
	  
mssql_query($q33, $mr2);
	
   
	
	
	
	
	
	
	
	
	
	
	
	
	
  }
  

  
  
?>