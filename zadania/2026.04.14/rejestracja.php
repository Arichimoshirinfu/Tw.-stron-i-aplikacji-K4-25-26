<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="rejestracja.css">
</head>
<body>
    
    <?php 
    $loginerror = '';
    $passerror = "";
    $roleerror = '';
    $loginv = '';
    $passv = '';
    $rolev = '';
    $rola = "";

    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        if(empty($_POST['login']))
            $loginerror ='Podaj Login!';
        else
            $loginv = $_POST['login'];
        
        if(empty($_POST['pass']))
            $passerror = "Podaj Hasło!";
        else
            $passv = $_POST['pass'];
        if(empty($_POST['rola']))
            $roleerror = "Wybierz rolę!";
        else
            $rola = $_POST['rola'];  
    }
    ?> 
    <fieldset>
        <legend>Rejestracja</legend>
    
    <form action="" method="post">

    <label for="login">Login:</label><span class="error"><?= '* ' . $loginerror ?></span><br>
    <input type="text" name="login" id="login" value=<?php echo "$loginv" ?> > <br>

    <label for="password">Hasło:</label><span class="error"><?= '* ' . $passerror ?></span><br>
    <input type="password" name="pass" id="password" value=<?php echo "$passv" ?> > <br>

    <label for="role">Wybierz jedną rolę:</label><span class='error'> <?= '* ' . $roleerror ?></span><br>
    
    <input type="radio" name="rola" id="uzytkownik" value="uzytkownik"  <?php $rola == "uzytkownik" ? 'checked' : '' ?>> <label for="uzytkownik">Użytkownik</label><br> 

    <input type="radio" name="rola" id="autor" value="autor"  <?php $rola == "autor" ? 'checked' : "" ?>> <label for="autor">Autor</label><br>

    <input type="radio" name="rola" id="redaktor" value="redaktor"  <?php $rola == "redaktor" ? 'checked' : "" ?>> <label for="redaktor">Redaktor</label><br>

    <input type="radio" name="rola" id="administrator" value="administrator"  <?php $rola == "administrator" ? 'checked' : "" ?> > <label for="administrator">Administrator</label><br><br>

    <input type="submit" value="Zarejestruj" name="zarejestruj">
    </form>
    </fieldset>
    
        <?= print_r($_POST) ?>
        <?= $rola ?>

    
    
</body>
</html>