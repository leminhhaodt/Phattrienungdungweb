<?php
//https://iuhedu-my.sharepoint.com/personal/18050011_hao_student_iuh_edu_vn/_layouts/15/guestaccess.aspx?share=ESQtWcIBLcVEueR6xOguMc4BbElMTxNrIE2HCz5ALNH1Gw&e=bvfGNv
session_start();
if(isset($_SESSION['user']) && isset($_SESSION['pass']))
{
	include("class/clslogin.php");
	$p=new login();
	$p->confirmlogin($_SESSION['user'],$_SESSION['pass']);
}
else
{
	header('location: login.php');
}
include("class/clsfile.php");
	$c= new myfile();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<form action="" method="post" enctype="multipart/form-data" name="form1" id="form1">
  Moi chon file:
  <label for="myfile"></label>
  <input type="file" name="myfile" id="myfile" />
  <input type="submit" name="nut" id="nut" value="Upload" />
  <?php
  	switch($_POST['nut'])
	{
		case 'Upload':
		{
			$name=$_FILES['myfile']['name'];
			$tmp_name=$_FILES['myfile']['tmp_name'];	
			$size=$_FILES['myfile']['size'];	
			$type=$_FILES['myfile']['type'];
			echo $name;
			echo '<br>';
			echo $tmp_name;
			echo '<br>';
			echo $size;
			echo '<br>';
			echo $type;
			echo '<br>';
			//
			/*if($size>100000)
			{
				echo 'file qua lon';	
			}
			else if($name == '')
			{
				echo 'ten file rong';	
			}
			else if($type == 'image/jpeg')
			{
				echo 'khong duoc upload file loai nay';	
			}
			else
			{
				$c->uploadfile($name,$tmp_name,"data");
				echo 'upload thanh cong';
			}*/
			//
			if($name!='')
			{
				$c->uploadfile($name,$tmp_name,"data");
				echo 'upload thanh cong';	
			}	
			else
			{
				echo 'UPLOAD KHONG THANH CONG';	
			}
			break;
		}	
	}
  ?>
</form>
</body>
</html>
