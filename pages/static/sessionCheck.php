<?php
  session_start();
	if(!isset($_SESSION['sStat']) || !isset($_SESSION['sName'])){
		header('location: ../../pages/dynamic/login.php?alert=Login');
	}
?>
