<?php

?>
<div id="onglets">
<div class="admin-col-gauche">
	<ul class="admin-menu">
		<li><a href="#onglets-1" title="">-> Tous les jeux</a></li>
		<li><a href="#onglets-2" title="">-> Ajouter un jeu</a></li>
		<li><a href="#onglets-3" title="">-> Autres gestions</a></li>
	</ul>

</div>

<div class="admin-col-droite">

	<div id="onglets-1">
		<?php include "all_games.php" ?>
	</div>
	<div id="onglets-2">
		<?php  include "form_new_game.php" ?>
	</div>
	<div id="onglets-3">

	</div>

</div>

</div>