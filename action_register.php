<?php
// Connexion à la base de données
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=domisep;charset=utf8', 'root', '');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}




// Insertion du message à l'aide d'une requête préparée
$req = $bdd->prepare('INSERT INTO users (name, password) VALUES(?,?)');
$req->execute(array($_POST['username'], $_POST['password']));

// Redirection du visiteur vers la page du minichat
header('Location: main.php');
?>