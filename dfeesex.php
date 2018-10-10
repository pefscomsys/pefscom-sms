<?php
include 'dbcs.php';
$DB_TBLName = "historic"; //mssql Table Name
$filename = "fees";         //File Name
/*******YOU DO NOT NEED TO EDIT ANYTHING BELOW THIS LINE*******/
//create mssql connection

$qry = mssql_query("select  CAST(year  as text) as total
from rushss where roll='1' "); 
$row = mssql_fetch_assoc($qry); 
 $take=$row['total'];
 $sql = "Select CAST(matricule as text) as matricule 
 
 ,CAST(student_name as text) as student_name    
   ,CAST([levels] as text) as levelss
   ,CAST(expected_amount as text) as expected_amount
  ,CAST(amount_paid as text) as amount_paid
   ,CAST(balance as text) as balance
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 from $DB_TBLName where oldb='$take' order by levels";
?>
<?php
//select database
//execute query
$result = @mssql_query($sql,$link)
    or die("Couldn't execute query:<br>");
$file_ending = "xls";
 
//header info for browser
header("Content-Type: application/xls");
header("Content-Disposition: attachment; filename=$filename.xls");
header("Pragma: no-cache");
header("Expires: 0");
 
/*******Start of Formatting for Excel*******/
//define separator (defines columns in excel & tabs in word)
$sep = "\t"; //tabbed character
 
//start of printing column names as names of mssql fields
for ($i = 0; $i < mssql_num_fields($result); $i++) {
echo mssql_field_name($result,$i) . "\t";
}
print("\n");
//end of printing column names
 
//start while loop to get data
    while($row = mssql_fetch_row($result))
    {
        $schema_insert = "";
        for($j=0; $j<mssql_num_fields($result);$j++)
        {
            if(!isset($row[$j]))
                $schema_insert .= "NULL".$sep;
            elseif ($row[$j] != "")
                $schema_insert .= "$row[$j]".$sep;
            else
                $schema_insert .= "".$sep;
        }
        $schema_insert = str_replace($sep."$", "", $schema_insert);
 $schema_insert = preg_replace("/\r\n|\n\r|\n|\r/", " ", $schema_insert);
        $schema_insert .= "\t";
        print(trim($schema_insert));
        print "\n";
    }
?>

