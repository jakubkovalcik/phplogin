<!DOCTYPE html>
<html>
<head>
    <title>Přihlášení</title>
</head>
<body>
    <h3>Přihlášení</h3>

    <form method="post" action="process_login.php">
        <label for="username">Přihlašovací jméno:</label>
        <input type="text" name="username" required>
        <br>
        
        <label for="password">Heslo:</label>
        <input type="password" name="password" required>
        <br>
        
        <input type="submit" value="Přihlásit">
    </form>



    <?php
    include 'menu.php'; 
    menu(); 
    ?>
</body>
</html>
