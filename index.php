<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Social Engineering</title>
    <meta name="description" content="Sito web sul Social Engineering">
    <link rel="shortcut icon" href="icona.png" type="image/x-icon">
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
                echo '<h2><a href="login.php">Accedi per esplorare <br> <br> Contenuti esclusivi</a></h2>';
                }
                ?>
        </div>
        
        <img src="sfondo.jpg" alt="Social">
    </div>

    <!-- se l'utente non è loggato dovrà vedere solo due delle immagini -->
    <ul id="elenco">
        <?php
        if (isLogged()) {
            echo '
        <li id="elenco_container">
            <a href="quiz.php">
                <img src="quiz.png" id="img1" alt="Quiz">          
            </a>
        </li >';
        }
        if(!isLogged()){
            echo '
        <li id="elenco_container">
            <a href="login.php">
                <img src="quizSfocato.png" id="img1_sfocata" alt="Quiz">          
            </a>
        </li >';
        }
        ?>
        <li id="elenco_container">
            <a href="news.php">
                <img src="news.png" id="img2" alt="News">

            </a>
        </li>
        <li id="elenco_container">
            <a href="storia.php">
                <img src="storia.png" id="img3" alt="Storia">

            </a>
        </li>
    </ul>
    <?php
    include("footer.html");
    ?>
</body>

</html>