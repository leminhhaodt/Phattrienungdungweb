<?php
include("class/clslogin.php");
$p=new login();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="">
  <table width="500" border="1" align="center">
    <tr>
      <td colspan="2" align="center">ĐĂNG NHẬP</td>
    </tr>
    <tr>
      <td width="266">User name</td>
      <td width="218"><label for="txtuser"></label>
      <input type="text" name="txtuser" id="txtuser" /></td>
    </tr>
    <tr>
      <td>Password</td>
      <td><label for="txtpass"></label>
      <input type="text" name="txtpass" id="txtpass" /></td>
    </tr>
    <tr>
      <td colspan="2" align="center"><input type="submit" name="nut" id="nut" value="Đăng nhập" /></td>
    </tr>
  </table>
  <div align="center">
  <?php
  	switch($_POST['nut'])
	{
		case 'Đăng nhập':
		{
			$user=$_REQUEST['txtuser'];
			$pass=$_REQUEST['txtpass'];
			if($user!='' && $pass!='')
			{
				if($p->mylogin($user, $pass)==0)
				{
					echo 'dang nhap khong thanh cong';	
				}	
			}
			else
			{
				echo 'vui long nhap usser vaf passs, 2 cai khong duoc trong';	
			}
			break;	
		}	
	}
  ?>
  </div>
</form>
</body>
</html>