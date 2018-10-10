<html>
<head>

  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>
<body>  
<?php
include 'dbcs.php';
?>
							

				
					
					
					
					
					
				
        <div class="table-responsive">

                
              <table id="mytable" class="table table-bordred table-striped">
                   
                   <thead class="active">
                   
                   <th>Matricule</th>
                   <th>Courses</th>
                    <th>Course Description</th>
                      <th>Level</th>
                      <th>Academic Year</th>
                      <th>Semester</th>
                       <th>Ca</th>  <th>Exam</th>
                   </thead>
    <tbody> 
		 
<?php
$table = "marks";
$i = 0;
if(!empty($_POST["submit"]))
{
 foreach($_POST["matricule"] as $roll)
 {

  
  mssql_query("update [cg2015].[dbo].[resit] 
  SET
              
               
               
               c101='".$_POST['c101'][$i]."',
			   
               c102='".$_POST['c102'][$i]."',
			   
			   
               db1='".$_POST['db1'][$i]."',
			   
               sex='".$_POST['sex'][$i]."',
			   
			   
               matricule='".$_POST['matricule'][$i]."',
			   
               fname='".$_POST['fname'][$i]."'
			   
			   
			   
			   
			   
			   
			   
			   
			   
			   
			   
			   
			   where matricule='".$_POST['matricules'][$i]."' and 
               fname='".$_POST['fnames'][$i]."'  and sex='".$_POST['sexs'][$i]."' and levels='".$_POST['levelss'][$i]."'
			   and c101='".$_POST['c101s'][$i]."'
			   
			      and c102='".$_POST['c102s'][$i]."'
               ");
  $i++;

               

  }
  
echo "<script>alert('Datae Base Updated Successful!'); </script>";
 }
 

?>
    <?php
	$mat=$_GET["mat"];
$levels=$_GET["levels"];$dept=$_GET["dept"];$db1=$_GET["db1"];
 $sql = "SELECT CAST(fname as nvarchar(400)) as fname,

CAST(matricule as nvarchar(400)) as matricule,
CAST(departmet as text) as departmet,

CAST(levels as text) as levels,

CAST(c101 as float) as c101,
CAST(c102 as float) as c102,
CAST(db1 as text) as db1,
CAST(sex as text) as sex

 FROM [cg2015].[dbo].[resit] where levels='$levels' and db1='$db1' and departmet='$dept' and matricule='$mat'  order by matricule  ASC";
$results = mssql_query($sql);$t=1;
while($row = mssql_fetch_assoc($results))
{
 $id_array[] = $row["roll"];
 $fname_array[] = $row["fname"];
 $matricule_array[] = $row["matricule"];
 $departmet_array[] = $row["departmet"];
 $levels_array[] = $row["levels"];
  $c101_array[] = $row["c101"];
$c102_array[] = $row["c102"];
$db1_array[] = $row["db1"];
$sex_array[] = $row["sex"];
 }
 echo "<form action='#' method='post'>
       ";
for($i=0;$i<count($id_array);$i++)
{
 $roll = $id_array[$i];
 $fname = $fname_array[$i];
 $matricule = $matricule_array[$i];
 $departmet = $departmet_array[$i];
 $levels = $levels_array[$i];
$c101 = $c101_array[$i];
$c102 = $c102_array[$i];
$db1 = $db1_array[$i];
$sex = $sex_array[$i];

 $mxc11= $c102 ;
 

?>
    <tr>
    <td>
    <input type="hidden" class="form-control" name='matricules[]' id="exampleInputEmail1" value="<?php echo $matricule;?>"  placeholder="New Department"  size='8'>
    <input type="text" class="form-control" name='matricule[]' id="exampleInputEmail1" value="<?php echo $matricule;?>"  placeholder="New Department"  size='8'></td>
    <td>
	
    <input type="hidden" class="form-control" name='fnames[]' id="exampleInputEmail1" value="<?php echo $fname;?>"  placeholder="New Department" size='8'>
    <input type="text" class="form-control" name='fname[]' id="exampleInputEmail1" value="<?php echo $fname;?>"  placeholder="New Department"  size='8'></td>
	
	
    <td>
    <input type="text" class="form-control" name='fnamex' id="exampleInputEmail1" value="<?php 
 $qrys = "select CAST(db1  as text) as total 
from [cg2015].[dbo].[subject] where   subject='$fname' and year1='$levels' and acc='$db1' and department='$departmet'   ";$qry= mssql_query($qrys);
$row = mssql_fetch_assoc($qry); 
 echo $gv=$row['total']; ?>"  placeholder="New Department"  size='25'></td>
	
   <td>
    <input type="hidden" class="form-control" name='levelss[]' id="exampleInputEmail1" value="<?php echo $levels;?>"  placeholder="ses"  size='5'>
    <input type="text" class="form-control" name='levels[]' id="exampleInputEmail1" value="<?php echo $levels;?>"  placeholder="ses"  size='5'></td>
   <td>
    <input type="hidden" class="form-control" name='db1s[]' id="exampleInputEmail1" value="<?php echo $db1;?>"  placeholder="ses"  size='5'>
    <input type="text" class="form-control" name='db1[]' id="exampleInputEmail1" value="<?php echo $db1;?>"  placeholder="ses"  size='5'></td>
    <td>
    <input type="hidden" class="form-control" name='sexs[]' id="exampleInputEmail1" value="<?php echo $sex;?>"  placeholder="ses"  size='5'>
    <input type="text" class="form-control" name='sex[]' id="exampleInputEmail1" value="<?php echo $sex;?>"  placeholder="ses"  size='5'></td>
	
	
    <td>
    <input type="hidden" class="form-control" name='c101s[]' id="exampleInputEmail1" value="<?php echo $c101;?>"  placeholder="New Department" size='5'>
    <input type="text" class="form-control" name='c101[]' id="exampleInputEmail1" value="<?php echo $c101;?>"  placeholder="New Department" size='5'></td>
	
	
    <td>
    <input type="hidden" class="form-control" name='c102s[]' id="exampleInputEmail1" value="<?php echo $c102;?>"  placeholder="New Department" size='5'>
    <input type="text" class="form-control" name='c102[]' id="exampleInputEmail1" value="<?php echo $c102;?>"  placeholder="New Department" size='5'></td>
	
	
	
	
	
	
	
    <td><?php echo $dd=$row["department"];?></td>
    <td><?php echo $ko=$row["code"];?></td>
   </tr>
    
    	
<?php }?>
   
    
    </tbody>
        
</table>

  <button type="submit" name='submit'value='submit'class="btn btn-default">Save</button></form>
            
        </div>
	</div>
</div>