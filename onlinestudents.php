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
 
 
 $server [2] = "DESKTOP-36RS7SA\EKOMBES";
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


		
    $q22 = "SELECT  photo, fname, departmet, levels, matricule, sex, db1, c101, c102, c103, c104, c105, c106, c107, c108, c109, c110, 
	c111, c112, c113, c114, c115, c116, c117, c118, c119, c120, c121, c122, c123, c124, c125, c126, c127, c128, c129, c130, c131, c132,
	c133, c134, c135, c136, c137, c138, c139, c140, c141, c142, c143, c144, c145,  cxx11, cxx12, cxx9, cxx10, cxx5, cxx6,
 cxx7, cxx8, cxx3, cxx4, cxx1, cxx2, barcode 
	FROM courses
	
 
 
							
	
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
  
 
   $q33 = "INSERT INTO  courses (  photo, fname, departmet, levels, matricule, sex, db1, c101, c102, c103, c104, c105, c106, c107, c108, c109, c110, c111,
   c112, c113, c114, c115, c116, c117, c118, c119, c120, c121, c122, c123, c124, c125, c126, c127, c128, c129, c130, c131, c132, c133, c134, c135, c136, 
   c137, c138, c139, c140, c141, c142, c143, c144, c145, cxx11, cxx12, cxx9, cxx10, cxx5, cxx6, cxx7, cxx8, cxx3, cxx4, cxx1, cxx2, barcode
   
   )  VALUES ($st)";
	  
mssql_query($q33, $mr2);
	
   
	
	
	
	
	
	
	
	
	
	
	
	
	
  }
  

  
  
?>