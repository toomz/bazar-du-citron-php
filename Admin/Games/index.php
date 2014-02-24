<?php 
	include '../../database_connection.php'; 
	$editors = getEditors($bdd);
	$authors = getAuthors($bdd);
	$languages = $bdd->query('SELECT * FROM Languages');
	$types = $bdd->query('SELECT * FROM Game_types');
?>
<!DOCTYPE html>
<!--[if lte IE 7]> <html class="ie67 ie678" lang="fr"> <![endif]-->
<!--[if IE 8]> <html class="ie8 ie678" lang="fr"> <![endif]-->
<!--[if IE 9]> <html class="ie9" lang="fr"> <![endif]-->
<!--[if gt IE 9]><!--> <html lang="fr"> <!--<![endif]-->

	<head>
		<meta charset="UTF-8" />
		<title>Le Bazar du Citron</title>
		<link rel="stylesheet" type="text/css" href="/Le-Bazar-du-Citron/css/main.css" />
		<link rel="stylesheet" type="text/css" href="/Le-Bazar-du-Citron/css/dock.css" />	
		<link rel="stylesheet" href="//code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">
		<script src="//code.jquery.com/jquery-1.11.0.js"></script>	
		<!-- // <script src="//code.jquery.com/ui/1.10.4/jquery-ui.js"></script> -->
		<!-- // <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script> -->
		<!-- // <script type="text/javascript" src="http://ajax.microsoft.com/ajax/jquery.validate/1.7/jquery.validate.min.js"></script> -->
		<script type="text/javascript">
			$(document).ready(
				function() { 
					// $("#tabs").tabs();
					// $("#onglets").tabs();
					$('#add_language').submit(function() {
						var language = $('#languageInput').val();
						$.post(
				        	"saveOthers.php", 
				        	{language: language, typeEnter: "1"}, 
				        	function(data){
					        	alert(data);
					        });
						return false;
					});
					$('#add_type').submit(function() {
						var type = $('#typeInput').val();
						$.post(
				        	"saveOthers.php", 
				        	{type: type, typeEnter: "2"}, 
				        	function(data){
					        	alert(data);
					        });
						return false;
					});
					$('#add_editor').submit(function() {
						var editor = $('#editorInput').val();
						$.post(
				        	"saveOthers.php", 
				        	{editor: editor, typeEnter: 3}, 
				        	function(data){
					        	alert(data);
					        });
						return false;
					});
					$('#add_author').submit(function() {
						var authorSurname = $('#authorSurInput').val();
						var authorFirstName = $('#authorFirstInput').val();
						$.post(
				        	"saveOthers.php", 
				        	{authorSurname: authorSurname, authorFirstName: authorFirstName, typeEnter: 4}, 
				        	function(data){
					        	alert(data);
					        });
						return false;
					});

					$('#add_game').submit(function() {
				        var name = $('#gameNameInput').val();
				        var shortDesc = $('#inputShortDescName').val();
				        var longDesc = $('#inputLongDescName').val();
				        var minPlayers = $('#minPlayersSelect').val();
				        var maxPlayers = $('#maxPlayersSelect').val();
				        var minAge = $('#minAgeSelect').val();
				        var duration = $('#durationSelect').val();
				        var price = $('#priceSelect').val();
				        var editor = $('#editorSelect').val();
				        var author = $('#authorSelect').val();
				        
				        $.post(
				        	"saveGame.php", 
				        	{name: name, shortDesc: shortDesc, longDesc: longDesc, minPlayers: minPlayers,
				        		maxPlayers: maxPlayers, minAge: minAge, duration: duration, price: price,
				        		editor: editor, author: author}, 
				        	function(data){
					        	alert(data);
					        });
				        return false;
				    });
				}
			);
		</script>
	
		<!--[if lt IE 9]>
	      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	    <![endif]-->
		<!--[if lt IE 9]><script src="/js/html5shiv.js"></script><![endif]-->
		<meta name="description" content="Site web où nous partageons nos avis sur des jeux de société, des films et des séries.">
		<meta name="keywords" content="jeux, société, films, séries">
		<meta name="author" content="Eléonore Pirri">
		<meta name="geo.placename" content="Strasbourg, Alsace, France">
	</head>

	<body id="body">
		<div id="wrapper">

			<div id="onglets">
				<div class="admin-col-gauche">
					<ul class="admin-menu">
						<li><a href="#onglets-1" title="">-> Tous les jeux</a></li>
						<li><a href="#onglets-2" title="">-> Ajouter un jeu</a></li>
						<li><a href="#onglets-3" title="">-> Autres gestions</a></li>
					</ul>
				</div>

				<div class="admin-col-droite">
					<div id="onglets-1" style="display: none">
						<?php include "show_all_games.php" ?>
					</div>
					<div id="onglets-2" style="display: none">
						<?php  include "form_new_game.php" ?>
					</div>
					<div>
						<?php  include "form_new_others.php" ?>
					</div>
				</div>
			</div>

		</div>
	</body>