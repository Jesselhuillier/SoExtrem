<?php include '../../../wp-load.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>So'Extreme</title>
</head>
<body>
	<header class="header">
		<div class="header__top">
			<div class="header__top__logo">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/logo-soextreme.png">
			</div>
			<div class="header__top__links">
				<nav class="header__top__links__nav">
					<ul>
						<li><a href="">Contact</a></li>
						<li><a href="">FAQ</a></li>
						<li><a href="">Rechercher</a></li>
						<li><a href="">Panier</a></li>
					</ul>
	    		</nav>
	    		<div class="header__top__links__resa">
	    			<a href="#">Reserver !</a>
	    		</div>
			</div>
		</div>
		<div class="header__bottom">
			<div class="header__bottom__background">
				<nav class="header__bottom__nav">
					<ul>
						<li><a href="<?php echo get_template_directory_uri(); ?>/index.php">Accueil</a></li>
						<li><a href="<?php echo get_template_directory_uri(); ?>/activites.php">Nos Activités</a></li>
						<li><a href="">Notre Equipe</a></li>
						<li><a href="">Nos Tarifs</a></li>
						<li><a href="">Nous Contacter</a></li>
					</ul>
				</nav>				
			</div>
		</div>
	</header>
</body>
</html>