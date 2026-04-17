<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php 
    $biale = '';
    $specialchars = '';
    $slash = '';
    ?>

    <form method="post">
    
    <label for="biale">Usuń "białe" znaki </label>
    <input type="text" name="biale" id="biale">
<br>
    <label for="slash">Usuń ukośniki (backslash) </label>
    <input type="text" name="slash" id="slash">
<br>
    <label for="specialchars">Zmień znaki HTML na tzw. encje </label>
    <input type="text" name="specialchars" id="specialchars">
<br>
    <button type="submit" name=wyslij>Wyślij</button>

    </form>

    <?php 
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $biale = $_POST['biale'];
        $specialchars = $_POST['specialchars'];
        $slash = $_POST['slash'];


        echo '<p>Tekst z pola <i>puste_znaki</i> bez funkcji trim:';

        var_dump($biale);

        echo '</p>' .'<p>Tekst z pola <i>ukosniki</i> bez funkcji stripslashes:';

        var_dump($slash); 

        echo'</p>' .'<p>Tekst z pola <i>encje_html</i> z zastosowaniem funkcji htmlspecialchars:' ;

         var_dump($specialchars);

          echo ' </p>' . '<br>' . '<p>Tekst z pola <i>puste_znaki</i> z zastosowaniem funkcji trim:'; 

          var_dump(trim($biale));

          echo '</p>' . '<p>Tekst z pola <i>ukosniki</i> bez funkcji stripslashes:';

          var_dump(stripslashes($slash));

          echo '</p><p>Tekst z pola <i>encje_html</i> z zastosowaniem funkcji htmlspecialchars:';

          var_dump(htmlspecialchars($specialchars, ENT_QUOTES, 'UTF-8')); 

          echo '</p>' ;
          
        }
    ?>

</body>
</html>