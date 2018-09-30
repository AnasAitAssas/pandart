<?php
	include('../components/connexion.php');
	preg_match('/https?:\/\/www\.youtube\.com\/watch\?\S*&?v=([^&\n$]+)/', $_POST['video_link'], $youtubeID);
	$bdd->exec('UPDATE `video` SET `videoCode`="'.$youtubeID[1].'" WHERE videoID=1');
	header("location: ../video.php");
?>