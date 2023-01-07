<?php 
function listeSon()
{
	require("supremeadmin/connexionDB.php");
	$req = $pdo->prepare("SELECT * FROM article");
	$req->execute();
	$resultat = $req;
}