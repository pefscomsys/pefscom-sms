<?php

include 'dbcs.php';
$ms=$_GET['roll'];
page_protect();


 $notes=$_SESSION['user_name'];

$user_name=$notes;
if(@$_SESSION['userlevel']!=11){header("location: login.php?error=Unauthorized access");}

 $pic=$_GET["rolls"];
$amp=$_GET["amp"];
$roll=$_GET["roll"];

 $ip=@$_SERVER['REMOTE_ADDR'];
 
 ?><?php


$query="select * from users where full_name='$notes'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>
<?php  $ids=$row['fax'];

$levels=$row['user_level'];
?>
<?php } ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Universal University System</title>
<link href="popupstts.css" rel="stylesheet" type="text/css" />

<style>
.ExcelTableFormationCol {
                      width: 55px;
                  height: 30px;
                  text-align: center;
                  font-family: Arial Narrow;
                  font-size: 14px;
                }

.ExcelTableFormationRow {
                  text-align: center;
              font-family: Calibri;
              font-size: 16px;
              height: 20px;
			  width:80px;
            }

#LastRow td {
          border-bottom-width: 0px;
        }

.LastCol {
       border-right-width: 0px;
     }
cursor{
position: absolute;
      top: 8px;
      right: -5px;
      background: #000;
      width: 5px;
      height: 5px;
      border: 1px solid #fff;
      border-right: 0px;
      border-bottom: 0px;

}
     #ExcelCursorOuter {
      position: relative;
     }

     #ExcelCursor {
      position: absolute;
      top: 8px;
      right: -5px;
      background: #000;
      width: 5px;
      height: 5px;
      border-right: 0px;
      border-bottom: 0px;
     }





input{border-radius:0px; border: 0;
    box-shadow: none; /* outline:#fff;}


</style>
</head>
 
<body>
 
<script type="text/javascript" src="jquery-1.8.0.min.js"></script>
   <script type="text/javascript">
$(function(){
   $('input[id^="name_"], input[id^="description_"], input[id^="notes_"]')
.bind('keyup', function(e) {
    var $this = $(this);
    var $tr = $this.closest("tr");
    var id = this.id.substring(0, this.id.indexOf("_"));
    
    if(e.keyCode == 38){
        $tr.prev().find('input[id^='+id+']').focus();
    }
    else if(e.keyCode == 40)
    {
       $tr.next().find("input[id^='"+id+"']").focus();
    }
	   else if(e.keyCode == 39)
    {
       $(".tab:focus").find("input[id^='"+id+"']").focus();
    }
	   else if(e.keyCode == 37)
    {
        $tr.prev().find('input[id^='+id+']').focus();
    }
}); 
});
 </script>
<div id="overlay-back"></div>
<div id="popup">
<div style="float:left; width:1100px;margin-top:3px; height:auto;">

<div style="float:left; width:1100px;height:40px;background:#989898;">
<div style="float:left; width:100px; height:80px;color:#fff;font-size:22px;">
<div style="float:left;margin-top:5px;margin-left:5px;">&#9658;</div>


 
 </div>

 <div style="float:left; width:700px;color:#1188aa; height:30px;font-size:28px;color:#fff;text-transform:uppercase;"><?php
$fish=$_GET["roll"];
 $subject=$_POST["subject"];
 $sex=$_POST["sex"];
 $department=$_POST["department"];
$levels=$_POST["levels"];
$coef=$_POST["coef"];

	  ?>

<?php
$roll=$_GET["1"];
$query="select * from rushs where roll='1'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>

<?php  $take=$row[1];



?>
		 
Course: - <?php echo $subject;?> 	- <?php 
$qry = mysql_query("select  db1 as total
from subject where subject='$subject' and  department='$department'"); 
$row = mysql_fetch_assoc($qry); 
 echo $richooTTT=$row['total'];
 
 $qry = mysql_query("select  year1 as total
from subject where subject='$subject' and  department='$department'"); 
$row = mysql_fetch_assoc($qry); 
 $levelss=$row['total'];
 
 $qry = mysql_query("select  department as total
from subject where subject='$subject' and  department='$department'"); 
$row = mysql_fetch_assoc($qry); 
 $deptt=$row['total'];
 
 
 $qry = mysql_query("select  year2 as total
from subject where subject='$subject' and  department='$department'"); 
$row = mysql_fetch_assoc($qry); 
 $sexss=$row['total'];
  $qry = mysql_query("select  SUM(c101+c102) as total
from resit where fname='$subject' and  sex='$sex'  and db1='$take' and  departmet='$department'"); 
$row = mysql_fetch_assoc($qry); 
  $ma=$row['total'];
 
 
 
 $mxc11UIsS=$deptt;
if(empty($mxc11UIsS)){

 $deps=$department;
 
 
 }
elseif($mxc11UIsS>'' ){
 $deps=$deptt; 
}
 
 
 $mxc11UIssS=$levelss;
if(empty($mxc11UIssS)){

 $levelst=$levels;
 
 
 }
elseif($mxc11UIssS>'' ){
 
 $levelst=$levelss;
}
 
  $mxc11UIsssS=$sexs;
if(empty($mxc11UIsssS)){

 $sext=$sex;
 
 
 }
elseif($mxc11UIsssS>'' ){
 
 $sext=$sexs;
}
 
 
 
 
 
 
 
 

 $mxc11UIS=$ma;
if(empty($mxc11UIS)){

 $stat="courses";
 $stats="levels='$levelst' and c110='$ids'and db1='$take' and departmet='$deps' and cxx5='$teacher' order by matricule  ASC";
 $up="insert into resit";
 
 
 }
elseif($mxc11UIS>'' ){
 $stat="resit";
 $stats="levels='$levelst' and db1='$take' and departmet='$deps' and sex='$sext' and fname='$subject'order by matricule  ASC";

}


 
 
 
 
 
 ?></div>
 
 
 
 
 </div>
	
	
<div style="float:left; width:1090px;margin-left:10px;margin-top:10px;"> 



		 
<?php
$mas=$_POST["mas"];
 $mxc11UIyS=$mas;
if(empty($mxc11UIyS)){
 $up="insert into resit";
 
  $home=",  c105='".$_POST['c105'][$i]."'";
 
 }
elseif($mxc11UIyS>'' ){
 $up="update resit";
 
  $home="where roll='$roll'";
}
$i = 0;
if(!empty($_POST["submit"]))
{
 foreach($_POST["id"] as $roll)
 {
  
  
 $mxc11UIyS=$mas;
if(empty($mxc11UIyS)){
 
   mysql_query("insert into resit SET
               sex='".$_POST['sex'][$i]."',
			   
 departmet='".$_POST['departmet'][$i]."',
               fname='".$_POST['fname'][$i]."',
               levels='".$_POST['levels'][$i]."',
               db1='".$_POST['db1'][$i]."',
               c101='".$_POST['c101'][$i]."',
			    c102='".$_POST['c102'][$i]."',
               c110='".$_POST['c110'][$i]."',
               c104='".$_POST['c104'][$i]."',
                 c103='".$_POST['c103'][$i]."',
				  matricule='".$_POST['matricule'][$i]."',  c105='".$_POST['c105'][$i]."'
               ");
 
 }
elseif($mxc11UIyS>'' ){
 
   mysql_query("update resit SET

               c101='".$_POST['c101'][$i]."',
			    c102='".$_POST['c102'][$i]."'where roll='$roll'
               ");
 
 
}

  $i++;

               

  }

 

echo "<script>alert('Data Base Updated Successful!');</script>";

 echo  $statusf="<meta http-equiv='refresh' content='0; url=st1.php?usr_name=$user_name'>";
 exit;

 } 
?>
<?php } ?><table cellspacing="0" width="1070px" cellpadding="0">
<tr style="border-bottom:1px solid #000;">
        <td style="width:10px;height:25px;background:#989898;padding:3px;border-bottom:1px solid #000;">
		
		</td>
		   <td style="width:30px;height:25px;padding:3px;border-bottom:1px solid #000;">
		Sn
		</td>
		 <td style="width:100px;height:25px;color:#787878;padding:3px;border-bottom:1px solid #000;">
		Subject
		</td>
		  <td style="width:200px;height:25px;color:#787878;padding:3px;border-bottom:1px solid #000;">
		Department
		</td>
		  <td style="width:350px;height:25px;color:#787878;padding:3px;border-bottom:1px solid #000;">
		Student Name(s)
		</td>
		  <td style="width:120px;height:25px;padding:3px;border-bottom:1px solid #000;">
		Matricule
		</td>
		  <td style="width:80px;height:25px;padding:3px;border-bottom:1px solid #000;">
		  CA
		</td>
		  <td style="width:100px;height:25px;padding:3px;border-bottom:1px solid #000;">
		  Exam
		</td></tr>		<?php
 $sql = "SELECT * FROM $stat where $stats";
$results = mysql_query($sql);$rt=1;
while($row = mysql_fetch_assoc($results))
{
 $id_array[] = $row["roll"];
 $fname_array[] = $row["fname"];
 $matricule_array[] = $row["matricule"];
 $departmet_array[] = $row["departmet"];
 $levels_array[] = $row["levels"];$c111_array[] = $row["c111"];
 $c101_array[] = $row["c101"];$c102_array[] = $row["c102"];
 }
 echo "<form action='#' method='post'>
       ";
for($i=0;$i<count($id_array);$i++)
{
 $rollio = $id_array[$i];
 $fname = $fname_array[$i];
 $matricule = $matricule_array[$i];
 $departmet = $departmet_array[$i];
 $levels = $levels_array[$i];
 $c111 = $c111_array[$i]; 
 $c101 = $c101_array[$i];
 $c102 = $c102_array[$i];

?>

    <tr style="border-bottom:1px solid #000;">
        <td style="width:10px;height:25px;background:#989898;padding:3px;border-bottom:1px solid #000;">
		
		</td>
		   <td style="width:30px;height:25px;padding:3px;border-bottom:1px solid #000;">
		<?php echo $rt++;?>
		</td>
		 <td style="width:100px;height:25px;color:#787878;padding:3px;border-bottom:1px solid #000;">
		<?php echo $subject;?>
		</td>
		  <td style="width:200px;height:25px;color:#787878;padding:3px;border-bottom:1px solid #000;">
		<?php echo $deps;?>
		</td>
		  <td style="width:350px;height:25px;color:#787878;padding:3px;border-bottom:1px solid #000;">
		<?php  


 $qry = mysql_query("select  fname as total
from courses where matricule='$matricule' and db1='$take' and  departmet='$deps' and levels='$levelst'"); 
$row = mysql_fetch_assoc($qry); 
 echo $fnames=$row['total'];
 
 
 
 ?>
		</td>
		  <td style="width:120px;height:25px;padding:3px;border-bottom:1px solid #000;">
		<?php echo $matricule;?>
		</td>
		  <td style="width:80px;height:25px;padding:3px;border-bottom:1px solid #000;">
		<input type="text" name="c101[]" id="name_1"value="<?php echo $c101;?>" size="10" style="padding:5px;border-bottom:1px solid #000;"/>
		</td>
		  <td style="width:100px;height:25px;padding:3px;border-bottom:1px solid #000;">
		<input type="text" name="c102[]" id="description_1" value="<?php echo $c102;?>" size="9"style="padding:5px;border-bottom:1px solid #000;"  />
		</td>
           
  
 <input type='hidden' name='mas' value='<?php echo	$ma;?>' size='8' style='BACKGROUND:#CCC;' maxlength='4'>
 <input type='hidden' name='id[]' value='<?php echo	$rollio;?>' size='8' style='BACKGROUND:#CCC;' maxlength='4'>
 <input type='hidden' name='fname[]' value='<?php echo	$subject;?>' size='8' style='BACKGROUND:#CCC;' maxlength='4'>
 <input type='hidden' name='matricule[]' value='<?php echo $matricule;?>' size='8' style='BACKGROUND:#CCC;' maxlength='4'>
 <input type='hidden' name='sex[]' value='<?php echo $sext;?>' size='8' style='BACKGROUND:#CCC;' maxlength='4'>
 <input type='hidden' name='departmet[]' value='<?php echo $deps;?>' size='8' style='BACKGROUND:#CCC;' maxlength='4'>
 
 <input type='hidden' name='c110[]' value='<?php echo $ids;?>' size='8' style='BACKGROUND:#CCC;' maxlength='4'>
 <input type='hidden' name='db1[]' value='<?php echo $take;?>' size='8' style='BACKGROUND:#CCC;' maxlength='4'>
 <input type='hidden' name='levels[]' value='<?php echo $levelst;?>' size='8' style='BACKGROUND:#CCC;' maxlength='4'>
    </tr>
<?php
 }
 echo "</table>";
echo "<input type='submit' name='submit' value='Save' style='padding:10px 45px; margin-left:5px;margin-top:10px;'></form>";
?>



				
				
				
				
				
				
				
				
				
				
				
				
		

</div>
</body>
</html>