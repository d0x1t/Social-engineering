<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Social Engineering</title>
    <meta name="description" content="Sito web sul Social Engineering">
    <link rel="shortcut icon" href="foto_index/icona.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Inconsolata&display=swap" rel="stylesheet">
    <link href="style.css" rel="stylesheet" type="text/css">
</head>

<body>
    <div id="mainImage">
        <?php
        include("header.php");
        ?>
        <div id=header_bottom>
                <h1>Esplora il potere della persuasione: Social Engineering in azione.</h1>
                <?php
                
                if(!isLogged()){
                echo '<h2><a href="gestione_utente.php?login=1">Accedi per esplorare <br> <br> Contenuti esclusivi</a></h2>';
                }
                ?>
        </div>
        
        <img src="foto_index/sfondo.jpg" alt="Social">
    </div>

    <!-- se l'utente non è loggato dovrà vedere solo due delle immagini -->
    <ul id="elenco">
        <?php
        if (isLogged()) {
            echo '
        <li class="elenco_container">
            <a href="quiz.php">
                <img src="foto_index/quiz.png" id="img1" alt="Quiz">          
            </a>
        </li >';
        }
        if(!isLogged()){
            echo '
        <li class="elenco_container">
            <a href="gestione_utente.php?login=1">
                <img src="foto_index/quizSfocato.png" id="img1_sfocata" alt="Quiz">          
            </a>
        </li >';
        }
        ?>
        <li class="elenco_container">
            <a href="news_storia.php?news=1">
                <img src="foto_index/news.png" id="img2" alt="News">

            </a>
        </li>
        <li class="elenco_container">
            <a href="news_storia.php?storia=1">
                <img src="foto_index/storia.png" id="img3" alt="Storia">

            </a>
        </li>
    </ul>
    <?php
    include("footer.html");
    ?>
</body>

</html>