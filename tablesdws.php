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
                   
                   <th style='color:#1188aa;'>Course Description</th>
                    <th style='color:#1188aa;'>Course<br>
					code</th>
                      <th style='color:#1188aa;'>Credit<br>
					  Value</th>
                      <th style='color:#1188aa;'>Department</th>
                      
                      <th  style='color:#1188aa;'> ID</th>
                       <th  style='color:#1188aa;'>Del</th>
                   </thead>
    <tbody>
    <?php
	 $query="select CAST(db1 as text) as from1,CAST(subject as text) as from2,CAST(department as text) as gpa,
	 
	 
	 CAST(year1 as text) as year1,CAST(year2 as text) as year2,
	 CAST(ids as text) as ids,
	 CAST(id as text) as id,
	 CAST(extra as text) as extra from [cg2015].[dbo].[subject] ";
$result=mssql_query($query);
		 while ($row = mssql_fetch_array($result)) {
?>

    <tr>
    <td><?php echo $dd=$row["from1"];?></td>
    <td><?php echo $ko=$row["from2"];?></td>
    <td><?php echo $kk=$row["extra"];?></td>
    <td><?php echo $kc=$row["gpa"];?></td>
    <td><?php echo $kd=$row["ids"];
	
$qry = mssql_query("select CAST(school as text) as total
from [cg2015].[dbo].[school] where ids='$kd' "); 
$row = mssql_fetch_assoc($qry); 
 $school=$row['total'];
	
	
	
	?></td>
     <td><a href="deletesx4s.php?dd=<?php echo $dd;?>&ko=<?php echo $ko;?>&grade=<?php echo $kk;?>&id=<?php echo $kd;?>&gpa=<?php echo $kc;?>"  onclick='return confirm("Are you sure you want to delete this range <?php echo $dd;?>-<?php echo $ko;?> for <?php echo $school;?>");'><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></a></p></td>
    </tr>
    
    	
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