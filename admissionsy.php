<?php

include 'dbcs.php';
$ms=$_GET['roll'];
page_protect();


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
<form method="post" action="addempstsss.php">
<div id="form" style="width: 1300px; border:0px;">
    <div class="w2ui-page page-0">
        <div style="width: 580px; float: left; margin-right: 0px;">
            <div style="padding: 3px; font-weight: bold; color: #777;">General- information</div>
            <div class="w2ui-group" style="height: auto;">
                <div class="w2ui-field w2ui-span4">
                    <label>First Name:</label>
                    <div>
                        <input name="first_name" type="text" maxlength="100" style="width: 100%" size="350px">
                    </div>
                </div>
				
				<div class="w2ui-field w2ui-span4">
                    <label>Middle Name:</label>
                    <div>
                        <input name="middle_name" type="text" maxlength="100" style="width: 100%">
                    </div>
				</div>
				
				
				
				
                <div class="w2ui-field w2ui-span4">
                    <label>Last Name:</label>
                    <div>
                        <input name="last_name" type="text" maxlength="100" style="width: 100%">
                    </div>
                </div>
				
				
				 <div class="w2ui-field w2ui-span4">
                    <label>Date of Birth:</label>
                    <div>
                        <input name="month" type="text" maxlength="100" style="width:30%" placeholder="mm">
						
						
						
                        <input name="day" type="text" maxlength="100" style="width:30%" placeholder="dd">
						
                        <input name="year" type="text" maxlength="100" style="width:30%" placeholder="YY">
                    </div>
                </div>
				 <div class="w2ui-field w2ui-span4">
                    <label>Sex:</label>
                    <div>
					<select name="sex"style="background:#ccc;" class="required"   id="select8">
               
                <option value="M">M</option>
                <option value="F">F</option>
				
				</select>
						
				
				     </div>
                </div>
				
				
				
				
				
				
				
			
				
                <div class="w2ui-field w2ui-span4">
                    <label>Place of Birth:</label>
                    <div>
                        <input name="place" type="text" maxlength="100" style="width: 100%">
                    </div>
                </div>
				
                <div class="w2ui-field w2ui-span4">
                    <label>Nationality:</label>
                    <div>
                        <input name="nation" type="text" maxlength="100" style="width: 100%">
                    </div>
                </div>
				
				
				
				
				
                <div class="w2ui-field w2ui-span4">
                    <label>Diploma Obtained</label>
                    <div>
                        <input name="religion" type="text" maxlength="100" style="width: 100%">
                    </div>
                </div>
				
				 <div class="w2ui-field w2ui-span4">
                    <label>Region of origin</label>
                    <div>
                        <input name="category" type="text" maxlength="100" style="width: 100%">
                    </div>
                </div>
				
				
					 <div class="w2ui-field w2ui-span4">
                    <label>HND School Attended</label>
                    <div>
                        <input name="hndschool" type="text" value="" maxlength="100" style="width: 100%">
                    </div>
                </div>
				
				
					 <div class="w2ui-field w2ui-span4">
                    <label>Field of Interest</label>
                    <div>
<select name="department"     style="background:#ccc;" class="required"   id="select8"         >
<?php

$rs=mysql_query("Select * from classes  where extra='$ids' order by  roll ASC",$link);
	  while($row=mysql_fetch_array($rs))
{
if($row[1]==$fees)
{
echo "<option value='$row[6]' selected>$row[5]</option>";
}
else
{
echo "<option value='$row[6]'>$row[5]</option>";
}
}
?></select>
                
                    </div>
                </div>
								
                <div class="w2ui-field w2ui-span4">
                    <label>Matricule</label>
                    <div>
                        <input name="mattt" type="text" maxlength="100" value="<?php


$query="select * from  matt where roll='1'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>
<?php $matt=$row['matt'];

echo $matt+1;
?>
<?php } ?>">
                    </div>
                </div>
				
					 <div class="w2ui-field w2ui-span4">
                    <label>Motive</label>
                    <div><select name="motive"style="background:#ccc;" class="required"   id="select8">
               
                <option value="27500">Registration HND</option>
				<option value="30000">Registration BTECH</option>
				</select>
                    </div>
                </div>
				<div class="w2ui-field w2ui-span4">
                    <div>
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
                        <input name="address" type="text" maxlength="100" style="width: 100%"/>
                    </div>
                </div>
                  
                <div class="w2ui-field w2ui-span4">
                    <label>level</label>
                    <div>
                        <input name="ass" type="hidden" value="<?php echo $ids;?>" maxlength="50" size="25"/>
                        <input name="levels" type="text" maxlength="50" size="25"/>
                    </div>
                </div>
                <div class="w2ui-field w2ui-span4">
                    <label>Id card No</label>
                    <div>
                        <input name="city" type="text" maxlength="50" size="25"/>
                    </div>
                </div>
               
                </div><div class="w2ui-field w2ui-span4">
                    <label>O-Level School Name</label>
                    <div>         
                        <input name="oschool" type="text" maxlength="100" size="80%" placeholder="O-level School"/>
                    </div>
                </div>
				
				 <div class="w2ui-field w2ui-span4">
                    <label>O-level subject Grade</label>
                    <div>
					
                        <input name="ograde" type="text" maxlength="100" size="80%" placeholder=" O-Level subject and Grade"/>
                    </div>
                </div>
                <div class="w2ui-field w2ui-span4">
                    <label>High School Name</label>
                    <div>         
                        <input name="hschool" type="text" maxlength="100" size="80%" placeholder="Name of High School"/>
                    </div>
                </div>
				
				 <div class="w2ui-field w2ui-span4">
                    <label>High School Grade</label>
                    <div>
					
                        <input name="matriculex" value=""type="hidden" maxlength="100" size="80%""/>
					
                        <input name="hgrade" type="text" maxlength="100" size="80%" placeholder=" High School subject and Grade"/>
                    </div>
                </div>
				
				 <div class="w2ui-field w2ui-span4">
                    <label>Contact:</label>
                    <div>
                        <input name="contact1" type="text" maxlength="100" style="width: 30%"/>
                        <input name="contact2" type="text" maxlength="100" style="width: 30%"/>
                    </div>
                </div>
				 <div class="w2ui-field w2ui-span4">
                    <label>Father's Name:</label>
                    <div>
                        <input name="father" type="text" maxlength="100" style="width: 100%"/>
                    </div>
                </div>
				<div class="w2ui-field w2ui-span4">
                    <label>Mother's Name:</label>
                    <div>
                        <input name="mother" type="text" maxlength="100" style="width: 100%"/>
                    </div>
                </div>
			
				 <div class="w2ui-field w2ui-span4">
                    <label>Guardain</label>
                    <div>
                        <input name="guardian1" type="text" maxlength="50" size="25" placeholder="Guardian Conatact"/>
						
                        <input name="guardian2" type="text" maxlength="50" size="15" placeholder="Guardian Conatact2"/>
                    </div>
				
				
				
				
				
				
            </div>
        </div>
        <div style="clear: both; padding-top: 15px;">
           
                </div>
          
        </div>
    </div>

    <div class="w2ui-buttons">
        <button class="w2ui-btn" name="save" size="250px">Save</button>
    </div>
</div>
</form>
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