<?php 
include 'dbc.php';
page_protect();

 $notes=$_SESSION['user_name'];

if(@$_SESSION['userlevel']==3){header("location: login.php?msg=Unauthorized access");}

?>
<?php
$roll=$_GET["1"];
$query="select * from users where  full_name='$notes'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>
<?php  $ids=$row['fax'];


?><?php } ?>
<?php
if($_POST)
{
$q=$_POST['search'];
$sql_res=mysql_query("select roll,fname,matricule,departmet from  courses where c110='$ids' and fname like '%$q%' or matricule like '%$q%' order by roll LIMIT 8");
while($row=mysql_fetch_array($sql_res))
{$department=$row['departmet'];
$username=$row['fname'];
$matricule=$row['matricule'];
$b_username='<strong>'.$q.'</strong>';
$b_email='<strong>'.$q.'</strong>';$b_emails='<strong>'.$q.'</strong>';
$final_username = str_ireplace($q, $b_username, $username);
$final_email = str_ireplace($q, $b_email, $matricule);
$final_emails = str_ireplace($q, $b_emails, $deparment);
?>
<div class="show" align="left"><?php 
				  $mxx=$row['matricule'];
				$qry = mysql_query("select id as total
from employees where empname='$mxx'  "); 
$row = mysql_fetch_assoc($qry); 
 $savep4=$row['total']; 
				 $mxx=$rec['empname'];?>
					<img src="load_image.php?pic_id=<?php echo $savep4;?>" width="100px" height="50px" style="width:50px; height:50px; float:left; margin-right:6px;" /><span class="name"><?php echo $final_username; ?></span>&nbsp;<br/><?php echo $final_email; ?><br/>
					&nbsp;<br/><?php echo $final_emails; ?><br/>
</div>
<?php
}
}
?>
