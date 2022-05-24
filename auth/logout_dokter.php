<?php
	session_start();
	unset($_SESSION['id_dokter']);
	session_destroy();
	header('location:index.php');
?>