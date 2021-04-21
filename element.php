<?php

    $bdd = new PDO('mysql:host=localhost;dbname=autocompletion', 'root', '');

    $requete = $bdd->prepare("SELECT *
                                FROM informations
                                    WHERE id = :id
    "); 

    $requete->bindParam(':id', $_GET['id']);

    $requete->execute(); 

    $result = $requete->fetch(PDO::FETCH_ASSOC); 

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Element </title>
        <link rel="stylesheet" href="style/style.css">
    </head>

    <body>
        <section id="monster">
            <div id="picture_monster">
                <img src="<?= $result['image'] ;?>" alt="img_monster">
            </div>
            <div id="text_monster">
                <h1> <?= $result['name'] ; ?></h1>
                <p> <?= $result['description'] ; ?> </p>
                <p> Location : <?= $result['common_locations'] ;?> </p>
            </div>
        </section>    
        
    </body>
</html>