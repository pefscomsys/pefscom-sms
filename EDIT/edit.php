
<?php
include '../dbc.php';
$id=$_GET['yourown'];
$result= mysql_query("select * from courses where roll='$id'" ) or die (mysql_error());
								$i=1;
								while ($row= mysql_fetch_array ($result) ){
									
									?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $row['fname']; ?></title>
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

<body>
<h3 style="text-align:center; border-bottom:3px solid#f00"><?php echo $row['fname']; ?></h3>
</body>

<?php $a= mysql_query("select * from resit where matricule='".$row['matricule']."' group by levels,db1" ) or die (mysql_error());
								$i=1;
								while ($b= mysql_fetch_array ($a) ){ ?>
                                
                                    
    <a class="btn btn-primary" href="?yourown=<?php echo $_GET['yourown']; ?>&matric=<?php echo $mat=$b['matricule']; ?>&ayear=<?php echo $ayear=$b['db1']; ?>"  style="text-decoration:none; color:#fff; padding:5px 10px"> <?php echo $b['departmet']; ?> <?php echo $b['levels']; ?> </a>
                                
                                <?php } ?>
                                <div style="clear:both"></div>
</html>

<?php } ?>


<iframe src="take_restau.php?matric=<?php echo $mat; ?>&ayear=<?php echo $ayear; ?>" style="width:960px;height:1300px; border:none"></iframe>