<?php  
//connect to the database 
include 'dbcs.php';


 $sql = "TRUNCATE TABLE rresit";
   
mysql_query($sql,$link) or die("Insertion Failed:" . mysql_error());





 $csvfile =$status

if ($_FILES[csv][size] > 0) { 

    //get the csv file 
    $file = $_FILES[csv][tmp_name]; 
    $handle = fopen($file,"r"); 
     
    //loop through the csv file and insert into database 
    do { 
        if ($data[0]) { 	
/********************************ADDED BY ME*****************/
		 $check="SELECT * from resit where roll='".addslashes($data[0])."' AND fname= '".addslashes($data[1])."' AND matricule= '".addslashes($data[2])."'AND sex= '".addslashes($data[5])."' AND departmet= '".addslashes($data[3])."'AND levels= '".addslashes($data[4])."' AND db1= '".addslashes($data[6])."' ";
		$ok=mysql_query($check) or die(mysql_error());		
		//check if that same product exists in that same catehory
		if(mysql_num_rows($ok)>500000){
			echo "<script>alert('WARNING! Some rows are repeat so your files will not be uploaded')</script>";
			exit;
			
			while($row=mysql_fetch_assoc($ok)){
				//get all values from the database
		    echo $roll=$row['roll'];
			$fname=$row['fname'];
			$matricule=$row['matricule'];
			$sex=$row['sex'];
			$db1=$row['db1'];$department=$row['departmet'];
			$sex=$row['sex'];
			$levels=$row['levels'];
			// $posted_qty=" ".addslashes($data[3])."";
			 $matricule=" ".addslashes($data[2])."";
			
			 $department=" ".addslashes($data[3])."";
			 
			 $levels=" ".addslashes($data[4])."";
			 $sex=" ".addslashes($data[5])."";
			 
			 $db1=" ".addslashes($data[6])."";
			//add the posted values from csv to those from the database
			$updated_qty=($row['quatity'])+($posted_qty);
			 $update_price=$posted_price;
			$update_total=$tot+$posted_total;
			//Now update the database with this values
			
			  $doit="UPDATE resit set 
			fname='".addslashes($data[1])."',
			
		    c101='".addslashes($data[7])."',
			c102='".addslashes($data[8])."',
			quatity='$updated_qty',
			total='$update_total' WHERE matricule='$matricule' and departmet='$department' and sex='$sex' and levels='$levels' and db1='$db1'
			
					
			";
			
			$done=mysql_query($doit) or die(mysql_error());
			
			if($DONE){
			echo "<script>alert('Stocks Successfully UPDATED. Thank You')</script>";
			echo 'tHANK yOU';
			}
			exit;
			}//close while loop
			
		}
		/***EXIT CONNECT**/
		
	/*******If that same product with that category is not in the db**/
		
	/*************end added by me********************/	
		
		
		
		$insert="INSERT INTO rresit (fname,matricule,departmet,levels,sex,db1,c101) VALUES 
                ( 
                   '".addslashes($data[0])."', 
                    '".addslashes($data[1])."',
					'".addslashes($data[2])."', 
                    '".addslashes($data[3])."', 
					'".addslashes($data[4])."', 
                    '".addslashes($data[5])."',
					'".addslashes($data[6])."'
                    
                    
                ) 
            ";

			
           $run=mysql_query($insert) or die(mysql_error()); 
			
        } 
    } while ($data = fgetcsv($handle,1000000,",","'")); 
    // 

    //redirect 
    echo "success"; die(mysql_error()); 

} 

?> 
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml"> 
<head> 
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" /> 
<title>Import a CSV File with PHP & MySQL</title> 
</head> 
<body> 

<div class="upload">
<h1 >Upload An Excel File Only</h1><br />
<P style="margin:0px; padding:0px">
Points to note before uplaod<br />
1. Make sure that Excel file is the format <span style='color:#f00'>.CSV </span> only<br />
2. No item in the new file should be available in stocks else your file will not upload<br />
</P>
<?php if (isset($_GET['success'])) { echo "<b>Your file has been imported.</b><br><br>"; } //generic success notice ?> 
<form action="" method="post" enctype="multipart/form-data" name="form1" id="form1"> <br />
Choose your file: <br /> 
<input name="csv" type="file" id="csv" /> 
<input type="submit" name="Submit" value="Upload" /> 
</form> 

</div>
</body> 
</html>









