<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form action="">

    <label for="login">Login</label>
    <input type="text" name="login">
    <br>
    <label for="pass">Hasło</label>
    <input type="password" name="haslo">
    <br>
    <button type="submit">Zaloguj</button>

    </form>


    <pre>
        <?php print_r($_GET) ?>
    </pre>
</body>
</html>