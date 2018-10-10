<?php


include '../dbc.php';



?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
<title>NSMS</title>
 <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="screen">
     
        <link rel="stylesheet" type="text/css" href="css/DT_bootstrap.css">
		
        <link href="modal/css1/bootstrap1.css" rel="stylesheet" type="text/css" media="screen">
     <style>
	 table,body{
		 text-align:left;
		 font-family:Arial, Helvetica, sans-serif;
	 }
	 </style>
</head>
<script src="modal/js1/jquery1.js" type="text/javascript"></script>
<script src="modal/js1/bootstrap1.js" type="text/javascript"></script>



<script src="js/jquery.js" type="text/javascript"></script>
<script src="js/bootstrap.js" type="text/javascript"></script>

<script type="text/javascript" charset="utf-8" language="javascript" src="js/jquery.dataTables.js"></script>
<script type="text/javascript" charset="utf-8" language="javascript" src="js/DT_bootstrap.js"></script>
 <script type="text/javascript" src="js/pop-up.js"></script>
<body>
<div class="as_wrapper">
	
                        <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
                            <div class="alert alert-info">
                                <button type="button" class="close" data-dismiss="alert">&times;</button>
                                <strong><i class="icon-user icon-large"></i>&nbsp;Data Table</strong>
                            </div>
                            <thead>
                                <tr>
                                 <th style="text-align:center;" >S/N</th>
                               
                                    <th style="text-align:center;">Names</th>
                                    <th style="text-align:center;">Department</th>
                                  
                                    <th style="text-align:center;">Matricule</th>
                                                       
									<th style="text-align:center;">Action</th>
                                </tr>
                            </thead>
                            <tbody>
								<?php
								$month13=date('m');
								 $month=$month13;
								$monthw="0".$month;
								
								$result= mysql_query("select * from courses group by matricule order by fname,departmet" ) or die (mysql_error());
								$i=1;
								while ($row= mysql_fetch_array ($result) ){
								$id=$row['id'];
								#D9EDF7
								?>
								<tr>
                                
             <td style="text-align:center; word-break:break-all; width:10px;"> <?php echo $i++; ?></td>

								
								<td style="text-align:center; word-break:break-all; width:470px;"> <?php echo $row ['fname']; ?></td>
								<td style="text-align:center; word-break:break-all; width:300px;"> <?php echo $row ['departmet']; ?></td>
							
								<td style="text-align:center; word-break:break-all; width:150px;"> <?php echo $row ['matricule']; ?></td>

								<td style="text-align:center; width:350px;">
				<a href=javascript:popcontact('edit.php?yourown=<?php echo $row ['roll']; ?>') class="btn btn-info"  style="color:#fff">EDIT MY COURSES </a>
                           

								</td>
									
										<!-- Modal -->
								<div id="delete<?php  echo $id;?>" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
								<div class="modal-header">
								<h3 id="myModalLabel">Delete</h3>
								</div>
								<div class="modal-body">
								<p><div class="alert alert-danger">Are you Sure you want Delete?</p>
								</div>
								<hr>
								<div class="modal-footer">
								<button class="btn btn-inverse" data-dismiss="modal" aria-hidden="true">No</button>
								<a href="delete.php<?php echo '?student_id='.$id; ?>" class="btn btn-danger">Yes</a>
								</div>
								</div>
								</div>
								</tr>

								<!-- Modal Bigger Image -->
								<div id="<?php  echo $id;?>" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
								<div class="modal-header">

								<h3 id="myModalLabel"><b><?php echo $row['fname']." ".$row['lname']; ?></b></h3>
								</div>
								<div class="modal-body">
								<?php if($row['photo'] != ""): ?>
								<img src="album/<?php echo $row['photo']; ?>" style="width:390px; border-radius:9px; border:5px solid #d0d0d0; margin-left: 63px; height:387px;">
								<?php else: ?>
								<img src="album/default.png" style="width:390px; border-radius:9px; border:5px solid #d0d0d0; margin-left: 63px; height:387px;">
								<?php endif; ?>
								</div>
								<div class="modal-footer">
								<button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
								</div>
								</div>

								<?php } ?>
                            </tbody>
                        </table>



          
        </div>
        </div>
        </div>
    
</body>
</html>

<?php
	
?>