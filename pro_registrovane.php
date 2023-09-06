

<!DOCTYPE html>
<html>
<head>
    <title>Pro registrované</title>
</head>
<body>
    <h1>Vítejte na stránce pro registrované!</h1>

    <?php
    session_start();

    if (($_SESSION["username"]) === "") {

        include "menu.php";
        menu();
        echo "Nutno se nejprve přihlásit.<br>";
        echo '<a href="prihlaseni.php">Přihlásit se</a>';
        die();
    }
    
    echo "Ahoj: ";
    echo($_SESSION["username"]);
    echo "<h4>Tento text vidi pouze prihlaseni</h4>";
    echo '<br><a href="odhlaseni.php">Odhlásit se</a>';
    ?>


</body>
</html>
