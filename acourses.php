<?php
include 'dbcs.php';
$file =file('coursess.txt'); # read file into array
$count = count($file);
if($count > 0) # file is not empty
{
    $milestone_query = "INSERT into subject ( db1 ,subject,department,year2,year2,extra,ps,id,credit,acc,status
	
	) values";
    $i = 1;
    foreach($file as $row)
    {
        $milestone = explode('	',$row);
        $milestone_query .= "('$milestone[0]',  '$milestone[1]',  '$milestone[2]' , '$milestone[3]', '$milestone[4]', '$milestone[5]', '$milestone[6]'
		
		
		', '$milestone[7]', '$milestone[8]', '$milestone[9]'
		
		
		
		
		
		)";
        $milestone_query .= $i < $count ? ',':'';
        $i++;
    }
    mysql_query($milestone_query) or die(mysql_error());
	echo "success frankline";
}
?>