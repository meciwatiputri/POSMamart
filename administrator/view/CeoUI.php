<?php 

require_once 'View.php';
/**
* 
*/
class CeoUI extends ViewCeo
{
	
	public function tampilCeoUI()
	{
		include_once 'pages/listCeo.php';
		$this->end();
	}
}
?>