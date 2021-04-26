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
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        
    </head>

    <body>
        <header id="header_nav">
            <div class="nav">
                <div class="logo_header logo">
                    <img src="images/tri_force.svg" alt="triforce">
                </div>  
                <ul>
                    <li><a href="index.php"> Home </a></li>
                    <li><a href="#"> Wiki </a></li>
                    <li><a href="#"> Contact </a></li>
                </ul> 
            </div>

            <div class="search">
                <div>
                    <input type="search" name="bar" id="search_bar" placeholder="Type to search... (ex: Moblin, Lynel, Guardian...)">
                    <i class="fa fa-search" id="search_icon"></i> 
                </div>
                <div id="result" style="display: none;">
                    <ul id="list_result">

                    </ul>
                </div>  
            </div> 

        </header>

        <main>
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

            <section id="search_result">
                
            </section>
        </main>  

        <footer>
            <p> Breath of the Wild - Monster search </p>
            <p> @ 2021, GAUTHIER Baptiste </p>
        </footer>
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="script/script.js"></script>

    </body>
</html>