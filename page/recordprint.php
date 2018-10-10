<?php
include 'dbcs.php';

page_protect();

	
	
	
				  
				  
				  
				  ?>
				  <head><TITLE>Class List</TITLE>
 <link rel="stylesheet" href="test.css" 
type="text/css">
<style>
body {size:A4 ;
        margin: 0;
        padding: 0;
        font: 25pt;
    }
    * {
        box-sizing: border-box;
        -moz-box-sizing: border-box;
    }
    .page {
        width: 750px;
        min-height: 47.7cm;
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
        size: A4  ;
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



th.rotate {
  /* Something you can count on */
  height: 150px;
  white-space: nowrap;
  padding:1px;
}

th.rotate > div {
	font-weight:normal;
  transform: 
    /* Magic Numbers */
    translate(2px, 51px)
    /* 45 is really 360 - 45 */
    rotate(270deg);font-family:calibri;
  width: 24px;
}
th.rotate > div > span {
  border-bottom: 1px solid #ccc;
margin-left:-40px;
  margin-top:-10px;font-family:calibri;
}
</style>
</head><?php
$roll=$_GET["1"];
$query="select * from school where roll='1'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
?>

<?php  $school=$row[1];
$school2=$row[2];
?>
<?php } ?><?php
$roll=$_GET["1"];
$query="select * from school where roll='2'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
?>

<?php  $schoolx=$row[1];
$school2x=$row[2];
?>
<?php } ?>
				  
<body  style='font-family:calibri;'>

<?php
$department=$_POST["department"];
$levels=$_POST["levels"];
$roll=$_GET["1"];
$query="select * from rushs where roll='1'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>
<?php   $take=$row[1];



?>
		 

<?php } ?>
		  <?php 

		 
		 
		 
	 $qryg= "select  count(*) as total
 from historic where   oldb='$take' and amountpaid='$department' and class='$levels' "; 
$tyyi=mysql_query($qryg);
$row = mysql_fetch_assoc($tyyi); 
  $xss=$row['total'];
 $totalpagess=round(($xss/20),2);
  
  
   $totalx=round(($xss/20),0);
   if(empty($totalpagess)){
	   $totalpages='0';
}elseif($totalpagess>0 && $totalpagess>$totalx ){
	
	 $totalpages=$totalx+1;
}
   elseif($totalpagess>0 && $totalpagess=$totalx ){
	
	 $totalpages=$totalx;
}

   
   
 $is=$totalpages; $x=20;
		$xo=20;
		
		
		
		
		
		for ($i=1; $i<=$totalpages; $i++) { 
			   						 	$startfrom= $i;
											
											
					  $startfromy=$startfrom+1;							 
		 if(empty($startfromy)){
	 $startfromy=$startfrom+1;
	 
	 "page 0";
	 
 }elseif($startfrom>0 && $startfrom<"$startfromy"   ){
			   $startfromy=$startfrom;
	
		 //usin the page number generating 
		 $numberrecpage=($startfromy*20);
		if(empty($numberrecpage)){
			
		}elseif($numberrecpage>0  && $numberrecpage<21){
			//this is always the first box
			 $packk=1;
			 $numberrec=20;
		$rso="page 1";
				  $cell=20;
				  $cell1=$cell*1;
		  //this where the frame falls
		  ?>
		  
		
		 
		 
		 
		 
			 <div class="page"  >
			 
		 	 <div style="float:left; width:900px; height:200px;margin-top:-60px; margin-left:-50px;  color:#000; text-align:center;">
			  <div style="float:left; width:350px; height:310px;">
			   <div style="float:left; width:350px; height:35px;font-size:24px;;">
			  REPUBLIQUE DU CAMEROUN
	</div>
				   <div style="float:left; width:350px;text-align:center; height:25px;font-size:20px;;">
			  Paix-Travail-Patrie
	</div> 	   <div style="float:left; width:350px;text-align:center; height:20px;font-size:20px;;">
			  **********
	</div> 
			   <div style="float:left; width:350px;text-align:center; height:25px;font-size:20px;;">
	
	</div> 
	
	
			 <div style="float:left; width:400px;text-align:center;margin-left:-30px; height:25px;font-size:20px;font-family:times;">
	<b>L</b>IMBE <b>N</b>AUTICAL <b>A</b>RTS AND <b>F</b>ISHERIES 
	</div> 
	    <div style="float:left; width:350px;text-align:center; height:25px;font-size:20px;;font-family:times;">
			<b>I</b>NSTITUTE
	</div> 
	
	<div style="float:left; width:350px;text-align:center; height:25px;font-size:20px;;font-family:times;">
		P.O. Box: 485 Limbe
	</div> 
	
	
	
	
	
	
	
	
			 
	</div>
		  <div style="float:left; width:180px; height:310px;">
			 
			 <img src="logo.png">
			 
			 
	</div>	 
			  <div style="float:left; width:350px; height:310px;">
			 	   <div style="float:left; width:350px; height:35px;font-size:24px;;">
			REPUBLIC OF CAMEROON
	</div>	   <div style="float:left; width:350px;text-align:center; height:25px;font-size:20px;;">
			 Peace - Work - Fatherland
	</div> 	   <div style="float:left; width:350px;text-align:center; height:20px;font-size:20px;;">
			  **********
	</div> 
			   <div style="float:left; width:350px;text-align:center; height:25px;font-size:20px;;">
	
	</div> 
			   <div style="float:left; width:400px;text-align:center; height:25px;font-size:20px;;font-family:times;">
	<b>L</b>IMBE <b>N</b>AUTICAL <b>A</b>RTS AND <b>F</b>ISHERIES 
	</div> 
	    <div style="float:left; width:350px;text-align:center; height:25px;font-size:20px;;font-family:times;">
			<b>I</b>NSTITUTE
	</div> <div style="float:left; width:350px;text-align:center; height:25px;font-size:20px;;font-family:times;">
		P.O. Box: 485 Limbe
	</div> 
	
			 
			 
	</div>	 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
		
	</div>
	
	
		 	 <div style="float:left; width:750px; height:25px; text-align:center; color:#000; text-align:center;font-size:25px;">
	
	<b>FICHE DE PRESENCE </b>
	
		
	</div>
	
	
		 	 <div style="float:left; width:750px; height:35px; text-align:center; color:#000; text-align:center;font-size:22px;">
	
	(ETUDIANTS)
	
		
	</div>
	

	
	
	
	
		 	 <div style="float:left; width:900px; height:35px; margin-left:-53px;text-align:center; color:#000; text-align:center;font-size:17px;">
	
		 		 <div style="float:left; width:200px; height:25px;">
			DATE :___/___/______                                                                                               
			 
			 
			 </div>
 <div style="float:left; width:100px; height:25px;">
			                                                     
			 
			 
			 </div><div style="float:left; width:250px; height:25px;">
			                                                                                                   
			 
			 
			 </div>
	 <div style="float:left; width:100px; height:25px;">
			                                                     
			 
			 
			 </div>
			 
			 
			 
			 <div style="float:left; width:250px; height:25px;">
			                                                 
			 
			 
			 </div>
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
		
	</div>
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
			  <div style="float:left; margin-left:-50px;width:900px; height:auto;margin-top:0px;  border:2px solid #000;">
			  <table cellspacing="0" cellpadding="0" width="896px" style="font-family:arial;">
			  <tr><th style="width:70px;height:45px;background:#ccc;font-size:16px; padding:2px;text-align:center;border-right:1px dashed #ccc;;border-bottom:2px solid #000;">
S/N
			  
			  </th>
			  
			  <th style="width:460px;height:45px;background:#ccc; padding:2px;text-align:left;border-right:1px dashed #ccc;border-bottom:2px solid #000;">
&nbsp;Full Names
			  
			  </th>
			  
			  	  <th style="width:170px;height:45px;background:#ccc; padding:2px;text-align:center;border-right:1px dashed #ccc;border-bottom:2px solid #000;">
Matricule
			  
			  </th>
			  
			    	  <th style="width:100px;height:45px;background:#ccc; padding:2px;text-align:center;border-right:1px dashed #ccc;border-bottom:2px solid #000;">
Expected Amount
			  
			  </th>
			  
			  	  <th style="width:130px;height45px;background:#ccc; padding:2px;text-align:center;border-right:1px dashed #ccc;border-bottom:2px solid #000;">
Amount Paid
			  
			  </th>  
			  
			  			  	  <th style="width:100px;height:45px;background:#ccc; padding:2px;text-align:center;border-bottom:2px solid #000;">
Bal
			  
			  </th>
			 </tr>
			 
			 
			 <?php  


		$resulths="SELECT *   from historic where   oldb='$take' and amountpaid='$department' and class='$levels' order by student_name LIMIT 0, 20 ";
		
$dssss=mysql_query($resulths);$i=1;
		 while ($row = mysql_fetch_array($dssss)) {
		 
		
		 
		 ?> 
			 
			 		  <tr><td style="width:70px;height:35px; padding:2px;text-align:center;border-right:1px dashed #ccc;border-bottom:1px dashed #ccc;">
<?php echo $i++;;?>
			  
			  </td>
			  
			  <td style="width:460px;height:25px; text-transform:uppercase;padding:2px;text-align:left;border-right:1px dashed #ccc;border-bottom:1px dashed #ccc;">
&nbsp;&nbsp;
<?php echo $row['student_name'];?>
			  
			  </td>
			  
			  	  <td style="width:170px;height:25px; padding:2px;text-align:center;border-right:1px dashed #ccc;border-bottom:1px dashed #ccc;">
<?php echo $row["matricule"];?>  
			  </td>
			  
			    	  <td style="width:100px;height:25px; padding:2px;text-align:center;border-right:1px dashed #ccc;border-bottom:1px dashed #ccc;">
<?php echo  number_format($row['expected_amount']);?>  
			  </td>
			  
			  	  <td style="width:130px;height:25px; padding:2px;text-align:center;border-right:1px dashed #ccc;border-bottom:1px dashed #ccc;">
<?php echo number_format($row['amount_paid']);?>
			  
			  </td>  
			  
			  			  	  <td style="width:100px;height:25px; padding:2px;text-align:center;border-bottom:1px dashed #ccc;">

			  <?php echo $bm=number_format($row['expected_amount']-$row['amount_paid']);?>
			  </td>
			 </tr>
			 
			 
			 
			 
			 
			 
			 
		 <?php } ?>
			 
			 
			 
			 
			 
			 
			 
			 
			 </table>
			 </div>
			 	 	 
				 </div>	 
			 
			 
		 
		 
		 
		 
		 
		 
 <?php
		  }
		  
		elseif($numberrecpage>20){	  
			//this are the different other boxes shown here
			 $packs=($numberrecpage/20);
			
			
			 $numberrec=($startfromy*20);
			 $xi=(($numberrec-20));
			 
			 	  $cellx1=20;
	
							
			
		   ?>
		   
		   
		   
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 	 
			 <div class="page"  >
			 
		 	 <div style="float:left; width:900px; height:200px;margin-top:-60px; margin-left:-50px;  color:#000; text-align:center;">
			  <div style="float:left; width:350px; height:310px;">
			   <div style="float:left; width:350px; height:35px;font-size:24px;;">
			  REPUBLIQUE DU CAMEROUN
	</div>
				   <div style="float:left; width:350px;text-align:center; height:25px;font-size:20px;;">
			  Paix-Travail-Patrie
	</div> 	   <div style="float:left; width:350px;text-align:center; height:20px;font-size:20px;;">
			  **********
	</div> 
			   <div style="float:left; width:350px;text-align:center; height:25px;font-size:20px;;">
	
	</div> 
	
	
			 <div style="float:left; width:400px;text-align:center;margin-left:-30px; height:25px;font-size:20px;font-family:times;">
	<b>L</b>IMBE <b>N</b>AUTICAL <b>A</b>RTS AND <b>F</b>ISHERIES 
	</div> 
	    <div style="float:left; width:350px;text-align:center; height:25px;font-size:20px;;font-family:times;">
			<b>I</b>NSTITUTE
	</div> 
	
	<div style="float:left; width:350px;text-align:center; height:25px;font-size:20px;;font-family:times;">
		P.O. Box: 485 Limbe
	</div> 
	
	
	
	
	
	
	
	
			 
	</div>
		  <div style="float:left; width:180px; height:310px;">
			 
			 <img src="logo.png">
			 
			 
	</div>	 
			  <div style="float:left; width:350px; height:310px;">
			 	   <div style="float:left; width:350px; height:35px;font-size:24px;;">
			REPUBLIC OF CAMEROON
	</div>	   <div style="float:left; width:350px;text-align:center; height:25px;font-size:20px;;">
			 Peace - Work - Fatherland
	</div> 	   <div style="float:left; width:350px;text-align:center; height:20px;font-size:20px;;">
			  **********
	</div> 
			   <div style="float:left; width:350px;text-align:center; height:25px;font-size:20px;;">
	
	</div> 
			   <div style="float:left; width:400px;text-align:center; height:25px;font-size:20px;;font-family:times;">
	<b>L</b>IMBE <b>N</b>AUTICAL <b>A</b>RTS AND <b>F</b>ISHERIES 
	</div> 
	    <div style="float:left; width:350px;text-align:center; height:25px;font-size:20px;;font-family:times;">
			<b>I</b>NSTITUTE
	</div> <div style="float:left; width:350px;text-align:center; height:25px;font-size:20px;;font-family:times;">
		P.O. Box: 485 Limbe
	</div> 
	
			 
			 
	</div>	 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
		
	</div>
	
	
		 	 <div style="float:left; width:750px; height:25px; text-align:center; color:#000; text-align:center;font-size:25px;">
	
	<b>FICHE DE PRESENCE </b>
	
		
	</div>
	
	
		 	 <div style="float:left; width:750px; height:35px; text-align:center; color:#000; text-align:center;font-size:22px;">
	
	(ETUDIANTS)
	
		
	</div>
	

	
	
	
	
		 	 <div style="float:left; width:900px; height:35px; margin-left:-53px;text-align:center; color:#000; text-align:center;font-size:17px;">
	
		 		 <div style="float:left; width:200px; height:25px;">
			DATE :___/___/______                                                                                               
			 
			 
			 </div>
 <div style="float:left; width:100px; height:25px;">
			                                                     
			 
			 
			 </div><div style="float:left; width:250px; height:25px;">                                                             
			 
			 
			 </div>
	 <div style="float:left; width:100px; height:25px;">
			                                                     
			 
			 
			 </div>
			 
			 
			 
			 <div style="float:left; width:250px; height:25px;">
		                                                 
			 
			 
			 </div>
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
		
	</div>
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
			  <div style="float:left; margin-left:-50px;width:900px; height:auto;margin-top:0px;  border:2px solid #000;">
			  <table cellspacing="0" cellpadding="0" width="896px" style="font-family:arial;">
			  <tr><th style="width:70px;height:45px;background:#ccc;font-size:16px; padding:2px;text-align:center;border-right:1px dashed #ccc;;border-bottom:2px solid #000;">
S/N
			  
			  </th>
			  
			  <th style="width:460px;height:45px;background:#ccc; padding:2px;text-align:left;border-right:1px dashed #ccc;border-bottom:2px solid #000;">
&nbsp;Full Names
			  
			  </th>
			  
			  	  <th style="width:170px;height:45px;background:#ccc; padding:2px;text-align:center;border-right:1px dashed #ccc;border-bottom:2px solid #000;">
Matricule
			  
			  </th>
			  
			    	  <th style="width:100px;height:45px;background:#ccc; padding:2px;text-align:center;border-right:1px dashed #ccc;border-bottom:2px solid #000;">
Expected Amount
			  
			  </th>
			  
			  	  <th style="width:130px;height45px;background:#ccc; padding:2px;text-align:center;border-right:1px dashed #ccc;border-bottom:2px solid #000;">
Amount Paid
			  
			  </th>  
			  
			  			  	  <th style="width:100px;height:45px;background:#ccc; padding:2px;text-align:center;border-bottom:2px solid #000;">
Bal
			  
			  </th>
			 </tr>
			 
			 
			 <?php  



$cell=( ($numberrec-($cellx1)));
							 
							 $cels=$cell;
		$resulths="SELECT *   from historic where   oldb='$take' and amountpaid='$department' and class='$levels' order by student_name LIMIT $cels, $cellx1 ";
		
$dssss=mysql_query($resulths);
		 while ($row = mysql_fetch_array($dssss)) {
		 
		
		 
		 ?> 
			 
			 		  <tr><td style="width:70px;height:35px; padding:2px;text-align:center;border-right:1px dashed #ccc;border-bottom:1px dashed #ccc;">
<?php echo $i++;;?>
			  
			  </td>
			  
			  
			  <td style="width:460px;height:25px; text-transform:uppercase;padding:2px;text-align:left;border-right:1px dashed #ccc;border-bottom:1px dashed #ccc;">
&nbsp;&nbsp;
<?php echo $row['student_name'];?>
			  
			  </td>
			  
			  	  <td style="width:170px;height:25px; padding:2px;text-align:center;border-right:1px dashed #ccc;border-bottom:1px dashed #ccc;">
<?php echo $row["matricule"];?>  
			  </td>
			  
			    	  <td style="width:100px;height:25px; padding:2px;text-align:center;border-right:1px dashed #ccc;border-bottom:1px dashed #ccc;">
<?php echo  number_format($row['expected_amount']);?>  
			  </td>
			  
			  	  <td style="width:130px;height:25px; padding:2px;text-align:center;border-right:1px dashed #ccc;border-bottom:1px dashed #ccc;">
<?php echo number_format($row['amount_paid']);?>
			  
			  </td>  
			  
			  			  	  <td style="width:100px;height:25px; padding:2px;text-align:center;border-bottom:1px dashed #ccc;">

			  <?php echo $bm=number_format($row['expected_amount']-$row['amount_paid']);?>
			  </td>
			 </tr>
			 
			 
			 
			 
			 
			 
			 
		 <?php } ?>
			 
			 
			 
			 
			 
			 
			 
			 
			 </table>
			 </div>
			 	 	 
				 </div>	 
			 
			 
		 
			 
		   
		    <?php	   
		   

 
  } 
 	} 
 
  }
		 ?>
			 
			 
</body>
</html>
