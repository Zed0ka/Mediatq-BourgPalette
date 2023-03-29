<?php
//db.json => contient les user+mdp à éloigner du API getallbooks

/*
!req reçue :
GET http://localhost/challenges/Mediatq_BourgPalette/Projet/API/getAllBooks.php HTTP/1.1

!rep à envoyer :
status line : HTTP/1.1 200 OK
header :
content-type: application/json
body: 
    [
        {
            "titre": "ALivre 1",
            "langue":"Francais",
            "auteur": "Auteur1",
            "genre": "Fantasy",
            "id":"0"
        },
        {
            "titre": "BLivre 2",
            "langue":"Francais",
            "auteur": "Auteur2",
            "genre": "Fantasy",
            "id":"1"
        },
        {
            "titre": "ALivre 3",
            "langue":"Francais",
            "auteur": "Auteur1",
            "genre": "Science-Fiction",
            "id":"2"
        },
        {
            "titre": "CLivre 4",
            "langue":"Anglais",
            "auteur": "Auteur4",
            "genre": "Science-Fiction",
            "id":"3"
        }
    ]
*/
//! appel BDD
$username = "MDTQ-Admin";
$password = "BP1996";

// je récup mon sql 
$bdd = new PDO("mysql:host=localhost;dbname=mdtqbooks",$username,$password);

// je déclare ma variable qui contiendra mes objets (tableau assoc) : 
$books = [];

// je déclare une variable intermédiaire qui va contenir les données sql :
$data = $bdd->query("SELECT titre_livre as titre, auteur_livre as auteur, genre_livre as genre, langue_livre as langue, id_livre as id, couverture_livre as cover FROM livre");

// je remplis mon tableau avec les infos de la query
$books = $data->fetchAll();

//! envoyer la requête http
// je vais devoir editer la req à la mano
// quand çà fonctionne :
http_response_code(200);

// headers essentiels:
header("HTTP/1.1 200 OK");
header("Content-type: application/json");

// body :
// je m'assure d'encoder les données en json
echo json_encode($books);
?>