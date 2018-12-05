<?php include '../../../wp-load.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>So'Extrem/L'équipe</title>
	<link rel="stylesheet" href="style.css">
	<meta charset="utf-8">
</head>
<?php require'header.php';?>
<body>
	<div class="contact">
			<h2 class="contact__titre">
				Nous Contacter
			</h2>
			<img src="equipe.png">
			<div class="slogan">
			<p>Il y aura forcément une activité, parmi toutes celles que nous vous proposons... pour vous !</p>		
			</div>
		<div class="contact__bottom">
			<div class="contact__left">
				<div class="contact__left__top">
					<nav class="contact__left__top__coordonnees">
						<p>Coordonnées</p>
						<ul>
							<li>Téléphone</li>
							<li>Email</li>
							<li>Adresse</li>
						</ul>
					</nav>
					<nav class="contact__left__top__horaires">
						<p>Horaires</p>
							<ul>
								<li>Jour : Horaires</li>
								<li>Jour : Horaires</li>
								<li>Jour : Horaires</li>
							</ul>
					</nav>
				</div>
				<div class="contact__left__bottom">
					<p>
						Toute la team So’Extrême est à votre disposition pour toutes questions relatives aux activités proposées, aux disponibilités etc.
						Merci de nous contacter aux horaires affichées par mail ou par télephone, nous nous tenons à votre disposition et nous ferons de notre mieux pour vous répondre dans les meilleurs délais ! <br>
						A bientôt pour vivre des sensations inoubliables <br>
						L'équipe So'Extrem <br>
					</p>
				</div>
			</div>
			<div class="contact__right">
				<div class="contact__right__top">
					<img src="plan-soextreme.jpg">
				</div>			
				<div class="contact__right__bottom">
					<div class="contact__right__bottom__links">
						<a href="<?php echo get_template_directory_uri(); ?>/activites.php">Activités</a>
						<a href="#">Reserver !</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
<?php require 'footer.php' ?>
</html>