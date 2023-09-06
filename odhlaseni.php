<!DOCTYPE html>
<html>
<head>
    <title>Odhlásit se</title>
</head>
<body>

<?php
session_start();
if (($_SESSION["username"]) === "") {

    echo "Nikdo není přihlášen.";
    echo '<br><a href="prihlaseni.php">Přihlášení</a>';
    die();
}

$_SESSION["username"] = "";
//header("Location: prihlaseni.php");

echo("Úspěšně odhlášeno!<br>");
echo '<a href="prihlaseni.php">Přihlášení</a>';

?>

</body>
</html>
