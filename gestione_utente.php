
<html>
<head>
	<title>UTENTE| Social Engineering</title>
    <meta charset="UTF-8">
    <meta name="description" content="Sito web sul Social Engineering">
	<link rel="shortcut icon" href="foto_login/icona.png" type="image/x-icon">
	<link href="style.css" rel="stylesheet" type="text/css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <div id="main_gestione_utente">
        <?php
            include("header.php");
            if(isset($_GET['login'])){
                echo '<div class="container_form_gestione_utente">
                        <div class="form_gestione_utente">
                            <h2>Login</h2>
                            <form method="post"  autocomplete="off" name="form_log" action="index.php">
                            <div class="input-box">
                                <input type="text" name="username" placeholder="Username" required autocomplete="username">
                                <i class="bx bx-user"></i>
                            </div>
                            <div class="input-box">
                                <input type="password" name="password" placeholder="Password" required autocomplete="new-password">
                                <i class="bx bxs-lock-alt" ></i>
                            </div>
                            <input type="button"  value="Accedi!" class="btn custom-btn" name="login_btn"  onClick="validaModulo_login()"></input>
                            <div class="register-link"> 
                                <p>Non sei registrato? <a href="gestione_utente.php?register=1">Registrati!</a></p>
                            </div>
                            </form>
                        </div>
                    </div>
        <img src="foto_login/sfondoHacker.jpg" alt="image">
    </div>
</body>

<footer> ';
            }
            elseif(isset($_GET['register'])){
                echo '<div class="container_form_gestione_utente">
                        <div class="form_gestione_utente">
                            <h2>Registrati</h2>
                            <form  method="post" action="register-manager.php" autocomplete="off" name="form_reg">
                            <div class="input-box">
                                <input type="text" name="username" placeholder="Username" autocomplete="username">
                                <i class="bx bx-user"></i>
                            </div>
                            <div class="input-box">
                                <input type="password" name="password" id="passwordField" placeholder="Password" autocomplete="new-password" oninput="mostraAvvisoPassword()">
                                <i class="bx bxs-lock-alt"></i>
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
                                <input type="password" name="repassword" placeholder="Ripeti password" required autocomplete="new-password">
                                <i id="lock_repass" class="bx bxs-lock-alt"></i>
                            </div>
                            <input type="button" value="Registrati!" class="btn custom-btn" name="login_btn" onClick="validaModulo_register()"></input>';
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
                echo '</form>
                        </div>
                    </div>
        <img src="foto_registrati/sfondoHacker.jpg" alt="image">
    </div>
</body>

<footer>';
            }

include('footer.html');
?>
</footer>
</html>