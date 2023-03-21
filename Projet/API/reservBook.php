<?php
//! appel BDD
$username = "MDTQ-Admin";
$password = "BP1996";

//* accès à la bdd :
$bdd = new PDO("mysql:host=localhost;dbname=mdtqbooks",$username,$password);
?>