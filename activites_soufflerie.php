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
			La Soufflerie
		</h2>
		<div class="fiche-activité__bandeau">
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/SOUFFLERIE/soufflerie-so-extreme-4.jpg">
		</div>
		<div class="fiche-activité__slogan">
			<p>Une nouvelle façon de voler	
			</p>
		</div>
		<div class="fiche-activité__details">
			<div class="fiche-activité__details__left">
				<div class="fiche-activité__details__left__image">					
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/SOUFFLERIE/soufflerie-so-extreme-3.jpg">
				</div>
				<div class="fiche-activité__details__left__infos">
					<h3>
						INFORMATIONS
					</h3>
					<p>
						Remplissez en ligne votre déclaration de risque + certificat médical
						Enfilez des vêtements confortables (de préférence des t-shirts sans col)
						Les moins de 18 ans ont besoin d’un parent/tuteur
					</p>
				</div>
			</div>
			<div class="fiche-activité__details__right">
				<div class="fiche-activité__details__right__pres">
					Envie de sauter en parachute, mais vous avez peur du vide ? Venez découvrir la chute libre indoor dans une soufflerie spectaculaire de 14 mètres. Nous vous promettons que vous ressentirez les mêmes sensations fortes que lors d’un véritable saut en parachute.
				</div>
				<div class="fiche-activité__details__right__tarifs">
					<p>
						<b>Baptême chute libre : </b><br>
						<b>Individuel</b> : Baptême Chute Libre tarif individuel <br>
				 		x 2 vols heures creuses : 59,90 € <br>
				 	  	<b>Heures pleines</b> : 64,90 € <br>
						<b>Entreprises</b> : merci de nous contacter pour bénéficier d’un tarif spécial <br>
						<b>Chuteurs libres</b> : x 4 vols par personne : 79,90 € <br>
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