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
			Le parachute
		</h2>
		<div class="fiche-activité__bandeau">
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/PARACHUTE/parachute-so-extreme-2.jpg">
		</div>
		<div class="fiche-activité__slogan">
			<p>Prenez de la hauteur	
			</p>
		</div>
		<div class="fiche-activité__details">
			<div class="fiche-activité__details__left">
				<div class="fiche-activité__details__left__image">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/PARACHUTE/parachute-so-extreme-3.jpg">
				</div>
				<div class="fiche-activité__details__left__infos">
					<h3>
						INFORMATIONS
					</h3>
					<p>
						Pour pratiquer un saut en parachute il est impératif de remplir les conditions suivantes :<br>
						Etre âgé(e) de 15 ans minimum, exigence d’une autorisation parentale jusqu’à 18 ans.<br>
						Les individus de plus de 90kg se voient refuser l’accès à cette discipline, et tout particulièrement dans le cadre du saut en tandem. <br>
						Une petite formation est toujours indispensable surtout avant un premier saut, et des vêtements confortables sont préconisés (jeans et baskets).<br>
						Avoir un certificat médical, datant de moins de 3 mois, délivré par votre médecin traitant<br>
					</p>
				</div>
			</div>
			<div class="fiche-activité__details__right">
				<div class="fiche-activité__details__right__pres">
					Caresser les nuages, avoir une vision 360° de la région aux abords d’un pilatus (avion Suisse) le temps de quelques minutes inoubliables. Seul(e) si vous êtes un pro ou en tamdem, nous vous offrons la possibilité de vivre une expérience inédite et des souvenirs à jamais graver dans les nuages. Accessible à tous dès l’âge de 15 ans.
				</div>
				<div class="fiche-activité__details__right__tarifs">
					<p>
						<b>Le saut en parachute en tandem</b> : à partir de 249 €*.<br>
						<b>Le saut découverte PAC (1 saut)</b> : à partir de 390 €* .<br>
						<b>La formation PAC complète 6/7 sauts</b> : à partir de 1150 €.<br>
						<b>La vidéo gravure musicale sur DVD</b> : de 85 à 129 € <br>
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