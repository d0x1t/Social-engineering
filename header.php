<?php
include("functions.php");
?>
<html>

<body>

    <div id="header">
        <?php
        if (!isLogged()) {
            echo '<a href="index.php" class="logo" title="Social Engineering"><img src="icona2.jpg"/></a>';
            echo '
            <div class="header-right">
                <a id="login" href="login.php">Login</a>
                <a id="register" href="register.php">Registrati</a>
            </div>
        ';
        }

        if (isLogged()) {
            echo '<a href="index.php" class="logo" title="Social Engineering"><img src="icona2.jpg"/></a>';
            $user = $_SESSION['username'];
            echo "
            <div class='header-right'>
                <a id='login' href='logout.php'>
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