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
	<div class="formulaire">
		<form method="post" action="<?php echo get_template_directory_uri(); ?>/formulaire_bancaire.php">
			<p>
				Nom: <br>
				<input type="text" name="lastname" ><br>
				Prénom: <br>
				<input type="text" name="firstname" ><br>
				Adresse mail: <br>
				<input type="email" name="email" ><br>
				Numéro de Téléphone: <br>
				<input type="tel" name="phone" ><br>
				<input type="radio" name="activité" value="120" checked> Saut à l'élastique, entre 1 et 5 personnes: 120€/personne.<br>
				<input type="radio" name="activité" value="100"> Saut à l'élastique, plus de 6 personnes: 100€/personne.<br>
				<input type="radio" name="activité" value="60"> Saut à l'élastique, saut supplémentaire: 60€/ personne.<br>
				Nombre de Personnes:<br>
				<input type="number" name="nb_personnes" min="1"><br>
				Date de l'activité souhaitée:<br>
				<input type="date" name="Date"><br>
				
				<input type="submit" value="Payer" ><br>
			</p>
		</form>
	</div>
</body>
<?php require 'footer.php';?>
</html>