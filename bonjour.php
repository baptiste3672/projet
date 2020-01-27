<!DOCTYPE html>
<html>
<head>
	<title>bonjour</title>
	<meta charset="utf-8">
</head>
<body>
	<p>
		<?php
			if (isset($_GET['nom']) AND isset($_GET ['prenom']) AND isset($_GET['repeter']))
			{	
				$nRepetition = (int) $_GET['repeter'];
				if ($nRepetition < 100) 
				{
					for ($repeter=0; $repeter <= $_GET['repeter'] ; $repeter++) 
					{ 
					echo '<p>' . 'Bonjour ' .  $_GET['nom'] . ' ' . $_GET['prenom'] . '</p>' ;
					}
				}

			}
			else
			{
				echo 'Pas de nom ou de prénom défini !';
			}
		?>
	</p>	
</body>
</html>