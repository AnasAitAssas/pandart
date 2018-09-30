<?php 

	include('../components/connexion.php');

	

	$bdd->exec('DELETE FROM slider WHERE sliderID='.$_GET['id']);

	unlink('../../assets/slider/'.$_GET['id'].'.'.$_GET['ext']);

	

	header("location: ../slider.php");

?>