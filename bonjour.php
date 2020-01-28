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
				var_dump($nRepetition);
				if ($nRepetition < 100) 
				{
					for ($repeter=1; $repeter <= $_GET['repeter'] ; $repeter++) 
					{ 
					echo '<p>' . 'Bonjour ' .  $_GET['nom'] . ' ' . $_GET['prenom'] . '</p>' ;
					}
				}

			}
			else
			{
				echo 'Pas de nom ou de prénom défini !';
			}
		?>	<!-- Bug au niveau de repetition -->
	</p>	
</body>
</html>