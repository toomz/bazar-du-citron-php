<?php
	include "../../database_connection.php";

	$game = test_input($_POST["name"]);
	$shortDesc = test_input($_POST['shortDesc']);
	$longDesc = test_input($_POST['longDesc']);
	$playerMin = ($_POST['minPlayers'] != -1 ? $_POST['minPlayers'] : null);
	$playerMax = ($_POST['maxPlayers'] != -1 ? $_POST['maxPlayers'] : null);
	$ageMin = ($_POST['minAge'] != -1 ? $_POST['minAge'] : null);
	$duration = ($_POST['duration'] != -1 ? $_POST['duration'] : null);
	$price = ($_POST['price'] != -1 ? $_POST['price'] : null);
	$editor = ($_POST['editor'] != -1 ? $_POST['editor'] : null);
	$author = ($_POST['author'] != -1 ? $_POST['author'] : null);
	$language = ($_POST['language'] != -1 ? $_POST['language'] : null);
	$type = ($_POST['type'] != -1 ? $_POST['type'] : null);

	$query = "INSERT INTO Games VALUES(null, '".$game."', ".$editor.", ".$author.", 
		null, '".$shortDesc."', null, '".$longDesc."', ".$playerMin.", ".$playerMax.", 
		".$ageMin.", ".$duration.", ".$price." );";
	
	if($bdd->query($query)){
		$id_game = $bdd->insert_id();
		if($language != null)
			$bdd->query("INSERT INTO Game_assoc_language VALUES(".$id_game.", ".$language.")")
		if($type != null)
			$bdd->query("INSERT INTO Game_assoc_type VALUES(".$id_game.", ".$type.")")
		echo "Enregistrement réussi";
	}
	else
		echo "Erreur lors de l'enregistrement du jeu";
?>