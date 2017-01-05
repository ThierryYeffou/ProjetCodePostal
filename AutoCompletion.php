<?php


//Connexion MySQL
try
{
		
	/*$bdd = new PDO('mysql:host=localhost;dbname=applicationweb;charset=utf8', 'root', '');*/
	
	/* j'ai remplacé les identifiants de connexion de la base de donnée local par celle de mon hebergeur temporaire en ligne */
	
    $bdd = new PDO('mysql:host=mysql.hostinger.fr;dbname=u311606640_base', 'u311606640_base', 'tiomelaflore');
	
	
}
catch (Exception $ex)
{
    echo $ex->getMessage();
}

$req = $bdd->prepare('SELECT CP, VILLE FROM cp_autocomplete WHERE CP = ?');

$req->execute(array($_POST['codePostal']));

/* Affichage des données dans un label*/

echo '<label>';
     while ($donnees = $req->fetch())
    {
	echo '<li>' . $donnees['CP'] . ' : ' . $donnees['VILLE'] . ' </li>';
    }
echo '</label>';

$req->closeCursor();

 


?>