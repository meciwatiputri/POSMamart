<?php 

require_once 'ViewPengelolaanLaporan.php';
/**
* 
*/
class PengelolaanLaporanUI extends ViewPengelolaanLaporan
{
	
	public function tampilPengelolaanLaporanUI()
	{
		include_once 'pages/listceo.php';
		$this->end();
	}
}
?>