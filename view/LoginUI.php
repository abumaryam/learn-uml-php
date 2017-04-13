<?php 

require_once 'View.php';
/**
* 
*/
class LoginUI extends View
{
	
	function __construct()
	{
		$this->getStandardHeader('Login');
	}

	public function getDataLogin()
	{
		require_once 'page/getdatalogin.php';
		
	}
}


 ?>