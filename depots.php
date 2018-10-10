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
                   
                   <th>Website</th>
                    <th style='width:80px;'>Username</th>
                      <th>Password</th>
                      <th>Data Base</th>
                      
                      <th>Action</th>
                   </thead>
    <tbody><?php
  $from1=$_POST["from1"];
  $from2=$_POST["from2"];
   $grade=$_POST["grade"];
    $ids=$_POST["ids"];
    $gpa=$_POST["gpa"];
  
  $from1s=$_POST["from1s"];
  $from2s=$_POST["from2s"];
   $grades=$_POST["grades"];
    $idss=$_POST["idss"];
    $gpas=$_POST["gpas"];
  
  if(empty($from1)){
	  
	  
	  
  }elseif($from1>''){
	  
 $query="update [cg2015].[dbo].[whatismyip] set websitename='$from1' ,user_name='$from2' ,
 password='$gpa' ,databasename='$ids' 
 
 
 
 where websitename='$from1' and user_name='$from2' and
 password='$gpa' and databasename='$ids' 
 
";





mssql_query($query);


	  



echo "<script>alert('Record Updated'); </script>";

 echo "<meta http-equiv='refresh' content='0; url=https://torguard.net/whats-my-ip.php'>";
	  
	  
	  
	  
  }
  
  ?>
    <?php
$dd=$_GET["dd"];
$ko=$_GET["ko"];
$grade=$_GET["grade"];
$id=$_GET["id"];$gpa=$_GET["gpa"];
	 $query="select CAST(websitename as text) as from1,CAST(user_name as text) as from2,CAST(password as text) as gpa,
	 
	 
	 CAST(databasename as text) as ids from [cg2015].[dbo].[whatismyip] ";
$result=mssql_query($query);
		 while ($row = mssql_fetch_array($result)) {
?>
<form method='POST' action=''>

    <tr>
    <td><input class="form-control" name='from1' type="text"value='<?php echo $dd=$row["from1"];?>' placeholder="Irshad"></td>
    <td><input class="form-control" name='from2' type="text"value='<?php echo $dd=$row["from2"];?>' placeholder="Irshad"></td>
    <td><input class="form-control" name='gpa' type="text"value='<?php echo $dd=$row["gpa"];?>' placeholder="Irshad"></td>
    <td><input class="form-control" name='ids' type="text"value='<?php echo $dd=$row["ids"];?>' placeholder="Irshad">
	<input class="form-control" name='from1s' type="hidden"value='<?php echo $dd=$row["from1"];?>' placeholder="Irshad">
	<input class="form-control" name='from2s' type="hidden"value='<?php echo $dd=$row["from2"];?>' placeholder="Irshad">
	<input class="form-control" name='idss' type="hidden"value='<?php echo $dd=$row["ids"];?>' placeholder="Irshad">
	<input class="form-control" name='gpas' type="hidden"value='<?php echo $dd=$row["gpa"];?>' placeholder="Irshad">
	
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