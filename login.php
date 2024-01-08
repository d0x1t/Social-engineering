
<html>
<head>
	<title>LOGIN | Social Engineering</title>
    <meta charset="UTF-8">
    <meta name="description" content="Sito web sul Social Engineering">
	<link rel="shortcut icon" href="icona.png" type="image/x-icon">
	<link href="style.css" rel="stylesheet" type="text/css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
<div id="mainLogin">
<?php
include("header.php");


?>
    <div id=login_page>
        <div id=login_content>
	<h2>Login</h2>
		<form method="post"  autocomplete="off" name="form_log" action="index.php">
			<div class="input-box">
			<input type="text" name="username" placeholder="Username" required autocomplete="username">
            <i class='bx bx-user'></i>
			</div>
			<div class="input-box">
				<input type="password" name="password" placeholder="Password" required autocomplete="new-password">
                <i class='bx bxs-lock-alt' ></i>
			</div>
			
				<input type="button"  value="Accedi!" class="btn custom-btn" name="login_btn"  onClick="validaModulo()"></input>
			<div class="register-link"> 
			<p>Non sei registrato? <a href="register.php">Registrati!</a></p>
            </div>
		</form>
        </div>
    </div>
    <img src="sfondoHacker.jpg" alt="image">
</div>
</body>

<footer>
<?php
include('footer.html');
?>
</footer>
</html>
<script type="text/javascript">

function controllaUtenteEsistente(callback) {
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

    function validaModulo() {
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
     controllaUtenteEsistente(gestisce_username); // Utilizzo una callBack perche il servizio AJAX è asincrono e quindi il flusso del codice non aspetta la fine dell'esecuzione
                                                // di controllaUtenteEsistente. NOTA: fin quando non uso gestisce_username(nome_valore) la funzione non viene chiamata ma passata.
    
    return false;
    }
    function gestisce_username(userExists){
        if (!userExists) {
            var username = document.form_log.username.value;
            alert("Username o password errati!");
            document.form_log.username.focus();
        } else {
            
            document.form_log.submit();
        }
    }





</script>
