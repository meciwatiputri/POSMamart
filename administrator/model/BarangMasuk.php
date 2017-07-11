<?php 

include_once 'Model.php';
class BarangMasuk extends Model
{
	public $id_masuk;
	public $tanggal;
	public $harga;
	public $jumlah;
	public $satuan;
	public $total;
	public $kode_barang;
	public $kode_supplier;
	public $kode_pemesanan;
	public $kode_user;
}

 ?>