<?php
	$bdd = new PDO('mysql:host=localhost;dbname=Bazar_du_citron', 'root', '10e15p3&');
	$reponse = $bdd->query('SELECT * FROM Jeux');
?>

<!DOCTYPE html>
<!--[if lte IE 7]> <html class="ie67 ie678" lang="fr"> <![endif]-->
<!--[if IE 8]> <html class="ie8 ie678" lang="fr"> <![endif]-->
<!--[if IE 9]> <html class="ie9" lang="fr"> <![endif]-->
<!--[if gt IE 9]><!--> <html lang="fr"> <!--<![endif]-->

	<head>

		<meta charset="UTF-8" />
		<title>Le Bazar du Citron</title>
		<link rel="stylesheet" type="text/css" href="css/main.css" />
		<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
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
		<nav class="navbar navbar-fixed-top dock-fixed" role="navigation">
		  <div class="container">
		    <div class="container-fluid">
			    <div class="navbar-header">
			      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
			        <span class="sr-only">Toggle navigation</span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			      </button>
			      <a class="navbar-brand" href="#">Maison</a>
			    </div>

			    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			      <ul class="nav navbar-nav">
			      	<li class="dropdown">
			          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Les jeux<b class="caret"></b></a>
			          <ul class="dropdown-menu">
			            <li><a href="#">Stratégie</a></li>
			            <li><a href="#">Famille</a></li>
			            <li><a href="#">Ambiance</a></li>
			            <li><a href="#">Rigolade</a></li>
			            <li class="divider"></li>
			            <li><a href="#">Plateaux</a></li>
			            <li><a href="#">Cartes</a></li>
			            <li><a href="#">Dés</a></li>
			            <li class="divider"></li>
			            <li><a href="#">Solo</a></li>
			            <li><a href="#">Duo</a></li>
			          </ul>
			        </li>
			        <li class="dropdown">
			          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Les films<b class="caret"></b></a>
			          <ul class="dropdown-menu">
			            <li><a href="#">Action</a></li>
			            <li><a href="#">Another action</a></li>
			            <li><a href="#">Something else here</a></li>
			            <li class="divider"></li>
			            <li><a href="#">Separated link</a></li>
			            <li class="divider"></li>
			            <li><a href="#">One more separated link</a></li>
			          </ul>
			        </li>	
			        <li class="dropdown">
			          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Les séries<b class="caret"></b></a>
			          <ul class="dropdown-menu">
			            <li><a href="#">Action</a></li>
			            <li><a href="#">Another action</a></li>
			            <li><a href="#">Something else here</a></li>
			            <li class="divider"></li>
			            <li><a href="#">Separated link</a></li>
			            <li class="divider"></li>
			            <li><a href="#">One more separated link</a></li>
			          </ul>
			        </li>			        
			      </ul>
			      <form class="navbar-form navbar-left" role="search">
			        <div class="form-group">
			          <input type="text" class="form-control" placeholder="Search">
			        </div>
			        <button type="submit" class="btn btn-default">Submit</button>
			      </form>
			      <ul class="nav navbar-nav navbar-right">
			        <li><a href="#">Link</a></li>
			        <li class="dropdown">
			          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
			          <ul class="dropdown-menu">
			            <li><a href="#">Action</a></li>
			            <li><a href="#">Another action</a></li>
			            <li><a href="#">Something else here</a></li>
			            <li class="divider"></li>
			            <li><a href="#">Separated link</a></li>
			          </ul>
			        </li>
			      </ul>
			    </div>
			  </div>
		  </div>
		</nav>
		<div id="wrapper">
			<header id="header">
				<div><img src="img/banniere.png"></div>

				<ul class="nav nav-tabs">
					<li class="active"><a href="#"><img src="img/home.png" width="30px", height="30px"></a></li>
				  <li class="dropdown">
				    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
				      Les jeux <span class="caret"></span>
				    </a>
				    <ul class="dropdown-menu">
				      <li></li>
				    </ul>
				  </li>
				  <li class="dropdown">
				    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
				      Les films <span class="caret"></span>
				    </a>
				    <ul class="dropdown-menu">
				      <li></li>
				    </ul>
				  </li>
				  <li class="dropdown">
				    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
				      Les séries <span class="caret"></span>
				    </a>
				    <ul class="dropdown-menu">
				      <li></li>
				    </ul>
				  </li>
				  <form class="navbar-form navbar-left" role="search">
			        <div class="form-group">
			          <input type="text" class="form-control" placeholder="Search">
			        </div>
			        <button type="submit" class="btn btn-default">Submit</button>
			      </form>
				</ul>
			</header>
			
		</div>

		<div class="panel panel-info">
			<div class="panel-heading"><b>Les News</b></div>
		  <div class="panel-body">
		    <div class="row">
				  <?php
				  	while($jeu = $reponse->fetch()){
				  ?>
				  <div class="col-sm-6 col-md-3">
				    <div class="thumbnail">
				    	<h4><center><?php echo $jeu['nom_jeu']; ?></center></h4>
				      <img data-src="holder.js/300x200" alt="..." src="img/<?php echo $jeu['img_princ_jeu'] ?>">
				      <div class="caption">
				        <p><?php echo $jeu['synopsis_court_jeu']; ?></p>
				        <p>
				        	<a href="#" class="btn btn-primary btn-xs" role="button">Button</a> 
				        	<a href="#" class="btn btn-default btn-xs" role="button">Button</a>
				        </p>
				      </div>
				    </div>
				  </div>

				  <?php } ?>
				
				</div>
		  </div>
		</div>


		<script src="https://code.jquery.com/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
	</body>
</html>