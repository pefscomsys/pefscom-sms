<?php include 'dbcs.php';
$mmp=$_GET['roll'];


?>

	<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="w2ui-1.4.2.min.css" />
    <script src="jquery.min.js"></script>
    <script type="text/javascript" src="w2ui-1.4.2.min.js"></script>
</head>
<body>
<?php
$search=$_POST["search"];
$flag=0;
$query="select * from employer where recid='$mmp' ";
$result=mysql_query($query);
$i=0;
 while ($row = mysql_fetch_array($result)) {

?>
<form method="post" action="editmaa.php">
<div id="form" style="width: 1300px; border:0px;">
    <div class="w2ui-page page-0">
        <div style="width: 580px; float: left; margin-right: 0px;">
            <div style="padding: 3px; font-weight: bold; color: #777;">General</div>
            <div class="w2ui-group" style="height: auto;">
                <div class="w2ui-field w2ui-span4">
                    <label>First Name:</label>
                    <div>
                        <input name="first_name" type="text" maxlength="100" value="<?php echo $row['first_name'];?>" style="width: 100%" size="350px">
                    </div>
                </div>
				
				<div class="w2ui-field w2ui-span4">
                    <label>Middle Name:</label>
                    <div>
                        <input name="middle_name" type="text" value="<?php echo $row['middle_name'];?>" maxlength="100" style="width: 100%">
                    </div>
				</div>
				
				
				
				
                <div class="w2ui-field w2ui-span4">
                    <label>Last Name:</label>
                    <div>
                        <input name="last_name" value="<?php echo $row['last_name'];?>" type="text" maxlength="100" style="width: 100%">
                    </div>
                </div>
				
				
				 <div class="w2ui-field w2ui-span4">
                    <label>Date of Birth:</label>
                    <div>
                        <input name="month" type="text" maxlength="100" value="<?php echo $row['month'];?>" style="width:30%" placeholder="mm">
						
						
						
                        <input name="day" type="text" maxlength="100" style="width:30%" value="<?php echo $row['day'];?>" placeholder="dd">
						
                        <input name="year" type="text" maxlength="100" style="width:30%" value="<?php echo $row['year'];?>"placeholder="YY">
                    </div>
                </div>
				 <div class="w2ui-field w2ui-span4">
                    <label>Sex:</label>
                    <div>
                        <input name="sex" type="text" maxlength="100" style="width:30%"  value="<?php echo $row['sex'];?>"placeholder="M or F">
						
				
				     </div>
                </div>
				
				
				
				
				
				
				
				
				
				
                <div class="w2ui-field w2ui-span4">
                    <label>Place of Birth:</label>
                    <div>
                        <input name="place" type="text" maxlength="100"value="<?php echo $row['place'];?>" style="width: 100%">
                    </div>
                </div>
				
                <div class="w2ui-field w2ui-span4">
                    <label>Nationality:</label>
                    <div>
                        <input name="nation" type="text" maxlength="100" value="<?php echo $row['nation'];?>"style="width: 100%">
                    </div>
                </div>
				
				
				
				
				
                <div class="w2ui-field w2ui-span4">
                    <label>Religion</label>
                    <div>
                        <input name="religion"  value="<?php echo $row['religion'];?>"type="text" maxlength="100" style="width: 100%">
                    </div>
                </div>
				
				 <div class="w2ui-field w2ui-span4">
                    <label>Highest Qualification:</label>
                    <div>
                        <input name="qualification" type="text" maxlength="100" value="<?php echo $row['qualification'];?>"style="width: 100%">
                    </div>
                </div>
				
				
				
				
				
				
               
                </div>
            </div>
        </div>
        <div style="width: 700px; float: right; margin-left: 0px;">
            <div style="padding: 3px; font-weight: bold; color: #777;">Address</div>
            <div class="w2ui-group" style="height: auto;">
                <div class="w2ui-field w2ui-span4">
                    <label>Address:</label>
                    <div>
                        <input name="address" type="text" value="<?php echo $row['address'];?>"maxlength="100" style="width: 100%"/>
                    </div>
                </div>
               
                <div class="w2ui-field w2ui-span4">
                    <label>Id card No</label>
                    <div>
                        <input name="city" type="text" value="<?php echo $row['city'];?>" maxlength="50" size="25"/>
                    </div>
                </div>
              
                
				 <div class="w2ui-field w2ui-span4">
                    <label>Country:</label>
                    <div>
					
                        <input name="matriculef" type="hidden" value="<?php echo $row['matricule'];?>" maxlength="100" style="width: 100%"/>
                        <input name="country" type="text"  value="<?php echo $row['country'];?>"maxlength="100" style="width: 100%"/>
                    </div>
                </div>
				
				 <div class="w2ui-field w2ui-span4">
                    <label>Contact:</label>
                    <div>
                        <input name="contact1" type="text" value="<?php echo $row['contact1'];?>"maxlength="100" style="width: 30%"/>
                        <input name="contact2" type="text" maxlength="100" value="<?php echo $row['contact2'];?>"style="width: 30%"/>
                    </div>
                </div>
				 <div class="w2ui-field w2ui-span4">
                    <label>Father's Name:</label>
                    <div>
                        <input name="father" type="text" maxlength="100" value="<?php echo $row['father'];?>"style="width: 100%"/>
                    </div>
                </div>
				<div class="w2ui-field w2ui-span4">
                    <label>Mother's Name:</label>
                    <div>
                        <input name="mother" type="text" maxlength="100"value="<?php echo $row['mother'];?>" style="width: 100%"/>
                    </div>
                </div>
			
				
				
				
				
				
				
				
            </div>
        </div>
        <div style="clear: both; padding-top: 15px;">
           
                </div>
          
        </div>
    </div>

    <div class="w2ui-buttons">
        <button class="w2ui-btn" name="save" size="250px">Update info</button>
    </div>
</div>
</form>
<?php } ?>
<script type="text/javascript">
$(function () {
    $('#form').w2form({ 
        name   : 'form',
       
        url    : 'server/post',
        fields : [
            { field: 'first_name', type: 'text', required: true },
            { field: 'last_name',  type: 'text', required: true },
            { field: 'comments',   type: 'text'},
            { field: 'address1', type: 'text', required: true },
            { field: 'address2', type: 'text' },
            { field: 'city', type: 'text', required: true },
            { field: 'state', type: 'text', required: true },
            { field: 'zip', type: 'int', required: true },
            { field: 'short_bio', type: 'text' },
            { field: 'talk_name', type: 'text', required: true },
            { field: 'description', type: 'text' }
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