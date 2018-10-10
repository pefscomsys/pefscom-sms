<?php

include 'conn.php';
$rs = mysql_query("select courses.fname, resit.fname,resit.matricule,resit.departmet,resit.db1, resit.sex, resit.c101,resit.c102
 from courses,resit where resit.matricule=coures.matricule and resit.levels='200'and courses.levels='200'  order by fname ASC");
$result = array();
while($row = mysql_fetch_object($rs)){
	array_push($result, $row);
}

echo json_encode($result);

?>