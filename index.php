<?php
session_start ();

if(isset($_GET['page'])) {
	$page = file_exists('./page/' . $_GET['page'] . '.php') ? $_GET['page'] : 'error404';
} else {
	$page = file_exists('./page/home.php') ? 'home' : 'error404';
}


require('common.php');
?>

