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
                   <th>Faculty/School</th>
                    <th>Constant</th>  <th>Confered</th>  <th>Proposed</th>
                      <th>Action</th>
                      
                   </thead>
    <tbody><?php
  $department=$_POST["department"];
  $depc=$_POST["code"];
  
  
  $departments=$_POST["departments"];
  $propose=$_POST["propose"];  $confered=$_POST["confered"];  $proposes=$_POST["propose"];  $confereds=$_POST["confered"];
  $depcs=$_POST["codes"];
  if(empty($department)){
	  
	  
	  
  }elseif($department>''){
	  
 $query="update [cg2015].[dbo].[faculty] set facultydesc='$department',confered='$confered',propose='$propose' ,code='$depc' where code='$depcs' and facultydesc='$departments'
 and confered='$confereds'    and propose='$proposes'

";





mssql_query($query);


	  



echo "<script>alert('Record Updated'); </script>";

 echo "<meta http-equiv='refresh' content='0; url=tablesdg.php'>";
	  
	  
	  
	  
  }
  
  ?>
    <?php
	 $query="select CAST(facultydesc as text) as department,CAST(code as text) as code

,CAST(propose as text) as propose

,CAST(confered as text) as confered




	 from [cg2015].[dbo].[faculty] ";
$result=mssql_query($query);
		 while ($row = mssql_fetch_array($result)) {
?>

<form method='POST' action=''>
    
    <tr>
    <td>
        <input class="form-control" name='department' type="text"value='<?php echo $dd=$row["department"];?>' placeholder="Irshad"></td>
    <td><input class="form-control" name='code' type="text"value='<?php echo $ko=$row["code"];?>' placeholder="Irshad">
	
	
	</td>
	
	<td>
	<input class="form-control" name='propose' type="text"value='<?php echo $ko=$row["propose"];?>' placeholder="propose">
	
	</td>
	
	<td>
	<input class="form-control" name='confered' type="text"value='<?php echo $ko=$row["confered"];?>' placeholder="confered">
	
	
	
	
	
	
	
	
	
	<input class="form-control" name='codes' type="hidden"value='<?php echo $ko=$row["code"];?>' placeholder="Irshad">
	<input class="form-control" name='proposes' type="hidden"value='<?php echo $ko=$row["propose"];?>' placeholder="propose">
	
	<input class="form-control" name='confereds' type="hidden"value='<?php echo $ko=$row["confered"];?>' placeholder="confered">
	
	<input class="form-control" name='departments' type="hidden"value='<?php echo $ko=$row["department"];?>' placeholder="Irshad">
	
	
    </td>  <td>
        <button type="submit" class="btn btn-default">Save</button></td>
    </tr>
<?php }?>
   </ForM>
    
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