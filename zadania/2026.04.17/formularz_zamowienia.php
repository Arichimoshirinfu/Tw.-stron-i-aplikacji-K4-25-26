<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="formularz_zamowienia.css">
</head>
<body>
    <?php 
    $errnazwa = '';
    $errpakowanie = '';
    $errwaga = '';
    $erremail = '';
    $errdodat = '';
    $errzgoda = '';
    $blad = False;
    if($_SERVER['REQUEST_METHOD'] == 'POST')
        if(empty($_POST['nazwt']))
            $errnazwa = 'Podaj nazwę produktu';
        if(empty($_POST['opcja_pakowania']))
            $errpakowanie = 'Wybierz opcje pakowania';
        if(empty($_POST['pakowanie']))
            $errwaga = 'Określ przybliżoną wagę paczki';
    ?>
    <form action="" method="post">

    <label  for="nazwt">Nazwa towaru</label><span class=star> *</span><br>
    <input type="text" name="nazwt" id="nazwt" <?php if($_SERVER['REQUEST_METHOD'] == 'POST')
        if(empty($_POST['nazwt'])){ echo 'class="error"'; $blad = True;} ?>><br><span class="star"><?= $errnazwa ?></span><br>


    
    <label for="opcja_pakowania">Wybierz opcje pakowania:</label><span class=star> *</span><br>

    <div <?php if($_SERVER['REQUEST_METHOD'] == 'POST'){
        if(empty($_POST['opcja_pakowania'])){ echo 'class="error"' ; $blad = True;}}?>
        >

    <input type="checkbox" name="opcja_pakowania" value="koperta" id="koperta">
    <label for="koperta">koperta</label><br>

    <input type="checkbox" name="opcja_pakowania" value="folia" id="folia">
    <label for="folia">folia</label><br>

    <input type="checkbox" name="opcja_pakowania" value="folia bąbelkowa" id="folia bąbelkowa">
    <label for="folia bąbelkowa">folia bąbelkowa</label><br>

    <input type="checkbox" name="opcja_pakowania" value="karton" id="karton">
    <label for="karton">karton</label><br>

    <input type="checkbox" name="opcja_pakowania" value="karton z usztywnieniem" id="kartonplus">
    <label for="kartonplus">karton z usztywnieniem</label>
    
    </div>
    <?php if($_SERVER['REQUEST_METHOD'] == 'POST')
        if(empty($_POST['opcja_pakowania'])) echo '<span class="star">Wybierz opcję pakowania</span>'; ?><br>
    <br>


    <div <?php if($_SERVER['REQUEST_METHOD'] == 'POST'){
        if(empty($_POST['pakowanie'])){ echo 'class="error"'; $blad = True;}} ?>
        >
    <label for="pakowanie">Podaj wagę paczki:</label><span class=star> *</span><br>

    <input type="radio" name="pakowanie" value="2kg" id="2kg">
    <label for="2kg">do 2 kg</label><br>

    <input type="radio" name="pakowanie" value="2do5kg" id="2do5kg">
    <label for="2do5kg">od 2 do 5 kg</label><br>

    <input type="radio" name="pakowanie" alue="5do10kg" id="5do10kg">
    <label for="5do10kg">od 5 do 10 kg</label><br>

    <input type="radio" name="pakowanie" value="od10do15kg" id="od10do15kg">
    <label for="od10do15kg">od 10 do 15 kg</label><br>
    </div>
    <?php if($_SERVER['REQUEST_METHOD'] == 'POST')
            if(empty($_POST['pakowanie'])) echo '<span class="star">Określ przybliżoną wagę paczki</span>'; ?>
    <br>



    <label for="email">Email kontaktowy:</label><span class=star> *</span><br>
    <input class="<?php if($_SERVER['REQUEST_METHOD'] == 'POST')
        if(empty($_POST['email'])) echo 'error' ?>" type="email" name="email" id="email"><br>
        <?php if($_SERVER['REQUEST_METHOD'] == 'POST')
        if(empty($_POST['email'])){ echo '<span class="star">Podaj poprawny adres email</span>'; $blad = True;} ?>
        <br>



    <label for="info">Dodatkowe informacje</label><br>
    <textarea class="<?php if($_SERVER['REQUEST_METHOD'] == 'POST'){
                            if(strlen($_POST['info']) < 15){ echo 'error'; $blad = True;}} ?>" name="info" id="info">
    </textarea><br>
        <?php if($_SERVER['REQUEST_METHOD'] == 'POST')
                            if(strlen($_POST['info']) < 15) echo '<span class="star">Wiadomość musi mieć conajmniej 15 znaków</span>' ?>
        
                            <br>



    <input type="checkbox" name="przdane" id="przdane" value="zgodanadane">
    <label for="przdane">Zgoda na przetwarzanie danych</label><span class=star> *</span><br>
    <?php if($_SERVER['REQUEST_METHOD'] == 'POST')
            if(empty($_POST['przdane'])){ echo '<span class="star">Potwierdź swoją zgodę</span>'; $blad = True;} ?>
    <br><br>



    <button type="submit" value="wyslij">Wyślij</button><br>
    

    <?php 
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
    if($blad == false){
            echo '<span class="star">Dane z formularza zostały zapisane do pliku formularz_zamowienia.txt</span>';
            $filename = 'formularz_zamowienia.txt';
                if(file_exists($filename)){
                    $file_handle = fopen($filename, 'a');}
                    else{
                        $file_handle = fopen($filename, 'w');}
                    $danedopliku = date('Y/m/d H:i:s') . "\n" . print_r($_POST, true);
                    fwrite($file_handle, $danedopliku);
                    fclose($file_handle);
                    

                
        }
    }
        ?>
    
    </form>
</body>
</html>