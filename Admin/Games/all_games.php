<?php
	$games = $bdd->query("SELECT * FROM Games");
?>

<table cellspacing='0'> <!-- cellspacing='0' is important, must stay -->
	<thead>
		<tr>
			<th>Nom</th>
			<th>Type</th>
			<th>Editeur</th>
			<th>Auteur</th>
			<th>Langue</th>
			<th>Date de sortie</th>
			<th>J. min.</th>
			<th>J. max.</th>
			<th>Age</th>
			<th>Durée</th>
			<th>Prix</th>
			<th>Ajouter le</th>
		</tr>
	</thead>
	<tbody>
		<?php
			$cpt = 0;
			while($game = $games->fetch_assoc()){
				$language = $bdd->query("SELECT languages_label FROM Languages WHERE id_languages=(SELECT game_language_language FROM Game_assoc_language WHERE game_language_game=".$game['id_game'].")");
				$language = $language->fetch_assoc();
				if($cpt%2 == 0)
					echo "<tr>";
				else
					echo "<tr class='even'>";
				echo "<td>".$game['game_name']."</td>";
				echo "<td></td>";
				echo "<td></td>";
				echo "<td></td>";
				echo "<td>".$language['languages_label']."</td>";
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
	<!-- Table Body -->

</table>