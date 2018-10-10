<?php
include 'dbcs.php';
?><html>
<head>

  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
<script type="text/javascript" src="jquery-1.8.0.min.js"></script>
<script type="text/javascript">
$(function(){
$(".search").keyup(function() 
{ 
var searchid = $(this).val();
var dataString = 'search='+ searchid;
if(searchid!='')
{
	$.ajax({
	type: "POST",
	url: "search.php",
	data: dataString,
	cache: false,
	success: function(html)
	{
	$("#result").html(html).show();
	}
	});
}return false;    
});

jQuery("#result").live("click",function(e){ 
	var $clicked = $(e.target);
	var $name = $clicked.find('.name').html();
	var decoded = $("<div/>").html($name).text();
	$('#searchid').val(decoded);
});
jQuery(document).live("click", function(e) { 
	var $clicked = $(e.target);
	if (! $clicked.hasClass("search")){
	jQuery("#result").fadeOut(); 
	}
});
$('#searchid').click(function(){
	jQuery("#result").fadeIn();
});
});
</script>
<style type="text/css">
	
	.content{
		width:600px;
		margin:0 auto;
	}
	#searchid
	{
		width:1000px;margin-left:-120px;
		
		padding:10px;border-bottom:1px solid #000;
		font-size:21px;
	}
	#result
	{
		position:absolute;
		width:1000px;
		padding:10px;margin-left:-210px;
		display:none;
		margin-top:-30px;
		border-top:0px;
		overflow:hidden;
		background-color: white;
	}
	.show
	{
		padding:10px; 
		border-bottom:1px #999 dashed;
	
		height:50px;font-size:21px;
	}
	.show:hover
	{
		background:red;
		color:#FFF;
		cursor:pointer;
	}
</style>
</head>
<body>  
						

				
					
					<?php
					$leve=$_GET['levels'];
					$dept=$_GET['dept'];
					?>
					
					
		 
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
 
      <!-- /.modal-dialog --> 
   </div>