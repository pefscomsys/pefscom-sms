<?php
ini_set('max_execution_time', 3250000000); //300 seconds = 5 minutes
include'../dbcs.php';
 $db1=$_GET["dept"];
 $levels=$_GET["levels"];
 $sex=$_GET["sems"];

 $dept=$_GET["dept"];
$qry = mssql_query("select CAST(websitename as text) as websitename,
CAST(user_name as text) as user_name,CAST(password as text) as password,
CAST(databasename as text) as databasename
from [cg2015].[dbo].[whatismyip]"); 
$row = mssql_fetch_assoc($qry); 
 $websitename=$row['websitename'];
 $user_name=$row['user_name'];
 $password=$row['password'];
 $databasename=$row['databasename'];
 


error_reporting(E_ALL);
  $server [1] = "DESKTOP-36RS7SA";
  $user   [1] = "sa";
  $pass   [1] = "123456";
  $db     [1] = "cg2015";
    $table    [1] = "university";
 // $server [2] = "himsbuea.org";
 // $user   [2] = "hims_bikah2015";
 // $pass   [2] = "bikah1984";
 // $db     [2] = "hims_newsite";
 // $table="courses";
  $server [2] = "$websitename";
  $user   [2] = "$user_name";
  $pass   [2] = "$password";
  $db     [2] = "$databasename";


 
  $mr1 = mysql_connect($server[1], $user[1], $pass[1], $table[1]);

  mysql_error($mr1);
mysql_select_db($db[1], $mr1);
  

  
  $mr2 = mssql_connect($server[2], $user[2], $pass[2], $table[2]);

  mssql_select_db($db[2], $mr2);
  
  

    $q2 = "DELETE  FROM [cg2015].[dbo].[historic] where db1='$db1'  and levels='$levels' and departmet='$dept'and sex='$sex'	";
    $r2 = mysql_query($q2, $mr2);
 
	
    // Copy
	
	
    $q2 = "SELECT * FROM [cg2015].[dbo].[historic] where db1='$db1' and levels='$levels' and departmet='$dept' and sex='$sex'";
    $r2 = mssql_query($q2, $mr1);
    
    $n2 = mssql_num_rows($r2);
    for ($x=0; $x<$n2; $x++) {
      $w2 = mssql_fetch_assoc($r2);
      $st = "";
      foreach ($w2 as $key => $val) {
        if ($st!="") $st .= ",";
        $st .= "'".mysql_real_escape_string($val)."'";
      }
  
 
	      echo $q3 = "INSERT INTO [cg2015].[dbo].[historic] VALUES ($st)";
	  
     mysql_query($q3, $mr2);
	
    }
	
	

  
  
?>