<?php 

include_once 'Model.php';
class User extends Model
{
	private $kode_user;
	private $password;
	public $nama;
	public $nik;
	public $jenis_kelamin;
	public $alamat;
	public $no_telp;
	public $kode_admin;
	public function getListUser()
	{
		$query = $this->db->prepare("SELECT * FROM User");
    		$query->execute();
    		$data = $query->fetchAll();

    		return $data;
	}
	public function setUser($kode_user,$password,$nama,$nik,$jenis_kelamin,$alamat,$no_telp,$kode_admin)
	{
		try
		  {
		   $stmt = $this->db->prepare("INSERT INTO User(kode_user,password,nama,nik,jenis_kelamin,alamat,$no_telp,kode_admin) VALUES(:Id_User,:Password,:Nama,:Nik,:Jenis_Kelamin,:Alamat,:No_Telp,:Id_Admin)");
		   $stmt->bindparam(":Id_User",$kode_user);
		   $stmt->bindparam(":Password",$password);
		   $stmt->bindparam(":Nama",$nama);
		   $stmt->bindparam(":Nik",$nik);
		   $stmt->bindparam(":Jenis_Kelamin",$jenis_kelamin);
		   $stmt->bindparam(":Alamat",$alamat);
		   $stmt->bindparam(":No_Telp",$no_telp);
		   $stmt->bindparam(":Id_Admin",$kode_admin);
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