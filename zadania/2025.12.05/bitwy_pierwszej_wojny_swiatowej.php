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
    $databitwyt="26-08-1914";
    ?>

    <p class="tannen">Bitwa pod Tannenbergiem była 26.08.1914 i było to <?php echo round($bpodtannenbergiem / $dzielnikdni, 0) ?> dni temu.</p>
    <div> I sposób: $teraz-strtotime("26-08-1914") ; $bpodtannenbergiem / $dzielnikdni </div>

 <?php 
    $bitwa_obj=date_create($databitwyt);
    $teraz_obj=date_create("now");
    $roznica=date_diff($teraz_obj, $bitwa_obj);
 ?>

    <p class="tannen"> Bitwa pod Tannenbergiem była 26.08.1914 i było to <?php print date_diff($teraz_obj, $bitwa_obj)->format("%a dni") ?> temu. </p>
    <div> II sposób: $bitwa_obj=date_create($databitwyt); $teraz_obj=date_create("now"); print date_diff($teraz_obj, $bitwa_obj)->format("%a dni")</div>

    <p class="tannen" > Bitwa pod Tannenbergiem była 26.08.1914 i było to <?php echo $roznica->format("%a dni") ?> temu. </p>

    <div> III sposób: $roznica=date_diff($teraz_obj, $bitwa_obj); </div>

    <hr>

    <?php
    $bnadmarna=$teraz - strtotime("5-09-1914");
    $marna_obj= date_create("5-09-1914")
    ?>
    <p class="marna"> Bitwa nad Marną była 5.09.1914 i było to <?php echo round($bnadmarna / $dzielnikdni, 0) ?> dni temu. </p>

    <p class="marna">  Bitwa nad Marną była 5.09.1914 i było to <?php print date_diff($teraz_obj, $marna_obj)->format("%a dni temu") ?> </p>

    <hr>

    <?php 
    $verdun=$teraz-strtotime("21-02-1916");
    $verdun_obj=date_create("21-02-1916");
    ?>
    <p class="verdun" >Bitwa pod Verdun była 21-02-1916 i było to <?php echo round($verdun / $dzielnikdni, 0) ?> dni temu </p>

    <p class="verdun" > Bitwa pod Verdun była 21-02-1916 i było to <?php print date_diff($teraz_obj, $verdun_obj)->format("%a") ?> dni temu </p>

</body>
</html>