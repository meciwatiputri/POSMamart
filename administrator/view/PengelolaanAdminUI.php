<?php 

require_once 'ViewPengelolaanAdmin.php';
/**
* 
*/
class PengelolaanAdminUI extends ViewPengelolaanAdmin
{
	
	public function tampilPengelolaanAdminUI()
	{
		include_once 'pages/listadmin.php';
		$this->end();
	}
}
?>