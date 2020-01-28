<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Main</title>
    </head>

    <body>
        <h1>CIBLE</h1>
    	<p>Bonjour <?php echo htmlspecialchars($_POST['prenom']) ?></p>
        <?php
        if (isset($_POST['végétarien'])  == 'on' )
        {
            echo '<p>Vous êtes végétarien.';
        } 
        else
        {
            echo '<p>Vous n\'êtes pas végétarien.';
        }
        ?>
    </body>
</html>