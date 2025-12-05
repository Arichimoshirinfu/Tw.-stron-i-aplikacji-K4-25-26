<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="wynajem.css">
    <title>Document</title>
</head>
<body>
<div>

    <?php
    $start_obj=date_create("12.01.2025");
    $koniec_obj=date_create("20.02.2025");
    $roznica_obj=date_diff($start_obj, $koniec_obj);

    $cena=85;
    ?>

    <p> Wynajem od: <span class="php"> <?= date("d.m.Y", strtotime("12.01.2025"))?> </span> do <span class="php"> <?php echo date("d.m.Y", strtotime("20.02.2025")) ?>  </span> </p>

    <p> Liczba dni najmu: <span class="php"> <?php echo $roznica_obj->format("%a") ?> </span> </p>

    <p> Cena najmu: <span class="php"> <?= $cena ?> </span> zł (netto/dzień) </p>

    <p> Całkowity koszt najmu: <span class="php"> <?php echo $roznica_obj->format("%a") * $cena * 1.23?> </span> zł (brutto) [VAT=23%] </p>

</div>
</body>
</html>