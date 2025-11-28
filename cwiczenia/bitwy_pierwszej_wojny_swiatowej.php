<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bitwy_pierwszej_wojny_swiatowej.css">
</head>
<body>
    <?php
    $teraz=time();
    $bpodtannenbergiem=$teraz-strtotime("26-08-1914");
    $dzielnikdni=24*60*60;
    $databitwy="26-08-1914";
    ?>

    <p>Bitwa pod Tannenbergiem była 26.08.1914 i było to <?php echo round($bpodtannenbergiem / $dzielnikdni, 0) ?> dni temu</p>

<hr>

    <?php 
    $bitwa_obj=date_create($databitwy);
    $teraz_obj=date_create($teraz);
    ?>

    <p> Bitwa pod Tannenbergiem była 26.08.1914 i było to <?php print date_diff($teraz, $bitwa) ?> dni temu </p>
</body>
</html>