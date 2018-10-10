<?
  error_reporting(E_ALL);
  $server [1] = "localhost";
  $user   [1] = "";
  $pass   [1] = "";
  $db     [1] = "amusic";
  
  $server [2] = "other_host";
  $user   [2] = "";
  $pass   [2] = "";
  $db     [2] = "amusic";
  
  $mr1 = mysql_connect($server[1], $user[1], $pass[1]);
  echo mysql_error($mr1);
  mysql_select_db($db[1], $mr1);
  echo mysql_error($mr1);
  echo $mr1;
  
  $mr2 = mysql_connect($server[2], $user[2], $pass[2]);
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
    $q2 = "DELETE FROM $w[0]";
    $r2 = mysql_query($q2, $mr2);
    echo mysql_error($mr2);
    // Copy
    $q2 = "SELECT * FROM $w[0]";
    $r2 = mysql_query($q2, $mr1);
    echo mysql_error($mr1);
    $n2 = mysql_numrows($r2);
    for ($x=0; $x<$n2; $x++) {
      $w2 = mysql_fetch_assoc($r2);
      $st = "";
      foreach ($w2 as $key => $val) {
        if ($st != "") $st .= ",";
        $st .= "'".mysql_real_escape_string($val)."'";
      }
      $q3 = "INSERT INTO $w[0] VALUES($st)";
      echo "$q3<br>";
      if ($x>50) break;
    }
  }
  print_r($fields);
?>