<html>
<head>

  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css"><style type="text/css"> body {size:A4 Landscape;
        margin: 40px;
        padding: 0;
        font: 25pt;
    }
    * {
        box-sizing: border-box;
        -moz-box-sizing: border-box;
    }
    .page {
        width: 1450px;
        min-height: 29.7cm;
        padding: 2cm;
        margin: 1cm auto;
        background: white;
    }
    .subpage {
        padding: 1cm;
        border: 5px black solid;
        height: 237mm;
        outline: 2cm #000 solid;
    }
    
    @page {
        size: A4 landscape;
        margin: 0;
    }
    @media print {
        .page {
            margin: 0;
            border: initial;
            border-radius: initial;
            width: initial;
            min-height: initial;
            box-shadow: initial;
            background: initial;
            page-break-after: always;
        }
    }
.ExcelTableFormationCol {
                 
                  text-align: center;
                  font-family: Arial Narrow;
                  font-size: 14px;
                }

.ExcelTableFormationRow {
                  background-color: WHEAT;
                  text-align: center;
              font-family: Calibri;
              font-size: 16px;
              height: 20px;
            }

#LastRow td {
          border-bottom-width: 0px;
        }

.LastCol {
       border-right-width: 0px;
     }
cursor{
position: absolute;
      top: 8px;
      right: -5px;
      background: #000;
      width: 5px;
      height: 5px;
      border: 1px solid #fff;
      border-right: 0px;
      border-bottom: 0px;

}
     #ExcelCursorOuter {
      position: relative;
     }

     #ExcelCursor {
      position: absolute;
      top: 8px;
      right: -5px;
      background: #000;
      width: 5px;
      height: 5px;
      border: 1px solid #fff;
      border-right: 0px;
      border-bottom: 0px;
     }


table.gridtable {
	font-family: verdana,arial,sans-serif;
	font-size:11px;
	color:#333333;
	border-width: 1px;
	border-color: #666666;
	border-collapse: collapse;
}
table.gridtable td {
	border-width: 1px;
	padding: 8px;
	border-style: solid;
	border-color: #666666;
	background-color: #dedede;
}
table.gridtable td {
	border-width: 1px;
	padding: 8px;
	border-style: solid;
	border-color: #666666;
	background-color: #ffffff;
}

input{border-radius:0px; border: 0;
    box-shadow: none; /* outline:#fff;background:#fff;border-bottom:1px solid #efefef;}
</style>
</head>
<body>  
<?php
include 'dbcs.php';
?>
							

				
					
			
		
		
		
		
		
		
	
	
	
	
	     <?php

	 $queryg="select CAST(levels as text) as from1  from [cg2015].[dbo].[levels] ";
$resultg=mssql_query($queryg);
		 while ($row = mssql_fetch_array($resultg)) {
			 $levels=$row["from1"];
?>

	
	
	
		
	     <?php

	 $querygg="select CAST(sems as text) as from1  from [cg2015].[dbo].[semester] where sems<'3'";
$resultgg=mssql_query($querygg);
		 while ($row = mssql_fetch_array($resultgg)) {
			 $semester=$row["from1"];
?>
	
	<?php
	
	
	$school=$_GET["school"];$dept=$_GET["dept"];$names=$_GET["names"];
$qry = mssql_query("select count(*) as total
from [cg2015].[dbo].[subject] where  id='$school'  and year1='$levels' and year2='$semester'  and department='$names' "); 
$row = mssql_fetch_assoc($qry); 
 $scs=$row['total'];
 if(empty($scs)){
 ?>
	<?php 
 }elseif($scs>''){
	 ?>			
				
		
					
						
		<div class="page" STYLE="MARGIN-TOP:-75PX;">
		
		
		
		
		<?php
		require "bin.php";
		
		?>
		
		<DIV STYLE='float:left;width:750px; height:25px;margin-top:10px;font-size:19px;'>Level: <?php echo $levels;?>, Semester: <?php echo $semester;?> </div>
              <table id="mytable" class="table table-bordred table-striped" style='with:400px;'>
              

                   
		<thead class="active" style='margin-top:15px;'>
                   
                    <th style='color:#1188aa;width:80px;background:#ccc;'>Course<br>
					code</th>
                   <th style='color:#1188aa;width:300px;background:#ccc;'>Course Description</th>
                      <th style='color:#1188aa;width:150px;background:#ccc;'>Department</th>
                      <th style='color:#1188aa;width:70px;background:#ccc;'>Level</th>
                      <th style='color:#1188aa;width:70px;background:#ccc;'>Credit<br>
					  Value</th>
                      
                      <th  style='color:#1188aa;width:70px;background:#ccc;'> Status</th>
                      <th style='color:#1188aa;background:#ccc;'>Semester</th>
                   </thead>
    <tbody>
	
	
	
	
		<?php 
 }
 ?>
	
	
    <?php
	$school=$_GET["school"];$dept=$_GET["dept"];$names=$_GET["names"];
	 $query="select CAST(db1 as text) as from1,CAST(subject as text) as from2,CAST(department as text) as gpa,
	 
	 
	 CAST(year1 as text) as year1,CAST(year2 as text) as year2,
	 CAST(ids as text) as ids,
	 CAST(id as text) as id,	 CAST([status] as text) as status,
	 CAST(extra as text) as extra from [cg2015].[dbo].[subject] where  id='$school'  and year1='$levels' and year2='$semester'  and department='$names'";
$result=mssql_query($query);
		 while ($row = mssql_fetch_array($result)) {
?>

    <tr>
    <td><?php echo $ko=$row["from2"];?></td>
    <td><?php echo $dd=$row["from1"];?></td>
    <td><?php echo $kc=$row["gpa"];?></td>
    <td><?php echo $kk=$row["year1"];?></td>
    <td><?php echo $kk=$row["extra"];?></td>
    <td><?php echo $kk=$row["status"];?></td>
    <td><?php echo $kd=$row["year2"];
	
$qry = mssql_query("select CAST(school as text) as total
from [cg2015].[dbo].[school] where ids='$kd' "); 
$row = mssql_fetch_assoc($qry); 
 $school=$row['total'];
	
	
	
	?></td>
       </tr>
    
    	
<?php }?>
   
        
    </tbody>
	
</table>
</div>
    	
<?php }?>

<?php }?>

            
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