<?php
 // - -If03.php
 
 $name ="admin";
if($name =="manager")
	{
		echo "ยินดีต้อนรับ คุณคือผู้จัดการ";
	}elseif ($name =="admin") 
		
	{
		echo "ยินดีต้อนรับ คุณคือผู้ดูแลระบบ";
	}elseif ($name =="Webmaster")

	{
		echo"ยินดีต้อนรับ คุณคือผู้ดูแลเว็บไซต์";
	}else	
				
	{
		echo"คุณคือผู้ใช้งาน";
	}	
					
					
?>