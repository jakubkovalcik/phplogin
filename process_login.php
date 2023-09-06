<?php
session_start();
include "menu.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = addslashes($_POST["username"]);
    $password = addslashes($_POST["password"]);
    
        // $servername = "localhost";
        // $dbusername = "www";
        // $dbpassword = "heslo";
        // $dbname = "UZIVATELE";

        $servername = "sql6.webzdarma.cz";
        $dbusername = "jakubkovalci8335";
        $dbpassword = 'j&DC^mQbSs0%H6L$Y3-6';
        $dbname = "jakubkovalci8335";
    
    $conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM lidi WHERE login = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();
    
    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        if ($password === $row["heslo"]) { 
            $_SESSION["username"] = $username;
            header("Location: pro_registrovane.php");
            exit();
        } else {
            echo "Špatné přihlašovací údaje.";
            echo '<br><a href="prihlaseni.php">Návrat</a>';
        }
    } else {
        echo "Špatné přihlašovací údaje.";
        echo '<br><a href="prihlaseni.php">Návrat</a>';
    }
    
    $stmt->close();
    $conn->close();
}
?>
