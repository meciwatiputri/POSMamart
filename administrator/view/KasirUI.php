<?php 

require_once 'View.php';
/**
* 
*/
class KasirUI extends ViewKasir
{
	
	public function tampilKasirUI()
	{
		
		include_once 'pages/listKasir.php';
		$this->end();
	}
	public function tampilFormTransaksi()
	{
		
		include_once 'pages/formTransaksi.php';
		$this->end();
	}

}
?>