<?php 
	include $_SERVER['DOCUMENT_ROOT']."/Le-Bazar-du-Citron/database_connection.php";

	$editors = getEditors($bdd);
	$authors = getAuthors($bdd);
	$languages = $bdd->query('SELECT * FROM Languages');
	$types = $bdd->query('SELECT * FROM Game_types');

	// include $_SERVER['DOCUMENT_ROOT']."/Le-Bazar-du-Citron/header.php";
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
					$("#onglets").tabs();

					$('.form_add_game').submit(function() {
				 		
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
				        	"Games/saveGame.php", 
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