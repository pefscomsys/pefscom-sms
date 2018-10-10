<?php

include 'dbcs.php';
	$age=$_POST["age"];
	$yearx=$_POST["year"];
  $qry = mssql_query("select count(*) as total
from subject where  subject='$age' and acc='$yearx' "); 
$row = mssql_fetch_assoc($qry); 
echo   $savee4=$row['total'];
 
 
$i = 0;






	if(!empty($_POST["submit"]))
{

		
 foreach($_POST["id"] as $roll)
 {

 if(empty($savee4)){
	 
	 
	 $fgs=" insert into subject 
		
		(db1,subject,department,year1,year2,extra,ids,id,acc,[status])
		values (
              

              '".$_POST['course_name'][$i]."',
               '".$_POST['course_code'][$i]."',
              '".$_POST['department'][$i]."',
              '".$_POST['level'][$i]."',
               '".$_POST['semester'][$i]."',
             '".$_POST['credit_value'][$i]."',
			  '".$_POST['ids'][$i]."', '".$_POST['id'][$i]."',
			     '".$_POST['year']."',
              '".$_POST['status'][$i]."'
               )";
	 
	 
 }
 
 elseif($savee4>''){
	 
	echo  $fgs="
		update subject SET
		
              

               db1='".$_POST['course_name'][$i]."',
               subject='".$_POST['course_code'][$i]."',
               department='".$_POST['department'][$i]."',
               year1='".$_POST['level'][$i]."',
               year2='".$_POST['semester'][$i]."',
               extra='".$_POST['credit_value'][$i]."',
			      acc='".$_POST['year']."',
               status='".$_POST['status'][$i]."'
               
			   where subject = '".$_POST['subject2'][$i]."' 
			   and year1 = '".$_POST['level2'][$i]."'
	 
	 ";
	 
	 
	 
 }
   mssql_query($fgs);
  $i++;
 }
   
echo "<script>alert('Datae Base $bosp Successful!'); window.location.href('marks.php');</script>";            

  }

 



$ms=$_GET['roll'];
$dept=$_GET['dept'];
$id=$_GET['id'];
$db1=$_GET['db1'];$levels=$_GET['levels'];




//query and get all the results
$query = "SELECT  CAST (acc as text) as db1,  CAST(subject as text) as subject, 
CAST(department  as text) as department, CAST (year2 as text) as semester,
   CAST(year1 as text) as level, CAST(extra  as float) as credit_value , CAST(ID  as float) as id, CAST(ids as float) as ids,
  FROM [cg2015].[dbo].[subject]
  WHERE acc = '$db1' AND department = '$dept' AND year1 = '$levels'";



// Echo '<script> alert("Update Successful"); </script>';

 
 //echo  $statusf="<meta http-equiv='refresh' content='0; url=nmsst1.php?roll=$mats'>";
 
 


?>
		<table  cellspacing="2" cellpadding="1" width="700px;"style="float:left;width:800px;">
			<tr>
				<td style='width:400px;' >
					Course Description
				</td>
				<td>
					Course<br> Code
				</td>
				<td  style='width:40px;' >
					Level
				</td>
				<td>
					Department
				</td>
				<td style="width: 40px; ">
					Credit <br> Value
				</td>
				<td  style="width: 40px; ">
					Semester
				</td>
				<td>
					Year
				</td>
			</tr>
			<?php
			$sql = "
			SELECT  CAST (db1 as text) as course_name,  CAST(subject as text) as subject, 
CAST(department  as text) as department, CAST (year2 as text) as semester, CAST(acc as text) as date,
   CAST(year1 as text) as level, CAST(extra  as text) as credit_value , CAST([status]  as text) as statuss
  FROM [cg2015].[dbo].[subject]
  WHERE acc = '$db1' AND department = '$dept' AND year1 = '$levels'";
$results = mssql_query($sql);


while($row = mssql_fetch_array($results))
{
 $id_array[] = $row["roll"];
 $course_names[] = $row["course_name"];
 $course_codes[] = $row["subject"];
 $levelss[] =  $row["level"]; //array_push($levels, $l);
 $departments[] = $row["department"];
 $semesters[] = $row["semester"];
 $years[] = $row['date'];
 $credit_values[] = $row['credit_value'];  
 $statuss[] = $row['statuss']; 
 }
?>
<form name='frmUser' method='post' action=''>
 <?php      

for($i=0;$i<count($course_names);$i++)
{
 $roll = $id_array[$i];
 $course_name = $course_names[$i];
 $course_code = $course_codes[$i];
 $level = $levelss[$i]; 
 $department = $departments[$i];
  $semester = $semesters[$i];
    $year = $years[$i];
	$credit_value = $credit_values[$i];
	$status = $statuss[$i];
 //$form = $form_array[$i];

?>

<tr>
		<input class="hiddeb" type="hidden" name= "id[]" value="<?php echo $roll; ?>">
	<td  style="width: 20%">
		<input class="input" type="text" name= "course_name[]" value="<?php echo $course_name; ?>">
	</td>
	
	<td>
	<input class="input" type="hidden" name= "subject2[]" value="<?php echo $course_code; ?>">
		<input class="input" type="text" name= "course_code[]" value="<?php echo $course_code; ?>">
	</td>
	
	<td  style="width: 40px; ">
	<input class="input" type="hidden" name= "level2[]" value="<?php echo $level; ?>">
		<input class="input" type="text" name= "level[]" value="<?php echo $level; ?>">
	</td>
	
	<td>
	<input class="input" type="hidden" name= "department2[]" value="<?php echo $department; ?>">
		<input class="input" type="text" name= "department[]" value="<?php echo $department; ?>">
	</td>
	
	<td  style="width: 40px; ">
		<input class="input" type="text" name= "credit_value[]" value="<?php echo $credit_value; ?>">
	</td>
	
	<td  style="width: 40px; ">
		<input class="input" type="text" name= "semester[]" value="<?php echo $semester; ?>">
		
		<input class="input" type="hidden" name= "id[]" value="<?php echo $id; ?>">
		<input class="input" type="hidden" name= "ids[]" value="<?php echo $ids; ?>">
	</td>
	
	<td>
		<input class="input" type="hidden" name= "yearx" value="<?php echo $year; ?>">
		<input class="input" type="text" name= "year" value="<?php echo $year; ?>">
	</td>
	<td>
		<input class="input" type="text" name= "status[]" value="<?php echo $status; ?>">
	</td>
</tr>
<input type='hidden' name='id[]' value='<?php echo $roll;?>'>

<input type='hidden' name='age' value='<?php echo $course_code;?>'>
      

 
 </DIV>

 
 <?php
 }
 ?>
 <div style='float:left; width:400px; border-bottom:1px solid #ccc;'>
<input type="submit" name="submit" value="submit" >

 </DIV>


</div>

		<table>
	</form>
</div>