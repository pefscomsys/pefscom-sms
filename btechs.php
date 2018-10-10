<div style="FLOAT:LEFT; width:900px; height:500px;">
<?php
$nn= round ($take);
$mxc11sI=$semeste;
if(empty($mxc11sI)){
}
elseif($mxc11sI>="1" && $mxc11sI<="1"){
$sff= "<i> OCT 19</I>";$rrrrrr="$nn";$rx=round ($take);

$sff2= "<i> MARCH 21</I>";
} 
elseif($mxc11sI>="2" && $mxc11sI<="2"){
$sff= "<i> APRIL 7</I>";$rrrrrr="$nn";$rx=round ($take);

$sff2= "<i> JULY 7</I>";
} 
elseif($mxc11sI>="3" && $mxc11sI<="3"){
$sff= "<i> SEPT 4 </I>";
$rrrrrr=" $rtyy";$rx=round ($take);

$sff2= "<i> SEPT 9</I>";$rrrrrr=" $rtyy";$rx=round ($take);
} 

?>



<div style="float:left; height:200px; width:1100px;">


<div style="float:left; height:130px; width:350px;">

<div style="float:left; height:30px; width:280px;font-weight:bold;font-size:21px;letter-spacing:1px;">
The University Of Bamenda
</div>


<div style="float:left; height:120px; width:280px;">
<img src="bamenda.png" width="150px" height="120px">

</div>
</div>
<div style="float:left; height:120px; width:300px;">



</div>

<div style="float:left; height:120px; width:280px;">


<div style="float:left; height:20px; width:450px;">

<div style="float:left; height:60px; width:400px;font-weight:bold;font-size:21px;letter-spacing:1px;">
Higher Institute of Manangement Studies (HIMS) BUEA
</div>

    
<div style="float:left; height:150px; width:280px;">
<img src="logo.png" width="170px" height="120px">

</div>



</div>

</div>


<div style="float:left; height:200px;text-align:center; width:1100px;line-height:25px;FONT-SIZE:18PX;">


<br><br><B>
 <?PHP ECHO $ef;?> RESULTS <?PHP ECHO $take;?><BR>
EXAMINATION BEGINNING FROM  <?PHP 
echo $sff;?>, <?PHP 
echo $rrrrrr;
?> AND ENDING <?PHP 
echo $sff2;?> <?PHP 
$nn=$rx;
echo $nn+1;
?>
<BR> FREQUENCY DISTRUBUTION OF PERFORMANCE OF STUDENTS<BR>

DEPARTMENT: <?PHP ECHO $department;?>





</div>
