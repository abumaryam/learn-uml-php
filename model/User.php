<?php 

/**
* 
*/
class User
{
	public $id_user;
	public $email;
	public $username;
	public $password;
	public $no_hp;
	public $id_level;
	
	public function getDataAnggota($username)
	{
		$anggota['username'] = $username;
		$anggota['password'] = '1234';

		return $anggota;
	}
}


 ?>