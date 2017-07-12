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
}
	public function getListBarang()
	{
		$query = $this->db->prepare("SELECT * FROM Barang");
    		$query->execute();
    		$data = $query->fetchAll();

    		return $data;
	}

	public function setBarang($kode_barang,$nama_barang,$id_kategori,$stock,$harga_beli,$harga_jual)
	{
		try
		  {
		   $stmt = $this->db->prepare("INSERT INTO Barang(kode_barang,nama_barang,id_kategori,stock,harga_beli,harga_jual) VALUES(:Kode_Barang,:Nama_Barang,:Id_Kategori,:Stock,:Harga_Beli,:Harga_Jual)");
		   $stmt->bindparam(":Kode_Barang",$kode_barang);
		   $stmt->bindparam(":nama_barang",$nama_barang);
		   $stmt->bindparam(":Id_Kategori",$id_kategori);
		   $stmt->bindparam(":Stock",$stock);
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

 ?>