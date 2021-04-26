<?php

$search = $_GET['search'] ; 

$bdd = new PDO('mysql:host=localhost;dbname=autocompletion', 'root', '');

if(isset($_GET['search']) && $_GET['search'] != "")
{
    $requete = $bdd->prepare("SELECT *
                                FROM informations
                                    WHERE name 
                                        LIKE '$search%' 
                                            LIMIT 10
    "); 
    
    $requete->execute() ; 

    $result = $requete->fetchAll(PDO::FETCH_ASSOC) ;

    // var_dump($result) ;

    foreach($result as $key => $value){
        ?>
     
    <li><a href="element.php?id=<?= $value['id'] ; ?>"> <?= $value['name'] ; ?></a></li>

    <?php
    }
}