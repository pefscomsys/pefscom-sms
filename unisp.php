<?php

include 'dbcs.php';
$ms=$_GET['roll'];
page_protect();

 ?>
<?php
 $department=$_POST["department"];
$db1=$_POST["db1"];
$levels=$_POST["levels"];
if(empty($department)){
	
	
}elseif($department>''){

	?>
<?php
}
?>
 <html>
 <head>
 <title>Class List</title>
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
<style type="text/css"> body {size:A4 Landscape;
        margin: 40px;
        padding: 0;
        font: 25pt;
    }
    * {
        box-sizing: border-box;
        -moz-box-sizing: border-box;
    }
    .page {
        width: 1450px;
        min-height: 29.7cm;
        padding: 2cm;
        margin: 1cm auto;
        background: white;
    }
    .subpage {
        padding: 1cm;
        border: 5px black solid;
        height: 237mm;
        outline: 2cm #000 solid;
    }
    
    @page {
        size: A4 landscape;
        margin: 0;
    }
    @media print {
        .page {
            margin: 0;
            border: initial;
            border-radius: initial;
            width: initial;
            min-height: initial;
            box-shadow: initial;
            background: initial;
            page-break-after: always;
        }
    }
.ExcelTableFormationCol {
                 
                  text-align: center;
                  font-family: Arial Narrow;
                  font-size: 14px;
                }

.ExcelTableFormationRow {
                  background-color: WHEAT;
                  text-align: center;
              font-family: Calibri;
              font-size: 16px;
              height: 20px;
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
      border: 1px solid #fff;
      border-right: 0px;
      border-bottom: 0px;
     }


table.gridtable {
	font-family: verdana,arial,sans-serif;
	font-size:11px;
	color:#333333;
	border-width: 1px;
	border-color: #666666;
	border-collapse: collapse;
}
table.gridtable td {
	border-width: 1px;
	padding: 8px;
	border-style: solid;
	border-color: #666666;
	background-color: #dedede;
}
table.gridtable td {
	border-width: 1px;
	padding: 8px;
	border-style: solid;
	border-color: #666666;
	background-color: #ffffff;
}

input{border-radius:0px; border: 0;
    box-shadow: none; /* outline:#fff;background:#fff;border-bottom:1px solid #efefef;}
</style>
</head>
<body onload="window.print();">
		<a onclick="window.open('unissp.php?levels=<?php echo $levels;?>&department=<?php echo $department;?>&db1=<?php echo $db1;?>&S=<?php echo $semesters;?>', '_blank', 'location=yes,height=570,width=520,scrollbars=yes,status=yes');">
		
		
		<?php
		
		 


	 $qryg= "select  count(*) as total
 from historic where classs='$department' and levels='$levels' and oldb='$db1' "; 
$tyyi=mssql_query($qryg);
$row = mssql_fetch_assoc($tyyi); 
  $xss=$row['total'];
 $totalpagess=round(($xss/27),2);
  
  
   $totalx=round(($xss/27),0);
   if(empty($totalpagess)){
	   $totalpages='0';
}elseif($totalpagess>0 && $totalpagess>$totalx ){
	
	 $totalpages=$totalx+1;
}
   elseif($totalpagess>0 && $totalpagess=$totalx ){
	
	 $totalpages=$totalx;
}

   
   
 $is=$totalpages; $x=27;
		$xo=27;
		
		
		
		
		
		for ($i=1; $i<=$totalpages; $i++) { 
			   						 	$startfrom= $i;
											
											
					  $startfroms=$startfrom+1;							 
		 if(empty($startfroms)){
	 $startfroms=$startfrom+1;
	 
	 "page 0";
	 
 }elseif($startfrom>0 && $startfrom<"$startfroms"   ){
			   $startfroms=$startfrom;
	
		 //usin the page number generating 
		 $numberrecpage=($startfroms*27);
		if(empty($numberrecpage)){
			
		}elseif($numberrecpage>0  && $numberrecpage<0){
			//this is always the first box
			 $packk=1;
			 $numberrec=27;
		  $rso="page 1";
				  $cell=27;
				  $cell1=$cell*1;
		  //this where the frame falls
		  ?>
		  
		 
		 
		 
		 
		 
		 
		 
		 
 <?php
		  }
		  
		elseif($numberrecpage>0){	  
			//this are the different other boxes shown here
			 $packs=($numberrecpage/27);
			
			
			 $numberrec=($startfroms*27);
			 $xi=(($numberrec-27));
			 
			 	  $cellx1=27;
	
							
			
		   ?>
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		<div class="page" STYLE="MARGIN-TOP:-75PX;margin-left:-75px;">
		
		
		
		
		<?php
		require "bin.php";
		
		?>
		
		
		
		
		
		
		
		
		
<div style="float:left; margin-top:25px;">



<div style="float:left; width:950px;height:25px;padding:3px;text-transform:uppercase;">
Department: <b><?php echo $department;?></b>
</div>

<div style="float:left; width:950px;height:25px;padding:3px;text-transform:uppercase;">
Levels: <b><?php echo $levels;?> ,<?php echo $db1;?></b>
</div>

<table cellspacing="$semester" cellpadding="2"class="gridtable" style="float:left;width:950px;border-collapse: margin-top:25px; collapse; border-bottom-width: 0px; border-right-width: 0px;color:#000;"><tr style="background-color: #EEEEEE;">
<td class="ExcelTableFormationCol" style="font-weight:bold;">S/N</td>
 <td class="ExcelTableFormationCol"style="font-weight:bold;">Student Names</td>
  <td class="ExcelTableFormationCol"style="font-weight:bold;">Matricule</td>
  <td class="ExcelTableFormationCol"style="font-weight:bold;">Expected_amount</td>
    <td class="ExcelTableFormationCol"style="font-weight:bold;">Amount Paid</td>
    <td class="ExcelTableFormationCol"style="font-weight:bold;">Balance</td>

	 
 </tr>
 
 <?php 
	 $cell=( ($numberrec-($cellx1)));
							 
							 $cels=$cell;
							 

$query = mssql_query("select  CAST(student_name as nvarchar(400)) as fname,CAST(balance as float) as balance,CAST(amount_paid as float) as amount_paid,CAST(expected_amount as float) as expected_amount, CAST(matricule as text) as matricule, CAST(classs as text) as classs from historic where classs='$department' and levels='$levels' and oldb='$db1'
 order by student_name ASC


 OFFSET $cels ROWS
                          FETCH NEXT  $cellx1  ROWS ONLY
							

"); $x=1;

		 while ($row = mssql_fetch_array($query)) {
		 
		 
		 
		 
		 
		 ?>
 
 <tr>
<td style='width:40px;text-align:center;'><?php echo $x++;?></td>  <td style='width:300px;'><?php echo $row["fname"];?></td>



<td style='width:100px;text-align:center;'><?php echo $row["matricule"];?></td>


<td style='width:60px;text-align:center;'><?php echo number_format($row["expected_amount"]);?></td>
<td style='width:100px;text-align:center;'><?php echo number_format($row["amount_paid"]);?></td>


<td style='width:100px;text-align:center;'><?php echo number_format($row["balance"]);?></td>


  
  
  </tr>
    <?php } ?>
  
  
  
 <tr>
<td style='width:40px;text-align:center;'></td>  <td style='width:300px;'></td>



<td style='width:100px;text-align:center;'></td>


<td style='width:60px;text-align:center;'><?php 


	 $qryg= "select  SUM(CAST(expected_amount as float)) as total
 from historic where classs='$department' and levels='$levels' and oldb='$db1' "; 
$tyyi=mssql_query($qryg);
$row = mssql_fetch_assoc($tyyi); 
echo  $xss=number_format($row['total']);









?></td>
<td style='width:100px;text-align:center;'><?php 




	 $qryg= "select  SUM(CAST(amount_paid  as float)) as total
 from historic where classs='$department' and levels='$levels' and oldb='$db1' "; 
$tyyi=mssql_query($qryg);
$row = mssql_fetch_assoc($tyyi); 
echo  $xss=number_format($row['total']);

?></td>


<td style='width:100px;text-align:center;'><?php 




	 $qryg= "select  SUM(CAST(balance  as float)) as total
 from historic where classs='$department' and levels='$levels' and oldb='$db1' "; 
$tyyi=mssql_query($qryg);
$row = mssql_fetch_assoc($tyyi); 
echo  $xss=number_format($row['total']);

?></td>


  
  
  </tr>
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  </table>
  </div>  </div></div>
   <?php	   
		   

 
  } 
 	} 
 
  }
		 ?>
  
  
