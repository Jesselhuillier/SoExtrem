<?php include '../../../wp-load.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>So'Extrem/Activités</title>
	<link rel="stylesheet" href="style.css">
	<meta charset="utf-8">
</head>
<?php require'header.php';?>
<body>
	<div class="nos_activités">
		<h2 class="nos_activités__titre">
			Toutes Nos Activités
		</h2>
		<div class="nos_activités__présentation">
			<p class="nos_activités__présentation__text">
				Trouver ici l’activité ou les activités extrêmes que vous désirez !<br>
				Envie de vous lancer dans le vide durant une minute qui sera surement une des plus belles de votre vie ? Découvrir la beauté de la nature, des plans d’eaux de la région ? …<br>
				Nos cinq activités proposées, garantissent de vivre des sensations fortes !<br>
				Alors, il ne vous reste plus qu’à sélectionner celle qui vous donne le plus envie et à bientôt dans notre enseigne.<br>
			</p>
		</div>
		<div class="nos_activités__activité">
			<div class="nos_activités__activité__img">
				<img src="SOUFFLERIE/soufflerie-so-extreme-1.jpg">
			</div>
			<div class="nos_activités__activité__info">
				<div class="nos_activités__activité__info__pres">
				<p>LA SOUFFLERIE</br>
					Une nouvelle façon de voler</br>
				</p>
				<p>Envie de sauter en parachute, mais vous avez peur du vide ? 
				</p>
				</div>
				<div class="nos_activités__activité__info__btn">						
					<a href="<?php echo get_template_directory_uri(); ?>/activites_soufflerie.php">+ d'infos</a>
				</div>					
			</div>
		</div>
		<div class="nos_activités__activité">
			<div class="nos_activités__activité__img">
				<img src="PARACHUTE/parachute-so-extreme-1.jpg">
			</div>
			<div class="nos_activités__activité__info">
				<div class="nos_activités__activité__info__pres">
				<p>LE PARACHUTE</br>
					Prenez de la hauteur</br>
				</p>
				<p>Caresser les nuages, avoir une vision 360° de la région aux abords d’un pilatus le temps de quelques minutes !
				</p>
				</div>
				<div class="nos_activités__activité__info__btn">						
					<a href="<?php echo get_template_directory_uri(); ?>/activites_parachute.php">+ d'infos</a>
				</div>					
			</div>
		</div>	
		<div class="nos_activités__activité">
			<div class="nos_activités__activité__img">
				<img src="ELASTIQUE/saut-elastique-so-extreme-1.jpg">
			</div>
			<div class="nos_activités__activité__info">
				<div class="nos_activités__activité__info__pres">
				<p>L'ELASTIQUE</br>
					Osez le grand saut</br>
				</p>
				<p>Vivez des sensations uniques dans le cadre grandiose des Gorges du
					Verdon grâce au saut à l’élastique depuis le pont de l’Artuby.
				</p>
				</div>
				<div class="nos_activités__activité__info__btn">						
					<a href="<?php echo get_template_directory_uri(); ?>/activites_elastique.php">+ d'infos</a>
				</div>					
			</div>
		</div>	
		<div class="nos_activités__activité">
			<div class="nos_activités__activité__img">
				<img src="RAFTING/rafting-so-extreme-1.jpg">
			</div>
			<div class="nos_activités__activité__info">
				<div class="nos_activités__activité__info__pres">
				<p>LE RAFTING</br>
					au coeur des gorges</br>
				</p>
				<p>Embarquez sur un bateau gonflable pour une aventure inoubliable.
				</p>
				</div>
				<div class="nos_activités__activité__info__btn">						
					<a href="<?php echo get_template_directory_uri(); ?>/activites_rafting.php">+ d'infos</a>
				</div>					
			</div>
		</div>		
		<div class="nos_activités__activité">
			<div class="nos_activités__activité__img">
				<img src="KAYAK/kayak-so-extreme-1.jpg">
			</div>
			<div class="nos_activités__activité__info">
				<div class="nos_activités__activité__info__pres">
				<p>LE KAYAK</br>
					En eau turquoise</br>
				</p>
				<p>Découvrez les sensations du kayak en eau-vive dans les Gorges du Verdon.
				</p>
				</div>
				<div class="nos_activités__activité__info__btn">						
					<a href="<?php echo get_template_directory_uri(); ?>/activites_kayak.php">+ d'infos</a>
				</div>					
			</div>
		</div>		
	</div>
</body>
<footer class="footer">
	<nav class="footer__legal">
		<ul>
			<li><a href="">A Propos</a></li>
			<li><a href="">Contact</a></li>
			<li><a href="">CGV</a></li>
			<li><a href="">Confidentialité</a></li>
		</ul>	
	</nav>
	<div class="footer__follow">
		<div class="footer__follow__titre">
			<a href="#">Suivez-Nous !</a>
		</div>
		<nav class="footer__follow__logo">
			<ul>
			<li><a href="#"><img src="facebook-gris.png"></a></li>
			<li><a href="#"><img src="instagram-gris.png"></a></li>
			<li><a href="#"><img src="youtube-gris.png"></a></li>
		</ul>	
		</nav>
	</div>
	<div class="footer_logo">
		<img src="logofooter.png">	
	</div>
</footer>
</html>