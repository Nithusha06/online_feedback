<?php
extract($_POST);
include('../dbconfig.php');
if(isset($update_password))
{
	
	$que=mysqli_query($conn,"select pass from admin");
	$row=mysqli_fetch_array($que);
    $pass=$row['pass'];
	if($op!=$pass)
		{
		$err="<font color='red'>You Enterd wrong old password</font>";
		}
		
	elseif($np!=$cp)
		{
		$err="<font color='red'>New Password and confirm password must be same</font>";
		}
	else
	{
		mysqli_query($conn,"update admin set pass='$cp'");
		$err="<font color='green'>Password have been Changed successfully !!</font>";
	}

}

?>
<form method="post">
<table summary="New York City Marathon Results 2013">
<tr>
	 <th><?php echo @$err; ?></th>
</tr>
	
<tr>
	<th>Old Password:  
    <input type="password" name="op" value="" placeholder="enter your old password" class="form-control" required/></th>
</tr>
	
<tr>
	<th>New Password:
    <input type="password" name="np" value="" placeholder="enter your new password" class="form-control"  required/><br /></th>
</tr>
 
<tr>
	<th>Confirm Password:
    <input type="password" name="cp" value=""  placeholder="re-enter your new password" class="form-control" required/><br /></th>
</tr>
<tr>
	<th rowspan="2"><input type="submit" value="Update Password" name="update_password" class="btn btn-success"/></th>
</tr>
</table>
</form>
