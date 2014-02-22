<div style="clear: both; margin:2% 19%;"><img src="/Le-Bazar-du-Citron/img/banniere_save_game.png"></div>
<div class="form">
	<form class="form_add_game" action="#" method="post">	
			<p>
				<label for="gameNameInput">Nom du jeu</label>
				<input type="text" name="gameNameInput" id="gameNameInput" size="30" />
			</p>
			<p>
				<label for="editorSelect">Editeur</label>
				<select class="" style="width: 140px" name="editorSelect" id="editorSelect">
					<option value="null"> --- </option>
					<?php
						while($editor = $editors->fetch_assoc())
							echo "<option value='".$editor['id_editor']."'>".utf8_encode($editor['editor_name'])."</option>";
					?>
				</select>
				<!-- <label>ou</label>
				<input type="text" name="editorInput" id="editorInput" size="30" /> -->
			</p>
			<p>
				<label for="authorSelect">Auteur</label>
				<select class="" name="authorSelect" id ="authorSelect" style="width: 140px">
					<option value="null"> --- </option>
					<?php
						while($author = $authors->fetch_assoc())
							echo "<option value='".$author['id_author']."'>".utf8_encode($author['author_first_name'])." ".$author['author_surname']."</option>";
					?>
				</select>
				<!-- <label>ou</label>
				<input type="text" name="authorInput" id="authorInput" size="30" /> -->
			</p>
			<p>
				<label for="inputShortDescName">Courte description</label>
				<textarea name="inputShortDescName" id="inputShortDescName" cols="30" rows="5"></textarea>
			</p>	
			<p>
				<label>Joueurs min.</label>
				<select id="minPlayersSelect" class="" name="minPlayersSelect">
					<option value="-1" seleted> --- </option>
					<?php  for ($i=1; $i < 16; $i++) { 
						echo "<option value='".$i."''>".$i."</option>";	    
					} ?>
				</select>
				<label>Joueurs max.</label>
				<select id="maxPlayersSelect" class="" name="maxPlayersSelect">
					<option value="-1"> --- </option>
					<?php  for ($i=1; $i < 16; $i++) { 
						if($i == 15)
							echo "<option value='".$i."'>".$i."+</option>";
						else
							echo "<option value='".$i."'>".$i."</option>";	    
					} ?>
				</select>
				<label>Age min.</label>
				<select id="minAgeSelect" class="" name="minAgeSelect">
					<option value="-1"> --- </option>
					<?php  for ($i=1; $i < 99; $i++) { 
						echo "<option value='".$i."'>".$i."</option>";	    
					} ?>
				</select>
			</p>
			<p>
				<label>Durée (en min.)</label>
				<select id="durationSelect" class="" name="durationSelect">
					<option value="-1"> --- </option>
					<?php  for ($i=10; $i < 120; $i+=10) { 
						echo "<option value='".$i."'>".$i."</option>";	    
					} ?>
				</select>
				<label>Prix moyen (en €)</label>
				<select id="priceSelect" class="" name="priceSelect">
					<option value="-1"> --- </option>
					<?php  for ($i=10; $i < 120; $i+=10) { 
						echo "<option value='".$i."'>".$i."</option>";	    
					} ?>
				</select>
			</p>
			<p>
				<label>Langue</label>
				<select id="languageSelect" name="languageSelect">
					<option value="-1"> --- </option>
					<?php while($language = $languages->fetch_assoc())
						echo "<option value='".$language['id_languages']."'>".utf8_encode($language['languages_label'])."</option>";
					?>
				</select>
				<label>Type de jeu</label>
				<select id="typeSelect" name="typeSelect">
					<option value="-1"> --- </option>
					<?php while($type = $types->fetch_assoc())
						echo "<option value='".$type['id_game_type']."'>".utf8_encode($type['game_type_label'])."</option>";
					?>
				</select>
			</p>
			<p>
				<label for="inputLongDescName">Longue description</label>
				<textarea name="inputLongDescName" id="inputLongDescName" cols="75" rows="15"></textarea>
			</p>								
			<p class="submit"><button type="submit">Enregistrer</button></p>		
	</form>	
</div>
