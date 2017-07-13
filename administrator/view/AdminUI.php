<?php 

require_once 'View.php';
/**
* 
*/
class AdminUI extends ViewAdmin
{
	
	public function tampilAdminUI()
	{
		include_once 'model/Admin.php';
		$adm = new Admin();
		$data_admin = $adm->getListAdmin();

		include_once 'pages/listAdmin.php';
		$this->end();
	}
	public function tampilUser()
	{	
		include_once 'model/User.php';
		$user = new User();
		$data_user = $user->getListUser();

		include_once 'pages/listUser.php';
		$this->end();
	}
	public function tampilLengkapUser()
	{
		include_once 'model/User.php';
		$user = new User();
		$data_user = $user->getListUser();

		include_once 'pages/dataUserLengkap.php';
		$this->end();
	}
	public function tampilFormUser()
	{	
		include_once 'pages/formUser.php';
		$this->end();
	}
	public function inputUser()
	{	
		include_once 'pages/pesansukses2.php';
		$this->end();
	}
}
?>