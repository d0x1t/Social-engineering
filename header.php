<?php
include("functions.php");
?>
<html>
<body>
    <div id="header">
        <?php
            if (!isLogged()) {
                echo '<a href="index.php" class="logo" title="Social Engineering"><img src="foto_index/logo.jpg"/></a>';
                echo '
                <div class="header-right">
                    <a id="login" href="gestione_utente.php?login=1">Login</a>
                    <a id="register" href="gestione_utente.php?register=1">Registrati</a>
                </div>
            ';
            }
            if (isLogged()) {
                echo '<a href="index.php" class="logo" title="Social Engineering"><img src="foto_index/logo.jpg"/></a>';
                $user = $_SESSION['username'];
                echo "
                <div class='header-right'>
                    <a id='logout' href='index.php?logout='1''>
                        <div> $user </div>
                        Logout
                    </a>
                </div>
            ";
            }
        ?>
    </div>
</body>
</html>