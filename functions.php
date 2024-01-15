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
//funzione per effettuare il logout
if (isset($_GET['logout'])) {
	session_destroy();
	header("location: index.php");
}
//**********************************// 
?>
<script type="text/javascript">

//FUNZIONI PER IL LOGIN//

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
</script>
