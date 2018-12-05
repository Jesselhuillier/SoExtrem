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
		</p>
	</div>	
</body>
<?php require'footer.php';?>
</html>