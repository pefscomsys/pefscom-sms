<html>
<head>

  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>
<body>  
<?php
include 'dbcs.php';
?>
							

				
					
					
					
					
					
				
        <div class="table-responsive">
<span><h2><?php echo $page=$_GET['dd'];$koss=$_GET['kos'];?></h2>
                
              <table id="mytable" class="table table-bordred table-striped">
                   
                   <thead class="active">
                   
                   <th><input type="checkbox" id="checkall" /></th>
                   <th>Course Code</th><th>Level</th>
                    <th>Location</th> <th>Department</th>
                      <th>Delete</th>
                      
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
	 $query="select CAST(fname as text) as department,CAST(level as text) as code,CAST(department as text) as fax,location from [cg2015].[dbo].[tcourses] where 
	 user_name='$koss'   ";
$result=mssql_query($query);
		 while ($row = mssql_fetch_array($result)) {
?>
<form method='POST' action=''>
    <tr>
    <td><input type="checkbox" class="checkthis" /></td>
    <td>
        <input class="form-control" name='fname' type="text"value='<?php echo $fname=$row["department"];?>' placeholder="Course Code"></td>
		
    <td><input class="form-control" name='level' type="text"value='<?php echo $level=$row["code"];?>' placeholder="levels">
	
	
	
	
	
	
	</td>
	<td><input class="form-control" name='location' type="text"value='<?php echo $ko=$row["location"];?>' placeholder="location"></td><td>
	<input class="form-control" name='fax' type="text"value='<?php echo $dept=$row["fax"];?>' placeholder="Irshad">
	</td>
    <td>
     <a href="deletesxtsls.php?dd=<?php echo $dept;?>&kos=<?php echo $fname;?>&ko=<?php echo $ko;?>&code=<?php echo $koss;?>&level=<?php echo $code=$row['code'];?>"><p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-delete" style='padding:5px;font-family:times;'>Delete</span></button></a></p></td>
   

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