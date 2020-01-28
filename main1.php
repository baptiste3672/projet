<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Main</title>
    </head>

    <body>
    	<h1>Titre</h1>          
    	<p>Bonjour, je suis un <em>paragraphe</em> de texte !</p>
    	<ul>
    		<li style="color: red">Presentation</li>
    		<li style="color: blue">PHP</li>
    		<li style="color: orange">MySQL</li>
    	</ul>
        <form action="cible.php" method="POST">
            <p><label>Prénom : <input type="text" name="prenom"/></label></p>
            <p><label>Etes-vous végétarien ? <input type="checkbox" name="végétarien"/></label></p>
            <p><input type="submit"/></p>
        </form>
    </body>
</html>