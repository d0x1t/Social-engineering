<?php
session_start();
require "credenziali_db.php";

// Connessione al DB
$db = pg_connect($connection_string) or die('Impossibile connettersi al database: ' . pg_last_error());

// Ottieni l'username dalla sessione
$user = $_SESSION['username'];

// Ottieni la personalità dalla richiesta POST (assicurati di validare e pulire i dati)
$personalita = $_POST['personalita_scelta'];

// Query SQL utilizzando un parametro
$sql = "INSERT INTO risultato(username, personalita) VALUES($1, $2) ON CONFLICT(username) DO UPDATE SET personalita = $2";
$prep = pg_prepare($db, "insertOrUpdatePersonalita", $sql);

// Esegui la query
$ret = pg_execute($db, "insertOrUpdatePersonalita", array($user, $personalita));

if(!$ret) {
    // Errore nella query
    echo "ERRORE QUERY: " . pg_last_error($db);
} else {
    // Successo
    echo "Inserimento/Aggiornamento riuscito";
}

// Chiudi la connessione
pg_close($db);
?>