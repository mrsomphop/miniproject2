<?php
	// Switch01.php
	$username="admin";
	switch($username)
	
{
	case"manager":
		echo"ยินดีต้อนรับ คุณคือผู้จัดการ";
		break;
		
	case"admin";
		echo"ยินดีต้อนรับ คุณคือผู้ดูแลระบบ";
		break;
		
	case"Webmaster";
		echo"ยินดีต้อนรับ คุณคือผู้ดูแลเว็บไซต์";
		break;	
		
	default:
		echo"ยินดีต้อนรับ คุณคือผู้เยี่ยมชมเว็บไซต์";
			
}		
?>		