<?php
include 'dbc.php';



 $rolls=$_GET["roll"];
$pwd=$_POST["pwd"];
$roll=$_POST["rollsh"];




$sha1pass = PwdHash($pwd);



if($pwd!=""){
$query3="update users set  pwd='$sha1pass'
 where id='$roll'";



mysql_query ($query3) or die ('could not updated:'.mysql_error());

echo "<script>alert('CHANGE Successful!'); window.location.href('modifyy.php');</script>";
 

 echo $statusftydate="<meta http-equiv='refresh' content='0; url=modifyy.php'>";
}
?>

<?php
echo $roll;
$query="select * from users where id='$rolls'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>
<form name="form1" method="post" action="macy.php">


  <table style=" border:1px solid silver" cellpadding="1" bgcolor="#ffffcc"cellspacing="0px" align="center" border="0">
    <tr><td style="text-transform:uppercase;">




<table cellpadding="1" >
      <td colspan="18" style="background:#000; color:#FFFFFF; font-size:20px">CHANGE PASSWORD
    </tr>
   <input type="text" name="rollsh" size="20" value="<?php
echo  $row[0];
?>" >
   
      <td width="150px">FULL NAME</td>
      <td style="text-transform:uppercase;"><input type="text" name="user_name" size="20" value="<?php
echo $row['user_name'];
?>" readonly="readonly" style="background:#ccc;"></td><td width="150"></td></tr>



 <td width="150px">PASSWORD</td>
      <td style="text-transform:uppercase;"><input type="text" name="pwd" size="20" value="" ></TD></TR>



</table>
</div></tr><tr>
      <td colspan="4" align="center"><input type="hidden" name="do" value="update">
        <input type="submit" value="CONFIRM" onClick="javascript:return validateMyForm();self.close();"/></td>
    </tr></table>

<?php
}
?>















	</div>


	
	
	</div>
	
	
	
	
	
</div>
</div>





</body>
</html>