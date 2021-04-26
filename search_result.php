<?php

$search = $_GET['search'] ; 

$bdd = new PDO('mysql:host=localhost;dbname=autocompletion', 'root', '');

if(isset($_GET['search']) && $_GET['search'] != "")
{
    $requete = $bdd->prepare("SELECT *
                                FROM informations
                                    WHERE name 
                                        LIKE '%$search%' 
                                            LIMIT 15
    "); 
    
    $requete->execute() ; 

    $result = $requete->fetchAll(PDO::FETCH_ASSOC) ;

    // var_dump($result) ;
    ?>
    <h1> Search result : </h1>
    <?php

    if(empty($result))
    {
        echo '<p class="error"> No results have been found :( </p>' ; 
    }
    else{

        foreach($result as $key => $value){
            ?>
                <div>
                    <h3> <a href="element.php?id=<?= $value['id'] ; ?>"><?= $value['name'] ; ?></a></h3>
                    <p> <?= $value['description'] ; ?> </p>
                </div>
    
        <?php
        }
    }

}