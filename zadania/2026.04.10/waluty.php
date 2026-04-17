<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="waluty.css">
</head>
<body>
    <?php
    $test ='';
    $waluta ='';
    $numer = '';
    ?>
    <?php
    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        $test = $_POST['wybierz'];
        $waluta = $_POST['waluta'];
        $numer = $_POST['numer'];
        echo "Oto twój wybór: " . "$numer ";
        if($numer == 1){
                echo $waluta;}
        elseif($numer > 1 && $numer < 5){

                if($waluta == 'Dolar USA'){
                    $waluta = "Dolary USA";
                    echo $waluta;
                    }

                if($waluta == 'Frank szwajcarski'){
                    $waluta = 'Franki szwajcarskie';
                    echo $waluta;
                    }

                if($waluta == 'Funt szterling'){
                    $waluta = 'Funty szterling';
                    echo $waluta;
                    }
        }
        elseif($numer > 5){

                    if($waluta == 'Dolar USA'){
                    $waluta = "Dolarów USA";
                    echo $waluta;
                    }

                    if($waluta == 'Frank szwajcarski'){
                    $waluta = 'Franków szwajcarskich';
                    echo $waluta;
                    }

                    if($waluta == 'Funt szterling'){
                    $waluta = 'Funtów szterling';
                    echo $waluta;
                    }
        }
    }
    else  
        echo '
    <form action="" method="post">

    <label for="numer">Podaj kwotę:</label>
    <input type="number" name="numer" id="numer"><br>

    <label for="waluta">Wybierz walutę:</label>
    <select name="waluta" id="waluta">

    <option value="Dolar USA">Dolar USA</option>
    <option value="Euro">Euro</option>
    <option value="Frank szwajcarski">Frank szwajcarski</option>
    <option value="Funt szterling">Funt szterling</option>

    </select><br>

    <button type="submit" value="Wybierz" name="wybierz">Wybierz</button>
    </form>
    ';
    
    
   ?>
</body>
</html>