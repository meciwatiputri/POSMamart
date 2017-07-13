<?php 

include_once 'Model.php';
class Barang extends Model
{
	public $kode_barang;
	public $nama_barang;
	public $id_kategori;
	public $stock;
	public $harga_beli;
	public $harga_jual;
	public $satuan;
	public function getListBarang()
	{
		$query = $this->db->prepare("SELECT * FROM Barang");
    		$query->execute();
    		$data_brg = $query->fetchAll();

    		return $data_brg;
	}

	public function setBarang($kode_barang,$nama_barang,$id_kategori,$stock,$harga_beli,$harga_jual)
	{
		try
		  {
		   $stmt = $this->db->prepare("INSERT INTO Barang(kode_barang,nama_barang,id_kategori,stock,harga_beli,harga_jual,satuan) VALUES(:Id_Barang,:Nama_Barang,:Id_kategori,:Stock,:Harga_Beli,:Harga_Jual,:Satuan)");
		   $stmt->bindparam(":Id_Barang",$kode_barang);
		   $stmt->bindparam(":Nama_Barang",$nama_barang);
		   $stmt->bindparam(":Id_kategori",$id_kategori);
		   $stmt->bindparam(":Stock",$stock);
		   $stmt->bindparam(":Satuan",$satuan);	
		   $stmt->bindparam(":Harga_Jual",$harga_jual);
		   $stmt->bindparam(":Harga_Beli",$harga_beli);
		   $stmt->execute();
		   return true;
		  }
		  catch(PDOException $e)
		  {
		   echo $e->getMessage(); 
		   return false;
		  }
	}
}

 ?>