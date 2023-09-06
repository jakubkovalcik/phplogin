<!DOCTYPE html>
<html>
<head>
    <title>Registrace</title>
</head>
<body>
    <h3>Registrace</h3>
    <?php 
    include 'menu.php';
    menu(); 
    ?>

    <form method="post" action="process_registration.php">
        <label for="first_name">Jméno:</label>
        <input type="text" name="first_name" required>
        <br>
        
        <label for="last_name">Příjmení:</label>
        <input type="text" name="last_name" required>
        <br>
        
        <label for="username">Přihlašovací jméno:</label>
        <input type="text" name="username" required>
        <br>
        
        <label for="password">Heslo:</label>
        <input type="password" name="password" required>
        <br>
        
        <label for="confirm_password">Ověření hesla:</label>
        <input type="password" name="confirm_password" required>
        <br>
        
        <input type="submit" value="Registrovat">
    </form>
</body>
</html>
