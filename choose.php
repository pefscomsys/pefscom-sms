<?php 
include 'dbc.php';
page_protect();
$mats=$_GET['roll'];



if(@$_SESSION['userlevel']!=(111)){header("location: login.php?error=Unauthorized access");}

 $notes=$_SESSION['user_name'];
?>
<?php
$roll=$_GET["1"];
$query="select * from chooses where roll='1'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>
<?php $mms=$row[1];


?><?php } ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Addmission Form</title>



 <script language="JavaScript">
function disableEnterKey(e)
{
     var key;

     if(window.event)
          key = window.event.keyCode;     //IE
     else
          key = e.which;     //firefox

     if(key == 13)
          return false;
     else
          return true;
}
</script>

<script src="jquery.min.js"></script>
<script src="jquery.preimage.js"></script>

<script>

$(document).ready(function()
{
	$('.file').preimage();
});

</script>

<style>
.prev_container{
	overflow: auto;
	width: 300px;
	height: 135px;
}

.prev_thumb{
	margin: 10px;
	height: 100px;
}
</style>
<style>
div.fileinputs {
	position: relative;
}

div.fakefile {
	position: absolute;
	top: 0px;
	left: 0px;
	z-index: 1;
}

table,td{border:1px solid #ccc; color:#000;
font-size:12px;
}

input {
	top: 0px;
	left: 0px;
	padding: 2px 2px 2px 5px  #CCC;
}
body{background:#f4f4f4;}
.prev_container{
	overflow: auto;
	width: 300px;
	height: 135px;
}

.prev_thumb{
	margin: 10px;
	height: 100px;
}
</style>

<script type="text/javascript">
     var mappedArray = [];
      mappedArray.push({tables:"formone",tableCode:"formonespecial"});
      mappedArray.push({tables:"formtwo",tableCode:"formtwospecial"});
	  
      mappedArray.push({tables:"formthree",tableCode:"formthreespecial"});
	  
      mappedArray.push({tables:"formfour",tableCode:"formfourspecial"});
	  
      mappedArray.push({tables:"formfive",tableCode:"formfivespecial"});
	  
	  
      mappedArray.push({tables:"lowersixth",tableCode:"lowersixthspecial"});
      mappedArray.push({tables:"lowersixthscience",tableCode:"lowersixthsciencespecial"});
   
      mappedArray.push({tables:"uppersixth",tableCode:"uppersixthspecial"});
	  
      mappedArray.push({tables:"uppersixthscience",tableCode:"uppersixthsciencespecial"});
	  
	  
	  
      mappedArray.push({tables:"commercial3",tableCode:"commercial3special"});
	  
      mappedArray.push({tables:"commercial4",tableCode:"commercial4special"});
	  
      mappedArray.push({tables:"commercial5",tableCode:"commercial5special"});
	  
      mappedArray.push({tables:"commercial6",tableCode:"commercial6special"});
	  
      mappedArray.push({tables:"commercial7",tableCode:"commercial7special"});
	  
      mappedArray.push({tables:"commercial8",tableCode:"commercial8special"});
	  
      mappedArray.push({tables:"commercial9",tableCode:"commercial9special"});
    
    function populatetableCode(cntry, phoneCode1, phoneCode2) {
      if(cntry == ''){
        document.getElementById(phoneCode1).value = '1';
        document.getElementById(phoneCode2).value = '1';
        return;
      }
      for(var i = 0; i < mappedArray.length; i++) {
        if(mappedArray[i].tables == cntry){
          document.getElementById(phoneCode1).value = mappedArray[i].tableCode;
          document.getElementById(phoneCode2).value = mappedArray[i].tableCode;
          break;
        }
      }
    }
  </script>
  <script type="text/javascript">
     
          /*************************************************/
          // Function to set Phone table Code according to 
          // selected table.
          /*************************************************/
          function settableCode() {
            var table2 = document.getElementById ('table' ).value;
			//alert(table2);
            populatetableCode(table2 , 'tables', 'phonetableCode2');
            //doNothing();


	        if(table2 == "United States")
       	    {
			    document.getElementById("hide_show").style.display = 'block';
			    document.getElementById("hide_show2").style.display = 'block';				
				
		    }
	        else
	        {
			    document.getElementById("hide_show").style.display = 'none';
			    document.getElementById("hide_show2").style.display = 'none';				
	        }
          }
        </script>
<meta charset=utf-8 />


</head>






</div>

<div style=" margin:auto; width:800px; height:400px;">











 <body>


<div style="width:700px; height:400px;">

</script>









<?php
$roll=$_GET["1"];
$query="select * from rushs where roll='1'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>
<b>
<?php  $take=$row[1];


?><?php } ?>





<?php
$roll=$_GET["roll"];
$query="select * from courses where matricule='$mats' and db1='$take'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>
<?php
	  /******************** ERROR MESSAGES*************************************************
	  This code is to show error messages 
	  **************************************************************************/
	  if(!empty($err))  {
	   echo "<div class=\"msg\">";
	  foreach ($err as $e) {
	    echo "$e <br>";
	    }
	  echo "</div>";	
	   }
	  /******************************* END ********************************/	  
	  ?><br><br><br>
<div style="margin-left:-70px;">

<script type="text/javascript" language="javascript"> 
<!--
// By Adam Khoury @ www.developphp.com
function validateMyForm ( ) { 
    var isValid = true;
    if ( document.form1.first_name.value == "" ) { 
	    alert ( "Please type your Name" ); 
	    isValid = false;
    } else if ( document.form1.first_name.value.length < 1 ) { 
            alert ( "student  first_name, Middle name, Last name  must be Enter " ); 
            isValid = false;
    } 
	
	
	
	
	
	
	
	
	else if ( document.form1.table.value.length < 1 ) { 
            alert ( "You must select a class for this student " ); 
            isValid = false;
    }
	else if ( document.form1.tables.value.length < 1 ) { 
            alert ( "enter target class numeric representation " ); 
            isValid = false;
    }
	
	
	
	
	
		
	
	
	
	else if ( document.form1.go.value == "" ) { 
            alert ( "Please select Motive or Reason" ); 
            isValid = false;
	}
	
    return isValid;
}



//-->
</script>

<form name="form1" method="post" action="choosep.php">

<?php $notes=$_SESSION['user_name'];?>
<input type="hidden" name="notesxs" value="<?php echo $notes;?>">
  <table style=" border:1px solid silver" cellpadding="1" bgcolor="#ffffcc"cellspacing="0px" align="center" border="0">
    <tr><td style="text-transform:uppercase;">




<table cellpadding="1" >
      <td colspan="18" style="background:#000; color:#FFFFFF; font-size:20px">CANDIDATE FOR ELECTION
    </tr>
   



 <tr>
      <td style="text-transform:uppercase;">MATRICULE</td>
      <td style="text-transform:uppercase;"><input type="text" name="matricule" size="19" value="<?php echo $row['matricule'];?>"style="background:#ccc;" ></td>
	
	

    </tr>
	   <td style="text-transform:uppercase;">Department</td>
	     <td style="text-transform:uppercase;"><input type="text" name="department" size="20" value="<?php echo $row['departmet'];?>"  style="background:#ccc;"></td>
    </tr>
 <tr><?php  $pic=$row["photo"];?>
      <td style="text-transform:uppercase;">Level</td>
      <td style="text-transform:uppercase;"> 

	  
	  <input type="text" name="levels" size="20" value="<?php echo $row['levels'];?>" readonly="readonly" style="background:#ccc;">

</td>
 <td style="text-transform:uppercase;">
	
    </tr>
    
<tr>
      <td width="150px">NAMES OF STUDENT</td>
      <td style="text-transform:uppercase;"><input type="text" name="fname" size="20" value="<?php echo $row['fname'];?>" ></span> </td></tr><tr>
       
   
    <tr>
      <td style="text-transform:uppercase;">Accademic Year</td>
      <td style="text-transform:uppercase;"><input type="text" name="acc" size="7" value="<?php echo $take;?>" style="background:#ccc;"></td>
	</td>
	
    </tr>
	
	 
    <tr>
      <td style="text-transform:uppercase;">Position Applied</td>
      <td style="text-transform:uppercase;">
<select name="applied"style="background:#ccc;">
<?php
$rs=mysql_query("Select * from position order by  positions ASC",$link);
	  while($row=mysql_fetch_array($rs))
{
if($row[1]==$fees)
{
echo "<option value='$row[1]' selected>$row[1]</option>";
}
else
{
echo "<option value='$row[1]'>$row[1]</option>";
}
}
?></select></td>
	</td>
	
    </tr>
	
	
	
	
		 
    <tr>
      <td style="text-transform:uppercase;">Create ID for candidate</td>
      <td style="text-transform:uppercase;"><input type="text" name="codes" size="14" value="<?php echo $mms;?>" style="background:#ccc;"></td>
	</td>
	
    </tr>
	
	
	
	
    <tr>
      <td style="text-transform:uppercase;">Enter party color</td>
      <td style="text-transform:uppercase;"><input type="text" name="colors" size="14" value="" style="background:#ccc;"></td>
	</td>
	
    </tr>
	
	
	
	</table>
<td>
		 <?php 
				$mxx=$mats;
				$qry = mysql_query("select id as total
from employees where empname='$mxx'  "); 
$row = mysql_fetch_assoc($qry); 
 $savep4=$row['total']; 
				 $mxx=$rec['empname'];?>
				<input type="hidden" name="changeme" size="10" value="<?php echo $savep4;?>" readonly="readonly" style="background:red;color:#fff;font-weight:bold;">
			

					<img src="load_image.php?pic_id=<?php echo $savep4;?>" width="220px" height="170px">
  </td></tr></table>
  </div></td>
	
	  
	  
</tr>





		<?php } ?>


</table>
</div></tr><tr>
      <td colspan="4" align="center"><input type="hidden" name="do" value="update">
        <input type="submit" value="Register Candidate!" onClick="javascript:return validateMyForm();self.close();"/></td>
    </tr></table>

















	</div>


	
	
	</div>
	
	
	
	
	
</div>
</div>





</body>
</html>