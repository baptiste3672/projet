<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="CSS.css"> 
        <title>Main</title>
    </head>

    <body>
        <div class="menu">
            <ul>
                <li><a href="">Menu 1</a></li>
                <li><a href="main2.php">Menu 2</a></li>
                <li><a href="">Menu 3</a></li>
            </ul>
        </div>

    	<h3>Apprentissage du PHP</h3>
    	<?php 
            $age = 12;
            if ($age < 12) {
                echo 'Salut Gamin !';
            }
            elseif ($age == 12) {
                echo "Tu as 12 ans tu es entre adulte et enfant !";
            }
            else
            {
                echo "Bonjour cher adulte !";
            }
        ?>
        <br>
        <?php
            $adulte = true ;
            if ($adulte) {
                echo "Tu es un adulte";
            }
            else {
                echo "Tu es un enfant";
            }
    	?>
        <br>
        <?php 
            $nom = "Bernard";
            if ($adulte && $nom == "Bernard") {
                echo "ça fonctionne !!!";
            }
         ?>

         <h3>Les Boucles</h3>

         <?php 
            $repetition = 0;

            while ($repetition < 10) {
                echo '<p>Je ne dois pas copier sur mon voisin.'. $repetition .'</p>';
                $repetition++;
            }
            for ($repetition1=0; $repetition1 < 10 ; $repetition1++) { 
                echo $repetition1;
            }
          ?>
          <h3>Les tableaux</h3><br>
          <?php 

            // $prenom[0] = 'Mathieu';
            // $prenom[1] = 'Marie';
            // $prenom[2] = 'Baptiste';
            // $prenom[3] = 'Robert';

            $prenoms = array('Mathieu', 'Marie','Robert');
            
            echo $prenoms[1];
        ?>
        <br><br>
        <?php 
            echo print_r($prenoms); //pour debuger 
        ?>
        <br>
        <?php
            $personne = array('nom' => 'Nebra', 'prenom' => 'Mathieu', 'age' => 90 );
            print_r($personne)
        ?>
        <br>
        <?php
        foreach ($prenoms as $prenom) {
            echo '<p>' . $prenom . '</p>';
        }
        ?>

        <h3>Les Fonctions</h3>
        <?php  
            $phrase = 'Bonjour je suis une phrase un peu plus longue.';
            $nombresDeCaractères = strlen($phrase);
            echo 'Il y a ' . $nombresDeCaractères . ' caracteres dans cette phrase.<br>';
            $phraseMelange = str_shuffle($phrase);
            echo $phraseMelange . '<br>';
            echo 'On est le ' . date('j'). 'ème jours de l année.' .'<br>';

            function direBonjour($nom)
            {
                echo 'Bonjour ' . $nom . '. <br>';
            }
            direBonjour ("Marie");
            direBonjour ("Baptiste");
            direBonjour ("Clément");

        ?>
        <?php include("incrementation.php"); ?>
          
    	<p>Bonjour, je suis un <em>paragraphe</em> de texte !</p>
    	<ul>
    		<li style="color: red"><a href="main1.php">Formulaire</a></li>
    		<li style="color: blue">PHP</li>
    		<li style="color: orange">MySQL</li>
            <li style="color: black"><a href="bonjour.php?nom=Nebra&amp;prenom=Mathieu&amp;">Dis-moi bonjour</a></li>
    	</ul>
        <p>Un paragraphe est entré ici.Un paragraphe est entré ici.Un paragraphe est entré ici.Un paragraphe est entré ici.Un paragraphe est entré ici.Un paragraphe est entré ici.Un paragraphe est entré ici.Un paragraphe est entré ici.Un paragraphe est entré ici.Un paragraphe est entré ici.Un paragraphe est entré ici.Un paragraphe est entré ici.Un paragraphe est entré ici.Un paragraphe est entré ici.Un paragraphe est entré ici.
       </p>
       <?php 
       print_r($_GET); 
       print_r($_POST);
       ?>
    </body>
</html>