<?php  include $_SERVER['DOCUMENT_ROOT'].'/Le-Bazar-du-Citron/Admin/header_admin.php' ?>

		<div id="onglets">
			<div class="admin-col-gauche">
				<ul class="admin-menu">
					<li><a href="#" title="" id="onglet-1">-> Tous les jeux</a></li>
					<li><a href="#" title="" id="onglet-2">-> Ajouter un jeu</a></li>
					<li><a href="#" title="" id="onglet-3">-> Autres gestions</a></li>
				</ul>
			</div>

			<div class="admin-col-droite">
				<div id="onglets-0">
					<h1>Page d'administration des jeux</h1>
				</div>
				<div id="onglets-1" style="display: none">
					<?php include "show_all_games.php" ?>
				</div>
				<div id="onglets-2" style="display: none">
					<?php  include "form_new_game.php" ?>
				</div>
				<div id="onglets-3" style="display: none">
					<?php  include "form_new_others.php" ?>
				</div>
			</div>
		</div>

<?php  include $_SERVER['DOCUMENT_ROOT'].'/Le-Bazar-du-Citron/footer.php' ?>