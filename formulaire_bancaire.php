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
<?php $_prix= $_POST['activité']*$_POST['nb_personnes']; ?>
	<div class="recap_infos">
		<p>
			Féliciation, <?php echo $_POST['firstname']; ?> <?php echo $_POST['lastname']; ?>, vous avez réservé une session de saut à  l'élastique pour <?php echo $_POST['nb_personnes']; ?> personnes le <?php echo $_POST['Date']; ?> pour un montant de <?php echo $_prix; ?> € <br>
			<p>Si vous souhaitez modifier vos informations, <a href="panier.php">cliquez ici</a> pour revenir à la page du formulaire de reservation , sinon cliquez sur Payer pour passer au paiement de votre reservation.</p><br>
		</p>
	</div>	
	<form  method="post" action="<?php echo get_template_directory_uri(); ?>/confirmation_paiement.php" class="formulaire" >

				<input type="hidden" name="lastname" value=<?php echo $_POST['lastname']; ?>><br>
				<input type="hidden" name="firstname" value=<?php echo $_POST['firstname']; ?>><br>
				<input type="hidden" name="email" value=<?php echo $_POST['email']; ?> ><br>
				<input type="hidden" name="phone" value=<?php echo $_POST['phone']; ?>><br>
				<input type="hidden" name="activité"  value=<?php echo $_POST['activité']; ?>> 
				<input type="hidden" name="activité"  value=<?php echo $_POST['activité']; ?>>
				<input type="hidden" name="activité"  value=<?php echo $_POST['activité']; ?>> 
				<input type="hidden" name="nb_personnes" min="1" value=<?php echo $_POST['nb_personnes']; ?>><br>
				<input type="hidden" name="Date" value=<?php echo $_POST['Date']; ?>><br>
				Numéro de carte bancaire:<br>
				<input type="number" name="cb" maxlength="16" pattern=".{16}" ><br>
				Nom de la carte:<br>
				<input type="text" name="cbname"><br>
				Date de validité:<br>
				<input type="date" name="date_valid"><br>
				Cryptograme:<br>
				<input type="number" name="crypto"><br>
				<input type="submit" value="Payer">
	</form>
</body>
<?php require 'footer.php'; ?>
</html>