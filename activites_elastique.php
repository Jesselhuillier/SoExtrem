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
			L'elastique
		</h2>
		<div class="fiche-activité__bandeau">
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/ELASTIQUE/saut-elastique-so-extreme-2.jpg">
		</div>
		<div class="fiche-activité__slogan">
			<p>Osez le grand saut
			</p>
		</div>
		<div class="fiche-activité__details">
			<div class="fiche-activité__details__left">
				<div class="fiche-activité__details__left__image">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/ELASTIQUE/saut-elastique-so-extreme-3.jpg">
				</div>
				<div class="fiche-activité__details__left__infos">
					<h3>
						INFORMATIONS
					</h3>
					<p>
						Vous serez équipé d’un baudrier intégral et de jambières pour effectuer votre saut en toute sécurité.<br>
						Cette activité est accessible à partir de 15 ans (fournir une autorisation parentale pour les mineurs) et aux personnes pesant entre 50kg et 120kg.
						Un certificat médical sera demandé aux personnes de plus de 55ans.<br>

					</p>
				</div>
			</div>
			<div class="fiche-activité__details__right">
				<div class="fiche-activité__details__right__pres">
					Sautez du plus haut pont d’Europe !
					Vivez des sensations uniques dans le cadre grandiose des Gorges du Verdon grâce au saut à l’élastique depuis le pont de l’Artuby (182m).
					Effectuez une chute de 140 à 160m sans peur, nos moniteurs sont en experts en la matière, vous n’avez plus qu’à profiter des sensations grisantes du saut !
				</div>
				<div class="fiche-activité__details__right__tarifs">
					<p>
						<b>1 saut entre 1 et 5 personnes :</b> 120€/personne.<br>
						<b>1 saut entre 6 et + personnes :</b> 100€/personne.<br>
						<b>Sauts supplémentaires effectués le même jour :</b> 60€/saut.<br>
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