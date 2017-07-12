<?php 
/**
* 
*/
include_once 'Controller.php';

class ControlBarang extends Controller
{
	
	public function getDaftarKategori()
	{
		include_once 'model/Kategori.php';
		$kat  = new Kategori();
		$daftar_kategori = $kat->getDaftarKategori();

		return $daftar_kategori;
	}
	public function setBarang()
	{
		include_once 'model/Barang.php';
		$nbarang = new Barang();
		$kode_barang = $_POST('Kode Barang');
		$nama_barang = $_POST['Nama Barang'];
		$id_kategori = $_POST['Kategori'];
		$stock = $_POST['Stock'];
		$harga_beli = $_POST['Harga Beli'];
		$harga_jual= $_POST['Harga Jual'];
		$pesan = $mbarang->setBarang($kode_barang,$nama_barang,$id_kategori,$stock,$harga_beli,$harga_jual);

		return $pesan;
	}
