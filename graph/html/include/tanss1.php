<?php
ini_set('max_execution_time', 300000); //300 seconds = 5 minutes
include '../../dbcs.php';
?>
<?php
define('IN_CB', true);

if (version_compare(phpversion(), '5.0.0', '>=') !== true) {
    exit('Sorry, but you have to run this script with PHP5... You currently have the version <b>' . phpversion() . '</b>.');
}

if (!function_exists('imagecreate')) {
    exit('Sorry, make sure you have the GD extension installed before running this script.');
}

include_once('function.php');

// FileName & Extension
$department=$_POST['class'];

$levels=$_POST['levels'];
$system_temp_array = explode('/', $_SERVER['PHP_SELF']);
$filename = $system_temp_array[count($system_temp_array) - 1];
$system_temp_array2 = explode('.', $filename);
$availableBarcodes = listBarcodes();
$barcodeName = findValueFromKey($availableBarcodes, $filename);
$code = $system_temp_array2[0];

// Check if the code is valid
if (file_exists('config' . DIRECTORY_SEPARATOR . $code . '.php')) {
    include_once('config' . DIRECTORY_SEPARATOR . $code . '.php');
}



$rolls=$_GET["mats"];$rx=$_GET["rx"];$dept=$_GET["dept"];
?><?php
$queryss="select CAST(matricule as text) as matricule,  

CAST(fname as text) as fname,  

CAST(levels as nvarchar(400)) as levels,CAST(c120 as text) as c120, 
CAST(c110 as text) as c110, CAST(cxx2 as text) as cxx2, 
CAST(departmet as text) as departmet, 
CAST(sex as text) as sex, CAST(db1 as nvarchar(400)) as db1

 from [cg2015].[dbo].[courses] where matricule='$rolls'  and departmet='$dept'    order by db1,levels ";
$resulsts=mssql_query($queryss);$c=1;
		 while ($row = mssql_fetch_array($resulsts)) {
		 $fname=$row["fname"]; $id=$row["c110"];
		 
		 
		 $c116=$row["c120"]; $levels=$row["levels"];$rx=$row["db1"];
		 
		 $cv=$c++;
 $query3="update [cg2015].[dbo].[courses] set c120='$cv'
 where matricule='$rolls' and departmet='$dept' and levels='$levels' and db1='$rx'   ";







mssql_query ($query3) or die ('could not updated:'.mssql_error());
		 
		 
		 ?><?php } ?>
<html>
<head><TITLE><?php echo $fname;?> page- <?php echo $c116;?></TITLE>
 <link rel="stylesheet" href="test.css" 
type="text/css">
<style>
body {size:A4 Landscape;
        margin: 5px;
        padding: 0;
        font: 25pt;
    }
    * {
        box-sizing: border-box;
        -moz-box-sizing: border-box;
    }
    .page {
        width: 1000px;
        min-height: 77.7cm;
        padding: 2cm;
        margin: 1cm auto;
        background: white;
    }
    .subpage {
        padding: 1cm;
        border: 5px black solid;
        height: 627mm;
        outline: 2cm #000 solid;
    }
    
    @page {
        size: A4 Landscape ;
        margin: 0;
    }
    @media print {
        .page {
            margin: 0;
            border: initial;
            border-radius: initial;
            width: initial;
            min-height: initial;
            box-shadow: initial;
            background: initial;
            page-break-after: always;
        }
    }



th.rotate {
  /* Something you can count on */
  height: 150px;
  white-space: nowrap;
  padding:1px;
}

th.rotate > div {
	font-weight:normal;
  transform: 
    /* Magic Numbers */
    translate(2px, 51px)
    /* 45 is really 360 - 45 */
    rotate(270deg);font-family:calibri;
  width: 24px;
}
th.rotate > div > span {
  border-bottom: 1px solid #000;
margin-left:-40px;
  margin-top:-10px;font-family:calibri;
}
</style>
</head>

<body  onload="window.print();" style='font-family:calibri;'> <div style='margin-left:70px;'><?php 
  $querys="select CAST(matricule as text) as matricule,  

CAST(fname as text) as fname,  

CAST(levels as text) as levels,
CAST(c110 as text) as c110, CAST(cxx2 as text) as cxx2, 
CAST(departmet as text) as departmet, 
CAST(sex as text) as sex, CAST(db1 as nvarchar(400)) as db1

 from [cg2015].[dbo].[courses] where matricule='$rolls'  and db1='$rx'  and departmet='$dept' and c110='$id' order by db1 ASC";
$results=mssql_query($querys);
		 while ($row = mssql_fetch_array($results)) {
  $ms=$row['matricule'];
  
    $fg=$row['departmet'];

$qrya= mssql_query("select  count(*)  as total
from [cg2015].[dbo].[courses] where matricule='$ms' "); 
$row = mssql_fetch_assoc($qrya); 

 $x=$row['total'];
 
 
 
$qry = mssql_query("select  CAST(school as text) as school, CAST(town as text) as town, CAST(code as text) as code,
 CAST(contact as text) as contact, CAST(website as text) as website, CAST(email as text) as email
from [cg2015].[dbo].[school] where ids>'' "); 
$row = mssql_fetch_assoc($qry); 




 $school=$row['school'];  $code=$row['code']; $address=$row['town']; 
 $website=$row['website'];  $email=$row['email']; $contact=$row['contact']; 
 
 
$qrya= mssql_query("select  CAST(ids as text)  as total,CAST([level] as text)  as tt
from [cg2015].[dbo].[classes] where classs='$fg' "); 
$row = mssql_fetch_assoc($qrya); 

 $c115=$row['total'];
 
 $cx=$row['tt'];
 $qryas= mssql_query("select  CAST(facultydesc as text)  as total
from [cg2015].[dbo].[faculty] where facultyid='$c110' "); 
$row = mssql_fetch_assoc($qryas); 

 $faculty=$row['total']; // contains the faculty
 
 
 
 
 
 
 $opps=$x;
		 ?><?php 

$resultg=mssql_query("select CAST(matricule as text) as matricule,  

CAST(fname as text) as fname,  

CAST(levels as nvarchar(400)) as levels,CAST(c116 as text) as c116,CAST(c120 as float) as c120,
CAST(c110 as text) as c110, CAST(cxx2 as text) as cxx2,  CAST(cxx1 as text) as cxx1,
CAST(departmet as text) as departmet, 
CAST(sex as text) as sex, CAST(db1 as nvarchar(400)) as db1 from [cg2015].[dbo].[courses]
 where  matricule='$ms'   order by db1,levels,c120 ASC");
		 while ($row = mssql_fetch_array($resultg)) {
		 
		$c116=$row['c120'];
	
		 ?>
 <div class="page"  >
			 <?php require 'transtop.php';
			 ?>
			 	 <?php require 'body1.php';
			 ?>
			 
			 
			 	 <?php require 'subject.php';
			 ?>
			 
			 
			 
			 
			 
			 
			   </div>
			   
			   
			   
			   
			   </b>
			   </b>
			   </b>
			   
			   
			  </div> 
			 
			 
			 

			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 

 
			 
	</div>

<?php
		 }
		
		 ?>
			 		 
					 
								 
					
					 	 
			  </div> 
			 
			 
			  </div> 
				 
			  </div> 
			 
			 
			  </div> 
				 
			  </div> 
			 
			 
			  </div> 
				 
			  </div> 
			 
			 
			  </div> 
				 
					 
			  </div> 
			 
			 
			  </div> 
				 
	</div>		 
			  
					 </div>	 
					 
					 
					 
				
					 
					 
					 
	
					 
					 	 
					<?php }
			 
			 ?> 
					 
					 
					 
					 
					 
					 
					 
					 
					 
					 
					 
					 
					 
					 
					 