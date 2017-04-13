<?php 
require_once 'view/LoginUI.php';
require_once 'controller/UserController.php';

$lui = new LoginUI();
$am = new UserController();

$username = $_POST['username'];
$password = $_POST['password'];

$hasil = $am->validasiDataLogin($username,$password);

if ($hasil==true) {
	include_once 'page/berhasil_login.php';
} else {
	include_once 'page/gagal_login.php';
}






 ?>