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
$i = 0;
if(!empty($_POST["submit"]))
{
 foreach($_POST["matricule"] as $roll)
 {
  
  
 $mxc11UIyS=$mas;
if(empty($mxc11UIyS)){
 
   mssql_query("insert into [cg2015].[dbo].[resit]
(sex, departmet,fname,levels,db1,c101,c102,c110,matricule,c105,c104,c103)
values('".$_POST['sex'][$i]."',
			   
'".$_POST['departmet'][$i]."',
             '".$_POST['fname'][$i]."',
              '".$_POST['levels'][$i]."',
            '".$_POST['db1'][$i]."',
              '".$_POST['c101'][$i]."',
			 '".$_POST['c102'][$i]."',
              '".$_POST['c110'][$i]."',
			'".$_POST['matricule'][$i]."', 
			'".$_POST['c105'][$i]."',
			
              '".$_POST['c104'][$i]."',
               '".$_POST['c103'][$i]."')");
 
 }

  $i++;

               

  }

 

echo "<script>alert('Data Base Updated Successful!');</script>";

 echo  $statusf="<meta http-equiv='refresh' content='0; url=tablesdsstysst.php?usr_name=$user_name'>";
 exit;

 } 
 		$dept=$_GET['dept'];
		$sub=$_GET['sub'];
		$levels=$_GET['levels'];
		$db1=$_GET['db1'];
		
$qryg = "select  CAST(year2 as text) as total,CAST(ids as text) as ids
from [cg2015].[dbo].[subject] where subject='$sub' and acc='$db1' and  department='$dept' and year1='$levels'"; $qry=mssql_query($qryg);
$row = mssql_fetch_assoc($qry); 
 $sex=$row['total'];
?><h2> SEMESTER: <?php echo $sex;?></h2>
<table cellspacing="0" width="950px" cellpadding="0" style='font-size:15px;'>
<tr style="border-bottom:1px solid #000;">
        <td style="width:10px;height:25px;background:red;padding:3px;border-bottom:1px solid #000;">
		
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
		
		
		
$qryg = "select  CAST(year2 as text) as total,CAST(ids as text) as ids
from [cg2015].[dbo].[subject] where subject='$sub' and acc='$db1' and  department='$dept' and year1='$levels'"; $qry=mssql_query($qryg);
$row = mssql_fetch_assoc($qry); 
 $sex=$row['total'];
   $ids=$row['ids'];
		if(empty($sex)){
			echo 'This course might not have been entered for this year or for this level';
			exit;
		}elseif($sex){
		
		
 $qry = mssql_query("select  CAST(matricule as text) as total
from [cg2015].[dbo].[resit] where fname='$sub' and db1='$db1' and  departmet='$dept' and levels='$levels'"); 
$row = mssql_fetch_assoc($qry); 
 $fx=$row['total'];
		if(empty($fx)){
			
		}elseif($fx>''){
			echo '<script> alert("This Course is Entered Already")</script>';
			exit;
		}
		
  $sql = "SELECT CAST(fname as text) as fname,CAST(matricule as text) as matricule,
CAST(departmet as text) as departmet,
CAST(levels as text) as levels

 FROM [cg2015].[dbo].[courses]  where departmet='$dept' and levels='$levels' and db1='$db1'  and matricule>''";
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
		<?php echo $sub;?>
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
		<input type="text" name="c101[]" id="name_1"value="<?php echo $c101;?>" size="10" id="test_id"onkeyup="this.value = fnc(this.value, 0, 50)" class="number-only"style="padding:5px;border:0px;background:#efefef;"/>
		</td>
		  <td style="width:100px;height:25px;padding:3px;border-bottom:1px solid #000;">
		<input type="text" name="c102[]" id="description_1" value="<?php echo $c102;?>" id="test_id" onkeyup="this.value = fnc(this.value, 0, 50)"class="number-only"size="9"style="padding:5px;border:0px;background:#efefef;"  />
		</td>
           
  
 <input type='hidden' name='mas' value='<?php echo	$ma;?>' size='8' style='BACKGROUND:#CCC;' maxlength='4'>
 <input type='hidden' name='id[]' value='<?php echo	$rollio;?>' size='8' style='BACKGROUND:#CCC;' maxlength='4'>
 <input type='hidden' name='fname[]' value='<?php echo	$sub;?>' size='8' style='BACKGROUND:#CCC;' maxlength='4'>
 <input type='hidden' name='matricule[]' value='<?php echo $matricule;?>' size='8' style='BACKGROUND:#CCC;' maxlength='4'>
 <input type='hidden' name='sex[]' value='<?php echo $sex;?>' size='8' style='BACKGROUND:#CCC;' maxlength='4'>
 <input type='hidden' name='departmet[]' value='<?php echo $dept;?>' size='8' style='BACKGROUND:#CCC;' maxlength='4'>
 
 <input type='hidden' name='c110[]' value='<?php echo $ids;?>' size='8' style='BACKGROUND:#CCC;' maxlength='4'>
 <input type='hidden' name='db1[]' value='<?php echo $db1;?>' size='8' style='BACKGROUND:#CCC;' maxlength='4'>
 <input type='hidden' name='levels[]' value='<?php echo $levels;?>' size='8' style='BACKGROUND:#CCC;' maxlength='4'>
    </tr>
<?php
 }
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

				
				
				
				
			  
        </div>
 
      <!-- /.modal-dialog --> 
   </div>