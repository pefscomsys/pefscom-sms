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
                   
                   <th>School</th>
                      <th>Contact</th>
                      <th>address</th>
                      <th>Website</th><th>Email</th>
					  <th>Action</th>
                   </thead>
    <tbody><?php
  $department=$_POST["department"];
  $depc=$_POST["code"];
  $email=$_POST["email"];
  $web=$_POST["web"];
  
  $contact=$_POST["contact"];
  $address=$_POST["address"];
  
  
  $emails=$_POST["emails"];
  $webs=$_POST["webs"];
  
  $contacts=$_POST["contacts"];
  $addresss=$_POST["addresss"];
  
  
  
  $departments=$_POST["departments"];
  $depcs=$_POST["codes"];
  if(empty($department)){
	  
	  
	  
  }elseif($department>''){
	  
 $query="update [cg2015].[dbo].[school] set school='$department' ,code='$depc'
town='$address',email='$email',contact='$contact',website='$web'





 where code='$depcs' and school='$departments' and town='$address' and email='$emails' and  contact='$contacts' and  website='$webs'

";





mssql_query($query);


	  



echo "<script>alert('Record Updated'); </script>";

 echo "<meta http-equiv='refresh' content='0; url=tablesdgs.php'>";
	  
	  
	  
	  
  }
  
  ?>
    <?php
	 $query="select CAST(school as text) as department,CAST(code as text) as code

,CAST(town as text) as town
,CAST(website as text) as website


,CAST(email as text) as email

,CAST(contact as text) as contact

	 from [cg2015].[dbo].[school] ";
$result=mssql_query($query);
		 while ($row = mssql_fetch_array($result)) {
?>

   
<form method='POST' action=''>
    
    <tr>
    <td>
        <input class="form-control" name='department' type="text"value='<?php echo $dd=$row["department"];?>' placeholder="Irshad"></td>
    <td><input class="form-control" name='code' type="hidden"value='<?php echo $ko=$row["code"];?>' placeholder="Irshad">
	<input class="form-control" name='codes' type="hidden"value='<?php echo $ko=$row["code"];?>' placeholder="Irshad">
	
	<input class="form-control" name='contact' type="text"value='<?php echo $ko=$row["contact"];?>' placeholder="Irshad"></td><td>
	<input class="form-control" name='web' type="text"value='<?php echo $ko=$row["website"];?>' placeholder="Irshad"></td><td>
	<input class="form-control" name='email' type="text"value='<?php echo $ko=$row["email"];?>' placeholder="Irshad"></td><td>
	
	<input class="form-control" name='address' type="text"value='<?php echo $ko=$row["town"];?>' placeholder="Irshad">
	<input class="form-control" name='contacts' type="hidden"value='<?php echo $ko=$row["contact"];?>' placeholder="Irshad">
	<input class="form-control" name='webs' type="hidden"value='<?php echo $ko=$row["webite"];?>' placeholder="Irshad">
	<input class="form-control" name='emails' type="hidden"value='<?php echo $ko=$row["email"];?>' placeholder="Irshad">
	
	<input class="form-control" name='addresss' type="hidden"value='<?php echo $ko=$row["town"];?>' placeholder="Irshad">
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