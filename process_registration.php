<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $first_name = addslashes($_POST["first_name"]);
    $last_name = addslashes($_POST["last_name"]);
    $username = addslashes($_POST["username"]);
    $password = addslashes($_POST["password"]);
    $confirm_password = addslashes($_POST["confirm_password"]);
    
    if ($password !== $confirm_password) {
        echo "Hesla se neshodují. Registrace selhala.";
    } else {
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
        
        $sql = "INSERT INTO lidi (jmeno, prijmeni, login, heslo) VALUES ('$first_name', '$last_name', '$username', '$password')";
        
        if ($conn->query($sql) === TRUE) {
            echo "Registrace úspěšná!";
            //session
            $_SESSION["username"] = $username;
            echo '<br><a href="pro_registrovane.php">Pro registrovane</a>';
        } else {
            echo "Chyba při registraci: " . $conn->error;
        }
        
        $conn->close();
    }
}
?>