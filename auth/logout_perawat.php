<?php
	session_start();
	unset($_SESSION['id_perawat']);
	session_destroy();
	header('location:index.php');
?>