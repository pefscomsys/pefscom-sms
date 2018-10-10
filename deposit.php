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
                   <th>Page Title</th>
                    <th>Menu #</th>
                      <th>Save</th>
                      
                   </thead>
    <tbody> <?php
  $page=$_POST["page"];
  $code=$_POST["code"];
  
  
  $codes=$_POST["codes"];
  
  $pages=$_POST["pages"];
  $category=$_POST["category"];
  $level=$_POST["level"];
  if(empty($page)){
	  
	  
	  
  }elseif($pages>''){
	  
 $query="update [cg2015].[dbo].[menu] set page='$page' ,code='$code' where code='$codes' and page='$pages' and category='$category' and [level]='$level'

";





mssql_query($query);


	  


echo "<script>alert('Record Updated'); </script>";

 echo "<meta http-equiv='refresh' content='0; url=tablesdu.php?levels=$level'>";
	  
	  
	  
	  
  }
  
  ?>
    <?php
	$level=$_GET['level'];$code=$_GET['ko'];$page=$_GET['dd'];
	 $query="select CAST(page as text) as department,CAST(code as text) as code from [cg2015].[dbo].[menu] where level='$level' and  category='$code' and page='$page' ";
$result=mssql_query($query);
		 while ($row = mssql_fetch_array($result)) {
?>
<form method='POST' action=''>
    <tr>
    <td><input type="checkbox" class="checkthis" /></td>
    <td>
        <input class="form-control" name='page' type="text"value='<?php echo $dd=$row["department"];?>' placeholder="Irshad"></td>
    <td><input class="form-control" name='code' type="text"value='<?php echo $ko=$row["code"];?>' placeholder="Irshad">
	<input class="form-control" name='level' type="hidden"value='<?php echo $level;?>' placeholder="Irshad">
		<input class="form-control" name='codes' type="hidden"value='<?php echo $ko=$row["code"];?>' placeholder="Irshad">
	
	<input class="form-control" name='pages' type="hidden"value='<?php echo $page;?>' placeholder="Irshad">
	
	
	
	<input class="form-control" name='category' type="hidden"value='<?php echo $code;?>' placeholder="Irshad">
	
	
	
	
	
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