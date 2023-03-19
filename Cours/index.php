<?php

// définir statut code de la rep : permet de créer une page sur mesure selon le code statut
http_response_code(200);
// définir header de la rep : permet de modifier le type de la réponse + n'importe quel info ajoutée en header
header("Content-type:application/json"); // définir le type mime est capital
header("message:whatever you want dude");
// définir le body de la rep : la page customisée en question (ici, un tableau json)
$body = 
'[
    {
        "Titre": "ALivre 1",
        "langue":"francais",
        "Auteur": "Auteur1",
        "Id":"0"
    },
    {
        "Titre": "BLivre 2",
        "langue":"francais",
        "Auteur": "Auteur2",
        "Id":"1"
    },
    {
        "Titre": "ALivre 3",
        "langue":"francais",
        "Auteur": "Auteur1",
        "Id":"2"
    },
    {
        "Titre": "CLivre 4",
        "langue":"anglais",
        "Auteur": "Auteur4",
        "Id":"3"
    }
]';
// Pour loler, je redéfinis plus proprement ma variable body : (on note que je ne la décode pas le json pour en faire une string)
$body = file_get_contents("livresTests.json");
echo $body; // le résultat est le même que la body plus haut.

// en guise d'exemple : je présente les choses en PDO + SQL (si la bdd venait à être en sql)
$bdd = new PDO("");
$data = $bdd->query("SELECT * FROM livresTests.json");
$body = json_encode($data); // pour obtenir une rép en json, cf le type mime.


//-----------------------------------------------------

// Afficher la méthode utilisée par le client : (php)
$method = $_SERVER["request_method"];
// Afficher l'URI de la req
$uri = $_SERVER["php_self"];
// Afficher un tabAssoc des headers de la req et utiliser un exemple d'index assoc
$headers = getallheaders();
$headers["content-type"];
// Recup le body de la req HTTP
$body = file_get_contents("php://input");
?>