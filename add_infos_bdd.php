<?php

$bdd = new PDO('mysql:host=localhost;dbname=autocompletion', 'root', '');

$requete = $bdd->prepare('INSERT INTO informations (name, description, image, common_locations)
                            VALUE(:name, :description, :image, :common_locations)
');

$requete->bindParam(':name', $_POST['name']); 
$requete->bindParam(':description', $_POST['description']); 
$requete->bindParam(':image', $_POST['image']); 
$requete->bindParam(':common_locations', $_POST['common_locations']); 


$requete->execute(); 
