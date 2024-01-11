<?php
    $host = 'localhost';
    $port = '5432';
    $dbname = 'group18';
    $username = 'www';
    $password = 'root';
    // Connessione al database
    $db = pg_connect("host=$host port=$port dbname=$dbname user=$username password=$password") or die('Impossibile connettersi al database: ' . pg_last_error());
    $numero_domanda=$_POST['numero_domanda_corrente'];
    // Query SQL per recuperare la domanda corrente dalla tabella quiz
    $sql = "SELECT id, domande FROM quiz WHERE id = $1"; // $1= in execute passo il primo parametro
    $prep = pg_prepare($db, "sqlDomanda", $sql); // Per evitare injection
    $ret = pg_execute($db, "sqlDomanda", array($numero_domanda));
    
    if (!$ret) {
        echo "ERRORE QUERY: " . pg_last_error($db);
    } else {
        $row = pg_fetch_assoc($ret);
    
        if ($row) { //esiste la domanda
            // Stampa la domanda nel form
            echo "{$row['domande']}";
        }
    }
    
    // Chiudi la connessione al database
    pg_close($db);

    ?>