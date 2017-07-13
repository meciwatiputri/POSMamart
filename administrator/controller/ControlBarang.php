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
		$nama_barang = $_POST['namabarang'];
		$id_kategori = $_POST['kategori'];
		$stock = $_POST['stock'];
		$satuan = $_POST['satuan'];
		$harga_beli = $_POST['hargabeli'];
		$harga_jual= $_POST['Harga_Jual'];
		$pesan = $mbarang->setBarang($nama_barang,$id_kategori,$stock,$satuan,$harga_beli,$harga_jual);

		return $pesan;
	}
}