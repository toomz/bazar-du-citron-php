<div style="clear: both; margin:2% 19%;"><img src="/Le-Bazar-du-Citron/img/banniere_save_game.png"></div>
<div class="form">
	<form class="form_add_game" action="saveGame.php" method="post">	
		<!-- <fieldset><legend>Informations générales</legend> -->
			<p>
				<label for="gameNameInput">Nom du jeu</label>
				<input type="text" name="gameNameInput" id="gameNameInput" size="30" />
			</p>
			<p>
				<label for="editorSelect">Editeur</label>
				<select class="" style="width: 140px" name="editorSelect">
					<option value="null"> --- </option>
					<?php
						while($editor = $editors->fetch_assoc())
							echo "<option value='".$editor['id_editor']."'>".$editor['editor_name']."</option>";
					?>
				</select>
				<label>ou</label>
				<input type="text" name="editorSelect" id="editorSelect" size="30" />
			</p>
			<p>
				<label for="authorSelect">Auteur</label>
				<select class="" name="authorSelect" style="width: 140px">
					<option value="null"> --- </option>
					<?php
						while($author = $authors->fetch_assoc())
							echo "<option value='".$author['id_author']."'>".$author['author_first_name']." ".$author['author_surname']."</option>";
					?>
				</select>
				<label>ou</label>
				<input type="text" name="authorSelect" id="authorSelect" size="30" />
			</p>
			<p>
				<label for="inputShortDescName">Courte description</label>
				<textarea name="inputShortDescName" id="inputShortDescName" cols="30" rows="5"></textarea>
			</p>	
			<p>
				<label>Joueurs min.</label>
				<select id="inputMinPlayers" class="" name="minPlayersSelect">
					<option value="-1"> --- </option>
					<?php  for ($i=1; $i < 16; $i++) { 
						echo "<option value='".$i."''>".$i."</option>";	    
					} ?>
				</select>
				<label>Joueurs max.</label>
				<select id="inputMaxPlayers" class="" name="maxPlayersSelect">
					<option value="-1"> --- </option>
					<?php  for ($i=1; $i < 16; $i++) { 
						if($i == 15)
							echo "<option value='".$i."'>".$i."+</option>";
						else
							echo "<option value='".$i."'>".$i."</option>";	    
					} ?>
				</select>
				<label>Age min.</label>
				<select id="inputMinAge" class="" name="minAgeSelect">
					<option value="-1"> --- </option>
					<?php  for ($i=1; $i < 99; $i++) { 
						echo "<option value='".$i."'>".$i."</option>";	    
					} ?>
				</select>
			</p>
			<p>
				<label>Durée (en min.)</label>
				<select id="inputDurationGame" class="" name="durationSelect">
					<option value="-1"> --- </option>
					<?php  for ($i=10; $i < 120; $i+=10) { 
						echo "<option value='".$i."'>".$i."</option>";	    
					} ?>
				</select>
				<label>Prix moyen (en €)</label>
				<select id="inputPriceGAme" class="" name="priceSelect">
					<option value="-1"> --- </option>
					<?php  for ($i=10; $i < 120; $i+=10) { 
						echo "<option value='".$i."'>".$i."</option>";	    
					} ?>
				</select>
			</p>
		<!-- </fieldset> -->
		<!-- <fieldset><legend>Informations complémentaires</legend>																		 -->
			<p>
				<label for="inputLongDescName">Longue description</label>
				<textarea name="inputLongDescName" id="inputLongDescName" cols="75" rows="15"></textarea>
			</p>								
		<!-- </fieldset>				 -->

		<p class="submit"><button type="submit">Enregistrer</button></p>		
	</form>	
</div>