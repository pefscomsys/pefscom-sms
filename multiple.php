	 
<?php
$table = "marks";
$i = 0;
if(!empty($_POST["submit"]))
{
 foreach($_POST["id"] as $roll)
 {

  
  mysql_query("update resit SET
               subject='".$_POST['subject'][$i]."',
			   

               classes='".$_POST['classes'][$i]."',
               first_name='".$_POST['first_name'][$i]."',
               form='".$_POST['form'][$i]."',
               coef='".$_POST['coef'][$i]."',
               teacher='".$_POST['teacher'][$i]."',
               c101='".$_POST['c101'][$i]."',
			      c102='".$_POST['c102'][$i]."',
               c105='".$_POST['c105'][$i]."',
               c104='".$_POST['c104'][$i]."',
                 c103='".$_POST['c103'][$i]."'
			   where roll='$roll'
               ");
  $i++;

               

  }

 

echo "<script>alert('Datae Base Updated Successful!'); window.location.href('marks.php');</script>";
 }
?>
<?php } ?>			<?php
	  /******************** ERROR MESSAGES*************************************************
	  This code is to show error messages 
	  **************************************************************************/
	  if(!empty($err))  {
	   echo "<div class=\"msg\" style='text-decoration:blink;color:red;'>";
	  foreach ($err as $e) {
	    echo "$e <br>";
	    }
	  echo "</div>";	
	   }
	  /******************************* END ********************************/	  
	  
	  ?>	<?php
 $sql = "SELECT * FROM resit where form='$take' and classes='$classes' and c105='$coefs' and subject='$subject' order by first_name  ASC";
$results = mysql_query($sql);
while($row = mysql_fetch_assoc($results))
{
 $id_array[] = $row["roll"];
 $first_name_array[] = $row["first_name"];
 $c101_array[] = $row["c101"];
 $c102_array[] = $row["c102"];
  $coef_array[] = $row["coef"]; 
  $teacher_array[] = $row["teacher"];
 $form_array[] = $row["form"];
 }
?>
<form name='frmUser' method='post' action=''>
 <?php      
for($i=0;$i<count($id_array);$i++)
{
 $roll = $id_array[$i];
 $first_name = $first_name_array[$i];
 $c101 = $c101_array[$i];
 $c102 = $c102_array[$i]; $c105 = $c105_array[$i];
  $coef = $coef_array[$i];
    $teacher = $teacher_array[$i];
 $form = $form_array[$i];

?>
        <div style='float:left; width:732; background:#f4f4f4; font-size:12px; color:#686868; font-family:arial; text-transform:UPPERCASE;  '>
        <div style='float:left;width:20px; '>
		<input type='hidden' name='id[]' value='<?php echo $roll;?>'>
		<input type="checkbox" name="users[]" value="<?php echo  $roll; ?>" >
		</div> 
        <div style='float:left;width:280px; '>
	<?php echo	$first_name;?>
</div>
        <div style='float:left;width:100px; '>
	
 <input type='hidden' name='first_name[]' value='<?php echo	$first_name;?>' size='8' style='BACKGROUND:#CCC;' maxlength='4'>
 <input type='hidden' name='classes[]' value='<?php echo $classes;?>' size='8' style='BACKGROUND:#CCC;' maxlength='4'>
  </div>      <div style='float:left;width:80px; '>
  
 <input type='hidden' name='subject[]' value='<?php echo $subject;?>' size='8' style='BACKGROUND:#CCC;' maxlength='4'>
 
 <input type='hidden' name='teacher[]' value='<?php echo $teacher;?>' size='8' style='BACKGROUND:#CCC;' maxlength='4'>
 <input type='hidden' name='form[]' value='<?php echo $take;?>' size='8' style='BACKGROUND:#CCC;' maxlength='4'>
 <input type='text' name='c101[]' value='<?php echo $c101;?>' size='8' style='BACKGROUND:#CCC;' maxlength='2'></div>
        <div style='float:left;width:70px; '>
 <input type='text' name='c102[]' value='<?php echo $c102;?>' size='8' style='BACKGROUND:#CCC;' maxlength='2'></div>
        <div style='float:left;width:70px; '>
		
 <input type='text' name='coef[]' value='<?php echo $coef;?>' size='8' style='BACKGROUND:#CCC;' maxlength='2'></div>
 
     <div style='float:left;width:70px; '>
		
 <input type='text' name='teacher[]' value='<?php echo $teacher;?>' size='8' style='BACKGROUND:#CCC;' >
 <input type='hidden' name='c103[]' value='' size='8' style='BACKGROUND:#CCC;' maxlength='2'>
 
 </DIV><div style='float:left;width:70px; '>
		
 <input type='text' name='c105[]' value='<?php echo $coefs;?>' size='8' style='BACKGROUND:#CCC;' maxlength='2'>

 
 </DIV>
 <div style='float:left; width:932; border-bottom:1px solid #ccc;'></div><?php
 }
 ?>
 <div style='float:left; width:400px; border-bottom:1px solid #ccc;'>
<input type="button" name="update" value="Update" onClick="setUpdateAction();" /><input type="button" name="delete" value="Delete"  onClick="setDeleteAction();" /></td>



 </DIV>


</div>

	