<html>
<head>

  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>
<body>

<?php
include 'dbcs.php';


define ("MAX_SIZE","400");
function getExtension($str) {

         $i = strrpos($str,".");
         if (!$i) { return ""; } 

         $l = strlen($str) - $i;
         $ext = substr($str,$i+1,$l);
         return $ext;
 }
 $errors=0;
 
 if($_SERVER["REQUEST_METHOD"] == "POST")
 {
        $image =$_FILES["file"]["name"];
 $uploadedfile = $_FILES['file']['tmp_name'];

  if ($image) 
  {
  $filename = stripslashes($_FILES['file']['name']);
        $extension = getExtension($filename);
  $extension = strtolower($extension);
 if (($extension != "jpg") && ($extension != "jpeg") 

&& ($extension != "png") && ($extension != "gif")) 
  {
echo ' Unknown Image extension ';
$errors=1;
  }
 else
{
 echo  $size=filesize($_FILES['file']['tmp_name']);
 
if ($size > MAX_SIZE*8024)
{
 echo "You have exceeded the size limit";
 $errors=1;
}
 
if($extension=="jpg" || $extension=="jpeg" )
{
 $uploadedfile = $_FILES['file']['tmp_name'];
$src = imagecreatefromjpeg($uploadedfile);
}
else if($extension=="png")
{
$uploadedfile = $_FILES['file']['tmp_name'];
$src = imagecreatefrompng($uploadedfile);
}
else 
{
$src = imagecreatefromgif($uploadedfile);
}
 
list($width,$height)=getimagesize($uploadedfile);

$newwidth=140;
$newheight=($height/$width)*$newwidth;
$tmp=imagecreatetruecolor($newwidth,$newheight);

$newwidth1=140;
$newheight1=($height/$width)*$newwidth1;
$tmp1=imagecreatetruecolor($newwidth1,$newheight1);

imagecopyresampled($tmp,$src,0,0,0,0,$newwidth,$newheight,

 $width,$height);

imagecopyresampled($tmp1,$src,0,0,0,0,$newwidth1,$newheight1, 

$width,$height);

$filename = "graph/html/old". $_FILES['file']['name'];
$filename1 = "graph/html/new/". $_FILES['file']['name'];

imagejpeg($tmp,$filename,100);
imagejpeg($tmp1,$filename1,100);

imagedestroy($src);
imagedestroy($tmp);
imagedestroy($tmp1);
}
}
}



$file = $_FILES ['pic'];
 $name1 = $file ['name'];
 $newlocation="";
  $bon='"\"';
  $nms="$name1";
  
 $newlocation="$newlocation$bon$nms";
$type = $file ['type'];
 $size = $file ['size'];
$tmppath = $file ['tmp_name']; 


if($name1!="")
{
if(move_uploaded_file ($tmppath, 'graph/html/new/k'.$name1))//image is a folder in which you will save image
{


  
  
  
  
  
  
  
  
  
  
  
  
  
  
$target = $target . basename( $_FILES['file']['name']);
$photo=($_FILES['file']['name']);

echo  $newlocation='C:\xampp\htdocs\uschool\graph\html\new';



$query="INSERT INTO [cg2015].[dbo].[employees] ([empname], [profile_pic])
SELECT '$photo', *
FROM OPENROWSET(BULK N'$newlocation\k$name1', SINGLE_BLOB) image";
mssql_query($query);

}
}

	 
?>


<form name="form" action="tablesdsi.php" method="POST" enctype="multipart/form-data">
<input type="hidden" name="do" value="update">
Upload this file: <INPUT  id="file1" name="pic" type='file' TYPE="file">

<INPUT TYPE="submit" VALUE="Send File"></FORM>
</form>
        </div>
 
      <!-- /.modal-dialog --> 
   </div>