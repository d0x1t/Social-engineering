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
        session_start();
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
    </div>

</body>
<footer>
    <?php
    include('footer.html');
    ?>
</footer>

</html>
<script type="text/javascript">
    var opzione_scelta = -1;  // 1 se sceglie si 
    function ottieni_risultato_si() {
        var siOptionElement = document.getElementById("si_option");
        var noOptionElement = document.getElementById("no_option");

        // Colora lo sfondo di verde per l'opzione "Si"
        siOptionElement.style.backgroundColor = "#33A474";


        // Colora lo sfondo di grigio per l'opzione "No"
        noOptionElement.style.backgroundColor = "#cccccc";
        opzione_scelta = 1;
     
    }


    function ottieni_risultato_no() {
        var siOptionElement = document.getElementById("si_option");
        var noOptionElement = document.getElementById("no_option");

        // Colora lo sfondo di verde per l'opzione "No"
        noOptionElement.style.backgroundColor = "#33A474";

        // Colora lo sfondo di grigio per l'opzione "Si"
        siOptionElement.style.backgroundColor = "#cccccc";
        opzione_scelta = 2;

    }
    function inizializza_risultato() {
        var siOptionElement = document.getElementById("si_option");
        var noOptionElement = document.getElementById("no_option");

        // Colora lo sfondo di grigio per l'opzione "Si"
        siOptionElement.style.backgroundColor = "#cccccc";
        // Colora lo sfondo di grigio per l'opzione "No"
        noOptionElement.style.backgroundColor = "#cccccc";


    }
    function startQuiz() {
        // Ottieni gli elementi HTML delle due box
        var homeBoxElement = document.querySelector('.home-box');
        var quizBoxElement = document.querySelector('.quiz-box');

        // Nascondi home-box
        homeBoxElement.style.display = 'none';

        // Rimuovi la classe hide da quiz-box
        quizBoxElement.classList.remove('hide');

        caricaDomandaSuccessiva();
        opzione_scelta = 0;
    }


    var numeroDomandaCorrente = 0; // Inizializza la variabile per tenere traccia della domanda corrente
    var risultati = [];
    function caricaDomandaSuccessiva() {
        if (opzione_scelta == 0) {
            alert("Devi scegliere almeno un opzione prima di proseguire");
            exit();
        }
        if(opzione_scelta!=-1){
        risultati.push(opzione_scelta);
        
        }
        opzione_scelta = 0;
        inizializza_risultato();
        // Incrementa il numero di domanda corrente
        numeroDomandaCorrente++;

        // Ottieni l'elemento HTML della domanda
        var questionsTextElement = document.getElementById("questionsText");
        var successivaButtonElement = document.getElementById("successiva_button");
        var risultatoButtonElement = document.getElementById("risultato_button");

        // Esegui la richiesta AJAX per ottenere la domanda successiva dal server
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.open('POST', 'prossima_domanda.php', true);
        xmlhttp.onreadystatechange = function () {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                // Aggiorna il testo della domanda nella div
                questionsTextElement.innerHTML = xmlhttp.responseText;

                // Aggiorna il numero di domanda nella div
                document.querySelector(".question-number").textContent = "Domanda " + numeroDomandaCorrente + " di 5";

                // Cambia il testo del pulsante se si è alla domanda 5
                if (numeroDomandaCorrente == 5) {
                    successivaButtonElement.style.display = 'none';
                    // Rimuovi la classe hide da quiz-box
                    risultatoButtonElement.classList.remove('hide');
                }
            }
        };

        // Invia i dati al server con il metodo POST
        var params = 'numero_domanda_corrente=' + numeroDomandaCorrente;
        xmlhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
        xmlhttp.send(params);
    }
    function caricaRisultato() {
        risultati.push(opzione_scelta);
      // Conta quanti 1 ci sono nell'array risultati
      var conteggioUno = 0;

    for (var i = 0; i < risultati.length; i++) {
    if (risultati[i] === 1) {
        conteggioUno++;
    }
    }
    if(conteggioUno==0){
        window.location.href = 'risultato_personalita.php?personalita=comandante';
    }
    if(conteggioUno==1){
        window.location.href = 'risultato_personalita.php?personalita=protagonista';
    }
    if(conteggioUno==2){
        window.location.href = 'risultato_personalita.php?personalita=imprenditore';
    }
    if(conteggioUno==3){
        window.location.href = 'risultato_personalita.php?personalita=avventuriero';
    }
    if(conteggioUno==4){
        window.location.href = 'risultato_personalita.php?personalita=sostenitore';
    }
    if(conteggioUno==5){
        window.location.href = 'risultato_personalita.php?personalita=difensore';
    }
    }

</script>