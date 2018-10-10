<?php
/**
Simple rooms Create, Read, Update and Delete (CRUD) using php mysql by asif18.com, for more tutorials visit: http://www.asif18.com
for this tutorial visit: http://asif18.com/20/php/rooms-insert-update-using-php-mysql-delete-rooms-records-using-checkboxes-in-php/
**/
include '../dbc.php'; // include the database and server connection file
$query 	= mysql_query("SELECT * FROM `resit` where matricule='".$_GET['update']."' and db1='".$_GET['db']."' order by sex,fname"); // Select from the table
$count 	= mysql_num_rows($query); // Get the rows count

// Multipe insert case
if(isset($_POST['Submit1'])) {
	$_POST = array_map("ucwords", $_POST);
	$amt = $_POST['total'];
	$date=date('d-m-Y');
	$month=date('m');
	$year=date('Y');
	@session_start();
	$name=$_SESSION['user_name'];
	if($amt > 0) {
		$del=mysql_query("DELETE  FROM ostocks WHERE date='$date' ") or die(mysql_error());
		$qry = "INSERT INTO ostocks(product,price,qty,date,month,year,agent,froms) VALUES "; // Split the mysql_query
		for($i=1; $i<=$amt; $i++) {
		$qry .= "('".$_POST["product$i"]."', '".$_POST["price$i"]."', '".$_POST["quatity$i"]."','$date','$month','$year','$name','bar'), "; // loop the mysql_query values to avoid more server loding time
		}
		$qry 	= substr($qry, 0, strlen($qry)-2);
		$insert = mysql_query($qry); // Execute the mysql_query
		echo "<script>alert('SUCCESSFUL IN STOCK FORM CREATION')</script>";
	}
	// Redirect for each cases
	if($insert) {
		echo "<script>alert('SUCCESSFUL IN STOCK FORM CREATION')</script>";
	}
	else {
		$msg = '<script type="text/javascript">alert("Server Error, Kindly Try Again");</script>';
	}
}

// rooms delete case using checkboxes
if(isset($_POST['SubmitDelete'])) {
	$_POST = array_map("ucwords", $_POST);
	$amt = $_POST['total']; // Get the total rows
	for($i=1; $i<=$amt; $i++) {
		$delete = mysql_query("DELETE FROM rooms WHERE id = '".$_POST["delete$i"]."'"); // Run the delete query inside for loop
	}

	// Redirect for each cases
	if($delete) {
		$msg = '<script type="text/javascript">window.location.href = "?view";</script>';
	}
	else {
		$msg = '<script type="text/javascript">alert("Server Error, Kindly Try Again");</script>';
	}
}

// rooms update case
if(isset($_POST['SubmitUpdate'])) {
	$_POST = array_map("ucwords", $_POST);
	$amt = $_POST['total']; // Get the total rows
	for($i=1; $i<=$amt; $i++) {
		$update = mysql_query("UPDATE `resit` SET `name` = '".$_POST["name$i"]."', idcard= '".$_POST["acc$i"]."',dept= '".$_POST["dept$i"]."',salary= '".$_POST["salary$i"]."' WHERE `id` = '".$_POST["id$i"]."'"); // Run the Mysql update query inside for loop
	}
	
	// Redirect for each cases
	if($update) {
		$msg = '<script type="text/javascript">window.location.href = "?update&result=updated";</script>';
	}
	else {
		$msg = '<script type="text/javascript">alert("Server Error, Kindly Try Again");</script>';
	}
}
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
<title>Simple rooms Insert, Read, Update, Delete (CRUD) using PHP, MySql by Asif18</title>
<meta name="keywords" content="rooms insert in php, rooms crud using PHP MySql, rooms insert update delete using php mysql"/>
<meta name="description" content="rooms insert update delete CRUD using PHP MySql. A simple way to insert, update and delete rooms values at a time using PHP MySql"/>
<style>
.as_wrapper{
	margin:0 auto;
	width:1000px;
	font-family:Arial;
	color:#333;
	font-size:14px;
	overflow:hidden;
	

	overflow:scroll;
	padding-bottom:30px;
}

.as_country_container{
	padding:20px;
	border:2px dashed #17A3F7;
}

.a {
	text-decoration:none;
	color:#999;
}

.a:hover {
	text-decoration:underline;
}

.a:active {
	color:#F55925;
}
.h1 a {
	text-decoration:none;
	color:#000;
}
.h1 a:hover {
	text-decoration:underline;
}
.table {
	border:2px dashed #17A3F7;
	padding:20px;
	min-width:500px;
}
.table tr td{
	padding:5px;
}
.table_view {
	border:1px solid #17A3F7;
	min-width:400px;
	border-collapse:collapse;
}
.table_view tr.heading th {
	background:#17A3F7;
	padding:5px;
	color:#FFF;
}
.table_view tr.odd {
	background:#F7F7F7;
}
.table_view tr.even {
	background:#FFF;
}
.table_view tr.odd:hover, .table_view tr.even:hover {
	background:#FEFDE0;
}
.table_view tr td {
	padding:5px;
}
.input {
	border:#CCC solid 1px;
	padding:5px;
}

.input:focus {
	border:#999 solid 1px;
	background:#FEFDE0;
	padding:5px;
}
</style>
</head>

<body>
<div class="as_wrapper">
	
	<div class="as_country_container">
	<?php
    echo $msg; // Display the result message generated in the above PHP actions,
    //Create form to get number of rows to be generated to insert 
    ?>
        <form action="<?php $_SERVER['PHP_SELF']; ?>" method="get" name="amtForm">
        <table align="center">
        <tr>
           
            <td><input type="hidden" name="amt" class="input" <?php if(isset($_GET["amt"])) { ?> value="<?php echo $_GET["amt"]; ?>" <?php } ?> /></td>
           
            <td style="background:#1188aa; padding:10px 10px">| <a class="a" href="?update=<?php echo $_GET['matric'];?>&db=<?php echo $_GET['ayear'];?>" style="color:#fff">Edit all my staff details</a></td>
        </tr>
        </table>
        <br />
        </form>
        <?php
        // Get the amount to be generated
        if(isset($_GET['amt'])) {
			if($_GET['amt'] > 0) {
        ?>
            <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
            <table align="center" class="table" style="width:500px">
            <tr>
                <td align="center">Sno</td>
                <td align="center">Name</td>
                <td align="center">Department</td>
                 <td align="center">ID Card Num</td>
                  <td align="center">Tel</td>
                   <td align="center">Salary</td>
            </tr>
            <?php
                // Loop the rows and inputs according to the amount
                for($i=1; $i<=$_GET['amt']; $i++) {
					$lsd=mysql_query("SELECT * roll");
					while($r=mysql_fetch_assoc($lsd)){
						$l=$r['num']+1;
					}
            ?>
            <tr>
                <td><?php echo $i; ?></td>
                <td><input type="text" name="room<?php echo $i; ?>" />
                 <td><input type="text" name="room<?php echo $i; ?>" />
                  <td><input type="text" name="room<?php echo $i; ?>" />
                   <td><input type="text" name="room<?php echo $i; ?>" />
                    <td><input type="text" name="room<?php echo $i; ?>" />
               
               
               
            </tr>
            <?php
                }
            ?>
            <tr>
                <td colspan="4" align="center">
                <input type="hidden" name="total" value="<?php echo $i-1; ?>" /> <?php // Post the total rows count value ?>
                <input type="submit" name="submit" value="Add" /></td>
            </tr>
            </table>
            </form>
        <?php 
			}
			else {
			?>
            <table align="center">
            <tr>
                <td align="center">Enter greater than '0'</td>
			</tr>
            </table>
            <?php
			}
        }
        // Case for view and delete the data
        elseif(isset($_GET['view'])) {
			if($count <= 0) {
			?>
            <table align="center">
            <tr>
                <td>No records found!</td>
			</tr>
            </table>
            <?php
			} 
			else {
            $i = 0;
        ?>
            <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
            <table align="center" class="table_view" style="width:960px">
          <tr>
                <td align="center">Sno</td>
                <td align="center">Name</td>
                <td align="center">Position</td>
                 <td align="center">ID Card Num</td>
                  <td align="center">Tel</td>
                   <td align="center">Salary</td>
            </tr>
            <?php
                while($row = mysql_fetch_array($query))
                {
                    $i = $i + 1;
            ?>
            <tr class="<?php if($i%2 == 0) { echo "odd"; } else{ echo "even"; } ?>" style="text-align:center">
                <td><input type="checkbox" name="delete<?php echo $i; ?>" value="<?php echo $row['id']; ?>" /></td>
                <td><?php echo $i; ?></td>
                <td>Room <?php echo $row['num']; ?></td>
                <td><?php echo $row['cateogry']; ?></td>
                
                <td><?php echo $row['floor']; ?></td>
            </tr>
            <?php
                }
            ?>
            <tr>
                <td colspan="5" align="center" style="width:500px">
                <input type="hidden" name="total" value="<?php echo $i; ?>" /> <?php // Post the total rows count value ?>
                <input type="submit" name="SubmitDelete" value="Delete" /></td>
            </tr>
            </table>
            </form>
		<?php
			}
        }
        // Case for view and update the rows
        elseif(isset($_GET['update'])) {
			if($count <= 0) {
			?>
            <table align="center">
            <tr>
                <td>No records found!</td>
			</tr>
            </table>
            <?php
			} 
			else {
            $i = 0;
        	?>
            <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
            <table align="center" style="width:100%">
            <tr style="background:#1188aa; color:#fff">
                <td >Sno</td>
                <td >Code</td>
                <td >Ca/40</td>
                 <td >Exams/60</td>
                   <td >Level</td>
                                   <td align="center">Dept</td>

            </tr>
            <?php
                // Display the rows in inputs that can be editable
                while($row = mysql_fetch_array($query))	{
                    $i = $i + 1;
            ?>
            <tr>
                <td><?php echo $i; ?><input type="hidden" name="id<?php echo $i; ?>" value="<?php echo $row['roll']; ?>" /></td>
                <td><input type="text" name="name<?php echo $i; ?>" value="<?php echo $row['fname']; ?>" class="input" style="width:100px" readonly /></td>
            <td><input type="text" name="ca<?php echo $i; ?>" value="<?php echo $row['c101']; ?>" class="input"  style="width:50px"/></td>
                    <td><input type="text" name="exams<?php echo $i; ?>" value="<?php echo $row['c102']; ?>" class="input"  style="width:50px"/></td>  
                
                 <td><input type="text" name="acc<?php echo $i; ?>" value="<?php echo $row['sex']; ?>" class="input" style="width:60px" readonly/></td>
                 
                  <td><input type="text" name="salary<?php echo $i; ?>" value="<?php echo $row['db1']; ?>" class="input" readonly/></td>
                  
               
            </tr>
            <?php
                }
            ?>
            <tr>
                <td colspan="5" align="center">
                <input type="hidden" name="total" value="<?php echo $i; ?>" /> <?php // Post the total rows count value ?>
                <input type="submit" name="SubmitUpdate" value="Update" /> </td>
            </tr>
            </table>
            </form>
        <?php
        	}
		}
        ?>
	</div>
</div>
</body>
</html>