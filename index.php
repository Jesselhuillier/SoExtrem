<?php require( dirname( __FILE__ ) . '../../../../wp-blog-header.php' );?>
<!DOCTYPE html>
<html>
<head>
	<title>So'Extreme</title>
	<link rel="stylesheet" href="<?php bloginfo("stylesheet_url"); ?>">
	<meta charset="utf-8">
</head>
<?php require'header.php';?>
<body>
	<div class="slider">
		<div class="slider__img">
			<img class="myslides" src="<?php echo get_stylesheet_directory_uri(); ?>/verdon1.jpg">
			<img class="myslides" src="<?php echo get_stylesheet_directory_uri(); ?>/verdon2.jpg">
		</div>
		<div class="slider__buttons">
			<button class="slider__button__left" onclick="plusDivs(-1)">&#10094;</button>
			<button class="slider__button__right" onclick="plusDivs(+1)">&#10095;</button>
		</div>
	</div>
	<div class="slogan">
		<p>Avec So'Extrem, découvrez le Verdon comme vous ne l'avez jamais vu...</p>		
	</div>
	<div class="articles">
		<div class="articles__top">
				<div class="articles__top__activité">
					<div class="articles__top__activité__img">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/verdon1.jpg">
					</div>
					<div class="articles__top__activité__info">
						<div class="articles__top__activité__info__pres">
							<p>LA SOUFFLERIE</br>
								Une nouvelle façon de voler</br>
							</p>
							<p>Petit texte de présentartion de l'activité.</br>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							</p>
						</div>
						<div class="articles__top__activité__info__btn">						
							<a href="<?php echo get_template_directory_uri(); ?>/activites_soufflerie.php">+ d'infos</a>
						</div>					
					</div>
				</div>
			<div class="articles__top__activité">
				<div class="articles__top__activité__img">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/verdon1.jpg">
				</div>
				<div class="articles__top__activité__info">
					<div class="articles__top__activité__info__pres">
						<p>LE PARACHUTE</br>
							Prenez de la hauteur</br>
						</p>
						<p>Petit texte de présentartion de l'activité.</br>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						</p>
					</div>
					<div class="articles__top__activité__info__btn">						
						<a href="<?php echo get_template_directory_uri(); ?>/activites_parachute.php">+ d'infos</a>
					</div>					
				</div>
			</div>
		</div>
		<div class="articles__bottom">
				<div class="articles__bottom__activité">
					<div class="articles__bottom__activité__img">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/verdon1.jpg">
					</div>
					<div class="articles__bottom__activité__info">
						<div class="articles__bottom__activité__info__pres">
							<p>L'ELASTIQUE</br>
								Osez le grand saut</br>
							</p>
							<p>Petit texte de présentartion de l'activité.</br>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							</p>
						</div>
						<div class="articles__bottom__activité__info__btn">
							<a href="<?php echo get_template_directory_uri(); ?>/activites_elastique.php">+ d'infos</a>						
						</div>					
					</div>
				</div>
				<div class="articles__bottom__activité">
					<div class="articles__bottom__activité__img">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/verdon1.jpg">	
					</div>
					<div class="articles__bottom__activité__info">
						<div class="articles__bottom__activité__info__pres">
							<p>LE RAFTING</br>
								Au coeur des gorges</br>
							</p>
							<p>Petit texte de présentartion de l'activité.</br>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							</p>
						</div>
						<div class="articles__bottom__activité__info__btn">
							<a href="<?php echo get_template_directory_uri(); ?>/activites_rafting.php">+ d'infos</a>						
						</div>					
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="article__bouton__more">
		<a href="<?php echo get_template_directory_uri(); ?>/activites.php">Tout Voir</a>
	</div>
</body>
<?php require'footer.php';?>
</html>


<script type="text/javascript">
	var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
    showDivs(slideIndex += n);
}

function showDivs(n) {
    var i;
    var x = document.getElementsByClassName("myslides");
    if (n > x.length) {slideIndex = 1}
    if (n < 1) {slideIndex = x.length} ;
    for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";
    }
    x[slideIndex-1].style.display = "block";
}
</script>