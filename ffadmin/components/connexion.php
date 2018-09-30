<?php  
 	$pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
    $bdd = new PDO('mysql:host=localhost;port=3306;dbname=flipflop', 'root', '', $pdo_options);
	$bdd->exec("SET CHARACTER SET utf8");
	
?>