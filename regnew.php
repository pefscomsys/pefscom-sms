<?php include 'dbcs.php';
$nki=$_GET['roll'];
?><!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="w2ui-1.4.2.min.css" />
    <script src="jquery.min.js"></script>
    <script type="text/javascript" src="w2ui-1.4.2.min.js"></script>
</head>
<body><fieldset id="el02">
<legend>Access REGISTRATION page </legend>
<form action="registerrr.php" method="post" name="regForm" id="regForm" >
        <table width="95%" border="0" cellpadding="1" cellspacing="2" class="forms" bgcolor="#FFFFFF" border="1px">
          <tr> 
            <td colspan="2">Account Name<span class="required"><font color="#CC0000">*</font></span>
              <input name="full_name" type="text" style="background:#ccc;"id="full_name" size="40" class="required" value="<?php echo $row[4];?>"></td>
          </tr>
          
          <tr> 
            <td colspan="2">Contact Address (with ZIP)<span class="required"><font color="#CC0000">*</font></span> 
              <input name="address" type="text" style="background:#ccc;"id="address" size="40" class="required" value="<?php echo $row[9];?>"></td></textarea> 
              <span class="example"><B></B></span> </td>
          </tr>
          <tr> 
            <td>Country <font color="#CC0000">*</font></span></td>
            <td><select name="country" style="background:#ccc;"class="required" id="select8" >
               
                <option value="Cameroon">Cameroon</option>
                
              </select></td>
          </tr>
         
            <td>Phone<span class="required"><font color="#CC0000">*</font></span> 
            </td>
            <td><input name="tel" style="background:#ccc;"type="text" id="tel" class="required" value="<?php echo $row[8];?>">
			</td>
          </tr>  <tr> 
            <td>Farm</td><td colspan="2">
<select name="fax">
<?php
$rs=mysql_query("Select * from farm  where roll='$nki' order by  roll ASC",$link);
	  while($row=mysql_fetch_array($rs))
{
if($row[1]==$fees)
{
echo "<option value='$row[0]' selected>$row[1]</option>";
}
else
{
echo "<option value='$row[0]'>$row[1]</option>";
}
}
?></select></td>
          </tr>
          
            <td colspan="2"><h4><strong>Login Details</strong></h4></td>
          </tr>
          <tr> 
            <td>Username<span class="required"><font color="#CC0000">*</font></span></td>
            <td><input name="user_name" type="text"style="background:#ccc;" id="user_name" class="required username" minlength="5" value="<?php echo $row[2];?>" > 
              <input name="btnAvailable" type="button" id="btnAvailable" 
			  onclick='$("#checkid").html("Please wait..."); $.get("checkuser.php",{ cmd: "check", user: $("#user_name").val() } ,function(data){  $("#checkid").html(data); });'
			  value="Check Availability"> 
			    <span style="color:red; font: bold 12px verdana; " id="checkid" ></span> 
            </td>
          </tr>
          <tr> 
            <td>Your Email<span class="required"><font color="#CC0000">*</font></span> 
            </td>
            <td><input name="usr_email"style="background:#ccc;" type="text" id="usr_email3" class="required email" value="<?php 
echo " $rnd_id"; ?>@yahoo.com"> 
              <span class="example">** Valid email please..</span></td>
          </tr>
          <tr> 
            <td>Password<span class="required"><font color="#CC0000">*</font></span> 
            </td>
            <td><input name="pwd" style="background:#ccc;"type="password" class="required password" minlength="5" id="pwd" value="<?php 
echo " $rnd_id"; ?>"> 
             </td>
          </tr>
          <tr> 
            <td>Retype Pwd<span class="required"><font color="#CC0000">*</font></span> 
            </td>
            <td><input name="pwd2"  style="background:#ccc;"id="pwd2" class="required password" type="password" minlength="5" equalto="#pwd" value="<?php 
echo " $rnd_id"; ?>"></td>
          </tr>
          <tr> 
            <td>Categories</td><td colspan="2"><select name="user_level"style="background:#ccc;" class="required"   id="select8">
               
                <option value="19">Admin</a></option>
                <option value="11">Dean</option>
                <option value="1">Scanner</option>
				
                <option value="5.5">Helper Bursar</option>
                <option value="0">intenship books</option>
                <option value="9">Vote interface</option>
                <option value="8">Accountant</option>
                <option value="13">Manager</option>
				
                <option value="4">Security Post</option>
				
				
                <option value="10">Library</option>
                <option value="111">Student Affairs</option>
                <option value="7">Store Accountant</option>
				
      </select></td>
          </tr>
          <tr> 
            
          
          </tr>
        </table>
        <p align="center">
          <input name="doRegister" type="submit" id="doRegister" value="Register">
        </p>
      </form>
      <p align="right"><span style="font: normal 9px verdana"></span></p>
	   
      </td>
    <td width="196" valign="top">&nbsp;</td>
  </tr>
  <tr> 
    <td colspan="3">&nbsp;</td>
  </tr>
</table>
</form>
</fieldset>








<script type="text/javascript">
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





</body>
</html>