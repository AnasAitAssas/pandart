<?php

	include('../components/connexion.php');

	if ($_FILES['img_slider']['error'] == 0)
	{
		$extension=strtolower(substr(strrchr($_FILES['img_slider']['name'],'.'),1));
		$bdd->exec('INSERT INTO `slider`(`sliderExt`) VALUES ("'.$extension.'")');
		$response = $bdd->query('Select MAX(sliderID) from slider');
	    $donnees = $response->fetch();
		$upload_name = "../../assets/slider/".$donnees[0].".".$extension;
		move_uploaded_file($_FILES['img_slider']['tmp_name'],$upload_name);
	}

	header("location: ../slider.php");
?>