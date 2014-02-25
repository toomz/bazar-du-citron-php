<?php
	include '../../database_connection.php';
	switch ($_POST['typeEnter']) {
		case "1":
			$l = test_input($_POST['language']);
			if($bdd->query("INSERT INTO Languages VALUES(null, '".$l."')"))
				echo "Langue enregistrée avec succès";
			else
				echo "Echec lors de l'enregistrement de la langue\n Erreur : ".$bdd->error;
			break;
		case 2:
			if($bdd->query("INSERT INTO Game_types VALUES(null, '".test_input($_POST['type'])."')"))
				echo "Type enregistré avec succès";
			else
				echo "Echec lors de l'enregistrement du type\n Erreur : ".$bdd->error;
			break;
		case 3:
			if($bdd->query("INSERT INTO Editors VALUES(null, '".test_input($_POST['editor'])."')"))
				echo "Editeur enregistré avec succès";
			else
				echo "Echec lors de l'enregistrement de l'éditeur\n Erreur : ".$bdd->error;
			break;
		case 4:
			if($bdd->query("INSERT INTO Authors VALUES(null, '".test_input($_POST['authorSurname'])."', '".test_input($_POST['authorFirstName'])."')"))
				echo "Auteur enregistré avec succès";
			else
				echo "Echec lors de l'enregistrement de l'auteur\n Erreur : ".$bdd->error;
			break;
		default:
			echo "Appel de saveOthers.php sans arguments...";
			break;
	}

?>