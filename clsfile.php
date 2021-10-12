<?php
	class myfile
	{
		function uploadfile($name, $tmp_name,$folder)
		{
			if($name!='' && $tmp_name!='' && $folder!='')
			{
				date_default_timezone_set('Asia/Ho_Chi_Minh');
				$rename=time();
				$rename1=(date("his", $rename));
				$newname=$folder."/".$rename1.$name;
				echo $newname;
				echo '<br>';
				if(move_uploaded_file($tmp_name, $newname))
				{
					return 1;	
				}
				else
				{
					return 0;	
				}	
			}
			else
			{
				return 0;	
			}	
		}	
	}
?>