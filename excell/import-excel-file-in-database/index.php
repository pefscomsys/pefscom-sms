<?php
	/*
This script is use to upload any Excel file into database.
Here, you can browse your Excel file and upload it into 
your database.

Download Link: http://www.discussdesk.com/import-excel-file-data-in-mysql-database-using-PHP.htm

Website URL: http://www.discussdesk.com
*/
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Demo - Import Excel file data in mysql database using PHP, Upload Excel file data in database</title>
<meta name="description" content="This tutorial will learn how to import excel sheet data in mysql database using php. Here, first upload an excel sheet into your server and then click to import it into database. All column of excel sheet will store into your corrosponding database table."/>
<meta name="keywords" content="import excel file data in mysql, upload ecxel file in mysql, upload data, code to import excel data in mysql database, php, Mysql, Ajax, Jquery, Javascript, download, upload, upload excel file,mysql"/>
</head>
<body>

<?php
/************************ YOUR DATABASE CONNECTION START HERE   ****************************/

define ("DB_HOST", "localhost"); // set database host
define ("DB_USER", "sofocol"); // set database user
define ("DB_PASS","sofocol"); // set database password
define ("DB_NAME","mydatabase"); // set database name

$link = mysql_connect(DB_HOST, DB_USER, DB_PASS) or die("Couldn't make connection.");
$db = mysql_select_db(DB_NAME, $link) or die("Couldn't select database");

$databasetable = "YOUR_TABLE";

/************************ YOUR DATABASE CONNECTION END HERE  ****************************/


set_include_path(get_include_path() . PATH_SEPARATOR . 'Classes/');
include 'PHPExcel/IOFactory.php';

// This is the file path to be uploaded.
$inputFileName = 'discussdesk.xlsx'; 

try {
	$objPHPExcel = PHPExcel_IOFactory::load($inputFileName);
} catch(Exception $e) {
	die('Error loading file "'.pathinfo($inputFileName,PATHINFO_BASENAME).'": '.$e->getMessage());
}


$allDataInSheet = $objPHPExcel->getActiveSheet()->toArray(null,true,true,true);
$arrayCount = count($allDataInSheet);  // Here get total count of row in that Excel sheet


for($i=2;$i<=$arrayCount;$i++){
$userName = trim($allDataInSheet[$i]["A"]);
$userMobile = trim($allDataInSheet[$i]["B"]);
$userMobile2 = trim($allDataInSheet[$i]["C"]);

$userMobile3 = trim($allDataInSheet[$i]["D"]);

$userMobile4 = trim($allDataInSheet[$i]["E"]);


$userMobile5 = trim($allDataInSheet[$i]["F"]);

$userMobile6 = trim($allDataInSheet[$i]["G"]);


echo $query = "SELECT coursecode FROM YOUR_TABLE WHERE coursecode = '".$userName."' and matricule = '".$userMobile."' and semester = '".$userMobile2."'   and levels = '".$userMobile3."' 
 and department = '".$userMobile4."' and ca = '".$userMobile5."'and exam = '".$userMobile6."'



";
$sql = mysql_query($query);
$recResult = mysql_fetch_array($sql);
$existName = $recResult["coursecode"];
if($existName=="") {
$insertTable= mysql_query("insert into YOUR_TABLE (coursecode, matricule,semester,levels,department,ca,exam) 
values('".$userName."', '".$userMobile."', '".$userMobile2."', '".$userMobile3."', '".$userMobile4."', '".$userMobile5."', '".$userMobile6."');");


$msg = 'Record has been added. <div style="Padding:20px 0 0 0;"><a href="">Go Back to tutorial</a></div>';
} else {
$msg = 'Record already exist. <div style="Padding:20px 0 0 0;"><a href="">Go Back to tutorial</a></div>';
}
}
echo "<div style='font: bold 18px arial,verdana;padding: 45px 0 0 500px;'>".$msg."</div>";
 

?>
<body>
</html>