<?php 

require_once 'View.php';
/**
* 
*/
class LogistikGudangUI extends ViewLogistik
{
	
	public function tampilLogistikGudangUI()
	{
		
		include_once 'pages/listLogistik.php';
		$this->end();
	}

	public function tampilBarang()
	{
		include_once 'model/Barang.php';
		$brg = new Barang();
		$data_brg = $brg->getListBarang();

		include_once 'pages/listBarang.php';
		$this->end();
	}

	public function tampilFormBarang()
	{
		include_once 'controller/ControlBarang.php';

		$cb = new ControlBarang();
		$daftar_kategori = $cb->getDaftarKategori();

		include_once 'pages/formBarang.php';
		$this->end();

	}
	public function inputBarang()
	{
		include_once 'controller/ControlBarang.php';
		$cb = new ControlBarang();
		$pesan = $cb->setBarang();

		include_once 'pages/pesansukses1.php';
		$this->end();
	}

}
?>