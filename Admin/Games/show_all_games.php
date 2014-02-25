<?php
	$games = $bdd->query("SELECT * FROM Games");
?>

<table cellspacing='0'>
	<thead>
		<tr>
			<th>Nom</th><th>Type</th><th>Editeur</th><th>Auteur</th><th>Langue</th><th>Date de sortie</th>
			<th>J. min.</th><th>J. max.</th><th>Age</th><th>Durée</th><th>Prix</th><th>Ajouter le</th>
		</tr>
	</thead>
	<tbody>
		<?php
			$cpt = 0;
			while($game = $games->fetch_assoc()){
				$editor = $bdd->query("SELECT editor_name FROM Editors WHERE id_editor=".$game['id_game']);
				$editor = $editor->fetch_assoc();
				$author = $bdd->query("SELECT author_surname, author_first_name FROM Authors WHERE id_author=".$game['id_game']);
				$author = $author->fetch_assoc();
				
				$language = $bdd->query("SELECT languages_label FROM Languages WHERE id_languages=(SELECT game_language_language FROM Game_assoc_language WHERE game_language_game=".$game['id_game'].")");
				$language = $language->fetch_assoc();

				$language = $bdd->query("SELECT languages_label FROM Languages WHERE id_languages=(SELECT game_language_language FROM Game_assoc_language WHERE game_language_game=".$game['id_game'].")");
				$language = $language->fetch_assoc();
				if($cpt%2 == 0)
					echo "<tr>";
				else
					echo "<tr class='even'>";
				echo "<td>".utf8_encode($game['game_name'])."</td>";
				echo "<td></td>";
				echo "<td>".utf8_encode($editor['editor_name'])."</td>";
				echo "<td>".utf8_encode($author['author_first_name'])." ".utf8_encode($author['author_surname'])."</td>";
				echo "<td>".utf8_encode($language['languages_label'])."</td>";
				echo "<td>".$game['game_release']."</td>";
				echo "<td>".$game['game_min_players']." j.</td>";
				echo "<td>".$game['game_max_players']." j.</td>";
				echo "<td>".$game['game_min_age']." ans </td>";
				echo "<td>".$game['game_duration']." min.</td>";
				echo "<td>".$game['game_price']."€</td>";
				echo "<td></td>";
				echo "</tr>";
				$cpt++;
			}
		?>
	</tbody>

</table>