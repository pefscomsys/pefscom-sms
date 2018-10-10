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
                   
                   <th><input type="checkbox" id="checkall" /></th>
				    <th>Faculty</th>
                   <th>Department</th>
                    <th>Fees</th>
                      <th>Application Fee</th>
					  
                      <th>Form</th>
                       <th>Student Union</th>
                       <th>Control Amount</th>
                   </thead>
    <tbody>
<?php

$i = 0;
if(!empty($_POST["submit"]))
{
 foreach($_POST["classs"] as $roll)
 {
  
  
 $mxc11UIyS=$mas;
if(empty($mxc11UIyS)){
 
   mssql_query("update [cg2015].[dbo].[classes] SET
            
			   

               area='".$_POST['area'][$i]."',
               sunion='".$_POST['sunion'][$i]."',
               
               form='".$_POST['form'][$i]."',
               fees='".$_POST['fees'][$i]."',
			   control='".$_POST['control'][$i]."',
			    dep='".$_POST['dep'][$i]."'
				 where
				classs='$roll'
				  and  deptf='".$_POST['deptf'][$i]."'  and 
              
               code='".$_POST['code'][$i]."'
			  
               ");
 
 }
  $i++;

               

  }

 

echo "<script>alert('Data Base Updated Successful!');</script>";

 echo  $statusf="<meta http-equiv='refresh' content='0; url=nmss.php?usr_name=$user_name'>";
 exit;

 } 
?><?php
		$dept=$_GET['dept'];
		$sub=$_GET['sub'];
		$levels=$_GET['levels'];
		$db1=$_GET['db1'];
		
  $sql = "SELECT CAST(classs as text) as classs,CAST(fees as text) as fees,
CAST(deptf as text) as deptf,
CAST(dep as text) as dep,
CAST(form as float) as form ,
CAST(sunion as float) as sunion,CAST(control as float) as control,
CAST(code as text) as code



 FROM [cg2015].[dbo].[classes]";
$results = mssql_query($sql);$rt=1;
while($row = mssql_fetch_assoc($results))
{
 $id_array[] = $row["roll"];
 $classs_array[] = $row["classs"];
 $fees_array[] = $row["fees"]; $deptf_array[] = $row["deptf"];$area_array[] = $row["area"];
 $dep_array[] = $row["dep"];
 $form_array[] = $row["form"];$sunion_array[] = $row["sunion"];
$code_array[] = $row["code"];$control_array[] = $row["control"];
 }
 echo "<form action='#' method='post'>
       ";
for($i=0;$i<count($id_array);$i++)
{
 $rollio = $id_array[$i];
 $classs = $classs_array[$i];
 $fees = $fees_array[$i];
 $dep = $dep_array[$i]; $deptf = $deptf_array[$i];
 $levels = $levels_array[$i];
 $form = $form_array[$i]; $area= $area_array[$i]; 
 $sunion = $sunion_array[$i];
 $code = $code_array[$i];
 $control = $control_array[$i];
?>
    <tr>
    <td><input type="checkbox" class="checkthis" /></td>
    <td>
        <input class="form-control" name='facutlty[]' type="text"value='<?php  
  $qrya = "select  CAST(facultydesc as text) as total
from [cg2015].[dbo].[faculty] where facultyid='$deptf' "; $qry=mssql_query($qrya);
$row = mssql_fetch_assoc($qry); 
 echo $fnames=$row['total'];
 
 
 ?>' placeholder="Irshad"readonly></td>
    <td><input class="form-control" name='classs[]' type="text"value='<?php echo $classs;?>' placeholder="Irshad" readonly>
	
	<input class="form-control" name='deptf[]' type="hidden"value='<?php echo $deptf;?>' placeholder="Irshad" readonly>
	
	
	
	<input class="form-control" name='code[]' type="hidden"value='<?php echo $code;?>' placeholder="Irshad" readonly>
	
	
	
	</td>
	  <td><input class="form-control" name='fees[]' type="text"value='<?php echo $fees;?>' placeholder="Irshad"readonly >
	
	
	
	
	
	
	</td>
	
	
	
	 <td><input class="form-control" name='dep[]' type="text"value='<?php echo $dep;?>' placeholder="Application Form"  readonly>
	
	
	
	
	
	
	</td>
	
	
	<td><input class="form-control" name='form[]' type="text"value='<?php echo $form;?>' placeholder="Form" readonly >
	
	
	
	
	
	
	</td>
	
		<td><input class="form-control" name='sunion[]' type="text"value='<?php echo $sunion;?>' placeholder="Student Union" readonly >
	
	
	
	
	
	
	</td>
	
	<td><input class="form-control" name='area[]' type="text"value='<?php echo $area;?>' placeholder="control" >
	
	
	
	
	
	
	</td>
	
	
	
    <td>
      </td>

    </tr>
    	
<?php }
		 
		 ?>
     <button type="submit"name='submit' value='submit'class="btn btn-default">Save</button>
    
    </tbody>
        
</table>

            
        </div>
	</div>
</div>


<div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
      <div class="modal-dialog">
    <div class="modal-content">
          <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
        <h4 class="modal-title custom_align" id="Heading">Edit Your Detail</h4>
      </div>
          <div class="modal-body">
          <div class="form-group">
        <input class="form-control " type="text" placeholder="Mohsin">
        </div>
        <div class="form-group">
        
        <input class="form-control " type="text" placeholder="Irshad">
        </div>
        <div class="form-group">
        <textarea rows="2" class="form-control" placeholder="CB 106/107 Street # 11 Wah Cantt Islamabad Pakistan"></textarea>
    
        
        </div>
      </div>
          <div class="modal-footer ">
        <button type="button" class="btn btn-warning btn-lg" style="width: 100%;"><span class="glyphicon glyphicon-ok-sign"></span> Update</button>
      </div>
        </div>
    <!-- /.modal-content --> 
  </div>
      <!-- /.modal-dialog --> 
    </div>
    
    
    
    <div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
      <div class="modal-dialog">
    <div class="modal-content">
          <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
        <h4 class="modal-title custom_align" id="Heading">Delete this entry</h4>
      </div>
          <div class="modal-body">
       
       <div class="alert alert-danger"><span class="glyphicon glyphicon-warning-sign"></span> Are you sure you want to delete this Record?</div>
       
      </div>
        <div class="modal-footer ">
        <button type="button" class="btn btn-success" ><span class="glyphicon glyphicon-ok-sign"></span> Yes</button>
        <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> No</button>
      </div>
        </div>
 
      <!-- /.modal-dialog --> 
   </div>