<?php
session_start();
?>
<html>

<head>
    <title>REGISTRATI | Social Engineering</title>
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
                <h2>Registrati</h2>
                <form  method="post" action="register-manager.php"
                    autocomplete="off" name="form_reg">
                    <div class="input-box">
                        <input type="text" name="username" placeholder="Username" autocomplete="username">
                        <i class='bx bx-user'></i>
                    </div>
                    <div class="input-box">
                        <input type="password" name="password" id="passwordField" placeholder="Password"
                            autocomplete="new-password" oninput="mostraAvvisoPassword()">
                        <i class='bx bxs-lock-alt'></i>
                        <span class="avvisoPassword"
                            style="color: red; font-size: 15px; margin-top: 5px; display: none;">
                            La password deve essere di almeno 8 caratteri
                        </span>
                        <span class="avvisoPassword"
                            style="color: red; font-size: 15px; margin-top: 5px; display: none;">
                            Deve contenere un numero
                        </span>
                    </div>
                    <div class="input-box">
                        <input type="password" name="repassword" placeholder="Ripeti password" required
                            autocomplete="new-password">
                        <i id="lock_repass" class='bx bxs-lock-alt'></i>
                    </div>
                    <input type="button" value="Registrati!" class="btn custom-btn" name="login_btn" onClick="validaModulo()"></input>
                    <?php
                    if (isset($_SESSION['keyRegister'])) {
                        echo ' <div class="register-ok">
                <h2> Registrazione Effettuata! </h2>
            </div>';
            echo '<script type="text/javascript">
            setTimeout(function() {
                window.location.href = "index.php";
            }, 1000);
          </script>';
                    }
                    ?>
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

    function validaModulo() {
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
    
     controllaUtenteEsistente(gestisce_username); // Utilizzo una callBack perche il servizio AJAX è asincrono e quindi il flusso del codice non aspetta la fine dell'esecuzione
                                                // di controllaUtenteEsistente. NOTA: fin quando non uso gestisce_username(nome_valore) la funzione non viene chiamata ma passata.
    
    return false;
    }
    function gestisce_username(userExists){
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

</script>