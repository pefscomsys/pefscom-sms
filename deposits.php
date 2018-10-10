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
                   <th>Full Names</th>
                    <th>User Name</th> <th>Password</th><th>location</th>
                      <th>Save</th>
                      
                   </thead>
    <tbody> <?php
  $full_name=$_POST["full_name"];
  $user_name=$_POST["user_name"];
    $full_names=$_POST["full_names"];
  $user_names=$_POST["user_names"];
 $pass=$_POST["pass"];
   $fax=$_POST["fax"];
   $level=$_POST["level"];
  $sha1pass = PwdHash($pass);
 
  if(empty($pass)){
	  
	  
	  
  }elseif($pass>''){
	  
 $query="update [cg2015].[dbo].[users] set full_name='$full_name' ,user_name='$user_name',pwd='$sha1pass',fax='$fax' where
 full_name='$full_names' and user_name='$user_names' and [user_level]='$level'

";




mssql_query($query);





echo "<script>alert('Record Updated'); </script>";

 echo "<meta http-equiv='refresh' content='0; url=tablesdus.php?levels=$level'>";
	  
	  
	  
	  
  }
  
  ?>
    <?php
	$level=$_GET['level'];$code=$_GET['ko'];$page=$_GET['dd'];
	 $query="select CAST(full_name as text) as department,CAST(user_name as text) as code,CAST(fax as text) as fax from [cg2015].[dbo].[users] where user_level='$level'  and full_name='$page' ";
$result=mssql_query($query);
		 while ($row = mssql_fetch_array($result)) {
?>
<form method='POST' action=''>
    <tr>
    <td><input type="checkbox" class="checkthis" /></td>
    <td>
        <input class="form-control" name='full_name' type="text"value='<?php echo $dd=$row["department"];?>' placeholder="Full Names"></td>
		
    <td><input class="form-control" name='user_name' type="text"value='<?php echo $ko=$row["code"];?>' placeholder="User Name">
	<input class="form-control" name='level' type="hidden"value='<?php echo $level;?>' placeholder="Irshad">
		<input class="form-control" name='full_names' type="hidden"value='<?php echo $dd;?>' placeholder="Irshad">
	
	<input class="form-control" name='user_names' type="hidden"value='<?php echo $ko;?>' placeholder="Irshad">
	
	
	
	
	
	
	
	</td>
	<td><input class="form-control" name='pass' type="text"value='' placeholder="password"></td><td>
	<input class="form-control" name='fax' type="text"value='<?php echo $ko=$row["fax"];?>' placeholder="Irshad">
	</td>
    <td>
        <button type="submit" class="btn btn-default">Save</button></td>

    </tr>
    </form>
    	
<?php }?>
   
    
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