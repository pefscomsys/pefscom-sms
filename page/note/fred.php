<?php

$connect = mysql_connect('localhost','sofocol','sofocol');
if (!$connect) {
die('Could not connect to MySQL: ' . mysql_error());
}

$cid =mysql_select_db('himsbueas',$connect);
// supply your database name

define('CSV_PATH','note/');
// path where your CSV file is located

$csv_file = CSV_PATH . "a.csv"; // Name of your CSV file
$csvfile = fopen($csv_file, 'r');
$theData = fgets($csvfile);
$i = 0;
while (!feof($csvfile)) {
$csv_data[] = fgets($csvfile, 1024);
$csv_array = explode(",", $csv_data[$i]);
$insert_csv = array();
$insert_csv['roll'] = $csv_array[0];
$insert_csv['fname'] = $csv_array[1];
$insert_csv['matricule'] = $csv_array[2];
$insert_csv['departmet'] = $csv_array[3];

$insert_csv['levels'] = $csv_array[4];
$insert_csv['sex'] = $csv_array[5];
$insert_csv['db1'] = $csv_array[6];
$insert_csv['c101'] = $csv_array[7];
$insert_csv['c102'] = $csv_array[8];

$insert_csv['c103'] = $csv_array[9];

$query = "INSERT INTO resit (roll,fname,matricule,departmet,levels,sex,db1,c101,c102)
VALUES('','".$insert_csv['fname']."','".$insert_csv['matriucle']."','".$insert_csv['departmet']."','".$insert_csv['levels']."','".$insert_csv['sex']."','".$insert_csv['sex']."'
,'".$insert_csv['db1']."','".$insert_csv['c101']."','".$insert_csv['c102']."')";
$n=mysql_query($query, $connect );
$i++;
}
fclose($csvfile);

echo "File data successfully imported to database!!";
mysql_close($connect);
?>