<html>

<head>
    <title>QUIZ | Social Engineering</title>
    <meta charset="UTF-8">
    <meta name="description" content="Sito web sul Social Engineering">
    <link rel="shortcut icon" href="foto_quiz/icona.png" type="image/x-icon">
    <link href="style.css" rel="stylesheet" type="text/css">
</head>

</html>

<body>
    <div id="mainQuiz">
        <?php
        include("header.php");
        ?>
        <div id=quiz_title>
            <h1>Test della Personalità</h1>
        </div>
        <img src="foto_quiz/mainQuiz.jpg">
    </div>
    <div id="main-box">
        <div class="home-box custom-box ">
            <h3> Istruzioni: </h3>
            <p>Numero totale di domande:<span class="total-question">5</span></p>
            <input type="button" class="quiz-btn" value="Avvia quiz" onclick="startQuiz()"></input>
        </div>
        <div class="quiz-box custom-box hide">
            <div class="question-number">
            </div>
            <div class="questions-text" id="questionsText">
            </div>
            <div class="option-container">
                <div id="si_option" onclick="ottieni_risultato_si()" class="option">Si</div>
                <div id="no_option" onclick="ottieni_risultato_no()" class="option">No</div>
            </div>
            <div class="next-button">
                <button id="successiva_button" type="button" class="quiz-btn"
                    onclick="caricaDomandaSuccessiva()">Successiva</button>
                <button id="risultato_button" type="button" class="quiz-btn hide"
                    onclick="caricaRisultato()">Risultato!</button>
            </div>
        </div>
        <?php
            if (isset($_SESSION["risultato_personalita"])) {
                echo '
                        <div id="mostra_risultato" class="home-box custom-box">
                            <h3> Hai già svolto il quiz </h3>
                            <a href="risultato_personalita.php?personalita=' . $_SESSION["risultato_personalita"] .'" class="quiz-btn">Vai al risultato</a>
                        </div>';
            }
        ?>
    </div>

</body>
<footer>
    <?php
    include('footer.html');
    ?>
</footer>

</html>
