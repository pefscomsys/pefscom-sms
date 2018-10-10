<?php
include '../dbcs.php';
?>
<html>
<head></head>
<body>

<?php
$name=$_GET["name"];
$databasetable = "YOUR_TABLE";

/************************ YOUR DATABASE CONNECTION END HERE  ****************************/


set_include_path(get_include_path() . PATH_SEPARATOR . 'Classes/');
include 'PHPExcel/IOFactory.php';

// This is the file path to be uploaded.
$inputFileName = "../note/$name"; 

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
$userMobile7 = trim($allDataInSheet[$i]["H"]);


 $query = "SELECT CAST(fname as text) as coursecode FROM [cg2015].[dbo].[resit] WHERE fname = '".$userName."' and matricule = '".$userMobile."' and sex = '".$userMobile2."' 
 and levels = '".$userMobile3."' 
 and departmet = '".$userMobile4."' and c101 = '".$userMobile5."'and c102 = '".$userMobile6."'and db1 = '".$userMobile7."'



";
$sql = mssql_query($query);
$recResult = mssql_fetch_array($sql);
 echo $existName = $recResult["coursecode"];
if($existName=="") {
$insertTable= mssql_query("insert into [cg2015].[dbo].[YOUR_TABLE] (coursecode, matricule,semester,levels,department,ca,exam,acc) 
values('".$userName."', '".$userMobile."', '".$userMobile2."', '".$userMobile3."', '".$userMobile4."', '".$userMobile5."', '".$userMobile6."', '".$userMobile7."');");
$insertTables="insert into [cg2015].[dbo].[resit] 
(fname,matricule,sex,levels,departmet,c101,c102,db1)
(SELECT [coursecode]
      ,[matricule]
      ,[semester]
      ,[levels]
      ,[department]
      ,[ca]
      ,[exam],acc
  FROM [cg2015].[dbo].[YOUR_TABLE]
  )";
  
  mssql_query($insertTables);
$insertTablest="delete from  [cg2015].[dbo].[YOUR_TABLE] ";

 mssql_query($insertTablest);
  
  
  
  
 $msg = 'Record has been added. <div style="Padding:20px 0 0 0;"><a href="">Go Back to tutorial</a></div>';
} else {
 $msg2 = 'Record already exist. <div style="Padding:20px 0 0 0;"><a href="">Go Back to tutorial</a></div>';

}
}
if(empty($msg)){
	
echo "<script>alert('This Ca has been recorded Please!');</script>";
	echo $msg2;
 echo  $statusf="<meta http-equiv='refresh' content='0; url=../nst.php?name=$name1'>";
}elseif($msg>''){
	
echo "<script>alert('upload  Successful!');</script>";

 echo  $statusf="<meta http-equiv='refresh' content='0; url=../nst.php?name=$name1'>";
}
 

?>
<body>
</html>