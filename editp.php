<?php

include 'dbcs.php';
page_protect();

$pps=$_GET['rollx'];

 $notes=$_SESSION['user_name'];

$user_name=$notes;




 $ip=@$_SERVER['REMOTE_ADDR'];
 
 ?><?php


$query="select * from users where full_name='$notes'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>
<?php  $ids=$row['fax'];


?>
<?php } ?><!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="w2ui-1.4.2.min.css" />
    <script src="jquery.min.js"></script>
    <script type="text/javascript" src="w2ui-1.4.2.min.js"></script>
</head>
<body>

    <div class="titles" ><h1 style="float:left;margin-top:20px; margin-left:10px;text-shadow:1px 0px 1px #fff;color:#50a3a2;"><?PHP 
$qry = mysql_query("select  tm as total
from page where id='$ids' and cn='45'  "); 
$row = mysql_fetch_assoc($qry); 
 $img=$row['total'];
 ?></h1><br>
	<div style="float:left;color:#000; margin-top:35px; margin-left:-370px;font-size:13px;">
 </div>
		
		</DIV>
		
		</DIV>
		
		
		
		
		
		
		
		
		
		
		</div>

<?php
$first_name=$_POST['first_name'];
$middle_name=$_POST['middle_name'];
$last_name=$_POST['last_name'];

$fname="$first_name $middle_name $last_name";

$recid=$_POST['recid'];

$mattt=$_POST['mattt'];
$month=$_POST['month'];
$part=$_POST['part'];
$day=$_POST['day'];

$year=$_POST['year'];

$dbirth="$day/$month/$year";

$place=$_POST['place'];

$nation=$_POST['nation'];
$sex=$_POST['sex'];

$religion=$_POST['religion'];
$qualification=$_POST['qualification'];
$hndqualification=$_POST['hndqualification'];
$address=$_POST['address'];
$city=$_POST['city'];

$idcard=$_POST['idcard'];
$farm=$_POST['farm'];
$category=$_POST['category'];

$levels=$_POST['levels'];


$contact1=$_POST['contact1'];
$contact2=$_POST['contact2'];


$guardian1=$_POST['gaurdian1'];
$guardian2=$_POST['guardian2'];

$hndschool=$_POST['hndschool'];
$hschool=$_POST['hschool'];
$hgrade=$_POST['hgrade'];

$oschool=$_POST['oschool'];
$ograde=$_POST['ograde'];
$codets=$_POST['codets'];

$motived=$_POST['motive'];

$division=$_POST['division'];
$state=$_POST['state'];

$father=$_POST['father'];
$mother=$_POST['mother'];

$matriculex=$_POST['matriculex'];

$matricule=$_POST['matricule'];

$mxc111=$statusfbiomxc11;




















$recid=$_POST['recid'];

$codes=$statusfbiomxc11;
$country=$_POST['country'];
$barcode=$_POST['barcode'];
$y=date('y');
$month=date('m');
$day=date('j');
$Y=date('Y');
$levels=$_POST['levels'];
$mxc11UI=$levels;
$statusfbiomxc11UI=$apps;
if($matricule!=''){
$query2="update admission  set  
first_name='$first_name',
middle_name='$middle_name',
last_name='$last_name',

fname='$fname',

month='$month',

day='$day',

year='$year',

dbirth='$dbirth',
place='$place',
nation='$nation',
sex='$sex',

religion='$religion',
qualification='$qualification',

address='$address',
city='$city',
farm='$farm',
category='$category',



division='$division',
state='$state',

codes='$codets',
contact1='$contact1',
contact2='$contact2',


extra='$levels',
idcard='$idcard',

father='$father',
mother='$mother',

oschool='$oschool',
ograde='$ograde',

hschool='$hschool',
hgrade='$hgrade',

guardian1='$guardian1',
guardian2='$guardian2',

barcode='$barcode',
HND='$hndschool',
hndqualification='$hndqualification',

country='$country' Where recid='$recid'";
mysql_query ($query2) or die ('could not updated:'.mysql_error());




$qry = mysql_query("select barcode as total
from barcode where  matricule='$matricule'"); 
$row = mysql_fetch_assoc($qry); 
 $fcc=$row['total'];

  $mxc11=$fcc;
if(empty($mxc11)){
 $colorf1bio="insert into ";
 
 $mm=",matricule='$matricule'";
}
elseif($mxc11>'' ){


 $colorf1bio="update ";
 $mm="where recid='$recid'";

}

$query2e=" $colorf1bio barcode  set barcode='$barcode',extra='1' $mm"; 


mysql_query ($query2e) or die ('could not updated:'.mysql_error());









echo "<script>alert('Record $Created Successfully!'); </script>";
 echo  $statusf="<meta http-equiv='refresh' content='0; url=uprofile.php?usr_name=$mats'>";
  exit;
 
}

 
?>



















<form method="post" action="editp.php">
<?php



$qry = mysql_query("select fname as total
from courses where  roll='$pps'  "); 
$row = mysql_fetch_assoc($qry); 
 $fname=$row['total']; 


$qry = mysql_query("select matricule as total
from courses where  roll='$pps'  "); 
$row = mysql_fetch_assoc($qry); 
 $mat=$row['total']; 


$qry = mysql_query("select levels as total
from courses where  roll='$pps'  "); 
$row = mysql_fetch_assoc($qry); 
 $levels=$row['total']; 


$qry = mysql_query("select departmet as total
from courses where  roll='$pps'  "); 
$row = mysql_fetch_assoc($qry); 
 $deptt=$row['total']; 


$qry = mysql_query("select db1 as total
from courses where  roll='$pps'  "); 
$row = mysql_fetch_assoc($qry); 
 $db1=$row['total']; 
 
 
 
 
 

$qry = mysql_query("select recid as total
from admission where  matricule='$mat'  "); 
$row = mysql_fetch_assoc($qry); 
 $rr=$row['total']; 
 $mxc11=$rr;
 if(empty($mxc11)){


$query2="insert into admission  set  

fname='$fname',


matricule='$mat',
codes='$deptt',

extra='$levels' ";
mysql_query ($query2) or die ('could not updated:'.mysql_error());
 
echo  $dd="matricule='$mat'";
 }
elseif($mxc11>'' ){
$dd="recid='$rr'";
}
 
 
 
 
$query="select * from admission where  $dd ";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>
	<div style="float:left;margin-top:20px; margin-left:10px; font-size:28px;">Update Admission Profile (<?php echo $row["fname"];?>)
  </div>

<div id="form" style="width: 1300px; border:0px;">
    <div class="w2ui-page page-0">
        <div style="width: 580px; float: left; margin-right: 0px;">
            <div style="padding: 3px; font-weight: bold; color: #777;">General- information</div>
            <div class="w2ui-group" style="height: auto;">
                <div class="w2ui-field w2ui-span4">
                    <label>First Name:</label>
                    <div>
					
					
                        <input name="recid" type="hidden" maxlength="100" value="<?php echo $row["recid"];?>"style="width: 100%" size="350px">
                  
                        <input name="first_name" type="text" maxlength="100" value="<?php echo $row["first_name"];?>"style="width: 100%" size="350px">
                    </div>
                </div>
				
				<div class="w2ui-field w2ui-span4">
                    <label>Middle Name:</label>
                    <div>
                        <input name="middle_name" type="text" maxlength="100"value="<?php echo $row["middle_name"];?>" style="width: 100%">
                    </div>
				</div>
				
				
				
				
                <div class="w2ui-field w2ui-span4">
                    <label>Last Name:</label>
                    <div>
                        <input name="last_name" type="text" maxlength="100"value="<?php echo $row["last_name"];?>" style="width: 100%">
                    </div>
                </div>
				
				
				 <div class="w2ui-field w2ui-span4">
                    <label>Date of Birth:</label>
                    <div>
                        <input name="month" type="text" maxlength="100"  value="<?php echo $row["month"];?>"style="width:30%" placeholder="mm">
						
						
						
                        <input name="day" type="text" maxlength="100"value="<?php echo $row["day"];?>" style="width:30%" placeholder="dd">
						
                        <input name="year" type="text" maxlength="100" value="<?php echo $row["year"];?>"style="width:30%" placeholder="YY">
                    </div>
                </div>
				 <div class="w2ui-field w2ui-span4">
                    <label>Sex:</label>
                    <div>
					<input name="sex" type="text" maxlength="100"value="<?php echo $row["sex"];?>" style="width:30%" placeholder="sex">
								
				
				     </div>
                </div>
				
				
				
				
				
				
				
			
				
                <div class="w2ui-field w2ui-span4">
                    <label>Place of Birth:</label>
                    <div>
                        <input name="place" type="text"value="<?php echo $row["place"];?>" maxlength="100" style="width: 100%">
                    </div>
                </div>
				
                <div class="w2ui-field w2ui-span4">
                    <label>Nationality:</label>
                    <div>
                        <input name="nation" type="text" value="<?php echo $row["nation"];?>"maxlength="100" style="width: 100%">
                    </div>
                </div>
				
				   <div class="w2ui-field w2ui-span4">
                    <label>Barcode:</label>
                    <div>
                        <input name="barcode" type="text" value="<?php echo $row["barcode"];?>"maxlength="100" style="width: 100%">
                    </div>
                </div>
				
					   <div class="w2ui-field w2ui-span4">
                    <label>Department:</label>
                    <div>
                        <input name="codets" type="text" value="<?php echo $row["codes"];?>"maxlength="100" style="width: 100%">
                    </div>
                </div>
				
				
                <div class="w2ui-field w2ui-span4">
                    <label>Diploma Obtained</label>
                    <div>
                        <input name="religion" type="text"value="<?php echo $row["religion"];?>" maxlength="100" style="width: 100%">
                    </div>
                </div>
				        <div class="w2ui-field w2ui-span4">
                    <label>HND Grade Obtained</label>
                    <div>
                        <input name="hndqualification" type="text"value="<?php echo $row["hndqualification"];?>" maxlength="100" style="width: 100%">
                    </div>
                </div>
				
				 <div class="w2ui-field w2ui-span4">
                    <label>Region of origin</label>
                    <div>
                        <input name="category" type="text" value="<?php echo $row["category"];?>"maxlength="100" style="width: 80%">
                    </div>
                </div>
				
				
					 <div class="w2ui-field w2ui-span4">
                    <label>HND School Attended</label>
                    <div>
                        <input name="hndschool" type="text" value="<?php echo $row["HND"];?>"  style="width: 50%">
                    </div>
                </div>
				
				
					
								
                <div class="w2ui-field w2ui-span4">
                    <label>Matricule</label>
                    <div>
					   <input name="matricule" type="text" value="<?php echo $row["matricule"];?>"size="50%" placeholder="Name of High School"/>
                    
                    </div>
                </div>
				
					 
                </div>
            </div>
        </div>
        <div style="width: 700px; float: right; margin-left: 0px;">
            <div style="padding: 3px; font-weight: bold; color: #777;">Address and other - information</div>
            <div class="w2ui-group" style="height: auto;">
                <div class="w2ui-field w2ui-span4">
                    <label>Address:</label>
                    <div>
                        <input name="address" type="text"value="<?php echo $row["address"];?>" maxlength="100" style="width: 100%"/>
                    </div>
                </div>
                  
                <div class="w2ui-field w2ui-span4">
                    <label>level</label>
                    <div>
                        <input name="ass" type="hidden" value="<?php echo $ids;?>" maxlength="50" size="25"/>
                        <input name="levels" type="text"value="<?php echo $row["extra"];?>" maxlength="50" size="25"/>
                    </div>
                </div>
                <div class="w2ui-field w2ui-span4">
                    <label>Id card No</label>
                    <div>
                        <input name="idcard" type="text"value="<?php echo $row["idcard"];?>" maxlength="50" size="25"/>
                    </div>
                </div>
               
                </div><div class="w2ui-field w2ui-span4">
                    <label>O-Level School Name</label>
                    <div>         
                        <input name="oschool" type="text" maxlength="100" value="<?php echo $row["oschool"];?>"size="80%" placeholder="O-level School"/>
                    </div>
                </div>
				
				 <div class="w2ui-field w2ui-span4">
                    <label>O-level subject Grade</label>
                    <div>
					
                        <input name="ograde" type="text" maxlength="100" value="<?php echo $row["ograde"];?>"size="80%" placeholder=" O-Level subject and Grade"/>
                    </div>
                </div>
                <div class="w2ui-field w2ui-span4">
                    <label>High School Name</label>
                    <div>         
                        <input name="hschool" type="text" maxlength="100" value="<?php echo $row["hschool"];?>"size="80%" placeholder="Name of High School"/>
                    </div>
                </div>
				
				 <div class="w2ui-field w2ui-span4">
                    <label>High School Grade</label>
                    <div>
					
					
                        <input name="hgrade" type="text" maxlength="100"value="<?php echo $row["hgrade"];?>" size="80%" placeholder=" High School subject and Grade"/>
                    </div>
                </div>
				
				 <div class="w2ui-field w2ui-span4">
                    <label>Contact:</label>
                    <div>
                        <input name="contact1" type="text" maxlength="100"value="<?php echo $row["contact1"];?>" style="width: 30%"/>
                        <input name="contact2" type="text" maxlength="100" value="<?php echo $row["contaact2"];?>"style="width: 30%"/>
                    </div>
                </div>
				
								 <div class="w2ui-field w2ui-span4">
                    <label>Division</label>
                    <div>
                        <input name="division" type="text"value="<?php echo $row["division"];?>" maxlength="100" style="width: 100%"/>
                    </div>
                </div>
							 <div class="w2ui-field w2ui-span4">
                    <label>State</label>
                    <div>
                        <input name="state" type="text"value="<?php echo $row["state"];?>" maxlength="100" style="width: 100%"/>
                    </div>
                </div>

				 <div class="w2ui-field w2ui-span4">
                    <label>Father's Name:</label>
                    <div>
                        <input name="father" type="text"value="<?php echo $row["father"];?>" maxlength="100" style="width: 100%"/>
                    </div>
                </div>
				<div class="w2ui-field w2ui-span4">
                    <label>Mother's Name:</label>
                    <div>
                        <input name="mother" type="text" maxlength="100"value="<?php echo $row["mother"];?>" style="width: 100%"/>
                    </div>
                </div>
			
				 <div class="w2ui-field w2ui-span4">
                    <label>Guardain</label>
                    <div>
                        <input name="guardian1" type="text" maxlength="50"value="<?php echo $row["guardian1"];?>" size="25" placeholder="Guardian Conatact"/>
						
                        <input name="guardian2" type="text" maxlength="50" size="15" value="<?php echo $row["guardian2"];?>" placeholder="Guardian Conatact2"/>
                    </div>
				
				
				
				
				
				
            </div>
        </div>
        <div style="clear: both; padding-top: 15px;">
           
                </div>
          
        </div>
    </div>
<?php } ?>
    <div class="w2ui-buttons">
        <button class="w2ui-btn" name="save" style="padding:10px 45px;">UPDATE SECTION</button>
    </div>
</div>
</form>
<script type="text/javascript">
$(function () {
    $('#form').w2form({ 
        name   : 'form',
       
        url    : 'server/post',
        fields : [
],
        actions: {
            reset: function () {
                this.clear();
            },
            save: function () {
                this.save();
            }
        }
    });
});
</script>

</body>
</html>