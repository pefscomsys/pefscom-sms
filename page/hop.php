	
<?php
include 'dbcs.php';

$fish=$_GET["roll"];
 $subject=$_POST["subject"];
 $sex=$_POST["sex"];
$department=$_POST["department"];
$levels=$_POST["levels"];
$coef=$_POST["coef"];
echo $marks=$_POST["marks"];
	  ?>
<div style="float:left; width:400px;">
Welcome To Marks MODERATION Page for <?php echo $subject;?><BR>
<div style="color:red">We are adding <?php echo $marks;?> to everyone!</div>

<div  style="float:left;width:990px; height:540px;">

<div  style="float:left;width:750px; height:540px; ">
	
	
	
<div  style="float:left;width:750px; height:30px; background:#336666;color:#fff;">

<div style="width:472px; float:left; height:25px; margin-left:10PX">
STUDENT NAMES</div>

<div style="width:80px; float:left; height:25px; margin-left:10PX">
Sq </div>

<div style="width:100px; float:left; height:25px; margin-left:10PX">
EXAM</div>
</div>

<?php
$roll=$_GET["1"];
$query="select * from rush where roll='1'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>

<?php  $take=$row[1];



?>
		 
		 
<?php
$table = "marks";
$i = 0;
if(!empty($_POST["submit"]))
{
 foreach($_POST["id"] as $roll)
 {

  
  mysql_query("update resit SET
              
               matricule='".$_POST['matricule'][$i]."',
               
               
               c101='".$_POST['c101'][$i]."',
			   
               c102='".$_POST['c102'][$i]."'
			   where roll='$roll'
               ");
  $i++;

               

  }
 }
 

echo "<script>alert('Datae Base Updated Successful!'); </script>";
?>
<?php } ?>			<?php
	  /******************** ERROR MESSAGES*************************************************
	  This code is to show error messages 
	  **************************************************************************/
	  if(!empty($err))  {
	   echo "<div class=\"msg\" style='text-decoration:blink;color:red;'>";
	  foreach ($err as $e) {
	    echo "$e <br>";
	    }
	  echo "</div>";	
	   }
	  /******************************* END ********************************/	  
	  
	  ?>	<?php

 $sql = "SELECT * FROM resit where levels='$levels' and db1='$take' and departmet='$department' and sex='$sex' and fname='$subject' and c110='$ids' and matricule>''order by matricule  ASC";
$results = mysql_query($sql);
while($row = mysql_fetch_assoc($results))
{
 $id_array[] = $row["roll"];
 $fname_array[] = $row["fname"];
 $matricule_array[] = $row["matricule"];
 $departmet_array[] = $row["departmet"];
 $levels_array[] = $row["levels"];
  $c101_array[] = $row["c101"];
$c102_array[] = $row["c102"];
$db1_array[] = $row["db1"];
$sex_array[] = $row["sex"];
 }
 echo "<form action='#' method='post'>
       ";
for($i=0;$i<count($id_array);$i++)
{
 $roll = $id_array[$i];
 $fname = $fname_array[$i];
 $matricule = $matricule_array[$i];
 $departmet = $departmet_array[$i];
 $levels = $levels_array[$i];
$c101 = $c101_array[$i];
$c102 = $c102_array[$i];
$db1 = $db1_array[$i];
$sex = $sex_array[$i];

 $mxc11= $c102 ;
 
 
 
if(empty($mxc11)){

 $statusfbio="";}
elseif($mxc11>'' ){
 $statusfbio=$c102+$marks;
}
$mxc111=$statusfbio;
if(empty($mxc111)){

 $statusfbio1="";}

elseif($mxc111>=70 && $mxc111<=70 ){
 $statusfbio1=69;
}
elseif($mxc111>=0  && $mxc111<=70 ){
 $statusfbio1=$mxc111;
}
elseif($mxc111>70 ){
 $statusfbio1=69;
}

?>
        <div style='float:left; width:732; background:#f4f4f4; font-size:12px; color:#686868; font-family:arial; text-translevels:UPPERCASE;  '>
        <div style='float:left;width:300px; '>
		
		<input type='hidden' name='id[]' value='<?php echo $roll;?>'></div>
        <div style='float:left;width:70px; '>
	<?php echo	$fname;?>
</div>
        <div style='float:left;width:200px; '>
	<?php echo	$matricule;?> 
  </div>     <div style='float:left;width:210px; '>
	<?php 
	
	
	
	
$qry = mysql_query("select fname as total
from courses where matricule='$matricule' and db1='$take'  "); 
$row = mysql_fetch_assoc($qry); 
	echo $saves=$row['total']; 
	
	
	;?>
</div>      <div style='float:left;width:80px; '>
  
 <input type='hidden' name='sex[]' value='<?php echo $sex;?>' size='8' style='BACKGROUND:#CCC;' maxlength='4'>
 <input type='hidden' name='departmet[]' value='<?php echo $departmet;?>' size='8' style='BACKGROUND:#CCC;' maxlength='4'>
 
 <input type='hidden' name='matricule[]' value='<?php echo $matricule;?>' size='8' style='BACKGROUND:#CCC;' maxlength='4'>
 <input type='hidden' name='db1[]' value='<?php echo $take;?>' size='8' style='BACKGROUND:#CCC;' maxlength='4'>
 <input type='hidden' name='levels[]' value='<?php echo $levels;?>' size='8' style='BACKGROUND:#CCC;' maxlength='4'>
 <input type='text' name='c101[]' value='<?php echo $c101;?>' size='8' style='BACKGROUND:#CCC;' maxlength='2'></div>
        <div style='float:left;width:70px; '>
		
 <input type='text' name='c102[]' value='<?php echo $statusfbio1;?>' size='8' style='BACKGROUND:#CCC;' maxlength='2'></div>
 
 </DIV>
 <div style='float:left; width:932; border-bottom:1px solid #ccc;'></div><?php
 }
 
echo "<input type='submit' name='submit' value='Submit'></form>";
?>
<?PHP

 
 $mxc11= $c102 ;
 
 
 
if(empty($mxc11)){

 echo "<tr><td colspan='3' align='center' style='color:red'>No Record found for this semester $sex mr:-$notes please choose another semester or course or level;</td></tr>";
 }
elseif($mxc11>'' ){
	
}

	
		 		 
?>


<BR>


<BR>

<BR>

<BR>

<BR>

<BR>

 
<BR>


<BR>

<BR>

<BR>

<BR>

<BR>

<BR>


<BR>

<BR>

<BR>

<BR>

<BR>

<BR>


<BR>

<BR>

<BR>

<BR>

<BR>

<BR>


<BR>

<BR>

<BR>

<BR>

<BR>

<BR>


<BR>

<BR>

<BR>

<BR>

<BR>

<BR>


<BR>

<BR>

<BR>

<BR>

<BR>

<BR>


<BR>

<BR>

<BR>

<BR>

<BR>

<BR>


<BR>

<BR>

<BR>

<BR>

<BR>
 


</div>

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	</div><script type="text/javascript">
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
