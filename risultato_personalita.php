<html>

<head>
    <title>RISULTATO | Social Engineering</title>
    <meta charset="UTF-8">
    <meta name="description" content="Sito web sul Social Engineering">
    <link rel="shortcut icon" href="foto_index/icona.png" type="image/x-icon">
    <link href="style.css" rel="stylesheet" type="text/css">
</head>

</html>

<body>
    <div id="mainStoria">
        <?php
        include("header.php");
        if (isset($_GET['personalita'])) {
            $personalita = $_GET['personalita'];
            
            switch ($personalita) {
                case 'avventuriero':
                    echo '<img src="foto_personalita/avventuriero.png">
                        <div id="contenutoPersonalita">
                            <div>Gli Avventurieri (ISFP) sono dei veri artisti - anche se non necessariamente nel senso convenzionale del termine. 
                            Per questo tipo di personalità, la vita stessa è una tela su cui esprimere sé stessi. Da ciò che indossano a come trascorrono
                            il tempo libero, gli Avventurieri agiscono in un modo che riflette perfettamente chi sono in quanto personalità uniche.
                            <br><br>
                            E ogni Avventuriero è certamente unico. Spinte dalla curiosità e desiderose di provare cose nuove, le persone con questa personalità 
                            hanno spesso un‘affascinante varietà di passioni e interessi. Grazie al loro spirito esplorativo e alla capacità di trovare gioia nella 
                            vita quotidiana, gli Avventurieri possono essere tra le persone più interessanti che si possano incontrare. L‘aspetto più ironico? Gli Avventurieri 
                            sono umili e senza pretese, e tendono a vedersi come "persone che seguono solo i loro interessi", quindi potrebbero non rendersi conto di quanto siano
                            davvero straordinari.
                            <img src="foto_personalita/avventuriero2.png">

                            <h2>La bellezza di una mente aperta</h2>
                            Gli Avventurieri hanno un approccio alla vita flessibile e versatile. Alcuni tipi di personalità hanno successo grazie a rigidi programmi e
                            routine, ma non gli Avventurieri. Gli Avventurieri prendono ogni giorno come viene, facendo ciò che sentono in quel momento. E fanno in modo
                            di lasciare molto spazio nella loro vita per gli imprevisti, con il risultato che molti dei loro ricordi più preziosi sono costituiti da uscite 
                            e avventure vissute d‘impulso, in modo spontaneo, da soli o con i propri cari.
                            <br> <br>
                            Questa mentalità elastica rende gli Avventurieri decisamente tolleranti e aperti. Queste personalità amano sinceramente vivere in un mondo pieno di persone 
                            di ogni tipo, anche con quelle con cui non si trovano d‘accordo o che scelgono stili di vita radicalmente diversi. Non sorprende quindi che gli Avventurieri
                            siano particolarmente aperti a cambiare idea e a riflettere sulle proprie opinioni. Se c‘è un tipo di personalità che crede nel dare a qualcosa (o a qualcuno) 
                            una seconda possibilità, è proprio quella degli Avventurieri.
                        </div>
    </div>


</body>
<footer>';
break;
                case 'sostenitore':
                    echo '<img src="foto_personalita/sostenitore.png">
                    <div id="contenutoPersonalita">
                        <div>I Sostenitori (INFJ) sono forse il tipo di personalità più raro di tutti, ma di certo lasciano il segno nel mondo. Idealisti e 
                        di saldi principi, non si accontentano di vivere alla leggera, ma vogliono distinguersi e fare la differenza. Per le personalità 
                        Sostenitore il successo non deriva dal denaro o dallo status sociale, ma dalla ricerca della realizzazione, dall‘aiutare gli altri
                        e dalla lotta per portare il affermare il bene nel mondo.
                        <br> <br>
                        Pur avendo obiettivi e ambizioni nobili, i Sostenitori non devono essere scambiati per sognatori inermi. Le persone con questo tipo di personalità 
                        puntano all‘integrità e raramente si ritengono soddisfatte finché non hanno realizzato ciò che sanno essere giusto. Coscienziosi fino al midollo, si
                        muovono nella vita con un chiaro senso dei propri valori e non perdono mai di vista ciò che conta davvero, non secondo gli altri o la società in generale, 
                        ma secondo la propria saggezza e intuizione.
                        <img src="foto_personalita/sostenitore2.png">

                        <h2>Careare uno scopo</h2>
                        Forse proprio perché il loro tipo di personalità è così poco frequente, i Sostenitori tendono a portarsi addosso la sensazione - consapevole o meno - di 
                        essere diversi dalla maggior parte delle persone. A causa della loro intensa vita interiore e il loro profondo desiderio di trovare lo scopo della loro vita,
                        non sempre si adattano a chi li circonda. Questo non significa che i Sostenitori non possano beneficiare si accettazione a livello sociale o di relazioni intime,
                        ma solo che a volte si sentono incompresi o in contrasto con il mondo.
                        <br> <br>
                        Fortunatamente, questa sensazione di non essere all‘altezza non scalfisce l‘impegno dei Sostenitori a rendere il mondo un posto migliore. I Sostenitori sono turbati dalle ingiustizie
                        e di solito si preoccupano più dell‘altruismo che del guadagno personale. Spesso si sentono chiamati a usare i loro punti di forza - tra cui la creatività, l‘immaginazione e 
                        la sensibilità - per risollevare gli altri e trasmettere compassione.
                    </div>
    </div>


</body>
<footer>';
break;
                case 'comandante':
                    echo '  <img src="foto_personalita/comandante.png">
                    <div id="contenutoPersonalita">
                        <div>I Comandanti (ENTJ) sono leader naturali. Le persone con questo tipo di personalità incarnano i doni del carisma e della fiducia, 
                        e proiettano l‘autorità in un modo che attira le folle verso un obiettivo comune. Tuttavia, i Comandanti sono anche caratterizzati 
                        da un livello di razionalità spesso spietato, e usano la loro grinta, la determinazione e la mente acuta per raggiungere qualsiasi
                        obiettivo si siano prefissati. Forse è meglio che rappresentino solo il tre percento della popolazione, per evitare di sopraffare i 
                        tipi di personalità più timidi e sensibili che costituiscono gran parte del resto del mondo, ma dobbiamo ringraziare i Comandanti per 
                        molte delle attività e delle istituzioni che diamo per scontate ogni giorno.
                        <img src="foto_personalita/comandante2.png">

                        <h2>L‘Impegno per la grandezza</h2>
                        Se c‘è qualcosa che i Comandanti amano è una bella sfida, grande o piccola che sia, e credono fermamente che, con tempo e risorse 
                        sufficienti, possano raggiungere qualsiasi obiettivo. Questa qualità rende le persone con questa personalità dei brillanti imprenditori 
                        mentre la loro capacità di pensiero strategico e di focalizzazione dell‘attenzione a lungo termine, che li porta ad eseguire ogni fase del
                        loro piano con determinazione e precisione, li rende solidi leader aziendali. Questa determinazione è spesso una profezia che si autoavvera,
                        poiché i Comandanti portano a termine i loro obiettivi con assoluta forza di volontà laddove altri potrebbero arrendersi e voltare pagina; la 
                        loro natura Estroversa (E), inoltre, significa che è probabile che spingano tutti gli altri a seguire gli stessi obiettivi, ottenendo straordinari 
                        risultati durante il percorso.
                    </div>
    </div>


</body>
<footer> ';
break;
                case 'imprenditore':
                    echo ' <img src="foto_personalita/imprenditore.png">
                    <div id="contenutoPersonalita">
                    <div>Gli Imprenditori (ESTP) non passano mai inosservati dall‘ambiente che li circonda:
                    il modo migliore per individuarli a una festa è cercare il vortice di persone intorno a 
                    loro mentre si spostano da un gruppo all‘altro. Ridendo e intrattenendo con un umorismo schietto 
                    e mondano, le personalità Imprenditori amano essere al centro dell‘attenzione. Se viene chiesto a
                    un membro del pubblico di salire sul palco, gli Imprenditori si offrono volontari, o indicano un amico timido.
                    <br> <br>
                    La teoria, i concetti astratti e le discussioni noiose su questioni globali e sulle loro implicazioni non interessano 
                    più di tanto gli Imprenditori. Questi mantengono la conversazione vivace, con una buona dose di intelligenza, ma amano
                    parlare di ciò che è reale - o meglio ancora, amano uscire e parlarne fuori. Gli Imprenditori saltano prima di guardare,
                    correggono i loro errori al volo, piuttosto che rimanere inermi a pianificare piani d‘emergenza e vie di fuga.
                    <img src="foto_personalita/imprenditore2.png">

                        <h2>Lanciarsi a capofitto</h2>
                        Gli Imprenditori sono il tipo di personalità più incline ad adottare uno stile di vita rischioso. Vivono il momento
                        e si tuffano negli eventi: sono l‘occhio del ciclone. Le persone con il tipo di personalità Imprenditore amano la teatralità,
                        la passione e il piacere, non per i brividi emotivi, ma perché sono molto stimolanti per le loro menti logiche. Sono costrette
                        a prendere decisioni cruciali basate sulla realtà concreta e imminente, in un processo di risposte a raffica agli stimoli razionali.
                        <br><br>
                        Per questo la scuola e altri ambienti altamente organizzati rappresentano una sfida per gli Imprenditori. Non certo perché non siano intelligenti,
                        anzi potrebbero anche avere successo, ma l‘approccio disciplinato e cattedratico dell‘istruzione formale è particolarmente lontano dall‘apprendimento 
                        pratico che piace agli Imprenditori. Ci vuole una grande maturità per vedere questo processo come un mezzo necessario per raggiungere un fine, qualcosa 
                        che crea opportunità più stimolanti.
                    </div>
    </div>


</body>
<footer> ';
break;
                case 'protagonista':
                    echo '    <img src="foto_personalita/protagonista.png">
                    <div id="contenutoPersonalita">
                        <div>I Protagonisti (ENFJ) si sentono chiamati a servire uno scopo più grande nella vita.
                        Pensierosi e idealisti, questi tipi di personalità si sforzano di avere un impatto positivo 
                        sugli altri e sul mondo che li circonda. Raramente si sottraggono all‘opportunità di fare la 
                        cosa giusta, anche quando non è affatto facile.
                        <img src="foto_personalita/protagonista2.png">

                        <h2>Quando il mondo tace persino una sola voce diventa potente</h2>
                        I Protagonisti tendono a dar voce ai loro valori, tra cui l‘autenticità e l‘altruismo. Quando qualcosa 
                        di ingiusto o sbagliato li colpisce, intervengono. Ma raramente appaiono sfacciati o invadenti, perché 
                        la loro sensibilità e intuizione li conduce a un dialogo che entra subito in sintonia con gli altri.
                        <br> <br>
                        Questi tipi di personalità hanno una straordinaria capacità di cogliere le motivazioni e le opinioni più profonde delle persone. 
                        A volte non capiscono nemmeno come riescano a cogliere così rapidamente la mente e il cuore di un‘altra persona. Questi lampi di 
                        intuizione possono rendere i Protagonisti dei comunicatori incredibilmente persuasivi e stimolanti.
                    </div>
    </div>


</body>
<footer> ';
break;
                case 'difensore':
                    echo '<img src="foto_personalita/difensore.png">
                    <div id="contenutoPersonalita">
                        <div>Con il loro modo di fare umile e discreto, i Difensori (ISFJ) contribuiscono a far 
                        girare il mondo. Instancabili e dedite, le persone con questo tipo di personalità sentono
                        un profondo senso di responsabilità nei confronti di chi le circonda. Che i Difensori rispettino 
                        le scadenze, ricordino i compleanni e le occasioni speciali, mantengano le tradizioni e ricoprano i
                        loro cari di gesti di attenzione e di supporto è una certezza. Ma raramente pretendono un riconoscimento 
                        per tutto ciò che fanno, preferendo invece agire dietro le quinte.
                        <br> <br>
                        Si tratta di un tipo di personalità proattivo, capace di fare e dotato di preziose doti versatili. Pur essendo sensibili 
                        e premurosi, i Difensori hanno anche eccellenti capacità analitiche e buon occhio per i dettagli. E nonostante la loro riservatezza,
                        tendono ad avere capacità interpersonali ben sviluppate e solide relazioni sociali. I Difensori sono davvero più della somma delle singole 
                        parti e i loro diversi punti di forza risplendono anche negli aspetti più ordinari della loro vita quotidiana.
                        <img src="foto_personalita/difensore2.png">

                        <h2>Il dono della fedeltà</h2>
                        Tra i tratti più caratteristici dei Difensori c‘è la lealtà. Sono rari i Difensori che lasciano che un‘amicizia
                        o una relazione si affievolisca per mancanza di impegno. Al contrario, investono molte energie per mantenere legami 
                        saldi con le persone a cui vogliono bene e lo fanno non solo inviando messaggi per chiedere "Come stai?". Le persone
                        con questo tipo di personalità sono note per mollare tutto e dare una mano quando un amico o un familiare sta attraversando un momento difficile.
                    </div>
    </div>
</body>
<footer> ';
break;
}
    }
        include('footer.html');
        ?>
        </footer>

        </html>