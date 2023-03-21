<?php
//! appel BDD
$username = "MDTQ-Admin";
$password = "BP1996";

//* accès à la bdd :
$bdd = new PDO("mysql:host=localhost;dbname=mdtqbooks",$username,$password);

// variable contenant le livre (objet)
$book = [];
$idBook = $_GET['id'];
$data = $bdd->prepare('SELECT titre_livre as titre, auteur_livre as auteur, genre_livre as genre, langue_livre as langue FROM livre WHERE id_livre = .$idBook.');
$data = $bdd->execute();
$book = $data->fetch();

//! envoyer la requête http
// Requête ok (param les 300-400-500 plus tard) :
http_response_code(200);

// headers essentiels:
header("HTTP/1.1 200 OK");
header("Content-type: application/json");

// body :
// je m'assure d'encoder les données en json;
echo json_encode($book);

?>