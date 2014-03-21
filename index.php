<?php
	include 'database_connection.php';
	$games = $bdd->query('SELECT * FROM Games');
?>
 <?php include $_SERVER['DOCUMENT_ROOT']."/Le-Bazar-du-Citron/header.php" ?>

	<!-- <header id="header">
		<div><img src="/Le-Bazar-du-Citron/img/banniere.png"></div>
	</header> -->

	<div class="news">
		<h3>Les news</h3>
			<?php
				while($game = $games->fetch_assoc()){
					$img = $bdd->query("SELECT img_path FROM Images WHERE id_img = ".$game['game_img']);
					$img = $img->fetch_assoc();
			?>
	  		<div class="case-news">
				<img alt="..." src="/Le-Bazar-du-Citron/img/<?php echo $img['img_path'] ?>">
				<div class="caption">
					<p style="font-weight: bold">
						<?php 
							echo "<a href=\"/Le-Bazar-du-Citron/Games/show.php?id=".$game['id_game']."\">";
							echo utf8_encode($game['game_name']);
							echo "</a>"; 
						?>
					</p>
					<p><?php echo utf8_encode($game['game_short_desc']); ?></p>
					<p>...</p>
				</div> 
		    </div>
			  <?php } ?>
	</div>

<?php include $_SERVER['DOCUMENT_ROOT']."/Le-Bazar-du-Citron/footer.php" ?>
