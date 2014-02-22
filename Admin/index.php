<?php 
	include $_SERVER['DOCUMENT_ROOT']."/Le-Bazar-du-Citron/database_connection.php";

	$editors = getEditors($bdd);
	$authors = getAuthors($bdd);
	$languages = $bdd->query('SELECT * FROM Languages');
	$types = $bdd->query('SELECT * FROM Game_types');

	include $_SERVER['DOCUMENT_ROOT']."/Le-Bazar-du-Citron/header.php";
?>
<div id="content">
	<div id="tabs">

		   	<ul class="onglets">
				<li><a href="#tabs-1" title="">Gestion des jeux</a></li>
				<li><a href="#tabs-2" title="">Gestion des films</a></li>
				<li><a href="#tabs-3" title="">Gestion des séries</a></li>
				<li><a href="#tabs-4" title="">Gestion des utilisateurs</a></li>
			</ul>

	      	<div id="tabs-1">
	        	<?php include "Games/index.php"  ?>
			</div>
			<div id="tabs-2">

			</div>
			<div id="tabs-3">

			</div>
			<div id="tabs-4">

			</div>


	</div>
</div>

<?php include $_SERVER['DOCUMENT_ROOT']."/Le-Bazar-du-Citron/footer.html" ?>