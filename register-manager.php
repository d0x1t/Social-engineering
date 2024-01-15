
<html>
<body>
<?php
if(isset($_POST['password']))
		$pass = $_POST['password'];
	else
		$pass = "";
    	if(isset($_POST['repassword']))
		$repassword = $_POST['repassword'];
	else
		$repassword = "";
    	if(isset($_POST['username']))
		$user = $_POST['username'];
	else
		$user = "";
    
				//ORA posso inserire il nuovo utente nel db
				if(insert_utente($user, $pass)){
                    session_start();
                    $_SESSION['username'] = $user;
                    $_SESSION['keyRegister'] = 'registrazione_effettuata';
					header("Location:gestione_utente.php?register=1");
				}
				
    ?>

</html>
</body>
<?php
function insert_utente($user, $pass){
	require "credenziali_db.php";
	//CONNESSIONE AL DB
	$db = pg_connect($connection_string) or die('Impossibile connetersi al database: ' . pg_last_error());
		//echo "Connessione al database riuscita<br/>"; 
	$hash = password_hash($pass, PASSWORD_DEFAULT);
	$sql = "INSERT INTO account(username, password) VALUES($1, $2)";
	$prep = pg_prepare($db, "insertUser", $sql); 
	$ret = pg_execute($db, "insertUser", array($user, $hash));
	if(!$ret) {
		echo "ERRORE QUERY: " . pg_last_error($db);
		return false; 
	}
	else{
		return true;
	}
}

?>