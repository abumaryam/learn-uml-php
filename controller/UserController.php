<?php 
require_once 'model/User.php';
/**
* 
*/
class UserController
{
	
	public function validasiDataLogin($username,$password)
	{
		$ang = new User();
		$anggota = $ang->getDataAnggota($username);
		if ($anggota['password']==$password) {
			return true;
		} else {
			return false;
		}
	}
}


 ?>