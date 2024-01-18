<?php
session_start();
function isLogged()
{
	if (isset($_SESSION['username'])) {
		return true;
	} else {
		return false;
	}
}

//**********************************// 

// FUNZIONE PER IL LOGOUT //
if (isset($_GET['logout'])) {
	session_destroy();
	header("location: index.php");
}
//**********************************// 

// FUNZIONE PER IL QUIZ //

function recuperaPersonalitaDaDatabase() {
    require "credenziali_db.php";

    $db = pg_connect($connection_string);
    // Prepara la query utilizzando un prepared statement
    $query = "SELECT personalita FROM risultato WHERE username = $1";
    $stmt = pg_prepare($db, "ottieni_personalita", $query);


    // Ottieni l'username dalla sessione
    $username = $_SESSION['username'];

    // Esegue la query con l'username fornito come parametro
    $result = pg_execute($db, "ottieni_personalita", array($username));

    if (!$result) {
        echo "ERRORE QUERY: " . pg_last_error($db);
    }else{
    $row = pg_fetch_assoc($result);
    // Salva la personalità nella sessione
    if(isset($row['personalita']))
    $_SESSION['risultato_personalita'] = $row['personalita'];
    }
    // Chiude la connessione al database
    pg_close($db);
}


?>
<script type="text/javascript">

// FUNZIONI PER IL LOGIN //

function controllaUtenteEsistente_login(callback) {
    var username = document.form_log.username.value;
    var password =document.form_log.password.value;
    // Eseguire una richiesta AJAX al server per verificare l'esistenza dell'utente
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.open("POST", "login-manager.php", true);
    // Imposta l'intestazione Content-Type
    xmlhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    // Gestisci gli eventi di stato della richiesta
    xmlhttp.onreadystatechange = function () { // Viene eseguita ogni volta che lo stato cambia
        if (xmlhttp.readyState == 4) {   // 4 significa richiesta completata.
            if (xmlhttp.status == 200) {
                var response = xmlhttp.responseText;
                if (response == "exists") {
                    callback(true);
                } else if (response == "not_exists") {
                    callback(false);
                }
            }
        }
    };
    // Invia la richiesta con i parametri
    var params = 'username=' + username + '&password=' + password;
    xmlhttp.send(params);
}
    function validaModulo_login() {
        if (document.form_log.username.value == "") {
            alert("Devi inserire un username");
            document.form_log.username.focus();
            return false;
        }
        if (document.form_log.password.value == "") {
            alert("Devi inserire una password");
            document.form_log.password.focus();
            return false;
        }
     controllaUtenteEsistente_login(gestisce_username_login); // Utilizzo una callBack perche il servizio AJAX è asincrono e quindi il flusso del codice non aspetta la fine dell'esecuzione
                                                // di controllaUtenteEsistente. NOTA: fin quando non uso gestisce_username(nome_valore) la funzione non viene chiamata ma passata.
    return false;
    }
    function gestisce_username_login(userExists){
        if (!userExists) {
            var username = document.form_log.username.value;
            alert("Username o password errati!");
            document.form_log.username.focus();
        } else {
            
            document.form_log.submit();
        }
    }
//*****************************************//

//FUNZIONI PER LA REGISTRAZIONE//

function controllaUtenteEsistente_register(callback) {
    var username = document.form_reg.username.value;
    // Eseguire una richiesta AJAX al server per verificare l'esistenza dell'utente
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.open("POST", "verifica_utente.php", true);
    // Imposta l'intestazione Content-Type
    xmlhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    // Gestisci gli eventi di stato della richiesta
    xmlhttp.onreadystatechange = function () { // Viene eseguita ogni volta che lo stato cambia
        if (xmlhttp.readyState == 4) {   // 4 significa richiesta completata.
            if (xmlhttp.status == 200) {
                var response = xmlhttp.responseText;
                if (response == "exists") {
                    callback(true);
                } else if (response == "not_exists") {
                    callback(false);
                }
            }
        }
    };
    // Invia la richiesta con i parametri
    var params = 'username=' + username;
    xmlhttp.send(params);
}

    function validaModulo_register() {
        if (document.form_reg.username.value == "") {
            alert("Devi inserire un username");
            document.form_reg.username.focus();
            return false;
        }
        if (document.form_reg.password.value == "") {
            alert("Devi inserire una password");
            document.form_reg.password.focus();
            return false;
        }
        if (document.form_reg.password.value != document.form_reg.repassword.value) {
            alert("Le due password non corrispondono");
            document.form_reg.password.focus();
            document.form_reg.password.select();
            return false;
        }
        var password = document.form_reg.password.value;
    if (password.length < 8) {
        alert("La password deve essere di almeno 8 caratteri");
        document.form_reg.password.focus();
        return false;
    }

    if (!password.match(/[0-9]/)) { 
        alert("La password deve contenere almeno un numero");
        document.form_reg.password.focus();
        return false;
    }
   
    if (password.length < 8 || !password.match(/[0-9]/)) {
            return false;
     }
    
     controllaUtenteEsistente_register(gestisce_username_register);
	//Utilizzo una callBack perche il servizio AJAX è asincrono e quindi il flusso del codice non aspetta la fine dell'esecuzione
    // di controllaUtenteEsistente. NOTA: fin quando non uso gestisce_username(nome_valore) la funzione non viene chiamata ma passata.
    
    return false;
    }
    function gestisce_username_register(userExists){
        if (userExists) {
            var username = document.form_reg.username.value;
            alert("L'utente: " + username + " è già presente!");
            document.form_reg.username.focus();
        } else {
            document.form_reg.submit();
        }
    }
	
    function mostraAvvisoPassword() {
        var avvisiPassword = document.getElementsByClassName('avvisoPassword');
        var passwordInput = document.getElementById('passwordField');
        var lucchettoIcon = document.getElementById('lock_repass');
        var ripetiPasswordInput = document.getElementsByName('repassword')[0];
        var password = passwordInput.value;

        for (var i = 0; i < avvisiPassword.length; i++) {
            if (password.length < 8 || !password.match(/[0-9]/)) {
                avvisiPassword[i].style.display = 'block';
                lucchettoIcon.style.marginTop = '15px';
                ripetiPasswordInput.style.marginTop = '15px';
            } else {
                avvisiPassword[i].style.display = 'none';
                lucchettoIcon.style.marginTop = '0';
                ripetiPasswordInput.style.marginTop = '0';
            }
        }
    }
    function reindirizza() {
    setTimeout(function() {
        window.location.href = "index.php";
    }, 2000); 
}
//********************************************//

// FUNZIONI PER LE NEWS //

function successCallback(position) {  //getCurrentPosition fa in modo che questa funzione riceve un oggetto position che contiene tutte le info.
            var latitude = position.coords.latitude;
            var longitude = position.coords.longitude;
            document.getElementById("coordinates").innerHTML = "Latitudine: " + latitude + "<br>Longitudine: " + longitude;
        }

        function errorCallback(error) { //getCurrentPosition fa in modo che questa funzione riceve un oggetto error che contiene tutte le info.
            switch (error.code) { //Questo costrutto switch si basa sul valore del campo code dell'oggetto error. code contiene il codice dell'errore specifico.
                case error.PERMISSION_DENIED:
                    document.getElementById("coordinates").innerHTML = "Permesso negato.";
                    break;
                case error.POSITION_UNAVAILABLE:
                    document.getElementById("coordinates").innerHTML = "Posizione non disponibile.";
                    break;
                case error.TIMEOUT:
                    document.getElementById("coordinates").innerHTML = "Richiesta scaduta.";
                    break;
                case error.UNKNOWN_ERROR:
                    document.getElementById("coordinates").innerHTML = "Errore sconosciuto.";
                    break;
            }
        }

        function getCoordinates() {  
            navigator.geolocation.getCurrentPosition(successCallback, errorCallback);
            /* Questa funzione accetta due argomenti: una funzione di callback per il caso di successo (successCallback)
        e una funzione di callback per gestire gli errori (errorCallback).*/      
        }
//********************************************//

//FUNZIONI PER IL QUIZ //

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
        var resultBoxElement =document.getElementById("mostra_risultato");

        // Nascondi il box del risultato nel caso del quiz gia svolto
        if(resultBoxElement) // Controlla se esiste resultBoxElement. Perche se l'utente effettua il quiz per la prima volta allora non esiste
        resultBoxElement.style.display= 'none';
        // Nascondi home-box
        homeBoxElement.style.display = 'none';

        // Rimuovi la classe hide da quiz-box
        quizBoxElement.classList.remove('hide');

        
        
        caricaDomandaSuccessiva();
        opzione_scelta=0;
    }


    var numeroDomandaCorrente = 0; // Inizializza la variabile per tenere traccia della domanda corrente
    var risultati = [];
    function caricaDomandaSuccessiva() {
        if (opzione_scelta == 0) {
            alert("Devi scegliere almeno un opzione prima di proseguire");
            exit();
        }
        
        if(numeroDomandaCorrente==2 && opzione_scelta==2){ //Questo per mantenere coerenza con i risultati
            opzione_scelta=1;
        }
        else if(numeroDomandaCorrente==2 && opzione_scelta==1){ 
            opzione_scelta=2;
        }
        if(opzione_scelta!=-1){
        risultati.push(opzione_scelta);
        }
        opzione_scelta = 0;
        inizializza_risultato();
        // Incrementa il numero di domanda corrente
        numeroDomandaCorrente++;

        //Ottieni l'elemento HTML della domanda
        var questionsTextElement = document.getElementById("questionsText");
        var successivaButtonElement = document.getElementById("successiva_button");
        var risultatoButtonElement = document.getElementById("risultato_button");

        //Esegui la richiesta AJAX per ottenere la domanda successiva dal server
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

        //Invia i dati al server con il metodo POST
        var params = 'numero_domanda_corrente=' + numeroDomandaCorrente;
        xmlhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
        xmlhttp.send(params);
    }
    function caricaRisultato() {
        if (opzione_scelta == 0) {
            alert("Devi scegliere almeno un opzione prima di proseguire");
            exit();
        }
        if(numeroDomandaCorrente==5 && opzione_scelta==2){ //Questo per mantenere coerenza con i risultati
            opzione_scelta=1;
        }
        else if(numeroDomandaCorrente==5 && opzione_scelta==1){ 
            opzione_scelta=2;
        }
        risultati.push(opzione_scelta);
      //Conta quanti 1 ci sono nell'array risultati
    var conteggioUno = 0;

    for (var i = 0; i < risultati.length; i++) {
        if (risultati[i] === 1) {
            conteggioUno++;
        }
    } 
    if (risultati[0] == 1 && (risultati[3] == 1 && risultati[4] == 2)) {
        var numeroCasuale = Math.random();
    var personalitaScelta;
    if (numeroCasuale < 0.5) {
        personalitaScelta = 'imprenditore';
    } else {
        personalitaScelta = 'comandante';
    }
    effettua_salvataggio_personalita(personalitaScelta);
    window.location.href = 'risultato_personalita.php?personalita=' + personalitaScelta;
    exit();
}

    if (conteggioUno == 2 || conteggioUno == 3) {  //Questo perche le due personalita sono assai simili.
    //Genera un numero casuale tra 0 e 1
    var numeroCasuale = Math.random();
    var personalitaScelta;
    if (numeroCasuale < 0.5) {
        personalitaScelta = 'imprenditore';
    } else {
        personalitaScelta = 'avventuriero';
    }
    effettua_salvataggio_personalita(personalitaScelta);
    window.location.href = 'risultato_personalita.php?personalita=' + personalitaScelta;
    }


    if(conteggioUno==4 || conteggioUno == 1 ){
        var numeroCasuale = Math.random();
    var personalitaScelta;
    if (numeroCasuale < 0.5) {
        personalitaScelta = 'protagonista';
    } else {
        personalitaScelta = 'sostenitore';
    }
    effettua_salvataggio_personalita(personalitaScelta);
    window.location.href = 'risultato_personalita.php?personalita=' + personalitaScelta;
    }


    if(conteggioUno==5){
        var personalitaScelta = 'difensore';
        effettua_salvataggio_personalita(personalitaScelta);
        window.location.href = 'risultato_personalita.php?personalita=difensore';
    }
    }
    function effettua_salvataggio_personalita(personalitaScelta){
            //Esegui la richiesta AJAX per ottenere la domanda successiva dal server
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.open('POST', 'salva_risultato.php', true);
        
        //Invia i dati al server con il metodo POST
        var params = 'personalita_scelta=' + personalitaScelta;
        xmlhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
        xmlhttp.send(params);
    }
//********************************************//
</script>
