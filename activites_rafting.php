<?php include '../../../wp-load.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>So'Extrem/Activités/Soufflerie</title>
	<link rel="stylesheet" href="style.css">
	<meta charset="utf-8">
</head>
<?php require'header.php';?>
<body>
	<div class="fiche-activité">
		<h2 class="fiche-activité__titre">
			Le rafting
		</h2>
		<div class="fiche-activité__bandeau">
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/RAFTING/rafting-so-extreme-2.jpg">
		</div>
		<div class="fiche-activité__slogan">
			<p>Au coeur des gorges
			</p>
		</div>
		<div class="fiche-activité__details">
			<div class="fiche-activité__details__left">
				<div class="fiche-activité__details__left__image">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/RAFTING/rafting-so-extreme-4.jpg">
				</div>
				<div class="fiche-activité__details__left__infos">
					<h3>
						INFORMATIONS
					</h3>
					<p>
						Equipé d’une combinaison, d’un gilet, d’un casque et d’une pagaie, vous serez accompagné d’un guide qui vous expliquera comment manier le bateau afin de profiter pleinement de cette expérience en toute sécurité.<br>
						Il vous sera demandé de savoir nager, de porter des chaussures de sport et un maillot de bain.<br>
						Accessible à partir de 8 ans.<br>
						Cette activité est ouverte de début Avril à fin Octobre, entre temps l’eau est bien trop froide !<br>

					</p>
				</div>
			</div>
			<div class="fiche-activité__details__right">
				<div class="fiche-activité__details__right__pres">
					Une aventure en équipe dans les rapides du Verdon.
					Si vous avez envie de découvrir un sport à sensations à  plusieurs, entre amis, en famille ou entre collègues, le rafting est parfait pour vous !
					Embarquez sur un bateau gonflable pouvant accueillir entre 4 et 8 personnes et parcourez les eaux tumultueuses du Verdon pour un moment unique !

				</div>
				<div class="fiche-activité__details__right__tarifs">
					<p>
						<b>Parcours « Découverte »</b> (1h30) : 35€/personne<br>
						<b>Parcours « Demi-journée»</b> (2h30): 50€/personne<br>
						<b>Parcours « Journée intégrale »</b> (4h+1h de pause): 65€/personne<br>
						<b>Option pique-nique :</b> 10€/adulte 5€/enfant de -14ans<br>

					</p>	
				</div>
				<div class="fiche-activité__details__right__button">
					<a href="<?php echo get_template_directory_uri(); ?>/panier.php">+ Panier</a>
				</div>
			</div>			
		</div>
	</div>
</body>
<?php require'footer.php';?>
</html>