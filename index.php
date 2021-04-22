<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="style/style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>

        <header>
            <div>
                <img src="images/tri_force.svg" alt="triforce">
            </div>  
            <ul>
                <li> Home </li>
                <li> Wiki </li>
                <li> Contact </li>
            </ul>      

        </header>

        <main>
            <section id="search">
                <article class="content_search">
                    <div class="title">
                        <h1> Breath of the Wild - <span>Monster search</span> </h1>
                    </div>
                    <div class="bar">
                            <input type="search" name="bar" id="search_bar" placeholder="Type to search... (ex: Moblin, Lynel, Guardian...)">
                            <i class="fa fa-search" id="search_icon"></i>
                            <!-- <button id="button_search"> Search </button>     -->
                    </div>
                    <div id="result" style="display: none;">
                        <ul id="list_result">

                        </ul>
                    </div>    
                </article>    
            </section>

            <section id="search_result">
                
            </section>


        </main>
  
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="script.js"></script>
    </body>
</html>