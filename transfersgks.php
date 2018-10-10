<?php
ini_set('max_execution_time', 3250000000); //300 seconds = 5 minutes
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

$i = 0;
if(!empty($_POST["submit"]))
{
 foreach($_POST["matricule"] as $roll)
 {
  
  
 $mxc11UIyS=$mas;
if(empty($mxc11UIyS)){
 
   mssql_query("update [cg2015].[dbo].[resit] SET
            
			   

               
               c101='".$_POST['c101'][$i]."',
			    c102='".$_POST['c102'][$i]."'
				 where
				 matricule='$roll'
				  and  fname='".$_POST['fname'][$i]."'  and 
               levels='".$_POST['levels'][$i]."' and 
               db1='".$_POST['db1'][$i]."'
			   and  departmet='".$_POST['departmet'][$i]."' and    sex='".$_POST['sex'][$i]."'
               ");
 
 }
  $i++;

               

  }

 

echo "<script>alert('Data Base Updated Successful!');</script>";

 echo  $statusf="<meta http-equiv='refresh' content='0; url=nmss.php?usr_name=$user_name'>";
 exit;

 } 
?>
<table cellspacing="0" width="950px" cellpadding="0" style='font-size:15px;'>
<tr style="border-bottom:1px solid #000;">
        <td style="width:10px;height:25px;background:#989898;padding:3px;border-bottom:1px solid #000;">
		
		</td>
		   <td style="width:30px;height:25px;padding:3px;border-bottom:1px solid #000;">
		Sn
		</td>
		 <td style="width:100px;height:25px;color:#787878;padding:3px;border-bottom:1px solid #000;">
		Subject
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
		$dept=$_GET['dept'];
		$sub=$_GET['sub'];
		$levels=$_GET['levels'];
		$db1=$_GET['db1'];
		
  $sql = "SELECT CAST(fname as text) as fname,CAST(matricule as text) as matricule,
CAST(departmet as text) as departmet,
CAST(levels as text) as levels,
CAST(c101 as float) as c101,
CAST(c102 as float) as c102

 FROM [cg2015].[dbo].[resit]  where fname='$sub' and departmet='$dept' and levels='$levels' and db1='$db1' ";
$results = mssql_query($sql);$rt=1;
while($row = mssql_fetch_assoc($results))
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
 $subject = $fname_array[$i];
 $matricule = $matricule_array[$i];
 $deps = $departmet_array[$i];
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
		
		  <td style="width:350px;height:25px;color:#787878;padding:3px;border-bottom:1px solid #000;">
		<?php  


 $qry = mssql_query("select  CAST(fname as text) as total
from [cg2015].[dbo].[courses] where matricule='$matricule' and db1='$db1' and  departmet='$dept' and levels='$levels'"); 
$row = mssql_fetch_assoc($qry); 
 echo $fnames=$row['total'];
 
 
 
 ?>
		</td>
		  <td style="width:120px;height:25px;padding:3px;border-bottom:1px solid #000;">
		<?php echo $matricule;?>
		</td>
		  <td style="width:80px;height:25px;padding:3px;border-bottom:1px solid #000;">
		<input type="text" name="c101[]" id="name_1"value="<?php echo $c101;?>" size="10"id="test_id" onkeyup="this.value = fnc(this.value, 0, 50)"class="number-only" style="padding:5px;border:0px;background:#efefef;"/>
		</td>
		  <td style="width:100px;height:25px;padding:3px;border-bottom:1px solid #000;">
		<input type="text" name="c102[]" id="description_1" value="<?php echo $c102;?>"onkeyup="this.value = fnc(this.value, 0, 50)" id="test_id" class="number-only"size="9"style="padding:5px;border:0px;background:#efefef;"  />
		</td>
           
  
 <input type='hidden' name='mas' value='<?php echo	$ma;?>' size='8' style='BACKGROUND:#CCC;' maxlength='4'>
 <input type='hidden' name='id[]' value='<?php echo	$rollio;?>' size='8' style='BACKGROUND:#CCC;' maxlength='4'>
 <input type='hidden' name='fname[]' value='<?php echo	$subject;?>' size='8' style='BACKGROUND:#CCC;' maxlength='4'>
 <input type='hidden' name='matricule[]' value='<?php echo $matricule;?>' size='8' style='BACKGROUND:#CCC;' maxlength='4'>
 <input type='hidden' name='sex[]' value='<?php echo $sext;?>' size='8' style='BACKGROUND:#CCC;' maxlength='4'>
 <input type='hidden' name='departmet[]' value='<?php echo $deps;?>' size='8' style='BACKGROUND:#CCC;' maxlength='4'>
 
 <input type='hidden' name='c110[]' value='<?php echo $ids;?>' size='8' style='BACKGROUND:#CCC;' maxlength='4'>
 <input type='hidden' name='db1[]' value='<?php echo $db1;?>' size='8' style='BACKGROUND:#CCC;' maxlength='4'>
 <input type='hidden' name='levels[]' value='<?php echo $levelst;?>' size='8' style='BACKGROUND:#CCC;' maxlength='4'>
    </tr>
<?php
 }
 echo "</table>";
echo "<input type='submit' name='submit' value='Save' style='padding:10px 45px; margin-left:5px;margin-top:10px;'></form>";
?>



				
				
				
		
    <script type="text/javascript">
    ko.bindingHandlers.nextFieldOnEnter = {
        init: function(element, valueAccessor, allBindingsAccessor) {
            $(element).on('keydown', 'input, select', function (e) {
                var self = $(this)
                , form = $(element)
                  , focusable
                  , next
                ;
                if (e.keyCode == 13) {
                    focusable = form.find('input,a,select,button,textarea').filter(':visible');
                    var nextIndex = focusable.index(this) == focusable.length -1 ? 0 : focusable.index(this) + 1;
                    next = focusable.eq(nextIndex);
                    next.focus();
                    return false;
                }
            });
        }
    };

    ko.applyBindings({});		
			  
        </div>
 
      <!-- /.modal-dialog --> 
   </div>