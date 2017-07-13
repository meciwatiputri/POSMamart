<?php 

include_once 'Model.php';
class Admin extends Model
{
	private $kode_admin;
	private $password;
	public $nama;
	public $nik;
	public $jenis_kelamin;
	public $alamat;
	public $no_telp:

	public function getListAdmin()
	{
		$query = $this->db->prepare("SELECT * FROM Admin");
    		$query->execute();
    		$data = $query->fetchAll();

    		return $data;
	}
	public function setAdmin($kode_admin,$password,$nama,$nik,$jenis_kelamin,$alamat,$no_telp)
	{
		try
		  {
		   $stmt = $this->db->prepare("INSERT INTO User(kode_admin,password,nama,nik,jenis_kelamin,alamat,$no_telp) VALUES(:Id_Admin,:Password,:Nama,:Nik,:Jenis_Kelamin,:Alamat,:No_Telp)");
		   $stmt->bindparam(":Id_Admin",$kode_admin);
		   $stmt->bindparam(":Password",$password);
		   $stmt->bindparam(":Nama",$nama);
		   $stmt->bindparam(":Nik",$nik);
		   $stmt->bindparam(":Jenis_Kelamin",$jenis_kelamin);
		   $stmt->bindparam(":Alamat",$alamat);
		   $stmt->bindparam(":No_Telp",$no_telp);
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