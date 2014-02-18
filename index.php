<?php
	include 'database_connection.php';
	$games = $bdd->query('SELECT * FROM Games');
?>
 <?php include $_SERVER['DOCUMENT_ROOT']."/Le-Bazar-du-Citron/header.php" ?>

	<header id="header">
		<div><img src="/Le-Bazar-du-Citron/img/banniere.png"></div>
	</header>

	<div class="panel panel-info">
		<div class="panel-heading"><b>Les News</b></div>
	  <div class="panel-body">
	    <div class="row">
			  <?php
			  	while($game = $games->fetch_assoc()){
			  		$img = $bdd->query("SELECT img_path FROM Images WHERE id_img = 1");
			  		$img = $img->fetch_assoc();
			  ?>
			  <div class="col-sm-6 col-md-3">
			    <div class="thumbnail">
			    	<h4><center><?php echo $game['game_name']; ?></center></h4>
			      <img data-src="holder.js/300x200" alt="..." src="/Le-Bazar-du-Citron/img/<?php echo $img['img_path'] ?>">
			      <div class="caption">
			        <p><?php echo $game['game_short_desc']; ?></p>
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
<script src="/Le-Bazar-du-Citron/bootstrap/js/bootstrap.min.js"></script>

<?php include $_SERVER['DOCUMENT_ROOT']."/Le-Bazar-du-Citron/footer.html" ?>
