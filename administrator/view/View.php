<?php 

/**
* 
*/
class ViewAdmin
{
	public $title;
	public $content;

	function __construct()
	{
		include_once 'template/header.php';
		include_once 'template/sidebarAdmin.php';
		// include_once 'content.php';
		
	}

	protected function end(){
		
	}
}

class ViewCeo
{
	public $title;
	public $content;

	function __construct()
	{
		include_once 'template/header.php';
		include_once 'template/sidebarCeo.php';
		// include_once 'content.php';
		
	}

	protected function end(){
		
	}
}
class ViewLogistik
{
	public $title;
	public $content;

	function __construct()
	{
		include_once 'template/header.php';
		include_once 'template/sidebarLogistik.php';
		// include_once 'content.php';
		
	}

	protected function end(){
		
	}
}
class ViewKasir
{
	public $title;
	public $content;

	function __construct()
	{
		include_once 'template/header.php';
		include_once 'template/sidebarKasir.php';
		// include_once 'content.php';
		
	}

	protected function end(){
		
	}
}
 ?>