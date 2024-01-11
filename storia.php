<html>
    <head>
	<title>STORIA | Social Engineering</title>
    <meta charset="UTF-8">
    <meta name="description" content="Sito web sul Social Engineering">
	<link rel="shortcut icon" href="icona.png" type="image/x-icon">
	<link href="style.css" rel="stylesheet" type="text/css">
    </head>
</html>
<body>
<div id="mainStoria">
<?php
session_start();
include("header.php");

?>


<div id="contenutoStoria">
<h2>Storia del Social Engineering</h2>
    <div>Da sempre conosciuto nel panorama della cybersecurity, il social engineering, o ingegneria sociale,
    rappresenta una delle tecniche più efficaci utilizzate dagli hacker per spingere gli utenti a divulgare 
    informazioni sensibili. Ciò che è cambiato rispetto al passato è il metodo di attacco, le scuse utilizzate 
    per ottenere informazioni e la diffusione di attacchi sempre più sofisticati da parte di gruppi organizzati,
    che vi abbinano ulteriori minacce come il phishing. Il termine social engineering è stato utilizzato per la
    prima volta nel 1894 dall'industriale olandese JC Van Marken, ma ha iniziato ad essere un metodo di attacco
    utilizzato in ambito informatico sin dagli anni '90.
    <span class="underscored">Negli anni '90, il social engineering consisteva nel chiamare al telefono le vittime per indurle a
    divulgare le proprie credenziali con l'inganno e fornire il numero di rete fissa che consentiva agli 
    hacker di accedere ai server aziendali interni</span>. Ai giorni nostri, i cybercriminali più astuti utilizzano 
    invece il social engineering per spingere i dipendenti di un’azienda presa di mira ad effettuare trasferimenti
    di denaro potenzialmente milionari verso conti correnti offshore, causando danni enormi alle organizzazioni,
    non soltanto in termini economici, ma spesso costano anche il posto di lavoro agli stessi dipendenti
            <h2>Caratteristiche di un attacco social engineering</h2>
    Non è sempre facile delineare un confine tra attacchi social engineering e phishing, in quanto questi vengono spesso utilizzati
    in combinazione, soprattutto negli attacchi più sofisticati. Una tecnica molto in voga è ad esempio quella di spacciarsi per un 
    dipendente o un dirigente di azienda, con il ruolo ad esempio di CFO o CEO, oppure fingersi un cliente bisognoso di assistenza. Il fine
    è il dipendente preso di mira, a fornire informazioni riservate o modificare le funzionalità di un account (ad esempio nel caso del SIM swap).
    Indipendentemente dagli obiettivi di chi lo sferra, esiste una serie ben precisa di segnali che ci permettono di capire che ci troviamo di fronte a
    un tentativo di attacco social engineering. L'ingegneria sociale fa leva sulla natura umana della vittima, cercando di suscitare timore e senso di urgenza,
    al fine di impedire che l’utente abbia il tempo per riflettere a sufficienza prima di intraprendere una determinata azione. Chi lancia l’attacco non vuole che
    l'utente preso di mira rifletta sulla richiesta, per evitare ciò l'ingegneria sociale fa leva sulla paura e cerca sempre di suscitare un senso di urgenza.

    <p>Vediamo alcune delle caratteristiche comuni a tutti gli attacchi social engineering.</p>

        <h3>Senso di ansia e urgenza</h3>
    Si prospetta alla vittima la perdita del proprio account se non vi effettua subito l'accesso, così da carpire le credenziali dell'utente. Un'altra tattica è 
    quella di spacciarsi per un dirigente dell'azienda in cui lavora la vittima, e richiedere un trasferimento bancario urgente, facendo leva sulla soggezione che il
    bersaglio nutre nei confronti del proprio superiore.

        <h3>Indirizzo del mittente contraffatto</h3>
    Molti utenti non sono nemmeno a conoscenza del fatto che sia possibile falsificare l'indirizzo e-mail del mittente, ma per fortuna, un'adeguata protezione della 
    posta elettronica è solitamente in grado di impedire alle email con mittenti contraffatti di essere recapitate sulla casella di posta degli utenti presi di mira.
    Tuttavia, spesso i cybercriminali registrano un dominio simile a quello ufficiale, confidando nel fatto che l'utente difficilmente si accorgerà della differenza,
    soprattutto se si trova in uno stato di panico e urgenza.

        <h3>Strane richieste di amicizia</h3>
    Accade spesso che i cybercriminali compromettano l'account di posta elettronica della vittima, inviando messaggi malevoli ai suoi contatti. Messaggi che sono solitamente
    brevi e in stile neutro, senza elementi che caratterizzano il modo di scrivere personale di ognuno. Quindi evitate di cliccare su link o scaricare allegati se il messaggio,
    nonostante provenga da un amico o un conoscente, vi suona troppo neutro e generico.

        <h3>Link a siti poco professionali</h3>
    Negli attacchi phishing vengono spesso utilizzati link a siti contraffatti per spingere gli utenti a divulgare dati sensibili. Non vanno mai inserite le credenziali di accesso 
    su un sito aperto direttamente da un link ricevuto sull'email, nemmeno se sembra effettivamente il sito ufficiale (ad esempio PayPal).

        <h3>Troppo bello per essere vero</h3>
    Una delle tattiche utilizzate dai truffatori è quella di prospettare affari apparentemente allettanti, in cambio di una piccola somma di denaro. Ad esempio, alla vittima viene 
    promesso un iPhone gratuito in cambio del pagamento delle spese di spedizione. In questi casi, bisogna dare ascolto al detto, se una cosa è troppo bella per essere vera,
    è perché non lo è. Allo stesso modo, se l'offerta sembra troppo bella per essere vera, quasi certamente è una truffa.

        <h3>Allegati dannosi</h3>
    Invece di indurre gli utenti presi di mira a divulgare informazioni private, un attacco sofisticato potrebbe funzionare per installare malware su un computer aziendale
    utilizzando allegati e-mail dannosi. Non eseguire mai macro o eseguibili su un sistema da un messaggio di posta elettronica apparentemente innocuo.

        <h3>Rifiuto di rispondere alle domande</h3>
    Se un messaggio sembra sospetto, rispondere al messaggio e chiedere al mittente di identificarsi. Un utente malintenzionato eviterà di identificarsi e potrebbe semplicemente
    ignorare la richiesta.

        <h2>Tecniche di attacco social engineering</h2>
    La tecnica principale su cui si fonda il social engineering consiste nello sfruttare le emozioni per manipolare le vittime, spingendole, in diversi modi, a
    compiere una determinata azione (ad esempio, effettuare un trasferimento bancario), con i cybercriminali sempre più abili a rendere credibili gli attacchi. Il 
    più delle volte, il social engineering si basa sull'invio di messaggi di testo o e-mail, perché ciò permette loro di evitare conversazioni vocali.

    <p>Tra le tecniche più comuni troviamo:</p>
    <br>
        <ul>
        <li><span class="grassetto">Phishing</span>: il classico esempio è quello del truffatore che si spaccia
            per uno dei dirigenti dell'azienda presa di mira e richiede un trasferimento 
            bancario urgente verso conti offshore, ad uno dei suoi dipendenti </li>
        </ul>
        <ul>
        <li><span class="grassetto">Vishing e smishing</span>: Vishing e smishing: tramite l'utilizzo di software per la
            sintesi vocale, e per la composizione automatica delle chiamate, i cybercriminali effettuano chiamate
            alle potenziali vittime (da qui il nome vishing, ossia voice phishing), o inviano loro SMS (smishing, ossia sms phishing) 
            promettendo ricompense e regali in cambio di un modesto pagamento </li>
        </ul>
        <ul>
        <li><span class="grassetto">Truffa del CEO</span>: normalmente quando sono i dirigenti a chiedere ai dipendenti di
            svolgere un determinato compito, è normale per gli utenti avvertire una certa pressione e urgenza nel portare a termine l'incarico.
            I cybercriminali sfruttano questa attitudine spacciandosi per il direttore o uno dei dirigenti dell'azienda, così da suscitare nella
            vittima un senso di urgenza che la spinga a compiere l'azione desiderata dai truffatori. Questo tipo di attacco è noto come truffa del CEO. </li>
        </ul>
        <ul>
        <li><span class="grassetto">Adescamento</span>: normalmente i truffatori promettono premi o denaro in cambio del pagamento di una modesta 
            somma per coprire magari le spese di spedizione o altri costi. Ma quasi sempre in questi casi, l'offerta è troppo bella per essere vera. </li>
        </ul>
        <ul>
        <li><span class="grassetto"> Tailgating o piggybacking</span>: si verifica nelle grandi aziende, che utilizzano scanner di sicurezza
            per bloccare l'accesso non autorizzato a determinati locali. I truffatori utilizzano il tailgating o il piggybacking per spingere le vittime
            ad utilizzare i propri badge così da consentire ai malintenzionati di accedere fisicamente alle aree riservate. </li>
        </ul>
        <ul>
        <li><span class="grassetto">Quid pro quo</span>: in questo caso si fa leva sul malcontento di eventuali dipendenti scontenti, che potrebbero
            essere indotti a fornire informazioni sensibili ai malintenzionati in cambio di denaro o altre utilità. </li>
        </ul>
</div>
</div>


</body>
<footer>
<?php
include('footer.html');
?>
</footer>
</html>