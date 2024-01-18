<?php
require "credenziali_db.php";
// Connessione al database
$db = pg_connect($connection_string) or die('Impossibile connetersi al database: ' . pg_last_error());

// Prendi il valore dell'username dalla richiesta POST
$user = $_POST['username'];

// Query SQL per verificare l'esistenza dell'utente
$sql = "SELECT username FROM account WHERE username = $1";   // $1= in execute passo il primo parametro
$prep = pg_prepare($db, "sqlUsername", $sql); // Per evitare injection
$ret = pg_execute($db, "sqlUsername", array($user)); 

if (!$ret) {
    echo "ERRORE QUERY: " . pg_last_error($db);
} else {
    $row = pg_fetch_assoc($ret);

    if ($row) {
        echo "exists";
    } else {
        echo "not_exists";
    }
}
// Chiudi la connessione al database
pg_close($db);
?>
