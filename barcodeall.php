<?php
include 'dbcs.php';
$file =file('barcodes.txt'); # read file into array
$count = count($file);
if($count > 0) # file is not empty
{
    $milestone_query = "INSERT into barcode (barcode,matricule
	
	) values";
    $i = 1;
    foreach($file as $row)
    {
        $milestone = explode('	',$row);
        $milestone_query .= "('$milestone[0]',  '$milestone[1]'
		
		
		
		
		
		
		
		
		)";
        $milestone_query .= $i < $count ? ',':'';
        $i++;
    }
    mysql_query($milestone_query) or die(mysql_error());
	echo "success frankline";
}
?>