<?php
	include('../components/connexion.php');
	mysql_connect('localhost', 'root', '');
	//$bdd->exec('UPDATE `aboutus` SET `textAboutus`="'.mysql_real_escape_string($_POST['text-aboutus']).'" WHERE idAboutus='.$_POST['id-aboutus']);
	$bdd->exec('UPDATE `about` SET `aboutText`="'.mysql_real_escape_string($_POST['aboutText']).'" WHERE aboutID=1');
	header("location: ../about.php");
?>