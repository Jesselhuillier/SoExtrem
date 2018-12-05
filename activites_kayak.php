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
			Le Kayak
		</h2>
		<div class="fiche-activité__bandeau">
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/KAYAK/kayak-so-extreme-2.jpg">
		</div>
		<div class="fiche-activité__slogan">
			<p>En eau turquoise	
			</p>
		</div>
		<div class="fiche-activité__details">
			<div class="fiche-activité__details__left">
				<div class="fiche-activité__details__left__image">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/KAYAK/kayak-so-extreme-4.jpg">
				</div>
				<div class="fiche-activité__details__left__infos">
					<h3>
						INFORMATIONS
					</h3>
					<p>
						Pour pratiquer cette activité, vous serez équipé d’une combinaison, d’un casque et d’un gilet de sauvetage. Veillez à bien les conserver tout au long de votre parcours, le kayak est un bateau instable et les rapides peuvent s’avérer dangereux si l’on chute sans protection. Ecoutez bien les conseils du guide au départ, il vous expliquera toutes les consignes à suivre et les détails du parcours. 
						Cette activité est ouverte de début Avril à fin Octobre, entre temps l’eau est bien trop froide !
					</p>
				</div>
			</div>
			<div class="fiche-activité__details__right">
				<div class="fiche-activité__details__right__pres">
					Découvrez les sensations du kayak en eau-vive dans les Gorges du Verdon.
					Le kayak se pratique en solo et permet de profiter pleinement des rapides, de slalomer entre les obstacles, de prendre de la vitesse. 
					Une fois bien équipé et briefé, vous voilà prêts à défier les eaux émeraudes du Verdon, vous allez pouvoir passer dans des lieux peu fréquentés où le paysage est sublime, profitez-en !
				</div>
				<div class="fiche-activité__details__right__tarifs">	
					<p>
						<b>Parcours « Découverte »</b> (2h) : 12€/personne<br>
						<b>Parcours « Demi-journée»</b> (4h) : 16€/personne<br>
						<b>Parcours « Journée intégrale »</b> (6h) : 20€/personne<br>
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