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
                   
                   <th><input type="checkbox" id="checkall" /></th>      <th>Faculty</th>
                   <th>Department</th>  <th>Levels</th>
                    <th>Ca</th>
                      <th>Exam</th>
                      
                       <th>Delete</th>
                   </thead>
    <tbody>
    <?php
	 $query="select ca as ca,exam as exam,levels,ids,deptf from [cg2015].[dbo].[resultslip] ";
$result=mssql_query($query);
		 while ($row = mssql_fetch_array($result)) {
			 $facid=$row["deptf"]; $deptfs=$row["ids"];$levels=$row["levels"];$ca=$row["ca"];$exam=$row["exam"];
?>

    <tr>
    <td><input type="checkbox" class="checkthis" /></td>
    <td><?php 
	
$qry = mssql_query("select CAST(facultydesc as text) as total
from [cg2015].[dbo].[faculty] where facultyid='$facid' "); 
$row = mssql_fetch_assoc($qry); 
echo  $schoolid=$row['total'];
	
	?></td>
    <td><?php 
$qry = mssql_query("select CAST(classs as text) as total
from [cg2015].[dbo].[classes] where deptf='$facid'  and ids='$deptfs'"); 
$row = mssql_fetch_assoc($qry); 
echo  $schoolids=$row['total'];?></td> <td><?php 
echo  $levels;?></td><td><?php 
echo  $ca;?></td><td><?php 
echo  $exam;?></td>
     <td><a href="deletetsx.php?ca=<?php echo $ca;?>&exam=<?php echo $exam;?>&levels=<?php echo $levels;?>&facid=<?php echo $facid;?>&ids=<?php echo $deptfs;?>"  onclick='return confirm("Are you sure you want to delete  <?php echo $dd;?> Department");'><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></a></p></td>
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