
<html>
    <head>
	<title>NEWS | Social Engineering</title>
    <meta charset="UTF-8">
    <meta name="description" content="Sito web sul Social Engineering">
	<link rel="shortcut icon" href="foto_news/icona.png" type="image/x-icon">
	<link href="style.css" rel="stylesheet" type="text/css">
    </head>
</html>
<body>
<div id="mainNews">
<?php
        include("header.php");
?>
</body>
<button onclick="getCoordinates()">Mostra posizione</button>
    <p id="coordinates"></p>
<div id="contenutoNews" class="news-container"> 
    <div class="argomento"> 
        <div class="testo">
            <a href="https://www.cybersecurity360.it/news/telefonata-di-meloni-la-lezione-cyber-che-tutte-le-aziende-dovrebbero-imparare/" class="titolo">Telefonata di Meloni, ma quale scherzo: sono tecniche criminali</a>
            <p class="descrizione">Dietro la storia di Meloni vittima di uno "scherzo" del duo comico russo 
                                c'è tanto della classica sapienza da social engineering che i...
            </p>
        </div>
        <img src="foto_news/meloni.jpeg" alt="News Image" class="image">
    </div>
    <div class="argomento"> 
        <div class="testo">
            <a href="https://www.securityopenlab.it/news/2699/ransomware-e-social-engineering-spopolano-colpa-del-fattore-umano.html" class="titolo">Ransomware e social engineering spopolano, colpa del fattore umano</a>
            <p class="descrizione">Il social engineering avanza, il cybercrime è sempre protagonista della 
                                    stragrande maggioranza deli attacchi. La causa più diffusa degli...
            </p>
        </div>
        <img src="foto_news/openLab.jpeg" alt="News Image" class="image">
    </div>
    <div class="argomento"> 
        <div class="testo">
            <a href="https://www.fastweb.it/fastweb-plus/digital-dev-security/social-engineering-quali-sono-le-principali-truffe-online-e-come-puoi-proteggerti/" class="titolo">Le diverse tipologie di social engineering</a>
            <p class="descrizione">Per difendersi dal social engineering bisogna imparare a conoscere le 
                                    principali truffe e gli attacchi hacker che puntano alle informazioni 
                                    personali degli...
            </p>
        </div>
        <img src="foto_news/hacker.jpeg" alt="News Image" class="image">
    </div>
    <div class="argomento"> 
        <div class="testo">
            <a href="https://www.today.it/tech/attacchi-social-engineering.html" class="titolo">Cybersecurity: cosa sono gli attacchi di social engineering</a>
            <p class="descrizione">L'arte del raggiro online ha assunto oggi una nuova forma, il social 
                                    engineering. Questo tipo di attacco informatico non si basa su algoritmi 
                                    complessi o...
            </p>
        </div>
        <img src="foto_news/cellulare.jpeg" alt="News Image" class="image">
    </div>
    
</div>
</body>




<footer>
<?php
include('footer.html');
?>
</footer>
</html>
<script>
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
        e una funzione di callback per gestire gli errori (errorCallback).*/        }
    </script>